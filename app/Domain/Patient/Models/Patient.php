<?php

namespace App\Domain\Patient\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Domain\Patient\Database\Factory\PatientFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Patient\Contracts\Patient as PatientContract;

class Patient extends Model implements PatientContract
{

    use HasFactory;

    protected $table = 'patients';
    protected $fillable = [
        'id_card',
        'gender',
        'name',
        'surname',
        'date_of_birth',
        'address',
        'post_code',
        'contact_number_one',
        'contact_number_two',
    ];

    protected $appends = ['full_name', 'image'];

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function getImageAttribute()
    {
        return 'https://ui-avatars.com/api/?background=00a4bd&color=FFF&length=1&name=' . $this->name;
    }

    public function nextOfKins()
    {
        return $this->hasMany(NextOfKin::class);
    }

    public function conditions()
    {
        return $this->hasMany(Condition::class);
    }

    public function alergies()
    {
        return $this->hasMany(Alergie::class);
    }

    public function medications()
    {
        return $this->hasMany(Medication::class);
    }

    protected static function newFactory()
    {
        return PatientFactory::new();
    }

}
