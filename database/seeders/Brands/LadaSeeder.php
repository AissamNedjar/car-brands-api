<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class LadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Lada',
            'models' => [
                [
                    'name' => '110',
                    'versions' => [
                        '110'
                    ],
                    'engines' => [
                        '1.5 ess 78ch'
                    ]
                ],
                [
                    'name' => '111',
                    'versions' => [
                        '111'
                    ],
                    'engines' => [
                        '1.5 ess 78ch'
                    ]
                ],
                [
                    'name' => '112',
                    'versions' => [
                        '112'
                    ],
                    'engines' => [
                        '1.5 ess 78ch'
                    ]
                ],
                [
                    'name' => 'Kalina',
                    'versions' => [
                        'Kalina'
                    ],
                    'engines' => [
                        '1.4 ess 89ch',
                        '1.6 ess 82ch'
                    ]
                ],
                [
                    'name' => 'Niva',
                    'versions' => [
                        'Niva'
                    ],
                    'engines' => [
                        '1.6 ess 78ch',
                        '1.7 ess 80ch',
                        '1.7 ess 81ch',
                        '1.7 GPL 80ch',
                        '1.7 GPL 81ch'
                    ]
                ],
                [
                    'name' => 'Samara',
                    'versions' => [
                        'Samara'
                    ],
                    'engines' => [
                        '1.3 ess 65ch',
                        '1.5 ess 71ch'
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
