<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Refs_levels
 * @package App\Models
 * @version November 14, 2019, 3:59 am UTC
 *
 * @property string name
 * @property string description
 * @property string reward
 * @property string CongraturatoryMessage
 * @property string TargetRefferals
 * @property string target_per_referal
 */
class Refs_levels extends Model
{
    use SoftDeletes;

    public $table = 'refs_levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'reward',
        'CongraturatoryMessage',
        'TargetRefferals',
        'target_per_referal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'reward' => 'string',
        'CongraturatoryMessage' => 'string',
        'TargetRefferals' => 'string',
        'target_per_referal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
