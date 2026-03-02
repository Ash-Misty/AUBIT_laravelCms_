<!DOCTYPE html><html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AUBIT</title>
  <link rel="icon" href="./Asserts/logo.avif" type="image/avif">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script:wght@400..700&family=Grechen+Fuemen&family=Raleway:ital,wght@0,100..900;1,100..900&family=Sigmar&family=Staatliches&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
   <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Tailwind CSS -->
   <script src="https://cdn.tailwindcss.com"></script>
   <!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- AOS Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- Tailwind JS from CDN for utility -->
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



  <style>
    html {
      scroll-behavior: smooth;
    }

.nav-link-gradient {
      position: relative;
      font-weight: 600;
      background: linear-gradient(90deg, #007cf0, #00dfd8);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      transition: all 0.3s ease;
      padding: 0.3rem 0.75rem;
      z-index: 1;
    }

    .nav-link-gradient::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, #007cf0, #00dfd8);
      border-radius: 0.5rem;
      opacity: 0;
      z-index: -1;
      transition: 0.3s ease;
    }

    .nav-link-gradient:hover::after {
      opacity: 0.15;
    }
    .deptcont{
      display:flexbox;

    }
    .rounded-circle-img {
      width: 300px;
      height: 300px;
      object-fit: cover;
      border-radius: 50%;
      margin: 0 auto;
    }
    .carousel-item {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .rounded-circle-img {
      border-radius: 50%;
    }
    .carousel-caption {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 10px;
    }
    section#important-links {
      background-color: #f2f2f2;
      padding: 20px 40px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      border-top: 2px solid #ddd;
    }
    #achievementCarousel .carousel-item img {
      max-height: 350px;
        object-fit: cover;}

    section#important-links a {
      text-decoration: none;
      color: #004080;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    section#important-links a:hover {
      color: #0080ff;
    }

    footer {
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 15px 0;
    }

 @keyframes carousel {
  0%, 16%   { transform: translateX(0); }
  20%, 36%  { transform: translateX(-100%); }
  40%, 56%  { transform: translateX(-200%); }
  60%, 76%  { transform: translateX(-300%); }
  80%, 96%  { transform: translateX(-400%); }
  100%      { transform: translateX(0); }
}

.animate-carousel {
  animation: carousel 30s infinite ease-in-out;
}


    @keyframes fade-in {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
      animation: fade-in 1s ease-out forwards;
    }
    .pink-filter {
      filter: hue-rotate(-20deg) saturate(1.2) brightness(1.05);
    }
    .ratio-4x5 {
  position: relative;
  width: 100%;
  padding-top: 125%; /* 4:5 aspect ratio */
  background-color: #e6f0ff;
  overflow: hidden;
  border-radius: 0.375rem 0.375rem 0 0;
}

.ratio-4x5 > img {
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  border-radius: inherit;
  display: block;
}

   .seminar-swiper {
  max-width: 85%;  /*  overall carousel width */
  margin: 0 auto;
}

.seminar-swiper .swiper-slide .card {
  max-width: 320px;
  max-width: 300px;  /* card size*/
  margin: 0 auto;
}


.carousel-fade .carousel-item {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  pointer-events: none;
  transition: opacity 1s cubic-bezier(0.4, 0, 0.2, 1);
}

.carousel-fade .carousel-item.active {
  opacity: 1;
  position: relative;
  pointer-events: auto;
  z-index: 2;
}

.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  opacity: 1;
  z-index: 1;
}
/* Section Background */
.seminar-section {
    background: linear-gradient(135deg, #e0ecff, #f8fbff);
}

/* Title Gradient */
.seminar-title {
    font-size: 2.3rem;
    background: linear-gradient(90deg, #0d6efd, #4dabf7);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Card Styling */
.seminar-card {
    background: #ffffff;
    transition: all 0.3s ease;
}

.seminar-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.12);
}

/* Image Overlay */
.img-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.35), rgba(0,0,0,0));
}

/* Card Body Separation */
.card-body {
    border-top: 1px solid #eef2f7;
}

/* Swiper Buttons */
.swiper-button-prev,
.swiper-button-next {
    color: #0d6efd;
    background: white;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

.swiper-pagination-bullet-active {
    background: #0d6efd;
}

</style>
</head>
<body>
  <div class="container-fluid p-0">
    <div class="a">
      <header class="d-flex flex-wrap align-items-center justify-content-between py-3 px-4 border-bottom bg-white shadow-sm sticky-top">
        <div class="d-flex align-items-center">
          <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="/Asserts/logo.avif" alt="Logo of AUBIT" width="60" height="60" class="me-2">
            <span class="fs-3 fw-bold text-dark mt-1.5">University College Of Engineering,BIT CAMPUS, Trichy  </span>
          </a>
        </div>
        <ul class="nav">
          <li><a href="#" class="nav-link px-3 nav-link-gradient">Home</a></li>
          <li><a href="#departments" class="nav-link px-3 nav-link-gradient">Departments</a></li>
          <li><a href="/contact" class="nav-link px-3 nav-link-gradient">Contact Us</a></li>
          <li><a href="/about" class="nav-link px-3 nav-link-gradient">About</a></li>
        </ul>
      </header>
    </div>

   {{-- <section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('/Asserts/bg.png');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/90 flex flex-col items-center justify-center text-white text-center px-4">
    <h2 class="text-4xl md:text-6xl font-extrabold tracking-wide drop-shadow-lg animate__animated animate__fadeInDown">
      ANNA UNIVERSITY TRICHY
    </h2>
    <p class="mt-4 text-lg md:text-xl font-medium animate__animated animate__fadeInUp">
      Empowering Minds, Shaping Futures
    </p>
    <a href="/readmore" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
      Know More
    </a>
</div>
  </section> --}}
  {{-- <section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('/Asserts/bg.png'); min-height: 90vh;">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/70"></div>

  <!-- Content -->
  <div class="relative z-10 flex flex-col items-center justify-center text-white text-center px-4 h-full">

    <h2 class="text-4xl md:text-6xl font-extrabold tracking-wide drop-shadow-lg animate__animated animate__fadeInDown">
      ANNA UNIVERSITY TRICHY
    </h2>

    <p class="mt-4 text-lg md:text-xl font-medium animate__animated animate__fadeInUp">
      Empowering Minds, Shaping Futures
    </p>

    <a href="/readmore" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
      Know More
    </a>

  </div>
</section> --}}
{{-- <section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('/Asserts/bg.png'); min-height: 90vh;">

  <!-- 🔥 Black Shadow Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-black/90"></div>

  <!-- Content -->
  <div class="relative z-10 flex flex-col items-center justify-center text-white text-center px-4 h-full">

    <h2 class="text-4xl md:text-6xl font-extrabold tracking-wide drop-shadow-lg animate__animated animate__fadeInDown">
      ANNA UNIVERSITY TRICHY
    </h2>

    <p class="mt-4 text-lg md:text-xl font-medium animate__animated animate__fadeInUp">
      Empowering Minds, Shaping Futures
    </p>

    <a href="/readmore" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
      Know More
    </a>

  </div>
</section> --}}
{{-- <section
  class="relative h-[90vh] bg-cover bg-center"
  style="
    background-image: url('/Asserts/bg.png');
    min-height: 90vh;
    box-shadow: inset 0 0 300px rgba(0, 0, 0, 0.879);
  "
>

  <div class="flex flex-col items-center justify-center text-white text-center px-4 h-full">

    <h2 class="text-4xl md:text-6xl font-extrabold tracking-wide drop-shadow-lg animate__animated animate__fadeInDown">
      ANNA UNIVERSITY TRICHY
    </h2>

    <p class="mt-4 text-lg md:text-xl font-medium animate__animated animate__fadeInUp">
      Empowering Minds, Shaping Futures
    </p>

    <a href="/readmore" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
      Know More
    </a>

  </div>
</section> --}}
{{-- <section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('/Asserts/bg.png'); min-height: 90vh;">

  <!-- FULL BLACK LAYER -->
  <div class="absolute inset-0 bg-black/95"></div>

  <!-- CONTENT -->
  <div class="relative z-10 flex flex-col items-center justify-center text-white text-center px-4 h-full">

    <h2 class="text-4xl md:text-6xl font-extrabold tracking-wide drop-shadow-lg animate__animated animate__fadeInDown">
      ANNA UNIVERSITY TRICHY
    </h2>

    <p class="mt-4 text-lg md:text-xl font-medium animate__animated animate__fadeInUp">
      Empowering Minds, Shaping Futures
    </p>

    <a href="/readmore" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
      Know More
    </a>

  </div>
</section> --}}
<section class="relative h-[90vh] bg-cover bg-center" style="background-image: url('/Asserts/bg.png'); min-height: 90vh;">

  <!-- EXTREME DARK OVERLAY -->
  <div class="absolute inset-0" style="background: rgba(0,0,0,0.70);"></div>

  <!-- CONTENT -->
  <div class="relative z-10 flex flex-col items-center justify-center text-white text-center px-4 h-full">

    <h2 class="text-4xl md:text-6xl font-extrabold tracking-wide drop-shadow-lg animate__animated animate__fadeInDown">
      ANNA UNIVERSITY TRICHY
    </h2>

    <p class="mt-4 text-lg md:text-xl font-medium animate__animated animate__fadeInUp">
      Empowering Minds, Shaping Futures
    </p>

    <a href="/about" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold shadow-lg transition duration-300">
      Know More
    </a>

  </div>
</section>



 <!--  About Section -->
   <section id="about">
<div class="container my-5 px-4">
    <div data-aos="fade-up" class="shadow-2xl rounded-3xl p-5 p-md-5 mx-auto transition duration-500 hover:shadow-yellow-300 hover:scale-105" style="max-width: 900px;">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-red-600 animate__animated animate__fadeInDown">
        ABOUT US:
      </h2>
      <h3 class="text-center mb-3 text-xl md:text-2xl lg:text-3xl font-semibold text-indigo-800 drop-shadow-lg">
        <strong>
          University College of Engineering<br>
          Bharathidasan Institute of Technology Campus<br>
          Anna University, Tiruchirappalli
        </strong>
      </h3>
      <p class="text-gray-800 text-justify leading-relaxed tracking-wide font-bold">
        <span class="text-pink-700">Committed to Excellence in Technical Education and Innovation</span><br><br>
        The University College of Engineering, Bharathidasan Institute of Technology (BIT) Campus, Tiruchirappalli, is a constituent institution of Anna University, Chennai. Formerly known as Anna University of Technology, Tiruchirappalli, it now functions as the Anna University Chennai – Regional Office, Tiruchirappalli (AUC-ROT). Strategically located on National Highway 336, connecting Tiruchirappalli and Pudukkottai, the campus serves as a hub for quality engineering education and research.
        <br><br>
        With a strong focus on academic excellence, innovation, and social responsibility, the institution is dedicated to nurturing skilled engineers who are well-equipped to meet the evolving challenges of the modern world.
      </p>
    </div>
  </div>
</section>

<!-- Section -->
<section class="py-5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white">
  <div class="container text-center">
    <h2 class="text-4xl md:text-5xl font-bold uppercase tracking-wider mb-3">Our Impact</h2>
    <p class="text-lg mb-5 text-gray-100">Research Driven | Globally Recognized</p>

    <div class="row g-4">
      <!-- Students -->
      <div class="col-12 col-md-4">
        <div class="p-4 rounded-xl shadow-lg bg-white bg-opacity-10 backdrop-blur-sm">
          <p class="text-5xl font-bold"><span id="students">0</span>+</p>
          <div class="w-20 h-1 bg-yellow-300 mx-auto my-3"></div>
          <h5 class="text-uppercase tracking-widest">Students</h5>
        </div>
      </div>

      <!-- Faculty -->
      <div class="col-12 col-md-4">
        <div class="p-4 rounded-xl shadow-lg bg-white bg-opacity-10 backdrop-blur-sm">
          <p class="text-5xl font-bold"><span id="faculty">0</span>+</p>
          <div class="w-20 h-1 bg-yellow-300 mx-auto my-3"></div>
          <h5 class="text-uppercase tracking-widest">Faculty</h5>
        </div>
      </div>

      <!-- Staff -->
      <div class="col-12 col-md-4">
        <div class="p-4 rounded-xl shadow-lg bg-white bg-opacity-10 backdrop-blur-sm">
          <p class="text-5xl font-bold"><span id="staff">0</span>+</p>
          <div class="w-20 h-1 bg-yellow-300 mx-auto my-3"></div>
          <h5 class="text-uppercase tracking-widest">Staff</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.umd.js"></script>


</div>

<!-- Departments Section -->
<section id="departments" class="py-5" style="background: linear-gradient(to right, #f3f4f6, #e0f7fa);">
  <div class="container">
    <h2 class="text-4xl font-extrabold text-center text-indigo-800 mb-5 animate__animated animate__fadeInDown shadow-md tracking-wide">
      Our Departments
    </h2>


    <div class="row g-4 justify-content-center">
      <!-- CSE -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
        <div class="bg-white rounded-3xl shadow-md hover:shadow-indigo-400 transition-transform transform hover:scale-105 duration-300 ease-in-out">
          <a href="/csedept"><img src="/Asserts/cse.jpg" class="w-100 h-60 object-cover rounded-top-3" alt="CSE"></a>
          <div class="p-4 text-center">
            <h5 class="text-lg font-semibold text-indigo-600">Computer Science & Engineering</h5>
          </div>
        </div>
      </div>

      <!-- IT -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="bg-white rounded-3xl shadow-md hover:shadow-pink-400 transition-transform transform hover:scale-105 duration-300 ease-in-out">
         <a href="/itdept"> <img src="/Asserts/it.jpeg" class="w-100 h-60 object-cover rounded-top-3" alt="IT"></a>
          <div class="p-4 text-center">
            <h5 class="text-lg font-semibold text-pink-600">Information Technology</h5>
          </div>
        </div>
      </div>

      <!-- ECE -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white rounded-3xl shadow-md hover:shadow-purple-400 transition-transform transform hover:scale-105 duration-300 ease-in-out">
          <a href="/ecedept"><img src="/Asserts/ece.jpeg" class="w-100 h-60 object-cover rounded-top-3" alt="ECE"></a>
          <div class="p-4 text-center">
            <h5 class="text-lg font-semibold text-purple-600">Electronics & Communication Engineering</h5>
          </div>
        </div>
      </div>

      <!-- EEE -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="bg-white rounded-3xl shadow-md hover:shadow-yellow-400 transition-transform transform hover:scale-105 duration-300 ease-in-out">
          <a href="/eeedept"><img src="/Asserts/eee.jpeg" class="w-100 h-60 object-cover rounded-top-3" alt="EEE"></a>
          <div class="p-4 text-center">
            <h5 class="text-lg font-semibold text-yellow-600">Electrical & Electronics Engineering</h5>
          </div>
        </div>
      </div>

      <!-- Pharma -->
      <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-white rounded-3xl shadow-md hover:shadow-green-400 transition-transform transform hover:scale-105 duration-300 ease-in-out">
         <a href="/pharmadept"> <img src="/Asserts/pharma.png" class="w-100 h-60 object-cover rounded-top-3" alt="Pharma"></a>
          <div class="p-4 text-center">
            <h5 class="text-lg font-semibold text-green-600">Pharmaceutical Technology</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Seminar Updates – auto-cycling version -->
{{-- <section id="carousel-section" class="py-5" style="background-color:#f0f8ff;">
  <div class="container text-center mb-5">
    <h2 class="text-primary mb-5 fw-bold" style="font-size:2rem; text-shadow:0 1px 3px rgba(0,0,0,0.1);">
      Seminar Updates
    </h2>

    @if($seminars->count())
      <div class="swiper seminar-swiper">
        <div class="swiper-wrapper">
          @foreach($seminars as $seminar)
            <div class="swiper-slide">
              <div class="card h-100 shadow-sm rounded-4 overflow-hidden">
                <div class="ratio ratio-4x5" style="background-color: #e6f0ff;">
                  <img src="{{ asset('storage/' . $seminar->image) }}"
                       alt="{{ $seminar->title }}"
                       class="w-100 h-100 object-fit-cover"
                       loading="lazy"
                       onerror="this.style.display='none';">
                </div>
                <div class="card-body text-start bg-light">
                  <h5 class="fw-semibold mb-2">{{ $seminar->topic }}</h5>
                  <ul class="list-unstyled small mb-0 text-dark">
                    <li class="d-flex align-items-center mb-2">
                      <i class="bi bi-calendar-event me-2 text-primary"></i>
                      {{ \Carbon\Carbon::parse($seminar->date)->format('d M Y') }}
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bi bi-clock me-2 text-primary"></i>
                      {{ \Carbon\Carbon::parse($seminar->time)->format('h:i A') }}
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-geo-alt me-2 text-primary"></i>
                      {{ $seminar->venue }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination mt-4"></div>
      </div>

      <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
        <a href="{{ route('seminarall') }}" class="btn btn-outline-primary fw-semibold px-4 shadow-sm rounded-pill">
          View All Seminars
        </a>
        <a href="{{ route('login') }}" class="btn btn-primary fw-semibold px-4 shadow-sm rounded-pill">
          Register Now
        </a>
      </div>
    @else
      <div class="alert alert-info mx-auto" style="max-width: 260px;">No upcoming seminars currently scheduled</div>
    @endif
  </div>
</section> --}}

<section id="carousel-section" class="py-5 seminar-section">
  <div class="container text-center mb-5">
    <h2 class="mb-5 fw-bold seminar-title">Seminar Updates</h2>

    @if($seminars->count())
      <div class="swiper seminar-swiper">
        <div class="swiper-wrapper">
          @foreach($seminars as $seminar)
            <div class="swiper-slide">
              <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden seminar-card">

                <!-- Image Area -->
                <div class="ratio ratio-4x5 position-relative">
                  <img src="{{ asset('storage/' . $seminar->image) }}"
                       alt="{{ $seminar->title }}"
                       class="w-100 h-100 object-fit-cover"
                       loading="lazy"
                       onerror="this.style.display='none';">
                  <div class="img-overlay"></div>
                </div>

                <!-- Content -->
                <div class="card-body text-start">
                  <h5 class="fw-semibold mb-2">{{ $seminar->topic }}</h5>
                  <ul class="list-unstyled small mb-0 text-dark">
                    <li class="d-flex align-items-center mb-2">
                      <i class="bi bi-calendar-event me-2 text-primary"></i>
                      {{ \Carbon\Carbon::parse($seminar->date)->format('d M Y') }}
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <i class="bi bi-clock me-2 text-primary"></i>
                      {{ \Carbon\Carbon::parse($seminar->time)->format('h:i A') }}
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-geo-alt me-2 text-primary"></i>
                      {{ $seminar->venue }}
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          @endforeach
        </div>

        <!-- Swiper Controls -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination mt-4"></div>
      </div>

      {{-- <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
        <a href="{{ route('seminarall') }}" class="btn btn-outline-primary fw-semibold px-4 shadow-sm rounded-pill">
          View All Seminars
        </a>
        <a href="{{ route('login') }}" class="btn btn-primary fw-semibold px-4 shadow-sm rounded-pill">
          Register Now
        </a>
      </div> --}}
    @else
      <div class="alert alert-info mx-auto" style="max-width: 260px;">
        No upcoming seminars currently scheduled
      </div>
    @endif

    <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
        <a href="{{ route('seminarall') }}" class="btn btn-outline-primary fw-semibold px-4 shadow-sm rounded-pill">
          View All Seminars
        </a>
        <a href="{{ route('login') }}" class="btn btn-primary fw-semibold px-4 shadow-sm rounded-pill">
          Register Now
        </a>
      </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const delay = window.innerWidth < 768 ? 7000 : 4000;

    new Swiper('.seminar-swiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: delay,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        992: {
          slidesPerView: 4,
        },
      }
    });
  });
</script>



<hr>

<!-- Achievements Section -->
<section class="py-16 bg-gradient-to-r from-purple-100 via-blue-100 to-pink-100">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-extrabold text-center text-purple-900 mb-10">
      🌟 Our Achievements
    </h2>

    <div class="relative overflow-hidden rounded-3xl shadow-lg h-[400px] max-w-4xl mx-auto">
      <div id="achievements-carousel" class="h-full w-full relative">
        <!-- Images -->
        <img src="./Asserts/ac1.jpg" class="carousel-achievements absolute top-0 left-0 w-full h-full object-cover hidden z-10" alt="Achievement 1" data-index="0">
        <img src="./Asserts/ac2.jpg" class="carousel-achievements absolute top-0 left-0 w-full h-full object-cover hidden z-10" alt="Achievement 2" data-index="1">
        <img src="./Asserts/ac3.jpg" class="carousel-achievements absolute top-0 left-0 w-full h-full object-cover hidden z-10" alt="Achievement 3" data-index="2">
        <img src="./Asserts/ac4.jpg" class="carousel-achievements absolute top-0 left-0 w-full h-full object-cover hidden z-10" alt="Achievement 4" data-index="3">
        <img src="./Asserts/ac5.jpg" class="carousel-achievements absolute top-0 left-0 w-full h-full object-cover hidden z-10" alt="Achievement 5" data-index="4">

        <!-- Captions -->
        <div class="absolute bottom-8 left-0 w-full text-center px-4 z-20">
          <p class="achievement-caption hidden bg-black bg-opacity-60 text-white rounded-md inline-block px-3 py-1" data-index="0">
            Awarded Best Innovation 2023
          </p>
          <p class="achievement-caption hidden bg-black bg-opacity-60 text-white rounded-md inline-block px-3 py-1" data-index="1">
            Top Performer in Regional Contest
          </p>
          <p class="achievement-caption hidden bg-black bg-opacity-60 text-white rounded-md inline-block px-3 py-1" data-index="2">
            Recognized for Community Service
          </p>
          <p class="achievement-caption hidden bg-black bg-opacity-60 text-white rounded-md inline-block px-3 py-1" data-index="3">
            Winner of Tech Challenge
          </p>
          <p class="achievement-caption hidden bg-black bg-opacity-60 text-white rounded-md inline-block px-3 py-1" data-index="4">
            Best Team Collaboration Award
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.carousel-achievements');
    const captions = document.querySelectorAll('.achievement-caption');
    let currentIndex = 0;

    function showSlide(index) {
      images.forEach(img => img.classList.add('hidden'));
      captions.forEach(cap => cap.classList.add('hidden'));

      images[index].classList.remove('hidden');
      captions[index].classList.remove('hidden');
    }

    // Show the first slide immediately after DOM is ready
    showSlide(currentIndex);

    // Next slide function
    function nextSlide() {
      currentIndex = (currentIndex + 1) % images.length;
      showSlide(currentIndex);
    }

    // Auto-rotate every 5 seconds
    setInterval(nextSlide, 5000);
  });
</script>
<hr>
<!-- Achievements Cards -->
<section class="py-12 bg-gray-50 overflow-visible">
  <div class="container mx-auto px-4">
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="bg-gradient-to-br from-purple-500 to-indigo-600 text-white rounded-3xl shadow-xl p-6 hover:scale-105 transition-transform duration-300 transform">
          <div class="text-5xl mb-4">🏆</div>
          <h4 class="text-2xl font-bold mb-2">Top Ranked College</h4>
          <p class="text-white/90">Ranked #1 in academic performance and innovation for 2024.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="bg-gradient-to-br from-pink-500 to-red-500 text-white rounded-3xl shadow-xl p-6 hover:scale-105 transition-transform duration-300 transform">
          <div class="text-5xl mb-4">🎓</div>
          <h4 class="text-2xl font-bold mb-2">5000+ Graduates</h4>
          <p class="text-white/90">Empowering thousands of students with industry-ready skills.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white rounded-3xl shadow-xl p-6 hover:scale-105 transition-transform duration-300 transform">
          <div class="text-5xl mb-4">🌐</div>
          <h4 class="text-2xl font-bold mb-2">Global Recognition</h4>
          <p class="text-white/90">Collaborations with 50+ international universities and companies.</p>
        </div>
      </div>
    </div>
  </div>
</section>

  <hr>
<!-- Placement Section -->
 <section id="placement">
<div class="placement-section bg-cover bg-center py-10 px-4 text-white rounded-xl shadow-lg"
     style="background-image: url('/Asserts/plbg.avif');">
  <div class="text-center mb-10">
    <h2 class="text-4xl font-extrabold drop-shadow-md tracking-wide text-blue-800"> Placement</h2>
    <p class="text-lg mt-2 font-medium drop-shadow-sm text-gray-700">
      Step into success with our outstanding placement support and career opportunities.
    </p>
  </div>
</div>
</section>


<div class="relative p-5 text-center rounded-5 shadow-2xl bg-blue-100 backdrop-blur-sm text-black animate-fade-in">


    <!-- Small SVG Icon -->
    <div class="flex justify-center mb-4">
      <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg">

        <circle cx="100" cy="100" r="80" stroke="red" stroke-width="4" fill="white" />

        <image href="/Asserts/pllogo.png" x="50" y="50" height="100" width="100" />
      </svg>
    </div>


    <!-- Title -->
    <h1 class="text-3xl sm:text-4xl font-bold tracking-wide drop-shadow-lg">Your Gateway to Top Companies</h1>

    <!-- Description -->
    <p class="max-w-2xl mx-auto my-4 text-lg leading-relaxed text-gray-700 drop-shadow-sm">
      We prepare you to face the real-world challenges and connect you with top recruiters in your domain.
      Make your future shine with expert guidance, training, and placement drives.
    </p>

    <!-- Button -->
    <button class="px-6 py-2 mb-5 bg-purple-600 text-white font-semibold rounded shadow hover:bg-purple-700 transition-all duration-300">
      <a href="/placement" class="text-white">
        Read More
      </a>
    </button>

  </div>
</div>
<hr>
<div class="flex justify-center flex-wrap gap-4">
  <!-- Card 1 -->
  <div class="w-72 bg-gradient-to-r from-pink-200 via-purple-200 to-indigo-200 border-2 border-pink-400 rounded-lg shadow-lg transform transition-transform hover:scale-105">
    <img src="/Asserts/cl.webp" class="rounded-t-lg w-full h-40 object-cover" alt="Campus life">
    <div class="p-4">
      <h5 class="text-xl font-semibold text-pink-600">Campus Life</h5>
      <p class="text-gray-700">Explore events, hangouts, and fun moments that make college unforgettable.</p>
      <a href="/campus" class="inline-block mt-4 px-4 py-2 bg-pink-500 text-white rounded hover:bg-pink-600 transition">Discover More</a>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="w-72 bg-gradient-to-r from-pink-200 via-rose-200 to-fuchsia-200 border-2 border-pink-400 rounded-lg shadow-lg transform transition-transform hover:scale-105">
    <img src="/Asserts/hostel.jpg" class="rounded-t-lg w-full h-40 object-cover" alt="Study life">
    <div class="p-4">
      <h5 class="text-xl font-semibold text-pink-600">Hostel Vibes</h5>
      <p class="text-gray-700">Endless laughter, midnight snacks, shared secrets—hostel life is chaos, comfort, and unforgettable memories</p>
      <a href="/hostel" class="inline-block mt-4 px-4 py-2 bg-pink-500 text-white rounded hover:bg-pink-600 transition">Learn More</a>
    </div>
  </div>
</div>

<section class="container mx-auto px-4 py-8">
  <h2 class="text-3xl font-bold text-center mb-6">Location</h2>

  <div class="bg-white rounded-xl shadow-md p-6 space-y-6">
    <div>
      <h3 class="text-xl font-semibold text-pink-600 mb-2">Address</h3>
      <address class="text-gray-700 leading-relaxed">
        No 3, Salman Complex, Pudukottai Main Rd,<br>
        Opposite Anna University, Tiruchirappalli,<br>
        Mandaiyur, Tamil Nadu 621316
      </address>
    </div>

    <div>
      <h4 class="text-lg font-medium text-gray-800 mb-3">Google Map:</h4>
      <div class="relative w-full h-64 md:h-80 rounded-lg overflow-hidden border-2 border-pink-300">
        <iframe
          class="w-full h-full"
          frameborder="0"
          style="border:0"
          referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.986484963862!2d78.74121607451583!3d10.658156561365162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa89337cba7f33%3A0x7120582d954fcb0f!2sAnna%20University%20RO%20Tiruchirappalli!5e0!3m2!1sen!2sin!4v1745411038188!5m2!1sen!2sin"
          allowfullscreen>
        </iframe>
       </div>
  </div>
</section>

<section class="py-12 bg-gradient-to-r from-indigo-200 via-purple-100 to-pink-200">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-10 drop-shadow-xl">Beyond Classroom</h2>

    <div id="cardCarousel" class="relative w-full max-w-md mx-auto text-center">
      <!-- Card 1 -->
      <div class="carousel-card" style="clip-path: polygon(30% 0%, 70% 0%, 100% 25%, 100% 75%, 70% 100%, 30% 100%, 0% 75%, 0% 25%)">
        <img src="./Asserts/lib.jpeg" alt="Library" class="mx-auto mb-4 w-40 h-40 object-cover rounded-full shadow-md">
        <p class="text-xl font-semibold text-gray-800">Library</p>
      </div>

      <!-- Card 2 -->
      <div class="carousel-card hidden" style="clip-path: polygon(30% 0%, 70% 0%, 100% 25%, 100% 75%, 70% 100%, 30% 100%, 0% 75%, 0% 25%)">
        <img src="./Asserts/nss.jpeg" alt="NSS" class="mx-auto mb-4 w-40 h-40 object-cover rounded-full shadow-md">
        <p class="text-xl font-semibold text-gray-800">NSS</p>
      </div>

      <!-- Card 3 -->
      <div class="carousel-card hidden" style="clip-path: polygon(30% 0%, 70% 0%, 100% 25%, 100% 75%, 70% 100%, 30% 100%, 0% 75%, 0% 25%)">
        <img src="./Asserts/ncc.png" alt="NCC" class="mx-auto mb-4 w-40 h-40 object-cover rounded-full shadow-md">
        <p class="text-xl font-semibold text-gray-800">NCC</p>
      </div>

      <!-- Card 4 -->
      <div class="carousel-card hidden" style="clip-path: polygon(30% 0%, 70% 0%, 100% 25%, 100% 75%, 70% 100%, 30% 100%, 0% 75%, 0% 25%)">
        <img src="./Asserts/yrcc.avif" alt="YRC" class="mx-auto mb-4 w-40 h-40 object-cover rounded-full shadow-md">
        <p class="text-xl font-semibold text-gray-800">YRC</p>
      </div>

      <!-- Card 5 -->
      <div class="carousel-card hidden" style="clip-path: polygon(30% 0%, 70% 0%, 100% 25%, 100% 75%, 70% 100%, 30% 100%, 0% 75%, 0% 25%)">
        <img src="./Asserts/sports.avif" alt="sports" class="mx-auto mb-4 w-40 h-40 object-cover rounded-full shadow-md">
        <p class="text-xl font-semibold text-gray-800">Sports</p>
      </div>

      <!-- Card 6 -->
      <div class="carousel-card hidden" style="clip-path: polygon(30% 0%, 70% 0%, 100% 25%, 100% 75%, 70% 100%, 30% 100%, 0% 75%, 0% 25%)">
        <img src="./Asserts/rag.png" alt="anti ragging" class="mx-auto mb-4 w-40 h-40 object-cover rounded-full shadow-md">
        <p class="text-xl font-semibold text-gray-800">Anti-Ragging</p>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  let currentCard = 0;
  const cards = document.querySelectorAll('.carousel-card');

  function rotateCards() {
    cards.forEach(card => card.classList.add('hidden'));
    cards[currentCard].classList.remove('hidden');
    currentCard = (currentCard + 1) % cards.length;
  }

  // Start rotation every 3 seconds
  setInterval(rotateCards, 3000);
});
</script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

<footer class="bg-black text-white py-10 mt-10">
  <div class="container mx-auto px-6">
    <div class="text-center">
      <!-- Logo -->
      <img class="mx-auto mb-6 w-24 h-auto" src="./Asserts/logo1.jpg" alt="AUBIT Logo">

      <!--  Name and Address -->
      <h4 class="text-white text-xl font-semibold mb-2">Anna University BIT Campus</h4>
      <p class="text-gray-400 mb-4">Tiruchirappalli, Tamil Nadu, India - 620024</p>

      <!-- Contact Info -->
      <ul class="flex flex-wrap justify-center text-sm text-gray-300 space-x-6 mb-6">
        <li><i class="fa fa-phone mr-2"></i><a href="tel:0431-240-7928" class="hover:text-white">0431-240-7928</a></li>
        <li><i class="fa fa-envelope-o mr-2"></i><a href="mailto:info@aubit.edu.in" class="hover:text-white"><strong>info</strong>@aubit.edu.in</a></li>
        <li><i class="fa fa-globe mr-2"></i><a href="https://www.aubit.edu.in" class="hover:text-white">www.aubit.edu.in</a></li>
      </ul>

      <!-- Social Media Links -->
      <div class="flex justify-center space-x-6 mt-4">
        <a href="https://www.facebook.com/people/Anna-University-BIT-Campus-Trichy/100067972470727/" target="_blank" class="text-white hover:text-gray-400">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook.png" alt="Facebook" class="w-6 h-6">
        </a>
        <a href="https://x.com/i/flow/login?redirect_after_login=%2Faubittrichy" target="_blank" class="text-white hover:text-gray-400">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png" alt="Twitter" class="w-6 h-6">
        </a>
        <a href="https://www.linkedin.com/school/anna-university-of-technology-tiruchirappalli---ariyalur-campus/" target="_blank" class="text-white hover:text-gray-400">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="LinkedIn" class="w-6 h-6">
        </a>
        <a href="https://www.instagram.com/aubit" target="_blank" class="text-white hover:text-gray-400">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram.png" alt="Instagram" class="w-6 h-6">
        </a>
      </div>

      <!-- Copyright -->
      <p class="text-sm text-gray-400 mt-6">© 2025 AUBIT, Inc. All Rights Reserved.</p>
    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.umd.js"></script>
<script>
  window.addEventListener('load', function () {
    const students = new countUp.CountUp('students', 10000);
    const faculty = new countUp.CountUp('faculty', 600);
    const staff = new countUp.CountUp('staff', 700);

    if (!students.error) students.start();
    if (!faculty.error) faculty.start();
    if (!staff.error) staff.start();
  });
</script>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".carousel-achievements");
    let currentIndex = 0;

    if (cards.length === 0) return;

    cards[currentIndex].classList.remove("hidden");

    setInterval(() => {
      cards[currentIndex].classList.add("hidden");
      currentIndex = (currentIndex + 1) % cards.length;
      cards[currentIndex].classList.remove("hidden");
    }, 3000);
  });
</script>
</html>
