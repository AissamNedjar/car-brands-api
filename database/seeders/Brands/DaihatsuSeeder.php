<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DaihatsuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Daihatsu',
            'models' => [
                [
                    'name' => 'Charade',
                    'versions' => [
                        'Charade'
                    ],
                    'engines' => [
                        '1.3 ess 101ch',
                        '1.3 ess 84ch'
                    ]
                ],
                [
                    'name' => 'Copen',
                    'versions' => [
                        'Copen'
                    ],
                    'engines' => [
                        '1.3 ess 87ch'
                    ]
                ],
                [
                    'name' => 'Cuore',
                    'versions' => [
                        'Cuore'
                    ],
                    'engines' => [
                        '1.0 ess 58ch',
                        '1.0 ess 69ch'
                    ]
                ],
                [
                    'name' => 'Gran Max',
                    'versions' => [
                        'Pick Up',
                        'Tôlé',
                        'Vitré'
                    ],
                    'engines' => [
                        '1.5 ess 96ch'
                    ]
                ],
                [
                    'name' => 'Gran Move',
                    'versions' => [
                        'Gran Move'
                    ],
                    'engines' => [
                        '1.5 ess 90ch'
                    ]
                ],
                [
                    'name' => 'Materia',
                    'versions' => [
                        'Materia'
                    ],
                    'engines' => [
                        '1.3 ess 16V 103ch BVA',
                        '1.3 ess 16V 91ch'
                    ]
                ],
                [
                    'name' => 'Rocky',
                    'versions' => [
                        'Rocky'
                    ],
                    'engines' => [
                        '2.8 TD 102ch'
                    ]
                ],
                [
                    'name' => 'Sirion',
                    'versions' => [
                        'Pack',
                        'Sirion'
                    ],
                    'engines' => [
                        '1.0 ess 69ch',
                        '1.3 ess 16V 91ch',
                        '1.3 ess 16V  BVA 91ch'
                    ]
                ],
                [
                    'name' => 'Terios',
                    'versions' => [
                        '5p',
                        '7p',
                        'Terios'
                    ],
                    'engines' => [
                        '1.3 ess 83ch',
                        '1.5 ess 105ch',
                        '1.5 ess 105ch BVA'
                    ]
                ],
                [
                    'name' => 'Trevis',
                    'versions' => [
                        'Trevis'
                    ],
                    'engines' => [
                        '1.0 ess 58ch'
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
