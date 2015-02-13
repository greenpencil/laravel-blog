<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['name',
        'perm_create_post', 'perm_edit_post', 'perm_delete_post',
        'perm_create_category', 'perm_edit_category', 'perm_delete_category',
        'perm_create_comment', 'perm_edit_comment', 'perm_delete_comment',
        'perm_create_user', 'perm_set_perms',
        'perm_create_role', 'perm_edit_role', 'perm_delete_role'];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
