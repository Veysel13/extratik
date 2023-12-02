<?php

namespace App\Http\Controllers\Backend;

use App\Domain\Patient\Http\Requests\PatientRequest;
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
    }

    public function index(Request $request)
    {
        $blade = [];
        $blade['patients'] = $this->patientRepository->paginate(10);

        return view('frontend.patient.index', $blade);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        return view('frontend.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        if ($this->patientRepository->create($request)) {
            session()->flash('success', 'Patient added successfully');

            return redirect()->route('frontend.patient.index');
        } else {
            session()->flash('success', 'Adding a patient is incorrect');

            return redirect()->back();
        }
    }
}
