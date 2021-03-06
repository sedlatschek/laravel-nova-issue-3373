<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function somethings()
    {
        return $this->hasMany(Something::class);
    }
}
