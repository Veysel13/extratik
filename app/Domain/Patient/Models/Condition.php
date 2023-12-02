<?php

namespace App\Domain\Patient\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Patient\Contracts\Condition as ConditionContract;

class Condition extends Model implements ConditionContract
{
    protected $table = 'conditions';

}
