<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'sexo',
        'peso',
        'altura',
        'raca',
        'user_id'
    ];

    protected $dates = [
        'data_nasc'
        ];

    /* ********************************************* RELATIONSHIPS ************************************************* */

    public function user()
    {
        return $this->hasOne(
            User::class,
            'id',
            'user_id'
        );
    }
}
