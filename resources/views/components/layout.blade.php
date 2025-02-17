<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap"
        rel="stylesheet">
</head>

<body class="bg-black text-white font-hanken-grotesk">
    <div class=" px-10">
        <nav class="flex justify-between items-center border-b border-white/10 py-4">
            <div>
                <a href="">
                    <img src="{{Vite::asset('resources/images/logo.svg') }}" alt="Site Logo">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            <div>
                <a href="">Post a job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] m-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>