<?php

//Load Room Model
use App\Models\Room;

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
                'hotel_id' => '1',
                'type' => 'Resort',
                'description' => 'Universal-Parks',
                'price' => '500',
                'image' => 'https://funco.com/670/550/hotelpark'
            ],
            [
                'hotel_id' => '2',
                'type' => 'Inn',
                'description' => 'Western-Cottage',
                'price' => '55',
                'image' => 'https://wintercottage.com/112/041/cottage'
            ],
            [
                'hotel_id' => '3',
                'type' => 'Suite',
                'description' => 'Las-Vegas',
                'price' => '900',
                'image' => 'https://vegascasino.com/481/764/hotel-view'
            ],
            [
                'hotel_id' => '4',
                'type' => 'Budget-Inn',
                'description' => 'Atlanta',
                'price' => '100',
                'image' => 'https://budgetinnatlanta.com/341/088/budget-room'
            ]
        ];

        foreach ($rooms as $room){
            Room::create(array(
                'hotel_id' => $room['hotel_id'],
                'type' => $room['type'],
                'description' => $room['description'],
                'price' => $room['price'],
                'image' => $room['image']
            ));
        }
    }
}
