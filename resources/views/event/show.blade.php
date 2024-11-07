<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <!-- Navbar -->
  <nav class="bg-blue-600 p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <a href="/" class="text-white text-2xl font-bold">Event Tickets</a>
      <ul class="flex space-x-6">
        <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
        <li><a href="#events" class="text-white hover:text-gray-300">Events</a></li>
        <li><a href="#contact" class="text-white hover:text-gray-300">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Event Detail -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto flex items-center space-x-12">
      <div class="w-1/2">
        <img src="https://via.placeholder.com/600x400" alt="Event Image" class="w-full h-64 object-cover rounded-lg">
      </div>
      <div class="w-1/2">
        <h2 class="text-3xl font-bold text-indigo-600">Event Title</h2>
        <p class="mt-4 text-lg text-gray-600">Detailed description of the event goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
        <p class="mt-4 text-xl font-semibold">Price: 15000 so'm</p>
        <p class="mt-2 text-lg">Date: December 12, 2024</p>
        <p class="mt-2 text-lg">Location: Tashkent</p>

        <form method="POST" action="/ticket/purchase/EVT001" class="mt-6">
          @csrf
          <div class="mb-4">
            <label for="ticket_adult_quantity" class="block text-gray-700">Adults</label>
            <input type="number" id="ticket_adult_quantity" name="ticket_adult_quantity" min="1" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md" required>
          </div>
          <div class="mb-4">
            <label for="ticket_kid_quantity" class="block text-gray-700">Kids</label>
            <input type="number" id="ticket_kid_quantity" name="ticket_kid_quantity" min="0" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md">
          </div>
          <button type="submit" class="w-full py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Buy Ticket</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    <div class="max-w-7xl mx-auto text-center">
      <p>&copy; 2024 Event Tickets. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
