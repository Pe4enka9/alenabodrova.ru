<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $stuff_specialization_id
 * @property int $service_id
 * @property Carbon $date
 *
 * @property-read User $specialist
 * @property-read Service $service
 */
class Employment extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function specialist(): BelongsTo
    {
        return $this->belongsTo(StuffSpecialization::class, 'stuff_specialization_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
