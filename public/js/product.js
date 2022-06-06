const url = '/api/products';
const url_product_type = '/api/product-types';

const modalModificar = new bootstrap.Modal(document.getElementById('updateProduct'), {
    keyboard: false
});
const modalAgregar = new bootstrap.Modal(document.getElementById('addProduct'), {
    keyboard: true
});

$(document).ready(function () {
    getProducts();
    getProductTypes();
});

function getProducts() {

    fetch(url)
        .then(response => response.json())
        .then(data => {
            $('#tb_products').empty();
            $.each(data, function (index, value) {
                $('#tb_products').append(
                    `<tr><td>${value.name}</td>` +
                    `<td>${value.product_type.name}</td>` +
                    `<td>$ ${value.price}</td>` +
                    `<td><button type="button" class="btn btn-warning" onclick="showInformation(${value.id})">Modificar</button>` +
                    ` <button type="button" class="btn btn-danger" onclick="deleteInformation(${value.id})">Eliminar</button></td></tr>`
                );
            });
        });
}

function getProductTypes() {

    fetch(url_product_type)
        .then(response => response.json())
        .then(data => {
            $('#product_type_id').empty();
            $('#product_type_id_u').empty();
            $('#product_type_id').append('<option value="" selected>Seleccione una opcion</option>');
            $('#product_type_id_u').append('<option value="" selected>Seleccione una opcion</option>');
            $.each(data, function (index, value) {
                $('#product_type_id').append(`<option value="${value.id}">${value.name}</option>`);
                $('#product_type_id_u').append(`<option value="${value.id}">${value.name}</option>`);
            });
        });
}

function showInformation(id) {
    $.ajax({
        type: "GET",
        url: `${url}/${id}`,
        data: [],
        dataType: "JSON",
        success: function (data) {
            $('#id').val(data.id);
            $('#name_u').val(data.name);
            $('#description_u').val(data.description);
            $('#price_u').val(data.price);
            $('#discount_u').val(data.discount);
            $('#product_type_id_u').val(data.product_type_id);
            modalModificar.show();
        }
    });
}

function guardarInformacion() {
    let form = new FormData();
    form.append('name', document.getElementById('name').value);
    form.append('description', document.getElementById('description').value);
    form.append('price', document.getElementById('price').value);
    form.append('product_type_id', document.getElementById('product_type_id').value);
    form.append('company_id', 1);
    fetch(url, {
            method: 'POST',
            redirect: 'follow',
            body: form,
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(resp => {
            if (resp.message == "The given data was invalid.") {
                for (const error in resp.errors) {
                    $(`#${error}`).addClass('is-invalid');
                }
                $('#errors').empty();
                $.each(resp.errors, function (i, v) {
                    $('#errors').append(`<div class="alert alert-warning" role="alert">${v}</div>`);
                });
                Swal.fire({
                    title: 'Advertencia',
                    text: "Debe llenar los campos en rojo",
                    icon: 'warning',
                    confirmButtonText: 'Cerrar'
                });
            } else {
                Swal.fire({
                    title: 'Exito',
                    text: resp.message,
                    icon: 'success',
                    confirmButtonText: 'Cerrar'
                });
                modalAgregar.hide();
                getProducts();
            }
        });
}

function modificarInformacion() {
    const name = document.getElementById('name_u').value
    const description = document.getElementById('description_u').value
    const price = document.getElementById('price_u').value
    const product_type_id = document.getElementById('product_type_id_u').value
    const company_id = 1
    const id = document.getElementById('id').value;
    fetch(`${url}/${id}?name=${name}&description=${description}&price=${price}&product_type_id=${product_type_id}&company_id=${company_id}`, {
            method: 'PUT',
            redirect: 'follow',
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(resp => {
            if (resp.message == "The given data was invalid.") {
                for (const error in resp.errors) {
                    $(`#${error}_u`).addClass('is-invalid');
                }
                Swal.fire({
                    title: 'Advertencia',
                    text: "Debe llenar los campos en rojo",
                    icon: 'warning',
                    confirmButtonText: 'Cerrar'
                });
            } else {
                Swal.fire({
                    title: 'Exito',
                    text: resp.message,
                    icon: 'success',
                    confirmButtonText: 'Cerrar'
                });
                modalModificar.hide();
                getProducts();
            }
        });
}

function deleteInformation(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Está seguro de eliminar este campo?',
        text: "Una vez eliminado, no se puede regresar!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`${url}/${id}`, {
                    method: 'DELETE'
                })
                .then(response => response.json())
                .then(resp => {

                    swalWithBootstrapButtons.fire(
                        'Eliminado!',
                        resp.message,
                        'success'
                    );
                    getProducts();
                });

        }
    })

}
