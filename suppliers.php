<?php include 'header.php'; ?>
<!-- start banner -->
<section class="p-0 top-space-margin position-relative overflow-hidden">
    <div class="container-fluid p-0 h-100 position-relative">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-5 d-flex justify-content-center align-items-center ps-10 xxl-ps-6 xl-ps-4 md-ps-4 sm-ps-0 position-relative order-2 order-lg-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div
                    class="vertical-title-center align-items-center justify-content-center flex-shrink-0 w-75px sm-w-50px">
                    <h1 class="title fs-15 alt-font text-dark-gray fw-700 text-uppercase ls-1px text-uppercase d-flex w-auto align-items-center m-0"
                        data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["fOR Suppliers"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="border-start border-color-extra-medium-gray ps-40px sm-ps-20px position-relative z-index-9">
                    <h2
                        class="text-dark-gray fw-600 alt-font outside-box-right-10 xl-outside-box-right-15 lg-outside-box-right-20 md-me-0 sm-mb-0 ls-minus-3px">
                        Welcome to the new age of supplier-buyer collaboration!</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 position-relative one-half-screen order-1 order-lg-2 md-mb-50px">
                <div class="overflow-hidden position-relative">
                    <div class="w-100"
                        data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                        <img src="img/suppliers/suppliers.jpg" alt="" class="w-100 liquid-parallax"
                            data-parallax-liquid="true" data-parallax-position="top" data-parallax-scale="1.05">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- end section -->
<section id="quote" class="pb-0">
    <div class="container">
        <div class="row">
            <!-- <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="md-mt-15px"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="mb-10px">
                        <span class="w-80px h-3px d-inline-block bg-base-color me-15px align-middle"></span>
                        <span
                            class="text-gradient-base-color fs-50 alt-font fw-800 ls-05px text-uppercase d-inline-block align-middle">Welcome
                            to the <br> new age of <br> supplier-buyer collaboration!</span>
                    </div>
                </div>
            </div> -->
            <!-- <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">More reasons to sign up</h3> -->
            <!-- <div class="col-xl-6 justify-content-center mb-3"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center">
                    <h2 class="ls-minus-2px fw-600 text-dark-gray ls-minus-1px">We love to help to you.</h2>
                </div>
            </div> -->
            <div class="col-12">
                <div class="row supplier-contact justify-content-center sm-mb-0"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <form action="email-templates/contact-form.php" method="post" class="contact-form-style-03">
                            <div class="row">
                                <div class="col-xl-12 justify-content-center mb-3"
                                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div class="text-center">
                                        <h2 class="ls-minus-2px fw-600 text-gradient-base-color ls-minus-1px">We love to help to
                                            you.</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1"
                                        class="form-label fs-13 text-uppercase text-gradient-base-color fw-600 mb-0">What’s your
                                        name?*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                        <input
                                            class="fs-16 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                                            id="exampleInputEmail1" type="text" name="name"
                                            placeholder="First Name and Last Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1"
                                        class="form-label fs-13 text-uppercase text-gradient-base-color fw-600 mb-0">What’s your
                                        phone
                                        number?*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-telephone text-dark-gray"></i></span>
                                        <input
                                            class="fs-16 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                                            id="exampleInputEmail3" type="number" name="phone"
                                            placeholder="Country code and your number" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1"
                                        class="form-label fs-13 text-uppercase text-gradient-base-color fw-600 mb-0">What’s your
                                        company
                                        name?*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                        <input
                                            class="fs-16 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                                            id="exampleInputEmail2" type="text" name="name"
                                            placeholder="Kindly provide your company name?" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1"
                                        class="form-label fs-13 text-uppercase text-gradient-base-color fw-600 mb-0">What’s your
                                        company
                                        email?*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                        <input
                                            class="fs-16 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                                            id="exampleInputEmail2" type="email" name="email"
                                            placeholder="Kindly provide your company email?" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="exampleInputEmail1"
                                        class="form-label fs-13 text-uppercase text-gradient-base-color fw-600 mb-0">Subject?*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-journals text-dark-gray"></i></span>
                                        <input
                                            class="fs-16 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control"
                                            id="exampleInputEmail4" type="text" name="subject" placeholder="Tell us" />
                                    </div>
                                </div>
                                <div class="col-12 mb-35px">
                                    <label for="exampleInputEmail1"
                                        class="form-label fs-13 text-uppercase text-gradient-base-color fw-600 mb-0">Additional
                                        information</label>
                                    <div class="position-relative form-group form-textarea mb-0">
                                        <textarea
                                            class="fs-16 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control"
                                            name="comment" placeholder="Kindly tell us more " rows="4"></textarea>
                                        <span class="form-icon"><i
                                                class="bi bi-chat-square-dots text-dark-gray"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-8 sm-mb-30px text-center text-md-start">
                                    <p class="mb-0 fs-15 lh-26 w-80 md-w-85 sm-w-100">I have read and agree to the
                                        General
                                        Terms
                                        and Privacy Policy</p>
                                </div>
                                <div class="col-md-4 text-center text-md-end">
                                    <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                                    <button
                                        class="btn btn-medium btn-dark-gray btn-box-shadow btn-switch-text left-icon submit"
                                        type="submit">
                                        <span>
                                            <span><i class="fa-regular fa-paper-plane"></i></span>
                                            <span class="btn-double-text" data-text="Send message">Send message</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row mb-8">
            <!-- <div class="col-xl-12 col-lg-12 col-md-12"> -->
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="md-mt-15px"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="mb-10px">
                        <span class="w-80px h-3px d-inline-block bg-base-color me-15px align-middle"></span>
                        <span
                            class="text-gradient-base-color fs-50 alt-font fw-800 ls-05px text-uppercase d-inline-block align-middle">More
                            reasons to sign up</span>
                    </div>
                    <!-- <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">More reasons to sign up</h3> -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 pt-2 md-mt-20px offset-md-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="fs-18 fw-400 pb-1"><i class="fa-solid fa-plus fs-18 me-10px"></i>Cost effective to ensure
                        overall
                        business
                        profit and growth</li>
                    <li class="fs-18 fw-400 pb-1"><i class="fa-solid fa-plus fs-18 me-10px"></i>Wider Range of reliable
                        suppliers and
                        expertise to enhance connections </li>
                    <li class="fs-18 fw-400 pb-1"><i class="fa-solid fa-plus fs-18 me-10px"></i>Long lasting growth and
                        strategic alignment
                        for sustainable gains</li>
                    <li class="fs-18 fw-400 pb-1"><i class="fa-solid fa-plus fs-18 me-10px"></i>Innovatively streamline
                        business
                        challenges
                        for development</li>
                    <li class="fs-18 fw-400 pb-1"><i class="fa-solid fa-plus fs-18 me-10px"></i>Quality Goods and
                        Services which bring about your business excellences </li>
                    <li class="fs-18 fw-400 pb-1"><i class="fa-solid fa-plus fs-18 me-10px"></i>Technological means of
                        communication to know
                        and cater for your needs</li>
                </ul>
            </div>
        </div>
        <!-- <div class="col-lg-4 col-md-8 sm-mb-30px" data-bottom-top="transform: translate3d(0, -30px, 0px);"
                data-top-bottom="transform: translate3d(0, 30px, 0px);">
                <div class="position-relative service-img"
                    data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                    <img src="https://via.placeholder.com/782x450" alt="">
                </div>
            </div> -->
    </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 pb-0">
    <div class="container">
        <div class="row mb-8">
            <!-- <div class="col-lg-4 col-md-8 sm-mb-30px" data-bottom-top="transform: translate3d(0, -30px, 0px);"
                data-top-bottom="transform: translate3d(0, 30px, 0px);">
                <div class="position-relative service-img"
                    data-anime='{ "effect": "slide", "direction": "lr", "color": "#f7f7f7", "duration": 1000, "delay": 0 }'>
                    <img src="https://via.placeholder.com/782x450" alt="">
                </div>
            </div> -->
            <!-- <div class="col-xl-12 col-lg-12 col-md-12"> -->
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="md-mt-15px"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="mb-10px">
                        <span class="w-80px h-3px d-inline-block bg-base-color me-15px align-middle"></span>
                        <span
                            class="text-gradient-base-color fs-50 alt-font fw-800 ls-05px text-uppercase d-inline-block align-middle">Your
                            are in a safe place</span>
                    </div>
                    <!-- <h3 class="alt-font fw-600 mb-0 text-dark-gray ls-minus-2px">Your are in a safe place</h3> -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 pt-2 md-mt-20px offset-md-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <ul class="p-0 m-0 list-style-02 text-dark-gray fw-500"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "rotateY":[100, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!--<li><i class="fa-solid fa-plus fs-12 me-10px"></i>Adherence to recent security updates</li>-->
                    <!--<li><i class="fa-solid fa-plus fs-12 me-10px"></i>Transmission is encrypted</li>-->
                    <!--<li><i class="fa-solid fa-plus fs-12 me-10px"></i>Authentication and session data are encrypted</li>-->
                    <!--<li><i class="fa-solid fa-plus fs-12 me-10px"></i>Needs of Rev is ISO 9001: 2015</li>-->
                    <p class="w-95 md-w-100 mb-35px fs-18 fw-500 lh-40 d-flex align-items-center pb-1">We are
                        committed to our clients’ satisfaction and act based on
                        18
                        needs. We work with prestigious and reliable suppliers in India. Our company selects the
                        best
                        suppliers for your product at cost effective price. Below are the lists of some of our
                        Suppliers.
                    </p>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<!-- <section id="down-section">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-anime='{ " perspective": 1200 }'>
            <div class="col-lg-6 md-mb-40px"
                data-anime='{ "translateY": [0, 0], "zoom": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <figure class="position-relative m-0">
                    <img src="https://via.placeholder.com/800x660" alt="" class="w-100 border-radius-5px">
                </figure>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="mb-10px">
                    <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                    <span
                        class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Business
                        planning</span>
                </div>
                <h3 class="fw-600 text-dark-gray mb-20px ls-minus-2px alt-font">Bring You the Utmost Search
                </h3>
                <p class="w-95 md-w-100 mb-35px">We are committed to our clients’ satisfaction and act based on their
                    needs. We work with prestigious and reliable suppliers in India. Our company selects the best
                    suppliers for your product at cost effective price. Below are the lists of some of our Suppliers.
                </p>
            </div>
        </div>
    </div>
</section> -->
<!-- end section -->

<section class="pt-0 pb-0">
    <div class="bg-linen">
        <div class="container">
            <div class="row align-items-center mt-0"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="p-9 md-p-6 xs-p-9 border-radius-6px overflow-hidden position-relative">
                        <div class="mb-10px">
                            <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                            <span
                                class="text-dark-gray fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Basic
                                information</span>
                        </div>
                        <h3 class="alt-font fw-600 text-gradient-base-color ls-minus-1px">Frequently asked questions</h3>
                        <div class="accordion accordion-style-02" id="accordion-style-02"
                            data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                        aria-expanded="true" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-minus fs-20"></i><span class="fw-500">What is
                                                the
                                                main role played by a business planning consultant?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion-style-02">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="w-90 sm-w-95 xs-w-100">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad
                                            minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                        aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-plus fs-20"></i><span class="fw-500">What are
                                                the
                                                main stages of business plan consulting?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="w-90 sm-w-95 xs-w-100">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad
                                            minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03"
                                        aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-plus fs-20"></i><span class="fw-500">What are
                                                the
                                                advantages of using business plan consulting services?</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-03" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02">
                                    <div
                                        class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                        <p class="w-90 sm-w-95 xs-w-100">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing
                                            elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad
                                            minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<!-- <section class="p-0 pb-5">
    <div class="container-fluid p-0">
        <div class="row g-0 justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-8 position-relative">
                <div class="contact-form-style-03 position-relative ps-15 pe-15 xxl-ps-10 xxl-pe-10 lg-ps-5 lg-pe-5 overflow-hidden last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="mb-10px">
                        <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                        <span
                            class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Get
                            in touch with us</span>
                    </div>
                    <h2 class="text-dark-gray alt-font fw-600 w-90 xxl-w-100 ls-minus-2px">We'd love to hear from you!
                    </h2>
                    <form action="email-templates/contact-form.php" method="post">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-person icon-extra-medium text-dark-gray"></i></span>
                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray form-control required"
                                type="text" name="name" placeholder="Your name*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i
                                    class="bi bi-envelope icon-extra-medium text-dark-gray"></i></span>
                            <input
                                class="ps-0 border-radius-0px border-bottom border-color-extra-medium-gray form-control required"
                                type="email" name="email" placeholder="Your email address*" />
                        </div>
                        <div class="position-relative form-group form-textarea mt-15px mb-0">
                            <textarea
                                class="ps-0 border-radius-0px border-bottom border-color-extra-medium-gray form-control"
                                name="comment" placeholder="Your message" rows="3"></textarea>
                            <span class="form-icon"><i
                                    class="bi bi-chat-square-dots icon-extra-medium text-dark-gray"></i></span>
                            <input type="hidden" name="redirect" value="">
                            <button
                                class="btn btn-medium btn-dark-gray btn-round-edge btn-box-shadow mb-20px mt-25px submit w-100 left-icon"
                                type="submit"><i class="fa-regular fa-envelope"></i>Send message</button>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- end section -->



<?php include 'footer.php'; ?>