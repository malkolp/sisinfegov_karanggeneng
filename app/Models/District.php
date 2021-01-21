<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;

    public function hamlets(): HasMany {
        return $this->hasMany(Hamlet::class);
    }

    public function neighboors(): HasMany {
        return $this->hasMany(Neighboor::class);
    }

    public function families(): HasMany {
        return $this->hasMany(Family::class);
    }

    public function citizens(): HasMany {
        return $this->hasMany(Citizen::class);
    }
}
