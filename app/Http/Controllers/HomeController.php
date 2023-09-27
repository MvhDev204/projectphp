<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $viewdata = [];
         $viewdata  ['title'] = "Home page - Zay shop ";
         $viewdata ['backgrouk'] = '';
        //  $viewdata ['img'] = '';
         return view('home.index') -> with('viewdata',$viewdata);
    }
    public function about() {
        $viewdata = [];
         $viewdata  ['title'] = "About page - Zay shop ";
          $viewdata ['backgrouk'] = '';
        //  $viewdata ['img'] = '';
    return view('home.about') -> with('viewdata',$viewdata);
    }
}
