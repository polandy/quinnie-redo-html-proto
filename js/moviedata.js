<script>
var quinnie = quinnie || {};
quinnie.objects = quinnie.objects || {};

qunnie.objects.movie = function (name, description, image, categories, director, actors) 
{
	this.name = ko.observable(name);
	this.description = ko.observable(description);
	this.image = ko.observable(image);

	this.categories = ko.observableArray(categories);
	this.director = ko.observable(director);
	this.actors = ko.observableArray(actors);
};

qunnie.objects.cinemaShows = function () 
{
	this.language = ko.observable();
	this.cinema = ko.observable();
	this.cost = ko.observable();
	
	this.shows = ko.observableArray();
};

qunnie.objects.shows = function ()
{
	this.weekday = ko.observable();
	this.time = ko.obersvable();
};


qunnie.objects.movieData = function () {

	this.movies = ko.observableArray();
}


quinnie.movies = new qunnie.objects.movieData();

movies.movies.push(new qunnie.objects.movie(
	"Marco Polo", 
	"In a world replete with greed, betrayal, sexual intrigue and rivalry, \"Marco Polo\" is based on the famed explorer's adventures in Kublai Khan's court in 13th century China.",
	"http://ia.media-imdb.com/images/M/MV5BMTcwMDU5NzMzOV5BMl5BanBnXkFtZTgwNzk5NTE0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Adventure", "Action"],
	"Unknown",
	["Chin Han", "Mahesh Jadu", "Lorenzo Richelmy"]));
	
movies.movies.push(new qunnie.objects.movie(
	"Cake",
	"Claire initiates a dubious relationship with a widower while confronting fantastical hallucinations of his dead wife.",
	"http://ia.media-imdb.com/images/M/MV5BMTc4NDYzNTcyM15BMl5BanBnXkFtZTgwNjQ5NzQ0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Drama"],
	"Daniel Barnz",
	["Jennifer Aniston", "Anna Kendrick", "Britt Robertson"]));
	
movies.movies.push(new qunnie.objects.movie(
	"Fifty Shades of Grey",
	"Literature student Anastasia Steele's life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.",
	"http://ia.media-imdb.com/images/M/MV5BMjE1MTM4NDAzOF5BMl5BanBnXkFtZTgwNTMwNjI0MzE@._V1_SX214_AL_.jpg",
	["Drama", "Romance"],
	"Sam Taylor-Johnson",
	["Dakota Johnson", "Jamie Dornan", "Aaron Taylor-Johnson"]));
	
</script>