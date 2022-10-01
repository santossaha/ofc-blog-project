$(document).ready(function(){
    $("#password_update").submit(function(e) {
        e.preventDefault();
    }).validate({
        rules: {
            current_password: {
                required: true,
            },
            password: {
                required: true,
                minlength: 5,
            },
            password_confirmation: {
                minlength : 5,
                equalTo: "#password_new",
            },

        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});

function password_show_hide() {
    var x = document.getElementById("current_password");
    var show_eye = document.getElementById("show_eye1");
    var hide_eye = document.getElementById("hide_eye1");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}

function passwordcheck() {
    var x = document.getElementById("password_new");
    var show_eye = document.getElementById("show_eye2");
    var hide_eye = document.getElementById("hide_eye2");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}

function password_confirmation() {
    var x = document.getElementById("password_confirmation");
    var show_eye = document.getElementById("show_eye3");
    var hide_eye = document.getElementById("hide_eye3");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}
