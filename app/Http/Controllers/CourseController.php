<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    function CoursesIndex(){
        return view('admin.course');
        }



      function getCoursesData(){
          $result=json_encode(Course::orderBy('id','desc')->get());
          return $result;
      }


      function getCoursesDetails(Request $req){
      $id= $req->input('id');
      $result=json_encode(Course::where('id','=',$id)->get());
      return $result;
    }


    function CoursesDelete(Request $req){
         $id= $req->input('id');
         $result= Course::where('id','=',$id)->delete();
         if($result==true){
           return 1;
         }
         else{
             return 0;
         }
    }




    function CoursesUpdate(Request $req){
         $id= $req->input('id');
         $course_name= $req->input('course_name');
         $course_des = $req->input('course_des');
         $course_fee= $req->input('course_fee');
         $course_totalenroll = $req->input('course_totalenroll');
         $course_totalclass= $req->input('course_totalclass');
         $course_link= $req->input('course_link');
         $course_img = $req->input('course_img');

         $result= Course::where('id','=',$id)->update([
             'course_name'=>$course_name,
             'course_des'=>$course_des,
             'course_fee'=>$course_fee,
             'course_totalenroll'=>$course_totalenroll,
              'course_totalclass'=>$course_totalclass,
             'course_link'=>$course_link,
             'course_img'=>$course_img,
         ]);

         if($result==true){
           return 1;
         }
         else{
          return 0;
         }
    }


    function CoursesAdd(Request $req){
         $course_name= $req->input('course_name');
         $course_des = $req->input('course_des');
         $course_fee= $req->input('course_fee');
         $course_totalenroll = $req->input('course_totalenroll');
         $course_totalclass= $req->input('course_totalclass');
         $course_link= $req->input('course_link');
         $course_img = $req->input('course_img');
         $result= Course::insert([
            'course_name'=>$course_name,
             'course_des'=>$course_des,
             'course_fee'=>$course_fee,
             'course_totalenroll'=>$course_totalenroll,
              'course_totalclass'=>$course_totalclass,
             'course_link'=>$course_link,
             'course_img'=>$course_img,
         ]);

         if($result==true){
           return 1;
         }
         else{
          return 0;
         }
    }

    function CoursePage(){
        $CoursesData= json_decode(Course::orderBy('id','desc')->get());
        return view('course',['CoursesData'=>$CoursesData]);
    }


}
