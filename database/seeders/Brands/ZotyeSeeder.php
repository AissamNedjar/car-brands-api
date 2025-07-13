<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class ZotyeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Zotye',
            'models' => [
                [
                    'name' => 'Cargo',
                    'versions' => [
                        'Cargo'
                    ],
                    'engines' => [
                        '1.2 ess 85ch'
                    ]
                ],
                [
                    'name' => 'Hunter',
                    'versions' => [
                        'T200'
                    ],
                    'engines' => [
                        '1.3 ess 69ch'
                    ]
                ],
                [
                    'name' => 'M 300',
                    'versions' => [
                        'M 300'
                    ],
                    'engines' => [
                        '1.6 ess 73'
                    ]
                ],
                [
                    'name' => 'Nomad 1',
                    'versions' => [
                        'Nomad 1'
                    ],
                    'engines' => [
                        '1.3 ess 69ch'
                    ]
                ],
                [
                    'name' => 'Nomad 2',
                    'versions' => [
                        'Confort',
                        'Luxe',
                        'Nomad 2'
                    ],
                    'engines' => [
                        '1.3 ess 69ch',
                        '1.5 ess 70ch'
                    ]
                ],
                [
                    'name' => 'Z100',
                    'versions' => [
                        '(Ancienne)',
                        'Nouvelle'
                    ],
                    'engines' => [
                        '0.8 ess 52ch',
                        '1.0 ess 67ch'
                    ]
                ],
                [
                    'name' => 'Z 200',
                    'versions' => [
                        'Confort+'
                    ],
                    'engines' => [
                        '1.3 VVT 16V 73ch'
                    ]
                ],
                [
                    'name' => 'Z 200 Hatch Back',
                    'versions' => [
                        'Z 200 Hatch Back'
                    ],
                    'engines' => [
                        '1.3 VVT 16V 71ch'
                    ]
                ],
                [
                    'name' => 'Z300',
                    'versions' => [
                        'Z300'
                    ],
                    'engines' => [
                        '1.5 ess 100ch'
                    ]
                ],
                [
                    'name' => 'Z500',
                    'versions' => [
                        'Z500'
                    ],
                    'engines' => [
                        '1.5 ess 100ch'
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
