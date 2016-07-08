<?php

namespace App\Contracts;


interface Searchable
{

    /**
     * 条件に一致するか判定する
     *
     * @param array $condition
     * @return bool
     */
    public function matches($condition);
}