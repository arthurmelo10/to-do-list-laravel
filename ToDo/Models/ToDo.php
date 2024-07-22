<?php

namespace ToDo\Models;

use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class ToDo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'completed',
        'user_id'
    ];

    protected $rules = [
        'title' => 'required, string',
        'description' => 'required, string',
        'completed' => 'required, boolean',
        'user_id' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
