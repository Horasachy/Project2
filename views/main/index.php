<div class="wrapper">
	<?php require ROOT.'/views/layouts/header.php'?>
	<!-- Контент -->
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<?foreach($postrow as $row):?> 
				<article>
					<h2><a class="news-link" href="news/<?=$row['id'];?>"><?=$row['title']?></a></h2>
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
						<a id="news-link" href="/news/<?= $row['id'];?>">Читать далее</a>
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
		</div>
	</div>
	<?php require ROOT.'/views/layouts/footer.php'?>


