<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class MiniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Mini',
            'models' => [
                [
                    'name' => 'Cabrio',
                    'versions' => [
                        'Cabrio'
                    ],
                    'engines' => [
                        'Cooper 115 - 1.6 ess 115ch',
                        'Cooper 122 - 1.6 ess 122ch',
                        'Cooper D - 1.6 D 110ch',
                        'Cooper S 170 - 1.6 ess 170ch',
                        'Cooper S 184 - 1.6 ess 184ch',
                        'Cooper SD - 2.0 D 143ch',
                        'John Cooper Works - 1.6 ess 211ch',
                        'One 90 - 1.6 ess 90ch'
                    ]
                ],
                [
                    'name' => 'Clubman',
                    'versions' => [
                        'Clubman'
                    ],
                    'engines' => [
                        '1.0 ess 38ch',
                        '1.1 ess 45ch',
                        '1275 GT - 1.3 GT 60ch',
                        '1.6 D 90ch',
                        'Cooper 120 - 1.6 ess 120ch',
                        'Cooper 122 - 1.6 ess 122ch',
                        'Cooper D 110 - 1.6 D 110ch',
                        'Cooper D 112 - 1.6 D 112ch',
                        'Cooper D BVA6 - 1.6 D 112ch BVA',
                        'Cooper S - 1.6 ess 184ch',
                        'Cooper S 175 - 1.6 ess 175ch',
                        'Cooper S 184 - 1.6 ess 184ch',
                        'Cooper SD 143 - 2.0 D 143ch',
                        'John Cooper Works 192 - 1.6 ess 192ch',
                        'John Cooper Works 211 - 1.6 ess 211ch',
                        'One 98 - 1.6 ess 98ch',
                        'One D 90 - 1.6 D 90ch'
                    ]
                ],
                [
                    'name' => 'Clubvan',
                    'versions' => [
                        'Clubvan'
                    ],
                    'engines' => [
                        'Cooper - 1.6 ess 122ch',
                        'Cooper D - 1.6 D 112ch',
                        'One - 1.6 ess 98ch'
                    ]
                ],
                [
                    'name' => 'Cooper D',
                    'versions' => [
                        '3-Portes',
                        '5-Portes',
                        'Cooper D'
                    ],
                    'engines' => [
                        '1.5 D 116ch'
                    ]
                ],
                [
                    'name' => 'Countryman',
                    'versions' => [
                        'Cooper',
                        'Cooper S',
                        'Countryman',
                        'One'
                    ],
                    'engines' => [
                        '0.9 ess 34ch',
                        'Cooper - 1.6 ess 122ch',
                        'Cooper D - 1.6 D 112ch',
                        'Cooper S - 1.6 ess 184ch',
                        'Cooper SD - 2.0 D 143ch',
                        'Cooper SD ALL4 - 2.0 D 143ch',
                        'John Cooper Works - 1.6 ess 218ch',
                        'One - 1.6 ess 98ch',
                        'One D - 1.6 D 90ch'
                    ]
                ],
                [
                    'name' => 'Coupé',
                    'versions' => [
                        'Coupé'
                    ],
                    'engines' => [
                        'Cooper - 1.6 ess 122ch',
                        'Cooper BVA - 1.6 ess 122ch BVA',
                        'Cooper S - 1.6 ess 184ch',
                        'Cooper S BVA - 1.6 ess 184ch BVA',
                        'Cooper SD - 2.0 D 143ch',
                        'Cooper SD BVA - 2.0 D 143ch BVA',
                        'John Cooper Works - 1.6 ess 211ch'
                    ]
                ],
                [
                    'name' => 'Mini',
                    'versions' => [
                        'Cooper',
                        'Cooper S',
                        'Mini',
                        'One'
                    ],
                    'engines' => [
                        '1.4 D 75ch',
                        'Cooper 115 - 1.6 ess 115ch',
                        'Cooper 120 - 1.6 ess 120ch',
                        'Cooper 122 - 1.6 ess 122ch',
                        'Cooper Cabrio - 1.6 ess 120ch',
                        'Cooper D - 1.6 D 110ch',
                        'Cooper S 170 - 1.6 ess 170ch',
                        'Cooper S 175 - 1.6 ess 175ch',
                        'Cooper S 184 - 1.6 ess 184ch',
                        'Cooper S Cabrio 170 - 1.6 ess 170ch',
                        'Cooper S Cabrio 175 - 1.6 ess 175ch',
                        'Cooper SD - 2.0 D 143ch',
                        'John Cooper Works 192 - 1.6 ess 192ch',
                        'John Cooper Works 210 - 1.6 ess 210ch',
                        'John Cooper Works 211 - 1.6 ess 211ch',
                        'One 75 - 1.6 ess 75ch',
                        'One 90 - 1.6 ess 90ch',
                        'One 95 - 1.4 ess 95ch',
                        'One 98 - 1.6 ess 98ch',
                        'One 98 Minimalist - 1.6 ess 98ch',
                        'One Cabrio - 1.4 ess 90ch',
                        'One D - 1.6 D 90ch',
                        'One MINIMALISM - 1.6 ess 75ch'
                    ]
                ],
                [
                    'name' => 'Moke',
                    'versions' => [
                        'Moke'
                    ],
                    'engines' => [
                        '0.9 ess 34ch'
                    ]
                ],
                [
                    'name' => 'Paceman',
                    'versions' => [
                        'Cooper ',
                        'Cooper S',
                        'Paceman'
                    ],
                    'engines' => [
                        '1.6 ess 122ch',
                        '1.6 ess 184ch'
                    ]
                ],
                [
                    'name' => 'R50',
                    'versions' => [
                        'R50'
                    ],
                    'engines' => [
                        'Cooper - 1.6 ess 115ch',
                        'Cooper John Cooper Works - 1.6 ess 126ch',
                        'One - 1.6 ess 90ch',
                        'One D - 1.4 D 75ch',
                        'One D - 1.4 D 90ch'
                    ]
                ],
                [
                    'name' => 'R52',
                    'versions' => [
                        'R52'
                    ],
                    'engines' => [
                        'Cooper - 1.6 ess 115ch'
                    ]
                ],
                [
                    'name' => 'R53',
                    'versions' => [
                        'R53'
                    ],
                    'engines' => [
                        'Cooper S - 1.6 ess 163ch',
                        'Cooper S - 1.6 ess 170ch',
                        'Cooper S John Cooper Works - 1.6 ess 200ch',
                        'Cooper S John Cooper Works - 1.6 ess 210ch',
                        'Cooper S John Cooper Works GP - 1.6 ess 218ch'
                    ]
                ],
                [
                    'name' => 'R55',
                    'versions' => [
                        'R55'
                    ],
                    'engines' => [
                        'Clubman John Cooper Works - 1.6 ess 211ch',
                        'Clubman One - 1.4 ess 95ch'
                    ]
                ],
                [
                    'name' => 'R56',
                    'versions' => [
                        'R56'
                    ],
                    'engines' => [
                        'Cooper - 1.6 ess 120ch',
                        'Cooper D - 1.6 D 110ch',
                        'Cooper S - 1.6 ess 175ch',
                        'Cooper S - 1.6 ess 184ch',
                        'John Cooper Works - 1.6 ess 211ch',
                        'One - 1.4 ess 95ch'
                    ]
                ],
                [
                    'name' => 'R57',
                    'versions' => [
                        'R57'
                    ],
                    'engines' => [
                        'Cooper S Cabriolet - 1.6 ess 175ch',
                        'John Cooper Works Cabriolet - 1.6 ess 211ch'
                    ]
                ],
                [
                    'name' => 'R59',
                    'versions' => [
                        'R59'
                    ],
                    'engines' => [
                        'Roadster Cooper S - 1.6 ess 184ch'
                    ]
                ],
                [
                    'name' => 'Roadster',
                    'versions' => [
                        'Roadster'
                    ],
                    'engines' => [
                        'Cooper - 1.6 ess 122ch',
                        'Cooper S - 1.6 ess 184ch',
                        'Cooper SD - 2.0 D 143ch',
                        'John Cooper Works - 1.6 ess 211ch'
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
