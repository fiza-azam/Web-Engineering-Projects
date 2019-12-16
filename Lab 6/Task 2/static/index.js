document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#new-submit').onsubmit = function() {
        email = document.querySelector('#email').value;
        password = document.querySelector('#password').value;

        // validate both fields
        if (email == "" && password == "") {
            alert("please complete email and password fields");
        }

        // return success message
        else {
            alert("Form was successfully submitted");
        }
    };
});