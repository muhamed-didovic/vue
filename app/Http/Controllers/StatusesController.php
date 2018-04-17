<?php

namespace App\Http\Controllers;

use App\Status;
use App\User;
use Illuminate\Http\Request;

/**
 * Class StatusesController
 *
 * @package \App\Http\Controllers
 */
class StatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Status::with('user')->latest()->get();
        return response()->json([
            'message' => 'Statuses',
            'statuses' => Status::with('user')->latest()->get()
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, ['body' => 'required']);
        //create the status
        $status = User::find(1)
            ->statuses()
            ->create($request->only(['body']));
        //return the status and the user
        return $status->load('user');
        return response()->json([
            'message' => 'Status Created!',
            'status' => $status->load('user')
        ]);
        
    }
    
}