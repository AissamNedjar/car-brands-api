<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class FiatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Fiat',
            'models' => [
                [
                    'name' => '125',
                    'versions' => [
                        '125'
                    ],
                    'engines' => [
                        '1.6 ess 100ch',
                        '1.6 ess 90ch'
                    ]
                ],
                [
                    'name' => '126',
                    'versions' => [
                        '126'
                    ],
                    'engines' => [
                        '0.6 ess 23ch',
                        '0.7 ess 24ch',
                        '0.7 ess 26ch'
                    ]
                ],
                [
                    'name' => '127',
                    'versions' => [
                        '127'
                    ],
                    'engines' => [
                        '1.1 ess 70ch'
                    ]
                ],
                [
                    'name' => '131',
                    'versions' => [
                        '131'
                    ],
                    'engines' => [
                        '2.0 ess 115ch'
                    ]
                ],
                [
                    'name' => '500',
                    'versions' => [
                        '500',
                        'CLUB',
                        'Cult MIB',
                        'Dolcevita MIB',
                        'Dolcevita plus ',
                        'Lounge',
                        'Pop',
                        'Sport'
                    ],
                    'engines' => [
                        '0.5 ess 18ch',
                        '0.6 ess 18ch',
                        '0.6 ess 32ch',
                        '0.9 TwinAir 105ch',
                        '0.9 TwinAir 85ch',
                        '1,0 Hybrid 70ch',
                        '1.2 ess 69ch',
                        '1.3 MJET 16V 75ch',
                        '1.3 MJET 95ch',
                        '1.4 ess 100ch',
                        '1.4 ess 100ch BVA',
                        '1.4 ess 155ch',
                        '1.4 ess 160ch'
                    ]
                ],
                [
                    'name' => '500L',
                    'versions' => [
                        '500L',
                        'Confort +',
                        'Pop Star',
                        'Pop Star Bicolor',
                        'Sky',
                        'Sky Bicolor'
                    ],
                    'engines' => [
                        '0.9 TwinAir 85ch',
                        '1.3 MJET 95ch',
                        '1.4 16V 95ch BVA',
                        '1.4 ess 100ch',
                        '1.4 ess 16V 97ch'
                    ]
                ],
                [
                    'name' => '500x',
                    'versions' => [
                        '500x',
                        'Club',
                        'Cult'
                    ],
                    'engines' => [
                        '1.4l M.Air2 ess 140ch',
                        '1.4l M.Air2 ess 140ch DCT',
                        '1.4l MultiAir ess 140ch DCT'
                    ]
                ],
                [
                    'name' => '600',
                    'versions' => [
                        '600'
                    ],
                    'engines' => [
                        '0.9 ess 76ch',
                        '1.1 ess 54ch',
                        '1.1 ess 55ch'
                    ]
                ],
                [
                    'name' => 'Barchetta',
                    'versions' => [
                        'Barchetta'
                    ],
                    'engines' => [
                        '1.8 ess 130ch'
                    ]
                ],
                [
                    'name' => 'Brava',
                    'versions' => [
                        'Brava'
                    ],
                    'engines' => [
                        '1.4 ess 12V 80ch',
                        '1.6 ess 16V 103ch',
                        '1.9 D 65ch',
                        '1.9 JTD 105ch',
                        '1.9 TD 100ch',
                        '1.9 TD 75ch'
                    ]
                ],
                [
                    'name' => 'Bravo',
                    'versions' => [
                        'Bravo'
                    ],
                    'engines' => [
                        '1.3 ess 16V 82ch',
                        '1.4 ess 120ch',
                        '1.4 ess 12V 80ch',
                        '1.4 ess 150ch',
                        '1.4 ess 16V 90ch',
                        '1.4 MultiAir 140ch',
                        '1.6 ess 16V 103ch',
                        '1.6 MJET 105ch',
                        '1.6 MJET 120ch',
                        '1.6 MJET 16V 105ch',
                        '1.6 MJET 16V 120ch',
                        '1.6 MJET 16V 90ch',
                        '1.6 MJET 90ch',
                        '1.8 ess 16V 113ch',
                        '1.9 D 65ch',
                        '1.9 JTD 105ch',
                        '1.9 MJET 120ch',
                        '1.9 MJET 150ch',
                        '1.9 MJET 90ch',
                        '1.9 TD 100ch',
                        '2.0 ess 147ch',
                        '2.0 ess 155ch',
                        '2.0 MJET 165ch',
                        '2.0 MJET 16V 105ch',
                        '2.0 MJET 16V 165ch'
                    ]
                ],
                [
                    'name' => 'Cinquecento',
                    'versions' => [
                        'Cinquecento'
                    ],
                    'engines' => [
                        '0.9 ess 40ch',
                        '1.1 ess 55ch'
                    ]
                ],
                [
                    'name' => 'Coupé',
                    'versions' => [
                        'Coupé'
                    ],
                    'engines' => [
                        '1.8 ess 16V 130ch',
                        '2.0 ess 147ch',
                        '2.0 ess 155ch',
                        '2.0 ess 16V 142ch',
                        '2.0 ess Turbo 16V 195ch',
                        '2.0 ess Turbo 220ch'
                    ]
                ],
                [
                    'name' => 'Croma',
                    'versions' => [
                        'Croma'
                    ],
                    'engines' => [
                        '1.8 MPI 140ch',
                        '1.9 MJET 120ch',
                        '1.9 MJET 150ch',
                        '1.9 TDI 92ch',
                        '2.0 ess 120ch',
                        '2.0 ess 90ch',
                        '2.0 ess Turbo 155ch',
                        '2.2 MPI 150ch',
                        '2.4 D 200ch',
                        '2.4 JTD 200ch',
                        '2.5 D 75ch',
                        '2.5 TD 100ch'
                    ]
                ],
                [
                    'name' => 'Dino',
                    'versions' => [
                        'Dino'
                    ],
                    'engines' => [
                        '2.4 ess 180ch'
                    ]
                ],
                [
                    'name' => 'Doblo',
                    'versions' => [
                        'Active',
                        'Doblo',
                        'Dynamic',
                        'Dynamic Long',
                        'Emotion',
                        'Emotion Long',
                        'New Van Confort',
                        'Van Active',
                        'Van Dynamique'
                    ],
                    'engines' => [
                        '1.2 ess 65ch',
                        '1.3 JTD 90ch',
                        '1.3 MJET 16V 85ch',
                        '1.4 ess 16V 95ch',
                        '1.4 ess 75ch',
                        '1.4 ess 95ch',
                        '1.6 ess 16V 103ch',
                        '1.6 Hdi 90ch',
                        '1.6 MJET 105ch',
                        '1.6 MJET 16V 105ch',
                        '1.6 MJET 90ch',
                        '1.9 D 63ch',
                        '1.9 JTD 100ch',
                        '1.9 MJET 105ch',
                        '1.9 MJET 120ch',
                        '2.0 MJET 135ch',
                        '2.0 MJET 16V 135ch'
                    ]
                ],
                [
                    'name' => 'Doblo panorama',
                    'versions' => [
                        'Cult'
                    ],
                    'engines' => [
                        '1.6 Ess 115ch'
                    ]
                ],
                [
                    'name' => 'Doblo Van',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'Ducato',
                    'versions' => [
                        'Ducato',
                        'L1H1',
                        'L2H2 ',
                        'L3H2',
                        'L4H2',
                        'L4H3'
                    ],
                    'engines' => [
                        '2,2 HDI 140ch',
                        '2.3 Mjet 120ch'
                    ]
                ],
                [
                    'name' => 'Fiorino',
                    'versions' => [
                        'Combi',
                        'Fiorino'
                    ],
                    'engines' => [
                        '1.3 JTD 75ch',
                        '1.4 ess 77ch'
                    ]
                ],
                [
                    'name' => 'Freemont',
                    'versions' => [
                        'Freemont'
                    ],
                    'engines' => [
                        '2.0 MultiJet 140ch',
                        '2.0 MultiJet 170ch',
                        '2.0 MultiJet 4X4 170ch',
                        '3.6 ess V6 276ch'
                    ]
                ],
                [
                    'name' => 'Grande Punto',
                    'versions' => [
                        'Easy +',
                        'Grande Punto',
                        'Lounge',
                        'Sun'
                    ],
                    'engines' => [
                        '1.2 ess 65ch',
                        '1.2 ess 69ch',
                        '1.4 ess 120ch',
                        '1.4 ess 155ch',
                        '1.4 ess 165ch',
                        '1.4 ess 77ch',
                        '1.4 ess 95ch',
                        '1.4 MJET 16V 75ch',
                        '1.4 MJET 16V 90ch',
                        '1.4 MJET 75ch',
                        '1.4 MJET 85ch',
                        '1.4 MJET 95ch',
                        '1.4 MultiAir 105ch',
                        '1.4 MultiAir 135ch',
                        '1.6 MJET 120ch',
                        '1.6 MJET 16V 120ch',
                        '1.9 JTD 130ch',
                        '1.9 MJET 16V 120ch',
                        '1.9 MJET 16V 130ch'
                    ]
                ],
                [
                    'name' => 'Idea',
                    'versions' => [
                        'Idea'
                    ],
                    'engines' => [
                        '1.2 ess 16V 80ch',
                        '1.3 MJET 16V 70ch',
                        '1.3 MJET 16V 90ch',
                        '1.3 MJET 16V 95ch',
                        '1.4 ess 16V 95ch',
                        '1.9 JTD 100ch',
                        '1.9 MJET 100ch'
                    ]
                ],
                [
                    'name' => 'Linea',
                    'versions' => [
                        'Active',
                        'Active Facelift',
                        'Dynamic',
                        'Dynamic Facelift',
                        'Linea'
                    ],
                    'engines' => [
                        '1.3 JTD 90ch',
                        '1.4 ess 77ch'
                    ]
                ],
                [
                    'name' => 'Marea',
                    'versions' => [
                        'Marea'
                    ],
                    'engines' => [
                        '1.8 ess 16V 113ch',
                        '1.9 TD 100ch',
                        '1.9 TD 75ch',
                        '2.0 ess 147ch',
                        '2.0 ess 155ch',
                        '2.4 D 124ch',
                        '2.4 JTD 130ch'
                    ]
                ],
                [
                    'name' => 'Multipla',
                    'versions' => [
                        'Multipla'
                    ],
                    'engines' => [
                        '1.6 ess 16V 103ch',
                        '1.6 ess 16V 105ch',
                        '1.9 JTD 105ch',
                        '1.9 JTD 110ch',
                        '1.9 MJET 115ch',
                        '1.9 MJET 120ch'
                    ]
                ],
                [
                    'name' => 'Palio',
                    'versions' => [
                        'Fire',
                        'Palio'
                    ],
                    'engines' => [
                        '1.2 ess 73ch',
                        '1.4 ess 82ch',
                        '1.6 ess 100ch'
                    ]
                ],
                [
                    'name' => 'Panda',
                    'versions' => [
                        'Easy',
                        'Panda',
                        'Pop +'
                    ],
                    'engines' => [
                        '0.8 ess 34ch',
                        '0.9 ess 40ch',
                        '0.9 TwinAir 65ch',
                        '1.0 ess 45ch',
                        '1.0 ess 4X4 50ch',
                        '1.1 ess 4X4 55ch',
                        '1.1 ess 54ch',
                        '1.1 ess 55ch',
                        '1.2 ess 60ch',
                        '1.2 ess 69ch',
                        '1.2 ess 69ch BVA',
                        '1.3 ess 4X4 60ch',
                        '1.3 ess 60ch',
                        '1.3 MJET 16V 75ch',
                        '1.3 MJET 75ch',
                        '1.4 ess 100ch',
                        '1.4 ess 16V 100ch'
                    ]
                ],
                [
                    'name' => 'Panda 4x4',
                    'versions' => [
                        'Panda 4x4'
                    ],
                    'engines' => [
                        '1.2 ess 60ch',
                        '1.3 MJET 16V 70ch'
                    ]
                ],
                [
                    'name' => 'Panda Cross',
                    'versions' => [
                        'Panda Cross'
                    ],
                    'engines' => [
                        '1.3 MJET 16V 70ch'
                    ]
                ],
                [
                    'name' => 'Punto',
                    'versions' => [
                        'Classic',
                        'Easy +',
                        'Lounge',
                        'Punto',
                        'Sun'
                    ],
                    'engines' => [
                        '1.1 ess 55ch',
                        '1.2 ess 16V 80ch',
                        '1.2 ess 60ch',
                        '1.3 ess 16V 86ch',
                        '1.3 ess 75ch',
                        '1.3 JTD 70ch',
                        '1.4 ess 77ch',
                        '1.4 GT 136ch',
                        '1.6 ess 90ch',
                        '1.7 D 58ch',
                        '1.7 D 63ch',
                        '1.7 D 71ch',
                        '1.8 ess 16V 130ch',
                        '1.9 D 60ch',
                        '1.9 JTD 80ch'
                    ]
                ],
                [
                    'name' => 'Qubo',
                    'versions' => [
                        'Dynamique',
                        'Emotion',
                        'Qubo'
                    ],
                    'engines' => [
                        '1.3 JTD 75ch',
                        '1.3 MJET 16V 75ch',
                        '1.3 MJET 75ch',
                        '1.3 MJET 95ch',
                        '1.4 ess 77ch'
                    ]
                ],
                [
                    'name' => 'Ritmo',
                    'versions' => [
                        'Ritmo'
                    ],
                    'engines' => [
                        '1.1 ess 55ch',
                        '1.1 ess 58ch',
                        '1.1 ess 60ch',
                        '1.3 ess 65ch',
                        '1.3 ess 68ch',
                        '1.5 ess 75ch',
                        '1.5 ess 82ch',
                        '1.5 ess 85ch',
                        '1.6 ess 105ch',
                        '1.7 D 55ch',
                        '1.7 D 58ch',
                        '1.7 D 60ch',
                        '1.9 TD 80ch',
                        '2.0 ess 125ch',
                        '2.0 ess 130ch'
                    ]
                ],
                [
                    'name' => 'Sedici',
                    'versions' => [
                        'Sedici'
                    ],
                    'engines' => [
                        '1.6 ess 16V 120ch',
                        '1.6 ess 16V 4X2 107ch',
                        '1.6 ess 16V 4X4 107ch',
                        '1.9 MJET 4X2 120ch',
                        '1.9 MJET 4X4 120ch',
                        '2.0 MJET 135ch'
                    ]
                ],
                [
                    'name' => 'Seicento',
                    'versions' => [
                        'Seicento'
                    ],
                    'engines' => [
                        '0.9 ess 39ch',
                        '1.1 ess 54ch'
                    ]
                ],
                [
                    'name' => 'Siena',
                    'versions' => [
                        'Siena'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Stilo',
                    'versions' => [
                        'Stilo'
                    ],
                    'engines' => [
                        '1.4 ess 16V 95ch',
                        '1.6 ess 16V 103ch',
                        '1.8 ess 16V 133ch',
                        '1.9 JTD 115ch',
                        '1.9 JTD 120ch',
                        '1.9 JTD 126ch',
                        '1.9 JTD 140ch',
                        '1.9 JTD 150ch',
                        '1.9 JTD 80ch',
                        '2.5 ess 170ch'
                    ]
                ],
                [
                    'name' => 'Tempra',
                    'versions' => [
                        'Tempra'
                    ],
                    'engines' => [
                        '1.4 ess 69ch',
                        '1.4 ess 76ch',
                        '1.6 ess 75ch',
                        '1.6 ess 84ch',
                        '1.6 MPI 90ch',
                        '1.8 ess 103ch',
                        '1.8 ess 109ch',
                        '1.9 D 65ch',
                        '1.9 TD 92ch',
                        '2.0 ess 4X4 113ch'
                    ]
                ],
                [
                    'name' => 'Tipo',
                    'versions' => [
                        'Tipo'
                    ],
                    'engines' => [
                        '1.4 ess 72ch',
                        '1.6 ess 84ch',
                        '1.7 D 58ch',
                        '1.8 ess 109ch',
                        '1.8 ess 16V 136ch',
                        '1.9 D 65ch',
                        '1.9 TD 92ch',
                        '2.0 ess 16V 145ch'
                    ]
                ],
                [
                    'name' => 'Tipo Sedan',
                    'versions' => [
                        'Life',
                        'Business',
                        'City',
                        'Life',
                        'Urban',
                        'Urban Plus'
                    ],
                    'engines' => [
                        '1.4 ess 95CH',
                        '1.4 ess 95ch BVM6',
                        '1.6 eTorq 110ch BVA'
                    ]
                ],
                [
                    'name' => 'TITANO',
                    'versions' => [
                        'Endurance',
                        'Endurance plus',
                        'Volcano'
                    ],
                    'engines' => [
                        '1.9 D 150ch 4x2',
                        '1.9 D 150ch 4x4'
                    ]
                ],
                [
                    'name' => 'Ulysse',
                    'versions' => [
                        'Ulysse'
                    ],
                    'engines' => [
                        '0.0 ess 16V 133ch',
                        '1.9 TD 92ch',
                        '2.0 ess 123ch',
                        '2.0 ess 16V 136ch',
                        '2.0 JTD 109ch',
                        '2.0 MJET 120ch',
                        '2.0 MJET 136ch',
                        '2.1 TD 110ch',
                        '2.2 JTD 128ch',
                        '2.2 MJET 170ch'
                    ]
                ],
                [
                    'name' => 'Uno',
                    'versions' => [
                        'Uno'
                    ],
                    'engines' => [
                        '1.0 ess 45ch',
                        '1.1 ess 55ch',
                        '1.1 ess 56ch',
                        '1.1 ess 58ch',
                        '1.4 ess 71ch',
                        '1.4 ess Turbo 115ch',
                        '1.4 TD 71ch',
                        '1.7 D 57ch'
                    ]
                ],
                [
                    'name' => 'X1/9',
                    'versions' => [
                        'X1/9'
                    ],
                    'engines' => [
                        '1.3 ess 73ch',
                        '1.5 ess 85ch'
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
