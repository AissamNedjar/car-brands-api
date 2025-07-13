<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class CitroenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Citroen',
            'models' => [
                [
                    'name' => '2 cv',
                    'versions' => [
                        '2 cv'
                    ],
                    'engines' => [
                        '0.4 ess 12ch',
                        '0.4 ess 13ch',
                        '0.4 ess 18ch',
                        '0.4 ess 24ch',
                        '0.4 ess 9ch',
                        '0.6 ess 28ch',
                        '0.6 ess 29ch',
                        '0.9 ess 24ch',
                        '0.9 ess 4X4 28ch'
                    ]
                ],
                [
                    'name' => 'Ami 6',
                    'versions' => [
                        'Ami 6'
                    ],
                    'engines' => [
                        '0.6 ess 22ch',
                        '0.6 ess 26ch',
                        '0.6 ess 28ch',
                        '0.6 ess 35ch'
                    ]
                ],
                [
                    'name' => 'Ami 8',
                    'versions' => [
                        'Ami 8'
                    ],
                    'engines' => [
                        '0.6 ess 35ch'
                    ]
                ],
                [
                    'name' => 'Ami Super',
                    'versions' => [
                        'Ami Super'
                    ],
                    'engines' => [
                        '1.0 ess 61ch'
                    ]
                ],
                [
                    'name' => 'AX',
                    'versions' => [
                        'AX'
                    ],
                    'engines' => [
                        '1.0 ess 45ch',
                        '1.0 ess 50ch',
                        '1.1 ess 55ch',
                        '1.1 ess 60ch',
                        '1.3 ess 95ch',
                        '1.4 D 53ch',
                        '1.4 ess 4X4 75ch',
                        '1.4 ess 65ch',
                        '1.4 ess 70ch',
                        '1.4 ess 75ch',
                        '1.4 GT 75ch',
                        '1.4 GT 85ch',
                        '1.4 GTI 100ch',
                        '1.4 GTI 95ch',
                        '1.5 D 58ch'
                    ]
                ],
                [
                    'name' => 'Berlingo',
                    'versions' => [
                        'Berlingo',
                        'Exclusif Plus',
                        'Feel',
                        'Feel Pack',
                        'L1N1 Atelier',
                        'L1N2 Atelier',
                        'Live',
                        'Niveau 1',
                        'Restylée',
                        'Shine',
                        'Tolé niveau 1 châssis long',
                        'Tolé niveau 2'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.5 BlueHDi 100ch',
                        '1.5 BlueHDi 130ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 90ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 75ch',
                        '1.6 HDI 90ch',
                        '1.6 HDI 92ch',
                        '1.8 ess 90ch',
                        '1.9 D 71ch',
                        '2.0 HDI 90ch'
                    ]
                ],
                [
                    'name' => 'Berlingo First ',
                    'versions' => [
                        'Berlingo First ',
                        'summer',
                        'Tolé'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.9 D 71ch'
                    ]
                ],
                [
                    'name' => 'Berlingo Multispace',
                    'versions' => [
                        'Attraction',
                        'Berlingo Multispace',
                        'Exclusif',
                        'Exclusif Plus',
                        'Feel XTR (Restylé)',
                        '( FINITION 1)',
                        'Live (Restylé)',
                        'Shine (Restylé)',
                        'Spring',
                        'SX Pack',
                        'Vitamine',
                        'WINTER',
                        'XTR',
                        'XTR City Line',
                        'XTR Plus'
                    ],
                    'engines' => [
                        '1.6 ess 110ch',
                        '1.6 ess 90ch',
                        '1.6 HDI 75ch',
                        '1.6 HDI 90ch',
                        '1.6 HDI 92ch'
                    ]
                ],
                [
                    'name' => 'BX',
                    'versions' => [
                        'BX'
                    ],
                    'engines' => [
                        '1.4 ess 62ch',
                        '1.4 ess 72ch',
                        '1.6 ess 80ch',
                        '1.6 ess 90ch',
                        '1.6 ess 92ch',
                        '1.6 ess 94ch',
                        '1.8 D 60ch',
                        '1.8 TD 90ch',
                        '1.9 D 65ch',
                        '1.9 D 71ch',
                        '1.9 ess 107ch',
                        '1.9 ess 126ch',
                        '1.9 ess 160ch',
                        '1.9 ess 4X4 107ch',
                        '1.9 GT 105ch',
                        '1.9 GTI 125ch',
                        '1.9 GTI 4X4 125ch',
                        '2.2 ess 200ch'
                    ]
                ],
                [
                    'name' => 'C1',
                    'versions' => [
                        'C1'
                    ],
                    'engines' => [
                        '1.0 ess 68ch',
                        '1.4 HDI 54ch'
                    ]
                ],
                [
                    'name' => 'C2',
                    'versions' => [
                        'C2'
                    ],
                    'engines' => [
                        '1.1 ess 60ch',
                        '1.4 ess 75ch',
                        '1.4 ess 90ch',
                        '1.4 HDI 70ch',
                        '1.6 ess 16V 110ch',
                        '1.6 HDI 110ch',
                        '1.6 VTS 16V 125ch'
                    ]
                ],
                [
                    'name' => 'C3',
                    'versions' => [
                        'C3',
                        'City Line',
                        'Collection',
                        'C-Series',
                        'ELLE',
                        'Essentiel',
                        'MAX',
                        'Nouvelle Attraction',
                        'Nouvelle Vitamine',
                        'Nouvelle Zénith',
                        'PLUS',
                        'Seduction',
                        'SHINE',
                        'Vitamine',
                        'YOU',
                        'Zénith Pack Chrome'
                    ],
                    'engines' => [
                        '1.1 ess 60ch',
                        '1.2 PureTech 110ch',
                        '1.2 PureTech 83ch',
                        '1.2 VTI 82ch',
                        '1.4 e HDI 70ch',
                        '1.4 ess 16V 90ch',
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.4 HDI 92ch',
                        '1.4 VTI 95ch',
                        '1.5 BlueHDi 100ch',
                        '1.6 e HDI 112ch',
                        '1.6 e HDI 92ch',
                        '1.6 ess 16V 110ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 75ch',
                        '1.6 HDI 90ch',
                        '1.6 HDI 92ch',
                        '1.6 VTI 120ch'
                    ]
                ],
                [
                    'name' => 'C3 Picasso',
                    'versions' => [
                        'C3 Picasso',
                        'Confort',
                        'Seduction'
                    ],
                    'engines' => [
                        '1.4 VTI 95ch',
                        '1.6 e HDI 92ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 90ch',
                        '1.6 VTI 120ch'
                    ]
                ],
                [
                    'name' => 'C3 Pluriel',
                    'versions' => [
                        'C3 Pluriel'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.6 ess 16V 110ch'
                    ]
                ],
                [
                    'name' => 'C4',
                    'versions' => [
                        'Attraction',
                        'C4',
                        'Collection',
                        'C-series',
                        'Exclusive',
                        'Feel',
                        'Feel pack',
                        'Live',
                        'Max',
                        'Phoenix Plus',
                        'Plus',
                        'Seduction',
                        'Shine',
                        'Shine Pack',
                        'Vitamine',
                        'YOU'
                    ],
                    'engines' => [
                        '1.2 PureTech 100ch',
                        '1.2 PureTech 130ch ',
                        '1.4 ess 16V 90ch',
                        '1.5 BlueHDi 130ch',
                        '1.6 e HDI 112ch',
                        '1.6 e-HDi 115ch',
                        '1.6 e HDI 92ch',
                        '1.6 ess 16V 110ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 115ch',
                        '1.6 HDI 90ch',
                        '1.6 HDI 92ch',
                        '1.6 THP 150ch',
                        '1.6 THP 155ch',
                        '1.6 THP 156ch',
                        '1.6 VTI 120ch',
                        '1.6 VTI 120ch BVA',
                        '1.6 VTI 95ch',
                        '2.0 ess 16V 143ch',
                        '2.0 ess 16V 180ch',
                        '2.0 HDI 140ch',
                        '2.0 HDI 150ch',
                        '2.0 VTS 16V 180ch'
                    ]
                ],
                [
                    'name' => 'C4 Aircross',
                    'versions' => [
                        'C4 Aircross',
                        'Exclusive'
                    ],
                    'engines' => [
                        '1.6 HDI 112ch',
                        '1.6 HDI 115ch 4x2',
                        '1.6 HDI 115ch (STT) 4x2',
                        '1.6 VTI 115ch',
                        '1.8 HDI 140ch',
                        '1.8 HDI 150ch',
                        '2.0i 150ch 4x2',
                        '2.0 VTI 150ch 4x2'
                    ]
                ],
                [
                    'name' => 'C4 Cactus',
                    'versions' => [
                        'C4 Cactus',
                        'Feel',
                        'Shine'
                    ],
                    'engines' => [
                        '1.2 VTI 82ch',
                        '1.6 e-HDi BVA'
                    ]
                ],
                [
                    'name' => 'C4 Coupé',
                    'versions' => [
                        'C4 Coupé'
                    ],
                    'engines' => [
                        '1.4 ess 16V 90ch',
                        '1.6 D 110ch'
                    ]
                ],
                [
                    'name' => 'C4 Picasso',
                    'versions' => [
                        '5p',
                        '5 Portes',
                        '7 Portes',
                        'C4 Picasso',
                        'Exclusif 5p ',
                        'Exclusif 7p ',
                        'Seduction 5p',
                        'Seduction 7p',
                        'Selection 5p',
                        'Selection 7p'
                    ],
                    'engines' => [
                        '1.6 e HDI 110ch',
                        '1.6 e HDI 112ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 115ch',
                        '1.6 THP 150ch',
                        '1.6 THP 156ch',
                        '1.6 VTI 120ch',
                        '1.8 ess 16V 127ch',
                        '2.0 ess 16V 143ch',
                        '2.0 HDI 136ch',
                        '2.0 HDI 138ch',
                        '2.0 HDI 150ch',
                        '2.0 HDI 163ch BVA'
                    ]
                ],
                [
                    'name' => 'C5',
                    'versions' => [
                        'C5',
                        'Dynamique',
                        'Dynamique plus',
                        'Exclusive',
                        'Millenium',
                        'Seduction'
                    ],
                    'engines' => [
                        '1.6 HDI 110ch',
                        '1.8 ess 16V 127ch',
                        '2.0 ess 143ch',
                        '2.0 ess 16V 143ch',
                        '2.0 HDI 110ch',
                        '2.0 HDI 138ch',
                        '2.0 HDI 138ch BVA',
                        '2.0 HDI 160ch',
                        '2.0 HDI 160ch BVA',
                        '2.0 HDI 90ch',
                        '2.2 HDI 136ch',
                        '2.2 HDI 136ch BVA',
                        '2.2 HDI 173ch',
                        '2.2 HDI 200ch BVA',
                        '3.0 ess V6 210ch',
                        '3.0 HDI V6 240ch'
                    ]
                ],
                [
                    'name' => 'C5 Tourer',
                    'versions' => [
                        'C5 Tourer'
                    ],
                    'engines' => [
                        '1.6 e HDI 112ch',
                        '1.6 HDI 112ch',
                        '1.6 THP 156ch BVA',
                        '1.6 VTI 120ch',
                        '2.0 HDI 140ch',
                        '2.0 HDI 163ch',
                        '2.2 HDI 204ch BVA',
                        '3.0 HDI V6 240ch BVA'
                    ]
                ],
                [
                    'name' => 'C6',
                    'versions' => [
                        'C6'
                    ],
                    'engines' => [
                        '2.2 HDI 173ch',
                        '2.7 HDI V6 204ch',
                        '2.7 HDI V6 208ch',
                        '3.0 ess V6 215ch',
                        '3.0 HDI V6 240ch BVA'
                    ]
                ],
                [
                    'name' => 'C8',
                    'versions' => [
                        'C8'
                    ],
                    'engines' => [
                        '2.0 ess 136ch',
                        '2.0 ess 16V 140ch',
                        '2.0 HDI 107ch',
                        '2.0 HDI 120ch',
                        '2.0 HDI 135ch',
                        '2.0 HDI 160ch',
                        '2.2 ess 158ch',
                        '2.2 ess 16V 160ch',
                        '2.2 HDI 130ch',
                        '2.2 HDI 173ch',
                        '3.0 ess V6 208ch BVA'
                    ]
                ],
                [
                    'name' => 'C Crosser',
                    'versions' => [
                        'C Crosser'
                    ],
                    'engines' => [
                        '2.2 HDI 160ch'
                    ]
                ],
                [
                    'name' => 'C Elysée',
                    'versions' => [
                        'Attraction',
                        'Attraction plus',
                        'C Elysée',
                        'Edition Spéciale',
                        'Exclusive',
                        'Seduction'
                    ],
                    'engines' => [
                        '1.2 VTI 72ch',
                        '1.6 HDI 92ch',
                        '1.6 VTI 115ch',
                        '1.6 VTI 115ch BVA'
                    ]
                ],
                [
                    'name' => 'CX',
                    'versions' => [
                        'CX'
                    ],
                    'engines' => [
                        '2.0 ess 102ch',
                        '2.0 ess 106ch',
                        '2.2 D 66ch',
                        '2.2 ess 112ch',
                        '2.2 ess 115ch',
                        '2.4 ess 115ch',
                        '2.4 ess 128ch',
                        '2.5 D 75ch',
                        '2.5 ess 138ch',
                        '2.5 ess Turbo 168ch',
                        '2.5 GTI 138ch',
                        '2.5 TD 120ch'
                    ]
                ],
                [
                    'name' => 'Dyane',
                    'versions' => [
                        'Dyane'
                    ],
                    'engines' => [
                        '0.4 ess 21ch',
                        '0.4 ess 26ch',
                        '0.6 ess 28ch',
                        '0.6 ess 30ch',
                        '0.6 ess 32ch',
                        '0.6 ess 33ch',
                        '0.6 ess 35ch'
                    ]
                ],
                [
                    'name' => 'Evasion',
                    'versions' => [
                        'Evasion'
                    ],
                    'engines' => [
                        '1.9 TD 92ch',
                        '2.0 ess 123ch',
                        '2.0 ess 16V 138ch',
                        '2.0 HDI 110ch',
                        '2.1 TD 110ch'
                    ]
                ],
                [
                    'name' => 'GS',
                    'versions' => [
                        'GS'
                    ],
                    'engines' => [
                        '0.0 ess 107ch',
                        '1.0 ess 55ch',
                        '1.1 ess 56ch',
                        '1.2 ess 60ch',
                        '1.2 ess 64ch',
                        '1.3 ess 65ch'
                    ]
                ],
                [
                    'name' => 'GSA',
                    'versions' => [
                        'GSA'
                    ],
                    'engines' => [
                        '1.1 ess 56ch',
                        '1.3 ess 65ch'
                    ]
                ],
                [
                    'name' => 'ID',
                    'versions' => [
                        'ID'
                    ],
                    'engines' => [
                        '1.9 ess 66ch',
                        '1.9 ess 70ch',
                        '1.9 ess 74ch',
                        '2.0 ess 78ch',
                        '2.0 ess 81ch',
                        '2.0 ess 91ch'
                    ]
                ],
                [
                    'name' => 'Jumper',
                    'versions' => [
                        'Jumper',
                        'L1H1',
                        'L2H2',
                        'L3H2',
                        'L3H2 Plus'
                    ],
                    'engines' => [
                        '2.2 HDI 101ch',
                        '2.2 HDI 120ch',
                        '2.2 HDI 130ch'
                    ]
                ],
                [
                    'name' => 'Jumpy',
                    'versions' => [
                        'Atelier (L2H1)',
                        'Combi',
                        'Jumpy',
                        'L1H1',
                        'L2H1'
                    ],
                    'engines' => [
                        '1.6 HDI 92ch',
                        '2.0 BlueHDi 180ch',
                        '2.0 HDI 120ch'
                    ]
                ],
                [
                    'name' => 'Jumpy Multispace',
                    'versions' => [
                        'Jumpy Multispace',
                        'L1H1',
                        'L2H1'
                    ],
                    'engines' => [
                        '1.6 HDI 90ch',
                        '2.0 HDI 120ch'
                    ]
                ],
                [
                    'name' => 'LN',
                    'versions' => [
                        'LN'
                    ],
                    'engines' => [
                        '0.6 ess 32ch'
                    ]
                ],
                [
                    'name' => 'LNA',
                    'versions' => [
                        'LNA'
                    ],
                    'engines' => [
                        '0.7 ess 34ch',
                        '1.1 ess 50ch'
                    ]
                ],
                [
                    'name' => 'M35',
                    'versions' => [
                        'M35'
                    ],
                    'engines' => [
                        '1.0 ess 49ch'
                    ]
                ],
                [
                    'name' => 'Méhari',
                    'versions' => [
                        'Méhari'
                    ],
                    'engines' => [
                        '0.6 ess 26ch',
                        '0.6 ess 28ch',
                        '0.6 ess 29ch',
                        '0.6 ess 4X4 29ch'
                    ]
                ],
                [
                    'name' => 'Nemo',
                    'versions' => [
                        'Attraction',
                        'Confort',
                        'Séduction ',
                        'Vitamine'
                    ],
                    'engines' => [
                        '1.3 HDI 75ch',
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch'
                    ]
                ],
                [
                    'name' => 'Nemo Tolé',
                    'versions' => [
                        'Nemo Tolé'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.4 HDI 73ch'
                    ]
                ],
                [
                    'name' => 'Saxo',
                    'versions' => [
                        'Saxo'
                    ],
                    'engines' => [
                        '0.0  27ch Electrique',
                        '1.0 ess 50ch',
                        '1.1 ess 60ch',
                        '1.4 ess 75ch',
                        '1.4 VTS 75ch',
                        '1.5 D 58ch',
                        '1.6 VTS 100ch',
                        '1.6 VTS 16V 120ch',
                        '1.6 VTS 90ch'
                    ]
                ],
                [
                    'name' => 'SM',
                    'versions' => [
                        'SM'
                    ],
                    'engines' => [
                        '2.7 ess 170ch',
                        '2.7 ess 178ch',
                        '3.0 ess 180ch BVA'
                    ]
                ],
                [
                    'name' => 'Visa',
                    'versions' => [
                        'Visa'
                    ],
                    'engines' => [
                        '0.7 ess 34ch',
                        '0.7 ess 35ch',
                        '0.7 ess 36ch',
                        '1.0 ess 45ch',
                        '1.1 ess 50ch',
                        '1.1 ess 57ch',
                        '1.2 ess 64ch',
                        '1.4 ess 112ch',
                        '1.4 ess 60ch',
                        '1.4 ess 93ch',
                        '1.4 GT 80ch',
                        '1.6 GTI 105ch',
                        '1.6 GTI 115ch',
                        '1.8 D 60ch'
                    ]
                ],
                [
                    'name' => 'Xantia',
                    'versions' => [
                        'Xantia'
                    ],
                    'engines' => [
                        '1.6 ess 90ch',
                        '1.8 ess 103ch',
                        '1.8 ess 16V 112ch',
                        '1.9 D 71ch',
                        '1.9 D 75ch',
                        '1.9 TD 92ch',
                        '2.0 ess 123ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 155ch',
                        '2.0 ess Turbo 150ch',
                        '2.0 HDI 110ch',
                        '2.0 HDI 90ch',
                        '2.1 TD 110ch',
                        '3.0 ess V6 194ch'
                    ]
                ],
                [
                    'name' => 'XM',
                    'versions' => [
                        'XM'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.0 ess 130ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess Turbo 145ch',
                        '2.1 D 83ch',
                        '2.1 TD 110ch',
                        '2.5 TD 130ch',
                        '3.0 ess V6 170ch',
                        '3.0 ess V6 194ch',
                        '3.0 ess V6 200ch'
                    ]
                ],
                [
                    'name' => 'Xsara',
                    'versions' => [
                        'Xsara'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.6 ess 16V 110ch',
                        '1.8 ess 16V 112ch',
                        '1.8 ess 90ch',
                        '1.9 D 68ch',
                        '1.9 TD 90ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 137ch',
                        '2.0 HDI 110ch',
                        '2.0 HDI 90ch',
                        '2.0 VTS 16V 167ch'
                    ]
                ],
                [
                    'name' => 'Xsara Picasso',
                    'versions' => [
                        'Xsara Picasso'
                    ],
                    'engines' => [
                        '1.6 ess 16V 110ch',
                        '1.6 ess 90ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 92ch',
                        '1.8 ess 16V 117ch',
                        '2.0 ess 16V 137ch',
                        '2.0 HDI 90ch'
                    ]
                ],
                [
                    'name' => 'ZX',
                    'versions' => [
                        'ZX'
                    ],
                    'engines' => [
                        '1.1 ess 60ch',
                        '1.4 ess 75ch',
                        '1.6 ess 89ch',
                        '1.8 ess 103ch',
                        '1.8 ess 16V 112ch',
                        '1.9 D 71ch',
                        '1.9 ess 130ch',
                        '1.9 TD 92ch',
                        '2.0 ess 123ch',
                        '2.0 ess 16V 150ch',
                        '2.0 ess 16V 155ch',
                        '2.0 ess 16V 167ch'
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
