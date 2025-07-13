<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class MaseratiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Maserati',
            'models' => [
                [
                    'name' => '222',
                    'versions' => [
                        '222'
                    ],
                    'engines' => [
                        '2.0 ess 220ch',
                        '2.8 ess 225ch'
                    ]
                ],
                [
                    'name' => '3200 GT',
                    'versions' => [
                        '3200 GT'
                    ],
                    'engines' => [
                        '3.2 ess 370ch'
                    ]
                ],
                [
                    'name' => '3500 GT',
                    'versions' => [
                        '3500 GT'
                    ],
                    'engines' => [
                        '3.5 ess 220ch',
                        '3.5 ess 235ch'
                    ]
                ],
                [
                    'name' => '420',
                    'versions' => [
                        '420'
                    ],
                    'engines' => [
                        '2.0 ess 220ch'
                    ]
                ],
                [
                    'name' => '422',
                    'versions' => [
                        '422'
                    ],
                    'engines' => [
                        '2.0 ess 220ch'
                    ]
                ],
                [
                    'name' => '424',
                    'versions' => [
                        '424'
                    ],
                    'engines' => [
                        '2.0 ess 240ch',
                        '2.0 ess 248ch'
                    ]
                ],
                [
                    'name' => '425',
                    'versions' => [
                        '425'
                    ],
                    'engines' => [
                        '2.5 ess 200ch'
                    ]
                ],
                [
                    'name' => '430',
                    'versions' => [
                        '430'
                    ],
                    'engines' => [
                        '2.8 ess 250ch'
                    ]
                ],
                [
                    'name' => 'Biturbo',
                    'versions' => [
                        'Biturbo'
                    ],
                    'engines' => [
                        '2.0 ess 180ch',
                        '2.5 ess 185ch'
                    ]
                ],
                [
                    'name' => 'Bora ',
                    'versions' => [
                        'Bora'
                    ],
                    'engines' => [
                        '4.7 ess 310ch'
                    ]
                ],
                [
                    'name' => 'Coupé',
                    'versions' => [
                        'Coupé'
                    ],
                    'engines' => [
                        '4.3 ess 390ch',
                        '4.3 ess 400ch'
                    ]
                ],
                [
                    'name' => 'Coupe GT',
                    'versions' => [
                        'Coupe GT'
                    ],
                    'engines' => [
                        '4.2 ess V8 390ch'
                    ]
                ],
                [
                    'name' => 'Ghibli',
                    'versions' => [
                        'Ghibli'
                    ],
                    'engines' => [
                        '2.0 ess 330ch',
                        '2.8 ess 285ch',
                        '4.9 ess 335ch'
                    ]
                ],
                [
                    'name' => 'GranCabrio',
                    'versions' => [
                        'GranCabrio'
                    ],
                    'engines' => [
                        '4.7 ess 450ch',
                        '4.7 ess V8 440ch'
                    ]
                ],
                [
                    'name' => 'GranSport',
                    'versions' => [
                        'GranSport'
                    ],
                    'engines' => [
                        '4.2 ess 400ch'
                    ]
                ],
                [
                    'name' => 'Gran Turismo',
                    'versions' => [
                        'Gran Turismo'
                    ],
                    'engines' => [
                        '4.2 ess 405ch',
                        '4.2 ess V8 405ch',
                        '4.7 ess 440ch',
                        '4.7 ess 450ch'
                    ]
                ],
                [
                    'name' => 'Indy',
                    'versions' => [
                        'Indy'
                    ],
                    'engines' => [
                        '4.9 ess 320ch'
                    ]
                ],
                [
                    'name' => 'Kyalami',
                    'versions' => [
                        'Kyalami'
                    ],
                    'engines' => [
                        '4.1 ess 270ch',
                        '4.9 ess 320ch'
                    ]
                ],
                [
                    'name' => 'Merak',
                    'versions' => [
                        'Merak'
                    ],
                    'engines' => [
                        '2.0 ess 170ch',
                        '3.0 ess 190ch',
                        '3.0 ess 220ch'
                    ]
                ],
                [
                    'name' => 'Mistral',
                    'versions' => [
                        'Mistral'
                    ],
                    'engines' => [
                        '4.0 ess 255ch'
                    ]
                ],
                [
                    'name' => 'Quattroporte',
                    'versions' => [
                        'Quattroporte'
                    ],
                    'engines' => [
                        '4.1 ess 260ch',
                        '4.2 ess 400ch',
                        '4.2 ess V8 400ch',
                        '4.7 ess 430ch',
                        '4.7 GTS 440ch'
                    ]
                ],
                [
                    'name' => 'Quattroporte III',
                    'versions' => [
                        'Quattroporte III'
                    ],
                    'engines' => [
                        '4.1 ess 255ch',
                        '4.1 ess 270ch',
                        '4.9 ess 280ch',
                        '4.9 ess 320ch'
                    ]
                ],
                [
                    'name' => 'Quattroporte IV',
                    'versions' => [
                        'Quattroporte IV'
                    ],
                    'engines' => [
                        '2.8 ess 280ch',
                        '3.2 ess V8 335ch'
                    ]
                ],
                [
                    'name' => 'Quattroporte V',
                    'versions' => [
                        'Quattroporte V'
                    ],
                    'engines' => [
                        '4.3 ess 400ch'
                    ]
                ],
                [
                    'name' => 'Shamal',
                    'versions' => [
                        'Shamal'
                    ],
                    'engines' => [
                        '3.2 ess 326ch'
                    ]
                ],
                [
                    'name' => 'Spyder',
                    'versions' => [
                        'Spyder'
                    ],
                    'engines' => [
                        '2.0 ess 180ch',
                        '4.3 ess 390ch'
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
