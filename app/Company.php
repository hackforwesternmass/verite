<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name'];
    protected $table = 'companies';
    //
    public function audits()
    {
        return $this->belongsToMany('App\Audit');
    }
}
