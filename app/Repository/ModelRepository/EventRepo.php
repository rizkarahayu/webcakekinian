<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/12/17
 * Time: 12:55
 */

namespace App\Repository\ModelRepository;

use App\Model\Master\Event;
use App\Model\Master\Toko;
use App\Repository\BaseRepo;

class EventRepo extends BaseRepo
{
    public function __construct(Event $event)
    {
        $this->model = $event;
    }
}