<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Brands\DSSeeder;
use Database\Seeders\Brands\MGSeeder;
use Database\Seeders\Brands\BMWSeeder;
use Database\Seeders\Brands\BYDSeeder;
use Database\Seeders\Brands\DFMSeeder;
use Database\Seeders\Brands\FawSeeder;
use Database\Seeders\Brands\JACSeeder;
use Database\Seeders\Brands\JMCSeeder;
use Database\Seeders\Brands\KiaSeeder;
use Database\Seeders\Brands\AudiSeeder;
use Database\Seeders\Brands\BaicSeeder;
use Database\Seeders\Brands\DFSKSeeder;
use Database\Seeders\Brands\FiatSeeder;
use Database\Seeders\Brands\FordSeeder;
use Database\Seeders\Brands\JeepSeeder;
use Database\Seeders\Brands\LadaSeeder;
use Database\Seeders\Brands\MiniSeeder;
use Database\Seeders\Brands\OpelSeeder;
use Database\Seeders\Brands\SaabSeeder;
use Database\Seeders\Brands\SeatSeeder;
use Database\Seeders\Brands\TataSeeder;
use Database\Seeders\Brands\ChanaSeeder;
use Database\Seeders\Brands\CherySeeder;
use Database\Seeders\Brands\CupraSeeder;
use Database\Seeders\Brands\DaciaSeeder;
use Database\Seeders\Brands\DodgeSeeder;
use Database\Seeders\Brands\FOTONSeeder;
use Database\Seeders\Brands\GeelySeeder;
use Database\Seeders\Brands\GonowSeeder;
use Database\Seeders\Brands\HaimaSeeder;
use Database\Seeders\Brands\HondaSeeder;
use Database\Seeders\Brands\IsuzuSeeder;
use Database\Seeders\Brands\KaiyiSeeder;
use Database\Seeders\Brands\LexusSeeder;
use Database\Seeders\Brands\LifanSeeder;
use Database\Seeders\Brands\LivanSeeder;
use Database\Seeders\Brands\MazdaSeeder;
use Database\Seeders\Brands\RoverSeeder;
use Database\Seeders\Brands\SaipaSeeder;
use Database\Seeders\Brands\SkodaSeeder;
use Database\Seeders\Brands\SmartSeeder;
use Database\Seeders\Brands\SokonSeeder;
use Database\Seeders\Brands\VolvoSeeder;
use Database\Seeders\Brands\ZotyeSeeder;
use Database\Seeders\Brands\DaewooSeeder;
use Database\Seeders\Brands\HummerSeeder;
use Database\Seeders\Brands\JaguarSeeder;
use Database\Seeders\Brands\JetourSeeder;
use Database\Seeders\Brands\LanciaSeeder;
use Database\Seeders\Brands\NissanSeeder;
use Database\Seeders\Brands\SubaruSeeder;
use Database\Seeders\Brands\SuzukiSeeder;
use Database\Seeders\Brands\ToyotaSeeder;
use Database\Seeders\Brands\BestuneSeeder;
use Database\Seeders\Brands\BugattiSeeder;
use Database\Seeders\Brands\ChanganSeeder;
use Database\Seeders\Brands\CitroenSeeder;
use Database\Seeders\Brands\EmgrandSeeder;
use Database\Seeders\Brands\FerrariSeeder;
use Database\Seeders\Brands\HyundaiSeeder;
use Database\Seeders\Brands\McLarenSeeder;
use Database\Seeders\Brands\PeugeotSeeder;
use Database\Seeders\Brands\PorscheSeeder;
use Database\Seeders\Brands\RenaultSeeder;
use Database\Seeders\Brands\CadillacSeeder;
use Database\Seeders\Brands\ChryslerSeeder;
use Database\Seeders\Brands\CorvetteSeeder;
use Database\Seeders\Brands\DaihatsuSeeder;
use Database\Seeders\Brands\DFJoyearSeeder;
use Database\Seeders\Brands\DongfengSeeder;
use Database\Seeders\Brands\InfinitiSeeder;
use Database\Seeders\Brands\MahindraSeeder;
use Database\Seeders\Brands\MaseratiSeeder;
use Database\Seeders\Brands\MercedesSeeder;
use Database\Seeders\Brands\AlfaRomeoSeeder;
use Database\Seeders\Brands\ChevroletSeeder;
use Database\Seeders\Brands\GreatWallSeeder;
use Database\Seeders\Brands\LandRoverSeeder;
use Database\Seeders\Brands\SsangYongSeeder;
use Database\Seeders\Brands\BrillianceSeeder;
use Database\Seeders\Brands\IranKhodroSeeder;
use Database\Seeders\Brands\MitsubishiSeeder;
use Database\Seeders\Brands\RollsRoyceSeeder;
use Database\Seeders\Brands\VolkswagenSeeder;
use Database\Seeders\Brands\AstonMartinSeeder;
use Database\Seeders\Brands\HafeimotorsSeeder;
use Database\Seeders\Brands\LamborghiniSeeder;
use Database\Seeders\Brands\VictoryautoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AlfaRomeoSeeder::class,
            AstonMartinSeeder::class,
            AudiSeeder::class,
            BaicSeeder::class,
            BestuneSeeder::class,
            BMWSeeder::class,
            BrillianceSeeder::class,
            BugattiSeeder::class,
            BYDSeeder::class,
            CadillacSeeder::class,
            ChanaSeeder::class,
            ChanganSeeder::class,
            CherySeeder::class,
            ChevroletSeeder::class,
            ChryslerSeeder::class,
            CitroenSeeder::class,
            CorvetteSeeder::class,
            CupraSeeder::class,
            DaciaSeeder::class,
            DaewooSeeder::class,
            DaihatsuSeeder::class,
            DFJoyearSeeder::class,
            DFMSeeder::class,
            DFSKSeeder::class,
            DodgeSeeder::class,
            DongfengSeeder::class,
            DSSeeder::class,
            EmgrandSeeder::class,
            FawSeeder::class,
            FerrariSeeder::class,
            FiatSeeder::class,
            FordSeeder::class,
            FOTONSeeder::class,
            GeelySeeder::class,
            GonowSeeder::class,
            GreatWallSeeder::class,
            HafeimotorsSeeder::class,
            HaimaSeeder::class,
            HondaSeeder::class,
            HummerSeeder::class,
            HyundaiSeeder::class,
            InfinitiSeeder::class,
            IranKhodroSeeder::class,
            IsuzuSeeder::class,
            JACSeeder::class,
            JaguarSeeder::class,
            JeepSeeder::class,
            JetourSeeder::class,
            JMCSeeder::class,
            KaiyiSeeder::class,
            KiaSeeder::class,
            LadaSeeder::class,
            LamborghiniSeeder::class,
            LanciaSeeder::class,
            LandRoverSeeder::class,
            LexusSeeder::class,
            LifanSeeder::class,
            LivanSeeder::class,
            MahindraSeeder::class,
            MaseratiSeeder::class,
            MazdaSeeder::class,
            McLarenSeeder::class,
            MercedesSeeder::class,
            MGSeeder::class,
            MiniSeeder::class,
            MitsubishiSeeder::class,
            NissanSeeder::class,
            OpelSeeder::class,
            PeugeotSeeder::class,
            PorscheSeeder::class,
            RenaultSeeder::class,
            RollsRoyceSeeder::class,
            RoverSeeder::class,
            SaabSeeder::class,
            SaipaSeeder::class,
            SeatSeeder::class,
            SkodaSeeder::class,
            SmartSeeder::class,
            SokonSeeder::class,
            SsangYongSeeder::class,
            SubaruSeeder::class,
            SuzukiSeeder::class,
            TataSeeder::class,
            ToyotaSeeder::class,
            VictoryautoSeeder::class,
            VolkswagenSeeder::class,
            VolvoSeeder::class,
            ZotyeSeeder::class,
        ]);
    }
}
