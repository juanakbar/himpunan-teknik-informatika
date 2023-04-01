<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div
        class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
        <ul class="space-y-2 pb-2">
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard w-6 h-6"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 4h6v8h-6z"></path>
                        <path d="M4 16h6v4h-6z"></path>
                        <path d="M14 12h6v8h-6z"></path>
                        <path d="M14 4h6v4h-6z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </x-nav-link>
            </li>
            <li>
                <x-nav-link :href="route('divisi.index')" :active="request()->routeIs('divisi.*')">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 icon icon-tabler icon-tabler-brand-campaignmonitor" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 18l9 -6.462l-9 -5.538v12h18v-12l-9 5.538"></path>
                    </svg>
                    <span class="ml-3">Divisi</span>
                </x-nav-link>
            </li>
        </ul>
        <div class="pt-2 space-y-2">
        </div>
    </div>

</aside>
