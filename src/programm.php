<?php
include "layout/header.php"; ?>

<div>
	<div class="row">
		<div class="col-sm-12">
			<h1>Home</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<h2></h2>

			<div id="movie-list">
				<ul data-bind="foreach: movies" class="movie-list">
					<li class="clearfix panel panel-default">
						<div class="panel-body">
							<img data-bind="attr { src: image, title: name }" />
							<h3 data-bind="text: name"></h3>

							<p data-bind="if: nextCinemaShow">
								<span data-bind="text: nextCinemaShow().cinema()+' ( '+nextCinemaShow().language()+' ) ' +nextCinemaShow().nextShow().formatDate()"></span>
							</p>

							<p data-bind="text: description"></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<script>
		ko.applyBindings(quinnie.data);
	</script>
</div>

<?php include "layout/footer.php";