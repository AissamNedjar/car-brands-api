<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class NissanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Nissan',
            'models' => [
                [
                    'name' => '100 NX',
                    'versions' => [
                        '100 NX'
                    ],
                    'engines' => [
                        '1.6 ess 102ch',
                        '1.6 ess 95ch',
                        '2.0 GTI 143ch'
                    ]
                ],
                [
                    'name' => '200 SX',
                    'versions' => [
                        '200 SX'
                    ],
                    'engines' => [
                        '1.8 ess 171ch',
                        '2.0 ess 200ch'
                    ]
                ],
                [
                    'name' => '240Z',
                    'versions' => [
                        '240Z'
                    ],
                    'engines' => [
                        '2.4 ess 150ch'
                    ]
                ],
                [
                    'name' => '260Z',
                    'versions' => [
                        '260Z'
                    ],
                    'engines' => [
                        '2.6 ess 162ch'
                    ]
                ],
                [
                    'name' => '280ZX',
                    'versions' => [
                        '280ZX'
                    ],
                    'engines' => [
                        '2.8 ess 140ch'
                    ]
                ],
                [
                    'name' => '300ZX',
                    'versions' => [
                        '300ZX'
                    ],
                    'engines' => [
                        '3.0 ess 228ch'
                    ]
                ],
                [
                    'name' => '350Z coupé',
                    'versions' => [
                        '350Z coupé'
                    ],
                    'engines' => [
                        '3.5 ess 300ch',
                        '3.5 ess 313ch'
                    ]
                ],
                [
                    'name' => '350Z Roadster',
                    'versions' => [
                        '350Z Roadster'
                    ],
                    'engines' => [
                        '3.5 ess 300ch',
                        '3.5 ess 313ch'
                    ]
                ],
                [
                    'name' => '370 Z ',
                    'versions' => [
                        '370 Z '
                    ],
                    'engines' => [
                        '3.7 ess 328ch',
                        '3.7 ess 331ch'
                    ]
                ],
                [
                    'name' => '371 Z ',
                    'versions' => [
                        '371 Z '
                    ],
                    'engines' => [
                        '3.7 ess V6 328ch',
                        '3.7 ess V6 331ch'
                    ]
                ],
                [
                    'name' => 'Almera',
                    'versions' => [
                        'Almera'
                    ],
                    'engines' => [
                        '1.4 ess 87ch',
                        '1.5 DCI 80ch',
                        '1.5 ess 90ch',
                        '1.6 ess 100ch',
                        '1.8 ess 114ch',
                        '1.8 ess 114ch BVA',
                        '2.0 D 75ch',
                        '2.0 GTI 143ch',
                        '2.2 DCI 136ch',
                        '2.2 VDI 110ch'
                    ]
                ],
                [
                    'name' => 'Almera Tino',
                    'versions' => [
                        'Almera Tino'
                    ],
                    'engines' => [
                        '1.8 ess 114ch',
                        '2.2 DCI 112ch',
                        '2.2 DCI 136ch',
                        '2.2 VDI 110ch'
                    ]
                ],
                [
                    'name' => 'Bluebird',
                    'versions' => [
                        'Bluebird'
                    ],
                    'engines' => [
                        '1.6 ess 82ch',
                        '1.8 ess 89ch',
                        '1.8 ess Turbo 135ch',
                        '2.0 D 67ch',
                        '2.0 ess 102ch',
                        '2.0 ess 115ch'
                    ]
                ],
                [
                    'name' => 'Cabstar',
                    'versions' => [
                        'Cabstar'
                    ],
                    'engines' => [
                        'YD 2.5',
                        'YD 3.0'
                    ]
                ],
                [
                    'name' => 'Cherry',
                    'versions' => [
                        'Cherry'
                    ],
                    'engines' => [
                        '1.0 ess 45ch',
                        '1.0 ess 50ch',
                        '1.0 ess 58ch',
                        '1.2 ess 52ch',
                        '1.2 ess 69ch',
                        '1.3 ess 60ch',
                        '1.4 ess 63ch',
                        '1.5 ess 70ch',
                        '1.5 ess 75ch',
                        '1.5 ess Turbo 114ch'
                    ]
                ],
                [
                    'name' => 'Civilan',
                    'versions' => [
                        'Civilan'
                    ],
                    'engines' => [
                        '4.2TD MT'
                    ]
                ],
                [
                    'name' => 'Cube',
                    'versions' => [
                        'Cube'
                    ],
                    'engines' => [
                        '1.5 DCI 110ch',
                        '1.6 ess 16V 110ch'
                    ]
                ],
                [
                    'name' => 'GTR',
                    'versions' => [
                        'GTR',
                        'Nismo'
                    ],
                    'engines' => [
                        '3.8 ess 485ch',
                        '3.8 ess 530ch',
                        '3.8 ess V6 530ch',
                        '3.8 ess V6 550ch'
                    ]
                ],
                [
                    'name' => 'Juke',
                    'versions' => [
                        'Acenta',
                        'Acenta MC',
                        'Juke',
                        'Tekna',
                        'Tekna MC'
                    ],
                    'engines' => [
                        '1.5 DCI 110ch',
                        '1.6 ess 117ch',
                        '1.6 ess 117ch CVT',
                        '1.6 ess 16V 117ch',
                        '1.6 ess 190ch',
                        '1.6 ess DIG-T 190ch',
                        '1.6 ess Turbo 190ch',
                        '3.8 ess 550ch'
                    ]
                ],
                [
                    'name' => 'Maxima QX',
                    'versions' => [
                        'Maxima QX'
                    ],
                    'engines' => [
                        '2.0 ess 140ch',
                        '3.0 ess 193ch BVA',
                        '3.0 ess 200ch BVA'
                    ]
                ],
                [
                    'name' => 'Micra',
                    'versions' => [
                        'Acenta',
                        'City',
                        'Micra',
                        'Tekna',
                        'Visia +'
                    ],
                    'engines' => [
                        '1.0 ess 55ch',
                        '1.2 ess 65ch',
                        '1.2 ess 76ch',
                        '1.2 ess 80ch',
                        '1.2 ess 80ch BVA',
                        '1.2 ess 98ch',
                        '1.3 ess 75ch',
                        '1.3 ess 80ch',
                        '1.4 ess 88ch',
                        '1.5 D 58ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 82ch',
                        '1.5 DCI 86ch',
                        '1.6 ess 110ch'
                    ]
                ],
                [
                    'name' => 'Murano',
                    'versions' => [
                        'Elegence',
                        'Murano',
                        'Sport'
                    ],
                    'engines' => [
                        '2.5 DCI 190ch',
                        '3.5 ess V6 234ch',
                        '3.5 ess V6 256ch'
                    ]
                ],
                [
                    'name' => 'Navara',
                    'versions' => [
                        'Double Cabine ',
                        'Elegance 4x2',
                        'Elegance 4x4',
                        'Navara',
                        'Platinum',
                        'SC XE',
                        'Simple Cabine'
                    ],
                    'engines' => [
                        '2.5 DCI 144ch',
                        '2.5 DCI 171ch',
                        '2.5 DCI 174ch',
                        '2.5 DCI 190ch',
                        '2.5 DDTI 4x2 144ch',
                        '2.5 DDTI 4x4 144ch',
                        '2.5 DDTI 4x4 174ch',
                        '2.5 DDTI 4x4 190ch',
                        '3.0 DCI V6 231ch'
                    ]
                ],
                [
                    'name' => 'Note',
                    'versions' => [
                        'Note'
                    ],
                    'engines' => [
                        '1.4 ess 88ch',
                        '1.5 DCI 106ch',
                        '1.5 DCI 68ch',
                        '1.5 DCI 86ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 110ch'
                    ]
                ],
                [
                    'name' => 'NV200 Evalia',
                    'versions' => [
                        'NV200 Evalia'
                    ],
                    'engines' => [
                        '1.5 DCI 110ch',
                        '1.5 DCI 90ch'
                    ]
                ],
                [
                    'name' => 'Pathfinder',
                    'versions' => [
                        'Elegance',
                        'Pathfinder',
                        'Sport'
                    ],
                    'engines' => [
                        '2.5 DCI 171ch',
                        '2.5 DCI 174ch',
                        '2.5 DCI 190ch',
                        '2.5 DCI 190ch BVA',
                        '3.0 DCI V6 231ch',
                        '3.0 DCI V6 238ch',
                        '4.0 ess 269ch',
                        '4.0 ess V6 269ch'
                    ]
                ],
                [
                    'name' => 'Patrol Court',
                    'versions' => [
                        'Patrol Court'
                    ],
                    'engines' => [
                        '2.8 D 130ch',
                        '2.8 TD 115ch',
                        '3.0 D 160ch',
                        '3.0 VDI 158ch BVA',
                        '4.2 D 160ch'
                    ]
                ],
                [
                    'name' => 'Patrol Long',
                    'versions' => [
                        '7 Places SGL',
                        'ELEGANCE TOP GRADE CITY',
                        'Lux',
                        'Patrol Long',
                        'SW',
                        'T3'
                    ],
                    'engines' => [
                        '2.8 D 130ch',
                        '2.8 TD 115ch',
                        '3.0 D 160ch',
                        '4.2 D 160ch',
                        '4.2 ess 170ch',
                        '5.6 ess 400ch'
                    ]
                ],
                [
                    'name' => 'Pickup',
                    'versions' => [
                        'DC',
                        'Pickup',
                        'SC'
                    ],
                    'engines' => [
                        '2.5 D 72ch',
                        '2.5 TD 133ch',
                        '2.5 TD 2x4 127ch',
                        '2.5 TD 4x4 127ch'
                    ]
                ],
                [
                    'name' => 'Pixo',
                    'versions' => [
                        'Pixo'
                    ],
                    'engines' => [
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'Primera',
                    'versions' => [
                        'Primera'
                    ],
                    'engines' => [
                        '1.6 ess 100ch',
                        '1.6 ess 102ch',
                        '1.6 ess 96ch',
                        '1.8 ess 114ch',
                        '1.8 ess 116ch',
                        '1.9 DCI 120ch',
                        '2.0 D 75ch',
                        '2.0 ess 121ch',
                        '2.0 ess 125ch',
                        '2.0 ess 130ch',
                        '2.0 ess 140ch',
                        '2.0 GT 150ch',
                        '2.0 TD 90ch',
                        '2.2 VDI 126ch'
                    ]
                ],
                [
                    'name' => 'Qashqai',
                    'versions' => [
                        '+2 Tekna',
                        '+2 Visia',
                        'Qashqai',
                        'Tekna',
                        'Visia'
                    ],
                    'engines' => [
                        '1.5 DCI 106ch',
                        '1.5 DCI 110ch',
                        '1.6 dCi 130ch 4x2',
                        '1.6 dCi 130ch 4x4',
                        '1.6 ess 115ch',
                        '1.6 ess 16V 115ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 150ch 2WD',
                        '2.0 DCI 150ch 4WD',
                        '2.0 ess 140ch',
                        '2.0 ess 16V 140ch'
                    ]
                ],
                [
                    'name' => 'Serena',
                    'versions' => [
                        'Serena'
                    ],
                    'engines' => [
                        '2.0 ess 126ch',
                        '2.3 D 75ch'
                    ]
                ],
                [
                    'name' => 'Skyline',
                    'versions' => [
                        'Skyline'
                    ],
                    'engines' => [
                        '2.6 ess 280ch',
                        '3.7 ess 480ch',
                        '3.8 ess 485ch'
                    ]
                ],
                [
                    'name' => 'Sunny',
                    'versions' => [
                        'Acenta',
                        'Acenta pack',
                        'Sunny',
                        'Tekna',
                        'Visia'
                    ],
                    'engines' => [
                        '1.3 ess 60ch',
                        '1.3 ess 87ch',
                        '1.4 ess 80ch',
                        '1.4 ess 82ch',
                        '1.4 ess 87ch',
                        '1.5 ess 100ch',
                        '1.5 ess 100ch BVA',
                        '1.5 ess 75ch',
                        '1.6 ess 100ch',
                        '1.6 ess 102ch',
                        '1.6 ess 110ch',
                        '1.6 ess 4WD 84ch',
                        '1.6 ess 84ch',
                        '1.6 ess 94ch',
                        '1.6 ess 95ch',
                        '1.6 GTI 122ch',
                        '1.7 D 55ch',
                        '2.0 D 75ch',
                        '2.0 GTI 143ch',
                        '2.0 GTI 220ch'
                    ]
                ],
                [
                    'name' => 'Sunny coupé',
                    'versions' => [
                        'Sunny coupé'
                    ],
                    'engines' => [
                        '1.6 GTI 122ch'
                    ]
                ],
                [
                    'name' => 'Terrano',
                    'versions' => [
                        'Terrano'
                    ],
                    'engines' => [
                        '2.4 ess 118ch',
                        '2.7 D 125ch',
                        '2.7 TD 100ch',
                        '2.7 TDI 125ch',
                        '3.0 D 154ch'
                    ]
                ],
                [
                    'name' => 'Tiida 4 portes',
                    'versions' => [
                        'Tiida 4 portes'
                    ],
                    'engines' => [
                        '1.6 ess 109ch'
                    ]
                ],
                [
                    'name' => 'Tiida 5 portes',
                    'versions' => [
                        'Tiida 5 portes'
                    ],
                    'engines' => [
                        '1.6 ess 109ch'
                    ]
                ],
                [
                    'name' => 'Urvan',
                    'versions' => [
                        'Fourgon',
                        'Microbus 15P'
                    ],
                    'engines' => [
                        'YD 2.5 DDTi'
                    ]
                ],
                [
                    'name' => 'X Trail',
                    'versions' => [
                        'Elegence',
                        'X Trail'
                    ],
                    'engines' => [
                        '1.6 Dci 130 Ch 4x2',
                        '1.6 Dci 130 Ch 4x4',
                        '1.6 Dci 130 Ch 4x4 BVA',
                        '2.0 Dci 150 Ch',
                        '2.0 Dci 150 Ch BVA',
                        '2.0 Dci 150 Ch BVM'
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
