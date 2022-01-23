<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert(array(
            //question 1 choices
            0 => 
            array (
                'question_id' => 1,
                'is_correct' => 0,
                'choice' => 'Avoid everything and go with your friends' 
            ),
            1 => 
            array (
                'question_id' => 1,
                'is_correct' => 1,
                'choice' => 'Go and talk with the person that started the rumors' 
            ),
            2 => 
            array (
                'question_id' => 1,
                'is_correct' => 0,
                'choice' => 'Go and talk with the teacher' 
            ),
            //question 2 choices
            3 => 
            array (
                'question_id' => 2,
                'is_correct' => 0,
                'choice' => 'Empathy' 
            ),
            4 => 
            array (
                'question_id' => 2,
                'is_correct' => 0,
                'choice' => 'Curiosity' 
            ),
            5 => 
            array (
                'question_id' => 2,
                'is_correct' => 1,
                'choice' => 'Perseverance' 
            ),
             //question 3 choices
            6 => 
            array (
                'question_id' => 3,
                'is_correct' => 0,
                'choice' => 'Go and help her' 
            ),
            7 => 
            array (
                'question_id' => 3,
                'is_correct' => 0,
                'choice' => 'Go for a policeman and ask him to help' 
            ),
            8 => 
            array (
                'question_id' => 3,
                'is_correct' => 1,
                'choice' => 'Keep walking ahead' 
            ), 
            //question 4 choices  
            9 => 
            array (
                'question_id' => 4,
                'is_correct' => 1,
                'choice' => 'Depends on the situation' 
            ),
            10 => 
            array (
                'question_id' => 4,
                'is_correct' => 0,
                'choice' => 'Positive' 
            ),
            11 => 
            array (
                'question_id' => 4,
                'is_correct' => 0,
                'choice' => 'Negative' 
            ),
            //question 5 choices 
            12 => 
            array (
                'question_id' => 5,
                'is_correct' => 0,
                'choice' => 'Say no thanks' 
            ),
            13 => 
            array (
                'question_id' => 5,
                'is_correct' => 1,
                'choice' => 'Drink it until it is finished' 
            ),
            14 => 
            array (
                'question_id' => 5,
                'is_correct' => 0,
                'choice' => 'Ignore him and get angry at him' 
            ),
             //question 6 choices
            15 => 
            array (
                'question_id' => 6,
                'is_correct' => 1,
                'choice' => 'Go and talk with the person next to you' 
            ),
            16 => 
            array (
                'question_id' => 6,
                'is_correct' => 0,
                'choice' => 'Wait until someone comes over you' 
            ),
            17 => 
            array (
                'question_id' => 6,
                'is_correct' => 0,
                'choice' => 'Not talk to anyone' 
            ), 
            //question 7 choices
            18 => 
            array (
                'question_id' => 7,
                'is_correct' => 0,
                'choice' => 'Go out with your close friends to eat' 
            ),
            19 => 
            array (
                'question_id' => 7,
                'is_correct' => 1,
                'choice' => 'Go to a social club and meet more people' 
            ),
            20 => 
            array (
                'question_id' => 7,
                'is_correct' => 0,
                'choice' => 'Invite one of your friends to your house' 
            ), 
            //question 8 choices
            21 => 
            array (
                'question_id' => 8,
                'is_correct' => 1,
                'choice' => 'I like both equally' 
            ), 
            22 => 
            array (
                'question_id' => 8,
                'is_correct' => 0,
                'choice' => 'I like both equally' 
            ),
            23 => 
            array (
                'question_id' => 8,
                'is_correct' => 0,
                'choice' => 'I like my Mom the most' 
            )
        )) ; 
    }
}
