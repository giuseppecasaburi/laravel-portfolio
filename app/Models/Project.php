<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $fillable = ["name", "client", "project_start", "project_end", "description"];
    use SoftDeletes;

    public function types () {
        return $this->belongsToMany(Type::class);
    }
}
