<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Citizen extends Model
{
    use HasFactory;

    public function district(): HasOne {
        return $this->hasOne(District::class);
    }

    public function hamlet(): HasOne {
        return $this->hasOne(Hamlet::class);
    }

    public function neighboor(): HasOne {
        return $this->hasOne(Neighboor::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function family(): BelongsTo {
        return $this->belongsTo(Family::class);
    }
}
