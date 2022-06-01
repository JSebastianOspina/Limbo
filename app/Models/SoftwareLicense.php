<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareLicense extends Model
{
    use HasFactory;

    public function software(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Software::class);
    }

    public function champions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Champion::class);
    }

}
