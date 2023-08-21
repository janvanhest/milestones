<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MilestoneType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Milestone> $milestones
 * @property-read int|null $milestones_count
 * @method static \Database\Factories\MilestoneTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MilestoneType query()
 * @mixin \Eloquent
 */
class MilestoneType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description' ];

    public function milestones()
    {
        return $this->hasMany(Milestone::class);
    }
}
