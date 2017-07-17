<style>
    .renew_banner {
        background: url('http://www.parsonline.com/data/uploaded_files/1478680468-1.jpg') scroll no-repeat no-repeat center top;
        height: 500px;
        background-size: 100% auto;
    }

    @media (min-width: 768px) and (max-width: 1400px) {
        .renew_banner {
            background-size: 100% auto;
            height: 400px;
        }
    }

    @media (max-width: 768px) {
        .renew_banner {
            background-size: auto 100%;
            height: 350px;
        }

        .renew_banner .font_medium {
            font-size: 10pt !important;
        }
    }

    .newsletter {
        display: none;
    }

    .modal-box {
        background-color: #f5f5f5;
        color: #272727;
        font-weight: bold;
        padding: 12px;
        margin: 1%;
        width: 48%;
    }

    .modal-box:hover {
    . modal-box;
        background-color: #da251d;
        color: #fff;
    }

    .dslred_bttn {
        margin: 5px;
        padding: 10px 20px 10px 20px;
    }

    .bttn4 {
        background-color: #ff6a00;
    }

    .gamer .bttn4 {
        background-color: #005baa;
    }

    .traffic .bttn4 {
        background-color: #ffcb05;
        color: #000
    }

    .bttn5 {
        background-color: #ffea00;
        border-radius: 5px;
        padding: 10px 15px 10px 15px;
        color: #000;
        border-style: none;
        font-size: 10pt;
        transition: background-color 0.3s;
    }
    bttn5:hover{
        background-color: #ffb300 !important;
    }

</style>
<h1 class="hidden"></h1>
<div class="alert alert-danger alert-dismissible mb0" role="alert" style="margin-bottom: 0px;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>توجه!</strong> اشتراک اینترنت شما بدلیل اتمام مهلت قرارداد یا ظرفیت حجمی، به اتمام رسیده است.
</div>

<section>
    <div class="renew_banner">
        <div class="max_1000px padding_15">
            <br>
            <h1 class="white font_bold font_xlarge bold">الان وقت تمدید اینترنت پرسرعته!</h1>
            <br>
            <div class="white">
                <!--<a href="http://www.parsonline.com/adsl/renew"  target="_blank"><button class="bttn4 dslred_bttn font_medium padding_10">الان جشنواره تمدید داریم</button></a>-->
                <a href="http://onebill.parsonline.com/OneBill/WebForms/Secure/manage.aspx?Parameter=LittleMore"
                   target="_blank">
                    <button class="bttn2 dslred_bttn font_medium padding_10">شارژ اضطراری</button>
                </a>
                <a href="http://onebill.parsonline.com/" data-toggle="modal" data-target="#extend-modal">
                    <button class="bttn1 dslred_bttn font_medium padding_10">تمدید سرویس یا خرید ترافیک</button>
                </a>
                <a href="http://pol.gl/1499670208" target="_blank">
                    <button class="bttn5 dslred_bttn font_medium padding_10">جشنواره خرید ترافیک</button>
                </a>
                <?php
                if((isset($pol_cookie['ProvinceId'] ) and $pol_cookie['ProvinceId'] == 1 )|| (isset($_COOKIE['province_id']) && $_COOKIE['province_id'] == 1 )){
                    ?>
                    <a href="http://pol.gl/1497685967" target="_blank" ><button class="bttn4 dslred_bttn font_medium padding_10" style="font-size:10px">جشنواره تمدید</button>
                    </a>
                <?php }
                else if((isset($pol_cookie['ProvinceId'] ) and $pol_cookie['ProvinceId'] == 23 )|| (isset($_COOKIE['province_id']) && $_COOKIE['province_id'] == 23 )){
                    ?>
                    <a href="http://pol.gl/1497781573" target="_blank" ><button class="bttn4 dslred_bttn font_medium padding_10" style="font-size:10px">جشنواره تمدید</button>
                    </a>
                <?php }
                else if((isset($pol_cookie['ProvinceId'] ) and $pol_cookie['ProvinceId'] == 31 )|| (isset($_COOKIE['province_id']) && $_COOKIE['province_id'] == 31 )){
                    ?>
                    <a href="http://pol.gl/1497788907" target="_blank" ><button class="bttn4 dslred_bttn font_medium padding_10" style="font-size:10px">جشنواره تمدید</button>
                    </a>
                <?php }
                else if((isset($pol_cookie['CityId'] ) and $pol_cookie['CityId'] == 1 )|| (isset($_COOKIE['city_id']) && $_COOKIE['city_id'] == 1 )){
                    ?>
                    <a href="http://pol.gl/1497946898" target="_blank" ><button class="bttn4 dslred_bttn font_medium padding_10" style="font-size:10px">جشنواره تمدید</button>
                    </a>
                <?php }
                else if((isset($pol_cookie['ProvinceId'] ) and $pol_cookie['ProvinceId'] == 10 )|| (isset($_COOKIE['province_id']) && $_COOKIE['province_id'] == 10 )){
                    ?>
                    <a href="http://pol.gl/1497956853" target="_blank" ><button class="bttn4 dslred_bttn font_medium padding_10" style="font-size:10px">جشنواره تمدید</button>
                    </a>
                <?php }

                ?>

            </div>
        </div>
    </div>
</section>


<section>
    <div class="max_1000px padding_10 font_medium">
        <br><br><br>
        دوستای صمیمی:<br>
        اشتراک اینترنت شما بدلیل تمام شدن مهلت قرارداد یا ظرفیت حجمی تموم شده، حالا شما می تونید برای تمدید اشتراک
        اینترنت ADSL ، از یکی از روش های بالا استفاده کنید یا اگه الان دسترسی برای پرداخت از طریق سیستم های بانکی رو
        ندارید می تونید از مزایای شارژ اضطراری استفاده کنید.<br>
        همچنین اگه اطلاعات بیشتری نیاز دارید می تونید از ۱۵۸۵ بپرسید و یا با دفتر نمایندگی های ما در شهرتون ارتباط
        برقرار کنید<br>
        در ضمن بدون داشتن ترافیک نمی تونید از هدیه شبانه استفاده کنید.<br><br>
        <a href="http://www.parsonline.com/adsl/reseller-affairs" target="_blank">
            <button class="bttn3 font_medium">امور نمایندگان</button>
        </a>
        <br><br><br>
    </div>
</section>

<section class="pale_gray_bg">
    <?= parse_page('[[page:8]]')  ?>
</section>

<!-- Modal -->
<div class="modal fade" id="extend-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">تمدید سرویس یا خرید ترافیک</h4>
            </div>
            <div class="modal-body ">
                <div class="container-fluid padding_5">
                    <div class="row equal-height-columns-parent remain-equal">
                        <div id="online-icon"
                             class="col-lg-12 col-md-12 col-sm-12 col-xs-12 modal-box text-center equal-height-columns-child mb10"
                             style="width: 98%;">
                            <a href="http://onebill.parsonline.com/" class="modal-box-link" target="_blank">
                                <img src="http://www.parsonline.com/data/uploaded_files/1478681627-1.png" width="50px" alt="online"/>
                                <h4 class="font_medium">تمدید به روش آنلاین</h4>
                            </a>
                        </div>
                    </div>
                    <div class="row equal-height-columns-parent remain-equal">
                        <div id="mobile-icon"
                             class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-box text-center equal-height-columns-child mb10">
                            <a href="http://www.parsonline.com/application/" class="modal-box-link" target="_blank">
                                <h4 class="font_medium">تمدید با افزار موبایل</h4>
                            </a>
                        </div>
                        <div id="user-icon"
                             class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-box text-center equal-height-columns-child mb10">
                            <a href="http://club.parsonline.com/form/Public/dynamicPage.aspx?guid=0b840e0a-4192-4e5b-b927-1ad2f5f9fbf6"
                               class="modal-box-link " target="_blank">
                                <h4 class="font_medium">تمدید بوسیله باشگاه مشتریان</h4>
                            </a>
                        </div>
                    </div>
                    <div class="row equal-height-columns-parent remain-equal">
                        <div id="mobile-icon"
                             class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-box text-center equal-height-columns-child mt10">
                            <a href="" class="modal-box-link">
                                <h4 class="font_medium">تمدید از طریق USSD</h4>
                            </a>
                        </div>
                        <div id="card-icon"
                             class="col-lg-6 col-md-6 col-sm-6 col-xs-6 modal-box text-center equal-height-columns-child mt10">
                            <a href="http://onebill.parsonline.com/OneBill/Webforms/Public/PasswordRecovery.aspx"
                               class="modal-box-link" target="_blank">
                                <h4 class="font_medium">رمز عبور خود را فراموش کرده اید؟</h4>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#online-icon').mouseenter(function () {
        $(this).find('img').attr('src', 'http://www.parsonline.com/data/uploaded_files/1478681626-1.png');
    });
    $('#online-icon').mouseleave(function () {
        $(this).find('img').attr('src', 'http://www.parsonline.com/data/uploaded_files/1478681627-1.png');
    });
</script>
