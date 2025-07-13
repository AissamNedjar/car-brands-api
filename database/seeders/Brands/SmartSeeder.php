<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SmartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Smart',
            'models' => [
                [
                    'name' => 'ForFour',
                    'versions' => [
                        'ForFour'
                    ],
                    'engines' => [
                        '1.0 ess 64ch',
                        '1.1 ess 75ch',
                        '1.3 ess 95ch',
                        '1.5 CDI 68ch',
                        '1.5 CDI 95ch',
                        '1.5 ess 109ch',
                        '1.5 ess 177ch'
                    ]
                ],
                [
                    'name' => 'ForTwo',
                    'versions' => [
                        'ForTwo'
                    ],
                    'engines' => [
                        '0.7 ess 50ch',
                        '0.7 ess 61ch',
                        '0.7 ess 74ch',
                        '0.7 ess 75ch',
                        '0.8 CDI 41ch',
                        '0.8 CDI 45ch',
                        '0.8 CDI 54ch',
                        '1.0 ess 102ch',
                        '1.0 ess 61ch',
                        '1.0 ess 71ch',
                        '1.0 ess 84ch',
                        '1.0 ess 98ch'
                    ]
                ],
                [
                    'name' => 'Fortwo Cabrio',
                    'versions' => [
                        'Fortwo Cabrio'
                    ],
                    'engines' => [
                        '0.8 CDI 54ch',
                        '1.0 ess 102ch',
                        '1.0 ess 71ch',
                        '1.0 ess 84ch',
                        '1.0 ess 98ch'
                    ]
                ],
                [
                    'name' => 'Roadster',
                    'versions' => [
                        'Roadster'
                    ],
                    'engines' => [
                        '0.7 ess 82ch'
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
