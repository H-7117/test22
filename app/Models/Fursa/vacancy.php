<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class vacancy extends Model
{
    use HasFactory;
    protected $fillable = ['jobs_id','number_of_applicants','jobState'];

    public function job(): BelongsTo
    {
        return $this->belongsTo(job::class,'jobs_id');
    }
}
