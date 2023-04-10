<!DOCTYPE html>
<html x-data="{
    darkMode: $persist(false),
    toggleDarkMode(){
      this.darkMode = !this.darkMode
    }
  }" lang="en" :data-theme="darkMode ? 'forest' : 'cupcake'" x-cloak>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400;1,600&display=swap"
    rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
  @stack('scripts')
  <style>
    [x-cloak] {
      display: none;
    }
  </style>
  <title>@isset($title) {{ $title }} - @endisset LMS</title>
</head>

<body 
  class="no-animation"
  x-init="() => {
    window.addEventListener('load', function() {
      setTimeout(() => {
        document.body.classList.remove('no-animation');
      }, 500)
    })
  }"
  >
  <div class="drawer drawer-mobile">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
      <div class="flex flex-col gap-6">
        <x-admin.header>
          {{ $breadcrumbs ?? '' }}
        </x-admin.header>

        <main class="w-full max-w-7xl mx-auto px-6 gap-6 mb-6 flex flex-col">
          @if (session('status'))
            <div class="alert alert-success shadow-sm">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-5 w-5" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span class="text-sm">{{ session('status') }}</span>
              </div>
            </div>
          @endif

          {{ $slot }}
        </main>
      </div>
    </div>
    <div class="drawer-side">
      <label for="my-drawer" class="drawer-overlay"></label>
      <x-admin.aside></x-admin.aside>
    </div>
  </div>
  @livewireScripts
</body>

</html>