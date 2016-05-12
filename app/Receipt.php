<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['no','date','customer','address','province','total','user_id','read'];
    protected $primaryKey='id';
    public function user(){
    	return $this->belongsTo('App\User',$this->primaryKey);
    }
}