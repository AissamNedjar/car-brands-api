<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class BrillianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Brilliance',
            'models' => [
                [
                    'name' => 'FRV',
                    'versions' => [
                        'Cross',
                        'Fashion Line',
                        'FRV',
                        'Sport Line'
                    ],
                    'engines' => [
                        '1.5 ess BVA',
                        '1.5 ess BVM'
                    ]
                ],
                [
                    'name' => 'FSV',
                    'versions' => [
                        'Confort',
                        'Deluxe',
                        'FSV'
                    ],
                    'engines' => [
                        '1.5 ess BVA',
                        '1.5 ess BVM'
                    ]
                ],
                [
                    'name' => 'H530',
                    'versions' => [
                        'H530'
                    ],
                    'engines' => [
                        '1.6 L 16V VVT'
                    ]
                ],
                [
                    'name' => 'M1',
                    'versions' => [
                        'M1'
                    ],
                    'engines' => [
                        '2.0 ess'
                    ]
                ],
                [
                    'name' => 'V5',
                    'versions' => [
                        'V5'
                    ],
                    'engines' => [
                        '1.6 L 16V VVT'
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
