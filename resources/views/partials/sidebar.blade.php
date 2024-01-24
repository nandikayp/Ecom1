<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
                    <img src="/image/jkt48.png" class="h-12 txt-dsa mr-3" />
                    <span
                        class="self-center font-poppins font-bold text-xl txt-kt  sm:text-2xl whitespace-nowrap text-red-500 dark:text-white">Dashboard</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/image/manman.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm rounded-md  font-poppins font-light text-slate-900 truncate dark:text-gray-300"
                                role="none">
                                {{ Auth::user()->email }}
                            </p>
                            <p class="mt-1  text-sm font-poppins font-light text-gray-900 dark:text-white"
                                role="none">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm font-light  rounded-md font-poppins text-slate-900 truncate dark:text-gray-300"
                                role="none">
                                {{ Auth::user()->role }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('actionlogout') }}"
                                    class="block px-4 py-2 font-poppins font-bold text-sm text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside
    class="fixed top-0 left-0 mt-5 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard"
                    class="flex items-center p-2 font-poppins font-semibold  text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid text-xl  fa-chart-pie text-slate-800"></i>
                    <span class="ml-3 text-lg  text-rose-500">Dashboard</span>
                </a>
            </li>
            @if (Auth::user()->role == 'admin')
                <li>
                    <a href="/produk"
                        class="flex items-center p-2 font-poppins font-semibold text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-box text-xl text-slate-800"></i>
                        <span class="flex-1 text-lg ml-3 whitespace-nowrap text-rose-500">Produk</span>
                    </a>
                <li>
            @endif
            @if (Auth::user()->role == 'admin')
                <li>
                    <a href="/user/tampil"
                        class="flex items-center p-2 font-poppins font-bold text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid text-xl text-slate-800 fa-circle-user"></i>
                        <span class="flex-1 ml-3 text-lg text-rose-500 whitespace-nowrap">User</span>
                    </a>
                <li>
            @endif
            @if (Auth::user()->role == 'admin' or Auth::user()->role == 'Customer')
                <li>
                    <a href="/pembelian"
                        class="flex items-center p-2 font-poppins font-semibold text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-sack-dollar text-xl text-slate-800"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap text-lg text-rose-500">Pembelian</span>
                    </a>
                <li>
            @endif

            </li>
        </ul>
    </div>
</aside>
