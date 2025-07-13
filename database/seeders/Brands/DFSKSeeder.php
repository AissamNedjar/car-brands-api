<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DFSKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'DFSK',
            'models' => [
                [
                    'name' => 'B07',
                    'versions' => [
                        'B07'
                    ],
                    'engines' => [
                        '1.1 ess 5cv',
                        '1.3 ess 6 CV'
                    ]
                ],
                [
                    'name' => 'K01H',
                    'versions' => [
                        'K01H'
                    ],
                    'engines' => [
                        '1.1 ess 53 ch'
                    ]
                ],
                [
                    'name' => 'Mini Bus',
                    'versions' => [
                        '5 Places'
                    ],
                    'engines' => [
                        '1.1 ess 53 ch'
                    ]
                ],
                [
                    'name' => 'Mini Conteneur',
                    'versions' => [
                        '2m50',
                        '2m90',
                        'Mini Conteneur'
                    ],
                    'engines' => [
                        '1.1 ess 53 ch',
                        '1.3 ess 81ch'
                    ]
                ],
                [
                    'name' => 'Mini Frigo',
                    'versions' => [
                        '2m30',
                        '2m50'
                    ],
                    'engines' => [
                        '1.1 ess 53 ch',
                        '1.3 ess 81ch'
                    ]
                ],
                [
                    'name' => 'Mini Truck',
                    'versions' => [
                        'SC 2m30',
                        'SC 2m50',
                        'SC 2m70'
                    ],
                    'engines' => [
                        '1.1 ess 53 ch'
                    ]
                ],
                [
                    'name' => 'Mini Truck Double Cab',
                    'versions' => [
                        'LUX 1m40',
                        'LUX 1m70',
                        'Mini Truck Double Cab'
                    ],
                    'engines' => [
                        '1.1 ess 53 ch'
                    ]
                ],
                [
                    'name' => 'V21',
                    'versions' => [
                        'Frigo ',
                        'V21'
                    ],
                    'engines' => [
                        '1.3 ess 81ch'
                    ]
                ],
                [
                    'name' => 'V22',
                    'versions' => [
                        'V22'
                    ],
                    'engines' => [
                        '1.3 ess 81ch'
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
