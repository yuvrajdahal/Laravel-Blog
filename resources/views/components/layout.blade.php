<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="max-w-7xl mx-auto ">
        <x-navbar />
        {{ $slot }}
    </main>
    <footer class="bg-white border-t border-gray-200">
        <div class="container px-6 py-8 mx-auto">
            <div class="flex flex-col items-center text-center">
                <div id="scroll"
                    class="border border-transparent cursor-pointer font-semibold text-xl rounded-md text-amber-500  hover:text-amber-500">Dukha
                    Sukha</div>


                <p class="max-w-md mx-auto mt-2 text-gray-500 ">Dukha-Sukha is a blogging platform
                    built with Laravel and Tailwind CSS. It is designed to be a simple and easy-to-use platform for
                    bloggers to create and publish their content.</p>

            </div>

            <hr class="my-10 border-gray-200 " />

            <div class="flex flex-col items-center sm:flex-row sm:justify-between">
                <p class="text-sm text-gray-500">© Copyright 2021. All Rights Reserved.</p>

                <div class="flex mt-3 -mx-2 sm:mt-0">
                    <a href="#"
                        class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 "
                        aria-label="Reddit"> Teams </a>

                    <a href="#"
                        class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 "
                        aria-label="Reddit"> Privacy </a>

                    <a href="#"
                        class="mx-2 text-sm text-gray-500 transition-colors duration-300 hover:text-gray-500 "
                        aria-label="Reddit"> Cookies </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
