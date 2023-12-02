<?php

namespace App\Domain\Patient\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Patient\Contracts\Alergie as AlergieContract;

class Alergie extends Model implements AlergieContract
{
    protected $table = 'alergies';

}
