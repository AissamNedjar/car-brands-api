<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class LamborghiniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Lamborghini',
            'models' => [
                [
                    'name' => '350 GT',
                    'versions' => [
                        '350 GT'
                    ],
                    'engines' => [
                        '3.5 ess 270ch'
                    ]
                ],
                [
                    'name' => '400 GT',
                    'versions' => [
                        '400 GT'
                    ],
                    'engines' => [
                        '3.9 ess 320ch'
                    ]
                ],
                [
                    'name' => 'Aventador',
                    'versions' => [
                        'Aventador'
                    ],
                    'engines' => [
                        '6.5 ess 700ch'
                    ]
                ],
                [
                    'name' => 'Countach',
                    'versions' => [
                        'Countach'
                    ],
                    'engines' => [
                        '3.9 ess 375ch',
                        '4.8 ess 375ch',
                        '5.2 ess 455ch',
                        '5.2 ess Quattro 455ch'
                    ]
                ],
                [
                    'name' => 'Diablo',
                    'versions' => [
                        'Diablo'
                    ],
                    'engines' => [
                        '5.7 ess 492ch',
                        '5.7 ess 519ch',
                        '5.7 ess 525ch',
                        '5.7 ess 530ch',
                        '6.0 ess 550ch',
                        '6.0 GT 575ch'
                    ]
                ],
                [
                    'name' => 'Espada',
                    'versions' => [
                        'Espada'
                    ],
                    'engines' => [
                        '3.9 GT 325ch',
                        '3.9 GT 350ch'
                    ]
                ],
                [
                    'name' => 'Gallardo',
                    'versions' => [
                        'Gallardo'
                    ],
                    'engines' => [
                        '5.0 ess 500ch',
                        '5.0 ess 520ch'
                    ]
                ],
                [
                    'name' => 'Gallardo LP 550 2',
                    'versions' => [
                        'Gallardo LP 550 2'
                    ],
                    'engines' => [
                        '5.2 ess 550ch'
                    ]
                ],
                [
                    'name' => 'Gallardo LP 560 4',
                    'versions' => [
                        'Gallardo LP 560 4'
                    ],
                    'engines' => [
                        '5.2 ess 566ch'
                    ]
                ],
                [
                    'name' => 'Gallardo Superleggera',
                    'versions' => [
                        'Gallardo Superleggera'
                    ],
                    'engines' => [
                        '5.0 ess 530ch',
                        '5.0 ess 570ch'
                    ]
                ],
                [
                    'name' => 'Islero',
                    'versions' => [
                        'Islero'
                    ],
                    'engines' => [
                        '3.9 GT 320ch'
                    ]
                ],
                [
                    'name' => 'Jalpa',
                    'versions' => [
                        'Jalpa'
                    ],
                    'engines' => [
                        '3.5 ess 255ch'
                    ]
                ],
                [
                    'name' => 'LM 002',
                    'versions' => [
                        'LM 002'
                    ],
                    'engines' => [
                        '5.2 ess 455ch'
                    ]
                ],
                [
                    'name' => 'Miura',
                    'versions' => [
                        'Miura'
                    ],
                    'engines' => [
                        '3.9 ess 350ch',
                        '3.9 ess 370ch',
                        '3.9 ess 385ch'
                    ]
                ],
                [
                    'name' => 'Murcielago',
                    'versions' => [
                        'Murcielago'
                    ],
                    'engines' => [
                        '6.2 ess 580ch',
                        '6.5 ess 640ch'
                    ]
                ],
                [
                    'name' => 'Murcielago LP 640',
                    'versions' => [
                        'Murcielago LP 640'
                    ],
                    'engines' => [
                        '6.5 ess 640ch'
                    ]
                ],
                [
                    'name' => 'Murcielago LP 670',
                    'versions' => [
                        'Murcielago LP 670'
                    ],
                    'engines' => [
                        '6.5 ess 670ch'
                    ]
                ],
                [
                    'name' => 'Reventon',
                    'versions' => [
                        'Reventon'
                    ],
                    'engines' => [
                        '6.5 ess 650ch',
                        '6.5 ess 670ch'
                    ]
                ],
                [
                    'name' => 'Silhouette',
                    'versions' => [
                        'Silhouette'
                    ],
                    'engines' => [
                        '3.0 ess 265ch'
                    ]
                ],
                [
                    'name' => 'Urraco',
                    'versions' => [
                        'Urraco'
                    ],
                    'engines' => [
                        '2.0 ess 182ch',
                        '2.5 ess 220ch',
                        '3.0 ess 260ch'
                    ]
                ],
                [
                    'name' => 'Urus',
                    'versions' => [
                        'Urus'
                    ],
                    'engines' => [
                        '4.0 ess BiTurbo V8 600ch'
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
