<?php

namespace App\Http\Controllers;

use Auth\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.home');
        }
        else{
            $data = product::paginate(4);
            $user = auth()->user();
            $count = cart::where('phone',$user->phone)->count();
            return view('user.home', compact('data','count'));
        }
    }
    
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = product::paginate(4);
            return view('user.home', compact('data'));
        }
    }

    public function products(){
        $user = auth()->user();
        $data = product::all();
        $count = cart::where('phone',$user->phone)->count();
        return view('user.allproducts', compact('data','count'));
    }

    public function addcart($id){
        if(Auth::id()){
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = 1;
            $cart->save();

            return redirect()->back()->with('message', 'Selected product added to cart successfully');
        }
        else{
            return redirect('login');
        }
    }
    public function showcart(){
        $user = auth()->user();
        $cart = cart::where('phone',$user->phone)->get();
        $count = cart::where('phone',$user->phone)->count();$total = 0;
        foreach ($cart as $price) {
            $total += $price->price;
        }
        return view('user.cart', compact('cart','count','total'));
    }
    public function delete($id){
        $data = cart::find($id);
        $data->delete();
        return redirect()->back()->with('message','This Product deleted successfully');
    }
    public function confirmorder(Request $request){
        $user=auth()->user();
        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;
        foreach($request->productname as $key=>$productname)
        {
            $order=new order;
            $order->title=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];
            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;
            $order->status="Order Confirmed";

            $order->save();

        }
        DB::table('carts')->where('phone',$phone)->delete();
        return redirect()->back()->with('message','Order confirmed successfully');
    }
    public function order(){
        $user = auth()->user();
        $orders = order::where('phone',$user->phone)->get();
        $count = cart::where('phone',$user->phone)->count();

        return view('user.orders', compact('orders','count'));
         
    }
    public function productdetail($id){
        $user = auth()->user();
        $product = product::find($id);
        if(Auth::id()){
            $count = cart::where('phone', $user->phone)->count();
            return view('user.productdetail', compact('product','count'));
        }
        return view('user.productdetail',compact('product'));
    }
    public function cancelorder($id){
        $order=order::find($id);
        $order->status = "Order Cancelled";
        $order->order_status = false;
        $order->save();
        return redirect()->back()->with('message','Order cancelled successfully');
    }
}
