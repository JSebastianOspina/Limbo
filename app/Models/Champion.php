<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    use HasFactory;

    public function softwareLicenses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(SoftwareLicense::class)->withPivot(['installation_date', 'remove_date', 'renovation_date']);
    }

    public function hardware(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Hardware::class)->withPivot(['assignation_date','remove_date']);
    }
}
