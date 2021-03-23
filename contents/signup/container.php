<div class="container">
            <div class="grid wide">
               <div class="row container__padding" >

                    <div class="col l-6 m-12 c-12">
                        <div class="container__text">
                            <h1 class="container__text-title">Đăng ký vào Webside </h1>
                            <div class="container__text-subtitle">
                                Quản lý tài khoản  của bạn một cách hiệu quả hơn <br/>
                                trên VietNamStar - Channel
                            </div>
                        </div>
                        <div class="container__image"></div>
                    </div>   
                    <div class="col l-1 m-12 c-0 height-Table">

                    </div> 


                    <div class="col l-5 m-12 c-12">
                       <div class="container__form">
                           <h1 class="container__form-title">Shop - Đăng ký</h1>
                                <!-- Gửi dữ liệu -->
                           <form action="logup_seller.php" method="POST">
                               <ul class="container__form-list">
                                   <li class="container__form-list-item">
                                      
                                        <input class="container__form-list-item-link" type="text"  required name="name" placeholder="Họ và tên " >
                                   </li>
                                   <li class="container__form-list-item">
                                       <input class="container__form-list-item-link" type="text" placeholder="Tên đăng nhập" name="accouunt" required>
                                   </li>
                                   <li class="container__form-list-item">
                                       <input class="container__form-list-item-link" type="password" placeholder="Mật khẩu" name="matKhau" required>
                                    </li>
                                   <li class="container__form-list-item">
                                      <input class="container__form-list-item-link" type="password" placeholder="Xác nhập mật khẩu" name="xacNhanMatKhau" required>
                                    </li> 
                                   <!-- <li class="container__form-list-item">
                                       <select  name="diaChi" id=""  class="container__form-list-item-select" >
                                            <option class="container__form-list-item-select-item"  value="kienGiang" active>Shop Kiên Giang</option>
                                            <option class="container__form-list-item-select-item"  value="tpHCM">Shop TP.HCM</option>
                                            <option class="container__form-list-item-select-item"  value="haNoi">Shop Hà Nội</option>
                                            <option class="container__form-list-item-select-item"  value="daNang">Shop Đà nẵng</option>
                                            <option class="container__form-list-item-select-item"  value="khac">Shop nơi khác</option>
                                       </select>
                                    </li>  -->
                               </ul>

                               <div class="container__form-help">
                                   <div class="container__form-help-remember">
                                       <input type="checkbox" name="remmber" id="" checked>
                                       Nhớ tôi
                                   </div>
                                   <div class="container__form-forget">
                                       <a href="">Quên mật khẩu?</a>
                                   </div>
                               </div>
                               <div class="container__form-control">
                                   <button class="container__form-control-logup" type="submit">ĐĂNG KÝ</button>
                                   <button class="container__form-control-reset" type="reset">RESET</button>
                               </div>
                           </form>
                       </div>
                    </div> 
              </div>
            </div>
        </div>
