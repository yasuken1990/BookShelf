<?php

namespace Library;

use Faker\Provider\Base;

class BookFaker extends Base
{
    public function title()
    {
        $language = ['PHP', 'Java', 'Ruby', 'Python'];
        $purpose = ['プログラミング', 'によるオブジェクト指向開発', 'で始めるプログラミング', 'で作るWEBアプリケーション'];
        $suffix = ['概論', '入門', 'の絵本', 'の基礎', '応用編'];

        return $language[array_rand($language)] . $purpose[array_rand($purpose)] . $suffix[array_rand($suffix)];
    }

    public function isbnStr()
    {
        return preg_replace('/^(\d{3})(\d)(\d{4})(\d{4})(\d)$/', 'ISBN$1-$2-$3-$4-$5', $this->generator->isbn13());
    }
}