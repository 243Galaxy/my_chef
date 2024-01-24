<div>
    <div class="p-4 sm:ml-64 relative overflow-x-auto shadow-md sm:rounded-lg mt-16">
        @if (Session::has('success'))
            <div class="card-body">
                <div class="px-2 py-2 text-white bg-green-700 rounded-md">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <form class="mt-4" wire:submit.prevent="newFood">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_email" wire:model="name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_email" class="uppercase font-bold peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-300 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <select name="category_id" id="category_id" wire:model="category_id" class="block dark:bg-gray-900 py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option value="">--Select--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <label for="floating_password" class="font-bold uppercase peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-300 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label class="block uppercase tracking-wide text-gray-500 dark:text-gray-300 text-xs font-bold mb-2">
                    Process
                </label>
                <div wire:ignore>
                    <textarea wire:model="process" class="h-48 text-black" name="process" id="process">
                    </textarea>
                    @error('process')
                        <p class="my-2 bg-red-600 text-white">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-5 group">
                  <input type="text" wire:model="other" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
                  <label for="floating_first_name" class="font-bold uppercase peer-focus:font-medium absolute text-md text-gray-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Other Details</label>
              </div>
              <div class="relative z-0 w-full mb-5 group">
                <input type="file" wire:model="picture" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
                <label for="floating_last_name" class="font-bold uppercase peer-focus:font-medium absolute text-md text-gray-300 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Picture</label>
                @if ($picture)
                    <img src="{{ $picture->temporaryUrl() }}" width="100">
                @endif
                @error('picture')
                    <p class="my-2 alert alert-danger">{{ $message }}</p>
                @enderror
              </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#process'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                @this.set('process', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</div>
