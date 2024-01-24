<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
              <h1 class="mb-2 text-2xl font-medium text-gray-200 sm:text-3xl title-font">Recipes</h1>
              <div class="w-20 h-1 bg-blue-500 rounded"></div>
            </div>
          </div>
          <div class="md:flex flex-wrap -m-4">
            @foreach ($recipes as $recipe)
                <div href="" class="p-4 xl:w-1/3 md:w-1/2 sm:w-1/2 dark:text-white">
                    <div class="p-6 bg-gray-600 rounded-lg">
                        <img class="object-center mb-6 rounded" src="{{ asset('imgs/dish.png') }}" width="100" alt="Dish">
                        <h2 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-gray-200 title-font">{{ $recipe->name }}</h2>
                        <h2 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-gray-200 title-font">{{ $recipe->measure }}</h2>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
    </section>
</div>
