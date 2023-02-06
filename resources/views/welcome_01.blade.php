<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-neutral-900{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-neutral-900{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-neutral-900{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
            }
            .bg-img-3ds {
                background-image: url('{{URL::asset('/images/3.png')}}');
                filter: sepia(0.5);
                filter: grayscale(0.5);
                height:100%;
            }
            .trev-top-bar {
              background-color: transparent;
              color: #fff;
              box-shadow: 0 0 8px #27272a;
              font-size: 14px;
              padding-top: 1rem;
              padding-bottom: 1rem;
            }
            .trev-top-bar .trev-top-bar-item:first-child {
              -webkit-animation: top-bar-animation-1 16s ease infinite;
              animation: top-bar-animation-1 16s ease infinite;
            }

            .trev-top-bar .trev-top-bar-item:nth-child(2) {
              -webkit-animation: top-bar-animation-2 16s ease infinite;
              animation: top-bar-animation-2 16s ease infinite;
            }

            .trev-top-bar .trev-top-bar-item:nth-child(3) {
              -webkit-animation: top-bar-animation-3 16s ease infinite;
              animation: top-bar-animation-3 16s ease infinite;
            }

            .trev-top-bar .trev-top-bar-item:nth-child(4) {
              -webkit-animation: top-bar-animation-4 16s ease infinite;
              animation: top-bar-animation-4 16s ease infinite;
            }

            .trev-top-bar .trev-top-bar-fa-icon,
            .trev-top-bar .icon {
              color: #fff;
              margin-right: .3rem;
            }

            .trev-top-bar .trev-top-bar-fa-icon {
              font-size: 16px;
            }

            .trev-top-bar .icon svg {
              width: 16px;
              height: 16px;
            }

            @keyframes top-bar-animation-1 {
              0% {
                left: 100%;
              }
              8.33% {
                left: 0;
              }
              16.66% {
                left: 0;
              }
              24.99% {
                left: -100%;
              }
              100% {
                left: -100%;
              }
            }

            @keyframes top-bar-animation-2 {
              0% {
                left: 100%;
              }
              24.99% {
                left: 100%;
              }
              33.33% {
                left: 0;
              }
              41.66% {
                left: 0;
              }
              49.99% {
                left: -100%;
              }
              100% {
                left: -100%;
              }
            }

            @keyframes top-bar-animation-3 {
              0% {
                left: 100%;
              }
              49.99% {
                left: 100%;
              }
              58.33% {
                left: 0;
              }
              66.66% {
                left: 0;
              }
              74.99% {
                left: -100%;
              }
              100% {
                left: -100%;
              }
            }

            @keyframes top-bar-animation-4 {
              0% {
                left: 100%;
              }
              74.99% {
                left: 100%;
              }
              83.33% {
                left: 0;
              }
              91.66% {
                left: 0;
              }
              100% {
                left: -100%;
              }
            }

            .ripple-circle {
              top: 50%;
              left: 50%;
              width: 0;
              height: 0;
              display: block;
              border-radius: 50%;
              position: absolute;
              border: 2px solid #ccc;
              transform: translate(-50%, -50%);
              background: rgba(100, 100, 100, 0.1);
              animation: ripple 3s ease infinite;
            }

            .ripple-container {
              width: 6rem;
              height: 6rem;
              margin: 0 auto;
              display: block;
              position: relative;
              box-shadow: 0 0 7px 0px rgba(100, 100, 100, 0.15);
            }

            @keyframes ripple {
              from {
                width: 0.1%;
                height: 0.1%;
                opacity: 1;
              }
              to {
                width: 100%;
                height: 100%;
                opacity: 0;
              }
            }

        </style>
    </head>
    <body class="antialiased bg-neutral-300 ">
      <nav class="border-b border-neutral-500">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-neutral-900" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.

                  Heroicon name: outline/bars-3

                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                  Icon when menu is open.

                  Heroicon name: outline/x-mark

                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              </div>
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-neutral-900", Default: "text-neutral-900 hover:bg-gray-700 hover:text-neutral-900" -->
                  {{-- <a href="#" class="bg-gray-200 text-neutral-900 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a> --}}
                  <a href="#" class="text-gray-900 hover:shadow-md hover:bg-neutral-400 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                  <a href="#" class="text-gray-900 hover:shadow-md hover:bg-neutral-400 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Team</a>

                  <a href="#" class="text-gray-900 hover:shadow-md hover:bg-neutral-400 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                  <a href="#" class="text-gray-900 hover:shadow-md hover:bg-neutral-400 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>

              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>

                <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-neutral-900 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
        @endif
      </nav>
      <div class="flex m-6 border-8 border-neutral-500 p-6 hover:drop-shadow-xl bg-neutral-300">
        <div class="flex-1">
          <p class="text-lg text-neutral-600">Hello :) I am</p>
          <h1 class="text-9xl text-neutral-600 border-t border-neutral-500 ">PASCAL</h1>
          <h2 class="text-6xl text-neutral-500 border-b border-neutral-500 ">PONGCHINDA</h2>
          <p class="text-base text-neutral-600 mt-4">
            <span class="font-bold text-neutral-800"> PASCAL </span> IS A <span class="font-bold text-neutral-800"> WEB-DEVELOPER AND A PART-TIME 3D VISUALIZER. </span></br>
            HE HAS EXPERIENCE IN VARIOUS KINDS OF PROJECT SCALES</br>
            AND IS ABLE TO DELIVER <span class="font-bold text-neutral-800"> INTERESTING YET INTERACTIVE PACKAGES. </span>
          </p>
        </div>
        <div class="flex-1">
          <div class="pl-4">
            <img src="{{URL::asset('/images/3.png')}}">
          </div>
        </div>
      </div>
      <div class="trev-top-bar overflow-hidden" style="height: 56px;">
        <div class="container-fluid">
          <div class="row position-relative">
            <div class="col-12 col-md trev-top-bar-item text-center position-absolute text-neutral-600">Fast Shipping</div>
            <div class="col-12 col-md trev-top-bar-item text-center position-absolute text-neutral-600">100 Days Right of Return</div>
            <div class="col-12 col-md trev-top-bar-item text-center position-absolute text-neutral-600">Buy with Invoice</div>
            <div class="col-12 col-md trev-top-bar-item text-center position-absolute text-neutral-600">Proven Quality</div>
          </div>
        </div>
      </div>
      <div class="flex m-6">
        <div class="flex-1 m-6 bg-img-3ds bg-no-repeat bg-cover bg-neutral-600 opacity-80">
          <div class="text-center border-2">
            <h1 class="text-xl text-neutral-200 py-2 font-bold">EXPERIENCE</h1>
            <div class="flex">
              <div class="flex-1">
              </div>
              <div class="flex-1">
                <div class="ripple-container">
                  <a class="ripple-circle" href="#"></a>
                  <div style="transform: translate(248%,248%);" class="border-2 border-neutral-100 bg-neutral-600 rounded-full h-4 w-4"></div>
                </div>
              </div>
              <div class="flex-1 text-left">
                <h2 class="text-base text-neutral-200"> LEXICON </h2>
                <h4 class="text-base text-neutral-200"> 2022 - Present </h4>
                <h4 class="text-base text-neutral-200"> Bangkok, Thailand </h4>
                <p class="text-base text-neutral-200"> Full-Stack Developer </p>
              </div>
            </div>
            <div class="flex">
              <div class="flex-1 text-right">
                <h2 class="text-base text-neutral-200"> LEXICON </h2>
                <h4 class="text-base text-neutral-200"> 2022 - Present </h4>
                <h4 class="text-base text-neutral-200"> Bangkok, Thailand </h4>
                <p class="text-base text-neutral-200"> Full-Stack Developer </p>
              </div>
              <div class="flex-1">
                <div class="ripple-container">
                  <a class="ripple-circle" href="#"></a>
                  <div style="transform: translate(248%,248%);" class="border-2 border-neutral-100 bg-neutral-600 rounded-full h-4 w-4"></div>
                </div>
              </div>
              <div class="flex-1 text-left">
              </div>
            </div>
            <div class="flex">
              <div class="flex-1">
              </div>
              <div class="flex-1">
                <div class="ripple-container">
                  <a class="ripple-circle" href="#"></a>
                  <div style="transform: translate(248%,248%);" class="border-2 border-neutral-100 bg-neutral-600 rounded-full h-4 w-4"></div>
                </div>
              </div>
              <div class="flex-1 text-left">
                <h2 class="text-base text-neutral-200"> LEXICON </h2>
                <h4 class="text-base text-neutral-200"> 2022 - Present </h4>
                <h4 class="text-base text-neutral-200"> Bangkok, Thailand </h4>
                <p class="text-base text-neutral-200"> Full-Stack Developer </p>
              </div>
            </div>
            <div class="flex">
              <div class="flex-1 text-right">
                <h2 class="text-base text-neutral-200"> LEXICON </h2>
                <h4 class="text-base text-neutral-200"> 2022 - Present </h4>
                <h4 class="text-base text-neutral-200"> Bangkok, Thailand </h4>
                <p class="text-base text-neutral-200"> Full-Stack Developer </p>
              </div>
              <div class="flex-1">
                <div class="ripple-container">
                  <a class="ripple-circle" href="#"></a>
                  <div style="transform: translate(248%,248%);" class="border-2 border-neutral-100 bg-neutral-600 rounded-full h-4 w-4"></div>
                </div>
              </div>
              <div class="flex-1 text-left">
              </div>
            </div>
          </div>
        </div>
        <div class="flex-1 mr-3">
          <div class="text-center p-6 border-2 border-neutral-600">
            <h1 class="text-xl text-neutral-200 py-2 font-bold bg-neutral-600">ACHIVEMENTS</h1>
            <div class="my-3">
              <h2 class="text-base text-neutral-600"> BACK TO BASIC </h2>
              <p class="font-bold text-neutral-800"> -ASA COMPETITION- </p>
              <p class="text-base text-neutral-600 border-b border-neutral-600"> 30 FINALISTS </p>
            </div>
            <div class="my-3">
              <h2 class="text-base text-neutral-600"> BACK TO BASIC </h2>
              <p class="font-bold text-neutral-800"> -ASA COMPETITION- </p>
              <p class="text-base text-neutral-600 border-b border-neutral-600"> 30 FINALISTS </p>
            </div>
          </div>
          <div class="text-center my-3 p-6 border-2 border-neutral-600">
            <h1 class="text-xl text-neutral-200 py-2 font-bold bg-neutral-600">EDUCATION</h1>
            <div class="">
              <h2 class="text-base text-neutral-600"> ASSUMPTION UNIVERSITY </h2>
              <p class="font-bold text-neutral-800"> -ARCHITECTURE- </p>
              <p class="text-base text-neutral-600 border-b border-neutral-600"> 2012-2018 </p>
            </div>
          </div>
          <div class="text-center my-3 p-6 border-2 border-neutral-600">
            <h1 class="text-xl text-neutral-200 py-2 font-bold bg-neutral-600">SKILLS</h1>
            <h2 class="text-base text-neutral-600"> 3DS MAX </h2>
            <h2 class="text-base text-neutral-600"> PHOTOSHOP </h2>
            <h2 class="text-base text-neutral-600"> FIGMA </h2>
            <h2 class="text-base text-neutral-600"> INDESIGN </h2>
          </div>
          <div class="text-center p-6 border-2 border-neutral-600">
            <h1 class="text-xl text-neutral-200 py-2 font-bold bg-neutral-600">SOFTWARE PROFICIENCY</h1>
            <h2 class="text-base text-neutral-600"> 3DS MAX </h2>
            <h2 class="text-base text-neutral-600"> PHOTOSHOP </h2>
            <h2 class="text-base text-neutral-600"> FIGMA </h2>
            <h2 class="text-base text-neutral-600"> INDESIGN </h2>
          </div>
        </div>
      </div>
    </body>
</html>
