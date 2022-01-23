<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(array(
            0 => 
            array (
                'question' => 'You went to a party last night and when you
                arrived to school the next day, everybody is
                talking about something you didn’t do. What
                will you do?' 
            ),
            1 => 
            array (
                'question' => 'What quality do you excel the most?' 
            ),
            2 => 
            array (
                'question' => 'You are walking down the street when you see
                an old lady trying to cross, what will you do?'
            ),
            3 => 
            array (
                'question' => 'You had a very difficult day at school, you will
                maintain a ____ attitude' 
            ),
            4 => 
            array (
               'question' => 'You are at a party and a friend of yours comes
               over and offers you a drink, what do you do?'
            ),
            5 => 
            array (
               'question' => 'You just started in a new school, you will...'
            ),
            6 => 
            array (
               'question' => 'In a typical Friday, you would like to..' 
            ),
            7 => 
            array (
                'question' => 'Your relationship with your parents is..'
            )
            
        )) ; 

    }
}
