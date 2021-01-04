<?= $this->extend('page/layout/header') ?>

<?= $this->section('content') ?>

	<header class="jumbotron text-center">
				<div class="head">
					<h2 class="h2">Daftar Kepengurusan</h2>
				</div>			
	</header>

    <div class="container">
		<ul class="list-group">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($data_pengurus as $detail) : ?>
                    <h2 class="h2"><?= $detail['siapa'] ?></h2>
                    <p><?= $detail['apa'] ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        </ul>
    </div>

<?= $this->endSection('content') ?>