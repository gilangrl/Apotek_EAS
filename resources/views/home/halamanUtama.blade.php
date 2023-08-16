@extends('master.index')

@section('home')
<div class="container"  style="margin-top:10%; ">
	<div class="row">
		<div class="col-sm-6">
			<h1 class="title-utama">Selamat Datang di Apotek Terpercaya, Solusi Kesehatan Anda!</h1>
			<p class="title-kedua">Kami adalah destinasi terbaik untuk semua kebutuhan kesehatan Anda</p>
			<a href="" class="btn tombol">Start Here</a>
		</div>
		<div class="col-sm-6 mx-auto" >
			<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_jcsfwbvi.json"  background="transparent"  speed="1" width="50" hover loop  autoplay style="margin-left: 20%;">
				
			</lottie-player>
		</div>
	</div>

	<div class="row justify-content-center" style="margin-top:20rem;">
		<div class="col-lg-6">
            <div class="text-center mb-4 pb-1">
                <h3 class="health mb-3">Healthcare Services</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur praesentium optio sunt culpa officia atque alias commodi. Molestiae repudiandae mollitia ad commodi, praesentium officia nam. Accusantium deleniti et, doloremque repudiandae.</p>
            </div>
        </div>
	</div>

	<div class="row" style="margin-top: 10%;">
        <div class="col-lg-4 col-md-6">
            <div class="features-box text-center">
                <div class="features-img mb-4">
                    <img src="assets/images/lab.png" alt="" width="50">
                </div>
                <h4 class="mb-2">Laboratorium</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aperiam dolorem soluta.</p>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-4 col-md-6">
            <div class="features-box text-center">
                <div class="features-img mb-4 ">
                    <img src="assets/images/nurse.png" alt="" width="50">
                </div>
                <h4 class="mb-2">Konseling Kesehatan</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, sint.</p>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-4 col-md-6">
            <div class="features-box text-center">
                <div class="features-img mb-4 ">
                    <img src="assets/images/stetoskop.png" alt="" width="50">
                </div>
                <h4 class="mb-2">Periksa Online</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil.</p>
            </div>
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-md-6 mt-5">
            <div class="features-box text-center">
                <div class="features-img mb-4 ">
                    <img src="assets/images/suntikan.png" alt="" width="50">
                </div>
                <h4 class="mb-3">Vaksinasi</h4>
                <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-6 col-md-6 mt-5">
            <div class="features-box text-center">
                <div class="features-img mb-4 ">
                    <img src="assets/images/tas.png" alt="" width="50">
                </div>
                <h4 class="mb-3">Obat obatan</h4>
                <p class="text-muted">If several languages coalesce the grammar of the is more simple languages.</p>
            </div>
        </div>
    </div>
        <!-- end row --> 
      <div class="footer" style="margin-top: 20%; min-height:10vh;">
	     <footer>
	     	<div class="row">
		     		<div class="col-sm-12 text-center">
						<a href="https://www.instagram.com/" class="me-2"><img src="assets/images/instagram.png" alt="" width="35"></a>
						<a href="#" class="me-2"><img src="assets/images/github.png" alt="" width="35"></a>
						<a href="https://id.linkedin.com/" class="me-2"><img src="assets/images/linkedin.png" alt="" width="35"></a>
		     		</div>
		     	</div>
		     	<div class="row">
		     		<div class="col-sm-12 mt-3">
		     			<p style="font-weight: 300; font-size: 15px; line-height: 15px; font-family: 'Poppins', sans-serif; text-align: center;">&copyG.R.L <script>document.write(new Date().getFullYear())</script></p>
		     		</div>
		     	</div>
		     	
	     </footer>
     </div>
</div>


@endsection