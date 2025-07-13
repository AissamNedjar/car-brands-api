<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class HummerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Hummer',
            'models' => [
                [
                    'name' => 'H1',
                    'versions' => [
                        'H1'
                    ],
                    'engines' => [
                        '6.5 D 190ch',
                        '6.5 TD 205ch'
                    ]
                ],
                [
                    'name' => 'H2',
                    'versions' => [
                        'H2'
                    ],
                    'engines' => [
                        '6.0 ess 325ch',
                        '6.2 ess 398ch'
                    ]
                ],
                [
                    'name' => 'H3',
                    'versions' => [
                        'H3'
                    ],
                    'engines' => [
                        '3.5 ess 220ch',
                        '3.7 ess V8 245ch',
                        '5.3 ess V8 305ch'
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
