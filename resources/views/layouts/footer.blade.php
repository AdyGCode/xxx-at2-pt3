<footer class="w-full text-white bg-sky-800 mt-8 center">
    <div class="px-4 sm:px-6 lg:px-12 py-2 grid grid-cols-2 text-stone-200 text-sm">
        <p class="text-start">
            {{ env('APP_ENV')==="local"?'Development':'Production'}}
            version: {{ env('APP_VERSION', '0.0.0') }}
        </p>
        <p class="text-end">
            © 2022 Copyright:
            <a class="text-white" href="">Adrian Gould</a>
        </p>
    </div>

    <div class="p-4 sm:px-6 lg:px-12 pb-6 bg-sky-900 flex justify-items-center text-center ">
        <p class="flex-1 text-stone-200 text-xs md:text-sm">
            This application is written as part of <br class="md:hidden">
            the learning materials for developing <br class="lg:hidden">
            software as a service, API, and NoSQL technologies.
        </p>
    </div>
</footer>
