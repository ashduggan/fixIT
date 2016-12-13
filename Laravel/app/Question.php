<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //Settings
    protected $table = 'questions';
    protected $primaryKey = 'id';
    public $timestamps = true;

    //Relationships
    public function leftChild(){
        //POST: returns the left child of this question (which is a question)
        return $this->belongsTo('App\Question', 'leftChildId', 'id');
    }

    public function rightChild(){
        //POST: returns the right child of this question (which is a question)
        return $this->belongsTo('App\Question', 'rightChildId', 'id');
    }
}
