<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class CupraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Cupra',
            'models' => [
                [
                    'name' => 'Ateca',
                    'versions' => [
                        'V',
                        'VZ Tribe Edition'
                    ],
                    'engines' => [
                        '1.5 TSI 150ch',
                        '2.0 TSI 300ch'
                    ]
                ],
                [
                    'name' => 'Leon',
                    'versions' => [
                        'V',
                        'VZ',
                        'VZ Cup'
                    ],
                    'engines' => [
                        '1.5 eTSI 150ch ',
                        '2.0 TDI 150ch',
                        '2.0 TSI 245ch',
                        '2.0 TSI 300ch'
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
