<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class HafeimotorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Hafei motors',
            'models' => [
                [
                    'name' => 'Minibus',
                    'versions' => [
                        'Minibus'
                    ],
                    'engines' => [
                        '1.0 ess 48 ch'
                    ]
                ],
                [
                    'name' => 'Yavuz',
                    'versions' => [
                        'Yavuz'
                    ],
                    'engines' => [
                        '1.1 ess 65 ch'
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
