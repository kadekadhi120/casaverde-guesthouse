<nav class="bg-[#003703] text-white fixed w-full z-50 top-0 left-0">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-between h-16">

      <!-- Logo -->
      <a href="/" class="flex items-center gap-2">
        <img src="{{ asset('images/CasaVerdeLogo.png') }}" class="h-14 w-14">
      </a>

      <!-- Menu -->
      <div id="nav-container" class="relative hidden md:flex h-full space-x-10">

        <a href="#home" data-target="home" class="nav-link">HOME</a>
        <a href="#about" data-target="about" class="nav-link">ABOUT</a>
        <a href="#facilities" data-target="facilities" class="nav-link">FACILITIES</a>
        <a href="#contact" data-target="contact" class="nav-link">CONTACT</a>

        <!-- Sliding underline -->
        <span
          id="nav-underline"
          class="absolute bottom-0 h-[3px] bg-white transition-all duration-300"
        ></span>
      </div>

    </div>
  </div>
</nav>
