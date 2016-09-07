<?php

namespace App;
use App\BookShelf;

class PetBookShelf extends BookShelf
{
    public function save()
    {
        parent::save('csv');
    }
}
