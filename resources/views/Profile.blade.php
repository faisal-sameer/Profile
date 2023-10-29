@extends('layouts.app')

@section('content')

<div class="header">
    <img class="profile-image bounce-in-left" src="/image/mypic1.jpeg" alt="Profile Picture">
    
    <div class="name bounce-in-left">{{ $userData->name }}</div>
    <div class="job-title bounce-in-left">{{ $otherData->Specialty }}</div>
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
<div class="container mx-auto px-4">
    <section class="info shadow-drop-2-center p-6 my-6 bg-white rounded-lg">
        <div class="info-item">
            <h2 class="text-2xl text-center mb-4">Contact</h2>
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 mr-4">
                    <lord-icon
                        src="https://cdn.lordicon.com/pdpnqfoe.json"
                        trigger="loop"
                        delay="2000"
                        colors="primary:#a866ee,secondary:#ebe6ef"
                        style="width:50px;height:50px"
                    ></lord-icon>
                </div>
                <p class="mt-2">{{ $userData->email }}</p>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 mr-4">
                    <lord-icon
                        src="{{ asset('css/hcndxtmn.json') }}"
                        trigger="loop"
                        delay="2000"
                        colors="primary:#a866ee,secondary:#ebe6ef"
                        style="width:47px;height:47px"
                    ></lord-icon>
                </div>
                <p>+966{{ $otherData->phone }}</p>
            </div>
            <div class="flex items-center mb-4">
                <img src="/image/GitHub.png" alt="GitHub" class="w-12 h-12" id="iconimage">
                <a href="https://github.com/faisal-sameer" class="ml-4">Github</a>
            </div>
            <br>
            <div class="flex items-center mb-4">
                <img src="/image/Link.png" alt="LinkedIn" class="w-12 h-12" id="iconimage">
                <a href="{{ $otherData->Linkdin }}" class="ml-4">LinkedIn</a>
            </div>
        </div>
    </section>

    <section class="info shadow-drop-2-center p-6 my-6 bg-white rounded-lg">
        <div class="info-item">
            <h2 class="text-2xl mb-4">Technical Skills</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
                <li>PHP OOP</li>
                <li>Laravel Framework</li>
                <li>Mysql</li>
                <li>Oracle DB</li>
                <li>Vue JS</li>
                <li>Flutter</li>
                <li>GitHub</li>
                <li>Oracle Apex</li>
            </ul>
        </div>
    </section>
    
    <section class="education shadow-drop-2-center p-6 my-6 bg-white rounded-lg">
        <h2 class="text-2xl">Education</h2>
        <div class="education-item">
            <h3 class="text-lg">Bachelor of Computer Science | Umm Al Qura University</h3>
            <p>2015 - 2020</p>
        </div>
    </section>
</div>




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
@endsection