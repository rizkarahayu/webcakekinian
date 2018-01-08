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
use App\User;

class CustomerRepo extends BaseRepo
{
    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }

    public function changeStatus($status, $id) {
        $action  = $this->model->join('users', 'customer.users_id', 'users.id')
                                ->where('customer.id', $id)
                                ->first();

        if ($status == 'block')
            $new_status = 0;
        else
            $new_status = 1;

        $input['status_active'] = $new_status;
        $update = app('users')->update($input, [], $action->users_id);

        if ($update['status'] == parent::$SUCCESS_STATUS) {
            $this->data_return = [
                'data'      => $action,
                'status'    => parent::$SUCCESS_STATUS,
                'message'   => parent::$SUCCESS_STATUS_CHANGE_CUSTOMER_MESSAGE
            ];
        } else {
            $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED__STATUS_CHANGE_CUSTOMER_MESSAGE
            ];
        }

        return $this->data_return;
    }
}