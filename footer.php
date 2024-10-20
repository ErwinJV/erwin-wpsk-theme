
 <?php wp_footer(); ?>   

   
</body>
<footer class="w-full min-h-[90.5px] bg-stone-800 box-content">
    <div class="container mx-auto h-full">
       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-4 h-full pt-2 ">
    <!-- Col -->

        <?php

  wp_nav_menu(
    array(
          'theme_location'=>'footer-navigation-links',
          'container_class'=>'flex flex-col justify-center w-full',
          'container_id'=>'footerNavigationLinks',
          'menu_class'=>'flex flex-row w-full items-center justify-center ps-2 pb-2'
    )
    );
        ?>
         <!-- <div class="flex flex-col justify-center w-full">
            <ul class="flex flex-row w-full items-center justify-center ps-2 pb-2">
                <li class="px-2">
                    <a class="text-white hover:text-gray-500 text-[10px]" href="">Index</a>
                </li>
                <li class="px-2">
                    <a class="text-white hover:text-gray-500 text-[10px]" href="">Menu</a>
                </li>
                <li class="px-2">
                    <a class="text-white hover:text-gray-500 text-[10px]" href="">About Us</a>
                </li>
                <li class="px-2">
                    <a class="text-white hover:text-gray-500 text-[10px]" href="">Contact</a>
                </li>
            </ul>
         </div> -->
         <!-- Col -->
          <div class="flex flex-col ps-2 pt-2 w-full">
            <h4 class="text-[10px] text-center sm:text-start text-white w-full font-bold pb-2">Contact:</h4>
            
               <ul class="flex flex-col items-center sm:items-start">
                 <li class="text-[10px] text-white">+1 773 774 732</li>
                 <li class="text-[10px] text-white">example@emai.com</li>
                 <li class="text-[10px] text-white">1558 Newell Ave- Walnut Creek - California</li>
             </ul>
          </div>
         
         <!-- Col -->
         <div class="flex-column ps-2 pt-2 pb-2">
         <h4 class="text-[10px] text-white w-full font-bold text-center pb-2">Social Media</h4>
         
         <ul class="flex flex-row justify-around w-full" >
               <li><i class="fa-brands fa-facebook text-[24px] cursor-pointer text-sky-950"></i></li>
               <li><i class="fa-brands fa-instagram text-[24px] cursor-pointer text-yellow-800"></i></li>
               <li><i class="fa-brands fa-x-twitter text-[24px] cursor-pointer text-black"></i></li>
         </ul>
         </div>
         <!-- Col -->
         <div class="flex flex-col ps-2 pt-2 md:pt-0 lg:pt-2 pb-2">
         <h4 class="text-[10px] text-white w-full font-bold text-center pb-2">Payments</h4>
         <br/>
         <ul class="flex flex-row justify-around w-full" >
               <li><i class="fa-brands fa-cc-paypal text-[24px] cursor-pointer text-sky-950"></i></li>
               <li><i class="fa-brands fa-cc-mastercard text-[24px] cursor-pointer text-white"></i></li>
               <li><i class="fa-brands fa-bitcoin text-[24px] cursor-pointer text-yellow-500"></i></li>
         </ul>
         </div>
       </div>
    </div>
</footer>
</html>