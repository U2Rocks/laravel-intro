<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'hotel_id' => '1123',
                'type' => 'Resort',
                'description' => 'Universal-Parks',
                'price' => '500',
                'image' => 'https://funco.com/670/550/hotelpark'
            ],
            [
                'hotel_id' => '7631',
                'type' => 'Inn',
                'description' => 'Western-Cottage',
                'price' => '55',
                'image' => 'https://wintercottage.com/112/041/cottage'
            ],
            [
                'hotel_id' => '5537',
                'type' => 'Suite',
                'description' => 'Las-Vegas',
                'price' => '900',
                'image' => 'https://vegascasino.com/481/764/hotel-view'
            ]
        ];

        foreach ($rooms as $room){
            Hotel::create(array(
                'hotel_id' => $room['hotel_id'],
                'type' => $room['type'],
                'description' => $room['description'],
                'price' => $room['price'],
                'image' => $room['image']
            ));
        }
    }
}
