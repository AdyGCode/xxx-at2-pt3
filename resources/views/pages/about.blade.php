<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("About") }}
        </h2>
    </x-slot>


    <div class="pt-0 pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <section class="mb-6">
                        <h2 class="text-3xl pb-6">About</h2>
                        <p class="pb-2">This project is created for teaching and assessment purposes only.</p>
                        <p class="pb-2">The base code is used for teaching purposes. It is available for anyone to use, as
                            long as the <code class="text-emerald-700">ReadMe.md</code>,
                            <code class="text-emerald-700">ReadMe-License.md</code>
                            files are kept in their original form. </p>
                        <p class="pb-2">It contains a number of examples of how to create a variety of techniques and code
                            that includes: <abbr title="Browse Read Edit Add Delete">BREAD</abbr> /
                            <abbr title="Create Read Update Delete">CRUD</abbr> methods, styling the user interface, and more.
                        </p>
                        <p>This site is running in {{ env('APP_ENV')==="local"?'development':'production'}}.</p>
                    </section>

                    <section class="mb-6">
                        <h2 class="text-3xl pb-6">Author(s)</h2>
                        <p class="pb-2">Adrian Gould (Lecturer)</p>
                    </section>

                    <section class="mb-6">
                        <h2 class="text-3xl pb-6">The Code</h2>
                        <p class="pb-2">This code is provided with no legal avenues available for any loss or damage that may
                            be incurred from its use. All responsibility is taken by the end user / client /
                            developers who make use of the source code and techniques shown.</p>
                        <p class="pb-2">Information on the requirements for this sample code are shown in the ReadMe based
                            documents.</p>
                        <p class="pb-2">Repository: <a href="http://github.com/AdyGCode/xxx-saas-laravel-mongodb-demo">
                                http://github.com/AdyGCode/xxx-saas-laravel-mongodb-demo
                            </a>.</p>
                    </section>

                    <section class="mb-6">
                        <h3 class="text-2xl pb-6">Development and Public Access</h3>
                        <div class="border border-stone-800">
                            <div class="grid grid-cols-7 border border-b border-stone-800 bg-stone-800 text-stone-100">
                                <p class="col-span-2 p-2">
                                    Version
                                </p>
                                <p class="p-2 col-span-2">Address</p>
                                <p class="col-span-3 p-2 "></p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Local Copy (No Sync)
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost</p>
                                <p class="col-span-3 p-2  text-sm ">This copy runs on docker and does not have browser
                                    refresh synchronisation.</p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost:3000" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Local Copy (Sync)
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:3000</p>
                                <p class="col-span-3 p-2  text-sm ">This copy runs on docker and has browser refresh sync when
                                    used with <code>npm run watch</code>.</p>
                            </div>
                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="https://nmt-saas-at2-pt2.herokuapp.com" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Public Copy
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">https://nmt-saas-at2-pt2.herokuapp.com</p>
                                <p class="col-span-3 p-2  text-sm ">This copy is hosted on Heroku.com and is a more complete
                                    implementation</p>
                            </div>
                        </div>
                    </section>

                    <section class="mb-6">
                        <h3 class="text-2xl pb-6">Development Stack Administration</h3>
                        <p class="pb-6">
                            When using Docker and Sail with the <code class="text-emerald-700">docker-compose.yaml</code>
                            file from this project, you may access the following administration interfaces for a variety of
                            services built into the docker-compose file:</p>
                        <div class="border border-stone-800">
                            <div class="grid grid-cols-7 border border-b border-stone-800 bg-stone-800 text-stone-100">
                                <p class="col-span-2 p-2">
                                    Service
                                </p>
                                <p class="p-2 col-span-2">Address</p>
                                <p class="col-span-3 p-2 ">Notes</p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500 bg-amber-200">
                                <p class="col-span-2 ">
                                    <a href="http://localhost" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        MongoDB Admin
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">TODO: http://localhost:????</p>
                                <p class="col-span-3 p-2 text-sm ">TODO: Locate and add a web-based free to use Web based
                                    MongoDB administration interface.<br>
                                    Server: <code class="text-emerald-700">mongodb</code>,
                                    Username: <code class="text-emerald-700">sail</code>,
                                    Password: <code class="text-emerald-700">password</code>.
                                </p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost:8081" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        phpMyAdmin
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8081</p>
                                <p class="col-span-3 p-2 text-sm ">MariaDB / MySQL Web Admin.<br>

                                    Server: <code class="text-emerald-700">mariadb</code>,
                                    Username: <code class="text-emerald-700">sail</code>,
                                    Password: <code class="text-emerald-700">password</code>.
                                </p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost:8025" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Mailhog
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8025</p>
                                <p class="col-span-3 p-2 text-sm ">
                                    SMTP mail testing.
                                </p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2">
                                    <a href="http://localhost:8083" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Redis Commander
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8083</p>
                                <p class="col-span-3 p-2 text-sm ">
                                    <strong>Redis</strong> is an in-memory data structure store, used as a
                                    distributed, in-memory key–value database, cache and message broker. </p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2">
                                    <a href="http://localhost:8085" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Memcached Admin
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8085</p>
                                <p class="col-span-3 p-2 text-sm ">
                                    <strong>Memcached</strong> in-memory key-value store for small chunks of arbitrary data
                                    (strings, objects) from results of database calls, API calls, or page rendering.
                                    <br>
                                    Server: <code class="text-emerald-700">memcached</code>,
                                    Username: <code class="text-emerald-700">sail</code>,
                                    Password: <code class="text-emerald-700">password</code>.
                                    <br>
                                    Add server under "edit configuration", change the 127.0.0.1 to
                                    <code class="text-emerald-700">memcached</code>.
                                </p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2">
                                    <a href="http://localhost:7700" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Meilisearch
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:7700</p>
                                <p class="col-span-3 p-2 text-sm ">
                                    Open source full text search engine.
                                </p>
                            </div>

                            <div class="grid grid-cols-7 border-b border-stone-500">
                                <p class="col-span-2 ">
                                    <a href="http://localhost:8900" target="_blank"
                                       class="w-full h-full p-2 block hover:bg-stone-800 hover:text-stone-100">
                                        Minio
                                    </a>
                                </p>
                                <p class="p-2 col-span-2">http://localhost:8900</p>
                                <p class="col-span-3 p-2 text-sm ">
                                    Open source AWS S3 replacement.
                                </p>
                            </div>

                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
