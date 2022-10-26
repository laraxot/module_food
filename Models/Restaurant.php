<?php

declare(strict_types=1);

namespace Modules\Food\Models;

// ------ traits ----
// --- services

// ------- blog models
// ------ food models
// -------- services
use Modules\Food\Contracts\RestaurantContract;
// ---------- traits
use Modules\Geo\Models\Traits\GeoTrait;
use Modules\Rating\Models\Traits\RatingTrait;

class Restaurant extends BaseModelLang implements RestaurantContract {
    use RatingTrait;

    use GeoTrait;
    use Traits\RestaurantRelationshipsTrait;
    use Traits\RestaurantMutatorsTrait;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'min_order', 'price_currency',
        'address',
        'street_number', 'street_number_short', 'route', 'route_short',
        'locality', 'locality_short',
        'administrative_area_level_3', 'administrative_area_level_3_short',
        'administrative_area_level_2', 'administrative_area_level_2_short',
        'administrative_area_level_1', 'administrative_area_level_1_short',
        'country', 'country_short',
        'postal_code', 'postal_code_short',
        'latitude', 'longitude',
        'route_short', 'locality_short',
        'administrative_area_level_3_short', 'administrative_area_level_2_short',
        'administrative_area_level_1_short', 'country_short', 'postal_code_short',
        'formatted_address',
        'city', 'zip_code', 'country', 'state', 'phone', 'email', 'website',
        'display_phone', 'price', 'is_closed', 'review_count',
        // 'yelp_url', 'foodora_url', 'foodracers_url', 'justeat_url',  // spostati in restaurant provider
        // 'rating',
        'delivery_cost', 'delivery_options', 'order_action', 'checkout_enable', 'is_reclamed', 'table_enable',
        // 'my_rating',
    ];
    /**
     * @var array
     */
    protected $casts = [
        // 'my_rating' => 'array'
    ];
    /**
     * @var array
     */
    protected $appends = [
        // 'my_rating'
        // 'post', //4 livewire
    ];
    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    // -------- relationship -----------

    // -------- mutators -----------
    /*
    public function getPostAttribute($value) { //4 livewire
        $obj = $this->post()->first();
        if (! is_object($obj)) {
            return [];
        }

        return $obj->toArray();
    }
    */
    // --------------Scope ----------------
}
