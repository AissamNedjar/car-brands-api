<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class JaguarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Jaguar',
            'models' => [
                [
                    'name' => 'E Type',
                    'versions' => [
                        'E Type'
                    ],
                    'engines' => [
                        '3.8 ess 265ch',
                        '4.2 ess 265ch',
                        '5.4 ess V12 272ch'
                    ]
                ],
                [
                    'name' => 'Serie I',
                    'versions' => [
                        'Serie I'
                    ],
                    'engines' => [
                        '2.8 ess 149ch',
                        '4.2 ess 186ch',
                        '5.4 ess 265ch'
                    ]
                ],
                [
                    'name' => 'Serie II',
                    'versions' => [
                        'Serie II'
                    ],
                    'engines' => [
                        '2.8 ess 149ch',
                        '3.5 ess 162ch',
                        '4.2 ess 170ch',
                        '5.4 ess 250ch',
                        '5.4 ess 287ch'
                    ]
                ],
                [
                    'name' => 'Serie III',
                    'versions' => [
                        'Serie III'
                    ],
                    'engines' => [
                        '3.5 ess 163ch',
                        '4.2 ess 205ch',
                        '5.4 ess 264ch',
                        '5.4 ess 289ch',
                        '5.4 ess 295ch'
                    ]
                ],
                [
                    'name' => 'S Type',
                    'versions' => [
                        'S Type'
                    ],
                    'engines' => [
                        '2.5 ess 200ch',
                        '2.5 ess V6 204ch',
                        '2.7 BiTurbo Diesel 207ch',
                        '2.7 D 207ch',
                        '3.0 ess 238ch',
                        '3.0 ess 243ch',
                        '3.0 ess V6 238ch',
                        '3.0 ess V6 243ch',
                        '4.0 ess 285ch',
                        '4.2 ess 395ch',
                        '4.2 ess 406ch',
                        '4.2 ess V8 289ch',
                        '4.2 ess V8 304ch'
                    ]
                ],
                [
                    'name' => 'X300',
                    'versions' => [
                        'X300'
                    ],
                    'engines' => [
                        '3.2 ess 219ch',
                        '3.2 ess 219ch BVA',
                        '4.0 ess 249ch',
                        '4.0 ess 249ch BVA'
                    ]
                ],
                [
                    'name' => 'X308',
                    'versions' => [
                        'X308'
                    ],
                    'engines' => [
                        '4.0 ess 294ch'
                    ]
                ],
                [
                    'name' => 'XF',
                    'versions' => [
                        'XF'
                    ],
                    'engines' => [
                        '2.2 D 190ch',
                        '2.7 BiTurbo Diesel V6 207ch',
                        '2.7 D 207ch',
                        '3.0 D 240ch',
                        '3.0 D 275ch',
                        '3.0 ess V6 238ch',
                        '4.0 ess V8 298ch',
                        '4.0 ess V8 416ch',
                        '5.0 ess 510ch',
                        '5.0 ess V8 385ch'
                    ]
                ],
                [
                    'name' => 'XF Sportbrake',
                    'versions' => [
                        'XF Sportbrake'
                    ],
                    'engines' => [
                        '2.2 D 190ch',
                        '3.0 D 240ch',
                        '3.0 D 275ch',
                        '5.0 ess V8 385ch'
                    ]
                ],
                [
                    'name' => 'XJ',
                    'versions' => [
                        'XJ'
                    ],
                    'engines' => [
                        '2.7 BiTurbo Diesel V6 207ch',
                        '3.0 D 275ch',
                        '3.0 ess V6 223ch',
                        '3.5 ess V8 258ch',
                        '3.6 ess 225ch',
                        '4.0 ess 223ch',
                        '4.0 ess 223ch BVA',
                        '4.2 ess V8 298ch',
                        '5.0 ess 510ch',
                        '5.0 ess V8 385ch',
                        '5.4 ess V12 273ch',
                        '5.4 ess V12 285ch',
                        '5.4 ess V12 295ch',
                        '6.0 ess 308ch',
                        '6.0 ess 333ch',
                        '6.0 ess V12 308ch'
                    ]
                ],
                [
                    'name' => 'XJ 220',
                    'versions' => [
                        'XJ 220'
                    ],
                    'engines' => [
                        '3.5 ess 549ch'
                    ]
                ],
                [
                    'name' => 'XJ40',
                    'versions' => [
                        'XJ40'
                    ],
                    'engines' => [
                        '2.9 ess 165ch',
                        '2.9 ess 165ch BVA',
                        '3.2 ess 200ch',
                        '3.6 ess 221ch',
                        '3.6 ess 221ch BVA',
                        '4.0 ess 223ch',
                        '4.0 ess 248ch'
                    ]
                ],
                [
                    'name' => 'XJR',
                    'versions' => [
                        'XJR'
                    ],
                    'engines' => [
                        '4.2 ess 395ch',
                        '4.2 ess 416ch'
                    ]
                ],
                [
                    'name' => 'XJR 15',
                    'versions' => [
                        'XJR 15'
                    ],
                    'engines' => [
                        '6.0 ess 450ch'
                    ]
                ],
                [
                    'name' => 'XK',
                    'versions' => [
                        'XK'
                    ],
                    'engines' => [
                        '3.5 ess V8 258ch',
                        '4.0 ess 294ch',
                        '4.2 ess V8 298ch',
                        '4.2 ess V8 300ch',
                        '5.0 ess V8 385ch'
                    ]
                ],
                [
                    'name' => 'XK Cabriolet',
                    'versions' => [
                        'XK Cabriolet'
                    ],
                    'engines' => [
                        '3.5 ess V8 258ch',
                        '4.2 ess V8 298ch',
                        '4.2 ess V8 300ch',
                        '5.0 ess V8 385ch'
                    ]
                ],
                [
                    'name' => 'XKR',
                    'versions' => [
                        'XKR'
                    ],
                    'engines' => [
                        '4.2 ess V8 416ch',
                        '5.0 Compresseur V8 510ch',
                        '5.0 ess 550ch'
                    ]
                ],
                [
                    'name' => 'XKR Cabriolet',
                    'versions' => [
                        'XKR Cabriolet'
                    ],
                    'engines' => [
                        '4.2 ess V8 416ch',
                        '5.0 Compresseur V8 510ch'
                    ]
                ],
                [
                    'name' => 'X Type',
                    'versions' => [
                        'X Type'
                    ],
                    'engines' => [
                        '2.0 D 130ch',
                        '2.0 ess V6 159ch',
                        '2.2 D 145ch BVA',
                        '2.2 D 155ch',
                        '2.5 ess 197ch',
                        '2.5 ess V6 198ch',
                        '3.0 ess 231ch',
                        '3.0 ess V6 231ch'
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
