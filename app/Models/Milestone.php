<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    protected $fillable = [
        "contract_id",
        "name",
        "due_date",
        "price"
    ];

    protected $with = [
        'tasks'
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
