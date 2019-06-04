<?php require ROOT.'/views/layouts/header.php'?>
<!-- Контент -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="about">
				<!-- блок аккордеон -->
				<div class="col-md-12">
						<center><h4 class="h4-b">Контакты</h4></center>
						<?=$contactsRow['contacts'];?>
				</div>
				<div class="row">
					<div class="col-md-6">
						<center><h4 class="h4-b"></h4></center>
						<div class="accordion">
							<section class="accordion_item">
								<h3 class="title_block">Документы</h3>
								<div class="info">
										<?foreach ($documentRow as $row):?>
						<li><a target="_blank" href="adminAbout/<?=$row['id']?>"> <?=$row['doc_name']?></a></li>
						<?endforeach;?>
								</div>
							</section>
						</div>
					
					</div>
					<div class="col-md-6">
						<center><h4 class="h4-b"></h4></center>
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
				<a href="http://www.bask-rb.ru/" class="partners">БАСК</a><br>
				<a href="https://umney.ru/" class="partners">УМНЕЙ</a><br>
				<a href="https://www.knauf.ru/academy/information/learning-centers/#showtab-tab1428411_3" class="partners">КНАУФ</a><br>
				<a href=" https://www.bosch-professional.com/ru/ru/informaciya/obrazovanie/cpravochnik-resursnyx-centrov-bosch/" class="partners">BOSCH</a><br>
				<a href=" https://worldskills.ru/" class="partners">World Skills</a><br>
				<a href="https://bkrb.ru/ " class="partners">Башкирский кирпич</a><br>
			</aside>
				<aside>
					<a href="/gallery" style="cursor: pointer; text-decoration: none; list-style: none; color: black;">
					<h4 class="h4-b">
						Фотоальбом
					</h4>
					<img class="photo" src="../../public/gallery/1.jpg" width="40" height="40" alt="" />
					<img class="photo" src="../../public/gallery/2.jpg" width="40" height="40" alt="" />
					<img class="photo" src="../../public/gallery/3.gif" width="40" height="40" alt="" />
					<img class="photo" src="../../public/gallery/4.jpg" width="40" height="40" alt="" />		
					<img class="photo" src="../../public/gallery/5.jpg" width="40" height="40" alt="" />
					<img class="photo" src="../../public/gallery/6.jpg" width="40" height="40" alt="" />
					<img class="photo" src="../../public/gallery/7.jpg" width="40" height="40" alt="" />		
					<img class="photo" src="../../public/gallery/8.jpg" width="40" height="40" alt="" />
					<img class="photo" src="../../public/gallery/9.jpg" width="40" height="40" alt="" />
				</a>
				</aside>
			</div>
			<!--/правые блоки-->
		</div>
	</div>

	<?php require ROOT.'/views/layouts/footer.php'?>
