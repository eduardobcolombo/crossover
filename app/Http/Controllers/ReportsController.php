<?php

namespace App\Http\Controllers;


use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Repositories\ReportRepository;
use App\Repositories\PatientRepository;
use App\Repositories\TypeTestRepository;
use App\Repositories\TestRepository;

class ReportsController extends Controller
{

    private $patientsRepository;
    /**
     * @var TypeTestRepository
     */
    private $typeTestRepository;
    /**
     * @var TestRepository
     */
    private $testRepository;
    /**
     * @var ReportRepository
     */
    private $repository;
    /**
     * @var PDF
     */
    private $pdf;


    public function __construct(
        ReportRepository $repository,
        PatientRepository $patients,
        TypeTestRepository $typeTestRepository,
        TestRepository $testRepository,
        PDF $pdf
    )
    {

        $this->patientsRepository = $patients;
        $this->typeTestRepository = $typeTestRepository;
        $this->testRepository = $testRepository;
        $this->repository = $repository;
        $this->pdf = $pdf;
    }

    public function index(Request $request)
    {
        $data = $request->all();

        $patient_id = $data['patient_id'];

        $reports = $this->repository->findbyField('patient_id', $patient_id);

        return view('admin.reports.index', compact('reports', 'patient_id'));
    }


    public function show($id)
    {
        $report = $this->repository->find($id);
        $patient = $this->patientsRepository->find($report->patient_id);
        $tests = $this->testRepository->findbyField('report_id', $report->id);
        return view('admin.reports.show',compact('report','patient','tests'));
    }
    public function export($id)
    {
        $report = $this->repository->find($id);
        $patient = $this->patientsRepository->find($report->patient_id);
        $tests = $this->testRepository->findbyField('report_id', $report->id);

        $this->pdf->loadView('admin.reports.export',['patient' => $patient, 'tests' => $tests]);
        $file_name = str_replace(" ","_",$patient->name).'_report_'.$id.'.pdf';
        return $this->pdf->download($file_name);
    }
    public function mail()
    {
        return view('admin.reports.index');
    }


    public function create(Request $request)
    {
        $patient_id = $request->get('patient_id');
        $patient = $this->patientsRepository->find($patient_id);
        $patient_name = $patient->name;
        $data['patient_id'] = $patient_id;
        $report = $this->repository->create($data);

        $report_id = $report->id;
        $typeTests = $this->typeTestRepository->getTypeTest();
        return view('admin.reports.create', compact('typeTests','patient_name', 'report_id'));
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.patients.index');
    }

    public function destroy($id, Request $request)
    {
        $data = $request->all();

        $this->repository->delete($id);
        return redirect()->route('admin.reports.index', ['patient_id' => $data['patient_id']]);
    }

    public function filter(Request $request)
    {
        $name = $request->get('name');
        $patients = $this->patientsRepository->findbyField('name', $name);

        return view('admin.reports.select_patient', compact('patients','name'));
    }


}
