import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

$(function () {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[id='registerForm']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true,
            },
        },
        // Specify validation error messages
        messages: {
            name: "Please enter your Name",
            email: "Please enter a valid email address",
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            form.submit();
        },
    });
});

$(document).ready(function () {
    $("#passwordForm #password").on("keyup", function () {
        if ($(this).val().length > 5 && $(this).val().length < 9) {
            $("#passwordForm #passLength").addClass("valid");
        } else {
            $("#passwordForm #passLength").removeClass("valid");
        }

        if (isUpperCase($(this).val())[0]) {
            $("#passwordForm #passUpper").addClass("valid");
        } else {
            $("#passwordForm #passUpper").removeClass("valid");
        }

        if (isUpperCase($(this).val())[1]) {
            $("#passwordForm #passLower").addClass("valid");
        } else {
            $("#passwordForm #passLower").removeClass("valid");
        }

        if ($(this).val() == $("#passwordForm #password_confirmation").val()) {
            $("#passwordForm #passMatch").addClass("valid");
        } else {
            $("#passwordForm #passMatch").removeClass("valid");
        }
        validateValid();
    });

    $("#passwordForm #password_confirmation").on("keyup", function () {
        if ($(this).val() == $("#passwordForm #password").val()) {
            $("#passwordForm #passMatch").addClass("valid");
        } else {
            $("#passwordForm #passMatch").removeClass("valid");
        }
        validateValid();
    });

    $("#passwordForm").on("submit", function (e) {
        e.preventDefault();
        var data = getFormData($(this));
        const email = $(this).data("email");
        $.post("/register/password/" + email, data)
            .done(function (data) {
                if (data == "ok") {
                    $("#finishing").removeClass("hidden");
                }
            })
            .fail(function (data) {
                console.log(data);
            });
    });

    function getFormData($form) {
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function (n, i) {
            indexed_array[n["name"]] = n["value"];
        });

        return indexed_array;
    }

    function validateValid() {
        if ($("#passwordForm .valid").length === 4) {
            $("#passwordForm #submitPassword").attr("disabled", false);
        } else {
            $("#passwordForm #submitPassword").attr("disabled", "disabled");
        }
    }

    function isUpperCase(strings) {
        var i = 0;
        var character = "";
        var upper = false;
        var lower = false;
        while (i <= strings.length) {
            character = strings.charAt(i);
            if (!isNaN(character * 1)) {
            } else {
                if (character == character.toUpperCase()) {
                    upper = true;
                }
                if (character == character.toLowerCase()) {
                    lower = true;
                }
            }
            i++;
        }

        return [upper, lower];
    }
});

$(document).ready(function () {
    $(".verify input").keyup(function () {
        if ($(this).val().length >= 1) {
            var input_flds = $(this).closest("form").find(":input");
            input_flds.eq(input_flds.index(this) + 1).focus();
        }
    });

    $("#resendCode").on("click", function (e) {
        e.preventDefault();
        const email = $(this).data("email");
        const token = $(this).data("token");
        $.post("/email-notification", { email: email, _token: token })
            .done(function (data) {
                alert("Resend the code to your email, please check");
            })
            .fail(function (data) {
                console.log(data);
            });
    });
});
