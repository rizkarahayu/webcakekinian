<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29/12/17
 * Time: 17:42
 */

namespace App;


class GeneralFunction
{
    public static $SUCCESS_STATUS   = 'success';
    public static $FAILED_STATUS    = 'failed';

    public static $SUCCESS_CODE         = 200;
    public static $CREATED_CODE         = 201;
    public static $FORBIDDEN_CODE       = 403;
    public static $NOT_FOUND_CODE       = 404;
    public static $INTERNAL_ERROR_CODE  = 500;

    public static $EMPTY_DATA_MESSAGE                   = 'No data Found !';
    public static $FAILED_VALIDATE_MESSAGE              = 'Validation failed !';
    public static $IMAGE_NOT_VALID_MESSAGE              = 'Image extensions not valid !';
    public static $PASSWORD_CONFIRM_NOTVALID_MESSAGE    = 'Confirmation Password is not Valid !';
    public static $EMAIL_EXIST_MESSAGE                  = 'Email is already exists !';

    public static $SUCCESS_SAVING_MESSAGE               = 'Success saving data !';
    public static $FAILED_SAVING_MESSAGE                = 'Failed saving data !';
    public static $SUCCESS_EDITING_MESSAGE              = 'Success editing data !';
    public static $FAILED_EDITING_MESSAGE               = 'Failed editing data !';
    public static $SUCCESS_DELETING_MESSAGE             = 'Success deleting data !';
    public static $FAILED_DELETING_MESSAGE              = 'Failed deleting data !';
    public static $SUCCESS_STATUS_CHANGE_CUSTOMER_MESSAGE   = 'Success change status users !';
    public static $FAILED__STATUS_CHANGE_CUSTOMER_MESSAGE   = 'Failed change status users !';
}