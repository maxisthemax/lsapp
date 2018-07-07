<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'welcome to laravel';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about()
    {
        $about = 'about us';
        return view('pages.about')->with('about',$about);
    }  
    public function services()
    {
        $data = array(
            'title'=>'services',
            'services'=>['lala land','123','hello']
        );
        return view('pages.services')->with($data);
    }        
}
