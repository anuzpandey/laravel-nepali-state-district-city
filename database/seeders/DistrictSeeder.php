<?php

declare(strict_types=1);

namespace AnuzPandey\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('districts')->insert([
            0 =>
                [
                    'id' => 1,
                    'name' => 'Bhojpur',
                    'name_np' => 'भोजपुर',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:20',
                    'updated_at' => '2019-10-07 05:24:29',
                    'deleted_at' => null,
                ],
            1 =>
                [
                    'id' => 2,
                    'name' => 'Dhankuta',
                    'name_np' => 'धनकुटा',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:20',
                    'updated_at' => '2019-10-07 05:25:24',
                    'deleted_at' => null,
                ],
            2 =>
                [
                    'id' => 3,
                    'name' => 'Ilam',
                    'name_np' => 'ईलाम',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:20',
                    'updated_at' => '2019-10-07 05:25:35',
                    'deleted_at' => null,
                ],
            3 =>
                [
                    'id' => 4,
                    'name' => 'Jhapa',
                    'name_np' => 'झापा',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:26:06',
                    'deleted_at' => null,
                ],
            4 =>
                [
                    'id' => 5,
                    'name' => 'Khotang',
                    'name_np' => 'खोटाङ',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:26:52',
                    'deleted_at' => null,
                ],
            5 =>
                [
                    'id' => 6,
                    'name' => 'Morang',
                    'name_np' => 'मोरङ',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:27:22',
                    'deleted_at' => null,
                ],
            6 =>
                [
                    'id' => 7,
                    'name' => 'Okhaldhunga',
                    'name_np' => 'ओखलढुंगा',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:27:40',
                    'deleted_at' => null,
                ],
            7 =>
                [
                    'id' => 8,
                    'name' => 'Panchthar',
                    'name_np' => 'पाँचथर',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:27:55',
                    'deleted_at' => null,
                ],
            8 =>
                [
                    'id' => 9,
                    'name' => 'Sankhuwasabha',
                    'name_np' => 'संखुवासभा',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:29:58',
                    'deleted_at' => null,
                ],
            9 =>
                [
                    'id' => 10,
                    'name' => 'Solukhumbu',
                    'name_np' => 'सोलुखुम्बु',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:28:06',
                    'deleted_at' => null,
                ],
            10 =>
                [
                    'id' => 11,
                    'name' => 'Sunsari',
                    'name_np' => 'सुनसरी',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:30:11',
                    'deleted_at' => null,
                ],
            11 =>
                [
                    'id' => 12,
                    'name' => 'Taplejung',
                    'name_np' => 'ताप्लेजुङ',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:30:27',
                    'deleted_at' => null,
                ],
            12 =>
                [
                    'id' => 13,
                    'name' => 'Terhathum',
                    'name_np' => 'तेह्रथुम',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:21',
                    'updated_at' => '2019-10-07 05:30:44',
                    'deleted_at' => null,
                ],
            13 =>
                [
                    'id' => 14,
                    'name' => 'Udayapur',
                    'name_np' => 'उदयपुर',

                    'province_id' => 1,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:31:16',
                    'deleted_at' => null,
                ],
            14 =>
                [
                    'id' => 15,
                    'name' => 'Bara',
                    'name_np' => 'बारा',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:31:28',
                    'deleted_at' => null,
                ],
            15 =>
                [
                    'id' => 16,
                    'name' => 'Dhanusa',
                    'name_np' => 'धनुषा',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:32:28',
                    'deleted_at' => null,
                ],
            16 =>
                [
                    'id' => 17,
                    'name' => 'Mahottari',
                    'name_np' => 'महोत्तरी',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:32:41',
                    'deleted_at' => null,
                ],
            17 =>
                [
                    'id' => 18,
                    'name' => 'Parsa',
                    'name_np' => 'पर्सा',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:33:01',
                    'deleted_at' => null,
                ],
            18 =>
                [
                    'id' => 19,
                    'name' => 'Rautahat',
                    'name_np' => 'रौतहट',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:33:19',
                    'deleted_at' => null,
                ],
            19 =>
                [
                    'id' => 20,
                    'name' => 'Saptari',
                    'name_np' => 'सप्तरी',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:33:32',
                    'deleted_at' => null,
                ],
            20 =>
                [
                    'id' => 21,
                    'name' => 'Sarlahi',
                    'name_np' => 'सर्लाही',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:22',
                    'updated_at' => '2019-10-07 05:33:46',
                    'deleted_at' => null,
                ],
            21 =>
                [
                    'id' => 22,
                    'name' => 'Siraha',
                    'name_np' => 'सिराहा',

                    'province_id' => 2,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:34:00',
                    'deleted_at' => null,
                ],
            22 =>
                [
                    'id' => 23,
                    'name' => 'Bhaktapur',
                    'name_np' => 'भक्तपुर',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:34:30',
                    'deleted_at' => null,
                ],
            23 =>
                [
                    'id' => 24,
                    'name' => 'Chitwan',
                    'name_np' => 'चितवन',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:34:40',
                    'deleted_at' => null,
                ],
            24 =>
                [
                    'id' => 25,
                    'name' => 'Dhading',
                    'name_np' => 'धादिङ',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:34:53',
                    'deleted_at' => null,
                ],
            25 =>
                [
                    'id' => 26,
                    'name' => 'Dholkha',
                    'name_np' => 'दोलखा',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:35:06',
                    'deleted_at' => null,
                ],
            26 =>
                [
                    'id' => 27,
                    'name' => 'Kathmandu',
                    'name_np' => 'काठमाडौं',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:35:19',
                    'deleted_at' => null,
                ],
            27 =>
                [
                    'id' => 28,
                    'name' => 'Kavrepalanchok',
                    'name_np' => 'काभ्रेपलाञ्चोक',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:35:47',
                    'deleted_at' => null,
                ],
            28 =>
                [
                    'id' => 29,
                    'name' => 'Lalitpur',
                    'name_np' => 'ललितपुर',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:23',
                    'updated_at' => '2019-10-07 05:35:58',
                    'deleted_at' => null,
                ],
            29 =>
                [
                    'id' => 30,
                    'name' => 'Makwanpur',
                    'name_np' => 'मकवानपुर',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:36:09',
                    'deleted_at' => null,
                ],
            30 =>
                [
                    'id' => 31,
                    'name' => 'Nuwakot',
                    'name_np' => 'नुवाकोट',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:39:01',
                    'deleted_at' => null,
                ],
            31 =>
                [
                    'id' => 32,
                    'name' => 'Ramechhap',
                    'name_np' => 'रामेछाप',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:39:12',
                    'deleted_at' => null,
                ],
            32 =>
                [
                    'id' => 33,
                    'name' => 'Rasuwa',
                    'name_np' => 'रसुवा',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:39:30',
                    'deleted_at' => null,
                ],
            33 =>
                [
                    'id' => 34,
                    'name' => 'Sindhuli',
                    'name_np' => 'सिन्धुली',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:39:47',
                    'deleted_at' => null,
                ],
            34 =>
                [
                    'id' => 35,
                    'name' => 'Sindhupalchok',
                    'name_np' => 'सिन्धुपाल्चोक',

                    'province_id' => 3,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:40:01',
                    'deleted_at' => null,
                ],
            35 =>
                [
                    'id' => 36,
                    'name' => 'Baglung',
                    'name_np' => 'बाग्लुङ',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:40:14',
                    'deleted_at' => null,
                ],
            36 =>
                [
                    'id' => 37,
                    'name' => 'Gorkha',
                    'name_np' => 'गोरखा',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:40:30',
                    'deleted_at' => null,
                ],
            37 =>
                [
                    'id' => 38,
                    'name' => 'Kaski',
                    'name_np' => 'कास्की',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:40:42',
                    'deleted_at' => null,
                ],
            38 =>
                [
                    'id' => 39,
                    'name' => 'Lamjung',
                    'name_np' => 'लमजुङ',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:40:57',
                    'deleted_at' => null,
                ],
            39 =>
                [
                    'id' => 40,
                    'name' => 'Manang',
                    'name_np' => 'मनाङ',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:41:54',
                    'deleted_at' => null,
                ],
            40 =>
                [
                    'id' => 41,
                    'name' => 'Mustang',
                    'name_np' => 'मुस्ताङ',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:24',
                    'updated_at' => '2019-10-07 05:42:07',
                    'deleted_at' => null,
                ],
            41 =>
                [
                    'id' => 42,
                    'name' => 'Myagdi',
                    'name_np' => 'म्याग्दी',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:42:23',
                    'deleted_at' => null,
                ],
            42 =>
                [
                    'id' => 43,
                    'name' => 'Nawalpur',
                    'name_np' => 'नवलपुर',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 10:03:52',
                    'deleted_at' => null,
                ],
            43 =>
                [
                    'id' => 44,
                    'name' => 'Parbat',
                    'name_np' => 'पर्बत',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:42:59',
                    'deleted_at' => null,
                ],
            44 =>
                [
                    'id' => 45,
                    'name' => 'Syangja',
                    'name_np' => 'स्याङ्जा',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:43:10',
                    'deleted_at' => null,
                ],
            45 =>
                [
                    'id' => 46,
                    'name' => 'Tanahu',
                    'name_np' => 'तनहुँ',

                    'province_id' => 4,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:43:25',
                    'deleted_at' => null,
                ],
            46 =>
                [
                    'id' => 47,
                    'name' => 'Arghakhanchi',
                    'name_np' => 'अर्घाखाँची',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:45:09',
                    'deleted_at' => null,
                ],
            47 =>
                [
                    'id' => 48,
                    'name' => 'Banke',
                    'name_np' => 'बाँके',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:49:23',
                    'deleted_at' => null,
                ],
            48 =>
                [
                    'id' => 49,
                    'name' => 'Bardiya',
                    'name_np' => 'बर्दिया',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:49:35',
                    'deleted_at' => null,
                ],
            49 =>
                [
                    'id' => 50,
                    'name' => 'Dang Deukhuri',
                    'name_np' => 'दाङ',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:49:54',
                    'deleted_at' => null,
                ],
            50 =>
                [
                    'id' => 51,
                    'name' => 'Gulmi',
                    'name_np' => 'गुल्मी',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:25',
                    'updated_at' => '2019-10-07 05:50:05',
                    'deleted_at' => null,
                ],
            51 =>
                [
                    'id' => 52,
                    'name' => 'Kapilvastu',
                    'name_np' => 'कपिलवस्तु',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:51:39',
                    'deleted_at' => null,
                ],
            52 =>
                [
                    'id' => 53,
                    'name' => 'Nawalparasi',
                    'name_np' => 'नवलपरासी',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:51:50',
                    'deleted_at' => null,
                ],
            53 =>
                [
                    'id' => 54,
                    'name' => 'Palpa',
                    'name_np' => 'पाल्पा',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:52:03',
                    'deleted_at' => null,
                ],
            54 =>
                [
                    'id' => 55,
                    'name' => 'Pyuthan',
                    'name_np' => 'प्यूठान',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:52:16',
                    'deleted_at' => null,
                ],
            55 =>
                [
                    'id' => 56,
                    'name' => 'Rolpa',
                    'name_np' => 'रोल्पा',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:52:30',
                    'deleted_at' => null,
                ],
            56 =>
                [
                    'id' => 57,
                    'name' => 'Rukum',
                    'name_np' => 'रुकुम',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:52:38',
                    'deleted_at' => null,
                ],
            57 =>
                [
                    'id' => 58,
                    'name' => 'Rupandehi',
                    'name_np' => 'रुपन्देही',

                    'province_id' => 5,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:52:50',
                    'deleted_at' => null,
                ],
            58 =>
                [
                    'id' => 59,
                    'name' => 'Dailekh',
                    'name_np' => 'दैलेख',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:26',
                    'updated_at' => '2019-10-07 05:54:58',
                    'deleted_at' => null,
                ],
            59 =>
                [
                    'id' => 60,
                    'name' => 'Dolpa',
                    'name_np' => 'डोल्पा',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:55:43',
                    'deleted_at' => null,
                ],
            60 =>
                [
                    'id' => 61,
                    'name' => 'Humla',
                    'name_np' => 'हुम्ला',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:55:58',
                    'deleted_at' => null,
                ],
            61 =>
                [
                    'id' => 62,
                    'name' => 'Jajarkot',
                    'name_np' => 'जाजरकोट',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:56:43',
                    'deleted_at' => null,
                ],
            62 =>
                [
                    'id' => 63,
                    'name' => 'Jumla',
                    'name_np' => 'जुम्ला',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:56:59',
                    'deleted_at' => null,
                ],
            63 =>
                [
                    'id' => 64,
                    'name' => 'Kalikot',
                    'name_np' => 'कालिकोट',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:57:10',
                    'deleted_at' => null,
                ],
            64 =>
                [
                    'id' => 65,
                    'name' => 'Mugu',
                    'name_np' => 'मुगु',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:57:20',
                    'deleted_at' => null,
                ],
            65 =>
                [
                    'id' => 67,
                    'name' => 'Salyan',
                    'name_np' => 'सल्यान',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:59:02',
                    'deleted_at' => null,
                ],
            66 =>
                [
                    'id' => 68,
                    'name' => 'Surkhet',
                    'name_np' => 'सुर्खेत',

                    'province_id' => 6,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 05:59:10',
                    'deleted_at' => null,
                ],
            67 =>
                [
                    'id' => 69,
                    'name' => 'Achham',
                    'name_np' => 'अछाम',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 06:00:47',
                    'deleted_at' => null,
                ],
            68 =>
                [
                    'id' => 70,
                    'name' => 'Baitadi',
                    'name_np' => 'बैतडी',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:27',
                    'updated_at' => '2019-10-07 06:01:02',
                    'deleted_at' => null,
                ],
            69 =>
                [
                    'id' => 71,
                    'name' => 'Bajhang',
                    'name_np' => 'बझाङ',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:28',
                    'updated_at' => '2019-10-07 06:01:19',
                    'deleted_at' => null,
                ],
            70 =>
                [
                    'id' => 72,
                    'name' => 'Bajura',
                    'name_np' => 'बाजुरा',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:28',
                    'updated_at' => '2019-10-07 06:01:31',
                    'deleted_at' => null,
                ],
            71 =>
                [
                    'id' => 74,
                    'name' => 'Darchula',
                    'name_np' => 'दार्चुला',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:28',
                    'updated_at' => '2019-10-07 06:03:59',
                    'deleted_at' => null,
                ],
            72 =>
                [
                    'id' => 75,
                    'name' => 'Doti',
                    'name_np' => 'डोटी',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:28',
                    'updated_at' => '2019-10-07 06:04:11',
                    'deleted_at' => null,
                ],
            73 =>
                [
                    'id' => 76,
                    'name' => 'Kailali',
                    'name_np' => 'कैलाली',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:28',
                    'updated_at' => '2019-10-11 05:42:18',
                    'deleted_at' => null,
                ],
            74 =>
                [
                    'id' => 77,
                    'name' => 'Kanchanpur',
                    'name_np' => 'कंचनपुर',

                    'province_id' => 7,
                    'created_at' => '2019-09-27 11:31:28',
                    'updated_at' => '2019-10-11 05:42:27',
                    'deleted_at' => null,
                ],
            75 =>
                [
                    'id' => 79,
                    'name' => 'Dadeldhura',
                    'name_np' => 'डडेलधुरा',

                    'province_id' => 7,
                    'created_at' => '2019-10-11 05:57:22',
                    'updated_at' => '2019-10-11 05:57:22',
                    'deleted_at' => null,
                ],
            76 =>
                [
                    'id' => 80,
                    'name' => 'Rukum ( Pashchim)',
                    'name_np' => 'रुकुम ( पश्चिम )',

                    'province_id' => 6,
                    'created_at' => '2019-10-11 06:55:02',
                    'updated_at' => '2019-12-26 20:44:29',
                    'deleted_at' => null,
                ],
            77 =>
                [
                    'id' => 84,
                    'name' => 'Nawalpur',
                    'name_np' => 'नवलपुर',

                    'province_id' => 5,
                    'created_at' => '2019-04-04 16:10:36',
                    'updated_at' => '2019-04-04 16:10:36',
                    'deleted_at' => null,
                ],
            78 =>
                [
                    'id' => 85,
                    'name' => 'Parasi',
                    'name_np' => 'परासी',

                    'province_id' => 5,
                    'created_at' => '2019-04-04 16:11:15',
                    'updated_at' => '2019-04-04 16:11:15',
                    'deleted_at' => null,
                ],
        ]);
    }
}
