<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29/12/17
 * Time: 22:44
 */

namespace App\Repository\ModelRepository;

use App\Repository\BaseRepo;
use App\GeneralFunction;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserRepo extends BaseRepo
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($input, $rules) {
        $validate    = Validator::make($input, $rules);

        if ($validate->fails()) {
            return $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_VALIDATE_MESSAGE
            ];
        }

        $input['created_at']    = Carbon::now()->toDateTimeString();
        $input['updated_at']    = Carbon::now()->toDateTimeString();

        unset($input['_token']);

        $action     = new User();
        $action->name           = $input['name'];
        $action->username       = $input['username'];
        $action->email          = $input['email'];
        $action->password       = bcrypt($input['password']);
        $action->alamat         = $input['alamat'];
        $action->no_telp        = $input['no_telp'];
        $action->role_id        = $input['role_id'];
        $action->status_active  = $input['status_active'];
        $action->gambar         = $input['gambar'];
        $action->save();

        if ($action) {
            $this->data_return = [
                'data'      => $action,
                'status'    => parent::$SUCCESS_STATUS,
                'message'   => parent::$SUCCESS_SAVING_MESSAGE
            ];
        } else {
            $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_SAVING_MESSAGE
            ];
        }

        return $this->data_return;
    }

    public function isEmailExists($email) {
        $user   = $this->model->where('email', $email)->first();
        if ($user)
            return true;
    }

    public function sendToEmail($input) {

    }
}