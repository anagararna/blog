<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            POSTS
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Modal toggle -->
                    <div class="flex justify-center m-5">
                        <button id="defaultModalButton" data-modal-toggle="defaultModal" class="block text-black bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                        Nuevo POSTS
                        </button>
                    </div>

                    <!-- Main modal -->
                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                <!-- Modal header -->
                                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Nuevo POSTS
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('posts.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                        <div>
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Titulo del Post" required="">
                                        </div>
                                        {{-- <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Select category</option>
                                                <option value="TV">TV/Monitors</option>
                                                <option value="PC">PC</option>
                                                <option value="GA">Gaming/Console</option>
                                                <option value="PH">Phones</option>
                                            </select>
                                        </div> --}}
                                        <div class="sm:col-span-2">
                                            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                            <textarea id="body" name="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write product description here"></textarea>                    
                                        </div>
                                        <div>
                                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                                        </div>

                                    </div>
                                    <button type="submit" class="text-black inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        Add new product
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold">Todos los POSTS</h2>

                    <!-- Table -->
                    <div class="flex flex-col mt-5">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 dark:bg-gray-800">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                    Imagen
                                                </th>
                                                {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                    Categoría
                                                </th>  --}}
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                    Titulo
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                    Body
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                    Fecha
                                                </th>
                                                <th scope="col"class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                                    <span class="sr-only">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                             @foreach ($posts as $post)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    @if ($post->image_url)
                                                        <img class="h-16 w-16 rounded-full" src="{{ Storage::url($post->image_url) }}" alt="Post image">
                                                        @else
                                                        {{ $post->id }}
                                                    @endif
                                                </td>
                                                

                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    {{ $post->title }}
                                                </td>
                                                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    {{ $post->category }}
                                                </td> --}}
                                                <td class="px-6 py-4 ">
                                                    <span style="display: inline-block;
                                                    whith: 180px;
                                                    white space: nowrap;
                                                    overflow: hidden !important;
                                                    text-overflow: ellipsis;">
                                                    {{ $post->body }}</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    {{ $post->created_at}}
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <a href="{{ route('posts.destroy', $post->id) }}" class="text-indigo-600 hover:text-indigo-900">Borrar</a>
                                                </td>    

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>