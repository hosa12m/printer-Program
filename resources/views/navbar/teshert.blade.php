<x-app-layout>
    <div class="grid lg:grid-cols-4  md:grid-cols-2 gap-4   "> 
        @foreach ($posts as $post)
          <div class="max-w-sm rounded overflow-hidden shadow-lg ">
           
           
         
            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}"/>
           
              <div class="px-6 py-4 items-center">
             <a href="https://api.whatsapp.com/send?phone=966545358797">
              <p class="text-gray-700 text-base">
                  اطلب الآن
              </p>
             </a>
              </div>
             
          </div>
          @endforeach
       </div>
</x-app-layout>