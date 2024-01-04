<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fursa\Company;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Depertment extends Model
{
    use HasFactory;
    protected $fillable = ['Name','Description','companies_id'];

    public function company()
    {
        
        return $this->belongsTo(Company::class,'companies_id');
    }
    

    public function job()
    {
        
        return $this->hasMany(job::class);
    }
}
