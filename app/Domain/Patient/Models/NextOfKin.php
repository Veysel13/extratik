<?php

namespace App\Domain\Patient\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Patient\Contracts\NextOfKin as NextOfKinContract;

class NextOfKin extends Model implements NextOfKinContract
{

    protected $table='next_of_kins';

    public function patient(){
        return $this->belongsTo(Patient::class,'next_of_kin','id');
    }
}
