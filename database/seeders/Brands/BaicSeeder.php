<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class BaicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Baic',
            'models' => [
                [
                    'name' => 'BJ40L',
                    'versions' => [
                        'BJ40L'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'BJ 60',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'D20',
                    'versions' => [
                        'Sedan'
                    ],
                    'engines' => [
                        '1.5 ess 114ch'
                    ]
                ],
                [
                    'name' => 'D20 Coupé',
                    'versions' => [
                        'Base'
                    ],
                    'engines' => [
                        '1.3l essence 100ch'
                    ]
                ],
                [
                    'name' => 'U5 plus ',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'X25',
                    'versions' => [
                        'X25'
                    ],
                    'engines' => [
                        '1.5 ess 114ch',
                        '1.5 ess 114ch BVA'
                    ]
                ],
                [
                    'name' => 'X35',
                    'versions' => [
                        'X35'
                    ],
                    'engines' => [
                        '1.5 ess 114ch'
                    ]
                ],
                [
                    'name' => 'X55',
                    'versions' => [
                        'X55'
                    ],
                    'engines' => [
                        '1.5 Turbo 150ch',
                        '1.5 Turbo 150ch BVA'
                    ]
                ],
                [
                    'name' => 'X65',
                    'versions' => [
                        'X65'
                    ],
                    'engines' => [
                        '2.0 Turbo 177ch',
                        '2.0 Turbo 177ch BVA'
                    ]
                ],
                [
                    'name' => 'X7',
                    'versions' => [],
                    'engines' => []
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
