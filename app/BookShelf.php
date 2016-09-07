<?php

namespace App;


class BookShelf
{
    /**
     * Bookの配列
     *
     * @var array
     */
    private $books;

    /**
     * コンストラクタ
     *
     */
    public function __construct()
    {
        $this->books = [];
    }

    /**
     * Bookを追加
     *
     * @param Book $book
     */
    public function add(Book $book)
    {
        $this->books[] = $book;
    }
    public function save($type = null)
    {
	if ($type === null) {
            $this->dispBook();
        }
            $export = $type;
            $this->$export();
	}
    }

    // フォーマットの指定がないのでとりあえずprint_rしとく
    public function dispBook()
    {
        print_r($this->books);
    }

    // 配列名の*が気持ち悪いけど仕方ない？
    public function csv()
    {
        $csv = '';
        $col = '';

        foreach ($this->books as $key => $book) {
            foreach ((array)$book as $key => $value) {
                $csv .= "{$value},";
            }
            $csv = preg_replace("#,$#misu", "", $csv);
            $csv .= "\n"; 
        }

        foreach (array_keys((array)$book) as $bookCol) {
            $col .= (string)$bookCol . ',';
        }
        $col = preg_replace("#,$#misu", "", $col);
        $col .= "\n"; 

        $csv = $col . $csv;

        file_put_contents($this->savePath . 'data.csv', $csv);
    }

    // 気が向いたら実装
    public function json()
    {
    }
}
