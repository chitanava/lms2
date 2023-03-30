<!DOCTYPE html>
<html lang="en" data-theme="cupcake">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400;1,600&display=swap"
  rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    [x-cloak] { display: none; }
  </style>
  <title>Document</title>
</head>

<body class="font-poppins">
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>

  <div x-data="{ open: false }">
    <button @click="open = ! open">Toggle Content</button>

    <div x-show="open">
      Content...
    </div>
  </div>

  <div>
    <button class="btn">Button</button>
  </div>

  <div class="dropdown">
    <label tabindex="0" class="btn m-1">Click</label>
    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
      <li><a>Item 1</a></li>
      <li><a>Item 2</a></li>
    </ul>
  </div>

</body>

</html>