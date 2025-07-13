<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class ChevroletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Chevrolet',
            'models' => [
                [
                    'name' => 'Avalanche',
                    'versions' => [
                        'Avalanche'
                    ],
                    'engines' => [
                        '5.3 ess 285ch',
                        '8.1 ess 320ch'
                    ]
                ],
                [
                    'name' => 'Aveo 4 portes',
                    'versions' => [
                        'Aveo 4 portes',
                        'Elegance Plus',
                        'Exclusive',
                        'LT'
                    ],
                    'engines' => [
                        '1.2 ess 16V 70ch',
                        '1.2 ess 16V 84ch',
                        '1.2 GPL 16V 81ch',
                        '1.3 VCDI 75ch',
                        '1.3 VCDI 90ch',
                        '1.4 ess 16V 100ch',
                        '1.4 ess ch',
                        '1.5 ess 85ch'
                    ]
                ],
                [
                    'name' => 'Aveo 5 portes',
                    'versions' => [
                        'Aveo 5 portes',
                        'LS+',
                        'Sport'
                    ],
                    'engines' => [
                        '1.2 ess 16V 70ch',
                        '1.2 ess 16V 84ch',
                        '1.2 GPL 16V 81ch',
                        '1.3 VCDI 75ch',
                        '1.3 VCDI 90ch',
                        '1.4 ess 16V 100ch',
                        '1.5 ess 85ch'
                    ]
                ],
                [
                    'name' => 'Blazer',
                    'versions' => [
                        'Blazer'
                    ],
                    'engines' => [
                        '4.3 ess 193ch'
                    ]
                ],
                [
                    'name' => 'Camaro',
                    'versions' => [
                        'Camaro',
                        'RS'
                    ],
                    'engines' => [
                        '3.6 ess 323ch',
                        '3.8 ess 193ch',
                        '5.7 ess 288ch',
                        '6.2 ess 405ch BVA',
                        '6.2 ess 436ch',
                        '6.2 ess V8 405ch BVA',
                        '6.2 ess V8 432ch'
                    ]
                ],
                [
                    'name' => 'Captiva',
                    'versions' => [
                        'LT',
                        'LTZ'
                    ],
                    'engines' => [
                        '2.0 D AWD 184ch',
                        '2.0 D AWD 184ch BVA',
                        '2.0 VCDI 127ch',
                        '2.0 VCDI 150ch',
                        '2.0 VCDI 163ch',
                        '2.0 VCDI 163ch BVA',
                        '2.2 VCDI 184ch',
                        '2.2 VCDI AWD 184ch',
                        '2.2 VCDI AWD 184ch BVA',
                        '3.2 ess V6 230ch'
                    ]
                ],
                [
                    'name' => 'CMP',
                    'versions' => [
                        'CMP'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Colorado',
                    'versions' => [
                        'cabine double ',
                        'cabine double LTZ'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Corvette C1',
                    'versions' => [
                        'Corvette C1'
                    ],
                    'engines' => [
                        '3.9 ess 150ch',
                        '4.4 ess 195ch',
                        '4.4 ess 210ch',
                        '4.4 ess 283ch',
                        '4.6 ess 250ch'
                    ]
                ],
                [
                    'name' => 'Corvette C2',
                    'versions' => [
                        'Corvette C2'
                    ],
                    'engines' => [
                        '5.4 ess 360ch'
                    ]
                ],
                [
                    'name' => 'Corvette C3',
                    'versions' => [
                        'Corvette C3'
                    ],
                    'engines' => [
                        '5.7 ess 165ch',
                        '5.7 ess 193ch',
                        '5.7 ess 200ch',
                        '5.7 ess 205ch',
                        '5.7 ess 213ch',
                        '5.7 ess 228ch',
                        '5.7 ess 253ch',
                        '7.5 ess 279ch'
                    ]
                ],
                [
                    'name' => 'Corvette C4',
                    'versions' => [
                        'Corvette C4'
                    ],
                    'engines' => [
                        '5.7 ess 205ch',
                        '5.7 ess 230ch',
                        '5.7 ess 245ch',
                        '5.7 ess 304ch',
                        '5.7 ess 334ch',
                        '5.7 ess 380ch'
                    ]
                ],
                [
                    'name' => 'Corvette C5',
                    'versions' => [
                        'Corvette C5'
                    ],
                    'engines' => [
                        '5.7 ess 345ch'
                    ]
                ],
                [
                    'name' => 'Cruze',
                    'versions' => [
                        'Cruze',
                        'LT',
                        'Notchback'
                    ],
                    'engines' => [
                        '1.6 ess 16V 113ch',
                        '1.8 ess 16V 141ch',
                        '1.8 ess 16V 141ch BVA',
                        '2.0 Turbo Diesel 161ch',
                        '2.0 Turbo Diesel 161ch BVA',
                        '2.0 VCDI 125ch',
                        '2.0 VCDI 150ch',
                        '2.0 VCDI 150ch BVA',
                        '2.0 VCDI 165ch',
                        '2.0 VCDI 165ch BVA'
                    ]
                ],
                [
                    'name' => 'Cruze Hatchback',
                    'versions' => [
                        'Cruze Hatchback'
                    ],
                    'engines' => [
                        '1.6 ess 16V 113ch',
                        '1.6 ess 16V 113ch BVA',
                        '1.8 ess 16V 141ch',
                        '2.0 VCDI 125ch',
                        '2.0 VCDI 150ch',
                        '2.0 VCDI 163ch'
                    ]
                ],
                [
                    'name' => 'Epica',
                    'versions' => [
                        'Epica'
                    ],
                    'engines' => [
                        '2.0 ess 144ch',
                        '2.0 VCDI 150ch',
                        '2.5 ess 156ch'
                    ]
                ],
                [
                    'name' => 'New Captiva',
                    'versions' => [
                        'New Captiva'
                    ],
                    'engines' => [
                        '2.2 Turbo Diesel 180ch',
                        '2.2 Turbo Diesel 180ch BVA'
                    ]
                ],
                [
                    'name' => 'New Colorado',
                    'versions' => [
                        'cabine simple'
                    ],
                    'engines' => [
                        '2.5 TD 4X2 150ch',
                        '2.5 TD 4X4 150ch'
                    ]
                ],
                [
                    'name' => 'New Spark',
                    'versions' => [
                        'Elegance',
                        'Fun',
                        'Luxe',
                        'New Spark'
                    ],
                    'engines' => [
                        '1.2 ess 16V 81ch'
                    ]
                ],
                [
                    'name' => 'Optra 4 portes',
                    'versions' => [
                        'LS',
                        'Optra 4 portes'
                    ],
                    'engines' => [
                        '1.4 ess 95ch',
                        '1.5 ess 112ch',
                        '1.6 ess 16V 109ch',
                        '2.0 TDCI 121ch'
                    ]
                ],
                [
                    'name' => 'Optra 5 portes',
                    'versions' => [
                        'Optra 5 portes'
                    ],
                    'engines' => [
                        '1.4 ess 95ch',
                        '1.6 ess 16V 109ch',
                        '1.8 ess 122ch',
                        '1.8 ess 16V 121ch',
                        '2.0 TDCI 121ch'
                    ]
                ],
                [
                    'name' => 'Orlando',
                    'versions' => [
                        'Orlando'
                    ],
                    'engines' => [
                        '1.8 ess DOHC 140 ch',
                        '2.0 VCDI 130ch',
                        '2.0 VCDI 163ch',
                        'ess 16V 141ch'
                    ]
                ],
                [
                    'name' => 'Rezzo',
                    'versions' => [
                        'Rezzo'
                    ],
                    'engines' => [
                        '1.6 ess 16V 106ch',
                        '2.0 ess 16V 121ch'
                    ]
                ],
                [
                    'name' => 'Sail 4 portes',
                    'versions' => [
                        'Exclusive',
                        'Sail 4 portes'
                    ],
                    'engines' => [
                        '1.2 ess 80ch',
                        '1.4 ess 97ch'
                    ]
                ],
                [
                    'name' => 'Sail 5 portes',
                    'versions' => [
                        'Exclusive',
                        'Sail 5 portes'
                    ],
                    'engines' => [
                        '1.2 ess 80ch',
                        '1.4 ess 97ch'
                    ]
                ],
                [
                    'name' => 'Sonic',
                    'versions' => [
                        'New'
                    ],
                    'engines' => [
                        '1.2 ess 85ch'
                    ]
                ],
                [
                    'name' => 'Sonic Hatchback',
                    'versions' => [
                        'LS',
                        'LT',
                        'Sonic Hatchback',
                        'Sportissimo'
                    ],
                    'engines' => [
                        '1.6 ess 113ch'
                    ]
                ],
                [
                    'name' => 'Spark',
                    'versions' => [
                        'Lite Base',
                        'Lite Ls',
                        'Spark'
                    ],
                    'engines' => [
                        '0.8 ess 48ch',
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'Tahoe',
                    'versions' => [
                        'Tahoe'
                    ],
                    'engines' => [
                        '5.3 ess V8 290ch'
                    ]
                ],
                [
                    'name' => 'Trailblazer',
                    'versions' => [
                        'Trailblazer'
                    ],
                    'engines' => [
                        '4.2 ess 273ch',
                        '4.2 ess V6 273ch'
                    ]
                ],
                [
                    'name' => 'Trans Sport',
                    'versions' => [
                        'Trans Sport'
                    ],
                    'engines' => [
                        '3.4 ess V6 186ch'
                    ]
                ],
                [
                    'name' => 'Trax',
                    'versions' => [
                        'LS',
                        'LT'
                    ],
                    'engines' => [
                        '1.8 ess DOHC 140 ch'
                    ]
                ],
                [
                    'name' => 'Typhoon',
                    'versions' => [
                        'Typhoon'
                    ],
                    'engines' => [
                        '4.3 ess 280ch'
                    ]
                ],
                [
                    'name' => 'Volt',
                    'versions' => [
                        'Volt'
                    ],
                    'engines' => [
                        '1.4  86ch Hybrid'
                    ]
                ],
                [
                    'name' => 'Work ',
                    'versions' => [
                        'Work '
                    ],
                    'engines' => [
                        '1.2 ess 85ch'
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
