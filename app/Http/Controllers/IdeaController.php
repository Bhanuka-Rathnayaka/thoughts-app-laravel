<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){

        //<----------------idea save to database------------------------->

        // $idea = new Idea([
        //     'comment'=>request()->get('idea','')
        // ]);

        // $idea->save();

                                    //or

        $idea = Idea::create(
            ['comment'=>"Hello world"]
        );

        $idea->save();


        return redirect()->route('dashboard'); //or return redirect(url('/dashboard'))


        //<--------------------------------------->


    }
}
