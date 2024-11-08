
<nav class="bg-white shadow dark:bg-gray-900">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3 rtl:space-x-reverse cursor-pointer">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo" />
            <span class="text-2xl font-semibold whitespace-nowrap text-gray-800 dark:text-white">Ticket</span>
        </div>
        
        
        <div class="hidden md:flex items-center space-x-6">
            <a href="/" class="text-gray-700 hover:text-blue-700 dark:text-gray-300">Home</a>
            <a href="/contact" class="text-gray-700 hover:text-blue-700 dark:text-gray-300">Contact</a>
            <a href="/save" class="text-gray-700 hover:text-blue-700 dark:text-gray-300">Savatcha</a>
        </div>

        <div class="hidden md:flex items-center space-x-4">
            <a href="/login" class="text-blue-600 border border-blue-600 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Login</a>
            <div class="relative" id="user-section">
                <button class="flex items-center space-x-2 text-gray-700 dark:text-gray-300" id="user-menu-button">
                    <img src="https://via.placeholder.com/32" class="rounded-full w-8 h-8" alt="User Avatar">
                    <span class="hidden md:inline">User</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 dark:bg-gray-800">
                    <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Profile</a>
                    <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
