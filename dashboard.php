<?php include('include/header.php') ?>
<!-- ============== start Menu header ============== -->
<?php include('include/menu.php') ?>
<!-- ============ End Menu header ============ -->
<div class="covergdp">
  <img align="left" class="fb-image-lg" src="images/wq.png" alt="Profile image example"/>
</div>
<!-- ====================================== Content ============================================ -->
<div class="container">
    <!-- =============================== Profile Image ========================================= -->
    <div style="margin: 0 0 20px 0;"class="col-lg-3 col-md-12 col-sm-12 col-xs-12 bungkus-fb-profil">
        <!-- =============== Button Kamera Foto ====================== -->
        <div  class="col-md-3 col-lg-12  col-sm-3 col-xs-12">
            <div  class="fb-image-profile thumbnail">
                <img align="center" class="" src="images/g.png" alt="Profile image example"/>
                <div class="file-camera">
                    <label class="bungkus-camera"for="file-input">
                        <i class="fa fa-camera"></i>
                    </label>
                    <form>
                        <input id="file-input"type="file" />
                    </form>
                </div>
            </div>
        </div>
        <!-- =============== End Button Kamera Foto ====================== -->
        <!-- =============== Status ====================== -->
        <div class="col-md-9 col-lg-12  col-sm-9 col-xs-12 text-gdp">
            <h2>Ginanjar DP</h2>
            <p style="font-size:13px; font-weight:bold; color:#008FD7;"><i>" if you feel like shit, everyone you hates win "</i></p>
        </div>
        <!-- =============== End Status ====================== -->
        <!-- =============== Button Share ====================== -->
        <div class="col-md-9 col-lg-12  col-sm-9 col-xs-12">
            <button title="share dengan Facebook" style="background:#3b5998!important;" class="btn btn-gdp"><i class="fa fa-facebook-f"></i> Bagikan TryOut</button>
            <button title="share dengan Google Plus"style="background:#d14836!important;"  class="btn btn-gdp"><i class="fa fa-google-plus"> </i> Bagikan TryOut</button>
        </div>
        <!-- =============== End Button Share ====================== -->
    </div> 
    <!-- =============================== End Profile Image ========================================= --> 
    <!-- =============================== Start Tab ================================================== --> 
    <div class="bs-example bs-example-tabs col-lg-9 col-md-12 col-xs-12 col-sm-12" role="tabpanel" data-example-id="togglable-tabs">
        <!-- ========================= Menu Navigasi Tab ============================= -->
        <ul id="myTab" class="nav nav-tabs nav-tabs-responsive mobile-bar" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                    <span class="text">Aktifitas</span>
                </a>
            </li>
            <li role="presentation " class="next hidden-xs">
                <a href="#nilaiTryout" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                    <span class="text">Nilai Tryout</span>
                </a>
            </li>
            <li role="presentation " class="next hidden-xs">
                <a  href="#adukepintaran" role="tab" id="tomboladukepintaran"  data-toggle="tab" aria-controls="adukepintaran">
                    <span class="text">Adu Kepintaran</span>
                </a>
            </li>
            <li role="presentation " class="next hidden-xs">
                <a  href="#foto" role="tab" id="tombolfoto"  data-toggle="tab" aria-controls="profile">
                    <span class="text">Gallery</span>
                </a>
            </li>
            <li role="presentation " class="next hidden-xs">
                <a  href="#tentang" role="tab" id="tomboltentang"  data-toggle="tab" aria-controls="tentang">
                    <span class="text">Tentang</span>
                </a>
            </li>
            <li role="presentation" class="dropdown visible-xs">
                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                    <span class="text">Lainnya</span>
                    <span class="caret">
                    </span>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                    <li role="presentation " class="next ">
                        <a href="#nilaiTryout" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                            <span class="text"> Nilai Tryout</span>
                        </a>
                    </li>
                    <li role="presentation " class="next ">
                        <a  href="#adukepintaran" role="tab" id="tomboladukepintaran"  data-toggle="tab" aria-controls="adukepintaran">
                            <span class="text">Adu Kepintaran</span>
                        </a>
                    </li>
                    <li role="presentation " class="next ">
                        <a  href="#foto" role="tab" id="tombolfoto"  data-toggle="tab" aria-controls="profile">
                            <span class="text">Gallery</span>
                        </a>
                    </li>
                    <li role="presentation " class="next ">
                        <a  href="#tentang" role="tab" id="tomboltentang"  data-toggle="tab" aria-controls="tentang">
                            <span class="text">Tentang</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- ========================= End Menu Navigasi Tab ============================= -->
        <!-- ========================= Start Isi Tab ============================= -->
        <div id="myTabContent" class="tab-content">
            <!-- ========================= Start HOME Tab ============================= -->
            <div role="tabpanel" class="gdptab fade in active" id="home" aria-labelledby="home-tab">
                <!-- ========================= Start Postingan/Left HOME Tab ============================= -->
                <div  class="col-lg-8 col-md-8 col-sm-12 ">
                    <div  style="margin:10px 0; padding:20px 0; overflow:hidden;background:#fff;border:1px solid #ddd;" class="col-lg-12 col-md-12 col-sm-12 about">
                        <form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Tulis Sesuatu.." style="width:100%; min-height: 50px;"></textarea>
                                <button class="btn btn-primary" style="float: right;padding: 5px 20px;" type="submit">Post</button>
                            </div>
                        </form>
                    </div>
                    <div  style="margin:10px 0; padding:0;background:#fff; overflow:hidden; border:1px solid #ddd" class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="nav navbar-nav navbar-right mobile-bar">
                                <li role="presentation" class="dropdown">
                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" style="padding:0 20px;" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                        <span class="fa fa-cog">
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                        <li role="presentation " class="next ">
                                            <a href="#nilaiTryout" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                <span class="fa fa-trash-o"></span>
                                                <span class="text"> Hapus</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <p style="text-align:center;"> <img style="width:45px; height:45px;"class="gdpimg" src="images/g.png"></p>
                        </div>
                        <div style="padding:0;"class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <p style="font-size:15px; font-weight:bold; color:#008FD7;">GinanjarDP
                                </br><span style="font-size:15px; font-weight:normal; color:grey;">2 Februari 2016</span>
                            </p>
                        </div>
                        <div style="border-bottom: 1px solid #ddd;"class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p style="font-size:15px;padding:20px 0;  color:#000;">if you feel like shit, everyone you hates win</p>
                            <div style="border-top:1px solid #ddd;padding:5px 0;">
                                <span style="font-weight:bold;margin-right:10px;"><i class="fa fa-thumbs-o-up"> </i> 2</span>
                                <span style="font-weight:bold;margin-right:10px;"><i class="fa fa-commenting-o"> </i> 10</span>
                            </div>
                        </div>
                        <div style="background:rgba(0, 143, 215, 0.03);  padding:20px 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <p style="text-align:center;"> <img style="width:45px; height:45px;"class="gdpimg" src="images/g.png"></p>
                            </div>
                            <div style="padding:0 0 5px 0;"class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <p style="font-size:15px; font-weight:bold; color:#008FD7;">GinanjarDP
                                    </br><span style="font-size:15px; font-weight:normal; color:#000;">Ginanjar Kenapa kau ganteng sekali Ginanjar Kenapa kau ganteng sekali </span>
                                </p>
                                <p>
                                    <span style="font-size:13px; font-weight:normal; color:grey;">2 February 2016 </span>
                                </p>
                            </div>
                            <form action="#" method="post" role="form" enctype="multipart/form-data" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 facebook-share-box">
                                <textarea class="form-control" placeholder="Komentar.." style="width:100%; min-height: 50px;"></textarea>
                                <button class="btn btn-primary" style="float: right;padding: 5px 20px;" type="submit">Komentar</button>
                            </form>
                        </div>
                    </div>
                    <div  style="margin:10px 0; padding:0; background:#fff;overflow:hidden; border:1px solid #ddd" class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="nav navbar-nav navbar-right mobile-bar">
                                <li role="presentation" class="dropdown ">
                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" style="padding:0 20px;" data-toggle="dropdown" aria-controls="myTabDrop1-contents">
                                        <span class="fa fa-cog"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                        <li role="presentation " class="next ">
                                            <a href="#nilaiTryout" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                                                <span class="fa fa-trash-o"></span>
                                                <span class="text"> Hapus</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <p style="text-align:center;"> <img style="width:45px; height:45px;"class="gdpimg" src="images/g.png"></p>
                        </div>
                        <div style="padding:0;"class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <p style="font-size:15px; font-weight:bold; color:#008FD7;">GinanjarDP
                                </br><span style="font-size:15px; font-weight:normal; color:grey;">2 Februari 2016</span>
                            </p>
                        </div>
                        <div style="border-bottom: 1px solid #ddd;"class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p style="font-size:15px;padding:20px 0;  color:#000;">if you feel like shit, everyone you hates win</p>
                            <img src="images/un.png" style="width:100%;"/>
                            <div style="border-top:1px solid #ddd;padding:5px 0;">
                                <span style="font-weight:bold;margin-right:10px;"><i class="fa fa-thumbs-o-up"> </i> 3</span>
                                <span style="font-weight:bold;margin-right:10px;"><i class="fa fa-commenting-o"> </i> 5</span>
                            </div>
                        </div>
                        <div style="background:rgba(0, 143, 215, 0.03);  padding:20px 5px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <p style="text-align:center;"> <img style="width:45px; height:45px;"class="gdpimg" src="images/g.png"></p>
                            </div>
                            <div style="padding:0 0 5px 0;"class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                <p style="font-size:15px; font-weight:bold; color:#008FD7;">GinanjarDP
                                    </br><span style="font-size:15px; font-weight:normal; color:#000;">Ginanjar Kenapa kau ganteng sekali Ginanjar Kenapa kau ganteng sekali </span>
                                </p>
                                <p>
                                    <span style="font-size:13px; font-weight:normal; color:grey;">2 February 2016 </span>
                                </p>
                            </div>
                            <form action="#" method="post" role="form" enctype="multipart/form-data" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 facebook-share-box">
                                <textarea class="form-control" placeholder="Komentar.." style="width:100%; min-height: 50px;"></textarea>
                                <button class="btn btn-primary" style="float: right;padding: 5px 20px;" type="submit">Komentar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ========================= End Postingan/Left HOME Tab ============================= -->
                <!-- ========================= Start Right HOME Tab ============================= -->
                <div style="margin:10px 0;"class="col-lg-4 col-md-4 col-sm-12">
                    <ul class="list-group col-md-12 col-lg-12 col-xs-12" id="contact-list">
                        <h5 style="    padding: 10px 0 10px 20px;background: #fff;margin: 0;border: 1px solid #eee;">
                            <i class="fa fa-trophy gdp-circle"></i> 
                            Anggota Baru
                        </h5>
                        <li class="list-group-item col-xs-6 col-md-12 col-lg-12">
                            <div class="col-xs-3 col-md-4 col-sm-3">
                                <img src="images/g.png" alt="ginanjar" class="img-responsive " />
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-8">
                                <a href="" style="font-size:13px; font-weight:bold; color:#008FD7;">Jean Myers</a><br/>
                                <p style="font-size:11px; " class="  text-muted c-info" > 02 Februari 2016</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li class="list-group-item col-xs-6 col-md-12 col-lg-12">
                            <div class="col-xs-3 col-md-4 col-sm-3">
                                <img src="images/G.png" alt="ginanjar" class="img-responsive img " />
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-8">
                                <a href="" style="font-size:13px; font-weight:bold; color:#008FD7;">Jean Myers</a><br/>
                                <p style="font-size:11px; " class="  text-muted c-info" > 02 Februari 2016</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li class="list-group-item col-xs-6 col-md-12 col-lg-12">
                            <div class="col-xs-3 col-md-4 col-sm-3">
                                <img src="images/4.jpg" alt="ginanjar" class="img-responsive " />
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-8">
                                <a href="" style="font-size:13px; font-weight:bold; color:#008FD7;">Jean Myers</a><br/>
                                <p style="font-size:11px; " class="  text-muted c-info" > 02 Februari 2016</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                    <ul class="list-group col-md-12 col-lg-12 col-xs-12" id="contact-list">
                        <h5 style="    padding: 10px 0 10px 20px;background: #fff;margin: 0;border: 1px solid #eee;">
                        <i class="fa fa-trophy gdp-circle"></i> 
                        Anggota Baru
                        </h5>
                        <li class="list-group-item col-xs-6 col-md-12 col-lg-12">
                            <div class="col-xs-3 col-md-4 col-sm-3">
                                <img src="images/g.png" alt="ginanjar" class="img-responsive " />
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-8">
                                <a href="" style="font-size:13px; font-weight:bold; color:#008FD7;">Jean Myers</a><br/>
                                <p style="font-size:11px; " class="  text-muted c-info" > 02 Februari 2016</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li class="list-group-item col-xs-6 col-md-12 col-lg-12">
                            <div class="col-xs-3 col-md-4 col-sm-3">
                                <img src="images/G.png" alt="ginanjar" class="img-responsive img " />
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-8">
                                <a href="" style="font-size:13px; font-weight:bold; color:#008FD7;">Jean Myers</a><br/>
                                <p style="font-size:11px; " class="  text-muted c-info" > 02 Februari 2016</p>
                            </div>
                        <div class="clearfix"></div>
                        </li>
                        <li class="list-group-item col-xs-6 col-md-12 col-lg-12">
                            <div class="col-xs-3 col-md-4 col-sm-3">
                                <img src="images/4.jpg" alt="ginanjar" class="img-responsive " />
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-8">
                                <a href="" style="font-size:13px; font-weight:bold; color:#008FD7;">Jean Myers</a><br/>
                                <p style="font-size:11px; " class="  text-muted c-info" > 02 Februari 2016</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
                <!-- ========================= End Right HOME Tab ============================= -->
            </div>
            <!-- ========================= End HOME Tab ============================= -->
            <!-- ========================= Start Tentang Tab ============================= -->
            <div role="tabpanel" class="gdptab fade" id="tentang" aria-labelledby="profile-tab">
                <section style="border:1px solid #ddd; background:#fff;" class="col-xs-12 col-md-12 col-lg-12" >
                    <div class="wizard" >
                        <div class="wizard-inner">
                        <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li style="width:33.333%" role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Pendidikan">
                                        <span class="round-tab">
                                            <i class="fa fa-graduation-cap "></i>
                                        </span>
                                    </a>
                                </li>
                                <li style="width:33.333%" role="presentation" >
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Info Kontak Dan Dasar">
                                        <span class="round-tab">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </a>
                                </li>
                                <li style="width:33.333%" role="presentation" >
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Tempat Tinggal">
                                        <span class="round-tab">
                                            <i class="fa fa-home"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <form role="form">
                            <div style="padding:20px 0;"class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 style="font-weight:bold; color:#008FD7; margin:10px 0; text-align:center;">Pendidikan</h4>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <ul class="list-group">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >Sekolah Dasar</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">Sd Negri 16 Harapan jaya 2</li>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >SMP</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">SMPN 4 Tangerang</li>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >02 Februari 2016</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">SMAN 4 Bekasi</li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 style="font-weight:bold; color:#008FD7; margin:10px 0; text-align:center;">Info Kontak Dan Dasar</h4>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <ul class="list-group">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >No Handphone</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">087885335741</li>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >Telp. Rumah</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">(021) - 88961810</li>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >Email</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">Ginanjarputranto91@gmail.com</li>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >Tanggal Lahir</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">30 Oktober 1991</li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h4 style="font-weight:bold; color:#008FD7; margin:10px 0; text-align:center;">Tempat Tinggal</h4>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <ul class="list-group">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >Kota Asal</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">087885335741</li>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <h5 style="font-weight:bold;" >Tempat Anda Tinggal</h5>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <li style="border:2px dotted #008FD7;color:#008FD7;" class="list-group-item">(021) - 88961810</li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <!-- ========================= End Tentang Tab ============================= -->
            <!-- ========================= Start Adu Kepintaran Tab ============================= -->
            <div role="tabpanel" class="gdptab fade" id="adukepintaran" aria-labelledby="adukepintaran">
                <div style="margin:10px 0; padding: 10px;border:1px solid #ddd; background: #fff;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <a href="#" class="btn btn-primary openall">open all</a> <a href="#" class="btn btn-primary closeall">close all</a>
                    <hr>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background: #008FD7;">
                                <a class="accordion-toggle" style="color: #fff;" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <h4 class="panel-title">
                                        Collapsible Group Item #1
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    ONe Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background: #008FD7;color: #fff;">
                                <a class="accordion-toggle" style="color: #fff;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <h4 class="panel-title">
                                        Collapsible Group Item #2
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Two Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background: #008FD7;color: #fff;">
                                <a class="accordion-toggle" style="color: #fff;" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <h4 class="panel-title">
                                        Collapsible Group Item #3
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Three Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================= End Adu Kepintaran Tab ============================= -->
            <!-- ========================= Start Nilai TryOut Tab ============================= -->
            <div  role="tabpanel" class="gdptab fade" id="nilaiTryout" aria-labelledby="nilaiTryout-tab">
                <div style="padding: 10px;background: #fff;border:1px solid #ddd; " class="col-lg-12 col-md-12 col-sm-12 ">
                    <div id="chartContainer" style="height: 300px; width: 100%!important;"></div>
                </div>
                <div style="margin:30px 0; padding: 10px;background: #fff;border:1px solid #ddd; " class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="table-responsive">          
                        <table  class="table table-striped table-bordered">
                            <thead>
                                <tr >
                                    <th style="text-align:center;">No</th>
                                    <th style="text-align:center;">Mata Pelajaran</th>
                                    <th style="text-align:center;">Jumlah Soal</th>
                                    <th style="text-align:center;">Jawaban Benar</th>
                                    <th style="text-align:center;">Jawaban Salah</th>
                                    <th style="text-align:center;">Nilai</th>
                                    <th style="text-align:center;">Target</th>
                                    <th style="text-align:center;">Status Target</th>
                                </tr>
                            </thead>
                        <tbody style="text-align:center;">
                            <tr>
                                <td>1</td>
                                <td>Biologi</td>
                                <td>100</td>
                                <td>70</td>
                                <td>30</td>
                                <td>70</td>
                                <td>100</td>
                                <td class="gdptdktrc">Tidak Tercapai</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>fisika</td>
                                <td>100</td>
                                <td>70</td>
                                <td>30</td>
                                <td>70</td>
                                <td>60</td>
                                <td class="gdptrc">Tercapai</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>kimi</td>
                                <td>100</td>
                                <td>70</td>
                                <td>30</td>
                                <td>70</td>
                                <td>70</td>
                                <td class="gdptrc">Tercapai</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div style="margin:10px 0;padding: 10px;background: #fff;overflow:hidden; border:1px solid #ddd; " class="col-lg-12 col-md-12 col-sm-12 ">
                    <h4 style="font-weight:bold; margin:10px 0;">Mata Pelajaran</h4>
                    <div  style="padding:10px; "class="col-lg-4 col-md-4 col-xs-6  portfolio-item">
                        <div style="border:1px solid #eee;padding:10px; " class="col-md-12 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="images/matapelajaran/matematika.png" alt=""/>
                            </a>
                            <h4 >
                                <a style="color:#008FD7;" href="#">Matematika</a>
                            </h4>
                        </div>
                    </div>
                    <div  style="padding:10px; "class="col-lg-4 col-md-4 col-xs-6  portfolio-item">
                        <div style="border:1px solid #eee;padding:10px; " class="col-md-12 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="images/matapelajaran/biologi.png" alt="">
                            </a>
                            <h4 >
                                <a style="color:#008FD7;" href="#">BiologI</a>
                            </h4>
                        </div>
                    </div>
                    <div  style="padding:10px; "class="col-lg-4 col-md-4 col-xs-6  portfolio-item">
                        <div style="border:1px solid #eee;padding:10px; " class="col-md-12 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="images/matapelajaran/fisika.png" alt="">
                            </a>
                            <h4>
                                <a style="color:#008FD7;" href="#">Fisika</a>
                            </h4>
                        </div>
                    </div>
                    <div  style="padding:10px; "class="col-lg-4 col-md-4 col-xs-6  portfolio-item">
                        <div style="border:1px solid #eee;padding:10px; " class="col-md-12 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="images/matapelajaran/binggris.png" alt=""/>
                            </a>
                            <h4>
                                <a style="color:#008FD7;" href="#">Bahasa Inggris</a>
                            </h4>
                        </div>
                    </div>
                    <div  style="padding:10px; "class="col-lg-4 col-md-4 col-xs-6  portfolio-item">
                        <div style="border:1px solid #eee;padding:10px; " class="col-md-12 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="images/matapelajaran/kimia.png" alt=""/>
                            </a>
                            <h4>
                                <a style="color:#008FD7;" href="#">Kimia</a>
                            </h4>
                        </div>
                    </div>
                    <div  style="padding:10px; "class="col-lg-4 col-md-4 col-xs-6  portfolio-item">
                        <div style="border:1px solid #eee;padding:10px; " class="col-md-12 portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="images/matapelajaran/bindonesia.png" alt=""/>
                            </a>
                            <h4>
                                <a style="color:#008FD7;" href="#">Bahasa Indonesia</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================= End Nilai TryOut Tab ============================= -->
            <!-- ========================= Start Gallery Tab ============================= -->
            <div role="tabpanel"  class="gdptab fade" id="foto" aria-labelledby="profile-tab">
                <section style="background:#f0f0f0!important;" id="portfolio">  
                    <div style="margin: 10px 0 0 0; padding:10px 0; background:#008FD7!important;overflow:hidden;"  class="col-lg-12 col-md-12 col-sm-12">
                        <ul style="margin: 0;" class="portfolio-filter text-center">
                            <li><a class="btn btn-default active" href="#" data-filter="*">Semua</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Gambar</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".html ">Video</a></li>
                        </ul>
                    </div>
                    <div style="margin: 0; padding:20px 0; overflow:hidden;" class="col-lg-12 col-md-12 col-sm-12">
                        <div class="portfolio-items">
                            <div class="portfolio-item apps  col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" href="images/portfolio/full/item1.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i> 
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item joomla bootstrap col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" title="ginanjar"  href="images/portfolio/full/item2.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" alt="caption text" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i>
                                        </div> 
                                    </div>
                                </div>          
                            </div>
                            <div class="portfolio-item joomla bootstrap col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" href="images/g.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i> 
                                        </div> 
                                    </div>
                                </div>          
                            </div>
                            <div class="portfolio-item bootstrap bootstrap col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" href="images/portfolio/full/item3.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i> 
                                        </div> 
                                    </div>
                                </div>     
                            </div>
                            <div class="portfolio-item joomla bootstrap apps col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" href="images/portfolio/full/item4.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i> 
                                        </div> 
                                    </div>
                                </div>           
                            </div>
                            <div class="portfolio-item joomla html bootstrap col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" href="images/portfolio/full/item5.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i> 
                                        </div> 
                                    </div>
                                </div>      
                            </div>
                            <div class="portfolio-item bootstrap html apps col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" href="images/portfolio/full/item6.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i>
                                        </div> 
                                    </div>
                                </div>         
                            </div>
                            <div class="portfolio-item bootstrap html col-sm-2 col-xs-6 col-md-3">
                                <div class="recent-work-wrap">
                                    <a class="preview" href="images/portfolio/full/item7.png" data-title="People walking down stairs" data-toggle="lightbox" data-gallery="imagesizes">
                                        <img class="img-responsive" src="images/g.png" alt="">
                                    </a>
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <h5><a href="#">Business theme</a></h5>
                                            <i class="fa fa-eye"></i>
                                        </div> 
                                    </div>
                                </div>          
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ========================= End Gallery Tab ============================= -->
        </div>
        <!-- ========================= End Isi Tab ============================= -->
    </div>
    <!-- =============================== End Start Tab ================================================== --> 
</div>
<!-- ========================================= ENd Content ============================================= -->
<?php include('include/footer.php') ?>