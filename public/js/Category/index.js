$(document).ready(function () {
    $modalRegister = $('#modalRegistrar');
    $formRegistrar = $('#formRegistrar');
    $('#btnRegistrar').on('click', showModalRegister);
    $formRegistrar.on('submit', registrarCategoria);

    $modalEditar = $('#modalModificar');
    $formEditar = $('#formModificar');
    $('[data-editar]').on('click', showModalModificar);
    $formEditar.on('submit', modificarCategoria);

    $modalEliminar = $('#modalEliminar');
    $formEliminar = $('#formEliminar');
    $('[data-eliminar]').on('click', showModalEliminar);
    $formEliminar.on('submit', eliminarCategoria);

    $modalHabilitar = $('#modalHabilitar');
    $formHabilitar = $('#formHabilitar');
    $('[data-habilitar]').on('click', showModalHabilitar);
    $formHabilitar.on('submit', HabilitarCategoria);
});

var $modalRegister;
var $formRegistrar;
var $modalEditar;
var $formEditar;
var $modalEliminar;
var $formEliminar;
var $modalHabilitar;
var $formHabilitar;

function showModalRegister() {
    $modalRegister.modal('show');
}

function registrarCategoria() {
    event.preventDefault();
    var categoryUrl = $formRegistrar.data('url');
    $.ajax({
        url: categoryUrl,
        method: 'POST',
        data: $formRegistrar.serializeArray(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            if (data != "") {
                console.log(data);
                for (var property in data){
                    $.toast({
                        text : data[property],
                        showHideTransition : 'slide',  // It can be plain, fade or slide
                        bgColor : 'red',              // Background color for toast
                        textColor : '#eee',            // text color
                        allowToastClose : false,       // Show the close button or not
                        hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                        stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                        textAlign : 'left',            // Alignment of text i.e. left, right, center
                        position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                        icon: 'error',
                        heading: 'Error'
                    });
                }
            } else {
                $.toast({
                    text : 'Categoría creada correctamente.',
                    showHideTransition : 'slide',  // It can be plain, fade or slide
                    bgColor : 'green',              // Background color for toast
                    textColor : '#eee',            // text color
                    allowToastClose : false,       // Show the close button or not
                    hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                    stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                    textAlign : 'left',            // Alignment of text i.e. left, right, center
                    position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout(function () {
                    location.reload();
                }, 5000)
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}

function showModalModificar() {
    // Obtener los datos
    var id = $(this).data('id');
    var name = $(this).data('name');
    var description = $(this).data('description');
    $formEditar.find('[name="category_id"]').val(id);
    $formEditar.find('[name="nameE"]').val(name);
    $formEditar.find('[name="descriptionE"]').val(description);
    $modalEditar.modal('show');
}

function modificarCategoria() {
    event.preventDefault();
    var categoryUrl = $formEditar.data('url');
    $.ajax({
        url: categoryUrl,
        method: 'POST',
        data: $formEditar.serializeArray(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            if (data != "") {
                console.log(data);
                for (var property in data){
                    $.toast({
                        text : data[property],
                        showHideTransition : 'slide',  // It can be plain, fade or slide
                        bgColor : 'red',              // Background color for toast
                        textColor : '#eee',            // text color
                        allowToastClose : false,       // Show the close button or not
                        hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                        stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                        textAlign : 'left',            // Alignment of text i.e. left, right, center
                        position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                        icon: 'error',
                        heading: 'Error'
                    });
                }
            } else {
                $.toast({
                    text : 'Categoría modificada correctamente.',
                    showHideTransition : 'slide',  // It can be plain, fade or slide
                    bgColor : 'green',              // Background color for toast
                    textColor : '#eee',            // text color
                    allowToastClose : false,       // Show the close button or not
                    hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                    stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                    textAlign : 'left',            // Alignment of text i.e. left, right, center
                    position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout(function () {
                    location.reload();
                }, 5000)
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}

function showModalEliminar() {
    // Obtener los datos
    var id = $(this).data('id');
    var name = $(this).data('name');
    $formEliminar.find('[name="category_id"]').val(id);
    $formEliminar.find('[name="nameD"]').val(name);
    $modalEliminar.modal('show');
}

function eliminarCategoria() {
    event.preventDefault();
    var categoryUrl = $formEliminar.data('url');
    $.ajax({
        url: categoryUrl,
        method: 'POST',
        data: $formEliminar.serializeArray(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            if (data != "") {
                console.log(data);
                for (var property in data){
                    $.toast({
                        text : data[property],
                        showHideTransition : 'slide',  // It can be plain, fade or slide
                        bgColor : 'red',              // Background color for toast
                        textColor : '#eee',            // text color
                        allowToastClose : false,       // Show the close button or not
                        hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                        stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                        textAlign : 'left',            // Alignment of text i.e. left, right, center
                        position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                        icon: 'error',
                        heading: 'Error'
                    });
                }
            } else {
                $.toast({
                    text : 'Categoría eliminada correctamente.',
                    showHideTransition : 'slide',  // It can be plain, fade or slide
                    bgColor : 'green',              // Background color for toast
                    textColor : '#eee',            // text color
                    allowToastClose : false,       // Show the close button or not
                    hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                    stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                    textAlign : 'left',            // Alignment of text i.e. left, right, center
                    position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout(function () {
                    location.reload();
                }, 5000)
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}

function showModalHabilitar() {
    // Obtener los datos
    var id = $(this).data('id');
    var name = $(this).data('name');
    $formHabilitar.find('[name="category_id"]').val(id);
    $formHabilitar.find('[name="nameH"]').val(name);
    $modalHabilitar.modal('show');
}

function HabilitarCategoria() {
    event.preventDefault();
    var categoryUrl = $formHabilitar.data('url');
    $.ajax({
        url: categoryUrl,
        method: 'POST',
        data: $formHabilitar.serializeArray(),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            if (data != "") {
                console.log(data);
                for (var property in data){
                    $.toast({
                        text : data[property],
                        showHideTransition : 'slide',  // It can be plain, fade or slide
                        bgColor : 'red',              // Background color for toast
                        textColor : '#eee',            // text color
                        allowToastClose : false,       // Show the close button or not
                        hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                        stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                        textAlign : 'left',            // Alignment of text i.e. left, right, center
                        position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                        icon: 'error',
                        heading: 'Error'
                    });
                }
            } else {
                $.toast({
                    text : 'Categoría habilitada nuevamente.',
                    showHideTransition : 'slide',  // It can be plain, fade or slide
                    bgColor : 'green',              // Background color for toast
                    textColor : '#eee',            // text color
                    allowToastClose : false,       // Show the close button or not
                    hideAfter : 5000,              // `false` to make it sticky or time in miliseconds to hide after
                    stack : 5,                     // `fakse` to show one stack at a time count showing the number of toasts that can be shown at once
                    textAlign : 'left',            // Alignment of text i.e. left, right, center
                    position : 'top-right',       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout(function () {
                    location.reload();
                }, 5000)
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}













