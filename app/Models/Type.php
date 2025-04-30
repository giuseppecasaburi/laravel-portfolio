<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;
    protected $fillable = ["name", "color"];

    public function project() {
        return $this->belongsToMany(Project::class);
    }
}
