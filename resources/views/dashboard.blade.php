<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <!--content of my dashboard goes here -->

                <!-- the search bar -->
                <div class='max-w-md mx-auto'>
                    <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="grid place-items-center h-full w-12 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                
                        <input
                        class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                        type="text"
                        id="search"
                        placeholder="Search something.." /> 
                    </div>
                </div>

                <!-- Displaying popular Destinations from the google maps api -->
                <div class="heading text-center font-bold text-2xl m-5 text-gray-100">Full Responsive Video Cards</div>

                <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">

                <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
                    <img class="w-full" src="https://i.ytimg.com/vi/qew27BNl7io/maxresdefault.jpg" alt="" />
                    <div class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">Live</div>
                    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
                    <span class="mr-1 p-1 px-2 font-bold">105 Watching</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Likes</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Dislikes</span>
                    </div>
                    <div class="desc p-4 text-gray-800">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-bold block cursor-pointer hover:underline">Pubg Mobile Custom Room (Unlimited)</a>
                    <a href="https://www.youtube.com/user/sam14319" target="_new" class="badge bg-indigo-500 text-blue-100 rounded px-1 text-xs font-bold cursor-pointer">@dynamo_gaming</a>
                    <span class="description text-sm block py-2 border-gray-400 mb-2">lorem ipsum bekhum bukhum !lorem ipsum bekhum bukhum !</span>
                    </div>
                </div>
                <!-- each -->
                <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
                    <img class="w-full" src="https://i.ytimg.com/vi/qew27BNl7io/maxresdefault.jpg" alt="" />
                    <div class="badge absolute top-0 right-0 bg-indigo-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">10:53</div>
                    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
                    <span class="mr-1 p-1 px-2 font-bold">105 views</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Likes</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Dislikes</span>
                    </div>
                    <div class="desc p-4 text-gray-800">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-bold block cursor-pointer hover:underline">Pubg Mobile Custom Room (Unlimited)</a>
                    <a href="https://www.youtube.com/user/sam14319" target="_new" class="badge bg-indigo-500 text-blue-100 rounded px-1 text-xs font-bold cursor-pointer">@dynamo_gaming</a>
                    <span class="description text-sm block py-2 border-gray-400 mb-2">lorem ipsum bekhum bukhum !lorem ipsum bekhum bukhum !</span>
                    </div>
                </div>
                <!-- each -->
                <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
                    <img class="w-full" src="https://i.ytimg.com/vi/qew27BNl7io/maxresdefault.jpg" alt="" />
                    <div class="badge absolute top-0 right-0 bg-indigo-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">10:53</div>
                    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
                    <span class="mr-1 p-1 px-2 font-bold">105 views</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Likes</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Dislikes</span>
                    </div>
                    <div class="desc p-4 text-gray-800">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-bold block cursor-pointer hover:underline">Pubg Mobile Custom Room (Unlimited)</a>
                    <a href="https://www.youtube.com/user/sam14319" target="_new" class="badge bg-indigo-500 text-blue-100 rounded px-1 text-xs font-bold cursor-pointer">@dynamo_gaming</a>
                    <span class="description text-sm block py-2 border-gray-400 mb-2">lorem ipsum bekhum bukhum !lorem ipsum bekhum bukhum !</span>
                    </div>
                </div>
                <!-- each -->
                <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
                    <img class="w-full" src="https://i.ytimg.com/vi/qew27BNl7io/maxresdefault.jpg" alt="" />
                    <div class="badge absolute top-0 right-0 bg-indigo-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">10:53</div>
                    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
                    <span class="mr-1 p-1 px-2 font-bold">105 views</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Likes</span>
                    <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Dislikes</span>
                    </div>
                    <div class="desc p-4 text-gray-800">
                    <a href="https://www.youtube.com/watch?v=dvqT-E74Qlo" target="_new" class="title font-bold block cursor-pointer hover:underline">Pubg Mobile Custom Room (Unlimited)</a>
                    <a href="https://www.youtube.com/user/sam14319" target="_new" class="badge bg-indigo-500 text-blue-100 rounded px-1 text-xs font-bold cursor-pointer">@dynamo_gaming</a>
                    <span class="description text-sm block py-2 border-gray-400 mb-2">lorem ipsum bekhum bukhum !lorem ipsum bekhum bukhum !</span>
                    </div>
                </div>
                <!-- each -->


                </div>
    
            </div>
        </div>
    </div>
</x-app-layout>
