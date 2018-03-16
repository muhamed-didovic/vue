<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function modal()
    {
        return view('modal');
    }
    
    public function todo()
    {
        return view('todo');
    }
    
    public function tabs()
    {
        return view('tabs');
    }
    
    public function coupon()
    {
        return view('coupon');
    }
    
    public function slots()
    {
        return view('slots');
    }
    
    public function inline_templates()
    {
        return view('inline_templates');
    }
    
    public function forms()
    {
        return view('forms');
    }
    
    public function schemaForms()
    {
        return view('schema_forms');
    }
    
    public function shared()
    {
        return view('shared');
    }
}
