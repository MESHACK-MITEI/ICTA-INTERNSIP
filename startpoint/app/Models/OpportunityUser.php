<?php

// app/Models/OpportunityUser.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpportunityUser extends Model
{
    protected $table = 'opportunity_user'; // 👈 Fix here

    protected $fillable = [
        'user_id',
        'opportunity_id',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'user_id');
    }

    public function opportunity()
    {
        return $this->belongsTo(Opportunity::class);
    }
}
