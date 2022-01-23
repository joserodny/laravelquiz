<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;


class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Display question
    public function index()
    {
      
        // $questions = Question::inRandomOrder()->whereNotIn('id', $except)->limit(1)->get();
        // $choices = $questions->choice()->orderByRaw("RAND()")->get();
        
        // $questions = Question::inRandomOrder()
        // ->join('choices', 'questions.id', '=',  'choices.question_id')
        // ->limit(1)
        // ->get();
        $questions = Question::with('answers')->inRandomOrder()->limit(8)->get();
       
        return view('welcome', ['questions' => $questions]);
    }


    /**
     * 
     * 
     * 
     * 
     */
    //Display choices
    // public function getChoices()
    // {
    //     $questions = Question::inRandomOrder()->limit(1)->get();
    //     return view('welcome', ['question' => $questions]);
    // }
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        dd(request()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
