<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';

    /**
     * Get the answers of a question
     */
    public function answers()
    {
        return $this->hasMany(Choice::class);
    }
}
