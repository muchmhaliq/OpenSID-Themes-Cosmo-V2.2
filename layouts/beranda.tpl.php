<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
	$title = (!empty($judul_kategori))? $judul_kategori: 'Artikel Terkini';
	if(is_array($title)){
		foreach($title as $item){
			$title = $item;
		}
	}
?>




<section id="news-list" >

<div class="container mb-" style="margin-top: -16px;">
	
<div class="row ">
<div class="col">

		<?php
		$this->load->view($folder_themes .'/partials/slider');
	
?>

</div>
</div>
	</div>	

<div class="container">
<div class="row">
<div class="col">
<h3 class="content__heading --mb-4 <?php empty($this->input->get('cari')) AND $headline AND $this->uri->segment(2) != 'kategori' AND print('--mt-5') ?>"  style="padding-left: 0px;"><i class="fal fa-newspaper-o"></i> <?= $title ?></h3></div>
<!-- <div class="col-sm-4">
<button id="hidegrid" class="btn btn-light" style="float: right"><i class="fal fa-list"></i></button>
<button id="hidelist" class="btn btn-light" style="margin-right: 10px; float: right"><i class="fal fa-grid"></i></button></div> -->
</div>

<script>
$(document).ready(function(){
 $(".list-show").hide();


   $("#hidegrid").click(function(){
    $(".grid-show").hide();
    $(".list-show").show();

  });
  $("#hidelist").click(function(){
     $(".grid-show").show();
    $(".list-show").hide();
  });
});
</script>
<div class="row">

  	<?php if($artikel) : ?>
				<?php foreach($artikel as $article) : ?>
					<?php $data['article'] = $article ?>
					<?php $this->load->view($folder_themes .'/partials/article_list', $data) ?>
				<?php endforeach ?>
				<?php else : ?>
					<?php $data['title'] = $title ?>
					<?php $this->load->view($folder_themes .'/partials/empty_article', $data) ?>
			<?php endif ?>

</div>
</div>
		
		<?php $this->load->view($folder_themes .'/commons/paging') ?>
	</section>