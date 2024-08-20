<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users = [
            [
                "name"=> "Alex",
                "age"=> "20",
            ],
            [
                "name"=> "Dumminy",
                "age"=> "25",
            ],
            [
                "name"=> "Simon",
                "age"=> "15",
            ]

        ];
        return view(
            "dashboard",
            [
            'usersList'=> $users
            ]
        );

    }
}
