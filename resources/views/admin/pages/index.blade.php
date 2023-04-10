<x-admin.app>
  <x-slot name="title">Pages</x-slot>

  <x-slot name="breadcrumbs">
    <x-admin.breadcrumbs :items="[
        ['title' => 'Pages', 'url' => route('admin.pages.index')],
        ['title' => 'List']
    ]"/>
  </x-slot>

  <x-admin.page-header title="Pages">
    <a href="{{ route('admin.pages.create') }}" class="btn btn-accent">New page</a>
  </x-admin.page-header>

  @if ($pages->isNotEmpty())   
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
      @foreach ($pages as $page)
        <tr>
          <td>{{ $page->title }}</td>
          <td>
            <livewire:admin.toggle-button :model="$page" :key="$page->id">            
          </td>
          <td>
            <div class="flex gap-2">
              <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-square btn-sm  btn-ghost m-1">
                  <x-admin.icon size="4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                  </x-admin.icon>
                </label>
                <ul tabindex="0" class="dropdown-content menu menu-compact p-2 shadow bg-base-100 rounded-box w-52">
                  <li>
                    <a href="{{ route('admin.pages.show', $page->id) }}">
                      <x-admin.icon size="4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </x-admin.icon>                     
                      Add component
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('admin.pages.edit', $page->id) }}">
                      <x-admin.icon size="4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                      </x-admin.icon>     
                      Edit
                    </a>
                  </li>
                  <li>
                    <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" href="{{ route('admin.pages.destroy', $page->id) }}" class="flex gap-3 w-full">
                        <x-admin.icon size="4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </x-admin.icon>
                        Delete
                      </button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  @endif
</x-admin.app>