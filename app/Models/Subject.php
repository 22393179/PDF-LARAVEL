<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=['name_subject', 'total_hours', 'objetive'];

    //establecer relacion con units

    public function units():\illuminate\Data\base\Relations\HasMany
    {
        return $this->hasMany(unit::class);
    }
}
