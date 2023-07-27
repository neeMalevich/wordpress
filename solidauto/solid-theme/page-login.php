<?php get_header(); ?>
<!--login-column  -->
<div class="login-column">
    <div class="login-column_header">
        <h4>Добро пожаловать!<br>Solid Auto Service</h4>
    </div>
    <div class="main-register-holder tabs-act">
        <div class="main-register fl-wrap">
            <!-- <ul class="tabs-menu fl-wrap no-list-style">
                <li class="current"><a href="#tab-1"><i class="fal fa-phone"></i> По номеру телефона</a></li>
                <li><a href="#tab-2"><i class="fal fa-envelope"></i> По электронной почте</a></li>
            </ul> -->
            <!--tabs -->
            <div class="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content first-tab">
                        <div class="custom-form">
                            <form id="loginform">
                                <label>Ваш Email<span>*</span> </label>
                                <input name="email" type="email" value="">
                                <label>Ваш пароль <span>*</span> </label>
                                <input name="password" type="password" value="">
                                <button type="submit" class="btn float-btn color2-bg d-block" style="width:100%">Войти в личный кабинет</button>
                                <div class="clearfix"></div>
                                <!-- <div class="filter-tags">
                                    <input id="check-a3" type="checkbox" name="check">
                                    <label for="check-a3">Remember me</label>
                                </div> -->
                            </form>
                            <!-- <div class="lost_password">
                                <a href="#" class="show-lpt">Lost Your Password?</a>
                                <div class="lost-password-tootip">
                                    <p>Enter your email and we will send you a password</p>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <button type="submit" class="btn float-btn color2-bg"> Send<i
                                            class="fas fa-caret-right"></i></button>
                                    <div class="close-lpt"><i class="far fa-times"></i></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!--tab end -->
                    <!--tab -->
                    <!-- <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <div class="custom-form">
                                <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                    <label>Электронная почта <span>*</span> </label>
                                    <input name="email" type="email" value="">
                                    <label>Ваше Имя <span>*</span> </label>
                                    <input name="name" type="text" value="">
                                    <button type="submit" class="btn float-btn color2-bg">Зарегистироваться</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <!--tab end -->
                </div>
                <!--tabs end -->
                <!-- <div class="log-separator fl-wrap"><span>или</span></div>
                <div class="soc-log fl-wrap">
                    <p>Авторизуйтесь, если уже были зарегистированы ранее</p>
                    <a href="/account/" class="log"> Авторизоваться</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!--login-column end-->
<!--login-column-bg  -->
<div class="login-column-bg gradient-bg">
    <!--ms-container-->
    <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ms-item_fs fl-wrap full-height">
                        <div class="bg" data-bg="<?php echo get_template_directory_uri() ?>/images/front-bg.png"></div>
                        <div class="overlay op7"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--login-column-bg end-->
<?php get_footer(); ?>