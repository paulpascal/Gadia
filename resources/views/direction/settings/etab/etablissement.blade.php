@extends('direction.modules.layouts')

@section('title')
Gestion établissement
@endsection

@section('content')
<div class="max-w-7xl mx-auto w-full">
    <div class="mt-10 sm:mt-0">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="px-4 py-5 bg-white dark:bg-gray-700 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">

                @if (session('error'))
                <div
                    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-red-100 dark:bg-red-600 text-red-600 bg-red-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-red">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ session('error') }}</span>
                    </div>
                </div>
                @endif

                @if (session('success'))
                <div
                    class="p-2 mb-3 flex items-center justify-between text-sm font-semibold dark:text-green-100 dark:bg-green-600 text-green-600 bg-green-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-green">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
                @endif

                <div class="flex flex-col sm:flex-row mb-4 text-gray-600 dark:text-gray-300">
                    <button onclick="openTab(event, 'identity')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block border-b-2 text-purple-500 border-purple-500 dark:text-purple-400 dark:border-purple-400 focus:outline-none py-2 px-4">
                        Identité
                    </button>
                    <button onclick="openTab(event, 'logos')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Logos
                    </button>
                    <button onclick="openTab(event, 'sign')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Signatures
                    </button>
                    <button onclick="openTab(event, 'cachet')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Cachet
                    </button>
                    <button onclick="openTab(event, 'calendar')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Calendrier
                    </button>
                    <button onclick="openTab(event, 'day')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Journée
                    </button>
                    <button onclick="openTab(event, 'food')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Restauration
                    </button>
                    <button onclick="openTab(event, 'pauses')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Récréations
                    </button>
                    <button onclick="openTab(event, 'times')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Horaires
                    </button>
                    <button onclick="openTab(event, 'period')"
                        class="text-sm uppercase font-light flex-1 tablinks inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Périodes
                    </button>
                    <button onclick="openTab(event, 'sites')"
                        class="text-sm uppercase font-light flex-1 inline-block hover:text-purple-500 dark:hover:text-purple-400 focus:outline-none py-2 px-4">
                        Sites
                    </button>
                </div>
                @include('direction.settings.etab.identity')
                @include('direction.settings.etab.logos')
                @include('direction.settings.etab.sign')
                @include('direction.settings.etab.cachet')
                @include('direction.settings.etab.calendar')
                @include('direction.settings.etab.day')
                @include('direction.settings.etab.food')
                @include('direction.settings.etab.pauses')
                @include('direction.settings.etab.times')
                @include('direction.settings.etab.period')
                @include('direction.settings.etab.sites')
            </div>
            <div
                class="flex items-center text-right justify-end px-4 py-3 bg-white dark:bg-gray-700 sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <a href="javascript:history.back()"
                    class="mr-3 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                    Retour
                </a>
                <button id="submit" form="identity" type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-white border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-900 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-100 active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:border-gray-900 dark:focus:border-gray-50 focus:ring focus:ring-gray-300 dark:focus:ring-gray-700 disabled:opacity-25 transition">
                    Sauvegarder
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        var submit = document.getElementById("submit");

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(
                " border-b-2 text-purple-500 border-purple-500 dark:text-purple-400 dark:border-purple-400",
                " hover:text-purple-500 dark:hover:text-purple-400");
        }

        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className +=
            " border-b-2 text-purple-500 border-purple-500 dark:text-purple-400 dark:border-purple-400";
        submit.setAttribute("form", tabName);
    }
</script>
@endsection
