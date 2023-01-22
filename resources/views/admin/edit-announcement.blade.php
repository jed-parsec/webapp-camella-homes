
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Announcement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("Create Announcement") }} <br><br><br>    --}}
                    
                    
                    <!-- Container for demo purpose -->


<div class="container my-24 px-6 mx-auto">

    @if(session('status'))
        <p style="color:green; margin-bottom:25px">{{session('status')}}</p>
    @endif

    <a href="{{route('admin_dashboard')}}">
        <button class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md float-right">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
            </svg>
        
            Back
          </button>
    </a>

    <form action="{{route('admin.update-announcement', $announcement)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
      @csrf

          <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                          <div class="mb-4">
                            <label class="text-xl text-gray-600">Image <span class="text-red-500">*</span></label></br>
                            <input class="border-2 border-gray-300 p-2 w-full" type="file" id="image" name="image" required>

                            @error('image')
                                  <p style="color:red; margin-bottom:25px">{{$message}}</p>
                                @enderror
                        </div>



                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="{{$announcement->title}}" required>

                                @error('title')
                                <p style="color:red; margin-bottom:25px">{{$message}}</p>
                              @enderror
                            </div>

                            <div class="mb-4">
                                <label class="text-xl text-gray-600">Description</label></br>
                                <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" value="{{$announcement->description}}" required>

                                @error('description')
                                <p style="color:red; margin-bottom:25px">{{$message}}</p>
                              @enderror

                            </div>

                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Body <span class="text-red-500">*</span></label></br>
                                <textarea name="body" class="border-2 border-gray-500">
                                  {{$announcement->body}}
                                </textarea>
                                @error('body')
                                  <p style="color:red; margin-bottom:25px">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex p-2 py-4">
                                
                                <button role="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" >Update Announcement</button>
                            </div>

                            
                      
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <script>
            CKEDITOR.replace( 'body' );
        </script>



           

      
    </form>

  
  
  </div>
  <!-- Container for demo purpose -->
                
                    
                     
                     
                    
                </div>

                
            </div>
        </div>
    </div>

    
</x-app-layout>














