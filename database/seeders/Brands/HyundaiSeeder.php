<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class HyundaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Hyundai',
            'models' => [
                [
                    'name' => 'Accent',
                    'versions' => [
                        'Accent',
                        'Confort',
                        'GL+',
                        'GLE',
                        'GLS',
                        'GLX',
                        'Last Edition GLS',
                        'RB',
                        'Style'
                    ],
                    'engines' => [
                        '1.4 ess 86ch',
                        '1.5 CRDI 82ch',
                        '1.5 ess 91ch',
                        '1.5 ess 91ch BVA',
                        '1.6 CRDI 128ch'
                    ]
                ],
                [
                    'name' => 'Accent RB  4 portes',
                    'versions' => [
                        'Accent RB  4 portes',
                        'GL+',
                        'GL DZ',
                        'Préstige',
                        'Style'
                    ],
                    'engines' => [
                        '1.4 ess 107ch',
                        '1.4 ess 107ch BVA',
                        '1.4 VVT 96ch',
                        '1.5 CRDI 90ch',
                        '1.6 CRDI 128ch',
                        '1.6 CRDI 128ch BVA',
                        '1.6 ess 138ch'
                    ]
                ],
                [
                    'name' => 'Accent RB  5 portes',
                    'versions' => [
                        'GL DZ',
                        'Préstige',
                        'Style'
                    ],
                    'engines' => [
                        '1.4 ess 107ch',
                        '1.4 ess 107ch BVA',
                        '1.4 VVT 96ch',
                        '1.5 CRDI 90ch',
                        '1.6 CRDI 128ch',
                        '1.6 CRDI 128ch BVA',
                        '1.6 ess 138ch'
                    ]
                ],
                [
                    'name' => 'Atos',
                    'versions' => [
                        'Atos',
                        'GL',
                        'GLS',
                        'XS'
                    ],
                    'engines' => [
                        '1.0 ess 55ch',
                        '1.1 ess 63ch'
                    ]
                ],
                [
                    'name' => 'Azera',
                    'versions' => [
                        'Azera'
                    ],
                    'engines' => [
                        '2.0 CRDI 140ch',
                        '2.2 CRDI 155ch'
                    ]
                ],
                [
                    'name' => 'Coupé',
                    'versions' => [
                        'Coupé'
                    ],
                    'engines' => [
                        '2.0 ess 136ch',
                        '2.0 ess 143ch',
                        '2.7 ess V6 164ch',
                        '2.7 ess V6 167ch'
                    ]
                ],
                [
                    'name' => 'Creta',
                    'versions' => [
                        'Creta',
                        'DZ'
                    ],
                    'engines' => [
                        '1.6 CRDI 128ch',
                        '1.6 CRDI 128ch BVA',
                        '1.6 MPi 123ch',
                        '1.6 MPi 123ch BVA'
                    ]
                ],
                [
                    'name' => 'Elantra',
                    'versions' => [
                        'Elantra',
                        'GLS',
                        'GLS DZ',
                        'GLX'
                    ],
                    'engines' => [
                        '1.6 ess 120ch',
                        '1.6l MPI 127ch BVA',
                        '1.6 MPI 130ch',
                        '1.6 MPI 130ch BVA',
                        '2.0 CRDI 112ch'
                    ]
                ],
                [
                    'name' => 'EON',
                    'versions' => [
                        'EON',
                        'GL',
                        'GLS'
                    ],
                    'engines' => [
                        '0.8 ess 56ch',
                        '1.0 ess 62ch'
                    ]
                ],
                [
                    'name' => 'Equus',
                    'versions' => [
                        'Equus'
                    ],
                    'engines' => [
                        '4.6 Ess 366 Ch BVA'
                    ]
                ],
                [
                    'name' => 'Genesis',
                    'versions' => [
                        'Genesis'
                    ],
                    'engines' => [
                        '3.8 ess 290ch BVA'
                    ]
                ],
                [
                    'name' => 'Genesis Coupé',
                    'versions' => [
                        'Genesis Coupé'
                    ],
                    'engines' => [
                        '2.0 ess 210ch',
                        '3.8 ess V6 303ch'
                    ]
                ],
                [
                    'name' => 'Getz',
                    'versions' => [
                        'Getz'
                    ],
                    'engines' => [
                        '1.1 ess 12V 62ch',
                        '1.1 ess 12V 66ch',
                        '1.1 ess 66ch',
                        '1.4 ess 12V 82ch',
                        '1.4 ess 16V 97ch',
                        '1.5 CRDI 110ch',
                        '1.5 CRDI 88ch'
                    ]
                ],
                [
                    'name' => 'Grand i10',
                    'versions' => [
                        'DZ',
                        'Grand i10',
                        'Restylée DZ'
                    ],
                    'engines' => [
                        '1.2 ess 87ch',
                        '1.2 ess 87ch BVA'
                    ]
                ],
                [
                    'name' => 'Grand i10 Sedan',
                    'versions' => [
                        'DZ',
                        'DZ FL',
                        'DZ GLS ',
                        'Grand i10 Sedan'
                    ],
                    'engines' => [
                        '1.2 ess 87ch',
                        '1.2 ess 87ch BVA'
                    ]
                ],
                [
                    'name' => 'H1',
                    'versions' => [
                        'H1',
                        'Tolé',
                        'Vitré 12 places',
                        'vitré 2P',
                        'Vitré 6 places',
                        'vitré 8P',
                        'Vitré 9 places'
                    ],
                    'engines' => [
                        '2.5 D 125ch',
                        '2.5l CRDI 136ch'
                    ]
                ],
                [
                    'name' => 'H100',
                    'versions' => [
                        'H100'
                    ],
                    'engines' => [
                        '2.5l CRDI 130ch'
                    ]
                ],
                [
                    'name' => 'i10',
                    'versions' => [
                        'Creative',
                        'GL Plus',
                        'GLS',
                        'GLX',
                        'i10',
                        'Initial',
                        'Intuitive',
                        'N Line'
                    ],
                    'engines' => [
                        '1.0 67ch',
                        '1.0 T-GDi 100ch ',
                        '1.2 84ch'
                    ]
                ],
                [
                    'name' => 'i10 Plus',
                    'versions' => [
                        'GL Clim',
                        'GLS',
                        'i10 Plus',
                        'PRESTIGE'
                    ],
                    'engines' => [
                        '1.1 CRDI 75ch',
                        '1.1 ess 69ch',
                        '1.1 ess 69ch BVA',
                        '1.2 ess 77ch'
                    ]
                ],
                [
                    'name' => 'i20',
                    'versions' => [
                        'Creative',
                        'Extrême',
                        'facelift',
                        'i20',
                        'Prestige',
                        'Style'
                    ],
                    'engines' => [
                        '1.25 ess 85ch',
                        '1.4 CRDI 75ch',
                        '1.4 CRDI 90ch',
                        '1.4 ess 100ch BVA'
                    ]
                ],
                [
                    'name' => 'i30',
                    'versions' => [
                        'i30',
                        'Pack plus',
                        'Pack style',
                        'Préstige',
                        'Style',
                        'Toute options'
                    ],
                    'engines' => [
                        '1.4 CRDI 90ch',
                        '1.6 CRDI 110ch',
                        '1.6 CRDI 115ch',
                        '1.6 CRDI 128ch',
                        '1.6 CRDI 90ch',
                        '1.6 ess 115ch',
                        '2.0 CRDI 140ch'
                    ]
                ],
                [
                    'name' => 'i30CW',
                    'versions' => [
                        'i30CW'
                    ],
                    'engines' => [
                        '1.6 CRDI 115ch'
                    ]
                ],
                [
                    'name' => 'i40',
                    'versions' => [
                        'Extreme',
                        'i40',
                        'Préstige',
                        'Wagon Extreme'
                    ],
                    'engines' => [
                        '1.6 ess 135ch',
                        '1.7 CRDI 115ch',
                        '1.7 CRDI 136ch',
                        '1.7 CRDI 136ch BVA',
                        '1.7 CRDI 140ch',
                        '1.7 CRDI 140ch BVA',
                        '1.7 CRDI 140ch BVA DCT 7'
                    ]
                ],
                [
                    'name' => 'i40SW',
                    'versions' => [
                        'Pack Extreme'
                    ],
                    'engines' => [
                        '1.7 CRDI 115ch',
                        '1.7 CRDI 136ch',
                        '1.7 CRDI 136ch BVA'
                    ]
                ],
                [
                    'name' => 'ix20',
                    'versions' => [
                        'ix20'
                    ],
                    'engines' => [
                        '1.4 CRDI 78ch',
                        '1.4 CRDI 90ch',
                        '1.4 ess 90ch',
                        '1.6 CRDI 115ch',
                        '1.6 ess 125ch BVA'
                    ]
                ],
                [
                    'name' => 'ix55',
                    'versions' => [
                        'ix55'
                    ],
                    'engines' => [
                        '3.0 CRDI V6 240ch'
                    ]
                ],
                [
                    'name' => 'Matrix',
                    'versions' => [
                        'Matrix'
                    ],
                    'engines' => [
                        '1.5 CRDI 110ch',
                        '1.6 ess 16V 103ch'
                    ]
                ],
                [
                    'name' => 'New i20',
                    'versions' => [
                        'Business',
                        'Executive',
                        'Intuitive',
                        'N',
                        'New i20',
                        'N Line'
                    ],
                    'engines' => [
                        '1.0 T-GDi 100ch',
                        '1.2 84ch',
                        '1.4 CRDi 90ch',
                        '1.4 ess 100ch',
                        '1.4 ess 100ch BVA',
                        '1.6 T-GDi 204ch'
                    ]
                ],
                [
                    'name' => 'New i30',
                    'versions' => [
                        'Creative',
                        'New i30',
                        'N Line'
                    ],
                    'engines' => [
                        ' 1.0 T-GDi 120ch ',
                        '1.6 MPi 130ch',
                        '1.6 MPi 130ch BVA'
                    ]
                ],
                [
                    'name' => 'New Sonata',
                    'versions' => [
                        'Extréme '
                    ],
                    'engines' => [
                        '2.0 ess 165 ch',
                        '2.0 ess 165 ch BVA'
                    ]
                ],
                [
                    'name' => 'New Tucson',
                    'versions' => [
                        'Business',
                        'Creative',
                        'Executive',
                        'Extrême',
                        'GL DZ',
                        'GLS DZ',
                        'New Tucson',
                        'N Line Edition',
                        'N Line Executive',
                        'Prestige'
                    ],
                    'engines' => [
                        '1.6 CRDI 136ch',
                        '1.6 T-GDi 150ch Hybrid 48V ',
                        '2.0 CRDI 4x2 177ch',
                        '2.0 CRDI 4x2 177ch BVA',
                        '2.0 CRDI 4x4 177ch',
                        '2.0 CRDI 4x4 177ch BVA'
                    ]
                ],
                [
                    'name' => 'Pony',
                    'versions' => [
                        'Pony'
                    ],
                    'engines' => [
                        '1.3 ess 65ch',
                        '1.4 ess 84ch',
                        '1.5 ess 100ch',
                        '1.5 ess 72ch',
                        '1.5 ess 88ch BVA'
                    ]
                ],
                [
                    'name' => 'SantaFe',
                    'versions' => [
                        'Business',
                        'Creative',
                        'Executive',
                        'GLS DZ',
                        'Intuitive',
                        'Pack Extreme',
                        'Préstige',
                        'SantaFe'
                    ],
                    'engines' => [
                        ' 1.6 T-GDI 230ch',
                        '1.6 T-GDI 265ch ',
                        '2.0 CRDI 4WD 112ch',
                        '2.0 CRDI 4WD 125ch',
                        '2.2 CRDI 155ch',
                        '2.2 CRDI 155ch BVA',
                        '2.2 CRDI 197ch BVA (4x4)',
                        '2.2 CRDI 2WD 155ch',
                        '2.2 CRDI 2WD 197ch',
                        '2.2 CRDI 2WD 197ch BVA',
                        '2.2 CRDI 4WD 155ch',
                        '2.2 CRDI 4WD 155ch BVA',
                        '2.2 CRDI 4WD 197ch',
                        '2.2 CRDI 4WD 197ch BVA',
                        '2.4 ess 4WD 150ch',
                        '2.9 CRDI 4WD 165ch'
                    ]
                ],
                [
                    'name' => 'Satellite',
                    'versions' => [
                        'Satellite'
                    ],
                    'engines' => [
                        '2.5 CRDI 170ch'
                    ]
                ],
                [
                    'name' => 'Terracan',
                    'versions' => [
                        'Terracan'
                    ],
                    'engines' => [
                        '2.9 CRDI 163ch'
                    ]
                ],
                [
                    'name' => 'Trajet',
                    'versions' => [
                        'Trajet'
                    ],
                    'engines' => [
                        '2.0 CRDI 112ch'
                    ]
                ],
                [
                    'name' => 'Tucson',
                    'versions' => [
                        'Extreme',
                        'Extreme 7p',
                        'Prestige',
                        'Style',
                        'Tucson'
                    ],
                    'engines' => [
                        '1.6 ess 135ch',
                        '1.7 CRDI 115ch',
                        '2.0 CRDI 112ch',
                        '2.0 CRDI 136ch',
                        '2.0 CRDI 140ch',
                        '2.0 CRDI 2WD 140ch',
                        '2.0 CRDI 4WD 112ch',
                        '2.0 CRDI 4WD 136ch',
                        '2.0 CRDI 4WD 140ch',
                        '2.0 CRDI 4WD 184ch',
                        '2.0 CRDI 4x2 177ch',
                        '2.0 CRDI 4x2 177ch BVA',
                        '2.0 CRDI 4x4 177ch BVA',
                        '2.0 ess 2WD 140ch'
                    ]
                ],
                [
                    'name' => 'Veloster',
                    'versions' => [
                        'Veloster',
                        'V-GO'
                    ],
                    'engines' => [
                        '1.6 ess 130ch BVA',
                        '1.6 MPI 132ch BVA'
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
