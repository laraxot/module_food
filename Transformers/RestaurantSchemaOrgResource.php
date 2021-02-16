<?php

declare(strict_types=1);

namespace Modules\Food\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class RestaurantSchemaOrgResource.
 */
class RestaurantSchemaOrgResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request) {
        //return parent::toArray($request);
        $item = [];
        $item['title'] = $this->title; //.' '.$this->post_id.' '.$this->lang;  //4 debug
        $item['subtitle'] = $this->title;
        $item['cuisineCat_list'] = $this->cuisine_cats_list;
        $item['img_src'] = $this->imageResizeSrc(['width' => 380, 'height' => 210]);
        $item['url'] = $this->url;
        $item['lat'] = $this->latitude;
        $item['lng'] = $this->longitude;
        $item['distance'] = $this->distance; //\round($this->getDistance(\Request::input('lat'), \Request::input('lng')), 2);
        $item['address'] = '<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span itemprop="streetAddress">'.$this->route.','.$this->street_number.'</span> -
                                <span itemprop="postalCode">'.$this->postal_code.'</span>
                                <span itemprop="addressLocality">'.$this->locality.'</span>,
                                (<span itemprop="addressRegion">'.$this->administrative_area_level_2_short.'</span>)
                                <meta itemprop="addressCountry" content="'.$this->country_short.'" />
                            </div>';

        return $item;
    }
}