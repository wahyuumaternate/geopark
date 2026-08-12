<?php

namespace Database\Seeders;

use App\Models\WarisanBumi;
use App\Support\GeoparkData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarisanBumiSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        foreach (GeoparkData::items() as $section => $items) {
            foreach ($items as $item) {
                WarisanBumi::updateOrCreate(
                    ['slug' => $item['slug']],
                    array_merge($item, ['section' => $section])
                );
            }
        }
    }
}
