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
						<li><a class="documents" target="_blank" href="adminElearning/<?=$row['id']?>"><?=$row['doc_name']?></a></li>
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
