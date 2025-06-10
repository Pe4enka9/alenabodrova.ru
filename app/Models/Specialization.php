<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string $name
 * @property int $category_id
 *
 * @property-read Collection<Service> $services
 */
class Specialization extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'specialization_id');
    }
}
