<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'question', 'poll_id',
    ];

    public function poll()
    {
        return $this->belongsTo('App\Poll');
    }
}
