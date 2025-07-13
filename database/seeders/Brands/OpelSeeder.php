<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class OpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Opel',
            'models' => [
                [
                    'name' => 'Adam',
                    'versions' => [
                        'Adam',
                        'Glam',
                        'Jam',
                        'Rocks'
                    ],
                    'engines' => [
                        '1.2 ess 16V 100ch',
                        '1.2 ess 70ch',
                        '1.2 ess 87ch Ecoflex',
                        '1.4 ess 100ch',
                        '1.4 ess 100ch Twinport'
                    ]
                ],
                [
                    'name' => 'Agila',
                    'versions' => [
                        'Agila'
                    ],
                    'engines' => [
                        '1.0 ess 60ch',
                        '1.0 ess 65ch',
                        '1.0 ess 65ch Ecoflex',
                        '1.0 ess 68ch',
                        '1.0 ess 68ch Ecoflex',
                        '1.2 ess 16V 80ch',
                        '1.2 ess 86ch',
                        '1.2 ess 94ch',
                        '1.3 CDTI 70ch',
                        '1.3 CDTI 75ch Ecoflex'
                    ]
                ],
                [
                    'name' => 'Ampera',
                    'versions' => [
                        'Ampera'
                    ],
                    'engines' => [
                        '1.4  86ch Hybrid'
                    ]
                ],
                [
                    'name' => 'Antara',
                    'versions' => [
                        'Antara'
                    ],
                    'engines' => [
                        '2.0 CDTI 127ch',
                        '2.0 CDTI 150ch',
                        '2.2 CTDI 163ch',
                        '2.2 CTDI 4X4 184ch',
                        '2.4 ess 140ch',
                        '2.4 ess 167ch Ecotec',
                        '3.2 ess V6 227ch',
                        '3.2 ess V6 4X4 227ch'
                    ]
                ],
                [
                    'name' => 'Ascona',
                    'versions' => [
                        'Ascona'
                    ],
                    'engines' => [
                        '1.2 ess 60ch',
                        '1.3 ess 60ch',
                        '1.3 ess 75ch',
                        '1.6 D 54ch',
                        '1.6 ess 75ch',
                        '1.6 ess 80ch',
                        '1.6 ess 90ch',
                        '1.8 CTI 115ch',
                        '1.9 ess 90ch',
                        '2.0 CTI 115ch',
                        '2.0 D 58ch',
                        '2.0 ess 100ch'
                    ]
                ],
                [
                    'name' => 'Astra',
                    'versions' => [
                        'Astra',
                        'COSMO',
                        'Enjoy',
                        'H',
                        'SPORT'
                    ],
                    'engines' => [
                        '1.3 CDTI 90ch',
                        '1.3 CDTI 95ch',
                        '1.3 CDTI 95ch Ecoflex',
                        '1.4 ess 100ch',
                        '1.4 ess 16V 90ch',
                        '1.4 ess 60ch',
                        '1.4 ess 82ch',
                        '1.4 ess 90ch',
                        '1.4 ess Turbo 120ch',
                        '1.4 ess Turbo 140ch',
                        '1.4 ess Turbo 142ch',
                        '1.6 ess 100ch',
                        '1.6 ess 115ch',
                        '1.6 ess 16V 100ch',
                        '1.6 ess Turbo 180ch',
                        '1.7 CDTI 100ch',
                        '1.7 CDTI 110ch',
                        '1.7 CDTI 110ch Ecoflex',
                        '1.7 CDTI 125ch',
                        '1.7 CDTI 130ch Ecoflex',
                        '1.7 CDTI 80ch',
                        '1.7 D 57ch',
                        '1.7 D 60ch',
                        '1.7 DTI 16V 75ch',
                        '1.7 TD 68ch',
                        '1.7 TD 82ch',
                        '1.8 ess 125ch',
                        '1.8 ess 140ch',
                        '1.8 ess 16V 115ch',
                        '1.8 ess 16V 115ch BVA',
                        '1.8 GSI 16V 125ch',
                        '1.9 CDTI 120ch',
                        '1.9 CDTI 150ch',
                        '2.0 CDTI 130ch',
                        '2.0 CDTI 130ch BVA',
                        '2.0 CDTI 160ch',
                        '2.0 CDTI 165ch BVA',
                        '2.0 D 16V 82ch',
                        '2.0 DTI 16V 100ch',
                        '2.0 ess 160ch',
                        '2.0 ess 16V 136ch',
                        '2.0 ess 170ch',
                        '2.0 ess 200ch',
                        '2.0 GSI 115ch',
                        '2.0 GSI 16V 150ch'
                    ]
                ],
                [
                    'name' => 'Astra 4 portes',
                    'versions' => [
                        'Astra 4 portes',
                        'Cosmo',
                        'Enjoy'
                    ],
                    'engines' => [
                        '1.6 Ess 115 ch',
                        '1.7 CDTI 130 ch',
                        '1.7 CDTI 130 ch BVA'
                    ]
                ],
                [
                    'name' => 'Astra cabriolet',
                    'versions' => [
                        'Astra cabriolet'
                    ],
                    'engines' => [
                        '1.6 ess 105ch',
                        '1.6 ess 115ch',
                        '1.6 ess 16V 100ch',
                        '1.6 ess Turbo 180ch',
                        '1.8 ess 140ch',
                        '1.8 ess 16V 115ch',
                        '1.9 CDTI 150ch',
                        '2.0 ess 115ch',
                        '2.0 ess Turbo 200ch',
                        '2.2 ess 16V 147ch'
                    ]
                ],
                [
                    'name' => 'Astra GTC',
                    'versions' => [
                        'Astra GTC'
                    ],
                    'engines' => [
                        '1.4 ess 90ch',
                        '1.4 ess Turbo 120ch',
                        '1.4 ess Turbo 140ch',
                        '1.6 ess 180ch',
                        '1.6 ess Turbo 180ch',
                        '1.7 CDTI 100ch',
                        '1.8 ess 125ch BVA',
                        '1.8 ess 140ch',
                        '1.8 ess 16V 115ch',
                        '2.0 CDTI 165ch',
                        '2.0 CTDI 165ch',
                        '2.0 ess 170ch',
                        '2.0 ess 200ch',
                        '2.0 ess 240ch',
                        '2.0 ess 280ch',
                        '2.0 ess Turbo 190ch',
                        '2.2 ess 16V 147ch'
                    ]
                ],
                [
                    'name' => 'Astra Sports Tourer',
                    'versions' => [
                        'Astra Sports Tourer'
                    ],
                    'engines' => [
                        '1.3 CDTI 95ch Ecoflex',
                        '1.4 ess 100ch',
                        '1.4 ess Turbo 120ch',
                        '1.4 ess Turbo 1420ch',
                        '1.7 CDTI 110ch',
                        '1.7 CDTI 125ch',
                        '2.0 CDTI 160ch'
                    ]
                ],
                [
                    'name' => 'Calibra',
                    'versions' => [
                        'Calibra'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.0 ess 16V 136ch',
                        '2.0 ess 16V 150ch',
                        '2.0 ess 16V 4X4 150ch',
                        '2.0 ess Turbo 4X4 204ch',
                        '2.5 ess V6 170ch'
                    ]
                ],
                [
                    'name' => 'Commodore',
                    'versions' => [
                        'Commodore'
                    ],
                    'engines' => [
                        '2.5 ess 115ch',
                        '2.5 ess 120ch',
                        '2.5 ess 130ch',
                        '2.5 ess 150ch',
                        '2.8 ess 130ch',
                        '2.8 ess 142ch',
                        '2.8 ess 145ch',
                        '2.8 ess 160ch'
                    ]
                ],
                [
                    'name' => 'Corsa',
                    'versions' => [
                        'Color Edition',
                        'Corsa',
                        'Cosmo',
                        'Dynamic',
                        'Enjoy',
                        'Enjoy Limited',
                        'Enjoy Pack'
                    ],
                    'engines' => [
                        '1.0  65ch',
                        '1.0 ess 12V 55ch',
                        '1.0 ess 12V 58ch',
                        '1.0 ess 45ch',
                        '1.2 ess 16V 75ch',
                        '1.2 ess 45ch',
                        '1.2 ess 55ch',
                        '1.2 ess 70ch',
                        '1.2 ess 80ch',
                        '1.2 ess 85ch',
                        '1.2 GPL 75ch',
                        '1.2 GPL 83ch',
                        '1.3 CDTI 70ch',
                        '1.3 CDTI 75ch',
                        '1.3 CDTI 75ch Ecoflex',
                        '1.3 CDTI 90ch',
                        '1.3 CDTI 90ch Ecoflex',
                        '1.3 CDTI 95ch Ecoflex',
                        '1.3 D 90ch Ecoflex',
                        '1.3 ess 70ch',
                        '1.3 GT 70ch',
                        '1.4 ess 100ch',
                        '1.4 ess 16V 90ch',
                        '1.4 ess 60ch',
                        '1.4 ess 75ch',
                        '1.4 ess 82ch',
                        '1.4 ess 90ch',
                        '1.4 ess 90ch BVA',
                        '1.5 D 50ch',
                        '1.5 TD 67ch',
                        '1.6 ess 192ch',
                        '1.6 ess Turbo 192ch',
                        '1.6 GSI 100ch',
                        '1.6 GSI 150ch',
                        '1.6 GSI 16V 109ch',
                        '1.7 CDTI 100ch',
                        '1.7 CDTI 125ch',
                        '1.7 CDTI 130ch',
                        '1.7 D 16V 65ch',
                        '1.7 D 60ch',
                        '1.7 DTI 16V 75ch',
                        '1.8 ess 16V 125ch'
                    ]
                ],
                [
                    'name' => 'Crossland',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'Diplomat',
                    'versions' => [
                        'Diplomat'
                    ],
                    'engines' => [
                        '2.8 ess 165ch',
                        '4.6 ess V8 190ch',
                        '5.4 ess V8 230ch'
                    ]
                ],
                [
                    'name' => 'Frontera Court',
                    'versions' => [
                        'Frontera Court'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.2 DTI 16V 115ch',
                        '2.5 TD 115ch',
                        '2.8 TDI 113ch'
                    ]
                ],
                [
                    'name' => 'Frontera Long',
                    'versions' => [
                        'Frontera Long'
                    ],
                    'engines' => [
                        '2.2 DTI 16V 115ch',
                        '2.2 ess 16V 136ch',
                        '2.3 TD 100ch',
                        '2.4 ess 125ch',
                        '2.5 TD 115ch',
                        '2.8 TDI 113ch',
                        '3.2 ess V6 205ch BVA'
                    ]
                ],
                [
                    'name' => 'GrandLand',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'GRANDLAND ',
                    'versions' => [
                        'GS Line '
                    ],
                    'engines' => [
                        '1.6 ess Turbo  165 ch'
                    ]
                ],
                [
                    'name' => 'GT',
                    'versions' => [
                        'GT'
                    ],
                    'engines' => [
                        '2.0 ess 264ch',
                        '2.0 ess Turbo 264ch'
                    ]
                ],
                [
                    'name' => 'Insignia',
                    'versions' => [
                        'Cosmo',
                        'Cosmo Prémium',
                        'Exclusive',
                        'Insignia',
                        'OPC'
                    ],
                    'engines' => [
                        '1.4 ess Turbo 140ch',
                        '1.6 ess 115ch',
                        '1.6 ess 115ch Ecotec',
                        '1.6 ess Turbo 180ch',
                        '1.6 ess Turbo 220ch',
                        '1.8 ess 140ch',
                        '2.0 CDTI 110ch',
                        '2.0 CDTI 130ch',
                        '2.0 CDTI 130ch BVA',
                        '2.0 CDTI 130ch Ecoflex',
                        '2.0 CDTI 160ch',
                        '2.0 CDTI 160ch BVA',
                        '2.0 CDTI 160ch Ecoflex',
                        '2.0 CDTI 195ch',
                        '2.0 CDTI 4X4 160ch',
                        '2.0 CDTI 4X4 195ch',
                        '2.0 ess Turbo 220ch',
                        '2.8 ess 325ch',
                        '2.8 ess Turbo V6 260ch'
                    ]
                ],
                [
                    'name' => 'Insignia Sports Tourer',
                    'versions' => [
                        'Insignia Sports Tourer'
                    ],
                    'engines' => [
                        '1.4 ess Turbo 140ch',
                        '1.6 ess Turbo 180ch',
                        '1.6 ess Turbo 220ch',
                        '2.0 CDTI 110ch',
                        '2.0 CDTI 130ch',
                        '2.0 CDTI 160ch Ecoflex',
                        '2.0 CDTI 195ch',
                        '2.0 CDTI 4X4 195ch',
                        '2.8 ess 325ch',
                        '2.8 ess Turbo V6 260ch'
                    ]
                ],
                [
                    'name' => 'Kadett',
                    'versions' => [
                        'Kadett'
                    ],
                    'engines' => [
                        '1.2 ess 53ch',
                        '1.2 ess 55ch',
                        '1.2 ess 60ch',
                        '1.3 ess 75ch',
                        '1.4 ess 75ch',
                        '1.5 TD 72ch',
                        '1.6 D 54ch',
                        '1.6 ess 75ch',
                        '1.6 ess 82ch',
                        '1.6 ess 90ch',
                        '1.7 D 57ch',
                        '1.8 ess 112ch',
                        '1.8 GSI 115ch',
                        '1.9 ess 105ch',
                        '1.9 ess 90ch',
                        '2.0 GSI 115ch',
                        '2.0 GSI 130ch',
                        '2.0 GSI 16V 150ch',
                        '2.0 GSI 16V 156ch'
                    ]
                ],
                [
                    'name' => 'Manta',
                    'versions' => [
                        'Manta'
                    ],
                    'engines' => [
                        '1.2 ess 60ch',
                        '1.3 ess 60ch',
                        '1.3 ess 75ch',
                        '1.6 ess 68ch',
                        '1.6 ess 75ch',
                        '1.6 ess 80ch',
                        '1.8 ess 90ch',
                        '1.9 ess 105ch',
                        '1.9 ess 90ch',
                        '2.0 ess 100ch',
                        '2.0 ess 110ch',
                        '2.0 GSI 110ch',
                        '2.8 ess 142ch'
                    ]
                ],
                [
                    'name' => 'Meriva',
                    'versions' => [
                        'Meriva'
                    ],
                    'engines' => [
                        '1.3 CDTI 75ch',
                        '1.3 CDTI 75ch Ecoflex',
                        '1.3 CDTI 95ch Ecoflex',
                        '1.4 ess 100ch',
                        '1.4 ess 90ch',
                        '1.4 ess Turbo 120ch',
                        '1.4 ess Turbo 140ch',
                        '1.6 ess 105ch',
                        '1.6 ess 16V 100ch',
                        '1.6 ess 180ch',
                        '1.7 CDTI 100ch',
                        '1.7 CDTI 110ch Ecoflex',
                        '1.7 CDTI 125ch',
                        '1.7 CDTI 130ch Ecoflex',
                        '1.7 DTI 100ch BVA',
                        '1.8 ess 125ch',
                        '1.8 ess 16V 125ch'
                    ]
                ],
                [
                    'name' => 'Mokka',
                    'versions' => [
                        'Elegance',
                        'GS Line',
                        'Mokka'
                    ],
                    'engines' => [
                        '1.2 ess PureTech Turbo 130ch',
                        '1.4 ess Turbo 140ch Ecotec',
                        '1.6 ess 115ch Ecotec',
                        '1.7 CDTI 130ch Ecoflex'
                    ]
                ],
                [
                    'name' => 'Monza',
                    'versions' => [
                        'Monza'
                    ],
                    'engines' => [
                        '3.0 ess 180ch'
                    ]
                ],
                [
                    'name' => 'Nouvelle Astra',
                    'versions' => [
                        'Elegance',
                        'GS Line',
                        'Nouvelle Astra'
                    ],
                    'engines' => [
                        '1.2 ess PureTech Turbo 130ch',
                        '1.4 Turbo 150 ch'
                    ]
                ],
                [
                    'name' => 'Omega',
                    'versions' => [
                        'Omega'
                    ],
                    'engines' => [
                        '1.8 ess 115ch',
                        '1.8 ess 90ch',
                        '2.0 DTI 16V 100ch',
                        '2.0 ess 115ch',
                        '2.0 ess 122ch',
                        '2.0 ess 16V 136ch',
                        '2.2 DTI 16V 120ch',
                        '2.2 ess 16V 144ch',
                        '2.3 D 100ch',
                        '2.3 D 73ch',
                        '2.3 TD 90ch',
                        '2.4 ess 125ch',
                        '2.5 DTI 150ch',
                        '2.5 ess V6 170ch',
                        '2.5 GPL V6 170ch',
                        '2.5 TD 130ch',
                        '2.6 ess 150ch',
                        '3.0 ess 177ch',
                        '3.0 ess 204ch',
                        '3.0 ess V6 211ch BVA',
                        '3.2 ess V6 218ch'
                    ]
                ],
                [
                    'name' => 'Rekord',
                    'versions' => [
                        'Rekord'
                    ],
                    'engines' => [
                        '1.5 ess 58ch',
                        '1.7 ess 60ch',
                        '1.7 ess 66ch',
                        '1.7 ess 68ch',
                        '1.7 ess 75ch',
                        '1.7 ess 83ch',
                        '1.8 ess 90ch',
                        '1.9 ess 75ch',
                        '1.9 ess 90ch',
                        '1.9 ess 97ch',
                        '2.0 ess 100ch',
                        '2.0 ess 110ch',
                        '2.1 D 60ch',
                        '2.2 CTI 115ch',
                        '2.3 D 65ch',
                        '2.3 D 70ch',
                        '2.3 TD 86ch'
                    ]
                ],
                [
                    'name' => 'Senator',
                    'versions' => [
                        'Senator'
                    ],
                    'engines' => [
                        '2.2 ess 115ch',
                        '2.3 TD 86ch',
                        '2.5 ess 136ch',
                        '3.0 ess 177ch',
                        '3.0 ess 180ch',
                        '3.0 ess 204ch'
                    ]
                ],
                [
                    'name' => 'Signum',
                    'versions' => [
                        'Signum'
                    ],
                    'engines' => [
                        '1.9 CDTI 120ch',
                        '1.9 CDTI 150ch',
                        '2.2 DTI 16V 125ch',
                        '2.2 ess 155ch',
                        '2.8 ess Turbo V6 230ch',
                        '3.0 CDTI 177ch',
                        '3.0 CTDI V6 184ch'
                    ]
                ],
                [
                    'name' => 'Sintra',
                    'versions' => [
                        'Sintra'
                    ],
                    'engines' => [
                        '2.2 ess 16V 141ch',
                        '3.0 ess 201ch'
                    ]
                ],
                [
                    'name' => 'Speedster',
                    'versions' => [
                        'Speedster'
                    ],
                    'engines' => [
                        '2.0 ess Turbo 200ch',
                        '2.2 ess 16V 147ch'
                    ]
                ],
                [
                    'name' => 'Tigra',
                    'versions' => [
                        'Tigra'
                    ],
                    'engines' => [
                        '1.3 CDTI 70ch',
                        '1.4 ess 90ch',
                        '1.6 ess 106ch',
                        '1.8 ess 125ch'
                    ]
                ],
                [
                    'name' => 'Tigra TwinTop',
                    'versions' => [
                        'Tigra TwinTop'
                    ],
                    'engines' => [
                        '1.8 ess 125ch'
                    ]
                ],
                [
                    'name' => 'Vectra',
                    'versions' => [
                        'Vectra'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.6 ess 16V 100ch',
                        '1.6 ess 75ch',
                        '1.6 ess 82ch',
                        '1.7 D 57ch',
                        '1.7 TD 82ch',
                        '1.8 ess 140ch',
                        '1.8 ess 16V 115ch',
                        '1.9 CDTI 100ch',
                        '1.9 CDTI 120ch',
                        '1.9 CDTI 150ch',
                        '2.0 D 16V 82ch',
                        '2.0 DTI 16V 100ch',
                        '2.0 ess 115ch',
                        '2.0 ess 115ch BVA',
                        '2.0 ess 16V 136ch',
                        '2.0 ess 16V 150ch',
                        '2.0 ess 16V 4X4 150ch',
                        '2.0 ess 4X4 130ch',
                        '2.0 ess Turbo 4X4 204ch',
                        '2.0 GT 130ch',
                        '2.0 GT 16V 150ch',
                        '2.0 GTS 175ch',
                        '2.2 DTI 16V 125ch',
                        '2.2 ess 155ch',
                        '2.2 ess 16V 147ch',
                        '2.5 ess V6 170ch',
                        '2.5 ess V6 170ch BVA',
                        '2.8 ess 255ch',
                        '2.8 ess 280ch',
                        '3.0 CDTI 177ch',
                        '3.0 CDTI 184ch',
                        '3.0 CDTI V6 184ch',
                        '3.2 GTS V6 211ch'
                    ]
                ],
                [
                    'name' => 'Zafira',
                    'versions' => [
                        'Zafira'
                    ],
                    'engines' => [
                        '1.6 ess 115ch',
                        '1.6 GPL 95ch',
                        '1.7 CDTI 110ch',
                        '1.7 CDTI 125ch',
                        '1.8 ess 140ch',
                        '1.9 CDTI 100ch',
                        '1.9 CDTI 125ch',
                        '1.9 CDTI 125ch BVA',
                        '1.9 CDTI 150ch',
                        '2.0 D 16V 82ch',
                        '2.0 DTI 16V 100ch',
                        '2.0 ess 192ch',
                        '2.0 ess 240ch',
                        '2.0 ess Turbo 200ch',
                        '2.2 DTI 16V 125ch',
                        '2.2 ess 150ch'
                    ]
                ],
                [
                    'name' => 'Zafira Tourer',
                    'versions' => [
                        'Zafira Tourer'
                    ],
                    'engines' => [
                        '1.4 ess Turbo 120ch Ecoflex',
                        '1.4 ess Turbo 140ch Ecoflex',
                        '2.0 CDTI 110ch',
                        '2.0 CDTI 110ch Ecotec',
                        '2.0 CDTI 130ch Ecoflex',
                        '2.0 CDTI 165ch Ecoflex'
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
