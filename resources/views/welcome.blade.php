@extends('layouts.app')
@section('content')
        <section class="section home-banner row-middle home-five">
            <div class="container">
                <div class="dark-group d-flex align-items-center">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="banner-content aos" data-aos="fade-up">
                                <div class="rating d-flex">
                                    <i class="fas fa-star checked"></i>
                                    <i class="fas fa-star checked"></i>
                                    <i class="fas fa-star checked"></i>
                                    <i class="fas fa-star checked"></i>
                                    <i class="fas fa-star checked"></i>
                                </div>
                                <h5>Trused by over 2M+ users</h5>
                                <h1>Service <span class="orange-text">at your Finger Tips</span></h1>
                                <form class="form" name="store" id="store" method="post"
                                    action="">
                                    <div class="form-inner">
                                        <div class="input-group">
                                            <span class="drop-detail">
                                                <select class="form-control select" name="storeID">
                                                    <option value="project.html">Projects</option>
                                                    <option value="developer.html">Freelancers</option>
                                                </select>
                                            </span>
                                            <input type="text" class="form-control search-text-bg"
                                                placeholder="Search here">
                                            <button class="btn btn-primary sub-btn" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-5">
                            <div class="banner-five-img aos" data-aos="fade-up">
                                <img src="assets/img/object-03.png" class="img-fluid" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="work-three work-five">
            <div class="need-position">
                <div class="container">
                    <div class="work-three-widget aos" data-aos="fade-up">
                        <div class="creative-img">
                            <img src="assets/img/project-06.png" alt="" class="img-fluid">
                        </div>
                        <div class="widget-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 budget-position">
                                    <div class="budget-creative">
                                        <div class="perfect-group aos" data-aos="fade-up">
                                            <h2>I NEED AN ELECTRICIAN</h2>
                                            <p>Get the perfect service for your need from our creative & professional
                                                community.</p>
                                            <div class="view-face">
                                                <a href="" class="btn btn-primary"><i
                                                        class='fas fa-arrow-right'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="perfect-group work-to aos" data-aos="fade-up">
                                        <h2>I WANT TO WORK</h2>
                                        <p>Do you want to earn money, find unlimited clients and build your artisan freelance
                                            career?</p>
                                        <div class="view-work">
                                            <a href="" class="btn btn-primary"><i
                                                    class='fas fa-arrow-right'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section projects projects-three projects-five">
            <div class="project-back">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 mx-auto">
                            <div class="section-header section-three section-five text-center aos" data-aos="fade-up">
                                <h2 class="header-title">Get Inspired By <span> Professional Artisan</span></h2>
                                <p>High Performing Solutions To Your</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item aos" data-aos="fade-up">
                                <div class="project-img">
                                    <a href="project.html"><img src="assets/img/project/project-12.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                                <div class="develop-role d-flex justify-content-between align-items-center">
                                    <div class="project-content">
                                        <h4>45</h4>
                                        <h5><a href="project.html">CARPENTERS </a></h5>
                                    </div>
                                    <div class="pro-icon">
                                        <div class="project-icon">
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h4>20</h4>
                                        <h5><a href="project.html">Artisans</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item aos" data-aos="fade-up">
                                <div class="project-img">
                                    <a href="project.html"><img src="assets/img/project/project-13.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                                <div class="develop-role apps-color d-flex justify-content-between align-items-center">
                                    <div class="project-content">
                                        <h4>45</h4>
                                        <h5><a href="project.html">ELECTRICIANS</a></h5>
                                    </div>
                                    <div class="pro-icon">
                                        <div class="project-icon">
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h4>20</h4>
                                        <h5><a href="project.html">Artisans</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item aos" data-aos="fade-up">
                                <div class="project-img">
                                    <a href="project.html"><img src="assets/img/project/project-14.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                                <div class="develop-role d-flex justify-content-between align-items-center">
                                    <div class="project-content">
                                        <h4>45</h4>
                                        <h5><a href="project.html">PAINTERS</a></h5>
                                    </div>
                                    <div class="pro-icon">
                                        <div class="project-icon">
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h4>20</h4>
                                        <h5><a href="project.html">Artisans</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item aos" data-aos="fade-up">
                                <div class="project-img">
                                    <a href="project.html"><img src="assets/img/project/project-12.jpg"
                                            alt="" class="img-fluid"></a>
                                </div>
                                <div class="develop-role apps-color d-flex justify-content-between align-items-center">
                                    <div class="project-content">
                                        <h4>45</h4>
                                        <h5><a href="project.html">MECHANICS</a></h5>
                                    </div>
                                    <div class="pro-icon">
                                        <div class="project-icon">
                                        </div>
                                    </div>
                                    <div class="project-content">
                                        <h4>20</h4>
                                        <h5><a href="project.html">Artisans</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="see-all btn-three aos" data-aos="fade-up">
                                <a href="project.html" class="btn all-btn">SEE ALL CATEGORIES <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="hired-developer hired-developer-five">
            <div class="position-three position-five">
                <div class="container">
                    <div class="section-header section-three section-five aos" data-aos="fade-up">
                        <h2 class="header-title"><span>Most Hired</span> Artisans</h2>
                        <p>Work with talented people at the most affordable price</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div id="developers-slider-three"
                                class="owl-carousel owl-theme developers-slider-three aos" data-aos="fade-up">
                                <div class="freelance-widget widget-three">
                                    <div class="freelance-content free-one">
                                        <a data-toggle="modal" href="#rating" class="favourite"><i
                                                class="far fa-bookmark"></i></a>
                                        <div class="freelance-img">
                                            <a href="developer-details.html">
                                                <img src="assets/img/user/avatar-1.jpg" alt="User Image">
                                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                                            </a>
                                        </div>
                                        <div class="freelance-info">
                                            <h3><a href="developer-details.html">George Wells</a></h3>
                                            <div class="freelance-specific">UI/UX Designer</div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="develop-footer d-flex align-items-center">
                                            <h4>$25 Hourly</h4>
                                            <div class="blue-view">
                                                <a href="developer-details.html" class="btn btn-primary">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="freelance-widget freelance-group widget-three">
                                    <div class="freelance-content free-one">
                                        <a data-toggle="modal" href="#rating" class="favourite"><i
                                                class="far fa-bookmark"></i></a>
                                        <div class="freelance-img">
                                            <a href="developer-details.html">
                                                <img src="assets/img/user/avatar-2.jpg" alt="User Image">
                                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                                            </a>
                                        </div>
                                        <div class="freelance-info">
                                            <h3><a href="developer-details.html">Timothy Smith</a></h3>
                                            <div class="freelance-specific">PHP Developer</div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="develop-footer d-flex align-items-center">
                                            <h4>$25 Hourly</h4>
                                            <div class="blue-view">
                                                <a href="developer-details.html" class="btn btn-primary">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="freelance-widget widget-three">
                                    <div class="freelance-content free-one">
                                        <a data-toggle="modal" href="#rating" class="favourite"><i
                                                class="far fa-bookmark"></i></a>
                                        <div class="freelance-img">
                                            <a href="developer-details.html">
                                                <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                                            </a>
                                        </div>
                                        <div class="freelance-info">
                                            <h3><a href="developer-details.html">Janet Paden</a></h3>
                                            <div class="freelance-specific">Graphic Designer</div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="develop-footer d-flex align-items-center">
                                            <h4>$25 Hourly</h4>
                                            <div class="blue-view">
                                                <a href="developer-details.html" class="btn btn-primary">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="freelance-widget freelance-group widget-three">
                                    <div class="freelance-content free-one">
                                        <a data-toggle="modal" href="#rating" class="favourite"><i
                                                class="far fa-bookmark"></i></a>
                                        <div class="freelance-img">
                                            <a href="developer-details.html">
                                                <img src="assets/img/img-03.jpg" alt="User Image">
                                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                                            </a>
                                        </div>
                                        <div class="freelance-info">
                                            <h3><a href="developer-details.html">James Douglas</a></h3>
                                            <div class="freelance-specific">iOS Developer</div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="develop-footer d-flex align-items-center">
                                            <h4>$25 Hourly</h4>
                                            <div class="blue-view">
                                                <a href="developer-details.html" class="btn btn-primary">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="freelance-widget widget-three">
                                    <div class="freelance-content free-one">
                                        <a data-toggle="modal" href="#rating" class="favourite"><i
                                                class="far fa-bookmark"></i></a>
                                        <div class="freelance-img">
                                            <a href="developer-details.html">
                                                <img src="assets/img/img-03.jpg" alt="User Image">
                                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                                            </a>
                                        </div>
                                        <div class="freelance-info">
                                            <h3><a href="developer-details.html">Richard Wilson</a></h3>
                                            <div class="freelance-specific">UI/UX Designer</div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="develop-footer d-flex align-items-center">
                                            <h4>$25 Hourly</h4>
                                            <div class="blue-view">
                                                <a href="developer-details.html" class="btn btn-primary">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="freelance-widget widget-three">
                                    <div class="freelance-content free-one">
                                        <a data-toggle="modal" href="#rating" class="favourite"><i
                                                class="far fa-bookmark"></i></a>
                                        <div class="freelance-img">
                                            <a href="developer-details.html">
                                                <img src="assets/img/img-03.jpg" alt="User Image">
                                                <span class="verified"><i class="fas fa-check-circle"></i></span>
                                            </a>
                                        </div>
                                        <div class="freelance-info">
                                            <h3><a href="developer-details.html">Janet Paden</a></h3>
                                            <div class="freelance-specific">iOS Developer</div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="develop-footer d-flex align-items-center">
                                            <h4>$25 Hourly</h4>
                                            <div class="blue-view">
                                                <a href="developer-details.html" class="btn btn-primary">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="developer-image aos" data-aos="fade-up">
                                <img src="assets/img/developer-01.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section feature feature-three feature-five">
            <div class="container">
                <div class="section-header section-three section-five text-center aos" data-aos="fade-up">
                    <h2 class="header-title">Strength in <span>Numbers</span></h2>
                    <p>Work with talented people at the most affordable price</p>
                </div>
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="feature-item freelance-count aos" data-aos="fade-up">
                            <div class="feature-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="feature-content">
                                <h3>919,207</h3>
                                <p>freelance Developers</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="feature-item aos" data-aos="fade-up">
                            <div class="feature-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="feature-content">
                                <h3>25 - 100+</h3>
                                <p>Developers per project</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="feature-item comp-project aos" data-aos="fade-up">
                            <div class="feature-icon">
                                <i class="fas fa-list"></i>
                            </div>
                            <div class="feature-content">
                                <h3>388,615</h3>
                                <p>completed projects</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="review-three review-five">
            <div class="container">
                <div class="review-bg">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="review-develop aos" data-aos="fade-up">
                                <img src="assets/img/review-02.png" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-center">
                            <div id="testimonial-slider-three"
                                class="owl-carousel owl-theme testimonial-slider-three aos" data-aos="fade-up">

                                <div class="review-blog">
                                    <div class="review-content">
                                        <p>Eget aenean accumsan Search School, OLorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Eget aenean accumsan Eget Eget aenean accumsan Search
                                            School, OLorem ipsum dolor sit amet, consectetur adipiscing elit. Eget
                                            aenean accumsan Eget </p>
                                    </div>
                                    <div class="review-top d-flex align-items-center">
                                        <div class="review-img">
                                            <a href="review.html"><img class="img-fluid"
                                                    src="assets/img/review/review-01.jpg" alt="Post Image"></a>
                                        </div>
                                        <div class="review-info">
                                            <h3>Janet Paden</h3>
                                            <h5>iOS Developer</h5>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>


                                <div class="review-blog">
                                    <div class="review-content">
                                        <p>Eget aenean accumsan Search School, OLorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Eget aenean accumsan Eget Eget aenean accumsan Search
                                            School, OLorem ipsum dolor sit amet, consectetur adipiscing elit. Eget
                                            aenean accumsan Eget </p>
                                    </div>
                                    <div class="review-top d-flex align-items-center">
                                        <div class="review-img">
                                            <a href="review.html"><img class="img-fluid"
                                                    src="assets/img/review/review-01.jpg" alt="Post Image"></a>
                                        </div>
                                        <div class="review-info">
                                            <h3>Davis Payerf</h3>
                                            <h5>CEO</h5>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>


                                <div class="review-blog">
                                    <div class="review-content">
                                        <p>Eget aenean accumsan Search School, OLorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Eget aenean accumsan Eget Eget aenean accumsan Search
                                            School, OLorem ipsum dolor sit amet, consectetur adipiscing elit. Eget
                                            aenean accumsan Eget </p>
                                    </div>
                                    <div class="review-top d-flex align-items-center">
                                        <div class="review-img">
                                            <a href="review.html"><img class="img-fluid"
                                                    src="assets/img/review/review-01.jpg" alt="Post Image"></a>
                                        </div>
                                        <div class="review-info">
                                            <h3>Timothy Smith</h3>
                                            <h5>PHP Developer</h5>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="subscribe-three subscribe-five">
            <div class="container">
                <div class="discount-more ">
                    <div class="section-header section-three section-five text-center aos" data-aos="fade-up">
                        <h2 class="header-title"><span>Subscribe To Get Discounts,</span> Updates & More</h2>
                        <p>HMonthly product updates, industry news and more!</p>
                    </div>
                    <div class="banner-content aos" data-aos="fade-up">
                        <form class="form" name="store" method="post"
                            action="https://kofejob.dreamguystech.com/template/project.html">
                            <div class="form-inner">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter Email Address">
                                    <button class="btn btn-primary sub-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


@endsection
