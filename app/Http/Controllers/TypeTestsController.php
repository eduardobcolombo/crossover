<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TypeTestRepository;
use App\Http\Requests\AdminTypeTestRequest;

class TypeTestsController extends Controller
{
    private $repository;

    public function __construct(TypeTestRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $type_tests = $this->repository->paginate();

        return view('admin.type_tests.index', compact('type_tests'));
    }

    public function create()
    {
        return view('admin.type_tests.create');
    }

    public function store(AdminTypeTestRequest $request)
    {
        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('admin.type_tests.index');
    }

    public function edit($id)
    {
        $type_test = $this->repository->find($id);

        return view('admin.type_tests.edit',compact('type_test'));

    }

    public function update(AdminTypeTestRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.type_tests.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.type_tests.index');
    }

    public function filter(Request $request)
    {
        $title = $request->get('title');
        $type_tests = $this->repository->findbyField('title', $title);

        return view('admin.type_tests.index', compact('type_tests','title'));
    }

}
