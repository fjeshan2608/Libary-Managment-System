<?php

namespace App\Http\Controllers;
use App\Models\client;
use Illuminate\Http\Request;

use Image;

class ClientController extends Controller
{
    //
    public function index(){
        return view('addclient');
    }
    public function add(Request $req){
        $store=new client();
        $store->name=$req->c_name;
        $store->profession=$req->c_description;
        $store->description=$req->c_profession;
        if ($req->file('client_image')) {
            $image = $req->file('client_image');
            $image_ext = $req->c_name.'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/img/'.$image_ext);
            $store->image = $image_ext;
        }
        $store->save();
        return redirect()->back();
    }
}
