<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefsCategory
 * @package App\Models
 * @version November 14, 2019, 3:56 am UTC
 *
 * @property string name
 */
class RefsCategory extends Model
{
    use SoftDeletes;

    public $table = 'ref_categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'user_id',
        'referal_count',
        'referal_visits'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id'=>'string',
        'referal_count'=>'integer',
        'referal_visits'=>'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ];

    
}
