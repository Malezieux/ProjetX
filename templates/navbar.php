<nav class="bg-gray-800 pb-">
    <div class="justify-between max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-gr">
        <div class="justify-between items-center h-16">
            <div class="flex flex-nowrap justify-between sm:justify-start">
                <div class="flex flex-nowrap justify-between ">
                    <a href="{{ path('app_user') }}" class="text-white font-bold text-xl ">
                       <img class="mr-20" src="{{asset('geforbis.png')}}">
                    </a>
                </div>
                <div class="flex flex-nowrap justify-between">
                    <a href="{{ path('app_user') }}" class="text-white font-bold text-xl ">
                       MyWebsite
                    </a>
                </div>
                <div class="flex flex-nowrap justify-between sm:block sm:ml-6 pl-50">
                    <div class="flex space-x-4">
                        <a href="{{ path('app_user') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>