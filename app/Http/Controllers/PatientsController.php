<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PatientRepository;
use App\Services\PatientService;
use App\Http\Requests\AdminPatientRequest;
use App\Http\Requests\AdminPatientFilterRequest;



class PatientsController extends Controller
{
    private $repository;
    /**
     * @var PatientService
     */
    private $service;

    public function __construct(PatientRepository $repository, PatientService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        $patients = $this->repository->paginate();

        return view('admin.patients.index', compact('patients'));
    }

    public function create()
    {
        return view('admin.patients.create');
    }

    public function store(AdminPatientRequest $request)
    {
        $data = $request->all();

        $this->service->create($data);

        return redirect()->route('admin.patients.index');
    }

    public function edit($id)
    {
        $patient = $this->repository->find($id);

        return view('admin.patients.edit',compact('patient'));

    }

    public function update(AdminPatientRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.patients.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.patients.index');
    }

    public function filter(AdminPatientFilterRequest $request)
    {
        $name = $request->get('name');
        $patients = $this->repository->findbyField('name', $name);

        return view('admin.patients.index', compact('patients','name'));
    }

}
