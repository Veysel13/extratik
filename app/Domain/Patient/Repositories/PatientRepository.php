<?php

namespace App\Domain\Patient\Repositories;


use App\Core\Eloquent\Repository;
use Illuminate\Pagination\LengthAwarePaginator;

class PatientRepository extends Repository
{
    function model()
    {
        return 'App\Domain\Patient\Contracts\Patient';
    }

    public function getWithRelations($paginate = 10):LengthAwarePaginator
    {
        return $this->model->with(['nextOfKins', 'conditions', 'alergies', 'medications'])->paginate($paginate);
    }

    public function findWithRelations($id)
    {
        return $this->model->with(['nextOfKins', 'conditions', 'alergies', 'medications'])->where('id_card',$id)->first();
    }
}
