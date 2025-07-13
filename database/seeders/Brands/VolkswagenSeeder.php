<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class VolkswagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Volkswagen',
            'models' => [
                [
                    'name' => 'Amarok',
                    'versions' => [
                        'Amarok',
                        'Aventura',
                        'Confortline',
                        'HighLine',
                        'HighLine Plus',
                        'Life',
                        'Panamerica',
                        'Profit',
                        'Style',
                        'TrendLine'
                    ],
                    'engines' => [
                        '2.0 TDI 122ch',
                        '2.0 TDI 140ch 4x2',
                        '2.0 TDI 140ch 4x4',
                        '2.0 TDI 150ch',
                        '2.0 TDI 163ch',
                        '2.0 TDI 180ch 4x4',
                        '2.0 TDI 180ch 4x4 BVA',
                        '2.0 TDI 4MOTION 122ch',
                        '2.0 TDI 4MOTION 163ch',
                        '2.0 TDI 4MOTION 180ch',
                        '2.3 TSI 298ch',
                        '3.0 TDI V6 237ch',
                        '3.0 V6 TDI 247ch',
                        ' 2.0 TDI 170ch',
                        ' 2.0 TDI 205ch'
                    ]
                ],
                [
                    'name' => 'Bora',
                    'versions' => [
                        'Bora',
                        'Premium'
                    ],
                    'engines' => [
                        '1.2 TSI 116ch',
                        '1.5 MPI 116ch',
                        '1.5 TSI 150ch',
                        '1.6 ess 102ch BVA',
                        '1.6 ess 16V 105ch',
                        '1.8 ess 150ch',
                        '1.9 TDI 100ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 115ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 4MOTION 115ch',
                        '2.3 ess V5 170ch'
                    ]
                ],
                [
                    'name' => 'Caddy',
                    'versions' => [
                        'Alltrack',
                        'Beach',
                        'Beach Maxi',
                        'Business',
                        'Business Line',
                        'Caddy',
                        'Caddy Maxi',
                        'CARAT',
                        'Collection',
                        'Combi ',
                        'Combi Startline',
                        'Comfort',
                        'Comfortline',
                        'Conceptline ',
                        'Confortline',
                        'Confortline Maxi',
                        'Cross',
                        'Cup',
                        'Dark Label ',
                        'Dark Label Maxi',
                        'Edition',
                        'Edition 30 ',
                        'Edition 35',
                        'Edition  Maxi',
                        'Fourgon',
                        'Goal ',
                        'Goal Maxi',
                        'Highline',
                        'Life',
                        'Life Maxi',
                        'Maxi',
                        'Pan America',
                        'Pan America Maxi',
                        'Profit Plus',
                        'Proline',
                        'Sportline ',
                        'START+',
                        'Style',
                        'Style Maxi',
                        'Trendline',
                        'Trendline Maxi',
                        'Trendline Plus'
                    ],
                    'engines' => [
                        '1.0 TSI 102ch',
                        '1.2 TSI 85ch',
                        '1.4 ess 80ch',
                        '1.4 TSI 130ch ',
                        '1.5 TSI 116ch',
                        '1.6 ess 102ch',
                        '1.6 TDi 102ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 75ch',
                        '2.0  109ch',
                        '2.0 TDI 102 ch',
                        '2.0 TDI 102ch',
                        '2.0 TDi 110ch',
                        '2.0 TDI 122ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 150ch',
                        '2.0 TDI 74ch',
                        'TDI 102ch DSG',
                        'TDI 75ch',
                        'TSI 105ch'
                    ]
                ],
                [
                    'name' => 'Coccinelle',
                    'versions' => [
                        'Coccinelle'
                    ],
                    'engines' => [
                        '1.2 ess 34ch',
                        '1.3 ess 44ch',
                        '1.6 ess 50ch'
                    ]
                ],
                [
                    'name' => 'Corrado',
                    'versions' => [
                        'Corrado'
                    ],
                    'engines' => [
                        '1.8 ess 160ch',
                        '1.8 ess 16V 136ch',
                        '2.0 ess 115ch',
                        '2.9 VR6 190ch'
                    ]
                ],
                [
                    'name' => 'Crafter',
                    'versions' => [
                        'Chassis court',
                        'Crafter',
                        'Surélevé chassis long',
                        'Surélevé chassis moyen'
                    ],
                    'engines' => [
                        '2.0 TDI 109ch'
                    ]
                ],
                [
                    'name' => 'Derby',
                    'versions' => [
                        'Derby'
                    ],
                    'engines' => [
                        '1.1 ess 40ch',
                        '1.3 ess 75ch'
                    ]
                ],
                [
                    'name' => 'Eos',
                    'versions' => [
                        'Eos'
                    ],
                    'engines' => [
                        '1.4 TSI 122ch',
                        '1.4 TSI 160ch',
                        '1.6 FSI 115ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TFSI 200ch',
                        '2.0 TFSI 210ch',
                        '2.0 TFSI 210ch DSG',
                        '2.0 TSI 210ch',
                        '3.2 FSI V6 250ch',
                        '3.2 FSI V6 250ch DSG',
                        '3.6 FSI V6 260ch DSG'
                    ]
                ],
                [
                    'name' => 'Fox',
                    'versions' => [
                        'Fox'
                    ],
                    'engines' => [
                        '1.2 ess 55ch',
                        '1.4 ess 75ch',
                        '1.4 TDI 70ch'
                    ]
                ],
                [
                    'name' => 'Fox Cross',
                    'versions' => [
                        'Fox Cross'
                    ],
                    'engines' => [
                        '1.2 ess 55ch',
                        '1.4 ess 75ch',
                        '1.4 TDI 1ch'
                    ]
                ],
                [
                    'name' => 'Gol',
                    'versions' => [
                        'Gol'
                    ],
                    'engines' => [
                        '1.6 ess',
                        '1.9D',
                        '1.9 SD'
                    ]
                ],
                [
                    'name' => 'Golf 1',
                    'versions' => [
                        'Golf 1'
                    ],
                    'engines' => [
                        '1.6 GTI 110ch',
                        '1.6 GTI 136ch',
                        '1.8 GTI 112ch'
                    ]
                ],
                [
                    'name' => 'Golf 2',
                    'versions' => [
                        'Golf 2'
                    ],
                    'engines' => [
                        '1.3 ess 55ch',
                        '1.6 D 54ch',
                        '1.6 ess 75ch',
                        '1.6 TD 60ch',
                        '1.6 TD 70ch',
                        '1.6 TD 80ch',
                        '1.8 ess 160ch',
                        '1.8 ess 210ch',
                        '1.8 ess 90ch',
                        '1.8 ess 98ch',
                        '1.8 GTI 112ch',
                        '1.8 GTI 139ch',
                        '1.8 GTI 160ch'
                    ]
                ],
                [
                    'name' => 'Golf 3',
                    'versions' => [
                        'Golf 3'
                    ],
                    'engines' => [
                        '1.4 ess 60ch',
                        '1.6 ess 75ch',
                        '1.8 ess 75ch',
                        '1.8 ess 90ch',
                        '1.8 ess 90ch BVA',
                        '1.9 D 64ch',
                        '1.9 TD 75ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 115ch',
                        '2.0 ess 115ch BVA',
                        '2.0 GTI 115ch',
                        '2.0 GTI 150ch',
                        '2.8 VR6 174ch',
                        '2.9 VR6 190ch'
                    ]
                ],
                [
                    'name' => 'Golf 4',
                    'versions' => [
                        'Golf 4',
                        'Match',
                        'R32'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.6 ess 100ch',
                        '1.6 ess 105ch',
                        '1.8 ess 125ch',
                        '1.8 GTI 150ch',
                        '1.8 GTI 180ch',
                        '1.9 SDI 68ch',
                        '1.9 TDI 100ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 115ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 150ch',
                        '1.9 TDI 90ch',
                        '2.3 ess V5 150ch',
                        '2.3 ess V5 170ch',
                        '2.8 ess V6 204ch'
                    ]
                ],
                [
                    'name' => 'Golf 5',
                    'versions' => [
                        'Carat',
                        'Edition 30',
                        'Golf 5',
                        'GTI',
                        'R32',
                        'R-Line'
                    ],
                    'engines' => [
                        '1.4 ess 80ch',
                        '1.4 GT 170ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI 122ch DSG',
                        '1.4 TSI 140ch',
                        '1.4 TSI 160ch',
                        '1.4 TSI 160ch DSG',
                        '1.4 TSI 170ch',
                        '1.6 ess 102ch',
                        '1.6 FSI 115ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 105ch DSG',
                        '1.9 TDI 90ch',
                        '2.0 ess 270ch',
                        '2.0 FSI 150ch',
                        '2.0 GT 170ch',
                        '2.0 GTI 200ch',
                        '2.0 GTI 210ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 136ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 170ch',
                        '3.2 ess 250ch R32'
                    ]
                ],
                [
                    'name' => 'Golf 6',
                    'versions' => [
                        'Carat',
                        'Edition 35',
                        'Golf 6',
                        'GTD',
                        'GTI',
                        'Match',
                        'Move',
                        'R20',
                        'R Line',
                        'Sport Line',
                        'Style',
                        'Team',
                        'Trendline'
                    ],
                    'engines' => [
                        '1.4 TSI 122ch',
                        '1.4 TSI 160ch',
                        '1.6 ess 102ch',
                        '1.6 TDI 105ch',
                        '2.0 GT 170ch',
                        '2.0 GTI 210ch',
                        '2.0 GTI 235ch Edition 35',
                        '2.0 TDI 110ch',
                        '2.0 TDI 140ch',
                        '2.0 TSI 270ch DSG6 R20'
                    ]
                ],
                [
                    'name' => 'Golf 7',
                    'versions' => [
                        'Carat',
                        'Confortline',
                        'Cup',
                        'Golf 7',
                        'GTD',
                        'GTI',
                        'Highline',
                        'JOIN',
                        'R',
                        'R-Line',
                        'Sport R Edition',
                        'START+',
                        'Trendline +'
                    ],
                    'engines' => [
                        '2.0 TDI 110ch',
                        '2.0 TDI 110ch DSG',
                        '2.0 TDi 143ch',
                        '2.0 TDI 143ch DSG',
                        '2.0 TDI 177ch DSG6',
                        '2.0 TDI 184ch DSG',
                        '2.0 TSI 220ch',
                        '2.0 TSI 300ch',
                        '2.0 TSI 300ch DSG',
                        '2.0 TSI 310ch DSG'
                    ]
                ],
                [
                    'name' => 'Golf 8',
                    'versions' => [
                        'Active',
                        'Edition',
                        'Edition 50',
                        'Edition 75',
                        'GTD',
                        'GTE',
                        'GTI',
                        'GTI Clubsport',
                        'Life Plus',
                        'MATCH',
                        'Pro R-line',
                        'R',
                        'R 20 Years Edition',
                        'R 333 ',
                        'R Black Edition ',
                        'R-Line',
                        'R-Line 50 Years Legend Edition ',
                        'Style'
                    ],
                    'engines' => [
                        '1.0 eTSI 110 ch',
                        '1.0 TSI 110 ch',
                        '1.0 TSI 90 ch',
                        '1.4 eHybrid 204 ch',
                        '1.4 eHybrid 245 ch ',
                        '1.4 TSI 150 ch',
                        '1.5 eTSI 130 ch',
                        '1.5 eTSI 150 ch',
                        '1.5 TSI 115 ch',
                        '1.5 TSI 130 ch',
                        '1.5 TSI 150 ch',
                        '1.5 TSI 160 ch',
                        '2.0 TDI 115 ch',
                        '2.0 TDI 115 ch',
                        '2.0 TDI 150 ch',
                        '2.0 TSI 190 ch',
                        '2.0 TSI 220 ch',
                        '2.0 TSI 245 ch',
                        '2.0 TSI 300 ch',
                        '2.0 TSI 320 ch',
                        '2.0 TSI 330 ch',
                        '2.0 TSI 333 ch'
                    ]
                ],
                [
                    'name' => 'Golf Cabriolet',
                    'versions' => [
                        'Golf Cabriolet'
                    ],
                    'engines' => [
                        '1.2 TSI 105ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI 160ch',
                        '1.6 TDI 105ch',
                        '2.0 TDI 140ch',
                        '2.0 TFSI 210ch'
                    ]
                ],
                [
                    'name' => 'Golf Plus',
                    'versions' => [
                        'Golf Plus'
                    ],
                    'engines' => [
                        '1.4 ess 80ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI 122ch DSG',
                        '1.4 TSI 140ch',
                        '1.6 ess 102ch',
                        '1.6 FSI 115ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 105ch DSG',
                        '1.6 TDI 90ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 90ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 136ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG'
                    ]
                ],
                [
                    'name' => 'Jetta',
                    'versions' => [
                        'Carat',
                        'Classic ',
                        'Confortline',
                        'Jetta',
                        'Life',
                        'Trendline'
                    ],
                    'engines' => [
                        '1.1 ess 50ch',
                        '1.2 TSI 105ch',
                        '1.3 ess 55ch',
                        '1.3 ess 60ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI 140ch',
                        '1.5 ess 70ch',
                        '1.6 D 54ch',
                        '1.6 ess 105ch',
                        '1.6 ess 110ch',
                        '1.6 ess 75ch',
                        '1.6 ess 85ch',
                        '1.6 FSI 115ch',
                        '1.6 TD 70ch',
                        '1.6 TDI 105ch',
                        '1.8 ess 112ch',
                        '1.8 ess 90ch',
                        '1.8 GT 112ch',
                        '1.8 GT 139ch',
                        '1.9 TDI 105ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 136ch',
                        '2.0 TDI 140ch'
                    ]
                ],
                [
                    'name' => 'K70',
                    'versions' => [
                        'K70'
                    ],
                    'engines' => [
                        '1.6 ess 75ch',
                        '1.6 ess 90ch',
                        '1.8 ess 100ch'
                    ]
                ],
                [
                    'name' => 'Karmann Ghia',
                    'versions' => [
                        'Karmann Ghia'
                    ],
                    'engines' => [
                        '1.2 ess 30ch',
                        '1.2 ess 34ch',
                        '1.3 ess 40ch',
                        '1.5 ess 44ch',
                        '1.6 ess 50ch'
                    ]
                ],
                [
                    'name' => 'Lavida',
                    'versions' => [
                        'Desire',
                        'Edition',
                        'wish '
                    ],
                    'engines' => [
                        '1.5 MPI 110ch'
                    ]
                ],
                [
                    'name' => 'Lupo',
                    'versions' => [
                        'Lupo'
                    ],
                    'engines' => [
                        '1.0 ess 50ch',
                        '1.2 TDI 61ch',
                        '1.4 ess 100ch',
                        '1.4 ess 60ch',
                        '1.4 ess 75ch',
                        '1.4 ess 75ch BVA',
                        '1.4 TDI 75ch',
                        '1.6 GTI 125ch',
                        '1.7 SDI 60ch'
                    ]
                ],
                [
                    'name' => 'Multivan',
                    'versions' => [
                        'Goal ',
                        'Life',
                        'Multivan',
                        'Style'
                    ],
                    'engines' => [
                        '1.5 eHybrid 177ch',
                        '2.0 TDI 102ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 150ch',
                        '2.0 TDI 180ch',
                        '2.0 TSI 204ch'
                    ]
                ],
                [
                    'name' => 'New Beetle',
                    'versions' => [
                        'New Beetle'
                    ],
                    'engines' => [
                        '1.2 TSI 105ch',
                        '1.4 ess 75ch',
                        '1.4 TSI 160ch',
                        '1.6 ess 102ch',
                        '1.6 TDI 105ch',
                        '1.8 ess 150ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 90ch',
                        '2.0 TSI 200ch',
                        '3.2 ess 225ch'
                    ]
                ],
                [
                    'name' => 'New Tiguan',
                    'versions' => [
                        'Business',
                        'Comfort line ',
                        'Comfortline',
                        'Drive ',
                        'Elegance ',
                        'Goal ',
                        'Life',
                        'Life Plus',
                        'MATCH',
                        'New Tiguan',
                        'R',
                        'R-Line',
                        'R-Line',
                        'R-Line Edition',
                        'R-Line Exclusive',
                        'R-Line Premium Edition ',
                        'VW Edition'
                    ],
                    'engines' => [
                        '1.4 eHybrid 245ch',
                        '1.4 PHEV 150ch',
                        '1.4 PHEV 211ch',
                        '1.4 TSI 125ch',
                        '1.4 TSI 150ch',
                        '1.5 eHybrid 204ch',
                        '1.5 eHybrid 272ch',
                        '1.5 TSI 130ch',
                        '1.5 TSI 150ch ',
                        '1.6 TDI 115ch',
                        '2.0 TDI 143ch',
                        '2.0 TDI 143ch DSG7',
                        '2.0 TDI 150ch',
                        '2.0 TDI 177ch',
                        '2.0 TDI 177ch DSG7',
                        '2.0 TDI 190ch',
                        '2.0 TDI 200ch',
                        '2.0 TDI 240ch',
                        '2.0 TSI 180ch',
                        '2.0 TSI 184ch',
                        '2.0 TSI 187ch',
                        '2.0 TSI 190ch',
                        '2.0 TSI 220ch',
                        '2.0 TSI 230ch',
                        '2.0 TSI 245ch',
                        '2.0 TSI 320ch'
                    ]
                ],
                [
                    'name' => 'Passat',
                    'versions' => [
                        'Business',
                        'Carat',
                        'Classic',
                        'Comfortline',
                        'Confort',
                        'Confortline',
                        'Dragon ',
                        'Elegance ',
                        'Elite',
                        'Exclusive',
                        'Executive',
                        'Highline',
                        'Life Plus',
                        'Longteng',
                        'Passat',
                        'R Line'
                    ],
                    'engines' => [
                        '1.3 ess 60ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI 122ch DSG',
                        '1.4 TSI 150ch',
                        '1.5 D 50ch',
                        '1.5 eHybrid 150ch',
                        '1.5 eHybrid 177ch',
                        '1.5 eTSI 150 ',
                        '1.6 D 54ch',
                        '1.6 ess 102ch',
                        '1.6 ess 110ch',
                        '1.6 ess 75ch',
                        '1.6 ess 85ch',
                        '1.6 FSI 115ch',
                        '1.6 TD 70ch',
                        '1.6 TD 80ch',
                        '1.6 TDI 105ch',
                        '1.8 ess 112ch',
                        '1.8 ess 125ch',
                        '1.8 ess 150ch',
                        '1.8 ess 90ch',
                        '1.8 GT 136ch',
                        '1.8 GT 160ch',
                        '1.8 TSI 160ch',
                        '1.8 TSI 160ch DSG',
                        '1.8 TSI 180ch',
                        '1.8 TSI 180ch DSG',
                        '1.9 D 68ch',
                        '1.9 ess 115ch',
                        '1.9 TDI 100ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 115ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 115ch',
                        '2.0 ess 4X4 115ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 122ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 150ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 170ch DSG',
                        '2.0 TDI 177ch DSG6',
                        '2.0 TDI 193ch',
                        '2.0 TFSI 200ch',
                        '2.0 TSI 186ch',
                        '2.0 TSI 200ch',
                        '2.0 TSI 210ch',
                        '2.0 TSI 210ch DSG',
                        '2.0 TSI 220ch',
                        '2.0 TSI 265ch',
                        '2.2 ess 136ch',
                        '2.3 ess 150ch',
                        '2.3 ess V5 170ch',
                        '2.5 TDI V6 150ch',
                        '2.8 ess V6 193ch',
                        '2.8 VR6 174ch',
                        '2.9 VR6 190ch',
                        '3.2 FSI 250ch',
                        '3.2 FSI V6 250ch DSG',
                        '3.2 FSI V6 300ch DSG'
                    ]
                ],
                [
                    'name' => 'Passat CC',
                    'versions' => [
                        'Nouvelle',
                        'Passat CC',
                        'R Line'
                    ],
                    'engines' => [
                        '1.8 TSI 160ch',
                        '1.8 TSI 160ch DSG',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 170ch',
                        '2.0 TDI 170ch DSG',
                        '2.0 TSI 200ch',
                        '2.0 TSI 210ch',
                        '2.0 TSI 210ch DSG',
                        '3.6 ess V6 300ch DSG'
                    ]
                ],
                [
                    'name' => 'Passat SW',
                    'versions' => [
                        'Passat SW'
                    ],
                    'engines' => [
                        '1.4 TSI 122ch',
                        '1.4 TSI 122ch DSG',
                        '1.6 TDI 105ch',
                        '1.8 TSI 160ch',
                        '1.8 TSI 160ch DSG',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 170ch',
                        '2.0 TDI 170ch DSG',
                        '2.0 TSI 210ch',
                        '2.0 TSI 210ch DSG',
                        '3.0 ess V6 300ch DSG',
                        '3.6 ess 300ch'
                    ]
                ],
                [
                    'name' => 'Phaeton',
                    'versions' => [
                        'Phaeton'
                    ],
                    'engines' => [
                        '3.0 TDI V6 233ch',
                        '3.0 TDI V6 240ch',
                        '3.2 ess V6 241ch',
                        '3.6 ess V6 280ch',
                        '4.2 ess V8 335ch',
                        '5.0 TDI V10 313ch',
                        '6.0 ess W12 450ch'
                    ]
                ],
                [
                    'name' => 'Polo',
                    'versions' => [
                        'Active',
                        'Beats',
                        'Black et Silver',
                        'Carat',
                        'Carat Exclusive',
                        'Concept',
                        'Conforline Business',
                        'Confortline',
                        'Connect',
                        'Copper Line',
                        'Edition',
                        'First Edition',
                        'GTI',
                        'GTI Edition 25',
                        'Life',
                        'Life Plus',
                        'Match',
                        'Memphis',
                        'Nouvelle Match II',
                        'Nouvelle Trendline',
                        'Polo',
                        'R-line',
                        'R-Line Exclusive',
                        'Sport',
                        'Start +',
                        'Style',
                        'Team',
                        'TrendLine',
                        'Trendline Business',
                        'United'
                    ],
                    'engines' => [
                        '1.0 ess 60ch',
                        '1.0 MPi 75ch',
                        '1.0 MPI 80 ch',
                        '1.0 TGI 90 ch',
                        '1.0 TSI 110 ch ',
                        '1.0 TSI 115 ch',
                        '1.0 TSI 116ch',
                        '1.0 TSI 95 ch',
                        '1.1 ess 40ch',
                        '1.1 ess 45ch',
                        '1.1 ess 50ch',
                        '1.2 D 75ch',
                        '1.2 ess 55ch',
                        '1.2 ess 60ch',
                        '1.2 ess 65ch',
                        '1.2 ess 70ch',
                        '1.2 TDI 75ch',
                        '1.3 D 45ch',
                        '1.3 ess 115ch',
                        '1.3 ess 55ch',
                        '1.3 ess 60ch',
                        '1.3 ess 75ch',
                        '1.3 GT 78ch',
                        '1.4 D 80ch',
                        '1.4 ess 100ch',
                        '1.4 ess 60ch',
                        '1.4 ess 75ch',
                        '1.4 ess 75ch BVA',
                        '1.4 ess 80ch',
                        '1.4 ess 85ch',
                        '1.4 ess 85ch DSG',
                        '1.4 GT 101ch',
                        '1.4 GTI 180ch',
                        '1.4 TDI 70ch',
                        '1.4 TDI 75ch',
                        '1.4 TDI 80ch',
                        '1.5 TSI 150 ch',
                        '1.6 ess 105ch',
                        '1.6 ess 75ch',
                        '1.6 GTI 125ch',
                        '1.6 MPi 90ch',
                        '1.6 MPi 90ch DSG',
                        '1.6 TDI 105ch',
                        '1.6 TDI 75ch',
                        '1.6 TDI 80 ch',
                        '1.6 TDI 90ch',
                        '1.6 TDI 90ch DSG',
                        '1.6 TDI 95 ch',
                        '1.8 GTI 150ch',
                        '1.8 GTI 180ch',
                        '1.9 SDI 64ch',
                        '1.9 TDI 100ch',
                        '2.0 TSI 200 ch',
                        '2.0 TSI 207 ch',
                        'TSI 105ch',
                        'TSI 105ch DSG'
                    ]
                ],
                [
                    'name' => 'Polo 3 Flight',
                    'versions' => [
                        'Polo 3 Flight'
                    ],
                    'engines' => [
                        '1.4 ess 60ch',
                        '1.9 SDI 64ch'
                    ]
                ],
                [
                    'name' => 'Polo classique',
                    'versions' => [
                        'Polo classique'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Polo Cross',
                    'versions' => [
                        'Polo Cross'
                    ],
                    'engines' => [
                        '1.2 ess 60ch',
                        '1.2 ess 65ch',
                        '1.4 ess 80ch',
                        '1.4 TDI 70ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch',
                        '1.9 TDI 100ch',
                        'ess 85ch',
                        'TSI 105ch'
                    ]
                ],
                [
                    'name' => 'Polo Sedan',
                    'versions' => [
                        'Polo Sedan'
                    ],
                    'engines' => [
                        '1.4 ess 85ch',
                        '1.6 ess 105'
                    ]
                ],
                [
                    'name' => 'Scirocco',
                    'versions' => [
                        'Scirocco'
                    ],
                    'engines' => [
                        '1.1 ess 50ch',
                        '1.3 ess 60ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI 160ch',
                        '1.5 ess 70ch',
                        '1.5 GT 70ch',
                        '1.5 TS 85ch',
                        '1.6 ess 75ch',
                        '1.6 ess 85ch',
                        '1.6 GT 85ch',
                        '1.6 GTI 110ch',
                        '1.8 GT 139ch',
                        '1.8 GT 90ch',
                        '1.8 GTI 112ch',
                        '2.0 ess 265ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 170ch',
                        '2.0 TDI 170ch DSG',
                        '2.0 TSI 200ch',
                        '2.0 TSI 210ch',
                        '2.0 TSI 210ch DSG'
                    ]
                ],
                [
                    'name' => 'Sharan',
                    'versions' => [
                        'Sharan'
                    ],
                    'engines' => [
                        '1.4 TSI 150ch',
                        '1.4 TSI 150ch BlueMotion',
                        '1.4 TSI 150ch DSG',
                        '1.4 TSI 150ch DSG6',
                        '1.9 TDI 115ch',
                        '1.9 TDI 115ch Tiptronic',
                        '1.9 TDI 130ch',
                        '1.9 TDI 4MOTION 115ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 115ch',
                        '2.0 ess 115ch Tiptronic',
                        '2.0 TDI 115ch BlueMotion',
                        '2.0 TDI 130ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch BlueMotion',
                        '2.0 TDI 140ch DSG BlueMotion',
                        '2.0 TDI 170ch BlueMotion',
                        '2.0 TDI 170ch DSG BlueMotion',
                        '2.8 VR6 174ch'
                    ]
                ],
                [
                    'name' => 'Tahru',
                    'versions' => [
                        'Ruijin',
                        'Ruixiang',
                        'Sharp'
                    ],
                    'engines' => [
                        '1.2 TSI 116ch',
                        '1.4 TSI 150ch',
                        '1.5 MPI 110ch',
                        '1.5 TSI 160ch',
                        '2.0 TSI 190ch'
                    ]
                ],
                [
                    'name' => 'Taigo',
                    'versions' => [
                        'Goal ',
                        'Life ',
                        'Life Plus',
                        'R-Line',
                        'R-Line Edition',
                        'Style',
                        'Taigo ',
                        'VW Edition'
                    ],
                    'engines' => [
                        '1.0 TSI 110ch ',
                        '1.0 TSI 118ch',
                        '1.0 TSI 130ch',
                        '1.0 TSI 95ch',
                        '1.5 TSI 150ch'
                    ]
                ],
                [
                    'name' => 'Taos',
                    'versions' => [
                        'S',
                        'SE',
                        'SE Black ',
                        'SEL'
                    ],
                    'engines' => [
                        '1.2 TSI 116ch',
                        '1.4 TSI 150ch',
                        '1.5 TSI 160ch',
                        '1.5 TSI 177ch',
                        '1.6 MPI 110ch',
                        '2.0 TSI 190ch'
                    ]
                ],
                [
                    'name' => 'Tayron',
                    'versions' => [
                        'Elegance',
                        'Life ',
                        'Life Plus',
                        'R-Line',
                        'R-Line Exclusive',
                        'VW Edition'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'T-Cross',
                    'versions' => [
                        'Comfort',
                        'Edition',
                        'Goal ',
                        'Life',
                        'Life Plus',
                        'Life Tech',
                        'R-line',
                        'R-Line Edition ',
                        'Style',
                        'T-Cross'
                    ],
                    'engines' => [
                        '1.0 TSI 110 ch',
                        '1.0 TSI 115 ch ',
                        '1.0 TSI 116 ch',
                        '1.0 TSI 95 ch',
                        '1.4 TSI 150 ch',
                        '1.5 MPI 115 ch',
                        '1.5 TSI 150 ch',
                        '1.6 MSI 112 ch ',
                        '1.6 TDI 95 ch'
                    ]
                ],
                [
                    'name' => 'Tiguan',
                    'versions' => [
                        'Carat +',
                        'Comfort line ',
                        'Drive ',
                        'Elegance ',
                        'Life',
                        'Life Plus',
                        'Lounge',
                        'MATCH',
                        'R Line',
                        'R-Line',
                        'Sport',
                        'Style',
                        'Tiguan',
                        'TrendLine'
                    ],
                    'engines' => [
                        '1.4 TSI 122ch',
                        '1.4 TSI 150ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 143ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 177ch',
                        '2.0 TSI 200ch',
                        '2.0 TSI 200ch DSG'
                    ]
                ],
                [
                    'name' => 'Touareg',
                    'versions' => [
                        'Atmosphère',
                        'Carat',
                        'Carat Exclusive ',
                        'Elegance ',
                        'R',
                        'R-Line',
                        'Touareg'
                    ],
                    'engines' => [
                        '2.5 TDI 174ch',
                        '3.0 FSI V6 280ch',
                        '3.0 TDI V6 204ch',
                        '3.0 TDI V6 225ch',
                        '3.0 TDI V6 240ch',
                        '3.0 TSI eHybrid 381ch',
                        '3.0 TSI eHybrid 462ch',
                        '3.0 V6 TDI 231 ch',
                        '3.0 V6 TDI 286 ch ',
                        '3.0 V6 TSI 340ch',
                        '3.2 ess V6 220ch',
                        '333ch Hybrid',
                        '3.6 ess V6 280ch',
                        '4.0 V8 TDI 422 ch',
                        '4.2 ess V8 310ch',
                        '4.2 ess V8 350ch',
                        '4.9 TDI V10 313ch',
                        '5.0 TDI 350ch R50',
                        '5.0 TDI V10 313ch',
                        '5.0 TDI V10 350ch',
                        '6.0 ess W12 450ch',
                        'TDI V8 340ch'
                    ]
                ],
                [
                    'name' => 'Touran',
                    'versions' => [
                        'Active',
                        'Carat',
                        'Comfortline',
                        'Conceptline',
                        'Familly',
                        'Life',
                        'Life Plus',
                        'Lounge',
                        'Lounge Business',
                        'Match',
                        'Style',
                        'Touran',
                        'Trendline',
                        'United',
                        'VW Edition'
                    ],
                    'engines' => [
                        '1.0 TSI 115ch',
                        '1.2 TSI 105ch',
                        '1.2 TSI 110ch',
                        '1.4 TSI 122ch',
                        '1.4 TSI 140ch',
                        '1.4 TSI 140ch DSG',
                        '1.4 TSI 150ch',
                        '1.5 TSI 150ch',
                        '1.6 ess 102ch',
                        '1.6 FSI 115ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 105ch DSG',
                        '1.6 TDI 110ch',
                        '1.6 TDI 115ch',
                        '1.6 TDI 90ch',
                        '1.8 TSI 180ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 90ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 110ch',
                        '2.0 TDI 115ch',
                        '2.0 TDI 136ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 140ch DSG',
                        '2.0 TDI 150ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 170ch DSG',
                        '2.0 TDI 170ch DSG6',
                        '2.0 TDI 190ch'
                    ]
                ],
                [
                    'name' => 'Touran Cross',
                    'versions' => [
                        'Touran Cross'
                    ],
                    'engines' => [
                        '1.6 TDI 105ch',
                        '2.0 TDI 140ch'
                    ]
                ],
                [
                    'name' => 'Transporter',
                    'versions' => [
                        'Chassis court',
                        'Combi chassis court',
                        'Transporter'
                    ],
                    'engines' => [
                        '2.0 TDI 102ch'
                    ]
                ],
                [
                    'name' => 'T-Roc',
                    'versions' => [
                        'Chenguang Edition',
                        'Dawnlight Edition',
                        'Goal ',
                        'Life',
                        'Life Plus',
                        'Move',
                        'R',
                        'R-Line ',
                        'R- Line Edition ',
                        'Starshine Edition',
                        'Style',
                        'Style Exclusive',
                        'Time Edition',
                        'T-Roc',
                        'VW Edition'
                    ],
                    'engines' => [
                        '1.0 TSI 110 ch',
                        '1.0 TSI 115ch',
                        '1.2 TSI 115 ch',
                        '1.4 TSI 130 ch',
                        '1.4 TSI 150 ch',
                        '1.5 TSI 150 ch',
                        '1.5 TSI 160 ch',
                        '1.6 TDI 115 ch',
                        '2.0 TDI 116 ch',
                        '2.0 TDI 150 ch ',
                        '2.0 TSI 190 ch',
                        '2.0 TSI 300ch'
                    ]
                ],
                [
                    'name' => 'Up',
                    'versions' => [
                        'Up'
                    ],
                    'engines' => [
                        '1.0 ess 60ch',
                        '1.0 ess 75ch'
                    ]
                ],
                [
                    'name' => 'Vento',
                    'versions' => [
                        'Vento'
                    ],
                    'engines' => [
                        '1.8 ess 90ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 90ch',
                        '2.0 GT 115ch',
                        '2.8 VR6 174ch'
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
