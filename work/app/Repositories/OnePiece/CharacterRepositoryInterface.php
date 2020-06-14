<?php

namespace App\Repositories\OnePiece;

interface CharacterRepositoryInterface
{
    public function getCharactersWithPaginated($query = null, $per_page = 20, $order_by = 'id', $sort ='desc');
}
