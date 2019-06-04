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
						<div class="about_form">
							<form method="POST" action="" id="AddContactsForm">
								<h4 style="margin-bottom: 20px;">Редактирование контактной информации</h4>
								<textarea onselect="storeCaret(this)" onclick="storeCaret(this)" onkeyup="storeCaret(this)" rows="10" id="ins-about" name="contacts" placeholder="Контактная информация:" class="form-control"></textarea>
							<button type="button" onclick="insertText(document.getElementById('ins-about'),'<p></p>')">Обзац</button>
							<button type="button" onclick="insertText(document.getElementById('ins-about'),'<em></em>')"><em>K</em></button>
							<button type="button" onclick="insertText(document.getElementById('ins-about'),'<u></u>')"><u>Ч</u></button>
							<button type="button" onclick="insertText(document.getElementById('ins-about'),'<b></b>')"><b>Ж</b></button>
							<button type="button" onclick="insertText(document.getElementById('ins-about'),'<br>')">Отступ</button>
							<button type="button" onclick="insertText(document.getElementById('ins-about'),'<a target=\'_blank\' href=\'Полная ссылка\'>Название ссылки</a>')">Ссылка</button><br><br>
								<input class="addNews" type="submit" name="addContacts" value="Опубликовать">
								<div class="errors"></div>
							</form>
						</div>
						<?endif;?>
						<center><h4 class="h4-b">Документы</h4></center>
						<?foreach ($documentRow as $row):?>
						<li><a target="_blank" href="adminAbout/<?=$row['id']?>"><?=$row['doc_name']?></a></li>
						<?if(!empty($_SESSION['admin'])):?>
						<form method="POST" action="">
							<input type="hidden" name="idDocuments" value="<?=$row['id'];?>">
							<input class="removeAbout" type="submit" name="removeDocument" value="Удалить">
							<?endif;?>
						</form>
						<?endforeach;?>
						<?if(!empty($_SESSION['admin'])):?>
						<form enctype="multipart/form-data" method="POST" action="" id="AddDocumentsForm">
							<h4 style="margin-bottom: 20px;">Добавление документов</h4>
							<input type="file" name="document" class="form-control"><br>
							<input type="text" name="doc_name" class="form-control"><br>
							<input class="addNews" type="submit" name="addDocument" value="Опубликовать">
						</form>
						<?endif;?>
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
						<?if(!empty($_SESSION['admin'])):?>
						<form method="POST" action="">
							<input type="hidden" name="idAccordion" value="<?=$row['id'];?>">
							<input class="removeAbout" type="submit" name="removeAccordion" value="Удалить">
						</form>
						<?endif;?>
						<?endforeach;?>
						<?if(!empty($_SESSION['admin'])):?>
						<div class="about_form">
							<form method="POST" action="" id="AddAccordionForm">
								<h4 style="margin-bottom: 20px;">Добавление определения</h4>
								<input type="text" class="form-control" name="accordion_title" placeholder="Заголовок:"><br>
									<textarea onselect="storeCaret(this)" onclick="storeCaret(this)" onkeyup="storeCaret(this)" rows="10" id="ins-about-op" name="accordion_content" placeholder="Текст:" class="form-control"></textarea>
							<button type="button" onclick="insertText(document.getElementById('ins-about-op'),'<p></p>')">Обзац</button>
							<button type="button" onclick="insertText(document.getElementById('ins-about-op'),'<em></em>')"><em>K</em></button>
							<button type="button" onclick="insertText(document.getElementById('ins-about-op'),'<u></u>')"><u>Ч</u></button>
							<button type="button" onclick="insertText(document.getElementById('ins-about-op'),'<b></b>')"><b>Ж</b></button>
							<button type="button" onclick="insertText(document.getElementById('ins-about-op'),'<br>')">Отступ</button>
							<button type="button" onclick="insertText(document.getElementById('ins-about-op'),'<a target=\'_blank\' href=\'Полная ссылка\'>Название ссылки</a>')">Ссылка</button><br><br>

								<input class="addNews" type="submit" name="addAccordion" value="Опубликовать">
							</form>
						</div>
						<?endif;?>
					</div>
					<!-- конец блока аккордеон -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php require ROOT.'/views/layouts/admin_footer.php'?>
