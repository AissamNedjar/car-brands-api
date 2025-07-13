<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class ChanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Chana',
            'models' => [
                [
                    'name' => 'Q20',
                    'versions' => [
                        'Double cabine',
                        'Simple cabine'
                    ],
                    'engines' => [
                        '1.0 D 54ch'
                    ]
                ],
                [
                    'name' => 'Star II 7 places',
                    'versions' => [
                        'Star II 7 places'
                    ],
                    'engines' => [
                        '1.0l 68ch'
                    ]
                ],
                [
                    'name' => 'Star Truck',
                    'versions' => [
                        'Double cabine',
                        'Simple cabine'
                    ],
                    'engines' => [
                        '1.0l ess 52ch'
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
