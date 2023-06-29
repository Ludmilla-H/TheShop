<!-- component -->
<!-- follow me on twitter @asad_codes -->

    <section class="relative mx-auto">
        <!-- navbar -->
      <nav class="flex justify-between text-white w-screen">
        <div class="flex w-full">
        
          <!-- Nav Links -->
          <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
            @forelse ($categories as $itemCategorie )
            <li><a class="hover:text-orange-600 text-gray-900" href="{{route('categorie' , $itemCategorie->id)}}">{{$itemCategorie->name}}</a></li>
            
            @empty
                
            @endforelse
          </ul>
          <!-- Header Icons -->
        </div>
      
      </nav>
    </section>
