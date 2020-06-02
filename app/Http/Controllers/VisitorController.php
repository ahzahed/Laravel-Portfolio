<?php

namespace App\Http\Controllers;

use App\VisitorModel;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function index(){
        $visitorData = json_decode(VisitorModel::orderBy('id','desc')->take(3)->get());
        return view('admin.visitor',['visitorData'=>$visitorData]);
    }
}
