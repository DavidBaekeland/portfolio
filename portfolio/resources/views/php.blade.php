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
                <h1 class="text-3xl font-semibold text-red-500 ">PHP/Laravel</h1>
                <h2 class="text-gray-600">David Baekeland</h2>
            </div>
        </a>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div>
                    <div class="p-6">
                        <img src="{{asset('storage/hln.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                        <div class="ml-4 text-lg leading-7 font-semibold">B-Audio (work in progress)</div>

                        <div class="ml-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <p>Momenteel ben ik voor <span class="text-red-500">B-Audio</span> , een wetenschappelijke organisatie, een website aan het ontwikkelen. Het doel van deze website is om een <span class="text-red-500">portfolio</span>  te maken waarbij leden gemakkelijk wetenschappelijke kennis over Audiologie en Logepedie kunnen bijhouden en delen.</p>

                                <p class="mt-4">Voor deze website maak ik gebruik van <span class="text-red-500">PHP</span> / <a href="https://laravel.com/" class="text-red-500 underline">Laravel</a>, <span class="text-red-500">MySQL</span>, <span class="text-red-500">PhpMyAdmin</span>, <a href="https://tailwindcss.com/" class="text-red-500 underline">Tailwind</a>, ...</p>
                                <ul class="mt-4">
                                    <h3>Links:</h3>
                                    <li><a href="https://github.com/DavidBaekeland/B-Audio" class="underline">Github (code)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div>
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{asset('storage/feedback-tool-DB-1.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-2.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-3.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-4.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-5.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-6.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-7.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-8.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                            <img src="{{asset('storage/feedback-tool-DB-9.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                        </div>
                        <div class="ml-4 text-lg leading-7 font-semibold">Feedback tool</div>

                        <div class="ml-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <p>Als eindwerkstuk voor de cursus 'Backend' heb ik een feedback tool gemaakt voor psychologen. De bedoeling is dat een psycholoog, na een sessie met een patient, een vragenlijst kan opstellen en kan doorsturen naar de patient. Wanneer de patient dit heeft ingevuld kan de psycholoog aan de hand van statisieken (die gegenereerd worden) een analyse maken. </p>

                                <p class="mt-4">Deze website had ik geplaatst op een <a href="https://rockylinux.org/nl/" class="text-red-500 underline">Linux (Rocky)</a> server van <a href="https://www.erasmushogeschool.be/nl" class="text-red-500 underline">Erasmus hogeschool Brussel</a>. (Offline + enkel toegankelijk met VPN)</p>
                                <p class="mt-4">Voor deze website maak ik gebruik van <span class="text-red-500">PHP</span> / <a href="https://laravel.com/" class="text-red-500 underline">Laravel</a>, <a href="https://www.docker.com/" class="text-red-500 underline">Docker</a>, <span class="text-red-500">Windows subsystem for linux (WSL)</span>, <span class="text-red-500">MySQL</span>, <span class="text-red-500">PhpMyAdmin</span>, <a href="https://tailwindcss.com/" class="text-red-500 underline">Tailwind CSS</a>, <span class="text-red-500">WinSCP (FTP-client)</span>, ...</p>
                                <ul class="mt-4">
                                    <h3>Inlog gegevens:</h3>
                                    <li>email: admin@admin.be</li>
                                    <li>wachtwoord: admin</li>
                                </ul>
                                <ul class="mt-4">
                                    <h3>Links:</h3>
                                    <li><a href="https://github.com/DavidBaekeland/B-Audio" class="underline">Github (code)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div>
                    <div class="p-6">
                        <img src="{{asset('storage/portfolio.png')}}" alt="Foto van B-Audio" class="mb-4 sm:rounded-lg">
                        <div class="ml-4 text-lg leading-7 font-semibold">Portfolio</div>

                        <div class="ml-4">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <p>Natuurlijk heb ik deze porfolio ook gemaakt. In deze website bewaar ik de belangerijkste projecten die ik (of samen met andere) de afgelopen jaren heb gemaakt.</p>

                                <p class="mt-4">Ook voor deze website maak ik gebruik van <span class="text-red-500">PHP</span> / <a href="https://laravel.com/" class="text-red-500 underline">Laravel</a>, <a href="https://tailwindcss.com/" class="text-red-500 underline">Tailwind CSS</a>, ...</p>
                                <ul class="mt-4">
                                    <h3>Links:</h3>
                                    <li><a href="https://github.com/DavidBaekeland/portfolio" class="underline">Github (code)</a></li>
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
