<?php require ROOT.'/views/layouts/header.php'?>
<!-- Контент -->
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="elearning">
				<a rel="gallery" class="photo" href="../../public/gallery/1.jpg"><img class="photo" src="../../public/gallery/1.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/2.jpg"><img class="photo" src="../../public/gallery/2.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/3.gif"><img class="photo" src="../../public/gallery/3.gif" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/4.jpg"><img class="photo" src="../../public/gallery/4.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/5.jpg"><img class="photo" src="../../public/gallery/5.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/6.jpg"><img class="photo" src="../../public/gallery/6.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/7.jpg"><img class="photo" src="../../public/gallery/7.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/8.jpg"><img class="photo" src="../../public/gallery/8.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/9.jpg"><img class="photo" src="../../public/gallery/9.jpg" width="150" height="100" alt="" /></a>
				<a rel="gallery" class="photo" href="../../public/gallery/10.jpg"><img class="photo" src="../../public/gallery/10.jpg" width="150" height="100" alt="" /></a>
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
	</div>
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="row">
								<div class="col-sm-6">
									<u>Тел:</u><br>
									 292-72-18<br>
									<u>Эл.почта:</u><br>
									<a href="mailto:bask-uc@mail.ru">bask-uc@mail.ru</a><br>
									<a href="mailto:bask_sdo@mail.ru">bask_sdo@mail.ru</a>

								</div>
								<div class="col-sm-6">
									<u>Адрес:</u><br>
									450055, Республика Башкортостан,<br>
									г. Уфа, проспект Октября, 174, каб. 13.
								</div>
							</div>
						</div>	
						<div class="col-6">
							<div class="row">
								<div class="col-sm-6">
									<u>Режим и график работы:</u><br>
									Пн - Пт: 8:30 – 17:30<br>
									Перерыв: 12:30 – 13:30
								</div>
								<div class="col-sm-6">
									<ul class="menu-footer">
										<li><a href="/about">О нас</a></li>
										<li><a href="/course">Курсы</a></li>
										<li><a href="/elearning">Эл. образование</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<script src="../../public/js/jquery.min.js"></script>	
	<script src="../../public/js/active-link.js"></script>
	<script src="../../public/js/all.js"></script>
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src="../../public/js/accordion.js"></script>
	<script src="../../public/js/btn-add-html-tegs.js"></script>
	<script src="../../public/js/jquery-1.4.3.min.js"></script>

	<script type="text/javascript" src="../../public/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../../public/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			$("a.photo").fancybox({
				transitionIn: 'elastic',
				transitionOut: 'elastic',
				speedIn: 500,
				speedOut: 500,
				hideOnOverlayClick: false,
				titlePosition: 'over'
			});
		});
	</script>
		</body>
		</html>