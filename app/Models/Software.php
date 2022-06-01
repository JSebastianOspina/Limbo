<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    public function softwareLicenses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SoftwareLicense::class);
    }

    public function hardware()
    {
        return $this->belongsToMany(Hardware::class)->withPivot(['installation_date', 'remove_date', 'renovation_date']);
    }
}
