<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Performance extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'performance_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'program_has_exercise_id',
        'weight_type_id',
        'weight',
        'set',
        'repetition'
    ];
}
