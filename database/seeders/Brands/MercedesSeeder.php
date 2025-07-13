<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class MercedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Mercedes',
            'models' => [
                [
                    'name' => 'AMG GT',
                    'versions' => [
                        'E Performance',
                        'GT'
                    ],
                    'engines' => [
                        '(C192) 43 421ch',
                        '(C192) 63 585ch 4Matic+',
                        '(C192) 63 816ch '
                    ]
                ],
                [
                    'name' => 'Citan ',
                    'versions' => [
                        'Citan '
                    ],
                    'engines' => [
                        '1.2 ess 114 ch'
                    ]
                ],
                [
                    'name' => 'CL',
                    'versions' => [
                        'CL'
                    ],
                    'engines' => [
                        '420',
                        '420 SEC',
                        '500 306ch',
                        '500 388ch',
                        '500 BlueEFFICIENCY 435ch',
                        '500 SEC',
                        '55 AMG',
                        '560 SEC',
                        '600 V12',
                        '600 V8',
                        '63 AMG 525ch',
                        '63 AMG 544ch',
                        '65 AMG 612ch',
                        '65 AMG 630ch'
                    ]
                ],
                [
                    'name' => 'CLA',
                    'versions' => [
                        'Coupé',
                        'Coupé Edition 1',
                        ' Coupé Edition One',
                        'Coupé Exclusif +',
                        'Coupé Exclusif + AMG '
                    ],
                    'engines' => [
                        '200 BleuEfficiency 156ch',
                        '200 d BleuEfficiency 136ch',
                        '250 BleuEfficiancy 211ch',
                        '45 AMG 360ch 4MATIC'
                    ]
                ],
                [
                    'name' => 'CLA Shooting Brake',
                    'versions' => [
                        'Edition Orange Art',
                        'Modéle Sport',
                        'Pack Exclusif AMG'
                    ],
                    'engines' => [
                        '45 AMG 360ch 4MATIC',
                        '7G-DCT 211 ch'
                    ]
                ],
                [
                    'name' => 'Classe A',
                    'versions' => [
                        '180  Confort',
                        '180  Exclusif +',
                        '180  Nuit',
                        '180  Sport +',
                        '180  Style',
                        '200 d  Exclusif +',
                        '200 Exclusif',
                        '200 Sport +',
                        '250 Exclusif',
                        '250 Sport +',
                        '45 AMG Pack Exclusif',
                        'AMG',
                        'AMG Line',
                        'AMG S',
                        'Business Line',
                        'Classe A',
                        'Edition 1',
                        'Edition Street Style',
                        'Progressive Line'
                    ],
                    'engines' => [
                        '140',
                        '150',
                        '160',
                        '160 BlueEFFICIENCY',
                        '160 CDI',
                        '160 CDI BlueEFFICIENCY',
                        '1.6 ess BlueEfficiency 136ch',
                        '170',
                        '170 CDI Auto',
                        '180',
                        '180 136ch',
                        '180 BlueEFFICIENCY 116ch',
                        '180 d 116ch',
                        '190',
                        '200 163ch',
                        '200 d 150ch ',
                        '200 d FL 136ch',
                        '200 Turbo',
                        '35 AMG 306ch 4Matic',
                        '45 S AMG 421ch 4Matic+ 8G-DCT Speedshift',
                        'A170 CDI',
                        'A170 CDI Family',
                        'A180 BlueEFFICIENCY 122ch',
                        'A180 CDI',
                        'A180 CDI BlueEFFICIENCY 109ch BVA',
                        'A200 156ch BlueEFFICIENCY',
                        'A200 CDI 140ch',
                        'A250 BlueEFFICIENCY',
                        'A45 AMG 360ch 4MATIC'
                    ]
                ],
                [
                    'name' => 'Classe B',
                    'versions' => [
                        '180 BlueEFFICIENCY',
                        '180 BlueEfficiency  Exclusif',
                        '180 BlueEFFICIENCY Sport',
                        '200',
                        '200 d Pack Urban',
                        'AMG Line',
                        'Business Line',
                        'Progressive Line'
                    ],
                    'engines' => [
                        '150',
                        '160 BlueE',
                        '160 BlueEFFICIENCY',
                        '170',
                        '180 136ch',
                        '180 BlueE',
                        '180 BlueEFFICIENCY 116ch',
                        '180 BlueEFFICIENCY 122ch',
                        '180 BlueEFFICIENCY CDI 109ch 7G-DTC',
                        '180 CDI',
                        '180d 116ch',
                        '200',
                        '200 163ch ',
                        '200 BlueEFFICIENCY',
                        '200 CDI',
                        '200 CDI 136',
                        '200 CDI 136ch BA 7G-DCT',
                        '200 CDI 140',
                        '200d 150ch ',
                        '200 Turbo'
                    ]
                ],
                [
                    'name' => 'Classe C',
                    'versions' => [
                        '220 AMG Line',
                        '220 Designo',
                        '220 Exclusive',
                        '250 AMG Line',
                        '250 AVANTGARDE ',
                        '250 AVANTGARDE Designo',
                        '250 pack sport AMG',
                        'AMG',
                        'AMG F1 Edition',
                        'AMG line',
                        'AMG S',
                        'Avantgarde Line',
                        'Business Line',
                        'Classe C'
                    ],
                    'engines' => [
                        '180',
                        '180 7cv',
                        '180 8cv',
                        '180 BlueEFFICIENCY',
                        '180 CDI BlueEFFICIENCY',
                        '180 CGI BlueEFFICIENCY',
                        '180 GPL',
                        '180 K 143',
                        '180 K 156',
                        '180 Kompressor',
                        '190',
                        '190 D',
                        '190 D 2.5',
                        '190 D 2.5 Turbo',
                        '190 E',
                        '190 E 1.8',
                        '190 E 2.3',
                        '190 E 2.3-16',
                        '190 E 2.5-16',
                        '190 E 2.5-16 Evo. 2',
                        '190 E 2.6',
                        '200',
                        '200 204ch',
                        '200 BlueEFFICIENCY',
                        '200 CDI',
                        '200 CDI 122',
                        '200 CDI 136',
                        '200 CDI BlueEfficiency',
                        '200 D',
                        '200 d 163ch',
                        '200 K 163',
                        '200 K 184',
                        '200 Kompressor',
                        '220',
                        '220 CDI',
                        '220 CDI 150',
                        '220 CDI 170ch',
                        '220 CDI BlueEfficiency',
                        '220 d 197ch',
                        '220 D 7cv',
                        '220 D 8cv',
                        '230 170ch',
                        '230 204ch',
                        '230 Kompressor',
                        '240',
                        '250 BlueEFFICIENCY 211ch',
                        '250 CDI 204',
                        '250 CDI 204ch 4 Matic',
                        '250 CDI BlueEfficiency',
                        '250 D',
                        '250 TD 7cv',
                        '250 TD 8cv',
                        '270 CDI',
                        '280',
                        '280 4Matic',
                        '280 Auto',
                        '300',
                        '300 CDI 4MATIC',
                        '300 CDI AMG',
                        '300 d e 197+129ch',
                        '320 CDI',
                        '350',
                        '350 4Matic',
                        '350 BlueEFFICIENCY',
                        '350 CDI BlueEfficiency',
                        '350 CDI BluEFFICIENCY',
                        '43 AMG 408ch',
                        '55 AMG',
                        '63 AMG'
                    ]
                ],
                [
                    'name' => 'Classe C coupé',
                    'versions' => [
                        'Classe C coupé'
                    ],
                    'engines' => [
                        '180 BlueEFFICIENCY',
                        '180 CGI BlueEFFICIENCY',
                        '180 Sport',
                        '220 CDI',
                        '220 CDI Auto',
                        '220 CDI BlueEfficiency',
                        '230K Sport',
                        '250 BlueEFFICIENCY',
                        '250 CDI',
                        '250 CDI BlueEfficiency',
                        '350 BlueEFFICIENCY',
                        '63 AMG',
                        '63 AMG Black Series'
                    ]
                ],
                [
                    'name' => 'Classe E',
                    'versions' => [
                        '53 AMG',
                        'AMG',
                        'AMG Line',
                        'AMG S',
                        'AMG S Final Edition',
                        'Avantgarde Line',
                        'AVANTGARDE Pack AMG',
                        'Classe E',
                        'Exclusive Line',
                        'Sport AMG',
                        'Technologie +'
                    ],
                    'engines' => [
                        '200',
                        '200 BlueEFFICIENCY',
                        '200 CDI',
                        '200 CDI BlueEfficiency',
                        '200 CGI',
                        '200 D',
                        '200 E',
                        '200 K',
                        '220',
                        '220 CDI',
                        '220 CDI 4MATIC 170ch',
                        '220 CDI BlueEfficiency',
                        '220 D',
                        '220 d 194ch',
                        '220 d 200+20ch',
                        '220 d 200+20ch AMG Line 9G-Tronic',
                        '220 E',
                        '230',
                        '230 E',
                        '240',
                        '240 D',
                        '250',
                        '250 BlueEFFICIENCY',
                        '250 CDI 204ch',
                        '250 CDI BlueEfficiency 204',
                        '250 CDI BlueEfficiency 211',
                        '250 CE',
                        '250 CGI',
                        '250 D',
                        '250 D Turbo',
                        '250 TD',
                        '260 E',
                        '260 E 4 Matic',
                        '270 CDI',
                        '270 CDI Speedtronic',
                        '280',
                        '280 4 Matic',
                        '280 C',
                        '280 CDI',
                        '280 CE',
                        '280 E',
                        '290 TD',
                        '300 258ch',
                        '300 CDI BlueEfficeincy',
                        '300 CDI BlueEFFICIENCY',
                        '300 CDI Bluetec',
                        '300 CE-24',
                        '300 D',
                        '300 D 4 Matic',
                        '300 D Turbo',
                        '300 D Turbo 4 Matic',
                        '300 E',
                        '300 E-24',
                        '300 TD',
                        '300 TD Turbo',
                        '320',
                        '320 CDI',
                        '320 E',
                        '350',
                        '350 4Matic',
                        '350 BlueEFFICIENCY',
                        '350 CDI BlueEfficiency 231',
                        '350 CDI BlueEfficiency 265',
                        '350 CDI BlueTec',
                        '350 CGI',
                        '350 d 313ch',
                        '400 d 330ch ',
                        '420 CDI',
                        '500 388ch',
                        '500 408ch',
                        '53 AMG 435ch',
                        '53 AMG 435ch 4Matic+ Speedshift TCT',
                        '63 AMG 514ch',
                        '63 AMG 525ch',
                        '63 AMG S 612ch 4Matic+ Speedshift MCT '
                    ]
                ],
                [
                    'name' => 'Classe E cabriolet',
                    'versions' => [
                        'Classe E cabriolet'
                    ],
                    'engines' => [
                        '200',
                        '200 BlueEFFICIENCY',
                        '200 CGI',
                        '220 CDI BlueEfficiency',
                        '250 BlueEFFICIENCY',
                        '250 CDI BlueEfficiency',
                        '250 CGI',
                        '300 BlueEFFICIENCY',
                        '350 BlueEFFICIENCY',
                        '350 CDI BlueEfficiency',
                        '350 CGI',
                        '500 388ch',
                        '500 408ch'
                    ]
                ],
                [
                    'name' => 'Classe E coupé',
                    'versions' => [
                        'Classe E coupé'
                    ],
                    'engines' => [
                        '200 BlueEFFICIENCY',
                        '220',
                        '220 CDI BlueEfficiency',
                        '250 BlueEFFICIENCY',
                        '250 CDI BlueEfficiency',
                        '250 CGI',
                        '300 BlueEFFICIENCY',
                        '320',
                        '350 BlueEFFICIENCY',
                        '350 CDI BlueEfficiency',
                        '350 CGI',
                        '500 388ch',
                        '500 408ch'
                    ]
                ],
                [
                    'name' => 'Classe G',
                    'versions' => [
                        'Classe G'
                    ],
                    'engines' => [
                        '230 G 100ch',
                        '230 G 90',
                        '230 GE',
                        '240 GD',
                        '250 GD',
                        '270 CDI',
                        '280 GE',
                        '300 GD',
                        '300 GE',
                        '300 GE Long',
                        '300 TD',
                        '320',
                        '320 CDI',
                        '320 GE',
                        '350 CDI',
                        '350 CDI BlueTEC',
                        '350 GD Turbo',
                        '400 CDI',
                        '400 CDI Long',
                        '500',
                        '500 296ch',
                        '500 388ch',
                        '500 GE Long',
                        '55 AMG'
                    ]
                ],
                [
                    'name' => 'Classe M',
                    'versions' => [
                        'Classe M'
                    ],
                    'engines' => [
                        '250 CDI 204ch 4 Matic 7 G-Tronic Plus'
                    ]
                ],
                [
                    'name' => 'Classe R',
                    'versions' => [
                        'Classe R'
                    ],
                    'engines' => [
                        '280 CDI',
                        '300 CDI 4Matic',
                        '300 CDI BlueEfficiency',
                        '320 CDI',
                        '320 CDI 4Matic',
                        '350',
                        '350 4Matic 272ch',
                        '350 4Matic 306ch',
                        '350 CDI 4 Matic',
                        '350 CDI 4Matic',
                        '350 CDI 4Matic 224ch',
                        '350 CDI 4Matic 265ch',
                        '350 CDI BlueTec 211ch',
                        '350 CDI BlueTec 224ch',
                        '500',
                        '500 4Matic',
                        '63 AMG'
                    ]
                ],
                [
                    'name' => 'Classe S',
                    'versions' => [
                        'AMG Edition 1',
                        'AMG Line',
                        'AMG S',
                        'Classe S',
                        'Executive',
                        'Maybach',
                        'Maybach Edition 100',
                        'Maybach Night Series'
                    ],
                    'engines' => [
                        '220 Sb',
                        '220 SEb',
                        '250 CDI BlueEfficiency',
                        '260 SE',
                        '280',
                        '280 S',
                        '280 SE',
                        '280 SEL',
                        '300 SD',
                        '300 SE',
                        '300 SE 2.8',
                        '300 SE Auto',
                        '300 SEL',
                        '300 SEL 3.5',
                        '300 SEL 6.3',
                        '300 TD',
                        '320',
                        '320 CDI',
                        '320 Lang',
                        '350',
                        '350 BlueEFFICIENCY',
                        '350 CDI BlueEfficiency 235ch',
                        '350 CDI BlueEfficiency 258ch',
                        '350 d 286ch',
                        '350 SE',
                        '350 SEL',
                        '350 TD',
                        '400 Hybrid',
                        '420',
                        '420 CDI',
                        '420 Lang',
                        '420 SE',
                        '420 SEL',
                        '450',
                        '450 CDI BlueEfficiency',
                        '450d 367ch ',
                        '450 SE',
                        '450 SEL',
                        '450 SEL 6.9',
                        '500',
                        '500 BlueEFFICIENCY',
                        '500 SE',
                        '500 SEL',
                        '560 SEL',
                        '580 503ch ',
                        '600',
                        '600 L',
                        '600 Limousine',
                        '600 Pullman',
                        '63 AMG 525ch',
                        '63 AMG 544ch',
                        '65 AMG 612ch',
                        '65 AMG 630ch',
                        '680 612ch'
                    ]
                ],
                [
                    'name' => 'Classe S cabriolet',
                    'versions' => [
                        'Classe S cabriolet'
                    ],
                    'engines' => [
                        '220 SEb'
                    ]
                ],
                [
                    'name' => 'Classe S coupé',
                    'versions' => [
                        'Classe S coupé'
                    ],
                    'engines' => [
                        '220 SEb'
                    ]
                ],
                [
                    'name' => 'Classe V',
                    'versions' => [
                        'Classe V'
                    ],
                    'engines' => [
                        '220 d L 163 ch',
                        '230'
                    ]
                ],
                [
                    'name' => 'Classe V',
                    'versions' => [
                        'Avantgarde',
                        'Exclusive',
                        'Style'
                    ],
                    'engines' => [
                        '220 d Compact ',
                        '250 d Compact',
                        ' 300 d 272ch+20ch ',
                        '300 d Compact ',
                        '400 d 330ch',
                        '63 S AMG 612ch+22ch EQ Boost '
                    ]
                ],
                [
                    'name' => 'CLC',
                    'versions' => [
                        'CLC'
                    ],
                    'engines' => [
                        '180 K',
                        '180 Kompressor',
                        '200 CDI',
                        '200 K',
                        '220 CDI',
                        '230',
                        '250',
                        '350'
                    ]
                ],
                [
                    'name' => 'CLK',
                    'versions' => [
                        'CLK'
                    ],
                    'engines' => [
                        '200',
                        '200 K 163ch',
                        '200 K 184ch',
                        '220 CDI',
                        '230 Kompressor',
                        '280',
                        '320',
                        '320 CDI',
                        '350',
                        '500',
                        '55 AMG',
                        '63 AMG',
                        'DTM AMG'
                    ]
                ],
                [
                    'name' => 'CLK cabriolet',
                    'versions' => [
                        'CLK cabriolet'
                    ],
                    'engines' => [
                        '200 K',
                        '200 K 163ch',
                        '200 K 184ch',
                        '230 K',
                        '280',
                        '320 CDI',
                        '350',
                        '500',
                        '63 AMG',
                        'DTM AMG'
                    ]
                ],
                [
                    'name' => 'CLK GTR',
                    'versions' => [
                        'CLK GTR'
                    ],
                    'engines' => [
                        '6.9 V12 612ch'
                    ]
                ],
                [
                    'name' => 'CLS',
                    'versions' => [
                        'CLS'
                    ],
                    'engines' => [
                        '250 CDI BlueEfficiency',
                        '280',
                        '300',
                        '320 CDI',
                        '350 BlueEFFICIENCY',
                        '350 CDI',
                        '350 CDI BlueEfficiency',
                        '350 CGI',
                        '500 388ch',
                        '500 408ch',
                        '500 BlueEFFICIENCY',
                        '55 AMG',
                        '63 AMG 514ch',
                        '63 AMG 525ch'
                    ]
                ],
                [
                    'name' => 'CLS Shooting Brake',
                    'versions' => [
                        'CLS Shooting Brake'
                    ],
                    'engines' => [
                        '250 CDI BlueEfficiency',
                        '350 BlueEFFICIENCY',
                        '350 CDI BlueEfficiency',
                        '500 BlueEFFICIENCY'
                    ]
                ],
                [
                    'name' => 'GL',
                    'versions' => [
                        'GL'
                    ],
                    'engines' => [
                        '320 CDI',
                        '350 CDI',
                        '350 CDI BlueEfficiency',
                        '350 CDI BlueTec',
                        '350 CDI BlueTEC 4MATIC',
                        '420 CDI',
                        '450',
                        '450 CDI',
                        '500'
                    ]
                ],
                [
                    'name' => 'GLA',
                    'versions' => [
                        '45 AMG',
                        'AMG',
                        'AMG Line',
                        'AMG Line',
                        'AMG S',
                        'Business Line',
                        'Edition 1',
                        'Exclusif+',
                        'GLA',
                        'Progressive Line'
                    ],
                    'engines' => [
                        '180 136ch',
                        '180 d 116ch ',
                        '200 163ch',
                        '200 CDI 136ch',
                        '200 d 150ch',
                        '220 CDI 4MATIC 170ch',
                        '220 d 190ch',
                        '220 d 4MATIC 170ch',
                        '250 224ch',
                        '35 AMG 306ch 4Matic 8G-DCT Speedshift',
                        '45 AMG 4MATIC 360ch',
                        '45 S AMG 421ch 8G-DCT Speedshift'
                    ]
                ],
                [
                    'name' => 'GLC',
                    'versions' => [
                        'AMG',
                        'AMG Line',
                        'AMG S',
                        'AMG S Edition 1',
                        'Avantgarde Line',
                        'Business Line',
                        'GLC'
                    ],
                    'engines' => [
                        '220 d 197ch',
                        '250 AMG LINE + 211ch',
                        '43 AMG 421ch 4Matic Speedshift 9G',
                        ' 450 d 367ch '
                    ]
                ],
                [
                    'name' => 'GLE',
                    'versions' => [
                        'AMG',
                        'AMG Edition 55',
                        'AMG Line +',
                        'AMG Line',
                        'Avantgarde Line',
                        'Coupé',
                        'Designo'
                    ],
                    'engines' => [
                        '250 d 4Matic 204ch',
                        '300 d 269ch ',
                        '350 d 4Matic 258ch'
                    ]
                ],
                [
                    'name' => 'GLK',
                    'versions' => [
                        'EXCLUSIF ',
                        'GLK',
                        'TECHNOLOGIE + '
                    ],
                    'engines' => [
                        '200 CDI BlueEfficiency',
                        '220 CDI',
                        '220 CDI 4MATIC',
                        '220 CDI BlueEfficiency',
                        '250 CDI 4MATIC BlueEfficiency',
                        '280',
                        '300',
                        '320 CDI',
                        '350',
                        '350 4MATIC BlueEFFICIENCY',
                        '350 CDI',
                        '350 CDI BlueEfficiency'
                    ]
                ],
                [
                    'name' => 'ML',
                    'versions' => [
                        '250 CDI Pack AMG',
                        'ML'
                    ],
                    'engines' => [
                        '230',
                        '250 BlueTEC 4MATIC',
                        '270 CDI',
                        '270 CDI Auto',
                        '280 CDI',
                        '300 CDI',
                        '300 CDI BlueEFFICIENCY',
                        '320 CDI',
                        '350',
                        '350 4MATIC BlueEFFICIENCY',
                        '350 BlueTEC 4MATIC',
                        '350 CDI',
                        '350 CDI BlueTec',
                        '350 CDI BlueTec 4MATIC',
                        '420 CDI',
                        '450 CDI',
                        '500',
                        '55 AMG',
                        '63 AMG'
                    ]
                ],
                [
                    'name' => 'SL',
                    'versions' => [
                        'SL'
                    ],
                    'engines' => [
                        '280',
                        '300',
                        '300-24',
                        '320',
                        '350',
                        '350 245ch',
                        '350 272ch',
                        '350 315ch',
                        '350 BlueEFFICIENCY',
                        '380',
                        '420',
                        '450',
                        '500',
                        '500 306ch',
                        '500 388ch',
                        '500 BlueEFFICIENCY',
                        '55 AMG',
                        '600',
                        '63 AMG',
                        '65 AMG',
                        '65 AMG Black Series'
                    ]
                ],
                [
                    'name' => 'SLC',
                    'versions' => [
                        'SLC'
                    ],
                    'engines' => [
                        '280',
                        '350',
                        '380',
                        '450',
                        '500'
                    ]
                ],
                [
                    'name' => 'SLK',
                    'versions' => [
                        'SLK'
                    ],
                    'engines' => [
                        '200',
                        '200 BlueEFFICIENCY',
                        '200 K',
                        '200 Kompressor',
                        '230 Kompressor',
                        '250 BlueEFFICIENCY',
                        '250 BlueEFFICIENCY 204ch',
                        '250 CDI BlueEfficiency',
                        '280',
                        '300',
                        '320',
                        '350',
                        '350 BlueEFFICIENCY',
                        '55 AMG 360ch',
                        '55 AMG 421ch'
                    ]
                ],
                [
                    'name' => 'SLR',
                    'versions' => [
                        'SLR'
                    ],
                    'engines' => [
                        '5.5 V8 626ch',
                        '722 S',
                        'Mc Laren'
                    ]
                ],
                [
                    'name' => 'SLS',
                    'versions' => [
                        'SLS'
                    ],
                    'engines' => [
                        'AMG',
                        'Roadster'
                    ]
                ],
                [
                    'name' => 'Sprinter',
                    'versions' => [
                        'Sprinter',
                        'Surélevé chassis long',
                        'Surélevé chassis moyen'
                    ],
                    'engines' => [
                        'CDI  311'
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
