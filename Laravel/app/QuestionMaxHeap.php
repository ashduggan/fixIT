<?php

namespace App;

use App\MaxHeap;

class QuestionMaxHeap extends MaxHeap {

    public function compare($question1, $question2){
        if($question1 === $question2){
            return 0;
        }

        return ($question1->popularity > $question2->popularity ? 1 : -1);
    }
}