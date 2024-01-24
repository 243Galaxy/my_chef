<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-300 mt-14">
           <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-32 rounded bg-gray-50 dark:bg-gray-600 hover:bg-orange-300">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="ml-8 text-center w-10 h-10 text-orange-500 transition duration-75 dark:text-orange-500 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>                      
                   <span class="ml-6 text-center ms-3 whitespace-nowrap text-white">Users</span> <br>
                   <span class="ml-8 inline-flex items-center justify-center w-4 h-4 p-4 ms-4 text-xl font-bold text-orange-800 bg-orange-100 rounded-md dark:text-orange-900">{{ $summary['users'] }}</span> <br>
                </p>
             </div>
              <div class="flex items-center justify-center h-32 rounded bg-gray-50 dark:bg-gray-600 hover:bg-blue-300">
                 <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="ml-8 text-center w-10 h-10 text-blue-500 transition duration-75 dark:green-blue-500 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="m15 1.784-.796.795a1.125 1.125 0 1 0 1.591 0L15 1.784ZM12 1.784l-.796.795a1.125 1.125 0 1 0 1.591 0L12 1.784ZM9 1.784l-.796.795a1.125 1.125 0 1 0 1.591 0L9 1.784ZM9.75 7.547c.498-.021.998-.035 1.5-.042V6.75a.75.75 0 0 1 1.5 0v.755c.502.007 1.002.021 1.5.042V6.75a.75.75 0 0 1 1.5 0v.88l.307.022c1.55.117 2.693 1.427 2.693 2.946v1.018a62.182 62.182 0 0 0-13.5 0v-1.018c0-1.519 1.143-2.829 2.693-2.946l.307-.022v-.88a.75.75 0 0 1 1.5 0v.797ZM12 12.75c-2.472 0-4.9.184-7.274.54-1.454.217-2.476 1.482-2.476 2.916v.384a4.104 4.104 0 0 1 2.585.364 2.605 2.605 0 0 0 2.33 0 4.104 4.104 0 0 1 3.67 0 2.605 2.605 0 0 0 2.33 0 4.104 4.104 0 0 1 3.67 0 2.605 2.605 0 0 0 2.33 0 4.104 4.104 0 0 1 2.585-.364v-.384c0-1.434-1.022-2.7-2.476-2.917A49.138 49.138 0 0 0 12 12.75ZM21.75 18.131a2.604 2.604 0 0 0-1.915.165 4.104 4.104 0 0 1-3.67 0 2.605 2.605 0 0 0-2.33 0 4.104 4.104 0 0 1-3.67 0 2.605 2.605 0 0 0-2.33 0 4.104 4.104 0 0 1-3.67 0 2.604 2.604 0 0 0-1.915-.165v2.494c0 1.035.84 1.875 1.875 1.875h15.75c1.035 0 1.875-.84 1.875-1.875v-2.494Z" />
                    </svg>                      
                    <span class="ml-6 text-center ms-3 whitespace-nowrap text-white">Food(s)</span> <br>
                    <span class="ml-8 inline-flex items-center justify-center w-4 h-4 p-4 ms-4 text-xl font-bold text-blue-800 bg-blue-100 rounded-md dark:text-blue-900">{{ $summary['foods'] }}</span> <br>
                 </p>
              </div>
             <div class="flex items-center justify-center h-32 rounded bg-gray-50 dark:bg-gray-600 hover:bg-green-300">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="ml-8 text-center w-10 h-10 text-green-500 transition duration-75 dark:green-blue-500 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5.223 2.25c-.497 0-.974.198-1.325.55l-1.3 1.298A3.75 3.75 0 0 0 7.5 9.75c.627.47 1.406.75 2.25.75.844 0 1.624-.28 2.25-.75.626.47 1.406.75 2.25.75.844 0 1.623-.28 2.25-.75a3.75 3.75 0 0 0 4.902-5.652l-1.3-1.299a1.875 1.875 0 0 0-1.325-.549H5.223Z" />
                        <path fill-rule="evenodd" d="M3 20.25v-8.755c1.42.674 3.08.673 4.5 0A5.234 5.234 0 0 0 9.75 12c.804 0 1.568-.182 2.25-.506a5.234 5.234 0 0 0 2.25.506c.804 0 1.567-.182 2.25-.506 1.42.674 3.08.675 4.5.001v8.755h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3Zm3-6a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75v-3Zm8.25-.75a.75.75 0 0 0-.75.75v5.25c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-5.25a.75.75 0 0 0-.75-.75h-3Z" clip-rule="evenodd" />
                    </svg>                      
                   <span class="ml-2 text-center ms-3 whitespace-nowrap text-white">Categories</span> <br>
                   <span class="ml-8 inline-flex items-center justify-center w-4 h-4 p-4 ms-4 text-xl font-bold text-green-800 bg-green-100 rounded-md dark:text-green-900">{{ $summary['category'] }}</span> <br>
                </p>
             </div>
           </div>

           <div wire:ignore>
                <canvas id="myChart"></canvas>
           </div>
        </div>
     </div>
      
     @assets
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     @endassets
      
    @script
        <script>
            const ctx = document.getElementById('myChart');
            const categories = $wire.categories;

            const labels = categories.map(item=>item.Day);
            const values = categories.map(item=>item.Value);
            new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                label: 'Records Growth',
                data: values,
                borderWidth: 1,
                backgroundColor: '#2a5fb4'
                }]
            },
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            }
            });
        </script>
    @endscript
</div>
