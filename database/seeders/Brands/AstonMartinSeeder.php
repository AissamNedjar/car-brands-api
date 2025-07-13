<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class AstonMartinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Aston Martin',
            'models' => [
                [
                    'name' => 'DB2',
                    'versions' => [
                        'DB2'
                    ],
                    'engines' => [
                        '2.9 ess 140ch'
                    ]
                ],
                [
                    'name' => 'DB4',
                    'versions' => [
                        'DB4'
                    ],
                    'engines' => [
                        '3.7 ess 240ch',
                        '3.7 ess 314ch',
                        '3.7 GT 302ch'
                    ]
                ],
                [
                    'name' => 'DB5',
                    'versions' => [
                        'DB5'
                    ],
                    'engines' => [
                        '4.0 ess 286ch'
                    ]
                ],
                [
                    'name' => 'DB7',
                    'versions' => [
                        'DB7'
                    ],
                    'engines' => [
                        '3.2 ess 340ch',
                        '5.9 ess 420ch',
                        '5.9 GT 440ch'
                    ]
                ],
                [
                    'name' => 'DB9',
                    'versions' => [
                        'DB9'
                    ],
                    'engines' => [
                        '5.9 ess V12 457ch',
                        '6.0 ess 450ch',
                        '6.0 ess 470ch',
                        '6.0 ess 475ch',
                        '6.0 ess 477ch'
                    ]
                ],
                [
                    'name' => 'DBS',
                    'versions' => [
                        'DBS'
                    ],
                    'engines' => [
                        '4.0 ess 330ch',
                        '5.9 ess V12 517ch',
                        '6.0 ess 517ch',
                        '6.0 ess V12 517ch'
                    ]
                ],
                [
                    'name' => 'Lagonda',
                    'versions' => [
                        'Lagonda'
                    ],
                    'engines' => [
                        '5.4 ess V8 309ch'
                    ]
                ],
                [
                    'name' => 'V8',
                    'versions' => [
                        'V8'
                    ],
                    'engines' => [
                        '4.3 ess 385ch',
                        '5.4 ess 268ch',
                        '5.4 ess 309ch',
                        '5.4 ess 375ch',
                        '5.4 ess 408ch'
                    ]
                ],
                [
                    'name' => 'Vanquish',
                    'versions' => [
                        'Vanquish'
                    ],
                    'engines' => [
                        '5.9 ess 520ch',
                        '5.9 ess V12 450ch',
                        '6.0 ess 520ch',
                        '6.0 ess 527ch',
                        '6.0 ess 528ch'
                    ]
                ],
                [
                    'name' => 'Virage',
                    'versions' => [
                        'Virage'
                    ],
                    'engines' => [
                        '5.4 ess 335ch',
                        '5.4 ess 557ch',
                        '5.4 ess V8 355ch',
                        '6.0 ess 490ch',
                        '6.0 ess V12 490ch'
                    ]
                ],
                [
                    'name' => 'Zagato',
                    'versions' => [
                        'Zagato'
                    ],
                    'engines' => [
                        '5.4 ess V8 432ch'
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
