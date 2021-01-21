<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Neighboor extends Model
{
    use HasFactory;

    public function families(): HasMany {
        return $this->hasMany(Family::class);
    }

    public function citizens(): HasMany {
        return $this->hasMany(Citizen::class);
    }

    public function district(): HasOne {
        return $this->hasOne(District::class);
    }

    public function hamlet(): BelongsTo {
        return $this->belongsTo(Hamlet::class);
    }
}
