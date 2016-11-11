<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TypeTestRepository;
use App\Models\TypeTest;
use App\Validators\TypeTestValidator;

/**
 * Class TypeTestRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TypeTestRepositoryEloquent extends BaseRepository implements TypeTestRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeTest::class;
    }

    public function getTypeTest()
    {
        return $this->model->all()->pluck('title', 'id');
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
