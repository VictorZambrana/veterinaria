 <!-- Sidebar backdrop -->
 <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
     style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>
 <aside x-transition:enter="transition transform duration-300"
     x-transition:enter-start="-translate-x-full opacity-30  ease-in"
     x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300"
     x-transition:leave-start="translate-x-0 opacity-100 ease-out"
     x-transition:leave-end="-translate-x-full opacity-0 ease-in"
     class="text-white bg-sky-700 fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
     :class="{ '-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen }">

     <!-- sidebar header -->
     <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{ 'lg:justify-center': !isSidebarOpen }">
         <span class="p-2 text-lg font-bold leading-8 tracking-wider uppercase whitespace-nowrap">
             <a href="/" :class="{ 'lg:hidden': !isSidebarOpen }">Veterinaria   C & B</a>
         </span>
         <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
             <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
             </svg>
         </button>
     </div>

     <!-- Sidebar links -->
     <nav class="flex-1 overflow-auto hover:overflow-y-scroll">
         <ul class="p-2">
             <li>
                 <a href="/"
                     class="flex items-center p-2 space-x-2 rounded-md hover:bg-sky-600 @if (request()->routeIs('dashboard')) bg-sky-800 @endif"
                     :class="{ 'justify-center': !isSidebarOpen }">
                     <span>
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                         </svg>
                     </span>
                     <span :class="{ 'lg:hidden': !isSidebarOpen }">Inicio</span>
                 </a>


             </li>
         </ul>
     </nav>
 </aside>
