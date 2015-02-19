<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model {

    protected $table = 'featured';

    protected $fillable = ['location','post_id',
        'image','visible'];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
