<?php require ROOT.'/views/layouts/header.php'?>
<!-- Контент -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="about">
				<!-- блок аккордеон -->
				<div class="col-md-12">
						<center><h4 class="h4-b">Контакты</h4></center>
						<b class="about_title">Наименование:</b><br>
						<p class="about_text">Многофункциональный центр прикладных квалификаций государственного автономного профессионального образовательного учреждения Башкирский колледж архитектуры, строительства и коммунального хозяйства (МЦПК ГАПОУ БАСК)</p>
						<b class="about_title">Адрес:</b><br>
						<p class="about_text">450055, Республика Башкортостан, г. Уфа, проспект Октября, 174, каб. 13.</p>
						<b class="about_title">Тел.:</b><br>
						<p class="about_text">8(347) 292-72-18</p>
						<b class="about_title">Моб. тел.:</b><br>
						<p class="about_text">8-987-09-11-047</p>
						<b class="about_title">Эл. почта:</b><br>
						<p class="about_text">bask-uc@mail.ru<br>
						bask_sdo@mail.ru (Электронное образование)</p>
						<b class="about_title">Режим и график работы:</b><br>
						<p class="about_text">
							Понедельник - Пятница<br>
							8:30 – 17:30<br>
							Перерыв: 12:30 – 13:30<br>
						</p>
				</div>
				<div class="row">
					<div class="col-md-6">
						<center><h4 class="h4-b">Документы</h4></center>
						<?foreach ($documentRow as $row):?>
						<li><a class="documents" target="_blank" href="adminAbout/<?=$row['id']?>"> <?=$row['doc_name']?></a></li>
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
				<a href="http://www.bask-rb.ru/" class="partners">БАСК</a><br>
				<a href="https://umney.ru/" class="partners">УМНЕЙ</a><br>
				<a href="https://www.knauf.ru/academy/information/learning-centers/#showtab-tab1428411_3" class="partners">КНАУФ</a><br>
				<a href=" https://www.bosch-professional.com/ru/ru/informaciya/obrazovanie/cpravochnik-resursnyx-centrov-bosch/" class="partners">BOSCH</a><br>
				<a href=" https://worldskills.ru/" class="partners">World Skills</a><br>
				<a href="https://bkrb.ru/ " class="partners">Башкирский кирпич</a><br>
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
