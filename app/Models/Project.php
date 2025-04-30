<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ["name", "client", "project_start", "project_end", "description"];
}
