<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
            <a href="{{route('admin.categories.index')}}" class="px-4 text-white py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Back</a>
        </div>                
        <div class="m-2 p-2 bg-slate-100 rounded">
            
        
            <form method="POST" action="{{route('admin.menus.update', $menu->id)}}"  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="name" id="name_category" value="{{$menu->name}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('name') border-red-400 @enderror" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name of menu</label>
                </div>
                @error('name')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror 
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="description" id="description" value="{{$menu->description}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('description') border-red-400 @enderror" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                </div>
                @error('description')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="relative z-0 w-full mb-6 group">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help" >Price</div>
                    <input type="number" value='{{$menu->price}}' min='0.00' max='100000.0' step='1' name="price" id="price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer price @error('price') border-red-400 @enderror" placeholder=" " required />
                    
                </div>
                @error('price')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="relative z-0 w-full mb-6 group">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') border-red-400 @enderror" name="image" id="photo" type="file ">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Photo of Menu</div>
                    <div class="">
                        <img src="{{Storage::url($menu->image)}}" alt="" class="w-32 h-32">
                    </div>
                    @error('image')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="relative z-0 w-full mb-6 group">    
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Categories</div>
                    <select  id='categories' name='categories[]' class='form-multiselect w-full mt-1 @error('categories[]') border-red-400 @enderror' multiple>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" @selected($menu->categories->contains($category))>{{$category->name}}</option>
                        @endforeach
                    </select>
                    
                </div>
                @error('categories[]')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="relative z-0 w-4 mb-3"></div>
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Submit</button>
              </form>
              
        </div>
            

        </div>
    </div>
        
</x-admin-layout>
