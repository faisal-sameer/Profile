<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>@yield('title','CV')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
  <script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        fontFamily: {
          sans: ["Roboto", "sans-serif"],
          body: ["Roboto", "sans-serif"],
          mono: ["ui-monospace", "monospace"],
        },
      },
      corePlugins: {
        preflight: false,
      },
    };
  </script>
<style>
    ul {
        list-style: none;
        padding: 0;
    }

    ul li {
        display: inline-block;
        width: 48%; /* Adjust the width as needed */
        margin: 5px;
    }
</style>    
</head>
  <body>        <nav
    class="relative flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
      <div class="flex items-center">
        <!-- Hamburger menu button -->
        <button
          class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
          type="button"
          data-te-collapse-init
          data-te-target="#navbarSupportedContentY"
          aria-controls="navbarSupportedContentY"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <!-- Hamburger menu icon -->
          <span class="[&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-7 w-7">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </span>
        </button>
      </div>

      <!-- Navigation links -->
      <div
        class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto"
        id="navbarSupportedContentY"
        data-te-collapse-item>
        <ul
          class="mr-auto flex flex-col lg:flex-row"
          data-te-navbar-nav-ref>
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a
              class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
              href="/"
              data-te-nav-link-ref
              data-te-ripple-init
              data-te-ripple-color="light"
              >                    {{ config('app.name', 'Laravel') }}
              </a
            >
          </li>
          @guest
          @if (Route::has('login'))
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a
              class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
              href="{{ route('login') }}"
              data-te-nav-link-ref
              data-te-ripple-init
              data-te-ripple-color="light"
              >{{ __('Login') }}</a
            >
          </li>
          @endif
        
          @else
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a
              class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
              href="{{ route('register') }}"
              data-te-nav-link-ref
              data-te-ripple-init
              data-te-ripple-color="light"
              >{{ __('Register') }}</a
            >
          </li>
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a
              class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
              href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
              data-te-nav-link-ref
              data-te-ripple-init
              data-te-ripple-color="light"
              >{{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
          @endguest

        </ul>
      </div>
    </div>
  </nav>

    <div class="header">
        <img class="profile-image bounce-in-left" src="/image/mypic1.jpeg" alt="Profile Picture">
        
        <div class="name bounce-in-left">Feisal Jambi</div>
        <div class="job-title bounce-in-left">Programer</div>
    </div>
    
    <section class="info shadow-drop-2-center">
        <div class="info-item">
            <h2 class="bounce-in-left">Profile</h2>
            <p class="bounce-in-left">Skilled web and mobile application developer with 3+ years of experience in Laravel, 
                HTML/CSS/JS, and Flutter. Proven ability to develop high-quality, user-friendly applications that meet or 
                exceed client expectations. Expertise in database management (MySQL, Oracle). </p>
            
        </div>
        
    </section>
    <section class="experience bounce-in-left">
        <h2>Experience</h2>
        <br>
 <div class="sm:flex sm:justify-center">
  <!-- Card -->
  <div
  class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-none">
    <!-- Card image -->
    <a href="#!">
        <img  class="rounded-t-lg" src="/image/LogoAlwatanya.png" id="imgPortfolio" alt="جمارك">
    </a>
  
    <!-- Card header -->
    <div class="border-b-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
      <h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
        <span class="mr-2">
            AL-watanya company | Riyadh
                </span>
      
      </h5>
    </div>
  
    <!-- Card body -->
    <div class="p-6 mt-auto">
  
      <!-- Title -->
      <h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
        Web Developer
          </h5>
  
      <!-- Button -->
      <a href="#" onclick="onOpenAlwatanyaCompany()"
        class="flex flex-col items-center mt-3 inline-block rounded bg-blue-500 px-6 pb-2  pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
        more details
          </a>
  
    </div>
  
    <!-- Card footer -->
    <div class="border-t-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
      <h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
       
        <span class="ml-2">
            JAN, 2019 - JAN, 2020
                </span>
      </h5>
    </div>
  
  </div>
  <!-- Card -->
   <!-- Card 2  -->
  <div
  class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-none">
    <!-- Card image -->
    <a href="#!">
        <img  class="rounded-t-lg" src="/image/uqulogo.png" id="imgPortfolio" alt="جامعة أم القرى">
    </a>
  
    <!-- Card header -->
    <div class="border-b-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
      <h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
        <span class="mr-2">
            UQU | Makkah 
                </span>
      
      </h5>
    </div>
  
    <!-- Card body -->
    <div class="p-6 mt-auto">
  
      <!-- Title --> 
      <h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
        Web Developer
          </h5>
  
      <!-- Button -->
      <a href="#" onclick="onOpenUQU()"
        class="flex flex-col items-center mt-3 inline-block rounded bg-blue-500 px-6 pb-2  pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
        more details
          </a>
  
    </div>
  
    <!-- Card footer -->
    <div class="border-t-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
      <h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
       
        <span class="ml-2">
            Feb,2020 - Apr,2020 
                </span>
      </h5>
    </div>
  
  </div>
  <!-- Card -->
   <!-- Card -->
  <div
  class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-none">
    <!-- Card image -->
    <a href="#!">
        <img  class="rounded-t-lg" src="/image/noor.jpg" id="imgPortfolio" alt="مستشفى النور ">
    </a>
  
    <!-- Card header -->
    <div class="border-b-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
      <h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
        <span class="mr-2">
            Mis , AL-Noor-Hospital| Makkah
                </span>
      
      </h5>
    </div>
  
    <!-- Card body -->
    <div class="p-6 mt-auto">
  
      <!-- Title -->
      <h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
        Web Designer
              </h5>
  
      <!-- Button -->
      <a href="#" onclick="onOpennoor()"
        class="flex flex-col items-center mt-3 inline-block rounded bg-blue-500 px-6 pb-2  pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
        more details
          </a>
  
    </div>
  
    <!-- Card footer -->
    <div class="border-t-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
      <h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
       
        <span class="ml-2">
            MAR, 2021 - AUG, 2022 
                </span>
      </h5>
    </div>
  
  </div>
  <!-- Card -->
  </div>
    </section>
<!--
    <section class="experience bounce-in-left">
        <h2>Experience</h2>
    <div class="owl-carousel">
        <div class="item">
            <div class="card shadow-drop-2-center">
                <img src="/image/LogoAlwatanya.png" id="imgPortfolio" alt="جمارك">
                <h3>Web Developer</h3>
                <p> AL-watanya company | Riyadh </p>
                   <p>JAN, 2019 - JAN, 2020 </p>
                   <button onclick="onOpenAlwatanyaCompany()"
                    class="btns" style="background-color: #740a94cb;">
                    <h3 style="color: black ;">more details</h3>
                </button>
            </div>
        </div>
        <div class="item">
            <div class="card shadow-drop-2-center">
                <img src="/image/uqulogo.png" id="imgPortfolio" alt="جامعة أم القرى">
                <h3>Web Developer</h3>
                <p> UQU | Makkah </p>
                <p style="margin-left: 1%">2020 - 2020  </p>
                <button onclick="onOpenUQU()"
                class="btns" style="background-color: #740a94cb;">
                <h3 style="color: black ;">more details</h3>
            </button>
            </div>
        </div>
        <div class="item">
            <div class="card shadow-drop-2-center">
                <img src="/image/noor.jpg" id="imgPortfolio" alt="النور">
                <h3>Web Designer</h3>
                <p>  Mis , AL-Noor-Hospital| Makkah </p>
                <p >MAR, 2021 - AUG, 2022  </p>
                <button onclick="onOpennoor()"
                class="btns" style="background-color: #740a94cb;">
                <h3 style="color: black ;">more details</h3>
            </button>
            </div>
        </div>
       
    </div>
</section>-->
<div class="container">
    <section class="info shadow-drop-2-center">
        <div class="info-item">
            <h2 style="text-align: center">Contact</h2>
            <div class="row">
<div class="col-sm"><lord-icon
    src="https://cdn.lordicon.com/pdpnqfoe.json"
    trigger="loop"
    delay="2000"
    colors="primary:#a866ee,secondary:#ebe6ef"
    style="width:50px;height:50px">
</lord-icon></div>
<div class="col-sm">
    <p style="margin-top: 6%"> feisal.forwork@gmail.com</p>

</div>
            </div>
            <div class="row">
                <div class="col-4">
                   
                  <lord-icon src={{ asset('css/hcndxtmn.json') }}   trigger="loop"
                  delay="2000"
          colors="primary:#a866ee,secondary:#ebe6ef"
                  style="width:47px;height:47px">
              </lord-icon>
                </div>
                <div class="col-8">
                    <p style="text-align: left">+966540870969</p>

                </div>
            </div>
            <div class="row">
                <div class="col-4">
            <img src="/image/GitHub.png" alt="GitHub" id="iconimage"> 
                </div>
                <div class="col-8">

            <a href=" https://github.com/faisal-sameer ">Github</a> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
            <img src="/image/Link.png" alt="Linkedin" id="iconimage"> 
                </div>
                <div class="col-8">

            <a href=" https://www.linkedin.com/in/faisal-jambi-176a811aa/">Linkedin </a> 
                </div>
            </div>
        </div>
    </section>
    
    <section class="info shadow-drop-2-center">
        <div class="info-item">
            <h2>Technical Skills</h2>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>JS</li>
              <li>PHP OOP 
            </li>
              <li>Laravel Framework 
            </li>
              <li>                Mysql 
            </li>
              <li>                Oracle DB 
            </li>
              <li>                Vue JS 
            </li>
              <li>Flutter</li>
              <li>GitHub</li>
              <li>                Oracle Apex 
            </li>   
  </ul>
        </div>
    </section>
</div>
    <section class="education shadow-drop-2-center">
        <h2>Education</h2>
        <div class="education-item">
            <h3>Bachelor of Computer science | Umm Al Qura University  </h3>
            <p>2015 - 2020 </p>
        </div>
    </section>


    <div id="myModalAlwatanyaCompany" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span onclick="closeAlwatanyaCompany()" class="close">&times;</span>
            </div>

            <div class="modal-body">
                <section class="education">
                    <h2>Alwatanya Company</h2>
                    <div class="education-item">
                <p>Design, develop, and maintain a dynamic website for Alwatanya Company, providing ongoing support and enhancements . </p>
                    </div>
                </section>
                </div>

        </div>
    </div>
    <div id="myModalUQU" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span onclick="closeUQU()" class="close">&times;</span>
            </div>

            <div class="modal-body">
                <section class="education">
                    <h2>Umm Al-Qura University</h2>
                    <div class="education-item">
                <p>Developing an interactive website to celebrate the 90th National Day of the Kingdom of Saudi Arabia, 
                    which presents attractive challenges for users to participate and celebrate this important event.
                     The competition was in cooperation with the Deanship of Student Affairs at Umm Al-Qura University. </p>
                    </div>
                </section>
                </div>

        </div>
    </div>
    <div id="myModalnoor" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span onclick="closenoor()" class="close">&times;</span>
            </div>

            <div class="modal-body">
                <section class="education">
                    <h2>Mis , AL-Noor-Hospital</h2>
                    <div class="education-item">
                <p>I have had the privilege of working in the Programs Department at Al-Noor Specialist Hospital, where I have been dedicated to developing electronic services that span various areas within the hospital, including laboratory operations and the blood bank. </p>
                    </div>
                </section>
                </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 3, // Number of items to show at a time
                loop: true, // Infinite loop
                margin: 20, // Space between items
                nav: true, // Display navigation buttons
                dots: false, // Hide navigation dots
                autoplay: true, // Autoplay the carousel
                autoplayTimeout: 3000, // Autoplay interval in milliseconds
                navText: [
                    '<i class="fa fa-chevron-left"></i>',
                    '<i class="fa fa-chevron-right"></i>'
                ] // Custom navigation icons
            });
        });
    </script>

</body>
</html>
