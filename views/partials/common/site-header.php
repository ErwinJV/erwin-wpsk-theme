<header class="bg-slate-400">
    <nav class="flex justify-between items-center w-[92%]  mx-auto">
        <!-- Site Logotype -->
      <div>
        <!-- TODO: put site icon here -->
         <!-- <img class="w-16" src="" alt="h"> -->
          
         <?php  echo get_custom_logo(); ?>
      </div>

      <form action="<?php echo home_url('/'); ?>" role="search" method="get" class="inline-flex"  >
      
        <input
           class="rounded focus:outline-none indent-1 w-36 sm:w-48 "
           name="s" id=""
           placeholder="Search..."
           value="<?php echo get_search_query(); ?>"
           type="search" 
          >

          <button type="submit" value="Send" class="ms-2 bg-transparent"><i class="fa-solid fa-magnifying-glass"></i> </button>  
     </form>

        <!-- Menu Links -->
      <?php
        wp_nav_menu(
          array(
                'theme_location'=>'navigation-links',
                'container_class'=>'nav-links bg-slate-400 duration-500 absolute sm:static min-h-[60vh] sm:min-h-fit left-0 top-[-100%] w-full sm:w-auto flex items-center px-5 z-10',
                'container_id'=>'navigationLinks',
                'menu_class'=>'flex flex-col sm:flex-row items-center  gap-8 sm:gap-[4vw] mx-auto'
          )
          );
       ?>
    
    <!-- Toogle menu -->
      <i x-data='{onToggleMenu}' x-on:click='onToggleMenu("top-[12.5%]",".nav-links")' class="fa-solid fa-bars text-3xl cursor-pointer sm:hidden"></i>
     </div>
    </nav>
 </header>