<?php

namespace App\Http\Controllers;

use Auth\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;

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
        $data = product::all();
        return view('user.allproducts', compact('data'));
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
        $count = cart::where('phone',$user->phone)->count();
        return view('user.cart', compact('cart','count'));
    }
    public function delete($id){
        $data = cart::find($id);
        $data->delete();
        return redirect()->back()->with('message','This Product deleted successfully');
    }
}
