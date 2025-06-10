<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $stuff_specialization_id
 * @property int $service_id
 * @property Carbon $date
 */
class Employment extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'date' => 'datetime',
    ];
}
