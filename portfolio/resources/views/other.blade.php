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
                                <div class="ml-4 text-lg leading-7 font-semibold">Kotlin</div>

                                <div class="ml-4">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <p>Tijdens mijn opleiding heb ik ook geprogrammeerd met <a href="https://kotlinlang.org/" class="text-red-500 underline">Kotlin</a>. Dit heb ik niet alleen gebruikt om <a href="{{ route('android') }}" class="text-red-500 underline">Android</a> apps te maken, maar ook om samen met <a href="https://spring.io/guides/tutorials/spring-boot-kotlin/" class="text-red-500 underline">Spring boot en Thymeleaf (zie Github link)</a> om websites te ontwikkelen.

                                        <p class="mt-4">Tot slot heb ik <a href="https://kotlinlang.org/" class="text-red-500 underline">Kotlin</a> ook gebruikt om algemene concepten van programmeren te begrijpen zoals: <span class="text-red-500">Object Georiënteerd Programmeren (OOP)</span>, <span class="text-red-500">design patterns</span>, ... .</p>

                                        <p>Mijn IDE die ik hiervoor gebruik is <a href="https://www.jetbrains.com/idea/" class="text-red-500 underline">IntelliJ IDEA (Ultimate)</a>. </p>
                                        <ul class="mt-4">
                                            <h3>Links:</h3>
                                            <li><a href="https://github.com/DavidBaekeland/kotlin" class="underline">Github (code)</a></li>
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
