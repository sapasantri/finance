<?php

namespace Database\Seeders;
use App\Models\Month;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $months = array(
            [ 'hijriyah' => 'Muharram',
              'masehi' => 'Januari'
            ],
            [ 'hijriyah' => 'Shafar',
              'masehi' => 'Pebruari'
            ],
            [ 'hijriyah' => 'Rabiul Awwal',
              'masehi' => 'Maret'
            ],
            [ 'hijriyah' => 'Rabiul Akhir',
              'masehi' => 'April'
            ],
            [ 'hijriyah' => 'Jumadal Ula',
              'masehi' => 'Mei'
            ],
            [ 'hijriyah' => 'Jumadal Akhir',
              'masehi' => 'Juni'
            ],
            [ 'hijriyah' => 'Rajab',
              'masehi' => 'Juli'
            ],
            [ 'hijriyah' => 'Syaban',
              'masehi' => 'Agustus'
            ],
            [ 'hijriyah' => 'Ramadhan',
              'masehi' => 'September'
            ],
            [ 'hijriyah' => 'Syawwal',
              'masehi' => 'Oktober'
            ],
            [ 'hijriyah' => 'Dzulqaidah',
              'masehi' => 'Nopember'
            ],
            [ 'hijriyah' => 'Dzulhijjah',
              'masehi' => 'Desember'
            ],
        );

        foreach ($months as $key => $month) {
            Month::create($month);
        }
    }
}
