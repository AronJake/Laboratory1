<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = " Welcome to Ezlang Laboratory#1!";
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = " About";
        return view('pages.about', compact('title'));
    }
    public function services(){
        $data = array(
            'title' => 'Services' ,
            'services' =>['Web Design','Programming','SEO']
        );
        
        return view('pages.services')->with($data);
    }
}