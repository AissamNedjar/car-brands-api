<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class RoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Rover',
            'models' => [
                [
                    'name' => '111',
                    'versions' => [
                        '111'
                    ],
                    'engines' => [
                        '1.1 ess 60ch'
                    ]
                ],
                [
                    'name' => '114',
                    'versions' => [
                        '114'
                    ],
                    'engines' => [
                        '1.4 D 50ch',
                        '1.4 ess 75ch',
                        '1.4 ess 75ch BVA',
                        '1.4 GTI 16V 103ch',
                        '1.4 GTI 16V 95ch'
                    ]
                ],
                [
                    'name' => '115',
                    'versions' => [
                        '115'
                    ],
                    'engines' => [
                        '1.5 D 58ch'
                    ]
                ],
                [
                    'name' => '200',
                    'versions' => [
                        '200'
                    ],
                    'engines' => [
                        '1.8 ess 145ch'
                    ]
                ],
                [
                    'name' => '213',
                    'versions' => [
                        '213'
                    ],
                    'engines' => [
                        '1.4 ess 73ch'
                    ]
                ],
                [
                    'name' => '214',
                    'versions' => [
                        '214'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.4 GSI 103ch',
                        '1.4 GSI 16V 95ch'
                    ]
                ],
                [
                    'name' => '216',
                    'versions' => [
                        '216'
                    ],
                    'engines' => [
                        '1.6 ess 102ch',
                        '1.6 ess 111ch',
                        '1.6 ess 122ch',
                        '1.6 ess 83ch',
                        '1.6 GSI 16V 115ch',
                        '1.6 GTI 16V 122ch',
                        '1.6 GTI 16V 130ch'
                    ]
                ],
                [
                    'name' => '218',
                    'versions' => [
                        '218'
                    ],
                    'engines' => [
                        '1.8 D 88ch',
                        '1.9 D 67ch'
                    ]
                ],
                [
                    'name' => '220',
                    'versions' => [
                        '220'
                    ],
                    'engines' => [
                        '2.0 D 86ch',
                        '2.0 ess 136ch',
                        '2.0 ess Turbo 200ch',
                        '2.0 GTI 16V 136ch',
                        '2.0 SDI 105ch'
                    ]
                ],
                [
                    'name' => '25',
                    'versions' => [
                        '25'
                    ],
                    'engines' => [
                        '1.4 ess 84ch',
                        '1.6 ess 109ch',
                        '2.0 D 100ch'
                    ]
                ],
                [
                    'name' => '414',
                    'versions' => [
                        '414'
                    ],
                    'engines' => [
                        '1.4 ess 103ch'
                    ]
                ],
                [
                    'name' => '416',
                    'versions' => [
                        '416'
                    ],
                    'engines' => [
                        '1.6 ess 111ch',
                        '1.6 ess 113ch BVA'
                    ]
                ],
                [
                    'name' => '420',
                    'versions' => [
                        '420'
                    ],
                    'engines' => [
                        '2.0 D 86ch',
                        '2.0 ess 136ch',
                        '2.0 SDI 105ch'
                    ]
                ],
                [
                    'name' => '45',
                    'versions' => [
                        '45'
                    ],
                    'engines' => [
                        '1.8 ess 117ch',
                        '2.0 ess V6 150ch'
                    ]
                ],
                [
                    'name' => '600',
                    'versions' => [
                        '600'
                    ],
                    'engines' => [
                        '2.0 ess 200ch',
                        '2.0 SDI 105ch'
                    ]
                ],
                [
                    'name' => '618',
                    'versions' => [
                        '618'
                    ],
                    'engines' => [
                        '1.9 ess 115ch'
                    ]
                ],
                [
                    'name' => '620',
                    'versions' => [
                        '620'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.0 ess 131ch',
                        '2.0 ess 131ch BVA',
                        '2.0 ess 200ch',
                        '2.0 SDI 105ch'
                    ]
                ],
                [
                    'name' => '623',
                    'versions' => [
                        '623'
                    ],
                    'engines' => [
                        '2.3 ess 158ch BVA'
                    ]
                ],
                [
                    'name' => '75',
                    'versions' => [
                        '75'
                    ],
                    'engines' => [
                        '1.8 ess 150ch',
                        '2.0 CDTI 131ch',
                        '2.0 D 116ch',
                        '2.0 ess V6 150ch',
                        '2.5 ess V6 177ch',
                        '4.6 ess V8 260ch'
                    ]
                ],
                [
                    'name' => '820',
                    'versions' => [
                        '820'
                    ],
                    'engines' => [
                        '2.0 ess 136ch',
                        '2.0 ess 140ch',
                        '2.0 ess 180ch',
                        '2.0 ess 200ch'
                    ]
                ],
                [
                    'name' => '825',
                    'versions' => [
                        '825'
                    ],
                    'engines' => [
                        '2.5 D 118ch',
                        '2.5 ess 175ch'
                    ]
                ],
                [
                    'name' => '827',
                    'versions' => [
                        '827'
                    ],
                    'engines' => [
                        '2.7 ess 169ch',
                        '2.7 ess 177ch'
                    ]
                ],
                [
                    'name' => 'Estate',
                    'versions' => [
                        'Estate'
                    ],
                    'engines' => [
                        '2.0 GT 81ch'
                    ]
                ],
                [
                    'name' => 'SD1',
                    'versions' => [
                        'SD1'
                    ],
                    'engines' => [
                        '2.0 ess 101ch',
                        '2.4 ess 119ch',
                        '2.4 ess 125ch',
                        '2.4 TD 91ch',
                        '2.6 ess 131ch',
                        '2.6 ess 138ch',
                        '3.5 ess 157ch',
                        '3.5 ess 193ch'
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
