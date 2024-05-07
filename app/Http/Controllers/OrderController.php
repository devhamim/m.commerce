<?php

namespace App\Http\Controllers;

use App\Models\Billingdetails;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('rel_to_billing')->orderBy('created_at', 'desc')->get();
        return view('backend.order.listorder',[
            'orders'=>$orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orders = Order::find($id);
        $order_id = $orders->order_id;

        Billingdetails::where('order_id', $order_id)->delete();
        OrderProduct::where('order_id', $order_id)->delete();
        $orders->delete();

        return back()->with('warning', 'Delete Successfully');
    }
}
