<?php

namespace App;


use App\Contracts\Searchable;

class Searcher
{
    /**
     * 検索対象の配列
     *
     * @var array
     */
    protected $searchables;

    /**
     * Searcher constructor.
     */
    public function __construct()
    {
        $this->searchables = [];
    }

    /**
     * 検索対象を追加する
     *
     * @param Searchable $searchable
     */
    public function add(Searchable $searchable)
    {
        $this->searchables[] = $searchable;
    }

    /**
     * 検索し、条件に一致する対象の配列を返す
     *
     * @param array $condition
     * @return array
     */
    public function search($condition)
    {
        $hits = [];

        foreach ($this->searchables as $searchable) {
            if ($searchable->matches($condition)) {
                $hits[] = $searchable;
            }
        }

        return $hits;
    }
}