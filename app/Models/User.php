<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $phone
 * @property string $password
 * @property int $experience
 * @property int $role_id
 *
 * @property-read Collection<Specialization> $specializations
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
    ];

    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(Specialization::class, 'stuff_specializations', 'user_id', 'specialization_id');
    }
}
