<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $tarea_id
 * @property $name
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Tarea $tarea
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'tarea_id' => 'required',
		'name' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tarea_id','name','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tarea()
    {
        return $this->hasOne('App\Models\Tarea', 'id', 'tarea_id');
    }
    

}
