<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = ['country', 'company_id', 'date'];
    protected $table = 'audits';
    //
    public function company()
    {
        return $this->hasOne(Company::class);
    }

}
