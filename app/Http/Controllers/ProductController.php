<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title =' this is index page';
        $x =1;
        $phones=[
            'name' => 'ihone14',
            'year' => 2022
        ];
        return view('products.index',compact('title','phones'));
    }
    public function about(){
        return view('products.about');
    }

    public function detail($id){
        return "product's id =". $id;
    }

}
