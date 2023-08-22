<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = category::all();
        return view('admin.category', compact('data'));

    }
    public function add_category(Request $request)
    {
        $data=new Category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');

    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');

    }
    public function view_product()

    {
        $category=category::all();
        return view('admin.product',compact('category'));

    }

    public function add_product(Request $request)
    {
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;
        $product->discount_price=$request->discount_price;

        $image=$request->image;
        $imageName=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imageName);
        $product->image=$imageName;
        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');

    }


    public function all_product()
    {
        $p= product::all();
        return view('admin.allProduct',compact('p'));
    }
    public function delete_product($id)
    {
        $p=product::find($id);
        $p->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }

    public function update_product($id)
    {
        $p=product::find($id);
        $cat=category::all();
        return view('admin.update_product',compact('p','cat'));
        //
        // $p->delete();
        // return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function update_product_done(Request $request, $id)
    {
        $p=product::find($id);
        $i=$p->image;



        $p->title=$request->title;
        $p->description=$request->description;
        $p->price=$request->price;
        $p->discount_price=$request->discount_price;
        $p->category=$request->category;
        $p->quantity=$request->quantity;

        $img=$request->image;

        if(is_null($img)){

            // echo('hi');
            // $p->$image=$i;
       }
       else{
        $imageName=time().'.'.$img->getClientOriginalExtension();
        $request->image->move('product', $imageName);
        $p->image=$imageName;

       }

        $p->save();

        return redirect()->back()->with('message','Product update Successfully');;
    }
    public function view_orders()
    {
        $o= order::all();
        return view('admin.view_orders',compact('o'));
    }





}
