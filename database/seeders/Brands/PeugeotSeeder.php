<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class PeugeotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Peugeot',
            'models' => [
                [
                    'name' => '1007',
                    'versions' => [
                        '1007'
                    ],
                    'engines' => [
                        '1.42 ess 16V 90ch',
                        '1.42 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.6 ess 16V 110ch',
                        '1.6 HDI 110ch'
                    ]
                ],
                [
                    'name' => '104',
                    'versions' => [
                        '104'
                    ],
                    'engines' => [
                        '1.0 ess 46ch',
                        '1.1 ess 50ch',
                        '1.1 ess 57ch',
                        '1.1 ess 66ch',
                        '1.2 ess 57ch',
                        '1.4 ess 72ch',
                        '1.4 ess 80ch',
                        '1.4 ess 93ch'
                    ]
                ],
                [
                    'name' => '106',
                    'versions' => [
                        '106'
                    ],
                    'engines' => [
                        '0.0  27ch Electrique',
                        '1.0 ess 45ch',
                        '1.0 ess 50ch',
                        '1.1 ess 60ch',
                        '1.3 ess 100ch',
                        '1.4 D 50ch',
                        '1.4 ess 100ch',
                        '1.4 ess 75ch',
                        '1.4 ess 95ch',
                        '1.5 D 58ch',
                        '1.6 ess 103ch',
                        '1.6 ess 105ch',
                        '1.6 ess 16V 120ch',
                        '1.6 ess 90ch'
                    ]
                ],
                [
                    'name' => '107',
                    'versions' => [
                        '107'
                    ],
                    'engines' => [
                        '1.0 ess 12V 68ch',
                        '1.0 ess 68ch',
                        '1.4 HDI 54ch'
                    ]
                ],
                [
                    'name' => '2008',
                    'versions' => [
                        'Active',
                        'Active Pack',
                        'Allure',
                        'Allure Pack',
                        'Erg',
                        'GT',
                        'Style'
                    ],
                    'engines' => [
                        '1.2 Hybrid 136ch',
                        '1.2 PureTech 100ch',
                        '1.2 PureTech 130ch ',
                        '1.5 BlueHDi 130ch',
                        '1.6 E-HDI 120ch',
                        '1.6 E-HDI 92ch',
                        '1.6 VTI 120ch',
                        '1.6 VTI 120ch BVA'
                    ]
                ],
                [
                    'name' => '201',
                    'versions' => [
                        '201'
                    ],
                    'engines' => [
                        '1.1 ess 23ch',
                        '1.3 ess 28ch',
                        '1.5 ess 35ch'
                    ]
                ],
                [
                    'name' => '202',
                    'versions' => [
                        '202'
                    ],
                    'engines' => [
                        '1.1 ess 30ch'
                    ]
                ],
                [
                    'name' => '204',
                    'versions' => [
                        '204'
                    ],
                    'engines' => [
                        '1.1 ess 53ch',
                        '1.3 D 40ch',
                        '1.4 D 45ch'
                    ]
                ],
                [
                    'name' => '205',
                    'versions' => [
                        '205',
                        'Junior'
                    ],
                    'engines' => [
                        '1.0 ess 45ch',
                        '1.0 ess 50ch',
                        '1.1 ess 50ch',
                        '1.1 ess 55ch',
                        '1.1 ess 60ch',
                        '1.3 ess 103ch',
                        '1.4 ess 60ch',
                        '1.4 ess 65ch',
                        '1.4 ess 70ch',
                        '1.4 ess 75ch',
                        '1.4 ess 80ch',
                        '1.4 ess 85ch',
                        '1.4 GT 80ch',
                        '1.4 GT 85ch',
                        '1.6 CTI 115ch',
                        '1.6 ess 80ch BVA',
                        '1.6 ess 89ch BVA',
                        '1.6 GTI 105ch',
                        '1.6 GTI 115ch',
                        '1.8 D 60ch',
                        '1.8 D 78ch',
                        '1.8 DT 78ch',
                        '1.8 ess Turbo 200ch',
                        '1.8 TD 78ch',
                        '1.9 CTI 105ch',
                        '1.9 ess 105ch',
                        '1.9 GTI 122ch',
                        '1.9 GTI 130ch'
                    ]
                ],
                [
                    'name' => '206',
                    'versions' => [
                        '206'
                    ],
                    'engines' => [
                        '1.1 ess 60ch',
                        '1.4 ess 16V 90ch',
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 90ch',
                        '1.6 HDI 110ch',
                        '1.9 D 70ch',
                        '2.0 ess 16V 137ch',
                        '2.0 ess 177ch',
                        '2.0 GT 137ch',
                        '2.0 HDI 90ch'
                    ]
                ],
                [
                    'name' => '206 CC',
                    'versions' => [
                        '206 CC'
                    ],
                    'engines' => [
                        '1.6 ess 16V 110ch',
                        '1.6 HDI 110ch',
                        '2.0 ess 16V 137ch',
                        '2.0 HDI 110ch'
                    ]
                ],
                [
                    'name' => '206 Plus',
                    'versions' => [
                        '206 Plus',
                        'generation'
                    ],
                    'engines' => [
                        '1.1 ess 60ch',
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch'
                    ]
                ],
                [
                    'name' => '206 Sedan',
                    'versions' => [
                        '206 Sedan'
                    ],
                    'engines' => [
                        '1.4 ess 75ch'
                    ]
                ],
                [
                    'name' => '206 SW',
                    'versions' => [
                        '206 SW'
                    ],
                    'engines' => [
                        '1.4 HDI 70ch',
                        '2.0 HDI 90ch'
                    ]
                ],
                [
                    'name' => '207',
                    'versions' => [
                        '207',
                        'Active',
                        'Allure',
                        'Fennec',
                        'New Active',
                        'Premium',
                        'Sportium',
                        'Trendy'
                    ],
                    'engines' => [
                        '1.4 ess 16V 90ch',
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.4 VTI 95ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess Turbo 175ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 90ch',
                        '1.6 HDI 92ch',
                        '1.6 THP 150ch',
                        '1.6 VTI 120ch'
                    ]
                ],
                [
                    'name' => '207 CC',
                    'versions' => [
                        '207 CC'
                    ],
                    'engines' => [
                        '1.6 HDI 109ch',
                        '1.6 HDI 112ch',
                        '1.6 THP 150ch',
                        '1.6 THP 156ch',
                        '1.6 VTI 120ch'
                    ]
                ],
                [
                    'name' => '207 plus',
                    'versions' => [
                        '207 plus'
                    ],
                    'engines' => [
                        '1.4 ess 75ch'
                    ]
                ],
                [
                    'name' => '207 SW',
                    'versions' => [
                        '207 SW'
                    ],
                    'engines' => [
                        '1.4 ess 16V 90ch',
                        '1.6 ess 16V 110ch',
                        '1.6 ess 175ch',
                        '1.6 HDI 90ch'
                    ]
                ],
                [
                    'name' => '208',
                    'versions' => [
                        '208',
                        'Access',
                        'Access Facelift',
                        'Active',
                        'Active Facelift',
                        'Active Pack',
                        'Allure',
                        'Allure Facelift',
                        'Allure Pack',
                        'Eclipse',
                        'E-Style',
                        'Fennec',
                        'GT',
                        'GTi',
                        'GTi Facelift',
                        'GT Line',
                        'Like ',
                        'New Silver Line',
                        'Roland Garros',
                        'Silver Line',
                        'Style',
                        'Tech Vision',
                        'Urban Soul'
                    ],
                    'engines' => [
                        '1.0 VTI 68ch',
                        '1.2 Hybrid 100ch',
                        '1.2 Hybrid 136ch',
                        '1.2 PureTech 100ch',
                        '1.2 PureTech 130ch',
                        '1.2 PureTech 75ch',
                        '1.2 VTI 82ch',
                        '1.4 HDI 68ch',
                        '1.4 VTI 95ch',
                        '1.5 BlueHDi 100ch',
                        '1.6 GTI 202ch',
                        '1.6 HDI 115ch',
                        '1.6 HDI 75ch',
                        '1.6 HDI 92ch',
                        '1.6 THP 200ch',
                        '1.6 THP 208ch',
                        '1.6 VTI 120ch'
                    ]
                ],
                [
                    'name' => '3008',
                    'versions' => [
                        '3008',
                        'Active',
                        'Active Pack',
                        'Allure',
                        'Allure Pack',
                        'GT',
                        'Premium'
                    ],
                    'engines' => [
                        '1.2 Hybrid 136ch',
                        ' 1.2 PureTech 130ch',
                        '1.5 BlueHDi 130ch',
                        '1.6 e HDI 112ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 115ch',
                        '1.6 THP 150ch',
                        '1.6 THP 156ch',
                        '1.6 VTI 120ch',
                        '2.0  163ch Hybrid',
                        '2.0 HDI 150ch',
                        '2.0 HDI 163ch BVA'
                    ]
                ],
                [
                    'name' => '301',
                    'versions' => [
                        '301',
                        'Access',
                        'Active',
                        'Allure',
                        'Chrome',
                        'Fennec',
                        'pack luxe ',
                        'Style'
                    ],
                    'engines' => [
                        '1.2 VTI 72ch',
                        '1.6 HDI 92ch',
                        '1.6 VTI 115ch',
                        '1.6 VTI 115ch BVA'
                    ]
                ],
                [
                    'name' => '304',
                    'versions' => [
                        '304'
                    ],
                    'engines' => [
                        '1.3 ess 65ch',
                        '1.3 ess 74ch',
                        '1.4 D 45ch',
                        '1.6 D 50ch'
                    ]
                ],
                [
                    'name' => '305',
                    'versions' => [
                        '305'
                    ],
                    'engines' => [
                        '1.3 ess 65ch',
                        '1.5 ess 74ch',
                        '1.6 D 50ch',
                        '1.6 ess 80ch',
                        '1.9 D 65ch',
                        '1.9 ess 105ch',
                        '1.9 GT 105ch'
                    ]
                ],
                [
                    'name' => '306',
                    'versions' => [
                        '306'
                    ],
                    'engines' => [
                        '1.1 ess 60ch',
                        '1.4 ess 75ch',
                        '1.6 ess 100ch',
                        '1.6 ess 90ch',
                        '1.8 ess 103ch',
                        '1.8 ess 16V 112ch',
                        '1.9 D 71ch',
                        '1.9 DT 92ch',
                        '2.0 ess 123ch',
                        '2.0 ess 135ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 150ch',
                        '2.0 ess 16V 155ch',
                        '2.0 ess 16V 167ch',
                        '2.0 HDI 90ch'
                    ]
                ],
                [
                    'name' => '307',
                    'versions' => [
                        '307',
                        'Oxygo',
                        'SW',
                        'XT'
                    ],
                    'engines' => [
                        '1.4 ess 16V 90ch',
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch',
                        '1.6 ess 16V 110ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 90ch',
                        '2.0 ess 16V 138ch',
                        '2.0 ess 16V 141ch',
                        '2.0 ess 16V 180ch',
                        '2.0 HDI 110ch',
                        '2.0 HDI 136ch',
                        '2.0 HDI 90ch'
                    ]
                ],
                [
                    'name' => '307 CC',
                    'versions' => [
                        '307 CC'
                    ],
                    'engines' => [
                        '1.6 ess 16V 110ch',
                        '2.0 ess 16V 138ch',
                        '2.0 ess 16V 140ch',
                        '2.0 ess 16V 177ch',
                        '2.0 ess 16V 180ch',
                        '2.0 HDI 136ch'
                    ]
                ],
                [
                    'name' => '308',
                    'versions' => [
                        '308',
                        'Access',
                        'Active',
                        'Active Pack ',
                        'Allure',
                        'Allure Pack',
                        'E-Style',
                        'First Edition',
                        'GT',
                        'GTi',
                        'GT Line ',
                        'Platinum ',
                        'Premium',
                        'Sportium',
                        'SW'
                    ],
                    'engines' => [
                        '1.2 Hybrid 136ch',
                        '1.2 PureTech 130ch',
                        '1.4 VTI 116ch',
                        '1.4 VTI 98ch',
                        '1.5 BlueHDi 130ch',
                        '1.6 e HDI 112ch',
                        '1.6 e HDI 115ch STT',
                        '1.6 ess VTI 116ch',
                        '1.6 GTI 200ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 90ch',
                        '1.6 HDI 92ch',
                        '1.6 THP 150ch',
                        '1.6 THP 156ch',
                        '1.6 THP 163ch BVA',
                        '1.6 THP 175ch',
                        '1.6 VTI 120ch',
                        '1.6 VTI 120ch BVA',
                        '2.0 HDI 136ch',
                        '2.0 HDI 140ch',
                        '2.0 HDI 150ch',
                        '2.0 HDI 163ch BVA'
                    ]
                ],
                [
                    'name' => '308 CC',
                    'versions' => [
                        '308 CC',
                        'Sport pack'
                    ],
                    'engines' => [
                        '1.6 e HDI 112ch',
                        '1.6 HDI 112ch',
                        '1.6 THP 150ch',
                        '1.6 THP 156ch',
                        '1.6 THP 200ch',
                        '1.6 VTI 120ch',
                        '2.0 HDI 136ch BVA',
                        '2.0 HDI 140ch',
                        '2.0 HDI 163ch',
                        '2.0 HDI 163ch BVA'
                    ]
                ],
                [
                    'name' => '309',
                    'versions' => [
                        '309'
                    ],
                    'engines' => [
                        '1.1 ess 55ch',
                        '1.1 ess 60ch',
                        '1.3 ess 65ch',
                        '1.4 ess 70ch',
                        '1.4 ess 75ch',
                        '1.4 ess 92ch',
                        '1.6 ess 80ch',
                        '1.6 ess 80ch BVA',
                        '1.6 ess 92ch',
                        '1.6 ess 92ch BVA',
                        '1.8 D 60ch',
                        '1.8 TD 78ch',
                        '1.9 D 65ch',
                        '1.9 ess 105ch',
                        '1.9 GT 105ch',
                        '1.9 GTI 122ch',
                        '1.9 GTI 130ch',
                        '1.9 GTI 148ch',
                        '1.9 GTI 160ch'
                    ]
                ],
                [
                    'name' => '4007',
                    'versions' => [
                        '4007'
                    ],
                    'engines' => [
                        '2.2 HDI 156ch',
                        '2.2 HDI 160ch'
                    ]
                ],
                [
                    'name' => '4008',
                    'versions' => [
                        '4008'
                    ],
                    'engines' => [
                        '1.6  HDI 115ch STT',
                        '1.6 HDI 4WD 115ch',
                        '1.6 VTI 115ch',
                        '1.8 HDI 4WD 140ch',
                        '2.0e 4WD 150ch',
                        '2.0 VTI 4WD 150ch'
                    ]
                ],
                [
                    'name' => '403',
                    'versions' => [
                        '403'
                    ],
                    'engines' => [
                        '1.3 ess 47ch',
                        '1.5 ess 58ch'
                    ]
                ],
                [
                    'name' => '404',
                    'versions' => [
                        '404'
                    ],
                    'engines' => [
                        '1.6 CTI 85ch',
                        '1.6 CTI 96ch',
                        '1.6 ess 72ch',
                        '1.6 ess 73ch',
                        '1.6 ess 80ch',
                        '1.9 D 68ch'
                    ]
                ],
                [
                    'name' => '405',
                    'versions' => [
                        '405'
                    ],
                    'engines' => [
                        '1.4 ess 70ch',
                        '1.4 ess 75ch',
                        '1.6 ess 90ch',
                        '1.6 ess 92ch',
                        '1.8 D 90ch',
                        '1.9 D 71ch',
                        '1.9 D 92ch',
                        '1.9 ess 110ch',
                        '1.9 ess 125ch',
                        '1.9 ess 160ch',
                        '2.0 ess 123ch',
                        '2.0 ess 155ch',
                        '2.0 ess 200ch'
                    ]
                ],
                [
                    'name' => '406',
                    'versions' => [
                        '406'
                    ],
                    'engines' => [
                        '1.8 ess 16V 117ch',
                        '1.9 D 76ch',
                        '1.9 DT 90ch',
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 137ch',
                        '2.0 ess 16V 137ch BVA',
                        '2.0 ess Turbo 150ch',
                        '2.0 HDI 110ch',
                        '2.0 HDI 90ch',
                        '2.1 DT 110ch',
                        '2.2 ess 16V 160ch',
                        '2.2 HDI 136ch',
                        '3.0 ess V6 194ch',
                        '3.0 ess V6 210ch'
                    ]
                ],
                [
                    'name' => '406 Coupé',
                    'versions' => [
                        '406 Coupé'
                    ],
                    'engines' => [
                        '2.0 ess 16V 135ch',
                        '2.0 ess 16V 137ch',
                        '2.2 ess 16V 160ch',
                        '2.2 HDI 136ch',
                        '3.0 ess V6 194ch',
                        '3.0 ess V6 210ch'
                    ]
                ],
                [
                    'name' => '407',
                    'versions' => [
                        '407'
                    ],
                    'engines' => [
                        '1.6 HDI 110ch',
                        '1.8 ess 16V 125ch',
                        '2.0 ess 16V 140ch',
                        '2.0 HDI 136ch',
                        '2.0 HDI 136ch BVA',
                        '2.0 HDI 140ch',
                        '2.0 HDI 163ch BVA',
                        '2.2 ess 16V 163ch',
                        '2.2 HDI 170ch',
                        '2.7 HDI V6 204ch',
                        '3.0 ess V6 211ch'
                    ]
                ],
                [
                    'name' => '407 Coupé',
                    'versions' => [
                        '407 Coupé'
                    ],
                    'engines' => [
                        '2.0 HDI 136ch',
                        '2.0 HDI 163ch',
                        '2.2 ess 16V 163ch',
                        '2.7 HDI V6 204ch',
                        '3.0 ess V6 211ch',
                        '3.0 HDI 240ch',
                        '3.0 HDI 240ch BVA'
                    ]
                ],
                [
                    'name' => '407 SW',
                    'versions' => [
                        '407 SW'
                    ],
                    'engines' => []
                ],
                [
                    'name' => '5008',
                    'versions' => [
                        'Access',
                        'Active ',
                        'Allure',
                        'GT'
                    ],
                    'engines' => [
                        '1.2 Hybrid 136ch',
                        '1.2 PureTech 130ch',
                        '1.5 BlueHDi 130ch',
                        '1.6 HDI 110ch',
                        '1.6 THP 150ch',
                        '1.6 THP 156ch',
                        '1.6 VTI 120ch',
                        '2.0 HDI 150ch',
                        '2.0 HDI 163ch BVA'
                    ]
                ],
                [
                    'name' => '504',
                    'versions' => [
                        '504'
                    ],
                    'engines' => [
                        '1.8 ess 79ch',
                        '2.0 ess 104ch',
                        '2.0 ess 93ch',
                        '2.1 D 65ch',
                        '2.3 D 70ch'
                    ]
                ],
                [
                    'name' => '504 cabriolet',
                    'versions' => [
                        '504 cabriolet'
                    ],
                    'engines' => [
                        '1.8 ess 97ch',
                        '2.0 ess 104ch',
                        '2.0 ess 106ch',
                        '2.7 ess V6 136ch'
                    ]
                ],
                [
                    'name' => '504 coupé',
                    'versions' => [
                        '504 coupé'
                    ],
                    'engines' => [
                        '1.8 ess 97ch',
                        '2.0 ess 104ch',
                        '2.0 ess 106ch',
                        '2.7 ess V6 136ch',
                        '2.7 ess V6 144ch'
                    ]
                ],
                [
                    'name' => '505',
                    'versions' => [
                        '505'
                    ],
                    'engines' => [
                        '1.8 ess 90ch',
                        '2.0 ess 108ch',
                        '2.0 ess 110ch',
                        '2.0 ess 117ch',
                        '2.0 ess 96ch',
                        '2.2 CTI 150ch',
                        '2.2 CTI 160ch',
                        '2.2 CTI 180ch',
                        '2.2 CTI 200ch',
                        '2.2 GTI 130ch',
                        '2.3 D 70ch',
                        '2.5 D 76ch',
                        '2.5 TD 110ch',
                        '2.5 TD 80ch',
                        '2.5 TD 95ch',
                        '2.9 ess V6 170ch'
                    ]
                ],
                [
                    'name' => '508',
                    'versions' => [
                        '508',
                        'Allure',
                        'Allure Pack',
                        'Business Line ',
                        'Feline',
                        'GT',
                        'GT Line ',
                        'GT Pack',
                        'PSE'
                    ],
                    'engines' => [
                        '1.2 PureTech 130ch',
                        '1.5 Blue HDi 130ch',
                        '1.6 e HDI 112ch',
                        '1.6 HDI 112ch',
                        '1.6 THP 156ch',
                        '1.6 THP 156ch BVA',
                        '1.6 VTI 120ch',
                        '2.0 HDI 140ch',
                        '2.0 HDI 163ch',
                        '2.0 HDI 163ch BVA',
                        '2.2 HDI 204ch',
                        '2.2 HDI 204ch BVA'
                    ]
                ],
                [
                    'name' => '508 SW',
                    'versions' => [
                        '508 SW'
                    ],
                    'engines' => [
                        '1.6 e HDI 112ch',
                        '1.6 HDI 112ch',
                        '1.6 THP 156ch',
                        '1.6 VTI 120ch',
                        '2.0  163ch',
                        '2.0 HDI 140ch',
                        '2.0 HDI 163ch',
                        '2.2 GT 204ch',
                        '2.2 HDI 204ch',
                        '2.2 HDI 204ch BVA'
                    ]
                ],
                [
                    'name' => '604',
                    'versions' => [
                        '604'
                    ],
                    'engines' => [
                        '2.3 TD 80ch',
                        '2.5 TD 95ch',
                        '2.7 ess 136ch',
                        '2.7 ess 144ch',
                        '2.9 GTI 155ch'
                    ]
                ],
                [
                    'name' => '605',
                    'versions' => [
                        '605'
                    ],
                    'engines' => [
                        '2.0 ess 115ch',
                        '2.0 ess 130ch',
                        '2.0 ess 135ch',
                        '2.0 VTI 145ch',
                        '2.0 VTI 150ch',
                        '2.1 D 110ch',
                        '2.1 D 83ch',
                        '2.5 D 130ch',
                        '3.0 ess 170ch',
                        '3.0 ess 200ch',
                        '3.0 ess V6 194ch'
                    ]
                ],
                [
                    'name' => '607',
                    'versions' => [
                        '607'
                    ],
                    'engines' => [
                        '2.0 HDI 136ch',
                        '2.2 ess 16V 160ch',
                        '2.2 ess 16V 163ch',
                        '2.2 HDI 136ch',
                        '2.2 HDI 170ch',
                        '2.7 HDI V6 204ch',
                        '3.0 ess V6 210ch',
                        '3.0 ess V6 210ch BVA',
                        '3.0 ess V6 211ch',
                        '3.0 ess V6 211ch BVA'
                    ]
                ],
                [
                    'name' => '806',
                    'versions' => [
                        '806'
                    ],
                    'engines' => [
                        '1.9 D 92ch',
                        '2.0 ess 123ch',
                        '2.0 ess 16V 138ch',
                        '2.0 ess Turbo 150ch',
                        '2.0 HDI 110ch',
                        '2.1 D 110ch'
                    ]
                ],
                [
                    'name' => '807',
                    'versions' => [
                        '807'
                    ],
                    'engines' => [
                        '2.0 ess 16V 140ch',
                        '2.0 HDI 120ch',
                        '2.0 HDI 136ch',
                        '2.0 HDI 163ch',
                        '2.2 HDI 170ch'
                    ]
                ],
                [
                    'name' => 'Bipper',
                    'versions' => [
                        'Bipper',
                        'FT',
                        'Tepee',
                        'Tepee premium'
                    ],
                    'engines' => [
                        '1.3 HDI 75ch',
                        '1.4 ess 75ch',
                        '1.4 HDI 70ch'
                    ]
                ],
                [
                    'name' => 'Boxer',
                    'versions' => [
                        'Boxer',
                        'Combi ',
                        'Double Cabine ',
                        'L1 H1 ',
                        'L2 H2 ',
                        'L3 H2 '
                    ],
                    'engines' => [
                        '2.2 HDI 130ch'
                    ]
                ],
                [
                    'name' => 'Expert',
                    'versions' => [
                        'Access ',
                        'Access Long',
                        'Combi',
                        'Expert',
                        'V.U Court',
                        'V.U Long'
                    ],
                    'engines' => [
                        '1.5 Blue HDi 120ch',
                        '1.6 HDI 90ch',
                        '2.0 Blue HDi 145ch',
                        '2.0 Blue HDi 180ch ',
                        '2.0 ess 16V 137ch',
                        '2.0 HDI 110ch',
                        '2.0 HDI 125ch',
                        '2.0 HDI 95ch'
                    ]
                ],
                [
                    'name' => 'LANDTREK',
                    'versions' => [
                        '4x2',
                        '4x4'
                    ],
                    'engines' => [
                        '1,9TD 150ch'
                    ]
                ],
                [
                    'name' => 'Partner',
                    'versions' => [
                        'Fennec',
                        'Nouveau',
                        'Nouveau Active',
                        'Nouveau Outdoor',
                        'Origin',
                        'Origin VU',
                        'Partner',
                        'Tepee',
                        'Tepee Active ',
                        'Tepee Allure ',
                        'Tepee Outdoor'
                    ],
                    'engines' => [
                        '1.4 ess 75ch',
                        '1.6 ess 16V 110ch',
                        '1.6 HDI 110ch',
                        '1.6 HDI 112ch',
                        '1.6 HDI 75ch',
                        '1.6 HDI 90ch',
                        '1.6 HDI FAP 115 CH',
                        '1.8 ess 90ch',
                        '1.9 D 71ch',
                        '2.0 HDI 90ch'
                    ]
                ],
                [
                    'name' => 'Partner VU',
                    'versions' => [
                        'Atelier ',
                        'Court N1',
                        'Court N2'
                    ],
                    'engines' => [
                        '1.6 ess 110 ch',
                        '1.6 HDi 75 ch',
                        '1.6 HDi 92 ch'
                    ]
                ],
                [
                    'name' => 'RCZ',
                    'versions' => [
                        'R',
                        'RCZ'
                    ],
                    'engines' => [
                        '1.6 THP 156ch',
                        '1.6 THP 200ch',
                        '1.6 THP 270ch',
                        '2.0 HDI 163ch'
                    ]
                ],
                [
                    'name' => 'Rifter',
                    'versions' => [
                        'Active Pack',
                        'Allure',
                        'GT'
                    ],
                    'engines' => [
                        '1.5 Blue HDI 100ch',
                        '1.5 BlueHDi 130ch '
                    ]
                ],
                [
                    'name' => 'Traveller',
                    'versions' => [
                        'Business',
                        'Business Pack'
                    ],
                    'engines' => [
                        '1.5 Blue HDi 120ch',
                        '2.0 Blue HDi 145ch',
                        '2.0 Blue HDi 180ch'
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
