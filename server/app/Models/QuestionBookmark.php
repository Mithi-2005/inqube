<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionBookmark extends Model
{
    protected $primaryKey = 'bookmark_id';

    protected $fillable = ['user_id', 'question_id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function question() {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
