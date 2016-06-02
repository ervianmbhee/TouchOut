<?php include('include/header.php') ?>
<!-- ============== start Menu header ============== -->
<?php include('include/menu.php') ?>
<!-- ============ End Menu header ============ -->
<!-- ============== Start Banner ============== -->
<div class="covergdptulisan">
    <div class="container ">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="images/banner1.png"/>
        </div>
    </div>
</div>
<!-- ============== End Banner ============== -->
 <!-- ================== Start Tab =========================== -->
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="bs-example bs-example-tabs col-lg-12 col-md-12 col-xs-12 col-sm-12" role="tabpanel" data-example-id="togglable-tabs">
             <!-- ================== Start Navigasi Tab =========================== -->
             <ul id="myTab" class="nav nav-tabs nav-tabs-responsive mobile-bar " >
                <li  class="dropdown ">
                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                        <span class="text">Pilih Nomor</span>
                        <span class="caret">
                        </span>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                        <li class="active">
                            <a href="#tab1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                <span class="text">1</span>
                            </a>
                        </li>
                        <li class="next ">
                            <a href="#tab2" role="tab" data-toggle="tab" id="profile-tab"  aria-controls="profile">
                                <span class="text">2</span>
                            </a>
                        </li>
                        <li class="next ">
                            <a  href="#tab3" role="tab" data-toggle="tab" id="tomboladukepintaran" aria-controls="adukepintaran">
                              <span class="text">3</span>
                            </a>
                        </li>
                        <li  class="next ">
                            <a  href="#tab4" role="tab" data-toggle="tab" id="tombolfoto" aria-controls="profile">
                                <span class="text">4</span>
                            </a>
                        </li>
                        <li  class="next ">
                            <a  href="#tab5" role="tab" data-toggle="tab" id="tomboltentang"   aria-controls="tentang">
                                <span class="text">5</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#tab1" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                        <span class="text">1</span>
                    </a>
                </li>
                <li class="next ">
                    <a href="#tab2" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                     <span class="text">2</span>
                    </a>
                </li>
                <li class="next ">
                    <a  href="#tab3" role="tab" id="tomboladukepintaran"  data-toggle="tab" aria-controls="adukepintaran">
                      <span class="text">3</span>
                    </a>
                </li>
                <li  class="next ">
                    <a  href="#tab4" role="tab" id="tombolfoto"  data-toggle="tab" aria-controls="profile">
                        <span class="text">4</span>
                    </a>
                </li>
                <li  class="next ">
                    <a  href="#tab5" role="tab" id="tomboltentang"  data-toggle="tab" aria-controls="tentang">
                        <span class="text">5</span>
                    </a>
                </li>
            </ul>
             <!-- ================== Navigasi Tab =========================== -->
             <!-- ================== Isi Tab =========================== -->
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="gdptab fade in active" id="tab1" aria-labelledby="home-tab">
                    <div class="col-lg-12 col-md-12 col-sm-12 isi-ujian">
                        <img class="img-responsive" src="images/banner1.png">
                    </div>
                </div>
                <div role="tabpanel" class="gdptab fade" id="tab2" aria-labelledby="profile-tab">
                
                </div>
                <div role="tabpanel" class="gdptab fade" id="tab3" aria-labelledby="adukepintaran">
                
                </div>
                <div  role="tabpanel" class="gdptab fade" id="tab4" aria-labelledby="nilaiTryout-tab">
                
                </div>
                <div role="tabpanel"  class="gdptab fade" id="tab5" aria-labelledby="profile-tab">
                
                </div>
            </div>
             <!-- ================== End Isi Tab =========================== -->
            <!-- ================== Start Button Next / Prev =========================== -->
            <div class="btn-group">
                <button class="btn nextgdp" id="prevtab" type="button">Prev</button>
            </div>
            <div class="btn-group">
                <button class="btn prevgdp" id="nexttab" type="button">Next</button>
            </div>
             <!-- ================== End Button Next / Prev =========================== -->
        </div>
    </div>
</div>
<!-- ================== End Tab =========================== -->
<?php include('include/footer.php') ?>