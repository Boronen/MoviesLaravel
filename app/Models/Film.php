<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['title', 'year', 'minutes', 'director_id'])]
class Film extends Model
{
    public $timestamps = false;

    use HasFactory;

    public function director(): BelongsTo
    {
        return $this->belongsTo(User::class, 'director_id');
    }

    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }
}
