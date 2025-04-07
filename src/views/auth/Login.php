<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AgriMarket</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Form Submission -->
    <script src="<?= BASE_URL ?>/assets/FormSubmission.js"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded px-8 py-6 mb-4 w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Login to AgriMarket</h2>
        <form id="login-form" data-validation="login" action="<?= BASE_URL ?>/api/auth/user/login" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Your email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Your password">
            </div>
            <div class="flex items-center justify-center mb-4">
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
            </div>
            <div class="flex items-center justify-center">
                <input type="checkbox" id="remember_me" name="remember_me" class="mr-2">
                <label for="remember_me" class="text-gray-700 text-sm">Remember me</label>
            </div>
            <p class="mt-4 text-center text-gray-600 text-sm">
                Don't have an account? <a href="<?= BASE_URL ?>/register"
                    class="text-green-600 hover:text-green-800">Register here</a>
            </p>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            formSubmission('login-form');
        });
    </script>
</body>

</html>