<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramHasExercise extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'program_has_exercise_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'program_id',
        'week_day_id',
        'exercise_id'
    ];
}
