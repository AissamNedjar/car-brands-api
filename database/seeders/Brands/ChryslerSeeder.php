<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class ChryslerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Chrysler',
            'models' => [
                [
                    'name' => '300C',
                    'versions' => [
                        '300C'
                    ],
                    'engines' => [
                        '2.7 ess 193ch',
                        '2.7 ess V6 193ch',
                        '3.0 CRD 218ch',
                        '3.5 ess 253ch',
                        '3.5 ess V6 249ch',
                        '5.6 ess AWD 340ch',
                        '5.7 ess 340ch',
                        '6.0 ess 431ch',
                        '6.1 ess 431ch'
                    ]
                ],
                [
                    'name' => '300M',
                    'versions' => [
                        '300M'
                    ],
                    'engines' => [
                        '3.5 ess 254ch'
                    ]
                ],
                [
                    'name' => 'Crossfire',
                    'versions' => [
                        'Crossfire'
                    ],
                    'engines' => [
                        '3.2 ess 218ch',
                        '3.2 ess 330ch',
                        '3.2 ess 335ch',
                        '3.2 ess V6 218ch'
                    ]
                ],
                [
                    'name' => 'Grand Voyager',
                    'versions' => [
                        'Grand Voyager'
                    ],
                    'engines' => [
                        '2.8 CRD 150ch',
                        '2.8 CRD 163ch',
                        '3.3 ess V6 174ch'
                    ]
                ],
                [
                    'name' => 'Grand Voyager 3',
                    'versions' => [
                        'Grand Voyager 3'
                    ],
                    'engines' => [
                        '2.5 TD 115ch',
                        '3.3 ess 158ch'
                    ]
                ],
                [
                    'name' => 'Grand Voyager 4',
                    'versions' => [
                        'Grand Voyager 4'
                    ],
                    'engines' => [
                        '2.5 CRD 140ch'
                    ]
                ],
                [
                    'name' => 'Le Baron',
                    'versions' => [
                        'Le Baron'
                    ],
                    'engines' => [
                        '2.2 ess 177ch',
                        '2.5 ess 152ch',
                        '3.0 ess V6 136ch'
                    ]
                ],
                [
                    'name' => 'Neon',
                    'versions' => [
                        'Neon'
                    ],
                    'engines' => [
                        '1.8 ess 115ch',
                        '2.0 ess 133ch'
                    ]
                ],
                [
                    'name' => 'New Yorker',
                    'versions' => [
                        'New Yorker'
                    ],
                    'engines' => [
                        '3.5 ess 211ch'
                    ]
                ],
                [
                    'name' => 'Prowler',
                    'versions' => [
                        'Prowler'
                    ],
                    'engines' => [
                        '3.5 ess 253ch'
                    ]
                ],
                [
                    'name' => 'PT Cruiser',
                    'versions' => [
                        'PT Cruiser'
                    ],
                    'engines' => [
                        '2.0 ess 140ch',
                        '2.0 ess 141ch BVA',
                        '2.2 CRD 121ch',
                        '2.2 CRD 150ch',
                        '2.4 ess 223ch',
                        '2.4 GT 223ch',
                        '2.5 ess 143ch',
                        '2.5 GT 223ch'
                    ]
                ],
                [
                    'name' => 'PT Cruiser Cabriolet',
                    'versions' => [
                        'PT Cruiser Cabriolet'
                    ],
                    'engines' => [
                        '2.5 ess 143ch',
                        '2.5 GT 223ch'
                    ]
                ],
                [
                    'name' => 'Sebring',
                    'versions' => [
                        'Sebring'
                    ],
                    'engines' => [
                        '2.0 CRD 140ch',
                        '2.0 ess 152ch',
                        '2.7 ess 203ch',
                        '2.7 ess V6 186ch'
                    ]
                ],
                [
                    'name' => 'Stratus',
                    'versions' => [
                        'Stratus'
                    ],
                    'engines' => [
                        '2.0 ess 131ch',
                        '2.5 ess V6 163ch'
                    ]
                ],
                [
                    'name' => 'Viper',
                    'versions' => [
                        'Viper'
                    ],
                    'engines' => [
                        '8.0 ess 364ch',
                        '8.0 GTS 384ch'
                    ]
                ],
                [
                    'name' => 'Vision',
                    'versions' => [
                        'Vision'
                    ],
                    'engines' => [
                        '3.5 ess 211ch'
                    ]
                ],
                [
                    'name' => 'Voyager',
                    'versions' => [
                        'Voyager'
                    ],
                    'engines' => [
                        '2.4 ess 147ch',
                        '2.8 CRD 150ch',
                        '3.3 ess V6 174ch'
                    ]
                ],
                [
                    'name' => 'Voyager 2',
                    'versions' => [
                        'Voyager 2'
                    ],
                    'engines' => [
                        '2.5 ess 99ch',
                        '2.5 TD 118ch',
                        '3.0 ess 141ch',
                        '3.3 ess 150ch',
                        '3.3 ess 163ch',
                        '3.3 ess AWD 150ch'
                    ]
                ],
                [
                    'name' => 'Voyager 3',
                    'versions' => [
                        'Voyager 3'
                    ],
                    'engines' => [
                        '2.0 ess 133ch',
                        '2.4 ess 151ch',
                        '2.5 TD 115ch',
                        '3.3 ess 158ch',
                        '3.8 ess AWD 166ch'
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
