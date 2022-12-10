<!--================ Start Course Details Area =================-->
<section class="course_details_area section_gap">
    <?php
    foreach ($detailKelas as $kl) {
    ?>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8 course_details_left">
                    <h2><?= $kl->nama_kelas ?></h2>
                    <div class="mt-2">
                        <span class="text-purple mb-4">Kategori Kelas Marketing</span>
                    </div>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-2">
                        <div class="mt-lg-0 mt-0 mb-4">
                            <span class="meta_info mr-4">
                                <a href="#">
                                    <i class="ri-star-fill text-yellow"></i>
                                    5.0
                                </a>
                            </span>
                            <span class="meta_info"><a href="#"> Terjual 35 </a></span>
                        </div>
                    </div>
                    <div class="main_image">
                        <!-- <img class="img-fluid rounded" src="<?= base_url('assets/') ?>img/courses/thumbnail-ui-ux.jpg" alt=""> -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/072mWkfwTJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </iframe>
                        </div>
                    </div>
                    <!-- <a href="<?= base_url('auth/logout') ?>" onclick="return confirm('Yakin ingin logout?')">Logout</a> -->
                    <div class="content_wrapper">
                        <h4 class="title">Deskripsi</h4>
                        <div class="content">
                            <?= $kl->deskripsi ?>
                        </div>

                        <h4 class="title">Course Outline</h4>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between d-flex">
                                    <p>Introduction Lesson</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Basics of HTML</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Getting Know about HTML</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between d-flex">
                                    <p>Tags and Attributes</p>
                                    <a class="primary-btn text-uppercase" href="#">View Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="single_course rounded mb-4" style="border-radius: 20px;">
                        <div class="course_head rounded radius1 mt-3">
                            <img class="img-fluid rounded radius1" src="<?= base_url('assets/') ?>img/courses/thumbnail-ui-ux.jpg" alt="" />
                        </div>
                        <div class="course_content">
                            <span class="mb-4 d-inline-block">
                                <p class="d-inline-block tag bg-primary">
                                    Marketing
                                </p>
                            </span>
                            <h5 class="mb-2 text-bolder">
                                <?= $kl->nama_kelas ?>
                            </h5>
                            <p class="mb-3 desc"><?= character_limiter($kl->deskripsi, 100) ?></p>
                            <h4 class="text-bold text-bolder text-purple price-class">
                                Rp. <?= number_format($kl->harga_kelas, 0, '', '.') ?>
                            </h4>
                        </div>
                    </div>
                    <a href="#" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Enroll the course</a>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="primary-btn2 text-right rounded-0 text-white">Submit</a>
                            </div>
                        </div>
                        <div class="comments-area mb-30">
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
<!--================ End Course Details Area =================-->