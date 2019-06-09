<?php require ROOT.'/views/layouts/admin_header.php'?>
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
						<?if(!empty($_SESSION['admin'])):?>
						<form method="POST" action="">
							<input type="hidden" name="idDocumentsSpo" value="<?=$row['id'];?>">
							<input class="removeAbout" type="submit" name="removeDocumentSpo" value="Удалить">
							<?endif;?>
						</form>
					<?php endforeach;?>
				</div>
				<?if(!empty($_SESSION['admin'])):?>
				<form enctype="multipart/form-data" method="POST" action="" id="AddDocumentsForm">
					<h4 style="margin-bottom: 20px;">Добавление документов</h4>
					<input type="file" name="documentSpo" class="form-control"><br>
					<input type="text" name="documentNameSpo" class="form-control" placeholder="Имя документа:"><br>
					<input class="addNews" type="submit" name="submit" value="Опубликовать">
				</form>
				<?endif;?>
				<!-- конец блока аккордеон -->

			</div>
		</div>
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
	</div>
</div>
<?php require ROOT.'/views/layouts/admin_footer.php'?>
