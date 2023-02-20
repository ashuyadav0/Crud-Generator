<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recepte
 *
 * @property $id
 * @property $titol
 * @property $temps_cocció
 * @property $fotografia
 * @property $ingredients
 * @property $passos
 * @property $category_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recepte extends Model
{
    
    static $rules = [
		'titol' => 'required',
		'temps_cocció' => 'required',
		'fotografia' => 'required',
		'ingredients' => 'required',
		'passos' => 'required',
		'category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titol','temps_cocció','fotografia','ingredients','passos','category_id'];



}
