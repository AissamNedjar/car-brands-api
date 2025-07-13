<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class FawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Faw',
            'models' => [
                [
                    'name' => 'B50',
                    'versions' => [
                        'B50'
                    ],
                    'engines' => [
                        '1.6 L AT DLX',
                        '1.6 L MT',
                        '1.6 L MT DLX'
                    ]
                ],
                [
                    'name' => 'CA 1024',
                    'versions' => [
                        'Conteneur',
                        'Frigo',
                        'V',
                        'VL',
                        'VLR'
                    ],
                    'engines' => [
                        '1.0 ess 43ch'
                    ]
                ],
                [
                    'name' => 'Mini van',
                    'versions' => [
                        'Tôlé',
                        'Vitré'
                    ],
                    'engines' => [
                        '1.0 ess 43ch'
                    ]
                ],
                [
                    'name' => 'N5',
                    'versions' => [
                        'N5'
                    ],
                    'engines' => [
                        '1.0 MT STD',
                        '1.3 DLX',
                        '1.3 MT STD'
                    ]
                ],
                [
                    'name' => 'N7',
                    'versions' => [
                        'N7'
                    ],
                    'engines' => [
                        '1.3 MT DLX',
                        '1.3 MT STD'
                    ]
                ],
                [
                    'name' => 'OLEY',
                    'versions' => [
                        'Confort',
                        'Deluxe',
                        'OLEY'
                    ],
                    'engines' => [
                        '1.5 ess 100 ch'
                    ]
                ],
                [
                    'name' => 'Oley HB',
                    'versions' => [
                        'Confort'
                    ],
                    'engines' => [
                        '1.5 ess 100 ch'
                    ]
                ],
                [
                    'name' => 'S80',
                    'versions' => [
                        'S80'
                    ],
                    'engines' => [
                        '1.3 ess 90 ch',
                        '1.5 ess 100 ch'
                    ]
                ],
                [
                    'name' => 'V2',
                    'versions' => [
                        'V2'
                    ],
                    'engines' => [
                        '1.3 MT DLX',
                        '1.3 MT STD'
                    ]
                ],
                [
                    'name' => 'V 70',
                    'versions' => [
                        'LUX',
                        'Tôlé',
                        'V 70'
                    ],
                    'engines' => [
                        '1.3 ess 67ch'
                    ]
                ],
                [
                    'name' => 'X80',
                    'versions' => [
                        'X80'
                    ],
                    'engines' => [
                        '2.0 ess 140 ch',
                        '2.0 ess 140 ch BVA'
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
