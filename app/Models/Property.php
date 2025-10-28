<?php

namespace App\Models;

use App\PropertyStatus;
use App\PropertyUnitOfMeasure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Property extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'property_category_id',
        'location_id',
        'name',
        'slug',
        'status',
        'price',
        'currency',
        'price_negotiable',

        'location_detail',
        'latitude',
        'longitude',

        'surface_area',
        'building_area',
        'uom',
        'rooms',
        'bathrooms',
        'year_built',
        'description',
        'short_description',

        'meta_title',
        'meta_description',
        'meta_keywords',

        'view_count',
        'inquiry_count',
        'featured',
        'priority',
        'is_active',

        'published_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => PropertyStatus::class,
            'price' => 'float',
            'price_negotiable' => 'boolean',
            'latitude' => 'float',
            'longitude' => 'float',
            'surface_area' => 'float',
            'building_area' => 'float',
            'uom' => PropertyUnitOfMeasure::class,
            'rooms' => 'integer',
            'bathrooms' => 'integer',
            'year_built' => 'integer',
            'view_count' => 'integer',
            'inquiry_count' => 'integer',
            'featured' => 'boolean',
            'priority' => 'boolean',
            'is_active' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'property_category_id');
    }

    public function features(): HasMany
    {
        return $this->hasMany(PropertyFeature::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(PropertyDetail::class);
    }

    public function views(): HasMany
    {
        return $this->hasMany(PropertyView::class);
    }

    public function inquiries(): HasMany
    {
        return $this->hasMany(Inquiry::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /**
     * Get formatted price attribute
     */
    public function getFormattedPriceAttribute(): string
    {
        return \App\Helpers\PriceHelper::format($this->price, $this->currency);
    }

    /**
     * Get full formatted price attribute
     */
    public function getFormattedPriceFullAttribute(): string
    {
        return \App\Helpers\PriceHelper::formatFull($this->price, $this->currency);
    }

    /**
     * Get formatted surface area with unit
     */
    public function getFormattedSurfaceAreaAttribute(): string
    {
        if (! $this->surface_area || ! $this->uom) {
            return 'N/A';
        }

        return number_format($this->surface_area, 0).$this->uom->label();
    }

    /**
     * Get formatted building area with unit
     */
    public function getFormattedBuildingAreaAttribute(): string
    {
        if (! $this->building_area || ! $this->uom) {
            return 'N/A';
        }

        return number_format($this->building_area, 0).$this->uom->label();
    }

    /**
     * Get surface area in square meters (normalized)
     */
    public function getSurfaceAreaInSqmAttribute(): ?float
    {
        if (! $this->surface_area || ! $this->uom) {
            return null;
        }

        return $this->surface_area * $this->uom->toSquareMeters();
    }

    /**
     * Get smart formatted surface area (with abbreviation for large areas)
     */
    public function getSmartSurfaceAreaAttribute(): string
    {
        if (! $this->surface_area || ! $this->uom) {
            return 'N/A';
        }

        return \App\Helpers\AreaHelper::format($this->surface_area, $this->uom, true);
    }

    /**
     * Check if property has a building area
     */
    public function getHasBuildingAreaAttribute(): bool
    {
        return in_array(Str::lower($this->category->name), ['villa', 'house']);
    }
}
