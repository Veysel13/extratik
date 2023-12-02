<?php

namespace App\Domain\Patient\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Patient\Contracts\Medication as MedicationContract;

class Medication extends Model implements MedicationContract
{

    protected $table='medications';
}
