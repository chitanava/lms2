<x-admin.app>
  <x-slot name="title">Edit Page</x-slot>

  <x-slot name="breadcrumbs">
    <x-admin.breadcrumbs :items="[
        ['title' => 'Pages', 'url' => route('admin.pages.index')],
        ['title' => 'Edit']
    ]"/>
  </x-slot>

  <x-admin.page-header title="Edit Page" />

  <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card bg-base-100 shadow">
      <div class="card-body space-y-4">
        <div class="form-control w-full">
          <label for="title" class="label">
            <span class="label-text">Title</span>
          </label>
          <input type="text" name="title" value="{{ old('title', $page->title) }}" id="title" class="input input-bordered" />
          @error('title')
            <p class="text-xs text-error px-1 py-2">{{ $message }}</p>
          @enderror
        </div>

        <div class="form-control items-start">
          <label class="label cursor-pointer gap-4">
            <span class="label-text">Active</span> 
            <input type="hidden" name="active" value="0">
            <input type="checkbox" name="active" value="1" class="toggle" @checked(old('active', $page->active)) />
          </label>
          @error('active')
            <p class="text-xs text-error px-1 py-2">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>  

    <div class="mt-4">
      <button type="submit" class="btn btn-accent">Update</button>
    </div>
  </form>
</x-admin.app>