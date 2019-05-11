<?php require ROOT.'/views/layouts/header.php'?>
<!-- Контент -->
<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<article class="news">
				<h2><a href="#"> Заголовок</a></h2>
				<div class="author">
					Mikhail 10-04-2019
				</div>
				<p>
					ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст
				</p>
				<p>
					ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст
				</p>
			</article>
		</div>
		<!--правые блоки-->
		<div class="col-md-3">
			<aside>
				<h4>
					Архив новостей
				</h4>
			</aside>
			<aside>
				<h4>
					Партнеры
				</h4>
			</aside>
			<aside>
				<h4>
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
					<input type="text" id="name" name="name" placeholder="Введите имя:" class="form-control"><br>
					<textarea name="message" id="message" placeholder="Сообщение:" class="form-control"></textarea><br>
					<button type="button" id="send" class="btn btn-success">Отправить</button>
				</form>
				<div id="error"></div>
			</div>
		</div>
	</div>
	<!--/Обратная связь-->
</div>
<?php require ROOT.'/views/layouts/footer.php'?>