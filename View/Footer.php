<script src="../Javascript/checkbook.js">


</script>
<style>
    .appointmentschedule {


        height: auto;

    }

    .signin_meeting {


        border-radius: 2%;

        background-color: #0a662e;
        /* clip-path: polygon(0 0, 82% 0%, 100% 100%, 0% 100%); */
        border-bottom: 120px solid #0a662e;
        border-left: 60px solid transparent;
        border-right: 60px solid transparent;
        height: 150px;
        width: 100px;
        box-shadow: 2px 10px 10px gray;
        z-index: 1;
    }

    .form_signin {
        background-color: #0a662e;
        border-bottom: 20px solid #0a662e;
        z-index: 0;
    }

    .bookmeeting {
        background-color: #FFF;
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 15px;
        padding-bottom: 15px;
        margin: 15px;
        color: black;
        border-radius: 25px;
        transition: cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .bookmeeting:hover {

        background-color: #ffcf28;
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 15px;
        padding-bottom: 15px;
        margin: 15px;
        cursor: pointer;

        color: black;
        border-radius: 25px;
    }
    .modal-content .modal-header
    {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .modal-header .close
    {
        padding: 0;
    }
    .modal-footer
    {
        justify-content: center;
    }
   .book
   {
       background-color: #0a662e;
       color: #e8eaed;

   }
   .book:hover
   {
       background-color: #FFF;
       color: black;
       border: 1px solid #0a662e;
       
   }
</style>

<section class="appointmentschedule">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 signin_meeting">
                <div style="display: flex; flex-direction: row; width: 650px;">
                    <img src="../Images/nguyenhongson.jpg" height="150px" style="margin-left: -45px;">
                    <div>

                        <h4 style="color: #ffcf28;">Đăng ký tư vấn</h4>
                        <p style="color: white; display: block; font-size: 15px; width: 300px;">Nhận tư vấn miễn phí
                            24/7 từ đội ngũ Bác sĩ, Chuyên gia của Công ty NAVITA, Hungary</p>
                        <div style="margin-top: -25px;">
                            <!-- Button trigger modal -->
                            <button type="button" class="bookmeeting" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Đặt lịch hẹn
                            </button>

                            <!-- Modal -->
                           
                        </div>
                    </div>

                </div>


            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <div class="container-fluid">
                            <div class="row">
                                <h5 class="modal-title col-lg-8 offset-lg-3" id="exampleModalLongTitle" style=" color: #0a662e;">ĐẶT LỊCH TƯ VẤN</h5>
                                <button id="close_modal" type="button" class="col-lg-1  col-sm-1  col-md-1 col-xs-1" style="background-color:#FFF ;border: none; font-size: 20px; font-weight: 700; padding-right :1rem   ;"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                       
                    </div>
                    <div class="modal-body" style="height: 450px;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input class="col-lg-12 form-control" style="height:55px"  placeholder="Họ tên" name="txtname_b" type="text"/>
                                    <div class="col-lg-12" style="margin-top: 30px; margin-bottom: 30px;">
                                        <div class="row">
                                       <div class="col-lg-6" >
                                           <div class="row">
                                        <input class=" col-lg-11 form-control" name="txtphone_b" type="tel" style="height:55px; margin-bottom: 15px;"  placeholder="Số điện thoại"/>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                        <input class="col-lg-11 form-control offset-lg-1" type="email" style="height:55px"  placeholder="Email" name="txtemail_b"/>
                                    </div>
                                    </div>
                                </div>
                                    </div>
                                    <input class="col-lg-12 form-control" name="txtdate" type="date"  style="height:55px"  placeholder="Ngày hẹn "/>
                                    <textarea style="margin-top:30px; height:95px" name="txtsymptom"   class="col-lg-12 form-control" placeholder="Triệu chứng" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close</button> -->
                      <center> <button type="button" name="btnbook" class="btn btn-primary book">Đặt lịch hẹn tư vấn</button></center>  
                    </div>
             
                </div>
            </div>
        </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  form_signin  " style=" margin-top: 25px; ">

            </div>
        </div>
    </div>
</section>
<div>

</div>
<footer style="margin-top: 25px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div style="display: flex; flex-direction: column;">
                            <center>
                                <h6>Liên Hệ</h6>
                            </center>

                            <br>
                            <table>
                                <tr>
                                    <td><i class="fa fa-home" aria-hidden="true"
                                            style="color: #0a662e; text-align: center; margin-right: 30px;"></i></td>
                                    <td>
                                        <p>
                                            <font style="font-weight:bold ;">CÔNG TY CỔ PHẦN DƯỢC PHẨM CÔNG NGHỆ CAO
                                                NAVITA VIỆT NAM <br>MST: 0108662880 | Cấp ngày 22/03/2019<br></font>Số
                                            302 Kim Ngưu, Phường Minh Khai, Quận Hai Bà Trưng, Thành phố Hà Nội, Việt
                                            Nam
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-home" aria-hidden="true"
                                            style="color: #0a662e; text-align: center; margin-right: 30px;"></i></td>
                                    <td>
                                        <p>
                                            <font style="font-weight:bold ;">Trụ sở chính tại Hungary:<br></font>10
                                            Belgrád rkp., Budapest 1056, Hungary
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-home" aria-hidden="true"
                                            style="color: #0a662e; text-align: center; margin-right: 30px;"></i></td>
                                    <td>
                                        <p>
                                            <font style="font-weight:bold ;">Showroom tại Đà Nẵng, Việt Nam<br></font>
                                            151 Núi Thành, Quận Hải Châu, Đà Nẵng
                                        </p>
                                    </td>

                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope" aria-hidden="true"
                                            style="color: #0a662e; margin-right: 30px;"></i></td>
                                    <td>
                                        <p style="margin-top: 10px;">
                                            <font style="font-weight:bold ;">Email: </font>info@mothaolan.life
                                        </p>
                                    </td>

                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone" aria-hidden="true"
                                            style="color: #0a662e; margin-right: 30px;"></i></td>
                                    <td>
                                        <p style="margin-top: 10px;">
                                            <font style="font-weight:bold ;">Email: </font>info@mothaolan.life
                                        </p>
                                    </td>

                                </tr>
                            </table>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div style="display: flex; flex-direction: column; align-items: center;">
                            <center>
                                <h6>Danh Mục</h6>
                            </center>
                            <br>
                            <div style="display: flex; flex-direction: column; justify-content: left;">
                                <a>Giới thiệu NAVITA </a>
                                <a style="margin-top: 20px;">Giấy phép kinh doanh</a>
                                <a style="margin-top: 20px;">Sản phẩm của NAVITA</a>
                                <a style="margin-top: 20px;">Cảm nhận của khách hàng</a>
                                <a style="margin-top: 20px;">Hệ thống nhà phân phối</a>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <center>
                            <h6>Facebook</h6>
                        </center>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="../Images/logo_bct.png" width="180px">
                    </div>
                    <div class="col-lg-4">
                        <div style="display: flex;flex-direction: row; align-items: center; margin-top: 25px;">
                            <img style="margin-right: 8px;" src="../Images/img_pay_1.png">
                            <img style="margin-right: 8px;" src="../Images/img_pay_2.png">
                            <img style="margin-right: 8px;" src="../Images/img_pay_3.png">
                            <img style="margin-right: 8px;" src="../Images/img_pay_4.png">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div style="display: flex;flex-direction: row; align-items: center; margin-top: 25px;">
                            <a
                                style="background-color: #3b5998; border-radius: 50%; margin-right: 15px;padding: 5px 10px 5px 10px;  "><i
                                    style="color: white;" class="fa fa-facebook" aria-hidden="true"></i></i></i></a>
                            <a
                                style="background-color: #4176fa; border-radius: 50%; margin-right: 15px;padding: 5px 10px 5px 10px;  "><i
                                    style="color: white;" class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a
                                style="background-color: #f4b459; border-radius: 50%; margin-right: 15px;padding: 5px 10px 5px 10px;"><i
                                    style="color: white;" class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a
                                style="background-color: #dd4b39; border-radius: 50%; margin-right: 15px;padding: 5px 10px 5px 10px;"><i
                                    style="color: white;" class="fa fa-youtube" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="border-top: 1px solid #e8eaed;">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <p style="margin-top: 30px; "> © Bản quyền thuộc về Công ty Dược phẩm Công nghệ cao Mộc Thảo Lan,
                        Hungary | Cung cấp bởi Bao</p>
                </center>
            </div>
        </div>
    </div>
</footer>