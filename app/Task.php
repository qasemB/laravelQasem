<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['id'];

//    protected  static  function boot()
//    {
//        parent::boot(); // TODO: Change the autogenerated stub
//        static::addGlobalScope('stat', function (Builder $builder){
//            $builder->where('status' , 0);
//        });
//    }
    //
}
