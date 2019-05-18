<div class="wrapper">
	<?php require ROOT.'/views/layouts/admin_header.php'?>
	<!-- Контент -->
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<?if(!empty($_SESSION['admin'])):?>
				<div class="row">
					<div class="col-md-9">
						<form id="AddNewsForm" method="POST" action="">
							<h4 style="margin-bottom: 20px;">Добавление новости</h4>
							<input type="text" name="title" placeholder="Заголовок:" class="form-control"><br>
							<input type="text" name="author_name" placeholder="Кто опубликовал:" class="form-control"><br>
							<textarea name="short_content" placeholder="Короткая новость:" class="form-control"></textarea><br>
							<textarea name="content" placeholder="Полная новость:" class="form-control"></textarea><br>
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
								<?$pervpage = '<a href= /news?page=1><< </a><a href= /news?page='. ($page - 1) .'><</a>';?> 
								<?endif?>

								<?if ($page != $total):?> 
								<?$nextpage = ' <a href= /news?page='. ($page + 1) .'>></a><a href= /news?page=' .$total. '> >></a>';?> 
								<?endif?>

								<?if($page - 2 > 0) $page2left = ' <a href= ./news?page='. ($page - 2) .'>'. ($page - 2) .'</a> | '; ?>
								<?if($page - 1 > 0) $page1left = ' <a href= ./news?page='. ($page - 1) .'>'. ($page - 1) .'</a> | '; ?>
								<?if($page + 2 <= $total) $page2right = ' | <a href= ./news?page='. ($page + 2) .'>'. ($page + 2) .'</a>'; ?>
								<?if($page + 1 <= $total) $page1right = ' | <a href= ./news?page='. ($page + 1) .'>'. ($page + 1) .'</a>'; ?>

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
					</aside>
					<aside>
						<h4 class="h4-b">
							Фотоальбом
						</h4>
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


