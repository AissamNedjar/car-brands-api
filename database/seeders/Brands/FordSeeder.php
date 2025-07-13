<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class FordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Ford',
            'models' => [
                [
                    'name' => 'B Max',
                    'versions' => [
                        'B Max'
                    ],
                    'engines' => [
                        '1.0 EcoBoost 100ch',
                        '1.0 EcoBoost 120ch',
                        '1.4 ess 90ch',
                        '1.5 TDCI 75ch',
                        '1.6 TDCI 95ch'
                    ]
                ],
                [
                    'name' => 'Capri',
                    'versions' => [
                        'Capri'
                    ],
                    'engines' => [
                        '1.3 ess 50ch',
                        '1.3 ess 55ch',
                        '1.3 ess 73ch',
                        '1.5 ess 65ch',
                        '1.6 ess 72ch',
                        '1.6 ess 88ch',
                        '1.6 ess 91ch',
                        '1.6 GT 88ch',
                        '1.7 ess 75ch',
                        '2.0 ess 101ch',
                        '2.0 ess 90ch',
                        '2.0 ess V6 90ch',
                        '2.3 ess 108ch',
                        '2.3 ess 114ch',
                        '2.6 ess 125ch',
                        '2.6 ess 150ch',
                        '2.8 CTI 160ch',
                        '2.8 ess Turbo 188ch',
                        '3.0 ess 138ch'
                    ]
                ],
                [
                    'name' => 'C Max',
                    'versions' => [
                        'C Max'
                    ],
                    'engines' => [
                        '1.6 ess 100ch',
                        '1.6 ess 115ch',
                        '1.6 SCTI 150ch',
                        '1.6 SCTI 180ch',
                        '1.6 SCTI 182ch',
                        '1.6 TDCI 110ch',
                        '1.6 TDCI 115ch',
                        '1.6 TDCI 90ch',
                        '1.6 TDCI 95ch',
                        '1.6 Ti VCT 105ch',
                        '1.6 Ti VCT 115ch',
                        '1.6 Ti VCT 125ch',
                        '1.8  125ch',
                        '1.8  125ch Flexifuel',
                        '1.8 ess 120ch',
                        '1.8 TDCI 115ch',
                        '2.0 ess 145ch',
                        '2.0 TDCI 136ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 163ch'
                    ]
                ],
                [
                    'name' => 'Cortina',
                    'versions' => [
                        'Cortina'
                    ],
                    'engines' => [
                        '1.6 ess 105ch'
                    ]
                ],
                [
                    'name' => 'Cougar',
                    'versions' => [
                        'Cougar'
                    ],
                    'engines' => [
                        '2.0 ess 130ch',
                        '2.6 ess V6 170ch',
                        '2.6 ess V6 170ch BVA'
                    ]
                ],
                [
                    'name' => 'Escort',
                    'versions' => [
                        'Escort'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.6 ess 105ch',
                        '1.6 ess 110ch',
                        '1.6 ess 16V 90ch',
                        '1.6 ess 90ch',
                        '1.6 ess 96ch',
                        '1.6 ess Turbo 132ch',
                        '1.8 D 60ch',
                        '1.8 ess 16V 115ch',
                        '1.8 ess 16V 130ch',
                        '1.8 TD 70ch',
                        '1.8 TD 90ch',
                        '2.0 ess 100ch',
                        '2.0 ess 110ch',
                        '2.0 ess 150ch',
                        '2.0 ess 220ch',
                        '2.0 ess 227ch',
                        '2.0 ess 4X4 150ch'
                    ]
                ],
                [
                    'name' => 'Expedition',
                    'versions' => [
                        'Expedition'
                    ],
                    'engines' => [
                        '4.6 ess 232ch',
                        '5.4 ess 260ch'
                    ]
                ],
                [
                    'name' => 'Explorer',
                    'versions' => [
                        'Explorer'
                    ],
                    'engines' => [
                        '4.0 ess 155ch',
                        '4.0 ess 204ch'
                    ]
                ],
                [
                    'name' => 'Fiesta',
                    'versions' => [
                        'City',
                        'Fiesta',
                        'Ghia',
                        'Select',
                        'Tentation',
                        'Titanium ',
                        'Titanium Sport pack',
                        'Trend',
                        'Trend Look'
                    ],
                    'engines' => [
                        '1.1 ess 50ch',
                        '1.1 ess 55ch',
                        '1.25 ess 82ch',
                        '1.2 ess 60ch',
                        '1.2 ess 82ch',
                        '1.3 ess 60ch',
                        '1.3 ess 68ch',
                        '1.3 ess 70ch',
                        '1.3 ess 75ch',
                        '1.4 ess 16V 80ch',
                        '1.4 ess 16V 96ch BVA',
                        '1.4 ess 75ch',
                        '1.4 ess 90ch',
                        '1.4 ess 96ch',
                        '1.4 TDCI 68ch',
                        '1.5 TDCI 75ch',
                        '1.6 D 95ch',
                        '1.6 ess 103ch',
                        '1.6 ess 110ch',
                        '1.6 ess 120ch',
                        '1.6 ess 134ch',
                        '1.6 ess 16V 100ch',
                        '1.6 ess 180ch',
                        '1.6 ess 84ch',
                        '1.6 ess 90ch',
                        '1.6 ess 96ch',
                        '1.6 ess Turbo 133ch',
                        '1.6 TDCI 90ch',
                        '1.6 Ti VCT 120ch',
                        '1.8 D 60ch',
                        '1.8 D 75ch',
                        '1.8 ess 16V 130ch',
                        '1.8 TD 77ch',
                        '2.0 ess 150ch'
                    ]
                ],
                [
                    'name' => 'Figo',
                    'versions' => [
                        'Figo',
                        'Trend'
                    ],
                    'engines' => [
                        '1.4 ess 83ch'
                    ]
                ],
                [
                    'name' => 'Focus 4 portes',
                    'versions' => [
                        'Focus 4 portes',
                        'Titanium',
                        'Trend Sport'
                    ],
                    'engines' => [
                        '1.4 ess 80ch',
                        '1.6 EcoBoost 150ch',
                        '1.6 EcoBoost 182ch',
                        '1.6 ess 100ch',
                        '1.6 SCTi EcoBoost 150ch',
                        '1.6 SCTi EcoBoost 182ch',
                        '1.6 TDCI 105ch',
                        '1.6 TDCI 110ch',
                        '1.6 TDCI 90ch',
                        '1.6 TDCI 95ch',
                        '1.6 Ti VCT 105ch',
                        '1.6 Ti VCT 115ch',
                        '1.6 Ti VCT 125ch',
                        '1.6 Ti VCT 125ch BVA',
                        '1.6 Ti VCT 85ch',
                        '1.8  125ch',
                        '1.8  125ch Flexifuel',
                        '1.8 ess 115ch',
                        '1.8 TD 75ch',
                        '1.8 TD 90ch',
                        '1.8 TDCI 115ch',
                        '2.0 ess 130ch',
                        '2.0 ess 145ch',
                        '2.0 ess 173ch',
                        '2.0 ess 215ch',
                        '2.0 TDCI 115ch',
                        '2.0 TDCI 136ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 163ch',
                        '2.5 ess 225ch',
                        '2.5 ess 305ch'
                    ]
                ],
                [
                    'name' => 'Focus 5 portes',
                    'versions' => [
                        'Focus 5 portes',
                        'Titanium',
                        'Trend Sport'
                    ],
                    'engines' => [
                        '1.4 ess 80ch',
                        '1.6 EcoBoost 150ch',
                        '1.6 EcoBoost 182ch',
                        '1.6 ess 100ch',
                        '1.6 SCTi EcoBoost 150ch',
                        '1.6 SCTi EcoBoost 182ch',
                        '1.6 TDCI 105ch',
                        '1.6 TDCI 110ch',
                        '1.6 TDCI 90ch',
                        '1.6 TDCI 95ch',
                        '1.6 Ti VCT 105ch',
                        '1.6 Ti VCT 115ch',
                        '1.6 Ti VCT 125ch',
                        '1.6 Ti VCT 125ch BVA',
                        '1.6 Ti VCT 85ch',
                        '1.8  125ch',
                        '1.8  125ch Flexifuel',
                        '1.8 ess 115ch',
                        '1.8 TD 75ch',
                        '1.8 TD 90ch',
                        '1.8 TDCI 115ch',
                        '2.0 ess 130ch',
                        '2.0 ess 145ch',
                        '2.0 ess 173ch',
                        '2.0 ess 215ch',
                        '2.0 TDCI 115ch',
                        '2.0 TDCI 136ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 163ch',
                        '2.5 ess 225ch',
                        '2.5 ess 305ch'
                    ]
                ],
                [
                    'name' => 'Focus CC',
                    'versions' => [
                        'Focus CC'
                    ],
                    'engines' => [
                        '1.6 ess 100ch',
                        '2.0 ess 145ch',
                        '2.0 TDCI 136ch'
                    ]
                ],
                [
                    'name' => 'Fusion',
                    'versions' => [
                        'Fusion',
                        'Titanium '
                    ],
                    'engines' => [
                        '1.4 ess 100ch',
                        '1.4 ess 80ch',
                        '1.4 TDCI 68ch',
                        '1.5 EcoBoost 160ch',
                        '1.6 ess 16V 100ch',
                        '1.6 TDCI 90ch',
                        '2.0 TDCI 150ch'
                    ]
                ],
                [
                    'name' => 'Galaxy',
                    'versions' => [
                        'Galaxy'
                    ],
                    'engines' => [
                        '1.6 SCTI 160ch',
                        '1.6 TDCI 115ch',
                        '1.8 TDCI 125ch',
                        '1.9 TDI 115ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 150ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 115ch',
                        '2.0 ess 145ch',
                        '2.0 ess 145ch Flexifuel',
                        '2.0 SCTI 203ch',
                        '2.0 TDCI 115ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 163ch',
                        '2.2 TDCI 175ch',
                        '2.38 ess V6 204ch',
                        '2.3 ess 145ch',
                        '2.3 ess 160ch',
                        '2.8 ess V6 174ch',
                        '2.8 ess V6 4X4 174ch'
                    ]
                ],
                [
                    'name' => 'Grand C Max',
                    'versions' => [
                        'Grand C Max'
                    ],
                    'engines' => [
                        '1.6 SCTI 150ch',
                        '1.6 SCTI 180ch',
                        '1.6 SCTI 182ch',
                        '1.6 TDCI 115ch',
                        '1.6 TDCI 95ch',
                        '1.6 Ti VCT 105ch',
                        '1.6 Ti VCT 125ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 163ch'
                    ]
                ],
                [
                    'name' => 'GT',
                    'versions' => [
                        'GT'
                    ],
                    'engines' => [
                        '4.7 ess 340ch',
                        '5.4 ess 550ch'
                    ]
                ],
                [
                    'name' => 'Ka',
                    'versions' => [
                        'Ka'
                    ],
                    'engines' => [
                        '1.2 ess 69ch',
                        '1.3 ess 60ch',
                        '1.3 ess 70ch',
                        '1.3 TDCI 75ch',
                        '1.8 ess 95ch'
                    ]
                ],
                [
                    'name' => 'Kuga',
                    'versions' => [
                        'Kuga'
                    ],
                    'engines' => [
                        '1.5l Ecoboost 180ch BVA',
                        '2.0 TDCI 136ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 4X4 136ch',
                        '2.0 TDCI 4X4 163ch',
                        '2.5 ess 220ch',
                        '2.5 ess 4X4 200ch'
                    ]
                ],
                [
                    'name' => 'Maverick',
                    'versions' => [
                        'Maverick'
                    ],
                    'engines' => [
                        '2.7 D 100ch',
                        '2.7 D 125ch',
                        '2.7 TD 125ch'
                    ]
                ],
                [
                    'name' => 'Mondeo',
                    'versions' => [
                        'Ghia',
                        'Mondeo',
                        'Titanium',
                        'Titanium Business',
                        'Trend City'
                    ],
                    'engines' => [
                        '1.6 ess 110ch',
                        '1.6 ess 16V 90ch',
                        '1.6 ess SCTI 160ch',
                        '1.6l Ecoboost 160ch',
                        '1.6 TDCI 115ch',
                        '1.6 Ti VCT 115ch',
                        '1.6 Ti VCT 125ch',
                        '1.8 ess 125ch',
                        '1.8 ess 16V 115ch',
                        '1.8 TD 88ch',
                        '1.8 TD 90ch',
                        '1.8 TDCI 100ch',
                        '1.8 TDCI 125ch',
                        '2.0  145ch Flexifuel',
                        '2.0 D 115ch',
                        '2.0 D 90ch',
                        '2.0 ess 145ch',
                        '2.0 ess 16V 136ch',
                        '2.0 SCTI 203ch',
                        '2.0 SCTI 240ch',
                        '2.0 TDCI 115ch',
                        '2.0 TDCI 130ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 140ch BVA',
                        '2.0 TDCI 163ch',
                        '2.0 TDCI 200ch',
                        '2.2 TDCI 155ch',
                        '2.3 ess 161ch',
                        '2.5 ess 220ch',
                        '2.6 ess 205ch',
                        '2.6 ess V6 170ch',
                        '3.0 ess 226ch',
                        '3.0 ess V6 204ch',
                        '3.0 ess V6 226ch'
                    ]
                ],
                [
                    'name' => 'Mustang',
                    'versions' => [
                        'Mustang'
                    ],
                    'engines' => [
                        '3.3 ess 122ch',
                        '4.1 ess 100ch',
                        '4.7 ess 271ch',
                        '4.7 GT 306ch',
                        '5.8 ess 270ch',
                        '7.0 GT 335ch',
                        '7.0 GT 406ch',
                        '7.1 GT 355ch'
                    ]
                ],
                [
                    'name' => 'Orion',
                    'versions' => [
                        'Orion'
                    ],
                    'engines' => [
                        '1.4 ess 71ch',
                        '1.6 ess 105ch',
                        '1.6 ess 16V 90ch',
                        '1.6 ess 90ch',
                        '1.8 D 60ch',
                        '1.8 ess 105ch',
                        '1.8 ess 16V 130ch',
                        '1.8 TD 90ch'
                    ]
                ],
                [
                    'name' => 'Probe',
                    'versions' => [
                        'Probe'
                    ],
                    'engines' => [
                        '2.0 ess 16V 115ch',
                        '2.5 ess 165ch'
                    ]
                ],
                [
                    'name' => 'Puma',
                    'versions' => [
                        'Puma'
                    ],
                    'engines' => [
                        '1.4 ess 90ch',
                        '1.7 ess 125ch'
                    ]
                ],
                [
                    'name' => 'Ranger',
                    'versions' => [
                        'Ranger',
                        'S/C'
                    ],
                    'engines' => [
                        '2.2 TDCI 125ch',
                        '2.2 TDCI 150ch',
                        '2.2 TDCI M6 150ch',
                        '2.5 D 109ch',
                        '2.5 TDCI 143ch',
                        '2.5 TDCI 4X4 143ch',
                        '3.0 TDCI 156ch',
                        '3.0 TDCI 4X4 156ch',
                        '3.2 TDCI 200ch',
                        '3.2 TDCI 4X4 200ch'
                    ]
                ],
                [
                    'name' => 'RS 200',
                    'versions' => [
                        'RS 200'
                    ],
                    'engines' => [
                        '1.8 ess 250ch'
                    ]
                ],
                [
                    'name' => 'Scorpio',
                    'versions' => [
                        'Scorpio'
                    ],
                    'engines' => [
                        '1.8 ess 90ch',
                        '2.0 ess 105ch',
                        '2.0 ess 115ch',
                        '2.0 ess 125ch',
                        '2.0 ess 136ch',
                        '2.3 ess 147ch',
                        '2.4 ess 130ch',
                        '2.5 D 115ch',
                        '2.5 D 69ch',
                        '2.5 TD 92ch',
                        '2.9 ess 145ch',
                        '2.9 ess 195ch',
                        '2.9 ess 207ch',
                        '2.9 ess 4X4 145ch'
                    ]
                ],
                [
                    'name' => 'Shelby 500GT',
                    'versions' => [
                        'Shelby 500GT'
                    ],
                    'engines' => [
                        '5.4 ess 500ch'
                    ]
                ],
                [
                    'name' => 'Sierra',
                    'versions' => [
                        'Sierra'
                    ],
                    'engines' => [
                        '1.6 ess 75ch',
                        '1.8 ess 90ch',
                        '1.8 TD 75ch',
                        '2.0 ess 109ch',
                        '2.0 ess 115ch',
                        '2.0 ess 125ch',
                        '2.0 ess 204ch',
                        '2.0 ess 4X4 125ch',
                        '2.0 ess 4X4 220ch',
                        '2.3 D 67ch',
                        '2.8 ess 150ch'
                    ]
                ],
                [
                    'name' => 'S Max',
                    'versions' => [
                        'S Max'
                    ],
                    'engines' => [
                        '1.6 SCTI 160ch',
                        '1.6 TDCI 115ch',
                        '1.8 TDCI 125ch',
                        '2.0 ess 145ch',
                        '2.0 ess 145ch Flexifuel',
                        '2.0 SCTI 203ch',
                        '2.0 SCTI 240ch',
                        '2.0 TDCI 115ch',
                        '2.0 TDCI 140ch',
                        '2.0 TDCI 163ch',
                        '2.2 TDCI 170ch',
                        '2.3 ess 160ch',
                        '2.5 ess 220ch'
                    ]
                ],
                [
                    'name' => 'Taunus',
                    'versions' => [
                        'Taunus'
                    ],
                    'engines' => [
                        '1.2 ess 51ch',
                        '1.3 ess 59ch',
                        '1.3 ess 62ch',
                        '1.5 ess 57ch',
                        '1.5 ess 60ch',
                        '1.5 ess 67ch',
                        '1.5 TS 72ch',
                        '1.6 ess 72ch',
                        '1.6 ess 73ch',
                        '1.6 ess 88ch',
                        '1.6 ess 90ch',
                        '1.6 GT 88ch',
                        '1.7 ess 67ch',
                        '1.7 ess 78ch',
                        '1.8 TS 77ch',
                        '2.0 ess 101ch',
                        '2.0 ess 90ch',
                        '2.0 ess 95ch',
                        '2.0 ess 98ch',
                        '2.0 ess V6 90ch',
                        '2.0 TS 100ch',
                        '2.3 ess 108ch',
                        '2.3 ess V6 114ch'
                    ]
                ],
                [
                    'name' => 'Tourneo Connect',
                    'versions' => [
                        'T&ocirc;lé'
                    ],
                    'engines' => [
                        '1.8 TDCI 110ch',
                        '1.8 TDCI 75ch',
                        '1.8 TDCI 90ch'
                    ]
                ],
                [
                    'name' => 'Transit',
                    'versions' => [
                        'Transit'
                    ],
                    'engines' => [
                        '2,2l TDCi 350 M 125 Ch',
                        '2,2 TDCi 330 S 125 Ch',
                        '2.2 TDCI 350 LHR 125 ch',
                        '2.2 TDCI 350 LHR 125 ch Minibus 13+1'
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
