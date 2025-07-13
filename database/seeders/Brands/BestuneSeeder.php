<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class BestuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Bestune',
            'models' => [
                [
                    'name' => 'B70',
                    'versions' => [
                        'Comfort ',
                        'Premium',
                        'Standard'
                    ],
                    'engines' => [
                        '1.5 TSI 169ch'
                    ]
                ],
                [
                    'name' => 'B70S',
                    'versions' => [
                        'Limousine',
                        'Premium '
                    ],
                    'engines' => [
                        '1.5 TSI 169ch'
                    ]
                ],
                [
                    'name' => 'E01',
                    'versions' => [
                        'Pony'
                    ],
                    'engines' => [
                        'Electrique 27ch'
                    ]
                ],
                [
                    'name' => 'E05',
                    'versions' => [
                        'Premium'
                    ],
                    'engines' => [
                        'Electrique 161ch'
                    ]
                ],
                [
                    'name' => 'M9',
                    'versions' => [
                        'Flago'
                    ],
                    'engines' => [
                        '2.0 TSI 248ch'
                    ]
                ],
                [
                    'name' => 'T55',
                    'versions' => [
                        'Deluxe ',
                        'Premium'
                    ],
                    'engines' => [
                        '1.5 TSI 169ch'
                    ]
                ],
                [
                    'name' => 'T77',
                    'versions' => [
                        'Deluxe',
                        'Premium'
                    ],
                    'engines' => [
                        '1.5 TSI 169ch'
                    ]
                ],
                [
                    'name' => 'T90',
                    'versions' => [
                        'Flago ',
                        'Limousine ',
                        'Premium'
                    ],
                    'engines' => [
                        '1.5 TSI 169ch'
                    ]
                ],
                [
                    'name' => 'T99',
                    'versions' => [
                        'Luxury',
                        'Premium '
                    ],
                    'engines' => [
                        '2.0 ESS 224ch'
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
