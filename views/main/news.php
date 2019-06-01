<div class="wrapper">
	<?php require ROOT.'/views/layouts/header.php'?>
	<!-- Контент -->

	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<article>
					<h2><?php echo $newsItem['title'];?></h2>
					<div class="author">
						<ul>
							<li><i class="fa fa-user" aria-hidden="true"></i> <?echo $newsItem['author_name'];?></li>
							<li style="margin-left: 10px;"><i class="fa fa-calendar" aria-hidden="true"></i> <?echo $newsItem['date'];?></li>
						</ul>	
					</div>
					<?if(!empty($newsItem['data']) and !empty($newsItem['mime'])):?>
					<center><?="<embed src='data:".$newsItem['mime'].";base64,".base64_encode($newsItem['data'])."' width='auto'; height='auto'/>";?></center>
					<?endif;?>
					<p><?php echo $newsItem['content'];?></p>
				</article>
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
	</div>