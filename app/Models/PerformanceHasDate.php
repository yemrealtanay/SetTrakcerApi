<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerformanceHasDate extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'performance_has_date_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'performance_id'
    ];

    protected array $dates = [
        'performance_date'
    ];

    protected $dateFormat = 'Y-m-d H:i:s.u';
}
