<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


    <title>Hello, world!</title>
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.guest-nav')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Welcome') }}
            </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main>
          <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Log in to see or create posts!
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
</html>
