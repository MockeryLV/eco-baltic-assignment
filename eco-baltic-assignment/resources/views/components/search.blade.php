<div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
    <div class="w-full lg:w-1/2">
        <div class="lg:max-w-lg">
            <h1 class="text-3xl font-bold tracking-wide text-gray-800 dark:text-white lg:text-5xl">
                Search for a book
            </h1>

            <div class="mt-8 space-y-5">
                <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>

                    <span class="mx-2">By author</span>
                </p>

                <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>

                    <span class="mx-2">By title</span>
                </p>

                <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>

                    <span class="mx-2">By genre</span>
                </p>
            </div>
        </div>

        <div class="w-full mt-8 bg-transparent border rounded-md lg:max-w-sm dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-400 focus-within:ring-opacity-40">
            <form action="/" class="flex flex-col lg:flex-row">
                <input name="search" type="text" placeholder="Lorem ipsum dolor sit amet..." class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0">

                <button type="submit" class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                    Search
                </button>
            </form>
        </div>
    </div>

    <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
        <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl" src="https://images.pexels.com/photos/3952071/pexels-photo-3952071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="glasses photo">
    </div>
</div>
