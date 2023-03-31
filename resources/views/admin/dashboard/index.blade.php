<x-admin.app>
  <x-slot name="breadcrumbs">
    <x-admin.breadcrumbs :items="[
        ['title' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['title' => 'Main']
    ]"/>
  </x-slot>

  <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates doloribus obcaecati non voluptatem perferendis.</div>
</x-admin.app>