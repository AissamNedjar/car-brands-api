<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class PorscheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Porsche',
            'models' => [
                [
                    'name' => '911',
                    'versions' => [
                        '911',
                        'Carrera '
                    ],
                    'engines' => [
                        '2.0 ess 130ch',
                        '2.7 ess 150ch',
                        '2.7 ess 165ch',
                        '3.0 ess Turbo 260ch',
                        '3.3 ess Turbo 300ch',
                        '3.3 ess Turbo 320ch',
                        '3.6 ess Turbo 360ch',
                        '3.6 ess Turbo 408ch',
                        '3.6 ess Turbo 420ch',
                        '3.6 ess Turbo 480ch',
                        '3.8 ess 400ch',
                        '3.8 ess Turbo 500ch',
                        'Carrera 2 - 3.6 ess 250ch',
                        'Carrera - 2.7 ess 210ch',
                        'Carrera 3.0 - 3.0 ess 200ch',
                        'Carrera - 3.2 ess 231ch',
                        'Carrera - 3.4 ess 300ch',
                        'Carrera - 3.4 ess 350ch',
                        'Carrera - 3.6 ess 272ch',
                        'Carrera - 3.6 ess 285ch',
                        'Carrera - 3.6 ess 320ch',
                        'Carrera - 3.6 ess 325ch',
                        'Carrera - 3.6 ess 345ch',
                        'Carrera 4 - 3.4 ess 300ch',
                        'Carrera 4 - 3.4 ess 350ch',
                        'Carrera 4 - 3.6 ess 250ch',
                        'Carrera 4 - 3.6 ess 320ch',
                        'Carrera 4 - 3.6 ess 325ch',
                        'Carrera 4 - 3.6 ess 345ch',
                        'Carrera 4 PDK - 3.4 ess 350ch',
                        'Carrera 4S - 3.6 ess 285ch',
                        'Carrera 4S - 3.6 ess 320ch',
                        'Carrera 4 S - 3.8 ess 355ch',
                        'Carrera 4S - 3.8 ess 355ch',
                        'Carrera 4 S - 3.8 ess 385ch',
                        'Carrera 4S - 3.8 ess 400ch',
                        'Carrera 4S PDK - 3.8 ess 385ch',
                        'Carrera 4S PDK - 3.8 ess 400ch',
                        'Carrera Club Sport - 3.2 ess 231ch',
                        'Carrera GTS - 3.8 GTS 408ch',
                        'Carrera PDK - 3.4 ess 350ch',
                        'Carrera RS - 2.7 ess 210ch',
                        'Carrera RS 3.0 - 3.0 ess 230ch',
                        'Carrera RS - 3.6 ess 260ch',
                        'Carrera RS 3.8 - 3.8 ess 300ch',
                        'Carrera RS - 3.8 ess 300ch',
                        'Carrera S - 3.6 ess 285ch',
                        'Carrera S 3.8 - 3.8 ess 300ch',
                        'Carrera S - 3.8 ess 355ch',
                        'Carrera S - 3.8 ess 385ch',
                        'Carrera S - 3.8 ess 400ch',
                        'Carrera S PDK - 3.8 ess 385ch',
                        'E - 2.0 ess 140ch',
                        'E 2.2 - 2.2 ess 155ch',
                        'E 2.4 - 2.4 ess 165ch',
                        'GT1 - 3.2 ess 544ch',
                        'GT2 - 3.6 ess 430ch',
                        'GT2 - 3.6 ess 462ch',
                        'GT2 - 3.6 ess 483ch',
                        'GT2 - 3.6 ess 530ch',
                        'GT2 RS - 3.6 ess 620ch',
                        'GT3 - 3.6 ess 360ch',
                        'GT3 - 3.6 ess 381ch',
                        'GT3 - 3.6 ess 415ch',
                        'GT3 - 3.8 ess 435ch',
                        'GT3 RS - 3.6 ess 381ch',
                        'GT3 RS - 3.6 ess 415ch',
                        'GT3 RS - 3.8 ess 450ch',
                        'L - 2.0 ess 130ch',
                        'S - 2.0 ess 160ch',
                        'S 2.2 - 2.2 ess 180ch',
                        'S 2.4 - 2.4 ess 190ch',
                        'S 2.7 - 2.7 ess 175ch',
                        'SC - 3.0 ess 180ch',
                        'SC - 3.0 ess 188ch',
                        'SC - 3.0 ess 204ch',
                        'Speedster - 3.6 ess 250ch',
                        'Speedster - 3.8 ess 408ch',
                        'T - 2.0 ess 110ch',
                        'T 2.2 - 2.2 ess 125ch',
                        'T 2.4 - 2.4 ess 130ch',
                        'Targa - 3.6 ess 285ch',
                        'Targa 4 - 3.6 ess 325ch',
                        'Targa 4 - 3.6 ess 345ch',
                        'Targa 4 S - 3.8 ess 355ch',
                        'Targa 4 S - 3.8 ess 385ch',
                        'Turbo (Pack Sport Chrono) - 3.6 ess Turbo 480ch',
                        'Turbo PDK - 3.8 ess Turbo 500ch',
                        'Turbo S - 3.3 ess Turbo 381ch',
                        'Turbo S - 3.6 ess Turbo 450ch',
                        'Turbo S - 3.8 ess Turbo 530ch'
                    ]
                ],
                [
                    'name' => '911 Cabriolet',
                    'versions' => [
                        '911 Cabriolet'
                    ],
                    'engines' => [
                        '3.6 ess Turbo 480ch',
                        '3.8 ess Turbo 500ch',
                        'Carrera - 3.4 ess 350ch',
                        'Carrera - 3.6 ess 325ch',
                        'Carrera - 3.6 ess 345ch',
                        'Carrera 4 - 3.4 ess 350ch',
                        'Carrera 4 - 3.6 ess 325ch',
                        'Carrera 4 - 3.6 ess 345ch',
                        'Carrera 4 PDK - 3.4 ess 350ch',
                        'Carrera 4 S - 3.8 ess 355ch',
                        'Carrera 4 S - 3.8 ess 385ch',
                        'Carrera 4S - 3.8 ess 400ch',
                        'Carrera 4S PDK - 3.8 ess 400ch',
                        'Carrera GTS - 3.8 GTS 408ch',
                        'Carrera S - 3.8 ess 355ch',
                        'Carrera S - 3.8 ess 385ch',
                        'Carrera S - 3.8 ess 400ch',
                        'Turbo S - 3.8 ess Turbo 530ch'
                    ]
                ],
                [
                    'name' => '911 Sport Classic',
                    'versions' => [
                        '911 Sport Classic'
                    ],
                    'engines' => [
                        '3.8 ess 408ch'
                    ]
                ],
                [
                    'name' => '944',
                    'versions' => [
                        '944'
                    ],
                    'engines' => [
                        '2.5 ess 163ch',
                        '2.5 ess Turbo 220ch',
                        '2.5 ess Turbo 250ch',
                        '2.7 ess 165ch',
                        'S2 - 3.0 ess 211ch',
                        'S - 2.5 ess 190ch',
                        'Turbo Cup - 2.5 ess Turbo 250ch'
                    ]
                ],
                [
                    'name' => '968',
                    'versions' => [
                        '968'
                    ],
                    'engines' => [
                        '3.0 ess 240ch',
                        'Turbo S - 3.0 ess Turbo 305ch'
                    ]
                ],
                [
                    'name' => 'Boxster',
                    'versions' => [
                        'Boxster',
                        'S'
                    ],
                    'engines' => [
                        '2.5 ess 204ch',
                        '2.7 ess 220ch',
                        '2.7 ess 228ch',
                        '2.7 ess 245ch',
                        '2.7 ess 265ch',
                        '2.9 ess 255ch',
                        '3.4 ess 315ch PDK',
                        'PDK - 2.7 ess 265ch',
                        'S - 3.2 ess 260ch',
                        'S - 3.4 ess 295ch',
                        'S - 3.4 ess 310ch',
                        'S - 3.4 ess 315ch'
                    ]
                ],
                [
                    'name' => 'Boxster Spyder',
                    'versions' => [
                        'Boxster Spyder'
                    ],
                    'engines' => [
                        '3.4 ess 320ch'
                    ]
                ],
                [
                    'name' => 'Carrera GT',
                    'versions' => [
                        'Carrera GT'
                    ],
                    'engines' => [
                        '5.7 ess 612ch'
                    ]
                ],
                [
                    'name' => 'Cayenne',
                    'versions' => [
                        'Cayenne',
                        'GTS',
                        'Platinum Edition',
                        'S',
                        'S Platinum Edition',
                        'Turbo'
                    ],
                    'engines' => [
                        '2.9 V6 440ch',
                        '3.0 333ch Hybrid',
                        '3.0 D 245ch Tiptronic S',
                        '3.0 V6 340ch',
                        '3.2 ess V6 250ch',
                        '3.6 ess V6 290ch',
                        '3.6 ess V6 300ch',
                        '4.0 V8 460ch',
                        '4.0 V8 474ch',
                        '4.0 V8 550ch ',
                        '4.5 ess Turbo 450ch',
                        '4.8 ess Turbo 500ch',
                        '4.8 GTS 385ch',
                        '4.8 GTS 405ch',
                        '4.8 GTS 420ch',
                        'Diesel 240ch',
                        'Diesel  245ch',
                        'S - 4.5 ess 340ch',
                        'S -  4.5 ess 340ch Tiptronic S',
                        'S - 4.8 ess 385ch',
                        'S - 4.8 ess 400ch',
                        'Turbo S - 4.5 ess Turbo 521ch',
                        'Turbo S - 4.8 ess Turbo 550ch',
                        'V6 PDK - 3.6 ess V6 300ch'
                    ]
                ],
                [
                    'name' => 'Cayman',
                    'versions' => [
                        'Cayman',
                        'GT4'
                    ],
                    'engines' => [
                        '2.7i 275ch PDK',
                        '2.9 ess 265ch',
                        '3.8 ess',
                        'PDK - 2.9 ess 265ch',
                        'R - 3.4 ess 330ch',
                        'S - 3.4 ess 295ch',
                        'S - 3.4 ess 320ch',
                        'S PDK - 3.4 ess 320ch'
                    ]
                ],
                [
                    'name' => 'Macan',
                    'versions' => [
                        'GTS',
                        'Macan',
                        'S',
                        'S-Diesel',
                        'T',
                        'Turbo'
                    ],
                    'engines' => [
                        '2.0 265ch ',
                        '2.9 V6 440ch',
                        '3.0 D 258ch PDK',
                        '3.0 V6 380ch',
                        '3.6'
                    ]
                ],
                [
                    'name' => 'Panamera',
                    'versions' => [
                        '4',
                        '4 Executive',
                        'GTS',
                        'Panamera',
                        'Turbo',
                        'Turbo S',
                        'Turbo S Executive'
                    ],
                    'engines' => [
                        '2.9 V6 330ch',
                        '2.9 V6 353ch',
                        '2.9 V6 440ch',
                        '3.0 333ch Hybrid',
                        '3.0 D 250ch',
                        '3.6 ess 310ch Tiptronic S',
                        '3.6 ess V6 300ch',
                        '4.0 V8 480ch',
                        '4.0 V8 630ch',
                        '4 - 3.6 ess 300ch',
                        '4.8 ess Turbo 500ch',
                        '4.8 GTS 430ch',
                        '4S - 4.8 ess 400ch',
                        'S - 4.8 ess 400ch',
                        'S PDK - 4.8 ess 400ch',
                        'Turbo S - 4.8 ess Turbo 550ch',
                        'V6 PDK - 3.6 ess V6 300ch'
                    ]
                ],
                [
                    'name' => 'Spyder',
                    'versions' => [
                        'Spyder'
                    ],
                    'engines' => [
                        '550 - 1.5 ess 137ch'
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
