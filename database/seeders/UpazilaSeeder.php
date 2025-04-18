<?php

namespace Database\Seeders;

use App\Models\Upazila;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpazilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $upazilas = [
            [
                "district_id" => "34",
                "en_name" => "Amtali",
                "bn_name" => "আমতলী",
                "slug" => "amtali",
            ],
            [
                "district_id" => "34",
                "en_name" => "Bamna",
                "bn_name" => "বামনা",
                "slug" => "bamna",
            ],
            [
                "district_id" => "34",
                "en_name" => "Barguna Sadar",
                "bn_name" => "বরগুনা সদর",
                "slug" => "barguna-sadar",
            ],
            [
                "district_id" => "34",
                "en_name" => "Betagi",
                "bn_name" => "বেতাগি",
                "slug" => "betagi",
            ],
            [
                "district_id" => "34",
                "en_name" => "Patharghata",
                "bn_name" => "পাথরঘাটা",
                "slug" => "patharghata",
            ],
            [
                "district_id" => "34",
                "en_name" => "Taltali",
                "bn_name" => "তালতলী",
                "slug" => "taltali",
            ],
            [
                "district_id" => "35",
                "en_name" => "Muladi",
                "bn_name" => "মুলাদি",
                "slug" => "muladi",
            ],
            [
                "district_id" => "35",
                "en_name" => "Babuganj",
                "bn_name" => "বাবুগঞ্জ",
                "slug" => "babuganj",
            ],
            [
                "district_id" => "35",
                "en_name" => "Agailjhara",
                "bn_name" => "আগাইলঝরা",
                "slug" => "agailjhara",
            ],
            [
                "district_id" => "35",
                "en_name" => "Barisal Sadar",
                "bn_name" => "বরিশাল সদর",
                "slug" => "barisal-sadar",
            ],
            [
                "district_id" => "35",
                "en_name" => "Bakerganj",
                "bn_name" => "বাকেরগঞ্জ",
                "slug" => "bakerganj",
            ],
            [
                "district_id" => "35",
                "en_name" => "Banaripara",
                "bn_name" => "বানাড়িপারা",
                "slug" => "banaripara",
            ],
            [
                "district_id" => "35",
                "en_name" => "Gaurnadi",
                "bn_name" => "গৌরনদী",
                "slug" => "gaurnadi",
            ],
            [
                "district_id" => "35",
                "en_name" => "Hizla",
                "bn_name" => "হিজলা",
                "slug" => "hizla",
            ],
            [
                "district_id" => "35",
                "en_name" => "Mehendiganj",
                "bn_name" => "মেহেদিগঞ্জ ",
                "slug" => "mehendiganj",
            ],
            [
                "district_id" => "35",
                "en_name" => "Wazirpur",
                "bn_name" => "ওয়াজিরপুর",
                "slug" => "wazirpur",
            ],
            [
                "district_id" => "36",
                "en_name" => "Bhola Sadar",
                "bn_name" => "ভোলা সদর",
                "slug" => "bhola-sadar",
            ],
            [
                "district_id" => "36",
                "en_name" => "Burhanuddin",
                "bn_name" => "বুরহানউদ্দিন",
                "slug" => "burhanuddin",
            ],
            [
                "district_id" => "36",
                "en_name" => "Char Fasson",
                "bn_name" => "চর ফ্যাশন",
                "slug" => "char-fasson",
            ],
            [
                "district_id" => "36",
                "en_name" => "Daulatkhan",
                "bn_name" => "দৌলতখান",
                "slug" => "daulatkhan",
            ],
            [
                "district_id" => "36",
                "en_name" => "Lalmohan",
                "bn_name" => "লালমোহন",
                "slug" => "lalmohan",
            ],
            [
                "district_id" => "36",
                "en_name" => "Manpura",
                "bn_name" => "মনপুরা",
                "slug" => "manpura",
            ],
            [
                "district_id" => "36",
                "en_name" => "Tazumuddin",
                "bn_name" => "তাজুমুদ্দিন",
                "slug" => "tazumuddin",
            ],
            [
                "district_id" => "37",
                "en_name" => "Jhalokati Sadar",
                "bn_name" => "ঝালকাঠি সদর",
                "slug" => "jhalokati-sadar",
            ],
            [
                "district_id" => "37",
                "en_name" => "Kathalia",
                "bn_name" => "কাঁঠালিয়া",
                "slug" => "kathalia",
            ],
            [
                "district_id" => "37",
                "en_name" => "Nalchity",
                "bn_name" => "নালচিতি",
                "slug" => "nalchity",
            ],
            [
                "district_id" => "37",
                "en_name" => "Rajapur",
                "bn_name" => "রাজাপুর",
                "slug" => "rajapur",
            ],
            [
                "district_id" => "38",
                "en_name" => "Bauphal",
                "bn_name" => "বাউফল",
                "slug" => "bauphal",
            ],
            [
                "district_id" => "38",
                "en_name" => "Dashmina",
                "bn_name" => "দশমিনা",
                "slug" => "dashmina",
            ],
            [
                "district_id" => "38",
                "en_name" => "Galachipa",
                "bn_name" => "গলাচিপা",
                "slug" => "galachipa",
            ],
            [
                "district_id" => "38",
                "en_name" => "Kalapara",
                "bn_name" => "কালাপারা",
                "slug" => "kalapara",
            ],
            [
                "district_id" => "38",
                "en_name" => "Mirzaganj",
                "bn_name" => "মির্জাগঞ্জ ",
                "slug" => "mirzaganj",
            ],
            [
                "district_id" => "38",
                "en_name" => "Patuakhali Sadar",
                "bn_name" => "পটুয়াখালী সদর",
                "slug" => "patuakhali-sadar",
            ],
            [
                "district_id" => "38",
                "en_name" => "Dumki",
                "bn_name" => "ডুমকি",
                "slug" => "dumki",
            ],
            [
                "district_id" => "38",
                "en_name" => "Rangabali",
                "bn_name" => "রাঙ্গাবালি",
                "slug" => "rangabali",
            ],
            [
                "district_id" => "39",
                "en_name" => "Bhandaria",
                "bn_name" => "ভ্যান্ডারিয়া",
                "slug" => "bhandaria",
            ],
            [
                "district_id" => "39",
                "en_name" => "Kaukhali",
                "bn_name" => "কাউখালি",
                "slug" => "kaukhali",
            ],
            [
                "district_id" => "39",
                "en_name" => "Mathbaria",
                "bn_name" => "মাঠবাড়িয়া",
                "slug" => "mathbaria",
            ],
            [
                "district_id" => "39",
                "en_name" => "Nazirpur",
                "bn_name" => "নাজিরপুর",
                "slug" => "nazirpur",
            ],
            [
                "district_id" => "39",
                "en_name" => "Nesarabad",
                "bn_name" => "নেসারাবাদ",
                "slug" => "nesarabad",
            ],
            [
                "district_id" => "39",
                "en_name" => "Pirojpur Sadar",
                "bn_name" => "পিরোজপুর সদর",
                "slug" => "pirojpur-sadar",
            ],
            [
                "district_id" => "39",
                "en_name" => "Zianagar",
                "bn_name" => "জিয়ানগর",
                "slug" => "zianagar",
            ],
            [
                "district_id" => "40",
                "en_name" => "Bandarban Sadar",
                "bn_name" => "বান্দরবন সদর",
                "slug" => "bandarban-sadar",
            ],
            [
                "district_id" => "40",
                "en_name" => "Thanchi",
                "bn_name" => "থানচি",
                "slug" => "thanchi",
            ],
            [
                "district_id" => "40",
                "en_name" => "Lama",
                "bn_name" => "লামা",
                "slug" => "lama",
            ],
            [
                "district_id" => "40",
                "en_name" => "Naikhongchhari",
                "bn_name" => "নাইখংছড়ি ",
                "slug" => "naikhongchhari",
            ],
            [
                "district_id" => "40",
                "en_name" => "Ali kadam",
                "bn_name" => "আলী কদম",
                "slug" => "ali-kadam",
            ],
            [
                "district_id" => "40",
                "en_name" => "Rowangchhari",
                "bn_name" => "রউয়াংছড়ি ",
                "slug" => "rowangchhari",
            ],
            [
                "district_id" => "40",
                "en_name" => "Ruma",
                "bn_name" => "রুমা",
                "slug" => "ruma",
            ],
            [
                "district_id" => "41",
                "en_name" => "Brahmanbaria Sadar",
                "bn_name" => "ব্রাহ্মণবাড়িয়া সদর",
                "slug" => "brahmanbaria-sadar",
            ],
            [
                "district_id" => "41",
                "en_name" => "Ashuganj",
                "bn_name" => "আশুগঞ্জ",
                "slug" => "ashuganj",
            ],
            [
                "district_id" => "41",
                "en_name" => "Nasirnagar",
                "bn_name" => "নাসির নগর",
                "slug" => "nasirnagar",
            ],
            [
                "district_id" => "41",
                "en_name" => "Nabinagar",
                "bn_name" => "নবীনগর",
                "slug" => "nabinagar",
            ],
            [
                "district_id" => "41",
                "en_name" => "Sarail",
                "bn_name" => "সরাইল",
                "slug" => "sarail",
            ],
            [
                "district_id" => "41",
                "en_name" => "Shahbazpur Town",
                "bn_name" => "শাহবাজপুর টাউন",
                "slug" => "shahbazpur-town",
            ],
            [
                "district_id" => "41",
                "en_name" => "Kasba",
                "bn_name" => "কসবা",
                "slug" => "kasba",
            ],
            [
                "district_id" => "41",
                "en_name" => "Akhaura",
                "bn_name" => "আখাউরা",
                "slug" => "akhaura",
            ],
            [
                "district_id" => "41",
                "en_name" => "Bancharampur",
                "bn_name" => "বাঞ্ছারামপুর",
                "slug" => "bancharampur",
            ],
            [
                "district_id" => "41",
                "en_name" => "Bijoynagar",
                "bn_name" => "বিজয় নগর",
                "slug" => "bijoynagar",
            ],
            [
                "district_id" => "42",
                "en_name" => "Chandpur Sadar",
                "bn_name" => "চাঁদপুর সদর",
                "slug" => "chandpur-sadar",
            ],
            [
                "district_id" => "42",
                "en_name" => "Faridganj",
                "bn_name" => "ফরিদগঞ্জ",
                "slug" => "faridganj",
            ],
            [
                "district_id" => "42",
                "en_name" => "Haimchar",
                "bn_name" => "হাইমচর",
                "slug" => "haimchar",
            ],
            [
                "district_id" => "42",
                "en_name" => "Haziganj",
                "bn_name" => "হাজীগঞ্জ",
                "slug" => "haziganj",
            ],
            [
                "district_id" => "42",
                "en_name" => "Kachua",
                "bn_name" => "কচুয়া",
                "slug" => "kachua",
            ],
            [
                "district_id" => "42",
                "en_name" => "Matlab Uttar",
                "bn_name" => "মতলব উত্তর",
                "slug" => "matlab-uttar",
            ],
            [
                "district_id" => "42",
                "en_name" => "Matlab Dakkhin",
                "bn_name" => "মতলব দক্ষিণ",
                "slug" => "matlab-dakkhin",
            ],
            [
                "district_id" => "42",
                "en_name" => "Shahrasti",
                "bn_name" => "শাহরাস্তি",
                "slug" => "shahrasti",
            ],
            [
                "district_id" => "43",
                "en_name" => "Anwara",
                "bn_name" => "আনোয়ারা",
                "slug" => "anwara",
            ],
            [
                "district_id" => "43",
                "en_name" => "Banshkhali",
                "bn_name" => "বাশখালি",
                "slug" => "banshkhali",
            ],
            [
                "district_id" => "43",
                "en_name" => "Boalkhali",
                "bn_name" => "বোয়ালখালি",
                "slug" => "boalkhali",
            ],
            [
                "district_id" => "43",
                "en_name" => "Chandanaish",
                "bn_name" => "চন্দনাইশ",
                "slug" => "chandanaish",
            ],
            [
                "district_id" => "43",
                "en_name" => "Fatikchhari",
                "bn_name" => "ফটিকছড়ি",
                "slug" => "fatikchhari",
            ],
            [
                "district_id" => "43",
                "en_name" => "Hathazari",
                "bn_name" => "হাঠহাজারী",
                "slug" => "hathazari",
            ],
            [
                "district_id" => "43",
                "en_name" => "Lohagara",
                "bn_name" => "লোহাগারা",
                "slug" => "lohagara",
            ],
            [
                "district_id" => "43",
                "en_name" => "Mirsharai",
                "bn_name" => "মিরসরাই",
                "slug" => "mirsharai",
            ],
            [
                "district_id" => "43",
                "en_name" => "Patiya",
                "bn_name" => "পটিয়া",
                "slug" => "patiya",
            ],
            [
                "district_id" => "43",
                "en_name" => "Rangunia",
                "bn_name" => "রাঙ্গুনিয়া",
                "slug" => "rangunia",
            ],
            [
                "district_id" => "43",
                "en_name" => "Raozan",
                "bn_name" => "রাউজান",
                "slug" => "raozan",
            ],
            [
                "district_id" => "43",
                "en_name" => "Sandwip",
                "bn_name" => "সন্দ্বীপ",
                "slug" => "sandwip",
            ],
            [
                "district_id" => "43",
                "en_name" => "Satkania",
                "bn_name" => "সাতকানিয়া",
                "slug" => "satkania",
            ],
            [
                "district_id" => "43",
                "en_name" => "Sitakunda",
                "bn_name" => "সীতাকুণ্ড",
                "slug" => "sitakunda",
            ],
            [
                "district_id" => "44",
                "en_name" => "Barura",
                "bn_name" => "বড়ুরা",
                "slug" => "barura",
            ],
            [
                "district_id" => "44",
                "en_name" => "Brahmanpara",
                "bn_name" => "ব্রাহ্মণপাড়া",
                "slug" => "brahmanpara",
            ],
            [
                "district_id" => "44",
                "en_name" => "Burichong",
                "bn_name" => "বুড়িচং",
                "slug" => "burichong",
            ],
            [
                "district_id" => "44",
                "en_name" => "Chandina",
                "bn_name" => "চান্দিনা",
                "slug" => "chandina",
            ],
            [
                "district_id" => "44",
                "en_name" => "Chauddagram",
                "bn_name" => "চৌদ্দগ্রাম",
                "slug" => "chauddagram",
            ],
            [
                "district_id" => "44",
                "en_name" => "Daudkandi",
                "bn_name" => "দাউদকান্দি",
                "slug" => "daudkandi",
            ],
            [
                "district_id" => "44",
                "en_name" => "Debidwar",
                "bn_name" => "দেবীদ্বার",
                "slug" => "debidwar",
            ],
            [
                "district_id" => "44",
                "en_name" => "Homna",
                "bn_name" => "হোমনা",
                "slug" => "homna",
            ],
            [
                "district_id" => "44",
                "en_name" => "Comilla Sadar",
                "bn_name" => "কুমিল্লা সদর",
                "slug" => "comilla-sadar",
            ],
            [
                "district_id" => "44",
                "en_name" => "Laksam",
                "bn_name" => "লাকসাম",
                "slug" => "laksam",
            ],
            [
                "district_id" => "44",
                "en_name" => "Monohorgonj",
                "bn_name" => "মনোহরগঞ্জ",
                "slug" => "monohorgonj",
            ],
            [
                "district_id" => "44",
                "en_name" => "Meghna",
                "bn_name" => "মেঘনা",
                "slug" => "meghna",
            ],
            [
                "district_id" => "44",
                "en_name" => "Muradnagar",
                "bn_name" => "মুরাদনগর",
                "slug" => "muradnagar",
            ],
            [
                "district_id" => "44",
                "en_name" => "Nangalkot",
                "bn_name" => "নাঙ্গালকোট",
                "slug" => "nangalkot",
            ],
            [
                "district_id" => "44",
                "en_name" => "Comilla Sadar South",
                "bn_name" => "কুমিল্লা সদর দক্ষিণ",
                "slug" => "comilla-sadar-south",
            ],
            [
                "district_id" => "44",
                "en_name" => "Titas",
                "bn_name" => "তিতাস",
                "slug" => "titas",
            ],
            [
                "district_id" => "45",
                "en_name" => "Chakaria",
                "bn_name" => "চকরিয়া",
                "slug" => "chakaria",
            ],
            [
                "district_id" => "45",
                "en_name" => "Cox's Bazar Sadar",
                "bn_name" => "কক্স বাজার সদর",
                "slug" => "coxs-bazar-sadar",
            ],
            [
                "district_id" => "45",
                "en_name" => "Kutubdia",
                "bn_name" => "কুতুবদিয়া",
                "slug" => "kutubdia",
            ],
            [
                "district_id" => "45",
                "en_name" => "Maheshkhali",
                "bn_name" => "মহেশখালী",
                "slug" => "maheshkhali",
            ],
            [
                "district_id" => "45",
                "en_name" => "Ramu",
                "bn_name" => "রামু",
                "slug" => "ramu",
            ],
            [
                "district_id" => "45",
                "en_name" => "Teknaf",
                "bn_name" => "টেকনাফ",
                "slug" => "teknaf",
            ],
            [
                "district_id" => "45",
                "en_name" => "Ukhia",
                "bn_name" => "উখিয়া",
                "slug" => "ukhia",
            ],
            [
                "district_id" => "45",
                "en_name" => "Pekua",
                "bn_name" => "পেকুয়া",
                "slug" => "pekua",
            ],
            [
                "district_id" => "46",
                "en_name" => "Feni Sadar",
                "bn_name" => "ফেনী সদর",
                "slug" => "feni-sadar",
            ],
            [
                "district_id" => "46",
                "en_name" => "Chagalnaiya",
                "bn_name" => "ছাগল নাইয়া",
                "slug" => "chagalnaiya",
            ],
            [
                "district_id" => "46",
                "en_name" => "Daganbhyan",
                "bn_name" => "দাগানভিয়া",
                "slug" => "daganbhyan",
            ],
            [
                "district_id" => "46",
                "en_name" => "Parshuram",
                "bn_name" => "পরশুরাম",
                "slug" => "parshuram",
            ],
            [
                "district_id" => "46",
                "en_name" => "Fhulgazi",
                "bn_name" => "ফুলগাজি",
                "slug" => "fhulgazi",
            ],
            [
                "district_id" => "46",
                "en_name" => "Sonagazi",
                "bn_name" => "সোনাগাজি",
                "slug" => "sonagazi",
            ],
            [
                "district_id" => "47",
                "en_name" => "Dighinala",
                "bn_name" => "দিঘিনালা ",
                "slug" => "dighinala",
            ],
            [
                "district_id" => "47",
                "en_name" => "Khagrachhari",
                "bn_name" => "খাগড়াছড়ি",
                "slug" => "khagrachhari",
            ],
            [
                "district_id" => "47",
                "en_name" => "Lakshmichhari",
                "bn_name" => "লক্ষ্মীছড়ি",
                "slug" => "lakshmichhari",
            ],
            [
                "district_id" => "47",
                "en_name" => "Mahalchhari",
                "bn_name" => "মহলছড়ি",
                "slug" => "mahalchhari",
            ],
            [
                "district_id" => "47",
                "en_name" => "Manikchhari",
                "bn_name" => "মানিকছড়ি",
                "slug" => "manikchhari",
            ],
            [
                "district_id" => "47",
                "en_name" => "Matiranga",
                "bn_name" => "মাটিরাঙ্গা",
                "slug" => "matiranga",
            ],
            [
                "district_id" => "47",
                "en_name" => "Panchhari",
                "bn_name" => "পানছড়ি",
                "slug" => "panchhari",
            ],
            [
                "district_id" => "47",
                "en_name" => "Ramgarh",
                "bn_name" => "রামগড়",
                "slug" => "ramgarh",
            ],
            [
                "district_id" => "48",
                "en_name" => "Lakshmipur Sadar",
                "bn_name" => "লক্ষ্মীপুর সদর",
                "slug" => "lakshmipur-sadar",
            ],
            [
                "district_id" => "48",
                "en_name" => "Raipur",
                "bn_name" => "রায়পুর",
                "slug" => "raipur",
            ],
            [
                "district_id" => "48",
                "en_name" => "Ramganj",
                "bn_name" => "রামগঞ্জ",
                "slug" => "ramganj",
            ],
            [
                "district_id" => "48",
                "en_name" => "Ramgati",
                "bn_name" => "রামগতি",
                "slug" => "ramgati",
            ],
            [
                "district_id" => "48",
                "en_name" => "Komol Nagar",
                "bn_name" => "কমল নগর",
                "slug" => "komol-nagar",
            ],
            [
                "district_id" => "49",
                "en_name" => "Noakhali Sadar",
                "bn_name" => "নোয়াখালী সদর",
                "slug" => "noakhali-sadar",
            ],
            [
                "district_id" => "49",
                "en_name" => "Begumganj",
                "bn_name" => "বেগমগঞ্জ",
                "slug" => "begumganj",
            ],
            [
                "district_id" => "49",
                "en_name" => "Chatkhil",
                "bn_name" => "চাটখিল",
                "slug" => "chatkhil",
            ],
            [
                "district_id" => "49",
                "en_name" => "Companyganj",
                "bn_name" => "কোম্পানীগঞ্জ",
                "slug" => "companyganj",
            ],
            [
                "district_id" => "49",
                "en_name" => "Shenbag",
                "bn_name" => "শেনবাগ",
                "slug" => "shenbag",
            ],
            [
                "district_id" => "49",
                "en_name" => "Hatia",
                "bn_name" => "হাতিয়া",
                "slug" => "hatia",
            ],
            [
                "district_id" => "49",
                "en_name" => "Kobirhat",
                "bn_name" => "কবিরহাট ",
                "slug" => "kobirhat",
            ],
            [
                "district_id" => "49",
                "en_name" => "Sonaimuri",
                "bn_name" => "সোনাইমুরি",
                "slug" => "sonaimuri",
            ],
            [
                "district_id" => "49",
                "en_name" => "Suborno Char",
                "bn_name" => "সুবর্ণ চর ",
                "slug" => "suborno-char",
            ],
            [
                "district_id" => "50",
                "en_name" => "Rangamati Sadar",
                "bn_name" => "রাঙ্গামাটি সদর",
                "slug" => "rangamati-sadar",
            ],
            [
                "district_id" => "50",
                "en_name" => "Belaichhari",
                "bn_name" => "বেলাইছড়ি",
                "slug" => "belaichhari",
            ],
            [
                "district_id" => "50",
                "en_name" => "Bagaichhari",
                "bn_name" => "বাঘাইছড়ি",
                "slug" => "bagaichhari",
            ],
            [
                "district_id" => "50",
                "en_name" => "Barkal",
                "bn_name" => "বরকল",
                "slug" => "barkal",
            ],
            [
                "district_id" => "50",
                "en_name" => "Juraichhari",
                "bn_name" => "জুরাইছড়ি",
                "slug" => "juraichhari",
            ],
            [
                "district_id" => "50",
                "en_name" => "Rajasthali",
                "bn_name" => "রাজাস্থলি",
                "slug" => "rajasthali",
            ],
            [
                "district_id" => "50",
                "en_name" => "Kaptai",
                "bn_name" => "কাপ্তাই",
                "slug" => "kaptai",
            ],
            [
                "district_id" => "50",
                "en_name" => "Langadu",
                "bn_name" => "লাঙ্গাডু",
                "slug" => "langadu",
            ],
            [
                "district_id" => "50",
                "en_name" => "Nannerchar",
                "bn_name" => "নান্নেরচর ",
                "slug" => "nannerchar",
            ],
            [
                "district_id" => "50",
                "en_name" => "Kaukhali",
                "bn_name" => "কাউখালি",
                "slug" => "kaukhali",
            ],
            [
                "district_id" => "1",
                "en_name" => "Dhamrai",
                "bn_name" => "ধামরাই",
                "slug" => "dhamrai",
            ],
            [
                "district_id" => "1",
                "en_name" => "Dohar",
                "bn_name" => "দোহার",
                "slug" => "dohar",
            ],
            [
                "district_id" => "1",
                "en_name" => "Keraniganj",
                "bn_name" => "কেরানীগঞ্জ",
                "slug" => "keraniganj",
            ],
            [
                "district_id" => "1",
                "en_name" => "Nawabganj",
                "bn_name" => "নবাবগঞ্জ",
                "slug" => "nawabganj",
            ],
            [
                "district_id" => "1",
                "en_name" => "Savar",
                "bn_name" => "সাভার",
                "slug" => "savar",
            ],
            [
                "district_id" => "2",
                "en_name" => "Faridpur Sadar",
                "bn_name" => "ফরিদপুর সদর",
                "slug" => "faridpur-sadar",
            ],
            [
                "district_id" => "2",
                "en_name" => "Boalmari",
                "bn_name" => "বোয়ালমারী",
                "slug" => "boalmari"
            ],
            [
                "district_id" => "2",
                "en_name" => "Alfadanga",
                "bn_name" => "আলফাডাঙ্গা",
                "slug" => "alfadanga"
            ],
            [
                "district_id" => "2",
                "en_name" => "Madhukhali",
                "bn_name" => "মধুখালি",
                "slug" => "madhukhali"
            ],
            [
                "district_id" => "2",
                "en_name" => "Bhanga",
                "bn_name" => "ভাঙ্গা",
                "slug" => "bhanga"
            ],
            [
                "district_id" => "2",
                "en_name" => "Nagarkanda",
                "bn_name" => "নগরকান্ড",
                "slug" => "nagarkanda"
            ],
            [
                "district_id" => "2",
                "en_name" => "Charbhadrasan",
                "bn_name" => "চরভদ্রাসন ",
                "slug" => "charbhadrasan"
            ],
            [
                "district_id" => "2",
                "en_name" => "Sadarpur",
                "bn_name" => "সদরপুর",
                "slug" => "sadarpur"
            ],
            [
                "district_id" => "2",
                "en_name" => "Shaltha",
                "bn_name" => "শালথা",
                "slug" => "shaltha"
            ],
            [
                "district_id" => "3",
                "en_name" => "Gazipur Sadar-Joydebpur",
                "bn_name" => "গাজীপুর সদর",
                "slug" => "gazipur-sadar-joydebpur"
            ],
            [
                "district_id" => "3",
                "en_name" => "Kaliakior",
                "bn_name" => "কালিয়াকৈর",
                "slug" => "kaliakior"
            ],
            [
                "district_id" => "3",
                "en_name" => "Kapasia",
                "bn_name" => "কাপাসিয়া",
                "slug" => "kapasia"
            ],
            [
                "district_id" => "3",
                "en_name" => "Sripur",
                "bn_name" => "শ্রীপুর",
                "slug" => "sripur"
            ],
            [
                "district_id" => "3",
                "en_name" => "Kaliganj",
                "bn_name" => "কালীগঞ্জ",
                "slug" => "kaliganj"
            ],
            [
                "district_id" => "3",
                "en_name" => "Tongi",
                "bn_name" => "টঙ্গি",
                "slug" => "tongi"
            ],
            [
                "district_id" => "4",
                "en_name" => "Gopalganj Sadar",
                "bn_name" => "গোপালগঞ্জ সদর",
                "slug" => "gopalganj-sadar"
            ],
            [
                "district_id" => "4",
                "en_name" => "Kashiani",
                "bn_name" => "কাশিয়ানি",
                "slug" => "kashiani"
            ],
            [
                "district_id" => "4",
                "en_name" => "Kotalipara",
                "bn_name" => "কোটালিপাড়া",
                "slug" => "kotalipara"
            ],
            [
                "district_id" => "4",
                "en_name" => "Muksudpur",
                "bn_name" => "মুকসুদপুর",
                "slug" => "muksudpur"
            ],
            [
                "district_id" => "4",
                "en_name" => "Tungipara",
                "bn_name" => "টুঙ্গিপাড়া",
                "slug" => "tungipara"
            ],
            [
                "district_id" => "5",
                "en_name" => "Dewanganj",
                "bn_name" => "দেওয়ানগঞ্জ",
                "slug" => "dewanganj"
            ],
            [
                "district_id" => "5",
                "en_name" => "Baksiganj",
                "bn_name" => "বকসিগঞ্জ",
                "slug" => "baksiganj"
            ],
            [
                "district_id" => "5",
                "en_name" => "Islampur",
                "bn_name" => "ইসলামপুর",
                "slug" => "islampur"
            ],
            [
                "district_id" => "5",
                "en_name" => "Jamalpur Sadar",
                "bn_name" => "জামালপুর সদর",
                "slug" => "jamalpur-sadar"
            ],
            [
                "district_id" => "5",
                "en_name" => "Madarganj",
                "bn_name" => "মাদারগঞ্জ",
                "slug" => "madarganj"
            ],
            [
                "district_id" => "5",
                "en_name" => "Melandaha",
                "bn_name" => "মেলানদাহা",
                "slug" => "melandaha"
            ],
            [
                "district_id" => "5",
                "en_name" => "Sarishabari",
                "bn_name" => "সরিষাবাড়ি ",
                "slug" => "sarishabari"
            ],
            [
                "district_id" => "5",
                "en_name" => "Narundi Police I.C",
                "bn_name" => "নারুন্দি",
                "slug" => "narundi-police-i-c"
            ],
            [
                "district_id" => "6",
                "en_name" => "Astagram",
                "bn_name" => "অষ্টগ্রাম",
                "slug" => "astagram"
            ],
            [
                "district_id" => "6",
                "en_name" => "Bajitpur",
                "bn_name" => "বাজিতপুর",
                "slug" => "bajitpur"
            ],
            [
                "district_id" => "6",
                "en_name" => "Bhairab",
                "bn_name" => "ভৈরব",
                "slug" => "bhairab"
            ],
            [
                "district_id" => "6",
                "en_name" => "Hossainpur",
                "bn_name" => "হোসেনপুর ",
                "slug" => "hossainpur"
            ],
            [
                "district_id" => "6",
                "en_name" => "Itna",
                "bn_name" => "ইটনা",
                "slug" => "itna"
            ],
            [
                "district_id" => "6",
                "en_name" => "Karimganj",
                "bn_name" => "করিমগঞ্জ",
                "slug" => "karimganj"
            ],
            [
                "district_id" => "6",
                "en_name" => "Katiadi",
                "bn_name" => "কতিয়াদি",
                "slug" => "katiadi"
            ],
            [
                "district_id" => "6",
                "en_name" => "Kishoreganj Sadar",
                "bn_name" => "কিশোরগঞ্জ সদর",
                "slug" => "kishoreganj-sadar"
            ],
            [
                "district_id" => "6",
                "en_name" => "Kuliarchar",
                "bn_name" => "কুলিয়ারচর",
                "slug" => "kuliarchar"
            ],
            [
                "district_id" => "6",
                "en_name" => "Mithamain",
                "bn_name" => "মিঠামাইন",
                "slug" => "mithamain"
            ],
            [
                "district_id" => "6",
                "en_name" => "Nikli",
                "bn_name" => "নিকলি",
                "slug" => "nikli"
            ],
            [
                "district_id" => "6",
                "en_name" => "Pakundia",
                "bn_name" => "পাকুন্ডা",
                "slug" => "pakundia"
            ],
            [
                "district_id" => "6",
                "en_name" => "Tarail",
                "bn_name" => "তাড়াইল",
                "slug" => "tarail"
            ],
            [
                "district_id" => "7",
                "en_name" => "Madaripur Sadar",
                "bn_name" => "মাদারীপুর সদর",
                "slug" => "madaripur-sadar"
            ],
            [
                "district_id" => "7",
                "en_name" => "Kalkini",
                "bn_name" => "কালকিনি",
                "slug" => "kalkini"
            ],
            [
                "district_id" => "7",
                "en_name" => "Rajoir",
                "bn_name" => "রাজইর",
                "slug" => "rajoir"
            ],
            [
                "district_id" => "7",
                "en_name" => "Shibchar",
                "bn_name" => "শিবচর",
                "slug" => "shibchar"
            ],
            [
                "district_id" => "8",
                "en_name" => "Manikganj Sadar",
                "bn_name" => "মানিকগঞ্জ সদর",
                "slug" => "manikganj-sadar"
            ],
            [
                "district_id" => "8",
                "en_name" => "Singair",
                "bn_name" => "সিঙ্গাইর",
                "slug" => "singair"
            ],
            [
                "district_id" => "8",
                "en_name" => "Shibalaya",
                "bn_name" => "শিবালয়",
                "slug" => "shibalaya"
            ],
            [
                "district_id" => "8",
                "en_name" => "Saturia",
                "bn_name" => "সাটুরিয়া",
                "slug" => "saturia"
            ],
            [
                "district_id" => "8",
                "en_name" => "Harirampur",
                "bn_name" => "হরিরামপুর",
                "slug" => "harirampur"
            ],
            [
                "district_id" => "8",
                "en_name" => "Ghior",
                "bn_name" => "ঘিওর",
                "slug" => "ghior"
            ],
            [
                "district_id" => "8",
                "en_name" => "Daulatpur",
                "bn_name" => "দৌলতপুর",
                "slug" => "daulatpur"
            ],
            [
                "district_id" => "9",
                "en_name" => "Lohajang",
                "bn_name" => "লোহাজং",
                "slug" => "lohajang"
            ],
            [
                "district_id" => "9",
                "en_name" => "Sreenagar",
                "bn_name" => "শ্রীনগর",
                "slug" => "sreenagar"
            ],
            [
                "district_id" => "9",
                "en_name" => "Munshiganj Sadar",
                "bn_name" => "মুন্সিগঞ্জ সদর",
                "slug" => "munshiganj-sadar"
            ],
            [
                "district_id" => "9",
                "en_name" => "Sirajdikhan",
                "bn_name" => "সিরাজদিখান",
                "slug" => "sirajdikhan"
            ],
            [
                "district_id" => "9",
                "en_name" => "Tongibari",
                "bn_name" => "টঙ্গিবাড়ি",
                "slug" => "tongibari"
            ],
            [
                "district_id" => "9",
                "en_name" => "Gazaria",
                "bn_name" => "গজারিয়া",
                "slug" => "gazaria"
            ],
            [
                "district_id" => "10",
                "en_name" => "Bhaluka",
                "bn_name" => "ভালুকা",
                "slug" => "bhaluka"
            ],
            [
                "district_id" => "10",
                "en_name" => "Trishal",
                "bn_name" => "ত্রিশাল",
                "slug" => "trishal"
            ],
            [
                "district_id" => "10",
                "en_name" => "Haluaghat",
                "bn_name" => "হালুয়াঘাট",
                "slug" => "haluaghat"
            ],
            [
                "district_id" => "10",
                "en_name" => "Muktagachha",
                "bn_name" => "মুক্তাগাছা",
                "slug" => "muktagachha"
            ],
            [
                "district_id" => "10",
                "en_name" => "Dhobaura",
                "bn_name" => "ধবারুয়া",
                "slug" => "dhobaura"
            ],
            [
                "district_id" => "10",
                "en_name" => "Fulbaria",
                "bn_name" => "ফুলবাড়িয়া",
                "slug" => "fulbaria"
            ],
            [
                "district_id" => "10",
                "en_name" => "Gaffargaon",
                "bn_name" => "গফরগাঁও",
                "slug" => "gaffargaon"
            ],
            [
                "district_id" => "10",
                "en_name" => "Gauripur",
                "bn_name" => "গৌরিপুর",
                "slug" => "gauripur"
            ],
            [
                "district_id" => "10",
                "en_name" => "Ishwarganj",
                "bn_name" => "ঈশ্বরগঞ্জ",
                "slug" => "ishwarganj"
            ],
            [
                "district_id" => "10",
                "en_name" => "Mymensingh Sadar",
                "bn_name" => "ময়মনসিং সদর",
                "slug" => "mymensingh-sadar"
            ],
            [
                "district_id" => "10",
                "en_name" => "Nandail",
                "bn_name" => "নন্দাইল",
                "slug" => "nandail"
            ],
            [
                "district_id" => "10",
                "en_name" => "Phulpur",
                "bn_name" => "ফুলপুর",
                "slug" => "phulpur"
            ],
            [
                "district_id" => "11",
                "en_name" => "Araihazar",
                "bn_name" => "আড়াইহাজার",
                "slug" => "araihazar"
            ],
            [
                "district_id" => "11",
                "en_name" => "Sonargaon",
                "bn_name" => "সোনারগাঁও",
                "slug" => "sonargaon"
            ],
            [
                "district_id" => "11",
                "en_name" => "Bandar",
                "bn_name" => "বান্দার",
                "slug" => "bandar"
            ],
            [
                "district_id" => "11",
                "en_name" => "Naryanganj Sadar",
                "bn_name" => "নারায়ানগঞ্জ সদর",
                "slug" => "naryanganj-sadar"
            ],
            [
                "district_id" => "11",
                "en_name" => "Rupganj",
                "bn_name" => "রূপগঞ্জ",
                "slug" => "rupganj"
            ],
            [
                "district_id" => "11",
                "en_name" => "Siddirgonj",
                "bn_name" => "সিদ্ধিরগঞ্জ",
                "slug" => "siddirgonj"
            ],
            [
                "district_id" => "12",
                "en_name" => "Belabo",
                "bn_name" => "বেলাবো",
                "slug" => "belabo"
            ],
            [
                "district_id" => "12",
                "en_name" => "Monohardi",
                "bn_name" => "মনোহরদি",
                "slug" => "monohardi"
            ],
            [
                "district_id" => "12",
                "en_name" => "Narsingdi Sadar",
                "bn_name" => "নরসিংদী সদর",
                "slug" => "narsingdi-sadar"
            ],
            [
                "district_id" => "12",
                "en_name" => "Palash",
                "bn_name" => "পলাশ",
                "slug" => "palash"
            ],
            [
                "district_id" => "12",
                "en_name" => "Raipura, Narsingdi",
                "bn_name" => "রায়পুর",
                "slug" => "raipura-narsingdi"
            ],
            [
                "district_id" => "12",
                "en_name" => "Shibpur",
                "bn_name" => "শিবপুর",
                "slug" => "shibpur"
            ],
            [
                "district_id" => "13",
                "en_name" => "Kendua Upazilla",
                "bn_name" => "কেন্দুয়া",
                "slug" => "kendua-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Atpara Upazilla",
                "bn_name" => "আটপাড়া",
                "slug" => "atpara-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Barhatta Upazilla",
                "bn_name" => "বরহাট্টা",
                "slug" => "barhatta-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Durgapur Upazilla",
                "bn_name" => "দুর্গাপুর",
                "slug" => "durgapur-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Kalmakanda Upazilla",
                "bn_name" => "কলমাকান্দা",
                "slug" => "kalmakanda-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Madan Upazilla",
                "bn_name" => "মদন",
                "slug" => "madan-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Mohanganj Upazilla",
                "bn_name" => "মোহনগঞ্জ",
                "slug" => "mohanganj-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Netrakona-S Upazilla",
                "bn_name" => "নেত্রকোনা সদর",
                "slug" => "netrakona-s-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Purbadhala Upazilla",
                "bn_name" => "পূর্বধলা",
                "slug" => "purbadhala-upazilla"
            ],
            [
                "district_id" => "13",
                "en_name" => "Khaliajuri Upazilla",
                "bn_name" => "খালিয়াজুরি",
                "slug" => "khaliajuri-upazilla"
            ],
            [
                "district_id" => "14",
                "en_name" => "Baliakandi",
                "bn_name" => "বালিয়াকান্দি",
                "slug" => "baliakandi"
            ],
            [
                "district_id" => "14",
                "en_name" => "Goalandaghat",
                "bn_name" => "গোয়ালন্দ ঘাট",
                "slug" => "goalandaghat"
            ],
            [
                "district_id" => "14",
                "en_name" => "Pangsha",
                "bn_name" => "পাংশা",
                "slug" => "pangsha"
            ],
            [
                "district_id" => "14",
                "en_name" => "Kalukhali",
                "bn_name" => "কালুখালি",
                "slug" => "kalukhali"
            ],
            [
                "district_id" => "14",
                "en_name" => "Rajbari Sadar",
                "bn_name" => "রাজবাড়ি সদর",
                "slug" => "rajbari-sadar"
            ],
            [
                "district_id" => "15",
                "en_name" => "Shariatpur Sadar -Palong",
                "bn_name" => "শরীয়তপুর সদর ",
                "slug" => "shariatpur-sadar-palong"
            ],
            [
                "district_id" => "15",
                "en_name" => "Damudya",
                "bn_name" => "দামুদিয়া",
                "slug" => "damudya"
            ],
            [
                "district_id" => "15",
                "en_name" => "Naria",
                "bn_name" => "নড়িয়া",
                "slug" => "naria"
            ],
            [
                "district_id" => "15",
                "en_name" => "Jajira",
                "bn_name" => "জাজিরা",
                "slug" => "jajira"
            ],
            [
                "district_id" => "15",
                "en_name" => "Bhedarganj",
                "bn_name" => "ভেদারগঞ্জ",
                "slug" => "bhedarganj"
            ],
            [
                "district_id" => "15",
                "en_name" => "Gosairhat",
                "bn_name" => "গোসাইর হাট ",
                "slug" => "gosairhat"
            ],
            [
                "district_id" => "16",
                "en_name" => "Jhenaigati",
                "bn_name" => "ঝিনাইগাতি",
                "slug" => "jhenaigati"
            ],
            [
                "district_id" => "16",
                "en_name" => "Nakla",
                "bn_name" => "নাকলা",
                "slug" => "nakla"
            ],
            [
                "district_id" => "16",
                "en_name" => "Nalitabari",
                "bn_name" => "নালিতাবাড়ি",
                "slug" => "nalitabari"
            ],
            [
                "district_id" => "16",
                "en_name" => "Sherpur Sadar",
                "bn_name" => "শেরপুর সদর",
                "slug" => "sherpur-sadar"
            ],
            [
                "district_id" => "16",
                "en_name" => "Sreebardi",
                "bn_name" => "শ্রীবরদি",
                "slug" => "sreebardi"
            ],
            [
                "district_id" => "17",
                "en_name" => "Tangail Sadar",
                "bn_name" => "টাঙ্গাইল সদর",
                "slug" => "tangail-sadar"
            ],
            [
                "district_id" => "17",
                "en_name" => "Sakhipur",
                "bn_name" => "সখিপুর",
                "slug" => "sakhipur"
            ],
            [
                "district_id" => "17",
                "en_name" => "Basail",
                "bn_name" => "বসাইল",
                "slug" => "basail"
            ],
            [
                "district_id" => "17",
                "en_name" => "Madhupur",
                "bn_name" => "মধুপুর",
                "slug" => "madhupur"
            ],
            [
                "district_id" => "17",
                "en_name" => "Ghatail",
                "bn_name" => "ঘাটাইল",
                "slug" => "ghatail"
            ],
            [
                "district_id" => "17",
                "en_name" => "Kalihati",
                "bn_name" => "কালিহাতি",
                "slug" => "kalihati"
            ],
            [
                "district_id" => "17",
                "en_name" => "Nagarpur",
                "bn_name" => "নগরপুর",
                "slug" => "nagarpur"
            ],
            [
                "district_id" => "17",
                "en_name" => "Mirzapur",
                "bn_name" => "মির্জাপুর",
                "slug" => "mirzapur"
            ],
            [
                "district_id" => "17",
                "en_name" => "Gopalpur",
                "bn_name" => "গোপালপুর",
                "slug" => "gopalpur"
            ],
            [
                "district_id" => "17",
                "en_name" => "Delduar",
                "bn_name" => "দেলদুয়ার",
                "slug" => "delduar"
            ],
            [
                "district_id" => "17",
                "en_name" => "Bhuapur",
                "bn_name" => "ভুয়াপুর",
                "slug" => "bhuapur"
            ],
            [
                "district_id" => "17",
                "en_name" => "Dhanbari",
                "bn_name" => "ধানবাড়ি",
                "slug" => "dhanbari"
            ],
            [
                "district_id" => "55",
                "en_name" => "Bagerhat Sadar",
                "bn_name" => "বাগেরহাট সদর",
                "slug" => "bagerhat-sadar"
            ],
            [
                "district_id" => "55",
                "en_name" => "Chitalmari",
                "bn_name" => "চিতলমাড়ি",
                "slug" => "chitalmari"
            ],
            [
                "district_id" => "55",
                "en_name" => "Fakirhat",
                "bn_name" => "ফকিরহাট",
                "slug" => "fakirhat"
            ],
            [
                "district_id" => "55",
                "en_name" => "Kachua",
                "bn_name" => "কচুয়া",
                "slug" => "kachua"
            ],
            [
                "district_id" => "55",
                "en_name" => "Mollahat",
                "bn_name" => "মোল্লাহাট ",
                "slug" => "mollahat"
            ],
            [
                "district_id" => "55",
                "en_name" => "Mongla",
                "bn_name" => "মংলা",
                "slug" => "mongla"
            ],
            [
                "district_id" => "55",
                "en_name" => "Morrelganj",
                "bn_name" => "মরেলগঞ্জ",
                "slug" => "morrelganj"
            ],
            [
                "district_id" => "55",
                "en_name" => "Rampal",
                "bn_name" => "রামপাল",
                "slug" => "rampal"
            ],
            [
                "district_id" => "55",
                "en_name" => "Sarankhola",
                "bn_name" => "স্মরণখোলা",
                "slug" => "sarankhola"
            ],
            [
                "district_id" => "56",
                "en_name" => "Damurhuda",
                "bn_name" => "দামুরহুদা",
                "slug" => "damurhuda"
            ],
            [
                "district_id" => "56",
                "en_name" => "Chuadanga-S",
                "bn_name" => "চুয়াডাঙ্গা সদর",
                "slug" => "chuadanga-s"
            ],
            [
                "district_id" => "56",
                "en_name" => "Jibannagar",
                "bn_name" => "জীবন নগর ",
                "slug" => "jibannagar"
            ],
            [
                "district_id" => "56",
                "en_name" => "Alamdanga",
                "bn_name" => "আলমডাঙ্গা",
                "slug" => "alamdanga"
            ],
            [
                "district_id" => "57",
                "en_name" => "Abhaynagar",
                "bn_name" => "অভয়নগর",
                "slug" => "abhaynagar"
            ],
            [
                "district_id" => "57",
                "en_name" => "Keshabpur",
                "bn_name" => "কেশবপুর",
                "slug" => "keshabpur"
            ],
            [
                "district_id" => "57",
                "en_name" => "Bagherpara",
                "bn_name" => "বাঘের পাড়া ",
                "slug" => "bagherpara"
            ],
            [
                "district_id" => "57",
                "en_name" => "Jessore Sadar",
                "bn_name" => "যশোর সদর",
                "slug" => "jessore-sadar"
            ],
            [
                "district_id" => "57",
                "en_name" => "Chaugachha",
                "bn_name" => "চৌগাছা",
                "slug" => "chaugachha"
            ],
            [
                "district_id" => "57",
                "en_name" => "Manirampur",
                "bn_name" => "মনিরামপুর ",
                "slug" => "manirampur"
            ],
            [
                "district_id" => "57",
                "en_name" => "Jhikargachha",
                "bn_name" => "ঝিকরগাছা",
                "slug" => "jhikargachha"
            ],
            [
                "district_id" => "57",
                "en_name" => "Sharsha",
                "bn_name" => "সারশা",
                "slug" => "sharsha"
            ],
            [
                "district_id" => "58",
                "en_name" => "Jhenaidah Sadar",
                "bn_name" => "ঝিনাইদহ সদর",
                "slug" => "jhenaidah-sadar"
            ],
            [
                "district_id" => "58",
                "en_name" => "Maheshpur",
                "bn_name" => "মহেশপুর",
                "slug" => "maheshpur"
            ],
            [
                "district_id" => "58",
                "en_name" => "Kaliganj",
                "bn_name" => "কালীগঞ্জ",
                "slug" => "kaliganj"
            ],
            [
                "district_id" => "58",
                "en_name" => "Kotchandpur",
                "bn_name" => "কোট চাঁদপুর ",
                "slug" => "kotchandpur"
            ],
            [
                "district_id" => "58",
                "en_name" => "Shailkupa",
                "bn_name" => "শৈলকুপা",
                "slug" => "shailkupa"
            ],
            [
                "district_id" => "58",
                "en_name" => "Harinakunda",
                "bn_name" => "হাড়িনাকুন্দা",
                "slug" => "harinakunda"
            ],
            [
                "district_id" => "59",
                "en_name" => "Terokhada",
                "bn_name" => "তেরোখাদা",
                "slug" => "terokhada"
            ],
            [
                "district_id" => "59",
                "en_name" => "Batiaghata",
                "bn_name" => "বাটিয়াঘাটা ",
                "slug" => "batiaghata"
            ],
            [
                "district_id" => "59",
                "en_name" => "Dacope",
                "bn_name" => "ডাকপে",
                "slug" => "dacope"
            ],
            [
                "district_id" => "59",
                "en_name" => "Dumuria",
                "bn_name" => "ডুমুরিয়া",
                "slug" => "dumuria"
            ],
            [
                "district_id" => "59",
                "en_name" => "Dighalia",
                "bn_name" => "দিঘলিয়া",
                "slug" => "dighalia"
            ],
            [
                "district_id" => "59",
                "en_name" => "Koyra",
                "bn_name" => "কয়ড়া",
                "slug" => "koyra"
            ],
            [
                "district_id" => "59",
                "en_name" => "Paikgachha",
                "bn_name" => "পাইকগাছা",
                "slug" => "paikgachha"
            ],
            [
                "district_id" => "59",
                "en_name" => "Phultala",
                "bn_name" => "ফুলতলা",
                "slug" => "phultala"
            ],
            [
                "district_id" => "59",
                "en_name" => "Rupsa",
                "bn_name" => "রূপসা",
                "slug" => "rupsa"
            ],
            [
                "district_id" => "60",
                "en_name" => "Kushtia Sadar",
                "bn_name" => "কুষ্টিয়া সদর",
                "slug" => "kushtia-sadar"
            ],
            [
                "district_id" => "60",
                "en_name" => "Kumarkhali",
                "bn_name" => "কুমারখালি",
                "slug" => "kumarkhali"
            ],
            [
                "district_id" => "60",
                "en_name" => "Daulatpur",
                "bn_name" => "দৌলতপুর",
                "slug" => "daulatpur"
            ],
            [
                "district_id" => "60",
                "en_name" => "Mirpur",
                "bn_name" => "মিরপুর",
                "slug" => "mirpur"
            ],
            [
                "district_id" => "60",
                "en_name" => "Bheramara",
                "bn_name" => "ভেরামারা",
                "slug" => "bheramara"
            ],
            [
                "district_id" => "60",
                "en_name" => "Khoksa",
                "bn_name" => "খোকসা",
                "slug" => "khoksa"
            ],
            [
                "district_id" => "61",
                "en_name" => "Magura Sadar",
                "bn_name" => "মাগুরা সদর",
                "slug" => "magura-sadar"
            ],
            [
                "district_id" => "61",
                "en_name" => "Mohammadpur",
                "bn_name" => "মোহাম্মাদপুর",
                "slug" => "mohammadpur"
            ],
            [
                "district_id" => "61",
                "en_name" => "Shalikha",
                "bn_name" => "শালিখা",
                "slug" => "shalikha"
            ],
            [
                "district_id" => "61",
                "en_name" => "Sreepur",
                "bn_name" => "শ্রীপুর",
                "slug" => "sreepur"
            ],
            [
                "district_id" => "62",
                "en_name" => "angni",
                "bn_name" => "আংনি",
                "slug" => "angni"
            ],
            [
                "district_id" => "62",
                "en_name" => "Mujib Nagar",
                "bn_name" => "মুজিব নগর",
                "slug" => "mujib-nagar"
            ],
            [
                "district_id" => "62",
                "en_name" => "Meherpur-S",
                "bn_name" => "মেহেরপুর সদর",
                "slug" => "meherpur-s"
            ],
            [
                "district_id" => "63",
                "en_name" => "Narail-S Upazilla",
                "bn_name" => "নড়াইল সদর",
                "slug" => "narail-s-upazilla"
            ],
            [
                "district_id" => "63",
                "en_name" => "Lohagara Upazilla",
                "bn_name" => "লোহাগাড়া",
                "slug" => "lohagara-upazilla"
            ],
            [
                "district_id" => "63",
                "en_name" => "Kalia Upazilla",
                "bn_name" => "কালিয়া",
                "slug" => "kalia-upazilla"
            ],
            [
                "district_id" => "64",
                "en_name" => "Satkhira Sadar",
                "bn_name" => "সাতক্ষীরা সদর",
                "slug" => "satkhira-sadar"
            ],
            [
                "district_id" => "64",
                "en_name" => "Assasuni",
                "bn_name" => "আসসাশুনি ",
                "slug" => "assasuni"
            ],
            [
                "district_id" => "64",
                "en_name" => "Debhata",
                "bn_name" => "দেভাটা",
                "slug" => "debhata"
            ],
            [
                "district_id" => "64",
                "en_name" => "Tala",
                "bn_name" => "তালা",
                "slug" => "tala"
            ],
            [
                "district_id" => "64",
                "en_name" => "Kalaroa",
                "bn_name" => "কলরোয়া",
                "slug" => "kalaroa"
            ],
            [
                "district_id" => "64",
                "en_name" => "Kaliganj",
                "bn_name" => "কালীগঞ্জ",
                "slug" => "kaliganj"
            ],
            [
                "district_id" => "64",
                "en_name" => "Shyamnagar",
                "bn_name" => "শ্যামনগর",
                "slug" => "shyamnagar"
            ],
            [
                "district_id" => "18",
                "en_name" => "Adamdighi",
                "bn_name" => "আদমদিঘী",
                "slug" => "adamdighi"
            ],
            [
                "district_id" => "18",
                "en_name" => "Bogra Sadar",
                "bn_name" => "বগুড়া সদর",
                "slug" => "bogra-sadar"
            ],
            [
                "district_id" => "18",
                "en_name" => "Sherpur",
                "bn_name" => "শেরপুর",
                "slug" => "sherpur"
            ],
            [
                "district_id" => "18",
                "en_name" => "Dhunat",
                "bn_name" => "ধুনট",
                "slug" => "dhunat"
            ],
            [
                "district_id" => "18",
                "en_name" => "Dhupchanchia",
                "bn_name" => "দুপচাচিয়া",
                "slug" => "dhupchanchia"
            ],
            [
                "district_id" => "18",
                "en_name" => "Gabtali",
                "bn_name" => "গাবতলি",
                "slug" => "gabtali"
            ],
            [
                "district_id" => "18",
                "en_name" => "Kahaloo",
                "bn_name" => "কাহালু",
                "slug" => "kahaloo"
            ],
            [
                "district_id" => "18",
                "en_name" => "Nandigram",
                "bn_name" => "নন্দিগ্রাম",
                "slug" => "nandigram"
            ],
            [
                "district_id" => "18",
                "en_name" => "Sahajanpur",
                "bn_name" => "শাহজাহানপুর",
                "slug" => "sahajanpur"
            ],
            [
                "district_id" => "18",
                "en_name" => "Sariakandi",
                "bn_name" => "সারিয়াকান্দি",
                "slug" => "sariakandi"
            ],
            [
                "district_id" => "18",
                "en_name" => "Shibganj",
                "bn_name" => "শিবগঞ্জ",
                "slug" => "shibganj"
            ],
            [
                "district_id" => "18",
                "en_name" => "Sonatala",
                "bn_name" => "সোনাতলা",
                "slug" => "sonatala"
            ],
            [
                "district_id" => "19",
                "en_name" => "Joypurhat S",
                "bn_name" => "জয়পুরহাট সদর",
                "slug" => "joypurhat-s"
            ],
            [
                "district_id" => "19",
                "en_name" => "Akkelpur",
                "bn_name" => "আক্কেলপুর",
                "slug" => "akkelpur"
            ],
            [
                "district_id" => "19",
                "en_name" => "Kalai",
                "bn_name" => "কালাই",
                "slug" => "kalai"
            ],
            [
                "district_id" => "19",
                "en_name" => "Khetlal",
                "bn_name" => "খেতলাল",
                "slug" => "khetlal"
            ],
            [
                "district_id" => "19",
                "en_name" => "Panchbibi",
                "bn_name" => "পাঁচবিবি",
                "slug" => "panchbibi"
            ],
            [
                "district_id" => "20",
                "en_name" => "Naogaon Sadar",
                "bn_name" => "নওগাঁ সদর",
                "slug" => "naogaon-sadar"
            ],
            [
                "district_id" => "20",
                "en_name" => "Mohadevpur",
                "bn_name" => "মহাদেবপুর",
                "slug" => "mohadevpur"
            ],
            [
                "district_id" => "20",
                "en_name" => "Manda",
                "bn_name" => "মান্দা",
                "slug" => "manda"
            ],
            [
                "district_id" => "20",
                "en_name" => "Niamatpur",
                "bn_name" => "নিয়ামতপুর",
                "slug" => "niamatpur"
            ],
            [
                "district_id" => "20",
                "en_name" => "Atrai",
                "bn_name" => "আত্রাই",
                "slug" => "atrai"
            ],
            [
                "district_id" => "20",
                "en_name" => "Raninagar",
                "bn_name" => "রাণীনগর",
                "slug" => "raninagar"
            ],
            [
                "district_id" => "20",
                "en_name" => "Patnitala",
                "bn_name" => "পত্নীতলা",
                "slug" => "patnitala"
            ],
            [
                "district_id" => "20",
                "en_name" => "Dhamoirhat",
                "bn_name" => "ধামইরহাট ",
                "slug" => "dhamoirhat"
            ],
            [
                "district_id" => "20",
                "en_name" => "Sapahar",
                "bn_name" => "সাপাহার",
                "slug" => "sapahar"
            ],
            [
                "district_id" => "20",
                "en_name" => "Porsha",
                "bn_name" => "পোরশা",
                "slug" => "porsha"
            ],
            [
                "district_id" => "20",
                "en_name" => "Badalgachhi",
                "bn_name" => "বদলগাছি",
                "slug" => "badalgachhi"
            ],
            [
                "district_id" => "21",
                "en_name" => "Natore Sadar",
                "bn_name" => "নাটোর সদর",
                "slug" => "natore-sadar"
            ],
            [
                "district_id" => "21",
                "en_name" => "Baraigram",
                "bn_name" => "বড়াইগ্রাম",
                "slug" => "baraigram"
            ],
            [
                "district_id" => "21",
                "en_name" => "Bagatipara",
                "bn_name" => "বাগাতিপাড়া",
                "slug" => "bagatipara"
            ],
            [
                "district_id" => "21",
                "en_name" => "Lalpur",
                "bn_name" => "লালপুর",
                "slug" => "lalpur"
            ],
            [
                "district_id" => "21",
                "en_name" => "Natore Sadar",
                "bn_name" => "নাটোর সদর",
                "slug" => "natore-sadar"
            ],
            [
                "district_id" => "21",
                "en_name" => "Baraigram",
                "bn_name" => "বড়াই গ্রাম",
                "slug" => "baraigram"
            ],
            [
                "district_id" => "22",
                "en_name" => "Bholahat",
                "bn_name" => "ভোলাহাট",
                "slug" => "bholahat"
            ],
            [
                "district_id" => "22",
                "en_name" => "Gomastapur",
                "bn_name" => "গোমস্তাপুর",
                "slug" => "gomastapur"
            ],
            [
                "district_id" => "22",
                "en_name" => "Nachole",
                "bn_name" => "নাচোল",
                "slug" => "nachole"
            ],
            [
                "district_id" => "22",
                "en_name" => "Nawabganj Sadar",
                "bn_name" => "নবাবগঞ্জ সদর",
                "slug" => "nawabganj-sadar"
            ],
            [
                "district_id" => "22",
                "en_name" => "Shibganj",
                "bn_name" => "শিবগঞ্জ",
                "slug" => "shibganj"
            ],
            [
                "district_id" => "23",
                "en_name" => "Atgharia",
                "bn_name" => "আটঘরিয়া",
                "slug" => "atgharia"
            ],
            [
                "district_id" => "23",
                "en_name" => "Bera",
                "bn_name" => "বেড়া",
                "slug" => "bera"
            ],
            [
                "district_id" => "23",
                "en_name" => "Bhangura",
                "bn_name" => "ভাঙ্গুরা",
                "slug" => "bhangura"
            ],
            [
                "district_id" => "23",
                "en_name" => "Chatmohar",
                "bn_name" => "চাটমোহর",
                "slug" => "chatmohar"
            ],
            [
                "district_id" => "23",
                "en_name" => "Faridpur",
                "bn_name" => "ফরিদপুর",
                "slug" => "faridpur"
            ],
            [
                "district_id" => "23",
                "en_name" => "Ishwardi",
                "bn_name" => "ঈশ্বরদী",
                "slug" => "ishwardi"
            ],
            [
                "district_id" => "23",
                "en_name" => "Pabna Sadar",
                "bn_name" => "পাবনা সদর",
                "slug" => "pabna-sadar"
            ],
            [
                "district_id" => "23",
                "en_name" => "Santhia",
                "bn_name" => "সাথিয়া",
                "slug" => "santhia"
            ],
            [
                "district_id" => "23",
                "en_name" => "Sujanagar",
                "bn_name" => "সুজানগর",
                "slug" => "sujanagar"
            ],
            [
                "district_id" => "24",
                "en_name" => "Bagha",
                "bn_name" => "বাঘা",
                "slug" => "bagha"
            ],
            [
                "district_id" => "24",
                "en_name" => "Bagmara",
                "bn_name" => "বাগমারা",
                "slug" => "bagmara"
            ],
            [
                "district_id" => "24",
                "en_name" => "Charghat",
                "bn_name" => "চারঘাট",
                "slug" => "charghat"
            ],
            [
                "district_id" => "24",
                "en_name" => "Durgapur",
                "bn_name" => "দুর্গাপুর",
                "slug" => "durgapur"
            ],
            [
                "district_id" => "24",
                "en_name" => "Godagari",
                "bn_name" => "গোদাগারি",
                "slug" => "godagari"
            ],
            [
                "district_id" => "24",
                "en_name" => "Mohanpur",
                "bn_name" => "মোহনপুর",
                "slug" => "mohanpur"
            ],
            [
                "district_id" => "24",
                "en_name" => "Paba",
                "bn_name" => "পবা",
                "slug" => "paba"
            ],
            [
                "district_id" => "24",
                "en_name" => "Puthia",
                "bn_name" => "পুঠিয়া",
                "slug" => "puthia"
            ],
            [
                "district_id" => "24",
                "en_name" => "Tanore",
                "bn_name" => "তানোর",
                "slug" => "tanore"
            ],
            [
                "district_id" => "25",
                "en_name" => "Sirajganj Sadar",
                "bn_name" => "সিরাজগঞ্জ সদর",
                "slug" => "sirajganj-sadar"
            ],
            [
                "district_id" => "25",
                "en_name" => "Belkuchi",
                "bn_name" => "বেলকুচি",
                "slug" => "belkuchi"
            ],
            [
                "district_id" => "25",
                "en_name" => "Chauhali",
                "bn_name" => "চৌহালি",
                "slug" => "chauhali"
            ],
            [
                "district_id" => "25",
                "en_name" => "Kamarkhanda",
                "bn_name" => "কামারখান্দা",
                "slug" => "kamarkhanda"
            ],
            [
                "district_id" => "25",
                "en_name" => "Kazipur",
                "bn_name" => "কাজীপুর",
                "slug" => "kazipur"
            ],
            [
                "district_id" => "25",
                "en_name" => "Raiganj",
                "bn_name" => "রায়গঞ্জ",
                "slug" => "raiganj"
            ],
            [
                "district_id" => "25",
                "en_name" => "Shahjadpur",
                "bn_name" => "শাহজাদপুর",
                "slug" => "shahjadpur"
            ],
            [
                "district_id" => "25",
                "en_name" => "Tarash",
                "bn_name" => "তারাশ",
                "slug" => "tarash"
            ],
            [
                "district_id" => "25",
                "en_name" => "Ullahpara",
                "bn_name" => "উল্লাপাড়া",
                "slug" => "ullahpara"
            ],
            [
                "district_id" => "26",
                "en_name" => "Birampur",
                "bn_name" => "বিরামপুর",
                "slug" => "birampur"
            ],
            [
                "district_id" => "26",
                "en_name" => "Birganj",
                "bn_name" => "বীরগঞ্জ",
                "slug" => "birganj"
            ],
            [
                "district_id" => "26",
                "en_name" => "Biral",
                "bn_name" => "বিড়াল",
                "slug" => "biral"
            ],
            [
                "district_id" => "26",
                "en_name" => "Bochaganj",
                "bn_name" => "বোচাগঞ্জ",
                "slug" => "bochaganj"
            ],
            [
                "district_id" => "26",
                "en_name" => "Chirirbandar",
                "bn_name" => "চিরিরবন্দর",
                "slug" => "chirirbandar"
            ],
            [
                "district_id" => "26",
                "en_name" => "Phulbari",
                "bn_name" => "ফুলবাড়ি",
                "slug" => "phulbari"
            ],
            [
                "district_id" => "26",
                "en_name" => "Ghoraghat",
                "bn_name" => "ঘোড়াঘাট",
                "slug" => "ghoraghat"
            ],
            [
                "district_id" => "26",
                "en_name" => "Hakimpur",
                "bn_name" => "হাকিমপুর",
                "slug" => "hakimpur"
            ],
            [
                "district_id" => "26",
                "en_name" => "Kaharole",
                "bn_name" => "কাহারোল",
                "slug" => "kaharole"
            ],
            [
                "district_id" => "26",
                "en_name" => "Khansama",
                "bn_name" => "খানসামা",
                "slug" => "khansama"
            ],
            [
                "district_id" => "26",
                "en_name" => "Dinajpur Sadar",
                "bn_name" => "দিনাজপুর সদর",
                "slug" => "dinajpur-sadar"
            ],
            [
                "district_id" => "26",
                "en_name" => "Nawabganj",
                "bn_name" => "নবাবগঞ্জ",
                "slug" => "nawabganj"
            ],
            [
                "district_id" => "26",
                "en_name" => "Parbatipur",
                "bn_name" => "পার্বতীপুর",
                "slug" => "parbatipur"
            ],
            [
                "district_id" => "27",
                "en_name" => "Fulchhari",
                "bn_name" => "ফুলছড়ি",
                "slug" => "fulchhari"
            ],
            [
                "district_id" => "27",
                "en_name" => "Gaibandha sadar",
                "bn_name" => "গাইবান্ধা সদর",
                "slug" => "gaibandha-sadar"
            ],
            [
                "district_id" => "27",
                "en_name" => "Gobindaganj",
                "bn_name" => "গোবিন্দগঞ্জ",
                "slug" => "gobindaganj"
            ],
            [
                "district_id" => "27",
                "en_name" => "Palashbari",
                "bn_name" => "পলাশবাড়ী",
                "slug" => "palashbari"
            ],
            [
                "district_id" => "27",
                "en_name" => "Sadullapur",
                "bn_name" => "সাদুল্যাপুর",
                "slug" => "sadullapur"
            ],
            [
                "district_id" => "27",
                "en_name" => "Saghata",
                "bn_name" => "সাঘাটা",
                "slug" => "saghata"
            ],
            [
                "district_id" => "27",
                "en_name" => "Sundarganj",
                "bn_name" => "সুন্দরগঞ্জ",
                "slug" => "sundarganj"
            ],
            [
                "district_id" => "28",
                "en_name" => "Kurigram Sadar",
                "bn_name" => "কুড়িগ্রাম সদর",
                "slug" => "kurigram-sadar"
            ],
            [
                "district_id" => "28",
                "en_name" => "Nageshwari",
                "bn_name" => "নাগেশ্বরী",
                "slug" => "nageshwari"
            ],
            [
                "district_id" => "28",
                "en_name" => "Bhurungamari",
                "bn_name" => "ভুরুঙ্গামারি",
                "slug" => "bhurungamari"
            ],
            [
                "district_id" => "28",
                "en_name" => "Phulbari",
                "bn_name" => "ফুলবাড়ি",
                "slug" => "phulbari"
            ],
            [
                "district_id" => "28",
                "en_name" => "Rajarhat",
                "bn_name" => "রাজারহাট",
                "slug" => "rajarhat"
            ],
            [
                "district_id" => "28",
                "en_name" => "Ulipur",
                "bn_name" => "উলিপুর",
                "slug" => "ulipur"
            ],
            [
                "district_id" => "28",
                "en_name" => "Chilmari",
                "bn_name" => "চিলমারি",
                "slug" => "chilmari"
            ],
            [
                "district_id" => "28",
                "en_name" => "Rowmari",
                "bn_name" => "রউমারি",
                "slug" => "rowmari"
            ],
            [
                "district_id" => "28",
                "en_name" => "Char Rajibpur",
                "bn_name" => "চর রাজিবপুর",
                "slug" => "char-rajibpur"
            ],
            [
                "district_id" => "29",
                "en_name" => "Lalmanirhat Sadar",
                "bn_name" => "লালমনিরহাট সদর",
                "slug" => "lalmanirhat-sadar"
            ],
            [
                "district_id" => "29",
                "en_name" => "Aditmari",
                "bn_name" => "আদিতমারি",
                "slug" => "aditmari"
            ],
            [
                "district_id" => "29",
                "en_name" => "Kaliganj",
                "bn_name" => "কালীগঞ্জ",
                "slug" => "kaliganj"
            ],
            [
                "district_id" => "29",
                "en_name" => "Hatibandha",
                "bn_name" => "হাতিবান্ধা",
                "slug" => "hatibandha"
            ],
            [
                "district_id" => "29",
                "en_name" => "Patgram",
                "bn_name" => "পাটগ্রাম",
                "slug" => "patgram"
            ],
            [
                "district_id" => "30",
                "en_name" => "Nilphamari Sadar",
                "bn_name" => "নীলফামারী সদর",
                "slug" => "nilphamari-sadar"
            ],
            [
                "district_id" => "30",
                "en_name" => "Saidpur",
                "bn_name" => "সৈয়দপুর",
                "slug" => "saidpur"
            ],
            [
                "district_id" => "30",
                "en_name" => "Jaldhaka",
                "bn_name" => "জলঢাকা",
                "slug" => "jaldhaka"
            ],
            [
                "district_id" => "30",
                "en_name" => "Kishoreganj",
                "bn_name" => "কিশোরগঞ্জ",
                "slug" => "kishoreganj"
            ],
            [
                "district_id" => "30",
                "en_name" => "Domar",
                "bn_name" => "ডোমার",
                "slug" => "domar"
            ],
            [
                "district_id" => "30",
                "en_name" => "Dimla",
                "bn_name" => "ডিমলা",
                "slug" => "dimla"
            ],
            [
                "district_id" => "31",
                "en_name" => "Panchagarh Sadar",
                "bn_name" => "পঞ্চগড় সদর",
                "slug" => "panchagarh-sadar"
            ],
            [
                "district_id" => "31",
                "en_name" => "Debiganj",
                "bn_name" => "দেবীগঞ্জ",
                "slug" => "debiganj"
            ],
            [
                "district_id" => "31",
                "en_name" => "Boda",
                "bn_name" => "বোদা",
                "slug" => "boda"
            ],
            [
                "district_id" => "31",
                "en_name" => "Atwari",
                "bn_name" => "আটোয়ারি",
                "slug" => "atwari"
            ],
            [
                "district_id" => "31",
                "en_name" => "Tetulia",
                "bn_name" => "তেঁতুলিয়া",
                "slug" => "tetulia"
            ],
            [
                "district_id" => "32",
                "en_name" => "Badarganj",
                "bn_name" => "বদরগঞ্জ",
                "slug" => "badarganj"
            ],
            [
                "district_id" => "32",
                "en_name" => "Mithapukur",
                "bn_name" => "মিঠাপুকুর",
                "slug" => "mithapukur"
            ],
            [
                "district_id" => "32",
                "en_name" => "Gangachara",
                "bn_name" => "গঙ্গাচরা",
                "slug" => "gangachara"
            ],
            [
                "district_id" => "32",
                "en_name" => "Kaunia",
                "bn_name" => "কাউনিয়া",
                "slug" => "kaunia"
            ],
            [
                "district_id" => "32",
                "en_name" => "Rangpur Sadar",
                "bn_name" => "রংপুর সদর",
                "slug" => "rangpur-sadar"
            ],
            [
                "district_id" => "32",
                "en_name" => "Pirgachha",
                "bn_name" => "পীরগাছা",
                "slug" => "pirgachha"
            ],
            [
                "district_id" => "32",
                "en_name" => "Pirganj",
                "bn_name" => "পীরগঞ্জ",
                "slug" => "pirganj"
            ],
            [
                "district_id" => "32",
                "en_name" => "Taraganj",
                "bn_name" => "তারাগঞ্জ",
                "slug" => "taraganj"
            ],
            [
                "district_id" => "33",
                "en_name" => "Thakurgaon Sadar",
                "bn_name" => "ঠাকুরগাঁও সদর",
                "slug" => "thakurgaon-sadar"
            ],
            [
                "district_id" => "33",
                "en_name" => "Pirganj",
                "bn_name" => "পীরগঞ্জ",
                "slug" => "pirganj"
            ],
            [
                "district_id" => "33",
                "en_name" => "Baliadangi",
                "bn_name" => "বালিয়াডাঙ্গি",
                "slug" => "baliadangi"
            ],
            [
                "district_id" => "33",
                "en_name" => "Haripur",
                "bn_name" => "হরিপুর",
                "slug" => "haripur"
            ],
            [
                "district_id" => "33",
                "en_name" => "Ranisankail",
                "bn_name" => "রাণীসংকইল",
                "slug" => "ranisankail"
            ],
            [
                "district_id" => "51",
                "en_name" => "Ajmiriganj",
                "bn_name" => "আজমিরিগঞ্জ",
                "slug" => "ajmiriganj"
            ],
            [
                "district_id" => "51",
                "en_name" => "Baniachang",
                "bn_name" => "বানিয়াচং",
                "slug" => "baniachang"
            ],
            [
                "district_id" => "51",
                "en_name" => "Bahubal",
                "bn_name" => "বাহুবল",
                "slug" => "bahubal"
            ],
            [
                "district_id" => "51",
                "en_name" => "Chunarughat",
                "bn_name" => "চুনারুঘাট",
                "slug" => "chunarughat"
            ],
            [
                "district_id" => "51",
                "en_name" => "Habiganj Sadar",
                "bn_name" => "হবিগঞ্জ সদর",
                "slug" => "habiganj-sadar"
            ],
            [
                "district_id" => "51",
                "en_name" => "Lakhai",
                "bn_name" => "লাক্ষাই",
                "slug" => "lakhai"
            ],
            [
                "district_id" => "51",
                "en_name" => "Madhabpur",
                "bn_name" => "মাধবপুর",
                "slug" => "madhabpur"
            ],
            [
                "district_id" => "51",
                "en_name" => "Nabiganj",
                "bn_name" => "নবীগঞ্জ",
                "slug" => "nabiganj"
            ],
            [
                "district_id" => "51",
                "en_name" => "Shaistagonj",
                "bn_name" => "শায়েস্তাগঞ্জ",
                "slug" => "shaistagonj"
            ],
            [
                "district_id" => "52",
                "en_name" => "Moulvibazar Sadar",
                "bn_name" => "মৌলভীবাজার",
                "slug" => "moulvibazar-sadar"
            ],
            [
                "district_id" => "52",
                "en_name" => "Barlekha",
                "bn_name" => "বড়লেখা",
                "slug" => "barlekha"
            ],
            [
                "district_id" => "52",
                "en_name" => "Juri",
                "bn_name" => "জুড়ি",
                "slug" => "juri"
            ],
            [
                "district_id" => "52",
                "en_name" => "Kamalganj",
                "bn_name" => "কামালগঞ্জ",
                "slug" => "kamalganj"
            ],
            [
                "district_id" => "52",
                "en_name" => "Kulaura",
                "bn_name" => "কুলাউরা",
                "slug" => "kulaura"
            ],
            [
                "district_id" => "52",
                "en_name" => "Rajnagar",
                "bn_name" => "রাজনগর",
                "slug" => "rajnagar"
            ],
            [
                "district_id" => "52",
                "en_name" => "Sreemangal",
                "bn_name" => "শ্রীমঙ্গল",
                "slug" => "sreemangal"
            ],
            [
                "district_id" => "53",
                "en_name" => "Bishwamvarpur",
                "bn_name" => "বিসশম্ভারপুর",
                "slug" => "bishwamvarpur"
            ],
            [
                "district_id" => "53",
                "en_name" => "Chhatak",
                "bn_name" => "ছাতক",
                "slug" => "chhatak"
            ],
            [
                "district_id" => "53",
                "en_name" => "Derai",
                "bn_name" => "দেড়াই",
                "slug" => "derai"
            ],
            [
                "district_id" => "53",
                "en_name" => "Dharampasha",
                "bn_name" => "ধরমপাশা",
                "slug" => "dharampasha"
            ],
            [
                "district_id" => "53",
                "en_name" => "Dowarabazar",
                "bn_name" => "দোয়ারাবাজার",
                "slug" => "dowarabazar"
            ],
            [
                "district_id" => "53",
                "en_name" => "Jagannathpur",
                "bn_name" => "জগন্নাথপুর",
                "slug" => "jagannathpur"
            ],
            [
                "district_id" => "53",
                "en_name" => "Jamalganj",
                "bn_name" => "জামালগঞ্জ",
                "slug" => "jamalganj"
            ],
            [
                "district_id" => "53",
                "en_name" => "Sulla",
                "bn_name" => "সুল্লা",
                "slug" => "sulla"
            ],
            [
                "district_id" => "53",
                "en_name" => "Sunamganj Sadar",
                "bn_name" => "সুনামগঞ্জ সদর",
                "slug" => "sunamganj-sadar"
            ],
            [
                "district_id" => "53",
                "en_name" => "Shanthiganj",
                "bn_name" => "শান্তিগঞ্জ",
                "slug" => "shanthiganj"
            ],
            [
                "district_id" => "53",
                "en_name" => "Tahirpur",
                "bn_name" => "তাহিরপুর",
                "slug" => "tahirpur"
            ],
            [
                "district_id" => "54",
                "en_name" => "Sylhet Sadar",
                "bn_name" => "সিলেট সদর",
                "slug" => "sylhet-sadar"
            ],
            [
                "district_id" => "54",
                "en_name" => "Beanibazar",
                "bn_name" => "বেয়ানিবাজার",
                "slug" => "beanibazar"
            ],
            [
                "district_id" => "54",
                "en_name" => "Bishwanath",
                "bn_name" => "বিশ্বনাথ",
                "slug" => "bishwanath"
            ],
            [
                "district_id" => "54",
                "en_name" => "Dakshin Surma",
                "bn_name" => "দক্ষিণ সুরমা",
                "slug" => "dakshin-surma"
            ],
            [
                "district_id" => "54",
                "en_name" => "Balaganj",
                "bn_name" => "বালাগঞ্জ",
                "slug" => "balaganj"
            ],
            [
                "district_id" => "54",
                "en_name" => "Companiganj",
                "bn_name" => "কোম্পানিগঞ্জ",
                "slug" => "companiganj"
            ],
            [
                "district_id" => "54",
                "en_name" => "Fenchuganj",
                "bn_name" => "ফেঞ্চুগঞ্জ",
                "slug" => "fenchuganj"
            ],
            [
                "district_id" => "54",
                "en_name" => "Golapganj",
                "bn_name" => "গোলাপগঞ্জ",
                "slug" => "golapganj"
            ],
            [
                "district_id" => "54",
                "en_name" => "Gowainghat",
                "bn_name" => "গোয়াইনঘাট",
                "slug" => "gowainghat"
            ],
            [
                "district_id" => "54",
                "en_name" => "Jointapur",
                "bn_name" => "জৈন্তাপুর",
                "slug" => "jointapur"
            ],
            [
                "district_id" => "54",
                "en_name" => "Kanaighat",
                "bn_name" => "কানাইঘাট",
                "slug" => "kanaighat"
            ],
            [
                "district_id" => "54",
                "en_name" => "Zakiganj",
                "bn_name" => "জাকিগঞ্জ",
                "slug" => "zakiganj"
            ],
            [
                "district_id" => "54",
                "en_name" => "Nobigonj",
                "bn_name" => "নবীগঞ্জ",
                "slug" => "nobigonj"
            ],
            [
                "district_id" => "45",
                "en_name" => "Eidgaon",
                "bn_name" => "ঈদগাঁও",
                "slug" => "eidgaon"
            ],
            [
                "district_id" => "53",
                "en_name" => "Modhyanagar",
                "bn_name" => "মধ্যনগর",
                "slug" => "modhyanagar"
            ],
            [
                "district_id" => "7",
                "en_name" => "Dasar",
                "bn_name" => "দশর",
                "slug" => "dasar"
            ]
        ];

        foreach ($upazilas as $upazila) {
            Upazila::create($upazila);
        }
    }
}
