<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    public function product ()
    {
        $data = product::all();
        return view('admin.product', compact('data'));
    }
    public function addproductview ()
    {
        return view('admin.addproductview');
    }
    public function orders ()
    {
        return view('admin.orders');
    }

    public function addproduct(Request $request){
        $data = new product;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->desc;
        $data->quantity = $request->quantity;
        $data->save();
        
        return redirect()->back()->with('message','Product added succesfully.');
    }
    
    public function deleteproduct($id){
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Selected product deleted successfully');
    }

    public function updateview($id){
        $data = product::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function updateproduct(Request $request, $id){
        $data = product::find($id);
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->desc;
        $data->quantity = $request->quantity;
        $data->save();
        return redirect()->back()->with('message','Product updated successfully');
    }
    public function showorder ()
    {
        $order = order::where('order_status', null)->get();
        return view('admin.showorder', compact('order'));
    }
    public function updatestatus($id){
        $order = order::find($id);
        $order->status = "Delivered";
        $order->order_status = true;
        $order->save();

        return redirect()->back();
    }
    public function cancelstatus($id){
        $order = order::find($id);
        $order->status = "Order Cancelled";
        $order->order_status = false;
        $order->save();

        return redirect()->back();
    }
}
