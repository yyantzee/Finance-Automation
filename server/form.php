<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="icon" type="image/svg+xml" href="./favicon.png" />
  <meta name="generator" content={Astro.generator} />
  <meta name="description" content="Template built with tailwindcss using Tailus blocks v2" />
  <title>
    Finance Automation - Contact Us
  </title>

  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="bg-black">
  <div class="hidden fixed top-0 left-0 w-full h-full bg-black z-50 flex justify-center items-center" id="loadingContainer">
    <div class="border-8 border-gray-200 border-t-blue-500 rounded-full animate-spin h-24 w-24"></div>
  </div>

  <nav id="navbar" class="z-10 w-full fixed duration-300">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
      <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative">
        <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
        <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0">
          <a href="../index.html" aria-label="logo" class="flex space-x-2 items-center">
            <img src="logo.svg" class="h-8 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
            <span class="text-2xl font-bold text-gray-100 tracking-wide">financeautomation.id</span>
          </a>

          <div class="relative flex items-center lg:hidden max-h-10">
            <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative  p-6 -mr-6">
              <div aria-hidden="true" id="line" class="m-auto h-0.5 w-5 rounded bg-white transition duration-300"></div>
              <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-white transition duration-300"></div>
            </label>
          </div>
        </div>
        <div aria-hidden="true" class="fixed z-10 inset-0 h-screen w-screen bg-black/30 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70"></div>
        <div class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top 
                            lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none
                            peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none 
                            dark:shadow-none dark:bg-gray-800 dark:border-gray-700">

          <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0">
            <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0">
              <li>
                <a href="../index.html#solution" class="block md:px-4 transition text-black hover:text-slate-500 lg:text-white lg:hover:text-slate-300">
                  <span>Solution</span>
                </a>
              </li>
              <li>
                <a href="../index.html#testimonials" class="block md:px-4 transition text-black hover:text-slate-500 lg:text-white lg:hover:text-slate-300">
                  <span>Testimonials</span>
                </a>
              </li>
              <li>
                <a href="../index.html#blog" class="block md:px-4 transition text-black hover:text-slate-500 lg:text-white lg:hover:text-slate-300">
                  <span>Latest</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="mt-12 lg:mt-0">
            <a href="form.php" class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:border before:border-black lg:before:border-white before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
              <span class="relative text-sm font-semibold lg:text-white">Join Now</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <?php

  function get_client_ip()
  {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
      $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
      $ipaddress = 'UNKNOWN';
    return $ipaddress;
  }
  ?>

  <div class="isolate bg-black px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Contact sales</h2>
      <p class="mt-2 text-lg leading-8 text-slate-300">or contact us info@financeautomation.com</p>
    </div>
    <form action="send-data.php" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
          <label for="first-name" class="block text-sm font-semibold leading-6 text-white">First name</label>
          <div class="mt-2.5">
            <input type="text" required name="first-name" placeholder="First Name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="last-name" class="block text-sm font-semibold leading-6 text-white">Last name</label>
          <div class="mt-2.5">
            <input type="text" required name="last-name" placeholder="Last Name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="company" class="block text-sm font-semibold leading-6 text-white">Company</label>
          <div class="mt-2.5">
            <input type="text" required name="company" placeholder="Company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="email" class="block text-sm font-semibold leading-6 text-white">Email</label>
          <div class="mt-2.5">
            <input type="email" required name="email" id="email" placeholder="Email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="phone-number" class="block text-sm font-semibold leading-6 text-white">Phone number</label>
          <div class="relative mt-2.5">
            <div class="absolute inset-y-0 left-0 flex items-center">
              <label for="country" class="sr-only">Country</label>
              <select id="country" required name="country" class="h-full cursor-pointer rounded-md border-0 bg-transparent bg-none py-0 pl-7 pr-9 text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                <option selected value="62">+62</option>
                <option value="60">+60</option>
                <option value="61">+61</option>
              </select>
            </div>
            <input type="number" required name="phone-number" placeholder="Number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-32 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="message" class="block text-sm font-semibold leading-6 text-white">Message</label>
          <div class="mt-2.5">
            <textarea name="message" required id="message" placeholder="Message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
        <div class="sm:col-span-2" hidden>
          <label for="ip" class="block text-sm font-semibold leading-6 text-white">IP</label>
          <div class="mt-2.5">
            <input type="text" required value="<?php echo get_client_ip(); ?>" name="ip" id="ip" placeholder="IP" autocomplete="ip" class="block w-full cursor-not-allowed rounded-md border-0 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <div class="mt-2.5">
            <div class="g-recaptcha" data-sitekey="6Ld05HwpAAAAAB9lOv4wtdyr4zbOZh2zKa5dNWTb"></div>
          </div>
          <div class="mt-10">
            <button id="submit" class="block w-full rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:border-2 duration-300 transition ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
          </div>
    </form>
  </div>
</body>

</html>
<style>
  html {
    font-family: Urbanist, sans-serif;
    scroll-behavior: smooth;
  }

  body {
    margin: 0;
  }

  #toggle_nav:checked~div #hamburger #line {
    @apply rotate-45 translate-y-1.5
  }

  #toggle_nav:checked~div #hamburger #line2 {
    @apply -rotate-45 -translate-y-1
  }
</style>

<script is:inline>
  function handleScroll() {
    const navbar = document.getElementById('navbar');
    const scrollPosition = window.scrollY;

    // Tambahkan atau hapus kelas 'navbar-white' berdasarkan posisi scroll
    if (scrollPosition > 0) {
      navbar.classList.add('bg-black');
    } else {
      navbar.classList.remove('bg-black');
    }
  }

  // Panggil fungsi handleScroll saat halaman dimuat dan saat terjadi pengguliran
  document.addEventListener('DOMContentLoaded', function() {
    handleScroll();
  });

  window.addEventListener('scroll', function() {
    handleScroll();
  });

  document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("loadingContainer").classList.remove("hidden");
  });

  // Sembunyikan loading component saat seluruh halaman dan konten telah dimuat
  window.addEventListener("load", function() {
    document.getElementById("loadingContainer").classList.add("hidden");
  });
</script>