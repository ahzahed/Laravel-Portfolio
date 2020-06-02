<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Course;
use App\Project;
use App\Review;
use App\Service;
use App\VisitorModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){

        $TotalContact= Contact::count();
        $TotalCourse=Course::count();
        $TotalProject=Project::count();
        $TotalReview=Review::count();
        $TotalService=Service::count();
        $TotalVisitor=VisitorModel::count();

         return view('admin',[
             'TotalContact'=>$TotalContact,
             'TotalCourse'=>$TotalCourse,
             'TotalProject' =>$TotalProject,
             'TotalReview'=>$TotalReview,
             'TotalService'=>$TotalService,
             'TotalVisitor' =>$TotalVisitor
         ]);
     }

}
