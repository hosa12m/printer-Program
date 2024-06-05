<x-app-layout   >
  
   
    <section  class=" content-center mb-12 flex scroll-mt-50  flex-col items-center justify-center gap-4 p-6 sm:flex-row " >
        
            <div class="content-start" >
                <img class="" src="/images/cd3fcvvo.png" alt="Rocket Dab" />
            </div>
            <div class=" text-xl text-end">
                    <h5 class="  text-4xl font-bold text-slate-900 dark:text-white sm:text-left sm:text-5xl text-end">مرحبا بك في </h5>
            
                    <div  class="mt-4 font-bold  text-center text-2xl text-green-700 dark:text-slate-400 sm:text-left" >
                            <p class="text-end"> مطابع واجهة روشن للدعاية  </p>
                            <p class="text-end"> و الإعلان </p>
                    </div>
                   
                        <p class="text-amber-800  font-bold text-4xl text-end">📞 +966545358797</p>

                        
                        <a class="pl-6" href="https://www.facebook.com/profile.php?id=100091553106168&mibextid=ZbWKwL">
                            <i class="fab fa-facebook" style="font-size: 36px; color:blue;" aria-hidden="true"></i>
                        </a>
            
                        <a class="pl-6" href="https://api.whatsapp.com/send?phone=966545358797">
                            <i class="fab fa-whatsapp" style="font-size: 36px; color:green;" aria-hidden="true"></i>
                        </a>
            
                        <a class="pl-6" href="https://www.instagram.com/749_0ss?igsh=NzQ3ZjVreTk4cXBx">
                            <i class="fab fa-instagram" style="font-size: 36px; color:red;" aria-hidden="true"></i>
                        </a>
            
                        <a class="pl-6" style="font-size: 36px; color:blue;" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        {{-- <a class="pl-6" style="font-size: 36px; color:blue;" href="#">
                            <i class="fab fa-linkedin"></i>
                        </a> --}}
           
            </div>
      
      
    </section>
        

      {{-- <div class="grid grid-rows-4 grid-flow-col gap-4"> --}}
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="text-4xl text-amber-700 font-bold text-center  mt-9  mb-9">
            <h1>ابرز الخدمات </h1>
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
       
         <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4   ">  
        
           {{-- <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 content-center"> --}}
            @foreach ($posts as $post)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg ">                              
                             <a href="{{route( $post->slug)}}">
                                 <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}"/>
                            </a>
                        <div class=" grid grid-row-2 content-center ">                      
                            <div class="mx-auto text-4xl font-black my-5">{{$post->title}}</div>
                            <div class="text-gray-700 text-base mb-1.5  mx-auto  font-black">
                                <a href="https://api.whatsapp.com/send?phone=966545358797" >
                                اطلب الآن</a>
                            </div>
                        </div>
                 
                    </div>
             
          
           @endforeach
        </div>
       
           
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  
  <div class="text-left">
     
      <p class="mb-2 font-bold text-xl"> <span class="text-4xl"> 📞</span>للاتصال المباشر اضغط على الرقم</p>
      <p class="mt-6 underline underline-offset-1 text-blue-400"> 00966545358797</p>
  </div>
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  
  <div class="text-center text-amber-600 font-bold text-4xl ">
      <p>كيف نعمل </p>
  </div>
  
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
  
  <section>
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">      
      <div class="max-w-sm rounded overflow-hidden shadow-lg ">
           <img class="w-full" src="images/tanfed.png" alt="Sunset in the mountains">
            <div class="px-6 py-4 items-center">
              <div class="font-bold text-xl mb-2 text-center">التنفيذ </div>
            
              <p class="text-gray-700 text-base">
              قبل البدأ بتنفيد المنتج يتم ارسال صورة عن الشكل النهائي للتصميم قبل الطباعة 
              وبعد الموافقة عليه تبدا مرحلة التنفيذ مستخدمين احدث تقنيات بهدف الحصول على منتج عالي الجودة
  
             </p>
           </div>
         
           </div>
  
           <div class="max-w-sm rounded overflow-hidden shadow-lg ">
              <img class="w-full" src="images/design.png" alt="Sunset in the mountains">
               <div class="px-6 py-4 items-center">
                 <div class="font-bold text-xl mb-2 text-center">التنفيذ </div>
               
                 <p class="text-gray-700 text-base">
                 بعد الحصول على كافة المعلومات المتعلقة بتصميم المنتج المطلوب يبدا فريقنا بمرحلة 
                 التصميم بما ينتاسب مع نمط العمل وذوق العميل بطرق احترافية تثبت تميزنا في هذا المجال 
                </p>
              </div>
            
              </div>
  
  
              <div class="max-w-sm rounded overflow-hidden shadow-lg ">
                  <img class="w-full" src="images/idea.png" alt="Sunset in the mountains">
                   <div class="px-6 py-4 items-center">
                     <div class="font-bold text-xl mb-2 text-center">التنفيذ </div>
                   
                     <p class="text-gray-700 text-base">
                     بعد الحصول على كافة المعلومات المتعلقة بتصميم المنتج المطلوب يبدا فريقنا بمرحلة 
                     التصميم بما ينتاسب مع نمط العمل وذوق العميل بطرق احترافية تثبت تميزنا في هذا المجال 
                    </p>
                  </div>
                
                  </div>
  
      </div>
  </section>
      
    <x-add-footer/>   

</x-app-layout>