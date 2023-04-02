<x-app-layout>
    <div class="p-4 sm:p-8 bg-white block sm:flex items-center justify-between rounded-xl lg:mt-1.5 dark:bg-gray-800">
        <div class="w-full mb-1">
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="flow-root">
                    <div class="flex justify-between">
                        <h3 class="text-xl font-semibold dark:text-white">Area</h3>
                        <Link href="{{ route('divisi.create') }}"
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        Tambah Divisi
                        </Link>
                    </div>
                    <div class="relative shadow-md sm:rounded-lg mt-6">
                        <x-splade-table :for="$divisis">
                            <x-slot:empty-state>
                                <p>Whoops!</p>
                                </x-slot>
                        </x-splade-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
