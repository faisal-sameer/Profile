@extends('layouts.app')

@section('content')
<svg xmlns="http://www.w3.org/2000/svg" class="color-change-2x " viewBox="0 0 1440 320">
    <path fill="#4f066582" fill-opacity="1" d="M0,96L80,117.3C160,139,320,181,480,176C640,171,800,117,960,101.3C1120,85,1280,107,1360,117.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
    </path>
    
    <foreignObject x="0" y="0" width="100%" height="100%">
        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
            <img class="profile-image bounce-in-left" src="/image/mypic1.jpeg" alt="Profile Picture" width="100">
            <div class="name bounce-in-left" style="color: white;">{{ $userData->name }}</div>
            <div class="job-title bounce-in-left" style="color: white;">{{ $otherData->Specialty }}</div>
        </div>
    </foreignObject>
</svg>

<div class='box'>
    <div class='wave -one'> </div>
    <div class='wave -two'></div>
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
 <div class="p-6 mt-auto flex flex-col justify-center items-center">
    <!-- Title -->
    <h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
        Web Developer
    </h5>

    <!-- Button -->
    <button
        type="button"
        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
        data-te-toggle="modal"
        data-te-target="#AL-watanya"
        data-te-ripple-init
        data-te-ripple-color="light">
        more details
    </button>
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
<div class="p-6 mt-auto flex flex-col justify-center items-center">

  <!-- Title --> 
  <h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
    Web Developer
      </h5>

  <!-- Button -->
  <button
  type="button"
  class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
  data-te-toggle="modal"
  data-te-target="#UQU"
  data-te-ripple-init
  data-te-ripple-color="light">
  more details
</button>

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
<div class="p-6 mt-auto flex flex-col justify-center items-center">

  <!-- Title -->
  <h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
    Web Designer
          </h5>

  <!-- Button -->
  <button
  type="button"
  class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
  data-te-toggle="modal"
  data-te-target="#Mis"
  data-te-ripple-init
  data-te-ripple-color="light">
  more details
</button>

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
<div class="sm:flex sm:justify-center">
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
                <a href="{{ $otherData->Github }}" class="ml-4">Github</a>
            </div>
            <br>
            <div class="flex items-center mb-4">
                <img src="/image/Link.png" alt="LinkedIn" class="w-12 h-12" id="iconimage">
                <a href="{{ $otherData->Linkdin }}" class="ml-4">LinkedIn</a>
            </div>
        </div>
    </section>

    <section class="info shadow-drop-2-center p-6 my-6 bg-white rounded-lg">
        <div class="info-item text-center">
            <h2 class="text-2xl mb-4">Technical Skills</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>bootstrap</li>
                <li>tailwind</li>
                 <li>JS</li>
                 <li>Vue.JS</li>
                 <li>PHP OOP</li>
                <li>Laravel Framework</li>
                <li>Mysql</li>
                <li>Oracle DB</li>
                <li>Mongo DB</li>
                <li>Flutter</li>
                <li>GitHub</li>
                <li>Oracle Apex</li>
            </ul>
        </div>
    </section>
    <div class="flex flex-col md:flex-row">
        <section class="education shadow-drop-2-center p-6 my-6 md:my-10 bg-white rounded-lg">
            <div class="info-item text-center">
                <h2 class="text-2xl mb-4">Other Skills</h2>
                <ul>
                    <li>Figma</li>
                    <li>Adobe Xd</li>
                    <li>Microsoft office 365</li>
               
                </ul>
            </div>
            <hr
            class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
            <div class="info-item text-center">
                <h2 class="text-2xl mb-4">Languages</h2>
                <ul>
                    <li>Arabic</li>
                    <li>English</li>
               
                </ul>
            </div>
        </section>
        
        <section class="education shadow-drop-2-center p-6 my-6 md:my-10 bg-white rounded-lg">
            <h2 class="text-2xl">Education</h2>
            <div class="education-item">
                <h3 class="text-lg">Bachelor of Computer Science | Umm Al Qura University</h3>
                <p>2015 - 2020</p>
            </div>
            <hr
            class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
            <h2 class="text-2xl">Certificates</h2>
            <div class="education-item text-center">
                <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                    AL-watanya Customs Clearance Company
                </h5>
                <h3 class="text-lg">Certificate of Experience, worked as a programmer at the AL-watanya Customs Clearance Company</h3>
                <a href="{{ asset('pdf/شهادة من شركة الوطنية للتخليص الجمركي.pdf') }}" 
                   class="inline-block rounded bg-info px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(84,180,211,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)]">
                    Pdf
                </a>
            </div>
            <div class="education-item text-center mt-2">
                <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                    Mis , AL-Noor-Hospital
                                </h5>
                <h3 class="text-lg">Certificate of Experience, worked as a Web Designer
                    at the AL-Noor-Hospital</h3>
                <a href="{{ asset('pdf/شهادة خبره فيصل.pdf') }}" 
                   class="inline-block rounded bg-info px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(84,180,211,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)]">
                   Pdf
                </a>
            </div>
        </section>
    </div>
</div>

<section class="experience bounce-in-left">
  <h2>Some of my freelance work</h2>
  <br>
<div class="sm:flex sm:justify-center">
<!-- Card -->
<div
class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-none">
<!-- Card image -->
<a href="#!">
  <img  class="rounded-t-lg" src="/image/fa_comp.jpg" id="imgPortfolio" alt="جمارك">
</a>

<!-- Card header -->
<div class="border-b-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
<h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
  <span class="mr-2">
    Invoice-System
          </span>

</h5>
</div>

<!-- Card body -->
<div class="p-6 mt-auto flex flex-col justify-center items-center">
  <!-- Title -->
  <h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
    A secure cloud-based invoicing system that is compatible with all devices, making the management and monitoring of your store easy and efficient. The invoicing system allows you to effortlessly track all financial operations for your store, including invoices, expenses, and real-time inventory level monitoring.
      </h5>

  <!-- Button -->
  <a href="https://github.com/faisal-sameer/Invoice-System"
   class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
   data-te-ripple-color="light">
   Link
</a>

</div>

</div>
<!-- Card -->
<!-- Card 2  -->
<div
class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-none">
<!-- Card image -->
<a href="#!">
  <img  class="rounded-t-lg" src="/image/terhal.jpg" id="imgPortfolio" alt="جامعة أم القرى">
</a>

<!-- Card header -->
<div class="border-b-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
<h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
  <span class="mr-2">
    Terhal
          </span>

</h5>
</div>

<!-- Card body -->
<div class="p-6 mt-auto flex flex-col justify-center items-center">

<!-- Title --> 
<h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
  Tarhal Foundation website
    </h5>

<!-- Button -->
<a href="https://github.com/abdulaziz-al/travel-_project"
class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
data-te-ripple-color="light">
Link
</a>

</div>

</div>
<!-- Card -->
<!-- Card -->
<div
class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 sm:shrink-0 sm:grow sm:basis-0 sm:rounded-none">
<!-- Card image -->
<a href="#!">
  <img  class="rounded-t-lg" src="/image/logoV3.png" id="imgPortfolio" alt="مستشفى النور ">
</a>

<!-- Card header -->
<div class="border-b-2 border-neutral-100 px-6 py-4 dark:border-neutral-500">
<h5 class="flex items-center justify-center text-neutral-500 dark:text-neutral-300">
  <span class="mr-2">
    Clinic Shyar
          </span>

</h5>
</div>

<!-- Card body -->
<div class="p-6 mt-auto flex flex-col justify-center items-center">

<!-- Title -->
<h5 class="mb-2 text-xl font-bold tracking-wide text-center text-neutral-800 dark:text-neutral-50">
  Mobile application using filters for the Shiar Medical Complex.
        </h5>

<!-- Button -->
<a href="https://github.com/faisal-sameer/clinic-shiyar-app"
class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
data-te-ripple-color="light">
Link
</a>

</div>


</div>
<!-- Card -->
</div>
</section>
  <a href="https://api.whatsapp.com/send?phone=0540870969" class="float">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-10 w-8 mt-2 ml-4"
      fill="currentColor"
      viewBox="0 0 24 24"
    >
    <path
    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />    </svg>
  </a>
  


<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="AL-watanya"
  tabindex="-1"
  aria-labelledby="exampleModalScrollableLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div
      class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalScrollableLabel">
          Alwatanya Company
                </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative overflow-y-auto p-4">
        <p>Design, develop, and maintain a dynamic website for Alwatanya Company, providing ongoing support and enhancements . </p>

      </div>

   
    </div>
  </div>
</div>


<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="UQU"
  tabindex="-1"
  aria-labelledby="exampleModalScrollableLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div
      class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalScrollableLabel">
          UQU
                        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative overflow-y-auto p-4">
        <p>Developing an interactive website to celebrate the 90th National Day of the Kingdom of Saudi Arabia, 
            which presents attractive challenges for users to participate and celebrate this important event.
             The competition was in cooperation with the Deanship of Student Affairs at Umm Al-Qura University. </p>
      </div>

   
    </div>
  </div>
</div>



<div
  data-te-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="Mis"
  tabindex="-1"
  aria-labelledby="exampleModalScrollableLabel"
  aria-hidden="true">
  <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative h-[calc(100%-1rem)] w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div
      class="pointer-events-auto relative flex max-h-[100%] w-full flex-col overflow-hidden rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5
          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
          id="exampleModalScrollableLabel">
          Mis
                        </h5>
        <!--Close button-->
        <button
          type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss
          aria-label="Close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-6 w-6">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative overflow-y-auto p-4">
        <p>I have had the privilege of working in the Programs Department at Al-Noor Specialist Hospital, where I have been dedicated to developing electronic services that span various areas within the hospital, including laboratory operations and the blood bank. </p>

      </div>

   
    </div>
  </div>
</div>


@endsection

@section('script')
    <script>
        // Initialization for ES Users
import {
  Modal,
  Ripple,
  initTE,
} from "tw-elements";

initTE({ Modal, Ripple });
    </script>
@endsection


