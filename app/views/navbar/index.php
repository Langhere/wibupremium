<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo Wibu</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="../public/configurasi/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="antialiased font-bold text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900" style="font-family: Julius
Sans One, sans-serif; font-weight: 400; font-style: normal; font-size: x-small;">
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


    <script defer src="../public/js/navbar.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>feather.replace()</script>
</body>

</html>