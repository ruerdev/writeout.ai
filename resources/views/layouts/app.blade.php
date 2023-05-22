<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full scroll-smooth bg-white antialiased [font-feature-settings:'ss01'] js-focus-visible">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>writeout.ai – Transcribe and translate any audio file</title>
    <meta
        name="description"
        content="Transcribe and translate any audio file. Upload your audio file and get a transcript in seconds. Writeout.ai is a free online transcription service.">

    <meta property="og:site_name" content="writeout.ai">
    <meta property="og:title" content="writeout.ai">
    <meta property="og:description" content="Transcribe and translate any audio file in seconds.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="writeout.ai">
    <meta name="twitter:description" content="Transcribe and translate any audio file in seconds.">
    <meta property="og:image" content="https://writeout.ai/og-image.png">
    <meta name="twitter:image" content="https://writeout.ai/og-image.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900|lexend:400,500"
          rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="flex h-full flex-col min-h-full">
<header class="py-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="relative z-50 flex justify-between items-center">
            <div class="flex items-center md:gap-x-12">
                <a aria-label="Home" href="/#" class="font-bold text-xl font-display">
                    writeout.ai
                </a>
            </div>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer class="bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center border-t border-slate-400/10 py-10">
            Happy Transcribing!
        </div>
    </div>
</footer>
</body>
</html>
