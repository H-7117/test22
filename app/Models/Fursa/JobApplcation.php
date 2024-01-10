<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplcation extends Model
{
    use HasFactory;
    protected $fillable = ['jobs_id','name','phone','personalEmail','links','cv'];

    public function job()
    {
        return $this->belongsTo(job::class,'jobs_id');
    }
}
