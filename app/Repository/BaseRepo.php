<?php

namespace App\Repository;

use Dotenv\Validator;

class BaseRepo
{
    protected $model;
    protected $relations;
    protected $redirect;
    protected $data_return;

    public function __construct($model = null)
    {
        $this->model = $model;
    }

    public function create($input, $rules) {
        $validate    = Validator::make($input, $rules);

        if ($validate->fails()) {

        }
    }

}