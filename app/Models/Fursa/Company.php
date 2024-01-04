<?php

namespace App\Models\Fursa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Fursa\Depertment;
class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'EmailAddress',
        'country',
        'city',
        'aboutCompany',
        'logo'];

        public function departments()
        {
            return $this->hasMany(Depertment::class,'companies_id');
        }
}
