<?php 
/* Template Name: Бонусы (личный кабинет) */
get_header(); 

?>
<?php

if( is_user_logged_in() ){
    $owner = wp_get_current_user()->ID;   
} else {
    wp_redirect('/login/');
    exit;
}

?>
<div id="wrapper">
    <!-- content-->
    <div class="content">
        <?php get_template_part( 'template-parts/dashboard', 'header' ); ?>

        <section class="gray-bg main-dashboard-sec" id="sec1">
            <div class="container">
                <!--  dashboard-menu-->
                <div class="col-md-3">
                    <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Меню</div>
                    <div class="clearfix"></div>
                    <div class="fixed-bar fl-wrap" id="dash_menu">
                        <div class="user-profile-menu-wrap fl-wrap block_box">
                            <!-- user-profile-menu-->
                            <div class="user-profile-menu">
                                <h3>Меню</h3>
                                <ul class="no-list-style">
                                    <li><a href="/account/bonus/" class="user-profile-act"><i class="fal fa-chart-line"></i>Бонусы</a></li>
                                    <li><a href="/account/"><i class="fal fa-chart-bar"></i>Закупки</a></li>
                                    <li><a href="/account/docs/"><i class="fal fa-envelope"></i>Материалы</a></li>
                                    <!--<li><a href="/account/"><i class="fal fa-user-edit"></i> Личные данные</a></li>-->
                                    <!--<li><a href="/account/"><i class="fal fa-key"></i> Сменить пароль</a></li>-->
                                </ul>
                            </div>
                            <!-- user-profile-menu end-->
                            <a href="<?php echo wp_logout_url('/login/'); ?>" class="logout_btn color2-bg">Выйти <i class="fas fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="dashboard-title fl-wrap">
                        <h3>Ваши бонусы</h3>
                    </div>
                    <div id="bonus-table" class="fl-wrap block_box">
                        <table>
                            <tbody>
                              <tr>
                                <th>Период</th>
                                <th></th>
                                <th>Бонус кб</th>
                                <th>Бонус по группе брендов</th>
                                <th>Бонус за оборот</th>
                                <th>Бонус итого</th>
                              </tr>
                              
                              <?php 
                              
                              while(have_rows('bonuses', 'user_'.$owner)){ 
                              the_row();
                              
                              echo '<tr>';
                              echo '<td>'.get_sub_field('period').'</td>';
                              echo '<td></td>';
                              echo '<td>'.get_sub_field('kb_bonus').' €</td>';
                              echo '<td>'.get_sub_field('brand_bonus').' €</td>';
                              echo '<td>'.get_sub_field('oborot_bonus').' €</td>';
                              echo '<td>'.get_sub_field('i_bonus').' €</td>';
                              
                              echo '</tr>';
                              echo '<tr class="tr_empty"></tr>';
                         
                              } 
                              
                              ?>
                              
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
        <div class="limit-box fl-wrap"></div>
    </div>
    <!--content end-->
</div>
<!-- wrapper end-->
<?php get_footer() ?>