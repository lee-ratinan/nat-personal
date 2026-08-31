<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController
{

    private array $business_card_languages = ['en', 'th', 'ja', 'zh-TW', 'en-Shaw', 'ko', 'id', 'vi', 'lo', 'es', 'art-x-navi'];

    private array $trips = [
        [
            'code'      => 'jhb2026',
            'country'   => 'MY',
            'filter'    => 'southeast-asia',
            'title'     => 'JB 4DX',
            'locations' => ['johor-bahru'],
            'dates'     => ['2026-08-16', '2026-08-17'],
            'details'   => 'Just wanted to watch Spider-Man in 4DX',
        ],
        [
            'code'      => 'tpe2026',
            'country'   => 'TW',
            'filter'    => 'east-asia',
            'title'     => '台灣高鐵115年',
            'locations' => ['taipei', 'kaohsiung', 'taichung', 'chiayi', 'tainan', 'taoyuan'],
            'dates'     => ['2026-08-02', '2026-08-05'],
            'detail'    => 'BL Pilgrimages Trip... again!',
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/811/tpe2026',
            'junrei'    => [
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/826/first-note-of-love-pilgrimage', 'title' => '彈一場完美戀愛'],
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/828/wishing-upon-the-shooting-stars-pilgrimage', 'title' => '向流星許願的我們']
            ]
        ],
        [
            'code'      => 'kix2026',
            'country'   => 'JP',
            'filter'    => 'east-asia',
            'title'     => 'エイキンのソーロートラベル',
            'locations' => [
                'osaka', 'nara', 'hokuei', 'tottori', 'kinosakionsen', 'himeji', 'kobe', 'kyoto', 'uji',
                'tokyo', 'fujisan'
            ],
            'dates'     => ['2026-01-06', '2026-01-15'],
            'detail'    => 'It’s my first Japan solo trip in the winter!',
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/141/kix2026',
            'junrei'    => [
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/188/harry-potter-pilgrimage', 'title' => 'Harry Potter'],
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/281/lost-ship-in-the-sky-pilgrimage', 'title' => '名探偵コナン　天空の難破船'],
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/186/crossroad-in-the-ancient-capital-pilgrimage', 'title' => '名探偵コナン　迷宮の十字路'],
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/285/conan-town-pilgrimage', 'title' => 'コナンタウン'],
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/184/kimi-no-na-wa-pilgrimage', 'title' => '君の名は。']
            ]
        ],
        [
            'code'      => 'hkt2025',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'เที่ยวภูเก็ต 2568',
            'locations' => ['phuket', 'phang-nga', 'krabi'],
            'dates'     => ['2025-11-14', '2025-11-17'],
            'detail'    => 'Celebrating birthday in the sea~~',
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/37/hkt2025'
        ],
        [
            'code'      => 'kul2025',
            'country'   => 'MY',
            'filter'    => 'southeast-asia',
            'title'     => 'Kuala Lumpur Trip 2025',
            'locations' => ['bandar-utama', 'kuala-lumpur'],
            'dates'     => ['2025-04-22', '2025-04-30'],
            'detail'    => 'A strange work trip with lots of free time to enjoy.',
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/9/kul2025'
        ],
        [
            'code'      => 'bkk2025',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'เที่ยวกรุงเทพ 2568',
            'locations' => ['bangkok'],
            'dates'     => ['2025-03-06', '2025-03-10'],
            'detail'    => 'Cool trip',
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/39/bkk2025'
        ],
        [
            'code'      => 'tpe2024',
            'country'   => 'TW',
            'filter'    => 'east-asia',
            'title'     => '花蓮、台北 113年',
            'locations' => ['hualien', 'taipei', 'tamsui', 'yangmingshan', 'beitou'],
            'dates'     => ['2024-10-23', '2024-10-27'],
            'detail'    => 'Taiwan PRIDE 2024, Capybara Encounter, Hiking, and 某某 Pilgrimage',
            'junrei'    => [
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/202/the-on1y-one-pilgrimage', 'title' => '某某']
            ]
        ],
        [
            'code'      => 'dmk2024b',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'กรุงเทพอีกแล้ว 2567',
            'locations' => ['bangkok'],
            'dates'     => ['2024-09-04', '2024-09-11'],
            'detail'    => 'Escape boring Singapore again',
        ],
        [
            'code'      => 'cgk2024b',
            'country'   => 'ID',
            'filter'    => 'southeast-asia',
            'title'     => 'Jakarta 2024',
            'locations' => ['jakarta'],
            'dates'     => ['2024-08-23', '2024-08-27'],
            'detail'    => 'Relaxing in Jakarta just for a while',
        ],
        [
            'code'      => 'pen2024',
            'country'   => 'MY',
            'filter'    => 'southeast-asia',
            'title'     => 'Pulau Pinang 2024',
            'locations' => ['george-town'],
            'dates'     => ['2024-06-21', '2024-06-23'],
            'detail'    => 'A quick stop in Penang, chasing murals and fun',
        ],
        [
            'code'      => 'kix2024',
            'country'   => 'JP',
            'filter'    => 'east-asia',
            'title'     => '関西と関東 2024',
            'locations' => ['osaka', 'arimaonsen', 'kobe', 'nara', 'kyoto', 'tokyo', 'yokohama', 'fujisawa'],
            'dates'     => ['2024-04-22', '2024-05-02'],
            'detail'    => 'First time in Kansai~ Have fun!',
            'junrei'    => [
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/188/harry-potter-pilgrimage', 'title' => 'Harry Potter'],
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/186/crossroad-in-the-ancient-capital-pilgrimage', 'title' => '名探偵コナン　迷宮の十字路'],
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/184/kimi-no-na-wa-pilgrimage', 'title' => '君の名は。']
            ]
        ],
        [
            'code'      => 'cgk2024a',
            'country'   => 'ID',
            'filter'    => 'southeast-asia',
            'title'     => 'Karawaci 2024',
            'locations' => ['karawaci'],
            'dates'     => ['2024-03-24', '2024-03-27'],
            'detail'    => 'Work and fun in Karawaci ~ meeting with the bankers',
        ],
        [
            'code'      => 'dmk2024a',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'พัทยา-กรุงเทพ 2567',
            'locations' => ['pattaya', 'bangkok'],
            'dates'     => ['2024-02-05', '2024-02-15'],
            'detail'    => '',
        ],
        [
            'code'      => 'jhb2023',
            'country'   => 'MY',
            'filter'    => 'southeast-asia',
            'title'     => 'Johor Bahru 2023',
            'locations' => ['johor-bahru'],
            'dates'     => ['2023-12-16', '2023-12-17'],
            'detail'    => 'A quick relaxing trip in JB',
        ],
        [
            'code'      => 'tpe2023',
            'country'   => 'TW',
            'filter'    => 'east-asia',
            'title'     => '台北 112年',
            'locations' => ['taipei', 'beitou', 'jiufen'],
            'dates'     => ['2023-10-26', '2023-10-30'],
            'detail'    => '',
        ],
        [
            'code'      => 'dps2023',
            'country'   => 'ID',
            'filter'    => 'southeast-asia',
            'title'     => 'Jakarta-Bali 2023',
            'locations' => ['jakarta', 'bali'],
            'dates'     => ['2023-10-14', '2023-10-20'],
            'detail'    => '',
        ],
        [
            'code'      => 'ceb2023',
            'country'   => 'PH',
            'filter'    => 'southeast-asia',
            'title'     => 'Cebu 2023',
            'locations' => ['cebu', 'mactan', 'oslob', 'alegria'],
            'dates'     => ['2023-06-29', '2023-07-06'],
            'detail'    => '',
        ],
        [
            'code'      => 'jhb2022',
            'country'   => 'MY',
            'filter'    => 'southeast-asia',
            'title'     => 'Desaru 2022',
            'locations' => ['johor-bahru', 'desaru'],
            'dates'     => ['2022-11-12', '2022-11-13'],
            'detail'    => '',
        ],
        [
            'code'      => 'sgn2022',
            'country'   => 'VN',
            'filter'    => 'southeast-asia',
            'title'     => 'Sài Gòn 2022',
            'locations' => ['ho-chi-minh-city'],
            'dates'     => ['2022-10-28', '2022-10-31'],
            'detail'    => '',
        ],
        [
            'code'      => 'hkt2022',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'ภูเก็ตแซนด์บ๊อก 2565',
            'locations' => ['phuket', 'phang-nga', 'krabi', 'bangkok'],
            'dates'     => ['2022-05-15', '2022-05-23'],
            'detail'    => '',
        ],
        [
            'code'      => 'iph2020',
            'country'   => 'MY',
            'filter'    => 'southeast-asia',
            'title'     => 'Ipoh 2020',
            'locations' => ['ipoh'],
            'dates'     => ['2020-01-06', '2020-01-10'],
            'detail'    => '',
        ],
        [
            'code'      => 'syd2019',
            'country'   => 'AU',
            'filter'    => 'oceania',
            'title'     => 'Sydney &amp; Melbourne 2019',
            'locations' => ['sydney', 'melbourne'],
            'dates'     => ['2019-10-17', '2019-10-26'],
            'detail'    => '',
            'junrei'    => [
                ['link' => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/188/harry-potter-pilgrimage', 'title' => 'Harry Potter']
            ]
        ],
        [
            'code'      => 'tpe2018',
            'country'   => 'TW',
            'filter'    => 'east-asia',
            'title'     => '台北&amp;台中 107年',
            'locations' => ['taipei', 'taichung', 'beitou', 'wulai'],
            'dates'     => ['2018-11-11', '2018-11-17'],
            'detail'    => '',
        ],
        [
            'code'      => 'utp2018',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'เที่ยวพัทยา กับ GrapeVine 2018',
            'locations' => ['pattaya'],
            'dates'     => ['2018-03-XX'],
            'detail'    => '',
        ],
        [
            'code'      => 'hhq2017',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'ทริปกาญจน์ กับ GrapeVine 2017',
            'locations' => ['kanchanaburi'],
            'dates'     => ['2017-10-11'],
            'detail'    => '',
        ],
        [
            'code'      => 'bth2016',
            'country'   => 'ID',
            'filter'    => 'southeast-asia',
            'title'     => 'Pulau Batam 2016',
            'locations' => ['batam'],
            'dates'     => ['2016-09-11'],
            'detail'    => '',
        ],
        [
            'code'      => 'nrt2016',
            'country'   => 'JP',
            'filter'    => 'east-asia',
            'title'     => '日本関東 2016',
            'locations' => ['tokyo', 'yokohama', 'kamakura'],
            'dates'     => ['2016-06-11', '2016-06-16'],
            'detail'    => '',
        ],
        [
            'code'      => 'kul2014',
            'country'   => 'MY',
            'filter'    => 'southeast-asia',
            'title'     => 'Kuala Lumpur dan Pulau Langkawi 2014',
            'locations' => ['kuala-lumpur', 'langkawi'],
            'dates'     => ['2014-05-12', '2014-05-16'],
            'detail'    => '',
        ],
        [
            'code'      => 'hhq2013',
            'country'   => 'TH',
            'filter'    => 'southeast-asia',
            'title'     => 'ชะอำ/หัวหิน Retreat with GrapeVine 2013',
            'locations' => ['hua-hin', 'cha-am'],
            'dates'     => ['2013-03-XX'],
            'detail'    => '',
        ],
        [
            'code'      => 'sin2012b',
            'country'   => 'SG',
            'filter'    => 'southeast-asia',
            'title'     => 'Singapore 2012 Again!',
            'locations' => ['singapore'],
            'dates'     => ['2012-08-11', '2012-08-13'],
            'detail'    => '',
        ],
        [
            'code'      => 'sin2012a',
            'country'   => 'SG',
            'filter'    => 'southeast-asia',
            'title'     => 'Singapore 2012',
            'locations' => ['singapore'],
            'dates'     => ['2012-04-27', '2012-05-01'],
            'detail'    => '',
        ],
        [
            'code'      => 'cvg2010',
            'country'   => 'US',
            'filter'    => 'america',
            'title'     => 'Work-Travel Trip @ Cincinnati!',
            'locations' => ['cincinnati', 'covington', 'newport', 'chicago', 'new-york-city'],
            'dates'     => ['2010-03-16', '2010-06-07'],
            'detail'    => '',
        ],
        [
            'code'      => 'sin2006',
            'country'   => 'SG',
            'filter'    => 'southeast-asia',
            'title'     => 'Singapore School Trip 2006',
            'locations' => ['singapore'],
            'dates'     => ['2006-04-09', '2006-04-18'],
            'detail'    => '',
        ]
    ];

    private array $bucket_lists = [
        // 2026
        [
            'code'      => 'bungee-jumping',
            'filter'    => 'adventure',
            'title'     => 'Bungee Jumping',
            'locations' => ['singapore'],
            'dates'     => ['2026-08-14']
        ],
        [
            'code'      => 'first-note-of-love',
            'filter'    => 'pilgrimage',
            'title'     => 'First Note of Love 彈一場完美戀愛',
            'locations' => ['kaohsiung'],
            'dates'     => ['2026-08-02'],
            'link'      => 'https://lee.ratinan.com/en/blog-post/826/first-note-of-love-pilgrimage'
        ],
        [
            'code'      => 'wishing-upon-the-shooting-stars',
            'filter'    => 'pilgrimage',
            'title'     => 'Wishing Upon the Shooting Stars 向流星許願的我們',
            'locations' => ['kaohsiung', 'chiayi'],
            'dates'     => ['2026-08-02', '2026-08-04'],
            'link'      => 'https://lee.ratinan.com/en/blog-post/828/wishing-upon-the-shooting-stars-pilgrimage'
        ],
        [
            'code'      => 'fuji-sighting',
            'filter'    => 'cultural',
            'title'     => 'Fuji Sighting　富士山',
            'locations' => ['tokyo'],
            'dates'     => ['2026-01-XX']
        ],
        [
            'code'      => 'tokyo-city-view',
            'filter'    => 'observatory',
            'title'     => 'Tokyo City View',
            'locations' => ['tokyo'],
            'dates'     => ['2026-01-12']
        ],
        [
            'code'      => 'kobe-port-tower',
            'filter'    => 'observatory',
            'title'     => 'Kobe Port Tower 神戸ポートタワー',
            'locations' => ['kobe'],
            'dates'     => ['2026-01-09']
        ],
        [
            'code'      => 'conan-town',
            'filter'    => 'pilgrimage',
            'title'     => 'Conan Town コナンタウン',
            'locations' => ['hokuei'],
            'dates'     => ['2026-01-07'],
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/285/conan-town-pilgrimage'
        ],
        [
            'code'      => 'lost-ship-in-the-sky',
            'filter'    => 'pilgrimage',
            'title'     => 'Lost Ship in the Sky 天空の難破船',
            'locations' => ['nara', 'osaka'],
            'dates'     => ['2026-01-06'],
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/281/lost-ship-in-the-sky-pilgrimage'
        ],
        // 2025
        [
            'code'      => 'indoor-skydiving',
            'filter'    => 'adventure',
            'title'     => 'Indoor Skydiving',
            'locations' => ['bandar-utama'],
            'dates'     => ['2025-04-27']
        ],
        // 2024
        [
            'code'      => 'yangmingshan',
            'filter'    => 'others',
            'title'     => 'Hike at Yangmingshan',
            'locations' => ['taipei'],
            'dates'     => ['2024-10-27'],
        ],
        [
            'code'      => 'xiangshan',
            'filter'    => 'others',
            'title'     => 'Hike at Xiangshan',
            'locations' => ['taipei'],
            'dates'     => ['2024-10-26'],
        ],
        [
            'code'      => 'the-only-one',
            'filter'    => 'pilgrimage',
            'title'     => 'The On1y One 某某',
            'locations' => ['taipei'],
            'dates'     => ['2024-10-25'],
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/202/the-on1y-one-pilgrimage'
        ],
        [
            'code'      => 'capybara',
            'filter'    => 'others',
            'title'     => 'Meet Capybara',
            'locations' => ['hualien'],
            'dates'     => ['2024-10-24'],
        ],
        [
            'code'      => 'taiwanese-aboriginal-clothes',
            'filter'    => 'cultural',
            'title'     => 'Taiwanese Aboriginal Clothes',
            'locations' => ['hualien'],
            'dates'     => ['2024-10-23']
        ],
        [
            'code'      => 'komtar-tower',
            'filter'    => 'observatory',
            'title'     => 'KOMTAR Tower',
            'locations' => ['george-town'],
            'dates'     => ['2024-06-22']
        ],
        [
            'code'      => 'archery',
            'filter'    => 'adventure',
            'title'     => 'Archery',
            'locations' => ['osaka', 'hualien'],
            'dates'     => ['2024-04-25', '2024-10-23', '2026-08-16']
        ],
        [
            'code'      => 'tsutenkaku-tower',
            'filter'    => 'observatory',
            'title'     => 'Tsutenkaku Tower 通天閣',
            'locations' => ['osaka'],
            'dates'     => ['2024-05-01']
        ],
        [
            'code'      => 'shibuya-scramble-square',
            'filter'    => 'observatory',
            'title'     => 'Shibuya Scramble Square 渋谷スクランブルスクエア',
            'locations' => ['tokyo'],
            'dates'     => ['2024-04-30']
        ],
        [
            'code'      => 'your-name',
            'filter'    => 'pilgrimage',
            'title'     => 'Your Name 君の名は',
            'locations' => ['tokyo'],
            'dates'     => ['2024-04-29', '2026-01-XX'],
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/184/kimi-no-na-wa-pilgrimage'
        ],
        [
            'code'      => 'shinkansen',
            'filter'    => 'others',
            'title'     => 'Shinkansen 新幹線',
            'locations' => ['kyoto', 'tokyo', 'osaka', 'himeji', 'kobe'],
            'dates'     => ['2024-04-27', '2024-05-01', '2026-01-XX'],
        ],
        [
            'code'      => 'crossroad-in-the-ancient-capital',
            'filter'    => 'pilgrimage',
            'title'     => 'Crossroad In the Ancient Capital 迷宮の十字路',
            'locations' => ['kyoto'],
            'dates'     => ['2024-04-26', '2026-01-10'],
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/186/crossroad-in-the-ancient-capital-pilgrimage'
        ],
        [
            'code'      => 'abeno-harukas',
            'filter'    => 'observatory',
            'title'     => 'Abeno Harukas あべのハルカス',
            'locations' => ['osaka'],
            'dates'     => ['2024-04-25']
        ],
        [
            'code'      => 'umeda-sky-building',
            'filter'    => 'observatory',
            'title'     => 'Umeda Sky Building 梅田スカイビル',
            'locations' => ['osaka'],
            'dates'     => ['2024-04-25']
        ],
        [
            'code'      => 'seshin',
            'filter'    => 'cultural',
            'title'     => 'Seshin 세신',
            'locations' => ['pattaya', 'osaka'],
            'dates'     => ['2024-02-08', '2024-05-01'],
        ],
        [
            'code'      => 'surfing-flowrider',
            'filter'    => 'adventure',
            'title'     => 'Surfing (FlowRider)',
            'locations' => ['pattaya', 'bandar-utama', 'phuket'],
            'dates'     => ['2024-02-06', '2025-04-26', '2025-11-15']
        ],
        // 2023
        [
            'code'      => 'pride-parade',
            'filter'    => 'cultural',
            'title'     => 'Pride Parade',
            'locations' => ['taipei'],
            'dates'     => ['2023-10-28', '2024-10-26'],
        ],
        [
            'code'      => 'surfing',
            'filter'    => 'adventure',
            'title'     => 'Surfing',
            'locations' => ['bali'],
            'dates'     => ['2023-10-18']
        ],
        [
            'code'      => 'scuba-diving',
            'filter'    => 'adventure',
            'title'     => 'Scuba Diving',
            'locations' => ['bali'],
            'dates'     => ['2023-10-18']
        ],
        [
            'code'      => 'balinese-clothes',
            'filter'    => 'cultural',
            'title'     => 'Balinese Clothes',
            'locations' => ['bali'],
            'dates'     => ['2023-10-16']
        ],
        [
            'code'      => 'canyoneering',
            'filter'    => 'adventure',
            'title'     => 'Canyoneering',
            'locations' => ['alegria'],
            'dates'     => ['2023-07-04']
        ],
        // 2022
        [
            'code'      => 'bitexco-financial-tower',
            'filter'    => 'observatory',
            'title'     => 'Bitexco Financial Tower Tháp Tài chính Bitexco',
            'locations' => ['ho-chi-minh-city'],
            'dates'     => ['2022-10-30']
        ],
        [
            'code'      => 'vincom-landmark-81',
            'filter'    => 'observatory',
            'title'     => 'Vincom Landmark 81',
            'locations' => ['ho-chi-minh-city'],
            'dates'     => ['2022-10-29']
        ],
        [
            'code'      => 'mahanakhon',
            'filter'    => 'observatory',
            'title'     => 'Mahanakhon มหานคร',
            'locations' => ['bangkok'],
            'dates'     => ['2022-05-23', '2025-03-06']
        ],
        [
            'code'      => 'naturist-resort',
            'filter'    => 'cultural',
            'title'     => 'Naturist Resort',
            'locations' => ['phuket', 'pattaya'],
            'dates'     => ['2022-05-XX', '2024-02-XX'],
        ],
        [
            'code'      => 'zip-lining',
            'filter'    => 'adventure',
            'title'     => 'Zip-lining',
            'locations' => ['phuket'],
            'dates'     => ['2022-05-18']
        ],
        [
            'code'      => 'jet-skiing',
            'filter'    => 'adventure',
            'title'     => 'Jet-skiing',
            'locations' => ['phuket'],
            'dates'     => ['2022-05-17']
        ],
        [
            'code'      => 'parasailing',
            'filter'    => 'adventure',
            'title'     => 'Parasailing',
            'locations' => ['phuket'],
            'dates'     => ['2022-05-17']
        ],
        [
            'code'      => 'snorkeling',
            'filter'    => 'adventure',
            'title'     => 'Snorkeling',
            'locations' => ['phuket', 'mactan', 'bali'],
            'dates'     => ['2022-05-16', '2023-07-02', '2023-10-17', '2025-11-15']
        ],
        // 2021
        // 2020
        [
            'code'      => 'marina-bay-sands',
            'filter'    => 'observatory',
            'title'     => 'Marina Bay Sands',
            'locations' => ['singapore'],
            'dates'     => ['2020-12-05', '2022-08-14']
        ],
        // 2019
        [
            'code'      => 'penguin',
            'filter'    => 'others',
            'title'     => 'See Penguins in natural habitat',
            'locations' => ['melbourne'],
            'dates'     => ['2019-10-25']
        ],
        [
            'code'      => 'eureka-tower',
            'filter'    => 'observatory',
            'title'     => 'Eureka Tower',
            'locations' => ['melbourne'],
            'dates'     => ['2019-10-22']
        ],
        [
            'code'      => 'harry-potter',
            'filter'    => 'pilgrimage',
            'title'     => 'Harry Potter',
            'locations' => ['melbourne', 'osaka', 'tokyo'],
            'dates'     => ['2019-10-23', '2024-04-23', '2024-04-27', '2026-01-12', '2026-08-14'],
            'link'      => 'https://lee.ratinan.com/[[LOCALE]]/blog-post/188/harry-potter-pilgrimage'
        ],
        [
            'code'      => 'nude-beach',
            'filter'    => 'cultural',
            'title'     => 'Nude Beach',
            'locations' => ['sydney'],
            'dates'     => ['2019-10-20']
        ],
        [
            'code'      => 'blue-mountains',
            'filter'    => 'others',
            'title'     => 'Hike at Blue Mountains',
            'locations' => ['sydney'],
            'dates'     => ['2019-10-18']
        ],
        [
            'code'      => 'sydney-tower',
            'filter'    => 'observatory',
            'title'     => 'Sydney Tower',
            'locations' => ['sydney'],
            'dates'     => ['2019-10-17']
        ],
        [
            'code'      => 'sydney-opera-house',
            'filter'    => 'others',
            'title'     => 'Visit Sydney Opera House',
            'locations' => ['sydney'],
            'dates'     => ['2019-10-17']
        ],
        [
            'code'      => 'airbus-380',
            'filter'    => 'others',
            'title'     => 'Airbus 380',
            'locations' => ['singapore'],
            'dates'     => ['2019-10-16'],
        ],
        [
            'code'      => 'indoor-rock-climbing',
            'filter'    => 'adventure',
            'title'     => 'Indoor Rock Climbing',
            'locations' => ['singapore', 'bangkok'],
            'dates'     => ['2019-08-XX', '2019-10-XX']
        ],
        // 2018
        [
            'code'      => 'taiwan-hsr',
            'filter'    => 'others',
            'title'     => 'Taiwan HSR 台灣高鐵',
            'locations' => ['taipei', 'taichung', 'kaohsiung', 'chiayi', 'tainan', 'taoyuan'],
            'dates'     => ['2018-11-14', '2026-08-XX'],
        ],
        [
            'code'      => 'taipei-101',
            'filter'    => 'observatory',
            'title'     => 'Taipei 101 台北一〇一',
            'locations' => ['taipei'],
            'dates'     => ['2018-11-12', '2023-10-26']
        ],
        // 2017
        [
            'code'      => 'thai-traditional-clothes',
            'filter'    => 'cultural',
            'title'     => 'Thai Traditional Clothes ชุดไทย',
            'locations' => ['kanchanaburi', 'bangkok'],
            'dates'     => ['2017-10-11', '2025-03-09']
        ],
        // 2016
        [
            'code'      => 'tokyo-tower',
            'filter'    => 'observatory',
            'title'     => 'Tokyo Tower 東京タワー',
            'locations' => ['tokyo'],
            'dates'     => ['2016-06-XX']
        ],
        [
            'code'      => 'tokyo-skytree',
            'filter'    => 'observatory',
            'title'     => 'Tokyo Skytree 東京スカイツリー',
            'locations' => ['tokyo'],
            'dates'     => ['2016-06-XX', '2024-04-29']
        ],
        [
            'code'      => 'yukata',
            'filter'    => 'cultural',
            'title'     => 'Yukata 浴衣',
            'locations' => ['singapore', 'bangkok', 'pattaya', 'tokyo', 'tottori', 'osaka'],
            'dates'     => [],
            'since'     => 2016
        ],
        [
            'code'      => 'capsule-hotel',
            'filter'    => 'cultural',
            'title'     => 'Capsule Hotel',
            'locations' => ['tokyo', 'kuala-lumpur', 'sydney', 'singapore'],
            'dates'     => [],
            'since'     => 2016
        ],
        [
            'code'      => 'onsen',
            'filter'    => 'cultural',
            'title'     => 'Onsen, Sento　温泉と銭湯',
            'locations' => ['tokyo', 'singapore', 'taipei', 'arimaonsen', 'osaka', 'kinosakionsen'],
            'dates'     => [],
            'since'     => 2016
        ],
        // 2015
        [
            'code'      => 'get-msc',
            'filter'    => 'others',
            'title'     => 'Get Masters Degree',
            'locations' => ['singapore'],
            'dates'     => ['2015-07-XX']
        ],
        // 2014
        [
            'code'      => 'petronas-towers',
            'filter'    => 'observatory',
            'title'     => 'Petronas Towers',
            'locations' => ['kuala-lumpur'],
            'dates'     => ['2014-05-13']
        ],
        // 2013
        // 2012
        // 2011
        // 2010
        [
            'code'      => 'empire-state-building',
            'filter'    => 'observatory',
            'title'     => 'Empire State Building',
            'locations' => ['new-york-city'],
            'dates'     => ['2010-06-XX']
        ],
        [
            'code'      => '30-rockefeller-plaza',
            'filter'    => 'observatory',
            'title'     => '30 Rockefeller Plaza',
            'locations' => ['new-york-city'],
            'dates'     => ['2010-06-XX']
        ],
        [
            'code'      => 'willis-tower',
            'filter'    => 'observatory',
            'title'     => 'Willis Tower',
            'locations' => ['chicago'],
            'dates'     => ['2010-04-XX']
        ],
    ];

    private array $trip_details = [
        'tpe2026' => [
            'date'      => '115年8月2～5日',
            'itinerary' => [
                [
                    'date'  => '8月2日（日）高雄市',
                    'lines' => [
                        ['✈️', 'SIN新加坡～TPE台灣桃園（TR866 Scoot B789）'],
                        ['🚄', '高鐵：台北～左營'],
                        ['🚈', '左營～高雄車站'],
                        ['', '高雄車站'],
                        ['', '💆 按摩'],
                        ['', 'Dome of Light@美麗島站'],
                        ['', 'FOCUS 13 珊瑚廣場'],
                        ['', '高雄流行音樂中心'],
                        ['', '大港橋'],
                        ['⛴️', '旗津老街'],
                        ['', '一號船渠景觀橋'],
                        ['', '新濱町海洋廚房'],
                        ['', 'The Pier Garden'],
                        ['🚄', '高鐵：左營～台北'],
                    ]
                ],
                [
                    'date'  => '8月3日（一）台中是，台北市',
                    'lines' => [
                        ['🚄', '高鐵：台北～台中'],
                        ['', 'Miyahara 宮原眼科'],
                        ['', '審計新村'],
                        ['', '文心森林公園'],
                        ['🚄', '高鐵：台中～台北'],
                        ['♨️', '溫泉'],
                        ['', '士林夜市'],
                    ]
                ],
                [
                    'date'  => '8月4日（二）嘉義市，台南市，台北市',
                    'lines' => [
                        ['🚄', '高鐵：台北～嘉義'],
                        ['', '北香湖公園'],
                        ['', 'Hinoki Village 檜意森活村'],
                        ['', '嘉義舊監獄'],
                        ['🚄', '高鐵：嘉義～台南'],
                        ['', 'Mitsui Outlet Park'],
                        ['🚄', '高鐵：台南～台北'],
                        ['', '國立中正紀念堂'],
                        ['', '💆 按摩'],
                        ['', '士林夜市'],
                        ['', '西門町'],
                    ]
                ],
                [
                    'date'  => '8月5日（三）台北市，桃園市',
                    'lines' => [
                        ['', '西門町'],
                        ['🚄', '高鐵：台北～桃園'],
                        ['', 'Gloria Outlets 華泰名品城'],
                        ['✈️', 'TPE台灣桃園～SIN新加坡（TR867 Scoot B789）'],
                    ]
                ],
            ],
            'budget'    => [
                'title'      => '細節',
                'totals'     => '總計',
                'currencies' => ['SGD', 'TWD'],
                'lines'      => [
                    ['✈️', 'Scoot（新加坡～台灣桃園）', 334.21, 0],
                    ['🛏️', '品格子旅店北車館', 91.92, 0],
                    ['🚄', 'Taiwan Pass', 79.69, 0],
                    ['🚄', '高鐵：台北～左營', 0, 2890]
                ]
            ]
        ],
        'kix2026' => [
            'date'      => '令和8年1月6〜15日',
            'itinerary' => [
                [
                    'date'  => '1月6日（火）大阪市、奈良市',
                    'lines' => [
                        ['✈️', 'SINシンガポール〜KIX大阪（MM774 Peach Aviation A321LR)'],
                        ['', '「大阪関西空港」'],
                        ['🚈', 'はるか（関西空港〜梅田）'],
                        ['🛏', 'チェックイン（ファーストキャビン西梅田）'],
                        ['🚈', '近鉄電車：（難波〜奈良）'],
                        ['', '<b class="text-danger">名探偵コナン</b> 奈良公園、興福寺、JR奈良駅'],
                        ['🚈', '近鉄電車：（奈良〜難波）'],
                        ['', '<b class="text-danger">名探偵コナン</b> 道頓堀'],
                    ]
                ],
                [
                    'date'  => '1月7日（水）北栄町、鳥取市',
                    'lines' => [
                        ['🛏', 'チェックアウト（ファーストキャビン西梅田）'],
                        ['🚈', 'スーパーはくと（大阪〜倉吉）'],
                        ['🚈', '山陰線（倉吉〜由良）'],
                        [
                            '', '<b class="text-danger">名探偵コナン</b> 北栄：青山剛昌ふるさと館、コナン通り、コナンの家、米花商店街'
                        ],
                        ['🚈', '山陰線（由良〜鳥取）'],
                        ['🛏', 'チェックイン（アパホテル鳥取駅前南）'],
                    ]
                ],
                [
                    'date'  => '1月8日（木）城崎温泉',
                    'lines' => [
                        ['🛏', 'チェックアウト（アパホテル鳥取駅前南）'],
                        ['🚈', '山陰線（鳥取〜城崎温泉）'],
                        ['', '♨️一の湯、♨️地蔵湯、♨️鴻の湯、♨️まだら湯'],
                        ['🚈', 'はまかぜ（城崎温泉〜姫路）'],
                        ['🚄', '新幹線（姫路〜新大阪）'],
                        ['🛏', 'チェックイン（ファーストキャビン西梅田）'],
                    ]
                ],
                [
                    'date'  => '1月9日（金）姫路市、神戸市、大阪市',
                    'lines' => [
                        ['🚄', '新幹線（新大阪〜姫路）'],
                        ['', '姫路城'],
                        ['🚄', '新幹線（姫路〜新神戸）'],
                        ['', '神戸ポートタワー、神戸港、神戸港震災メモリアルパーク'],
                        ['🚈', 'JR線（三宮〜梅田）'],
                        ['', '💆マッサージ'],
                    ]
                ],
                [
                    'date'  => '1月10日（土）京都市',
                    'lines' => [
                        ['🛏', 'チェックアウト（ファーストキャビン西梅田）'],
                        ['🚈', 'JR線（梅田〜京都）'],
                        ['🛏', 'チェックイン（ピースホステル）'],
                        [
                            '', '<b class="text-danger">名探偵コナン</b> 五条大橋、五条天神宮、六角堂、弁慶石、蹴上インクライン、義経地蔵、清水寺、先斗町'
                        ],
                    ]
                ],
                [
                    'date'  => '1月11日（日）宇治市、鞍馬、京都市',
                    'lines' => [
                        ['🚈', 'JR奈良線（京都〜宇治）'],
                        ['', '宇治、買い物'],
                        ['🚈', 'JR奈良線（宇治〜東福寺）'],
                        ['🚈', '京阪線（東福寺〜出町柳）、叡山鞍馬線（出町柳〜鞍馬）'],
                        ['', '鞍馬時、♨️鞍馬温泉'],
                        ['🚈', '叡山鞍馬線（鞍馬〜出町柳）、京阪線（出町柳〜七条）'],
                    ]
                ],
                [
                    'date'  => '1月12日（月）東京市',
                    'lines' => [
                        ['🛏', 'チェックアウト（ピースホステル）'],
                        ['🚄', 'のぞみ新幹線（京都〜東京）'],
                        ['🚈', '中央線（東京〜新宿）'],
                        ['🛏', 'チェックイン（安心お宿新宿）'],
                        [
                            '', '<b class="text-warning">Harry Potter</b> ワーナー ブラザース スタジオツアー東京 - メイキング・オブ・ハリー・ポッター'
                        ],
                        ['', '<b class="text-info">君の名は</b> 東京シティビュー'],
                    ]
                ],
                [
                    'date'  => '1月13日（火）富士山',
                    'lines' => [
                        ['🗻', '富士山：LAWSONコンビニ、大石公園、忍野八海、新倉山浅間公園、富士吉田'],
                        ['', '＊池袋に友達と晩ご飯を食べる'],
                    ]
                ],
                [
                    'date'  => '1月14日（水）東京市',
                    'lines' => [
                        ['', '渋谷スカイ'],
                        ['🛏', 'チェックアウト（安心お宿新宿）'],
                        ['🛏', 'チェックイン（アパホテル新宿御苑前）'],
                        ['', '明治神宮'],
                        ['', '<b class="text-info">君の名は</b> カフェラ・ボエム、須賀神社'],
                        ['', '＊新橋に友達と晩ご飯を食べる'],
                    ]
                ],
                [
                    'date'  => '1月15日（木）東京市',
                    'lines' => [
                        ['🛏', 'チェックアウト（アパホテル新宿御苑前）'],
                        ['', '新宿の猫、ゴジラヘッド、渋谷のハチ公、上野'],
                        ['', '<b class="text-info">君の名は</b> 聖徳記念絵画館'],
                        ['🚈', '山手線（新宿〜上野）'],
                        ['🚈', '京成スカイライナー（上野〜成田空港第１ターミナル）'],
                        ['', '「東京成田空港」'],
                        ['✈️', 'NRT東京〜SINシンガポール（NQ3 Air Japan B788)'],
                    ]
                ],
            ],
            'budget'    => [
                'title'      => '詳細',
                'totals'     => '合計',
                'currencies' => ['SGD', 'JPY'],
                'lines'      => [
                    ['✈️', 'ピーチ（シンガポール〜大阪）', 335.57, 0],
                    ['✈️', 'エアージャパン（東京〜シンガポール）', 263.79, 0],
                    ['🚈', 'はるか（関西空港〜梅田）1800円', 14.65, 0],
                    ['🚈', '関西ワイドエリアパス（5日間）12000円', 100.09, 0],
                    ['🚈', '京都1日券パス', 0, 1100],
                    ['🚈', 'のぞみ新幹線　13970円', 120.86, 0],
                    ['🚈', '東京メトロ72時間パス', 19.95, 0],
                    ['🚈', '京成スカイライナー（上野〜成田空港）', 10.00, 0],
                    ['🛏️', '大阪：ファーストキャビン西梅田（１泊）', 55.67, 0],
                    ['🛏️', '鳥取：アパホテル鳥取駅前南（１泊）', 47.40, 0],
                    ['🛏️', '大阪：ファーストキャビン西梅田（２泊）', 124.07, 0],
                    ['🛏️', '京都：ピースホステル（２泊）', 62.61, 0],
                    ['🛏️', '東京：安心お宿新宿駅前店（２泊）', 113.26, 0],
                    ['🛏️', '東京：アパホテル新宿御苑前（１泊）', 112.36, 0],
                    ['', '富士山デーツアー', 60.05, 0],
                    ['', 'メイキング・オブ・ハリー・ポッター', 58.25, 0],
                    ['', '渋谷スカイ', 23.00, 0],
                    ['', '東京シティビュー', 10.05, 0],
                    ['', '青山剛昌ふるさと館', 0, 600],
                    ['', '城崎温泉1日間パス', 0, 1500],
                    ['', '姫路城', 0, 1000],
                    ['', '神戸ポートタワー', 0, 1200],
                    ['', '清水寺', 0, 500],
                    ['', '鞍馬温泉', 0, 2700],
                ]
            ]
        ],
        'hkt2025' => [
            'date'      => '14-17 พ.ย. 2568',
            'itinerary' => [
                [
                    'date' => '14 พ.ย. (ศ) ป่าตอง, กะรน',
                    'lines' => [
                        ['✈️', 'SIN สิงคโปร์ - HKT ภูเก็ต (TR656 Scoot A321neo)'],
                        ['🛏', 'เช็คอิน (The Bloc Hotel)'],
                        ['', 'ชมวิว ร้าน เสื่อผืนหมอนใบ'],
                        ['', 'มื้อเย็น Goodfellas Pizzeria Phuket'],
                        ['', 'ซื้อของ Jungceylon'],
                    ]
                ],
                [
                    'date' => '15 พ.ย. (ส) เกาะไข่ใน, หมู่เกาะพีพี, เกาะไม้ต้น',
                    'lines' => [
                        ['🤿', 'ทริปดำน้ำ (เกาะพีพี)'],
                        ['', '- เกาะไข่ใน - เล่นน้ำ เดินเล่นชายหาด'],
                        ['', '- หาดต้นไทร, เกาะพีพีดอน - มื้อกลางวัน เดินเล่น'],
                        ['', '- อ่าวปิเละ - เล่นน้ำ ดำน้ำ (snorkeling)'],
                        ['', '- อ่าวมาหยา - เดินเล่น ชมอ่าว ถ่ายรูป'],
                        ['', '- เกาะพีพีเล - ดำน้ำ (snorkeling)'],
                        ['', '- เกาะไม้ต้น - ดำน้ำ (snorkeling), เล่นน้ำ'],
                        ['', '* เข้าเขต จ. พังงา และ จ. กระบี่'],
                        ['', 'Central Festival Phuket'],
                        ['', 'มื้อเย็น BBQ Plaza'],
                        ['', 'นวด (Rassanee Massage)']
                    ]
                ],
                [
                    'date' => '16 พ.ย. (อา) กะรน, ราไวย์, เมืองภูเก็ต, ป่าตอง',
                    'lines' => [
                        ['🚗', 'ทริปรอบภูเก็ต (คนขับรถส่วนตัว)'],
                        ['', '- หาดกะรน, แหลมพรหมเทพ, วัดฉลอง'],
                        ['', '- Tiger Park - ถ่ายรูปกับเสือ'],
                        ['', '- King Power Duty Free - ซื้อของ'],
                        ['', '- มื้อกลางวัน วันจันทร์ คาเฟ่'],
                        ['', '* อาหารขึ้นชื่อ: หมูฮ้อง, โอ้เอ๋ว'],
                        ['', '- Lion House Phuket - ถ่ายรูปสิงโต'],
                        ['', '- ตัวเมืองเก่าภูเก็ต (Phuket Old Town) - ตลาดนัด'],
                        ['🏄‍♂️', 'เล่น FlowRider'],
                    ]
                ],
                [
                    'date' => '17 พ.ย. (จ) ป่าตอง',
                    'lines' => [
                        ['', 'เดินเล่นชายหาด, ว่ายน้ำ, พักผ่อน'],
                        ['🛏', 'เช็คเอาท์ (The Bloc Hotel)'],
                        ['', 'สมุทรบาร์ (โรงแรมอามารี ป่าตอง)'],
                        ['', 'มื้อกลางวัน Jungceylon'],
                        ['', 'นวด (Kim’s Massage)'],
                        ['✈️', 'HKT ภูเก็ต - SIN สิงคโปร์ (TR653 Scoot A321neo)']
                    ]
                ]
            ],
            'budget'    => [
                'title'      => 'รายการ',
                'totals'     => 'ทั้งหมด',
                'currencies' => ['SGD', 'THB'],
                'lines'      => [
                    ['✈️', 'Scoot สิงคโปร์-ภูเก็ต ไป/กลับ (2 คน ทั้งหมด S$446.70)', 223.35, 0],
                    ['🛏️', 'The Bloc Hotel (3 คืน) (2 คน ทั้งหมด S$516.45)', 258.23, 0],
                    ['', 'ทริปดำน้ำ', 81.68, 0],
                    ['', 'คนขับรถส่วนตัว 1 วัน', 55.93, 0],
                    ['', 'FlowRider', 0, 1280]
                ]
            ]
        ],
        'kul2025' => [
            'date'      => '22-30 Apr 2025',
            'itinerary' => [
                [
                    'date'  => '22-25 Apr',
                    'lines' => [
                        ['✈️', 'SIN Singapura - KUL Kuala Lumpur (AK702 AirAsia A320)'],
                        ['🛏', 'Daftar masuk (M World Hotel)'],
                        ['', 'Bekerja di Bandar Utama'],
                        ['', 'FitnessFirst @ The Curve'],
                    ]
                ],
                [
                    'date'  => '26 Apr (S)',
                    'lines' => [
                        ['', 'Berenang di hotel'],
                        ['', '1 Utama: FlowRider'],
                        ['🚇', 'Pergi ke Kuala Lumpur'],
                        ['', 'Berjalan-jalan di Bukit Bintang'],
                        ['', 'Taman KLCC'],
                        ['', 'The Exchange 106'],
                        ['', 'Merdeka 118']
                    ]
                ],
                [
                    'date'  => '27 Apr (Su)',
                    'lines' => [
                        ['', '1 Utama: WINDLAB: Indoor Skydiving'],
                        ['🚇', 'Pergi ke Kuala Lumpur'],
                        ['', 'Massage'],
                        ['', 'Pavillion Bukit Bintang']
                    ]
                ],
                [
                    'date'  => '28-30 Apr',
                    'lines' => [
                        ['', 'Bekerja di Bandar Utama'],
                        ['', 'FitnessFirst @ The Curve'],
                        ['🛏', 'Daftar keluar (M World Hotel)'],
                        ['✈️', 'KUL Kuala Lumpur - SIN Singapura (AK717 AirAsia A320)']
                    ]
                ]
            ],
            'budget'    => [
                'title'      => 'Butiran',
                'totals'     => 'Jumlah',
                'currencies' => ['SGD', 'MYR'],
                'lines'      => [
                    ['✈️', 'AirAsia', 0, 0],
                    ['🛏️', 'M World Hotel', 0, 0],
                    ['', 'FlowRider', 0, 65],
                    ['', 'WINDLAB Indoor Skydiving', 0, 173],
                ]
            ]
        ],
        'bkk2025' => [
            'date' => '6-10 มี.ค. 2568',
            'itinerary' => [
                [
                    'date' => '6 มี.ค. กรุงเทพฯ',
                    'lines' => [
                        ['✈️', 'SIN สิงคโปร์ - BKK สุวรรณภูมิ (3K511 JetStar A320)'],
                        ['🛏', 'เช็คอิน (มาวิน สเปซ)'],
                        ['', 'ศาลท้าวมหาพรหมเอราวัณ'],
                        ['', 'ชมวิว ตึกมหานคร (MahaNakhon SkyWalk)<br/>- นิทรรศการ SkyVerse<br/>- มื้อเย็น MahaNakhon Cube'],
                    ]
                ],
                [
                    'date' => '7 มี.ค. กรุงเทพฯ',
                    'lines' => [
                        ['', 'ซาฟารีเวิลด์ (Safari World)<br/>- นั่งรถชมรอบสวน Safari Park<br/>- เดินชมรอบสวนส่วนคนเดิน<br/>- ให้อาหารสัตว์ (ยีราฟ, จิงโจ้ ฯลฯ) และดูโชว์ช้างแสนรู้<br/>- มื้อกลางวันในสวน'],
                        ['', 'The Mustang Blu: ของว่างยามบ่าย'],
                        ['', 'เยาวราช: ซื้อของกิน'],
                    ]
                ],
                [
                    'date' => '8 มี.ค. กรุงเทพฯ',
                    'lines' => [
                        ['', 'พักผ่อน'],
                        ['🛏', 'เช็คเอาท์ (มาวิน สเปซ)'],
                        ['🛏', 'เช็คอิน (โรงแรมอครา กรุงเทพ)'],
                        ['', 'ตลาดนัดจตุจักร'],
                        ['', 'พักผ่อนที่โรงแรม'],
                        ['', 'มื้อเย็น: ข้าวมันไก่ โกอ่าง'],
                        ['', 'CentralWorld'],
                        ['', 'Siam Paragon'],
                    ]
                ],
                [
                    'date' => '9 มี.ค. กรุงเทพฯ',
                    'lines' => [
                        ['', 'วัดอรุณราชวรารามราชวรมหาวิหาร'],
                        ['', 'ICONSIAM'],
                        ['', 'พักผ่อนที่โรงแรม, ว่ายน้ำ'],
                        ['', 'Rooftop Bar ที่โรงแรม'],
                    ]
                ],
                [
                    'date' => '',
                    'lines' => [
                        ['🛏', 'เช็คเอาท์ (โรงแรมอครา กรุงเทพ)'],
                        ['', 'CentralWorld'],
                        ['', '湯の森温泉 (ยูโนะโมริ สาธร 10)'],
                        ['✈️', 'BKK สุวรรณภูมิ - SIN สิงคโปร์ (3K514 JetStar A320)'],
                    ]
                ],
            ],
            'budget' => [
                'title'      => 'รายการค่าใช้จ่าย',
                'totals'     => 'รวมทั้งสิ้น',
                'currencies' => ['SGD', 'THB'],
                'lines'      => [
                    ['✈️', 'Scoot สิงคโปร์-สุวรรณภูมิ ไป/กลับ (2 คน ทั้งหมด S$429.14)', 214.57, 0],
                    ['🛏️', 'มาวิน สเปซ (2 คืน) (2 คน ทั้งหมด S$109.04)', 54.52, 0],
                    ['🛏️', 'โรงแรมอครา กรุงเทพ (2 คืน) (2 คน ทั้งหมด S$216.60)', 108.30, 0],
                    ['', 'ชั้นชมวิว มหานคร', 0, 1200],
                    ['', 'ซาฟารีเวิลด์ (ค่าเข้า + ค่ารถวนรอบสวน)', 0, 900],
                    ['', 'ถ่ายรูปวัดอรุณ Molly House Studio', 0, 900],
                    ['', 'ยูโนะโมริ', 0, 650]
                ]
            ]
        ]
    ];

    private array $bucket_lists_to_fill = [
        'observatory' => [
            'lotte-world-tower'      => ['title' => 'Lotter World Tower', 'location' => ['seoul']],
            'merdeka-118'            => ['title' => 'Merdeka 118', 'location' => ['kuala-lumpur']],
            'tokyo-metropolitan'     => ['title' => 'Tokyo Metropolitan Government Building', 'location' => ['tokyo']],
            '30-hudson-yards'        => ['title' => '30 Hudson Yards', 'location' => ['new-york-city']],
            'n-seoul-tower'          => ['title' => 'Namsan Seoul Tower', 'location' => ['seoul']],
            'one-world-trade-center' => ['title' => 'One World Trade Center', 'location' => ['new-york-city']],
            'sky-tower'              => ['title' => 'Sky Tower', 'location' => ['auckland']],
            'space-needle'           => ['title' => 'Space Needle', 'location' => ['seattle']],
            'cn-tower'               => ['title' => 'CN Tower', 'location' => ['toronto']],
        ],
        'adventure'   => [
            'skiing'       => ['title' => 'Skiing', 'location' => ['nagano']],
            'wakeboarding' => ['title' => 'Wakeboarding', 'location' => []],
            'canoeing'     => ['title' => 'Canoeing', 'location' => []],
        ],
        'cultural'    => [
            'korean-clothes'           => ['title' => 'Korean Clothes', 'location' => ['south-korea']],
            'sumo'                     => ['title' => 'Sumo', 'location' => ['japan']],
            'sakura-sighting'          => ['title' => 'Sakura Sighting', 'location' => ['japan']],
            'cruising'                 => ['title' => 'Cruising', 'location' => ['high-sea']],
            'aurora-borealis-sighting' => ['title' => 'Aurora borealis sighting', 'location' => []],
            'ice-hotel'                => ['title' => 'Ice Hotel (Jukkasjärvi)', 'location' => []],
            'jjimjibang'               => ['title' => 'Jjimjibang', 'location' => ['south-korea']],
            'ryokan'                   => ['title' => 'Ryokan', 'location' => ['japan']],
        ],
        'pilgrimage'  => [
            'angels-and-demons'            => ['title' => 'Angels and Demons', 'location' => ['rome', 'vatican-city']],
            'da-vinci-code'                => [
                'title' => 'The Da Vinci Code', 'location' => ['paris', 'london', 'roslin-scotland']
            ],
            'inferno'                      => ['title' => 'Inferno', 'location' => ['florence', 'venice', 'istanbul']],
            'origin'                       => ['title' => 'Origin', 'location' => ['bilbao', 'madrid', 'barcelona']],
            'secret-of-secrets'            => [
                'title' => 'Secret Of Secrets', 'location' => ['prague', 'london', 'new-york-city']
            ],
            'one-eyed-flashback'           => ['title' => 'One-Eyed Flashback', 'location' => ['nagano', 'tokyo']],
            'the-million-dollar-pentagram' => ['title'    => 'The Million-dollar Pentagram',
                                               'location' => ['sapporo', 'hakodate']
            ],
            'sherlock-holmes'              => ['title' => 'Sherlock Holmes', 'location' => ['london']],
            'the-lord-of-the-rings'        => ['title' => 'The Lord of the Rings', 'location' => ['new-zealand']],
            'spider-man-far-from-home'     => ['title'    => 'Spider-man: Far From Home',
                                               'location' => ['venice', 'prague', 'london']
            ]
        ],
        'others'      => [
            'ktx-train'              => ['title' => 'KTX Train', 'location' => ['south-korea']],
            'yosemite-national-park' => ['title' => 'Yosemite National Park', 'location' => ['california']],
            'naturist-trip'          => ['title' => 'Join a naturist trip', 'location' => []],
            'get-mba'                => ['title' => 'Get MBA', 'location' => ['sydney']],
        ]
    ];

    /**
     * Get locale
     */
    private function getLocale(): string
    {
        $supported = $this->business_card_languages;
        $header    = $this->request->getServer('HTTP_ACCEPT_LANGUAGE');
        $override  = $this->request->getGet('hl');
        // Use override language first, from ?hl=XX
        if (!empty($override) && in_array($override, $supported)) {
            return $override;
        }
        // If it's not there, use the languages from the header
        if (!empty($header)) {
            $parts = explode(',', $header);
            foreach ($parts as $part) {
                $sub_parts    = explode(';q=', trim($part));
                $language_tag = trim($sub_parts[0]);
                $lang_code    = strtolower(explode('-', $language_tag)[0]);
                if (in_array($lang_code, $supported)) {
                    // This will never work with zh-TW and en-Shaw, but we don't care en-Shaw
                    return $lang_code;
                } else if ($lang_code == 'zh') {
                    return 'zh-TW';
                }
            }
        }
        return $supported[0];
    }

    /**
     * Home page
     * @return string
     */
    public function index(): string
    {
        $data = [
            'slug'   => 'home',
            'locale' => $this->request->getLocale()
        ];
        return view('home', $data);
    }

    /**
     * Personal Life page
     * @return string
     */
    public function personal_life(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'slug'                 => 'personal-life',
            'locale'               => $locale,
            'galleries'            => $this->trips,
            'bucket_lists'         => $this->bucket_lists,
            'bucket_lists_to_fill' => $this->bucket_lists_to_fill,
        ];
        return view('personal_life', $data);
    }

    /**
     * Certifications page
     * @return string
     */
    public function certifications(): string
    {
        $locale = $this->request->getLocale();
        $data = [
            'slug'         => 'certifications',
            'locale'       => $locale,
            'certificates' => [
                'academic'     => [
                    'primary'   => [
                        [
                            lang('Certifications.data.primary'),
                            lang('Certifications.data.ptd'),
                            format_date(['2002-03-29'], $locale),
                            'https://drive.google.com/file/d/10ViQHpZiz-kUiVnKbYXcPtvavwh3xyPo/view?usp=sharing'
                        ],
                    ],
                    'secondary' => [
                        [
                            lang('Certifications.data.junior-high'),
                            lang('Certifications.data.hwn'),
                            format_date(['2005-03-31'], $locale),
                            'https://drive.google.com/file/d/10QZRJ9KK4KeKAlpMDHA7BpYICmh3zRDt/view?usp=sharing',
                        ],
                        [
                            lang('Certifications.data.senior-high'),
                            lang('Certifications.data.hwn'),
                            format_date(['2008-03-31'], $locale),
                            'https://drive.google.com/file/d/10MLhTM_ojBrlIdXQH4PpFkZ9lE_i4-iF/view?usp=sharing'
                        ],
                    ],
                    'tertiary'  => [
                        [
                            lang('Certifications.data.bsc'),
                            lang('Certifications.data.thammasat-university'),
                            format_date(['2012-03-31'], $locale),
                            'https://drive.google.com/file/d/1roWRsOGKt-LQhI26jbHAhe037hIqBP0X/view?usp=sharing'
                        ],
                        [
                            lang('Certifications.data.msc'),
                            lang('Certifications.data.nanyang-technological-university'),
                            format_date(['2015-07-01'], $locale),
                            'https://drive.google.com/file/d/1oxnmnAjZW2qXWWwZNaObFYOf1zTdTOWg/view?usp=sharing'
                        ],
//                        [
//                            lang('Certifications.data.mba'),
//                            lang('Certifications.data.australia'),
//                            lang('Certifications.data.future.by-2029'),
//                            ''
//                        ]
                    ],
                ],
                'professional' => [
                    'AWS'            => [
                        [
                            'AWS Fundamentals',
                            'Coursera / AWS',
                            format_date(['2024-08-18'], $locale),
                            'https://drive.google.com/file/d/10rcXIhelLxR69IzRz9S7Xgy8esqtRO8-/view?usp=sharing'
                        ],
                        [
                            'AWS Cloud Practitioner Essentials',
                            'Coursera / AWS',
                            format_date(['2024-09-09'], $locale),
                            'https://drive.google.com/file/d/10xufFvuFwHpsnfkcH95oDEhpQpqi1ULs/view?usp=sharing'
                        ],
                    ],
                    'Google'         => [
                        [
                            'Google ProjectManagement',
                            'Coursera / Google',
                            format_date(['2024-09-06'], $locale),
                            'https://drive.google.com/file/d/10awMV64SaHAWuO0upOjSokFS06CcOLn6/view?usp=sharing'
                        ],
                        [
                            'Google AI Essentials',
                            'Coursera / Google',
                            format_date(['2024-09-12'], $locale),
                            'https://drive.google.com/file/d/10jpbZByUaNmu0_s3WfM_zgr1Fb27zCLz/view?usp=sharing'
                        ],
                        [
                            'Google UX Design',
                            'Coursera / Google',
                            format_date(['2024-09-24'], $locale),
                            'https://drive.google.com/file/d/10ouk8JgocsF2Ja2-1rYETea8xWnhzccx/view?usp=sharing'
                        ],
                        [
                            'Google Data Analytics',
                            'Coursera / Google',
                            format_date(['2024-10-10'], $locale),
                            'https://drive.google.com/file/d/10lrFQfwTKMfPK3p3YzQHInBL7FQ3bLSd/view?usp=sharing'
                        ],
                    ],
                    'Scrum Alliance' => [
                        [
                            'CSM (Certified ScrumMaster)',
                            'Scrum Alliance',
                            format_date(['2025-02-09'], $locale),
                            'https://drive.google.com/file/d/1UX9LUM3Zub8dcc8AFOxrDhXmc20IDti5/view?usp=sharing'
                        ],
                    ],
                    'Scrum.org'      => [
                        [
                            'PSM I (Professional Scrum Master)',
                            'Scrum.org',
                            format_date(['2024-10-02'], $locale),
                            'https://drive.google.com/file/d/1-oclvFtaaWkdJh7IuQ5C7f5u1FW3vX7v/view?usp=sharing'
                        ],
                        [
                            'PSM II (Professional Scrum Master)',
                            'Scrum.org',
                            format_date(['2024-11-17'], $locale),
                            'https://drive.google.com/file/d/1-pHldM2W9NPDHUZPofa-KlFke5XHUaZx/view?usp=sharing'
                        ],
//                        [
//                            'PSM III (Professional Scrum Master)',
//                            'Scrum.org',
//                            lang('Certifications.data.future.by-2030'),
//                            ''
//                        ],
                        [
                            'PSPO I (Professional Scrum Product Owner)',
                            'Scrum.org',
                            format_date(['2024-10-16'], $locale),
                            'https://drive.google.com/file/d/1-pwoQ_ZiirRcddUA66Q4tv5YT_5Re-Nw/view?usp=sharing'
                        ],
                        [
                            'PSPO II (Professional Scrum Product Owner)',
                            'Scrum.org',
                            format_date(['2025-02-05'], $locale),
                            'https://drive.google.com/file/d/16RU0OgvyPdeLw8anCE8khn9z8UCKKhRu/view?usp=sharing'
                        ],
//                        [
//                            'PSM III (Professional Scrum Master)',
//                            'Scrum.org',
//                            lang('Certifications.data.future.by-2030'),
//                            ''
//                        ],
                    ],
                ],
                'others'       => [
                    'languages' => [
                        'english'   => [
                            [
                                'Test of English Proficiency (CU-TEP): ~B1 Intermediate',
                                'Chulalongkorn University Academic Testing Center',
                                format_date(['2007-11-04'], $locale),
                                'https://drive.google.com/file/d/1nlDMxBIC4RE7o0Fi70o009jEd7BSw-EV/view?usp=sharing'
                            ],
                            [
                                'General English Test (TU-GET): ~B2-C1 Intermediate-Advanced',
                                'Language Institute, Thammasat University',
                                format_date(['2010-09-00'], $locale),
                                'https://drive.google.com/file/d/1MbfI1rGCHA5kVHA4ggB47asY6RXxKoB6/view?usp=sharing'
                            ],
                            [
                                'EF SET Certificate: C2 Proficient',
                                'Education First (EF)',
                                format_date(['2025-08-08'], $locale),
                                'https://drive.google.com/file/d/18piWVwM1u3UT2zCmABG8uasEyYcuMHdv/view?usp=sharing',
                            ],
                        ],
                        'japanese'  => [
                            [
                                '日本語ビギナーコース',
                                'Tomo Japanese Language School',
                                format_date(['2025-09-22'], $locale),
                                'https://drive.google.com/file/d/1lD7jXK5PMW8M7DS0BmxXCS-aqq_X0GTA/view?usp=sharing'
                            ],
//                            [
//                                lang('Certifications.data.jlpt') . ' N5',
//                                lang('Certifications.data.jlpt-body'),
//                                lang('Certifications.data.future.by-2026'),
//                                ''
//                            ],
//                            [
//                                lang('Certifications.data.jlpt') . ' N4',
//                                lang('Certifications.data.jlpt-body'),
//                                lang('Certifications.data.future.by-2027'),
//                                ''
//                            ]
                        ],
//                        'taiwanese' => [
//                            [
//                                lang('Certifications.data.tocfl'),
//                                lang('Certifications.data.tocfl-body'), // Steering Committee for the Test Of Proficiency-Huayu
//                                lang('Certifications.data.future.by-2030'),
//                                ''
//                            ]
//                        ]
                    ]
                ]
            ]
        ];
        return view('certifications', $data);
    }

    /**
     * Portfolio page
     * @return string
     */
    public function portfolio(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'slug'   => 'portfolio',
            'locale' => $locale
        ];
        return view('portfolio', $data);
    }

    /**
     * Writing page
     * @return string
     */
    public function writing(): string
    {
        $locale = $this->request->getLocale();
        $data   = [
            'slug'   => 'writing',
            'locale' => $locale
        ];
        return view('writing', $data);
    }

    /**
     * Calendar page
     * @return string
     */
    public function calendar(): string
    {
        $data = [
            'slug'   => 'calendar',
            'locale' => $this->request->getLocale()
        ];
        return view('calendar', $data);
    }

    /**
     * Trip page
     * @return string
     */
    public function trip(): string
    {
        $data = [
            'slug'    => 'trip',
            'locale'  => $this->request->getLocale(),
            'trips'   => $this->trips,
            'details' => $this->trip_details,
        ];
        return view('trip', $data);
    }

    /**
     * Trip data page
     * @param string $trip_code
     * @return string
     */
    public function trip_data(string $trip_code): string
    {
        if (!isset($this->trip_details[$trip_code])) {
            throw PageNotFoundException::forPageNotFound();
        }
        $trip_main_detail = [];
        foreach ($this->trips as $row) {
            if ($trip_code === $row['code']) {
                $trip_main_detail = $row;
                break;
            }
        }
        $data = [
            'slug'   => 'trip/' . $trip_code,
            'locale' => $this->request->getLocale(),
            'trip'   => $trip_main_detail,
            'detail' => $this->trip_details[$trip_code],
        ];
        return view('trip_data', $data);
    }

    /**
     * Blog page
     * @return string
     */
    public function blog(): string
    {
        $mode = $this->request->getGet('m') ?? '';
        if (!in_array($mode, ['tags', 'categories'])) {
            $mode = 'posts';
        }
        $id   = $this->request->getGet('id') ?? 0;
        $ms   = $this->request->getGet('ms') ?? '';
        $data = [
            'slug'   => 'blog',
            'mode'   => $mode,
            'id'     => $id,
            'ms'     => $ms,
            'locale' => $this->request->getLocale()
        ];
        return view('blog', $data);
    }

    /**
     * Blog Post page
     * @param int $id
     * @param string $slug
     * @return string
     */
    public function blog_post(int $id, string $slug): string
    {
        $data = [
            'slug'      => 'blog-post',
            'post_id'   => $id,
            'post_slug' => '/' . $id . '/' . $slug,
            'locale'    => $this->request->getLocale()
        ];
        return view('blog-post', $data);
    }

    /**
     * Redirect to WhatsApp
     * @return RedirectResponse
     */
    public function whatsapp(): RedirectResponse
    {
        return redirect()->to('https://api.whatsapp.com/send/?phone=6597754577&text=Hi+Nat%2C+I+clicked+this+link+from+your+personal+website.+Can+we+chat%3F&type=phone_number&app_absent=0');
    }

    /**
     * Business Card page
     * @return string
     */
    public function business_card(): string
    {
        $locale       = $this->getLocale();
        $translations = [
            'en'         => [
                'business-card'  => 'Business Card',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'MSc, PSM™ I-II, PSPO™ I-II<br/><small>Singapore Permanent Residence (PR)</small>',
                'education'      => 'Education',
                'educations'     => [
                    'Master of Science in Information Systems<br>Wee Kim Wee School of Communication and Information, Nanyang Technological University',
                    'Bachelor of Science in Computer Science (First Class Honors)<br>Sirindhorn International Institute of Technology, Thammasat University'
                ],
                'certification'  => 'Certifications',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => 'Language Proficiency Level',
                'languages'      => [
                    'English: CEFR C2 Level (Proficient)',
                    'Thai: Native',
                    'Japanese: Beginner (expected to get JLPT N5 by December 2026)',
                    'Taiwanese Mandarin: Beginner (approx. CEFR A1 Level)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI',
                        'value' => 'INFP-T (Mediator)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 Hogwarts House',
                        'value' => '🔵 Ravenclaw'
                    ],
                    'half-blood' => [
                        'label' => 'Camp Half-Blood Cabin',
                        'value' => 'Athena'
                    ]
                ],
                'resume' => [
                    'title'           => 'Resume',
                    'tech-lead'       => 'Technical Lead',
                    'project-manager' => 'Project Manager',
                    'scrum-master'    => 'Scrum Master',
                ]
            ],
            'th'         => [
                'business-card'  => 'นามบัตร',
                'name'           => 'รตินันท์ “นัท” ลีลางามวงศา',
                'tagline'        => 'วท.ม., PSM™ I-II, PSPO™ I-II<br/><small>ผู้อาศัยถาวรในสิงคโปร์ (Singapore PR)</small>',
                'education'      => 'การศึกษา',
                'educations'     => [
                    'วิทยาศาสตรมหาบัณฑิต สาขาระบบสารสนเทศ<br>วิทยาลัยการสื่อสารและสารสนเทศวีคิมวี มหาวิทยาลัยเทคโนโลยีนันยาง',
                    'วิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ (เกียรตินิยมอันดับหนึ่ง)<br>สถาบันเทคโนโลยีนานาชาติสิรินธร มหาวิทยาลัยธรรมศาสตร์',
                ],
                'certification'  => 'ประกาศนียบัตรวิชาชีพ',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => 'ความสามารถทางภาษา',
                'languages'      => [
                    'ภาษาอังกฤษ: CEFR ระดับ C2 (เชี่ยวชาญ)',
                    'ภาษาไทย: เจ้าของภาษา',
                    'ภาษาญี่ปุ่น: ระดับต้น (คาดว่าจะได้ระดับ JLPT N5 ภายใน ธ.ค. 2569)',
                    'ภาษาจีนไต้หวัน: ระดับต้น (ประมาณ CEFR ระดับ A1)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ บุคลิกภาพ MBTI',
                        'value' => 'INFP-T (ผู้ไกล่เกลี่ย)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 ฮอกวอตส์',
                        'value' => '🔵 บ้านเรเวนคลอ'
                    ],
                    'half-blood' => [
                        'label' => 'บ้านพักค่ายฮาล์ฟบลัด',
                        'value' => 'อาธีน่า'
                    ]
                ],
                'resume' => [
                    'title'           => 'เรซูเม่',
                    'tech-lead'       => 'หัวหน้าทีมเทคนิค',
                    'project-manager' => 'ผู้จัดการโครงการ',
                    'scrum-master'    => 'สกรัมมาสเตอร์',
                ]
            ],
            'ja'         => [
                'business-card'  => '名刺',
                'name'           => '力川エイキン（ラティナン・リー）',
                'tagline'        => '<span class="upright">理学修士（MSc）、PSM 1〜2、PSPO 1〜2</span>',
                'education'      => '学歴',
                'educations'     => [
                    '情報システム理学修士<br>南洋理工大学 ウィー・キム・ウィー情報コミュニケーション学部',
                    'コンピュータサイエンス理学学士（第一級優等学位）<br>タマサート大学・シリンドーン国際工学部'
                ],
                'certification'  => '認定資格',
                'certifications' => [
                    '<span class="upright">PSM 1〜2</span>（プロフェッショナルスクラムマスター）',
                    '<span class="upright">PSPO 1〜2</span>（プロフェッショナルスクラムプロダクトオーナー）',
                    '<span class="upright">CSM</span>（認定スクラムマスター）',
                    'グーグル <span class="upright">AI</span> エッセンシャル'
                ],
                'language'       => '語学能力',
                'languages'      => [
                    '英語：<span class="upright">CEFR C2</span> レベル（熟達）',
                    'タイ語：母語',
                    '日本語：初級（<span class="upright">2026年12月に JLPT N5</span> 取得予定）',
                    '台湾華語：初級（<span class="upright">CEFR A1</span> 相当）'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI診断',
                        'value' => 'INFP-T (仲介者)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 ホグワーツの寮',
                        'value' => '🔵 レイブンクロー'
                    ],
                    'half-blood' => [
                        'label' => 'ハーフ訓練所のキャビン',
                        'value' => 'アテナ'
                    ]
                ],
                'resume' => [
                    'title'           => '履歴書',
                    'tech-lead'       => 'テクニカルリード',
                    'project-manager' => 'プロジェクトマネージャー',
                    'scrum-master'    => 'スクラムマスター',
                ]
            ],
            'zh-TW'      => [
                'business-card'  => '名片',
                'name'           => '李榮欽',
                'tagline'        => '<span class="upright">理學碩士、PSM 1，2、PSPO 1，2</span>',
                'education'      => '學歷',
                'educations'     => [
                    '資訊系統理學碩士<br>南洋理工大學・黃金輝傳播與信息學院',
                    '電腦科學理學學士（一等榮譽）<br>泰國法政大學・席琳通國際科技學院'
                ],
                'certification'  => '認證',
                'certifications' => [
                    '<span class="upright">PSM 1，2</span> (Professional Scrum Master)',
                    '<span class="upright">PSPO 1，2</span> (Professional Scrum product Owner)',
                    '<span class="upright">CSM</span> (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => '語言能力',
                'languages'      => [
                    '英語：<span class="upright">CEFR C2</span> 等級（精通）',
                    '泰語：母語',
                    '日語：初級（預計於 <span class="upright">2026年12月</span>取得 <span class="upright">JLPT N5</span>）',
                    '國語：初級（約 <span class="upright">CEFR A1</span> 等級）'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI 人格類型',
                        'value' => 'INFP-T (調停者)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 霍格華茲學院',
                        'value' => '🔵 雷文克勞'
                    ],
                    'half-blood' => [
                        'label' => '混血營小屋',
                        'value' => '雅典娜'
                    ]
                ],
                'resume' => [
                    'title'           => '履歷',
                    'tech-lead'       => '技術主管',
                    'project-manager' => '專案經理',
                    'scrum-master'    => 'Scrum Master',
                ]
            ],
            'en-Shaw'    => [
                'business-card'  => '𐑚𐑦𐑟𐑯𐑩𐑕 𐑒𐑸𐑛',
                'name'           => '·𐑮𐑳𐑑𐑦𐑯𐑳𐑯 “𐑯𐑨𐑑” 𐑤𐑰',
                'tagline'        => 'MSc, PSM™ I-II, PSPO™ I-II',
                'education'      => '𐑧𐑡𐑩𐑒𐑱𐑖𐑩𐑯',
                'educations'     => [
                    '𐑥𐑭𐑕𐑑𐑼 𐑝 𐑕𐑲𐑩𐑯𐑕 𐑦𐑯 𐑦𐑯𐑓𐑼𐑥𐑱𐑖𐑩𐑯 𐑕𐑦𐑕𐑑𐑩𐑥𐑟<br>𐑢𐑰 𐑒𐑦𐑥 𐑢𐑰 𐑕𐑒𐑵𐑤 𐑝 𐑒𐑩𐑥𐑿𐑯𐑦𐑒𐑱𐑖𐑩𐑯 𐑯 𐑦𐑯𐑓𐑼𐑥𐑱𐑖𐑩𐑯, 𐑯𐑳𐑯𐑘𐑭𐑙 𐑑𐑧𐑒𐑯𐑩𐑤𐑪𐑡𐑦𐑒𐑩𐑤 𐑿𐑯𐑦𐑝𐑻𐑕𐑦𐑑𐑦',
                    '𐑚𐑨𐑗𐑩𐑤𐑼 𐑝 𐑕𐑲𐑩𐑯𐑕 𐑦𐑯 𐑒𐑩𐑥𐑐𐑿𐑑𐑼 𐑕𐑲𐑩𐑯𐑕 (𐑓𐑻𐑕𐑑 𐑒𐑤𐑭𐑕 𐑪𐑯𐑼𐑟)<br>𐑕𐑦𐑮𐑦𐑯𐑑𐑷𐑯 𐑦𐑯𐑑𐑼𐑯𐑨𐑖𐑩𐑯𐑩𐑤 𐑦𐑯𐑕𐑑𐑦𐑑𐑿𐑑 𐑝 𐑑𐑧𐑒𐑯𐑪𐑤𐑩𐑡𐑦, 𐑑𐑳𐑥𐑳𐑕𐑭𐑑 𐑿𐑯𐑦𐑝𐑻𐑕𐑦𐑑𐑦'
                ],
                'certification'  => '𐑕𐑻𐑑𐑦𐑓𐑦𐑒𐑱𐑖𐑩𐑯𐑟',
                'certifications' => [
                    'PSM I, II (𐑐𐑮𐑩𐑓𐑧𐑖𐑩𐑯𐑩𐑤 𐑕𐑒𐑮𐑳𐑥 𐑥𐑭𐑕𐑑𐑼)',
                    'PSPO I, II (𐑐𐑮𐑩𐑓𐑧𐑖𐑩𐑯𐑩𐑤 𐑕𐑒𐑮𐑳𐑥 𐑐𐑮𐑪𐑛𐑳𐑒𐑑 𐑴𐑯𐑼)',
                    'CSM (𐑕𐑻𐑑𐑦𐑓𐑲𐑛 𐑕𐑒𐑮𐑳𐑥 𐑥𐑭𐑕𐑑𐑼)',
                    '𐑜𐑵𐑜𐑩𐑤 AI 𐑦𐑕𐑧𐑯𐑖𐑩𐑤𐑟'
                ],
                'language'       => '𐑤𐑨𐑙𐑜𐑢𐑦𐑡𐑩𐑟',
                'languages'      => [
                    '𐑦𐑙𐑜𐑤𐑦𐑖:: CEFR C2 𐑤𐑧𐑝𐑩𐑤 (𐑐𐑮𐑩𐑓𐑦𐑖𐑩𐑯𐑑)',
                    '𐑑𐑲: 𐑯𐑱𐑑𐑦𐑝',
                    '𐑡𐑨𐑐𐑩𐑯𐑰𐑟: 𐑚𐑦𐑜𐑦𐑯𐑼 (𐑦𐑒𐑕𐑐𐑧𐑒𐑑𐑩𐑛 𐑑 𐑜𐑧𐑑 JLPT N5 𐑚𐑲 𐑛𐑦𐑕𐑧𐑥𐑚𐑼 2026)',
                    '𐑑𐑲𐑢𐑩𐑯𐑰𐑟 𐑥𐑨𐑯𐑛𐑼𐑦𐑯: 𐑚𐑦𐑜𐑦𐑯𐑼 (𐑩𐑐𐑮𐑪𐑒𐑕𐑦𐑥𐑩𐑑𐑤𐑦 CEFR A1 𐑤𐑧𐑝𐑩𐑤)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI',
                        'value' => 'INFP-T (𐑥𐑰𐑛𐑦𐑱𐑑𐑼)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 𐑣𐑪𐑜𐑢𐑹𐑑𐑕',
                        'value' => '🔵 𐑮𐑱𐑝𐑩𐑯𐑒𐑤𐑷'
                    ],
                    'half-blood' => [
                        'label' => '𐑒𐑨𐑥𐑐 𐑣𐑨𐑓-𐑚𐑤𐑳𐑛 𐑒𐑨𐑚𐑦𐑯',
                        'value' => '𐑩𐑔𐑰𐑯𐑩'
                    ]
                ],
                'resume' => [
                    'title'           => '𐑮𐑧𐑟𐑿𐑥𐑱',
                    'tech-lead'       => '𐑑𐑧𐑒𐑯𐑦𐑒𐑩𐑤 𐑤𐑰𐑛',
                    'project-manager' => '𐑐𐑮𐑪𐑡𐑧𐑒𐑑 𐑥𐑨𐑯𐑦𐑡𐑼',
                    'scrum-master'    => '𐑕𐑒𐑮𐑳𐑥 𐑥𐑭𐑕𐑑𐑼',
                ]
            ],
            'ko'         => [
                'business-card'  => '명함',
                'name'           => '이영흠',
                'tagline'        => '이학석사(M.Sc.), PSM™ I–II, PSPO™ I–II',
                'education'      => '학력',
                'educations'     => [
                    '정보시스템 이학석사<br>난양공과대학교 위 킴 위 커뮤니케이션·정보대학',
                    '컴퓨터과학 이학사 (일등급 우등 졸업)<br>탐마삿 대학교 시린돈 국제기술학부'
                ],
                'certification'  => '자격증',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    '구글 AI Essentials'
                ],
                'language'       => '언어능력수준',
                'languages'      => [
                    '영어: CEFR C2 레벨 (능숙)',
                    '태국어: 원어민 수준',
                    '일본어: 초급 (2026년12월까지 JLPT N5 취득 예정)',
                    '대만어: 초급 (CEFR A1 레벨 정도)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI 성격 유형',
                        'value' => 'INFP-T (중재자)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 호그와트 기숙사',
                        'value' => '🔵 래번클로'
                    ],
                    'half-blood' => [
                        'label' => '카사 하프 블러드 캐빈',
                        'value' => '아테나'
                    ]
                ],
                'resume' => [
                    'title'           => '이력서',
                    'tech-lead'       => '기술 리더',
                    'project-manager' => '프로젝트 매니저',
                    'scrum-master'    => '스크럼 마스터',
                ]
            ],
            'id'         => [
                'business-card'  => 'Kartu name',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'M.Sc., PSM™ I–II, PSPO™ I–II',
                'education'      => 'Pendidikan',
                'educations'     => [
                    'Magister Sains dalam Sistem Informasi<br>Sekolah Komunikasi dan Informasi Wee Kim Wee, Universitas Teknologi Nanyang',
                    'Sarjana Sains dalam Ilmu Komputer (First Class Honours)<br>Institut Teknologi Internasional Sirindhorn, Universitas Thammasat'
                ],
                'certification'  => 'Sertifikasi',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => 'Tingkat Kemahiran Bahasa',
                'languages'      => [
                    'Bahasa Inggris: Tingkat CEFR C2 (mahir)',
                    'Bahasa Thailand: Tingkat penutur asli',
                    'Bahasa Jepang: Pemula (diharapkan mencapai JLPT N5 pada Desember 2026)',
                    'Bahasa Taiwan: Pemula (kira-kira tingkat CEFR A1)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI',
                        'value' => 'INFP-T (Mediator)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 Asrama Hogwarts',
                        'value' => '🔵 Ravenclaw'
                    ],
                    'half-blood' => [
                        'label' => 'Kabin Camp Half-Blood',
                        'value' => 'Athena'
                    ]
                ],
                'resume' => [
                    'title'           => 'Resume',
                    'tech-lead'       => 'Pemimpin Teknis',
                    'project-manager' => 'Manajer Proyek',
                    'scrum-master'    => 'Scrum Master',
                ]
            ],
            'vi'         => [
                'business-card'  => 'Danh thiếp',
                'name'           => 'LÝ VINH KHÂM',
                'tagline'        => 'Thạc sĩ Khoa học (MSc), PSM™ I–II, PSPO™ I–II',
                'education'      => 'Học vấn',
                'educations'     => [
                    'Thạc sĩ Khoa học ngành Hệ thống Thông tin<br>Trường Truyền thông và Thông tin Wee Kim Wee, Đại học Công nghệ Nanyang',
                    'Cử nhân Khoa học ngành Khoa học Máy tính (Hạng Nhất Danh Dự)<br>Viện Công nghệ Quốc tế Sirindhorn, Đại học Thammasat'
                ],
                'certification'  => 'Chứng chỉ',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => 'Trình độ ngoại ngữ',
                'languages'      => [
                    'Tiếng Anh: Trình độ CEFR C2 (Thành thạo)',
                    'Tiếng Thái: Tiếng mẹ đẻ',
                    'Tiếng Nhật: Trình độ sơ cấp (dự kiến đạt JLPT N5 vào tháng 12 năm 2026)',
                    'Tiếng Đài Loan (tiếng Quan thoại): Trình độ sơ cấp (khoảng trình độ CEFR A1)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI',
                        'value' => 'INFP-T (Mediator)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 Nhà Hogwarts',
                        'value' => '🔵 Ravenclaw'
                    ],
                    'half-blood' => [
                        'label' => 'Trại Half-Blood',
                        'value' => 'Athena'
                    ]
                ],
                'resume' => [
                    'title'           => 'Sơ yếu lý lịch',
                    'tech-lead'       => 'Trưởng nhóm kỹ thuật',
                    'project-manager' => 'Quản lý dự án',
                    'scrum-master'    => 'Scrum Master',
                ]
            ],
            'lo'         => [
                'business-card'  => 'ນາມບັດ',
                'name'           => 'ຣະຕິນັນ “ນັດ” ລີລາງາມວົງສາ',
                'tagline'        => 'ປະລິນຍາໂທວິທະຍາສາດ, PSM™ I-II, PSPO™ I-II',
                'education'      => 'ການສຶກສາ',
                'educations'     => [
                    'ປະລິນຍາໂທວິທະຍາສາດສາຂາລະບົບຂໍ້ມູນຂ່າວສານ<br>ຄະນະການສື່ສານແລະຂໍ້ມູນຂ່າວສານ ວີກິມວີ, ມະຫາວິທະຍາໄລເຕັກໂນໂລຢີນັນຢາງ',
                    'ປະລິນຍາຕີວິທະຍາສາດສາຂາວິທະຍາສາດຄອມພິວເຕີ (ກຽດນິຍົມອັນດັບໜຶ່ງ)<br>ສະຖາບັນເຕັກໂນໂລຊີສາກົນສິຣິນທອນ, ມະຫາວິທະຍາໄລທຳມະສາດ'
                ],
                'certification'  => 'ໃບຮັບຮອງວິຊາຊີບ',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => 'ຄວາມສາມາດດ້ານພາສາ',
                'languages'      => [
                    'ພາສາອັງກິດ: CEFR ລະດັບ C2 (ຜູ້ຊ່ຽວຊານ)',
                    'ພາສາໄທ: ຜູ້ເວົ້າພາສາພື້ນເມືອງ',
                    'ພາສາຍີ່ປຸ່ນ: ຜູ້ເລີ່ມຕົ້ນ (ຄາດວ່າຈະບັນລຸ JLPT N5 ພາຍໃນເດືອນທັນວາ 2026)',
                    'ພາສາຈີນໄຕ້ຫວັນ: ຜູ້ເລີ່ມຕົ້ນ (ປະມານ CEFR ລະດັບ A1)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI',
                        'value' => 'INFP-T (ຜູ້ໄກ່ເກ່ຍ)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 ເຮືອນຮອກວອດສ໌',
                        'value' => '🔵 ເຣເວນຄລໍ'
                    ],
                    'half-blood' => [
                        'label' => 'ເຮືອນພັກເຄິ່ງເລືອດ',
                        'value' => 'ອາທີນາ'
                    ]
                ],
                'resume' => [
                    'title'           => 'ຊີວະປະຫວັດຫຍໍ້',
                    'tech-lead'       => 'ຫົວໜ້າດ້ານວິຊາການ',
                    'project-manager' => 'ຜູ້ຈັດການໂຄງການ',
                    'scrum-master'    => 'Scrum Master',
                ]
            ],
            'es'         => [
                'business-card'  => 'Tarjeta de visita',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'M.Sc., PSM™ I–II, PSPO™ I–II',
                'education'      => 'Formación Académica',
                'educations'     => [
                    'Maestría en Ciencias en Sistemas de Información<br>Escuela Wee Kim Wee de Comunicación e Información, Universidad Tecnológica de Nanyang',
                    'Licenciatura en Ciencias en Informática (Primera Clase con Honores)<br>Instituto Internacional de Tecnología Sirindhorn, Universidad de Thammasat'
                ],
                'certification'  => 'Certificaciones',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => 'Nivel de competencia lingüística',
                'languages'      => [
                    'Inglés: Nivel C2 del MCER (Competente)',
                    'Tailandés: Nativo',
                    'Japonés: Principiante (se espera obtener el JLPT N5 para diciembre de 2026)',
                    'Mandarín taiwanés: Principiante (aprox. Nivel A1 del MCER)'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI',
                        'value' => 'INFP-T (Mediador)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 Casa de Hogwarts',
                        'value' => '🔵 Ravenclaw'
                    ],
                    'half-blood' => [
                        'label' => 'Cabaña del Campamento Mestizo',
                        'value' => 'Atenea'
                    ]
                ],
                'resume' => [
                    'title'           => 'Currículum',
                    'tech-lead'       => 'Líder técnico',
                    'project-manager' => 'Gerente de proyecto',
                    'scrum-master'    => 'Scrum Master',
                ]
            ],
            'art-x-navi' => [
                'business-card'  => 'Business Card',
                'name'           => 'RATINAN “NAT” LEE',
                'tagline'        => 'MSc, PSM™ I-II, PSPO™ I-II',
                'education'      => 'numtseng',
                'educations'     => [
                    'sänumvi nìli a nawnùmtseng a säomum vefya<br>nanyang vefya tìftia nawnumtseng',
                    'sänumvi a nawnùmtseng a tìftia eltu lefngap<br>thammasat nawnumtseng'
                ],
                'certification'  => 'certifications',
                'certifications' => [
                    'PSM I, II (Professional Scrum Master™)',
                    'PSPO I, II (Professional Scrum product Owner™)',
                    'CSM (Certified Scrum Master)',
                    'Google AI Essentials'
                ],
                'language'       => '’engeng lì’fya',
                'languages'      => [
                    '‘ìnglìsì: ’engeng CEFR C2 (fnan)',
                    'thai: fnan',
                    'japanese: sngä’iyu',
                    'taiwanese mandarin: sngä’iyu'
                ],
                'badges'         => [
                    'mbti'       => [
                        'label' => '❤️ MBTI',
                        'value' => 'INFP-T (Mediator)'
                    ],
                    'hogwarts'   => [
                        'label' => '🪄 Hogwarts',
                        'value' => '🔵 Ravenclaw'
                    ],
                    'half-blood' => [
                        'label' => 'Camp Half-Blood',
                        'value' => 'Athena'
                    ]
                ],
                'resume' => [
                    'title'           => 'Resume',
                    'tech-lead'       => 'Technical Lead',
                    'project-manager' => 'Project Manager',
                    'scrum-master'    => 'Scrum Master',
                ]
            ],
        ];
        $data = [
            'locale'              => $locale,
            'hl'                  => $this->request->getGet('hl'),
            'supported_languages' => [
                'en'         => 'English',
                'th'         => 'ไทย',
                'ja'         => '日本語',
                'zh-TW'      => '國語',
                'en-Shaw'    => '𐑖𐑱𐑝𐑾𐑯',
                'ko'         => '한국어',
                'id'         => 'Indonesian',
                'vi'         => 'Tiếng Việt',
                'lo'         => 'ລາວ',
                'es'         => 'Español',
                'art-x-navi' => 'Na’vi tìpawm'
            ],
            'data'                => $translations[$locale],
            'links'               => [
                'whatsapp'           => base_url('whatsapp'),
                'telegram'           => 'https://t.me/rikikawa_eikin',
                'line'               => 'https://line.me/ti/p/ME2Tsnm9nr',
                'linkedin'           => 'https://www.linkedin.com/in/ratinanlee',
                'instagram'          => 'https://www.instagram.com/ratinanlee/',
                'github'             => 'https://github.com/lee-ratinan',
                'facebook-messenger' => 'https://www.messenger.com/t/lee.ratinan/',
                'facebook'           => 'https://www.facebook.com/lee.ratinan',
                'threads'            => 'https://www.threads.com/@ratinanlee'
            ],
            'translations' => [
                'en' => [
                    'whatsapp'           => 'WhatsApp',
                    'line'               => 'LINE',
                    'linkedin'           => 'LinkedIn',
                    'medium'             => 'Medium',
                    'instagram'          => 'Instagram',
                    'github'             => 'GitHub',
                    'facebook-messenger' => 'Messenger',
                    'facebook'           => 'Facebook',
                    'threads'            => 'Threads',
                    'telegram'           => 'Telegram',
                ],
                'th' => [
                    'line'      => 'ไลน์',
                    'instagram' => 'ไอจี',
                    'facebook'  => 'เฟซบุ๊ก',
                ]
            ],
            'professional_profiles' => [
                'Scrum.org'      => 'https://www.scrum.org/user/1457291',
                'Credly'         => 'https://www.credly.com/users/ratinanlee',
                'Scrum Alliance' => 'https://www.scrumalliance.org/members/1729850',
                'Fastwork'       => 'https://fastwork.co/user/ratinanlee',
//                'Upwork'         => 'https://www.upwork.com/freelancers/~01b5886610b13a2bb1',
            ]
        ];
        return view('business_card_2', $data);
    }
}
