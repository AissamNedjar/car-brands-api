<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class GreatWallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Great Wall',
            'models' => [
                [
                    'name' => 'C30',
                    'versions' => [
                        'C30'
                    ],
                    'engines' => [
                        '1.5 VVT 105ch'
                    ]
                ],
                [
                    'name' => 'Florid',
                    'versions' => [
                        'Cross',
                        'Florid'
                    ],
                    'engines' => [
                        '1.5 VVT 105ch'
                    ]
                ],
                [
                    'name' => 'Haval H2',
                    'versions' => [
                        'Haval H2'
                    ],
                    'engines' => [
                        '1.5 VVT 150ch'
                    ]
                ],
                [
                    'name' => 'Haval H5',
                    'versions' => [
                        'Haval H5'
                    ],
                    'engines' => [
                        '2.0 TD 150ch'
                    ]
                ],
                [
                    'name' => 'Haval H6',
                    'versions' => [
                        'Sport'
                    ],
                    'engines' => [
                        '2.0 TCI 150ch',
                        '2.0 TD 150ch'
                    ]
                ],
                [
                    'name' => 'hover',
                    'versions' => [
                        'hover'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'New Florid',
                    'versions' => [
                        'New Florid'
                    ],
                    'engines' => [
                        '1.5 VVT 105ch'
                    ]
                ],
                [
                    'name' => 'Peri',
                    'versions' => [
                        'Peri'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Wingle',
                    'versions' => [
                        'Double cabine',
                        'Simple Cabine',
                        'Upgrade'
                    ],
                    'engines' => [
                        '2.0 TCi 111ch',
                        '2.0 TCI 4X2 150ch',
                        '2.0 TCI 4X4 150ch',
                        '2.5 TCI 4X2 109ch',
                        '2.5 TCI 4X4 109ch'
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
