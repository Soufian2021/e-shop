<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{

    public function index()
    {
        //dd('index');
        return view('orders.index')->with('orders', Order::all());
        //return view('admin.users.index')->with('users', User::paginate(5));
    }
    public function edit($id)
    {
        
        return view('orders.edit')->with(['order' => Order::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $order = Order::find($id);
        // $order->statuts->sync($request->statuts);
        // $order->statuts=$request;
        // Order::find($statuts)=$order->statuts;
        
        // $order->roles()->sync($request->roles);
// 
        return redirect()->route('admin.orders.index')->with('success', $order->statuts . ' has been updated.');
    }
}
