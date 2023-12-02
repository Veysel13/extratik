<?php

namespace App\Http\Controllers\Frontend;

use App\Domain\Patient\Repositories\PatientRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    protected $patientRepository;

    public function __construct(
        PatientRepository $patientRepository
    )
    {
        $this->patientRepository = $patientRepository;
    }

    public function index(Request $request)
    {
        $blade = [];
        $patients = $this->patientRepository->getWithRelations(10);

        $blade['patients'] = $patients;
        return view('frontend.patient.index', $blade);
    }

    public function detail(Request $request, $id)
    {
        $blade = [];
        $patient = $this->patientRepository->findWithRelations($id);
        if (!$patient) {
            session()->flash('errors', 'Not Found Patient');
            return redirect()->back();
        }

        $blade['patient'] = $patient;

        return view('frontend.patient.view', $blade);
    }

    public function sections($id, Request $request)
    {
        $patients = $this->patientRepository->findWithRelations($id);

        $content = \View::make('frontend.patient.section.' . $request->section, [$request->section => $patients->{$request->section}]);

        return response()->json([
            'status' => true,
            'content' => $content->render()
        ]);
    }
}
