<!-- navbar -->
    <nav
        class="flex w-full justify-between items-center p-2 backdrop-blur-lg border-2 border-slate-800 fixed left-0 right-0 top-0 z-50">
        <a href="#" class="text-white text-2xl ml-4">wibu<span class="text-[#2f8cc0] italic">premium</span>.</a>
        <div id='link_navbar'
            class="flex flex-col absolute top-full w-[30vw] left-full h-[100vh] bg-slate-800 border-2 border-slate-800 space-y-3 md:space-y-0 py-3 md:py-0
                  md:relative md:inline md:w-auto md:left-0 md:right-0 md:translate-x-0 md:bg-transparent md:h-auto md:border-none">
            <a href="../home/index.html"
                class=" sm:mx-1 sm:p-3 md:p-0 lg:mx-2  md:inline  text-white text-center p-1 md:text-sm lg:text-base hover:text-[#2f8cc0]">PEMBAHARUAN</a>
            <a href="../manga/index.html"
                class=" sm:mx-1 sm:p-3 md:p-0 lg:mx-2 md:inline text-white text-center p-1 md:text-sm lg:text-base hover:text-[#2f8cc0] ">DAFTAR
                MANGA</a>
            <a href="../favorit/index.html"
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

<!-- navbar -->
<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900" style="font-family: Julius
  Sans One, sans-serif; font-weight: 400; font-style: normal; font-size: x-small;">

  <!-- Slider main container -->
  <div class="px-4 relative top-20 bg-slate-800">
    <div class="swiper mySwiper relative max-w-full " style="--swiper-pagination-color: #fff">
      <div class="swiper-wrapper slider relative grid grid-flow-col my-4">
        <div class="swiper-slide ">
          <a href="../baca/index.html" class="card1">
            <img class="hover:translate-y-[-6px] hover:transition-all rounded-lg" id="slide2" src="../app/views/slider1.jpg"
              alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="../baca/index.html" class="card1">
            <img class="hover:translate-y-[-6px] hover:transition-all rounded-lg" id="slide2" src="../app/views/slider1.jpg"
              alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="../baca/index.html" class="card1">
            <img class="hover:translate-y-[-6px] hover:transition-all rounded-lg" id="slide2" src="../app/views/slider1.jpg"
              alt="">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="../baca/index.html" class="card1">
            <img class="hover:translate-y-[-6px] hover:transition-all rounded-lg" id="slide2" src="../app/views/slider1.jpg"
              alt="">
          </a>
        </div>

      </div>
      <div class="swiper-pagination relative bg-slate-400 rounded-md"></div>
    </div>
  </div>


  <!--Bagian list manga-->
  <div class="flex relative top-24 md:flex-row flex-col space-x-10 mr-5 ">

    <!-- Products wrapper -->
    <div id="products-wrapper"
      class="text-slate-300 w-full mx-auto grid grid-cols-3 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6  gap-2 place-content-center p-4"
      style="font-family: Roboto, sans-serif;font-size: 0.8rem; font-weight: 500;">
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
      <div class="pop hover:scale-105 border-none transition-all">
        <a class="flex flex-col justify-center relative overflow-hidden group border-b-2 border-slate-700"
          href="../baca/index.html">
          <img src="../app/views/1.jpg" alt="animek" />
          <div
            class="status pb-4 pt-4 bg-gradient-to-t from-black via-black to-transparent absolute bottom-0 left-0 right-0 text-center py-2 translate-y-2 transition group-hover:translate-y-0">
            <p>Death Note</p>
          </div>


        </a>
        <div class=" p-2 text-sm bg-slate-900" style="font-weight: 300;">
          <p>thriller</p>
          <p>9/10</p>
        </div>

      </div>
    </div>

    <!-- BAGIAN DI BAWAH UNTUK TRENDING BAR-->

    <div
      class="text-white bg-white space-y-4 w-full sm:max-w-[25%] md:min-w-[15rem] mx-auto bg-gradient-to-b from-slate-700 via-slate-700 via-70% to-slate-800 to-90% "
      style="font-family: Roboto, sans-serif;font-size: 1.2rem; font-weight: 500;">
      <h2
        class="py-3 bg-gradient-to-r from-slate-800 via-slate-800 to-transparent text-center lg:text-2xl sm:text-base md:text-lg">
        Daftar Trending </h2>
      <div id=" filters-container" class="sm:text-sm md:text-base lg:text-lg space-y-2">
        <a href="../baca/index.html"
          class="p-3 flex flex-row gap-3 hover:bg-gradient-to-r from-slate-900 via-slate-900 via-40% to-trasnparent">
          <img class="w-[25%]" src="../app/views/1.jpg" alt="">
          <div class="block">
            <p style="font-size:1rem;">Judul</p>
            <p
              style="font-family: Julius Sans One, sans-serif; font-weight: 400; font-style: normal; font-size: x-small;">
              author</p>
          </div>
        </a>
        <a href="../baca/index.html"
          class="p-3 flex flex-row gap-3 hover:bg-gradient-to-r from-slate-900 via-slate-900 via-40% to-trasnparent">
          <img class="w-[25%]" src="../app/views/1.jpg" alt="">
          <div class="block">
            <p style="font-size:1rem;">Judul</p>
            <p
              style="font-family: Julius Sans One, sans-serif; font-weight: 400; font-style: normal; font-size: x-small;">
              author</p>
          </div>
        </a>
        <a href="../baca/index.html"
          class="p-3 flex flex-row gap-3 hover:bg-gradient-to-r from-slate-900 via-slate-900 via-40% to-trasnparent">
          <img class="w-[25%]" src="../app/views/1.jpg" alt="">
          <div class="block">
            <p style="font-size:1rem;">Judul</p>
            <p
              style="font-family: Julius Sans One, sans-serif; font-weight: 400; font-style: normal; font-size: x-small;">
              author</p>
          </div>
        </a>
        <a href="../baca/index.html"
          class="p-3 flex flex-row gap-3 hover:bg-gradient-to-r from-slate-900 via-slate-900 via-40% to-trasnparent">
          <img class="w-[25%]" src="../app/views/1.jpg" alt="">
          <div class="block">
            <p style="font-size:1rem;">Judul</p>
            <p
              style="font-family: Julius Sans One, sans-serif; font-weight: 400; font-style: normal; font-size: x-small;">
              author</p>
          </div>
        </a>

      </div>
    </div>

  </div>

  <!--Ini untuk footer-->


  <script src="https://cdn.jsdelivr.net/npm/swiper@7/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>feather.replace()</script>
  <script src="../public/js/script.js"></script>
  <script defer src="../public/js/navbar.js"></script>

</body>

</html>