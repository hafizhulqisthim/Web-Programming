

        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">Let's see, what's best for you!</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Items-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/src/assets/img/portfolio/instander.png" alt="Instander"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/src/assets/img/portfolio/blokada.png" alt="Blokada"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/src/assets/img/portfolio/gcam.png" alt="Gcam"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/src/assets/img/portfolio/Instube.png" alt="Instube"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/src/assets/img/portfolio/antutu.png" alt="Antutu"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="assets/src/assets/img/portfolio/mpl.png" alt="MPL"/>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <!--<?php print_r($applikasi); ?>-->
                    <!--<table class="table">
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>ID_KATEGORI</th>
                            <th>IMAGE</th>
                        </tr>
                        <?php 
                        $no=1;
                        foreach ($applikasi as $app) {                            
                         ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $app['nama'] ?></td>
                            <td><?php echo $app['id_kategori'] ?></td>
                             <td><?php echo $app['image'] ?></td>
                        </tr>
                        <?php } ?>
                    </table>-->
                </div>  
                <div class="text-center">
                    <h6 class="page-section-heading text-secondary mb-0 d-inline-block"><a href="<?= base_url('moreapps'); ?>">see more</a></h6>
                </div>                
            </div>

            <!--<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Aplikasi Terdaftar</div>
                      <div class="h1 mb-0 font-weight-bold text-white">
                        <?php
                        $where = ['stok != 0'];
                        $totalstok = $this->ModelAplikasi->total('stok', $where);
                        echo $totalstok;
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-primary"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->

        </section>
        <!-- Portfolio Modal-->
        <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Instander</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/src/assets/img/portfolio/instander.png" alt="Instander"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        Instander is an InstaMod which Allows Users to Download Photos, Videos, IGTV and Reels in High Quality. Also, help you try exclusive features including No Ads, Copy Bio, Copy Comments, Copy Description and More.
                                    </p>
                                    <button class="btn btn-danger" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                    <a class="btn btn-primary" href="https://thedise.me/instander/">Go to the web</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Blokada</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/src/assets/img/portfolio/blokada.png" alt="Blokada"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        Blokada is the popular ad blocker and privacy app for Android and iOS. It's being supported and actively developed by the amazing open source community.
                                    </p>
                                    <button class="btn btn-danger" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                    <a class="btn btn-primary" href="https://blokada.org/">Go to the web</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Gcam</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/src/assets/img/portfolio/gcam.png" alt="Gcam"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        Google Camera (or Gcam) is a Google application for taking pictures on Android phones. The purpose of the app is to increase the quality of smartphone images and offer new tools, such as focus effect, HDR+, and unlimited panorama. The camera app is native to smartphones of the Pixel line and is available for download in the Play Store only for these phones.
                                    </p>
                                    <button class="btn btn-danger" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                    <a class="btn btn-primary" href="https://www.celsoazevedo.com/files/android/google-camera/">Go to the web</a>                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Instube</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/src/assets/img/portfolio/instube.png" alt="Instube"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        InsTube is a powerful video downloader APP for videos and music from 100+ websites, including YouTube, Instagram, Facebook, Twitter, Dailymotion, Vimeo, Soundcloud, TikTok, Hotstar, etc.
                                    </p>
                                    <button class="btn btn-danger" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                    <a class="btn btn-primary" href="https://instube.com/">Go to the web</a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Antutu Benchmark</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/src/assets/img/portfolio/antutu.png" alt="Antutu"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        AnTuTu is a software benchmarking tool commonly used to benchmark phones and other devices. It is owned by Chinese company Cheetah Mobile.
                                    </p>
                                    <button class="btn btn-danger" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                    <a class="btn btn-primary" href="https://www.antutu.com/en/download.htm">Go to the web</a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Mobile Premiere League</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="assets/src/assets/img/portfolio/mpl.png" alt="MPL"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        Mobile Premier League (MPL) is an agility-based eSports platform where you can play your favorite games and win Diamonds that can be exchanged for GoPay and LinkAja accounts.
                                    </p>
                                    <button class="btn btn-danger" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                    <a class="btn btn-primary" href="https://id.mpl.live/">Go to the web</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-section bg-secondary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading d-inline-block text-white">ABOUT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="pre-wrap lead">These third party apps are a bridge for someone who is looking to download an app. However, our role is to supply applications that are not in the playstore on the condition that they are still compatible for android devices.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="pre-wrap lead">Because in our opinion this is a differentiator from other third party apps that are already available and commercial. We are inspired by jailbreak and blackmarket in its era around the 2010s. both applications have been disabled due to illegal applications by making paid applications free.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="pre-wrap lead">The outcome for the community is to make it easier for internet users to just look at one of our websites and then find out all the latest compatible apps that have not been listed in the Playstore.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <div class="text-muted">Phone</div>
                            <div class="lead font-weight-bold">+17077267885</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <div class="text-muted">Email</div><a class="lead font-weight-bold" href="staff-IT@unlist3.com">staff-IT@unlist3.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">  </h2>
                    <h3 class="section-subheading text-muted">
                        Your feedback will be a bright future
                    </h3>
                </div>
                <br><br>

                <!-- Button trigger modal -->
                <div class="text-center">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                      Input your feedback
                    </button>
                </div>
                <br><br><br> 

                <div class="text-center">
                    <h2 class="section-heading text-uppercase">  </h2>
                    <h3 class="section-subheading text-muted">
                        Check your feedback on <a href="http://localhost/unlist3/profile">profile</a>
                    </h3>
                </div>
                <br><br>
   
                
            </div>

        </section>
