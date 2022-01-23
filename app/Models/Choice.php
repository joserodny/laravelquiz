<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $table = 'choices';

    protected $fillable = [
        'choice',
    ];
  
    /**
     * Get the question of an answer
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

