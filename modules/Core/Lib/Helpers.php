<?php


namespace Modules\Core\Lib;


class Helpers
{
    public static function sluggify($string)
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $string);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    // @TODO IMPLEMENT THIS FEATURE.
    public static function defaultCoverImage()
    {
        return 'defaultCoverImagePath';
    }
}