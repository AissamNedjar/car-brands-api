<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class MahindraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Mahindra',
            'models' => [
                [
                    'name' => 'Genio',
                    'versions' => [
                        'DC',
                        'DC Luxe',
                        'SC'
                    ],
                    'engines' => [
                        '2.2 CRDE 4X2 120ch'
                    ]
                ],
                [
                    'name' => 'Quanto',
                    'versions' => [
                        'Quanto'
                    ],
                    'engines' => [
                        '2.2 CRDi 120ch'
                    ]
                ],
                [
                    'name' => 'Scorpio',
                    'versions' => [
                        'DC',
                        'SC',
                        'SC Luxe',
                        'SC Refresh'
                    ],
                    'engines' => [
                        '2.5 TD 4X2 100ch',
                        '2.5 TD 4X4 100ch'
                    ]
                ],
                [
                    'name' => 'XUV500',
                    'versions' => [
                        'W6',
                        'W8',
                        'W8 AWD',
                        'XUV500'
                    ],
                    'engines' => [
                        '2.2 CRDi 140ch',
                        '2.2 CRDi 140ch BVA'
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
