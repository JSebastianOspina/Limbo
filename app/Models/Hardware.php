<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;

    public function components(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Component::class)->withPivot(['installation_date', 'remove_date']);
    }

    public function champions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Champion::class)->withPivot(['assignation_date', 'remove_date']);
    }

    public function software(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Software::class)->withPivot(['installation_date', 'remove_date', 'renovation_date']);
    }
}
