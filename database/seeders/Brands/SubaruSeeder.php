<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SubaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Subaru',
            'models' => [
                [
                    'name' => 'BRZ',
                    'versions' => [
                        'BRZ'
                    ],
                    'engines' => [
                        '2.0 ess 200ch'
                    ]
                ],
                [
                    'name' => 'Forester',
                    'versions' => [
                        'Forester'
                    ],
                    'engines' => [
                        '2.0 D 147ch',
                        '2.0 D 150ch',
                        '2.0 ess 125ch',
                        '2.0 ess 125ch BVA',
                        '2.0 ess 150ch',
                        '2.0 ess 150ch BVA',
                        '2.0 ess 158ch',
                        '2.0 ess 177ch',
                        '2.0 ess 177ch BVA',
                        '2.0 ess Turbo 170ch',
                        '2.0 GPL 125ch',
                        '2.5 ess 230ch',
                        '2.5 ess 230ch BVA'
                    ]
                ],
                [
                    'name' => 'Impreza',
                    'versions' => [
                        'Impreza'
                    ],
                    'engines' => [
                        '1.5 ess 105ch',
                        '1.5 ess 106ch',
                        '1.5 ess 107ch',
                        '1.6 ess 90ch',
                        '1.6 TS 95ch',
                        '1.8 ess 4WD 103ch',
                        '2.0 D 150ch',
                        '2.0 ess 115ch',
                        '2.0 ess 125ch',
                        '2.0 ess 150ch',
                        '2.0 ess 160ch',
                        '2.0 GT 211ch',
                        '2.0 GT 217ch',
                        '2.0 WRX 218ch',
                        '2.0 WRX 225ch',
                        '2.0 WRX STI 265ch',
                        '2.5 WRX 230ch',
                        '2.5 WRX STI 280ch',
                        '2.5 WRX STI 300ch'
                    ]
                ],
                [
                    'name' => 'Justy',
                    'versions' => [
                        'Justy'
                    ],
                    'engines' => [
                        '1.0 ess 69ch',
                        '1.3 ess 68ch',
                        '1.3 ess 85ch',
                        '1.5 ess 99ch'
                    ]
                ],
                [
                    'name' => 'Legacy',
                    'versions' => [
                        'Legacy'
                    ],
                    'engines' => [
                        '2.0 D 150ch',
                        '2.0 ess 115ch',
                        '2.0 ess 150ch',
                        '2.0 ess 165ch',
                        '2.0 ess Turbo 4WD 200ch',
                        '2.2 ess 136ch',
                        '2.5 ess 156ch',
                        '3.0 ess 245ch'
                    ]
                ],
                [
                    'name' => 'Outback',
                    'versions' => [
                        'Outback'
                    ],
                    'engines' => [
                        '2.0 D 150ch',
                        '2.0 D 167ch',
                        '2.5 ess 150ch',
                        '2.5 ess 156ch',
                        '2.5 ess 175ch',
                        '3.0 ess 210ch',
                        '3.0 ess 245ch',
                        '3.6 ess 260ch'
                    ]
                ],
                [
                    'name' => 'Trezia',
                    'versions' => [
                        'Trezia'
                    ],
                    'engines' => [
                        '1.3 ess 99ch',
                        '1.4 D 90ch'
                    ]
                ],
                [
                    'name' => 'Tribeca',
                    'versions' => [
                        'Tribeca'
                    ],
                    'engines' => [
                        '3.0 ess 245ch',
                        '3.6 ess 258ch'
                    ]
                ],
                [
                    'name' => 'XV',
                    'versions' => [
                        'XV'
                    ],
                    'engines' => [
                        '1.6 ess 114ch',
                        '2.0 D 4X4 150ch',
                        '2.0 ess 150ch'
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
