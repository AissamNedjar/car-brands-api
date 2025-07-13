<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class BYDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'BYD',
            'models' => [
                [
                    'name' => 'F0',
                    'versions' => [
                        'F0',
                        'G',
                        'GL',
                        'GLX',
                        'GLX-i Sport'
                    ],
                    'engines' => [
                        '1.0 ess 67ch',
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'F3',
                    'versions' => [
                        'AT',
                        'F3',
                        'G',
                        'GL',
                        'GLX'
                    ],
                    'engines' => [
                        '1.5 ess 106ch',
                        '1.6 ess 106ch'
                    ]
                ],
                [
                    'name' => 'F3R',
                    'versions' => [
                        'AT',
                        'F3R',
                        'GL',
                        'GLx'
                    ],
                    'engines' => [
                        '1.5 ess 106ch',
                        '1.6 ess 106ch'
                    ]
                ],
                [
                    'name' => 'F5',
                    'versions' => [
                        'GLX',
                        'GLX AT'
                    ],
                    'engines' => [
                        '1.5 ess 154ch'
                    ]
                ],
                [
                    'name' => 'F6',
                    'versions' => [
                        'F6',
                        'GL',
                        'GS'
                    ],
                    'engines' => [
                        '2.0 ess 138ch',
                        '2.4 ess 162ch'
                    ]
                ],
                [
                    'name' => 'Flyer',
                    'versions' => [
                        'Flyer'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'L3',
                    'versions' => [
                        'L3'
                    ],
                    'engines' => [
                        '1.5 GL-i 107ch'
                    ]
                ],
                [
                    'name' => 'S6',
                    'versions' => [
                        'GS-i',
                        'S6'
                    ],
                    'engines' => [
                        '2.0 ess 140ch',
                        '2.4 ess 160ch BVA'
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
