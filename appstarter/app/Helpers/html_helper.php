<?php
/**
 * Convert year to Japanese Era
 * @param int $year
 * @return string
 */
function japanese_year_converter(int $year): string
{
    // 1. Reiwa Era (May 1, 2019 - Present)
    if ($year >= 2019) {
        $eraYear = $year - 2018;
        $eraYear = ($eraYear == 1 ? "元" : $eraYear);
        return "令和{$eraYear}年";
    }
    // 2. Heisei Era (Jan 8, 1989 - Apr 30, 2019)
    if ($year >= 1989) {
        $eraYear = $year - 1988;
        $eraYear = ($eraYear == 1 ? "元" : $eraYear);
        return "平成{$eraYear}年";
    }
    if ($year >= 1926) {
        $eraYear = $year - 1925;
        $eraYear = ($eraYear == 1 ? "元" : $eraYear);
        return "昭和{$eraYear}年";
    }
    return '';
}

/**
 * Format years
 * @param int[] $input_years array of int, use 0 for 'present'
 * @param string $locale accept all acceptable locales in this system
 * @param string $separator mainly accept ', ' and ' - ', the rest will not get fixed by the locale
 * @return string
 */
function calculate_years (array $input_years, string $locale, string $separator = ', '): string
{
    $adjustment = 0;
    $format     = "X";
    $now        = 'Present';
    // most settings
    if ('th' == $locale) {
        $adjustment = 543;
        $format     = "ปี X";
        $now        = 'ปัจจุบัน';
    } else if ('zh-TW' == $locale) {
        $adjustment = -1911;
        $format     = "X年";
        $now        = '現在';
    } else if ('ja' == $locale) {
        $format     = "X年";
        $now        = '現在';
    } else if ('en-Shaw' == $locale) {
        $now        = '𐑐𐑮𐑧𐑟𐑩𐑯𐑑';
    }
    // fix separators
    if (', ' == $separator && in_array($locale, ['zh-TW', 'ja'])) {
        $separator = '、';
    } else if (' - ' == $separator && 'ja' == $locale) {
        $separator = ' 〜 ';
    }
    $output_years = [];
    foreach ($input_years as $year) {
        if (0 == $year) {
            $output_years[] = $now;
        } else {
            $year     = $year + $adjustment;
            $str_year = str_replace('X', $year, $format);
            if ('ja' == $locale) {
                $str_year .= ' (' . japanese_year_converter($year) . ')';
            }
            $output_years[] = $str_year;
        }
    }
    return implode($separator, $output_years);
}

/**
 * Format dates
 * @param string[] $dates array of dates in YYYY-MM-DD or YYYY-MM-00 format
 * @param string $locale accept all acceptable locales in this system
 * @param string $separator mainly accept ', ' and ' - ', the rest will not get fixed by the locale
 * @return string
 */
function format_date (array $dates, string $locale, string $separator = ', '): string
{
    $months = [
        'en'      => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        'en-Shaw' => ['𐑡𐑨𐑯', '𐑓𐑧𐑚', '𐑥𐑸𐑗', '𐑱𐑐𐑮', '𐑥𐑱', '𐑡𐑵𐑯', '𐑡𐑩𐑤', '𐑷𐑜𐑩', '𐑕𐑧𐑐', '𐑪𐑒𐑑', '𐑯𐑴𐑝', '𐑛𐑦𐑕'],
        'th'      => ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
    ];
    $year_adj = [
        'en'      => 0,
        'ja'      => 0,
        'th'      => 543,
        'zh-TW'   => -1911,
        'en-Shaw' => 0
    ];
    $formats = [
        'en'      => 'MMMM d, YYYY',
        'en-Shaw' => 'd MMMM YYYY',
        'th'      => 'd MMMM YYYY',
        'zh-TW'   => 'YYYY年m月d日',
        'ja'      => 'YYYY年m月d日',
    ];
    $ym_formats = [
        'en'      => 'MMMM YYYY',
        'en-Shaw' => 'MMMM YYYY',
        'th'      => 'MMMM YYYY',
        'zh-TW'   => 'YYYY年m月',
        'ja'      => 'YYYY年m月',
    ];
    // fix separators
    if (', ' == $separator && in_array($locale, ['zh-TW', 'ja'])) {
        $separator = '、';
    } else if (' - ' == $separator && 'ja' == $locale) {
        $separator = ' 〜 ';
    }
    $outputs = [];
    foreach ($dates as $date) {
        $explode = explode('-', $date);
        $yyyy    = intval($explode[0]) + $year_adj[$locale];
        $mm      = intval($explode[1]);
        $mm_ind  = $mm-1;
        $dd      = intval($explode[2]);
        if (0 == $dd) {
            $dd  = ''; // allow the situation when date is not set
        }
        if (in_array($locale, ['zh-TW', 'ja'])) {
            if (0 < $dd) {
                $dt = str_replace('YYYY', $yyyy, $formats[$locale]);
                $dt = str_replace('m', $mm, $dt);
                $outputs[] = str_replace('d', $dd, $dt);
            } else {
                $dt = str_replace('YYYY', $yyyy, $ym_formats[$locale]);
                $outputs[] = str_replace('m', $mm, $dt);
            }
        } else {
            if (0 < $dd) {
                $dt = str_replace('YYYY', $yyyy, $formats[$locale]);
                $dt = str_replace('MMMM', $months[$locale][$mm_ind], $dt);
                $outputs[] = str_replace('d', $dd, $dt);
            } else {
                $dt = str_replace('YYYY', $yyyy, $ym_formats[$locale]);
                $outputs[] = str_replace('MMMM', $months[$locale][$mm_ind], $dt);
            }
        }
    }
    return implode($separator, $outputs);
}

/**
 * Get comma by locale
 * @param string $locale
 * @return string
 */
function get_comma (string $locale): string
{
    if (in_array($locale, ['zh-TW', 'ja'])) {
        return '、';
    }
    return ', ';
}

/**
 * @param float $amount
 * @param string $currency
 * @return string
 */
function format_money(float $amount, string $currency): string
{
    $decimals            = 2;
    $thousands_separator = ',';
    $decimal_point       = '.';
    if (in_array($currency, ['JPY', 'IDR', 'KRW'])) {
        $decimals = 0;
    }
    if ('IDR' == $currency) {
        $thousands_separator = '.';
        $decimal_point       = ',';
    }
    $str_amount = number_format($amount, $decimals, $decimal_point, $thousands_separator);
    $formats    = [
        'AUD' => 'A$ ###',
        'IDR' => 'Rp ###',
        'JPY' => '###円',
        'MYR' => '<small>RM</small> ###',
        'PHP' => '₱ ###',
        'SGD' => 'S$ ###',
        'THB' => '฿ ###',
        'TWD' => 'NT$ ###',
        'USD' => 'US$ ###',
        'VND' => '###₫',
    ];
    return str_replace('###', $str_amount, $formats[$currency]);
}