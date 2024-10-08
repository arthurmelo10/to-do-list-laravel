<?php

namespace ToDo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use User\Models\User;

class ToDo extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'todos';

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
