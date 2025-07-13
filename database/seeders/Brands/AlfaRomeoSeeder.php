<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class AlfaRomeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Alfa Romeo',
            'models' => [
                [
                    'name' => '145',
                    'versions' => [
                        '145'
                    ],
                    'engines' => [
                        '1.4 ess 90ch',
                        '1.4 TS 16V 103ch',
                        '1.6 ess 103ch',
                        '1.6 TS 16V 120ch',
                        '1.7 ess 16V 129ch',
                        '1.9 TD 90ch',
                        '2.0 ess 150ch',
                        '2.0 ess 155ch'
                    ]
                ],
                [
                    'name' => '146',
                    'versions' => [
                        '146'
                    ],
                    'engines' => [
                        '1.4 ess 90ch',
                        '1.6 ess 103ch',
                        '1.6 TS 16V 120ch',
                        '1.7 ess 16V 129ch',
                        '1.8 TS 16V 140ch',
                        '1.9 TD 90ch',
                        '2.0 ess 150ch'
                    ]
                ],
                [
                    'name' => '147',
                    'versions' => [
                        '147'
                    ],
                    'engines' => [
                        '1.6 TS 105ch',
                        '1.6 TS 120ch',
                        '1.9 JTD 100ch',
                        '1.9 JTD 115ch',
                        '1.9 JTD 120ch',
                        '1.9 JTD 126ch',
                        '1.9 JTD 140ch',
                        '1.9 JTD 150ch',
                        '1.9 JTDM 120ch',
                        '1.9 JTDM 150ch',
                        '2.0 TS 150ch',
                        '3.2 GTA 250ch'
                    ]
                ],
                [
                    'name' => '155',
                    'versions' => [
                        '155'
                    ],
                    'engines' => [
                        '1.8 ess 115ch',
                        '1.8 ess 129ch',
                        '1.8 TS 16V 140ch',
                        '1.9 TD 92ch',
                        '2.0 ess 143ch',
                        '2.0 ess 190ch',
                        '2.0 TS 16V 150ch',
                        '2.5 ess V6 166ch',
                        '2.5 TD 125ch'
                    ]
                ],
                [
                    'name' => '156',
                    'versions' => [
                        '156'
                    ],
                    'engines' => [
                        '1.6 TS 120ch',
                        '1.8 TS 144ch',
                        '1.9 D 150ch',
                        '1.9 JTD 105ch',
                        '1.9 JTD 110ch',
                        '1.9 JTD 115ch',
                        '1.9 JTD 140ch',
                        '2.0 ess 155ch',
                        '2.0 JTS 165ch',
                        '2.0 TS 155ch',
                        '2.4 JTD 136ch',
                        '2.4 JTD 150ch',
                        '2.4 JTD 175ch',
                        '2.5 ess V6 190ch',
                        '3.2 GTA 250ch'
                    ]
                ],
                [
                    'name' => '156 SW',
                    'versions' => [
                        '156 SW'
                    ],
                    'engines' => [
                        '1.9 JTD 126ch',
                        '1.9 JTD 150ch'
                    ]
                ],
                [
                    'name' => '159',
                    'versions' => [
                        '159'
                    ],
                    'engines' => [
                        '1.7 TBI 200ch',
                        '1.8 MPI 140ch',
                        '1.9 JTD 120ch',
                        '1.9 JTDM 120ch',
                        '1.9 JTDM 136ch',
                        '1.9 JTDM 150ch',
                        '1.9 JTDM 170ch',
                        '1.9 JTS 160ch',
                        '2.2 JTS 185ch',
                        '2.4 JTD 200ch',
                        '2.4 JTDM 200ch',
                        '2.4 JTDM 210ch',
                        '3.2 JTS V6 260ch'
                    ]
                ],
                [
                    'name' => '164',
                    'versions' => [
                        '164'
                    ],
                    'engines' => [
                        '2.0 ess Turbo V6 205ch',
                        '2.0 TS 148ch',
                        '2.5 TD 125ch',
                        '3.0 ess 230ch',
                        '3.0 ess V6 210ch'
                    ]
                ],
                [
                    'name' => '166',
                    'versions' => [
                        '166'
                    ],
                    'engines' => [
                        '2.0 ess Turbo V6 205ch',
                        '2.0 TS 150ch',
                        '2.0 TS 155ch',
                        '2.4 JTD 136ch',
                        '2.4 JTD 150ch',
                        '2.4 JTD 175ch',
                        '2.4 JTD 185ch',
                        '2.5 ess V6 190ch',
                        '3.0 ess V6 220ch',
                        '3.0 ess V6 226ch',
                        '3.2 ess V6 240ch'
                    ]
                ],
                [
                    'name' => '2600',
                    'versions' => [
                        '2600'
                    ],
                    'engines' => [
                        '2.6 ess 145ch'
                    ]
                ],
                [
                    'name' => '33',
                    'versions' => [
                        '33'
                    ],
                    'engines' => [
                        '1.4 ess 79ch',
                        '1.4 ess 86ch',
                        '1.4 ess 88ch',
                        '1.4 ess 90ch',
                        '1.5 ess 105ch',
                        '1.5 ess 4X4 105ch',
                        '1.5 ess 4X4 85ch',
                        '1.5 ess 4X4 95ch',
                        '1.5 ess 85ch',
                        '1.5 ess 95ch',
                        '1.7 ess 107ch',
                        '1.7 ess 110ch',
                        '1.7 ess 118ch',
                        '1.7 ess 16V 132ch',
                        '1.7 ess 16V 137ch'
                    ]
                ],
                [
                    'name' => '6',
                    'versions' => [
                        '6'
                    ],
                    'engines' => [
                        '2.0 ess 135ch',
                        '2.5 ess 158ch',
                        '2.5 ess V6 160ch',
                        '2.5 TD 105ch'
                    ]
                ],
                [
                    'name' => '75',
                    'versions' => [
                        '75'
                    ],
                    'engines' => [
                        '1.6 ess 107ch',
                        '1.6 ess 110ch',
                        '1.8 ess 120ch',
                        '1.8 ess 122ch',
                        '1.8 ess Turbo 155ch',
                        '1.8 ess Turbo 165ch',
                        '2.0 TD 95ch',
                        '2.0 TS 148ch',
                        '2.4 TD 112ch',
                        '2.5 ess V6 156ch',
                        '3.0 ess V6 180ch',
                        '3.0 ess V6 188ch',
                        '3.0 ess V6 192ch'
                    ]
                ],
                [
                    'name' => '8C Competizione',
                    'versions' => [
                        '8C Competizione'
                    ],
                    'engines' => [
                        '4.7 ess 450ch'
                    ]
                ],
                [
                    'name' => '8C Spider',
                    'versions' => [
                        '8C Spider'
                    ],
                    'engines' => [
                        '4.7 ess V8 450ch'
                    ]
                ],
                [
                    'name' => '90',
                    'versions' => [
                        '90'
                    ],
                    'engines' => [
                        '2.0 ess 128ch',
                        '2.0 ess 130ch',
                        '2.4 TD 110ch'
                    ]
                ],
                [
                    'name' => 'Alfasud',
                    'versions' => [
                        'Alfasud'
                    ],
                    'engines' => [
                        '1.2 ess 68ch',
                        '1.3 ess 76ch',
                        '1.5 ess 105ch'
                    ]
                ],
                [
                    'name' => 'Alfetta GTV',
                    'versions' => [
                        'Alfetta GTV'
                    ],
                    'engines' => [
                        '2.0 ess 130ch',
                        '2.5 ess V6 160ch'
                    ]
                ],
                [
                    'name' => 'Brera',
                    'versions' => [
                        'Brera'
                    ],
                    'engines' => [
                        '1.7 TBI 200ch',
                        '2.2 JTS 185ch',
                        '2.4 D 200ch',
                        '2.4 JTD 200ch',
                        '2.4 JTDM 200ch',
                        '2.4 JTDM 210ch',
                        '3.2 JTS V6 260ch'
                    ]
                ],
                [
                    'name' => 'Giulia',
                    'versions' => [
                        'Giulia'
                    ],
                    'engines' => [
                        '1.6 ess 102ch',
                        '1.6 ess 112ch',
                        '1.6 ess 170ch'
                    ]
                ],
                [
                    'name' => 'Giulietta',
                    'versions' => [
                        'Distinctive ',
                        'Distinctive Premium',
                        'Distinctive Sport',
                        'Exclusive',
                        'Giulietta',
                        'Pack Premium',
                        'TCT'
                    ],
                    'engines' => [
                        '1.3 ess 100ch',
                        '1.3 ess 79ch',
                        '1.3 ess 96ch',
                        '1.4 ess 105 ch',
                        '1.4 ess 120ch',
                        '1.4 ess 170ch',
                        '1.4 Multi Air 170ch BVA',
                        '1.4 TB 120ch',
                        '1.6 JTDM 105ch',
                        '1.6 JTDM 140ch',
                        '1.6 JTDM 170ch',
                        '1.7 ess 235ch',
                        '2.0 Mjet 140ch',
                        '2.0 Mjet 170ch TCT'
                    ]
                ],
                [
                    'name' => 'GT',
                    'versions' => [
                        'GT'
                    ],
                    'engines' => [
                        '1.8 TS 140ch',
                        '1.9 JTD 150ch',
                        '1.9 JTDM 150ch',
                        '1.9 JTDM 170ch',
                        '1.9 MultiJet 150ch',
                        '2.0 JTS 165ch',
                        '3.2 ess V6 240ch'
                    ]
                ],
                [
                    'name' => 'GTV',
                    'versions' => [
                        'GTV'
                    ],
                    'engines' => [
                        '1.8 TS 144ch',
                        '2.0 ess Turbo V6 205ch',
                        '2.0 JTS 165ch',
                        '2.0 TS 150ch',
                        '3.0 ess V6 220ch',
                        '3.2 ess V6 240ch'
                    ]
                ],
                [
                    'name' => 'MiTo',
                    'versions' => [
                        'MiTo',
                        'Pack sport'
                    ],
                    'engines' => [
                        '0.9 ess 85ch',
                        '1.3 JTDM 85ch',
                        '1.3 JTDM 90ch',
                        '1.3 JTDM 95ch',
                        '1.4 ess 105ch',
                        '1.4 ess 155ch',
                        '1.4 ess 16V 155ch',
                        '1.4 ess 170ch',
                        '1.4 MPI 70ch',
                        '1.4 MPI 78ch',
                        '1.4 TB 135ch',
                        '1.6 JTDM 120ch'
                    ]
                ],
                [
                    'name' => 'Montréal',
                    'versions' => [
                        'Montréal'
                    ],
                    'engines' => [
                        '2.6 ess V8 200ch'
                    ]
                ],
                [
                    'name' => 'RZ',
                    'versions' => [
                        'RZ'
                    ],
                    'engines' => [
                        '3.0 ess V6 210ch'
                    ]
                ],
                [
                    'name' => 'Spider',
                    'versions' => [
                        'Spider'
                    ],
                    'engines' => [
                        '1.7 TBI 200ch',
                        '1.8 TS 16V 144ch',
                        '2.0 ess 150ch',
                        '2.0 JTDM 170ch',
                        '2.2 JTS 185ch',
                        '2.4 JTDM 200ch',
                        '2.4 JTDM 210ch',
                        '3.0 ess V6 192ch',
                        '3.2 ess V6 240ch',
                        '3.2 JTS V6 260ch'
                    ]
                ],
                [
                    'name' => 'SZ',
                    'versions' => [
                        'SZ'
                    ],
                    'engines' => [
                        '3.0 ess V6 210ch'
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
