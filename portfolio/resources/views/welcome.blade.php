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
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-semibold text-red-500 ">Porfolio</h1>
                    <h2 class="text-gray-600">David Baekeland</h2>
                </div>
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="p-6 py-6">
                                <div class="text-center ml-4 text-lg leading-7 font-semibold"><a href="{{ route('php') }}" class="text-gray-900 dark:text-white">PHP / Laravel</a></div>
                            </div>

                            <div class="p-6 py-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="text-center ml-4 text-lg leading-7 font-semibold"><a href="{{ route('javascript') }}" class="text-gray-900 dark:text-white">Javascript</a></div>
                            </div>

                            <div class="p-6 py-6 border-t border-gray-200 dark:border-gray-700">
                                <div class="text-center ml-4 text-lg leading-7 font-semibold"><a href="{{ route('android') }}" class="text-gray-900 dark:text-white">Android</a></div>
                            </div>

                            <div class="p-6 py-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <div class="text-center ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"><a href="{{ route('other') }}" class="text-gray-900 dark:text-white">Ander</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
