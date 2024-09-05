<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "milestone_id",
        "name"
    ];

    public function milestone()
    {
        return $this->belongsTo(Milestone::class);
    }
}
