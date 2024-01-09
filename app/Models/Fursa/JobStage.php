<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobStage extends Model
{
    use HasFactory;
    protected $fillable = ['jobs_id','name','round'];
}
