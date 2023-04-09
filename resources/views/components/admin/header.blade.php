<header
  class="flex justify-between items-center h-16 px-6 bg-base-100 bg-opacity-70 backdrop-blur sticky top-0 z-30 shadow-sm">
  <div class="flex gap-6 items-center">
    <div class="lg:hidden">
      <span class="tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]" data-tip="Menu">
        <label for="my-drawer" class="btn btn-square btn-ghost drawer-button">
          <x-admin.icon size="6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </x-admin.icon>
        </label>
      </span>
    </div>
    {{ $slot }}
  </div>
  <div>
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost gap-1 normal-case m-1">
        <x-admin.icon stroke-width="2.2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </x-admin.icon>
        <span>Nika</span>
        <x-admin.icon stroke-width="2.2" size="4" class="opacity-60 ml-1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </x-admin.icon>       
      </label>
      <div tabindex="0" class="dropdown-content card card-compact w-64 p-2 shadow bg-base-200 text-base-content">
        <div class="card-body">
          <div>
            <h3 class="card-title">Nika Chitanava</h3>
            <p class="text-xs">chitanava@gmail.com</p>
          </div>
          <div class="divider my-0"></div>
          <ul class="menu p-1 menu-compact">
            <li>
              <a>
                <x-admin.icon size="4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </x-admin.icon>
                Profile
              </a>
            </li>
            <li>
              <a>
                <x-admin.icon size="4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </x-admin.icon>
                Sign out
              </a>
            </li>
            <li>
              <a x-data="" x-on:click="toggleDarkMode()">
                <div x-show="!darkMode" class="flex gap-3 items-center">
                  <x-admin.icon size="4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                  </x-admin.icon>
                  Toggle dark mode
                </div>
                <div x-show="darkMode" class="flex gap-3 items-center">
                  <x-admin.icon size="4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                  </x-admin.icon>
                  Toggle light mode
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>