<?php

namespace App\Repositories\OnePiece;

use App\Repositories\OnePiece\CharacterRepositoryInterface;
use App\Models\Character;

class CharacterRepository implements CharacterRepositoryInterface
{
    protected $character;

    /**
    * @param object $character
    */
    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function getCharactersWithPaginated($query = null, $per_page = 20, $order_by = 'id', $sort ='desc')
    {
      return Character::orderBy($order_by, $sort)->paginate($per_page);
    }


    // /**
    //  * 名前で1レコードを取得
    //  * @var $name
    //  * @return object
    //  */
    // public function getFirstRecordByName($name)
    // {
    //     return $this->user->where('name', '=', $name)->first();
    // }
}

 ?>
