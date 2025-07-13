<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class ToyotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Toyota',
            'models' => [
                [
                    'name' => 'Auris',
                    'versions' => [
                        'Active',
                        'Auris',
                        'Dynamique +',
                        'Style'
                    ],
                    'engines' => [
                        '1.3 VVTI 101ch',
                        '1.4 D4D 90ch',
                        '1.4 D4D 90ch BVA',
                        '1.4 VVTI 97ch',
                        '1.6 VVTI 124ch',
                        '1.6 VVTI 132ch',
                        '1.6 VVTI 132ch BVA',
                        '1.8  99ch Hybrid',
                        '2.0 D4D 126ch',
                        '2.2 D4D 177ch'
                    ]
                ],
                [
                    'name' => 'Avensis',
                    'versions' => [
                        'Avensis',
                        'Premium',
                        'Sol'
                    ],
                    'engines' => [
                        '1.6 ess 110ch',
                        '1.6 VVTI 110ch',
                        '1.8 ess 110ch',
                        '1.8 ess 147ch',
                        '1.8 VVTI 129ch',
                        '1.8 VVTI 147ch',
                        '2.0 D4D 110ch',
                        '2.0 D4D 116ch',
                        '2.0 D4D 124ch',
                        '2.0 D4D 126ch',
                        '2.0 ess 128ch',
                        '2.0 TD 90ch',
                        '2.0 VVTI 138ch',
                        '2.0 VVTI 138ch BVA',
                        '2.0 VVTI 147ch',
                        '2.0 VVTI 150ch',
                        '2.0 VVTI 152ch',
                        '2.2 D4D 150ch',
                        '2.2 D4D 177ch',
                        '2.3 VVTI 163ch'
                    ]
                ],
                [
                    'name' => 'Avensis SW',
                    'versions' => [
                        'Avensis SW'
                    ],
                    'engines' => [
                        '2.0 D4D 126ch',
                        '2.2 D4D 150ch',
                        '2.2 D4D 177ch'
                    ]
                ],
                [
                    'name' => 'Avenza',
                    'versions' => [
                        'Avenza'
                    ],
                    'engines' => [
                        '1.3 VVTI 91ch'
                    ]
                ],
                [
                    'name' => 'Aygo',
                    'versions' => [
                        'Aygo'
                    ],
                    'engines' => [
                        '1.0 VVTI 68ch',
                        '1.4 D 54ch'
                    ]
                ],
                [
                    'name' => 'Carina',
                    'versions' => [
                        'Carina'
                    ],
                    'engines' => [
                        '1.6 ess 106ch',
                        '1.6 ess 115ch',
                        '1.6 ess 95ch',
                        '1.8 ess 107ch',
                        '2.0 D 73ch',
                        '2.0 ess 128ch',
                        '2.0 ess 133ch',
                        '2.0 GTI 158ch',
                        '2.0 TD 83ch'
                    ]
                ],
                [
                    'name' => 'Celica',
                    'versions' => [
                        'Celica'
                    ],
                    'engines' => [
                        '1.8 ess 115ch',
                        '1.8 VVT 192ch',
                        '1.8 VVTI 143ch',
                        '2.0 ess Turbo 208ch',
                        '2.0 ess Turbo 4WD 204ch',
                        '2.0 GT 175ch',
                        '2.0 GTI 156ch'
                    ]
                ],
                [
                    'name' => 'Corolla',
                    'versions' => [
                        'Corolla',
                        'Executive ',
                        'high grade'
                    ],
                    'engines' => [
                        '1.3 ess 86ch',
                        '1.3 ess 88ch',
                        '1.4 D4D 90ch',
                        '1.4 VVTI 100ch',
                        '1.4 VVTI 96ch',
                        '1.4 VVTI 97ch',
                        '1.6 ess 112ch',
                        '1.6 ess 122ch',
                        '1.6 ess 122ch BVA',
                        '1.6 ess 4WD 95ch',
                        '1.6 GTI 125ch',
                        '1.6 GTI 130ch',
                        '1.6 VVTI 110ch',
                        '1.6 VVTI 112ch',
                        '1.8 VVT 192ch',
                        '1.9 D 69ch',
                        '2.0 D4D 110ch',
                        '2.0 D4D 115ch',
                        '2.0 D4D 116ch',
                        '2.0 D 72ch',
                        '2.0 D 73ch'
                    ]
                ],
                [
                    'name' => 'Corolla GT',
                    'versions' => [
                        'Corolla GT'
                    ],
                    'engines' => [
                        '1.6 ess 124ch'
                    ]
                ],
                [
                    'name' => 'Corolla Verso',
                    'versions' => [
                        'Corolla Verso'
                    ],
                    'engines' => [
                        '1.6 VVTI 110ch',
                        '1.8 VVTI 130ch',
                        '1.8 VVTI 135ch',
                        '2.0 D4D 90ch',
                        '2.2 D4D 136ch',
                        '2.2 D4D 177ch'
                    ]
                ],
                [
                    'name' => 'Echo',
                    'versions' => [
                        'Echo'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Fortuner',
                    'versions' => [
                        'Fortuner',
                        'Nouveau'
                    ],
                    'engines' => [
                        '3.0 D4D 163ch'
                    ]
                ],
                [
                    'name' => 'GT 86',
                    'versions' => [
                        'GT 86'
                    ],
                    'engines' => [
                        '2.0 ess 200ch',
                        '2.0 ess 200ch BVA'
                    ]
                ],
                [
                    'name' => 'Hilux',
                    'versions' => [
                        'Hilux',
                        'LEGEND DC 4x2',
                        'LEGEND DC 4x4',
                        'LEGEND DC 4x4 Pack Luxe',
                        'LEGEND SC 4x2',
                        'LEGEND SC 4x4',
                        'S/C 4x2 Pack Chrome'
                    ],
                    'engines' => [
                        '2.5 D4D 120ch',
                        '2.5 D4D 144ch',
                        '2.5 D 4X2 102ch',
                        '2.5 D 4X4 102ch',
                        '3.0 D4D 171ch'
                    ]
                ],
                [
                    'name' => 'iQ',
                    'versions' => [
                        'iQ'
                    ],
                    'engines' => [
                        '1.0 VVTI 68ch',
                        '1.3 VVTI 98ch',
                        '1.4 D4D 90ch'
                    ]
                ],
                [
                    'name' => 'Land Cruiser',
                    'versions' => [
                        'Court',
                        'Land Cruiser',
                        'Long'
                    ],
                    'engines' => [
                        '2.5 D 72ch',
                        '2.5 D 86ch',
                        '2.5 D 90ch',
                        '3.0 D 125ch',
                        '3.0 D 163ch',
                        '3.0 D 166ch',
                        '3.0 D 173ch',
                        '3.0 D 190ch',
                        '3.0 D4D 173ch',
                        '3.0 D4D 190ch',
                        '3.0 D 85ch',
                        '3.4 D 123ch',
                        '3.4 D 90ch',
                        '3.4 ess 179ch',
                        '4.2 D 131ch',
                        '4.2 ess 135ch'
                    ]
                ],
                [
                    'name' => 'Land Cruiser ',
                    'versions' => [
                        'First Edition',
                        'Légende',
                        'Life',
                        'Lounge',
                        'Lounge Pack Techno'
                    ],
                    'engines' => [
                        '204 D-4D'
                    ]
                ],
                [
                    'name' => 'Land Cruiser SW',
                    'versions' => [
                        'Land Cruiser SW'
                    ],
                    'engines' => [
                        '3.9 ess 123ch',
                        '4.0 D 136ch',
                        '4.2 D 160ch',
                        '4.2 D 167ch',
                        '4.2 D 170ch',
                        '4.2 D 204ch',
                        '4.2 D 204ch BVA',
                        '4.2 TD 204ch',
                        '4.4 D4D V8 286ch',
                        '4.5 ess 205ch',
                        '4.7 ess 235ch',
                        '4.7 ess V8 238ch'
                    ]
                ],
                [
                    'name' => 'MR',
                    'versions' => [
                        'MR'
                    ],
                    'engines' => [
                        '1.8 VVTI 140ch',
                        '2.0 GTI 156ch',
                        '2.0 GTI 175ch'
                    ]
                ],
                [
                    'name' => 'Nouvelle Corolla',
                    'versions' => [
                        'Active',
                        'Business',
                        'Collection',
                        'Design',
                        'Dynamic',
                        'Elegant',
                        'GR SPORT',
                        'Premium',
                        'Premium CVT'
                    ],
                    'engines' => [
                        '1.4 D4D 90ch',
                        '1.6 CVT 124 Ch BVA',
                        '1.6 VVTi 124 Ch',
                        'X 1.8 140ch ',
                        'X 2.0 196ch'
                    ]
                ],
                [
                    'name' => 'Nouvelle Corolla Verso',
                    'versions' => [
                        'active ',
                        'dynamique ',
                        'Nouvelle Corolla Verso'
                    ],
                    'engines' => [
                        '1.6 ess 132ch',
                        '2.0 D4D 127ch'
                    ]
                ],
                [
                    'name' => 'PRADO',
                    'versions' => [
                        'Pack Luxe',
                        'PRADO'
                    ],
                    'engines' => [
                        '3.0 D4D 163ch'
                    ]
                ],
                [
                    'name' => 'Previa',
                    'versions' => [
                        'Previa'
                    ],
                    'engines' => [
                        '2.0 D4D 116ch',
                        '2.4 ess 135ch',
                        '2.4 ess 156ch',
                        '2.4 VVTI 156ch'
                    ]
                ],
                [
                    'name' => 'Prius',
                    'versions' => [
                        'Prius'
                    ],
                    'engines' => [
                        '1.5  72ch',
                        '1.5  78ch Hybrid',
                        '1.8 Hybride 99ch'
                    ]
                ],
                [
                    'name' => 'RAV4',
                    'versions' => [
                        'Active',
                        'Dynamique',
                        'Premium',
                        'RAV4'
                    ],
                    'engines' => [
                        '2.0 ess 129ch',
                        '2.0 VVTI 150ch',
                        '2.0 VVTI 152ch',
                        '2.0 VVTI 158ch',
                        '2.2 D4D 136ch',
                        '2.2 D4D 150ch',
                        '2.2 D4D 150ch BVA',
                        '2.2 D4D 177ch'
                    ]
                ],
                [
                    'name' => 'Runner',
                    'versions' => [
                        'Runner'
                    ],
                    'engines' => [
                        '2.5 TD 90ch',
                        '3.0 ess V6 143ch'
                    ]
                ],
                [
                    'name' => 'Starlet',
                    'versions' => [
                        'Starlet'
                    ],
                    'engines' => [
                        '1.3 ess 75ch'
                    ]
                ],
                [
                    'name' => 'Supra',
                    'versions' => [
                        'Supra'
                    ],
                    'engines' => [
                        '3.0 GT 235ch'
                    ]
                ],
                [
                    'name' => 'Urban Cruiser',
                    'versions' => [
                        'Urban Cruiser'
                    ],
                    'engines' => [
                        '1.3 VVTI 100ch',
                        '1.4 D4D 90ch'
                    ]
                ],
                [
                    'name' => 'Verso',
                    'versions' => [
                        'Active',
                        'Dynamique',
                        'Verso'
                    ],
                    'engines' => [
                        '1.6 VVTI 132ch',
                        '2.0 D4D 127ch',
                        '2.2 D4D 126ch',
                        '2.2 D4D 150ch',
                        '2.2 D4D 177ch'
                    ]
                ],
                [
                    'name' => 'Verso S',
                    'versions' => [
                        'Verso S'
                    ],
                    'engines' => [
                        '1.4 D4D 90ch',
                        '1.4 VVTI 99ch'
                    ]
                ],
                [
                    'name' => 'Yaris',
                    'versions' => [
                        'Collection',
                        'Design',
                        'GR SPORT',
                        'Iconic',
                        'Lounge',
                        'Lounge CVT',
                        'Red Edition',
                        'Style',
                        'Touch',
                        'Touch Active',
                        'Touch Sp',
                        'Track',
                        'TREND',
                        'Yaris'
                    ],
                    'engines' => [
                        '1.0 ess 68ch',
                        '1.0 VVTI 68ch',
                        '1.0 VVTI 69ch',
                        '1.0 VVTi 70 Ch',
                        '1.3 ess 86ch',
                        '1.3 VVTI 100ch',
                        '1.3 VVTI 86ch',
                        '1.3 VVTI 87ch',
                        '1.3 VVTI 99ch',
                        '1.3 VVTI 99ch BVA',
                        '1.4 D4D 90ch',
                        '1,5 120 ch VVT-i ',
                        '1.5  74ch Hybrid',
                        '1.5 TS 106ch',
                        '1.6 GR 261ch ',
                        '1.8 TS 133ch'
                    ]
                ],
                [
                    'name' => 'Yaris Sedan',
                    'versions' => [
                        'Executive',
                        'Play',
                        'SD 22',
                        'SD 23',
                        'Select',
                        'Style',
                        'Yaris Sedan'
                    ],
                    'engines' => [
                        '1.3 VVTI 100ch',
                        '1.3 VVTI 84ch',
                        '1.3 VVTI 87ch',
                        '1.3 VVTI 87ch BVA'
                    ]
                ],
                [
                    'name' => 'Yaris Verso',
                    'versions' => [
                        'Yaris Verso'
                    ],
                    'engines' => [
                        '1.3 ess 86ch',
                        '1.3 VVTI 86ch',
                        '1.4 VVTI 75ch',
                        '1.5 ess 106ch',
                        '1.5 VVTI 106ch'
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
