<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-500 to-purple-600 min-h-screen flex items-center justify-center">

    <div class="bg-white p-10 rounded-xl shadow-lg w-full max-w-md transform transition hover:scale-105 duration-300">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-6">Create Your Account</h2>
        <p class="text-center text-sm text-gray-500 mb-8">Join us to explore more!</p>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="block text-sm font-semibold text-gray-600 mb-1">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="John Doe">
            </div>

            <div class="mb-5">
                <label for="email" class="block text-sm font-semibold text-gray-600 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="example@mail.com">
            </div>

            <div class="mb-5">
                <label for="password" class="block text-sm font-semibold text-gray-600 mb-1">Password</label>
                <input type="password" id="password" name="password" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="******">
            </div>

            <div class="mb-8">
                <label for="password_confirmation" class="block text-sm font-semibold text-gray-600 mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="******">
            </div>

            <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg transition duration-200 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Register</button>
        </form>

        <p class="mt-6 text-center text-gray-600 text-sm">Already have an account? 
            <a href="/login" class="text-blue-600 font-semibold hover:text-blue-800">Login</a>
        </p>
    </div>

</body>
</html>
