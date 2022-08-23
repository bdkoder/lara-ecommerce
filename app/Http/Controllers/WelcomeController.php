<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     '0' => [
        //         'name' => 'Shahidul'
        //     ],
        //     '1' => [
        //         'name' => 'Karim'
        //     ],
        // ];
        // // return view('demo', compact('data'));
        // return view('demo', ['data' => $data]);
        return view('frontEnd.home.homeContent');
    }
    public function category(){
          return view('frontEnd.category.categoryContent');
    }
    public function contact(){
          return view('frontEnd.contact');
    }
    public function productDetails(){
          return view('frontEnd.product.productContent');
    }
}
 