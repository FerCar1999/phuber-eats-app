<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function __construct(Company $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        return $this->model->get();
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        return $this->with(['products.productType'])->find($id);
    }

    public function update(Request $request)
    {
        # code...
    }

    public function destroy()
    {
    }
}
