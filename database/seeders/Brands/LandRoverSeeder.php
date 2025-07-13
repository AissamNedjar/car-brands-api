<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class LandRoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Land Rover',
            'models' => [
                [
                    'name' => '109 Série III',
                    'versions' => [
                        '109 Série III'
                    ],
                    'engines' => [
                        '2.25 - 2.3 ess 71ch',
                        '2.6 ess 86ch',
                        '3.5 ess V8 92ch'
                    ]
                ],
                [
                    'name' => '110',
                    'versions' => [
                        '110'
                    ],
                    'engines' => [
                        '2.5 D 68ch',
                        '2.5 TD 85ch',
                        '3.5 ess V8 134ch'
                    ]
                ],
                [
                    'name' => '90',
                    'versions' => [
                        '90'
                    ],
                    'engines' => [
                        '2.5 D 67ch',
                        '2.5 TD 85ch',
                        '3.5 ess V8 134ch'
                    ]
                ],
                [
                    'name' => 'Defender',
                    'versions' => [
                        '110 SW',
                        '90 SW',
                        'Defender'
                    ],
                    'engines' => [
                        '110 SW - 2.4 D 122ch',
                        '130 SW - 2.4 D 122ch',
                        '130 SW Pick Up - 2.4 D 122ch',
                        '200 Tdi - 2.5 TDI 107ch',
                        '300 Tdi - 2.5 TDI 113ch',
                        '90 SW - 2.4 D 122ch',
                        'TD 110 - 2.2 D 122ch',
                        'Td5 - 2.5 D 122ch',
                        'TD 90 - 2.2 D 122ch'
                    ]
                ],
                [
                    'name' => 'Discovery',
                    'versions' => [
                        'Discovery'
                    ],
                    'engines' => [
                        '2.5 TDI 113ch',
                        '2.5 TDI 122ch BVA',
                        '2.7 TD V6 190ch',
                        '3.0 D V6 245ch',
                        '3.5 ess V8 145ch',
                        '4.0 ess V8 185ch',
                        '4.4 ess V8 299ch',
                        '5.0 ess V8 375ch',
                        'SDV6 -  D V6 256ch',
                        'Td5 - 2.5 D 138ch',
                        'Td5 Auto - 2.5 D 138ch BVA',
                        'TD V6 211ch'
                    ]
                ],
                [
                    'name' => 'Discovery III',
                    'versions' => [
                        'Discovery III'
                    ],
                    'engines' => [
                        '2.7 TD V6 190ch',
                        '2.7 TD V6 190ch BVA',
                        '4.4 ess V8 295ch'
                    ]
                ],
                [
                    'name' => 'Discovery IV',
                    'versions' => [
                        'Discovery IV'
                    ],
                    'engines' => [
                        '3.0 D V6 245ch',
                        '3.0 TD V6 211ch',
                        '5.0 ess V8 375ch'
                    ]
                ],
                [
                    'name' => 'Freelander',
                    'versions' => [
                        'Freelander',
                        'Premium '
                    ],
                    'engines' => [
                        '1.8 ess 120ch',
                        '2.0 D 97ch',
                        '2.2 SD4 - 2.2 D 190ch',
                        '2.2 TD4 - 2.2 TD 160ch',
                        '2.5 ess V6 177ch',
                        '3.2 ess 232ch',
                        '3.2 ess V6 232ch',
                        'ED4 - 2.2 D 150ch',
                        'SD4 - 2.2 D 190ch',
                        'TD4 - 2.0 D 112ch',
                        'TD4 - 2.2 D 150ch',
                        'TD4 - 2.2 D 160ch',
                        'TD4 Auto - 2.0 D 112ch BVA'
                    ]
                ],
                [
                    'name' => 'Freelander 2',
                    'versions' => [
                        'Freelander 2',
                        'Premium '
                    ],
                    'engines' => [
                        '2.2 SD4 - 2.2 D 190ch BVA',
                        'TD4 - 2.2 D 150ch'
                    ]
                ],
                [
                    'name' => 'Land Rover ',
                    'versions' => [
                        'Premium '
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Range Rover',
                    'versions' => [
                        'Range Rover'
                    ],
                    'engines' => [
                        '2.4 TD 106ch',
                        '2.5 TD 121ch',
                        '2.5 TDI 113ch',
                        '3.5 ess V8 128ch',
                        '3.5 ess V8 132ch',
                        '3.6 TD V8 272ch',
                        '3.6 TD V8 313ch',
                        '3.9 - 4.0 ess 182ch',
                        '4.3 ess 200ch',
                        '4.4 ess V8 306ch',
                        'Td6 - 3.0 D 177ch',
                        'V8 Efi - 3.5 ess V8 163ch',
                        'V8 Efi - 3.5 ess V8 168ch',
                        'V8 SuperCharged - 5.7 ess V8 395ch',
                        'V8 SuperCharged - 6.0 ess V8 510ch'
                    ]
                ],
                [
                    'name' => 'Range Rover Evoque',
                    'versions' => [
                        'Dynamique 5 Portes ',
                        'Dynamique Coupé',
                        'Range Rover Evoque'
                    ],
                    'engines' => [
                        '2.2 ED4 - 2.2 D 150ch',
                        '2.2 SD4 - 2.2 D 190ch BVA',
                        '2.2 SI4 - 2.0 ess 241ch',
                        '2.2 TD4 - 2.2 TD 150ch'
                    ]
                ],
                [
                    'name' => 'Range Rover L322',
                    'versions' => [
                        'Range Rover L322'
                    ],
                    'engines' => [
                        '4.4 ess V8 282ch',
                        'Td6 - 2.9 D 177ch'
                    ]
                ],
                [
                    'name' => 'Range Rover P38A',
                    'versions' => [
                        'Range Rover P38A'
                    ],
                    'engines' => [
                        '2.5 DT 136ch',
                        '2.5 DT 136ch BVA',
                        '4.0 ess 190ch',
                        '4.0 ess 190ch BVA',
                        '4.6 ess 225ch BVA',
                        '4.6 HSE 225ch BVA'
                    ]
                ],
                [
                    'name' => 'Range Rover Sport',
                    'versions' => [
                        'Range Rover Sport'
                    ],
                    'engines' => [
                        '2.7 TD V6 190ch',
                        '3.0 TD V6 245ch',
                        '3.6 TD V8 271ch',
                        '4.4 ess V8 299ch',
                        'Supercharged - 4.2 ess 390ch',
                        'Supercharged - 5.0 ess 510ch'
                    ]
                ],
                [
                    'name' => 'Range Sport',
                    'versions' => [
                        'Range Sport'
                    ],
                    'engines' => [
                        '2.7 TD V6 190ch',
                        '3.0 TD V6 245ch',
                        '3.6 TD V8 272ch',
                        '4.4 ess V8 299ch',
                        'TD V6 211ch',
                        'TD V6 256ch',
                        'V8 SuperCharged - 5.7 ess V8 390ch',
                        'V8 SuperCharged - 6.0 ess V8 510ch'
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
