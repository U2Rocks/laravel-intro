<?php

namespace App\Observers;

use App\Models\Hotel;

class HotelObserver
{
    /**
     * Handle the hotel "created" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function create(Hotel $hotel)
    {
        function creating(Hotel $hotel)
            {
                $hotelinfo = $hotel->address_1;
                $api_key = '86080006ae522fbb5479348e529b4ced';
                $endpoint = 'http://api.positionstack.com/v1/forward?';
                $hotel_address = $hotelinfo;
                $params = array(
                    'access_key' => $api_key,
                    'query' => $hotel_address,
                    'limit' => '1'
                );
                $url_params = http_build_query($params);
                $req_url = $endpoint.$url_params;

                $context = stream_context_create(
                    array(
                        "http" => array(
                            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                        )
                    )
                );

                $response = file_get_contents($endpoint.$url_params, false, $context);
                $hotelcords = json_decode($response);
                $hotelcords->data[0];
                $hotelcordslat = $hotelcords->data[0]->latitude;
                $hotelcordslong = $hotelcords->data[0]->longitude;

                $hotel->lat = $hotelcordslat;
                $hotel->lon = $hotelcordslong;
            }
    }

    /**
     * Handle the hotel "updated" event.
     * This is a string of text
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function updated(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function deleted(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "restored" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function restored(Hotel $hotel)
    {
        //
    }

    /**
     * Handle the hotel "force deleted" event.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return void
     */
    public function forceDeleted(Hotel $hotel)
    {
        //
    }
}
