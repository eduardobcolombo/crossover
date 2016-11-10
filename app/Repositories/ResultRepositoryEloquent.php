<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ResultRepository;
use App\Models\Result;
use App\Validators\ResultValidator;

/**
 * Class ResultRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ResultRepositoryEloquent extends BaseRepository implements ResultRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Result::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
