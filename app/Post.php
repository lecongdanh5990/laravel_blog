<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable=[
        'title','content','category_id','featured','slug'
    ];

    protected $dates=['deleted_at'];

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}
