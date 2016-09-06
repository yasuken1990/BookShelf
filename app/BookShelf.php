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

}