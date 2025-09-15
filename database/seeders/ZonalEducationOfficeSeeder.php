<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonalEducationOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zonalOffices = [
            // Western Province Zones (PEO006)
            array('zeo_id' => 'ZEO10100', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Colombo Zonal Department Of Education', 'zeo_short_name' => 'Colombo Zone'),
            array('zeo_id' => 'ZEO10200', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Homagama Zonal Department Of Education', 'zeo_short_name' => 'Homagama Zone'),
            array('zeo_id' => 'ZEO10300', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Sri Jayawardhanapura Zonal Department Of Education', 'zeo_short_name' => 'Sri Jayawardhanapura Zone'),
            array('zeo_id' => 'ZEO10400', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Piliyandala Zonal Department Of Education', 'zeo_short_name' => 'Piliyandala Zone'),
            array('zeo_id' => 'ZEO10500', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Gampaha Zonal Department Of Education', 'zeo_short_name' => 'Gampaha Zone'),
            array('zeo_id' => 'ZEO10600', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Minuwangoda Zonal Department Of Education', 'zeo_short_name' => 'Minuwangoda Zone'),
            array('zeo_id' => 'ZEO10700', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Negombo Zonal Department Of Education', 'zeo_short_name' => 'Negombo Zone'),
            array('zeo_id' => 'ZEO10800', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Kelaniya Zonal Department Of Education', 'zeo_short_name' => 'Kelaniya Zone'),
            array('zeo_id' => 'ZEO10900', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Kalutara Zonal Department Of Education', 'zeo_short_name' => 'Kalutara Zone'),
            array('zeo_id' => 'ZEO11000', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Matugama Zonal Department Of Education', 'zeo_short_name' => 'Matugama Zone'),
            array('zeo_id' => 'ZEO11100', 'peo_id' => 'PEO006', 'district_id' => NULL, 'zeo_name' => 'Horana Zonal Department Of Education ', 'zeo_short_name' => 'Horana Zone '),

            // Central Province Zones (PEO001)
            array('zeo_id' => 'ZEO20100', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Kandy Zonal Department Of Education ', 'zeo_short_name' => 'Kandy Zone '),
            array('zeo_id' => 'ZEO20200', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Denuwara Zonal Department Of Education ', 'zeo_short_name' => 'Denuwara Zone '),
            array('zeo_id' => 'ZEO20300', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Gampola Zonal Department Of Education ', 'zeo_short_name' => 'Gampola Zone '),
            array('zeo_id' => 'ZEO20400', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Teldeniya Zonal Department Of Education ', 'zeo_short_name' => 'Teldeniya Zone '),
            array('zeo_id' => 'ZEO20500', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Waththegama Zonal Department Of Education', 'zeo_short_name' => 'Waththegama Zone'),
            array('zeo_id' => 'ZEO20600', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Katugastota Zonal Department Of Education', 'zeo_short_name' => 'Katugastota Zone'),
            array('zeo_id' => 'ZEO20700', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Matale Zonal Department Of Education', 'zeo_short_name' => 'Matale Zone'),
            array('zeo_id' => 'ZEO20800', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Galewela Zonal Department Of Education', 'zeo_short_name' => 'Galewela Zone'),
            array('zeo_id' => 'ZEO20900', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Naula Zonal Department Of Education', 'zeo_short_name' => 'Naula Zone'),
            array('zeo_id' => 'ZEO21000', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Wilgamuwa Zonal Department Of Education', 'zeo_short_name' => 'Wilgamuwa Zone'),
            array('zeo_id' => 'ZEO21100', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Nuwaraeliya  Zonal Department Of Education', 'zeo_short_name' => 'Nuwaraeliya  Zone'),
            array('zeo_id' => 'ZEO21200', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Kotmale Zonal Department Of Education', 'zeo_short_name' => 'Kotmale Zone'),
            array('zeo_id' => 'ZEO21300', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Hatton Zonal Department Of Education', 'zeo_short_name' => 'Hatton Zone'),
            array('zeo_id' => 'ZEO21400', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Walapane Zonal Department Of Education', 'zeo_short_name' => 'Walapane Zone'),
            array('zeo_id' => 'ZEO21500', 'peo_id' => 'PEO001', 'district_id' => NULL, 'zeo_name' => 'Hanguranketha Zonal Department Of Education', 'zeo_short_name' => 'Hanguranketha Zone'),

            // Southern Province Zones (PEO005)
            array('zeo_id' => 'ZEO30100', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Galle Zonal Department Of Education', 'zeo_short_name' => 'Galle Zone'),
            array('zeo_id' => 'ZEO30200', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Elpitiya Zonal Department Of Education', 'zeo_short_name' => 'Elpitiya Zone'),
            array('zeo_id' => 'ZEO30300', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Ambalangoda Zonal Department Of Education', 'zeo_short_name' => 'Ambalangoda Zone'),
            array('zeo_id' => 'ZEO30400', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Udugama Zonal Department Of Education', 'zeo_short_name' => 'Udugama Zone'),
            array('zeo_id' => 'ZEO30500', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Matara Zonal Department Of Education', 'zeo_short_name' => 'Matara Zone'),
            array('zeo_id' => 'ZEO30600', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Akuressa Zonal Department Of Education', 'zeo_short_name' => 'Akuressa Zone'),
            array('zeo_id' => 'ZEO30700', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Hakmana Zonal Department Of Education', 'zeo_short_name' => 'Hakmana Zone'),
            array('zeo_id' => 'ZEO30800', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Morawaka Zonal Department Of Education', 'zeo_short_name' => 'Morawaka Zone'),
            array('zeo_id' => 'ZEO30900', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Tangalle Zonal Department Of Education', 'zeo_short_name' => 'Tangalle Zone'),
            array('zeo_id' => 'ZEO31000', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Hambantota Zonal Department Of Education', 'zeo_short_name' => 'Hambantota Zone'),
            array('zeo_id' => 'ZEO31100', 'peo_id' => 'PEO005', 'district_id' => NULL, 'zeo_name' => 'Walasmulla Zonal Department Of Education', 'zeo_short_name' => 'Walasmulla Zone'),

            // Northern Province Zones (PEO007)
            array('zeo_id' => 'ZEO40100', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Jaffana Zonal Department Of Education', 'zeo_short_name' => 'Jaffana Zone'),
            array('zeo_id' => 'ZEO40200', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Islands Zonal Department Of Education', 'zeo_short_name' => 'Islands Zone'),
            array('zeo_id' => 'ZEO40300', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Thenmarachchi Zonal Department Of Education', 'zeo_short_name' => 'Thenmarachchi Zone'),
            array('zeo_id' => 'ZEO40400', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Walikamam Zonal Department Of Education', 'zeo_short_name' => 'Walikamam Zone'),
            array('zeo_id' => 'ZEO40500', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Wadamarachchi Zonal Department Of Education', 'zeo_short_name' => 'Wadamarachchi Zone'),
            array('zeo_id' => 'ZEO40600', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Kilinochchi Zonal Department Of Education', 'zeo_short_name' => 'Kilinochchi Zone'),
            array('zeo_id' => 'ZEO40700', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Mannar Zonal Department Of Education', 'zeo_short_name' => 'Mannar Zone'),
            array('zeo_id' => 'ZEO40800', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Madu Zonal Department Of Education', 'zeo_short_name' => 'Madu Zone'),
            array('zeo_id' => 'ZEO40900', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Vavniya Division Department Of Education', 'zeo_short_name' => 'Vavniya Division'),
            array('zeo_id' => 'ZEO41000', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Vavniya North Zonal Department Of Education', 'zeo_short_name' => 'Vavniya North Zone'),
            array('zeo_id' => 'ZEO41100', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Mullaitivu Zonal Department Of Education', 'zeo_short_name' => 'Mullaitivu Zone'),
            array('zeo_id' => 'ZEO41200', 'peo_id' => 'PEO007', 'district_id' => NULL, 'zeo_name' => 'Thunukkai Zonal Department Of Education', 'zeo_short_name' => 'Thunukkai Zone'),

            // Eastern Province Zones (PEO003)
            array('zeo_id' => 'ZEO70100', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Batticaloa Zonal Department Of Education', 'zeo_short_name' => 'Batticaloa Zone'),
            array('zeo_id' => 'ZEO70200', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Kalkudah Zonal Department Of Education', 'zeo_short_name' => 'Kalkudah Zone'),
            array('zeo_id' => 'ZEO70300', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Paddrippu Zonal Department Of Education', 'zeo_short_name' => 'Paddrippu Zone'),
            array('zeo_id' => 'ZEO70400', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Batticaloa Central Zonal Department Of Education', 'zeo_short_name' => 'Batticaloa Central Zone'),
            array('zeo_id' => 'ZEO70500', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Batticaloa west Zonal Department Of Education', 'zeo_short_name' => 'Batticaloa west Zone'),
            array('zeo_id' => 'ZEO70600', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Ampara Zonal Department Of Education', 'zeo_short_name' => 'Ampara Zone'),
            array('zeo_id' => 'ZEO70700', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Kalmunai Zonal Department Of Education', 'zeo_short_name' => 'Kalmunai Zone'),
            array('zeo_id' => 'ZEO70800', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Sammanthurai Zonal Department Of Education', 'zeo_short_name' => 'Sammanthurai Zone'),
            array('zeo_id' => 'ZEO70900', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Mahaoya Zonal Department Of Education', 'zeo_short_name' => 'Mahaoya Zone'),
            array('zeo_id' => 'ZEO71000', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Dehiattakandiya Zonal Department Of Education', 'zeo_short_name' => 'Dehiattakandiya Zone'),
            array('zeo_id' => 'ZEO71100', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Akkaraipattu Zonal Department Of Education', 'zeo_short_name' => 'Akkaraipattu Zone'),
            array('zeo_id' => 'ZEO71200', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Thirukkovil Zonal Department Of Education', 'zeo_short_name' => 'Thirukkovil Zone'),
            array('zeo_id' => 'ZEO71300', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Trincomale Zonal Department Of Education', 'zeo_short_name' => 'Trincomale Zone'),
            array('zeo_id' => 'ZEO71400', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Mutur Zonal Department Of Education', 'zeo_short_name' => 'Mutur Zone'),
            array('zeo_id' => 'ZEO71500', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Kantalai Zonal Department Of Education', 'zeo_short_name' => 'Kantalai Zone'),
            array('zeo_id' => 'ZEO71600', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Kinniya Zonal Department Of Education', 'zeo_short_name' => 'Kinniya Zone'),
            array('zeo_id' => 'ZEO71700', 'peo_id' => 'PEO003', 'district_id' => NULL, 'zeo_name' => 'Trincomale North Zonal Department Of Education', 'zeo_short_name' => 'Trincomale North Zone'),

            // North Western Province Zones (PEO004)
            array('zeo_id' => 'ZEO80100', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Kurunegala Zonal Department Of Education', 'zeo_short_name' => 'Kurunegala Zone'),
            array('zeo_id' => 'ZEO80200', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Kuliyapitiya Zonal Department Of Education', 'zeo_short_name' => 'Kuliyapitiya Zone'),
            array('zeo_id' => 'ZEO80300', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Nikaweratiya Zonal Department Of Education', 'zeo_short_name' => 'Nikaweratiya Zone'),
            array('zeo_id' => 'ZEO80400', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Maho Zonal Department Of Education', 'zeo_short_name' => 'Maho Zone'),
            array('zeo_id' => 'ZEO80500', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Giriulla Zonal Department Of Education', 'zeo_short_name' => 'Giriulla Zone'),
            array('zeo_id' => 'ZEO80600', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Ibbagamuwa Zonal Department Of Education', 'zeo_short_name' => 'Ibbagamuwa Zone'),
            array('zeo_id' => 'ZEO80700', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Puttalam Zonal Department Of Education', 'zeo_short_name' => 'Puttalam Zone'),
            array('zeo_id' => 'ZEO80800', 'peo_id' => 'PEO004', 'district_id' => NULL, 'zeo_name' => 'Chilaw Zonal Department Of Education', 'zeo_short_name' => 'Chilaw Zone'),

            // North Central Province Zones (PEO009)
            array('zeo_id' => 'ZEO50100', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Anuradhapura Zonal Department Of Education', 'zeo_short_name' => 'Anuradhapura Zone'),
            array('zeo_id' => 'ZEO50200', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Tambuttegama Zonal Department Of Education', 'zeo_short_name' => 'Tambuttegama Zone'),
            array('zeo_id' => 'ZEO50300', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Kekirawa Zonal Department Of Education', 'zeo_short_name' => 'Kekirawa Zone'),
            array('zeo_id' => 'ZEO50400', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Galenbindunuwewa Zonal Department Of Education', 'zeo_short_name' => 'Galenbindunuwewa Zone'),
            array('zeo_id' => 'ZEO50500', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Kebithigollewa Zonal Department Of Education', 'zeo_short_name' => 'Kebithigollewa Zone'),
            array('zeo_id' => 'ZEO50600', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Polonnaruwa Zonal Department Of Education', 'zeo_short_name' => 'Polonnaruwa Zone'),
            array('zeo_id' => 'ZEO50700', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Hingurakgoda Zonal Department Of Education', 'zeo_short_name' => 'Hingurakgoda Zone'),
            array('zeo_id' => 'ZEO50800', 'peo_id' => 'PEO009', 'district_id' => NULL, 'zeo_name' => 'Dimbulagala Zonal Department Of Education', 'zeo_short_name' => 'Dimbulagala Zone'),

            // Uva Province Zones (PEO008)
            array('zeo_id' => 'ZEO60100', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Badulla Zonal Department Of Education', 'zeo_short_name' => 'Badulla Zone'),
            array('zeo_id' => 'ZEO60200', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Viyaluwa Zonal Department Of Education', 'zeo_short_name' => 'Viyaluwa Zone'),
            array('zeo_id' => 'ZEO60300', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Bandarawela Zonal Department Of Education', 'zeo_short_name' => 'Bandarawela Zone'),
            array('zeo_id' => 'ZEO60400', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Mahiyanganaya Zonal Department Of Education', 'zeo_short_name' => 'Mahiyanganaya Zone'),
            array('zeo_id' => 'ZEO60500', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Welimada Zonal Department Of Education', 'zeo_short_name' => 'Welimada Zone'),
            array('zeo_id' => 'ZEO60600', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Passara Zonal Department Of Education', 'zeo_short_name' => 'Passara Zone'),
            array('zeo_id' => 'ZEO60700', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Monaragala Zonal Department Of Education', 'zeo_short_name' => 'Monaragala Zone'),
            array('zeo_id' => 'ZEO60800', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Wellawaya Zonal Department Of Education', 'zeo_short_name' => 'Wellawaya Zone'),
            array('zeo_id' => 'ZEO60900', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Tanamalwila Zonal Department Of Education', 'zeo_short_name' => 'Tanamalwila Zone'),
            array('zeo_id' => 'ZEO61000', 'peo_id' => 'PEO008', 'district_id' => NULL, 'zeo_name' => 'Bibile Zonal Department Of Education', 'zeo_short_name' => 'Bibile Zone'),

            // Sabaragamuwa Province Zones (PEO002)
            array('zeo_id' => 'ZEO90100', 'peo_id' => 'PEO002', 'district_id' => NULL, 'zeo_name' => 'Ratnapura Zonal Department Of Education', 'zeo_short_name' => 'Ratnapura Zone'),
            array('zeo_id' => 'ZEO90200', 'peo_id' => 'PEO002', 'district_id' => NULL, 'zeo_name' => 'Balangoda Zonal Department Of Education', 'zeo_short_name' => 'Balangoda Zone'),
            array('zeo_id' => 'ZEO90300', 'peo_id' => 'PEO002', 'district_id' => NULL, 'zeo_name' => 'Nivitigala Zonal Department Of Education', 'zeo_short_name' => 'Nivitigala Zone'),
            array('zeo_id' => 'ZEO90400', 'peo_id' => 'PEO002', 'district_id' => NULL, 'zeo_name' => 'Embilipitiya Zonal Department Of Education', 'zeo_short_name' => 'Embilipitiya Zone'),
            array('zeo_id' => 'ZEO90500', 'peo_id' => 'PEO002', 'district_id' => NULL, 'zeo_name' => 'Kegalle Zonal Department Of Education', 'zeo_short_name' => 'Kegalle Zone'),
            array('zeo_id' => 'ZEO90600', 'peo_id' => 'PEO002', 'district_id' => NULL, 'zeo_name' => 'Mawanella Zonal Department Of Education', 'zeo_short_name' => 'Mawanella Zone'),
            array('zeo_id' => 'ZEO90700', 'peo_id' => 'PEO002', 'district_id' => NULL, 'zeo_name' => 'Dehiowita Zonal Department Of Education', 'zeo_short_name' => 'Dehiowita Zone'),
        ];

        foreach ($zonalOffices as $office) {
            DB::table('zonal_education_offices')->updateOrInsert(
                ['zeo_id' => $office['zeo_id']],
                [
                    'peo_id' => $office['peo_id'],
                    'district_id' => $office['district_id'],
                    'zeo_name' => $office['zeo_name'],
                    'zeo_short_name' => $office['zeo_short_name'],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]
            );
        }
    }
}
