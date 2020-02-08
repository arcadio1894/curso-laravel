$(document).ready(function () {
    $('[data-film]').on('click', agregarPedido);
    isRentalFilm();

});

function isRentalFilm() {
    var filmUrl = $('#film_id').data('url');
    var film = $('#film_id').val();
    $.getJSON(filmUrl+'/'+film, function (response) {
        console.log(response.value);
        if (response.value)
        {
            $('#btnRental').hide();
        }
    });
}

function agregarPedido() {
    event.preventDefault();
    var filmUrl = $(this).data('url');
    var film = $(this).data('film');
    console.log(filmUrl);
    console.log(film);
    $.getJSON(filmUrl+'/'+film, function (response) {
        console.log(response.message);
        if (response.error){
            $.toast({
                text : response.message,
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
        } else {
            $.toast({
                text : response.message,
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
        }
        
    });
}















