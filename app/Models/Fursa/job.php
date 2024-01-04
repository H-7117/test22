<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\hasOne;


class job extends Model
{
    use HasFactory;
    protected $fillable = ['Title','jobDescription','jobType','Location','depertments_id'];

    public function departments()
    {
        return $this->belongsTo(Depertment::class,'depertments_id');
    }

    public function vacancy(): HasOne
    {
        return $this->hasOne(vacancy::class);
    }
}
