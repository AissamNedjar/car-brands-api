<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class LifanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Lifan',
            'models' => [
                [
                    'name' => '330',
                    'versions' => [
                        '330'
                    ],
                    'engines' => [
                        '1.3 VVT 91ch'
                    ]
                ],
                [
                    'name' => '520',
                    'versions' => [
                        '520',
                        'DX',
                        'LX'
                    ],
                    'engines' => [
                        '1.3 ess 65ch',
                        '1.6 ess 116ch'
                    ]
                ],
                [
                    'name' => '520 Hatch Back',
                    'versions' => [
                        '520 Hatch Back'
                    ],
                    'engines' => [
                        '1.3 ess 65ch'
                    ]
                ],
                [
                    'name' => '530',
                    'versions' => [
                        '530'
                    ],
                    'engines' => [
                        '1.5 VVT 103ch'
                    ]
                ],
                [
                    'name' => '620',
                    'versions' => [
                        '620'
                    ],
                    'engines' => [
                        '1.6 ess 116ch',
                        '1.6 ess 116ch BVA'
                    ]
                ],
                [
                    'name' => '630',
                    'versions' => [
                        '630'
                    ],
                    'engines' => [
                        '1.5 VVT 103ch'
                    ]
                ],
                [
                    'name' => '720',
                    'versions' => [
                        '720'
                    ],
                    'engines' => [
                        '1.8 ess 98ch'
                    ]
                ],
                [
                    'name' => 'Van',
                    'versions' => [
                        'Van'
                    ],
                    'engines' => [
                        '1.3 ess 65ch'
                    ]
                ],
                [
                    'name' => 'X 60',
                    'versions' => [
                        'Body Kit',
                        'X 60'
                    ],
                    'engines' => [
                        '1.8 ess 98ch'
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
