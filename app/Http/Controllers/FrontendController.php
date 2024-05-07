<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Log;

class FrontendController extends Controller
{
    //home
    function home(){
        $banners = Banner::where('status', 1)->get();
        $categorys = Category::where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        return view('frontend.index',[
            'banners'=>$banners,
            'categorys'=>$categorys,
            'products'=>$products,
        ]);
    }

    // product_details
    function product_details($slug){
        $products = Product::where('slug', $slug)->get();
        $attributes = 0;
        return view('frontend.product_details',[
            'products'=>$products,
            'attributes'=>$attributes,
        ]);
    }
    // getProductDetails
    public function getProductDetails(Request $request)
    {
        $attribute_id = $request->input('attribute_id');
        $inventoryId = $request->input('inventorie_id');
        $color = $request->input('color');

        if($color){
            $productDetails = Attribute::where('inventorie_id', $inventoryId)
            ->where('color_id', $color)
            ->first();
        }elseif($attribute_id){
            $productDetails = Attribute::where('inventorie_id', $inventoryId)
            ->where('id', $attribute_id)
            ->first();
        }

        if ($productDetails) {
            return response()->json([
                'price' => $productDetails->price,
                'sell_price' => $productDetails->sell_price,
                'quantity' => $productDetails->quantity,
                'image' => $productDetails->image,
            ]);
        } else {
            return response()->json(['error' => 'Product details not found.'], 404);
        }
    }


    // category_details
    function category_show($category){
        $products = Product::where('category_id', $category)->with('rel_to_inventorie')->get();
        return view('frontend.category_product',[
            'products'=>$products,
        ]);
    }
}
