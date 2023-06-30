<x-guest-layout>
    <div class="preloader">
        <span class="preloader__back">GM-develop GM-develop</span>
        <p class="preloader__forward">
            Welcome to my site
            <span class="preloader__background"></span>
        </p>
    </div>
    <main class="container-fluid">
        <section class="main-section fillViewport">
            <div class="container">
                <div class="contact__heading ">
                    <h2 class="heading__title">Get In<span class="title__accent">Touch</span> </h2>
                    <p class="text-center w-50 mx-auto my-3">You are interested in my work. You just want to leave a message or contact me.  Here you can do it.</p>
                </div>
                <!-- Contact section-->
                <div class="section__box py-5">
                    <!-- My Address info-->
                    <div class="col-lg-4">
                        <h3 class="utf-content-title">My address info</h3>
                        <p class="utf-info-description">I`m available for Freelance work.</p>
                        <p class="utf-info-description">Connect with Me via</p>
                        <p> Phone: <a href="#">+7(977)144-59-90</a>
                            <br>
                            or Email: <a href="#">mikgir@yandex.ru</a>
                        </p>
                        <ul class="list-unstyled list-info">
                            <li>
                                <div class="media align-items-center">
                                    <span class="info-icon"><i class="fa fa-map-location accent"></i></span>
                                    <div class="media-body info-details">
                                        <h6 class="utf-info-type">Location</h6>
                                        <span class="utf-info-value">53, Radio st. Noginsk, Russia</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media align-items-center">
                                    <span class="info-icon"><i class="fa fa-phone accent"></i></span>
                                    <div class="media-body info-details">
                                        <h6 class="utf-info-type">Phone Number</h6>
                                        <span class="utf-info-value"><a
                                                href="tel:+79771445990">+7(977)144-59-90</a></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media align-items-center">
                                    <span class="info-icon"><i class="fa fa-envelope accent"></i></span>
                                    <div class="media-body info-details">
                                        <h6 class="utf-info-type">Email Address</h6>
                                        <span class="utf-info-value"><a href="mailto:info@example.com">mikgir@yandex.ru</a></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media align-items-center">
                                    <span class="info-icon"><i class="fa fa-image accent"></i></span>
                                    <div class="media-body info-details">
                                        <h6 class="utf-info-type">Website</h6>
                                        <span class="utf-info-value"><a href="#">www.gm-dev.ru</a></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Contact form-->
                    <div class="col-lg-6">
                        <form class="contact-form contact__form" id="contact-form" name="contact-form"
                              method="post" action="" role="form">
                            <div class="status alert alert-success" style="display: none"></div>
                            <h3 class="utf-content-title">Contact me</h3>
                            <p class="utf-contact-description">Write your contact details, select the subject of the message and send it.  I will definitely contact you in a short time.</p>
                            <p class="contact-feedback"></p>
                            <div class="row">
                                <div class="col-12 col-md-6 form-group">
                                    <label for="contact-name">Your Name</label><input class="form-control"
                                                                                      id="contact-name"
                                                                                      type="text" name="name"
                                                                                      placeholder="" required>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="contact-email">Email Address</label><input class="form-control"
                                                                                           id="contact-email"
                                                                                           type="email"
                                                                                           name="email"
                                                                                           placeholder=""
                                                                                           required>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="contact-subject">Subject</label><input class="form-control"
                                                                                       id="contact-subject"
                                                                                       type="text"
                                                                                       name="subject"
                                                                                       placeholder="" required>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="contact-phone">Phone Number</label><input class="form-control"
                                                                                          id="contact-phone"
                                                                                          type="number"
                                                                                          name="phone"
                                                                                          placeholder=""
                                                                                          required>
                                </div>
                                <div class="col-12 form-group form-message">
                                    <label for="contact-message">Your Message</label><textarea
                                        class="form-control" id="contact-message" name="message"
                                        placeholder="" rows="5" required></textarea>
                                </div>
                                <div class="col-12 form-submit">
                                    <a class="btn btn-outline-secondary custom__btn clay" id="contact-submit"
                                       type="submit">Send</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section style="height: 40vh; margin-top: 10rem">
            <div class="container">
                <!-- Map Section Start -->
                <div class="row section__box p-5" style="width:100%; height: 40vh">
                    <div class="map-area col-12" style="height: 100%">
                        <div class="map-contact col-lg-12" style="height: 100%;">
                            <div id="map" class="map__area w-100 h-100">
                                <script type="text/javascript" charset="utf-8" async
                                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A95a7ce2abbc6685b4f8411541101e06a1e60cdb350ea4cb32a5cd9ae4bbbc859&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Map Section End -->
            </div>
        </section>
    </main>
</x-guest-layout>
