<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\ReportRepository;
use App\Repositories\PatientRepository;
use App\Repositories\TypeTestRepository;

class ReportsController extends Controller
{
    private $repository;
    private $patientsRepository;
    /**
     * @var TypeTestRepository
     */
    private $typeTestRepository;


    public function __construct(
        ReportRepository $repository,
        PatientRepository $patients,
        TypeTestRepository $typeTestRepository
    )
    {
        $this->repository = $repository;
        $this->patientsRepository = $patients;
        $this->typeTestRepository = $typeTestRepository;
    }

    public function index()
    {
        return view('admin.reports.index');
    }

    public function select_patient()
    {
//        $patients = $this->patientsRepository->getPatients();
        $patients = null;
        return view('admin.reports.select_patient',compact('patients'));
    }

    public function create()
    {
        $typeTests = $this->typeTestRepository->getTypeTest();
        return view('admin.reports.create', compact('typeTests'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.reports.edit');
    }

    public function edit($id)
    {
        $report = $this->repository->find($id);

        return view('admin.reports.edit',compact('report'));

    }

    public function update(AdminPatientRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.reports.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.reports.index');
    }

    public function filter(Request $request)
    {
        $name = $request->get('name');
        $patients = $this->patientsRepository->findbyField('name', $name);

        return view('admin.reports.select_patient', compact('patients','name'));
    }


}
