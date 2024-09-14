<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {



        return view("dashboard", [

            //<--------------------fetched date from db------------------->


            //"ideas"=> Idea::all(),
            'ideas' => Idea::orderBy('created_at', 'desc')->paginate(5)
        ]);



    }
}
