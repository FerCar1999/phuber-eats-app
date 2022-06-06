@extends('welcome')
@section('content')
    <div class="container pt-5 align-items-center">
        <div class="col-12 text-center mt-5">
            <h2>Productos</h2>
        </div>
        <div class="col-12 text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProduct">
                Agregar Producto
            </button>
        </div>
        <div class="col-12 text-center pt-4">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo de Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tb_products">
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Creacion Materia -->
    <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ingrese el nombre del producto:</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Ingrese el precio:</label>
                        <input type="text" class="form-control" id="price" placeholder="Ingrese el precio del producto">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Ingrese descripción del producto" id="description"></textarea>
                            <label for="description">Descripción del producto</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="product_type_id" class="form-label">Seleccione el tipo de producto:</label>
                        <select class="form-select" id="product_type_id" aria-label="Default select example">

                        </select>
                    </div>
                    <div id="errors"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a type="button" class="btn btn-primary" onclick="guardarInformacion()">Guardar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal  Modificacion Materia -->
    <div class="modal fade" id="updateProduct" tabindex="-1" aria-labelledby="updateProductLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar Alumno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="name_u" class="form-label">Ingrese el nombre del producto:</label>
                        <input type="text" class="form-control" id="name_u" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="mb-3">
                        <label for="price_u" class="form-label">Ingrese el precio:</label>
                        <input type="text" class="form-control" id="price_u" placeholder="Ingrese el precio del producto">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Ingrese descripción del producto" id="description_u"></textarea>
                            <label for="description_u">Descripción del producto</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="product_type_id_u" class="form-label">Seleccione el tipo de producto:</label>
                        <select class="form-select" id="product_type_id_u" aria-label="Default select example">

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a type="button" class="btn btn-primary" onclick="modificarInformacion()">Guardar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@endsection
