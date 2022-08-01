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
                        <h1 class="text-3xl font-semibold text-red-500 ">Other</h1>
                        <h2 class="text-gray-600">David Baekeland</h2>
                    </div>
                </a>

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div>
                            <div class="p-6">
                                <a href="https://endearing-malasada-97df5d.netlify.app/"><img src="{{asset('storage/hln.png')}}" alt="Foto van Recepten app" class="mb-4 sm:rounded-lg"></a>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Kotlin</a></div>

                                <div class="ml-4">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <p>Voor het eindwerk van de cursus "Android" heb ik een recepten app ontwikkelt waarbij ik data ophaal van een externe bron (<a href="https://spoonacular.com/food-api" class="text-red-500 underline">API</a>). De gebruiker kan vervolgens  <span class="text-red-500">filteren</span> op bepaalde gerechten. Vervolgens toon ik deze data met verschillende <span class="text-red-500">recycleviews</span>, <span class="text-red-500">cardviews</span>, ... .</p>

                                        <p class="mt-4">Tot slot kan de gebruiker recepten als favorieten opslaan. Dit word vervolgens opgeslagen in <a href="https://firebase.google.com/products/firestore" class="text-red-500 underline">Firebase/Firestore</a>. Deze data wordt dan getoond in een andere <span class="text-red-500">fragment</span>.</p>
                                        <ul class="mt-4">
                                            <h3>Links:</h3>
                                            <li><a href="https://github.com/DavidBaekeland/Android" class="underline">Github (code)</a></li>
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
