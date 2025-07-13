<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SkodaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Skoda',
            'models' => [
                [
                    'name' => '105',
                    'versions' => [
                        '105'
                    ],
                    'engines' => [
                        '1.1 ess 46ch'
                    ]
                ],
                [
                    'name' => '130',
                    'versions' => [
                        '130'
                    ],
                    'engines' => [
                        '1.3 ess 62ch'
                    ]
                ],
                [
                    'name' => 'Citigo',
                    'versions' => [
                        'Citigo'
                    ],
                    'engines' => [
                        '1.0 ess 60ch',
                        '1.0 ess 60ch BlueMotion',
                        '1.0 ess 75ch',
                        '1.0 ess 75ch BlueMotion'
                    ]
                ],
                [
                    'name' => 'Fabia',
                    'versions' => [
                        'Active',
                        'Ambition',
                        'Fresh',
                        'Monte Carlo',
                        'Style',
                        'Style (avec toit panoramique)',
                        'Visage'
                    ],
                    'engines' => [
                        '1.0 MPI 60ch',
                        '1.0 MPI 75ch',
                        '1.2 ess 12V 65ch',
                        '1.2 ess 55ch',
                        '1.2 ess 60ch',
                        '1.2 HTP 70ch',
                        '1.2 TDI 75ch',
                        '1.2 TDI 75ch Greenline',
                        '1.2 TSI 105ch',
                        '1.2 TSI 105ch DSG7',
                        '1.2 TSI 85ch',
                        '1.4 ess 16V 100ch',
                        '1.4 ess 16V 80ch',
                        '1.4 ess 16V 85ch',
                        '1.4 ess 180ch',
                        '1.4 MPI 68ch',
                        '1.4 TDI 70ch',
                        '1.4 TDI 75ch',
                        '1.4 TDI 80ch',
                        '1.6 ess 16V 105ch',
                        '1.6 MPI 90ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 75ch',
                        '1.6 TDI 90ch',
                        '1.9 D 130ch',
                        '1.9 SDI 64ch',
                        '1.9 TDI 100ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 130ch'
                    ]
                ],
                [
                    'name' => 'Fabia Facelift',
                    'versions' => [
                        'Active',
                        'Ambition',
                        'Fabia Facelift',
                        'Monte Carlo',
                        'Style'
                    ],
                    'engines' => [
                        '1.0 MPI 65ch',
                        ' 1.0 MPI 80ch ',
                        '1.0 TSI 110ch',
                        '1.0 TSI 95ch',
                        '1.5 TSI 150ch',
                        '1.6 MPi 90 ch'
                    ]
                ],
                [
                    'name' => 'Favorit',
                    'versions' => [
                        'Favorit'
                    ],
                    'engines' => [
                        '1.3 ess 63ch'
                    ]
                ],
                [
                    'name' => 'Felicia',
                    'versions' => [
                        'Felicia'
                    ],
                    'engines' => [
                        '1.3 ess 54ch',
                        '1.3 ess 68ch',
                        '1.6 ess 75ch',
                        '1.9 D 64ch'
                    ]
                ],
                [
                    'name' => 'Octavia',
                    'versions' => [
                        'Ambiente',
                        'Ambition',
                        'Business',
                        'Clever',
                        'Edition',
                        'Elegance',
                        'Elegance DGS',
                        'Elegence',
                        'Laurin &amp; Klement',
                        'Octavia',
                        'RS ',
                        'Sportline',
                        'Style'
                    ],
                    'engines' => [
                        '1.0 TSI 110ch',
                        '1.2 TFSI 105ch',
                        '1.2 TFSI 105ch DSG',
                        '1.4 TFSI 122ch',
                        '1.4 TFSI 122ch DSG',
                        ' 1.5 TSI ACT 150ch',
                        '1.6 ess 75ch',
                        '1.6 MPI 100ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 105ch DSG',
                        '1.6 TDI 105ch Greenline',
                        '1.8 ess 125ch',
                        '1.8 ess 150ch',
                        '1.8 ess 180ch',
                        '1.8 TFSI 160ch',
                        '1.8 TFSI 160ch DSG',
                        '1.9 TDI 105ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 90ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 116ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 143ch',
                        '2.0 TDI 143ch DSG 6',
                        '2.0 TDI 150ch',
                        '2.0 TDI 170ch',
                        '2.0 TSI 245ch'
                    ]
                ],
                [
                    'name' => 'Octavia Combi',
                    'versions' => [
                        'Octavia Combi'
                    ],
                    'engines' => [
                        '1.2 TFSI 105ch',
                        '1.2 TFSI 105ch DSG',
                        '1.4 TFSI 122ch',
                        '1.4 TFSI 122ch DSG',
                        '1.6 TDI 105ch',
                        '1.6 TDI 105ch DSG',
                        '1.8 TFSI 160ch',
                        '1.8 TFSI 160ch DSG',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG'
                    ]
                ],
                [
                    'name' => 'Octavia Combi 4x4',
                    'versions' => [
                        'Octavia Combi 4x4'
                    ],
                    'engines' => [
                        '1.6 TDI 105ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 140ch',
                        '2.0 TDI 140ch'
                    ]
                ],
                [
                    'name' => 'Octavia Scout',
                    'versions' => [
                        'Octavia Scout'
                    ],
                    'engines' => [
                        '2.0 TDI 140ch'
                    ]
                ],
                [
                    'name' => 'Rapid',
                    'versions' => [
                        'Active',
                        'Ambition',
                        'Edition',
                        'Rapid'
                    ],
                    'engines' => [
                        '1.2 MPI 75ch',
                        '1.2 TFSI 105ch',
                        '1.2 TFSI 90ch',
                        '1.4 TFSI 122ch',
                        '1.6 MPI  105 ch',
                        '1.6 MPI 110 ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch'
                    ]
                ],
                [
                    'name' => 'Rapid Facelift',
                    'versions' => [
                        'Ambition',
                        'Edition 10',
                        'Monte Carlo',
                        'Rapid Facelift'
                    ],
                    'engines' => [
                        '1.6 MPi 110 ch'
                    ]
                ],
                [
                    'name' => 'Rapid Spaceback',
                    'versions' => [
                        'Ambition',
                        'Edition',
                        'Style'
                    ],
                    'engines' => [
                        '1.6 MPI 110 ch',
                        '1.6 TDI 105 ch'
                    ]
                ],
                [
                    'name' => 'Roomster',
                    'versions' => [
                        'Roomster'
                    ],
                    'engines' => [
                        '1.2 TDI 75ch',
                        '1.2 TDI 75ch Greenline',
                        '1.2 TSI 105ch',
                        '1.2 TSI 105ch DSG7',
                        '1.2 TSI 85ch',
                        '1.4 ess 16V 85ch',
                        '1.4 TDI 80ch',
                        '1.6 ess 16V 105ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch',
                        '1.9 TDI 105ch'
                    ]
                ],
                [
                    'name' => 'Superb',
                    'versions' => [
                        '1.5 TSI ACT 150ch',
                        'Ambition',
                        'Business',
                        'Elegance',
                        'Laurin&Klement',
                        'Sportline',
                        'Style',
                        'Superb'
                    ],
                    'engines' => [
                        '1.4 TFSI 125ch',
                        '1.6 D 105ch Greenline',
                        '1.6 TDI 105ch',
                        '1.6 TDI 105ch Greenline',
                        '1.8 TFSI 160ch',
                        '1.8 TSI 160ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 115ch',
                        '1.9 TDI 130ch',
                        '2.0 TDI 10ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 150ch ',
                        '2.0 TDI 170ch DSG',
                        '2.0 TDI 177ch DSG',
                        '2.0 TDI 200ch',
                        '2.0 TDI 4X4 170ch',
                        '2.5 TDI V6 163ch',
                        '2.8 ess V6 193ch',
                        '2.8 ess V6 193ch Tiptronic',
                        '3.6 FSI V6 260ch'
                    ]
                ],
                [
                    'name' => 'Yeti',
                    'versions' => [
                        'Adventure',
                        'Ambition',
                        'Edition',
                        'Edition (avec toit panoramique)',
                        'Elegance',
                        'Monte Carlo',
                        'Outdoor Elegance',
                        'Style',
                        'Style (avec toit panoramique)',
                        'Yeti'
                    ],
                    'engines' => [
                        '1.2 TFSI 105ch',
                        '1.2 TFSI 105ch DSG',
                        '1.6 TDI 105ch Greenline',
                        '1.8 TFSI 160ch',
                        '1.8 TFSI 4X4 160ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 4X4 110ch',
                        '2.0 TDI 4X4 140ch',
                        '2.0 TDI 4X4 140ch DSG'
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
