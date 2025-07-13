<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DodgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Dodge',
            'models' => [
                [
                    'name' => 'Avenger',
                    'versions' => [
                        'Avenger'
                    ],
                    'engines' => [
                        '2.0 CRD 140ch'
                    ]
                ],
                [
                    'name' => 'Caliber',
                    'versions' => [
                        'Caliber'
                    ],
                    'engines' => [
                        '1.8 ess 150ch',
                        '2.0 CRD 140ch',
                        '2.0 ess 156ch BVA',
                        '2.2 CRD 163ch'
                    ]
                ],
                [
                    'name' => 'Charger',
                    'versions' => [
                        'Charger'
                    ],
                    'engines' => [
                        '7.0 ess 425ch',
                        '7.2 ess 375ch'
                    ]
                ],
                [
                    'name' => 'Dart',
                    'versions' => [
                        'Dart'
                    ],
                    'engines' => [
                        '1.4 ess 160ch'
                    ]
                ],
                [
                    'name' => 'Journey',
                    'versions' => [
                        'Journey'
                    ],
                    'engines' => [
                        '2.0 CRD 140ch'
                    ]
                ],
                [
                    'name' => 'Nitro',
                    'versions' => [
                        'Nitro'
                    ],
                    'engines' => [
                        '2.8 CRD 177ch',
                        '2.8 CRD 4X2 177ch',
                        '2.8 CRD 4X4 177ch',
                        '4.0 ess V6 4X4 260ch'
                    ]
                ],
                [
                    'name' => 'Ram 1500',
                    'versions' => [
                        'Ram 1500'
                    ],
                    'engines' => [
                        '3.7 ess V6 215ch',
                        '4.7 ess V8 235ch',
                        '5.7 ess V8 395ch 4x4'
                    ]
                ],
                [
                    'name' => 'Viper',
                    'versions' => [
                        'Viper'
                    ],
                    'engines' => [
                        '8.0 ess 364ch',
                        '8.0 ess 384ch',
                        '8.2 ess 500ch',
                        '8.3 ess 506ch'
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
