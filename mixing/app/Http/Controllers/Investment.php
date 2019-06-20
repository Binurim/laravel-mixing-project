<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FinanceInstitute;

class Investment extends Controller
{
   public function index(){
       return view('investment/index');
   }
   public function create(){
      // dd(FinanceInstitute::all());
       $institutes=FinanceInstitute::all();


       $institutes=FinanceInstitute::select('id','institute_name')->get();
       $institutesArray=[];
       foreach($institutes as $institute){
           $institutesArray[$institute->id]= $institute->$institute_name;
       }
    return view('investment/create');
}

   
}
