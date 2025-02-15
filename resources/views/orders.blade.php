<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl flex gap-2 w-full flex-col mx-auto sm:px-6 lg:px-8">
            <div class="block bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{ __("Baldurs Gate 3 - Steam Key" )}}</h2>
                    <div>
                        <span>Anzahl: {{ __("1") }}</span>
                        <span>Artikel Preis: {{ __("20€") }}</span>
                        <span>Gesamt: {{ __("20€") }}</span>
                    </div>
                </div>
            </div>
            <div class="block bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{ __("Baldurs Gate 3 - Steam Key" )}}</h2>
                    <div>
                        <span>Anzahl: {{ __("1") }}</span>
                        <span>Artikel Preis: {{ __("20€") }}</span>
                        <span>Gesamt: {{ __("20€") }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
