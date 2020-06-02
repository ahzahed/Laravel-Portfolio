<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(){
        return view('admin.service');
    }
    function getServiceData(){
        $result=json_encode(Service::orderBy('id','desc')->get());
        return $result;
    }

    function getServiceDetails(Request $req){
      $id= $req->input('id');
      $result=json_encode(Service::where('id','=',$id)->get());
      return $result;
    }



    function ServiceDelete(Request $req){
         $id= $req->input('id');
         $result= Service::where('id','=',$id)->delete();

         if($result==true){
           return 1;
         }
         else{
             return 0;
         }
    }

    function ServiceUpdate(Request $req){
         $id= $req->input('id');
         $name= $req->input('name');
         $des= $req->input('des');
         $img= $req->input('img');
         $result= Service::where('id','=',$id)->update(['service_name'=>$name,'service_des'=>$des,'service_img'=>$img]);

         if($result==true){
           return 1;
         }
         else{
          return 0;
         }
    }

    function ServiceAdd(Request $req){
         $name= $req->input('name');
         $des= $req->input('des');
         $img= $req->input('img');
         $result= Service::insert(['service_name'=>$name,'service_des'=>$des,'service_img'=>$img]);

         if($result==true){
           return 1;
         }
         else{
          return 0;
         }
    }
}
