<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SuzukiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Suzuki',
            'models' => [
                [
                    'name' => 'Alto',
                    'versions' => [
                        'Alto',
                        'DLX',
                        'STD',
                        'STD AC'
                    ],
                    'engines' => [
                        '0.8 ess 46ch',
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'Alto 800',
                    'versions' => [
                        'Alto 800'
                    ],
                    'engines' => [
                        '0.8 ess 46ch'
                    ]
                ],
                [
                    'name' => 'ALTO 800',
                    'versions' => [
                        'ALTO 800'
                    ],
                    'engines' => [
                        '0,8 ess 46ch'
                    ]
                ],
                [
                    'name' => 'Alto K10',
                    'versions' => [
                        'Alto K10'
                    ],
                    'engines' => [
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'Baleno',
                    'versions' => [
                        'Baleno'
                    ],
                    'engines' => [
                        '1,5 ess 105ch BVA',
                        '1,5 ess 105ch BVM'
                    ]
                ],
                [
                    'name' => 'Celerio',
                    'versions' => [
                        'Celerio',
                        'GA',
                        'GLX'
                    ],
                    'engines' => [
                        '1.0 ess 68ch',
                        '1.0 ess 68ch BVA',
                        '1,0 ess 68ch BVA'
                    ]
                ],
                [
                    'name' => 'Ciaz',
                    'versions' => [
                        'Ciaz'
                    ],
                    'engines' => [
                        '1.4 ess 92 ch',
                        '1.4 ess 92 ch BVA',
                        '1,4 ess 92ch BVA',
                        '1,4 ess 92ch BVM'
                    ]
                ],
                [
                    'name' => 'Ertiga',
                    'versions' => [
                        'Ertiga'
                    ],
                    'engines' => [
                        '1.4 ess 95ch',
                        '1.4 ess 95ch BVA'
                    ]
                ],
                [
                    'name' => 'Grand Vitara',
                    'versions' => [
                        'Grand Vitara',
                        'XL-7'
                    ],
                    'engines' => [
                        '1.9 DDIS 129ch',
                        '2.0 ess 140ch',
                        '2.0 TD 109ch',
                        '2.7 ess V6 172ch'
                    ]
                ],
                [
                    'name' => 'Ignis',
                    'versions' => [
                        'Ignis'
                    ],
                    'engines' => [
                        '1.3 DDIS 70ch',
                        '1.3 VVT 93ch',
                        '1.5 VVT 100ch'
                    ]
                ],
                [
                    'name' => 'Jimny',
                    'versions' => [
                        'Jimny'
                    ],
                    'engines' => [
                        '1.3 VVT 85ch',
                        '1.5 DDIS 86ch',
                        '1,5ess VVT 102ch'
                    ]
                ],
                [
                    'name' => 'Maruti 800',
                    'versions' => [
                        'Maruti 800'
                    ],
                    'engines' => [
                        '0.8 ess 47ch'
                    ]
                ],
                [
                    'name' => 'Maruti Zen',
                    'versions' => [
                        'Maruti Zen'
                    ],
                    'engines' => [
                        '1.0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'Samurai',
                    'versions' => [
                        'Samurai'
                    ],
                    'engines' => [
                        '1.0 ess 45ch',
                        '1.3 ess 64ch',
                        '1.3 ess 69ch'
                    ]
                ],
                [
                    'name' => 'Splash',
                    'versions' => [
                        'Splash'
                    ],
                    'engines' => [
                        '1.0 ess 65ch',
                        '1.2 ess 16V 86ch',
                        '1.3 DDIS 75ch'
                    ]
                ],
                [
                    'name' => 'S.Presso',
                    'versions' => [
                        'S.Presso'
                    ],
                    'engines' => [
                        '1,0 ess 68ch'
                    ]
                ],
                [
                    'name' => 'Swift',
                    'versions' => [
                        'Swift'
                    ],
                    'engines' => [
                        '1.0 ess 53ch',
                        '1.2 VVT 85ch',
                        '1.2 VVT 85ch BVA',
                        '1.3 DDIS 75ch',
                        '1.3 ess 4X4 94ch',
                        '1.3 ess 68ch',
                        '1.3 ess 92ch',
                        '1.3 GTI 101ch',
                        '1.3 VVT 94ch',
                        '1.3 VVT 94ch BVA',
                        '1.6 ess 125ch',
                        '1.6 ess 136ch',
                        '1.6 VVT 125ch'
                    ]
                ],
                [
                    'name' => 'Swift Dzire',
                    'versions' => [
                        'GA',
                        'GL',
                        'GLX',
                        'Swift Dzire'
                    ],
                    'engines' => [
                        '1.2 VVT 85ch',
                        '1.2 VVT 85ch BVA'
                    ]
                ],
                [
                    'name' => 'SX4',
                    'versions' => [
                        'S Cross',
                        'SX4'
                    ],
                    'engines' => [
                        '1.6 DDIS 90ch',
                        '1.6 VVT 104ch',
                        '1.6 VVT 117ch',
                        '1.6 VVT 117ch BVA',
                        '1.9 DDIS 120ch',
                        '2.0 DDIS 135ch'
                    ]
                ],
                [
                    'name' => 'Vitara',
                    'versions' => [
                        'Vitara'
                    ],
                    'engines' => [
                        '1.6 ess 16V 95ch',
                        '1.6 ess 16V 95ch BVA',
                        '1.6 ess 74ch',
                        '1.6 VVT 104ch',
                        '1.9 DDIS 129ch',
                        '2.0 TD 87ch'
                    ]
                ],
                [
                    'name' => 'Wagon R+',
                    'versions' => [
                        'Wagon R'
                    ],
                    'engines' => [
                        '1.2 VVT 80ch',
                        '1.3 DDIS 70ch',
                        '1.3 ess 76ch'
                    ]
                ],
                [
                    'name' => 'X90',
                    'versions' => [
                        'X90'
                    ],
                    'engines' => [
                        '1.6 ess 96ch'
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
