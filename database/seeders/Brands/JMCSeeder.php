<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class JMCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'JMC',
            'models' => [
                [
                    'name' => 'GL',
                    'versions' => [
                        'GL'
                    ],
                    'engines' => [
                        '2.2 ess 112ch'
                    ]
                ],
                [
                    'name' => 'N350',
                    'versions' => [
                        'Vigor'
                    ],
                    'engines' => [
                        '4D 90ch'
                    ]
                ],
                [
                    'name' => 'TFR',
                    'versions' => [
                        'cabine double',
                        'cabine double LUX',
                        'cabine simple'
                    ],
                    'engines' => [
                        '2.7 D 57ch'
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
