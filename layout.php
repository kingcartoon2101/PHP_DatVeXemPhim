<?php
        include($level."config.php");
        include($level.head_path."head.php");
        include($level.head_path."navbar.php");

        if($IsIndex == true){
            //Phần slide Giới Thiệu
            include($level.content_path."slideGioiThieu.php");
            //Phần Content
            include($level.content_path."PhanContent.php");
            include($level.content_path."Cumrap.php");
        }
        if( $IsDatGhe == true){
            include ($level.content_ChonGhe_parth.'cacBuocChonGhe.php');
            include ($level.content_ChonGhe_parth.'thongTinGhe.php');
            include ($level.content_ChonGhe_parth.'1.php');
        }
        if( $IsLichChieu == true){
            include ($level.content_parth."phimMoi1.php");
            include ($level.content_parth."thoiGian.php");
            include ($level.content_parth."Phim2.php");	
            include ($level.content_parth."Phim3.php");
            include ($level.content_parth."Phim4.php");      
            include ($level.content_parth."gioiThieuCongTiVaDoiTac.php");
        }
        // if( $IsthanhToan == true){
        //     include ($level.content_ThanhToan_parth."thongTinPhim.php");
        // }

        //Cụm rạp
        include($level.footer_path."phanfooter.php");
?>