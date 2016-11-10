<?php
namespace App\Services;


use App\Repositories\PatientRepository;
use Illuminate\Support\Facades\Auth;
class PatientService
{

    /**
     * @var PatientRepository
     */
    private $patientRepository;

    public function __construct(PatientRepository $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }


    public function create(array $data)
    {

        \DB::beginTransaction();
        try {

            $data['passcode'] = md5($data['name'].time());
            $patient = $this->patientRepository->create($data);
            $patient->save();
            \DB::commit();

            return $patient;

        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }
    }

}