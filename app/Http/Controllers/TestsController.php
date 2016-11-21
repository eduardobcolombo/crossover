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
        $dataSet['type_test_id'] = $data['type_test_id'];
        $dataSet['description'] = $data['result_text'];
        $dataSet['report_id'] = $data['report_id'];

        $this->repository->create($dataSet);
        $typeTestTitle = $this->typeTestRepository->find($data['type_test_id'])->title;
        if ($request->ajax()) {
            $return = "<strong>".$typeTestTitle. "</strong><br /> -> " .$data['result_text'];
            return $return;
        }

        return redirect()->route('admin.tests.index');
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
