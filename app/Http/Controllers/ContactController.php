<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function ContactIndex(){
        return view('admin.contact');
        }

         function getContactData(){
          $result=json_encode(Contact::orderBy('id','desc')->get());
          return $result;
      }

      function ContactDelete(Request $req){
         $id= $req->input('id');
         $result=Contact::where('id','=',$id)->delete();
         if($result==true){
           return 1;
         }
         else{
             return 0;
         }
    }
    function ContactPage(){

        return view('contact_page');
    }
}
