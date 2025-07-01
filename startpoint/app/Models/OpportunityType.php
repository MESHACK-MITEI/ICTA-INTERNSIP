<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpportunityType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description',
        'is_active',
        'created_by',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public $timestamps = true;
}
