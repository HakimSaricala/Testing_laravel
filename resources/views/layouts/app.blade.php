<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - MSEUF</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-red-500 text-white p-4">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="{{ asset('https://portal.mseuf.edu.ph/ecampnet/content/images/logo-new2.png') }}" alt="MSEUF Logo" class="h-12 mr-2">
                    <span class="text-xl font-bold">Manuel S. Enverga University Foundation</span>
                </div>
                <div class="space-x-4">
                    <a href="{{ route('overview') }}" class="hover:text-gray-300">Overview</a>
                    <a href="{{ route('philosophy') }}" class="hover:text-gray-300">Philosophy</a>
                    <a href="{{ route('vision') }}" class="hover:text-gray-300">Vision</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto py-8 px-4">
        @yield('content')
    </main>

    <footer class="bg-gray-200 p-4 mt-8">
        <div class="container mx-auto text-center">
            <div class="flex justify-center space-x-4">
                <a href="https://mseuf.edu.ph" class="text-gray-600">mseuf.edu.ph</a>
                <span class="text-gray-600">(042)373-3413</span>
                <span class="text-gray-600">ccms@mseuf.edu.ph</span>
                <a href="#" class="text-gray-600">@mseufCCMS</a>
            </div>
        </div>
    </footer>
</body>
</html>