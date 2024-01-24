<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
              <h1 class="mb-2 text-2xl font-medium text-gray-200 sm:text-3xl title-font">Foods</h1>
              <div class="w-20 h-1 bg-blue-500 rounded"></div>
            </div>
          </div>
          <div class="md:flex flex-wrap -m-4">
            @foreach ($foods as $food)
                <div href="" class="p-4 xl:w-1/3 md:w-1/2 sm:w-1/2 dark:text-white">
                    <div class="p-6 bg-gray-600 rounded-lg">
                        <img class="object-center mb-6 rounded" src="{{ asset('imgs/uploads') }}/{{ $food->picture }}" width="50" alt="Dish">
                        <h2 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-gray-200 title-font">{{ $food->name }}</h2>
                        <p class="dark:text-white">
                            {!! $food->process !!}
                        </p>

                        <div class="text-right">
                          <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="dark:text-green-400 text-green-600 font-bold text-md uppercase" type="button">
                            Recipe
                          </button>
                        </div>
                          <!-- Dropdown menu -->
                        <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
                            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                Recipes
                            </div>
                          @foreach ($recipes as $recipe)
                          @if ($recipe->food_id == $food->id)
                            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                              <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                  <img class="rounded-full w-11 h-11" src="{{ asset('imgs/uploads') }}/{{ $recipe->picture }}" alt="Jese image">
                                </div>
                                <div class="w-full ps-3">
                                    <div class="text-gray-500 text-lg mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">{{ $recipe->name }}</span></div>
                                    <div class="text-sm text-blue-600 dark:text-blue-500 font-bold">{{ $recipe->measure }}</div>
                                </div>
                              </a>
                            </div>
                          @endif
                          @endforeach
                        </div>
                </div>
            @endforeach
          </div>
        </div>
    </section>
</div>
