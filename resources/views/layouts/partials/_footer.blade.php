
       <footer class="text-gray-400">
            <p>&copy; Copyright {{date('Y')}} 
           
            @if(!Route::is('page_about'))  <!--condition -->
              &middot; <a href="{{route('page_about')}}" class="text-indigo-500
              hover:text-indigo-600 underline">About-us</a></p>
            @endif  

       </footer>