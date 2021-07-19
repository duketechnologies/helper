<?php

if (! function_exists('kz_clear_phone')) {
    function kz_clear_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+7'.substr($phone, 1, 11);
    }
}

if (! function_exists('kz_format_phone')) {
    function kz_format_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+7 '
            .substr($phone, 1, 3).' '
            .substr($phone, 4, 3).' '
            .substr($phone, 7, 2).' '
            .substr($phone, 9, 2);
    }
}

if (! function_exists('kz_hidden_phone')) {
    function kz_hidden_phone($value) {
        $phone = kz_format_phone($value);
        return substr_replace($phone, 'XXX XX', 7, 6);
    }
}

if (! function_exists('kz_mask_phone')) {
    function kz_mask_phone() {
        return '+7 799 999 99 99';
    }
}

if (! function_exists('uz_clear_phone')) {
    function uz_clear_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+998'.substr($phone, 3, 9);
    }
}

if (! function_exists('uz_format_phone')) {
    function uz_format_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+998 '
            .substr($phone, 3, 2).' '
            .substr($phone, 5, 3).' '
            .substr($phone, 8, 2).' '
            .substr($phone, 10, 2);
    }
}

if (! function_exists('uz_hidden_phone')) {
    function uz_hidden_phone($value) {
        $phone = uz_format_phone($value);
        return substr_replace($phone, 'XXX XX', 8, 6);
    }
}

if (! function_exists('uz_mask_phone')) {
    function uz_mask_phone() {
        return '+\\9\\98 99 999 99 99';
    }
}

if (! function_exists('by_clear_phone')) {
    function by_clear_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+375'.substr($phone, 3, 9);
    }
}

if (! function_exists('by_format_phone')) {
    function by_format_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+375 '
            .substr($phone, 3, 2).' '
            .substr($phone, 5, 3).' '
            .substr($phone, 8, 2).' '
            .substr($phone, 10, 2);
    }
}

if (! function_exists('by_hidden_phone')) {
    function by_hidden_phone($value) {
        $phone = by_format_phone($value);
        return substr_replace($phone, 'XXX XX', 8, 6);
    }
}

if (! function_exists('by_mask_phone')) {
    function by_mask_phone() {
        return '+375 99 999 99 99';
    }
}

if (! function_exists('az_clear_phone')) {
    function az_clear_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+994'.substr($phone, 3, 9);
    }
}

if (! function_exists('az_format_phone')) {
    function az_format_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+994 '
                .substr($phone, 3, 2).' '
                .substr($phone, 5, 3).' '
                .substr($phone, 8, 2).' '
                .substr($phone, 10, 2);
    }
}

if (! function_exists('az_hidden_phone')) {
    function az_hidden_phone($value) {
        $phone = az_format_phone($value);
        return substr_replace($phone, 'XXX XX', 8, 6);
    }
}

if (! function_exists('az_mask_phone')) {
    function az_mask_phone() {
        return '+\\9\\94 99 999 99 99';
    }
}

if (! function_exists('ge_clear_phone')) {
    function ge_clear_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+995'.substr($phone, 3, 9);
    }
}

if (! function_exists('ge_format_phone')) {
    function ge_format_phone($value) {
        $phone = str_replace([' ', '-', '(', ')', '+'], '', $value);

        return '+995 '
                .substr($phone, 3, 3).' '
                .substr($phone, 6, 2).' '
                .substr($phone, 8, 2).' '
                .substr($phone, 10, 2);
    }
}

if (! function_exists('ge_hidden_phone')) {
    function ge_hidden_phone($value) {
        $phone = ge_format_phone($value);
        return substr_replace($phone, 'XX XX', 9, 5);
    }
}

if (! function_exists('ge_mask_phone')) {
    function ge_mask_phone() {
        return '+\\9\\95 999 99 99 99';
    }
}
