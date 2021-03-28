<?php
  $danhSachNhanVien = array(
     array(    'ten' =>'1James Anderson', 
               'moTa' =>'Lorem Ipsum is simply dummy text of the printing and type setting industry.', 
               'hinh' =>'1.jpg', 
               'ngay' =>'April 14, 2016', 
         ) ,                  
    array(    'ten' =>'2James Anderson', 
                'moTa' =>'Lorem Ipsum is simply dummy text of the printing and type setting industry.', 
                'hinh' =>'2.jpg', 
                'ngay' =>'April 14, 2016', 
            ) ,   
    array(    'ten' =>'3James Anderson', 
                'moTa' =>'Lorem Ipsum is simply dummy text of the printing and type setting industry.', 
                'hinh' =>'3.jpg', 
                'ngay' =>'April 14, 2016', 
            ) ,   
    array(    'ten' =>'4James Anderson', 
                'moTa' =>'Lorem Ipsum is simply dummy text of the printing and type setting industry.', 
                'hinh' =>'4.jpg', 
                'ngay' =>'April 14, 2016', 
            ) ,                       
    );                            
?>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row">
                <div class=" col-md-6">  
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="zero_config_filter" class="dataTables_filter">
                        <label style="display: flex;">
                            <button type="button" class="btn btn-cyan btn-sm">Search</button>                   
                            <input style="width: 100%; margin-left: 10px;" type="search"
                                class="form-control form-control-sm" placeholder=""
                                aria-controls="zero_config">
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">   
                        <div class="comment-widgets scrollable">
                           <?php foreach( $danhSachNhanVien as $value){
                           ?>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="<?php echo $level.imagesUsers_Part.$value["hinh"] ?>" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium"><?php echo $value["ten"] ?></h6>
                                        <span class="m-b-15 d-block"><?php echo $value["moTa"] ?></span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right"><?php echo $value["ngay"] ?></span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                            
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                          <?php } ?>
                        </div>
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="card">          
                        <div class="comment-widgets scrollable">
                            <?php foreach( $danhSachNhanVien as $value){
                            ?>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row m-t-0">
                                        <div class="p-2"><img src="<?php echo $level.imagesUsers_Part.$value["hinh"] ?>" alt="user" width="50" class="rounded-circle"></div>
                                        <div class="comment-text w-100">
                                            <h6 class="font-medium"><?php echo $value["ten"] ?></h6>
                                            <span class="m-b-15 d-block"><?php echo $value["moTa"] ?></span>
                                            <div class="comment-footer">
                                                <span class="text-muted float-right"><?php echo $value["ngay"] ?></span> 
                                                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                
                                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>
                        </div>
                    </div>  
                </div>
            </div>