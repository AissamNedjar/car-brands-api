<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class RenaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Renault',
            'models' => [
                [
                    'name' => '10',
                    'versions' => [
                        '10'
                    ],
                    'engines' => [
                        '1.1 ess 46ch',
                        '1.3 ess 52ch'
                    ]
                ],
                [
                    'name' => '11',
                    'versions' => [
                        '11'
                    ],
                    'engines' => [
                        '1.2 ess 55ch',
                        '1.4 ess 68ch',
                        '1.4 ess Turbo 105ch',
                        '1.4 ess Turbo 115ch',
                        '1.6 D 55ch',
                        '1.6 TD 55ch',
                        '1.7 ess 90ch'
                    ]
                ],
                [
                    'name' => '12',
                    'versions' => [
                        '12'
                    ],
                    'engines' => [
                        '1.3 ess 50ch',
                        '1.3 ess 54ch',
                        '1.3 ess 60ch',
                        '1.3 TS 60ch',
                        '1.6 ess 125ch'
                    ]
                ],
                [
                    'name' => '14',
                    'versions' => [
                        '14'
                    ],
                    'engines' => [
                        '1.2 ess 57ch',
                        '1.2 ess 58ch',
                        '1.2 TS 69ch',
                        '1.4 ess 60ch',
                        '1.4 TS 70ch'
                    ]
                ],
                [
                    'name' => '16',
                    'versions' => [
                        '16'
                    ],
                    'engines' => [
                        '1.5 ess 55ch',
                        '1.6 ess 66ch',
                        '1.6 TS 85ch',
                        '1.6 TS 85ch BVA',
                        '1.7 ess 90ch BVA',
                        '1.7 ess 93ch'
                    ]
                ],
                [
                    'name' => '17',
                    'versions' => [
                        '17'
                    ],
                    'engines' => [
                        '1.6 ess 108ch',
                        '1.6 ess 90ch',
                        '1.6 TS 108ch',
                        '1.7 TS 98ch'
                    ]
                ],
                [
                    'name' => '18',
                    'versions' => [
                        '18'
                    ],
                    'engines' => [
                        '1.4 ess 64ch',
                        '1.4 GTS 96ch',
                        '1.4 TS 79ch',
                        '1.6 ess Turbo 110ch',
                        '1.6 ess Turbo 125ch',
                        '1.7 ess 74ch',
                        '2.0 ess 104ch',
                        '2.0 ess 4X4 104ch',
                        '2.1 D 67ch',
                        '2.1 TD 67ch',
                        '2.1 TD 88ch'
                    ]
                ],
                [
                    'name' => '19',
                    'versions' => [
                        '19'
                    ],
                    'engines' => [
                        '1.4 ess 60ch',
                        '1.4 ess 80ch',
                        '1.4 GTS 80ch',
                        '1.4 TS 80ch',
                        '1.7 ess 107ch',
                        '1.7 ess 92ch',
                        '1.7 ess 95ch',
                        '1.8 ess 113ch',
                        '1.8 ess 16V 137ch',
                        '1.8 ess 16V 140ch',
                        '1.8 ess 95ch',
                        '1.9 D 65ch',
                        '1.9 DT 93ch',
                        '1.9 TD 65ch',
                        '1.9 TD 93ch'
                    ]
                ],
                [
                    'name' => '20',
                    'versions' => [
                        '20'
                    ],
                    'engines' => [
                        '1.7 ess 90ch',
                        '1.7 ess 96ch',
                        '2.0 ess 104ch',
                        '2.0 ess 116ch',
                        '2.0 ess 116ch BVA',
                        '2.0 TS 104ch',
                        '2.0 TS 104ch BVA',
                        '2.0 TS 109ch',
                        '2.0 TS 109ch BVA',
                        '2.1 GT 64ch'
                    ]
                ],
                [
                    'name' => '21',
                    'versions' => [
                        '21'
                    ],
                    'engines' => [
                        '1.7 ess 76ch',
                        '1.7 ess 92ch',
                        '1.7 GTS 92ch',
                        '1.7 GTS 95ch',
                        '1.7 TS 92ch',
                        '1.9 D 65ch',
                        '2.0 ess 120ch',
                        '2.0 ess 140ch',
                        '2.0 ess Turbo 162ch',
                        '2.0 ess Turbo 175ch',
                        '2.1 TD 88ch',
                        '2.2 ess 110ch'
                    ]
                ],
                [
                    'name' => '25',
                    'versions' => [
                        '25'
                    ],
                    'engines' => [
                        '2.0 ess 120ch',
                        '2.0 ess 140ch',
                        '2.0 GTS 103ch',
                        '2.0 TS 103ch',
                        '2.1 TD 70ch',
                        '2.1 TD 85ch',
                        '2.2 ess 126ch',
                        '2.5 ess Turbo V6 182ch',
                        '2.5 ess Turbo V6 205ch',
                        '2.7 CTI V6 144ch',
                        '2.9 CTI V6 153ch',
                        '2.9 CTI V6 153ch BVA',
                        '2.9 CTI V6 160ch'
                    ]
                ],
                [
                    'name' => '30',
                    'versions' => [
                        '30'
                    ],
                    'engines' => [
                        '2.1 TD 85ch',
                        '2.7 ess 142ch',
                        '2.7 ess 142ch BVA',
                        '2.7 TS 125ch',
                        '2.7 TS 128ch',
                        '2.7 TS 128ch BVA',
                        '2.7 TS 131ch'
                    ]
                ],
                [
                    'name' => '4',
                    'versions' => [
                        '4'
                    ],
                    'engines' => [
                        '0.8 ess 27ch',
                        '0.8 ess 30ch',
                        '0.9 ess 34ch',
                        '1.0 ess 34ch',
                        '1.1 ess 34ch'
                    ]
                ],
                [
                    'name' => '4cv',
                    'versions' => [
                        '4cv'
                    ],
                    'engines' => [
                        '0.8 ess 17ch',
                        '0.8 ess 21ch',
                        '0.8 ess 35ch'
                    ]
                ],
                [
                    'name' => '5',
                    'versions' => [
                        '5'
                    ],
                    'engines' => [
                        '0.8 ess 34ch',
                        '0.9 ess 34ch',
                        '0.9 ess 36ch',
                        '1.0 ess 44ch',
                        '1.0 ess 47ch',
                        '1.1 ess 45ch',
                        '1.3 ess 44ch',
                        '1.3 ess 55ch BVA',
                        '1.3 ess 64ch',
                        '1.3 TS 64ch',
                        '1.4 ess 58ch BVA',
                        '1.4 ess 63ch',
                        '1.4 ess 93ch',
                        '1.4 ess Turbo 110ch',
                        '1.4 ess Turbo 160ch',
                        '1.4 TS 63ch'
                    ]
                ],
                [
                    'name' => '6',
                    'versions' => [
                        '6'
                    ],
                    'engines' => [
                        '0.9 ess 34ch',
                        '1.1 ess 47ch'
                    ]
                ],
                [
                    'name' => '8',
                    'versions' => [
                        '8'
                    ],
                    'engines' => [
                        '1.1 ess 46ch',
                        '1.1 ess 53ch',
                        '1.1 ess 95ch',
                        '1.3 ess 103ch'
                    ]
                ],
                [
                    'name' => '9',
                    'versions' => [
                        '9'
                    ],
                    'engines' => [
                        '1.1 ess 48ch',
                        '1.2 ess 55ch',
                        '1.4 ess 60ch',
                        '1.4 ess 68ch',
                        '1.4 ess 72ch',
                        '1.4 ess Turbo 105ch',
                        '1.4 ess Turbo 115ch',
                        '1.6 D 55ch',
                        '1.7 ess 82ch',
                        '1.7 ess 90ch'
                    ]
                ],
                [
                    'name' => 'Arkana',
                    'versions' => [
                        'Business',
                        'Equilibre',
                        'Esprit alpine',
                        'E-tech Engeered',
                        'Evolution',
                        'Itens',
                        'Rs Line',
                        'Zen'
                    ],
                    'engines' => [
                        '1.3 TCe 140ch',
                        '1.6 E-Tech 145ch '
                    ]
                ],
                [
                    'name' => 'Avantime',
                    'versions' => [
                        'Avantime'
                    ],
                    'engines' => [
                        '3.0 ess V6 210ch'
                    ]
                ],
                [
                    'name' => 'Captur',
                    'versions' => [
                        'Cappuccino',
                        'Captur',
                        'equilibre',
                        'Esprit Alpine ',
                        'Evolution',
                        'Liberty',
                        'Luxe',
                        'Mountain',
                        'RS Line ',
                        'Techno ',
                        'Trendy'
                    ],
                    'engines' => [
                        '0.9 tce 90 ch',
                        '1.0 TCe 90ch',
                        '1.3 TCe 140ch',
                        '1.5 DCI 85ch',
                        '1.6 E-Tech hybride'
                    ]
                ],
                [
                    'name' => 'Caravelle',
                    'versions' => [
                        'Caravelle'
                    ],
                    'engines' => [
                        '1.0 ess 51ch',
                        '1.1 ess 57ch'
                    ]
                ],
                [
                    'name' => 'Clio 1',
                    'versions' => [
                        'Clio 1'
                    ],
                    'engines' => [
                        '1.1 ess 49ch',
                        '1.2 ess 55ch',
                        '1.2 ess 60ch',
                        '1.4 ess 80ch',
                        '1.7 ess 92ch',
                        '1.8 ess 110ch',
                        '1.8 ess 16V 137ch',
                        '1.8 ess 16V 140ch',
                        '1.8 ess 95ch',
                        '1.9 D 65ch',
                        '2.0 ess 150ch'
                    ]
                ],
                [
                    'name' => 'Clio 2',
                    'versions' => [
                        'Clio 2',
                        'Expression',
                        'Extreme'
                    ],
                    'engines' => [
                        '1.2 ess 16V 75ch',
                        '1.2 ess 60ch',
                        '1.4 ess 16V 98ch',
                        '1.4 ess 75ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 80ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 16V 110ch BVA',
                        '1.6 ess 90ch',
                        '1.9 D 65ch',
                        '1.9 DTI 80ch',
                        '3.0 ess V6 230ch'
                    ]
                ],
                [
                    'name' => 'Clio 3',
                    'versions' => [
                        'Authentique',
                        'Clio 3',
                        'Dynamique',
                        'Exception',
                        'Night and Day'
                    ],
                    'engines' => [
                        '1.2  16V 75ch',
                        '1.2 ess 16V 75ch',
                        '1.2 ess 16V 80ch Quickshift',
                        '1.2 GPL 16V 75ch',
                        '1.2 TCE 100ch',
                        '1.2 TCE 105ch',
                        '1.4 ess 16V 95ch',
                        '1.5 DCI 105ch',
                        '1.5 DCI 70ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 86ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 16V 110ch BVA',
                        '1.6 ess 16V 128ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 200ch',
                        '2.0 ess 203ch'
                    ]
                ],
                [
                    'name' => 'Clio 3 RS',
                    'versions' => [
                        'Ange &amp; Demon',
                        'Clio 3 RS',
                        'Gordini',
                        'luxe',
                        'Red Bull'
                    ],
                    'engines' => [
                        '2.0 ess 200ch'
                    ]
                ],
                [
                    'name' => 'Clio 4',
                    'versions' => [
                        'City',
                        'Clio 4',
                        'Dynamique',
                        'Dynamique plus',
                        'Exception',
                        'Expression',
                        'GT Line +',
                        'Havana',
                        'Ivory',
                        'Limited',
                        'Limited 2',
                        'Seventeen'
                    ],
                    'engines' => [
                        '0.9 tce 90 ch',
                        '1.2 ess 16V 75ch',
                        '1.5 DCI 85ch'
                    ]
                ],
                [
                    'name' => 'Clio 4 Facelift',
                    'versions' => [
                        'GT-Line',
                        'Limited+',
                        'Limited 2'
                    ],
                    'engines' => [
                        '0.9 TCe 90ch',
                        '1.5 DCi 110ch',
                        '1.5 DCi 85ch'
                    ]
                ],
                [
                    'name' => 'Clio 4 RS',
                    'versions' => [
                        'Clio 4 RS'
                    ],
                    'engines' => [
                        '1.6 Ess EDC 200ch'
                    ]
                ],
                [
                    'name' => 'Clio 5 ',
                    'versions' => [
                        'Authentic',
                        'Equilibre',
                        'Esprit Alpine',
                        'Evolution',
                        'RS Line',
                        'Techno'
                    ],
                    'engines' => [
                        '1.0 SCe 65ch',
                        '1.0 TCe 90ch',
                        '1.3 TCe 140ch',
                        '1.5 Blue dCi 100ch'
                    ]
                ],
                [
                    'name' => 'Clio Campus',
                    'versions' => [
                        'Bye bye',
                        'City',
                        'Clio Campus',
                        'Extreme',
                        'Extreme 2',
                        'Facelift'
                    ],
                    'engines' => [
                        '1.2 ess 16V 75ch',
                        '1.2 ess 60ch',
                        '1.2 GPL 60ch',
                        '1.4 ess 16V 100ch',
                        '1.4 ess 16V 98ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 68ch',
                        '1.5 DCI 85ch'
                    ]
                ],
                [
                    'name' => 'Clio Classique',
                    'versions' => [
                        'Clio Classique'
                    ],
                    'engines' => [
                        '1.4 ess 75ch'
                    ]
                ],
                [
                    'name' => 'Colorale',
                    'versions' => [
                        'Colorale'
                    ],
                    'engines' => [
                        '2.0 ess 4X4 58ch',
                        '2.0 ess 58ch',
                        '2.4 ess 4X4 50ch',
                        '2.4 ess 50ch'
                    ]
                ],
                [
                    'name' => 'Dauphine',
                    'versions' => [
                        'Dauphine'
                    ],
                    'engines' => [
                        '0.9 ess 31ch',
                        '0.9 ess 49ch'
                    ]
                ],
                [
                    'name' => 'Espace',
                    'versions' => [
                        'Espace'
                    ],
                    'engines' => [
                        '1.9 DCI 117ch',
                        '1.9 DTI 100ch',
                        '2.0 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 175ch',
                        '2.0 DCI 175ch BVA',
                        '2.0 ess 103ch',
                        '2.0 ess 110ch',
                        '2.0 ess 115ch',
                        '2.0 ess 120ch',
                        '2.0 ess 165ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 170ch',
                        '2.1 DT 88ch',
                        '2.1 DT 92ch',
                        '2.1 TD 88ch',
                        '2.2 DCI 115ch',
                        '2.2 DCI 130ch',
                        '2.2 DCI 150ch',
                        '2.2 DT 110ch',
                        '2.2 DT 115ch',
                        '2.2 ess 110ch',
                        '2.2 ess 110ch BVA',
                        '2.9 ess V6 153ch',
                        '2.9 ess V6 153ch BVA',
                        '3.0 DCI 180ch',
                        '3.0 DCI V6 180ch',
                        '3.0 ess V6 170ch',
                        '3.0 ess V6 194ch',
                        '3.5 ess V6 245ch'
                    ]
                ],
                [
                    'name' => 'Express',
                    'versions' => [
                        'Express'
                    ],
                    'engines' => [
                        '1.2 ess 55ch',
                        '1.4 ess 80ch',
                        '1.9 D 55ch',
                        '1.9 D 65ch'
                    ]
                ],
                [
                    'name' => 'Floride',
                    'versions' => [
                        'Floride'
                    ],
                    'engines' => [
                        '0.9 ess 40ch',
                        '1.0 ess 51ch'
                    ]
                ],
                [
                    'name' => 'Fluence',
                    'versions' => [
                        'Dynamique',
                        'Expression',
                        'Fluence',
                        'Privilège',
                        'Sport way'
                    ],
                    'engines' => [
                        '1.5 DCI 105ch',
                        '1.5 DCI 110ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 110ch'
                    ]
                ],
                [
                    'name' => 'Frégate',
                    'versions' => [
                        'Frégate'
                    ],
                    'engines' => [
                        '2.0 ess 58ch',
                        '2.0 ess 65ch',
                        '2.2 ess 77ch',
                        '2.2 ess 80ch'
                    ]
                ],
                [
                    'name' => 'Fuego',
                    'versions' => [
                        'Fuego'
                    ],
                    'engines' => [
                        '1.4 ess 64ch',
                        '1.6 ess Turbo 132ch',
                        '1.7 GTS 96ch',
                        '2.0 ess 110ch',
                        '2.1 TD 88ch'
                    ]
                ],
                [
                    'name' => 'Grand Modus',
                    'versions' => [
                        'Grand Modus'
                    ],
                    'engines' => [
                        '1.2 ess 16V 75ch',
                        '1.2 ess 16V 80ch Quickshift',
                        '1.2 TCE 100ch',
                        '1.2 TCE 105ch',
                        '1.5 DCI 106ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 16V 110ch'
                    ]
                ],
                [
                    'name' => 'Grand Scenic',
                    'versions' => [
                        'Grand Scenic'
                    ],
                    'engines' => [
                        '1.4 TCE 130ch',
                        '1.5 DCI 100ch',
                        '1.5 DCI 105ch',
                        '1.5 DCI 110ch',
                        '1.6 DCI 130ch',
                        '1.6 ess 16V 110ch',
                        '1.9 DCI 120ch',
                        '1.9 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 150ch BVA',
                        '2.0 DCI 160ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 143ch',
                        '2.0 ess Turbo 165ch'
                    ]
                ],
                [
                    'name' => 'Kadjar',
                    'versions' => [
                        'Intens',
                        'Zen'
                    ],
                    'engines' => [
                        '1.6 DCi 130ch'
                    ]
                ],
                [
                    'name' => 'Kangoo',
                    'versions' => [
                        'Authentique +',
                        'Confort',
                        'Confort (Utilitaire)',
                        'Equilibre ',
                        'Evolution',
                        'Expression',
                        ' Extrême Outdoor',
                        'Grand Confort',
                        'Grand confort (Utilitaire)',
                        'Kangoo',
                        'Privilège +',
                        'Privilège plus',
                        'Techno',
                        'White Edition'
                    ],
                    'engines' => [
                        '1.2 ess 60ch',
                        '1.3 TCe 130ch',
                        '1.4 ess 75ch',
                        '1.5 Blue dCi 115ch',
                        '1.5 DCI 106ch',
                        '1.5 DCI 110ch',
                        '1.5 DCI 60ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 70ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 80ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 16V 105ch',
                        '1.6 ess 16V 105ch BVA',
                        '1.6 ess 16V 95ch',
                        '1.9 D 65ch',
                        '1.9 DCI 4X4 85ch',
                        '1.9 DTI 80ch'
                    ]
                ],
                [
                    'name' => 'Kangoo Be Bop',
                    'versions' => [
                        'Kangoo Be Bop'
                    ],
                    'engines' => [
                        '1.5 DCI 105ch',
                        '1.5 DCI 110ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 16V 105ch'
                    ]
                ],
                [
                    'name' => 'Koleos',
                    'versions' => [
                        'Koleos',
                        'Privilège'
                    ],
                    'engines' => [
                        ' 1.3 TCe 160ch',
                        ' 2.0 Blue dCi 185ch',
                        '2.0 DCI 4X2 150ch',
                        '2.0 DCI 4X4 150ch',
                        '2.0 DCI 4X4 150ch BVA',
                        '2.0 DCI 4X4 175ch',
                        '2.5 ess 16V 170ch',
                        '2.5 ess 16V 4X4 170ch'
                    ]
                ],
                [
                    'name' => 'Kwid',
                    'versions' => [
                        'Itense',
                        'Life',
                        'Outsider',
                        'ZenZen'
                    ],
                    'engines' => [
                        '1,0L 12v  68ch'
                    ]
                ],
                [
                    'name' => 'Laguna 1',
                    'versions' => [
                        'Laguna 1'
                    ],
                    'engines' => [
                        '1.6 ess 16V 110ch',
                        '1.8 ess 95ch',
                        '1.9 DTI 100ch',
                        '2.0 ess 115ch',
                        '2.0 ess 140ch',
                        '2.0 ess 16V 140ch',
                        '2.2 D 85ch',
                        '2.2 DT 115ch',
                        '3.0 ess V6 194ch'
                    ]
                ],
                [
                    'name' => 'Laguna 2',
                    'versions' => [
                        'Authentique',
                        'Dynamique',
                        'Expression',
                        'Laguna 2'
                    ],
                    'engines' => [
                        '1.6 ess 16V 110ch',
                        '1.8 ess 16V 118ch',
                        '1.9 DCI 110ch',
                        '1.9 DCI 120ch',
                        '2.0 ess 165ch',
                        '2.0 ess 16V 135ch',
                        '2.2 DCI 150ch',
                        '3.0 ess V6 210ch'
                    ]
                ],
                [
                    'name' => 'Laguna 3',
                    'versions' => [
                        'Laguna 3'
                    ],
                    'engines' => [
                        '1.5 DCI 110ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 16V 115ch',
                        '1.9 DCI 110ch',
                        '1.9 DCI 115ch BVA',
                        '1.9 DCI 125ch',
                        '1.9 DCI 130ch',
                        '1.9 DCI 95ch',
                        '2.0 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 150ch BVA',
                        '2.0 DCI 170ch',
                        '2.0 DCI 175ch',
                        '2.0 DCI 175ch BVA',
                        '2.0 DCI 180ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 170ch',
                        '2.0 ess 170ch BVA',
                        '2.0 ess 205ch',
                        '2.0 GT 205ch',
                        '2.2 DCI 140ch',
                        '2.2 DCI 140ch BVA',
                        '3.0 DCI V6 235ch',
                        '3.0 ess V6 170ch',
                        '3.0 ess V6 210ch',
                        '3.0 ess V6 310ch'
                    ]
                ],
                [
                    'name' => 'Laguna 3 Estate',
                    'versions' => [
                        'Laguna 3 Estate'
                    ],
                    'engines' => [
                        '1.5 DCI 110ch',
                        '2.0 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 150ch BVA',
                        '2.0 DCI 170ch',
                        '2.0 DCI 180ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 170ch',
                        '2.0 ess 205ch'
                    ]
                ],
                [
                    'name' => 'Laguna Coupé',
                    'versions' => [
                        'Laguna Coupé'
                    ],
                    'engines' => [
                        '2.0 DCI 150ch',
                        '2.0 DCI 175ch',
                        '2.0 DCI 180ch',
                        '2.0 ess 170ch',
                        '2.0 ess 205ch',
                        '3.0 DCI V6 235ch',
                        '3.0 DCI V6 240ch BVA',
                        '3.5 ess V6 240ch',
                        'DCI 175ch BVA'
                    ]
                ],
                [
                    'name' => 'Latitude',
                    'versions' => [
                        'Dynamique',
                        'Latitude',
                        'Privilège '
                    ],
                    'engines' => [
                        '2.0 DCI 150ch',
                        '2.0 DCI 175ch',
                        '2.0 ess 200ch',
                        '3.0 DCI V6 240ch'
                    ]
                ],
                [
                    'name' => 'Master',
                    'versions' => [
                        'Advance',
                        'Châssis Court',
                        'Châssis Long',
                        'Châssis Moyen',
                        'Confort',
                        'Extra',
                        'Grand Confort',
                        'L3H2',
                        'L4H2'
                    ],
                    'engines' => [
                        '2.3 Blue dCi 110ch',
                        '2.3 Blue dCi 135ch',
                        '2.3 Blue dCi 145ch',
                        ' 2.3 Blue dCi 150ch ',
                        ' 2.3 Blue dCi 180ch',
                        '2.3 DCi 125ch'
                    ]
                ],
                [
                    'name' => 'Megane 1',
                    'versions' => [
                        'Megane 1'
                    ],
                    'engines' => [
                        '1.4 ess 16V 95ch',
                        '1.4 ess 70ch',
                        '1.4 ess 75ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 90ch',
                        '1.9 D 65ch',
                        '1.9 DT 95ch',
                        '1.9 DTI 100ch',
                        '2.0 ess 115ch'
                    ]
                ],
                [
                    'name' => 'Megane 1 Cabriolet',
                    'versions' => [
                        'Megane 1 Cabriolet'
                    ],
                    'engines' => [
                        '1.6 ess 16V 110ch',
                        '1.6 ess 90ch',
                        '2.0 ess 16V 150ch'
                    ]
                ],
                [
                    'name' => 'Megane 1 Coupé',
                    'versions' => [
                        'Megane 1 Coupé'
                    ],
                    'engines' => [
                        '1.4 ess 16V 95ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 90ch',
                        '2.0 ess 115ch',
                        '2.0 ess 16V 150ch'
                    ]
                ],
                [
                    'name' => 'Megane 2',
                    'versions' => [
                        'Expression',
                        'Extreme',
                        'Megane 2'
                    ],
                    'engines' => [
                        '1.4 ess 16V 100ch',
                        '1.4 ess 16V 98ch',
                        '1.5 DCI 100ch',
                        '1.5 DCI 105ch',
                        '1.5 DCI 80ch',
                        '1.5 DCI 85ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 16V 115ch',
                        '1.9 DCI 120ch',
                        '1.9 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 136ch',
                        '2.0 ess 16V 165ch',
                        '2.0 ess 225ch'
                    ]
                ],
                [
                    'name' => 'Megane 2 CC',
                    'versions' => [
                        'Megane 2 CC'
                    ],
                    'engines' => [
                        '1.5 DCI 105ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 16V 115ch',
                        '1.9 DCI 120ch',
                        '1.9 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 ess 165ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 136ch'
                    ]
                ],
                [
                    'name' => 'Megane 2 Classique',
                    'versions' => [
                        'Megane 2 Classique'
                    ],
                    'engines' => [
                        '1.4 ess 16V 98ch',
                        '1.5 DCI 105ch',
                        '1.5 DCI 80ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 16V 115ch'
                    ]
                ],
                [
                    'name' => 'Megane 2 Coupé',
                    'versions' => [
                        'Megane 2 Coupé'
                    ],
                    'engines' => [
                        '2.0 ess 140ch'
                    ]
                ],
                [
                    'name' => 'Megane 3',
                    'versions' => [
                        'Bose',
                        'Dynamique',
                        'Explore',
                        'Expression ',
                        'GT Line',
                        'GT Line Black Touch',
                        'Intense',
                        'Limited',
                        'Megane 3',
                        'New Play',
                        'Play',
                        'Privilege',
                        'Reveal',
                        'Sport Edition'
                    ],
                    'engines' => [
                        '1.2 TCE 115ch',
                        '1.4 TCE 130ch',
                        '1.5 DCI 105ch',
                        '1.5 DCI 110ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6 16V 110ch',
                        '1.6  16V 110ch BioEthanol',
                        '1.6 DCI 130ch',
                        '1.6 ess 16V 110ch',
                        '1.9 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 160ch',
                        '2.0 DCI 175ch',
                        '2.0 ess 16V 140ch',
                        '2.0 TCE 180ch'
                    ]
                ],
                [
                    'name' => 'Megane 3 CC',
                    'versions' => [
                        'Megane 3 CC'
                    ],
                    'engines' => [
                        '1.4 TCE 130ch',
                        '1.5 DCI 110ch',
                        '1.9 DCI 130ch',
                        '2.0 DCI 160ch',
                        'TCE 180ch'
                    ]
                ],
                [
                    'name' => 'Megane 3 Coupé',
                    'versions' => [
                        'Megane 3 Coupé'
                    ],
                    'engines' => [
                        '1.2 TCE 115ch',
                        '1.4 TCE 130ch',
                        '1.5 DCI 106ch',
                        '1.5 DCI 110ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6  16V 110ch BioEthanol',
                        '1.6 DCI 130ch',
                        '1.6 ess 16V 110ch',
                        '1.9 DCI 130ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 160ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 250ch',
                        '2.0 ess 265ch',
                        '2.0 GT 180ch',
                        '2.0 TCE 180ch'
                    ]
                ],
                [
                    'name' => 'Megane 3 Facelift',
                    'versions' => [
                        'Megane 3 Facelift'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Megane 3 RS',
                    'versions' => [
                        'Megane 3 RS',
                        'Red Bull'
                    ],
                    'engines' => [
                        '2.0 ess 250ch',
                        '2.0 ess 265ch',
                        '2.0 ess 275ch'
                    ]
                ],
                [
                    'name' => 'Megane 4 ',
                    'versions' => [
                        'Equilibre',
                        'Evolution',
                        'Iconic',
                        'Itens',
                        'Limited',
                        'RS',
                        'RS Line',
                        'Techno'
                    ],
                    'engines' => [
                        '1.0 TCe 115ch',
                        '1.3 TCe 140ch',
                        '1.3 TCe 160ch',
                        '1.5 Blue dCi 115ch',
                        ' 1.8 T 300ch'
                    ]
                ],
                [
                    'name' => 'Modus',
                    'versions' => [
                        'Modus'
                    ],
                    'engines' => [
                        '1.2 ess 16V 75ch',
                        '1.2 ess 16V 80ch Quickshift',
                        '1.2 TCE 100ch',
                        '1.2 TCE 105ch',
                        '1.4 ess 16V 100ch',
                        '1.5 DCI 105ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 70ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 80ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 85ch Quickshift',
                        '1.5 DCI 90ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 16V 115ch'
                    ]
                ],
                [
                    'name' => 'New express',
                    'versions' => [
                        'authentic',
                        'equilibre',
                        'techno'
                    ],
                    'engines' => [
                        '1.3 TCe 100ch ',
                        '1.5 Blue dCi 75ch',
                        '1.5 Blue dCi 95ch '
                    ]
                ],
                [
                    'name' => 'Safrane',
                    'versions' => [
                        'Safrane'
                    ],
                    'engines' => [
                        '2.0 ess 107ch',
                        '2.0 ess 138ch',
                        '2.1 DT 90ch',
                        '2.2 DT 115ch',
                        '2.2 ess 140ch',
                        '2.4 ess 168ch',
                        '2.5 DT 115ch',
                        '3.0 ess V6 170ch',
                        '3.0 ess V6 194ch'
                    ]
                ],
                [
                    'name' => 'Scenic',
                    'versions' => [
                        'Evolution',
                        'ExecutiveExecutive',
                        'Scenic',
                        'Techno'
                    ],
                    'engines' => [
                        '1.3 TCe 140ch',
                        '1.3 TCe 160ch',
                        '1.4 ess 16V 100ch',
                        '1.4 ess 16V 95ch',
                        '1.4 ess 75ch',
                        '1.4 TCE 130ch',
                        '1.5 DCI 100ch',
                        '1.5 DCI 105ch',
                        '1.5 DCI 110ch',
                        '1.5 DCI 80ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 95ch',
                        '1.6 DCI 130ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 90ch',
                        '1.8 ess 16V 118ch',
                        '1.9 DCI 105ch',
                        '1.9 DCI 120ch',
                        '1.9 DCI 125ch',
                        '1.9 DCI 130ch',
                        '1.9 DT 95ch',
                        '1.9 DTI 100ch',
                        '2.0 DCI 150ch',
                        '2.0 DCI 160ch',
                        '2.0 ess 115ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 16V 143ch',
                        '2.0 ess Turbo 165ch'
                    ]
                ],
                [
                    'name' => 'Scenic Conquest',
                    'versions' => [
                        'Scenic Conquest'
                    ],
                    'engines' => [
                        '1.9 DCI 130ch'
                    ]
                ],
                [
                    'name' => 'Scenic Court',
                    'versions' => [
                        'Dynamique',
                        'Privilège ',
                        'Scenic Court'
                    ],
                    'engines' => []
                ],
                [
                    'name' => 'Super 5',
                    'versions' => [
                        'Super 5'
                    ],
                    'engines' => [
                        '1.0 ess 42ch',
                        '1.1 ess 47ch',
                        '1.2 ess 55ch',
                        '1.4 ess 60ch',
                        '1.4 ess 72ch',
                        '1.4 GT 115ch',
                        '1.4 GT 120ch',
                        '1.4 GTS 68ch',
                        '1.4 GTS 72ch',
                        '1.4 TS 72ch',
                        '1.6 D 55ch',
                        '1.6 TD 55ch',
                        '1.7 ess 90ch'
                    ]
                ],
                [
                    'name' => 'Symbol',
                    'versions' => [
                        'Authentique',
                        'Collection',
                        'Essentielle',
                        'Exception',
                        'Expression',
                        'Extrême',
                        'Made In Bladi',
                        'MILADI (Exception)',
                        'MILADI (Extrême)',
                        'Privilege',
                        'restylée',
                        'Symbol',
                        'Thalia ',
                        'Thalia Authentique',
                        'Thalia Dynamique',
                        'Thalia Expression'
                    ],
                    'engines' => [
                        '1.2 ess 16V  75ch',
                        '1.4 ess 75ch',
                        '1.5 DCI 65ch',
                        '1.5 Dci 85ch',
                        '1.6 ess 100ch',
                        '1.6 ess MPi  80 ch'
                    ]
                ],
                [
                    'name' => 'Twingo',
                    'versions' => [
                        'Authentic',
                        'Dynamique',
                        'Equilibre',
                        'expression',
                        '( FINITION 1)',
                        'Techno',
                        'Twingo',
                        'Urban Night'
                    ],
                    'engines' => [
                        '1.0 SCe 65ch',
                        '1.2 ess 16V 75ch',
                        '1.2 ess 16V 75ch Quickshift',
                        '1.2 ess 55ch',
                        '1.2 ess 60ch',
                        '1.2 ess 60ch Quickshift',
                        '1.2 GPL 60ch',
                        '1.2 TCE 100ch',
                        '1.5 DCI 65ch',
                        '1.5 DCI 75ch',
                        '1.5 DCI 85ch',
                        '1.5 DCI 90ch',
                        '1.6 ess 133ch',
                        'E-Tech 80ch'
                    ]
                ],
                [
                    'name' => 'Vel Satis',
                    'versions' => [
                        'Vel Satis'
                    ],
                    'engines' => [
                        '2.0 DCI 150ch',
                        '2.0 DCI 175ch',
                        '2.0 ess 165ch',
                        '2.0 ess 170ch',
                        '2.2 DCI 115ch',
                        '2.2 DCI 140ch BVA',
                        '2.2 DCI 150ch',
                        '3.0 DCI 177ch',
                        '3.0 DCI V6 180ch',
                        '3.5 ess V6 240ch',
                        '3.5 ess V6 245ch'
                    ]
                ],
                [
                    'name' => 'Wind',
                    'versions' => [
                        'Wind'
                    ],
                    'engines' => [
                        '1.2 TCE 100ch',
                        '1.6 ess 133ch',
                        '1.6 ess 16V 133ch'
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
