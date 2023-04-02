@include('layouts.navigation')
<div class="flex pt-16  overflow-hidden bg-gray-50 dark:bg-gray-900">

    @include('layouts.sidebar')

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main class="min-h-screen">
            <div class="px-4 pt-6">
                {{ $slot }}
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>
