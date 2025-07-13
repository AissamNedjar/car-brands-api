<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class BMWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'BMW',
            'models' => [
                [
                    'name' => '1500',
                    'versions' => [
                        '1500'
                    ],
                    'engines' => [
                        '1499e 80'
                    ]
                ],
                [
                    'name' => '328',
                    'versions' => [
                        '328'
                    ],
                    'engines' => [
                        '1971e 80'
                    ]
                ],
                [
                    'name' => 'E08',
                    'versions' => [
                        'E08'
                    ],
                    'engines' => [
                        '1800',
                        '1800 TI',
                        '1800 TI SA',
                        '2000',
                        '2000 TI',
                        '2000 TII',
                        '2000 TI Lux'
                    ]
                ],
                [
                    'name' => 'E09',
                    'versions' => [
                        'E09'
                    ],
                    'engines' => [
                        '3.0 CS',
                        '3.0 CSi',
                        '3.0 CSL'
                    ]
                ],
                [
                    'name' => 'E10',
                    'versions' => [
                        'E10'
                    ],
                    'engines' => [
                        '2002 ti',
                        '2002 tii',
                        '2002 Turbo'
                    ]
                ],
                [
                    'name' => 'E507',
                    'versions' => [
                        'E507'
                    ],
                    'engines' => [
                        '3168e 150'
                    ]
                ],
                [
                    'name' => 'M1',
                    'versions' => [
                        'M1'
                    ],
                    'engines' => [
                        '3.5e'
                    ]
                ],
                [
                    'name' => 'Série 1',
                    'versions' => [
                        'Business Design',
                        'Confort',
                        'Edition M Sport Pro',
                        'Edition Sport',
                        'M performance',
                        'M Sport',
                        'Select',
                        'Série 1',
                        'Sport',
                        'Sport M',
                        'Ti',
                        'Urban',
                        'Urban Line'
                    ],
                    'engines' => [
                        '114i',
                        '116d',
                        '116d 116ch',
                        '116i',
                        '116i 109ch',
                        '118d',
                        '118d 150ch',
                        '118d 150ch',
                        '118i',
                        '118i 136ch',
                        '120d',
                        '120d 190ch',
                        '120dA 163ch',
                        ' 120dA xDrive 190ch',
                        '120i',
                        '120iA 178ch',
                        '123d',
                        '130i'
                    ]
                ],
                [
                    'name' => 'Série 1 Cabriolet',
                    'versions' => [
                        'Série 1 Cabriolet'
                    ],
                    'engines' => [
                        '118d',
                        '118i',
                        '120d',
                        '120i',
                        '123d',
                        '125i',
                        '135i'
                    ]
                ],
                [
                    'name' => 'Série 1 Coupé',
                    'versions' => [
                        'Série 1 Coupé'
                    ],
                    'engines' => [
                        '118d',
                        '120d',
                        '120i',
                        '123d',
                        '125i',
                        '135i',
                        'M'
                    ]
                ],
                [
                    'name' => 'Série 2',
                    'versions' => [
                        'Coupé Pack Sport M',
                        'Série 2'
                    ],
                    'engines' => [
                        '220d 190ch'
                    ]
                ],
                [
                    'name' => 'Série 3',
                    'versions' => [
                        'Business Design',
                        'Excelium',
                        'Luxury',
                        'Luxury Line',
                        'Modern',
                        'M performance',
                        'M sport',
                        'Pack M',
                        'Série 3',
                        'Sport',
                        'Sport Line',
                        'Sport M'
                    ],
                    'engines' => [
                        '316',
                        '316d',
                        '316dA 122ch',
                        '316i',
                        '318',
                        '318ci',
                        '318d',
                        '318 D 150ch',
                        '318dA 150ch',
                        '318i',
                        '318iA 156ch',
                        '318is',
                        '318is (Supertourisme)',
                        '318tds',
                        '320',
                        '320cd',
                        '320ci',
                        '320d',
                        '320 D 190ch',
                        '320dA',
                        '320dA 190ch',
                        '320dA EfficientDynamics',
                        '320d EfficientDynamics',
                        '320i',
                        '320iA 184ch ',
                        '320is',
                        '323ci',
                        '323i',
                        '324d',
                        '324td',
                        '325ci',
                        '325i',
                        '325is',
                        '325i SMG-C',
                        '325i Sport',
                        '325ix',
                        '325td',
                        '325tds',
                        '325xi',
                        '328ci',
                        '328i',
                        '330cd',
                        '330ci SMG-C',
                        '330d',
                        '330i',
                        '330xi',
                        '335d',
                        '335i',
                        'M3',
                        'M340iA MH xDrive 374ch',
                        'M3 Evolution',
                        'M3 Evolution 2'
                    ]
                ],
                [
                    'name' => 'Série 3 Cabriolet',
                    'versions' => [
                        'Série 3 Cabriolet'
                    ],
                    'engines' => [
                        '318i',
                        '320d',
                        '320i',
                        '325d 197ch',
                        '325d 204ch',
                        '325i',
                        '330d 231ch',
                        '330d 245ch',
                        '330i',
                        '335i',
                        'M3 343ch',
                        'M3 420ch'
                    ]
                ],
                [
                    'name' => 'Série 3 Coupé',
                    'versions' => [
                        'Série 3 Coupé'
                    ],
                    'engines' => [
                        '316i',
                        '316ti',
                        '318is',
                        '318tds',
                        '318ti',
                        '320d',
                        '320i',
                        '320td',
                        '323i',
                        '323ti',
                        '325d 197ch',
                        '325d 204ch',
                        '325i',
                        '325ti',
                        '328i',
                        '330d 231ch',
                        '330d 245ch',
                        '330i',
                        '335d',
                        '335i',
                        'M3 343ch',
                        'M3 420ch',
                        'M3 GTS'
                    ]
                ],
                [
                    'name' => 'Série 3 Gran Turismo',
                    'versions' => [
                        'Luxury Line',
                        'Série 3 Gran Turismo',
                        'Sport Line'
                    ],
                    'engines' => [
                        '318 D 150ch',
                        '320 D 190ch'
                    ]
                ],
                [
                    'name' => 'Série 4',
                    'versions' => [
                        'Gran Coupé Pack Sport M',
                        'Série 4'
                    ],
                    'engines' => [
                        '420d 190ch'
                    ]
                ],
                [
                    'name' => 'Série 5',
                    'versions' => [
                        '525d sport',
                        '528i sport',
                        'Business Design',
                        'Excellium',
                        'Exclusive',
                        'Lounge',
                        'Luxury ',
                        'Luxury Line',
                        'Modern',
                        'M sport',
                        'Msport Edition',
                        'Pack M',
                        'Premium',
                        'Série 5',
                        'Sport',
                        'Sport M'
                    ],
                    'engines' => [
                        '518',
                        '518dA 150ch',
                        '518i',
                        '520',
                        '520d',
                        '520d 184ch',
                        '520dA 190ch',
                        '520dA 197ch',
                        '520i',
                        '520iA 184ch',
                        ' 520iA 208ch',
                        '523i',
                        '524d',
                        '524td',
                        '525',
                        '525d',
                        '525d 177ch',
                        '525d 197ch',
                        '525d 218ch',
                        '525e',
                        '525i',
                        '525ix',
                        '525td',
                        '525tds',
                        '528',
                        '528i',
                        '530d',
                        '530dA xDrive 286ch',
                        '530i',
                        '535d',
                        '535i',
                        '540dA 303ch',
                        '540dA xDrive 340ch',
                        '540i',
                        '545i',
                        '550i',
                        'M5',
                        'M535i',
                        'M550d'
                    ]
                ],
                [
                    'name' => 'Série 5 Gran Turismo',
                    'versions' => [
                        'Série 5 Gran Turismo'
                    ],
                    'engines' => [
                        '530d',
                        '535d',
                        '535i',
                        '550i'
                    ]
                ],
                [
                    'name' => 'Série 6',
                    'versions' => [
                        'Série 6'
                    ],
                    'engines' => [
                        '628csi',
                        '630i',
                        '633csi',
                        '635csi',
                        '635d',
                        '635i',
                        '640d',
                        '640d xDrive',
                        '640i',
                        '645i',
                        '650i',
                        '650i xDrive',
                        'M6'
                    ]
                ],
                [
                    'name' => 'Série 6 Cabriolet',
                    'versions' => [
                        'Série 6 Cabriolet'
                    ],
                    'engines' => [
                        '630i',
                        '635d',
                        '640d',
                        '640i',
                        '645i',
                        '650i',
                        'M6'
                    ]
                ],
                [
                    'name' => 'Série 7',
                    'versions' => [
                        'Excellence',
                        'Série 7'
                    ],
                    'engines' => [
                        '725tds',
                        '728',
                        '728i',
                        '728iA',
                        '730',
                        '730d',
                        '730dA',
                        '730i',
                        '730Ld',
                        '732i',
                        '733i',
                        '735i',
                        '735iA',
                        '735iAL',
                        '740d',
                        '740dA',
                        '740i',
                        '745d',
                        '745i',
                        '750i',
                        '760i',
                        'ActiveHybrid7',
                        'xDrive 730Ld 265ch'
                    ]
                ],
                [
                    'name' => 'X1',
                    'versions' => [
                        'Business Design',
                        'Confort',
                        'Excellium',
                        'Exlusive',
                        'M Performance',
                        'M Sport',
                        'Pack M',
                        'Premium',
                        'Sport',
                        'Sport M',
                        'X1',
                        'X Line',
                        'Xline'
                    ],
                    'engines' => [
                        'M35i xDrive 300ch',
                        'sDrive 16d 116',
                        'sDrive18d',
                        'sDrive 18d 143 ch',
                        'sDrive18d 150ch',
                        'sDrive 18d 150ch Steptronic Sport',
                        'sDrive18i',
                        'sDrive18i 136ch',
                        'sDrive 18i 143',
                        'sDrive20d',
                        'sDrive20d 163ch',
                        'sDrive20d EfficientDynamic',
                        'sDrive20i',
                        'sDrive20i 170ch',
                        'xDrive18d',
                        'xDrive20d',
                        'xDrive 20d 177',
                        'xDrive 20d Steptronic Sport',
                        'xDrive23d',
                        'xDrive23d 211ch',
                        'xDrive23i 218ch',
                        'xDrive25i',
                        'xDrive28i',
                        'xDrive 28i 258'
                    ]
                ],
                [
                    'name' => 'X2',
                    'versions' => [
                        'Business Design',
                        'Edition Goldplay',
                        'Lounge',
                        'M performance',
                        'M sport',
                        'M sport X',
                        'Xline'
                    ],
                    'engines' => [
                        'M35iA 306ch M Performance',
                        'sDrive16d 116ch',
                        ' sDrive18d 150ch',
                        'sDrive18i 136ch',
                        'sDrive20iA 170ch',
                        'sDrive20iA 178ch',
                        'xDrive20dA 190ch'
                    ]
                ],
                [
                    'name' => 'X3',
                    'versions' => [
                        'Business Design',
                        'Confort',
                        'Excellium',
                        'Exclusive',
                        'M sport',
                        ' Pack Sport M',
                        'Premium',
                        'Sport',
                        'X3',
                        'X-Line'
                    ],
                    'engines' => [
                        'xDrive20d 190ch',
                        '2.0d',
                        '2.0i',
                        '2.5i',
                        '2.5si',
                        '3.0d',
                        '3.0i',
                        '3.0sd',
                        '3.0si',
                        '3.5d',
                        'M40d 340ch',
                        'M40i 360ch',
                        'sDrive18d',
                        'sDrive 18d 150ch',
                        'sDrive18d 150ch',
                        'xDrive18d',
                        'xDrive20d',
                        'xDrive 20d 190ch',
                        'xDrive20i',
                        ' xDrive20i 184ch ',
                        'xDrive25i',
                        'xDrive28i',
                        'xDrive30d',
                        'xDrive30d 286ch',
                        'xDrive30i',
                        'xDrive35d',
                        'xDrive35i'
                    ]
                ],
                [
                    'name' => 'X4',
                    'versions' => [
                        'M performance',
                        'M Sport',
                        'M sport',
                        'X4',
                        'X-Line',
                        'Xline'
                    ],
                    'engines' => [
                        'M40d 340ch',
                        'M40i 360ch ',
                        'xDrive 20d 190ch',
                        'xDrive20d 190ch',
                        'xDrive30d 286ch',
                        'xDrive30i 245ch'
                    ]
                ],
                [
                    'name' => 'X5',
                    'versions' => [
                        'Lounge',
                        'M50i',
                        'M Sport',
                        'M sport',
                        'Pack M',
                        'X5',
                        'Xline'
                    ],
                    'engines' => [
                        '3.0d',
                        '3.0dA',
                        '3.0i',
                        '3.5d',
                        '4.4i',
                        '4.6is',
                        '4.8i',
                        '4.8is',
                        'M',
                        'M50i xDrive 530ch',
                        'xDrive 25d 231ch',
                        'xDrive30d',
                        'xDrive30d 286ch',
                        'xDrive30d 298ch',
                        'xDrive30i',
                        'xDrive35d',
                        'xDrive35i',
                        'xDrive40d',
                        'xDrive40d 340ch',
                        'xDrive48i',
                        'xDrive50i',
                        'xDrive M50d'
                    ]
                ],
                [
                    'name' => 'X6',
                    'versions' => [
                        'Lounge',
                        'M performance',
                        'M Sport ',
                        'M sport',
                        'Sport ',
                        'X6'
                    ],
                    'engines' => [
                        '3.0d',
                        '3.0i',
                        '3.5d',
                        '5.0i',
                        'ActiveHybrid',
                        'M',
                        'M50iA 530ch',
                        'M60iA xDrive 530ch',
                        'xDrive30d',
                        'xDrive 30d 258ch',
                        'xDrive 30dA 286ch',
                        'xDrive 30dA 298ch',
                        'xDrive35d',
                        'xDrive35i',
                        'xDrive40d',
                        'xDrive 40dA 340ch',
                        'xDrive50i',
                        'xDrive M50d'
                    ]
                ],
                [
                    'name' => 'Z1',
                    'versions' => [
                        'Z1'
                    ],
                    'engines' => [
                        '2.5e'
                    ]
                ],
                [
                    'name' => 'Z3',
                    'versions' => [
                        'Z3'
                    ],
                    'engines' => [
                        '1.8',
                        '1.9',
                        '2.8',
                        '3.0'
                    ]
                ],
                [
                    'name' => 'Z3 coupé',
                    'versions' => [
                        'Z3 coupé'
                    ],
                    'engines' => [
                        '2.8e'
                    ]
                ],
                [
                    'name' => 'Z4',
                    'versions' => [
                        'Z4'
                    ],
                    'engines' => [
                        '2.5i'
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
