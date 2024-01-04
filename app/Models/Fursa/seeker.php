<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seeker extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','userName','Specialization','PositionTitle'];
}
