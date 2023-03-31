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
  <style>
    [x-cloak] {
      display: none;
    }
  </style>
  <title>LMS</title>
</head>

<body>
  <div class="drawer drawer-mobile">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
      <div class="flex flex-col gap-6">
        <x-admin.header>
          {{ $breadcrumbs ?? '' }}
        </x-admin.header>

        <main class="w-full max-w-7xl mx-auto px-6 gap-6 mb-6 flex flex-col">
          {{ $slot }}
        </main>
      </div>
    </div>
    <div class="drawer-side">
      <label for="my-drawer" class="drawer-overlay"></label>
      <x-admin.aside></x-admin.aside>
    </div>
  </div>
</body>

</html>