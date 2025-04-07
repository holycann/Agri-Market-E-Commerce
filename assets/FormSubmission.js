// Function to handle form submission
function formSubmission(formId) {
    $(document).ready(function () {
        // Define custom 'strongPassword' validation rule
        $.validator.addMethod("strongPassword", function(value, element) {
            // Password must have at least 1 uppercase, 1 lowercase, 1 digit, and 1 special character
            return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
        }, "Password must be at least 8 characters long and include a combination of uppercase letters, lowercase letters, numbers, and special characters.");

        // Initialize jQuery Validation plugin for the form
        $(`#${formId}`).validate({
            rules: getValidationRules(formId),
            messages: getValidationMessages(),
            errorElement: "p",
            errorClass: "text-sm text-red-500", // Customize error message styling
            highlight: function (element) {
                $(element).addClass("is-invalid");  // Add a class for invalid input (you can style it in CSS)
            },
            unhighlight: function (element) {
                $(element).removeClass("is-invalid");  // Remove the class for valid input
            },
            submitHandler: function (form) {
                // If the form is valid, submit via AJAX
                $.ajax({
                    url: $(form).attr('action'),
                    type: $(form).attr('method'),
                    data: $(form).serialize(),
                    dataType: 'json',
                    success: function (response) {
                        handleSuccess(response);
                    },
                    error: function (xhr) {
                        handleError(xhr);
                    }
                });
            }
        });
    });
}

// Function to get validation rules for each form type
function getValidationRules(formId) {
    switch (formId) {
        case "register-form":
            return {
                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 13,
                    number: true
                },
                password: {
                    required: true,
                    minlength: 8,
                    strongPassword: true
                },
                confirm_password: {
                    required: true,
                    equalTo: "#password"
                }
            };
        case "login-form":
            return {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            };
        default:
            return {};  // Return an empty object if formId doesn't match
    }
}

// Function to get validation messages for each form type
function getValidationMessages() {
    return {
        name: {
            required: "Full Name is required",
            minlength: "Name must be at least 3 characters long"
        },
        email: {
            required: "Email is required",
            email: "Please enter a valid email address"
        },
        phone: {
            required: "Phone is required",
            minlength: "Phone must be at least 10 characters long",
            maxlength: "Phone must be at most 13 characters long",
            number: "Phone must contain only numbers"
        },
        password: {
            required: "Password is required",
            minlength: "Password must be at least 8 characters long",
            strongPassword: "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character"
        },
        confirm_password: {
            required: "Please confirm your password",
            equalTo: "Passwords do not match"
        }
    };
}

// Function to show Swal error message
function showSwalError(message) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: message,
        confirmButtonColor: '#059669'
    });
}

// Function to handle successful response
function handleSuccess(response) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: response.message || 'Operation successful!',
        confirmButtonColor: '#059669'
    }).then(() => {
        window.location.href = response.redirect || 'defaultURL';
    });
}

// Function to handle error response
function handleError(xhr) {
    let message;
    if (xhr.responseText.includes('Fatal error')) {
        const match = xhr.responseText.match(/Uncaught(.*?) in/s);
        message = match ? match[1].trim() : "Unknown error";
    }

    console.log(xhr.responseText);

    Swal.fire({
        icon: "error",
        title: 'Oops...',
        text: xhr.responseJSON?.error || message || "Something went wrong.",
        showConfirmButton: false,
        confirmButtonColor: '#059669'
    });
}
