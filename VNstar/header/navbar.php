<body>
    <!--thanh navibar-->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <nav>
                <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
                    <a class="navbar-brand" href="#"><img src="<?php echo $level.img_path."logoWeb.png";?>" style="width: 60px;" alt=""></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Trang Chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đặt Vé</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Suất Chiếu/Cụm Rạp</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#"> Galaxy Cinema Quang Trung</a>
                                    <a class="dropdown-item" href="#">Lotte Nam Sài Gòn</a>
                                    <a class="dropdown-item" href="#">CineStar</a>
                                    <a class="dropdown-item" href="#">CGV Nguyễn Trãi</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <a href="#" class="btn active" role="button"><img src="<?php echo $level.img_path."search_icon.png";?>" alt=""></a>
                            <a href="#"><img src="<?php echo $level.img_path."user.png";?>" style="width: 45px;" alt=""></a>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </div>
    </div>