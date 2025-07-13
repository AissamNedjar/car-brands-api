<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class LanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Lancia',
            'models' => [
                [
                    'name' => 'Beta',
                    'versions' => [
                        'Beta'
                    ],
                    'engines' => [
                        '2.0 ess 120ch'
                    ]
                ],
                [
                    'name' => 'Dedra',
                    'versions' => [
                        'Dedra'
                    ],
                    'engines' => [
                        '1.8 ess 113ch',
                        '1.9 TD 92ch',
                        '2.0 ess 139ch',
                        '2.0 ess 177ch',
                        '2.0 ess Turbo 162ch'
                    ]
                ],
                [
                    'name' => 'Delta',
                    'versions' => [
                        'Delta'
                    ],
                    'engines' => [
                        '1.4 ess 120ch',
                        '1.4 ess 140ch',
                        '1.4 ess 150ch',
                        '1.6 ess Turbo 132ch',
                        '1.6 ess Turbo 140ch',
                        '1.6 MJET 16V 120ch',
                        '1.6 MultiJet 105ch',
                        '1.6 MultiJet 120ch',
                        '1.8 ess 200ch',
                        '1.8 ess 250ch',
                        '1.9 MJET 16V 190ch',
                        '1.9 MultiJet 190ch',
                        '2.0 ess 16V 200ch',
                        '2.0 ess 16V 210ch',
                        '2.0 ess 16V 215ch',
                        '2.0 ess 185ch',
                        '2.0 ess 4WD 165ch',
                        '2.0 MJET 16V 165ch',
                        '2.0 MultiJet 165ch'
                    ]
                ],
                [
                    'name' => 'Delta 2',
                    'versions' => [
                        'Delta 2'
                    ],
                    'engines' => [
                        '1.6 ess 75ch',
                        '1.8 ess 130ch',
                        '1.9 D 90ch',
                        '1.9 TD 90ch',
                        '2.0 ess 142ch',
                        '2.0 ess 186ch',
                        '2.0 ess 190ch'
                    ]
                ],
                [
                    'name' => 'Delta 3',
                    'versions' => [
                        'Delta 3',
                        'Gold',
                        'Platinum'
                    ],
                    'engines' => [
                        '1.6 MJET 120ch'
                    ]
                ],
                [
                    'name' => 'Fulvia',
                    'versions' => [
                        'Fulvia'
                    ],
                    'engines' => [
                        '1.3 ess 90ch',
                        '1.6 ess 114ch'
                    ]
                ],
                [
                    'name' => 'Gamma',
                    'versions' => [
                        'Gamma'
                    ],
                    'engines' => [
                        '2.5 ess 140ch'
                    ]
                ],
                [
                    'name' => 'Kappa',
                    'versions' => [
                        'Kappa'
                    ],
                    'engines' => [
                        '2.0 ess 155ch',
                        '2.0 ess 220ch',
                        '2.0 ess Turbo 205ch',
                        '2.4 TD 124ch',
                        '2.5 ess 175ch',
                        '3.0 ess V6 204ch'
                    ]
                ],
                [
                    'name' => 'Kappa Coupé',
                    'versions' => [
                        'Kappa Coupé'
                    ],
                    'engines' => [
                        '2.0 ess Turbo 205ch',
                        '3.0 ess V6 204ch'
                    ]
                ],
                [
                    'name' => 'Lybra',
                    'versions' => [
                        'Lybra'
                    ],
                    'engines' => [
                        '1.6 ess 16V 103ch',
                        '1.8 ess 16V 130ch',
                        '1.9 JTD 105ch',
                        '1.9 JTD 110ch',
                        '2.0 ess 154ch',
                        '2.4 JTD 134ch',
                        '2.4 JTD 140ch'
                    ]
                ],
                [
                    'name' => 'Musa',
                    'versions' => [
                        'Musa'
                    ],
                    'engines' => [
                        '1.3 MJET 16V 70ch',
                        '1.3 MJET 16V 90ch',
                        '1.3 MJET 16V 95ch',
                        '1.4 ess 16V 95ch',
                        '1.4 ess 77ch',
                        '1.6 MJET 16V 120ch',
                        '1.9 MJET 16V 100ch'
                    ]
                ],
                [
                    'name' => 'Phedra',
                    'versions' => [
                        'Phedra'
                    ],
                    'engines' => [
                        '2.0 JTD 109ch',
                        '2.0 MJET 109ch',
                        '2.0 MJET 16V 120ch',
                        '2.0 MJET 16V 136ch',
                        '2.2 JTD 128ch',
                        '2.2 MJET 128ch',
                        '2.2 MJET 16V 170ch'
                    ]
                ],
                [
                    'name' => 'Rally 037',
                    'versions' => [
                        'Rally 037'
                    ],
                    'engines' => [
                        '2.0 ess 205ch'
                    ]
                ],
                [
                    'name' => 'Stratos',
                    'versions' => [
                        'Stratos'
                    ],
                    'engines' => [
                        '2.4 ess 190ch'
                    ]
                ],
                [
                    'name' => 'Thema',
                    'versions' => [
                        'Thema'
                    ],
                    'engines' => [
                        '2.0 ess 120ch',
                        '2.0 ess 16V 150ch',
                        '2.0 ess 16V 155ch',
                        '2.0 ess Turbo 165ch',
                        '2.0 ess Turbo 16V 185ch',
                        '2.0 ess Turbo 16V 205ch',
                        '2.5 TD 100ch',
                        '2.5 TD 118ch',
                        '2.9 ess 150ch',
                        '2.9 ess 215ch',
                        '3.0 D 190ch',
                        '3.0 D 239ch',
                        '3.0 ess V6 175ch',
                        '3.6 ess V6 286ch'
                    ]
                ],
                [
                    'name' => 'Thesis',
                    'versions' => [
                        'Thesis'
                    ],
                    'engines' => [
                        '2.4 MJET 150ch',
                        '2.4 MJET 175ch',
                        '2.4 MJET 185ch',
                        'ess V6 230ch'
                    ]
                ],
                [
                    'name' => 'Ypsilon',
                    'versions' => [
                        'Platinum',
                        'Ypsilon'
                    ],
                    'engines' => [
                        '0.9 TwinAir 85ch',
                        '1.2 ess 16V 80ch',
                        '1.2 ess 60ch',
                        '1.2 ess 69ch',
                        '1.3 ess 16V 86ch',
                        '1.3 ess 60ch',
                        '1.3 MJET 16V 105ch',
                        '1.3 MJET 16V 75ch',
                        '1.3 MJET 16V 90ch',
                        '1.3 MJET 70ch',
                        '1.3 MultiJet 95ch',
                        '1.4 ess 16V 95ch',
                        '1.4 ess 77ch',
                        '1.4 ess 80ch'
                    ]
                ],
                [
                    'name' => 'Zeta',
                    'versions' => [
                        'Zeta'
                    ],
                    'engines' => [
                        '2.0 ess 150ch',
                        '2.1 TD 110ch'
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
