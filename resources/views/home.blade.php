
<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>NTRA - Super-puper rent app!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Real Estate Website Landing Page" name="description" />
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="2.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />

    <!-- Css -->
    <link href="/assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="/assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <link href="/assets/libs/swiper/css/swiper.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link href="/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/assets/css/tailwind.css" />

</head>

<body class="dark:bg-slate-900">
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="container relative">
            <!-- Start Logo container-->
            <a class="logo" href="index.html">
                        <span class="inline-block dark:hidden">
                            <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                            <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                        </span>
                <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
            </a>
            <!-- End Logo container-->
    
            <!-- Start Mobile Toggle -->
            <div class="menu-extras">
                <div class="menu-item">
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Mobile Toggle -->
    
            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    
                    <a href="/profile" class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i data-feather="user" class="size-4 stroke-[3]"></i></a>
                </li>
                <li class="sm:inline ps-1 mb-0 hidden">
                    <a href="/signup" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
                </li>
              
              @if(isset($_SESSION['user']))
                       
                    
                <li class="sm:inline ps-1 mb-0 hidden">
                    
                    <a href="/logout" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Logout</a>
                </li>
                @endif
                
            </ul>
    
            <!--Login button End-->
    
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu justify-end nav-light">
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="/">E'lonlar</a>
    
                       
                    </li>
    
                    <li><a href="/userbranch" class="sub-menu-item">Filiallar</a></li>
    
                    <li><a href="ads/create" class="sub-menu-item">E'lon qo'shish</a></li>
    
                    
    
    
                    <li><a href="/contact
                    " class="sub-menu-item">Contact</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </nav><!--end header-->
  
        <!-- Hero Start -->
        <section class="relative mt-20">
            <div class="container-fluid md:mx-4 mx-2">
                <div class="relative pt-40 pb-52 table w-full rounded-2xl shadow-md overflow-hidden" id="home">
                    <div class="absolute inset-0 bg-black/60"></div>

                    <div class="container relative">
                        <div class="grid grid-cols-1">
                            <div class="md:text-start text-center">
                                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">We will help you find <br> your <span class="text-green-600">Wonderful</span> home</h1>
                                <p class="text-white/70 text-xl max-w-xl">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                            </div>
                        </div><!--end grid-->
                    </div><!--end container-->
                </div>
            </div><!--end Container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Start -->
        <section class="relative md:pb-24 pb-16">
            <div class="container relative">
                <div class="grid grid-cols-1 justify-center">
                    <div class="relative -mt-32">
                        <div class="grid grid-cols-1">
                        
                            <div id="StarterContent" class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                                    <form action="/search" method="get">
                                        <div class="registration-form text-dark text-start">
                                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">

                                            <div>

                                                    <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-search icons"></i>
                                                        <input name="search_phrase" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div> 
                                                
                                                <div>
                                                    <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Categories:</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-estate icons"></i>
                                                        <select class="form-select z-2" data-trigger name="branch" id="choices-catagory-buy" aria-label="Default select example">
                                                           <option value="">Filial</option>
                                                            @foreach ($branches as $branch) :
                                                            <option value={{$branch->id}}>{{ $branch->name }}</option>
                                                            @endforeach;
                                                         
                                                        </select>
                                                    </div>
                                                </div>

                                         
                            
                                                <div>
                                                    <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Min Price :</label>
                                                    <div class="filter-search-form relative filter-border mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <input name="min_price" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Min Price">
                                                       
                                                    </div>
                                                </div>
                                            
                                                <div>
                                                    <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Max Price :</label>
                                                    <div class="filter-search-form relative mt-2">
                                                        <i class="uil uil-usd-circle icons"></i>
                                                        <input type="text" name="max_price" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Max Price">
                                                      
                                                    </div>
                                                </div>

                                                <div class="lg:mt-6">
                                                    <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                                </div>
                                            </div><!--end grid-->
                                        </div><!--end container-->
                                    </form>
                                </div>

                               
                       
                            </div>
                        </div><!--end grid-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
            <div class="container relative mt-12" >
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">

            

            @foreach ($ads as $ad):
                 
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <img src="assets/images/ads/public/assets/images/ads/66e04d227d90c___download (1).jpeg" alt="">
                 
                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="/ads/{{ $ad->id }}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">{{ $ad->title }}</a>
                        </div>

                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                            <li class="flex items-center me-4">
                                <span>{{ $ad->description }} </span>
                            </li>

                       

                        </ul>
                          
                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                            <li class="flex items-center me-4">
                                <i class="uil uil-users-alt icons text-2xl me-2 text-green-600"></i>
                                {{-- <span>{{ $ad->description }} </span> --}}
                            </li>

                       

                        </ul>
                        <ul class="pt-6 flex justify-between items-center list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">{{ $ad->price }}</p>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->

            @endforeach; 

        </div><!--end container-->
</section><!--end section-->



        <!-- Start Footer -->
        <footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
            <div class="container relative">
            

            </div><!--end container-->

         
        </footer><!--end footer-->
        <!-- End Footer -->
        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500 mt-1"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500 mt-1"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] start-[2px] size-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        


            <!-- Footer Start -->
            <footer class="shadow dark:shadow-gray-700 bg-white dark:bg-slate-900 px-6 py-4">
                <div class="container-fluid">
                    <div class="grid grid-cols-1">
                        <div class="sm:text-start text-center mx-md-2">
                            <p class="mb-0 text-slate-400">©
                                <script>document.write(new Date().getFullYear())</script>
                                NTRA. Design with <i class="mdi mdi-heart text-red-600"></i> by PHP N1 group.
                            </p>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>

        <!-- LTR & RTL Mode Code -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-green-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="assets/js/easy_background.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->

        <script>
            easy_background("#home",
                {
                    slide: ["assets/images/bg/01.jpg", "assets/images/bg/02.jpg", "assets/images/bg/03.jpg"],
                    delay: [4000, 4000, 4000]
                }
            );
        </script>
    </body>
</html>