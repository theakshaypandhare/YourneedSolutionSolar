<?php
// main.php
include 'header.php';  // This will include the content of header.php
?>
  <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- Sliding section Start -->
            <div class="text-slider  wow fadeInUp" data-wow-delay="500ms">
                <div class="text-slider__inner">
                    <div class="text-slider__item">
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                        <div class="text-slider__item__text"><span>*</span> contact us</div>
                    </div>
                </div>
            </div>
            <!-- Sliding section End -->
            <div class="container">
                <h2 class="page-header__title">contact us</h2>
                <div class="eolimn-breadcrumb">
                    <ul class="eolimn-breadcrumb__list list-unstyled">
                        <li class="eolimn-breadcrumb__list__item"><a href="index.html">Home</a></li>
                        <li class="eolimn-breadcrumb__list__item"><span>contact us</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="contact-list">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>
                            <div class="contact-list__icon">
                                <i class="icon-pin"></i>
                            </div>
                            <div class="contact-list__content">
                                <span class="contact-list__title">Mailing Address</span>
                                <p class="contact-list__info">901 N Pitt Str., Suite 170 <br>
                                    Alexandria, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <div class="contact-list__icon">
                                <i class="icon-telephone"></i>
                            </div>
                            <div class="contact-list__content">
                                <span class="contact-list__title">Quick Contact</span>
                                <a href="tel:+918830425574" class="contact-list__info">+91 8830425574</a>
                                <a href="tel:+919765979505" class="contact-list__info">+91 9765979505</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-list__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>
                            <div class="contact-list__icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="contact-list__content">
                                <span class="contact-list__title">support email</span>
                                <a href="mailto:contact@eolimn.com" class="contact-list__info">contact@eolimn.com</a>
                                <a href="mailto:info@eolimn.com" class="contact-list__info">info@eolimn.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-one">
            <div class="container" id="qoute">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-one__left">
                            <div class="contact-one__thumb wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                <img src="assets/images/resources/cntact-1-1.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-one__right wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="https://bracketweb.com/eolimn-html/inc/sendemail.php">
                                <div class="contact-one__form__top">
                                    <h2 class="contact-one__form__top__title">Leave us a message</h2>
                                </div>
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="your name">
                                    </div>
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="your email">
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="name" placeholder="select subject">
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="write message . . . "></textarea>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="eolimn-btn">send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
include 'footer.php';  // This will include the content of footer.php
?>