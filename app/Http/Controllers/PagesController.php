<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'W E L C O M E';
        return view('pages.index')->with('subtext', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'heading' => 'Services',
            'services' => ['Web Design', 'Data Science', 'Fashion']
        );
        return view('pages.services')->with($data);
    }
}
