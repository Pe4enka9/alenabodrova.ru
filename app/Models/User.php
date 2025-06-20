<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $surname
 * @property string $name
 * @property string $patronymic
 * @property string $phone
 * @property string $password
 * @property int $role_id
 * @property int|null $experience
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
    ];
}
