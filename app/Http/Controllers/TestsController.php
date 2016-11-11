<?php

namespace App\Http\Controllers;


use App\Models\TypeTest;
use Illuminate\Http\Request;
use App\Repositories\TestRepository;
use App\Repositories\TypeTestRepository;
use Illuminate\Support\Facades\Input;

class TestsController extends Controller
{
    private $repository;
    /**
     * @var TypeTestRepository
     */
    private $typeTestRepository;

    public function __construct(TestRepository $repository, TypeTestRepository $typeTestRepository)
    {
        $this->repository = $repository;
        $this->typeTestRepository = $typeTestRepository;
    }

    public function index()
    {
        $tests = $this->repository->paginate();

        return view('admin.tests.index', compact('tests'));
    }

    public function create()
    {
        $typeTests = $this->typeTestRepository->getTypeTest();
        //getTypeTest
        return view('admin.tests.create', compact('typeTests'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

//        $this->repository->create($data);

        return var_dump(::json(Request::all()));
//        return redirect()->route('admin.tests.index');
    }

    public function edit($id)
    {
        $type_test = $this->repository->find($id);

        return view('admin.tests.edit',compact('type_test'));

    }

    public function update(AdminTypeTestRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.tests.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.tests.index');
    }

    public function filter(Request $request)
    {
        $title = $request->get('title');
        $tests = $this->repository->findbyField('title', $title);

        return view('admin.tests.index', compact('tests','title'));
    }

}
