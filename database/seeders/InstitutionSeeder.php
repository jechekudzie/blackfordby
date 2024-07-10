<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutions = collect([
            ['institution_name' => 'Air Force Thornhill Secondary School'],
            ['institution_name' => 'Amaveni High School	Kwekwe'],
            ['institution_name' => 'Anderson Adventist High School'],
            ['institution_name' => 'Arch Munaki Secondary School'],
            ['institution_name' => 'Arcturus High School Arcturus'],
            ['institution_name' => 'Ascot Secondary School'],
            ['institution_name' => 'Batanai High School'],
            ['institution_name' => 'Bernard Mizeki College'],
            ['institution_name' => 'Binga Secondary School'],
            ['institution_name' => 'Biriiri High School'],
            ['institution_name' => 'Bradely High School'],
            ['institution_name' => 'Budiriro 2 High School'],
            ['institution_name' => 'Budiriro High School'],
            ['institution_name' => 'Bulawayo Adventist High School'],
            ['institution_name' => 'Bulawayo High School'],
            ['institution_name' => 'Centenary Secondary'],
            ['institution_name' => 'Chaplin High School'],
            ['institution_name' => 'Checheche Sec School'],
            ['institution_name' => 'Chegato High School '],
            ['institution_name' => 'Chegutu High School'],
            ['institution_name' => 'Chemhanza Secondary School'],
            ['institution_name' => 'Chemukute Secondary School'],
            ['institution_name' => 'Cherutombo Secondary'],
            ['institution_name' => 'Cheziya Gokwe High School'],
            ['institution_name' => 'Chibi High School'],
            ['institution_name' => 'Chibuwe High School'],
            ['institution_name' => 'Chibuwe Sec School'],
            ['institution_name' => 'Chikwingwizha Secondary School'],
            ['institution_name' => 'Chimanimani Sec School'],
            ['institution_name' => 'Chimbwembwe Secondary School'],
            ['institution_name' => 'Chinembiri Secondary School'],
            ['institution_name' => 'Chingoma Secondary School'],
            ['institution_name' => 'Chinhoyi 2 High School'],
            ['institution_name' => 'Chinhoyi High School'],
            ['institution_name' => 'Chinhoyi High School'],
            ['institution_name' => 'Chinyudze Sec School'],
            ['institution_name' => 'Chipadze Sec School'],
            ['institution_name' => 'Chipangayi High School'],
            ['institution_name' => 'Chipindura High School'],
            ['institution_name' => 'Chirichoga Sec School'],
            ['institution_name' => 'Chirumba Secondary School'],
            ['institution_name' => 'Chitepo Secondary School'],
            ['institution_name' => 'Chitonhora High School'],
            ['institution_name' => 'Chizungu Secondary School'],
            ['institution_name' => 'Dalny Mine Secondary School'],
            ['institution_name' => 'Danhamombe High School'],
            ['institution_name' => 'Danhiko Secondary School'],
            ['institution_name' => 'Daramombe Secondary School'],
            ['institution_name' => 'Darwin High School'],
            ['institution_name' => 'Detema Secondary School'],
            ['institution_name' => 'Development Ass Hwange Sec School'],
            ['institution_name' => 'Devuli Secondary School'],
            ['institution_name' => 'Dewure Secondary School'],
            ['institution_name' => 'Domboramwari High School'],
            ['institution_name' => 'Dominican Convent High School'],
            ['institution_name' => 'Dominican Convent High School'],
            ['institution_name' => 'Drake Secondary School'],
            ['institution_name' => 'Dzivaresekwa High School'],
            ['institution_name' => 'Elise Gledhill Secondary School'],
            ['institution_name' => 'Ellis Robins High School'],
            ['institution_name' => 'Emakhandeni Secondary School'],
            ['institution_name' => 'Emganwini Secondary School'],
            ['institution_name' => 'Entumbane Secondary School'],
            ['institution_name' => 'Eveline High School'],
            ['institution_name' => 'Fatima Secondary School'],
            ['institution_name' => 'Filabusi Secondary School'],
            ['institution_name' => 'Fletcher High School'],
            ['institution_name' => 'Founders High School'],
            ['institution_name' => 'Funye High School'],
            ['institution_name' => 'Gambe Sanyatwe Secondary School'],
            ['institution_name' => 'Gateway High School'],
            ['institution_name' => 'George Chipadza Secondary School'],
            ['institution_name' => 'George Stark High School'],
            ['institution_name' => 'Gifford High School'],
            ['institution_name' => 'Girls High School'],
            ['institution_name' => 'Glen Norah 1 High School'],
            ['institution_name' => 'Glen Norah 2 High School'],
            ['institution_name' => 'Glen View 1 High School'],
            ['institution_name' => 'Glen View 2 High School'],
            ['institution_name' => 'Glen View 3 High School'],
            ['institution_name' => 'Goko Secondary School'],
            ['institution_name' => 'Gokomere High School'],
            ['institution_name' => 'Goromonzi High School'],
            ['institution_name' => 'Guineafowl High School'],
            ['institution_name' => 'Gutu High School'],
            ['institution_name' => 'Gwanda High School'],
            ['institution_name' => 'Gwindingwi Secondary School'],
            ['institution_name' => 'Hama Secondary School'],
            ['institution_name' => 'Hamilton High School'],
            ['institution_name' => 'Handina Secondary School'],
            ['institution_name' => 'Harare High School'],
            ['institution_name' => 'Hartzel High School'],
            ['institution_name' => 'Hatfield High School'],
            ['institution_name' => 'Hermann Gmeiner High School'],
            ['institution_name' => 'Highfield 2 High School'],
            ['institution_name' => 'Highfield No.2 High School'],
            ['institution_name' => 'Hlangabeza Sec School'],
            ['institution_name' => 'Hlezana Secondary School'],
            ['institution_name' => 'Holy Cross Mission'],
            ['institution_name' => 'Howard High School'],
            ['institution_name' => 'Hurungwe Secondary School'],
            ['institution_name' => 'Hwange Secondary School'],
            ['institution_name' => 'Ihlathi High School'],
            ['institution_name' => 'Induna Secondary School Dev Com'],
            ['institution_name' => 'Inyanda Secondary School'],
            ['institution_name' => 'J Z Moyo High School'],
            ['institution_name' => 'Jameson High School'],
            ['institution_name' => 'John Tallach High School'],
            ['institution_name' => 'Jotsholo Secondary School'],
            ['institution_name' => 'Kalope Secondary School'],
            ['institution_name' => 'Kambarami Secondary School'],
            ['institution_name' => 'Kambuzuma 2 High School'],
            ['institution_name' => 'Kriste Mambo Secondary School'],
            ['institution_name' => 'Kushinga Sec.School'],
            ['institution_name' => 'Kutama College'],
            ['institution_name' => 'Kuwadzana 2 High School'],
            ['institution_name' => 'Kuwadzana 2 High School'],
            ['institution_name' => 'Kuwadzana 3 High School'],
            ['institution_name' => 'Kuwadzana High School (Banket)'],
            ['institution_name' => 'Kuwadzana Secondary School (Kadoma)'],
            ['institution_name' => 'Kwayedza Secondary School'],
            ['institution_name' => 'Kwekwe High School'],
            ['institution_name' => 'Kwenda High School'],
            ['institution_name' => 'Liebenberg High School'],
            ['institution_name' => 'Lieberburg Secondary School'],
            ['institution_name' => 'Living Waters High School'],
            ['institution_name' => 'Lobengula Secondary School'],
            ['institution_name' => 'Lord Malvern Secondary School'],
            ['institution_name' => 'Loreto High School'],
            ['institution_name' => 'Lower Gweru Secondary School'],
            ['institution_name' => 'Lundi Secondary School'],
            ['institution_name' => 'Luveve High School'],
            ['institution_name' => 'Mabelreign Girls High School'],
            ['institution_name' => 'Mabhikwa Secondary School'],
            ['institution_name' => 'Mabvuku High School'],
            ['institution_name' => 'Madzivire Range High School'],
            ['institution_name' => 'Magama Secondary School'],
            ['institution_name' => 'Magwenya Secondary School'],
            ['institution_name' => 'Mambo Secondary School'],
            ['institution_name' => 'Mamunyadza High School'],
            ['institution_name' => 'Mandava High School'],
            ['institution_name' => 'Mandedza Secondary School'],
            ['institution_name' => 'Mandwandwe Secondary School'],
            ['institution_name' => 'Manjolo Secondary School'],
            ['institution_name' => 'Manunure Secondary School'],
            ['institution_name' => 'Manyame Secondary School'],
            ['institution_name' => 'Marange High School'],
            ['institution_name' => 'Maringove Secondary School'],
            ['institution_name' => 'Marist Brothers Secondary School'],
            ['institution_name' => 'Marlborough High School'],
            ['institution_name' => 'Marondera High School'],
            ['institution_name' => 'Mashava Secondary School'],
            ['institution_name' => 'Mashoko Secondary School'],
            ['institution_name' => 'Masiyarwa Secondary School'],
            ['institution_name' => 'Masotsha Secondary School'],
            ['institution_name' => 'Masunda North Secondary School'],
            ['institution_name' => 'Matinunura High School'],
            ['institution_name' => 'Matsine Secondary School'],
            ['institution_name' => 'Mavela Secondary School'],
            ['institution_name' => 'Mavhudzi Secondary School'],
            ['institution_name' => 'Mawabeni Secondary School'],
            ['institution_name' => 'Mazambara Secondary School'],
            ['institution_name' => 'Mazowe High School'],
            ['institution_name' => 'Mbare High School'],
            ['institution_name' => 'Mbare Secondary School'],
            ['institution_name' => 'Mbari Secondary School'],
            ['institution_name' => 'Mbizo High School'],
            ['institution_name' => 'Mhangura Secondary School'],
            ['institution_name' => 'Mhondoro Secondary School'],
            ['institution_name' => 'Milton High School'],
            ['institution_name' => 'Minda High School'],
            ['institution_name' => 'Mkhosana Adventist Secondary School'],
            ['institution_name' => 'Mkoba No 3 Secondary School'],
            ['institution_name' => 'Mkoba Secondary School'],
            ['institution_name' => 'Mncumbatha Secondary School'],
            ['institution_name' => 'Moleli High School'],
            ['institution_name' => 'Monte Cassino Secondary School'],
            ['institution_name' => 'Montrose Girls High School'],
            ['institution_name' => 'Morgan High School'],
            ['institution_name' => 'Morgenster High School'],
            ['institution_name' => 'Mosi-Oa-Tunya High School'],
            ['institution_name' => 'Mount Carmelsec School'],
            ['institution_name' => 'Mpandawana Secondary School'],
            ['institution_name' => 'Mpopoma High School Dev Ass'],
            ['institution_name' => 'Msiteli Secondary School'],
            ['institution_name' => 'Msthabezi Secondary School'],
            ['institution_name' => 'Mt Pleasant High School'],
            ['institution_name' => 'Mt Selinda High School'],
            ['institution_name' => 'Mutoko Central Secondary School'],
            ['institution_name' => 'Mucheke High School'],
            ['institution_name' => 'Mufakose 1 High School'],
            ['institution_name' => 'Mufakose 2 High School'],
            ['institution_name' => 'Mufakose 3 High School'],
            ['institution_name' => 'Mufakose Mhuriimwe Secondary School'],
            ['institution_name' => 'Muguta Secondary School'],
            ['institution_name' => 'Mukai Secondary School'],
            ['institution_name' => 'Mukaro High School'],
            ['institution_name' => 'Munyaradzi Secondary'],
            ['institution_name' => 'Murambwa Secondary School'],
            ['institution_name' => 'Musani Secondary School'],
            ['institution_name' => 'Mutambara High School'],
            ['institution_name' => 'Mutare Boys High School'],
            ['institution_name' => 'Mutare Girls High School'],
            ['institution_name' => 'Mutema High School'],
            ['institution_name' => 'Mutendi High School'],
            ['institution_name' => 'Mutero Secondary School'],
            ['institution_name' => 'Mutorashanga High School'],
            ['institution_name' => 'Mvurwi Sec School'],
            ['institution_name' => 'Mwenezi Secondary School'],
            ['institution_name' => 'Mzilikazi Secondary Schol'],
            ['institution_name' => 'Mzingwane High School'],
            ['institution_name' => 'Nagle House'],
            ['institution_name' => 'Nashville High School'],
            ['institution_name' => 'Ndarama Secondary School'],
            ['institution_name' => 'Ndlovu Secondary School'],
            ['institution_name' => 'Nemakonde Secondary School'],
            ['institution_name' => 'Nembudziya Govt Secondary School'],
            ['institution_name' => 'Ngundu Government Secondary School'],
            ['institution_name' => 'Ngundu Halt Secondary School'],
            ['institution_name' => 'Nhedziwa Secondary School'],
            ['institution_name' => 'Nhlahla Secondary School'],
            ['institution_name' => 'Nhowe Secondary School'],
            ['institution_name' => 'Njelele Secondary School'],
            ['institution_name' => 'Njube High School Sda'],
            ['institution_name' => 'Njube Secondary School'],
            ['institution_name' => 'Nkayi Rural Secondary School'],
            ['institution_name' => 'Nketa Secondary School'],
            ['institution_name' => 'Nkululeko High School'],
            ['institution_name' => 'Nkulumane High School'],
            ['institution_name' => 'Northlea High School'],
            ['institution_name' => 'Nyabira Secondary School'],
            ['institution_name' => 'Nyamandlovu Secondary School'],
            ['institution_name' => 'Nyamauru High School'],
            ['institution_name' => 'Nyamauru Secondary School'],
            ['institution_name' => 'Nyameni High School'],
            ['institution_name' => 'Nyamuzuwe High School'],
            ['institution_name' => 'Nyanga High School'],
            ['institution_name' => 'Nyaningwe Secondary School'],
            ['institution_name' => 'Nyazura Adv High School'],
            ['institution_name' => 'Odzi Secondary School'],
            ['institution_name' => 'Oriel Girl\'s High School'],
            ['institution_name' => 'Pamushana High School'],
            ['institution_name' => 'Petra High School'],
            ['institution_name' => 'Pfupajena Secondary'],
            ['institution_name' => 'Pinewood High School'],
            ['institution_name' => 'Pumula Secondary School'],
            ['institution_name' => 'Pumula South Secondary School'],
            ['institution_name' => 'Queen Elizabeth School'],
            ['institution_name' => 'Raffingora Sec School'],
            ['institution_name' => 'Rakodzi High School S.D.A'],
            ['institution_name' => 'Regina Mundi High School'],
            ['institution_name' => 'Richmond Secondary School'],
            ['institution_name' => 'Ridgeview High School'],
            ['institution_name' => 'Ridziwi High School'],
            ['institution_name' => 'Roosevelt Girls High School'],
            ['institution_name' => 'Rudhanda Secondary School'],
            ['institution_name' => 'Rufaro Secondary School'],
            ['institution_name' => 'Rukweza Secondary School'],
            ['institution_name' => 'Rupare High School'],
            ['institution_name' => 'Rushingo High School'],
            ['institution_name' => 'S D A Sobukazi High School'],
            ['institution_name' => 'Sacred Heart High School'],
            ['institution_name' => 'Sacred Heart High( Rutenga High) School'],
            ['institution_name' => 'Sakubva 1 Secondary School'],
            ['institution_name' => 'Sandringham Secondary'],
            ['institution_name' => 'Sanyati Baptist High School'],
            ['institution_name' => 'Saruwe Secondary School'],
            ['institution_name' => 'Mkhosana Adventist School'],
            ['institution_name' => 'Seke 1 Secondary School'],
            ['institution_name' => 'Seke 2 High School'],
            ['institution_name' => 'Seke Mhuriimwe High School'],
            ['institution_name' => 'Seke Secondary School'],
            ['institution_name' => 'Senga Secondary School'],
            ['institution_name' => 'Serima Secondary School'],
            ['institution_name' => 'Shashane Secondary School'],
            ['institution_name' => 'Shongamiti Secondary School'],
            ['institution_name' => 'Shungu High School'],
            ['institution_name' => 'Shurugwi 2 Secondary School'],
            ['institution_name' => 'Sikhoveni Secondary School'],
            ['institution_name' => 'Sikhulile Secondary School'],
            ['institution_name' => 'Silveira Secondary School'],
            ['institution_name' => 'Sizane High School Sdc Office'],
            ['institution_name' => 'Sizane Secondary Secondary'],
            ['institution_name' => 'Sobukhazi Secondary School'],
            ['institution_name' => 'Solusi Adventist Secondary School'],
            ['institution_name' => 'Somvubu Secondary School'],
            ['institution_name' => 'St Anthonys High School'],
            ['institution_name' => 'St Augustines Mission'],
            ['institution_name' => 'St Benedict\'s Secondary School'],
            ['institution_name' => 'St Bernard\'s Mission'],
            ['institution_name' => 'St Clares Mangwebde Secondary School'],
            ['institution_name' => 'St Columbas High School'],
            ['institution_name' => 'St David\'s High School'],
            ['institution_name' => 'St Dominics Chishawasha School'],
            ['institution_name' => 'St Erics Secondary School'],
            ['institution_name' => 'St Francis Secondary School'],
            ['institution_name' => 'St Ignatius College'],
            ['institution_name' => 'St John\'s Chifamba Secondary School'],
            ['institution_name' => 'St John\s Chifamba Secondary School'],
            ['institution_name' => 'St John\'s High School'],
            ['institution_name' => 'St Joseph High School'],
            ['institution_name' => 'St Joseph\'s School'],
            ['institution_name' => 'St Mary\'s Secondary School (Wedza)'],
            ['institution_name' => 'St Mary\'s Secondary School (Beitbridge)'],
            ['institution_name' => 'St Peters Mission'],
            ['institution_name' => 'St Phillips Magwenya'],
            ['institution_name' => 'St. Francis of Asisi Secondary School'],
            ['institution_name' => 'Tafara 1 High School'],
            ['institution_name' => 'Temeraire Secondary School'],
            ['institution_name' => 'Thekwane High School'],
            ['institution_name' => 'Theydon Secondary School'],
            ['institution_name' => 'Thornhill High School'],
            ['institution_name' => 'Townsend High School'],
            ['institution_name' => 'Tsholotsho High School'],
            ['institution_name' => 'Vainona High School'],
            ['institution_name' => 'Vhembe Secondary School'],
            ['institution_name' => 'Victoria High School'],
            ['institution_name' => 'Vimbai Secondary School'],
            ['institution_name' => 'Waddilove Secondary School  '],
            ['institution_name' => 'Wadzanai High School    '],
            ['institution_name' => 'Wankie Secondary School '],
            ['institution_name' => 'Warren Park High School '],
            ['institution_name' => 'Warren Park High School Dev Assoc   '],
            ['institution_name' => 'Wedza Government High School    '],
            ['institution_name' => 'Westridge High School   '],
            ['institution_name' => 'Whitewater Secondary School '],
            ['institution_name' => 'Waddilove Secondary School '],
            ['institution_name' => 'Wadzanai High School '],
            ['institution_name' => 'Wankie Secondary School '],
            ['institution_name' => 'Warren Park High School '],
            ['institution_name' => 'Warren Park High School Dev Assoc '],
            ['institution_name' => 'Wedza Government High School '],
            ['institution_name' => 'Westridge High School '],
            ['institution_name' => 'Whitewater Secondary School'],
            ['institution_name' => 'Zaka High School'],
            ['institution_name' => 'Zengeza 2 High'],
            ['institution_name' => 'Zengeza 3 High School'],
            ['institution_name' => 'Zengeza 4 High School'],
            ['institution_name' => 'Zengeza Secondary School'],
            ['institution_name' => 'Zesa Secondary School'],
            ['institution_name' => 'Zimuto High School'],
            ['institution_name' => 'Zimuto High School'],
            ['institution_name' => 'Zvamapere Secondary School'],
            ['institution_name' => 'Zvishavane Secondary School'],
        ]);

        $institutions->each(function($institution) {
            Institution::insert($institution);
        });
    }
}































































































