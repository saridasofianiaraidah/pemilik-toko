<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    public function transactions()
{
    return $this->hasMany(Agent::class);
}
protected $fillable = ['nama', 'email', 'telepon'];
}