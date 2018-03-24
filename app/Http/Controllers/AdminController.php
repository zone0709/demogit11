<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Foods;
class AdminController extends Controller
{
    function getHomePage(){
               $foods = Foods::with('foodType','pageUrl')->paginate(10);
               return view('pages/home',compact('foods'));
           }
    function getEditFood($id,$alias){
        $food = Foods::where([
            'id'=>$id
        ])->first();
        return view('pages/edit-food',compact('food'));
    }
    // function getEditFood(){
    //     return view('pages/edit');
    // }
    
}
