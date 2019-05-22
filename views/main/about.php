<?php require ROOT.'/views/layouts/header.php'?>
<!-- Контент -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="about">
				<!-- блок аккордеон -->
				<div class="row">
					<div class="col-md-6">
						<center><h4 class="h4-b">Контакты</h4></center>
						<?=$contactsRow['contacts'];?>
						<center><h4 class="h4-b">Документы</h4></center>
						<?foreach ($documentRow as $row):?>
						<li><a target="_blank" href="adminAbout/<?=$row['id']?>"> <?=$row['name']?></a></li>
						<?endforeach;?>
					</div>
					<div class="col-md-6">
						<center><h4 class="h4-b">Определения</h4></center>
						<?foreach ($accordionRow as $row):?>
						<div class="accordion">
							<section class="accordion_item">
								<h3 class="title_block"><?=$row['accordion_title'];?></h3>
								<div class="info">
									<p class="info_item"><?=$row['accordion_content'];?></p>
								</div>
							</section>
						</div>
						<?endforeach;?>
					</div>
					<!-- конец блока аккордеон -->
				</div>
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
