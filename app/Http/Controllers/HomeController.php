<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactDetail;
use DB;

class HomeController extends Controller
{
    //

    public function postQuery(Request $request)
    {
      // print_r($request->all());
      // die;
      $submit=$request->all();
      $data['name']=$submit['name'];
       $data['email']=$submit['email'];
       $data['website']=$submit['website'];
        $data['message']=$submit['message'];
      $saveData=DB::table('contactquery')->insert($data);
      return view("contact");
    }
}
