<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SaipaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Saipa',
            'models' => [
                [
                    'name' => '132',
                    'versions' => [
                        '132'
                    ],
                    'engines' => [
                        '1.3 ess 63ch'
                    ]
                ],
                [
                    'name' => '151',
                    'versions' => [
                        '151'
                    ],
                    'engines' => [
                        '1.3 ess 71ch'
                    ]
                ],
                [
                    'name' => 'Saba',
                    'versions' => [
                        'Saba'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Saina',
                    'versions' => [
                        'Saina'
                    ],
                    'engines' => [
                        '1.5 ess 80ch'
                    ]
                ],
                [
                    'name' => 'Tiba',
                    'versions' => [
                        'Tiba'
                    ],
                    'engines' => [
                        '1.5 ess 80ch'
                    ]
                ],
                [
                    'name' => 'Tiba Hatchback',
                    'versions' => [
                        'Tiba Hatchback'
                    ],
                    'engines' => [
                        '1.5 ess 80ch'
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
