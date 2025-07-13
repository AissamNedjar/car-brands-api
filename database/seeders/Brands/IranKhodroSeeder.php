<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class IranKhodroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Iran Khodro',
            'models' => [
                [
                    'name' => 'Dena',
                    'versions' => [
                        'Dena'
                    ],
                    'engines' => [
                        '1.6 EF7NA 115ch'
                    ]
                ],
                [
                    'name' => 'PARS',
                    'versions' => [
                        'PARS'
                    ],
                    'engines' => [
                        '1.8 ess 99ch'
                    ]
                ],
                [
                    'name' => 'Samand',
                    'versions' => [
                        'EL',
                        'LX',
                        'Samand',
                        'STD'
                    ],
                    'engines' => [
                        '1.6 ess 90ch',
                        '1.8 ess 99ch'
                    ]
                ],
                [
                    'name' => 'Soren',
                    'versions' => [
                        'Soren'
                    ],
                    'engines' => [
                        '1.8 ess 99ch'
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
