<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\client;
use Illuminate\Http\Request;
use Image;

class BookController extends Controller
{
    //
    public function home(){
        $data=book::all();
        $show=client::all();
        return view('welcome',compact('data','show'));
    }
    public function index(){
        return view('addbook');
    }
    public function add(Request $req){
        $store=new book();
        $store->name=$req->b_name;
        $store->description=$req->b_description;
        $store->price=$req->b_price;
        $store->Author_name=$req->authod;
        if ($req->file('book_image')) {
            $image = $req->file('book_image');
            $image_ext = $req->b_name.'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/img/'.$image_ext);
            $store->image = $image_ext;
        }
        $store->save();
        return redirect()->to('Book-Table');
    }
    public function all(){
        $show=book::all();
        return view('allbook',compact('show'));
    }
    // edit
    public function edit($id){
        $show=book::find($id);
        return view('edit',compact('show'));
    }
    public function update(Request $req){
        $store=book::find($req->id);
        $store->name=$req->b_name;
        $store->description=$req->b_description;
        $store->price=$req->b_price;
        $store->Author_name=$req->authod;
        if ($req->file('book_image')) {
            $image = $req->file('book_image');
            $image_ext = $req->b_name.'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/img/'.$image_ext);
            $store->image = $image_ext;
        }
        $store->save();
        return redirect()->to('Book-Table');
    }
    public function del($id){
        $show=book::find($id);
        $show->delete();
        return redirect()->back();
    }

}
