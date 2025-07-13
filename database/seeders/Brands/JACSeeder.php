<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class JACSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'JAC',
            'models' => [
                [
                    'name' => 'A 10',
                    'versions' => [
                        'A 10'
                    ],
                    'engines' => [
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'A CLASS',
                    'versions' => [
                        'Hatch Back',
                        'Sedan'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'B CLASS',
                    'versions' => [
                        'B CLASS'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'B CROSS',
                    'versions' => [
                        'B CROSS'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'J2',
                    'versions' => [
                        'Luxury'
                    ],
                    'engines' => [
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'J3',
                    'versions' => [
                        'Sport',
                        'Turin'
                    ],
                    'engines' => [
                        '1.3 ess 99ch'
                    ]
                ],
                [
                    'name' => 'J4',
                    'versions' => [
                        'J4'
                    ],
                    'engines' => [
                        '1.5 ess 83ch'
                    ]
                ],
                [
                    'name' => 'J5',
                    'versions' => [
                        'J5'
                    ],
                    'engines' => [
                        '1.5 ess 103ch'
                    ]
                ],
                [
                    'name' => 'J6',
                    'versions' => [
                        'Luxury'
                    ],
                    'engines' => [
                        '1.5 ess 143'
                    ]
                ],
                [
                    'name' => 'J7',
                    'versions' => [
                        'Luxury'
                    ],
                    'engines' => [
                        '1.9 ess 130ch BVA',
                        '1.9 ess 130ch BVM'
                    ]
                ],
                [
                    'name' => 'M1',
                    'versions' => [
                        'M1'
                    ],
                    'engines' => [
                        '2.8 D 109ch'
                    ]
                ],
                [
                    'name' => 'Sunray',
                    'versions' => [
                        'Sunray'
                    ],
                    'engines' => [
                        '2.5 D 120ch'
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
