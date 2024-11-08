<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Tickets</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="bg-gray-100 font-sans">

    @include('layouts.navbar')
    
    <main class="py-16 bg-gray-200">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script>
        document.getElementById('user-menu-button').addEventListener('click', function () {
            const dropdown = document.getElementById('user-dropdown');
            dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            const dropdown = document.getElementById('user-dropdown');
            const button = document.getElementById('user-menu-button');
            if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
