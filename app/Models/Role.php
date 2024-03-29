<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role_user';
    protected $primaryKey = 'id_role';
    public $timestamps = false;

    protected $fillable = [
        'nom_role'
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'id_role');
    }
}

?>