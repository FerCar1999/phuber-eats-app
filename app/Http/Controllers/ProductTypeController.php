<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    private $model;

    public function __construct(ProductType $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->get();
    }
}
