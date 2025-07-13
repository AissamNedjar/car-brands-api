<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class HondaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Honda',
            'models' => [
                [
                    'name' => 'Accord',
                    'versions' => [
                        'Accord'
                    ],
                    'engines' => [
                        '1.6 ess 80ch',
                        '1.8 ess 98ch',
                        '1.9 ess 115ch',
                        '1.9 VTEC 136ch',
                        '2.0 CTDI 150ch',
                        '2.0 D 180ch',
                        '2.0 DTEC 150ch',
                        '2.0 DTEC 150ch BVA',
                        '2.0 DTEC 180ch',
                        '2.0 ess 106ch',
                        '2.0 ess 110ch',
                        '2.0 ess 115ch',
                        '2.0 ess 122ch',
                        '2.0 ess 131ch',
                        '2.0 ess 131ch BVA',
                        '2.0 ess 133ch',
                        '2.0 ess 137ch',
                        '2.0 ess 155ch',
                        '2.0 TD 105ch',
                        '2.0 VTEC 156ch',
                        '2.2 CTDI 140ch',
                        '2.2 ess 150ch',
                        '2.2 ess 212ch',
                        '2.2 VTEC 150ch',
                        '2.3 ess 158ch',
                        '2.4 ess 190ch',
                        '2.4 VTEC 201ch BVA',
                        '2.4 VTEC 210ch'
                    ]
                ],
                [
                    'name' => 'Accord coupé',
                    'versions' => [
                        'Accord coupé'
                    ],
                    'engines' => [
                        '2.0 ess 131ch',
                        '2.0 ess 133ch',
                        '2.0 ess 136ch',
                        '2.0 ess 147ch',
                        '2.2 ess 150ch',
                        '2.2 ess 150ch BVA',
                        '3.0 ess V6 200ch'
                    ]
                ],
                [
                    'name' => 'Accord Tourer',
                    'versions' => [
                        'Accord Tourer'
                    ],
                    'engines' => [
                        '2.0 D 180ch',
                        '2.0 DTEC 150ch',
                        '2.0 DTEC 150ch BVA',
                        '2.0 DTEC 180ch',
                        '2.4 VTEC 201ch BVA'
                    ]
                ],
                [
                    'name' => 'City',
                    'versions' => [
                        'City'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Civic',
                    'versions' => [
                        'Civic'
                    ],
                    'engines' => [
                        '1.2 ess 60ch',
                        '1.2 ess 76ch',
                        '1.3  115ch Hybrid',
                        '1.3 ess 100ch Hybrid',
                        '1.4 ess 71ch',
                        '1.4 ess 75ch',
                        '1.4 ess 83ch',
                        '1.4 ess 90ch',
                        '1.4 ess 90ch BVA',
                        '1.4 VTEC 100ch',
                        '1.5 ess 100ch',
                        '1.5 ess 114ch',
                        '1.5 ess 70ch',
                        '1.5 ess 85ch',
                        '1.6 ess 114ch',
                        '1.6 ess 125ch',
                        '1.6 ess 130ch',
                        '1.6 VTEC 150ch',
                        '1.6 VTI 160ch',
                        '1.7 CTDI 100ch',
                        '1.8 ess 140ch',
                        '1.8 VTEC 140ch',
                        '1.8 VTEC 142ch BVA',
                        '1.8 VTI 169ch',
                        '2.0 ess 200ch',
                        '2.0 ess 201ch',
                        '2.0 TD 86ch',
                        '2.0 VTEC 201ch',
                        '2.2 CTDI 140ch',
                        '2.2 DTEC 150ch'
                    ]
                ],
                [
                    'name' => 'Concerto',
                    'versions' => [
                        'Concerto'
                    ],
                    'engines' => [
                        '1.4 ess 88ch',
                        '1.4 ess 90ch',
                        '1.6 ess 122ch',
                        '1.6 ess 130ch',
                        '1.8 TD 88ch'
                    ]
                ],
                [
                    'name' => 'CRV',
                    'versions' => [
                        'CRV'
                    ],
                    'engines' => [
                        '2.0 DTEC 150ch',
                        '2.0 ess 128ch',
                        '2.0 ess 147ch',
                        '2.0 VTEC 150ch',
                        '2.2 CTDI 140ch',
                        '2.2 DTEC 150ch'
                    ]
                ],
                [
                    'name' => 'CRX',
                    'versions' => [
                        'CRX'
                    ],
                    'engines' => [
                        '1.5 ess 100ch',
                        '1.6 ess 125ch',
                        '1.6 ess 130ch',
                        '1.6 VTEC 150ch',
                        '1.6 VTI 160ch'
                    ]
                ],
                [
                    'name' => 'CRZ',
                    'versions' => [
                        'CRZ'
                    ],
                    'engines' => [
                        '1.5  114ch Hybrid',
                        '1.5  124ch'
                    ]
                ],
                [
                    'name' => 'FRV',
                    'versions' => [
                        'FRV'
                    ],
                    'engines' => [
                        '1.8 VTEC 140ch',
                        '2.0 ess 150ch',
                        '2.2 CTDI 140ch'
                    ]
                ],
                [
                    'name' => 'HRV',
                    'versions' => [
                        'HRV'
                    ],
                    'engines' => [
                        '1.6 ess 105ch'
                    ]
                ],
                [
                    'name' => 'Insight',
                    'versions' => [
                        'Insight'
                    ],
                    'engines' => [
                        '1.3  100ch Hybrid',
                        '1.3  95ch Hybrid'
                    ]
                ],
                [
                    'name' => 'Integra',
                    'versions' => [
                        'Integra'
                    ],
                    'engines' => [
                        '1.8 ess 190ch'
                    ]
                ],
                [
                    'name' => 'Jazz',
                    'versions' => [
                        'Jazz'
                    ],
                    'engines' => [
                        '1.2 ess 78ch',
                        '1.2 VTEC 90ch',
                        '1.3  88ch Hybrid',
                        '1.4 ess 83ch',
                        '1.4 VTEC 100ch'
                    ]
                ],
                [
                    'name' => 'Legend',
                    'versions' => [
                        'Legend'
                    ],
                    'engines' => [
                        '2.5 ess 172ch',
                        '2.7 ess 169ch',
                        '2.7 ess 177ch',
                        '3.2 ess 205ch',
                        '3.5 ess 205ch',
                        '3.5 ess V6 295ch'
                    ]
                ],
                [
                    'name' => 'Legend Coupé',
                    'versions' => [
                        'Legend Coupé'
                    ],
                    'engines' => [
                        '2.7 ess 169ch',
                        '2.7 ess 177ch',
                        '3.2 ess 205ch',
                        '3.2 ess 205ch BVA'
                    ]
                ],
                [
                    'name' => 'NSX',
                    'versions' => [
                        'NSX'
                    ],
                    'engines' => [
                        '3.0 ess 255ch BVA',
                        '3.0 ess 274ch',
                        '3.2 ess 280ch'
                    ]
                ],
                [
                    'name' => 'Prelude',
                    'versions' => [
                        'Prelude'
                    ],
                    'engines' => [
                        '1.6 ess 80ch',
                        '1.8 ess 105ch',
                        '2.0 ess 114ch',
                        '2.0 ess 133ch',
                        '2.0 ess 133ch BVA',
                        '2.0 ess 137ch',
                        '2.0 ess 150ch',
                        '2.2 VTEC 185ch',
                        '2.2 VTI 185ch',
                        '2.2 VTI 185ch BVA',
                        '2.3 ess 158ch'
                    ]
                ],
                [
                    'name' => 'S2000',
                    'versions' => [
                        'S2000'
                    ],
                    'engines' => [
                        '2.0 ess 240ch'
                    ]
                ],
                [
                    'name' => 'S800',
                    'versions' => [
                        'S800'
                    ],
                    'engines' => [
                        '0.8 ess 78ch'
                    ]
                ],
                [
                    'name' => 'Shuttle',
                    'versions' => [
                        'Shuttle'
                    ],
                    'engines' => [
                        '2.2 ess 150ch'
                    ]
                ],
                [
                    'name' => 'Stream',
                    'versions' => [
                        'Stream'
                    ],
                    'engines' => [
                        '2.0 ess 156ch'
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
