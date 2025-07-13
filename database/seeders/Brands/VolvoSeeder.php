<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class VolvoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Volvo',
            'models' => [
                [
                    'name' => '242',
                    'versions' => [
                        '242'
                    ],
                    'engines' => [
                        '2.0 ess 82ch',
                        '2.0 ess 90ch',
                        '2.1 ess 123ch',
                        '2.1 ess 97ch',
                        '2.1 GT 123ch',
                        '2.3 GT 140ch'
                    ]
                ],
                [
                    'name' => '244',
                    'versions' => [
                        '244'
                    ],
                    'engines' => [
                        '2.0 ess 82ch',
                        '2.0 ess 90ch',
                        '2.0 ess 97ch',
                        '2.1 ess 123ch',
                        '2.1 ess 97ch',
                        '2.1 ess Turbo 155ch',
                        '2.3 ess 136ch',
                        '2.3 ess 140ch',
                        '2.4 D 82ch'
                    ]
                ],
                [
                    'name' => '262',
                    'versions' => [
                        '262'
                    ],
                    'engines' => [
                        '2.7 ess 140ch',
                        '2.7 ess 148ch'
                    ]
                ],
                [
                    'name' => '264',
                    'versions' => [
                        '264'
                    ],
                    'engines' => [
                        '2.7 ess 125ch',
                        '2.7 ess 140ch',
                        '2.7 ess 148ch'
                    ]
                ],
                [
                    'name' => '440',
                    'versions' => [
                        '440'
                    ],
                    'engines' => [
                        '1.6 ess 83ch',
                        '1.7 ess 109ch',
                        '1.7 ess 90ch',
                        '1.7 ess Turbo 120ch',
                        '1.8 ess 90ch',
                        '1.9 TD 90ch',
                        '2.0 ess 110ch'
                    ]
                ],
                [
                    'name' => '480',
                    'versions' => [
                        '480'
                    ],
                    'engines' => [
                        '1.7 ess 109ch',
                        '1.7 ess Turbo 120ch',
                        '2.0 ess 109ch'
                    ]
                ],
                [
                    'name' => '740',
                    'versions' => [
                        '740'
                    ],
                    'engines' => [
                        '2.0 ess 118ch',
                        '2.0 ess Turbo 150ch',
                        '2.0 ess Turbo 158ch',
                        '2.0 ess Turbo 165ch',
                        '2.0 ess Turbo 16V 200ch',
                        '2.3 ess 113ch',
                        '2.3 ess 130ch',
                        '2.3 ess 131ch',
                        '2.3 ess 155ch',
                        '2.4 D 79ch',
                        '2.4 D 82ch',
                        '2.4 TD 109ch',
                        '2.4 TD 116ch'
                    ]
                ],
                [
                    'name' => '760',
                    'versions' => [
                        '760'
                    ],
                    'engines' => [
                        '2.3 ess Turbo 165ch',
                        '2.3 ess Turbo 173ch',
                        '2.3 ess Turbo 182ch',
                        '2.4 TD 109ch',
                        '2.4 TD 116ch',
                        '2.9 ess V6 143ch',
                        '2.9 ess V6 156ch',
                        '2.9 ess V6 167ch'
                    ]
                ],
                [
                    'name' => '780',
                    'versions' => [
                        '780'
                    ],
                    'engines' => [
                        '2.0 ess Turbo 16V 200ch',
                        '2.4 TD 122ch',
                        '2.4 TD 129ch',
                        '2.9 ess V6 143ch',
                        '2.9 ess V6 167ch'
                    ]
                ],
                [
                    'name' => '850',
                    'versions' => [
                        '850'
                    ],
                    'engines' => [
                        '2.0 ess 126ch',
                        '2.0 ess 143ch',
                        '2.3 ess 225ch',
                        '2.3 ess 240ch',
                        '2.4 ess 170ch',
                        '2.5 TDI 140ch'
                    ]
                ],
                [
                    'name' => '940',
                    'versions' => [
                        '940'
                    ],
                    'engines' => [
                        '2.4 D 122ch'
                    ]
                ],
                [
                    'name' => '960',
                    'versions' => [
                        '960'
                    ],
                    'engines' => [
                        '2.5 ess 170ch',
                        '2.5 ess 170ch BVA',
                        '2.9 ess 204ch BVA'
                    ]
                ],
                [
                    'name' => 'C30',
                    'versions' => [
                        'C30'
                    ],
                    'engines' => [
                        '1.6 D 110ch',
                        '1.6 D 115ch',
                        '1.6 ess 100ch',
                        '1.8  125ch',
                        '1.8  125ch Flexifuel',
                        '2.0 D 136ch',
                        '2.0 D 150ch',
                        '2.0 D 177ch',
                        '2.0 ess 145ch',
                        '2.4 D 180ch',
                        '2.4 D 180ch GearTronic',
                        '2.4 ess 170ch',
                        '2.4 ess 170ch GearTronic',
                        '2.5 ess 220ch',
                        '2.5 ess 230ch'
                    ]
                ],
                [
                    'name' => 'C70',
                    'versions' => [
                        'C70'
                    ],
                    'engines' => [
                        '2.0 D 136ch',
                        '2.3 ess 240ch',
                        '2.4 D 150ch',
                        '2.4 D 177ch',
                        '2.4 D 180ch',
                        '2.4 ess 140ch',
                        '2.4 ess 163ch',
                        '2.4 ess 170ch',
                        '2.4 ess 193ch',
                        '2.4 ess 193ch BVA',
                        '2.5 ess 230ch'
                    ]
                ],
                [
                    'name' => 'P1800',
                    'versions' => [
                        'P1800'
                    ],
                    'engines' => [
                        '1.8 ess 103ch',
                        '1.8 ess 90ch',
                        '1.8 ess 96ch',
                        '2.0 ess 105ch',
                        '2.0 ess 124ch'
                    ]
                ],
                [
                    'name' => 'S40',
                    'versions' => [
                        'S40'
                    ],
                    'engines' => [
                        '1.6 D 110ch',
                        '1.6 D 115ch',
                        '1.6 ess 100ch',
                        '1.6 ess 16V 105ch',
                        '1.6 ess 16V 109ch',
                        '1.8  125ch',
                        '1.8  125ch Flexifuel',
                        '1.8 ess 125ch',
                        '1.8 ess 16V 115ch',
                        '1.8 ess 16V 122ch',
                        '1.9 D 102ch',
                        '1.9 D 115ch',
                        '1.9 D 95ch',
                        '1.9 ess 200ch',
                        '1.9 TD 90ch',
                        '2.0 D 136ch',
                        '2.0 D 150ch',
                        '2.0 D 177ch',
                        '2.0 ess 145ch',
                        '2.0 ess 160ch',
                        '2.0 ess 165ch',
                        '2.0 ess 16V 136ch',
                        '2.0 ess 200ch',
                        '2.4 D 180ch',
                        '2.4 ess 140ch',
                        '2.5 ess 170ch',
                        '2.5 ess 220ch',
                        '2.5 ess 230ch'
                    ]
                ],
                [
                    'name' => 'S60',
                    'versions' => [
                        'S60'
                    ],
                    'engines' => [
                        '1.6 D 115ch',
                        '1.6 ess 150ch',
                        '1.6 ess 180ch',
                        '2.0 D 163ch',
                        '2.0 D 163ch GearTronic',
                        '2.0 ess 203ch',
                        '2.0 ess 240ch',
                        '2.0 ess AWD 304ch',
                        '2.0 ess AWD 305ch GearTronic',
                        '2.3 ess 250ch',
                        '2.3 ess 250ch BVA',
                        '2.4 D 126ch',
                        '2.4 D 163ch',
                        '2.4 D 180ch',
                        '2.4 D 205ch',
                        '2.4 D 215ch',
                        '2.4 D AWD 205ch GearTronic',
                        '2.4 ess 140ch',
                        '2.4 ess 140ch BVA',
                        '2.4 ess 170ch',
                        '2.4 ess 170ch BVA',
                        '2.4 ess 200ch',
                        '2.4 ess 200ch BVA',
                        '2.5 ess 210ch',
                        '2.5 ess 260ch',
                        '2.5 ess 300ch'
                    ]
                ],
                [
                    'name' => 'S80',
                    'versions' => [
                        'S80'
                    ],
                    'engines' => [
                        '1.6 D 110ch',
                        '1.6 D 115ch',
                        '1.6 ess 180ch',
                        '2.0  145ch',
                        '2.0 D 136ch',
                        '2.0 D 163ch',
                        '2.0 ess 145ch',
                        '2.0 ess 240ch',
                        '2.4 D 163ch',
                        '2.4 D 175ch',
                        '2.4 D 185ch',
                        '2.4 D 204ch',
                        '2.4 D 205ch',
                        '2.4 D 215ch',
                        '2.4 D AWD 185ch',
                        '2.4 ess 140ch',
                        '2.4 ess 140ch BVA',
                        '2.4 ess 170ch',
                        '2.4 ess 170ch BVA',
                        '2.5 D 140ch',
                        '2.5 ess 200ch',
                        '2.5 ess 231ch',
                        '2.8 ess 272ch',
                        '2.9 ess 204ch',
                        '2.9 ess 204ch BVA',
                        '3.0 ess AWD 285ch',
                        '3.0 ess AWD 304ch',
                        '3.2 ess 238ch',
                        '3.2 ess AWD 243ch',
                        '3.2 ess V6 238ch',
                        '4.4 ess V8 AWD 315ch'
                    ]
                ],
                [
                    'name' => 'V40',
                    'versions' => [
                        'V40'
                    ],
                    'engines' => [
                        '1.6 D 115ch',
                        '1.6 D 150ch',
                        '1.6 ess 150ch',
                        '1.6 ess 16V 109ch',
                        '1.6 ess 180ch',
                        '1.8 ess 125ch',
                        '1.8 ess 16V 115ch',
                        '1.9 D 102ch',
                        '1.9 D 115ch',
                        '1.9 ess 200ch',
                        '2.0 D 205ch',
                        '2.0 ess 165ch',
                        '2.0 ess 16V 136ch',
                        '2.0 ess 250ch'
                    ]
                ],
                [
                    'name' => 'V50',
                    'versions' => [
                        'V50'
                    ],
                    'engines' => [
                        '1.6 D 110ch',
                        '1.6 D 115ch',
                        '1.6 ess 100ch',
                        '1.8  125ch',
                        '1.8  125ch Flexifuel',
                        '2.0 D 136ch',
                        '2.0 D 150ch',
                        '2.0 D 177ch',
                        '2.0 ess 145ch',
                        '2.4 D 180ch',
                        '2.4 ess 170ch',
                        '2.5 ess 230ch'
                    ]
                ],
                [
                    'name' => 'V60',
                    'versions' => [
                        'V60'
                    ],
                    'engines' => [
                        '1.6 D 115ch',
                        '1.6 ess 150ch',
                        '1.6 ess 180ch',
                        '2.0 D 163ch',
                        '2.0 ess 240ch',
                        '2.4 D 205ch',
                        '3.0 ess AWD 304ch',
                        '3.0 ess AWD 304ch GearTronic'
                    ]
                ],
                [
                    'name' => 'V70',
                    'versions' => [
                        'V70'
                    ],
                    'engines' => [
                        '1.6 D 110ch',
                        '1.6 ess 180ch',
                        '2.0  145ch',
                        '2.0 D 136ch',
                        '2.0 D 163ch',
                        '2.0 ess 145ch',
                        '2.3 ess 250ch',
                        '2.3 ess 250ch BVA',
                        '2.4 D 126ch',
                        '2.4 D 130ch',
                        '2.4 D 163ch',
                        '2.4 D 175ch',
                        '2.4 D 185ch',
                        '2.4 ess 140ch',
                        '2.4 ess 140ch BVA',
                        '2.4 ess 170ch',
                        '2.4 ess 170ch BVA',
                        '2.4 ess 200ch',
                        '2.4 ess 200ch BVA',
                        '2.4 ess AWD 200ch',
                        '2.4 ess AWD 200ch BVA',
                        '2.5  200ch',
                        '2.5 ess 200ch',
                        '2.5 ess 260ch',
                        '2.5 ess 300ch',
                        '3.0 ess AWD 285ch',
                        '3.2 ess AWD 243ch'
                    ]
                ],
                [
                    'name' => 'V90',
                    'versions' => [
                        'V90'
                    ],
                    'engines' => [
                        '2.9 ess 204ch BVA'
                    ]
                ],
                [
                    'name' => 'XC60',
                    'versions' => [
                        'XC60'
                    ],
                    'engines' => [
                        '2.0 D 163ch',
                        '2.0 D AWD 163ch',
                        '2.0 ess 203ch',
                        '2.0 ess 240ch',
                        '2.4 D 163ch',
                        '2.4 D 175ch',
                        '2.4 D 185ch',
                        '2.4 D AWD 204ch',
                        '3.0 ess 285ch',
                        '3.0 ess AWD 304ch',
                        '3.0 ess AWD 304ch GearTronic',
                        '3.2 ess 238ch',
                        '3.2 ess AWD 243ch'
                    ]
                ],
                [
                    'name' => 'XC70',
                    'versions' => [
                        'XC70'
                    ],
                    'engines' => [
                        '2.0 D 163ch',
                        '2.0 D AWD 163ch',
                        '2.4 D 175ch',
                        '2.4 D 185ch',
                        '2.4 D 205ch',
                        '2.4 D AWD 204ch',
                        '2.4 D AWD 215ch',
                        '2.4 ess 200ch',
                        '2.5 ess 210ch',
                        '3.0 ess 285ch',
                        '3.0 ess AWD 304ch'
                    ]
                ],
                [
                    'name' => 'XC90',
                    'versions' => [
                        'XC90'
                    ],
                    'engines' => [
                        '2.4 D 163ch',
                        '2.4 D 163ch GearTronic',
                        '2.4 D 185ch',
                        '2.4 D 185ch GearTronic',
                        '2.4 D AWD 200ch',
                        '2.5 ess 210ch',
                        '3.2 ess 238ch',
                        '3.2 ess AWD 243ch',
                        '3.2 ess V6 238ch',
                        '4.4 ess V8 315ch'
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
