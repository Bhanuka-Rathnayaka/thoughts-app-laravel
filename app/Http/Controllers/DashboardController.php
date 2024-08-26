<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
         $idea = new Idea(['comment'=>"Hello World"]);
         $idea->save();



        return view("dashboard",[
            //"ideas"=> Idea::all(),
            'ideas'=>Idea::orderBy('created_at','desc')->get()
        ]);



    }

}
