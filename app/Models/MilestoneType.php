<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilestoneType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description' ];

    public function milestones()
    {
        return $this->hasMany(Milestone::class);
    }
}
