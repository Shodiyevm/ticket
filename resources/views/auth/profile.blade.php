<?php
session_start();

// Foydalanuvchi ma'lumotlarini olish (masalan, bazadan)
$user = [
    'name' => 'Mirshod',
    'email' => 'mirshod@example.com',
    'phone' => '+998901234567',
];

// Agar foydalanuvchi tizimga kirgan bo'lsa, profilni ko'rsatish
if (isset($_SESSION['user_id'])) {
?>
    <!DOCTYPE html>
    <html lang="uz">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foydalanuvchi profili</title>
        <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSSni qo'shish -->
    </head>
    <body class="bg-gray-100">

        <div class="max-w-lg mx-auto mt-16 p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Foydalanuvchi profili</h1>
            
            <div class="space-y-4">
                <p class="text-lg font-medium text-gray-700"><strong>Ism:</strong> <?php echo $user['name']; ?></p>
                <p class="text-lg font-medium text-gray-700"><strong>Email:</strong> <?php echo $user['email']; ?></p>
                <p class="text-lg font-medium text-gray-700"><strong>Telefon:</strong> <?php echo $user['phone']; ?></p>
            </div>

            <!-- Log out tugmasi -->
            <form action="logout.php" method="POST" class="mt-6">
                <button type="submit" class="w-full py-3 bg-red-600 text-white rounded-md hover:bg-red-700 transition duration-300">
                    Log out
                </button>
            </form>
        </div>

    </body>
    </html>
<?php
} else {
    echo "Siz tizimga kirmadingiz.";
}
?>
