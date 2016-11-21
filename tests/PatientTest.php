<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PatientTest extends TestCase
{


    public function __construct()
    {
        $this->patient = Mockery::mock('App\Models\Patient');
        $this->model = Mockery::mock('Eloquent');
        $this->repository = Mockery::mock(App\Repositories\PatientRepository::class);
    }


    public function testAccessIfAuthenticated()
    {
        $this->withSession(['foo' => 'bar'])
            ->visit('/admin/patients');
    }


}
