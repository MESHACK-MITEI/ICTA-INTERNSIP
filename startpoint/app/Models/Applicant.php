<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'email_address',
        'phone_number',
        'cohort',
        'is_active',
        'created_by',
        'password',       // ← add this
    ];
}
