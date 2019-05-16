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
					<p><?php echo $newsItem['content'];?></p>
				</article>
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
	</div>

<?php require ROOT.'/views/layouts/footer.php'?>
</div>