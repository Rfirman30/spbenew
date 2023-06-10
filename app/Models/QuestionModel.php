<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the answers for the QuestionModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answer()
    {
        return $this->hasMany(AnswerModel::class, 'question_id', 'id');
    }
}
