<?php

namespace App;


class Book
{
    /**
     * ISBN
     *
     * @var string
     */
    protected $isbn;

    /**
     * タイトル
     *
     * @var string
     */
    protected $title;

    /**
     * 著者
     *
     * @var string
     */
    protected $author;

    /**
     * ISBNをセットする
     *
     * @param string $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * タイトルをセットする
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * 著者をセットする
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

}