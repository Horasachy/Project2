<?php require ROOT.'/views/layouts/admin_header.php'?>
<!-- Контент -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="about">
				<!-- блок аккордеон -->
				<div class="row">
					<div class="col-md-6">
						<center><h4 class="h4-b">Контакты</h4></center>
						<?=$contactsRow['contacts'];?>
						<?if(!empty($_SESSION['admin'])):?>
						<form method="POST" action="" id="AddContactsForm">
							<h4 style="margin-bottom: 20px;">Добавление контактной информации</h4>
							<textarea name="contacts" placeholder="Контактная информация:" class="form-control"></textarea><br>
							<input class="addNews" type="submit" name="addContacts" value="Опубликовать">
							<div class="errors"></div>
						</form>
						<?endif;?>
						<center><h4 class="h4-b">Документы</h4></center>
						<?foreach ($documentRow as $row):?>
						<li><a target="_blank" href="adminAbout/<?=$row['id']?>"> <?=$row['name']?></a></li>
						<?if(!empty($_SESSION['admin'])):?>
						<form method="POST" action="">
							<input type="hidden" name="idDocuments" value="<?=$row['id'];?>">
							<input class="removeNews" type="submit" name="removeDocument" value="Удалить">
							<?endif;?>
						</form>
						<?endforeach;?>
						<?if(!empty($_SESSION['admin'])):?>
						<form enctype="multipart/form-data" method="POST" action="" id="AddDocumentsForm">
							<h4 style="margin-bottom: 20px;">Добавление документов</h4>
							<input type="file" name="document" class="form-control"><br>
							<input class="addNews" type="submit" name="addDocument" value="Опубликовать">
						</form>
						<?endif;?>
					</div>
					<div class="col-md-6">
						<?foreach ($accordionRow as $row):?>
						<div class="accordion">
							<center><h4 class="h4-b">Определения</h4></center>
							<section class="accordion_item">
								<h3 class="title_block"><?=$contactsRow['accordion_title'];?></h3>
								<div class="info">
									<p class="info_item"><?=$contactsRow['accordion_content'];?></p>
								</div>
							</section>
						</div>
						<?endforeach;?>
						<?if(!empty($_SESSION['admin'])):?>
						<form method="POST" action="" id="AddAccordionForm">
							<h4 style="margin-bottom: 20px;">Добавление определения</h4>
							<input type="text" class="form-control" name="accordion_title" placeholder="Заголовок:"><br>
							<textarea name="accordion_content" placeholder="Текст:" class="form-control"></textarea><br>
							<input class="addNews" type="submit" name="addAccordion" value="Опубликовать">
						</form>
						<?endif;?>
					</div>
					<!-- конец блока аккордеон -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php require ROOT.'/views/layouts/admin_footer.php'?>
