<x-admin.app>
  <x-slot name="title">Create Topic</x-slot>

  <x-slot name="breadcrumbs">
    <x-admin.breadcrumbs :items="[
        ['title' => 'Topics', 'url' => route('admin.topics.index')],
        ['title' => 'Create']
    ]"/>
  </x-slot>

  <x-admin.page-header title="Create Topic" />

  <form action="{{ route('admin.topics.store') }}" method="POST">
    @csrf
    <div class="card bg-base-100 shadow">
      <div class="card-body space-y-4">
        <div class="form-control w-full">
          <label for="title" class="label">
            <span class="label-text">Title</span>
          </label>
          <input type="text" name="title" value="{{ old('title') }}" id="title" class="input input-bordered" />
          @error('title')
            <p class="text-xs text-error px-1 py-2">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-control items-start">
          <label class="label cursor-pointer gap-4">
            <span class="label-text">Active</span> 
            <input type="hidden" name="active" value="0">
            <input type="checkbox" name="active" value="1" class="toggle" @checked(old('active', true)) />
          </label>
          @error('active')
            <p class="text-xs text-error px-1 py-2">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>  

    <div class="mt-4">
      <button type="submit" class="btn btn-accent">Create</button>
    </div>
  </form>
</x-admin.app>