<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        "service_id",
        "price",
        "deliverable"
    ];

    protected $with = [
        'milestones'
    ];

    public function match()
    {
        return $this->belongsTo(MatchUp::class);
    }

    public function milestones()
    {
        return $this->hasMany(Milestone::class);
    }
}
