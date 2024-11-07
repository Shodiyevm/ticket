<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-600 to-blue-500 min-h-screen flex items-center justify-center">

    <div class="bg-white p-10 rounded-xl shadow-lg w-full max-w-md transform transition hover:scale-105 duration-300">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Welcome Back!</h2>
        <p class="text-center text-sm text-gray-500 mb-8">Login to continue</p>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="example@mail.com">
            </div>

            <div class="mb-8">
                <label for="password" class="block text-sm font-semibold text-gray-600 mb-1">Password</label>
                <input type="password" id="password" name="password" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="******">
            </div>

            <button type="submit" class="w-full py-3 bg-purple-600 text-white font-semibold rounded-lg transition duration-200 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50">Login</button>
        </form>

        <p class="mt-6 text-center text-gray-600 text-sm">Don’t have an account? 
            <a href="/register" class="text-purple-600 font-semibold hover:text-purple-800">Register</a>
        </p>
    </div>

</body>
</html>
