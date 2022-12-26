<?php

/**
 * Template Name: Course V1
 * @package rasalina
 */

get_header();


?>

<main>

   <!-- course area start -->
   <section class="course__area pt-115 pb-90 grey-bg-3">
      <div class="container">
         <div class="course__tab-inner white-bg mb-50">
            <div class="row align-items-center">
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="course__tab-wrapper d-flex align-items-center">
                     <div class="course__tab-btn">
                        <ul class="nav nav-tabs" id="courseTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true">
                                 <svg class="grid" viewBox="0 0 24 24">
                                    <rect x="3" y="3" class="st0" width="7" height="7" />
                                    <rect x="14" y="3" class="st0" width="7" height="7" />
                                    <rect x="14" y="14" class="st0" width="7" height="7" />
                                    <rect x="3" y="14" class="st0" width="7" height="7" />
                                 </svg>
                              </button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link list" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false">
                                 <svg class="list" viewBox="0 0 512 512">
                                    <g id="Layer_2_1_">
                                       <path class="st0" d="M448,69H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,69,448,69z" />
                                       <circle class="st0" cx="64" cy="100" r="31" />
                                       <path class="st0" d="M448,225H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,225,448,225z" />
                                       <circle class="st0" cx="64" cy="256" r="31" />
                                       <path class="st0" d="M448,381H192c-17.7,0-32,13.9-32,31s14.3,31,32,31h256c17.7,0,32-13.9,32-31S465.7,381,448,381z" />
                                       <circle class="st0" cx="64" cy="412" r="31" />
                                    </g>
                                 </svg>
                              </button>
                           </li>
                        </ul>
                     </div>
                     <div class="course__view">
                        <h4>Showing 1 - 6 of 84</h4>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="course__sort d-flex justify-content-sm-end">
                     <div class="course__sort-inner">
                        <select>
                           <option>Default</option>
                           <option>Option 1</option>
                           <option>Option 2</option>
                           <option>Option 3</option>
                           <option>Option 4</option>
                           <option>Option 5</option>
                           <option>Option 6</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-12">
               <div class="course__tab-conent">
                  <div class="tab-content" id="courseTabContent">
                     <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="row">
                           <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                              <div class="course__item white-bg transition-3 mb-30">
                                 <div class="course__thumb w-img fix">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-1.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__content p-relative">
                                    <div class="course__price">
                                       <span>$74</span>
                                    </div>
                                    <div class="course__tag">
                                       <a href="#">Digital</a>
                                    </div>
                                    <h3 class="course__title">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">University seminar series global.</a>
                                    </h3>
                                    <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                    <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                       <div class="course__tutor">
                                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">Brian Cumin</a>
                                       </div>
                                       <div class="course__lesson">
                                          <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                             12 Lessons
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                              <div class="course__item white-bg transition-3 mb-30">
                                 <div class="course__thumb w-img fix">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-2.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__content p-relative">
                                    <div class="course__price">
                                       <span>Free</span>
                                    </div>
                                    <div class="course__tag">
                                       <a href="#">UX Design</a>
                                    </div>
                                    <h3 class="course__title">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">Web coding and apache basics</a>
                                    </h3>
                                    <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                    <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                       <div class="course__tutor">
                                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-2.jpg" alt="img">Jack Morkel</a>
                                       </div>
                                       <div class="course__lesson">
                                          <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                             12 Lessons
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                              <div class="course__item white-bg transition-3 mb-30">
                                 <div class="course__thumb w-img fix">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-3.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__content p-relative">
                                    <div class="course__price">
                                       <span>$52</span>
                                    </div>
                                    <div class="course__tag">
                                       <a href="#">Economics</a>
                                    </div>
                                    <h3 class="course__title">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">Economics historical development</a>
                                    </h3>
                                    <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                    <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                       <div class="course__tutor">
                                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-3.jpg" alt="img">Hilary Ouse</a>
                                       </div>
                                       <div class="course__lesson">
                                          <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                             8 Lessons
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                              <div class="course__item white-bg transition-3 mb-30">
                                 <div class="course__thumb w-img fix">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-4.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__content p-relative">
                                    <div class="course__price">
                                       <span>Free</span>
                                    </div>
                                    <div class="course__tag">
                                       <a href="#">Beginner</a>
                                    </div>
                                    <h3 class="course__title">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">Learn algebra the easy way!</a>
                                    </h3>
                                    <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                    <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                       <div class="course__tutor">
                                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-4.jpg" alt="img">Phanta Bear</a>
                                       </div>
                                       <div class="course__lesson">
                                          <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                             3 Lessons
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                              <div class="course__item white-bg transition-3 mb-30">
                                 <div class="course__thumb w-img fix">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-5.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__content p-relative">
                                    <div class="course__price">
                                       <span>$104</span>
                                    </div>
                                    <div class="course__tag">
                                       <a href="#">Economics</a>
                                    </div>
                                    <h3 class="course__title">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">Angular the complete guide</a>
                                    </h3>
                                    <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                    <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                       <div class="course__tutor">
                                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-5.jpg" alt="img">Hilary Ouse</a>
                                       </div>
                                       <div class="course__lesson">
                                          <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                             8 Lessons
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                              <div class="course__item white-bg transition-3 mb-30">
                                 <div class="course__thumb w-img fix">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-6.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__content p-relative">
                                    <div class="course__price">
                                       <span>$32</span>
                                    </div>
                                    <div class="course__tag">
                                       <a href="#">IT Specialist</a>
                                    </div>
                                    <h3 class="course__title">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">Intelligence analyst course 2022</a>
                                    </h3>
                                    <p>A beginner’s guide to designing or renovating interior spaces that pop.</p>

                                    <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                       <div class="course__tutor">
                                          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-6.jpg" alt="img">Oliver Porter</a>
                                       </div>
                                       <div class="course__lesson">
                                          <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                             3 Lessons
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="row">
                           <div class="col-xxl-12">
                              <div class="course__item course__item-list white-bg mb-30 fix">
                                 <div class="row gx-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/list/course-1.jpg" alt="img">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                       <div class="course__right p-relative">
                                          <div class="course__content p-relative">
                                             <div class="course__tag">
                                                <a href="#">Digital</a>
                                             </div>
                                             <h3 class="course__title">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/">Non-Degree Seeking Online Design for Learning Environments.</a>
                                             </h3>
                                             <div class="course__summary">
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                             </div>

                                             <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                <div class="course__tutor">
                                                   <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">Brian Cumin</a>
                                                </div>
                                                <div class="course__lesson">
                                                   <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                      12 Lessons
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                             <div class="course__price-2">
                                                <span>$74</span>
                                             </div>
                                             <div class="course__btn">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/" class="link-btn-2">
                                                   Know Details
                                                   <i class="far fa-arrow-right"></i>
                                                   <i class="far fa-arrow-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__item course__item-list white-bg mb-30 fix">
                                 <div class="row gx-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/list/course-2.jpg" alt="img">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                       <div class="course__right p-relative">
                                          <div class="course__content p-relative">
                                             <div class="course__tag">
                                                <a href="#">Beginner</a>
                                             </div>
                                             <h3 class="course__title">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/">Language Assessment in the Classroom Course.</a>
                                             </h3>
                                             <div class="course__summary">
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                             </div>

                                             <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                <div class="course__tutor">
                                                   <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">Brian Cumin</a>
                                                </div>
                                                <div class="course__lesson">
                                                   <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                      12 Lessons
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                             <div class="course__price-2">
                                                <span>$59</span>
                                             </div>
                                             <div class="course__btn">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/" class="link-btn-2">
                                                   Know Details
                                                   <i class="far fa-arrow-right"></i>
                                                   <i class="far fa-arrow-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__item course__item-list white-bg mb-30 fix">
                                 <div class="row gx-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/list/course-3.jpg" alt="img">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                       <div class="course__right p-relative">
                                          <div class="course__content p-relative">
                                             <div class="course__tag">
                                                <a href="#">Design</a>
                                             </div>
                                             <h3 class="course__title">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/">A framework for keeping up with an ever-evolving profession.</a>
                                             </h3>
                                             <div class="course__summary">
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                             </div>

                                             <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                <div class="course__tutor">
                                                   <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">Brian Cumin</a>
                                                </div>
                                                <div class="course__lesson">
                                                   <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                      12 Lessons
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                             <div class="course__price-2">
                                                <span>$85</span>
                                             </div>
                                             <div class="course__btn">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/" class="link-btn-2">
                                                   Know Details
                                                   <i class="far fa-arrow-right"></i>
                                                   <i class="far fa-arrow-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__item course__item-list white-bg mb-30 fix">
                                 <div class="row gx-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/list/course-4.jpg" alt="img">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                       <div class="course__right p-relative">
                                          <div class="course__content p-relative">
                                             <div class="course__tag">
                                                <a href="#">coding</a>
                                             </div>
                                             <h3 class="course__title">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/">Expertise in a single subject or across a spectrum.</a>
                                             </h3>
                                             <div class="course__summary">
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                             </div>

                                             <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                <div class="course__tutor">
                                                   <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">Brian Cumin</a>
                                                </div>
                                                <div class="course__lesson">
                                                   <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                      12 Lessons
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                             <div class="course__price-2">
                                                <span>$140</span>
                                             </div>
                                             <div class="course__btn">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/" class="link-btn-2">
                                                   Know Details
                                                   <i class="far fa-arrow-right"></i>
                                                   <i class="far fa-arrow-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__item course__item-list white-bg mb-30 fix">
                                 <div class="row gx-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/list/course-5.jpg" alt="img">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                       <div class="course__right p-relative">
                                          <div class="course__content p-relative">
                                             <div class="course__tag">
                                                <a href="#">UI/UX Design</a>
                                             </div>
                                             <h3 class="course__title">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/">Differentiation for Learning Course - National Learning Centre</a>
                                             </h3>
                                             <div class="course__summary">
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                             </div>

                                             <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                <div class="course__tutor">
                                                   <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">Brian Cumin</a>
                                                </div>
                                                <div class="course__lesson">
                                                   <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                      12 Lessons
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                             <div class="course__price-2">
                                                <span>$196</span>
                                             </div>
                                             <div class="course__btn">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/" class="link-btn-2">
                                                   Know Details
                                                   <i class="far fa-arrow-right"></i>
                                                   <i class="far fa-arrow-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__item course__item-list white-bg mb-30 fix">
                                 <div class="row gx-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                                       <div class="course__thumb w-img p-relative fix">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/list/course-6.jpg" alt="img">
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                                       <div class="course__right p-relative">
                                          <div class="course__content p-relative">
                                             <div class="course__tag">
                                                <a href="#">Medical</a>
                                             </div>
                                             <h3 class="course__title">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/">Teacher Development: Health Curriculum Course.</a>
                                             </h3>
                                             <div class="course__summary">
                                                <p>Communia virtutes tutiorem declarat stoicorum sanabat oblivisci nostris tamquam iucunditatem</p>
                                             </div>

                                             <div class="course__bottom d-sm-flex align-items-center justify-content-between">
                                                <div class="course__tutor">
                                                   <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">Brian Cumin</a>
                                                </div>
                                                <div class="course__lesson">
                                                   <a href="#"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M1 12.2V4.49999C1 1.7 1.70588 1 4.52941 1H9.47059C12.2941 1 13 1.7 13 4.49999V11.5C13 11.598 13 11.696 12.9929 11.794" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M3.01176 10.0999H13V12.5498C13 13.9008 11.8918 14.9998 10.5294 14.9998H3.47059C2.10824 14.9998 1 13.9008 1 12.5498V12.0948C1 10.9959 1.90353 10.0999 3.01176 10.0999Z" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 4.5H9.82353" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                         <path d="M4.17647 6.94995H7.70589" stroke="#49535B" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                      12 Lessons
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="course__content-bottom d-flex justify-content-between align-items-center">
                                             <div class="course__price-2">
                                                <span>$225</span>
                                             </div>
                                             <div class="course__btn">
                                                <a href="https://themepure.net/wp/dustrilox/course-details/" class="link-btn-2">
                                                   Know Details
                                                   <i class="far fa-arrow-right"></i>
                                                   <i class="far fa-arrow-right"></i>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-12">
               <div class="basic-pagination">
                  <nav>
                     <ul>
                        <li>
                           <a href="https://themepure.net/wp/dustrilox/course-style-01/">
                              <i class="far fa-angle-left"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://themepure.net/wp/dustrilox/course-style-01/">1</a>
                        </li>
                        <li>
                           <span class="current">2</span>
                        </li>
                        <li>
                           <a href="https://themepure.net/wp/dustrilox/course-style-01/">3</a>
                        </li>
                        <li>
                           <a href="https://themepure.net/wp/dustrilox/course-style-01/">
                              <i class="far fa-angle-right"></i>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- course area end -->


</main>

<?php
get_footer();
