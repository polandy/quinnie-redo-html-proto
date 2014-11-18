var quinnie = quinnie || {};
quinnie.objects = quinnie.objects || {};

quinnie.objects.movie = function (name, description, image, categories, director, actors, cinemaShows)
{
	this.name = ko.observable(name);
	this.description = ko.observable(description);
	this.image = ko.observable(image);

	this.categories = ko.observableArray(categories);
	this.director = ko.observable(director);
	this.actors = ko.observableArray(actors);

	this.cinemaShows = ko.observableArray(cinemaShows);
};

quinnie.objects.cinemaShows = function (language, cinema, cost, shows)
{
	this.language = ko.observable(language);
	this.cinema = ko.observable(cinema);
	this.cost = ko.observable(cost);
	
	this.shows = ko.observableArray(shows);
};

quinnie.objects.shows = function (time)
{
	this.time = ko.observable(time);
};

quinnie.objects.movieData = function ()
{
	this.text = ko.observable("My Dummy Text");
	this.movies = ko.observableArray();
};


quinnie.data = new quinnie.objects.movieData();

quinnie.data.movies.push(new quinnie.objects.movie(
	"Marco Polo", 
	"In a world replete with greed, betrayal, sexual intrigue and rivalry, \"Marco Polo\" is based on the famed explorer's adventures in Kublai Khan's court in 13th century China.",
	"http://ia.media-imdb.com/images/M/MV5BMTcwMDU5NzMzOV5BMl5BanBnXkFtZTgwNzk5NTE0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Adventure", "Action"],
	"Unknown",
	["Chin Han", "Mahesh Jadu", "Lorenzo Richelmy"],
	[new quinnie.objects.cinemaShows("Edf", "Bubenberg", 15, [
		new quinnie.objects.shows("20:00"),
		new quinnie.objects.shows("Mo", "23:00"),
		new quinnie.objects.shows("Di", "20:00"),
		new quinnie.objects.shows("Mi", "17:30"),
		new quinnie.objects.shows("Mi", "20:00")
	]),
	new quinnie.objects.cinemaShows("Edf", "Camera", 15, [
		new quinnie.objects.shows("Mo", "20:00"),
		new quinnie.objects.shows("Mo", "23:00"),
		new quinnie.objects.shows("Di", "20:00"),
		new quinnie.objects.shows("Mi", "17:30"),
		new quinnie.objects.shows("Mi", "20:00")
	]),
	new quinnie.objects.cinemaShows("Edf", "Movie 1", 15, [
		new quinnie.objects.shows("Mo", "20:00"),
		new quinnie.objects.shows("Mo", "23:00"),
		new quinnie.objects.shows("Di", "20:00"),
		new quinnie.objects.shows("Mi", "17:30"),
		new quinnie.objects.shows("Mi", "20:00")
	])]));
	
quinnie.data.movies.push(new quinnie.objects.movie(
	"Cake",
	"Claire initiates a dubious relationship with a widower while confronting fantastical hallucinations of his dead wife.",
	"http://ia.media-imdb.com/images/M/MV5BMTc4NDYzNTcyM15BMl5BanBnXkFtZTgwNjQ5NzQ0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Drama"],
	"Daniel Barnz",
	["Jennifer Aniston", "Anna Kendrick", "Britt Robertson"]));
	
quinnie.data.movies.push(new quinnie.objects.movie(
	"Fifty Shades of Grey",
	"Literature student Anastasia Steele's life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.",
	"http://ia.media-imdb.com/images/M/MV5BMjE1MTM4NDAzOF5BMl5BanBnXkFtZTgwNTMwNjI0MzE@._V1_SX214_AL_.jpg",
	["Drama", "Romance"],
	"Sam Taylor-Johnson",
	["Dakota Johnson", "Jamie Dornan", "Aaron Taylor-Johnson"]));