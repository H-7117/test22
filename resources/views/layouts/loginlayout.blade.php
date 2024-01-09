<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Example</title>
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts//tajawal/Tajawal-Light.ttf') }}">
</head>

<body>
    @yield('content')
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script>
        let signupForm = document.querySelector(".my-form");
        let email = document.getElementById("email");
        let password = document.getElementById("password");
        let confirmPassword = document.getElementById("confirm-password");

        signupForm.addEventListener("submit", (e) => {
          e.preventDefault();
        
          console.log("Email:", email.value);
          console.log("Password:", password.value);
        });

        function onChange() {
          if (confirmPassword.value === password.value) {
            confirmPassword.setCustomValidity("");
          } else {
            confirmPassword.setCustomValidity("Passwords do not match!");
          }
        }

        password.addEventListener("change", onChange);
        confirmPassword.addEventListener("change", onChange);
    </script>
</body>

</html>