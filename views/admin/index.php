<div class="wrapper">
	<?php require ROOT.'/views/layouts/admin_header.php'?>
	<!-- Контент -->
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<?if(!empty($_SESSION['admin'])):?>
				<div class="row">
					<div class="col-md-9">
						<form enctype="multipart/form-data" method="POST" action="" id="AddNewsForm">
							<h4 style="margin-bottom: 20px;">Добавление новости</h4>
							<input type="file" name="image" class="form-control"><br>
							<input type="text" name="title" placeholder="Заголовок:" class="form-control"><br>
							<input type="text" name="author_name" placeholder="Кто опубликовал:" class="form-control"><br>
							<textarea onselect="storeCaret(this)" onclick="storeCaret(this)" onkeyup="storeCaret(this)" rows="10" id="ins-sc" name="short_content" placeholder="Короткая новость:" class="form-control"></textarea>
							<button type="button" onclick="insertText(document.getElementById('ins-sc'),'<p></p>')">Обзац</button>
							<button type="button" onclick="insertText(document.getElementById('ins-sc'),'<em></em>')"><em>K</em></button>
							<button type="button" onclick="insertText(document.getElementById('ins-sc'),'<u></u>')"><u>Ч</u></button>
							<button type="button" onclick="insertText(document.getElementById('ins-sc'),'<b></b>')"><b>Ж</b></button>
							<button type="button" onclick="insertText(document.getElementById('ins-sc'),'<br>')">Отступ</button>
							<button type="button" onclick="insertText(document.getElementById('ins-sc'),'<a target=\'_blank\' href=\'Полная ссылка\'>Название ссылки</a>')">Ссылка</button>
							<br>
							<br>
							<textarea onselect="storeCaret(this)" onclick="storeCaret(this)" onkeyup="storeCaret(this)" rows="10" id="ins-s" name="content" placeholder="Полная новость:" class="form-control"></textarea>
							<button type="button" onclick="insertText(document.getElementById('ins-s'),'<p></p>')">Обзац</button>
							<button type="button" onclick="insertText(document.getElementById('ins-s'),'<em></em>')"><em>K</em></button>
							<button type="button" onclick="insertText(document.getElementById('ins-s'),'<u></u>')"><u>Ч</u></button>
							<button type="button" onclick="insertText(document.getElementById('ins-s'),'<b></b>')"><b>Ж</b></button>
							<button type="button" onclick="insertText(document.getElementById('ins-s'),'<br>')">Отступ</button>
							<button type="button" onclick="insertText(document.getElementById('ins-s'),'<a target=\'_blank\' href=\'Полная ссылка\'>Название ссылки</a>')">Ссылка</button>
							<br>
							<br>
							<input class="addNews" type="submit" name="addNews" value="Опубликовать">
							<div class="errors"></div>
						</form>
						
					</div>
				</div>
				<?endif;?>
				<?foreach($postrow as $row):?> 
				<article>
					<h2><a class="news-link" href="/adminNews/<?=$row['id'];?>"><?=$row['title']?></a></h2>
					<div class="author">
						<ul>
							<li><i class="fa fa-user" aria-hidden="true"></i> <?=$row['author_name'];?></li>
							<li style="margin-left: 10px;"><i class="fa fa-calendar" aria-hidden="true"></i> <?=$row['date'];?></li>
						</ul>	
					</div>
				<!-- 	<?if(!empty($row['data']) and !empty($row['mime'])):?>
					<?="<embed src='data:".$row['mime'].";base64,".base64_encode($row['data'])."' width='100%'; height='50%'/>";?>
					<?endif;?> -->
					<p>
						<?=$row['short_content']?>
					</p>
					<div>
						<form method="POST" action="">
							<a id="news-link" href="/adminNews/<?= $row['id'];?>">Читать далее</a>
							<?if(!empty($_SESSION['admin'])):?>
							<input type="hidden" name="idNews" value="<?=$row['id'];?>">
							<input class="removeNews" type="submit" name="removeNews" value="Удалить">
							<?endif;?>
						</form>
					</div>
				</article>
				<?endforeach;?>
				<!-- Пагинация -->
				<div class="container" style="margin-top: 20px;">
					<div class="row">
						<div class="col-md-9">	
							<? if ($page != 1):?> 
								<?$pervpage = '<a href= /adminNews?page=1><< </a><a href= /adminNews?page='. ($page - 1) .'><</a>';?> 
								<?endif?>

								<?if ($page != $total):?> 
								<?$nextpage = ' <a href= /adminNews?page='. ($page + 1) .'>></a><a href= /adminNews?page=' .$total. '> >></a>';?> 
								<?endif?>

								<?if($page - 2 > 0) $page2left = ' <a href= ./adminNews?page='. ($page - 2) .'>'. ($page - 2) .'</a> | '; ?>
								<?if($page - 1 > 0) $page1left = ' <a href= ./adminNews?page='. ($page - 1) .'>'. ($page - 1) .'</a> | '; ?>
								<?if($page + 2 <= $total) $page2right = ' | <a href= ./adminNews?page='. ($page + 2) .'>'. ($page + 2) .'</a>'; ?>
								<?if($page + 1 <= $total) $page1right = ' | <a href= ./adminNews?page='. ($page + 1) .'>'. ($page + 1) .'</a>'; ?>

								<?if (isset($pervpage)):?>
								<?=$pervpage?>
								<?endif?>
								<?if (isset($page2left)):?>
								<?=$page2left?>
								<?endif?>
								<?if (isset($page1left)):?>
								<?=$page1left?>
								<?endif?>
								<?if (isset($page)):?>
								<?=$page?>
								<?endif?>
								<?if (isset($page1right)):?>
								<?=$page1right?>
								<?endif?>
								<?if (isset($page2right)):?>
								<?=$page2right?>
								<?endif?>
								<?if (isset($nextpage)):?>
								<?=$nextpage?>
								<?endif?>
							</div>
						</div>
					</div>
					<!--/Пагинация -->

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
			<!--Обратная связь-->
			<div class="row">
				<div class="col-md-9">
					<div class="feedback">
						<form id="formajax">
							<h4>Обратная связь</h4>
							<input type="email" id="email" name="email" placeholder="Email:" class="form-control"><br>
							<input type="text" id="name" name="name" placeholder="Имя:" class="form-control"><br>
							<textarea name="message" id="message" placeholder="Сообщение:" class="form-control"></textarea><br>
							<button type="button" id="send" class="btn-fb">Отправить</button>
							<div id="error"></div>
						</form>
					</div>
				</div>
			</div>
			<!--/Обратная связь-->

			<!--GoogleMaps-->
			<div class="GMAP">
				<div class="row">
					<div class="col-md-8">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d771.7133859194024!2d56.03731681827097!3d54.792817616741516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d93781829852af%3A0x2729b7dd064ae968!2z0JHQsNGI0LrQuNGA0YHQutC40Lkg0LDRgNGF0LjRgtC10LrRgtGD0YDQvdC-LdGB0YLRgNC-0LjRgtC10LvRjNC90YvQuSDQutC-0LvQu9C10LTQtg!5e0!3m2!1sru!2sru!4v1558114968270!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<!--/GoogleMaps-->

		</div>
	</div>
	<?php require ROOT.'/views/layouts/admin_footer.php'?>


