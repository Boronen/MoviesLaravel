<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Film;
use App\Models\Gender;
use App\Models\Role;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'gender_id'])]
class User extends Authenticatable
{
    public $timestamps = false;

    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }

    public function directedFilms(): HasMany
    {
        return $this->hasMany(Film::class, 'director_id');
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
