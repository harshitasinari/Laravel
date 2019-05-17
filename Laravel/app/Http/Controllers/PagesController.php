<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title="Welcome to Home Page";
    	//return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {   $title="About Us";
    	//return view('pages.about',compact('title'));
        return view('pages.about')->with('title',$title);
    }
    public function services()
    {
       $data = array('title' =>'services' ,
           'services'=> ['web desiging','development']
        );
    	//return view('pages.services',compact('title'));
        return view('pages.services')->with($data);
    }
}