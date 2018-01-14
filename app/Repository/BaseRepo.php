<?php

namespace App\Repository;

use App\GeneralFunction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class BaseRepo extends GeneralFunction
{
    protected $model;
    protected $relations;
    protected $redirect;
    protected $data_return;

    public function __construct($model = null)
    {
        $this->model = $model;
    }

    public function get() {
        return $this->model->orderBy('id', 'asc')->get();
    }

    public function getOrder($key, $orderBy) {
        return $this->model->orderBy($key, $orderBy )->get();
    }

    public function getLimit($limit, $orderBy) {
        return $this->model->orderBy('id', $orderBy)->limit($limit)->get();
    }

    public function getWhere($where = []) {
        return $this->model->where($where)->get();
    }

    public function getWith($with = []) {
        return $this->model->with($with)->get();
    }

    public function getWithOrder($with = [], $key, $orderBy) {
        return $this->model->with($with)->orderBy($key, $orderBy)->get();
    }

    public function getWhereWith($where = [], $with = []) {
        return $this->model->where($where)->with($with)->get();
    }

    public function getWhereWithFirst($where = [], $with = []) {
        return $this->model->where($where)->with($with)->first();
    }

    public function getById($id) {
        return $this->model->find($id);
    }

    public function getWithById($with = [], $id) {
        return $this->model->with($with)->where('id', $id)->first();
    }

    public function getWhereWithById($where = [], $with = [], $id) {
        return $this->model->with($with)->where($where)->where('id', $id)->first();
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

        $action      = $this->model->insert($input);

        if ($action) {
            $this->data_return = [
                'data'      => $action,
                'status'    => parent::$SUCCESS_STATUS,
                'message'   => parent::$SUCCESS_SAVING_MESSAGE
            ];
        } else {
            $this->data_return = [
                'data'      => $action,
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_SAVING_MESSAGE
            ];
        }

        return $this->data_return;
    }

    public function update($input, $rules, $id, $id_name = 'id') {
        $validate    = Validator::make($input, $rules);

        if ($validate->fails()) {
            return $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_VALIDATE_MESSAGE
            ];
        }

        $input['updated_at']    = Carbon::now()->toDateTimeString();

        unset($input['_token']);

        $action     = $this->model->where($id_name, $id)->update($input);

        if ($action) {
            $this->data_return = [
                'status'    => parent::$SUCCESS_STATUS,
                'message'   => parent::$SUCCESS_EDITING_MESSAGE
            ];
        } else {
            $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_EDITING_MESSAGE
            ];
        }

        return $this->data_return;
    }

    public function delete($id) {
        $action     = $this->model->find($id);
        $action->delete();

        if ($action) {
            $this->data_return = [
                'status'    => parent::$SUCCESS_STATUS,
                'message'   => parent::$SUCCESS_DELETING_MESSAGE
            ];
        } else {
            $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_DELETING_MESSAGE
            ];
        }
    }

    public function deleteWhere($column, $value) {
        $action     = $this->model->where($column, $value)->delete();

        if ($action) {
            $this->data_return = [
                'status'    => parent::$SUCCESS_STATUS,
                'message'   => parent::$SUCCESS_DELETING_MESSAGE
            ];
        } else {
            $this->data_return = [
                'status'    => parent::$FAILED_STATUS,
                'message'   => parent::$FAILED_DELETING_MESSAGE
            ];
        }
    }
}