<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/12/17
 * Time: 12:55
 */

namespace App\Repository\ModelRepository;

use App\Model\Master\Toko;
use App\Repository\BaseRepo;

class TokoRepo extends BaseRepo
{
    public function __construct(Toko $toko)
    {
        $this->model = $toko;
    }
}