<!-- navbar -->
    <nav
        class="flex w-full justify-between items-center p-2 backdrop-blur-lg border-2 border-slate-800 fixed left-0 right-0 top-0 z-50">
        <a href="#" class="text-white text-2xl ml-4">drakor<span class="text-[#2f8cc0] italic">premium</span>.</a>
        <div id='link_navbar'
            class="flex flex-col absolute top-full w-[30vw] left-full h-[100vh] bg-slate-800 border-2 border-slate-800 space-y-3 md:space-y-0 py-3 md:py-0
                  md:relative md:inline md:w-auto md:left-0 md:right-0 md:translate-x-0 md:bg-transparent md:h-auto md:border-none">
            <a href="<?= BASEURL ?>/pembaharuan"
                class=" sm:mx-1 sm:p-3 md:p-0 lg:mx-2  md:inline  text-white text-center p-1 md:text-sm lg:text-base hover:text-[#2f8cc0]">PEMBAHARUAN</a>
            <a href="<?= BASEURL ?>/manga"
            <a href="<?= BASEURL ?>/manga"
                class=" sm:mx-1 sm:p-3 md:p-0 lg:mx-2 md:inline text-white text-center p-1 md:text-sm lg:text-base hover:text-[#2f8cc0] ">DAFTAR
                MANGA</a>
            <a href="<?= BASEURL ?>/favorit"
            <a href="<?= BASEURL ?>/favorit"
                class=" sm:mx-1 sm:p-3 md:p-0 lg:mx-2 md:inline text-white text-center p-1 md:text-sm lg:text-base hover:text-[#2f8cc0] ">DAFTAR
                FAVORIT</a>
        </div>
        <div class="flex ">
            <form action="" class="sm:hover:w-40 md:hover:w-auto group flex bg-slate-800 rounded-full p-0 m-0 ">
                <input type="search"
                    class="px-[20px] text-white focus:outline-none bg-inherit hidden lg:inline group-hover:block sm:py-2 md:py-3 sm:w-24 lg:w-auto rounded-full "
                    placeholder="Search">
                <a href="#" id="search" class="sm:p-2 md:p-3 rounded-xl text-white mx-5 hover:text-[#2f8cc0]"><i
                        data-feather="search"></i></a>
            </form>
            <ion-icon name="menu" class=" text-white sm:p-2 md:p-3 text-2xl mx-5 md:hidden hover:text-[#2f8cc0]"
                onclick="onToggleMenu(this)"></ion-icon>
        </div>
    </nav>