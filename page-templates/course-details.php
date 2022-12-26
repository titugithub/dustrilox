<?php

/**
 * Template Name: Course Details
 * @package rasalina
 */

get_header();


?>

<main>


   <!-- course area start -->
   <section class="course__area pt-115 pb-90">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="course__wrapper">
                  <div class="page__title-content mb-25">
                     <span class="breadcrumb__title-pre">Development</span>
                     <h5 class="breadcrumb__title-2">The business Intelligence analyst Course 2022</h5>
                  </div>
                  <div class="course__meta-2 d-sm-flex align-items-center mb-30">
                     <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                        <div class="course__teacher-thumb-3 mr-15">
                           <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">
                        </div>
                        <div class="course__teacher-info-3">
                           <h5>Teacher</h5>
                           <p><a href="#">Elon Gated</a></p>
                        </div>
                     </div>
                     <div class="course__update mr-80 mb-30">
                        <h5>Last Update:</h5>
                        <p>July 24, 2022</p>
                     </div>
                     <div class="course__rating-2 mb-30">
                        <h5>Review:</h5>
                        <div class="course__rating-inner d-flex align-items-center">
                           <ul>
                              <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                              <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                              <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                              <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                              <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                           </ul>
                           <p>4.5</p>
                        </div>
                     </div>
                  </div>
                  <div class="course__img w-img mb-30">
                     <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/details/course-details-1.jpg" alt="img">
                  </div>
                  <div class="course__tab-2 mb-45">
                     <ul class="nav nav-tabs" id="courseTab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"><i class="fa-regular fa-medal"></i> <span>Discription</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"><i class="fa-regular fa-book-blank"></i> <span>Curriculum</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="fa-regular fa-star"></i> <span>Reviews</span> </button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span>Members</span> </button>
                        </li>
                     </ul>
                  </div>
                  <div class="course__tab-content mb-95">
                     <div class="tab-content" id="courseTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                           <div class="course__description">
                              <h3>Course Overview</h3>
                              <p>Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how's your father David skive off sloshed, don't get shirty with me chip shop vagabond crikey bugger Queen's English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it's your round don't get shirty with me down the pub well. Give us a bell bits and bobs Charles he lost his bottle super my lady cras starkers bite your arm off Queen's English, pardon me horse play Elizabeth a blinding shot chinwag knees up do one David, blag cup of tea Eaton so I said bleeding haggle James Bond cup of char. Gosh William ummm I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do with me nancy boy show off show off pick your nose and blow off spiffing good time lavatory me old mucker, chimney pot what a load of rubbish boot squiffy lost the plot brolly wellies excuse my french.</p>

                              <div class="course__tag-4 mb-35 mt-35">
                                 <i class="fal fa-tag"></i>
                                 <a href="#">Big data,</a>
                                 <a href="#">Data analysis,</a>
                                 <a href="#">Data modeling</a>
                              </div>
                              <div class="course__description-list mb-45">
                                 <h4>What is the Target Audience?</h4>
                                 <ul>
                                    <li> <i class="fa-solid fa-check"></i> Business's managers, leaders</li>
                                    <li> <i class="fa-solid fa-check"></i> Downloadable lectures, code and design assets for all projects</li>
                                    <li> <i class="fa-solid fa-check"></i> Anyone who is finding a chance to get the promotion</li>
                                 </ul>
                              </div>
                              <div class="course__instructor mb-45">
                                 <h3>Other Instructors</h3>
                                 <div class="course__instructor-wrapper d-md-flex align-items-center">
                                    <div class="course__instructor-item d-flex align-items-center mr-70">
                                       <div class="course__instructor-thumb mr-20">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-4.jpg" alt="img">
                                       </div>
                                       <div class="course__instructor-content">
                                          <h3>Eleanor Fant</h3>
                                          <p>Instructor</p>
                                       </div>
                                    </div>
                                    <div class="course__instructor-item d-flex align-items-center mr-70">
                                       <div class="course__instructor-thumb mr-20">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-3.jpg" alt="img">
                                       </div>
                                       <div class="course__instructor-content">
                                          <h3>Lauren Stamps</h3>
                                          <p>Teacher</p>
                                       </div>
                                    </div>
                                    <div class="course__instructor-item d-flex align-items-center mr-70">
                                       <div class="course__instructor-thumb mr-20">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-2.jpg" alt="img">
                                       </div>
                                       <div class="course__instructor-content">
                                          <h3>Jonquil Von</h3>
                                          <p>Associate</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                           <div class="course__curriculum">
                              <div class="accordion" id="course__accordion">
                                 <div class="accordion-item mb-50">
                                    <h2 class="accordion-header" id="week-01">
                                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-01-content" aria-expanded="true" aria-controls="week-01-content">
                                          Week 01
                                       </button>
                                    </h2>
                                    <div id="week-01-content" class="accordion-collapse collapse show" aria-labelledby="week-01" data-bs-parent="#course__accordion">
                                       <div class="accordion-body">
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg class="document" viewBox="0 0 24 24">
                                                   <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                   <polyline class="st0" points="14,2 14,8 20,8 " />
                                                   <line class="st0" x1="16" y1="13" x2="8" y2="13" />
                                                   <line class="st0" x1="16" y1="17" x2="8" y2="17" />
                                                   <polyline class="st0" points="10,9 9,9 8,9 " />
                                                </svg>
                                                <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                                <span class="question">2 questions</span>
                                             </div>
                                          </div>
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg viewBox="0 0 24 24">
                                                   <polygon class="st0" points="23,7 16,12 23,17 " />
                                                   <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z" />
                                                </svg>
                                                <h3> <span>Video: </span> Greetings and introduction</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                             </div>
                                          </div>
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg viewBox="0 0 16 16">

                                                   <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4" />
                                                   <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z" />
                                                </svg>
                                                <h3> <span>Audio:</span> Interactive lesson</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                                <span class="question">3 questions</span>
                                             </div>
                                          </div>
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg class="document" viewBox="0 0 24 24">
                                                   <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                   <polyline class="st0" points="14,2 14,8 20,8 " />
                                                   <line class="st0" x1="16" y1="13" x2="8" y2="13" />
                                                   <line class="st0" x1="16" y1="17" x2="8" y2="17" />
                                                   <polyline class="st0" points="10,9 9,9 8,9 " />
                                                </svg>
                                                <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion" id="course__accordion-2">
                                 <div class="accordion-item mb-50">
                                    <h2 class="accordion-header" id="week-02">
                                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week-02-content" aria-expanded="true" aria-controls="week-02-content">
                                          Week 02
                                       </button>
                                    </h2>
                                    <div id="week-02-content" class="accordion-collapse  collapse show" aria-labelledby="week-02" data-bs-parent="#course__accordion-2">
                                       <div class="accordion-body">
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg class="document" viewBox="0 0 24 24">
                                                   <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                   <polyline class="st0" points="14,2 14,8 20,8 " />
                                                   <line class="st0" x1="16" y1="13" x2="8" y2="13" />
                                                   <line class="st0" x1="16" y1="17" x2="8" y2="17" />
                                                   <polyline class="st0" points="10,9 9,9 8,9 " />
                                                </svg>
                                                <h3> <span>Reading:</span> Ut enim ad minim veniam</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 14 minutes</span>
                                             </div>
                                          </div>
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg viewBox="0 0 24 24">
                                                   <polygon class="st0" points="23,7 16,12 23,17 " />
                                                   <path class="st0" d="M3,5h11c1.1,0,2,0.9,2,2v10c0,1.1-0.9,2-2,2H3c-1.1,0-2-0.9-2-2V7C1,5.9,1.9,5,3,5z" />
                                                </svg>
                                                <h3> <span>Video: </span> Greetings and introduction</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 15 minutes</span>
                                             </div>
                                          </div>
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg viewBox="0 0 16 16">
                                                   <path class="st0" d="M2,12V8c0-3.3,2.9-6,6.4-6s6.4,2.7,6.4,6v4" />
                                                   <path class="st0" d="M14.8,12.7c0,0.7-0.6,1.3-1.4,1.3h-0.7c-0.8,0-1.4-0.6-1.4-1.3v-2c0-0.7,0.6-1.3,1.4-1.3h2.1V12.7z M2,12.7  C2,13.4,2.6,14,3.3,14H4c0.7,0,1.3-0.6,1.3-1.3v-2c0-0.7-0.6-1.3-1.3-1.3H2V12.7z" />
                                                </svg>
                                                <h3> <span>Audio:</span> Interactive lesson</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 7 minutes</span>
                                                <span class="question">2 questions</span>
                                             </div>
                                          </div>
                                          <div class="course__curriculum-content d-sm-flex justify-content-between align-items-center">
                                             <div class="course__curriculum-info">
                                                <svg class="document" viewBox="0 0 24 24">
                                                   <path class="st0" d="M14,2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8L14,2z" />
                                                   <polyline class="st0" points="14,2 14,8 20,8 " />
                                                   <line class="st0" x1="16" y1="13" x2="8" y2="13" />
                                                   <line class="st0" x1="16" y1="17" x2="8" y2="17" />
                                                   <polyline class="st0" points="10,9 9,9 8,9 " />
                                                </svg>
                                                <h3> <span>Reading: </span> Ut enim ad minim veniam</h3>
                                             </div>
                                             <div class="course__curriculum-meta">
                                                <span class="time"> <i class="icon_clock_alt"></i> 22 minutes</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                           <div class="course__review">
                              <h3>Reviews</h3>
                              <p>Gosh william I'm telling crikey burke I don't want no agro A bit of how's your father bugger all mate off his nut that, what a plonker cuppa owt to do</p>

                              <div class="course__review-rating mb-50">
                                 <div class="row g-0">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                       <div class="course__review-rating-info grey-bg-2 text-center">
                                          <h5>5</h5>
                                          <ul>
                                             <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                             <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                             <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                             <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                             <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          </ul>
                                          <p>4 Ratings</p>
                                       </div>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                       <div class="course__review-details grey-bg-2">
                                          <h5>Detailed Rating</h5>
                                          <div class="course__review-content mb-20">
                                             <div class="course__review-item d-flex align-items-center justify-content-between">
                                                <div class="course__review-text">
                                                   <span>5 stars</span>
                                                </div>
                                                <div class="course__review-progress">
                                                   <div class="single-progress" data-width="100%"></div>
                                                </div>
                                                <div class="course__review-percent">
                                                   <h5>100%</h5>
                                                </div>
                                             </div>
                                             <div class="course__review-item d-flex align-items-center justify-content-between">
                                                <div class="course__review-text">
                                                   <span>4 stars</span>
                                                </div>
                                                <div class="course__review-progress">
                                                   <div class="single-progress" data-width="30%"></div>
                                                </div>
                                                <div class="course__review-percent">
                                                   <h5>30%</h5>
                                                </div>
                                             </div>
                                             <div class="course__review-item d-flex align-items-center justify-content-between">
                                                <div class="course__review-text">
                                                   <span>3 stars</span>
                                                </div>
                                                <div class="course__review-progress">
                                                   <div class="single-progress" data-width="0%"></div>
                                                </div>
                                                <div class="course__review-percent">
                                                   <h5>0%</h5>
                                                </div>
                                             </div>
                                             <div class="course__review-item d-flex align-items-center justify-content-between">
                                                <div class="course__review-text">
                                                   <span>2 stars</span>
                                                </div>
                                                <div class="course__review-progress">
                                                   <div class="single-progress" data-width="0%"></div>
                                                </div>
                                                <div class="course__review-percent">
                                                   <h5>0%</h5>
                                                </div>
                                             </div>
                                             <div class="course__review-item d-flex align-items-center justify-content-between">
                                                <div class="course__review-text">
                                                   <span>1 stars</span>
                                                </div>
                                                <div class="course__review-progress">
                                                   <div class="single-progress" data-width="0%"></div>
                                                </div>
                                                <div class="course__review-percent">
                                                   <h5>0%</h5>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__comment mb-75">
                                 <h3 class="course__comment-title">2 Comments</h3>

                                 <ul>
                                    <li>
                                       <div class="course__comment-box ">
                                          <div class="course__comment-thumb float-start">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/comment/course-comment-1.jpg" alt="img">
                                          </div>
                                          <div class="course__comment-content">
                                             <div class="course__comment-wrapper ml-70 fix">
                                                <div class="course__comment-info float-start">
                                                   <h4>Eleanor Fant</h4>
                                                   <span>July 14, 2022</span>
                                                </div>
                                                <div class="course__comment-rating float-start float-sm-end">
                                                   <ul>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="course__comment-text ml-70">
                                                <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="children">
                                       <div class="course__comment-box ">
                                          <div class="course__comment-thumb float-start">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/comment/course-comment-1.jpg" alt="img">
                                          </div>
                                          <div class="course__comment-content">
                                             <div class="course__comment-wrapper ml-70 fix">
                                                <div class="course__comment-info float-start">
                                                   <h4>Eleanor Fant</h4>
                                                   <span>July 14, 2022</span>
                                                </div>
                                                <div class="course__comment-rating float-start float-sm-end">
                                                   <ul>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="course__comment-text ml-70">
                                                <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="course__comment-box ">
                                          <div class="course__comment-thumb float-start">
                                             <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/comment/course-comment-2.jpg" alt="img">
                                          </div>
                                          <div class="course__comment-content">
                                             <div class="course__comment-wrapper ml-70 fix">
                                                <div class="course__comment-info float-start">
                                                   <h4>Shahnewaz Sakil</h4>
                                                   <span>July 17, 2022</span>
                                                </div>
                                                <div class="course__comment-rating float-start float-sm-end">
                                                   <ul>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="course__comment-text ml-70">
                                                <p>David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="course__form">
                                 <h3 class="course__form-title">Write a Review</h3>
                                 <div class="course__form-inner">
                                    <form action="#">
                                       <div class="row">
                                          <div class="col-xxl-6">
                                             <div class="course__form-input">
                                                <input type="text" placeholder="Your Name">
                                             </div>
                                          </div>
                                          <div class="col-xxl-6">
                                             <div class="course__form-input">
                                                <input type="email" placeholder="Your Email">
                                             </div>
                                          </div>
                                          <div class="col-xxl-12">
                                             <div class="course__form-input">
                                                <input type="text" placeholder="Review Title">
                                             </div>
                                          </div>
                                          <div class="col-xxl-12">
                                             <div class="course__form-input">
                                                <div class="course__form-rating">
                                                   <span>Rating : </span>
                                                   <ul>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#" class="no-rating"> <i class="fa-solid fa-star"></i> </a></li>
                                                      <li><a href="#" class="no-rating"> <i class="fa-solid fa-star"></i> </a></li>
                                                   </ul>
                                                </div>
                                                <textarea placeholder="Review Summary"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-xxl-12">
                                             <div class="course__form-btn mt-10 mb-55">
                                                <button type="submit" class="tp-btn">Submit Review</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
                           <div class="course__member mb-45">
                              <div class="course__member-item">
                                 <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                       <div class="course__member-thumb d-flex align-items-center">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/instructor/course-instructor-1.jpg" alt="img">
                                          <div class="course__member-name ml-20">
                                             <h5>Shahnewaz Sakil</h5>
                                             <span>Engineer</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>07</h5>
                                          <span>Courses</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>05</h5>
                                          <span>Reviw</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>3.00</h5>
                                          <span>Rating</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__member-item">
                                 <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6">
                                       <div class="course__member-thumb d-flex align-items-center">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/instructor/course-instructor-2.jpg" alt="img">
                                          <div class="course__member-name ml-20">
                                             <h5>Lauren Stamps</h5>
                                             <span>Teacher</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>05</h5>
                                          <span>Courses</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>03</h5>
                                          <span>Reviw</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>3.00</h5>
                                          <span>Rating</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="course__member-item">
                                 <div class="row align-items-center">
                                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 ">
                                       <div class="course__member-thumb d-flex align-items-center">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/instructor/course-instructor-3.jpg" alt="img">
                                          <div class="course__member-name ml-20">
                                             <h5>Jonquil Von</h5>
                                             <span>Associate</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>09</h5>
                                          <span>Courses</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>07</h5>
                                          <span>Reviw</span>
                                       </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-4">
                                       <div class="course__member-info pl-20">
                                          <h5>4.00</h5>
                                          <span>Rating</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="course__share">
                           <h3>Share :</h3>
                           <ul>
                              <li><a href="#" class="fb"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#" class="tw"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#" class="pin"><i class="fa-brands fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="course__related">
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="section__title-wrapper mb-40">
                              <h2 class="section__title">Related Course</h2>
                              <p>You don't have to struggle alone, you've got our assistance and help.</p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="course__slider swiper-container pb-60">
                              <div class="swiper-wrapper">
                                 <div class="course__item-2 swiper-slide transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/2/course-1.jpg" alt="img">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2">
                                             <a href="#">Design Thinking</a>
                                          </div>
                                          <div class="course__price-2">
                                             <span>$136</span>
                                          </div>
                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">Mechanical Engineering and Electrical Engineering Explained.</a>
                                       </h3>
                                       <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                                          <div class="course__action">
                                             <ul>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>4.2k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>44k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>5.0</span>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="course__tutor-2">
                                             <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-1.jpg" alt="img">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="course__item-2 swiper-slide transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/2/course-2.jpg" alt="img">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 pink-bg">
                                             <a href="#">Mechanical</a>
                                          </div>
                                          <div class="course__price-2">
                                             <span>$210</span>
                                          </div>
                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">The Challenge Of Global Learning In Public Education.</a>
                                       </h3>
                                       <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                                          <div class="course__action">
                                             <ul>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>3.3k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>56k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>4.5</span>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="course__tutor-2">
                                             <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-2.jpg" alt="img">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="course__item-2 swiper-slide transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/2/course-3.jpg" alt="img">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 violet-bg">
                                             <a href="#">Design Thinking</a>
                                          </div>
                                          <div class="course__price-2">
                                             <span>$136</span>
                                          </div>
                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">Mechanical Engineering and Electrical Engineering Explained.</a>
                                       </h3>
                                       <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                                          <div class="course__action">
                                             <ul>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>3.7k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>36k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>2.5</span>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="course__tutor-2">
                                             <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-3.jpg" alt="img">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="course__item-2 swiper-slide transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/2/course-4.jpg" alt="img">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 yellow-bg">
                                             <a href="#">Photography</a>
                                          </div>
                                          <div class="course__price-2">
                                             <span>$136</span>
                                          </div>
                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">Statistics Data Scince and Business Analysis.</a>
                                       </h3>
                                       <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                                          <div class="course__action">
                                             <ul>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>2.3k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>66k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>3.5</span>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="course__tutor-2">
                                             <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-4.jpg" alt="img">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="course__item-2 swiper-slide transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/2/course-5.jpg" alt="img">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 blue-bg-2">
                                             <a href="#">Python</a>
                                          </div>
                                          <div class="course__price-2">
                                             <span>$136</span>
                                          </div>
                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">Machine Learning A-Z: Hands-On Python and java.</a>
                                       </h3>
                                       <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                                          <div class="course__action">
                                             <ul>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>1.2k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>32k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>4.7</span>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="course__tutor-2">
                                             <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-5.jpg" alt="img">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="course__item-2 swiper-slide transition-3 white-bg mb-30 fix">
                                    <div class="course__thumb-2 w-img fix">
                                       <a href="https://themepure.net/wp/dustrilox/course-details/">
                                          <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/2/course-6.jpg" alt="img">
                                       </a>
                                    </div>
                                    <div class="course__content-2">
                                       <div class="course__top-2 d-flex align-items-center justify-content-between">
                                          <div class="course__tag-2 purple-bg">
                                             <a href="#">Design Thinking</a>
                                          </div>
                                          <div class="course__price-2">
                                             <span>$136</span>
                                          </div>
                                       </div>
                                       <h3 class="course__title-2">
                                          <a href="https://themepure.net/wp/dustrilox/course-details/">The most complete Design Thinking Course on the Market..</a>
                                       </h3>
                                       <div class="course__bottom-2 d-flex align-items-center justify-content-between">
                                          <div class="course__action">
                                             <ul>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001" stroke="#5F6160" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>3.0k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M9.01232 5.95416C9.01232 7.06709 8.11298 7.96642 7.00006 7.96642C5.88713 7.96642 4.98779 7.06709 4.98779 5.95416C4.98779 4.84123 5.88713 3.94189 7.00006 3.94189C8.11298 3.94189 9.01232 4.84123 9.01232 5.95416Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                               <path d="M7 10.6026C8.98416 10.6026 10.8334 9.43342 12.1206 7.40991C12.6265 6.61737 12.6265 5.28523 12.1206 4.49269C10.8334 2.46919 8.98416 1.30005 7 1.30005C5.01584 1.30005 3.16658 2.46919 1.87941 4.49269C1.37353 5.28523 1.37353 6.61737 1.87941 7.40991C3.16658 9.43342 5.01584 10.6026 7 10.6026Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>26k</span>
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="course__action-item d-flex align-items-center">
                                                      <div class="course__action-icon mr-5">
                                                         <span>
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z" stroke="#5F6160" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                         </span>
                                                      </div>
                                                      <div class="course__action-content">
                                                         <span>4.1</span>
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="course__tutor-2">
                                             <a href="#">
                                                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/tutor/course-tutor-6.jpg" alt="img">
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Add Pagination -->
                              <div class="swiper-pagination"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <div class="course__sidebar pl-70 p-relative">
                  <div class="course__shape">
                     <img class="course-dot" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-dot.png" alt="img">
                  </div>
                  <div class="course__sidebar-widget-2 white-bg mb-20">
                     <div class="course__video">
                        <div class="course__video-thumb w-img mb-25">
                           <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/video/course-video.jpg" alt="img">
                           <div class="course__video-play">
                              <a href="https://www.youtube.com/watch?v=Zv11L-ZfrSg" class="play-btn popup-video"> <i class="fas fa-play"></i> </a>
                           </div>
                        </div>
                        <div class="course__video-meta mb-25 d-flex align-items-center justify-content-between">
                           <div class="course__video-price">
                              <h5>$74.<span>00</span> </h5>
                              <h5 class="old-price">$129.00</h5>
                           </div>
                           <div class="course__video-discount">
                              <span>68% OFF</span>
                           </div>
                        </div>
                        <div class="course__video-content mb-35">
                           <ul>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                       <path class="st0" d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                                       <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Instructor :</span> Eleanor Fant</h5>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">

                                       <path class="st0" d="M4,19.5C4,18.1,5.1,17,6.5,17H20" />
                                       <path class="st0" d="M6.5,2H20v20H6.5C5.1,22,4,20.9,4,19.5v-15C4,3.1,5.1,2,6.5,2z" />
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Lectures :</span>14</h5>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                       <circle class="st0" cx="8" cy="8" r="6.7" />
                                       <polyline class="st0" points="8,4 8,8 10.7,9.3 " />
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Duration :</span>6 weeks</h5>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg>
                                       <path class="st0" d="M13.3,14v-1.3c0-1.5-1.2-2.7-2.7-2.7H5.3c-1.5,0-2.7,1.2-2.7,2.7V14" />
                                       <circle class="st0" cx="8" cy="4.7" r="2.7" />
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Enrolled :</span>20 students</h5>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="course__video-icon">
                                    <svg>
                                       <circle class="st0" cx="8" cy="8" r="6.7" />
                                       <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8" />
                                       <path class="st0" d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z" />
                                    </svg>
                                 </div>
                                 <div class="course__video-info">
                                    <h5><span>Language :</span>English</h5>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="course__payment mb-35">
                           <h3>Payment:</h3>
                           <a href="#">
                              <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/payment/payment-1.png" alt="img">
                           </a>
                        </div>
                        <div class="course__enroll-btn">
                           <button type="button" class="tp-btn w-100 text-center" data-bs-toggle="modal" data-bs-target="#course_enroll_modal">Enroll <i class="far fa-arrow-right"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="course__sidebar-widget-2 white-bg mb-20">
                     <div class="course__sidebar-course">
                        <h3 class="course__sidebar-title">Related courses</h3>
                        <ul>
                           <li>
                              <div class="course__sm d-flex align-items-center mb-30">
                                 <div class="course__sm-thumb mr-20">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/sm/course-sm-1.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__sm-content">
                                    <div class="course__sm-rating">
                                       <ul>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                       </ul>
                                    </div>
                                    <h5><a href="https://themepure.net/wp/dustrilox/course-details/">Development</a></h5>
                                    <div class="course__sm-price">
                                       <span>$54.00</span>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="course__sm d-flex align-items-center mb-30">
                                 <div class="course__sm-thumb mr-20">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/sm/course-sm-2.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__sm-content">
                                    <div class="course__sm-rating">
                                       <ul>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                       </ul>
                                    </div>
                                    <h5><a href="https://themepure.net/wp/dustrilox/course-details/">Data Science</a></h5>
                                    <div class="course__sm-price">
                                       <span>$72.00</span>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="course__sm d-flex align-items-center mb-10">
                                 <div class="course__sm-thumb mr-20">
                                    <a href="https://themepure.net/wp/dustrilox/course-details/">
                                       <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/sm/course-sm-3.jpg" alt="img">
                                    </a>
                                 </div>
                                 <div class="course__sm-content">
                                    <div class="course__sm-rating">
                                       <ul>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                          <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                                       </ul>
                                    </div>
                                    <h5><a href="https://themepure.net/wp/dustrilox/course-details/">UX Design</a></h5>
                                    <div class="course__sm-price">
                                       <span>Free</span>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- course area end -->

   <!-- course enroll popup start -->
   <div class="course__popup">
      <!-- Modal -->
      <div class="modal fade" id="course_enroll_modal" tabindex="-1" aria-labelledby="course_enroll_modal" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="course__popup-wrapper p-relative">
                  <div class="course__popup-close">
                     <button type="button" class="course__popup-close-btn" data-bs-toggle="modal" data-bs-target="#course_enroll_modal"><i class="fa-light fa-xmark"></i></button>
                  </div>
                  <div class="course__popup-top d-flex align-items-start mb-40">
                     <div class="course__popup-thumb mr-20">
                        <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri() ?>/assets/img/course/course-sm-1.jpg" alt="img">
                     </div>
                     <div class="course__popup-content">
                        <h3 class="course__popup-title">
                           <a href="#">Mechanical Engineering and Electrical Engineering Explained</a>
                        </h3>
                        <div class="course__sm-rating">
                           <ul>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="course__popup-info">
                     <form action="#">
                        <div class="row gx-3">
                           <div class="col-xl-12">
                              <div class="course__popup-input">
                                 <input type="email" placeholder="Email">
                                 <span class="course__popup-input-icon"><i class="fa-light fa-envelope"></i></span>
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="course__popup-input">
                                 <input type="text" placeholder="Card Number">
                                 <span class="course__popup-input-icon"><i class="fa-light fa-credit-card"></i></span>
                              </div>
                           </div>
                           <div class="col-xxl-6">
                              <div class="course__popup-input">
                                 <input type="text" placeholder="MM/YY">
                                 <span class="course__popup-input-icon"><i class="fa-light fa-calendar-days"></i></span>
                              </div>
                           </div>
                           <div class="col-xxl-6">
                              <div class="course__popup-input">
                                 <input type="text" placeholder="CVC">
                                 <span class="course__popup-input-icon"><i class="fa-light fa-lock"></i></span>
                              </div>
                           </div>
                           <div class="col-xxl-12">
                              <div class="course__popup-btn">
                                 <button type="submit" class="tp-btn w-100">Pay $10.00</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- course enroll popup end -->


</main>

<?php
get_footer();
