<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ASEV</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <nav class="bg-gray-600 p-4 text-white">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">Asep Villa Propertie</h1>

      <!-- Hamburger button -->
      <button id="menu-toggle" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Menu links (hidden on mobile) -->
      <div id="nav-links" class="hidden md:flex space-x-4">
        <a href="#about" class="hover:text-gray-200">About</a>
        <a href="#fasilitas" class="hover:text-gray-200">Fasilitas</a>
        <a href="{{ route('login') }}">Login</a>
      </div>
    </div>

    <!-- Mobile Menu Links -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2 px-4">
      <a href="#home" class="block hover:text-gray-200">Home</a>
      <a href="#about" class="block hover:text-gray-200">About</a>
      <a href="{{ route('login') }}" lass="block hover:text-gray-200">Login</a>
      <br>
    </div>
  </nav>

  <!-- JS for Toggle Menu -->
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

  <!-- Hero Section -->
<section id="home" 
class="flex flex-col-reverse md:flex-row items-center justify-between px-8 md:px-20 py-20 
bg-gradient-to-r from-sky-400 via-blue-300 to-white text-white">   
 <!-- Text -->
    <div class="md:w-1/2 space-y-6">
      <h2 class="text-4xl md:text-5xl font-bold leading-tight">
        Tentukan PIlihan <br>Villa Anda
      </h2>
      <a href="{{ route('login') }}" class="bg-gray-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-blue-600 inline-block w-max">
        Mulai Sekarang
      </a>
    </div>
    <!-- Image -->
    {{-- <div class="md:w-1/2 mb-10 md:mb-0">
      <img src="{{ asset('dumblebg.png') }}" alt="-" class="w-full max-w-md mx-auto">
    </div> --}}
  </section>

    <!-- Fasilitas -->
  <section id="fasilitas" class="py-16 bg-white">
      <h1 class="text-center font-bold text-2xl mb-8">
        DAPATKAN FASILITAS
      </h1>
      <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 text-center">

      <div>
          <img src="{{ asset('mushola.png') }}" alt="Tempat Ibadah" class="w-[200px] h-[200px] mx-auto">
        <h3 class="text-xl font-bold mb-2">Tempat Ibadah</h3>
        <p></p>
      </div>

      <div>
        <img src="{{ asset('kamtin.png') }}" alt="Tempat Makan" class="w-[240px] h-[200px] mx-auto">        
        <h3 class="text-xl font-bold mb-2">Tempat Makan</h3>
        <p></p>
      </div>
      <div>
        <img src="{{ asset('kamtin.png') }}" alt="Kolam Renang" class="w-[240px] h-[200px] mx-auto">        
        <h3 class="text-xl font-bold mb-2">Kolam Renang</h3>
        <p></p>
      </div>
    </div>
  </section>

  <!-- Paragraf menjelaskan seluruh gambar -->
<h3 class="mt-8 text-center text-gray-800 font-extrabold text-2xl tracking-wide uppercase max-w-4xl mx-auto px-4 text-white">
  "Dari gym kami untuk panggung juara.Mereka yang berani berlatih lebih keras, kini berdiri di puncak. Tempat ini bukan sekadar gym—ini adalah rumah bagi para pemenang"  
  </h3>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6 text-center">
    <p>&copy; 2026 ASEV. All rights reserved.</p>
  </footer>

</body>
</html>
