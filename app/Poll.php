<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];

    protected $hidden = [
        'questions',
    ];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
