<!-- widget Arsip Artikel -->

<style type="text/css">
	#arsip_artikel .nav > li.active > a {}
	
	#arsip_artikel td { padding-bottom: 2px; }
</style>

<style type="text/css">
	.contenth {
  display: flex;
}

.contenth img {
  margin-right: 10px;
  display: block;
}

.contenth h3,
.contenth p {margin: 0;}
</style>
<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title"><a href="<?= site_url("arsip")?>"><i class="fal fa-archive"></i> Arsip Artikel</a></h3>
	</div>
	<div id="arsip_artikel" class="box-body">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#terkini">Terkini</a></li>
			<li><a data-toggle="tab" href="#populer">Populer</a></li>
			<li><a data-toggle="tab" href="#acak">Acak</a></li>
		</ul>
		<div class="tab-content">

			<?php foreach (array('terkini' => 'arsip_terkini', 'populer' => 'arsip_populer', 'acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
				<div id="<?= $jenis ?>" class="tab-pane fade in <?php ($jenis == 'terkini') and print('active') ?>">
				
						<?php foreach ($$jenis_arsip as $arsip): ?>
							
									<div >
									<a href="<?= site_url('artikel/'.buat_slug($arsip))?>">
										
										<div class="float-start mb-3" style="width: 100% !important">


	<?php $image = ($arsip['gambar'] && is_file(LOKASI_FOTO_ARTIKEL."kecil_$arsip[gambar]"))? 
											AmbilFotoArtikel($arsip['gambar'],'kecil') :
											base_url($this->theme_folder.'/'.$this->theme .'/assets/images/placeholder.png');
											?>

<div class="card" >
<div class="card-body contenth float-start ">
  	<img src="<?= $image ?>" alt="Logo <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>" class="img-fluid" style="width: 60px; height: 60px; object-fit: cover; background-position: center;" >
  <div class="text">
    <font style="font-weight:401;" ><?= $arsip['judul']?></font>
    <p><small><i class="fal fa-calendar"></i> &nbsp;&nbsp;<?= tgl_indo($arsip['tgl_upload']) ?>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fal fa-eye"></i> <?= hit($arsip['hit']) ?></small></p>
  </div>
</div>

</div>
										</div>
									</a>
									</div>
							
						<?php endforeach; ?>
					
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
