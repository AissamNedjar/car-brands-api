<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SaabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Saab',
            'models' => [
                [
                    'name' => '900',
                    'versions' => [
                        '900'
                    ],
                    'engines' => [
                        '2.0 ess 108ch',
                        '2.0 ess 118ch',
                        '2.0 ess 133ch',
                        '2.0 ess 145ch',
                        '2.0 ess Turbo 145ch',
                        '2.0 ess Turbo 155ch',
                        '2.0 ess Turbo 175ch',
                        '2.0 ess Turbo 185ch'
                    ]
                ],
                [
                    'name' => '9000',
                    'versions' => [
                        '9000'
                    ],
                    'engines' => [
                        '2.0 ess 135ch',
                        '2.0 ess Turbo 204ch'
                    ]
                ],
                [
                    'name' => '9000 CD',
                    'versions' => [
                        '9000 CD'
                    ],
                    'engines' => [
                        '2.0 ess 150ch',
                        '2.0 ess Turbo 204ch',
                        '2.3 ess 170ch',
                        '2.3 ess Turbo 200ch'
                    ]
                ],
                [
                    'name' => '9000 CS',
                    'versions' => [
                        '9000 CS'
                    ],
                    'engines' => [
                        '2.0 ess 133ch',
                        '2.0 ess 150ch',
                        '2.3 ess 150ch',
                        '2.3 ess 170ch',
                        '2.3 ess 225ch',
                        '2.3 ess Turbo 200ch'
                    ]
                ],
                [
                    'name' => '900 1994',
                    'versions' => [
                        '900 1994'
                    ],
                    'engines' => [
                        '2.0 ess 130ch',
                        '2.0 ess Turbo 185ch',
                        '2.0 GPL 126ch',
                        '2.3 ess 150ch',
                        '2.5 ess V6 170ch'
                    ]
                ],
                [
                    'name' => '9 3',
                    'versions' => [
                        '9 3'
                    ],
                    'engines' => [
                        '1.8  150ch',
                        '1.8  150ch BioPower',
                        '1.8 ess 150ch BioPower',
                        '1.9 TID 120ch',
                        '1.9 TID 150ch',
                        '1.9 TID 180ch',
                        '1.9 TTID 130ch',
                        '1.9 TTID 160ch',
                        '1.9 TTID 180ch',
                        '2.0  175ch',
                        '2.0  175ch BioPower',
                        '2.0  210ch',
                        '2.0  210ch BioPower',
                        '2.8 ess V6 280ch'
                    ]
                ],
                [
                    'name' => '9 3 Cabriolet',
                    'versions' => [
                        '9 3 Cabriolet'
                    ],
                    'engines' => [
                        '1.8  150ch',
                        '1.8  150ch BioPower',
                        '1.9 TID 150ch',
                        '1.9 TTID 160ch',
                        '1.9 TTID 180ch',
                        '2.0  175ch',
                        '2.0  175ch BioPower',
                        '2.0 ess 175ch',
                        '2.0 ess 175ch BioPower',
                        '2.8 ess V6 280ch'
                    ]
                ],
                [
                    'name' => '9 3X',
                    'versions' => [
                        '9 3X'
                    ],
                    'engines' => [
                        '1.9 TID 180ch',
                        '1.9 TTID 180ch',
                        '2.0  210ch BioPower',
                        '2.0 ess 210ch BioPower'
                    ]
                ],
                [
                    'name' => '9 4X',
                    'versions' => [
                        '9 4X'
                    ],
                    'engines' => [
                        '2.8 ess 300ch',
                        '3.0 ess 265ch'
                    ]
                ],
                [
                    'name' => '9 5',
                    'versions' => [
                        '9 5'
                    ],
                    'engines' => [
                        '1.6 ess 180ch',
                        '1.8  150ch',
                        '1.9 TID 150ch',
                        '2.0  150ch',
                        '2.0  150ch BioPower',
                        '2.0  220ch BioPower',
                        '2.0 ess 220ch',
                        '2.0 ess 220ch BioPower',
                        '2.0 TID 160ch',
                        '2.0 TTID 160ch',
                        '2.0 TTID 190ch',
                        '2.3  185ch',
                        '2.3  185ch BioPower',
                        '2.3 ess 260ch',
                        '2.80 ess Turbo V6 300ch'
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
