<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Milestone
 *
 * @property-read \App\Models\MilestoneType|null $milestoneType
 * @method static \Database\Factories\MilestoneFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Milestone query()
 * @mixin \Eloquent
 */
class Milestone extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'date', 'status', 'milestone_type_id'];

    public function milestoneType()
    {
        return $this->belongsTo(MilestoneType::class);
    }
}
