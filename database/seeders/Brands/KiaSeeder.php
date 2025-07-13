<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class KiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Kia',
            'models' => [
                [
                    'name' => 'Carens',
                    'versions' => [
                        'Carens',
                        'Luxe',
                        'Premium'
                    ],
                    'engines' => [
                        '1.6 CRDI 115ch',
                        '1.7 CRDI 136 ch',
                        '1.7 CRDI 136 ch BVA',
                        '1.9 CRDI 140ch',
                        '2.0 CRDI 111ch',
                        '2.0 CRDI 140ch',
                        '2.0 ess 145ch'
                    ]
                ],
                [
                    'name' => 'Carnival',
                    'versions' => [
                        'Carnival'
                    ],
                    'engines' => [
                        '2.9 CRDI 185ch'
                    ]
                ],
                [
                    'name' => 'Ceed',
                    'versions' => [
                        'Ceed'
                    ],
                    'engines' => [
                        '1.4 ess 105ch',
                        '1.4 ess 90ch',
                        '1.6 CRDI 115ch',
                        '1.6 CRDI 126ch',
                        '1.6 CRDI 126ch BVA',
                        '1.6 CRDI 90ch',
                        '1.6 CRDI 92ch',
                        '1.6 ess 125ch',
                        '1.6 ess 126ch',
                        '2.0 CRDI 140ch'
                    ]
                ],
                [
                    'name' => 'Cerato',
                    'versions' => [
                        'Cerato',
                        'EX',
                        'LX',
                        'SX',
                        'SX Premium'
                    ],
                    'engines' => [
                        '1.5 CRDI 102ch',
                        '1.6 DOHC D-CVVT 130CH',
                        '1.6 DOHC D-CVVT BVA 130CH',
                        '1.6 DOHC MPi 130ch',
                        '1.6 DOHC MPi 130ch BVA',
                        '1.6 ess 112ch',
                        '1.6 ess 124ch',
                        '1.6 ess 124ch BVA',
                        '2.0 CRDI 112ch'
                    ]
                ],
                [
                    'name' => 'Cerato Koup',
                    'versions' => [
                        'Cerato Koup'
                    ],
                    'engines' => [
                        '1.6 ess 124ch'
                    ]
                ],
                [
                    'name' => 'Cutback',
                    'versions' => [
                        'Cutback'
                    ],
                    'engines' => [
                        '2.0 ess 128ch'
                    ]
                ],
                [
                    'name' => 'K2500',
                    'versions' => [
                        'Conteneur',
                        'Frigo',
                        'K2500'
                    ],
                    'engines' => [
                        '2.5l diesel 130ch',
                        '2.5l diesel turbo 94ch'
                    ]
                ],
                [
                    'name' => 'K2700',
                    'versions' => [
                        'K2700'
                    ],
                    'engines' => [
                        '2.7l diesel 80ch'
                    ]
                ],
                [
                    'name' => 'KX1',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'Magentis',
                    'versions' => [
                        'Magentis'
                    ],
                    'engines' => [
                        '2.0 CRDI 140ch',
                        '2.0 ess 144ch',
                        '2.7 ess V6 188ch'
                    ]
                ],
                [
                    'name' => 'Mohave',
                    'versions' => [
                        'Mohave'
                    ],
                    'engines' => [
                        '2.8 ess V6 274ch',
                        '3.0 CRDI V6 250ch'
                    ]
                ],
                [
                    'name' => 'Opirus',
                    'versions' => [
                        'Opirus'
                    ],
                    'engines' => [
                        '3.5 ess 203ch',
                        '3.5 ess V6 203ch',
                        '3.8 ess 266ch',
                        '3.8 ess V6 265ch BVA'
                    ]
                ],
                [
                    'name' => 'Optima',
                    'versions' => [
                        'Optima',
                        'Sensation'
                    ],
                    'engines' => [
                        '2.0 MPi 157ch'
                    ]
                ],
                [
                    'name' => 'Picanto',
                    'versions' => [
                        'Active',
                        'Active Business',
                        'Brazilia',
                        'EX',
                        'Funny',
                        'GT-Line',
                        'GT Line',
                        'GT Line Business',
                        'GT Line Premium',
                        'LX',
                        'LX Confort',
                        'LX Start',
                        'Motion',
                        'Nouvelle',
                        'Safety',
                        'Sportline',
                        'Style',
                        'X Line'
                    ],
                    'engines' => [
                        '1.0 DPi 67ch',
                        '1.0 ess 62ch',
                        '1.0 ess 69ch',
                        '1.0 T-GDi 100ch',
                        '1.1 CRDI 75ch',
                        '1.1 ess 65ch',
                        '1.2 DPi 84ch',
                        '1.2 ess 84ch',
                        '1.2 ess 84ch BVA',
                        '1.2 ess CVVT 87ch',
                        '1.2 ess CVVT 87ch BVA'
                    ]
                ],
                [
                    'name' => 'Rio',
                    'versions' => [
                        'EX',
                        'LX',
                        'Nouvelle',
                        'Start+'
                    ],
                    'engines' => [
                        '1.4l ess 100ch',
                        '1.4l ess 100ch BVA',
                        '1.6l ess 123ch',
                        '1.6l ess 123ch BVA'
                    ]
                ],
                [
                    'name' => 'Rio 5 portes',
                    'versions' => [
                        'Funny',
                        'Funny Facelift ',
                        'Pop',
                        'Pop Facelift ',
                        'Rio 5 portes',
                        'Style'
                    ],
                    'engines' => [
                        '1.1 CRDI 70ch',
                        '1.3 ess 87ch',
                        '1.4 CRDI 90ch',
                        '1.4 ess 107ch',
                        '1.4 ess 107ch BVA',
                        '1.4 ess 95ch',
                        '1.5 CRDI 110ch',
                        '1.6 ess 112ch'
                    ]
                ],
                [
                    'name' => 'Sephia',
                    'versions' => [
                        'Sephia'
                    ],
                    'engines' => [
                        '1.5 ess 88ch'
                    ]
                ],
                [
                    'name' => 'Shuma',
                    'versions' => [
                        'Shuma'
                    ],
                    'engines' => [
                        '1.5 ess 88ch',
                        '1.6 ess 101ch',
                        '1.8 ess 111ch'
                    ]
                ],
                [
                    'name' => 'Sorento',
                    'versions' => [
                        'Active',
                        'Active Business',
                        'CityLine',
                        'Design',
                        'Design  Business',
                        'GT-Line',
                        'Motion',
                        'Premium',
                        'Premium 5 Places',
                        'Premium 7 Places',
                        'Premium Business',
                        'Sensation',
                        'Sorento'
                    ],
                    'engines' => [
                        '1.6 T-GDi 230ch HEV',
                        '1.6 T-GDi 253ch PHEV',
                        ' 1.6 T-GDi 265ch ',
                        '2.2 CRDi 193ch',
                        '2.2 CRDi 193ch BVA',
                        '2.2 CRDI 194ch',
                        '2.2 CRDI 194ch BVA',
                        '2.2 CRDI 197ch',
                        '2.2 CRDI 197ch BVA',
                        '2.2l CRDI 193ch',
                        '2.2l CRDI 193ch BVA',
                        '2.5 CRDI 140ch',
                        '2.5 CRDI 170ch',
                        '3.5 ess V6 195ch'
                    ]
                ],
                [
                    'name' => 'Soul',
                    'versions' => [
                        'Soul'
                    ],
                    'engines' => [
                        '1.6 CRDI 127ch',
                        '1.6 ess 126ch'
                    ]
                ],
                [
                    'name' => 'Sportage',
                    'versions' => [
                        'EX',
                        'GT-Line',
                        'LX',
                        'Premium',
                        'Sportage'
                    ],
                    'engines' => [
                        '2.0 CRDI 112ch',
                        '2.0 CRDI 177 4x2',
                        '2.0 CRDI 177 4x2 BVA',
                        '2.0 CRDI 177 4x4 BVA',
                        '2.0 CRDI 177ch',
                        '2.0 CRDI 177ch BVA',
                        '2.0 CRDI 178ch 4x2',
                        '2.0 CRDI 178ch 4x2 BVA',
                        '2.0 CRDI 178ch 4x4 BVA',
                        '2.0 CRDI 4X2 140ch',
                        '2.0 CRDI 4X4 140ch',
                        '2.0 DOHC 128ch',
                        '2.0 ess 16V 4X2 142ch',
                        '2.0 ess 16V 4X4 142ch',
                        '2.0 SOHC 95ch',
                        '2.0 TD 83ch',
                        '2.7 ess V6 4X4 175ch',
                        'CRDI 4X2 115ch',
                        'CRDI 4X2 136ch',
                        'CRDI 4X4 136ch',
                        'CRDI 4X4 136ch BVA',
                        'ess 135ch'
                    ]
                ],
                [
                    'name' => 'Sportage restylé',
                    'versions' => [
                        '30 Years',
                        'Active',
                        'Active Business',
                        'City Line',
                        'Design',
                        'GT-Line',
                        'GT-Line P Business',
                        'Motion',
                        'Sensation'
                    ],
                    'engines' => [
                        '1.6 CRDi 136ch',
                        '1.6 T-GDi 150ch'
                    ]
                ],
                [
                    'name' => 'Venga',
                    'versions' => [
                        'Venga'
                    ],
                    'engines' => [
                        '1.4 ess 90ch',
                        '1.6 CRDI 90ch',
                        '1.6 ess 125ch BVA',
                        'CRDI 115ch',
                        'CRDI 90ch'
                    ]
                ],
                [
                    'name' => 'X-Ceed',
                    'versions' => [
                        'Active',
                        'Active Business',
                        'GT-Line Premium',
                        'Lounge',
                        'Lounge Business',
                        'Motion'
                    ],
                    'engines' => [
                        '1.0 T-GDI 120ch',
                        '1.5 T-GDI 160ch ',
                        '1.6 CRDI 136ch',
                        '1.6 GDi 141ch'
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
