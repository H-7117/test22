<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobStage extends Model
{
    use HasFactory;
    protected $fillable = ['jobs_id','name','round'];

    public function job()
    {
        return $this->belongsTo(job::class,'jobs_id');
    }
}
