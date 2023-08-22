<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('home.userpage');
        }

    }
    public function index()
    {
        $product=Product::paginate(5);
        return view('home.userpage',compact('product'));

    }
    public function view_products()
    {
        $product=Product::paginate(5);

        return view('home.allProducts',compact('product'));

    }
    public function product_details($id){
        $product=product::find($id);

        return view('home.product_details',compact('product'));

    }

    public function add_cart(Request $request,$id){

        if(Auth::id())
        {
            $user=Auth::user();
            $product=product::find($id);
            $cart=new cart;

            $cart->name= $user->name;
            $cart->phone= $user->phone;
            $cart->email= $user->email;
            $cart->address= $user->address;
            $cart->user_id= $user->id;

            $cart->product_title= $product->title;
            $cart->price= $product->price*$request->quantity;
            $cart->image= $product->image;
            $cart->product_id= $product->id;

            $cart->quantity= $request->quantity;

            $cart->save();

            return redirect()->back();

        }
        else{
            return redirect('login');
        }

    }

    public function show_cart(){
        if(!Auth::check()) {
        return redirect('login');

    }
    else{

        $id=Auth::user()->id;
        $cart=cart::where('user_id','=',$id)->get();
        $product=Product::paginate(5);

        if (count($cart) === 0){

            return view('home.allProducts',compact('product'));



        }
        else{
            return view('home.show_cart',compact('cart'));


        }
    }

    }

    public function show_category(){
        $cat=Category::all();

        return view('home.category',compact('cat'));

    }
    public function view_contact(){

        return view('home.view_contact');

    }
    public function view_about(){

        return view('home.view_about');

    }

    public function delete_cart($id)
    {
        $c=cart::find($id);
        $c->delete();
        return redirect()->back();
    }

    public function cash_order()
    {
        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $order = new order;

            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;
            $order->name=$data->name;
            $order->payment_status='COD';
            $order->delivery_status='Processing';

            $order->save();


            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();


        }

        return view('home.thanks');
    }

    public function catProducts($categoy_name)
    {

        $products= Product::where('category',$categoy_name)->get();

        return view('home.catProducts',compact('products'));

    }

}
