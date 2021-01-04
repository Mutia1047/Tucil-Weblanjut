<?= $this->extend('page/layout/header') ?>

<?= $this->section('content') ?>

	<header class="jumbotron text-center">
				<div class="head">
					<h1 class="h1">Selamat Datang</h1>
					<p class="p">Tingkatkan Skill Baca Kamu Dengan Mengikuti Komunitas Ini</p>
				</div>
	</header>

    <div class="container">
				<div class="card-body">
					<h5 class="h5">One Week One Book</h5>
					<p>ini adalah salah satu bagian dari usaha mengajak teman-teman untuk membaca minimal satu buku satu minggu dalam menyerukan gerakan literasi. 
					Biar banyak readers lain yang ikut serta membaca sampai habis dan mengulasnya.</p>
				</div>
			
				<div class="card-body">
					<h5 class="h5">Desa Literasi</h5>
					<p>Gagasan tentang desa Literasi adalah satu usaha kecil di level daerah, dalam skup yang terjangkau agar mudah dioperasionalkan dalam bentuk kegiatan kegiatan praktis. 
					Tujuannya adalah agar capaian dan target bisa terukur, mudah dievaluasi dan dilakukan perbaikan. Membangun Indonesia Dari Kampoeng Halaman</p>
				</div> 

				<div class="detail">
				<br><a class="btn btn-dark btn-lg" href="/page/detail" role="button">Kepengurusan</a>
				</div>

    </div>

<?= $this->endSection('content') ?>