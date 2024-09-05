<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchUp extends Model
{
    use HasFactory;

    public $with = [
        'contracts'
    ];

    public function contracts() {
        return $this->hasMany(Contract::class, 'match_id');
    }
}
