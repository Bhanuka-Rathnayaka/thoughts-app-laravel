<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        //hardcode to save DB
        $idea = Idea::create(
            ['comment' => "Hello world"]
        );
        $idea->save();

        return view("dashboard", [

            //<--------------------fetched date from db------------------->


            //"ideas"=> Idea::all(),
            'ideas' => Idea::orderBy('created_at', 'desc')->get()
        ]);



    }
}
