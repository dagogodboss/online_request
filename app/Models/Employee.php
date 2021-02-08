<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Customer
 * @package App\Models
 * @version January 19, 2021, 10:44 am UTC
 *
 * @property string $last_name
 * @property string $first_name
 * @property string $email
 * @property string $city
 * @property string $nationality
 * @property string $phone_number
 * @property string $phone_number
 * @property string $dateofbirth
 * @property string $religion
 * @property string $maritalStatus
 * @property string $nx_first_name
 * @property string $nx_last_name
 * @property string $nxother_name
 * @property string $nxdateofbirth
 * @property string $nxreligion
 * @property string $nxgender
 * @property string $nxpermanent_address
 * @property string $nxmobile
 * @property string $nxcity
 * @property string $nxnationality
 * @property string $nxstate
 * @property string $nxrelationship
 * @property string $bnkfirst_name
 */
class Employee extends Model
{

    public $table = 'tbl_employees';

    public $fillable = [
        'last_name','first_name','email','city','country_id','mobile'
    ];

    public static function getEmployee($name){
        $employee_names = explode(' ', $name);
        $user = null;
        foreach($employee_names as $user_name){
            $user = self::where('first_name', '%LIKE%', $user_name)->orWhere('last_name', '%LIKE%', $user_name )->first();
        }
        return $user != null ? $user->id : 311;
    }
}
