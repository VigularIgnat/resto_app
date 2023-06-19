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
            
        
            <form method="POST" action="{{route('admin.tables.store')}}">
                @csrf
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('name') border-red-400 @enderror" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                </div>
                @error('name')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                 @enderror
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="guest_number" id="guest_number" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('guest_number') border-red-400 @enderror" placeholder=" " required />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Guest number</label>
                </div>
                @error('guest_number')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                 @enderror
                
                
                
                <div class="relative z-0 w-full mb-6 group">    
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Status</div>
                    <select  id='status' name='status' class='form-multiselect w-full mt-1 @error('status') border-red-400 @enderror'>
                        
                        @foreach(App\Enums\TableStatus::cases() as $status)
                        <option value="{{$status->value}}">{{$status->name}}</option>
                    @endforeach
                    </select>
                    
                </div>
                @error('status')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="relative z-0 w-full mb-6 group">    
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Location</div>
                    <select  id='location' name='location' class='form-multiselect w-full mt-1 @error('location') border-red-400 @enderror' required>
                            @foreach(App\Enums\TableLocation::cases() as $location)
                                <option value="{{$location->value}}">{{$location->name}}</option>
                            @endforeach
                            
                        
                    </select>
                    
                </div>
                @error('location')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
                <div class="relative z-0 w-4 mb-3"></div>
                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Submit</button>
              </form>
              
        </div>
            

        </div>
    </div>
        
</x-admin-layout>
