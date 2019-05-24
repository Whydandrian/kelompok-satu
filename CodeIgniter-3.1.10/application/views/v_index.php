	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Perhiasan Mantap</h2>
				<p>Perhiasan ini terbuat dari emas loo.</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="<?php echo base_url(); ?>/assets/img/parallax-slider/liontin.jpg" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Liontin </h2>
				<p>Kami memiliki banyak koleksi Liontin putih.</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="<?php echo base_url(); ?>/assets/img/parallax-slider/liontin1.jpg" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Liontin Emas</h2>
				<p>Kami memiliki Banyak koleksi Liontin Emas.</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="<?php echo base_url(); ?>/assets/img/parallax-slider/liontin2.jpg" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>Custom T-Shirt</h2>
				<p>Kami menerima pembuatan kaos custom sesuai dengan design keinginan anda dengan harga yang bisa di sesuaikan dengan kebutuhan anda.</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="<?php echo base_url(); ?>/assets/img/parallax-slider/liontin3.jgp" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
        		<p>
					Kami adalah Toko Emas online yang menjualan emas secara online dan pemesanan emas secara online sesuai dengan keinginan pelanggan. Selamat Berbelanja Customer..
				</p>
        		<p><a class="btn btn-success btn-large" href="produk.php">Mulai Berbelanja Yokk &raquo;</a></p>
                                
      		</div>
            <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
            
      		<div class="row">
	                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_Barang DESC limit 9");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['nama']; ?></h3></div>
                        <img src="<?php echo base_url(); ?>/assets/admin/foto/02012019173231liontin.jpg"
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['id_Barang'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['id_Barang'];?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php   
              	}
              ?>
<!---->
      		</div>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>Tentang E-GOLD</h3>
					<p>
						E-GOLD adalah toko online yang bergerak di bidang penjualan dan pemesanan emas secara online, sasaran kami adalah masyarakat khusus di daerah kota Jember.
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Alamat Kami</h3>
					Masih belum bangun tokonyaa.
				</div>
				<!-- end: Photo Stream -->				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				Copyright &copy; <a href="http://www.niqoweb.com">DistroIT 2015</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster | Modified By : Whyd's and groups
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>/assets/js/jquery-1.8.2.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/flexslider.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/carousel.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.cslider.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/slider.js"></script>
<script defer="defer" src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>