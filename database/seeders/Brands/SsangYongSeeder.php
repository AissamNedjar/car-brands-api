<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class SsangYongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'SsangYong',
            'models' => [
                [
                    'name' => 'Actyon',
                    'versions' => [
                        'Actyon'
                    ],
                    'engines' => [
                        '2.0 XDI 4x4 141ch',
                        '2.0 XDI 4x4 141ch BVA'
                    ]
                ],
                [
                    'name' => 'Actyon Sports',
                    'versions' => [
                        'Actyon Sports'
                    ],
                    'engines' => [
                        '2.0 XDI 4x2 141ch',
                        '2.0 XDI 4X4 141ch'
                    ]
                ],
                [
                    'name' => 'Chairman',
                    'versions' => [
                        'Chairman'
                    ],
                    'engines' => [
                        '3.6 ess 4x4 250ch BVA'
                    ]
                ],
                [
                    'name' => 'Korando',
                    'versions' => [
                        'Korando',
                        'Limited',
                        'Lx',
                        'Platinum'
                    ],
                    'engines' => [
                        '2.0 DTR 4x2 176ch BVA',
                        '2.0 DTR 4x2 176ch BVM',
                        '2.0 DTR 4x4 176ch BVA',
                        '2.0 DTR 4x4 176ch BVM',
                        '2.3 D 80ch',
                        '2.3 TD 101ch',
                        '2.9 D 100ch'
                    ]
                ],
                [
                    'name' => 'Korando sport',
                    'versions' => [
                        'Korando sport'
                    ],
                    'engines' => [
                        '2.0 DTR 4X2 155ch BVA',
                        '2.0 DTR 4X2 155ch BVM',
                        '2.0 DTR 4X4 155ch BVA',
                        '2.0 DTR 4X4 155ch BVM'
                    ]
                ],
                [
                    'name' => 'Kyron',
                    'versions' => [
                        'Kyron'
                    ],
                    'engines' => [
                        '2.0 XDI 4x2 141ch',
                        '2.0 XDI 4x4 141ch',
                        '2.0 XDI 4x4 141ch BVA',
                        '2.7 XDI 165ch'
                    ]
                ],
                [
                    'name' => 'Musso',
                    'versions' => [
                        'Musso'
                    ],
                    'engines' => [
                        '2.3 D 77ch',
                        '2.3 GPL 140ch',
                        '2.9 D 95ch',
                        '2.9 TD 120ch',
                        '3.2 ess 220ch',
                        '3.2 GPL 220ch'
                    ]
                ],
                [
                    'name' => 'Rexton',
                    'versions' => [
                        'Rexton'
                    ],
                    'engines' => [
                        '2.0 DTR 155ch 4x2',
                        '2.0 DTR 155ch 4x2 BVA',
                        '2.0 DTR 155ch 4x4 BVA',
                        '2.7 XDI 164ch',
                        '2.7 XDI 164ch BVA',
                        '2.7 XDI 165ch 4x2 BVA',
                        '2.7 XDI 165ch 4x2 m/t',
                        '2.7 XDI 165ch 4x4',
                        '2.7 XDI 186ch'
                    ]
                ],
                [
                    'name' => 'Stavic Rodius',
                    'versions' => [
                        'Stavic Rodius'
                    ],
                    'engines' => [
                        '2.0 DTR 155ch 4x2',
                        '2.0 DTR 155ch 4x2 BVA',
                        '2.0 DTR 155ch 4x4 BVA',
                        '2.7 XDI 2WD 165ch',
                        '2.7 XDI 4x4 165ch'
                    ]
                ],
                [
                    'name' => 'Tivoli',
                    'versions' => [
                        'Limited',
                        'Platinum',
                        'Tivoli'
                    ],
                    'engines' => [
                        '1.6 e-XDi 115ch',
                        '1.6 e-XDi 115ch BVA',
                        '1.6 e-XGi 128ch',
                        '1.6 e-XGi 128ch BVA'
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
