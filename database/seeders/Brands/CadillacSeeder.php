<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class CadillacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Cadillac',
            'models' => [
                [
                    'name' => 'Allante',
                    'versions' => [
                        'Allante'
                    ],
                    'engines' => [
                        '4.5 ess 200ch'
                    ]
                ],
                [
                    'name' => 'BLS',
                    'versions' => [
                        'BLS'
                    ],
                    'engines' => [
                        '1.9 D 150ch BVA',
                        '2.0  175ch',
                        '2.0 D 150ch',
                        '2.0 D 180ch',
                        '2.0 ess 175ch',
                        '2.0 ess 210ch',
                        '2.0 ess AWD 210ch',
                        '2.8 ess V6 255ch',
                        '2.8 ess V6 280ch',
                        '2.8 ess V6 AWD 280ch'
                    ]
                ],
                [
                    'name' => 'CTS',
                    'versions' => [
                        'CTS'
                    ],
                    'engines' => [
                        '2.6 ess V6 181ch',
                        '2.8 ess V6 211ch',
                        '3.0 ess V6 276ch',
                        '3.2 ess 218ch',
                        '3.2 ess V6 217ch',
                        '3.6 ess V6 257ch',
                        '3.6 ess V6 311ch',
                        '5.7 ess 400ch',
                        '6.2 ess 564ch'
                    ]
                ],
                [
                    'name' => 'CTS Coupe',
                    'versions' => [
                        'CTS Coupe'
                    ],
                    'engines' => [
                        '3.6 ess V6 311ch',
                        '6.2 ess 564ch'
                    ]
                ],
                [
                    'name' => 'CTS Sport Wagon',
                    'versions' => [
                        'CTS Sport Wagon'
                    ],
                    'engines' => [
                        '3.0 ess V6 276ch',
                        '3.6 ess V6 311ch',
                        '6.2 ess 564ch'
                    ]
                ],
                [
                    'name' => 'Eldorado',
                    'versions' => [
                        'Eldorado'
                    ],
                    'engines' => [
                        '4.6 ess 305ch'
                    ]
                ],
                [
                    'name' => 'Escalade',
                    'versions' => [
                        'Escalade'
                    ],
                    'engines' => [
                        '6.2 ess V8 403ch',
                        '6.2 ess V8 409ch'
                    ]
                ],
                [
                    'name' => 'Fleetwood',
                    'versions' => [
                        'Fleetwood'
                    ],
                    'engines' => [
                        '4.5 ess 180ch'
                    ]
                ],
                [
                    'name' => 'Seville 3',
                    'versions' => [
                        'Seville 3'
                    ],
                    'engines' => [
                        '4.5 ess 180ch'
                    ]
                ],
                [
                    'name' => 'Seville 4',
                    'versions' => [
                        'Seville 4'
                    ],
                    'engines' => [
                        '4.9 ess 200ch'
                    ]
                ],
                [
                    'name' => 'Seville 5',
                    'versions' => [
                        'Seville 5'
                    ],
                    'engines' => [
                        '4.6 ess 305ch'
                    ]
                ],
                [
                    'name' => 'SRX',
                    'versions' => [
                        'SRX'
                    ],
                    'engines' => [
                        '3.0 ess V6 268ch',
                        '3.6 ess V6 258ch',
                        '4.6 ess 325ch',
                        '4.6 ess V8 325ch'
                    ]
                ],
                [
                    'name' => 'STS',
                    'versions' => [
                        'STS'
                    ],
                    'engines' => [
                        '3.6 ess V6 257ch',
                        '3.6 ess V6 311ch',
                        '4.4 ess 476ch',
                        '4.4 ess V8 476ch',
                        '4.6 ess V8 325ch'
                    ]
                ],
                [
                    'name' => 'XLR',
                    'versions' => [
                        'XLR'
                    ],
                    'engines' => [
                        '4.4 ess 448ch',
                        '4.4 ess 450ch',
                        '4.6 ess 315ch'
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
