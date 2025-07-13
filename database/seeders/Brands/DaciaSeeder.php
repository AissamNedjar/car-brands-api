<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DaciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Dacia',
            'models' => [
                [
                    'name' => 'Dokker',
                    'versions' => [
                        'Dokker'
                    ],
                    'engines' => [
                        '1.2 TCE 115ch',
                        '1.56 MPI 85ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 90ch'
                    ]
                ],
                [
                    'name' => 'Duster',
                    'versions' => [
                        'Ambiance',
                        'Baroudeur',
                        'Duster',
                        'Essential',
                        'Expression',
                        'Extreme',
                        'FaceLift Ambiance',
                        'FaceLift Lauréate',
                        'Journey',
                        'Journey plus',
                        'Laureate',
                        'Mat Edition',
                        'Ten',
                        'Valley Ambiance',
                        'Valley Lauréate'
                    ],
                    'engines' => [
                        '1.3 TCe 130ch ',
                        '1.3 TCe 150ch',
                        '1.5 Blue dCi 115ch',
                        '1.5 D 4X4 85ch',
                        '1.5 DCI 4X2 110ch',
                        '1.5 DCI 4X2 85ch',
                        '1.5 DCI 4X4 110ch',
                        '1.5 DCI 4X4 90ch',
                        '1.6 ess 4X2 105ch',
                        '1.6 ess 4X2 105ch BVA',
                        '1.6 ess 4X4 105ch'
                    ]
                ],
                [
                    'name' => 'Lodgy',
                    'versions' => [
                        'Lodgy'
                    ],
                    'engines' => [
                        '1.2 TCE 115ch',
                        '1.5 DCI 110ch',
                        '1.5 DCI 90ch',
                        '1.6 MPI 85ch'
                    ]
                ],
                [
                    'name' => 'Logan',
                    'versions' => [
                        'Access',
                        'Ambiance',
                        'Lauréate',
                        'Logan',
                        'Ten'
                    ],
                    'engines' => [
                        '1.2 ess 16V 75ch',
                        '1.4 ess 75ch',
                        '1.4 ess 75ch GPL',
                        '1.4 MPI 75ch',
                        '1.5 DCI 70ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 16V 105ch',
                        '1.6 MPI 80ch',
                        '1.6 MPI 87ch'
                    ]
                ],
                [
                    'name' => 'Logan MCV',
                    'versions' => [
                        'Laureate ',
                        'Logan MCV',
                        'Ten'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 16V 105ch',
                        '1.6 ess 90ch',
                        '1.6 ess 90ch GPL',
                        '1.6 MPI 80ch',
                        '1.6 MPI 85ch'
                    ]
                ],
                [
                    'name' => 'Sandero',
                    'versions' => [
                        'Access',
                        'Ambiance',
                        'Black Line',
                        'Essential',
                        'Expression',
                        'Journey',
                        'Laureate ',
                        'Sandero',
                        'Série limitée "Style"',
                        'Stepway',
                        'Stepway Essential',
                        'Stepway Expression',
                        'Stepway Expression plus',
                        'Stepway Extreme',
                        'Stepway Extreme plus',
                        'Stepway PRIVILEGE',
                        'Stepway restylée',
                        'Ten'
                    ],
                    'engines' => [
                        '1.0 SCe 65ch ',
                        '1.0 TCe 110ch',
                        '1.0 TCe 90ch ',
                        '1.2 ess 16V  75ch',
                        '1.4 ess 75ch',
                        '1.4 ess 75ch GPL',
                        '1.4 GPL 16V 75ch',
                        '1.4 MPI GPL 72ch',
                        '1.5 Blue dCi 75ch',
                        '1.5 Blue dCi 95ch',
                        '1.5 DCI 70ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 90ch',
                        '1.6 mpi 80ch',
                        '1.6 MPI 90ch'
                    ]
                ],
                [
                    'name' => 'Solenza',
                    'versions' => [
                        'Solenza'
                    ],
                    'engines' => [
                        '1.4 MPI 75ch',
                        '1.9 D 63ch'
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
