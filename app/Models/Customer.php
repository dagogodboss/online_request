<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
class Customer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'customers';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'last_name','first_name','email','city','nationality','phone_number','phone_number','dateofbirth','religion','maritalStatus','nx_first_name','nx_last_name','nxother_name','nxdateofbirth','nxreligion','nxgender','nxpermanent_address','nxmobile','nxcity','nxnationality','nxstate','nxrelationship','bnkfirst_name','bnklast_name','bank', 'account_number', 'idcard', 'investplan', 'duration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer','last_name' => 'string','first_name' => 'string','email' => 'string','city' => 'string','nationality' => 'string','phone_number' => 'string','phone_number' => 'string','dateofbirth' => 'string','religion' => 'string','maritalStatus' => 'string','nx_first_name' => 'string','nx_last_name' => 'string','nxother_name' => 'string','nxdateofbirth' => 'string','nxreligion' => 'string','nxgender' => 'string','nxpermanent_address' => 'string','nxmobile' => 'string','nxcity' => 'string','nxnationality' => 'string','nxstate' => 'string','nxrelationship' => 'string','bnkfirst_name' => 'string','bank' => 'string', 'account_number' => 'string', 'idcard' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = ['last_name' => 'required','first_name' => 'required','email' => 'required|email|unique:customers','city' => 'required','nationality' => 'required','phone_number' => 'required','phone_number' => 'required|unique:customers','dateofbirth' => 'required','religion' => 'required','maritalStatus' => 'required','nx_first_name' => 'required','nx_last_name' => 'required','nxdateofbirth' => 'required','nxreligion' => 'required','nxgender' => 'required','nxpermanent_address' => 'required','nxmobile' => 'required','nxcity' => 'required','nxnationality' => 'required','nxstate' => 'required','nxrelationship' => 'required','bnkfirst_name' => 'required','bnklast_name' => 'required', 'account_number' => 'required', 'idcard' => 'required', 'duration' => 'required' 
    ];
}
