<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'categories';

    protected $fillable = ['name','colour'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
