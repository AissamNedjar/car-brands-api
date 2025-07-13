<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class MitsubishiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Mitsubishi',
            'models' => [
                [
                    'name' => '3000 GT',
                    'versions' => [
                        '3000 GT'
                    ],
                    'engines' => [
                        '3.0 ess 286ch'
                    ]
                ],
                [
                    'name' => 'ASX',
                    'versions' => [
                        'ASX'
                    ],
                    'engines' => [
                        '1.6 ess 115ch',
                        '1.8 D 115ch',
                        '1.8 D 150ch',
                        '1.8 D 4WD 115ch',
                        '1.8 D 4WD 150ch',
                        '1.8 D 4X4 150ch',
                        '2.0 ess 16v  150ch 4*2',
                        '2.0 ess 16v  150ch 4*2 BVA',
                        '2.0 Mivec 150 ch',
                        '2.0 Mivec 150 ch CVT'
                    ]
                ],
                [
                    'name' => 'Colt',
                    'versions' => [
                        'Colt'
                    ],
                    'engines' => [
                        '0.0 ess Turbo 105ch',
                        '1.1 ess 75ch',
                        '1.3 ess 75ch',
                        '1.3 ess 95ch',
                        '1.4 ess 70ch',
                        '1.5 D 95ch',
                        '1.5 ess 109ch',
                        '1.5 ess 150ch',
                        '1.5 ess 16V 109ch',
                        '1.5 ess 75ch',
                        '1.5 ess 90ch',
                        '1.5 ess Turbo 109ch',
                        '1.5 ess Turbo 150ch',
                        '1.5 GT 75ch',
                        '1.6 ess 113ch',
                        '1.6 GTI 125ch',
                        '1.6 GTI 16V 125ch',
                        '1.8 GTI 140ch',
                        '1.8 GTI 16V 136ch'
                    ]
                ],
                [
                    'name' => 'Colt CZC',
                    'versions' => [
                        'Colt CZC'
                    ],
                    'engines' => [
                        '1.5 ess 109ch',
                        '1.5 ess Turbo 150ch'
                    ]
                ],
                [
                    'name' => 'Galant',
                    'versions' => [
                        'Galant'
                    ],
                    'engines' => [
                        '1.8 ess 126ch',
                        '1.8 ess 90ch',
                        '2.0 ess 112ch',
                        '2.0 ess 16V 145ch',
                        '2.0 GTI 16V 150ch',
                        '2.0 TD 90ch',
                        '2.5 ess V6 170ch'
                    ]
                ],
                [
                    'name' => 'Grandis',
                    'versions' => [
                        'Grandis'
                    ],
                    'engines' => [
                        '2.0 D 136ch',
                        '2.0 D 140ch',
                        '2.4 ess 165ch'
                    ]
                ],
                [
                    'name' => 'L200',
                    'versions' => [
                        'Doube cabine Evolution',
                        'L200',
                        'New',
                        'Simple cabine dynamique +'
                    ],
                    'engines' => [
                        '2.5 D',
                        '2.5 D 136ch',
                        '2.5 D 170ch',
                        '2.5 TD 115ch',
                        '2.5 TD 178ch',
                        'D4 136 ch'
                    ]
                ],
                [
                    'name' => 'Lancer',
                    'versions' => [
                        'EX',
                        'GLX',
                        'Lancer'
                    ],
                    'engines' => [
                        '1.3 ess 88ch',
                        '1.6 ess 16v 117ch',
                        '1.8 ess 143ch',
                        '2.0 D 140ch',
                        '2.0 ess 265ch',
                        '2.0 ess 280ch',
                        '2.0 ess 295ch',
                        '2.0 ess 345ch'
                    ]
                ],
                [
                    'name' => 'Mirage',
                    'versions' => [
                        'Connect Edition ',
                        'Fun',
                        'Mirage',
                        'Star'
                    ],
                    'engines' => [
                        '1.2 ess 80ch',
                        '1.2 ess CVT 80ch'
                    ]
                ],
                [
                    'name' => 'Outlander',
                    'versions' => [
                        'Outlander'
                    ],
                    'engines' => [
                        '2.0 D 140ch',
                        '2.0 ess 136ch',
                        '2.0 ess Turbo 202ch',
                        '2.2 D 156ch',
                        '2.2 D 177ch',
                        '2.2 D 4WD 150ch',
                        '2.2 D 4WD 150ch BVA',
                        '2.4 ess 160ch'
                    ]
                ],
                [
                    'name' => 'Pajero Court',
                    'versions' => [
                        'Pajero Court'
                    ],
                    'engines' => [
                        '2.0 ess 110ch',
                        '2.0 ess Turbo 145ch',
                        '2.4 TD 84ch',
                        '2.5 D 95ch',
                        '2.5 D 99ch',
                        '2.5 TD 84ch',
                        '2.6 ess 103ch',
                        '2.8 D 125ch',
                        '3.0 ess V6 141ch',
                        '3.0 ess V6 150ch',
                        '3.2 D 160ch',
                        '3.2 D 165ch',
                        '3.2 D 165ch BVA',
                        '3.2 D 170ch BVA',
                        '3.2 D 200ch',
                        '3.2 D 200ch BVA',
                        '3.5 ess V6 194ch',
                        '3.5 ess V6 202ch',
                        '3.5 ess V6 208ch'
                    ]
                ],
                [
                    'name' => 'Pajero Pinin',
                    'versions' => [
                        'Pajero Pinin'
                    ],
                    'engines' => [
                        '1.8 ess 120ch',
                        '2.0 ess 129ch',
                        '2.0 ess 129ch BVA'
                    ]
                ],
                [
                    'name' => 'Pajero Sport',
                    'versions' => [
                        'evolution',
                        'High power',
                        'Pajero Sport'
                    ],
                    'engines' => [
                        '2.5 DI-D 136 ch Common Rail',
                        '2.5 DI-D 178 ch BVA Common Rail',
                        '2.5 DI-D 178 ch Common Rail',
                        '2.5 TD 100ch',
                        '2.5 TD 115ch',
                        '3.0 ess V6 185ch',
                        '3.0 ess V6 185ch BVA'
                    ]
                ],
                [
                    'name' => 'Space Runner',
                    'versions' => [
                        'Space Runner'
                    ],
                    'engines' => [
                        '1.8 ess 122ch'
                    ]
                ],
                [
                    'name' => 'Space Wagon',
                    'versions' => [
                        'Space Wagon'
                    ],
                    'engines' => [
                        '2.0 ess 133ch',
                        '2.0 TD 82ch'
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
