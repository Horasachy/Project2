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
			</aside>
			<aside>
				<h4 class="h4-b">
					Фотоальбом
				</h4>
			</aside>
		</div>
	</div>
</div>
<?php require ROOT.'/views/layouts/admin_footer.php'?>
