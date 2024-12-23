<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/styles.css" rel="stylesheet">
  <title>Homepage Lestari</title>
</head>
<body>
  <!-- NAVBAR -->
    <div class="navbar bg-light h-[92px] pr-[41px] justify-between">
    <!-- MOBILE SCREEN MODE -->
      <div class="navbar-start pl-[41px]">
        <div class="dropdown ">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
            <li><a>Item 1</a></li>
            <li>
              <a>Parent</a>
              <ul class="p-2">
                <li><a>Submenu 1</a></li>
                <li><a>Submenu 2</a></li>
              </ul>
            </li>
            <li><a>Item 3</a></li>
          </ul>
        </div>
        <!-- BRAND LOGO -->
        <a href="." class="">
          <img src="./images/Logo.png" alt="Logo Lestari">
        </a>
      </div>
    <!-- DESKTOP MODE -->
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1 text-dark text-base">
            <li><a>Home</a></li>
            <li><a>Tentang kami</a></li>
            <li>
              <details>
                <summary>Layanan</summary>
                  <ul ul class="bg-light absolute left-1/2 transform -translate-x-1/2 rounded-[10px] border-[1px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-gray px-[14px] py-[20px] flex-wrap flex items-center gap-[11px] min-w-[475px] h-[144px]">
                    <li><button class="btn btn-success w-[142px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-[10px]">
                      <img src="./images/truck.png" class="w-10" alt="">
                      <p>Drop Off</p>
                    </button></li>
                    <li><button class="btn btn-success w-[142px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-[5px]">
                      <img src="./images/reward.png" class="w-10" alt="">
                      <p>Rewards</p>
                    </button></li>
                    <li><button class="btn btn-success w-[142px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-2">
                      <img src="./images/Vector.png" class="w-8" alt="">
                      <p>Tutorial</p>
                    </button></li>
                    <li><button class="btn btn-success w-[171px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] flex px-2.5 content-center text-light text-base font-medium gap-[6px]">
                      <img src="./images/marketplace.png" class="w-10" alt="">
                      <p>Marketplace</p>
                    </button></li>
                  </ul>
              </details>
            </li>
            <li><a>Blog</a></li>
            <li><a>Kontak Kami</a></li>
          </ul>
        </div>
        <!-- if user not login -->
        <div class="navbar-end ml-[56px] flex flex-row gap-[30px] w-auto">
          <a class="btn px-5 h-[42px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] rounded-[20px] bg-gradient-to-r from-green to-dark-green text-[20px] border-dark border-[1px] font-medium text-light">Sign In</a>
          <a class="btn btn-outline px-4 h-[42px] shadow-[0px_4px_4px_-0px_rgba(0,0,0,0.25)] border-dark border-2 rounded-[20px] text-[20px] font-medium text-dark">Sign up</a>
        </div>
        <!-- endif -->

        <!-- if user login -->
        <!-- <div class="ml-[233px] content-center">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-[50px] rounded-full">
              <img
                alt="Tailwind CSS Navbar component"
                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
            </div>
          </div>
        </div> -->
        <!-- endif -->
    </div>
  <!-- NAVBAR END -->

  <!-- HERO -->
  <div class="background justify-between w-full h-[737px] bg-gradient-to-br from-green to-dark-green flex flex-row gap-[21px]">
    <div class="header relative text-light pt-[204px] pl-[74px] gap-[23px] flex flex-col">
      <p class="text-5xl leading-normal font-extrabold w-[554px]">Tukarkan Sampah, Dapatkan Hadiahnya</p>
      <p class="text-2xl font-medium ">#TukarSampahUntukKebaikan</p>
    </div>
    <img src="./images/hero banner.png" class="rounded-l-[238px] h-full w-[791px] float-end" alt="Hero">
  </div>
  <!-- HERO END -->
</body>
</html>