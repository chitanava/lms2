<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>Document</title>
</head>

<body>
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
</body>

</html>