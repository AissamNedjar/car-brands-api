<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class MazdaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Mazda',
            'models' => [
                [
                    'name' => '2',
                    'versions' => [
                        '2'
                    ],
                    'engines' => [
                        '1.25 ess 75ch',
                        '1.3 ess 75ch',
                        '1.3 MZR 75ch',
                        '1.4 ess 80ch',
                        '1.4 MZ CD 68ch',
                        '1.4 MZR-CD 68ch',
                        '1.5 MZR 103ch',
                        '1.6 ess 100ch',
                        '1.6 MZ CD 90ch'
                    ]
                ],
                [
                    'name' => '3',
                    'versions' => [
                        '3'
                    ],
                    'engines' => [
                        '1.4 ess 84ch',
                        '1.4 MZR 84ch',
                        '1.6 ess 105ch',
                        '1.6 ess 105ch BVA',
                        '1.6 MZ CD 110ch',
                        '1.6 MZ CD 115ch',
                        '1.6 MZ CD 90ch',
                        '1.6 MZR 105ch',
                        '1.6 MZR-CD 109ch',
                        '2.0 ess 150ch',
                        '2.0 MZ CD 143ch',
                        '2.0 MZR 150ch',
                        '2.0 MZR 150ch BVA',
                        '2.0 MZR 151ch',
                        '2.2 MZ CD 185ch',
                        '2.3 ess 260ch',
                        '2.3 MZR 260ch'
                    ]
                ],
                [
                    'name' => '323',
                    'versions' => [
                        '323'
                    ],
                    'engines' => [
                        '1.0 ess 45ch',
                        '1.1 ess 55ch',
                        '1.3 ess 60ch',
                        '1.3 ess 68ch',
                        '1.3 ess 73ch',
                        '1.3 ess 75ch',
                        '1.4 ess 70ch',
                        '1.5 ess 85ch',
                        '1.5 ess 88ch',
                        '1.5 ess 90ch',
                        '1.6 ess 87ch',
                        '1.6 ess 88ch',
                        '1.6 ess 98ch',
                        '1.6 GT 103ch',
                        '1.6 GT 4WD 143ch',
                        '1.6 GTS 143ch',
                        '1.7 D 54ch',
                        '1.7 D 57ch',
                        '1.7 D 83ch',
                        '1.9 ess 114ch BVA',
                        '1.9 ess 163ch',
                        '1.9 ess 185ch',
                        '1.9 GT 115ch',
                        '1.9 GT 128ch',
                        '1.9 GT 140ch',
                        '2.0 D 101ch',
                        '2.0 D 71ch',
                        '2.0 D 90ch',
                        '2.0 GT 147ch'
                    ]
                ],
                [
                    'name' => '5',
                    'versions' => [
                        '5'
                    ],
                    'engines' => [
                        '1.6 MZ CD 115ch',
                        '1.8 MZR 115ch',
                        '2.0 MZ CD 110ch',
                        '2.0 MZ CD 143ch',
                        '2.0 MZR 146ch',
                        '2.0 MZR 146ch BVA',
                        '2.0 MZR 150ch'
                    ]
                ],
                [
                    'name' => '6',
                    'versions' => [
                        '6',
                        'Base',
                        'Pack Luxe',
                        'SkyActive'
                    ],
                    'engines' => [
                        '1.8 ess 120ch',
                        '1.8 ess 126ch',
                        '1.8 MZR 120ch',
                        '2.0 ess 141ch',
                        '2.0 MZ CD 140ch',
                        '2.0 MZR 147ch',
                        '2.0 MZR CD 120ch',
                        '2.0 MZR-CD 136ch',
                        '2.2 MZR CD 125ch',
                        '2.2 MZR CD 163ch',
                        '2.2 MZR CD 180ch',
                        '2.2 MZR CD 185ch',
                        '2.3 ess 166ch',
                        '2.3 ess Turbo 260ch',
                        '2.3 MZR 166ch',
                        '2.5 MZR 170ch',
                        '2.5 SKYACTIV 192ch'
                    ]
                ],
                [
                    'name' => '626',
                    'versions' => [
                        '626'
                    ],
                    'engines' => [
                        '0.0 ess 90ch',
                        '1.6 ess 75ch',
                        '1.6 ess 81ch',
                        '1.8 ess 88ch',
                        '1.8 ess 94ch',
                        '2.0 D 60ch',
                        '2.0 D 61ch',
                        '2.0 D 62ch',
                        '2.0 ess 101ch',
                        '2.0 ess 107ch',
                        '2.0 ess 109ch',
                        '2.0 GT 117ch',
                        '2.0 GT 148ch'
                    ]
                ],
                [
                    'name' => 'BT 50',
                    'versions' => [
                        'Double cabine',
                        'Premium ',
                        'Pro',
                        'Simple cabine',
                        'Simple cabine NEW'
                    ],
                    'engines' => [
                        '2.2 DCI 92ch 4x2',
                        '2.2 DCI 92ch 4x4',
                        '2.5 MZR CD 4X2 117ch',
                        '2.5 MZR CD 4X4 117ch'
                    ]
                ],
                [
                    'name' => 'CX5',
                    'versions' => [
                        'CX5'
                    ],
                    'engines' => [
                        '2.0 CTI 4X2 165ch',
                        '2.0 CTI 4X4 160ch',
                        '2.0 ess 160ch BVA',
                        '2.0l ess 154ch',
                        '2.2 CTI 175ch',
                        '2.2 CTI 4X2 150ch',
                        '2.2 CTI 4X4 150ch',
                        '2.5l ess 165ch'
                    ]
                ],
                [
                    'name' => 'CX7',
                    'versions' => [
                        'CX7'
                    ],
                    'engines' => [
                        '2.2 MZR CD 173ch',
                        '2.3 ess Turbo 260ch'
                    ]
                ],
                [
                    'name' => 'MX3',
                    'versions' => [
                        'MX3'
                    ],
                    'engines' => [
                        '1.6 ess 107ch',
                        '1.6 ess 88ch',
                        '1.9 ess V6 136ch'
                    ]
                ],
                [
                    'name' => 'MX5',
                    'versions' => [
                        'MX5'
                    ],
                    'engines' => [
                        '1.6 ess 110ch',
                        '1.6 ess 115ch',
                        '1.6 ess 90ch',
                        '1.8 ess 126ch',
                        '1.8 MZR 126ch',
                        '1.9 ess 130ch',
                        '1.9 ess 138ch BVA',
                        '1.9 ess 140ch',
                        '1.9 ess 146ch',
                        '2.0 ess 160ch',
                        '2.0 MZR 160ch'
                    ]
                ],
                [
                    'name' => 'MX6',
                    'versions' => [
                        'MX6'
                    ],
                    'engines' => [
                        '2.5 ess V6 165ch'
                    ]
                ],
                [
                    'name' => 'RX7',
                    'versions' => [
                        'RX7'
                    ],
                    'engines' => [
                        '0.6 ess 130ch',
                        '0.7 ess 150ch',
                        '0.7 ess Turbo 200ch',
                        '2.0 ess BiTurbo 239ch'
                    ]
                ],
                [
                    'name' => 'RX8',
                    'versions' => [
                        'RX8'
                    ],
                    'engines' => [
                        '0.7 ess 192ch',
                        '0.7 ess 231ch',
                        '1.3 ess 192ch',
                        '1.3 ess 231ch'
                    ]
                ],
                [
                    'name' => 'Xedos 6',
                    'versions' => [
                        'Xedos 6'
                    ],
                    'engines' => [
                        '2.0 ess 144ch'
                    ]
                ],
                [
                    'name' => 'Xedos 9',
                    'versions' => [
                        'Xedos 9'
                    ],
                    'engines' => [
                        '2.5 ess 167ch'
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
