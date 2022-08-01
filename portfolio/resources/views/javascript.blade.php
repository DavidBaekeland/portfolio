<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        @vite('resources/css/app.css')

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="flex-row mt-4 ">
                <a href="{{ route('home') }}">
                    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" >
                        <h1 class="text-3xl font-semibold text-red-500 ">Javascript</h1>
                        <h2 class="text-gray-600">David Baekeland</h2>
                    </div>
                </a>

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div>
                            <div class="p-6">
                                <a href="https://endearing-malasada-97df5d.netlify.app/"><img src="{{asset('storage/hln.png')}}" alt="Foto van HLN gemaakt in Angular" class="mb-4 sm:rounded-lg"></a>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Angular</a></div>

                                <div class="ml-4">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <p>Voor het eindwerk van Front-end moest ik HLN hervormen met behulp van <a href="https://angular.io/" class="text-red-500 underline">Angular</a> en <span class="text-red-500">React</span>. De nieuws artikelen haal ik op met een <a href="https://newsapi.org/" class="text-red-500 underline">API</a>.</p>


                                        <p class="mt-4">Als eerste ziet een een gebruiker een overzicht van verschillende hoofdpunten. Vervolgens wanneer de gebruiker op een artikel klikt krijgt de klant de detail pagina van dat artikel. In de detail pagina kan de lezer ook commentaar geven. Deze pagina's heb ik gemaakt met verschillende <span class="text-red-500">componenten</span>, <span class="text-red-500">routing</span>, <span class="text-red-500">SCSS</span>, <span class="text-red-500">Typescript</span>, ... in <a href="https://angular.io/" class="text-red-500 underline">Angular</a></p>
                                        <ul class="mt-4">
                                            <h3>Links:</h3>
                                            <li><a href="https://endearing-malasada-97df5d.netlify.app/" class="underline">Website</a></li>
                                            <li><a href="https://github.com/EHB-MCT/angular-course-project-DavidBaekeland" class="underline">Github</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
