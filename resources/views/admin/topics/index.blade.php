<x-admin.app>
  <x-slot name="title">Topics</x-slot>

  <x-slot name="breadcrumbs">
    <x-admin.breadcrumbs :items="[
        ['title' => 'Topics', 'url' => route('admin.topics.index')],
        ['title' => 'List']
    ]"/>
  </x-slot>

  <x-admin.page-header title="Topics">
    <a href="{{ route('admin.topics.create') }}" class="btn btn-accent">New topic</a>
  </x-admin.page-header>

  <div class="overflow-x-auto">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>Title</th>
          <th>Active</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($topics as $topic)
        <tr>
          <td>{{ $topic->title }}</td>
          <td>
            <div x-data="active">
              <input x-on:change="toggle({
                url: '{{ route('admin.topics.active-toggle') }}',
                id: {{ $topic->id }},
                token: '{{ csrf_token() }}'
              })" type="checkbox" class="toggle toggle-sm" @checked($topic->active) />
            </div>
          </td>
          <td>
            <div class="flex gap-2">
              <a href="{{ route('admin.topics.edit', $topic->id) }}" class="btn btn-outline btn-xs btn-accent">Edit</a>
              <form action="{{ route('admin.topics.destroy', $topic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" href="{{ route('admin.topics.destroy', $topic->id) }}" class="btn btn-outline btn-xs btn-secondary">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

  @push('scripts')
    <script src="{{ asset('js/alpine-data.js') }}"></script>
  @endpush
</x-admin.app>