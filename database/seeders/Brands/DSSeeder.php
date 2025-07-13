<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'DS',
            'models' => [
                [
                    'name' => 'DS',
                    'versions' => [
                        'DS'
                    ],
                    'engines' => [
                        '1.9 ess 66ch',
                        '1.9 ess 75ch',
                        '2.0 ess 84ch',
                        '2.0 ess 91ch',
                        '2.0 ess 99ch',
                        '2.2 ess 100ch',
                        '2.2 ess 106ch',
                        '2.2 ess 125ch',
                        '2.4 ess 115ch',
                        '2.4 ess 130ch',
                        '7.0 ess 385ch'
                    ]
                ],
                [
                    'name' => 'DS3',
                    'versions' => [
                        'Bastille',
                        'Cabrio',
                        'CHIC',
                        'DS3',
                        'Edition 1955',
                        'Esprit Voyage',
                        'Opera',
                        'Performance Line',
                        'Performance Line plus',
                        'Rivoli',
                        'SO CHIC',
                        'SPORT CHIC'
                    ],
                    'engines' => [
                        '1.2 PureTech 100ch',
                        '1.2 PureTech 130ch',
                        '1.4 VTI 95ch',
                        '1.6 D 90ch',
                        '1.6 e HDI 92ch',
                        '1.6 ess 202ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 90ch',
                        '1.6 THP 150ch',
                        '1.6 THP 155ch',
                        '1.6 VTI 120ch',
                        '1.6 VTI 120ch BVA'
                    ]
                ],
                [
                    'name' => 'DS4',
                    'versions' => [
                        'DS4',
                        'Edition 1955',
                        'SO CHIC',
                        'So Chic Crossback',
                        'SPORT CHIC'
                    ],
                    'engines' => [
                        '1.6 e HDI 112ch',
                        '1.6 e HDI 115ch',
                        '1.6 ess 256ch',
                        '1.6 HDI 112ch',
                        '1.6 THP 156ch BVA',
                        '1.6 THP 160ch BVA',
                        '1.6 THP 202ch',
                        '1.6 VTI 120ch',
                        '2.0 HDI 163ch',
                        '2.0 HDI 163ch BVA',
                        '2.0 HDI 163ch BVM'
                    ]
                ],
                [
                    'name' => 'DS5',
                    'versions' => [
                        'DS5',
                        'Edition 1955',
                        'SPORT CHIC'
                    ],
                    'engines' => [
                        '1.6 e HDI 112ch',
                        '1.6 THP 156ch BVA',
                        '1.6 THP 202ch',
                        '2.0  163ch Hybrid',
                        '2.0 HDI 163ch BVA',
                        '2.2 HDI 200ch'
                    ]
                ],
                [
                    'name' => 'DS9',
                    'versions' => [
                        'DS9',
                        'Esprit Voyage',
                        'Opera',
                        'Performance Line +',
                        'Rivoli +'
                    ],
                    'engines' => [
                        '1.6 THP 16v',
                        '1.6 THP 225ch Hybrid'
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
