<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DFJoyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'DF Joyear',
            'models' => [
                [
                    'name' => 'S50',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'SX6',
                    'versions' => [
                        'MT'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'T5 EVO',
                    'versions' => [
                        ' Exclusive',
                        'Luxury'
                    ],
                    'engines' => [
                        '1.5TD ess 197ch'
                    ]
                ],
                [
                    'name' => 'U-TOUR',
                    'versions' => [
                        'Exclusive',
                        'Luxury'
                    ],
                    'engines' => [
                        '1.5TD ess 197ch'
                    ]
                ]
            ]
        ];

        $brand = CarBrand::firstOrCreate(
            ['name' => $data['name']],
            ['image' => asset('brands/' . strtolower(str_replace(' ', '_', $data['name'])) . '.png')]
        );

        $modelsData = collect($data['models'])->map(function ($model) {
            return [
                'name' => $model['name'],
            ];
        });

        $brand->models()->createMany($modelsData)->each(function ($model, $index) use ($data) {
            $originalModel = $data['models'][$index];

            if (isset($originalModel['versions'])) {
                $versions = collect($originalModel['versions'])->map(function ($version) {
                    return ['name' => $version];
                })->toArray();

                $model->versions()->createMany($versions);
            }

            if (!empty($originalModel['engines'])) {
                foreach ($originalModel['engines'] as $engineName) {
                    $engine = CarEngine::firstOrCreate(['name' => $engineName]);
                    $model->engines()->syncWithoutDetaching($engine->id);
                }
            }
        });
    }
}
