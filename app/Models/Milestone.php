<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'status', 'milestone_type_id'];

    public function milestoneType()
    {
        return $this->belongsTo(MilestoneType::class);
    }
}
