<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'timeEntryId',
        'userId',
        'projectId',
        'taskId',
        'dateUtc',
        'dateEnteredUtc',
        'duration',
        'description',
        'status'
    ];
}
