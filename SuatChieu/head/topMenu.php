<!-- topmenu
    ================================================== -->
	<body>
	<div style= "background-color: black">
    
	 <nav class="navbar navbar-expand-lg navbar-light" id="topnav" style= "background-color: black">
    <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- logo -->
        <a class="navbar-brand mr-auto" href="/">
            <img src="Hinh/Hinh2.jpg" alt="Moveek" class="navbar-brand-img" width ="100px" height= "300px">
        </a>

        <form action="/tim-kiem/" method="GET" class="form-inline mr-4 d-none d-lg-flex">
            <div class="input-group input-group-rounded input-group-merge">
                <!-- Input -->
                <input type="search" name="s" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Từ khóa tìm kiếm..." aria-label="Search" value="">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-search"></i>
                    </div>
                </div>
            </div>
        </form>

        <!-- User -->
        <div class="navbar-user">

            <div class="mr-4 d-flex">
                <a href="#" class="btn btn-outline-dark btn-sm" data-container="body" data-html="true" data-toggle="popover" data-placement="bottom" data-content="<a href='/rap/beta-cineplex-bien-hoa/' class='btn btn-light btn-sm btn-block mb-2 active'>Tiếng Việt</a><a href='/en/rap/beta-cineplex-bien-hoa/' class='btn btn-light btn-sm btn-block mb-2'>English</a><a href='/ko/rap/beta-cineplex-bien-hoa/' class='btn btn-light btn-sm btn-block'>한국어</a>">
                    VI                                                        </a>
            </div>

                            <div class="dropdown mr-4 d-flex">
                    <a href="#" class="text-secondary" data-toggle="modal" data-target="#locationModal">
                        <i class="fe fe-map-pin"></i>
                                            </a>
                </div>
            
                            <div class="d-lg-flex">

                    <a href="#" class="text-secondary" data-toggle="modal" data-target="#userModal">
                        <i class="fe fe-user"></i>
                    </a>
                </div>
                    </div>

	
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar" >
			
            <form action="/tim-kiem/" method="GET" class="mt-4 mb-3 d-md-none">
			
                <input type="search" name="s" class="form-control form-control-rounded" placeholder="Từ khóa tìm kiếm..." aria-label="Search">
            </form>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/mua-ve/">
                        Trang Chủ
                    </a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href="/su-kien/">
                        xuất chiếu
                    </a>
                </li>
                   

                 <li class="nav-item">
                    <a class="nav-link" href="/su-kien/">
                        Đặt vé 
                    </a>
                </li>

               
           
                
            </ul>
        </div>

    </div> <!-- / .container -->

</nav>
