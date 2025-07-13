<?php

namespace Database\Seeders\Brands;

use App\Models\CarBrand;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class DFMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'DFM',
            'models' => [
                [
                    'name' => 'H30 Cross',
                    'versions' => [
                        'Élégant',
                        'H30 Cross',
                        'Noble'
                    ],
                    'engines' => [
                        '1.6 DOHC 78ch BVA',
                        '1.6 DOHC 78ch BVM'
                    ]
                ],
                [
                    'name' => 'Joyear X5',
                    'versions' => [
                        'Confortable',
                        'Joyear X5',
                        'Luxe'
                    ],
                    'engines' => [
                        '1.6 DOHC 121ch'
                    ]
                ],
                [
                    'name' => 'S30',
                    'versions' => [
                        'Élégant',
                        'Noble',
                        'S30'
                    ],
                    'engines' => [
                        '1.6 DOHC 78ch BVA',
                        '1.6 DOHC 78ch BVM'
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
