<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int|null $specialization_id
 * @property int $subcategory_id
 * @property int|null $length_id
 * @property float $price
 * @property float|null $additionally
 *
 * @property-read Length $length
 * @property-read Specialization $specialization
 * @property-read Subcategory $subcategory
 */
class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function length(): BelongsTo
    {
        return $this->belongsTo(Length::class, 'length_id');
    }

    public function specialization(): BelongsTo
    {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
}
