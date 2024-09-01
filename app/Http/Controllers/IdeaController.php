<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {
        //<----------------Validate before submit------------------------->


        request()->validate([
            'idea'=>'required|min:5|max:255'
        ]);




        //<-------------------------------------------------------------->



        //<----------------idea save to database------------------------->

        // $idea = new Idea([
        //     'comment'=>request()->get('idea','')
        // ]);

        // $idea->save();

                                         //or

        $idea = Idea::create(['comment' => request()->get('idea', '')]);

        //<--------------------------------------->

        return redirect()->route('dashboard')->with('success', 'Idea Created Succefully!'); //or return redirect(url('/dashboard'))
    }
}
