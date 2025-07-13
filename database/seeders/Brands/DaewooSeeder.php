<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DaewooSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Daewoo',
            'models' => [
                [
                    'name' => 'Cielo',
                    'versions' => [
                        'Cielo'
                    ],
                    'engines' => [
                        '1.5 ess 75ch',
                        '1.5 ess 90ch'
                    ]
                ],
                [
                    'name' => 'Cielo nexia',
                    'versions' => [
                        'Cielo nexia',
                        'GL ',
                        'GLE'
                    ],
                    'engines' => [
                        '1.5 ess 75ch',
                        '1.5 ess 80ch',
                        '1.5 ess 90ch'
                    ]
                ],
                [
                    'name' => 'Damas ',
                    'versions' => [
                        'Tolée ',
                        'Vitrée '
                    ],
                    'engines' => [
                        '1.5 ess 80ch'
                    ]
                ],
                [
                    'name' => 'Espero',
                    'versions' => [
                        'Espero'
                    ],
                    'engines' => [
                        '1.5 ess 90ch',
                        '2.0 ess 105ch',
                        '2.0 GPL 105ch'
                    ]
                ],
                [
                    'name' => 'Kalos',
                    'versions' => [
                        'Kalos'
                    ],
                    'engines' => [
                        '1.2 ess 72ch',
                        '1.4 ess 83ch'
                    ]
                ],
                [
                    'name' => 'Korando',
                    'versions' => [
                        'Korando'
                    ],
                    'engines' => [
                        '2.3 TD 101ch'
                    ]
                ],
                [
                    'name' => 'Laganza',
                    'versions' => [
                        'Laganza'
                    ],
                    'engines' => [
                        '2.0 ess 133ch'
                    ]
                ],
                [
                    'name' => 'Lanos',
                    'versions' => [
                        'Lanos'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.5 ess 86ch',
                        '1.6 ess 106ch'
                    ]
                ],
                [
                    'name' => 'Lanos coupé',
                    'versions' => [
                        'Lanos coupé'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.5 ess 86ch',
                        '1.6 ess 106ch'
                    ]
                ],
                [
                    'name' => 'Matiz',
                    'versions' => [
                        'Base',
                        'Best',
                        'Matiz'
                    ],
                    'engines' => [
                        '0.8 ess 48 ch',
                        '0.8 ess 48ch',
                        '0.8 ess 48ch BVA'
                    ]
                ],
                [
                    'name' => 'Musso',
                    'versions' => [
                        'Musso'
                    ],
                    'engines' => [
                        '2.9 TD 120ch',
                        '3.2 ess 220ch'
                    ]
                ],
                [
                    'name' => 'Nubira',
                    'versions' => [
                        'Nubira'
                    ],
                    'engines' => [
                        '1.6 ess 106ch',
                        '1.6 ess 109ch',
                        '1.8 ess 122ch',
                        '2.0 ess 133ch'
                    ]
                ],
                [
                    'name' => 'Nubira coupé',
                    'versions' => [
                        'Nubira coupé'
                    ],
                    'engines' => [
                        '1.6 ess 106ch',
                        '1.6 ess 109ch',
                        '1.8 ess 122ch',
                        '2.0 ess 133ch'
                    ]
                ],
                [
                    'name' => 'Racer',
                    'versions' => [
                        'Racer'
                    ],
                    'engines' => [
                        '1.5 ess ch',
                        '1.6 ess ch',
                        '2.0 ess ch'
                    ]
                ],
                [
                    'name' => 'Tico',
                    'versions' => [
                        'Tico'
                    ],
                    'engines' => [
                        '0.8 ess 41ch'
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
