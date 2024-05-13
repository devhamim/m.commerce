<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Billingdetails;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\sms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Str;
use Log;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    //checkout
    function checkout(){
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('frontend.checkout',[
            'cart_data'=> $cart_data,
        ]);
    }

    // order_store
    function order_store(Request $request){
        $request->validate([
            'name' => 'required|max:225',
            'mobile' => 'required|min:11|max:11',
            'address' => 'required|max:225',
            'district' => 'required',
        ]);

            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $items_in_cart = $cart_data;

            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $order_id = Str::random(5).'-'.rand(10000000,99999999);

            Billingdetails::insert([
                'order_id' => $order_id,
                'name' => $request->name,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'district' => $request->district,
                'note' => $request->note,
                'created_at' => Carbon::now(),
            ]);

            Order::insert([
                'order_id' => $order_id,
                'delivery_charge' => $request->delivery_charge,
                'sub_total' => $request->sub_total,
                'total' => $request->sub_total+$request->delivery_charge,
                'created_at' => Carbon::now(),
            ]);
            $quantities = $request->quantity;

            $items_in_cart = $cart_data;

            foreach ($items_in_cart as $key => $itemdata) {
                if(isset($itemdata['item_weight']) && $itemdata['item_weight'] !== null){
                    $productId = $itemdata['item_id'];
                    $attribute_id = $itemdata['item_attribute'];
                    $inventory_id = $itemdata['item_inventory'];

                    if (isset($quantities[$productId])) {
                        $quantity = $quantities[$productId];

                        OrderProduct::create([
                            'order_id' => $order_id,
                            'product_id' => $productId,
                            'quantity' => $quantity,
                            'attribute_id' => $attribute_id,
                            'inventory_id' => $inventory_id,
                            'created_at' => Carbon::now(),
                        ]);

                        Attribute::where('id', $attribute_id)
                            ->decrement('quantity', $quantity);
                    }
                }
                // elseif(isset($itemdata['item_color']) && $itemdata['item_color'] !== null){
                //     $productId = $itemdata['item_id'];
                //     $attribute_id = $itemdata['item_attribute'];
                //     $inventory_id = $itemdata['item_inventory'];

                //     if (isset($quantities[$productId])) {
                //         $quantity = $quantities[$productId];

                //         OrderProduct::create([
                //             'order_id' => $order_id,
                //             'product_id' => $productId,
                //             'quantity' => $quantity,
                //             'attribute_id' => $attribute_id,
                //             'inventory_id' => $inventory_id,
                //             'created_at' => Carbon::now(),
                //         ]);

                //         Attribute::where('id', $attribute_id)
                //             ->decrement('quantity', $quantity);
                //     }
                // }
                else{
                    $productId = $itemdata['item_id'];
                    if (isset($quantities[$productId])) {
                        $quantity = $quantities[$productId];

                        OrderProduct::create([
                            'order_id' => $order_id,
                            'product_id' => $productId,
                            'quantity' => $quantity,
                            'created_at' => Carbon::now(),
                        ]);

                        Product::where('id', $productId)
                            ->decrement('quantity', $quantity);
                    }
                }

            }

    $lastOrder = sms::orderBy('created_at', 'desc')->first();

    if ($lastOrder) {
        $sentMessageCount = $lastOrder->smscount;
    } else {
        $sentMessageCount = 0;
    }

    $smsqApiKey = "RUJ5s4yijCz2HAQKzpMk";
    $smsqSenderId = "8809617618342";
    $smsqMessage = 'Thank you for your order! Your order #'.$order_id.' has been successfully placed.
www.marhabashopbd.com';

    $smsqMessage = urlencode($smsqMessage);
    $smsqMobileNumbers = '+88' .$request->mobile;

    $smsqUrl = "http://139.99.39.237/api/smsapi?api_key=$smsqApiKey&type=text&number=$smsqMobileNumbers&senderid=$smsqSenderId&message=$smsqMessage";

    $response = Http::get($smsqUrl);
    if ($response->successful()) {
        $sentMessageCount++;

        // $smsCost = $sentMessageCount;

        $smscounts = new sms();
        $smscounts->smscount = $sentMessageCount;
        $smscounts->smscost = 0.65;
        $smscounts->smstotal = $sentMessageCount*0.65;
        $smscounts->smsnumber = $request->mobile;
        $smscounts->smsname = $request->name;
        $smscounts->smsmassage = $smsqMessage;
        $smscounts->smsorder = $order_id;
        $smscounts->save();

        Cookie::queue(Cookie::forget('shopping_cart'));

        return redirect()->route('order.success')->withSuccess("Order has been placed successfully");
    } else {
        Log::error("SMSQ API Request failed. Response: " . $response->status());
        return back()->withErrors(['sms_error' => 'Failed to send SMS to customer.']);
    }

            Cookie::queue(Cookie::forget('shopping_cart'));

            return redirect()->route('order.success')->withSuccess("Order has been placed successfully");

        // return redirect('/')->with('success', 'order has been placed successfully');
    }


    // order_success
    function order_success(){
        return view('frontend.order_success');
    }
}
