<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class EmgrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Emgrand',
            'models' => [
                [
                    'name' => 'EC 7',
                    'versions' => [
                        'H-B',
                        'Sedan '
                    ],
                    'engines' => [
                        '1.5 ess 108ch',
                        '1.8 ess 138ch',
                        '1.8 ess 138ch CVT'
                    ]
                ],
                [
                    'name' => 'EC 7 RV',
                    'versions' => [
                        'EC 7 RV',
                        'Hatch Back'
                    ],
                    'engines' => [
                        '1.8 ess 138ch',
                        '1.8 ess 138ch CVT'
                    ]
                ],
                [
                    'name' => 'EC8',
                    'versions' => [
                        'GL',
                        'GS'
                    ],
                    'engines' => [
                        '2.0 ess 104ch BVA'
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
