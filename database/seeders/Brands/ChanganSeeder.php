<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class ChanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Changan',
            'models' => [
                [
                    'name' => 'Benni mini',
                    'versions' => [
                        'Benni mini'
                    ],
                    'engines' => [
                        '1.0 ess 68ch',
                        '1.0 ess 68ch BVA'
                    ]
                ],
                [
                    'name' => 'CX20',
                    'versions' => [
                        'CX20'
                    ],
                    'engines' => [
                        '1.3 ess 86ch',
                        '1.3 ess 86ch BVA'
                    ]
                ],
                [
                    'name' => 'Sania',
                    'versions' => [
                        'Sania'
                    ],
                    'engines' => [
                        '1.6 ess 123ch',
                        '1.6 ess 123ch BVA'
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
