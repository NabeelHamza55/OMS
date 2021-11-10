$(document).ready(function() {
    $('.repeater').repeater();
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$('.select2-example').select2({
    placeholder: 'Select the Option'
});

$(document).ready(function() {
    $('.c-btn').on('click', function(e) {
        e.preventDefault();
        const value = $(this).attr('data-value');
        $('.redirect').attr('href', '/users/delete_user/' + value);
    });
});
$(document).ready(function() {
    $('.del_role').on('click', function(e) {
        e.preventDefault();
        const value = $(this).attr('data-value');
        $('.pass_val').attr('value', value);
        $('.redirect2').attr('action', "roles/" + value);
    });
});
$(document).ready(function() {
    $('.del_role').on('click', function(e) {
        e.preventDefault();
        const value = $(this).attr('data-value');
        $('.pass_val').attr('value', value);
        $('.redirect3').attr('action', "usertypes/" + value);
    });
});




// $('#userForm').attr("action", "/users/delete_user" + "/" + id);

// $(document).ready(function() {
//     $('.toggle-class').on('change', function() {
//         var status = $(this).prop('checked') == true ? 1 : 0;
//         var user_id = $(this).data('id');
//         $.ajax({
//             type: "GET",
//             url: "{{ route('changeStatus') }}",
//             data: { 'status': status, 'user_id': user_id },
//             dataType: "json",
//             success: function(data) {

//             }
//         });
//     });
// });

// $('document').ready(function() {
//     $('userstatus').on('change', function() {
//         // $(this).closest('form').submit();
//         // var user_id = $('.user_id').val();
//         // var enable = $('.userenable').val();
//         // var disable = $('.userdisable').val();
//         // $.ajax({
//         //     type: "POST",
//         //     url: "oms.test/users/changestatus",
//         //     data: { 'enable': enable, 'disable': disable },
//         //     dataType: 'html'
//         // });
//     });

// });