<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class GeelySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Geely',
            'models' => [
                [
                    'name' => 'CK',
                    'versions' => [
                        '1 GS',
                        '2 GL',
                        'GB ',
                        'GL'
                    ],
                    'engines' => [
                        '1.3 ess 63ch'
                    ]
                ],
                [
                    'name' => 'Coolray',
                    'versions' => [
                        'LIGHT',
                        'Sport',
                        'Sport Limited',
                        'Style'
                    ],
                    'engines' => [
                        '1,5 ess Turbo 174ch'
                    ]
                ],
                [
                    'name' => 'Emgrand',
                    'versions' => [
                        'Essentiel GS ',
                        'Exclusive GF',
                        'Sensation GK'
                    ],
                    'engines' => [
                        '1,5 ess 122ch BVA6'
                    ]
                ],
                [
                    'name' => 'GX3 PRO ',
                    'versions' => [
                        'Drive',
                        'FUN',
                        'Privilège',
                        'Start'
                    ],
                    'engines' => [
                        '1,5 ess 102ch CVT',
                        '1,5 ess 102ch MT'
                    ]
                ],
                [
                    'name' => 'MK',
                    'versions' => [
                        'MK',
                        'Sedan GL'
                    ],
                    'engines' => [
                        '1.5 ess 69ch'
                    ]
                ],
                [
                    'name' => 'MK 2',
                    'versions' => [
                        'Cross GL',
                        'MK 2'
                    ],
                    'engines' => [
                        '1.5 ess 69ch'
                    ]
                ],
                [
                    'name' => 'Ray',
                    'versions' => [
                        'Cross GB',
                        'Cross GL',
                        'GB',
                        'GL',
                        'GS',
                        'Ray'
                    ],
                    'engines' => [
                        '1.3 ess 63ch'
                    ]
                ],
                [
                    'name' => 'S5',
                    'versions' => [
                        'S5',
                        'Sedan'
                    ],
                    'engines' => [
                        '1.5 ess 102ch'
                    ]
                ],
                [
                    'name' => 'Starray',
                    'versions' => [
                        'Cosmos ',
                        'Dynamic',
                        'Premium'
                    ],
                    'engines' => [
                        '1.5 ess Turbo 174 ch'
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
