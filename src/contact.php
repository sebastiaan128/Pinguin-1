<?php
include('navbar.html');
?>

<body>
    <div class="mt-5 mb-5 w-3/4 mx-auto">
        <section class="bg-gray-300 rounded-lg">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact</h1>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Heeft u nog vragen over pinguïns? Vul dan ons contactformulier in.</p>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                        <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="E-mail" required>
                    </div>
                    <div class="sm:col-span-2">
                        <textarea id="message" rows="6" class="block p-2.5 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Stel hier uw vraag..."></textarea>
                    </div>
                    <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white bg-zinc-700 rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                </form>
            </div>
        </section>
    </div>
    <br>
    <br>



    <div class="w-3/4 mx-auto">
        <section class="bg-gray-300 p-10 rounded-lg my-10">
            <p class="mb-4 text-lg font-normal text-white dark:text-gray-400">Voor snelle antwoorden op veelgestelde vragen, raadpleeg onze FAQ-pagina.</p>
            <a href="faq.php" class="inline-flex items-center text-lg text-blue-600 dark:text-blue-500 hover:underline">
                Discover more
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </section>
    </div>
</body>

<?php
include('footer.html');
?>