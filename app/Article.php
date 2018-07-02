<?php

namespace App;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable=['title','content','publish_at','user_id'];


    protected $dates=['publish_at'];

    public function setPublishAtAttribute($date){
        $this->attributes['publish_at']=Carbon::createFromFormat('Y-m-d',$date);
    }

    public function scopePublished($query){
        $query->where('publish_at','<=',Carbon::now());
    }

    public function owner(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
