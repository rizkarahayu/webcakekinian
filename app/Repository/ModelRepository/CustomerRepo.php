<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/12/17
 * Time: 12:55
 */

namespace App\Repository\ModelRepository;


use App\Model\Master\Customer;
use App\Repository\BaseRepo;

class CustomerRepo extends BaseRepo
{
    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }
}