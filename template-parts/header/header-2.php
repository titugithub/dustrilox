<?php

/**
 * Template part for displaying header layout two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dustrilox
 */

// info
$dustrilox_topbar_switch = get_theme_mod('dustrilox_topbar_switch', false);
$dustrilox_mail_id = get_theme_mod('dustrilox_mail_id', __('info@educal.com', 'dustrilox'));
$dustrilox_feed = get_theme_mod('dustrilox_feed', __('Our Company is one of the', 'dustrilox'));
$dustrilox_delivery = get_theme_mod('dustrilox_delivery', __('Deliver the sustainable success', 'dustrilox'));
$dustrilox_delivery_link = get_theme_mod('dustrilox_delivery_link', __('#', 'dustrilox'));
$dustrilox_top_menu = get_theme_mod('dustrilox_top_menu', __('Top Menu Set', 'dustrilox'));
$dustrilox_address = get_theme_mod('dustrilox_address', __('16/A, New York, US', 'dustrilox'));
$dustrilox_address_url = get_theme_mod('dustrilox_address_url', __('https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'dustrilox'));

// contact button
$dustrilox_button_text = get_theme_mod('dustrilox_button_text', __('Make a request', 'dustrilox'));
$dustrilox_button_link = get_theme_mod('dustrilox_button_link', __('#', 'dustrilox'));

$dustrilox_phone_num = get_theme_mod('dustrilox_phone_num', __('01753210774', 'dustrilox'));

// acc button
$dustrilox_acc_button_text = get_theme_mod('dustrilox_acc_button_text', __('Login', 'dustrilox'));
$dustrilox_acc_button_link = get_theme_mod('dustrilox_acc_button_link', __('#', 'dustrilox'));

// header right
$dustrilox_search = get_theme_mod('dustrilox_search', false);
$dustrilox_header_right = get_theme_mod('dustrilox_header_right', false);
$dustrilox_menu_col = $dustrilox_header_right ? 'col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';

?>


<header class="header__area">
   <?php if (!empty($dustrilox_topbar_switch)) :   ?>
      <div class="header__top theme-bg d-none d-lg-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-7 col-md-7">
                  <div class="header__top-info">
                     <?php if (!empty($dustrilox_feed)) :   ?>
                        <p class="header__top-info-text"><span><?php echo esc_html__('Feed:', 'dustrilox') ?> </span><?php echo esc_html($dustrilox_feed) ?></p>
                     <?php endif ?>
                     <p><a href="<?php echo esc_url($dustrilox_delivery_link) ?>">
                           <?php echo esc_html($dustrilox_delivery) ?>
                        </a></p>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-5">
                  <div class="header__top-right">
                     <div class="header__sm-links">
                        <?php echo wp_kses($dustrilox_top_menu, wp_kses_allowed_html('post'))  ?>
                     </div>
                     <div class="header__lang">
                        <select>
                           <option>English</option>
                           <option>Bangla</option>
                           <option>French</option>
                        </select>
                        <div class="nice-select" tabindex="0"><span class="current">Bangla</span>
                           <ul class="list">
                              <li data-value="English" class="option">English</li>
                              <li data-value="Bangla" class="option selected focus">Bangla</li>
                              <li data-value="French" class="option">French</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php endif ?>

   <div class="header__inner grey-bg-5 p-relative z-index-1 d-none d-lg-block">
      <div class="container">
         <div class="row">
            <div class="col-xl-4 col-lg-3">
               <div class="header__logo-overlay">
                  <?php dustrilox_header_logo() ?>
               </div>
            </div>
            <div class="col-xl-8 col-lg-9">
               <div class="header__smcontact">
                  <div class="header__smcontact-list">
                     <div class="sm-clist__icon">
                        <i class="flaticon-location-pin"></i>
                     </div>
                     <div class="sm-clist__text">
                        <h4><a href="<?php echo esc_html($dustrilox_address_url) ?>" target="_blank"><?php echo esc_html($dustrilox_address) ?></a></h4>
                        <span>Contact Us</span>
                     </div>
                  </div>
                  <div class="header__smcontact-list">
                     <div class="sm-clist__icon">
                        <i class="flaticon-telephone-call"></i>
                     </div>
                     <div class="sm-clist__text">
                        <h4><a href="<?php echo esc_html($dustrilox_phone_num) ?>"><?php echo esc_html($dustrilox_phone_num) ?></a></h4>
                        <span>Get Support</span>
                     </div>
                  </div>
                  <div class="header__smcontact-list header__smcontact-list-df">
                     <div class="sm-clist__text sm-clist__text-2">
                        <span>Get A Quote</span>
                        <h4><a href="<?php echo esc_html($dustrilox_button_link)?>"><?php echo esc_html($dustrilox_button_text)?></a></h4>
                     </div>
                     <div class="sm-clist__icon sm-clist__icon-2">
                        <a href="contact.html"> <i class="fal fa-long-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="header-sticky" class="header__bottom-2 black-bg-2">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-10 col-lg-10 col-md-6 col-6">
               <div class="main-menu main-menu-2">
                  <nav id="mobile-menu">
                    <?php dustrilox_header_menu() ?>
                  </nav>
               </div>
               <div class="mobile-logo d-lg-none">
                  <a href="index.html"><img src="assets/img/logo/logo-white.png" alt="logo"></a>
               </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
               <div class="header__sm-action">
                  <div class="header__sm-action-item right-border">
                     <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a>
                  </div>
                  <div class="header__sm-action-item right-border">
                     <a href="javascript:void(0)" data-bs-toggle="modal" class="search" data-bs-target="#search-modal"><i class="fal fa-search"></i></a>
                  </div>
                  <div class="header__sm-action-item d-none">
                     <a href="#"><i class="fa-light fa-user"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>


<header class="d-none">
   <div id="header-sticky" class="header__area header__transparent">
      <div class="header__bottom">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
                  <div class="header__bottom-left d-flex align-items-center">
                     <div class="logo">
                        <?php dustrilox_header_logo(); ?>
                     </div>
                     <div class="main-menu main-menu-2 main-menu-border ml-30 pl-30">
                        <nav id="mobile-menu">
                           <?php dustrilox_header_menu(); ?>
                        </nav>
                     </div>
                  </div>
               </div>
               <?php if (!empty($dustrilox_header_right)) : ?>
                  <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                     <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                        <?php if (!empty($dustrilox_acc_button_link)) : ?>
                           <div class="header__action d-none d-xl-block">
                              <ul>
                                 <li>
                                    <a href="<?php echo esc_html($dustrilox_acc_button_link); ?>">
                                       <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.1466 8.96416C7.05493 8.95499 6.94493 8.95499 6.8441 8.96416C4.66243 8.89083 2.92993 7.10333 2.92993 4.90333C2.92993 2.65749 4.74493 0.833328 6.99993 0.833328C9.24576 0.833328 11.0699 2.65749 11.0699 4.90333C11.0608 7.10333 9.32826 8.89083 7.1466 8.96416Z" stroke="#0C140F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M2.56341 12.3467C0.345075 13.8317 0.345075 16.2517 2.56341 17.7275C5.08424 19.4142 9.21841 19.4142 11.7392 17.7275C13.9576 16.2425 13.9576 13.8225 11.7392 12.3467C9.22758 10.6692 5.09341 10.6692 2.56341 12.3467Z" stroke="#0C140F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        <?php endif; ?>

                        <?php if (!empty($dustrilox_search)) : ?>
                           <div class="header__search header__search-2 d-none d-xl-block">
                              <form action="<?php print esc_url(home_url('/')); ?>">
                                 <div class="header__search-input">
                                    <input type="text" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search...', 'dustrilox'); ?>">
                                    <button class="header__search-btn" type="submit">
                                       <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z" stroke="#3E8454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                          <path d="M17 17L13.1333 13.1333" stroke="#3E8454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </button>
                                 </div>
                              </form>
                           </div>
                        <?php endif; ?>
                        <div class="header__hamburger ml-50 d-xl-none">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal" class="hamurger-btn">
                              <span></span>
                              <span></span>
                              <span></span>
                           </button>
                        </div>
                     </div>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</header>


<?php get_template_part('template-parts/header/header-side-info'); ?>