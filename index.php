
<html lang="en">
<?php include('include/header.php') ?>
    <!-- Modal Masuk/Login -->
    <!-- Modal -->
<body>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <p style="text-align:center;"> <img style="width:25%; margin:20px auto!important;" src="images/to.png"></p>
      </div>
      <div style="padding:0 50px;" class="modal-body">
           <form  role="form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Kata Sandi</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="form-group"> 
                  <p style="text-align:center;"><a href="home.php"  type="submit" style="width:100%; background-color: #F46C28;border-color: #F46C28;" class="btn btn-success">Masuk </a> </p>
              </div>
              <div class="form-group"> 
                   <p style="text-align:center;"><span> Atau</span></p>
              </div>
              <div class="form-group"> 
                   <p style="text-align:center;"><button  type="submit" style="width:100%; background:#3b5998!important;" class="btn btn-success">
                    <i style="font-size:20px; margin-right:10px;" class="fa fa-facebook"> </i> Akun Facebook </button></p>
              </div>
              <div class="form-group"> 
                  <p style="text-align:center;"> Tryout Membantu para pelajar untuk berlatih mengerjakan soal dengan praktis </p>
              </div>
            </form>
      </div>
      <div class="modal-footer"></div>
    </div>

  </div>
</div>
<!-- End Modal Masuk/Login-->

    <!-- Modal Daftar/sign in -->
    <!-- Modal -->
<div id="myModalSignin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <p style="text-align:center;"> <img style="width:25%; margin:20px auto!important;" src="images/to.png"></p>
      </div>
      <div style="padding:0 50px;" class="modal-body">
           <form  role="form">
            <div class="form-group">
                <label for="name">Nama <span style="color:red;">*</span> </label>
                <input type="text" name="name" class="form-control" id="text">
              </div>
            <div class="form-group">
                <label for="email">Email <span style="color:red;">*</span> </label>
                <input type="email" name="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Kata Sandi <span style="color:red;">*</span> </label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <label for="pwd">Ulangi Kata Sandi <span style="color:red;">*</span></label>
                <input type="password" class="form-control" id="pwd">
              </div>
               <div class="form-group">
              <label for="pwd">Tanggal Lahir <span style="color:red;">*</span></label>
         
            <div class="row">
                <div class="col-xs-4">
                    <select class="form-control">
                      <option>Tanggal</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <select class="form-control">
                      <option>Bulan</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <select class="form-control">
                      <option>Tahun</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
            </div>
               </div>
              <div class="form-group">
                <label for="pwd">Pekerjaan <span style="color:red;">*</span></label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <div class="form-group">
                <label for="pwd">Kota <span style="color:red;">*</span></label>
                <input type="password" class="form-control" id="pwd">
              </div>
               <div class="form-group">
                <label for="pwd">Jenis Kelamin <span style="color:red;">*</span></label>
                <select class="form-control">
                  <option>Pria</option>
                  <option>Wanita</option>
                </select>
              </div>
              <div class="form-group"> 
                  <p style="text-align:center;"><button  type="submit" style="width:100%; background-color: #F46C28;border-color: #F46C28;" class="btn btn-success">Daftar </button> </p>
              </div>
              <div class="form-group"> 
                  <p style="text-align:center;">Dengan Klik <b>Daftar</b> Anda Menyetujui <a style="color:blue;cursor:pointer;"data-dismiss="modal" data-toggle="modal" data-target="#myModal" >Syarat dan Ketentuan</a> </p>
              </div>
            </form>
            <div class="modal-footer"></div>
      </div>
    </div>

  </div>
</div>
<!-- End Modal Daftar/signin-->
    <!-- Menu header -->
	<div class="navbar-more-overlay"></div>
  <div>
    <nav class="navbar navbar-inverse navanjar navbar-fixed-top animate">
        <div style="padding:15px!important;"class="container navbar-more visible-xs">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">
                        <span class="menu-icon fa fa-unlock-alt"></span>
                        <span data-toggle="modal" data-target="#myModal">Masuk</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                         <span class="menu-icon fa fa-user"></span>
                         <span data-toggle="modal" data-target="#myModalSignin" >Daftar</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="navbar-header hidden-xs">
                <a class="navbar-brand" style="height:auto; width:130px;" href="#"><img style="width:100%;"src="images/to.png"></a>
            </div>

            <ul class="nav navbar-nav navbar-right mobile-bar">
                <li>
                    <a style="color:#000;" href="#">
                        <span class="hidden-xs fa fa-unlock-alt"></span>
                         <span data-toggle="modal" data-target="#myModal" class="hidden-xs">Masuk</span>
                         <span class="visible-xs"><img style="width:90px;"src="images/to.png"></span>
                    </a>
                </li>
                <li class="hidden-xs">
                    <a style="color:#000;"href="#">
                        <span class="fa fa-user"></span>
                         <span data-toggle="modal" data-target="#myModalSignin" class="hidden-xs">Daftar</span>
                    </a>
                </li>
                <li class="visible-xs anjarhov">
                    <a href="#navbar-more-show">
                        <span class="menu-icon fa fa-bars"></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
  </div>
	<!-- Ending Menu header -->
	<section id="main-slider"  class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active genjer" >
                    <div  style="padding:15px!important;" class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div style="margin: 0;" class="carousel-content">
                                    <h2 style="margin-bottom: 10px; line-height:1.3;font-size:30px; font-weight: 700;" class="animation animated-item-1">Sukses SNMPTN / UN Dengan TryOut</h2>
                                    <p style="margin: 40px 0; font-size:20px; line-height:1.4; color:#fff;" class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</p>
                                    
                                    <form>
                                        <div class="form-group">
                                        <div class="col-md-6">
                                          <label style="color:#fff;"for="sel1">Tingkat Sekolah:</label>
                                          <select class="form-control" id="sel1">
                                            <option>SD</option>
                                            <option>SMP</option>
                                            <option>SMA</option>
                                            <option>UMUM</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                          <label style="color:#fff;" for="sel1">Mata Pelajaran:</label>
                                          <select class="form-control" id="sel1">
                                            <option>Matematika</option>
                                            <option>Fisika</option>
                                            <option>Biologi</option>
                                            <option>Sejarah</option>
                                          </select>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="col-lg-12">
                                    <a class="btn-slide animation animated-item-3" href="#">Coba Ujian</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/un.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div style="padding:15px!important; "  class="container">
            <div class="row">
            <div class="col-md-6">
    			<div class="text-center">
    				<div  class="col-md-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                        <div class="col-sm-12">
    						<h2>Tentang Try Out</h2>	
                        </div>
                        <div class="col-sm-12">
    						<p style="margin-bottom:10px;">Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                        </div>
                        <div class="col-sm-12">
                        <ul>
                            <li style="color:#333; text-align: left; font-size: 13px;;"> Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</li>
                            <li style="color:#333; text-align: left; font-size: 13px;;"> Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</li>
                            <li style="color:#333; text-align: left; font-size: 13px;;"> Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</li>
                        
                        </ul>
                        </div>
    					</div>
    				</div>
    			</div>
                </div>        
        	<div class="col-md-6">        
    			<div class="text-center">
                
    				<div  class="col-md-12">
    				<div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">                    
        						<i style="padding:25px 30px; margin:20px 0;" class="fa fa-user"></i>	
                            </div>
                            <div class="col-sm-7">                                            
        						<h2>Individu</h2>
        						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                            </div>                        
    					</div>
    				</div>
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<i style="padding:25px 30px; margin:20px 0;" class="fa fa-building"></i>	
                            </div>
                            <div class="col-sm-7">
        						<h2>Sekolah</h2>
        						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                            </div>
    					</div>
    				</div> 
                    </div>                   
    			</div>
            </div> 
            </div>           
		</div>
	</div>
	
	<div class="about">
		<div style="padding:15px!important;"  class="container">
            <div class="row">
            <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
					<h2 style="text-align: center; font-weight: bold; font-size:25px;">Tingkat Sekolah</h2> 
            <div class="text-center">
                 <div  class="col-md-12">   
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<i style="padding:25px 20px; margin:20px 0;" class="fa fa-graduation-cap"></i>	
                            </div>
                            <div class="col-sm-8">
        						<h2 style="line-height: 1.5;">Sekolah Dasar</h2>
        						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                            </div>
    					</div>
    				</div>  
                    
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<i style="padding:25px 20px; margin:20px 0;" class="fa fa-graduation-cap"></i>    
                            </div>
                            <div class="col-sm-8">
        						<h2 style="line-height: 1.5;">Sekolah Menengah Pertama</h2>
        						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                            </div>
    					</div>
    				</div>  
                    
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<i style="padding:25px 20px; margin:20px 0;" class="fa fa-graduation-cap"></i>    
                            </div>
                            <div class="col-sm-8">
        						<h2 style="line-height: 1.5;">Sekolah Menengah Atas</h2>
        						<p>Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.</p>
                            </div>
    					</div>
    				</div>   
                </div>
                </div>                
            </div>
			<div class="col-md-6 wow fadeInDown hidden-xs " data-wow-duration="1000ms" data-wow-delay="300ms" >
					<h2 style="text-align: center; font-size:25px; font-weight: bold;">Cara Kerja</h2> 
             <div class="text-center">
             <div  class="col-sm-12">             
				<img style="margin:50px auto auto auto; width:100%;" src="images/pc.png" class="img-responsive"/>
                </div>                
			</div>
            </div>
            </div>
			</div>
		</div>
    
    <div class="feature">
    
            	<h2 style="text-align: center; font-size:25px; font-weight: bold;">Kategori Mata Pelajaran</h2> 
		<div style="padding:15px!important;"  class="container">  
        <div class="row">    
        	<div style="margin-top: 50px;;" class="col-lg-12">       
    			<div class="text-center">
    				<div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        						<img class="img-responsive "src="images/matapelajaran/matematika.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">Matematika</p>
                            </div>
    					</div>
    				</div>
                    <div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive "src="images/matapelajaran/fisika.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">Fisika</p>
                            </div>
    					</div>
    				</div>
                    <div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive "src="images/matapelajaran/biologi.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">Biologi</p>
                            </div>
    					</div>
    				</div>
                    <div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive "src="images/matapelajaran/kimia.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">kimia</p>
                            </div>
    					</div>
    				</div>
                    <div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive "src="images/matapelajaran/bindonesia.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">Bahasa Indonesia</p>
                            </div>
    					</div>
    				</div>
                    <div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive "src="images/matapelajaran/binggris.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">Bahasa Inggris</p>
                            </div>
    					</div>
    				</div>   
                    <div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive "src="images/matapelajaran/sosiologi.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">Sosiologi</p>
                            </div>
    					</div>
    				</div>  
                    <div  class="col-sm-3">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img class="img-responsive "src="images/matapelajaran/sejarah.png">
                            </div>
                            <div class="col-sm-12">
        						<p style="text-align: center; margin-top:20px; line-height:1.5">Sejarah</p>
                            </div>
    					</div>
    				</div>  
    				</div>               
    			</div>
            </div>
            </div>            
		</div>
	</div>
	
	<div class="genjer">
    	<h2 style="text-align: center; color:#fff;font-size:25px; font-weight: bold;">Skor Tertinggi</h2> 
	<div style="padding:15px!important;"  class="container">
            <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >	
            <div class="text-center">
            	<h2 style="text-align: center; color:#fff; ">Sekolah Dasar</h2> 
                 <div  class="col-md-12">   
                   <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Genjer</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; color:#008FD7; background:#fff;">
                                    70%
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div> 
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Anjar</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%; color:#008FD7; background:#fff;">
                                    30%
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
                </div>
                </div>                
            </div>
             <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >	
            <div class="text-center">
            	<h2 style="text-align: center; color:#fff;">Sekolah Menengah Pertama</h2> 
                 <div  class="col-md-12">   
                   <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Genjer</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; color:#008FD7; background:#fff;">
                                    70%
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div> 
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Anjar</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%; color:#008FD7; background:#fff;">
                                    30%
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
                       
                </div>
                </div>                
            </div>
             <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >	
            <div class="text-center">
            	<h2 style="text-align: center;color:#fff; ">Sekolah Menengah Atas</h2> 
                 <div  class="col-md-12">   
                  <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Genjer</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; color:#008FD7; background:#fff;">
                                    70%
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div> 
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Anjar</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%; color:#008FD7; background:#fff;">
                                    30%
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
                </div>
                </div>                
            </div>
             <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >	
            <div class="text-center">
            	<h2 style="text-align: center;color:#fff; ">Quiz</h2> 
                 <div  class="col-md-12">   
                   <div style="margin: 10px 0;" class="col-sm-12">
    					<div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Genjer</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; color:#008FD7; background:#fff;">
                                    70%
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div> 
                    <div style="margin: 10px 0;" class="col-sm-12">
    					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                            <div class="col-sm-4">
        						<img style="width: 60px; margin-bottom:0; height: 60px; border-radius:100%;" src="images/ganteng.png" />
                            </div>
                            <div class="col-sm-8">
        						<p style="line-height: 1.5; color:#fff; font-size: 15px; font-weight:bold;">Anjar</p>
                                <div class="progress genjer-progres">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%; color:#008FD7; background:#fff;">
                                    30%
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
	<section id="partner">
        <div style="padding:15px!important;"  class="container">
            <div class="center wow fadeInDown">
                <h2>Partners Kami</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/iti.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/gramedia.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->
	
	<section id="conatcat-info">
        <div style="padding:15px!important;"  class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Pertanyaan </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
  </body>
<?php include('include/footer.php') ?>