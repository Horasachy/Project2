<?php require ROOT.'/views/layouts/header.php'?>
<!-- Контент -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="elearning">
				<!-- блок аккордеон -->
				<div class="accordion">
					<section class="accordion_item">
						<h3 class="title_block">Программа СПО</h3>
						<div class="info">
							<p class="info_item">saddasdsad</p>
						</div>
					</section>
					<?php foreach ($doc_spo as $row):?>
						<li><a target="_blank" href="adminElearning/<?=$row['id']?>"><?=$row['name']?></a></li>
					<?php endforeach;?>
				</div>
				<!-- конец блока аккордеон -->
			</div>
		</div>
		<!--правые блоки-->
		<div class="col-md-3">
			<aside>
				<h4 class="h4-b">
					Партнеры
				</h4>
			</aside>
			<aside>
				<h4 class="h4-b">
					Фотоальбом
				</h4>
			</aside>
		</div>
		<!--/правые блоки-->
	</div>
</div>
<?php require ROOT.'/views/layouts/footer.php'?>
