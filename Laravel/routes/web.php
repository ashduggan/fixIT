<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\QuestionMaxHeap;
use App\Question;

//GET routes
Route::get('/', function () {
    $heap = new QuestionMaxHeap();
    $questions = Question::all();
    foreach($questions as $question){
        $heap->insert($question);
    }
    $questions = array();
    $questionURLs = array();
    for($i = 0; $i < 5; $i++){
        try{
            $questions[$i] = $heap->extract();
        } catch (Exception $e){
            break;
        }
        $questionURLs[$i] = '/questions/'.$questions[$i]->id;
    }
    return view('home', [
        "questions" => $questions,
        "questionURLs" => $questionURLs
    ]);
});

Route::get('/support', function(){
    return view('support');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/submit', function(){
    return view('submit');
});

//POST routes
Route::post('/answered/{id}', function($id){
    $question = Question::find($id);
    if($question != null){
        $question->popularity += 1;
        $question->save();
    }
    return redirect('/');
});

Route::resource("questions" , "QuestionController", ["only" => 
    ["show"]
]);