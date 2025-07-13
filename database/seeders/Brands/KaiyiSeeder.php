<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class KaiyiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Kaiyi',
            'models' => [
                [
                    'name' => 'X3',
                    'versions' => [],
                    'engines' => [
                        '1.5 ess 113 CVT',
                        '1.5 ess 113 MT'
                    ]
                ],
                [
                    'name' => 'X3 Pro ',
                    'versions' => [],
                    'engines' => [
                        '1.5 Ess 116ch CVT',
                        '1.5 Ess 116ch MT',
                        '1.5 T 147ch CVT',
                        '1.5 T 147ch MT'
                    ]
                ],
                [
                    'name' => 'X7',
                    'versions' => [],
                    'engines' => [
                        '1.6 TGDI 194ch 7DCT',
                        '2.0 TGDI 250 ch 7DCT'
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
