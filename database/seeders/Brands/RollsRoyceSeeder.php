<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class RollsRoyceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Rolls Royce',
            'models' => [
                [
                    'name' => 'Corniche',
                    'versions' => [
                        'Corniche'
                    ],
                    'engines' => [
                        '6.8 ess V8 329ch'
                    ]
                ],
                [
                    'name' => 'Phantom',
                    'versions' => [
                        'Phantom'
                    ],
                    'engines' => [
                        '6.7 ess 460ch'
                    ]
                ],
                [
                    'name' => 'Silver Cloud',
                    'versions' => [
                        'Silver Cloud'
                    ],
                    'engines' => [
                        '6.2 ess 225ch'
                    ]
                ],
                [
                    'name' => 'Silver Spirit',
                    'versions' => [
                        'Silver Spirit'
                    ],
                    'engines' => [
                        '6.8 ess V8 240ch'
                    ]
                ],
                [
                    'name' => 'Silver Spur',
                    'versions' => [
                        'Silver Spur'
                    ],
                    'engines' => [
                        '6.8 ess V8 240ch'
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
