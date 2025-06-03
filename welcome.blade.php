<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PrintingPro - Home</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
<style>
  /* Dropdown menu styling */
  .dropdown-menu {
    display: none;
    position: absolute;
    background: white;
    margin-top: 0.5rem;
    border-radius: 0.375rem;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
    z-index: 50;
  }
  .dropdown.open .dropdown-menu {
    display: block;
  }
</style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<header class="bg-purple-600 shadow">
  <div class="container mx-auto flex justify-between items-center py-4 px-6 relative">
    <h1 class="text-xl font-bold text-white">PrintingPro</h1>
    <nav>
      <ul class="flex space-x-6 relative">
        <li class="relative dropdown">
          <button id="homeBtn" class="text-white hover:text-gray-300 focus:outline-none">
            Home
          </button>
          <ul class="dropdown-menu w-40">
            <li><a href="#about" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">About Us</a></li>
            <li><a href="#services" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Services</a></li>
            <li><a href="#contact" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Contact</a></li>
          </ul>
        </li>
        <li><a href="#orders" class="text-white hover:text-gray-300">Pesanan</a></li>
        <li><a href="#company" class="text-white hover:text-gray-300">Perusahaan</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- Hero Section -->
<section class="bg-purple-700 text-white py-16">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold">Welcome to PrintingPro</h2>
    <p class="mt-4 text-lg">Quality printing solutions tailored for your needs</p>
    <a href="#services" class="mt-6 inline-block px-6 py-3 bg-purple-500 text-white font-semibold rounded-lg shadow-md hover:bg-purple-400">Discover Our Services</a>
  </div>
</section>

<!-- About Us Section -->
<section id="about" class="py-12 bg-white">
  <div class="container mx-auto text-center">
    <h3 class="text-2xl font-bold text-gray-800">About Us</h3>
    <p class="mt-4 text-gray-600">PrintingPro specializes in providing high-quality printing services for businesses and individuals. From business cards to large banners, we bring your ideas to life with precision and care.</p>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-12 bg-gray-100">
  <div class="container mx-auto text-center">
    <h3 class="text-2xl font-bold text-gray-800">Our Services</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
      <div class="bg-white shadow-md rounded-lg p-6">
        <h4 class="text-xl font-semibold text-purple-600">Business Cards</h4>
        <p class="mt-2 text-gray-600">Professional and stylish business cards to make your mark.</p>
      </div>
      <div class="bg-white shadow-md rounded-lg p-6">
        <h4 class="text-xl font-semibold text-purple-600">Brochures</h4>
        <p class="mt-2 text-gray-600">Creative designs that capture attention and communicate effectively.</p>
      </div>
      <div class="bg-white shadow-md rounded-lg p-6">
        <h4 class="text-xl font-semibold text-purple-600">Large Format Printing</h4>
        <p class="mt-2 text-gray-600">High-resolution banners and posters for impactful marketing.</p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-12 bg-purple-600">
  <div class="container mx-auto text-center text-white">
    <h3 class="text-2xl font-bold">Contact Us</h3>
    <p class="mt-4">Have a project in mind? Get in touch with us today!</p>
    <form class="mt-6 space-y-4">
      <input type="text" class="w-full p-3 rounded-lg border border-gray-300" placeholder="Your Name" />
      <input type="email" class="w-full p-3 rounded-lg border border-gray-300" placeholder="Your Email" />
      <textarea class="w-full p-3 rounded-lg border border-gray-300" placeholder="Your Message"></textarea>
      <button type="submit" class="w-full bg-purple-700 text-white p-3 rounded-lg hover:bg-purple-800">Send Message</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
  <div class="container mx-auto text-center">
    <p>&copy; 2025 PrintingPro. All rights reserved.</p>
  </div>
</footer>

<script>
  const homeBtn = document.getElementById('homeBtn');
  const dropdown = homeBtn.parentElement;

  homeBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // supaya klik tombol tidak diteruskan ke window
    dropdown.classList.toggle('open');
  });

  // Klik di luar dropdown untuk menutup dropdown
  window.addEventListener('click', () => {
    dropdown.classList.remove('open');
  });

  // Tutup dropdown saat klik submenu dan biar link tetap jalan
  const submenuLinks = dropdown.querySelectorAll('.dropdown-menu a');
  submenuLinks.forEach(link => {
    link.addEventListener('click', () => {
      dropdown.classList.remove('open');
    });
  });
</script>

</body>
</html>
