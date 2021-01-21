<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Family extends Model
{
    use HasFactory;

    public function citizens(): HasMany {
        return $this->hasMany(Citizen::class);
    }

    public function district(): HasOne {
        return $this->hasOne(District::class);
    }

    public function hamler(): HasOne {
        return $this->hasOne(Hamlet::class);
    }

    public function neighboor(): HasOne {
        return $this->hasOne(Neighboor::class);
    }
}
