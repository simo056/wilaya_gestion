<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\AnonymousNotifiable;

class Activite extends Model 

{

    protected $table = 'activites';
    protected $primaryKey = 'id_activites';
    public $timestamps = false;

    protected $fillable = ['objet','description','date_debut','date_fin','status',' commentaire','piece_joints','id_thematiques','id_user'];

    public function Thematique()
    {
        return $this->belongsTo(Thematique::class, 'id_thematiques');
    
    }
    public function Proprietaire(){
        return $this->belongsTo('App\models\User','id_user');
    }

    


}

