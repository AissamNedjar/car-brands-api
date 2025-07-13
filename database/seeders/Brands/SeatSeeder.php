<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Seat',
            'models' => [
                [
                    'name' => 'Alhambra',
                    'versions' => [
                        'Alhambra'
                    ],
                    'engines' => [
                        '1.4 TSI 150ch',
                        '1.8 ess 150ch',
                        '1.8 ess Turbo 150ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 110ch BVA',
                        '1.9 TDI 115ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 115ch',
                        '2.0 TDI 1115ch Ecomotive',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch Ecomotive',
                        '2.0 TDI 170ch DSG',
                        '2.0 TDI 170ch Ecomotive',
                        '2.8 ess V6 204ch'
                    ]
                ],
                [
                    'name' => 'Altea',
                    'versions' => [
                        'Altea'
                    ],
                    'engines' => [
                        '1.2 TSI 105ch',
                        '1.4 ess 85ch',
                        '1.4 TSI 125ch',
                        '1.6 ess 102ch',
                        '1.6 TDI 105ch Ecomotive',
                        '1.6 TDI 90ch',
                        '1.8 TSI 160ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 90ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 200ch',
                        '2.0 TFSI 200ch',
                        '2.0 TSI 200ch'
                    ]
                ],
                [
                    'name' => 'Altea Freetrack',
                    'versions' => [
                        'Altea Freetrack'
                    ],
                    'engines' => [
                        '1.6 TDI 105ch',
                        '2.0 TDI 4X4 140ch',
                        '2.0 TDI 4X4 170ch',
                        '2.0 TSI 4X4 200ch'
                    ]
                ],
                [
                    'name' => 'Altea XL',
                    'versions' => [
                        'Altea XL'
                    ],
                    'engines' => [
                        '1.2 TSI 105ch',
                        '1.4 TSI 125ch',
                        '1.6 ess 102ch',
                        '1.6 TDI 105ch Ecomotive',
                        '1.6 TDI 90ch',
                        '1.8 TFSI 160ch',
                        '1.8 TSI 160ch',
                        '1.9 TDI 105ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 170ch'
                    ]
                ],
                [
                    'name' => 'ARONA',
                    'versions' => [
                        'ARONA',
                        'Business',
                        'Copa',
                        'Edition',
                        'FR',
                        'FR 17',
                        'FR limited',
                        'FR Xclusive',
                        'Reference',
                        'Style',
                        'Style Business',
                        'Urban',
                        'Xperience'
                    ],
                    'engines' => [
                        '1.0 TSI 110ch',
                        '1.0 TSI 115ch',
                        '1.0 TSI 95ch',
                        '1.5 TSI 150ch',
                        '1.6 MPi 110 ch'
                    ]
                ],
                [
                    'name' => 'Arosa',
                    'versions' => [
                        'Arosa'
                    ],
                    'engines' => [
                        '1.0 ess 50ch',
                        '1.4 ess 16V 100ch',
                        '1.4 ess 60ch',
                        '1.4 TDI 75ch',
                        '1.7 SDI 60ch'
                    ]
                ],
                [
                    'name' => 'ATECA',
                    'versions' => [
                        'Business',
                        'Copa',
                        'FR',
                        'Style',
                        'Style Business',
                        'Urban Advanced',
                        'Xperience'
                    ],
                    'engines' => [
                        '1.0 TSI 110ch',
                        '1.5 TSI 150ch',
                        '2.0l TDI 143ch',
                        '2.0 TDI 115ch',
                        '2.0 TDI 150ch'
                    ]
                ],
                [
                    'name' => 'Cordoba',
                    'versions' => [
                        'Cordoba'
                    ],
                    'engines' => [
                        '1.4 ess 16V 75ch',
                        '1.4 ess 16V 85ch',
                        '1.4 ess 60ch',
                        '1.6 ess 75ch',
                        '1.6 MPI 100ch',
                        '1.8 ess 156ch',
                        '1.8 ess 16V 130ch',
                        '1.8 ess 90ch',
                        '1.9 D 68ch',
                        '1.9 SDI 68ch',
                        '1.9 TD 75ch',
                        '1.9 TDI 100ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 150ch',
                        '2.0 GT 115ch'
                    ]
                ],
                [
                    'name' => 'Exeo',
                    'versions' => [
                        'Exeo'
                    ],
                    'engines' => [
                        '1.6 ess 102ch',
                        '1.8 ess 150ch',
                        '1.8 TSI 120ch',
                        '1.8 TSI 160ch',
                        '2.0 TDI 120ch',
                        '2.0 TDI 143ch',
                        '2.0 TDI 170ch',
                        '2.0 TSI 200ch',
                        '2.0 TSI 200ch Tiptronic',
                        '2.0 TSI 210ch'
                    ]
                ],
                [
                    'name' => 'Exeo ST',
                    'versions' => [
                        'Exeo ST'
                    ],
                    'engines' => [
                        '1.8 ess 150ch',
                        '1.8 TSI 120ch',
                        '1.8 TSI 160ch',
                        '2.0 TDI 120ch',
                        '2.0 TDI 143ch',
                        '2.0 TDI 170ch',
                        '2.0 TSI 200ch',
                        '2.0 TSI 200ch Multitronic',
                        '2.0 TSI 210ch'
                    ]
                ],
                [
                    'name' => 'Freetrack',
                    'versions' => [
                        'Freetrack'
                    ],
                    'engines' => [
                        '1.4 TSI 125ch',
                        '1.6 TDI 105ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI AWD 140ch',
                        '2.0 TDI AWD 170ch',
                        '2.0 TSI 200ch'
                    ]
                ],
                [
                    'name' => 'Ibiza',
                    'versions' => [
                        'Advanced +',
                        'Black Line',
                        'Bocanegra',
                        'Business',
                        'Cartago',
                        'Copa',
                        'Crono',
                        'Design',
                        'EDITION',
                        'Edition 30',
                        'Edition 50',
                        'FR',
                        'FR Xclusive',
                        'Fully',
                        'Fully +Toit ouvrant',
                        'HIGH',
                        'High Facelift',
                        'Ibiza',
                        'Itech',
                        'Itech Plus',
                        'Linea R',
                        'Loca',
                        'Reference +',
                        'Sol',
                        'Sport Edition',
                        'Sport Edition 2',
                        'STYLE',
                        'Style Business',
                        'Style Facelift',
                        'Titanium Pack',
                        'Urban',
                        'Xcellence'
                    ],
                    'engines' => [
                        '0.9 ess 40ch',
                        '0.9 ess 44ch',
                        '1.0 EcoTSI 95ch',
                        '1.0 MPI 80ch',
                        '1.0 TSI 110ch ',
                        '1.0 TSI 95ch',
                        '1.1 ess 50ch',
                        '1.2 ess 12V 60ch',
                        '1.2 ess 12V 64ch',
                        '1.2 ess 16V 70ch',
                        '1.2 ess 63ch',
                        '1.2 ess 64ch',
                        '1.2 TDI 75ch',
                        '1.2 TDI 75ch Ecomotive',
                        '1.2 TSI 105ch',
                        '1.2 TSI 105ch Ecomotive',
                        '1.4 ess 100ch',
                        '1.4 ess 60ch',
                        '1.4 ess 75ch',
                        '1.4 ess 75ch BVA',
                        '1.4 ess 85ch',
                        '1.4 TDI 70ch',
                        '1.4 TDI 80ch',
                        '1.4 TDI 80ch Ecomotive',
                        '1.4 TSI 150ch',
                        '1.4 TSI 180ch Cupra',
                        '1.5 ess 100ch',
                        '1.5 ess 85ch',
                        '1.5 ess 86ch',
                        '1.5 ess 90ch',
                        '1.5 TSI 150ch',
                        '1.6 ess 100ch',
                        '1.6 ess 105ch',
                        '1.6 ess 105ch DSG7',
                        '1.6 ess 75ch',
                        '1.6 MPi 110 ch',
                        '1.6 MPi 110 ch Automatique',
                        '1.6 MPi 90ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch',
                        '1.7 D 55ch',
                        '1.7 D 57ch',
                        '1.7 ess 100ch',
                        '1.8 ess 150ch',
                        '1.8 ess 156ch',
                        '1.8 ess 180ch Cupra',
                        '1.8 ess 90ch BVA',
                        '1.8 GTI 130ch',
                        '1.9 D 68ch',
                        '1.9 SDI 64ch',
                        '1.9 SDI 68ch',
                        '1.9 TD 75ch',
                        '1.9 TDI 100ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 143ch',
                        '1.9 TDI 160ch Cupra',
                        '1.9 TDI 90ch',
                        '2.0 ess 150ch Cupra',
                        '2.0 GTI 115ch',
                        '2.0 TDI 143ch'
                    ]
                ],
                [
                    'name' => 'Leon',
                    'versions' => [
                        'Business',
                        'Cupra',
                        'Cupra R',
                        'FR',
                        'FR+15',
                        'Fully',
                        'Leon',
                        'LINEA R+',
                        'Performance',
                        'Réference+',
                        'SC',
                        'Select',
                        'Style',
                        'Urban',
                        'Xcellence'
                    ],
                    'engines' => [
                        '1.0 TSI 110ch',
                        '1.2 TSI 105ch',
                        '1.2 TSI 105ch Ecomotive',
                        '1.4 ess 16V 75ch',
                        '1.4 ess 16V 85ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI e-Hybrid 204ch',
                        '1.5 eTSI 150ch',
                        '1.6 ess 102ch',
                        '1.6 ess 16V 105ch',
                        '1.6 MPi 110 ch',
                        '1.6 MPi 110 ch DSG',
                        '1.6 TDI 105ch Ecomotive',
                        '1.6 TDI 90ch',
                        '1.8 ess 125ch BVA',
                        '1.8 ess 180ch',
                        '1.8 ess 210ch Cupra',
                        '1.8 TSI 160ch',
                        '1.8 TSI 180ch DSG',
                        '1.9 SDI 64ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 150ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 211ch',
                        '2.0 ess 240ch Cupra',
                        '2.0 ess 265ch Cupra',
                        '2.0 FSI 150ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 115ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 143ch',
                        '2.0 TDI 150ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 177ch',
                        '2.0 TFSI 185ch',
                        '2.0 TFSI 200ch',
                        '2.0 TSI 185ch',
                        '2.0 TSI 200ch',
                        '2.0 TSI 211ch',
                        '2.0 TSI 240ch Cupra',
                        '2.0 TSi 280ch DSG',
                        '2.0 TSi 290ch',
                        '2.8 ess V6 204ch'
                    ]
                ],
                [
                    'name' => 'Malaga',
                    'versions' => [
                        'Malaga'
                    ],
                    'engines' => [
                        '1.2 ess 63ch',
                        '1.5 ess 100ch',
                        '1.5 ess 90ch',
                        '1.7 D 55ch'
                    ]
                ],
                [
                    'name' => 'Marbella',
                    'versions' => [
                        'Marbella'
                    ],
                    'engines' => [
                        '0.9 ess 35ch',
                        '0.9 ess 40ch',
                        '0.9 ess 42ch'
                    ]
                ],
                [
                    'name' => 'Mii',
                    'versions' => [
                        'Mii'
                    ],
                    'engines' => [
                        '1.0 ess 60ch',
                        '1.0 ess 75ch'
                    ]
                ],
                [
                    'name' => 'Toledo',
                    'versions' => [
                        'Business',
                        'Family',
                        'Toledo',
                        'X-perience'
                    ],
                    'engines' => [
                        '1.2 MPI 75ch',
                        '1.2 TSI 105ch',
                        '1.2 TSI 85ch',
                        '1.6 ess 100ch',
                        '1.6 ess 102ch',
                        '1.6 ess 72ch',
                        '1.6 ess 75ch',
                        '1.6 MPI 105ch',
                        '1.6 TDI 105ch',
                        '1.8 ess 125ch',
                        '1.8 ess 128ch',
                        '1.8 ess 136ch',
                        '1.8 ess 90ch',
                        '1.9 D 68ch',
                        '1.9 TD 75ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 150ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 115ch',
                        '2.0 ess 150ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 170ch',
                        '2.3 ess V5 170ch'
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
