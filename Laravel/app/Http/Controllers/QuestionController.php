<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index(){
        //POST: indexes all the questions, or paginates them if there are too many

    }

    public function create(){
        //POST: the form for the question creation
    }

    public function store(){
        //POST: creates a new question
    }

    public function show($id){
        //POST: shows a specific question
        $question = Question::find($id);
        if($question != null){
            return view('question', ["question" => $question]);
        }
        else {
            return view('support');
        }
    }

    public function edit(){
        //POST: shows a form to edit a question
    }

    public function update(){
        //POST: updates an edited question
    }

    public function destroy(){
        //POST: deletes a question
    }
}
