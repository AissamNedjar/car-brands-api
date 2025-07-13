<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class CherySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Chery',
            'models' => [
                [
                    'name' => 'Arrizo 5',
                    'versions' => [
                        'Comfort',
                        'Luxury'
                    ],
                    'engines' => [
                        '1.5 ess 108ch '
                    ]
                ],
                [
                    'name' => 'Arrizo 8',
                    'versions' => [
                        'Comfort ',
                        'Luxury'
                    ],
                    'engines' => [
                        '1.6 TGDI 197ch'
                    ]
                ],
                [
                    'name' => 'Cowin',
                    'versions' => [
                        'A21FL',
                        'Cowin'
                    ],
                    'engines' => [
                        '1.5 ess 109ch'
                    ]
                ],
                [
                    'name' => 'Fulwin',
                    'versions' => [
                        'A13A',
                        'Fulwin'
                    ],
                    'engines' => [
                        '1.5 ess 109ch'
                    ]
                ],
                [
                    'name' => 'New QQ',
                    'versions' => [
                        'New QQ'
                    ],
                    'engines' => [
                        '0.8 ess 38ch',
                        '1.1 ess 69ch'
                    ]
                ],
                [
                    'name' => 'QQ',
                    'versions' => [
                        'QQ'
                    ],
                    'engines' => [
                        '0.8 ess 38ch',
                        '1.1 ess 68ch'
                    ]
                ],
                [
                    'name' => 'S18',
                    'versions' => [
                        'D',
                        'S18'
                    ],
                    'engines' => [
                        '1.3 ess 84ch'
                    ]
                ],
                [
                    'name' => 'Tiggo',
                    'versions' => [
                        'T11',
                        'Tiggo'
                    ],
                    'engines' => [
                        '1.6 ess 120ch'
                    ]
                ],
                [
                    'name' => 'Tiggo 2 pro',
                    'versions' => [
                        '1.5 CVT',
                        '1.5 MT 1.5 ess 108ch',
                        'Comfort',
                        'Luxury '
                    ],
                    'engines' => [
                        '1.0 ess turbo 102ch',
                        '1.5 ess 108ch'
                    ]
                ],
                [
                    'name' => 'Tiggo 4 pro',
                    'versions' => [
                        'Comfort ',
                        'Luxury ',
                        'Premium'
                    ],
                    'engines' => [
                        '1.5 ess 113ch ',
                        '1,5 ess Turbo 147ch '
                    ]
                ],
                [
                    'name' => 'Tiggo 7 Pro',
                    'versions' => [
                        'Comfort ',
                        'Luxury '
                    ],
                    'engines' => [
                        '1.5 Tci 154ch '
                    ]
                ],
                [
                    'name' => 'Tiggo 8 pro ',
                    'versions' => [
                        '8 PRO'
                    ],
                    'engines' => [
                        '1.6 TGDI 197ch'
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
