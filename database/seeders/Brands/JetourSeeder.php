<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class JetourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Jetour',
            'models' => [
                [
                    'name' => 'Dashing',
                    'versions' => [
                        'DASHING '
                    ],
                    'engines' => [
                        '1.6 Ess Turbo 197ch',
                        '1.6L ess Turbo 197ch'
                    ]
                ],
                [
                    'name' => 'T2',
                    'versions' => [
                        'T2'
                    ],
                    'engines' => [
                        '2L TGDI 254ch'
                    ]
                ],
                [
                    'name' => 'X70',
                    'versions' => [
                        'Comfort',
                        'Luxury'
                    ],
                    'engines' => [
                        '1.5 ess Turbo 147 ch',
                        '1.5L ess Turbo 147Ch'
                    ]
                ],
                [
                    'name' => ' X70 PLUS',
                    'versions' => [
                        'Comfort',
                        'Luxury'
                    ],
                    'engines' => [
                        '1.6L ess Turbo 197ch'
                    ]
                ],
                [
                    'name' => ' X90plus ',
                    'versions' => [
                        ' Luxury '
                    ],
                    'engines' => [
                        '1.6L ess Turbo 197ch'
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
