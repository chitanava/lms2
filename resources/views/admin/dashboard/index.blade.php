<x-admin.app>
  <x-slot name="title">Dashboard</x-slot>

  <x-slot name="breadcrumbs">
    <x-admin.breadcrumbs :items="[
        ['title' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['title' => 'Main']
    ]"/>
  </x-slot>

  <x-admin.page-header title="Lorem ipsum dolor sit amet consectetur.">
    <a href="" class="btn btn-accent">New page</a>
  </x-admin.page-header>

  <div>Lorem ipsum dolor sit amet consectetur.</div>
</x-admin.app>