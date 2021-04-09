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
                <input type="search" name="s" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown"  aria-label="" value="">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-search"></i>
                    </div>
                </div>
            </div>
		<a href="#" class="btn active" role="button"><img src="<?php echo $level.img_path."search_icon.png";?>" alt=""></a>
                         
        </form>

        <!-- User -->
        <form class="form-inline my-2 my-lg-0" class="mt-4 mb-3 d-md-none  
                            <a href="#"><img src="<?php echo $level.img_path."user.png";?>" style="width: 45px;" alt=""></a>
                        </form>

	
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar" >
			
            <form action="/tim-kiem/" method="GET" class="mt-4 mb-3 d-md-none">
			
                <input type="search" name="s" class="form-control form-control-rounded" placeholder="Từ khóa tìm kiếm..." aria-label="Search">
				<a href="#" class="btn active" role="button"><img src="<?php echo $level.img_path."search_icon.png";?>" alt=""></a>
            </form>

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
                            <li class="nav-item active">
                                <a class="nav-link" href="#" style = "color:white">Trang Chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style = "color:white">Đặt Vé</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" style = "color:white">Suất Chiếu/Cụm Rạp</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#"> Galaxy Cinema Quang Trung</a>
                                    <a class="dropdown-item" href="#">Lotte Nam Sài Gòn</a>
                                    <a class="dropdown-item" href="#">CineStar</a>
                                    <a class="dropdown-item" href="#">CGV Nguyễn Trãi</a>
                                </div>
                            </li>
                        </ul>
        </div>

    </div> <!-- / .container -->

</nav>

 

 