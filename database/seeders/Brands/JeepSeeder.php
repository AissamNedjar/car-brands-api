<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class JeepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Jeep',
            'models' => [
                [
                    'name' => 'Cherokee',
                    'versions' => [
                        'Cherokee'
                    ],
                    'engines' => [
                        '2.8 CRD 163ch',
                        '2.8 CRD 177ch',
                        '3.7 ess V6 205ch'
                    ]
                ],
                [
                    'name' => 'CJ',
                    'versions' => [
                        'CJ'
                    ],
                    'engines' => [
                        '2.1 D 60ch'
                    ]
                ],
                [
                    'name' => 'Commander',
                    'versions' => [
                        'Commander'
                    ],
                    'engines' => [
                        '3.0 CRD 218ch'
                    ]
                ],
                [
                    'name' => 'Compass',
                    'versions' => [
                        'Compass',
                        'Limited',
                        'Sport'
                    ],
                    'engines' => [
                        '2.0 CRD 140ch',
                        '2.0 VVT 156ch',
                        '2.4 VVT 170ch'
                    ]
                ],
                [
                    'name' => 'Grand Cherokee',
                    'versions' => [
                        'Grand Cherokee',
                        'Limited'
                    ],
                    'engines' => [
                        '3.0 CRD 218ch',
                        '3.0 CRD V6 Turbo BVA 241ch',
                        '3.0 TD 241ch',
                        '4.7 ess V8 231ch',
                        '5.7 ess V8 326ch',
                        '6.0 ess 425ch'
                    ]
                ],
                [
                    'name' => 'JK Wrangler',
                    'versions' => [
                        'JK Wrangler'
                    ],
                    'engines' => [
                        '2.8 CRD 177ch',
                        '2.8 CRD 177ch BVA',
                        '3.8 ess 199ch',
                        '3.8 ess 199ch BVA'
                    ]
                ],
                [
                    'name' => 'KJ Cherokee',
                    'versions' => [
                        'KJ Cherokee'
                    ],
                    'engines' => [
                        '2.5 CRD 143ch',
                        '2.8 CRD 150ch'
                    ]
                ],
                [
                    'name' => 'MB',
                    'versions' => [
                        'MB'
                    ],
                    'engines' => [
                        '2.2 ess 60ch'
                    ]
                ],
                [
                    'name' => 'Patriot',
                    'versions' => [
                        'Limited',
                        'Patriot',
                        'Sport'
                    ],
                    'engines' => [
                        '2.0 CRD 140ch',
                        '2.0 VVT 156ch'
                    ]
                ],
                [
                    'name' => 'TJ Wrangler',
                    'versions' => [
                        'TJ Wrangler'
                    ],
                    'engines' => [
                        '2.5 ess 123ch',
                        '4.0 ess 183ch'
                    ]
                ],
                [
                    'name' => 'WJ Grand Cherokee',
                    'versions' => [
                        'WJ Grand Cherokee'
                    ],
                    'engines' => [
                        '2.7 CRD 163ch',
                        '3.1 TD 140ch',
                        '4.0 ess 190ch',
                        '4.7 ess V8 223ch',
                        '4.7 ess V8 258ch'
                    ]
                ],
                [
                    'name' => 'WJ Wrangler',
                    'versions' => [
                        'WJ Wrangler'
                    ],
                    'engines' => [
                        '2.5 ess 105ch',
                        '2.5 ess 123ch',
                        '4.0 ess 182ch'
                    ]
                ],
                [
                    'name' => 'Wrangler',
                    'versions' => [
                        'Wrangler'
                    ],
                    'engines' => [
                        '2.4 ess 143ch',
                        '2.8 CRD 177ch',
                        '3.8 ess V6 199ch',
                        '3.8 ess V6 208ch',
                        '4.0 ess V6 177ch'
                    ]
                ],
                [
                    'name' => 'XJ Cherokee',
                    'versions' => [
                        'XJ Cherokee'
                    ],
                    'engines' => [
                        '2.1 D 88ch',
                        '2.5 D 116ch',
                        '2.5 ess 123ch',
                        '4.0 ess 178ch',
                        '4.0 ess 190ch'
                    ]
                ],
                [
                    'name' => 'ZJ Grand Cherokee',
                    'versions' => [
                        'ZJ Grand Cherokee'
                    ],
                    'engines' => [
                        '2.5 TD 115ch',
                        '2.5 TD 116ch'
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
