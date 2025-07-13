<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class LexusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Lexus',
            'models' => [
                [
                    'name' => 'CT',
                    'versions' => [
                        'CT'
                    ],
                    'engines' => [
                        '200h - 1.8  99ch'
                    ]
                ],
                [
                    'name' => 'GS',
                    'versions' => [
                        'GS'
                    ],
                    'engines' => [
                        '300 - 3.0 ess 208ch',
                        '300 - 3.0 ess 221ch',
                        '300 - 3.0 ess 249ch',
                        '430 - 4.3 ess 283ch',
                        '450h - 3.5  290ch',
                        '450h - 3.5  296ch',
                        '460 - 4.6 ess 346ch'
                    ]
                ],
                [
                    'name' => 'IS',
                    'versions' => [
                        'IS'
                    ],
                    'engines' => [
                        '200 - 2.0 ess 155ch',
                        '200 Auto - 2.0 ess 155ch BVA',
                        '220d - 2.2 D 177ch',
                        '250 - 2.5 ess 208ch',
                        '250C - 2.5 ess 208ch',
                        'F - 5.0 ess 423ch'
                    ]
                ],
                [
                    'name' => 'LFA',
                    'versions' => [
                        'LFA'
                    ],
                    'engines' => [
                        'V10 - 4.8 ess V10 552ch',
                        'V10 - 4.8 ess V10 560ch'
                    ]
                ],
                [
                    'name' => 'LS',
                    'versions' => [
                        'LS'
                    ],
                    'engines' => [
                        '430 - 4.3 ess 281ch',
                        '460 - 4.6 ess 380ch',
                        '600h - 5.0  394ch'
                    ]
                ],
                [
                    'name' => 'RX',
                    'versions' => [
                        'RX'
                    ],
                    'engines' => [
                        '300 - 3.0 ess 201ch',
                        '300 - 3.0 ess 204ch',
                        '350 - 3.5 ess 276ch',
                        '350 - 3.5 ess 277ch',
                        '400h - 3.3  211ch',
                        '450h - 3.5  249ch'
                    ]
                ],
                [
                    'name' => 'SC',
                    'versions' => [
                        'SC'
                    ],
                    'engines' => [
                        '430 - 4.3 ess 286ch'
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
