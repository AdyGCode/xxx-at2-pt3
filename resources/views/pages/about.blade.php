<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("About") }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="mb-6">
                        <h2 class="text-3xl pb-6">About this Code</h2>
                        <p>This code is created for teaching purposes only.</p>
                    </section>

                    <section class="mb-6">
                        <h3 class="text-2xl pb-6">Development Environment Access Points</h3>
                        <p class="pb-6">When using Docker and Sail with the <code>docker-compose.yaml</code> file from this
                            project,
                            you may access the following administration interfaces:</p>
                        <div class="border border-stone-800">
                            <div class="grid grid-cols-7 border border-b border-stone-800 bg-stone-800 text-stone-100">
                                <p class="col-span-2 p-2">
                                    Administrates
                                </p>
                                <p class="p-2 col-span-2">Address</p>
                                <p class="col-span-3 p-2 "></p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost:8081" target="_blank"
                                       class="w-full  p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        phpMyAdmin
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8081</p>
                                <p class="col-span-3 p-2 ">MariaDB / MySQL Web Admin.
                                    Login Details are as given below:
                                    <br>
                                    Server: <code class="text-emerald-700">mariadb</code>,
                                    Username: <code class="text-emerald-700">sail</code>,
                                    Password: <code class="text-emerald-700">password</code>.
                                </p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost:8025" target="_blank"
                                       class="w-full  p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Mailhog
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8025</p>
                                <p class="col-span-3 p-2 ">
                                    SMTP mail testing.
                                </p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2">
                                    <a href="http://localhost:8083" target="_blank"
                                       class="w-full  p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Redis Commander
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8083</p>
                                <p class="col-span-3 p-2 ">
                                    <strong>Redis</strong> is an open Source in-memory data structure store, used as a
                                    distributed, in-memory key–value database, cache and message broker. </p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2">
                                    <a href="http://localhost:8085" target="_blank"
                                       class="w-full  p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Memcached Admin
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8085</p>
                                <p class="col-span-3 p-2 ">
                                    <strong>Memcached</strong> in-memory key-value store for small chunks of arbitrary data
                                    (strings, objects) from results of database calls, API calls, or page rendering. </p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2">
                                    <a href="http://localhost:7700" target="_blank"
                                       class="w-full  p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Meilisearch
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:7700</p>
                                <p class="col-span-3 p-2 ">
                                    Open source full text search engine.
                                </p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost:8900" target="_blank"
                                       class="w-full  p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Minio
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8900</p>
                                <p class="col-span-3 p-2 ">
                                    Open source AWS S3.
                                </p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost" target="_blank"
                                       class="w-full  p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Link back to this site
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost</p>
                                <p class="col-span-3 p-2 "></p>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
