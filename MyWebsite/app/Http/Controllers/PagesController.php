<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        $title = 'Welcome';
        return view('pages.home')->with('title',$title);
    }
    public function about(){
        $data = array(
            'name' => 'Name:',
            'address' => 'Address:',
            'age' => 'Age:',
            'email' => 'Email:',
            'school' => 'Name of School:',
            'year' => 'Year Level:',
            'course' => 'Course:'
        );

        return view('pages.about')->with($data);
    }
    public function comment(){
        $title = 'Comment Anything';
        return view('pages.comment')->with('title',$title);
    }
}
