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

    /**
     * 本棚を検索し、条件に一致するBookの配列を返す
     *
     * @param array $conditions
     * @return array
     */
    public function search($conditions)
    {
        $hits = [];

        foreach ($this->books as $book) {
            if ($book->matches($conditions)) {
                $hits[] = $book;
            }
        }
        
        return $hits;
    }

}