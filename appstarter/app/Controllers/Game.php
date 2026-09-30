<?php

namespace App\Controllers;

class Game extends BaseController
{
    const NO_OF_QUESTIONS = 20;
    const NO_OF_CHOICES   = 4;

    public function index(): string
    {
        return view('game/index');
    }

    // SCRUM

    public function scrum(): string
    {
        return view('game/scrum');
    }

    // JAPANESE

    /**
     * @param array $types
     * @return array
     */
    private function japaneseRetrieveCharacters(array $types): array
    {
        $characters = [
            'hiragana' => [
                'a'  =>  ['a'   => 'あ', 'i' => 'い', 'u' => 'う', 'e' => 'え', 'o' => 'お'],
                'ka' =>  ['ka'  => 'か', 'ki' => 'き', 'ku' => 'く', 'ke' => 'け', 'ko' => 'こ'],
                'sa' =>  ['sa'  => 'さ', 'shi' => 'し', 'su' => 'す', 'se' => 'せ', 'so' => 'そ'],
                'ta' =>  ['ta'  => 'た', 'chi' => 'ち', 'tsu' => 'つ', 'te' => 'て', 'to' => 'と'],
                'na' =>  ['na'  => 'な', 'ni' => 'に', 'nu' => 'ぬ', 'ne' => 'ね', 'no' => 'の'],
                'ha' =>  ['ha'  => 'は', 'hi' => 'ひ', 'fu' => 'ふ', 'he' => 'へ', 'ho' => 'ほ'],
                'ma' =>  ['ma'  => 'ま', 'mi' => 'み', 'mu' => 'む', 'me' => 'め', 'mo' => 'も'],
                'ya' =>  ['ya'  => 'や', 'yu' => 'ゆ', 'yo' => 'よ'],
                'ra' =>  ['ra'  => 'ら', 'ri' => 'り', 'ru' => 'る', 're' => 'れ', 'ro' => 'ろ'],
                'wa' =>  ['wa'  => 'わ', 'wo' => 'を'],
                'n'  =>  ['n'   => 'ん'],
                'ga' =>  ['ga'  => 'が', 'gi' => 'ぎ', 'gu' => 'ぐ', 'ge' => 'げ', 'go' => 'ご'],
                'za' =>  ['za'  => 'ざ', 'ji' => 'じ', 'zu' => 'ず', 'ze' => 'ぜ', 'zo' => 'ぞ'],
                'da' =>  ['da'  => 'だ', 'ji' => 'ぢ', 'zu' => 'づ', 'de' => 'で', 'do' => 'ど'],
                'ba' =>  ['ba'  => 'ば', 'bi' => 'び', 'bu' => 'ぶ', 'be' => 'べ', 'bo' => 'ぼ'],
                'pa' =>  ['pa'  => 'ぱ', 'pi' => 'ぴ', 'pu' => 'ぷ', 'pe' => 'ぺ', 'po' => 'ぽ'],
                'kya' => ['kya' => 'きゃ', 'kyu' => 'きゅ', 'kyo' => 'きょ'],
                'sha' => ['sha' => 'しゃ', 'shu' => 'しゅ', 'sho' => 'しょ'],
                'cha' => ['cha' => 'ちゃ', 'chu' => 'ちゅ', 'cho' => 'ちょ'],
                'nya' => ['nya' => 'にゃ', 'nyu' => 'にゅ', 'nyo' => 'にょ'],
                'hya' => ['hya' => 'ひゃ', 'hyu' => 'ひゅ', 'hyo' => 'ひょ'],
                'mya' => ['mya' => 'みゃ', 'myu' => 'みゅ', 'myo' => 'みょ'],
                'rya' => ['rya' => 'りゃ', 'ryu' => 'りゅ', 'ryo' => 'りょ'],
                'gya' => ['gya' => 'ぎゃ', 'gyu' => 'ぎゅ', 'gyo' => 'ぎょ'],
                'ja'  => ['ja'  => 'じゃ', 'ju'  => 'じゅ', 'jo'  => 'じょ'],
                'bya' => ['bya' => 'びゃ', 'byu' => 'びゅ', 'byo' => 'びょ'],
                'pya' => ['pya' => 'ぴゃ', 'pyu' => 'ぴゅ', 'pyo' => 'ぴょ'],
            ],
            'katakana' => [
                'a'  =>  ['a'   => 'ア', 'i' => 'イ', 'u' => 'ウ', 'e' => 'エ', 'o' => 'オ'],
                'ka' =>  ['ka'  => 'カ', 'ki' => 'キ', 'ku' => 'ク', 'ke' => 'ケ', 'ko' => 'コ'],
                'sa' =>  ['sa'  => 'サ', 'shi' => 'シ', 'su' => 'ス', 'se' => 'セ', 'so' => 'ソ'],
                'ta' =>  ['ta'  => 'タ', 'chi' => 'チ', 'tsu' => 'ツ', 'te' => 'テ', 'to' => 'ト'],
                'na' =>  ['na'  => 'ナ', 'ni' => 'ニ', 'nu' => 'ヌ', 'ne' => 'ネ', 'no' => 'ノ'],
                'ha' =>  ['ha'  => 'ハ', 'hi' => 'ヒ', 'fu' => 'フ', 'he' => 'ヘ', 'ho' => 'ホ'],
                'ma' =>  ['ma'  => 'マ', 'mi' => 'ミ', 'mu' => 'ム', 'me' => 'メ', 'mo' => 'モ'],
                'ya' =>  ['ya'  => 'ヤ', 'yu' => 'ユ', 'yo' => 'ヨ'],
                'ra' =>  ['ra'  => 'ラ', 'ri' => 'リ', 'ru' => 'ル', 're' => 'レ', 'ro' => 'ロ'],
                'wa' =>  ['wa'  => 'ワ', 'wo' => 'ヲ'],
                'n'  =>  ['n'   => 'ン'],
                'ga' =>  ['ga'  => 'ガ', 'gi' => 'ギ', 'gu' => 'グ', 'ge' => 'ゲ', 'go' => 'ゴ'],
                'za' =>  ['za'  => 'ザ', 'ji' => 'ジ', 'zu' => 'ズ', 'ze' => 'ゼ', 'zo' => 'ゾ'],
                'da' =>  ['da'  => 'ダ', 'ji' => 'ヂ', 'zu' => 'ジ', 'de' => 'デ', 'do' => 'ド'],
                'ba' =>  ['ba'  => 'バ', 'bi' => 'ビ', 'bu' => 'ブ', 'be' => 'ベ', 'bo' => 'ボ'],
                'pa' =>  ['pa'  => 'パ', 'pi' => 'ピ', 'pu' => 'プ', 'pe' => 'ペ', 'po' => 'ポ'],
                'kya' => ['kya' => 'キャ', 'kyu' => 'キュ', 'kyo' => 'キョ'],
                'sha' => ['sha' => 'シャ', 'shu' => 'シュ', 'sho' => 'ショ'],
                'cha' => ['cha' => 'チャ', 'chu' => 'チュ', 'cho' => 'チョ'],
                'nya' => ['nya' => 'ニャ', 'nyu' => 'ニュ', 'nyo' => 'ニョ'],
                'hya' => ['hya' => 'ヒャ', 'hyu' => 'ヒュ', 'hyo' => 'ヒョ'],
                'mya' => ['mya' => 'ミャ', 'myu' => 'ミュ', 'myo' => 'ミョ'],
                'rya' => ['rya' => 'リャ', 'ryu' => 'リュ', 'ryo' => 'リョ'],
                'gya' => ['gya' => 'ギャ', 'gyu' => 'ギュ', 'gyo' => 'ギョ'],
                'ja'  => ['ja'  => 'ジャ', 'ju'  => 'ジュ', 'jo'  => 'ジョ'],
                'bya' => ['bya' => 'ビャ', 'byu' => 'ビュ', 'byo' => 'ビョ'],
                'pya' => ['pya' => 'ピャ', 'pyu' => 'ピュ', 'pyo' => 'ピョ'],
            ]
        ];
        $result_set = [];
        foreach ($types as $type) {
            $result_set[$type] = $characters[$type];
        }
        return $result_set;
    }

    private function japaneseRetrieveKanji(): array
    {
        return [
            ["kanji" => "一","kana" => "いち","reading" => "イチ","reading_type" => "onyomi","meaning" => "one"],
            ["kanji" => "二","kana" => "に","reading" => "ニ","reading_type" => "onyomi","meaning" => "two"],
            ["kanji" => "三","kana" => "さん","reading" => "サン","reading_type" => "onyomi","meaning" => "three"],
            ["kanji" => "四","kana" => "よん","reading" => "ヨン","reading_type" => "kunyomi","meaning" => "four"],
            ["kanji" => "五","kana" => "ご","reading" => "ゴ","reading_type" => "onyomi","meaning" => "five"],
            ["kanji" => "六","kana" => "ろく","reading" => "ロク","reading_type" => "onyomi","meaning" => "six"],
            ["kanji" => "七","kana" => "なな","reading" => "ナナ","reading_type" => "kunyomi","meaning" => "seven"],
            ["kanji" => "八","kana" => "はち","reading" => "ハチ","reading_type" => "onyomi","meaning" => "eight"],
            ["kanji" => "九","kana" => "きゅう","reading" => "キュウ","reading_type" => "onyomi","meaning" => "nine"],
            ["kanji" => "十","kana" => "じゅう","reading" => "ジュウ","reading_type" => "onyomi","meaning" => "ten"],
            ["kanji" => "百","kana" => "ひゃく","reading" => "ヒャク","reading_type" => "onyomi","meaning" => "hundred"],
            ["kanji" => "千","kana" => "せん","reading" => "セン","reading_type" => "onyomi","meaning" => "thousand"],
            ["kanji" => "万","kana" => "まん","reading" => "マン","reading_type" => "onyomi","meaning" => "ten thousand"],
            ["kanji" => "円","kana" => "えん","reading" => "エン","reading_type" => "onyomi","meaning" => "yen"],
            ["kanji" => "一人","kana" => "ひとり","reading" => "ヒトリ","reading_type" => "kunyomi","meaning" => "one person"],
            ["kanji" => "二人","kana" => "ふたり","reading" => "フタリ","reading_type" => "kunyomi","meaning" => "two people"],

            ["kanji" => "日","kana" => "ひ","reading" => "ヒ","reading_type" => "kunyomi","meaning" => "sun; day"],
            ["kanji" => "月","kana" => "つき","reading" => "ツキ","reading_type" => "kunyomi","meaning" => "moon; month"],
            ["kanji" => "火","kana" => "ひ","reading" => "ヒ","reading_type" => "kunyomi","meaning" => "fire"],
            ["kanji" => "水","kana" => "みず","reading" => "ミズ","reading_type" => "kunyomi","meaning" => "water"],
            ["kanji" => "木","kana" => "き","reading" => "キ","reading_type" => "kunyomi","meaning" => "tree; wood"],
            ["kanji" => "金","kana" => "かね","reading" => "カネ","reading_type" => "kunyomi","meaning" => "money; gold"],
            ["kanji" => "土","kana" => "つち","reading" => "ツチ","reading_type" => "kunyomi","meaning" => "earth; soil"],
            ["kanji" => "日曜日","kana" => "にちようび","reading" => "ニチヨウビ","reading_type" => "onyomi","meaning" => "Sunday"],
            ["kanji" => "月曜日","kana" => "げつようび","reading" => "ゲツヨウビ","reading_type" => "onyomi","meaning" => "Monday"],
            ["kanji" => "火曜日","kana" => "かようび","reading" => "カヨウビ","reading_type" => "onyomi","meaning" => "Tuesday"],
            ["kanji" => "水曜日","kana" => "すいようび","reading" => "スイヨウビ","reading_type" => "onyomi","meaning" => "Wednesday"],
            ["kanji" => "木曜日","kana" => "もくようび","reading" => "モクヨウビ","reading_type" => "onyomi","meaning" => "Thursday"],
            ["kanji" => "金曜日","kana" => "きんようび","reading" => "キンヨウビ","reading_type" => "onyomi","meaning" => "Friday"],
            ["kanji" => "土曜日","kana" => "どようび","reading" => "ドヨウビ","reading_type" => "onyomi","meaning" => "Saturday"],

            ["kanji" => "年","kana" => "とし","reading" => "トシ","reading_type" => "kunyomi","meaning" => "year"],
            ["kanji" => "今年","kana" => "ことし","reading" => "コトシ","reading_type" => "kunyomi","meaning" => "this year"],
            ["kanji" => "来年","kana" => "らいねん","reading" => "ライネン","reading_type" => "onyomi","meaning" => "next year"],
            ["kanji" => "去年","kana" => "きょねん","reading" => "キョネン","reading_type" => "onyomi","meaning" => "last year"],
            ["kanji" => "毎日","kana" => "まいにち","reading" => "マイニチ","reading_type" => "onyomi","meaning" => "every day"],
            ["kanji" => "時間","kana" => "じかん","reading" => "ジカン","reading_type" => "onyomi","meaning" => "time; hour"],
            ["kanji" => "半分","kana" => "はんぶん","reading" => "ハンブン","reading_type" => "onyomi","meaning" => "half"],
            ["kanji" => "午前","kana" => "ごぜん","reading" => "ゴゼン","reading_type" => "onyomi","meaning" => "morning; AM"],
            ["kanji" => "午後","kana" => "ごご","reading" => "GOGO","reading_type" => "onyomi","meaning" => "afternoon; PM"],
            ["kanji" => "今","kana" => "いま","reading" => "イマ","reading_type" => "kunyomi","meaning" => "now"],
            ["kanji" => "今日","kana" => "きょう","reading" => "キョウ","reading_type" => "kunyomi","meaning" => "today"],
            ["kanji" => "明日","kana" => "あした","reading" => "アシタ","reading_type" => "kunyomi","meaning" => "tomorrow"],
            ["kanji" => "昨日","kana" => "きのう","reading" => "キノウ","reading_type" => "kunyomi","meaning" => "yesterday"],
            ["kanji" => "毎週","kana" => "まいしゅう","reading" => "マイシュウ","reading_type" => "onyomi","meaning" => "every week"],

            ["kanji" => "人","kana" => "ひと","reading" => "ヒト","reading_type" => "kunyomi","meaning" => "person"],
            ["kanji" => "日本人","kana" => "にほんじん","reading" => "ニホンジン","reading_type" => "onyomi","meaning" => "Japanese person"],
            ["kanji" => "外国人","kana" => "がいこくじん","reading" => "ガイコクジン","reading_type" => "onyomi","meaning" => "foreigner"],
            ["kanji" => "男","kana" => "おとこ","reading" => "オトコ","reading_type" => "kunyomi","meaning" => "man; male"],
            ["kanji" => "女","kana" => "おんな","reading" => "オンナ","reading_type" => "kunyomi","meaning" => "woman; female"],
            ["kanji" => "男の子","kana" => "おとこのこ","reading" => "オトコノコ","reading_type" => "kunyomi","meaning" => "boy"],
            ["kanji" => "女の子","kana" => "おんなのこ","reading" => "オンナノコ","reading_type" => "kunyomi","meaning" => "girl"],
            ["kanji" => "子ども","kana" => "こども","reading" => "コドモ","reading_type" => "kunyomi","meaning" => "child"],
            ["kanji" => "父","kana" => "ちち","reading" => "チチ","reading_type" => "kunyomi","meaning" => "father"],
            ["kanji" => "母","kana" => "はは","reading" => "ハハ","reading_type" => "kunyomi","meaning" => "mother"],
            ["kanji" => "友達","kana" => "ともだち","reading" => "トモダチ","reading_type" => "kunyomi","meaning" => "friend"],
            ["kanji" => "私","kana" => "わたし","reading" => "ワタシ","reading_type" => "kunyomi","meaning" => "I; me"],
            ["kanji" => "名前","kana" => "なまえ","reading" => "ナマエ","reading_type" => "onyomi","meaning" => "name"],
            ["kanji" => "先生","kana" => "せんせい","reading" => "センセイ","reading_type" => "onyomi","meaning" => "teacher"],
            ["kanji" => "学生","kana" => "がくせい","reading" => "ガクセイ","reading_type" => "onyomi","meaning" => "student"],

            ["kanji" => "学校","kana" => "がっこう","reading" => "ガッコウ","reading_type" => "onyomi","meaning" => "school"],
            ["kanji" => "大学","kana" => "だいがく","reading" => "ダイガク","reading_type" => "onyomi","meaning" => "university"],
            ["kanji" => "大学生","kana" => "だいがくせい","reading" => "ダイガクセイ","reading_type" => "onyomi","meaning" => "university student"],
            ["kanji" => "高校","kana" => "こうこう","reading" => "コウコウ","reading_type" => "onyomi","meaning" => "high school"],
            ["kanji" => "教室","kana" => "きょうしつ","reading" => "キョウシツ","reading_type" => "onyomi","meaning" => "classroom"],
            ["kanji" => "本","kana" => "ほん","reading" => "ホン","reading_type" => "onyomi","meaning" => "book"],
            ["kanji" => "日本","kana" => "にほん","reading" => "ニホン","reading_type" => "onyomi","meaning" => "Japan"],
            ["kanji" => "日本語","kana" => "にほんご","reading" => "ニホンゴ","reading_type" => "onyomi","meaning" => "Japanese language"],
            ["kanji" => "英語","kana" => "えいご","reading" => "エイゴ","reading_type" => "onyomi","meaning" => "English language"],
            ["kanji" => "漢字","kana" => "かんじ","reading" => "カンジ","reading_type" => "onyomi","meaning" => "kanji; Chinese character"],
            ["kanji" => "文字","kana" => "もじ","reading" => "モジ","reading_type" => "onyomi","meaning" => "letter; character"],

            ["kanji" => "家","kana" => "いえ","reading" => "イエ","reading_type" => "kunyomi","meaning" => "house; home"],
            ["kanji" => "部屋","kana" => "へや","reading" => "ヘヤ","reading_type" => "kunyomi","meaning" => "room"],
            ["kanji" => "店","kana" => "みせ","reading" => "ミセ","reading_type" => "kunyomi","meaning" => "shop; store"],
            ["kanji" => "駅","kana" => "えき","reading" => "エキ","reading_type" => "onyomi","meaning" => "station"],
            ["kanji" => "電車","kana" => "でんしゃ","reading" => "デンシャ","reading_type" => "onyomi","meaning" => "train"],
            ["kanji" => "電話","kana" => "でんわ","reading" => "デンワ","reading_type" => "onyomi","meaning" => "telephone"],
            ["kanji" => "車","kana" => "くるま","reading" => "クルマ","reading_type" => "kunyomi","meaning" => "car; vehicle"],
            ["kanji" => "道","kana" => "みち","reading" => "ミチ","reading_type" => "kunyomi","meaning" => "road; way"],
            ["kanji" => "入口","kana" => "いりぐち","reading" => "イリグチ","reading_type" => "kunyomi","meaning" => "entrance"],
            ["kanji" => "出口","kana" => "でぐち","reading" => "デグチ","reading_type" => "kunyomi","meaning" => "exit"],

            ["kanji" => "上","kana" => "うえ","reading" => "ウエ","reading_type" => "kunyomi","meaning" => "above; up"],
            ["kanji" => "下","kana" => "した","reading" => "シタ","reading_type" => "kunyomi","meaning" => "below; down"],
            ["kanji" => "中","kana" => "なか","reading" => "ナカ","reading_type" => "kunyomi","meaning" => "inside; middle"],
            ["kanji" => "外","kana" => "そと","reading" => "ソト","reading_type" => "kunyomi","meaning" => "outside"],
            ["kanji" => "左","kana" => "ひだり","reading" => "ヒダリ","reading_type" => "kunyomi","meaning" => "left"],
            ["kanji" => "右","kana" => "みぎ","reading" => "ミギ","reading_type" => "kunyomi","meaning" => "right"],
            ["kanji" => "前","kana" => "まえ","reading" => "マエ","reading_type" => "kunyomi","meaning" => "front; before"],
            ["kanji" => "後ろ","kana" => "うしろ","reading" => "ウシロ","reading_type" => "kunyomi","meaning" => "behind"],
            ["kanji" => "東","kana" => "ひがし","reading" => "ヒガシ","reading_type" => "kunyomi","meaning" => "east"],
            ["kanji" => "西","kana" => "にし","reading" => "ニシ","reading_type" => "kunyomi","meaning" => "west"],
            ["kanji" => "南","kana" => "みなみ","reading" => "ミナミ","reading_type" => "kunyomi","meaning" => "south"],
            ["kanji" => "北","kana" => "きた","reading" => "キタ","reading_type" => "kunyomi","meaning" => "north"],
            ["kanji" => "東京","kana" => "とうきょう","reading" => "トウキョウ","reading_type" => "onyomi","meaning" => "Tokyo"],

            ["kanji" => "大きい","kana" => "おおきい","reading" => "オオキイ","reading_type" => "kunyomi","meaning" => "big; large"],
            ["kanji" => "小さい","kana" => "ちいさい","reading" => "チイサイ","reading_type" => "kunyomi","meaning" => "small"],
            ["kanji" => "新しい","kana" => "あたらしい","reading" => "アタラシイ","reading_type" => "kunyomi","meaning" => "new"],
            ["kanji" => "古い","kana" => "ふるい","reading" => "フルイ","reading_type" => "kunyomi","meaning" => "old"],
            ["kanji" => "高い","kana" => "たかい","reading" => "タカイ","reading_type" => "kunyomi","meaning" => "high; expensive"],
            ["kanji" => "安い","kana" => "やすい","reading" => "ヤスイ","reading_type" => "kunyomi","meaning" => "cheap; inexpensive"],
            ["kanji" => "長い","kana" => "ながい","reading" => "ナガイ","reading_type" => "kunyomi","meaning" => "long"],
            ["kanji" => "短い","kana" => "みじかい","reading" => "ミジカイ","reading_type" => "kunyomi","meaning" => "short"],
            ["kanji" => "多い","kana" => "おおい","reading" => "オオイ","reading_type" => "kunyomi","meaning" => "many"],
            ["kanji" => "少ない","kana" => "すくない","reading" => "スクナイ","reading_type" => "kunyomi","meaning" => "few; little"],
            ["kanji" => "白い","kana" => "しろい","reading" => "シロイ","reading_type" => "kunyomi","meaning" => "white"],
            ["kanji" => "赤い","kana" => "あかい","reading" => "アカイ","reading_type" => "kunyomi","meaning" => "red"],
            ["kanji" => "青い","kana" => "あおい","reading" => "アオイ","reading_type" => "kunyomi","meaning" => "blue"],
            ["kanji" => "早い","kana" => "はやい","reading" => "ハヤイ","reading_type" => "kunyomi","meaning" => "early; fast"],

            ["kanji" => "行く","kana" => "いく","reading" => "イク","reading_type" => "kunyomi","meaning" => "to go"],
            ["kanji" => "来る","kana" => "くる","reading" => "クル","reading_type" => "kunyomi","meaning" => "to come"],
            ["kanji" => "帰る","kana" => "かえる","reading" => "カエル","reading_type" => "kunyomi","meaning" => "to return; go home"],
            ["kanji" => "入る","kana" => "はいる","reading" => "ハイル","reading_type" => "kunyomi","meaning" => "to enter"],
            ["kanji" => "出る","kana" => "でる","reading" => "デル","reading_type" => "kunyomi","meaning" => "to leave; go out"],
            ["kanji" => "見る","kana" => "みる","reading" => "ミル","reading_type" => "kunyomi","meaning" => "to see; watch"],
            ["kanji" => "聞く","kana" => "きく","reading" => "キク","reading_type" => "kunyomi","meaning" => "to hear; listen; ask"],
            ["kanji" => "言う","kana" => "いう","reading" => "イウ","reading_type" => "kunyomi","meaning" => "to say"],
            ["kanji" => "読む","kana" => "よむ","reading" => "ヨム","reading_type" => "kunyomi","meaning" => "to read"],
            ["kanji" => "書く","kana" => "かく","reading" => "カク","reading_type" => "kunyomi","meaning" => "to write"],
            ["kanji" => "話す","kana" => "はなす","reading" => "ハナス","reading_type" => "kunyomi","meaning" => "to speak; talk"],
            ["kanji" => "食べる","kana" => "たべる","reading" => "タベル","reading_type" => "kunyomi","meaning" => "to eat"],
            ["kanji" => "飲む","kana" => "のむ","reading" => "ノム","reading_type" => "kunyomi","meaning" => "to drink"],
            ["kanji" => "買う","kana" => "かう","reading" => "カウ","reading_type" => "kunyomi","meaning" => "to buy"],
            ["kanji" => "使う","kana" => "つかう","reading" => "ツカウ","reading_type" => "kunyomi","meaning" => "to use"],
            ["kanji" => "休む","kana" => "やすむ","reading" => "ヤスム","reading_type" => "kunyomi","meaning" => "to rest; take a break"],
            ["kanji" => "待つ","kana" => "まつ","reading" => "マツ","reading_type" => "kunyomi","meaning" => "to wait"],
            ["kanji" => "持つ","kana" => "もつ","reading" => "モツ","reading_type" => "kunyomi","meaning" => "to hold; have"],
            ["kanji" => "会う","kana" => "あう","reading" => "アウ","reading_type" => "kunyomi","meaning" => "to meet"],
            ["kanji" => "分かる","kana" => "わかる","reading" => "ワカル","reading_type" => "kunyomi","meaning" => "to understand"],
            ["kanji" => "思う","kana" => "おもう","reading" => "オモウ","reading_type" => "kunyomi","meaning" => "to think"],
            ["kanji" => "知る","kana" => "しる","reading" => "シル","reading_type" => "kunyomi","meaning" => "to know"],
            ["kanji" => "作る","kana" => "つくる","reading" => "ツクル","reading_type" => "kunyomi","meaning" => "to make"],

            ["kanji" => "山","kana" => "やま","reading" => "ヤマ","reading_type" => "kunyomi","meaning" => "mountain"],
            ["kanji" => "川","kana" => "かわ","reading" => "カワ","reading_type" => "kunyomi","meaning" => "river"],
            ["kanji" => "空","kana" => "そら","reading" => "ソラ","reading_type" => "kunyomi","meaning" => "sky"],
            ["kanji" => "雨","kana" => "あめ","reading" => "アメ","reading_type" => "kunyomi","meaning" => "rain"],
            ["kanji" => "天気","kana" => "てんき","reading" => "テンキ","reading_type" => "onyomi","meaning" => "weather"],
            ["kanji" => "花","kana" => "はな","reading" => "ハナ","reading_type" => "kunyomi","meaning" => "flower"],
            ["kanji" => "魚","kana" => "さかな","reading" => "サカナ","reading_type" => "kunyomi","meaning" => "fish"],
            ["kanji" => "犬","kana" => "いぬ","reading" => "イヌ","reading_type" => "kunyomi","meaning" => "dog"],
            ["kanji" => "鳥","kana" => "とり","reading" => "トリ","reading_type" => "kunyomi","meaning" => "bird"],
            ["kanji" => "国","kana" => "くに","reading" => "クニ","reading_type" => "kunyomi","meaning" => "country"],
            ["kanji" => "外国","kana" => "がいこく","reading" => "ガイコク","reading_type" => "onyomi","meaning" => "foreign country"],
            ["kanji" => "中国","kana" => "ちゅうごく","reading" => "チュウゴク","reading_type" => "onyomi","meaning" => "China"]
        ];
    }

    private function japaneseFlattenSet(array $character_sets): array
    {
        $final_set = [];
        foreach ($character_sets as $letters) {
            foreach ($letters as $romaji => $kana) {
                $final_set[] = [$romaji, $kana];
            }
        }
        return $final_set;
    }

    private function romajiPickKana(array $character_sets, string $kana_type): array
    {
        $kana_set = $this->japaneseFlattenSet($character_sets[$kana_type]);
        $init_set = [];
        while (count($init_set) < self::NO_OF_QUESTIONS) {
            $index = rand(0, 103);
            if (!in_array($index, $init_set)) {
                $init_set[] = $index;
            }
        }
        $question_set = [];
        foreach ($init_set as $index) {
            $answer_choices = [];
            $answer_choices[] = $kana_set[$index][1];
            while (count($answer_choices) < self::NO_OF_CHOICES) {
                $x = rand(0, 103);
                if (!in_array($kana_set[$x][1], $answer_choices)) {
                    $answer_choices[] = $kana_set[$x][1];
                }
            }
            shuffle($answer_choices);
            $question_set[] = [
                'question' => $kana_set[$index][0],
                'answer'   => $kana_set[$index][1],
                'choices'  => $answer_choices
            ];
        }
        return $question_set;
    }

    private function romajiTypeKana(array $character_sets, string $kana_type): array
    {
        $kana_set = $this->japaneseFlattenSet($character_sets[$kana_type]);
        $init_set = [];
        while (count($init_set) < self::NO_OF_QUESTIONS) {
            $index = rand(0, 103);
            if (!in_array($index, $init_set)) {
                $init_set[] = $index;
            }
        }
        $question_set = [];
        foreach ($init_set as $index) {
            $question_set[] = [
                'question' => $kana_set[$index][0],
                'answer'   => $kana_set[$index][1],
            ];
        }
        return $question_set;
    }

    private function kanaPickRomaji(array $character_sets, string $kana_type): array
    {
        if ('all' == $kana_type) {
            $set1 = $this->japaneseFlattenSet($character_sets['hiragana']);
            $set2 = $this->japaneseFlattenSet($character_sets['katakana']);
            $kana_set = array_merge($set1, $set2);
        } else {
            $kana_set = $this->japaneseFlattenSet($character_sets[$kana_type]);
        }
        $kana_count = count($kana_set)-1;
        $init_set = [];
        while (count($init_set) < self::NO_OF_QUESTIONS) {
            $index = rand(0, $kana_count);
            if (!in_array($index, $init_set)) {
                $init_set[] = $index;
            }
        }
        $question_set = [];
        foreach ($init_set as $index) {
            $answer_choices   = [];
            $answer_choices[] = $kana_set[$index][0];
            while (count($answer_choices) < self::NO_OF_CHOICES) {
                $x = rand(0, $kana_count);
                if (!in_array($kana_set[$x][0], $answer_choices)) {
                    $answer_choices[] = $kana_set[$x][0];
                }
            }
            shuffle($answer_choices);
            $question_set[] = [
                'question' => $kana_set[$index][1],
                'answer'   => $kana_set[$index][0],
                'choices'  => $answer_choices
            ];
        }
        return $question_set;
    }

    private function generateKanjiQuestions(): array
    {
        $characters   = $this->japaneseRetrieveKanji();
        $question_set = [];
        $q_pairs      = [
            ['kanji', 'kana'],
            ['kanji', 'meaning'],
            ['meaning', 'kanji'],
        ];
        $questions_count  = count($characters)-1;
        $picked_questions = [];
        while (count($question_set) < self::NO_OF_QUESTIONS) {
            // get type of question: rand from $q_pairs
            $q_pair         = $q_pairs[rand(0, count($q_pairs)-1)];
            // pick the character from the list randomly
            $picked_index   = rand(0, $questions_count);
            if (in_array($picked_index, $picked_questions)) {
                continue;
            }
            $picked_questions[] = $picked_index;
            $the_question       = $characters[$picked_index];
            // gen answer choices
            $answer_choices   = [];
            $answer_choices[] = $the_question[$q_pair[1]];
            // generate other choices
            while (count($answer_choices) < self::NO_OF_CHOICES) {
                $choice = $characters[rand(0, $questions_count)][$q_pair[1]];
                if (in_array($choice, $answer_choices)) {
                    continue;
                }
                $answer_choices[] = $choice;
            }
            shuffle($answer_choices);
            // assign question
            $question_set[]   = [
                'question' => $the_question[$q_pair[0]],
                'answer'   => $the_question[$q_pair[1]],
                'choices'  => $answer_choices
            ];
        }
        return $question_set;
    }

    private function kanaTypeRomaji(array $character_sets, string $kana_type): array
    {
        if ('all' == $kana_type) {
            $set1 = $this->japaneseFlattenSet($character_sets['hiragana']);
            $set2 = $this->japaneseFlattenSet($character_sets['katakana']);
            $kana_set = array_merge($set1, $set2);
        } else {
            $kana_set = $this->japaneseFlattenSet($character_sets[$kana_type]);
        }
        $kana_count = count($kana_set)-1;
        $init_set = [];
        while (count($init_set) < 15) {
            $index = rand(0, $kana_count);
            if (!in_array($index, $init_set)) {
                $init_set[] = $index;
            }
        }
        $question_set = [];
        foreach ($init_set as $index) {
            $question_set[] = [
                'question' => $kana_set[$index][1],
                'answer'   => $kana_set[$index][0],
            ];
        }
        return $question_set;
    }

    /**
     * Game menu
     * @return string
     */
    public function japaneseHome(): string
    {
        return view('game/japanese_home');
    }

    /**
     * Review all kana
     * @return string
     */
    public function japaneseReview(): string
    {
        $data = [
            'characters' => $this->japaneseRetrieveCharacters(['hiragana', 'katakana'])
        ];
        return view('game/japanese_review', $data);
    }

    /**
     * Rules!
     * @param string $game
     * @param string $kana_set
     * @return string
     */
    public function japaneseEntry(string $game, string $kana_set): string
    {
        $data = [
            'game'     => $game,
            'kana_set' => $kana_set,
        ];
        return view('game/japanese_entry', $data);
    }

    /**
     * Game!
     * @param string $game
     * @param string $kana_set
     * @return string
     */
    public function japaneseGame(string $game, string $kana_set): string
    {
        if ('kanji' == $game) {
            $data       = [
                'game_name' => $game,
                'game_data' => $this->generateKanjiQuestions(),
                'format'    => 'pick',
            ];
            return view('game/japanese_game', $data);
        }
        $types = [$kana_set];
        if ('all' == $kana_set) {
            $types = ['hiragana', 'katakana'];
        }
        $character_sets = $this->japaneseRetrieveCharacters($types);
        $game_data      = [];
        $format         = 'type';
        if ('romaji-pick-kana' == $game) {
            $game_data = $this->romajiPickKana($character_sets, $kana_set);
            $format    = 'pick';
        } else if ('romaji-type-kana' == $game) {
            $game_data = $this->romajiTypeKana($character_sets, $kana_set);
        } else if ('kana-pick-romaji' == $game) {
            $game_data = $this->kanaPickRomaji($character_sets, $kana_set);
            $format    = 'pick';
        } else if ('kana-type-romaji' == $game) {
            $game_data = $this->kanaTypeRomaji($character_sets, $kana_set);
        }
        $data = [
            'game_name' => $game,
            'game_data' => $game_data,
            'format'    => $format,
        ];
        return view('game/japanese_game', $data);
    }

    private function shavianWords(): array
    {
        return [
            ["the"        , "𐑞"],
            ["be"         , "𐑚𐑰"],
            ["to"         , "𐑑"],
            ["of"         , "𐑝"],
            ["and"        , "𐑯"],
            ["a"          , "𐑩"],
            ["in"         , "𐑦𐑯"],
            ["that"       , "𐑞𐑨𐑑"],
            ["have"       , "𐑣𐑨𐑝"],
            ["i"          , "𐑲"],
            ["it"         , "𐑦𐑑"],
            ["for"        , "𐑓"],
            ["not"        , "𐑯𐑪𐑑"],
            ["on"         , "𐑪𐑯"],
            ["with"       , "𐑢𐑦𐑞"],
            ["he"         , "𐑣𐑰"],
            ["as"         , "𐑨𐑟"],
            ["you"        , "𐑿"],
            ["do"         , "𐑛𐑴 / 𐑛𐑵"],
            ["at"         , "𐑨𐑑"],
            ["this"       , "𐑞𐑦𐑕"],
            ["but"        , "𐑚𐑳𐑑"],
            ["his"        , "𐑣𐑦𐑟"],
            ["by"         , "𐑚𐑲"],
            ["from"       , "𐑓𐑮𐑪𐑥"],
            ["they"       , "𐑞𐑱"],
            ["we"         , "𐑢𐑰"],
            ["say"        , "𐑕𐑱"],
            ["her"        , "𐑣𐑻"],
            ["she"        , "𐑖𐑰"],
            ["or"         , "𐑹"],
            ["an"         , "𐑩𐑯"],
            ["will"       , "𐑢𐑦𐑤"],
            ["my"         , "𐑥𐑲"],
            ["one"        , "𐑢𐑳𐑯"],
            ["all"        , "𐑷𐑤"],
            ["would"      , "𐑢𐑫𐑛"],
            ["there"      , "𐑞𐑺"],
            ["their"      , "𐑞𐑺"],
            ["what"       , "𐑢𐑪𐑑"],
            ["so"         , "𐑕𐑴"],
            ["up"         , "𐑳𐑐"],
            ["out"        , "𐑬𐑑"],
            ["if"         , "𐑦𐑓"],
            ["about"      , "𐑩𐑚𐑬𐑑"],
            ["who"        , "𐑣𐑵"],
            ["get"        , "𐑜𐑧𐑑"],
            ["which"      , "𐑢𐑦𐑗"],
            ["go"         , "𐑜𐑴"],
            ["me"         , "𐑥𐑰"],
            ["when"       , "𐑢𐑧𐑯"],
            ["make"       , "𐑥𐑱𐑒"],
            ["can"        , "𐑒𐑨𐑯"],
            ["like"       , "𐑤𐑲𐑒"],
            ["time"       , "𐑑𐑲𐑥"],
            ["no"         , "𐑯𐑴"],
            ["just"       , "𐑡𐑳𐑕𐑑"],
            ["him"        , "𐑣𐑦𐑥"],
            ["know"       , "𐑯𐑴"],
            ["take"       , "𐑑𐑱𐑒"],
            ["people"     , "𐑐𐑰𐑐𐑩𐑤"],
            ["into"       , "𐑦𐑯𐑑𐑵"],
            ["year"       , "𐑘𐑽"],
            ["your"       , "𐑘𐑹"],
            ["good"       , "𐑜𐑫𐑛"],
            ["some"       , "𐑕𐑳𐑥"],
            ["could"      , "𐑒𐑫𐑛"],
            ["them"       , "𐑞𐑧𐑥"],
            ["see"        , "𐑕𐑰"],
            ["other"      , "𐑳𐑞𐑼"],
            ["than"       , "𐑞𐑨𐑯"],
            ["then"       , "𐑞𐑧𐑯"],
            ["now"        , "𐑯𐑬"],
            ["look"       , "𐑤𐑫𐑒"],
            ["only"       , "𐑴𐑯𐑤𐑦"],
            ["come"       , "𐑒𐑳𐑥"],
            ["its"        , "𐑦𐑑𐑕"],
            ["over"       , "𐑴𐑝𐑼"],
            ["think"      , "𐑔𐑦𐑙𐑒"],
            ["also"       , "𐑷𐑤𐑕𐑴"],
            ["back"       , "𐑚𐑨𐑒"],
            ["after"      , "𐑭𐑓𐑑𐑼"],
            ["use"        , "𐑿𐑕 / 𐑿𐑟"],
            ["two"        , "𐑑𐑵"],
            ["how"        , "𐑣𐑬"],
            ["our"        , "𐑬𐑼"],
            ["work"       , "𐑢𐑻𐑒"],
            ["first"      , "𐑓𐑻𐑕𐑑"],
            ["well"       , "𐑢𐑧𐑤"],
            ["way"        , "𐑢𐑱"],
            ["even"       , "𐑰𐑝𐑩𐑯"],
            ["new"        , "𐑯𐑿"],
            ["want"       , "𐑢𐑪𐑯𐑑"],
            ["because"    , "𐑚𐑦𐑒𐑪𐑟"],
            ["any"        , "𐑧𐑯𐑦"],
            ["these"      , "𐑞𐑰𐑟"],
            ["give"       , "𐑜𐑦𐑝"],
            ["day"        , "𐑛𐑱"],
            ["most"       , "𐑥𐑴𐑕𐑑"],
            ["us"         , "𐑳𐑕"],
            ["is"         , "𐑦𐑟"],
            ["are"        , "𐑸"],
            ["was"        , "𐑢𐑪𐑟"],
            ["were"       , "𐑢𐑻"],
            ["been"       , "𐑚𐑰𐑯"],
            ["being"      , "𐑚𐑰𐑦𐑙"],
            ["has"        , "𐑣𐑨𐑟"],
            ["had"        , "𐑣𐑨𐑛"],
            ["did"        , "𐑛𐑦𐑛"],
            ["said"       , "𐑕𐑧𐑛"],
            ["each"       , "𐑰𐑗"],
            ["many"       , "𐑥𐑧𐑯𐑦"],
            ["much"       , "𐑥𐑳𐑗"],
            ["more"       , "𐑥𐑹"],
            ["very"       , "𐑝𐑧𐑮𐑦"],
            ["where"      , "𐑢𐑺"],
            ["why"        , "𐑢𐑲"],
            ["here"       , "𐑣𐑽"],
            ["through"    , "𐑔𐑮𐑵"],
            ["down"       , "𐑛𐑬𐑯"],
            ["should"     , "𐑖𐑫𐑛"],
            ["may"        , "𐑥𐑱"],
            ["might"      , "𐑥𐑲𐑑"],
            ["must"       , "𐑥𐑳𐑕𐑑"],
            ["such"       , "𐑕𐑳𐑗"],
            ["own"        , "𐑴𐑯"],
            ["same"       , "𐑕𐑱𐑥"],
            ["another"    , "𐑩𐑯𐑳𐑞𐑼"],
            ["while"      , "𐑢𐑲𐑤"],
            ["last"       , "𐑤𐑭𐑕𐑑"],
            ["long"       , "𐑤𐑪𐑙"],
            ["little"     , "𐑤𐑦𐑑𐑩𐑤"],
            ["great"      , "𐑜𐑮𐑱𐑑"],
            ["old"        , "𐑴𐑤𐑛"],
            ["big"        , "𐑚𐑦𐑜"],
            ["small"      , "𐑕𐑥𐑷𐑤"],
            ["high"       , "𐑣𐑲"],
            ["different"  , "𐑛𐑦𐑓𐑼𐑩𐑯𐑑"],
            ["right"      , "𐑮𐑲𐑑"],
            ["large"      , "𐑤𐑸𐑡"],
            ["off"        , "𐑪𐑓"],
            ["still"      , "𐑕𐑑𐑦𐑤"],
            ["too"        , "𐑑𐑵"],
            ["never"      , "𐑯𐑧𐑝𐑼"],
            ["always"     , "𐑷𐑤𐑢𐑱𐑟"],
            ["often"      , "𐑪𐑓𐑩𐑯"],
            ["ever"       , "𐑧𐑝𐑼"],
            ["again"      , "𐑩𐑜𐑧𐑯"],
            ["once"       , "𐑢𐑳𐑯𐑕"],
            ["every"      , "𐑧𐑝𐑮𐑦"],
            ["between"    , "𐑚𐑦𐑑𐑢𐑰𐑯"],
            ["under"      , "𐑳𐑯𐑛𐑼"],
            ["before"     , "𐑚𐑦𐑓𐑹"],
            ["during"     , "𐑛𐑘𐑫𐑼𐑦𐑙"],
            ["without"    , "𐑢𐑦𐑞𐑬𐑑"],
            ["against"    , "𐑩𐑜𐑧𐑯𐑕𐑑"],
            ["around"     , "𐑼𐑬𐑯𐑛"],
            ["within"     , "𐑢𐑦𐑞𐑦𐑯"],
            ["across"     , "𐑩𐑒𐑮𐑪𐑕"],
            ["behind"     , "𐑚𐑦𐑣𐑲𐑯𐑛"],
            ["place"      , "𐑐𐑤𐑱𐑕"],
            ["home"       , "𐑣𐑴𐑥"],
            ["house"      , "𐑣𐑬𐑕 / 𐑣𐑬𐑟"],
            ["world"      , "𐑢𐑻𐑤𐑛"],
            ["school"     , "𐑕𐑒𐑵𐑤"],
            ["state"      , "𐑕𐑑𐑱𐑑"],
            ["family"     , "𐑓𐑨𐑥𐑦𐑤𐑦"],
            ["country"    , "𐑒𐑳𐑯𐑑𐑮𐑦"],
            ["city"       , "𐑕𐑦𐑑𐑦"],
            ["hand"       , "𐑣𐑨𐑯𐑛"],
            ["part"       , "𐑐𐑸𐑑"],
            ["child"      , "𐑗𐑲𐑤𐑛"],
            ["children"   , "𐑗𐑦𐑤𐑛𐑮𐑩𐑯"],
            ["man"        , "𐑥𐑨𐑯"],
            ["woman"      , "𐑢𐑫𐑥𐑩𐑯"],
            ["men"        , "𐑥𐑧𐑯"],
            ["women"      , "𐑢𐑦𐑥𐑦𐑯"],
            ["life"       , "𐑤𐑲𐑓"],
            ["eye"        , "𐑲"],
            ["head"       , "𐑣𐑧𐑛"],
            ["face"       , "𐑓𐑱𐑕"],
            ["name"       , "𐑯𐑱𐑥"],
            ["friend"     , "𐑓𐑮𐑧𐑯𐑛"],
            ["person"     , "𐑐𐑻𐑕𐑩𐑯"],
            ["thing"      , "𐑔𐑦𐑙"],
            ["things"     , "𐑔𐑦𐑙𐑟"],
            ["number"     , "𐑯𐑳𐑥𐑚𐑼"],
            ["group"      , "𐑜𐑮𐑵𐑐"],
            ["problem"    , "𐑐𐑮𐑪𐑚𐑤𐑩𐑥"],
            ["fact"       , "𐑓𐑨𐑒𐑑"],
            ["ask"        , "𐑭𐑕𐑒"],
            ["tell"       , "𐑑𐑧𐑤"],
            ["call"       , "𐑒𐑷𐑤"],
            ["try"        , "𐑑𐑮𐑲"],
            ["need"       , "𐑯𐑰𐑛"],
            ["feel"       , "𐑓𐑰𐑤"],
            ["become"     , "𐑚𐑦𐑒𐑳𐑥"],
            ["leave"      , "𐑤𐑰𐑝"],
            ["put"        , "𐑐𐑫𐑑"],
            ["mean"       , "𐑥𐑰𐑯"],
            ["keep"       , "𐑒𐑰𐑐"],
            ["let"        , "𐑤𐑧𐑑"],
            ["begin"      , "𐑚𐑦𐑜𐑦𐑯"],
            ["seem"       , "𐑕𐑰𐑥"],
            ["help"       , "𐑣𐑧𐑤𐑐"],
            ["talk"       , "𐑑𐑷𐑒"],
            ["turn"       , "𐑑𐑻𐑯"],
            ["start"      , "𐑕𐑑𐑸𐑑"],
            ["show"       , "𐑖𐑴"],
            ["hear"       , "𐑣𐑽"],
            ["play"       , "𐑐𐑤𐑱"],
            ["run"        , "𐑮𐑳𐑯"],
            ["move"       , "𐑥𐑵𐑝"],
            ["live"       , "𐑤𐑦𐑝 / 𐑤𐑲𐑝"],
            ["believe"    , "𐑚𐑦𐑤𐑰𐑝"],
            ["bring"      , "𐑚𐑮𐑦𐑙"],
            ["happen"     , "𐑣𐑨𐑐𐑩𐑯"],
            ["write"      , "𐑮𐑲𐑑"],
            ["read"       , "𐑮𐑰𐑛 / 𐑮𐑧𐑛"],
            ["sit"        , "𐑕𐑦𐑑"],
            ["stand"      , "𐑕𐑑𐑨𐑯𐑛"],
            ["lose"       , "𐑤𐑵𐑟"],
            ["pay"        , "𐑐𐑱"],
            ["meet"       , "𐑥𐑰𐑑"],
            ["include"    , "𐑦𐑯𐑒𐑤𐑵𐑛"],
            ["continue"   , "𐑒𐑩𐑯𐑑𐑦𐑯𐑿"],
            ["set"        , "𐑕𐑧𐑑"],
            ["learn"      , "𐑤𐑻𐑯"],
            ["change"     , "𐑗𐑱𐑯𐑡"],
            ["lead"       , "𐑤𐑧𐑛 / 𐑤𐑰𐑛"],
            ["understand" , "𐑳𐑯𐑛𐑼𐑕𐑑𐑨𐑯𐑛"],
            ["watch"      , "𐑢𐑪𐑗"],
            ["follow"     , "𐑓𐑪𐑤𐑴"],
            ["stop"       , "𐑕𐑑𐑪𐑐"],
            ["create"     , "𐑒𐑮𐑦𐑱𐑑"],
            ["speak"      , "𐑕𐑐𐑰𐑒"],
            ["open"       , "𐑴𐑐𐑩𐑯"],
            ["walk"       , "𐑢𐑷𐑒"],
            ["win"        , "𐑢𐑦𐑯"],
            ["remember"   , "𐑮𐑦𐑥𐑧𐑥𐑚𐑼"],
            ["love"       , "𐑤𐑳𐑝"],
            ["consider"   , "𐑒𐑩𐑯𐑕𐑦𐑛𐑼"],
            ["appear"     , "𐑩𐑐𐑽"],
            ["buy"        , "𐑚𐑲"],
            ["wait"       , "𐑢𐑱𐑑"],
            ["serve"      , "𐑕𐑻𐑝"],
            ["die"        , "𐑛𐑲 / 𐑛𐑰𐑲"],
            ["send"       , "𐑕𐑧𐑯𐑛"],
            ["expect"     , "𐑦𐑒𐑕𐑐𐑧𐑒𐑑"],
            ["build"      , "𐑚𐑦𐑤𐑛"]
        ];
    }

    public function shavianGame(): string
    {
        $characters   = $this->shavianWords();
        $question_set = [];
        $used_pair    = [];
        $modes        = [0 => 1, 1 => 0];
        $total_char   = count($characters) - 1;
        while (count($question_set) < self::NO_OF_QUESTIONS) {
            // pick the pair
            $i = rand(0, $total_char);
            if (in_array($i, $used_pair)) {
                continue;
            }
            $used_pair[] = $i;
            // pick the mode
            $mode           = rand(0, 1);
            $selected_pair  = $characters[$i];
            // choices
            $choices        = [];
            $choices[]      = $selected_pair[$modes[$mode]];
            while (count($choices) < self::NO_OF_CHOICES) {
                $choice = $characters[rand(0, $total_char)][$modes[$mode]];
                if (!in_array($choice, $choices)) {
                    $choices[] = $choice;
                }
            }
            shuffle($choices);
            $question_set[] = [
                'question' => $selected_pair[$mode],
                'answer'   => $selected_pair[$modes[$mode]],
                'choices'  => $choices
            ];
        }
        $data         = [
            'questions' => $question_set
        ];
        return view('game/shavian_game', $data);
    }
}