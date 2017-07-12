<?php //neat_array($pol_cookie) ?>
    <style>
        .bubble_red{
            border-radius:10px;
            padding:25px;
            text-align:center;
            margin:0 auto;
            max-width:400px;
            width:90%;
            border:1px solid #888;
            color:#ff0000;
            margin-top:30px;
            margin-bottom:30px;
        }

        /********New Packages Style*******/
        .ltr{direction:ltr;display: inline-block;}
        .card-titr {
            background: #373737;
            color: #fff;
            font-weight: bold;
            font-size: 14px;
            transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            float: right;
            white-space: nowrap;
            padding: 6px 40px;
            position: absolute;
            bottom: -12px;
            right: -50%;
        }

        .ttr-body {
            height: 381px;
        }

        .renew_packages_container {
            padding: 30px;
            width: 100%;
            max-width: 1200px;
            margin: 30px auto 0 auto;
        }

        .shadow-bg {
            display: block;
            background: #eee;
            padding: 5px;
            border-top: 1px solid #dedede;
            margin-bottom: 50px;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-shadow: 1px 1px 5px -2px rgba(0, 0, 0, 0.32);
        }

        .gnum {
            font-size: 45px;
            color: #275cb7;
            font-family: Impact;
            line-height: 42px;
            text-align: center;
        }

        .gtxt {
            font-size: 13px;
            color: #275cb7;
            text-align: left;
            font-weight: bold;
        }

        .gig {
            background: #f7f7f7;
            padding: 9px 8%;
            float: right;
            width: 60%;
            border-left: 1px solid #d8d8d8;
            height: 98px;
            box-shadow: 0px 0px 16px -6px rgb(0, 0, 0);
        }

        .f-width {
            width: 100%;
            clear: both;
            float: right;
        }

        .offer {
            background: url(http://www.parsonline.com/data/uploaded_files/1492339624-3.png) no-repeat;
            background-size: 100% 100%;
            top: -19px;
            position: absolute;
            right: 0;
            background-position: right top;
            height: 125px;
            width: 100%;
        }

        .offer-num {
            font-size: 33px;
            color: #fff;
            text-align: center;
            font-family: Impact;
        }

        .offer-txt {
            font-size: 16px;
            color: #fff;
            text-align: center;
            font-weight: bold;
        }

        .offer-container {
            float: right;
            width: 40%;
            position: relative;
            border: 1px solid #eee;
        }

        .ticktxt:before {
            content: "";
            float: right;
            margin-left: 5px;
            background: url(http://www.parsonline.com/data/uploaded_files/1492339623-3.png) no-repeat;
            width: 20px;
            height: 20px;
        }

        .ticktxt, .oldPrice {
            margin-bottom: 5px;
        }

        /*.options, .price {
            border-left: 1px solid #d8d8d8;
        }*/

        .options, .buy-btn {
            height: 98px;
        }

        .price {
            height: 98px;
            background: #f7f7f7;
            box-shadow: 0px 0px 16px -6px rgb(0, 0, 0);
        }

        .oldPrice {
            text-decoration: line-through;
            color: #618cd5;
            text-align: center;
        }

        .newPrice {
            font-size: 19px;
            font-weight: bold;
            color: #275cb7;
            text-shadow: 1px 1px 2px #adadad;
        }

        .order-btn {
            padding: 5px 30px;
            background: #00c107;
            color: #fff !important;
            border-radius: 3px;
            transition: 0.3s;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;        margin-bottom: 5px;
            bottom: 0;
        }

        .order-btn:hover {
            background: #275cb7;
            box-shadow: 1px 1px 5px 0px #969696;
            color: #fff;
            text-decoration: none;
        }

        .ticktxt {
            font-size: 12px;
            font-weight: bold;
            line-height: 28px;
            text-align:right;
        }

        .redBoldtxt {
            color: red;
            font-size: 17px;
            font-weight: bold;
        }

        .flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;

            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
        }

        .block {
            display: block;
        }

        .offer-c {
            margin-top: -23px;
            margin-right: 9px;
        }
        .gig-sum{border-right: 1px dashed #c5c5c5;
            height: 98px;}
        .g-sum-txt{font-size: 20px;
            font-weight: bold;
            line-height: 32px;
            text-align: center;
            direction: ltr;
            color: #fe0000;}
        @media screen and (max-width: 1200px) {
            .price, .options, .buy-btn {
                padding: 5px;
            }
            .buy-btn {
                padding: 0px;
            }

            .ttr-body {
                height: auto;
            }

            .card-titr {
                transform: inherit;
                -webkit-transform: inherit;
                -moz-transform: inherit;
                position: relative;
                bottom: auto;
                right: auto;
                width: 100%;
                text-align: center;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 980px) {
            .gig{padding: 9px 5%;}

        }
        @media screen and (max-width: 870px) {

            .ticktxt {
                font-size: 12px;
            }

            .newPrice {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 768px) {
            .buy-btn , .timer{height:auto !important;}
            .gig-sum , .options{height:auto;}
            .gig-sum{border:none;}
            .renew_packages_container {
                margin-top: 0;}
            .options, .price {
                border: none;
                width: 100%;
            }
            .col-xs-12{width:100%;}
            .gig {
                padding: 20px 9% 0 0;
            }
            .redBoldtxt {
                color: red;
                font-size: 19px;
                font-weight: bold;
            }


            .gnum {
                font-size: 60px;
                line-height: 42px;
                width: auto;
                clear: inherit;
            }

            .gtxt {
                font-size: 18px;
                width: auto;
                clear: inherit;
                line-height: 50px;
                margin-left: 16px;
                margin: 0 4% 0 0;
            }

            .price {
                width: 95%;
                margin: 0 auto !important;
                float: none;
                display: block;
                clear: both;
            }

            .offer-c {
                margin-top: -30px;
                margin-right: 16px;
            }

            .offer-num {
                font-size: 40px;
            }

            .ticktxt {
                font-size: 18px;
            }

            .options {
                margin: 20px 0 10px 0;
            }

            .oldPrice {
                font-size: 17px;
            }

            .newPrice {
                font-size: 24px;
            }

            .order-btn {
                padding: 8px 60px;
            }
            .ttr-body{
                margin-top: 0px !important;
            }
        }

        @media screen and (max-width: 480px) {
            .gnum {
                font-size: 40px;
            }

            .gtxt {
                font-size: 14px;
            }

            .offer-c {
                margin-top: -24px;
                margin-right: 9px;
            }

            .offer-num {
                font-size: 35px;
            }

            .ticktxt {
                font-size: 14px;
            }

            .newPrice {
                font-size: 20px;
            }

            .oldPrice {
                font-size: 15px;
            }

            .order-btn {
                padding: 8px 45px;
            }
        }

        @media screen and (max-width: 375px) {
            .gig {
                padding: 2% 9% 0 0;
            }
        }

        .timer {

            height: 27px;
            /*  background: #a9a9a9;
            position: absolute;*/
            border-top-left-radius: 10px;
            /*top: -34px;
            left: -5px;*/
            border-top-right-radius: 10px;
            /*box-shadow: inset 0px -5px 15px -7px rgba(0, 0, 0, 0.78);*/
        }

        /*****End of New Packages Style*****/




        /* CountDown timer */
        .flip_clock {
            /*top: 65%;*/
            left: 20px;
            z-index: 10;
            text-align: center;
            /*background-color: #36618f;*/
            width: 100%;
        }

        .qp_countdown {
            font-size: 20px !important;color: #616161 !important;
        }

        .qp_countdown > div:nth-child(1) {
            padding-top: 15px;
            background: url('http://www.parsonline.com/data/uploaded_files/1492347454-9.png') scroll no-repeat no-repeat center top;
            background-size:50px auto;
        }

        .qp_countdown > div:nth-child(2) {
            padding-top: 15px;
            background: url('http://www.parsonline.com/data/uploaded_files/1492347452-9.png') scroll no-repeat no-repeat center top;
            background-size:50px auto;
        }

        .qp_countdown > div:nth-child(3) {
            padding-top: 15px;
            background: url('http://www.parsonline.com/data/uploaded_files/1492347453-9.png') scroll no-repeat no-repeat center top;
            background-size:50px auto;
        }

        .qp_countdown > div:nth-child(4) {
            padding-top: 15px;
            background: url('http://www.parsonline.com/data/uploaded_files/1492347455-9.png') scroll no-repeat no-repeat center top;
            background-size:50px auto;
        }

        .each_digit {
            background-size: 100% auto;
            width: 15px;
            height: 30px; /*background:#616161 !important;*/ border-radius:5px;/*box-shadow:inset 1px 1px 5px 1px #;*/
            border-radius: 3px;
            font-size: 14px !important;color: #000 !important;background:none !important;
            line-height: 35px;
        }
    </style>
    <div class="container-fluid">
    <div class="row reset_row">

    <section>
        <h1 class="hidden">جشنواره ترافیک اضافه تابستان 96</h1>
        <img class="hidden-sm hidden-xs" src="http://www.parsonline.com/data/uploaded_files/1499670960-3.jpg"  alt="جشنواره گیگ اضافه تهران" width="100%">
        <img class="hidden-lg hidden-md" src="http://www.parsonline.com/data/uploaded_files/1499670959-3.jpg" alt="جشنواره گیگ اضافه تهران" width="100%">
    </section>
    <section>
    <div class="container-fluid text-center">
    <!--<div class="flip_clock">
                    <p style="color:#fff;font-size: 25px;">مدت زمان باقیمانده</p>
                    <div class="qp_countdown" data-time="<?= jmktime(0,0,0,3,9,1396) - time()  ?>"
                         data-type="flipClock"></div>
                </div>-->
    <div class="row reset_row ">
    <div class="bubble_red hidden">مدت زمان این جشنواره به پایان رسیده است.</div>
    <!--Packages----------------------------------------------->

    <div class="container-fluid">
        <div class="renew_packages_container">
            <div class="row">
                <div class="col-xs-12 col-lg-1 ttr-body">
                    <div class="row">
                        <span class="card-titr">بسته های ترافیک اضافه</span>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-11">
                    <div class="row shadow-bg">
                        <div class="col-xs-12 col-sm-4">
                            <div class="gig">
                                <span class="f-width" style="text-align: right;color: #275cb7">بسته</span>
                                <span class="gnum f-width">50</span>
                                <span class="gtxt f-width">گیگابایتی</span>
                            </div>
                            <div class="offer-container">
                                <div class="offer">
                                    <div class="flex">
                                        <div class="block offer-c">
                                            <span class="offer-num f-width">15</span><span style="color: #fff;"> گیگابایت</span>
                                            <span class="offer-txt f-width">ترافیک هدیه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <div class="options">
                                <div class="flex">
                                    <div class="block">
                                        <div class="f-width ticktxt" style="float: none"> قابل انتقال به قرارداد بعد</div>
                                        <div class="f-width ticktxt" style="float: none">   مجموع ترافیک <span class="redBoldtxt">65 گیگابایت</span></div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="gig-sum">
                                <div class="flex">
                                    <div class="block">
                                        <div class="cross"></div>                                                      مجموع ترافیک
                                        <div class="f-width g-sum-txt" style="float: none">75 GB</div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-xs-12 col-sm-2 price">
                            <div class="flex">
                                <div class="block">
                                    <div class="f-width"><b>قیمت</b></div>
                                    <div class="f-width newPrice">90,400 تومان</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 buy-btn">
                            <div class="timer">
                                <div class="flip_clock">

                                    <div class="qp_countdown" data-time="<?= jmktime(0,0,0,4,26,1396) - time()  ?>" data-type="flipClock"></div>
                                </div>
                            </div>
                            <div class="flex">
                                <a href="https://onebill.parsonline.com/OneBill/WebForms/Secure/traffic.aspx?ProductId=443" class="order-btn">ثبت سفارش</a>
                            </div>

                        </div>
                    </div>
                    <div class="row shadow-bg">
                        <div class="col-xs-12 col-sm-4">
                            <div class="gig">
                                <span class="f-width" style="text-align: right;color: #275cb7">بسته</span>
                                <span class="gnum f-width">100</span>
                                <span class="gtxt f-width">گیگابایتی</span>
                            </div>
                            <div class="offer-container">
                                <div class="offer">
                                    <div class="flex">
                                        <div class="block offer-c">
                                            <span class="offer-num f-width">35</span><span style="color: #fff;"> گیگابایت</span>
                                            <span class="offer-txt f-width">ترافیک هدیه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <div class="options">
                                <div class="flex">
                                    <div class="block">
                                        <div class="f-width ticktxt" style="float: none"> قابل انتقال به قرارداد بعد</div>
                                        <div class="f-width ticktxt" style="float: none">   مجموع ترافیک <span class="redBoldtxt">135 گیگابایت</span></div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="gig-sum">
                                <div class="flex">
                                    <div class="block">
                                        <div class="cross"></div>                                                      مجموع ترافیک
                                        <div class="f-width g-sum-txt" style="float: none">75 GB</div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-xs-12 col-sm-2 price">
                            <div class="flex">
                                <div class="block">
                                    <div class="f-width"><b>قیمت</b></div>
                                    <div class="f-width newPrice">165,400 تومان</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 buy-btn">
                            <div class="timer">
                                <div class="flip_clock">

                                    <div class="qp_countdown" data-time="<?= jmktime(0,0,0,4,26,1396) - time()  ?>" data-type="flipClock"></div>
                                </div>
                            </div>
                            <div class="flex">
                                <a href="https://onebill.parsonline.com/OneBill/WebForms/Secure/traffic.aspx?ProductId=444" class="order-btn">ثبت سفارش</a>
                            </div>

                        </div>
                    </div>
                    <div class="row shadow-bg">
                        <div class="col-xs-12 col-sm-4">
                            <div class="gig">
                                <span class="f-width" style="text-align: right;color: #275cb7">سه بسته</span>
                                <span class="gnum f-width">50</span>
                                <span class="gtxt f-width">گیگابایتی</span>
                            </div>
                            <div class="offer-container">
                                <div class="offer">
                                    <div class="flex">
                                        <div class="block offer-c">
                                            <span class="offer-num f-width">60</span><span style="color: #fff;"> گیگابایت</span>
                                            <span class="offer-txt f-width">ترافیک هدیه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <div class="options">
                                <div class="flex">
                                    <div class="block">
                                        <div class="f-width ticktxt" style="float: none"> قابل انتقال به قرارداد بعد</div>
                                        <div class="f-width ticktxt" style="float: none">   مجموع ترافیک <span class="redBoldtxt">210 گیگابایت</span></div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="gig-sum">
                                <div class="flex">
                                    <div class="block">
                                        <div class="cross"></div>                                                      مجموع ترافیک
                                        <div class="f-width g-sum-txt" style="float: none">75 GB</div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-xs-12 col-sm-2 price">
                            <div class="flex">
                                <div class="block">
                                    <div class="f-width"><b>قیمت</b></div>
                                    <div class="f-width newPrice">271,200 تومان</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 buy-btn">
                            <div class="timer">
                                <div class="flip_clock">

                                    <div class="qp_countdown" data-time="<?= jmktime(0,0,0,4,26,1396) - time()  ?>" data-type="flipClock"></div>
                                </div>
                            </div>
                            <div class="flex">
                                <a href="https://onebill.parsonline.com/OneBill/WebForms/Secure/traffic.aspx?ProductId=1438" class="order-btn">ثبت سفارش</a>
                            </div>

                        </div>
                    </div>
                    <div class="row shadow-bg">
                        <div class="col-xs-12 col-sm-4">
                            <div class="gig">
                                <span class="f-width" style="text-align: right;color: #275cb7">بسته</span>
                                <span class="gnum f-width">200</span>
                                <span class="gtxt f-width">گیگابایتی</span>
                            </div>
                            <div class="offer-container">
                                <div class="offer">
                                    <div class="flex">
                                        <div class="block offer-c">
                                            <span class="offer-num f-width">75</span><span style="color: #fff;"> گیگابایت</span>
                                            <span class="offer-txt f-width">ترافیک هدیه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <div class="options">
                                <div class="flex">
                                    <div class="block">
                                        <div class="f-width ticktxt" style="float: none"> قابل انتقال به قرارداد بعد</div>
                                        <div class="f-width ticktxt" style="float: none">   مجموع ترافیک <span class="redBoldtxt">275 گیگابایت</span></div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="gig-sum">
                                <div class="flex">
                                    <div class="block">
                                        <div class="cross"></div>                                                      مجموع ترافیک
                                        <div class="f-width g-sum-txt" style="float: none">75 GB</div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-xs-12 col-sm-2 price">
                            <div class="flex">
                                <div class="block">
                                    <div class="f-width"><b>قیمت</b></div>
                                    <div class="f-width newPrice">315,400 تومان</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 buy-btn">
                            <div class="timer">
                                <div class="flip_clock">

                                    <div class="qp_countdown" data-time="<?= jmktime(0,0,0,4,26,1396) - time()  ?>" data-type="flipClock"></div>
                                </div>
                            </div>
                            <div class="flex">
                                <a href="https://onebill.parsonline.com/OneBill/WebForms/Secure/traffic.aspx?ProductId=1440" class="order-btn">ثبت سفارش</a>
                            </div>

                        </div>
                    </div>



                    <div class="row shadow-bg">
                        <div class="col-xs-12 col-sm-4">
                            <div class="gig">
                                <span class="f-width" style="text-align: right;color: #275cb7">سه بسته</span>
                                <span class="gnum f-width">100</span>
                                <span class="gtxt f-width">گیگابایتی</span>
                            </div>
                            <div class="offer-container">
                                <div class="offer">
                                    <div class="flex">
                                        <div class="block offer-c">
                                            <span class="offer-num f-width">140</span><span style="color: #fff;"> گیگابایت</span>
                                            <span class="offer-txt f-width">ترافیک هدیه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-3">

                            <div class="options">
                                <div class="flex">
                                    <div class="block">
                                        <div class="f-width ticktxt" style="float: none"> قابل انتقال به قرارداد بعد</div>
                                        <div class="f-width ticktxt" style="float: none">   مجموع ترافیک <span class="redBoldtxt">440 گیگابایت</span></div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="gig-sum">
                                <div class="flex">
                                    <div class="block">
                                        <div class="cross"></div>                                                      مجموع ترافیک
                                        <div class="f-width g-sum-txt" style="float: none">75 GB</div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-xs-12 col-sm-2 price">
                            <div class="flex">
                                <div class="block">
                                    <div class="f-width"><b>قیمت</b></div>
                                    <div class="f-width newPrice">496,200 تومان</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 buy-btn">
                            <div class="timer">
                                <div class="flip_clock">

                                    <div class="qp_countdown" data-time="<?= jmktime(0,0,0,4,26,1396) - time()  ?>" data-type="flipClock"></div>
                                </div>
                            </div>
                            <div class="flex">
                                <a href="https://onebill.parsonline.com/OneBill/WebForms/Secure/traffic.aspx?ProductId=1439" class="order-btn">ثبت سفارش</a>
                            </div>

                        </div>
                    </div>




                </div>

            </div>
        </div>
    </div>



    <div class="container-fluid" style="background-color:#ddd;/*padding:15px;*/padding: 0;color:#fff">
        <div class="container" style="padding: 0;background-color: #000;">
            <div class="">
                <!-----------Thumbnail of videos in Desktop------------>

                <div class="col-lg-4 col-md-4 hidden-sm hidden-xs" style="padding-right:0;">
                    <div class="row" style="background-color: #333;">
                        <div class="col-md-12" >
                            <div class="col-lg-6 col-md-6 video_box" data-video="1893">
                                <img class="videos active" src="http://www.parsonline.com/data/uploaded_files/1497420093-3.jpg" id="img-1893" width="100%" style="margin-bottom: 10px" alt="کیش" />
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="play-1893" alt="play" />
                            </div>
                            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs video-title active-title">
                                <p>پارس آنلاین انتخاب جوانان خوب، مدرن و باحال ایرانی</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 video_box" data-video="1895">
                                <img class="videos" src="http://www.parsonline.com/data/uploaded_files/1499678742-3.jpg" id="img-1895" width="100%" style="margin-bottom: 10px" alt="فوتبال صابونی" />
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="play-1895" alt="play" />
                            </div>
                            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs video-title">
                                <p>با جوانان خوب ایرانی هم میشه کارهای بزرگ انجام داد</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 video_box" data-video="1712">
                                <img class="videos" src="http://www.parsonline.com/data/uploaded_files/1492426179-3.jpg" id="img-1712" width="100%" style="margin-bottom: 10px" alt="فوتبال حبابی"/>
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="play-1712" alt="play" />
                            </div>
                            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs video-title">
                                <p>ایران این شکلیه - ایذه 1395</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-lg-6 col-md-6 video_box" data-video="1269">
                                <img class="videos" src="http://www.parsonline.com/data/uploaded_files/1493451527-3.png" id="img-1269" width="100%" alt="پارس آنلاین"/>
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="play-1269" alt="play" />
                            </div>
                            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs video-title">
                                <p>اولین فوتبال صابونی در ایران - پارس آنلاین</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----------End of Thumbnail------------>

                <div class="col-lg-8 col-md-8" id="iframe_box">
                    <div id="video">
                        <iframe src="http://tv.parsonline.com/embed.php?id=1893"
                                style="width: 100%;height: 434px;margin-top:18px;overflow: hidden;border: 1px solid #161616" scrolling="no"
                                seamless="seamless" allowfullscreen></iframe>
                    </div>
                </div>

                <!-----------Thumbnail of videos in Mobile------------>

                <div class="col-sm-12 col-xs-12 hidden-lg hidden-md" style="padding: 0;">
                    <div class="mbl-video">
                        <div class="item">
                            <div class="video_box" data-video="1893">
                                <img class="videos active" src="http://www.parsonline.com/data/uploaded_files/1497420093-3.jpg" id="mbl-img-1893" width="100%" style="margin-bottom: 10px" alt="کیش" />
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="mbl-play-1893" alt="play" />
                            </div>
                            <span class="mbl-video-title">پارس آنلاین انتخاب جوانان خوب ایرانی</span>
                        </div>
                        <div class="item">
                            <div class="video_box" data-video="1895">
                                <img class="videos" src="http://www.parsonline.com/data/uploaded_files/1499678742-3.jpg" id="mbl-img-1895" width="100%" style="margin-bottom: 10px" alt="فوتبال صابونی" />
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="mbl-play-1895" alt="play" />
                            </div>
                            <span class="mbl-video-title">جوانان خوب ایرانی</span>
                        </div>
                        <div class="item">
                            <div class="video_box" data-video="1712">
                                <img class="videos" src="http://www.parsonline.com/data/uploaded_files/1492426179-3.jpg" id="mbl-img-1712" width="100%" style="margin-bottom: 10px" alt="فوتبال حبابی" />
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="mbl-play-1712" alt="play" />
                            </div>
                            <span class="mbl-video-title">ایران این شکلیه - ایذه 1395</span>
                        </div>
                        <div class="item">
                            <div class="video_box" data-video="1269">
                                <img class="videos" src="http://www.parsonline.com/data/uploaded_files/1493451527-3.png" id="mbl-img-1269" width="100%" style="margin-bottom: 10px" alt="پارس آنلاین" />
                                <img src="http://www.parsonline.com/data/uploaded_files/1492259452-3.png" class="play_icon" id="mbl-play-1269" alt="play" />
                            </div>
                            <span class="mbl-video-title">اولین فوتبال صابونی در ایران</span>
                        </div>
                    </div>
                </div>
                <!-----------End of Mobile's Thumbnail------------>
            </div>
        </div>
    </div>

<?php
if (isset($_GET['tg'])) {
    if ($_GET['tg'] == 'redirection') {
        echo '<p class="text-center">
    <a href="http://www.parsonline.com/adsl/redirection/permissions/">
        <span class="glyphicon glyphicon-ok"></span> در صورتی که میخواهید از این طریق به شما اطلاع رسانی نگردد، لطفا اینجا
        را کلیک نمایید
    </a>
</p>';
    }
}
?>