<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

</head>

<body>
    <nav class="fixed top-0 right-0 left-0 width-[100%] bg-white border-gray-200 dark:bg-gray-900">
        <div class=" flex flex-wrap items-center justify-between mx-auto px-[40px] py-[12px]">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{ asset('images/suvi3.png') }}" class="" alt="Flowbite Logo" />

            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

                <div class="flex w-[895px]">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>


                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900  rounded-[3.85px]   border border-black border-[1.44px] focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="" required>
                        <button type="submit"
                            class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-[#FF7E00] rounded-r-[3.85px] border border-black hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>

            <div class="hidden   w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium items-center flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href="#"
                            class="text-[14px] ops mr-[25px]">Kelas</a>
                    </li>
                    <li>
                        <i class="fa-regular fa-heart text-[29px]	"></i>
                    </li>
                    <li>
                        <i class="fa-solid fa-cart-shopping text-[29px]	"></i>
                    </li>
                    <li>
                        <div class="bg-[#525252] w-[45px] h-[45px] rounded-full	">

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'>
    </script>
</body>

</html>
