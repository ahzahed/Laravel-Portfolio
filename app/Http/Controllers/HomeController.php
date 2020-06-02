<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Course;
use App\Project;
use App\Review;
use App\Service;
use App\VisitorModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $UserIP=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);

        $servicesData = json_decode(Service::all());
        $CoursesData= json_decode(Course::orderBy('id','desc')->limit(6)->get());
        $ProjectData=json_decode(Project::orderBy('id','desc')->limit(10)->get());
        $ReviewData= json_decode( Review::all());

        return view('home',[
            'servicesData'=>$servicesData,
            'CoursesData'=>$CoursesData,
            'ProjectData'=>$ProjectData,
            'ReviewData'=>$ReviewData,
        ]);
    }

    function ContactSend(Request $request){
        $contact_name=$request->input('contact_name');
        $contact_mobile= $request->input('contact_mobile');
        $contact_email=$request->input('contact_email');
        $contact_msg=$request->input('contact_msg');
        $result= Contact::insert([
            'contact_name'=> $contact_name,
            'contact_mobile'=> $contact_mobile,
            'contact_email'=>$contact_email,
            'contact_msg'=>$contact_msg
        ]);

       if($result==true){

            return 1;
       }
       else{

           return 0;
       }

    }

}
