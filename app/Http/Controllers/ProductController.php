<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->where('company_id', 1)->with(['productType'])->get();
    }

    public function store(ProductRequest $request)
    {
        $validateData = $request->validated();
        if ($this->model->create($validateData)) {
            return response(['response' => true, 'message' => 'Producto guardado con exito'], 201);
        } else {
            return response(['response' => false, 'message' => 'No se pudo guardar el producto'], 400);
        }
    }

    public function show($id)
    {
        return $this->model->with(['productType'])->find($id);
    }

    public function update(ProductRequest $request, $id)
    {
        $validateData = $request->validated();
        if ($this->model->find($id)->update($validateData)) {
            return response(['response' => true, 'message' => 'Producto modificado con exito'], 200);
        } else {
            return response(['response' => false, 'message' => 'No se pudo modificar el producto'], 400);
        }
    }

    public function destroy($id)
    {
        if ($this->model->find($id)->delete()) {
            return response(['response' => true, 'message' => 'Producto eliminado con exito'], 200);
        } else {
            return response(['response' => false, 'message' => 'No se pudo eliminar el producto'], 400);
        }
    }
}
