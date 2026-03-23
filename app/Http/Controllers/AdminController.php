<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function checkLogin(Request $request)
    {
        if($request->email=="admin@gmail.com" && $request->password=="123456")
        {
            session(['admin'=>true]);
            return redirect('/admin/addtocart');
        }

        return back()->with('error','Invalid Login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function addtocart()
    {
        return view('admin.addtocart');
    }

    public function storeProduct(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/images'), $imageName);

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'image'=>$imageName
        ]);

        return redirect('/admin/dashboard')->with('success','Product Added Successfully');
    }

}