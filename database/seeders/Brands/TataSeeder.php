<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class TataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Tata',
            'models' => [
                [
                    'name' => 'ARIA',
                    'versions' => [
                        '4x4'
                    ],
                    'engines' => [
                        '2.2 D Vicor 150ch'
                    ]
                ],
                [
                    'name' => 'Indica',
                    'versions' => [
                        'Indica'
                    ],
                    'engines' => [
                        '1.4 D 70ch',
                        '1.4 MPFi 85ch'
                    ]
                ],
                [
                    'name' => 'Indigo',
                    'versions' => [
                        'Indigo'
                    ],
                    'engines' => [
                        '1.4 D 70ch',
                        '1.4 MPFi 85ch'
                    ]
                ],
                [
                    'name' => 'Manza',
                    'versions' => [
                        'Manza'
                    ],
                    'engines' => [
                        '1.2 D 75ch',
                        '1.4 ess 90ch'
                    ]
                ],
                [
                    'name' => 'Vista',
                    'versions' => [
                        'Vista'
                    ],
                    'engines' => [
                        '1.2 D 75ch',
                        '1.4 ess Safire 85ch'
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
