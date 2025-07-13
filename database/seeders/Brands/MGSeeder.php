<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class MGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'MG',
            'models' => [
                [
                    'name' => '3',
                    'versions' => [
                        '3',
                        'Confort +',
                        'Deluxe',
                        'Facelift',
                        'G.Deluxe'
                    ],
                    'engines' => [
                        '1.3 ess 16V 88ch',
                        '1.3 ess 16V 92ch',
                        '1.5 VTI 106ch',
                        '1.5 VTI 106ch BVA',
                        '1.5 VTI 110ch',
                        '1.5 VTI 110ch BVA'
                    ]
                ],
                [
                    'name' => '350',
                    'versions' => [
                        '350',
                        'Confort +',
                        'Deluxe',
                        'G.Deluxe'
                    ],
                    'engines' => [
                        '1.5 ess 16V 105ch',
                        '1.5 ess 16V 105ch BVA'
                    ]
                ],
                [
                    'name' => '5',
                    'versions' => [
                        '5',
                        'Confort +',
                        'Deluxe'
                    ],
                    'engines' => [
                        '1.5 VTI 110ch',
                        '1.5 VTI 110ch BVA'
                    ]
                ],
                [
                    'name' => '550',
                    'versions' => [
                        '550',
                        'Confort',
                        'Deluxe',
                        'G.Deluxe'
                    ],
                    'engines' => [
                        '1.8 ess 160ch',
                        '1.8 ess 160ch BVA',
                        '1.8 ess 16V 133ch'
                    ]
                ],
                [
                    'name' => '6',
                    'versions' => [
                        '6',
                        'Confort',
                        'Deluxe',
                        'G.Deluxe'
                    ],
                    'engines' => [
                        '1.8 ess 160ch',
                        '1.8 ess 160ch BVA',
                        '1.8 ess 16V 133ch'
                    ]
                ],
                [
                    'name' => '750',
                    'versions' => [
                        '750',
                        'D',
                        'E'
                    ],
                    'engines' => [
                        '1.8 ess 160ch BVA',
                        '2.5 ess V6 183ch BVA'
                    ]
                ],
                [
                    'name' => 'Zs Ev',
                    'versions' => [
                        'Comfort',
                        'Luxury'
                    ],
                    'engines' => [
                        '1.0 T-GDi 111ch',
                        '1.5 VTi-Tech 106ch '
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
