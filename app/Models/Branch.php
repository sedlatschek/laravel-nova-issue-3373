<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
