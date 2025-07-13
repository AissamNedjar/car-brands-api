<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class AudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Audi',
            'models' => [
                [
                    'name' => '100',
                    'versions' => [
                        '100'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.0 TD 100ch',
                        '2.0 TD 87ch',
                        '2.2 ess 230ch',
                        '2.3 ess 133ch',
                        '2.4 D 82ch',
                        '2.5 TDI 115ch',
                        '2.8 ess 174ch',
                        '2.8 ess Quattro 174ch',
                        '4.2 ess 280ch'
                    ]
                ],
                [
                    'name' => '200',
                    'versions' => [
                        '200'
                    ],
                    'engines' => [
                        '2.2 ess 136ch',
                        '2.2 ess 170ch',
                        '2.2 ess Quattro 182ch',
                        '2.2 ess Quattro 200ch',
                        '2.2 ess Quattro 220ch',
                        '2.2 ess Turbo 182ch'
                    ]
                ],
                [
                    'name' => '80',
                    'versions' => [
                        '80'
                    ],
                    'engines' => [
                        '1.6 ess 101ch',
                        '1.6 GT 100ch',
                        '1.6 TD 70ch',
                        '1.6 TD 80ch',
                        '1.8 ess 112ch',
                        '1.8 ess 90ch',
                        '1.8 ess Quattro 112ch',
                        '1.9 D 68ch',
                        '1.9 TD 75ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 113ch',
                        '2.0 ess 115ch',
                        '2.0 ess 16V 137ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 90ch',
                        '2.2 ess 230ch',
                        '2.2 ess 315ch',
                        '2.6 ess 150ch'
                    ]
                ],
                [
                    'name' => '90',
                    'versions' => [
                        '90'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.0 ess Quattro 160ch',
                        '2.2 ess 136ch',
                        '2.3 ess 136ch',
                        '2.3 ess 170ch',
                        '2.3 ess Quattro 136ch',
                        '2.3 ess Quattro 170ch'
                    ]
                ],
                [
                    'name' => 'A1',
                    'versions' => [
                        'A1',
                        'S Line'
                    ],
                    'engines' => [
                        '1.2 TFSI 86ch',
                        '1.4 TFSI 122ch',
                        '1.4 TFSI 185ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch',
                        '2.0 ess Quattro 256ch',
                        '2.0 TDI 143ch'
                    ]
                ],
                [
                    'name' => 'A1 Sportback',
                    'versions' => [
                        'A1 Sport Back',
                        'Addiction',
                        'Admired',
                        'Advenced',
                        'Allstreet',
                        'Avus',
                        'Black Edition',
                        'Disign Luxe',
                        'Intuition',
                        'Prismo',
                        'Sensation',
                        'S Line',
                        'S line',
                        'S Line Plus',
                        'White Edition'
                    ],
                    'engines' => [
                        '1.0 TFSI 110ch',
                        '1.0 TFSI 116ch',
                        '1.0 TFSI 95ch',
                        '1.4 TFSI 122ch S-Tronic',
                        '1.5 TFSI 150ch',
                        '2.0 TFSI 207ch'
                    ]
                ],
                [
                    'name' => 'A2',
                    'versions' => [
                        'A2'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.6 FSI 110ch'
                    ]
                ],
                [
                    'name' => 'A3',
                    'versions' => [
                        'A3',
                        'Addiction',
                        'Intuition',
                        'Sensation',
                        'S Line'
                    ],
                    'engines' => [
                        '1.2 TFSI 105ch',
                        '1.4 TFSI 125ch',
                        '1.6 ess 101ch',
                        '1.6 ess 102ch',
                        '1.6 FSI 115ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch',
                        '1.8 ess 125ch',
                        '1.8 ess 150ch',
                        '1.8 ess 180ch',
                        '1.8 TFSI 180ch',
                        '1.8 TFSI Quattro 180ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 90ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 143ch S-Tronic',
                        '2.0 TDI 170ch',
                        '2.0 TDI Quattro 140ch',
                        '2.0 TDI Quattro 170ch',
                        '2.0 TFSI 200ch',
                        '3.2 ess V6 Quattro 250ch',
                        'TFSI 160ch'
                    ]
                ],
                [
                    'name' => 'A3 Allstreet',
                    'versions' => [
                        'Avus',
                        'Design'
                    ],
                    'engines' => [
                        '1.0 TFSI 110ch',
                        '1.0 TFSI 116ch',
                        '1.5 TFSI 150ch',
                        '2.0 TDI 116ch',
                        '2.0 TDI 150ch',
                        '2.0 TDI 200ch',
                        '2.0 TFSI 190ch'
                    ]
                ],
                [
                    'name' => 'A3 Berline',
                    'versions' => [
                        'Advanced',
                        'Basis',
                        'Business Executive ',
                        'Design ',
                        'S Line '
                    ],
                    'engines' => [
                        '1.5 TFSI 116ch',
                        '1.5 TFSI 150ch',
                        '2.0 TDI 116ch',
                        '2.0 TDI 150ch '
                    ]
                ],
                [
                    'name' => 'A3 Cabriolet',
                    'versions' => [
                        'A3 Cabriolet'
                    ],
                    'engines' => [
                        '1.2 TFSI 105ch',
                        '1.4 TFSI 125ch',
                        '1.6 TDI 105ch',
                        '1.8 TFSI 160ch',
                        '1.9 TDI 105ch',
                        '2.0 TDI 140ch',
                        '2.0 TFSI 200ch'
                    ]
                ],
                [
                    'name' => 'A3 Limousine',
                    'versions' => [
                        'A3 Limousine',
                        'Addiction',
                        'Design',
                        'Sensation',
                        'S Line',
                        'S-Line Style',
                        'Sport Line'
                    ],
                    'engines' => [
                        '2.0 TDI 143ch S-Tronic',
                        '35 TDi 143ch'
                    ]
                ],
                [
                    'name' => 'A3 Ssportback',
                    'versions' => [
                        'A3 Sport Back',
                        'Addiction ',
                        'Intuition',
                        'S-Edition',
                        'Sensation',
                        'S Line',
                        'S-Line Style',
                        'Sport Design'
                    ],
                    'engines' => [
                        '1.2 TFSI 105ch',
                        '1.4 TFSI 125ch',
                        '1.6 ess 101ch',
                        '1.6 ess 102ch',
                        '1.6 FSI 115ch',
                        '1.6 TDI 105ch',
                        '1.6 TDI 90ch',
                        '1.8 ess 125ch',
                        '1.8 ess 150ch',
                        '1.8 ess 180ch',
                        '1.8 TFSI 160ch',
                        '1.8 TFSI 180ch S-tronic',
                        '1.8 TFSI Quattro 180ch',
                        '1.9 TDI 105ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 90ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 143ch S-Tronic',
                        '2.0 TDI 170ch',
                        '2.0 TDI Quattro 140ch',
                        '2.0 TDI Quattro 170ch',
                        '2.0 TFSI 200ch',
                        '3.2 ess V6 Quattro 250ch'
                    ]
                ],
                [
                    'name' => 'A3 Sportback',
                    'versions' => [
                        'Business Executive',
                        'Business Line',
                        'Design',
                        'Design Luxe',
                        'Flying Express',
                        'Flying spur Edition Premium ',
                        'Flying spur Edition Premium + Pack Lux ',
                        'S line',
                        'Sport Line'
                    ],
                    'engines' => [
                        '1.0 TFSI 110ch',
                        '1.0 TFSI 116ch',
                        '1.5 TFSI 150ch',
                        '1.5 TSI 160ch ',
                        '2.0 TDI 116ch',
                        '2.0 TDI 150ch',
                        '2.0 TDI 200ch',
                        '2.0 TFSI 190ch',
                        '35 TDi 143ch'
                    ]
                ],
                [
                    'name' => 'A4',
                    'versions' => [
                        'A4',
                        'Ambition',
                        'Ambition Luxe',
                        'Avus',
                        'Business Executive ',
                        'Business line',
                        'Business Line',
                        'Business Line Plus',
                        'Competition',
                        'Design',
                        'S Edition',
                        'S Line +',
                        'S Line',
                        'Ten Years Edition'
                    ],
                    'engines' => [
                        '1.4 TFSI 150ch',
                        '1.6 ess 101ch',
                        '1.6 ess 102ch',
                        '1.8 ess 125ch',
                        '1.8 ess 150ch',
                        '1.8 ess 163ch',
                        '1.8 ess Quattro 125ch',
                        '1.8 ess Quattro 150ch',
                        '1.8 ess Turbo 163ch',
                        '1.8 TFSI 120ch',
                        '1.9 D 75ch',
                        '1.9 TDI 101ch',
                        '1.9 TDI 110ch',
                        '1.9 TDI 115ch',
                        '1.9 TDI 116ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 90ch',
                        '2.0 ess 130ch',
                        '2.0 FSI 150ch',
                        '2.0 TDI 120ch',
                        '2.0 TDI 136ch',
                        '2.0 TDI 136ch',
                        '2.0 TDI 140ch',
                        '2.0 TDI 143ch',
                        '2.0 TDI 143ch Multitronic BVA',
                        '2.0 TDI 150ch',
                        '2.0 TDI 163ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 177 ch BVA',
                        '2.0 TDI 177 ch Multitronic 8',
                        '2.0 TDI 190ch',
                        '2.0 TDI 204ch',
                        '2.0 TDI Quattro 170ch',
                        '2.0 TFSI 150ch',
                        '2.0 TFSI 180ch',
                        '2.0 TFSI 190ch',
                        '2.0 TFSI 200ch',
                        '2.0 TFSI 204ch',
                        '2.0 TFSI 211ch',
                        '2.0 TFSI 250ch',
                        '2.5 TDI 150ch',
                        '2.5 TDI 163ch',
                        '2.5 TDI Quattro 180ch',
                        '2.7 TDI 180ch',
                        '2.7 TDI 180ch Multitronic',
                        '2.7 TDI V6 190ch',
                        '2.8 ess 174ch',
                        '2.8 ess 193ch',
                        '2.8 ess Quattro 174ch',
                        '2.8 ess Quattro 193ch',
                        '3.0 TDI Quattro 204ch',
                        '3.0 TDI Quattro 233ch',
                        '3.0 TDI V6 218ch',
                        '3.0 TDI V6 233ch',
                        '3.0 TDI V6 272ch',
                        '3.0 TDI V6 347ch',
                        '3.0 TDI V6 Quattro 240ch',
                        '3.2 FSI V6 265ch',
                        'TDI V6 Quattro 240ch'
                    ]
                ],
                [
                    'name' => 'A4 Allroad',
                    'versions' => [
                        'A4 Allroad'
                    ],
                    'engines' => [
                        '2.0 TDI 143ch',
                        '2.0 TDI 170ch',
                        '2.0 TFSI 211ch',
                        '3.0 TDI V6 240ch'
                    ]
                ],
                [
                    'name' => 'A4 Avant',
                    'versions' => [
                        'A4 Avant',
                        'Business Executive ',
                        'Business Line',
                        'Business Line Plus',
                        'Competition',
                        'Design',
                        'S Edition',
                        'S Line'
                    ],
                    'engines' => [
                        '1.4 TFSI 150ch',
                        '2.0 TDI 136ch',
                        '2.0 TDI 150ch',
                        '2.0 TDI 163ch',
                        '2.0 TDI 190ch',
                        '2.0 TDI 204ch',
                        '2.0 TFSI 150ch',
                        '2.0 TFSI 190ch',
                        '2.0 TFSI 204ch',
                        '2.0 TFSI 250ch',
                        '2.6 ess 150ch',
                        '2.6 ess Quattro 150ch',
                        '3.0 TDI V6 218ch',
                        '3.0 TDI V6 272ch',
                        '3.0 TDI V6 347ch'
                    ]
                ],
                [
                    'name' => 'A4 Cabriolet',
                    'versions' => [
                        'A4 Cabriolet'
                    ],
                    'engines' => [
                        '1.8 ess 163ch',
                        '1.8 ess Turbo 163ch',
                        '2.0 TDI 140ch',
                        '2.0 TFSI 200ch',
                        '2.7 TDI V6 180ch',
                        '3.0 TDI V6 233ch',
                        '3.2 FSI V6 256ch'
                    ]
                ],
                [
                    'name' => 'A5',
                    'versions' => [
                        'A5',
                        'Busineess Executive ',
                        'Competition',
                        'Design',
                        'S Edition',
                        'S Line +',
                        'S Line',
                        'Sportback ',
                        'Sportback S Line'
                    ],
                    'engines' => [
                        '1.8 TFSI 160ch',
                        '1.8 TFSI 170ch',
                        '2.0 TDI 143ch BVA',
                        '2.0 TDI 163ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 177ch',
                        '2.0 TFSI 150ch',
                        '2.0 TFSI 160ch',
                        '2.0 TFSI 180ch',
                        '2.0 TFSI 204ch',
                        '2.0 TFSI 211ch',
                        '2.0 TFSI 225 ch Multitronic',
                        '2.0 TFSI 265ch',
                        '2.0 TFSI Quattro 211ch',
                        '2.7 TDI 190ch Multitronic',
                        '2.7 TDI V6 190ch',
                        '3.0 TDI V6 233ch',
                        '3.0 TDI V6 Quattro 240ch',
                        '3.2 FSI V6 265ch'
                    ]
                ],
                [
                    'name' => 'A5 AVANT',
                    'versions' => [
                        'Business Executive ',
                        'Design ',
                        'S Line'
                    ],
                    'engines' => [
                        '2.0 TDI 163ch',
                        '2.0 TFSI 150ch',
                        '2.0 TFSI 204ch',
                        '2.0 TFSI 265ch'
                    ]
                ],
                [
                    'name' => 'A5 Cabriolet',
                    'versions' => [
                        'A5 Cabriolet'
                    ],
                    'engines' => [
                        '1.8 TFSI 160ch',
                        '1.8 TFSI 170ch',
                        '2.0 TDI 177ch',
                        '2.0 TFSI 180ch',
                        '2.0 TFSI 211ch',
                        '2.0 TFSI Quattro 211ch',
                        '2.7 TDI V6 190ch',
                        '3.0 TDI V6 240ch',
                        '3.0 TDI V6 Quattro 245ch',
                        '3.2 FSI V6 265ch'
                    ]
                ],
                [
                    'name' => 'A6',
                    'versions' => [
                        'A6',
                        'Advenced',
                        'Ambition',
                        'Avus',
                        'Avus Extended',
                        'Business Excutive',
                        'Classic-Line',
                        'Compétition',
                        'S Line',
                        'S Line'
                    ],
                    'engines' => [
                        '1.8 ess 125ch',
                        '1.8 ess 150ch',
                        '1.8 TFSi Ultra 190ch S-Tronic',
                        '1.9 TDI 110ch',
                        '1.9 TDI 130ch',
                        '1.9 TDI 90ch',
                        '2.0  211ch Hybrid',
                        '2.0  Quattro 211ch Hybrid',
                        '2.0 TDI 136ch',
                        '2.0 TDI 163ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 177ch BVA',
                        '2.0 TDI 204ch',
                        '2.0 TFSI 170ch',
                        '2.0 TFSI E Quattro 299ch',
                        '2.0 TFSI E Quattro 367ch',
                        '2.4 ess 165ch',
                        '2.4 ess 177ch',
                        '2.4 ess V6 177ch',
                        '2.5 TDI 115ch',
                        '2.5 TDI 140ch',
                        '2.5 TDI 150ch',
                        '2.5 TDI Quattro 180ch',
                        '2.7 ess Quattro 230ch',
                        '2.8 ess 174ch',
                        '2.8 ess 193ch',
                        '2.8 ess Quattro 174ch',
                        '2.8 ess Quattro 193ch',
                        '2.8 FSI 190ch',
                        '2.8 FSI Quattro 204ch',
                        '3.0 TDI 204ch',
                        '3.0 TDI Quattro 225ch',
                        '3.0 TDI Quattro 245ch',
                        '3.0 TDI V6 231ch',
                        '3.0 TDI V6 240ch',
                        '3.0 TDI V6 249ch',
                        '3.0 TDI V6 286ch',
                        '3.0 TFSI 290ch',
                        '3.0 TFSI Quattro 300ch',
                        '3.2 FSI 256ch',
                        '4.2 FSI 350ch',
                        'TDI V6 190ch'
                    ]
                ],
                [
                    'name' => 'A6 Allroad',
                    'versions' => [
                        'A6 Allroad',
                        'Advenced',
                        'Avus',
                        'Avus Extended',
                        'Business Excutive',
                        'Competition',
                        'S Line'
                    ],
                    'engines' => [
                        '2.0 TDI 163ch',
                        '2.0 TDI 204ch',
                        '2.0 TFSI E Quattro 299ch',
                        '2.0 TFSI E Quattro 367ch',
                        '2.5 TDI Quattro 180ch',
                        '2.7 ess Quattro 250ch',
                        '2.7 TDI V6 190ch',
                        '3.0 D V6 313ch',
                        '3.0 TDI V6 204ch',
                        '3.0 TDI V6 231ch',
                        '3.0 TDI V6 240ch',
                        '3.0 TDI V6 245ch',
                        '3.0 TDI V6 249ch',
                        '3.0 TDI V6 286ch',
                        '3.0 TFSI 290ch',
                        '3.0 TFSI V6 310ch',
                        '3.2 FSI 256ch',
                        '4.2 FSI 350ch'
                    ]
                ],
                [
                    'name' => 'A6 Avant',
                    'versions' => [
                        'A6 Avant',
                        'Advenced',
                        'Avus',
                        'Avus Extended',
                        'Business Excutive',
                        'Competition',
                        'S Line'
                    ],
                    'engines' => [
                        '2.0 TDI 163ch',
                        '2.0 TDI 177ch',
                        '2.0 TDI 204ch',
                        '2.0 TFSI 180ch',
                        '2.0 TFSI E Quattro 299ch',
                        '2.0 TFSI E Quattro 367ch',
                        '2.8 FSI 204ch',
                        '2.8 FSI Quattro 204ch',
                        '3.0 TDI 204ch',
                        '3.0 TDI Quattro 204ch',
                        '3.0 TDI Quattro 245ch',
                        '3.0 TDI V6 231ch',
                        '3.0 TDI V6 249ch',
                        '3.0 TDI V6 286ch',
                        '3.0 TFSI Quattro 300ch'
                    ]
                ],
                [
                    'name' => 'A7',
                    'versions' => [
                        'A7',
                        'Advenced',
                        'Avus',
                        'S Line'
                    ],
                    'engines' => [
                        '2.0 TFSI 190ch',
                        '2.0 TFSI 252ch',
                        '3.0 TDI 245ch'
                    ]
                ],
                [
                    'name' => 'A7 sport back',
                    'versions' => [
                        'A7 sport back',
                        'Avus',
                        'Avus Extended',
                        'Business Excutive',
                        'Compétition'
                    ],
                    'engines' => [
                        '2.0 TFSI e quattro 252ch',
                        '2.0 TFSI e quattro 367ch',
                        '3.0 TDI Quattro 245ch  S-Tronic',
                        '3.0 TFSI 340ch '
                    ]
                ],
                [
                    'name' => 'A8',
                    'versions' => [
                        'A8',
                        'Avus'
                    ],
                    'engines' => [
                        '2.5 TDI 150ch',
                        '2.8 ess 193ch',
                        '2.8 ess Quattro 193ch',
                        '2.8 FSI 210ch',
                        '3.0 FSI 260ch',
                        '3.0 TDI Quattro 250ch',
                        '3.0 TDI V6 233ch',
                        '3.0 TDI V6 Quattro 250ch',
                        '3.0 TSI Quattro 290ch',
                        '3.2 FSI 260ch',
                        '3.3 TDI Quattro 225ch',
                        '3.7 ess 230ch',
                        '3.7 ess Quattro 230ch',
                        '3.7 FSI 280ch',
                        '4.0 TFSI quattro 420 ch S-tronic',
                        '4.0 V8 TFSi 435ch Tiptronic',
                        '4.2 FSI 350ch',
                        '4.2 FSI 371ch',
                        '4.2 TDI Quattro 350ch',
                        '4.2 TDI V8 326ch',
                        '4.2 TDI V8 Quattro 350ch',
                        '6.0 ess W12 450ch'
                    ]
                ],
                [
                    'name' => 'A8L',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'Cabriolet',
                    'versions' => [
                        'Cabriolet'
                    ],
                    'engines' => [
                        '1.9 TDI 90ch',
                        '2.3 ess 133ch',
                        '2.6 ess 150ch',
                        '2.8 ess 174ch'
                    ]
                ],
                [
                    'name' => 'Coupé',
                    'versions' => [
                        'Coupé'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.2 ess 220ch',
                        '2.2 ess 230ch',
                        '2.3 ess 133ch',
                        '2.6 ess 150ch',
                        '2.8 ess Quattro 174ch'
                    ]
                ],
                [
                    'name' => 'GT',
                    'versions' => [
                        'GT'
                    ],
                    'engines' => [
                        '1.8 ess 112ch',
                        '1.8 ess 90ch',
                        '2.0 ess 115ch',
                        '2.2 ess 130ch',
                        '2.2 ess 136ch',
                        '2.2 ess Quattro 136ch'
                    ]
                ],
                [
                    'name' => 'Q2',
                    'versions' => [
                        'Design',
                        'Sport Line'
                    ],
                    'engines' => [
                        '35 TDi 143ch'
                    ]
                ],
                [
                    'name' => 'Q3',
                    'versions' => [
                        'Ambition',
                        'Front',
                        'Front (facelift)',
                        'Off Road',
                        'Off Road (facelift)',
                        'Pack S Line',
                        'Q3',
                        'S Line',
                        'S Line compétition',
                        'S Line (facelift)',
                        'Sport Design'
                    ],
                    'engines' => [
                        '2.0 TDI 140ch',
                        '2.0 TDI 143ch',
                        '2.0 TDI 177ch',
                        '2.0 TDI 177ch Quattro',
                        '2.0 TDI 177ch S-Tronic',
                        '2.0 TDI Quattro 170ch',
                        '2.0 TFSI Quattro 170ch',
                        '2.5 ess 360ch'
                    ]
                ],
                [
                    'name' => 'Q5',
                    'versions' => [
                        'ABT',
                        'Ambition',
                        'Off Road',
                        'Offroad',
                        'Off Road Pack Tech',
                        'Q5',
                        'S Line',
                        'S Line Pack Tech'
                    ],
                    'engines' => [
                        '2.0 TDI 143ch',
                        '2.0 TDI 170ch',
                        '2.0 TDI 177ch Multitronic',
                        '2.0 TDI 177ch Quattro S-Tronic 7',
                        '2.0 TFSI 180ch',
                        '2.0 TFSI 211ch',
                        '3.0 TDI 240ch',
                        '3.0 TDI 313ch',
                        '3.0 TDI V6 Quattro 240ch',
                        '3.2 FSI V6 270ch'
                    ]
                ],
                [
                    'name' => 'Q7',
                    'versions' => [
                        'Q7',
                        'S Line'
                    ],
                    'engines' => [
                        '2.0 TFSI 252ch',
                        '3.0 TDI 204ch',
                        '3.0 TDI 233ch',
                        '3.0 TDI 240ch',
                        '3.0 TDI V6 240ch',
                        '3.0 TFSI 272ch',
                        '3.0 TFSI 333ch',
                        '3.6 FSI V6 280ch',
                        '4.2 FSI 350ch',
                        '4.2 FSI V8 350ch',
                        '4.2 TDI V8 326ch',
                        '6.0 TDI V12 500ch'
                    ]
                ],
                [
                    'name' => 'Quattro',
                    'versions' => [
                        'Quattro'
                    ],
                    'engines' => [
                        '2.1 ess 306ch',
                        '2.2 ess 200ch',
                        '2.2 ess 220ch'
                    ]
                ],
                [
                    'name' => 'R8',
                    'versions' => [
                        'R8'
                    ],
                    'engines' => [
                        '1.4 FSI V8 420ch',
                        '4.2 FSI V8 Quattro 420ch',
                        '5.2 FSI V10 525ch',
                        '5.2 FSI V10 Quattro 525ch',
                        '6.0 TDI V12 500ch',
                        'GT 560ch'
                    ]
                ],
                [
                    'name' => 'RS3',
                    'versions' => [
                        'RS3'
                    ],
                    'engines' => [
                        '3.2 ess 340ch'
                    ]
                ],
                [
                    'name' => 'RS3 Berline',
                    'versions' => [
                        'Quattro S tronic'
                    ],
                    'engines' => [
                        '2.5 TFSI 400ch'
                    ]
                ],
                [
                    'name' => 'RS3 Sportback',
                    'versions' => [
                        'Quattro S tronic'
                    ],
                    'engines' => [
                        '2.5 TFSI 400ch'
                    ]
                ],
                [
                    'name' => 'RS4',
                    'versions' => [
                        'Quattro S tronic',
                        'RS4'
                    ],
                    'engines' => [
                        '2.9 V6 TFSI 450ch',
                        '4.2 ess 420ch',
                        '4.2 ess 450ch'
                    ]
                ],
                [
                    'name' => 'RS4 Avant ',
                    'versions' => [
                        'Quattro S tronic'
                    ],
                    'engines' => [
                        '2.9 V6 TFSI 450ch'
                    ]
                ],
                [
                    'name' => 'RS5',
                    'versions' => [
                        'RS5'
                    ],
                    'engines' => [
                        'ess 450ch'
                    ]
                ],
                [
                    'name' => 'RS6',
                    'versions' => [
                        'Avant',
                        'Quattro S tronic',
                        'RS6'
                    ],
                    'engines' => [
                        '4.0 TFSI  600ch',
                        '4.0 V8 560ch',
                        'ess 580ch'
                    ]
                ],
                [
                    'name' => 'RS6 Avante ',
                    'versions' => [
                        'Quattro S tronic'
                    ],
                    'engines' => [
                        '4.0 TFSI  600ch'
                    ]
                ],
                [
                    'name' => 'Rs7',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'RS7 Sportback ',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'S3',
                    'versions' => [
                        'S3',
                        'SportBack'
                    ],
                    'engines' => [
                        '1.8 ess 210ch',
                        '1.8 ess 225ch',
                        '2.0 TFSI 265ch',
                        '2.0 TFSI 285ch Quattro S-Tronic',
                        '2.0 TFSI 300ch',
                        '2.0 TFSI 300ch S-Tronic',
                        '2.0 TFSI 310ch S-Tronic'
                    ]
                ],
                [
                    'name' => 'S3 Berline',
                    'versions' => [
                        'Quattro S tronic',
                        'S3 Berline'
                    ],
                    'engines' => [
                        '2.0 TFSI 285ch Quattro S-Tronic',
                        '2.0 TFSI 333ch'
                    ]
                ],
                [
                    'name' => 'S3 Sportback',
                    'versions' => [
                        'Quattro S tronic'
                    ],
                    'engines' => [
                        '2.0 TFSI 333ch'
                    ]
                ],
                [
                    'name' => 'S4',
                    'versions' => [
                        'Quattro S tronic',
                        'S4'
                    ],
                    'engines' => [
                        '3.0 V6 TFSI 354ch',
                        '4.2 ess 344ch',
                        'ess 333ch'
                    ]
                ],
                [
                    'name' => 'S4 Avant ',
                    'versions' => [
                        'Quattro S tronic'
                    ],
                    'engines' => [
                        '3.0 V6 TFSI 354ch'
                    ]
                ],
                [
                    'name' => 'S5',
                    'versions' => [
                        'Hybride Quattro S tronic',
                        'S5'
                    ],
                    'engines' => [
                        '2.0 TFSI 367ch',
                        'ess 333ch'
                    ]
                ],
                [
                    'name' => 'S5 AVANT',
                    'versions' => [
                        'Hybride Quattro S tronic'
                    ],
                    'engines' => [
                        '2.0 TFSI 367ch'
                    ]
                ],
                [
                    'name' => 'S6',
                    'versions' => [
                        'Quattro S tronic',
                        'S6'
                    ],
                    'engines' => [
                        '2.2 ess 230ch',
                        '2.9 TFSI 450ch',
                        'ess 420ch',
                        'ess 435ch'
                    ]
                ],
                [
                    'name' => 'S6 Avante ',
                    'versions' => [
                        'Quattro S tronic'
                    ],
                    'engines' => [
                        '2.9 TFSI 450ch'
                    ]
                ],
                [
                    'name' => 'S7',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'S7 Sportback ',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 's8',
                    'versions' => [
                        's8'
                    ],
                    'engines' => [
                        'ess 450ch'
                    ]
                ],
                [
                    'name' => 'TT coupe',
                    'versions' => [],
                    'engines' => []
                ],
                [
                    'name' => 'TTS',
                    'versions' => [
                        'TTS'
                    ],
                    'engines' => [
                        '2.0 TFSI 180ch',
                        '2.0 TFSI 286ch S-Tronic'
                    ]
                ],
                [
                    'name' => 'V8',
                    'versions' => [
                        'V8'
                    ],
                    'engines' => [
                        '3.6 ess 250ch',
                        '4.2 ess 280ch'
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
