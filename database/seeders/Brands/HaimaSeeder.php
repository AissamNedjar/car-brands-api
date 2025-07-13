<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class HaimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Haima',
            'models' => [
                [
                    'name' => '1',
                    'versions' => [
                        '1',
                        'New'
                    ],
                    'engines' => [
                        '1.0 ess 16V 75ch',
                        '1.1 ess 16V 60ch',
                        '1.25 ess 16V 91ch'
                    ]
                ],
                [
                    'name' => '2',
                    'versions' => [
                        '2',
                        'C-sport',
                        'Sedan',
                        'Sport'
                    ],
                    'engines' => [
                        '1.3 VVT 16V 83ch',
                        '1.3 VVT 16V 90ch',
                        '1.5 VVT 16V 105ch'
                    ]
                ],
                [
                    'name' => '3',
                    'versions' => [
                        '3',
                        'GLS',
                        'New',
                        'Sedan',
                        'Sport'
                    ],
                    'engines' => [
                        '1.6 ess 16V 112ch',
                        '1.6 ess 16V 122ch'
                    ]
                ],
                [
                    'name' => '7',
                    'versions' => [
                        '7',
                        'GLS',
                        'GLX'
                    ],
                    'engines' => [
                        '2.0 ess 16V 110ch',
                        '2.0 VVT 16V 150ch'
                    ]
                ],
                [
                    'name' => 'Family',
                    'versions' => [
                        'Family'
                    ],
                    'engines' => [
                        '1.6 ess 16V 122ch'
                    ]
                ],
                [
                    'name' => 'Forstar',
                    'versions' => [
                        'Forstar',
                        'Luxe'
                    ],
                    'engines' => [
                        '1.1 ess 60ch'
                    ]
                ],
                [
                    'name' => 'm3',
                    'versions' => [
                        'm3'
                    ],
                    'engines' => [
                        '1.5 VVT 105ch',
                        '1.5 VVT 112ch'
                    ]
                ],
                [
                    'name' => 'm8',
                    'versions' => [
                        'm8'
                    ],
                    'engines' => [
                        '2.0 VVT 145ch BVA'
                    ]
                ],
                [
                    'name' => 'S5',
                    'versions' => [
                        'S5'
                    ],
                    'engines' => [
                        '1.6 ess 16V 122ch',
                        '1.6 ess 16V 122ch BVA'
                    ]
                ],
                [
                    'name' => 'S7',
                    'versions' => [
                        'S7'
                    ],
                    'engines' => [
                        '2.0 VVT 16V 140ch BVA'
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
