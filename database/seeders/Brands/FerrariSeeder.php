<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class FerrariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Ferrari',
            'models' => [
                [
                    'name' => 'f208',
                    'versions' => [
                        '208'
                    ],
                    'engines' => [
                        '2.0 ess 170ch',
                        '2.0 ess Turbo 254ch'
                    ]
                ],
                [
                    'name' => '212',
                    'versions' => [
                        '212'
                    ],
                    'engines' => [
                        '2.6 ess 170ch'
                    ]
                ],
                [
                    'name' => '250',
                    'versions' => [
                        '250'
                    ],
                    'engines' => [
                        '3.0 ess 240ch',
                        '3.0 ess 250ch',
                        '3.0 ess 303ch'
                    ]
                ],
                [
                    'name' => '275',
                    'versions' => [
                        '275'
                    ],
                    'engines' => [
                        '3.3 ess 280ch',
                        '3.3 ess 300ch'
                    ]
                ],
                [
                    'name' => '288 GTO',
                    'versions' => [
                        '288 GTO'
                    ],
                    'engines' => [
                        '2.9 ess 400ch'
                    ]
                ],
                [
                    'name' => '308',
                    'versions' => [
                        '308'
                    ],
                    'engines' => [
                        '2.9 ess 255ch',
                        '2.9 ess 310ch',
                        '2.9 GTS 255ch'
                    ]
                ],
                [
                    'name' => '328',
                    'versions' => [
                        '328'
                    ],
                    'engines' => [
                        '3.2 ess 270ch',
                        '3.2 GTS 270ch'
                    ]
                ],
                [
                    'name' => '330',
                    'versions' => [
                        '330'
                    ],
                    'engines' => [
                        '4.0 ess 300ch',
                        '4.0 GTS 300ch'
                    ]
                ],
                [
                    'name' => '348',
                    'versions' => [
                        '348'
                    ],
                    'engines' => [
                        '3.4 ess 295ch',
                        '3.4 ess 320ch'
                    ]
                ],
                [
                    'name' => '355',
                    'versions' => [
                        '355'
                    ],
                    'engines' => [
                        '3.5 ess 380ch'
                    ]
                ],
                [
                    'name' => '360',
                    'versions' => [
                        '360'
                    ],
                    'engines' => [
                        '3.6 ess 400ch',
                        '3.6 ess 420ch'
                    ]
                ],
                [
                    'name' => '360 Modena',
                    'versions' => [
                        '360 Modena'
                    ],
                    'engines' => [
                        '3.6 ess 400ch',
                        '3.6 ess 425ch'
                    ]
                ],
                [
                    'name' => '365',
                    'versions' => [
                        '365'
                    ],
                    'engines' => [
                        '4.4 ess 340ch',
                        '4.4 ess 352ch'
                    ]
                ],
                [
                    'name' => '400',
                    'versions' => [
                        '400'
                    ],
                    'engines' => [
                        '4.8 ess 340ch'
                    ]
                ],
                [
                    'name' => '400 Superamerica',
                    'versions' => [
                        '400 Superamerica'
                    ],
                    'engines' => [
                        '4.0 ess 340ch'
                    ]
                ],
                [
                    'name' => '412',
                    'versions' => [
                        '412'
                    ],
                    'engines' => [
                        '5.0 ess 340ch'
                    ]
                ],
                [
                    'name' => '456',
                    'versions' => [
                        '456'
                    ],
                    'engines' => [
                        '5.5 GT 442ch',
                        '5.5 GTA 442ch'
                    ]
                ],
                [
                    'name' => '458 Italia',
                    'versions' => [
                        '458 Italia'
                    ],
                    'engines' => [
                        '4.5 ess 570ch',
                        '4.5 ess V8 570ch'
                    ]
                ],
                [
                    'name' => '512 tr',
                    'versions' => [
                        '512 tr'
                    ],
                    'engines' => [
                        '5.0 ess 428ch'
                    ]
                ],
                [
                    'name' => '550',
                    'versions' => [
                        '550'
                    ],
                    'engines' => [
                        '5.5 ess 485ch'
                    ]
                ],
                [
                    'name' => '575',
                    'versions' => [
                        '575'
                    ],
                    'engines' => [
                        '5.8 ess 515ch'
                    ]
                ],
                [
                    'name' => '575M',
                    'versions' => [
                        '575M'
                    ],
                    'engines' => [
                        '5.8 ess 515ch'
                    ]
                ],
                [
                    'name' => '599',
                    'versions' => [
                        '599'
                    ],
                    'engines' => [
                        '6.0 ess 620ch'
                    ]
                ],
                [
                    'name' => '599 GTO',
                    'versions' => [
                        '599 GTO'
                    ],
                    'engines' => [
                        '6.0 ess 670ch'
                    ]
                ],
                [
                    'name' => '612',
                    'versions' => [
                        '612'
                    ],
                    'engines' => [
                        '5.8 ess 540ch'
                    ]
                ],
                [
                    'name' => '612 Scaglietti',
                    'versions' => [
                        '612 Scaglietti'
                    ],
                    'engines' => [
                        '6.0 ess 540ch',
                        '6.0 ess V12 540ch'
                    ]
                ],
                [
                    'name' => 'BB',
                    'versions' => [
                        'BB'
                    ],
                    'engines' => [
                        '5.0 ess 360ch'
                    ]
                ],
                [
                    'name' => 'California',
                    'versions' => [
                        'California'
                    ],
                    'engines' => [
                        '4.3 ess 460ch',
                        '4.3 ess V8 460ch'
                    ]
                ],
                [
                    'name' => 'Enzo',
                    'versions' => [
                        'Enzo'
                    ],
                    'engines' => [
                        '6.0 ess 660ch'
                    ]
                ],
                [
                    'name' => 'F12berlinetta',
                    'versions' => [
                        'F12berlinetta'
                    ],
                    'engines' => [
                        '6.3 ess V12 740ch'
                    ]
                ],
                [
                    'name' => 'F40',
                    'versions' => [
                        'F40'
                    ],
                    'engines' => [
                        '2.9 ess 478ch'
                    ]
                ],
                [
                    'name' => 'F430',
                    'versions' => [
                        'F430'
                    ],
                    'engines' => [
                        '4.3 ess 490ch'
                    ]
                ],
                [
                    'name' => 'F50',
                    'versions' => [
                        'F50'
                    ],
                    'engines' => [
                        '4.7 ess 520ch'
                    ]
                ],
                [
                    'name' => 'F512 M',
                    'versions' => [
                        'F512 M'
                    ],
                    'engines' => [
                        '5.0 ess 440ch'
                    ]
                ],
                [
                    'name' => 'F599 GTB',
                    'versions' => [
                        'F599 GTB'
                    ],
                    'engines' => [
                        '6.0 ess 620ch'
                    ]
                ],
                [
                    'name' => 'FF',
                    'versions' => [
                        'FF'
                    ],
                    'engines' => [
                        '6.3 ess V12 660ch'
                    ]
                ],
                [
                    'name' => 'Mondial',
                    'versions' => [
                        'Mondial'
                    ],
                    'engines' => [
                        '2.9 ess Quattro 240ch',
                        '3.2 ess 270ch',
                        '3.4 ess 300ch'
                    ]
                ],
                [
                    'name' => 'Testarossa',
                    'versions' => [
                        'Testarossa'
                    ],
                    'engines' => [
                        '5.0 ess 380ch'
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
