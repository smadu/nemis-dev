<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionalEducationOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisionalOffices = [
            // Western Province Zones (PEO006)
            array('deo_id' => 'DEO10101','zeo_id' => 'ZEO10100','deo_name' => 'Colombo-north Division Department Of Education','deo_short_name' => 'Colombo-north Division'),
            array('deo_id' => 'DEO10102','zeo_id' => 'ZEO10100','deo_name' => 'Colombo-central Division Department Of Education','deo_short_name' => 'Colombo-central Division'),
            array('deo_id' => 'DEO10103','zeo_id' => 'ZEO10100','deo_name' => 'Colombo-south Division Department Of Education','deo_short_name' => 'Colombo-south Division'),
            array('deo_id' => 'DEO10104','zeo_id' => 'ZEO10100','deo_name' => 'Borella Division Department Of Education','deo_short_name' => 'Borella Division'),
            
            array('deo_id' => 'DEO10201','zeo_id' => 'ZEO10200','deo_name' => 'Homagama Division Department Of Education','deo_short_name' => 'Homagama Division'),
            array('deo_id' => 'DEO10202','zeo_id' => 'ZEO10200','deo_name' => 'Hanwella Division Department Of Education','deo_short_name' => 'Hanwella Division'),
            array('deo_id' => 'DEO10203','zeo_id' => 'ZEO10200','deo_name' => 'Padukka Division Department Of Education','deo_short_name' => 'Padukka Division'),
            
            array('deo_id' => 'DEO10301','zeo_id' => 'ZEO10300','deo_name' => 'Kolonnawa Division Department Of Education','deo_short_name' => 'Kolonnawa Division'),
            array('deo_id' => 'DEO10302','zeo_id' => 'ZEO10300','deo_name' => 'Nugegoda Division Department Of Education','deo_short_name' => 'Nugegoda Division'),
            array('deo_id' => 'DEO10303','zeo_id' => 'ZEO10300','deo_name' => 'Maharagma Division Department Of Education','deo_short_name' => 'Maharagma Division'),
            array('deo_id' => 'DEO10304','zeo_id' => 'ZEO10300','deo_name' => 'Kaduwela Division Department Of Education','deo_short_name' => 'Kaduwela Division'),
            
            array('deo_id' => 'DEO10401','zeo_id' => 'ZEO10400','deo_name' => 'Dehiwala Division Department Of Education','deo_short_name' => 'Dehiwala Division'),
            array('deo_id' => 'DEO10402','zeo_id' => 'ZEO10400','deo_name' => 'Moratuwa Division Department Of Education','deo_short_name' => 'Moratuwa Division'),
            array('deo_id' => 'DEO10403','zeo_id' => 'ZEO10400','deo_name' => 'Kesbewa Division Department Of Education','deo_short_name' => 'Kesbewa Division'),
            
            array('deo_id' => 'DEO10501','zeo_id' => 'ZEO10500','deo_name' => 'Gampaha Division Department Of Education','deo_short_name' => 'Gampaha Division'),
            array('deo_id' => 'DEO10502','zeo_id' => 'ZEO10500','deo_name' => 'Attanagalla Division Department Of Education','deo_short_name' => 'Attanagalla Division'),
            array('deo_id' => 'DEO10503','zeo_id' => 'ZEO10500','deo_name' => 'Dompe Division Department Of Education','deo_short_name' => 'Dompe Division'),
            
            array('deo_id' => 'DEO10601','zeo_id' => 'ZEO10600','deo_name' => 'Minuwangoda Division Department Of Education','deo_short_name' => 'Minuwangoda Division'),
            array('deo_id' => 'DEO10602','zeo_id' => 'ZEO10600','deo_name' => 'Mirigama Division Department Of Education','deo_short_name' => 'Mirigama Division'),
            array('deo_id' => 'DEO10603','zeo_id' => 'ZEO10600','deo_name' => 'Diuvlapitiya Division Department Of Education','deo_short_name' => 'Diuvlapitiya Division'),
            
            array('deo_id' => 'DEO10701','zeo_id' => 'ZEO10700','deo_name' => 'Negombo Division Department Of Education','deo_short_name' => 'Negombo Division'),
            array('deo_id' => 'DEO10702','zeo_id' => 'ZEO10700','deo_name' => 'Katana Division Department Of Education','deo_short_name' => 'Katana Division'),
            array('deo_id' => 'DEO10703','zeo_id' => 'ZEO10700','deo_name' => 'Ja-Ela Division Department Of Education','deo_short_name' => 'Ja-Ela Division'),
            
            array('deo_id' => 'DEO10801','zeo_id' => 'ZEO10800','deo_name' => 'Kelaniya Division Department Of Education','deo_short_name' => 'Kelaniya Division'),
            array('deo_id' => 'DEO10802','zeo_id' => 'ZEO10800','deo_name' => 'Wattala Division Department Of Education','deo_short_name' => 'Wattala Division'),
            array('deo_id' => 'DEO10803','zeo_id' => 'ZEO10800','deo_name' => 'Biyagama Division Department Of Education','deo_short_name' => 'Biyagama Division'),
            array('deo_id' => 'DEO10804','zeo_id' => 'ZEO10800','deo_name' => 'Mahara Division Department Of Education','deo_short_name' => 'Mahara Division'),
            
            array('deo_id' => 'DEO10901','zeo_id' => 'ZEO10900','deo_name' => 'Kalutara Division Department Of Education','deo_short_name' => 'Kalutara Division'),
            array('deo_id' => 'DEO10902','zeo_id' => 'ZEO10900','deo_name' => 'Beruwala Division Department Of Education','deo_short_name' => 'Beruwala Division'),
            array('deo_id' => 'DEO10903','zeo_id' => 'ZEO10900','deo_name' => 'Panadura Division Department Of Education','deo_short_name' => 'Panadura Division'),
            array('deo_id' => 'DEO10904','zeo_id' => 'ZEO10900','deo_name' => 'Dodangoda Division Department Of Education','deo_short_name' => 'Dodangoda Division'),
            
            array('deo_id' => 'DEO11001','zeo_id' => 'ZEO11000','deo_name' => 'Matugama Division Department Of Education','deo_short_name' => 'Matugama Division'),
            array('deo_id' => 'DEO11002','zeo_id' => 'ZEO11000','deo_name' => 'Agalawatta 1 Division Department Of Education','deo_short_name' => 'Agalawatta 1 Division'),
            array('deo_id' => 'DEO11003','zeo_id' => 'ZEO11000','deo_name' => 'Agalawatta 2 Division Department Of Education','deo_short_name' => 'Agalawatta 2 Division'),
            array('deo_id' => 'DEO11004','zeo_id' => 'ZEO11000','deo_name' => 'Walallawita Division Department Of Education','deo_short_name' => 'Walallawita Division'),
            
            array('deo_id' => 'DEO11101','zeo_id' => 'ZEO11100','deo_name' => 'Horana Division Department Of Education ','deo_short_name' => 'Horana Division '),
            array('deo_id' => 'DEO11102','zeo_id' => 'ZEO11100','deo_name' => 'Bandaragama Division Department Of Education','deo_short_name' => 'Bandaragama Division'),
            array('deo_id' => 'DEO11103','zeo_id' => 'ZEO11100','deo_name' => 'Bulathsinhala Division Department Of Education','deo_short_name' => 'Bulathsinhala Division'),
            
            // Central Province Zones (PEO001)
            array('deo_id' => 'DEO20101','zeo_id' => 'ZEO20100','deo_name' => 'Gangawata Korale Division Department Of Education','deo_short_name' => 'Gangawata Korale Division'),
            array('deo_id' => 'DEO20102','zeo_id' => 'ZEO20100','deo_name' => 'Patha hewaheta Division Department Of Education','deo_short_name' => 'Patha hewaheta Division'),
            
            array('deo_id' => 'DEO20201','zeo_id' => 'ZEO20200','deo_name' => 'Yati Nuwara Division Department Of Education','deo_short_name' => 'Yati Nuwara Division'),
            array('deo_id' => 'DEO20202','zeo_id' => 'ZEO20200','deo_name' => 'Uda Nuwara Division Department Of Education','deo_short_name' => 'Uda Nuwara Division'),
            
            array('deo_id' => 'DEO20301','zeo_id' => 'ZEO20300','deo_name' => 'Uda Palatha Division Department Of Education','deo_short_name' => 'Uda Palatha Division'),
            array('deo_id' => 'DEO20302','zeo_id' => 'ZEO20300','deo_name' => 'Ganga-Ihala Korale Division Department Of Education','deo_short_name' => 'Ganga-Ihala Korale Division'),
            array('deo_id' => 'DEO20303','zeo_id' => 'ZEO20300','deo_name' => 'Pasbage Korale Division Department Of Education','deo_short_name' => 'Pasbage Korale Division'),
            
            array('deo_id' => 'DEO20401','zeo_id' => 'ZEO20400','deo_name' => 'Minipe Division Department Of Education','deo_short_name' => 'Minipe Division'),
            array('deo_id' => 'DEO20402','zeo_id' => 'ZEO20400','deo_name' => 'Medadumbara Division Department Of Education','deo_short_name' => 'Medadumbara Division'),
            array('deo_id' => 'DEO20403','zeo_id' => 'ZEO20400','deo_name' => 'Udadumbara Division Department Of Education','deo_short_name' => 'Udadumbara Division'),
            
            array('deo_id' => 'DEO20501','zeo_id' => 'ZEO20500','deo_name' => 'Kundasale Division Department Of Education','deo_short_name' => 'Kundasale Division'),
            array('deo_id' => 'DEO20502','zeo_id' => 'ZEO20500','deo_name' => 'Pathadumbara Division Department Of Education','deo_short_name' => 'Pathadumbara Division'),
            array('deo_id' => 'DEO20503','zeo_id' => 'ZEO20500','deo_name' => 'Panvila Division Department Of Education','deo_short_name' => 'Panvila Division'),
            
            array('deo_id' => 'DEO20601','zeo_id' => 'ZEO20600','deo_name' => 'Harispattuwa Division Department Of Education','deo_short_name' => 'Harispattuwa Division'),
            array('deo_id' => 'DEO20602','zeo_id' => 'ZEO20600','deo_name' => 'Galagedara Division Department Of Education','deo_short_name' => 'Galagedara Division'),
            array('deo_id' => 'DEO20603','zeo_id' => 'ZEO20600','deo_name' => 'Akurana Division Department Of Education','deo_short_name' => 'Akurana Division'),
            array('deo_id' => 'DEO20604','zeo_id' => 'ZEO20600','deo_name' => 'Pujapitiya Division Department Of Education','deo_short_name' => 'Pujapitiya Division'),
            array('deo_id' => 'DEO20605','zeo_id' => 'ZEO20600','deo_name' => 'Hataraliyadda Division Department Of Education','deo_short_name' => 'Hataraliyadda Division'),
            
            array('deo_id' => 'DEO20701','zeo_id' => 'ZEO20700','deo_name' => 'Matale Division Department Of Education','deo_short_name' => 'Matale Division'),
            array('deo_id' => 'DEO20702','zeo_id' => 'ZEO20700','deo_name' => 'Rattota Division Department Of Education','deo_short_name' => 'Rattota Division'),
            array('deo_id' => 'DEO20703','zeo_id' => 'ZEO20700','deo_name' => 'Yatawatta Division Department Of Education','deo_short_name' => 'Yatawatta Division'),
            array('deo_id' => 'DEO20704','zeo_id' => 'ZEO20700','deo_name' => 'Ukuwela Division Department Of Education','deo_short_name' => 'Ukuwela Division'),
            
            array('deo_id' => 'DEO20801','zeo_id' => 'ZEO20800','deo_name' => 'Galewela Division Department Of Education','deo_short_name' => 'Galewela Division'),
            array('deo_id' => 'DEO20802','zeo_id' => 'ZEO20800','deo_name' => 'Pallepola Division Department Of Education','deo_short_name' => 'Pallepola Division'),
            array('deo_id' => 'DEO20803','zeo_id' => 'ZEO20800','deo_name' => 'Dambulla Division Department Of Education','deo_short_name' => 'Dambulla Division'),
            
            array('deo_id' => 'DEO20901','zeo_id' => 'ZEO20900','deo_name' => 'Naula Division Department Of Education','deo_short_name' => 'Naula Division'),
            array('deo_id' => 'DEO20902','zeo_id' => 'ZEO20900','deo_name' => 'Ambanganga Korale Division Department Of Education','deo_short_name' => 'Ambanganga Korale Division'),
            
            array('deo_id' => 'DEO21001','zeo_id' => 'ZEO21000','deo_name' => 'Wilgamuwa Division Department Of Education','deo_short_name' => 'Wilgamuwa Division'),
            array('deo_id' => 'DEO21002','zeo_id' => 'ZEO21000','deo_name' => 'Laggala Division Department Of Education','deo_short_name' => 'Laggala Division'),
            
            array('deo_id' => 'DEO21101','zeo_id' => 'ZEO21100','deo_name' => 'Nuwaraeliya Division Department Of Education','deo_short_name' => 'Nuwaraeliya Division'),
            array('deo_id' => 'DEO21102','zeo_id' => 'ZEO21100','deo_name' => 'Nuwaraeliya T-1 Division Department Of Education','deo_short_name' => 'Nuwaraeliya T-1 Division'),
            array('deo_id' => 'DEO21103','zeo_id' => 'ZEO21100','deo_name' => 'Nuwaraeliya T-2 Division Department Of Education','deo_short_name' => 'Nuwaraeliya T-2 Division'),
            array('deo_id' => 'DEO21104','zeo_id' => 'ZEO21100','deo_name' => 'Nuwaraeliya T-3 Division Department Of Education','deo_short_name' => 'Nuwaraeliya T-3 Division'),
            
            array('deo_id' => 'DEO21201','zeo_id' => 'ZEO21200','deo_name' => 'Kotmale Division Department Of Education','deo_short_name' => 'Kotmale Division'),
            
            array('deo_id' => 'DEO21301','zeo_id' => 'ZEO21300','deo_name' => 'Ambagamuwa Division Department Of Education','deo_short_name' => 'Ambagamuwa Division'),
            array('deo_id' => 'DEO21302','zeo_id' => 'ZEO21300','deo_name' => 'Hatton Tami-1 Division Department Of Education','deo_short_name' => 'Hatton Tami-1 Division'),
            array('deo_id' => 'DEO21303','zeo_id' => 'ZEO21300','deo_name' => 'Hatton Tami-2 Division Department Of Education','deo_short_name' => 'Hatton Tami-2 Division'),
            array('deo_id' => 'DEO21304','zeo_id' => 'ZEO21300','deo_name' => 'Hatton Tami-3 Division Department Of Education','deo_short_name' => 'Hatton Tami-3 Division'),
            
            array('deo_id' => 'DEO21401','zeo_id' => 'ZEO21400','deo_name' => 'Walapane Division Department Of Education','deo_short_name' => 'Walapane Division'),
            
            array('deo_id' => 'DEO21501','zeo_id' => 'ZEO21500','deo_name' => 'Hanguranketha Division Department Of Education','deo_short_name' => 'Hanguranketha Division'),
            
            // Southern Province Zones (PEO005)
            array('deo_id' => 'DEO30101','zeo_id' => 'ZEO30100','deo_name' => 'Galle Division Department Of Education','deo_short_name' => 'Galle Division'),
            array('deo_id' => 'DEO30102','zeo_id' => 'ZEO30100','deo_name' => 'Habaraduwa Division Department Of Education','deo_short_name' => 'Habaraduwa Division'),
            array('deo_id' => 'DEO30103','zeo_id' => 'ZEO30100','deo_name' => 'Akmeemana Division Department Of Education','deo_short_name' => 'Akmeemana Division'),
            array('deo_id' => 'DEO30104','zeo_id' => 'ZEO30100','deo_name' => 'BaDEOgama Division Department Of Education','deo_short_name' => 'BaDEOgama Division'),
            
            array('deo_id' => 'DEO30201','zeo_id' => 'ZEO30200','deo_name' => 'Elpitiya Division Department Of Education','deo_short_name' => 'Elpitiya Division'),
            array('deo_id' => 'DEO30202','zeo_id' => 'ZEO30200','deo_name' => 'Karandeniya Division Department Of Education','deo_short_name' => 'Karandeniya Division'),
            array('deo_id' => 'DEO30203','zeo_id' => 'ZEO30200','deo_name' => 'Bentota Division Department Of Education','deo_short_name' => 'Bentota Division'),
            array('deo_id' => 'DEO30204','zeo_id' => 'ZEO30200','deo_name' => 'Divitura Welivitiya Division Department Of Education','deo_short_name' => 'Divitura Welivitiya Division'),
            array('deo_id' => 'DEO30205','zeo_id' => 'ZEO30200','deo_name' => 'Pitigala Division Department Of Education','deo_short_name' => 'Pitigala Division'),
            
            array('deo_id' => 'DEO30301','zeo_id' => 'ZEO30300','deo_name' => 'Ambalangoda Division Department Of Education','deo_short_name' => 'Ambalangoda Division'),
            array('deo_id' => 'DEO30302','zeo_id' => 'ZEO30300','deo_name' => 'Hikkaduwa Division Department Of Education','deo_short_name' => 'Hikkaduwa Division'),
            array('deo_id' => 'DEO30303','zeo_id' => 'ZEO30300','deo_name' => 'Balapitiya Division Department Of Education','deo_short_name' => 'Balapitiya Division'),
            
            array('deo_id' => 'DEO30401','zeo_id' => 'ZEO30400','deo_name' => 'Mapalagama Division Department Of Education','deo_short_name' => 'Mapalagama Division'),
            array('deo_id' => 'DEO30402','zeo_id' => 'ZEO30400','deo_name' => 'Yakkalamulla Division Department Of Education','deo_short_name' => 'Yakkalamulla Division'),
            array('deo_id' => 'DEO30403','zeo_id' => 'ZEO30400','deo_name' => 'Tawalama Division Department Of Education','deo_short_name' => 'Tawalama Division'),
            
            array('deo_id' => 'DEO30501','zeo_id' => 'ZEO30500','deo_name' => 'Matara Division Department Of Education','deo_short_name' => 'Matara Division'),
            array('deo_id' => 'DEO30502','zeo_id' => 'ZEO30500','deo_name' => 'Weligama Division Department Of Education','deo_short_name' => 'Weligama Division'),
            array('deo_id' => 'DEO30503','zeo_id' => 'ZEO30500','deo_name' => 'Devinuwara Division Department Of Education','deo_short_name' => 'Devinuwara Division'),
            array('deo_id' => 'DEO30504','zeo_id' => 'ZEO30500','deo_name' => 'Dikwella Division Department Of Education','deo_short_name' => 'Dikwella Division'),
            
            array('deo_id' => 'DEO30601','zeo_id' => 'ZEO30600','deo_name' => 'Akuressa Division Department Of Education','deo_short_name' => 'Akuressa Division'),
            array('deo_id' => 'DEO30602','zeo_id' => 'ZEO30600','deo_name' => 'Welipitiya Division Department Of Education','deo_short_name' => 'Welipitiya Division'),
            array('deo_id' => 'DEO30603','zeo_id' => 'ZEO30600','deo_name' => 'Malimboda Division Department Of Education','deo_short_name' => 'Malimboda Division'),
            
            array('deo_id' => 'DEO30701','zeo_id' => 'ZEO30700','deo_name' => 'Hakmana Division Department Of Education','deo_short_name' => 'Hakmana Division'),
            array('deo_id' => 'DEO30702','zeo_id' => 'ZEO30700','deo_name' => 'Tihagoda Division Department Of Education','deo_short_name' => 'Tihagoda Division'),
            array('deo_id' => 'DEO30703','zeo_id' => 'ZEO30700','deo_name' => 'Mulatiyana Division Department Of Education','deo_short_name' => 'Mulatiyana Division'),
            array('deo_id' => 'DEO30704','zeo_id' => 'ZEO30700','deo_name' => 'Kamburupitiya Division Department Of Education','deo_short_name' => 'Kamburupitiya Division'),
            
            array('deo_id' => 'DEO30801','zeo_id' => 'ZEO30800','deo_name' => 'Morawaka Division Department Of Education','deo_short_name' => 'Morawaka Division'),
            array('deo_id' => 'DEO30802','zeo_id' => 'ZEO30800','deo_name' => 'Pasgoda Division Department Of Education','deo_short_name' => 'Pasgoda Division'),
            array('deo_id' => 'DEO30803','zeo_id' => 'ZEO30800','deo_name' => 'Kotapola Division Department Of Education','deo_short_name' => 'Kotapola Division'),
            
            array('deo_id' => 'DEO30901','zeo_id' => 'ZEO30900','deo_name' => 'Tangalle Division Department Of Education','deo_short_name' => 'Tangalle Division'),
            array('deo_id' => 'DEO30902','zeo_id' => 'ZEO30900','deo_name' => 'Beliatta Division Department Of Education','deo_short_name' => 'Beliatta Division'),
            array('deo_id' => 'DEO30903','zeo_id' => 'ZEO30900','deo_name' => 'Angunakolapelessa Division Department Of Education','deo_short_name' => 'Angunakolapelessa Division'),
            
            array('deo_id' => 'DEO31001','zeo_id' => 'ZEO31000','deo_name' => 'Hambantota Division Department Of Education','deo_short_name' => 'Hambantota Division'),
            array('deo_id' => 'DEO31002','zeo_id' => 'ZEO31000','deo_name' => 'Tissamaharama Division Department Of Education','deo_short_name' => 'Tissamaharama Division'),
            array('deo_id' => 'DEO31003','zeo_id' => 'ZEO31000','deo_name' => 'Suriyawewa Division Department Of Education','deo_short_name' => 'Suriyawewa Division'),
            array('deo_id' => 'DEO31004','zeo_id' => 'ZEO31000','deo_name' => 'Ambalantota Division Department Of Education','deo_short_name' => 'Ambalantota Division'),
            array('deo_id' => 'DEO31005','zeo_id' => 'ZEO31000','deo_name' => 'Lunugamwehera Division Department Of Education','deo_short_name' => 'Lunugamwehera Division'),
            
            array('deo_id' => 'DEO31101','zeo_id' => 'ZEO31100','deo_name' => 'Walasmulla Division Department Of Education','deo_short_name' => 'Walasmulla Division'),
            array('deo_id' => 'DEO31102','zeo_id' => 'ZEO31100','deo_name' => 'Katuwana Division Department Of Education','deo_short_name' => 'Katuwana Division'),
            
            // Northern Province Zones (PEO007)
            array('deo_id' => 'DEO40101','zeo_id' => 'ZEO40100','deo_name' => 'Jaffana Division Department Of Education','deo_short_name' => 'Jaffana Division'),
            array('deo_id' => 'DEO40102','zeo_id' => 'ZEO40100','deo_name' => 'Nallur Division Department Of Education','deo_short_name' => 'Nallur Division'),
            array('deo_id' => 'DEO40103','zeo_id' => 'ZEO40100','deo_name' => 'Kopay Division Department Of Education','deo_short_name' => 'Kopay Division'),
            
            array('deo_id' => 'DEO40201','zeo_id' => 'ZEO40200','deo_name' => 'Kayts Division Department Of Education','deo_short_name' => 'Kayts Division'),
            array('deo_id' => 'DEO40202','zeo_id' => 'ZEO40200','deo_name' => 'Delfts Division Department Of Education','deo_short_name' => 'Delfts Division'),
            array('deo_id' => 'DEO40203','zeo_id' => 'ZEO40200','deo_name' => 'Velanai Division Department Of Education','deo_short_name' => 'Velanai Division'),
            array('deo_id' => 'DEO40204','zeo_id' => 'ZEO40200','deo_name' => 'Karainagar Division Department Of Education','deo_short_name' => 'Karainagar Division'),
            
            array('deo_id' => 'DEO40301','zeo_id' => 'ZEO40300','deo_name' => 'Chawakachcheri Division Department Of Education','deo_short_name' => 'Chawakachcheri Division'),
            
            array('deo_id' => 'DEO40401','zeo_id' => 'ZEO40400','deo_name' => 'Uduvil Division Department Of Education','deo_short_name' => 'Uduvil Division'),
            array('deo_id' => 'DEO40402','zeo_id' => 'ZEO40400','deo_name' => 'Chankanai Division Department Of Education','deo_short_name' => 'Chankanai Division'),
            array('deo_id' => 'DEO40403','zeo_id' => 'ZEO40400','deo_name' => 'Sandilipay Division Department Of Education','deo_short_name' => 'Sandilipay Division'),
            array('deo_id' => 'DEO40404','zeo_id' => 'ZEO40400','deo_name' => 'Tellipalai Division Department Of Education','deo_short_name' => 'Tellipalai Division'),
            
            array('deo_id' => 'DEO40501','zeo_id' => 'ZEO40500','deo_name' => 'Point Pedro Division Department Of Education','deo_short_name' => 'Point Pedro Division'),
            array('deo_id' => 'DEO40502','zeo_id' => 'ZEO40500','deo_name' => 'Karaveddy Division Department Of Education','deo_short_name' => 'Karaveddy Division'),
            array('deo_id' => 'DEO40503','zeo_id' => 'ZEO40500','deo_name' => 'Maruthankerny Division Department Of Education','deo_short_name' => 'Maruthankerny Division'),
            
            array('deo_id' => 'DEO40601','zeo_id' => 'ZEO40600','deo_name' => 'Karachchi Division Department Of Education','deo_short_name' => 'Karachchi Division'),
            array('deo_id' => 'DEO40602','zeo_id' => 'ZEO40600','deo_name' => 'Kandawalai Division Department Of Education','deo_short_name' => 'Kandawalai Division'),
            array('deo_id' => 'DEO40603','zeo_id' => 'ZEO40600','deo_name' => 'Pallai Division Department Of Education','deo_short_name' => 'Pallai Division'),
            array('deo_id' => 'DEO40604','zeo_id' => 'ZEO40600','deo_name' => 'Poonakary Division Department Of Education','deo_short_name' => 'Poonakary Division'),
            
            array('deo_id' => 'DEO40701','zeo_id' => 'ZEO40700','deo_name' => 'Mannar Division Department Of Education','deo_short_name' => 'Mannar Division'),
            array('deo_id' => 'DEO40702','zeo_id' => 'ZEO40700','deo_name' => 'Musali Division Department Of Education','deo_short_name' => 'Musali Division'),
            array('deo_id' => 'DEO40703','zeo_id' => 'ZEO40700','deo_name' => 'Nanaddan Division Department Of Education','deo_short_name' => 'Nanaddan Division'),
            
            array('deo_id' => 'DEO40801','zeo_id' => 'ZEO40800','deo_name' => 'Madu Division Department Of Education','deo_short_name' => 'Madu Division'),
            array('deo_id' => 'DEO40802','zeo_id' => 'ZEO40800','deo_name' => 'Manthai West Division Department Of Education','deo_short_name' => 'Manthai West Division'),
            
            array('deo_id' => 'DEO40901','zeo_id' => 'ZEO40900','deo_name' => 'Vavniya South-Sinhala Division Department Of Education','deo_short_name' => 'Vavniya South-Sinhala Division'),
            array('deo_id' => 'DEO40902','zeo_id' => 'ZEO40900','deo_name' => 'Vavniya South-Tamil Division Department Of Education','deo_short_name' => 'Vavniya South-Tamil Division'),
            array('deo_id' => 'DEO40903','zeo_id' => 'ZEO40900','deo_name' => 'Vengalachettiulam Division Department Of Education','deo_short_name' => 'Vengalachettiulam Division'),
            
            array('deo_id' => 'DEO41001','zeo_id' => 'ZEO41000','deo_name' => 'Vavniya North Division Department Of Education','deo_short_name' => 'Vavniya North Division'),
            array('deo_id' => 'DEO41002','zeo_id' => 'ZEO41000','deo_name' => 'Omantai Division Department Of Education','deo_short_name' => 'Omantai Division'),
            
            array('deo_id' => 'DEO41101','zeo_id' => 'ZEO41100','deo_name' => 'Maritime Pattu Division Department Of Education','deo_short_name' => 'Maritime Pattu Division'),
            array('deo_id' => 'DEO41102','zeo_id' => 'ZEO41100','deo_name' => 'Puthukkudiyiruppu Division Department Of Education','deo_short_name' => 'Puthukkudiyiruppu Division'),
            array('deo_id' => 'DEO41103','zeo_id' => 'ZEO41100','deo_name' => 'Welioya Division Department Of Education','deo_short_name' => 'Welioya Division'),
            
            array('deo_id' => 'DEO41201','zeo_id' => 'ZEO41200','deo_name' => 'Thunukkai Division Department Of Education','deo_short_name' => 'Thunukkai Division'),
            array('deo_id' => 'DEO41202','zeo_id' => 'ZEO41200','deo_name' => 'Manthai East Division Department Of Education','deo_short_name' => 'Manthai East Division'),
            array('deo_id' => 'DEO41203','zeo_id' => 'ZEO41200','deo_name' => 'Oddusudan Division Department Of Education','deo_short_name' => 'Oddusudan Division'),
            
            // North Central Province Zones (PEO009)
            array('deo_id' => 'DEO50101','zeo_id' => 'ZEO50100','deo_name' => 'Nuwaragam Palatha(East) Division Department Of Education','deo_short_name' => 'Nuwaragam Palatha(East) Division'),
            array('deo_id' => 'DEO50102','zeo_id' => 'ZEO50100','deo_name' => 'Nuwaragam Palatha(Central) Division Department Of Education','deo_short_name' => 'Nuwaragam Palatha(Central) Division'),
            array('deo_id' => 'DEO50103','zeo_id' => 'ZEO50100','deo_name' => 'Rambewa Division Department Of Education','deo_short_name' => 'Rambewa Division'),
            array('deo_id' => 'DEO50104','zeo_id' => 'ZEO50100','deo_name' => 'Nochchiiyagama Division Department Of Education','deo_short_name' => 'Nochchiiyagama Division'),
            array('deo_id' => 'DEO50105','zeo_id' => 'ZEO50100','deo_name' => 'Wilachchiya Division Department Of Education','deo_short_name' => 'Wilachchiya Division'),
            array('deo_id' => 'DEO50106','zeo_id' => 'ZEO50100','deo_name' => 'Nachchaduwa Division Department Of Education','deo_short_name' => 'Nachchaduwa Division'),
            
            array('deo_id' => 'DEO50201','zeo_id' => 'ZEO50200','deo_name' => 'Tambuttegama Division Department Of Education','deo_short_name' => 'Tambuttegama Division'),
            array('deo_id' => 'DEO50202','zeo_id' => 'ZEO50200','deo_name' => 'Talawa Division Department Of Education','deo_short_name' => 'Talawa Division'),
            array('deo_id' => 'DEO50203','zeo_id' => 'ZEO50200','deo_name' => 'Rajanganaya Division Department Of Education','deo_short_name' => 'Rajanganaya Division'),
            array('deo_id' => 'DEO50204','zeo_id' => 'ZEO50200','deo_name' => 'Galnewa Division Department Of Education','deo_short_name' => 'Galnewa Division'),
            
            array('deo_id' => 'DEO50301','zeo_id' => 'ZEO50300','deo_name' => 'Kekirawa Division Department Of Education','deo_short_name' => 'Kekirawa Division'),
            array('deo_id' => 'DEO50302','zeo_id' => 'ZEO50300','deo_name' => 'Palugaswewa Division Department Of Education','deo_short_name' => 'Palugaswewa Division'),
            array('deo_id' => 'DEO50303','zeo_id' => 'ZEO50300','deo_name' => 'Palagala Division Department Of Education','deo_short_name' => 'Palagala Division'),
            array('deo_id' => 'DEO50304','zeo_id' => 'ZEO50300','deo_name' => 'Thirappane Division Department Of Education','deo_short_name' => 'Thirappane Division'),
            array('deo_id' => 'DEO50305','zeo_id' => 'ZEO50300','deo_name' => 'Ipalogama Division Department Of Education','deo_short_name' => 'Ipalogama Division'),
            
            array('deo_id' => 'DEO50401','zeo_id' => 'ZEO50400','deo_name' => 'Galenbindunuwewa Division Department Of Education','deo_short_name' => 'Galenbindunuwewa Division'),
            array('deo_id' => 'DEO50402','zeo_id' => 'ZEO50400','deo_name' => 'Kahatagasdigiliya Division Department Of Education','deo_short_name' => 'Kahatagasdigiliya Division'),
            array('deo_id' => 'DEO50403','zeo_id' => 'ZEO50400','deo_name' => 'Mihintale Division Department Of Education','deo_short_name' => 'Mihintale Division'),
            
            array('deo_id' => 'DEO50501','zeo_id' => 'ZEO50500','deo_name' => 'Kebithigollewa Division Department Of Education','deo_short_name' => 'Kebithigollewa Division'),
            array('deo_id' => 'DEO50502','zeo_id' => 'ZEO50500','deo_name' => 'Padaviya Division Department Of Education','deo_short_name' => 'Padaviya Division'),
            array('deo_id' => 'DEO50503','zeo_id' => 'ZEO50500','deo_name' => 'Horowpathana Division Department Of Education','deo_short_name' => 'Horowpathana Division'),
            array('deo_id' => 'DEO50504','zeo_id' => 'ZEO50500','deo_name' => 'Medawachchiya Division Department Of Education','deo_short_name' => 'Medawachchiya Division'),
            
            array('deo_id' => 'DEO50601','zeo_id' => 'ZEO50600','deo_name' => 'Tamankaduwa Division Department Of Education','deo_short_name' => 'Tamankaduwa Division'),
            array('deo_id' => 'DEO50602','zeo_id' => 'ZEO50600','deo_name' => 'Lankapura Division Department Of Education','deo_short_name' => 'Lankapura Division'),
            
            array('deo_id' => 'DEO50701','zeo_id' => 'ZEO50700','deo_name' => 'Hingurakgoda Division Department Of Education','deo_short_name' => 'Hingurakgoda Division'),
            array('deo_id' => 'DEO50702','zeo_id' => 'ZEO50700','deo_name' => 'Medirigiriya Division Department Of Education','deo_short_name' => 'Medirigiriya Division'),
            array('deo_id' => 'DEO50703','zeo_id' => 'ZEO50700','deo_name' => 'Elahera Division Department Of Education','deo_short_name' => 'Elahera Division'),
            
            array('deo_id' => 'DEO50801','zeo_id' => 'ZEO50800','deo_name' => 'Dimbulagala Division Department Of Education','deo_short_name' => 'Dimbulagala Division'),
            array('deo_id' => 'DEO50802','zeo_id' => 'ZEO50800','deo_name' => 'Welikanda Division Department Of Education','deo_short_name' => 'Welikanda Division'),
            array('deo_id' => 'DEO50803','zeo_id' => 'ZEO50800','deo_name' => 'Aralaganwila Division Department Of Education','deo_short_name' => 'Aralaganwila Division'),
            
            // Uva Province Zones (PEO008)
            array('deo_id' => 'DEO60101','zeo_id' => 'ZEO60100','deo_name' => 'Badulla Division Department Of Education','deo_short_name' => 'Badulla Division'),
            array('deo_id' => 'DEO60102','zeo_id' => 'ZEO60100','deo_name' => 'Haliela Division Department Of Education','deo_short_name' => 'Haliela Division'),
            
            array('deo_id' => 'DEO60201','zeo_id' => 'ZEO60200','deo_name' => 'Soranatota Division Department Of Education','deo_short_name' => 'Soranatota Division'),
            array('deo_id' => 'DEO60202','zeo_id' => 'ZEO60200','deo_name' => 'Meegahakivula Division Department Of Education','deo_short_name' => 'Meegahakivula Division'),
            array('deo_id' => 'DEO60203','zeo_id' => 'ZEO60200','deo_name' => 'Kandeketiya Division Department Of Education','deo_short_name' => 'Kandeketiya Division'),
            
            array('deo_id' => 'DEO60301','zeo_id' => 'ZEO60300','deo_name' => 'Bandarawela Division Department Of Education','deo_short_name' => 'Bandarawela Division'),
            array('deo_id' => 'DEO60302','zeo_id' => 'ZEO60300','deo_name' => 'Haldummulla Division Department Of Education','deo_short_name' => 'Haldummulla Division'),
            array('deo_id' => 'DEO60303','zeo_id' => 'ZEO60300','deo_name' => 'Haputale Division Department Of Education','deo_short_name' => 'Haputale Division'),
            array('deo_id' => 'DEO60304','zeo_id' => 'ZEO60300','deo_name' => 'Ella Division Department Of Education','deo_short_name' => 'Ella Division'),
            
            array('deo_id' => 'DEO60401','zeo_id' => 'ZEO60400','deo_name' => 'Mahiyanganaya Division Department Of Education','deo_short_name' => 'Mahiyanganaya Division'),
            array('deo_id' => 'DEO60402','zeo_id' => 'ZEO60400','deo_name' => 'Ridimaliyedda Division Department Of Education','deo_short_name' => 'Ridimaliyedda Division'),
            
            array('deo_id' => 'DEO60501','zeo_id' => 'ZEO60500','deo_name' => 'Welimada Division Department Of Education','deo_short_name' => 'Welimada Division'),
            array('deo_id' => 'DEO60502','zeo_id' => 'ZEO60500','deo_name' => 'Uva-Paranagama Division Department Of Education','deo_short_name' => 'Uva-Paranagama Division'),
            
            array('deo_id' => 'DEO60601','zeo_id' => 'ZEO60600','deo_name' => 'Passara Division Department Of Education','deo_short_name' => 'Passara Division'),
            
            array('deo_id' => 'DEO60701','zeo_id' => 'ZEO60700','deo_name' => 'Siyambalanduwa Division Department Of Education','deo_short_name' => 'Siyambalanduwa Division'),
            array('deo_id' => 'DEO60702','zeo_id' => 'ZEO60700','deo_name' => 'Monaragala Division Department Of Education','deo_short_name' => 'Monaragala Division'),
            array('deo_id' => 'DEO60703','zeo_id' => 'ZEO60700','deo_name' => 'Badalkumbura Division Department Of Education','deo_short_name' => 'Badalkumbura Division'),
            
            array('deo_id' => 'DEO60801','zeo_id' => 'ZEO60800','deo_name' => 'Wellawaya Division Department Of Education','deo_short_name' => 'Wellawaya Division'),
            array('deo_id' => 'DEO60802','zeo_id' => 'ZEO60800','deo_name' => 'Buttala Division Department Of Education','deo_short_name' => 'Buttala Division'),
            
            array('deo_id' => 'DEO60901','zeo_id' => 'ZEO60900','deo_name' => 'Tanamalwila Division Department Of Education','deo_short_name' => 'Tanamalwila Division'),
            
            array('deo_id' => 'DEO61001','zeo_id' => 'ZEO61000','deo_name' => 'Bibile Division Department Of Education','deo_short_name' => 'Bibile Division'),
            array('deo_id' => 'DEO61002','zeo_id' => 'ZEO61000','deo_name' => 'Madulla Division Department Of Education','deo_short_name' => 'Madulla Division'),
            array('deo_id' => 'DEO61003','zeo_id' => 'ZEO61000','deo_name' => 'Medagama Division Department Of Education','deo_short_name' => 'Medagama Division'),
            
            // Eastern Province Zones (PEO003)
            array('deo_id' => 'DEO70101','zeo_id' => 'ZEO70100','deo_name' => 'Manmunai - North (Batticaloa) Division Department Of Education','deo_short_name' => 'Manmunai - North (Batticaloa) Division'),
            array('deo_id' => 'DEO70102','zeo_id' => 'ZEO70100','deo_name' => 'Eravur Pattu - 1 (Chenkalady) Division Department Of Education','deo_short_name' => 'Eravur Pattu - 1 (Chenkalady) Division'),
            array('deo_id' => 'DEO70103','zeo_id' => 'ZEO70100','deo_name' => 'Manmunai Pattu (Arraiyampathy) Division Department Of Education','deo_short_name' => 'Manmunai Pattu (Arraiyampathy) Division'),
            
            array('deo_id' => 'DEO70201','zeo_id' => 'ZEO70200','deo_name' => 'Koralapattu North (Vakarai) Division Department Of Education','deo_short_name' => 'Koralapattu North (Vakarai) Division'),
            array('deo_id' => 'DEO70202','zeo_id' => 'ZEO70200','deo_name' => 'Koralaipattu (Valaichchenai) Division Department Of Education','deo_short_name' => 'Koralaipattu (Valaichchenai) Division'),
            array('deo_id' => 'DEO70203','zeo_id' => 'ZEO70200','deo_name' => 'Eravurpattu - 2 (Chenkalady) Division Department Of Education','deo_short_name' => 'Eravurpattu - 2 (Chenkalady) Division'),
            
            array('deo_id' => 'DEO70301','zeo_id' => 'ZEO70300','deo_name' => 'M.S.E. Pattu (Kaluwanchchikkudy) Division Department Of Education','deo_short_name' => 'M.S.E. Pattu (Kaluwanchchikkudy) Division'),
            array('deo_id' => 'DEO70302','zeo_id' => 'ZEO70300','deo_name' => 'Porativupattu (Vellaveli) Division Department Of Education','deo_short_name' => 'Porativupattu (Vellaveli) Division'),
            
            array('deo_id' => 'DEO70401','zeo_id' => 'ZEO70400','deo_name' => 'Eravur Town Division Department Of Education','deo_short_name' => 'Eravur Town Division'),
            array('deo_id' => 'DEO70402','zeo_id' => 'ZEO70400','deo_name' => 'Kaththankudi Division Department Of Education','deo_short_name' => 'Kaththankudi Division'),
            array('deo_id' => 'DEO70403','zeo_id' => 'ZEO70400','deo_name' => 'Koralapattu West (Oddamavdi) Division Department Of Education','deo_short_name' => 'Koralapattu West (Oddamavdi) Division'),
            
            array('deo_id' => 'DEO70501','zeo_id' => 'ZEO70500','deo_name' => 'Eravur Pattu - 3 Division Department Of Education','deo_short_name' => 'Eravur Pattu - 3 Division'),
            array('deo_id' => 'DEO70502','zeo_id' => 'ZEO70500','deo_name' => 'Manmunai - West (Vavunativu) Division Department Of Education','deo_short_name' => 'Manmunai - West (Vavunativu) Division'),
            array('deo_id' => 'DEO70503','zeo_id' => 'ZEO70500','deo_name' => 'Manmunai-S. West (Kokkaddichcholai) Division Department Of Education','deo_short_name' => 'Manmunai-S. West (Kokkaddichcholai) Division'),
            
            array('deo_id' => 'DEO70601','zeo_id' => 'ZEO70600','deo_name' => 'Ampara Division Department Of Education','deo_short_name' => 'Ampara Division'),
            array('deo_id' => 'DEO70602','zeo_id' => 'ZEO70600','deo_name' => 'Uhana Division Department Of Education','deo_short_name' => 'Uhana Division'),
            array('deo_id' => 'DEO70603','zeo_id' => 'ZEO70600','deo_name' => 'Damana Division Department Of Education','deo_short_name' => 'Damana Division'),
            array('deo_id' => 'DEO70604','zeo_id' => 'ZEO70600','deo_name' => 'Lahugala Division Department Of Education','deo_short_name' => 'Lahugala Division'),
            
            array('deo_id' => 'DEO70701','zeo_id' => 'ZEO70700','deo_name' => 'Kalmunai Division Department Of Education','deo_short_name' => 'Kalmunai Division'),
            array('deo_id' => 'DEO70702','zeo_id' => 'ZEO70700','deo_name' => 'Ninthavur Division Department Of Education','deo_short_name' => 'Ninthavur Division'),
            array('deo_id' => 'DEO70703','zeo_id' => 'ZEO70700','deo_name' => 'Karaithivu Division Department Of Education','deo_short_name' => 'Karaithivu Division'),
            array('deo_id' => 'DEO70704','zeo_id' => 'ZEO70700','deo_name' => 'Kalmunai Tamil Division Department Of Education','deo_short_name' => 'Kalmunai Tamil Division'),
            array('deo_id' => 'DEO70705','zeo_id' => 'ZEO70700','deo_name' => 'Sainthamaruthu Division Department Of Education','deo_short_name' => 'Sainthamaruthu Division'),
            
            array('deo_id' => 'DEO70801','zeo_id' => 'ZEO70800','deo_name' => 'Sammanthurai Division Department Of Education','deo_short_name' => 'Sammanthurai Division'),
            array('deo_id' => 'DEO70802','zeo_id' => 'ZEO70800','deo_name' => 'Iragamam Division Department Of Education','deo_short_name' => 'Iragamam Division'),
            array('deo_id' => 'DEO70803','zeo_id' => 'ZEO70800','deo_name' => 'Navithanveli Division Department Of Education','deo_short_name' => 'Navithanveli Division'),
            
            array('deo_id' => 'DEO70901','zeo_id' => 'ZEO70900','deo_name' => 'Mahaoya Division Department Of Education','deo_short_name' => 'Mahaoya Division'),
            array('deo_id' => 'DEO70902','zeo_id' => 'ZEO70900','deo_name' => 'Padiyatalawa Division Department Of Education','deo_short_name' => 'Padiyatalawa Division'),
            
            array('deo_id' => 'DEO71001','zeo_id' => 'ZEO71000','deo_name' => 'Dehiattakandiya Division Department Of Education','deo_short_name' => 'Dehiattakandiya Division'),
            
            array('deo_id' => 'DEO71101','zeo_id' => 'ZEO71100','deo_name' => 'Akkaraipattu Division Department Of Education','deo_short_name' => 'Akkaraipattu Division'),
            array('deo_id' => 'DEO71102','zeo_id' => 'ZEO71100','deo_name' => 'Addalachchenai Division Department Of Education','deo_short_name' => 'Addalachchenai Division'),
            array('deo_id' => 'DEO71103','zeo_id' => 'ZEO71100','deo_name' => 'Potuvil 1(muslim) Division Department Of Education','deo_short_name' => 'Potuvil 1(muslim) Division'),
            
            array('deo_id' => 'DEO71201','zeo_id' => 'ZEO71200','deo_name' => 'Tirukkovil Division Department Of Education','deo_short_name' => 'Tirukkovil Division'),
            array('deo_id' => 'DEO71202','zeo_id' => 'ZEO71200','deo_name' => 'Alayadivembu Division Department Of Education','deo_short_name' => 'Alayadivembu Division'),
            array('deo_id' => 'DEO71203','zeo_id' => 'ZEO71200','deo_name' => 'Potuvil 2 (tamil) Division Department Of Education','deo_short_name' => 'Potuvil 2 (tamil) Division'),
            
            array('deo_id' => 'DEO71301','zeo_id' => 'ZEO71300','deo_name' => 'Trincomalee Town Division Department Of Education','deo_short_name' => 'Trincomalee Town Division'),
            array('deo_id' => 'DEO71302','zeo_id' => 'ZEO71300','deo_name' => 'Kuchchaveli Division Department Of Education','deo_short_name' => 'Kuchchaveli Division'),
            array('deo_id' => 'DEO71303','zeo_id' => 'ZEO71300','deo_name' => 'Thampalakamam Division Department Of Education','deo_short_name' => 'Thampalakamam Division'),
            
            array('deo_id' => 'DEO71401','zeo_id' => 'ZEO71400','deo_name' => 'Mutur Division Department Of Education','deo_short_name' => 'Mutur Division'),
            array('deo_id' => 'DEO71402','zeo_id' => 'ZEO71400','deo_name' => 'Eechchilampattu Division Department Of Education','deo_short_name' => 'Eechchilampattu Division'),
            
            array('deo_id' => 'DEO71501','zeo_id' => 'ZEO71500','deo_name' => 'Kantalai Division Department Of Education','deo_short_name' => 'Kantalai Division'),
            array('deo_id' => 'DEO71502','zeo_id' => 'ZEO71500','deo_name' => 'Seruwila Division Department Of Education','deo_short_name' => 'Seruwila Division'),
            
            array('deo_id' => 'DEO71601','zeo_id' => 'ZEO71600','deo_name' => 'Kinniya Division Department Of Education','deo_short_name' => 'Kinniya Division'),
            array('deo_id' => 'DEO71602','zeo_id' => 'ZEO71600','deo_name' => 'Mullipothana Division Department Of Education','deo_short_name' => 'Mullipothana Division'),
            array('deo_id' => 'DEO71603','zeo_id' => 'ZEO71600','deo_name' => 'Kurinchakerny Division Department Of Education','deo_short_name' => 'Kurinchakerny Division'),
            
            array('deo_id' => 'DEO71701','zeo_id' => 'ZEO71700','deo_name' => 'Gomarankadawala Division Department Of Education','deo_short_name' => 'Gomarankadawala Division'),
            array('deo_id' => 'DEO71702','zeo_id' => 'ZEO71700','deo_name' => 'Morawewa Division Department Of Education','deo_short_name' => 'Morawewa Division'),
            array('deo_id' => 'DEO71703','zeo_id' => 'ZEO71700','deo_name' => 'Padavi Sripura Division Department Of Education','deo_short_name' => 'Padavi Sripura Division'),
            
            // North Western Province Zones (PEO004)
            array('deo_id' => 'DEO80101','zeo_id' => 'ZEO80100','deo_name' => 'Kurunegala Division Department Of Education','deo_short_name' => 'Kurunegala Division'),
            array('deo_id' => 'DEO80102','zeo_id' => 'ZEO80100','deo_name' => 'Polgahawela Division Department Of Education','deo_short_name' => 'Polgahawela Division'),
            array('deo_id' => 'DEO80103','zeo_id' => 'ZEO80100','deo_name' => 'Mawathagama Division Department Of Education','deo_short_name' => 'Mawathagama Division'),
            
            array('deo_id' => 'DEO80201','zeo_id' => 'ZEO80200','deo_name' => 'Panduwasnuwara Division Department Of Education','deo_short_name' => 'Panduwasnuwara Division'),
            array('deo_id' => 'DEO80202','zeo_id' => 'ZEO80200','deo_name' => 'Bingiriya Division Department Of Education','deo_short_name' => 'Bingiriya Division'),
            array('deo_id' => 'DEO80203','zeo_id' => 'ZEO80200','deo_name' => 'Kuliyapitiya - West Division Department Of Education','deo_short_name' => 'Kuliyapitiya - West Division'),
            array('deo_id' => 'DEO80204','zeo_id' => 'ZEO80200','deo_name' => 'Udubaddawa Division Department Of Education','deo_short_name' => 'Udubaddawa Division'),
            array('deo_id' => 'DEO80205','zeo_id' => 'ZEO80200','deo_name' => 'Dahanakgedara Division Department Of Education','deo_short_name' => 'Dahanakgedara Division'),
            
            array('deo_id' => 'DEO80301','zeo_id' => 'ZEO80300','deo_name' => 'Nikaweratiya Division Department Of Education','deo_short_name' => 'Nikaweratiya Division'),
            array('deo_id' => 'DEO80302','zeo_id' => 'ZEO80300','deo_name' => 'Wariyapola Division Department Of Education','deo_short_name' => 'Wariyapola Division'),
            array('deo_id' => 'DEO80303','zeo_id' => 'ZEO80300','deo_name' => 'Kobeigane Division Department Of Education','deo_short_name' => 'Kobeigane Division'),
            array('deo_id' => 'DEO80304','zeo_id' => 'ZEO80300','deo_name' => 'Kotavehera Division Department Of Education','deo_short_name' => 'Kotavehera Division'),
            
            array('deo_id' => 'DEO80401','zeo_id' => 'ZEO80400','deo_name' => 'Maho Division Department Of Education','deo_short_name' => 'Maho Division'),
            array('deo_id' => 'DEO80402','zeo_id' => 'ZEO80400','deo_name' => 'Polpitigama Division Department Of Education','deo_short_name' => 'Polpitigama Division'),
            array('deo_id' => 'DEO80403','zeo_id' => 'ZEO80400','deo_name' => 'Galgamuwa Division Department Of Education','deo_short_name' => 'Galgamuwa Division'),
            array('deo_id' => 'DEO80404','zeo_id' => 'ZEO80400','deo_name' => 'Giribawa Division Department Of Education','deo_short_name' => 'Giribawa Division'),
            
            array('deo_id' => 'DEO80501','zeo_id' => 'ZEO80500','deo_name' => 'Kuliyapitiya - East Division Department Of Education','deo_short_name' => 'Kuliyapitiya - East Division'),
            array('deo_id' => 'DEO80502','zeo_id' => 'ZEO80500','deo_name' => 'Alawwa Division Department Of Education','deo_short_name' => 'Alawwa Division'),
            array('deo_id' => 'DEO80503','zeo_id' => 'ZEO80500','deo_name' => 'Pannala Division Department Of Education','deo_short_name' => 'Pannala Division'),
            
            array('deo_id' => 'DEO80601','zeo_id' => 'ZEO80600','deo_name' => 'Ibbagamuwa Division Department Of Education','deo_short_name' => 'Ibbagamuwa Division'),
            array('deo_id' => 'DEO80602','zeo_id' => 'ZEO80600','deo_name' => 'Ridigama Division Department Of Education','deo_short_name' => 'Ridigama Division'),
            array('deo_id' => 'DEO80603','zeo_id' => 'ZEO80600','deo_name' => 'Ganewatta Division Department Of Education','deo_short_name' => 'Ganewatta Division'),
            
            array('deo_id' => 'DEO80701','zeo_id' => 'ZEO80700','deo_name' => 'Puttalam North Division Department Of Education','deo_short_name' => 'Puttalam North Division'),
            array('deo_id' => 'DEO80702','zeo_id' => 'ZEO80700','deo_name' => 'Puttalam South Division Department Of Education','deo_short_name' => 'Puttalam South Division'),
            array('deo_id' => 'DEO80703','zeo_id' => 'ZEO80700','deo_name' => 'Anamaduwa Division Department Of Education','deo_short_name' => 'Anamaduwa Division'),
            array('deo_id' => 'DEO80704','zeo_id' => 'ZEO80700','deo_name' => 'Kalpitiya Division Department Of Education','deo_short_name' => 'Kalpitiya Division'),
            array('deo_id' => 'DEO80705','zeo_id' => 'ZEO80700','deo_name' => 'Pallama Division Department Of Education','deo_short_name' => 'Pallama Division'),
            
            array('deo_id' => 'DEO80801','zeo_id' => 'ZEO80800','deo_name' => 'Chilaw Division Department Of Education','deo_short_name' => 'Chilaw Division'),
            array('deo_id' => 'DEO80802','zeo_id' => 'ZEO80800','deo_name' => 'Arachchikattuwa Division Department Of Education','deo_short_name' => 'Arachchikattuwa Division'),
            array('deo_id' => 'DEO80803','zeo_id' => 'ZEO80800','deo_name' => 'Nattandiya Division Department Of Education','deo_short_name' => 'Nattandiya Division'),
            array('deo_id' => 'DEO80804','zeo_id' => 'ZEO80800','deo_name' => 'Wennappuwa Division Department Of Education','deo_short_name' => 'Wennappuwa Division'),
            
            // Sabaragamuwa Province Zones (PEO002)
            array('deo_id' => 'DEO90101','zeo_id' => 'ZEO90100','deo_name' => 'Ratnapura 1 Division Department Of Education','deo_short_name' => 'Ratnapura 1 Division'),
            array('deo_id' => 'DEO90102','zeo_id' => 'ZEO90100','deo_name' => 'Ratnapura 2 Division Department Of Education','deo_short_name' => 'Ratnapura 2 Division'),
            array('deo_id' => 'DEO90103','zeo_id' => 'ZEO90100','deo_name' => 'Pelmadulla Division Department Of Education','deo_short_name' => 'Pelmadulla Division'),
            array('deo_id' => 'DEO90104','zeo_id' => 'ZEO90100','deo_name' => 'Eheliyagoda Division Department Of Education','deo_short_name' => 'Eheliyagoda Division'),
            array('deo_id' => 'DEO90105','zeo_id' => 'ZEO90100','deo_name' => 'Kuruwita Division Department Of Education','deo_short_name' => 'Kuruwita Division'),
            
            array('deo_id' => 'DEO90201','zeo_id' => 'ZEO90200','deo_name' => 'Balangoda Division Department Of Education','deo_short_name' => 'Balangoda Division'),
            array('deo_id' => 'DEO90202','zeo_id' => 'ZEO90200','deo_name' => 'Imbulpe Division Department Of Education','deo_short_name' => 'Imbulpe Division'),
            array('deo_id' => 'DEO90203','zeo_id' => 'ZEO90200','deo_name' => 'Weligepola Division Department Of Education','deo_short_name' => 'Weligepola Division'),
            
            array('deo_id' => 'DEO90301','zeo_id' => 'ZEO90300','deo_name' => 'Nivitigala Division Department Of Education','deo_short_name' => 'Nivitigala Division'),
            array('deo_id' => 'DEO90302','zeo_id' => 'ZEO90300','deo_name' => 'Ayagama Division Department Of Education','deo_short_name' => 'Ayagama Division'),
            array('deo_id' => 'DEO90303','zeo_id' => 'ZEO90300','deo_name' => 'Kalawana Division Department Of Education','deo_short_name' => 'Kalawana Division'),
            array('deo_id' => 'DEO90304','zeo_id' => 'ZEO90300','deo_name' => 'Kahawatta Division Department Of Education','deo_short_name' => 'Kahawatta Division'),
            array('deo_id' => 'DEO90305','zeo_id' => 'ZEO90300','deo_name' => 'Elapatha Division Department Of Education','deo_short_name' => 'Elapatha Division'),
            
            array('deo_id' => 'DEO90401','zeo_id' => 'ZEO90400','deo_name' => 'Embilipitiya Division Department Of Education','deo_short_name' => 'Embilipitiya Division'),
            array('deo_id' => 'DEO90402','zeo_id' => 'ZEO90400','deo_name' => 'Kolonne Division Department Of Education','deo_short_name' => 'Kolonne Division'),
            array('deo_id' => 'DEO90403','zeo_id' => 'ZEO90400','deo_name' => 'Godakawela Division Department Of Education','deo_short_name' => 'Godakawela Division'),
            
            array('deo_id' => 'DEO90501','zeo_id' => 'ZEO90500','deo_name' => 'Kegalle Division Department Of Education','deo_short_name' => 'Kegalle Division'),
            array('deo_id' => 'DEO90502','zeo_id' => 'ZEO90500','deo_name' => 'Galigamuwa Division Department Of Education','deo_short_name' => 'Galigamuwa Division'),
            array('deo_id' => 'DEO90503','zeo_id' => 'ZEO90500','deo_name' => 'Warakapola Division Department Of Education','deo_short_name' => 'Warakapola Division'),
            array('deo_id' => 'DEO90504','zeo_id' => 'ZEO90500','deo_name' => 'Dedigama Division Department Of Education','deo_short_name' => 'Dedigama Division'),
            
            array('deo_id' => 'DEO90601','zeo_id' => 'ZEO90600','deo_name' => 'Mawanella Division Department Of Education','deo_short_name' => 'Mawanella Division'),
            array('deo_id' => 'DEO90602','zeo_id' => 'ZEO90600','deo_name' => 'Rambukkana Division Department Of Education','deo_short_name' => 'Rambukkana Division'),
            array('deo_id' => 'DEO90603','zeo_id' => 'ZEO90600','deo_name' => 'Aranayaka Division Department Of Education','deo_short_name' => 'Aranayaka Division'),
            
            array('deo_id' => 'DEO90701','zeo_id' => 'ZEO90700','deo_name' => 'Dehiowita Division Department Of Education','deo_short_name' => 'Dehiowita Division'),
            array('deo_id' => 'DEO90702','zeo_id' => 'ZEO90700','deo_name' => 'Ruwanwella Division Department Of Education','deo_short_name' => 'Ruwanwella Division'),
            array('deo_id' => 'DEO90703','zeo_id' => 'ZEO90700','deo_name' => 'Deraniyagala Division Department Of Education','deo_short_name' => 'Deraniyagala Division'),
            array('deo_id' => 'DEO90704','zeo_id' => 'ZEO90700','deo_name' => 'Yatiyantota Division Department Of Education','deo_short_name' => 'Yatiyantota Division'),
            array('deo_id' => 'DEO90705','zeo_id' => 'ZEO90700','deo_name' => 'Kitulgala Division Department Of Education','deo_short_name' => 'Kitulgala Division'),
        ];

    foreach ($divisionalOffices as $office) {
            DB::table('divisional_education_offices')->updateOrInsert(
                ['deo_id' => $office['deo_id']],
                [
                    'zeo_id' => $office['zeo_id'],
                    'deo_name' => $office['deo_name'],
                    'deo_short_name' => $office['deo_short_name'],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
