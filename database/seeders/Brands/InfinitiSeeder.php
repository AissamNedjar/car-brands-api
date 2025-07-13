<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class InfinitiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Infiniti',
            'models' => [
                [
                    'name' => 'EX',
                    'versions' => [
                        'EX'
                    ],
                    'engines' => [
                        '30d - 3.0 D 238ch',
                        '37 - 3.7 ess 320ch'
                    ]
                ],
                [
                    'name' => 'EX37',
                    'versions' => [
                        'EX37'
                    ],
                    'engines' => [
                        '3.7 ess 320ch'
                    ]
                ],
                [
                    'name' => 'FX',
                    'versions' => [
                        'FX'
                    ],
                    'engines' => [
                        '30d - 3.0 D 238ch',
                        '37 - 3.7 ess 320ch',
                        '50 - 5.0 ess 390ch',
                        '50 Sebatian Vettel - 5.0 ess 420ch'
                    ]
                ],
                [
                    'name' => 'G37',
                    'versions' => [
                        'G37'
                    ],
                    'engines' => [
                        '3.7 ess 320ch'
                    ]
                ],
                [
                    'name' => 'G37 Cabriolet',
                    'versions' => [
                        'G37 Cabriolet'
                    ],
                    'engines' => [
                        '3.7 ess V6 320ch'
                    ]
                ],
                [
                    'name' => 'G37 Coupé',
                    'versions' => [
                        'G37 Coupé'
                    ],
                    'engines' => [
                        '3.7 ess V6 320ch'
                    ]
                ],
                [
                    'name' => 'M',
                    'versions' => [
                        'M'
                    ],
                    'engines' => [
                        '30d - 3.0 D 238ch',
                        '35h - 3.5  306ch',
                        '37 - 3.7 ess 320ch'
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
