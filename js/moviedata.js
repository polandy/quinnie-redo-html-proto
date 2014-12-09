var quinnie = quinnie || {};

moment.locale("de");
quinnie.data = new quinnie.objects.movieData();

quinnie.data.movies.push(new quinnie.objects.movie(
	"Marco Polo", 
	"In a world replete with greed, betrayal, sexual intrigue and rivalry, \"Marco Polo\" is based on the famed explorer's adventures in Kublai Khan's court in 13th century China.",
	"11/18/2014",
	"http://ia.media-imdb.com/images/M/MV5BMTcwMDU5NzMzOV5BMl5BanBnXkFtZTgwNzk5NTE0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Adventure", "Action"],
	"Unknown",
	["Chin Han", "Mahesh Jadu", "Lorenzo Richelmy"],
	[new quinnie.objects.cinemaShows("Edf", "Bubenberg", 15, [
		new quinnie.objects.shows("11/23/2015 20:00"),
		new quinnie.objects.shows("11/24/2015 20:00"),
		new quinnie.objects.shows("11/24/2015 13:00"),
		new quinnie.objects.shows("11/25/2015 20:00"),
		new quinnie.objects.shows("11/26/2015 20:00"),
		new quinnie.objects.shows("11/27/2015 20:00"),
		new quinnie.objects.shows("11/28/2015 20:00"),
		new quinnie.objects.shows("11/29/2015 20:00"),
		new quinnie.objects.shows("11/30/2015 20:00")
	]),
	new quinnie.objects.cinemaShows("D", "Camera", 15, [
		new quinnie.objects.shows("11/21/2015 17:15"),
		new quinnie.objects.shows("11/22/2015 17:15"),
		new quinnie.objects.shows("11/23/2015 17:15"),
		new quinnie.objects.shows("11/24/2015 17:15")
	])]));
	
quinnie.data.movies.push(new quinnie.objects.movie(
	"Cake",
	"Claire initiates a dubious relationship with a widower while confronting fantastical hallucinations of his dead wife.",
	"3/1/2015",
	"http://ia.media-imdb.com/images/M/MV5BMTc4NDYzNTcyM15BMl5BanBnXkFtZTgwNjQ5NzQ0MzE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Drama"],
	"Daniel Barnz",
	["Jennifer Aniston", "Anna Kendrick", "Britt Robertson"],
	[new quinnie.objects.cinemaShows("Edf", "Bubenberg", 15, [
		new quinnie.objects.shows("11/23/2015 20:00"),
		new quinnie.objects.shows("11/24/2015 20:00"),
		new quinnie.objects.shows("11/24/2015 13:00"),
		new quinnie.objects.shows("11/25/2015 20:00"),
		new quinnie.objects.shows("11/26/2015 20:00"),
		new quinnie.objects.shows("11/27/2015 20:00"),
		new quinnie.objects.shows("11/28/2015 20:00"),
		new quinnie.objects.shows("11/29/2015 20:00"),
		new quinnie.objects.shows("11/30/2015 20:00")
	])]));
	
quinnie.data.movies.push(new quinnie.objects.movie(
	"Fifty Shades of Grey",
	"Literature student Anastasia Steele's life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.",
	"2/13/2015",
	"http://ia.media-imdb.com/images/M/MV5BMjE1MTM4NDAzOF5BMl5BanBnXkFtZTgwNTMwNjI0MzE@._V1_SX214_AL_.jpg",
	["Drama", "Romance"],
	"Sam Taylor-Johnson",
	["Dakota Johnson", "Jamie Dornan", "Aaron Taylor-Johnson"],
	[new quinnie.objects.cinemaShows("Edf", "Bubenberg", 15, [
		new quinnie.objects.shows("02/23/2015 20:00"),
		new quinnie.objects.shows("02/24/2015 20:00"),
		new quinnie.objects.shows("02/24/2015 13:00"),
		new quinnie.objects.shows("02/25/2015 20:00"),
		new quinnie.objects.shows("02/27/2015 15:30"),
		new quinnie.objects.shows("02/27/2015 20:00"),
		new quinnie.objects.shows("02/27/2015 22:30"),
		new quinnie.objects.shows("02/29/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 22:30")
	]),
	new quinnie.objects.cinemaShows("D", "Club", 13, [
		new quinnie.objects.shows("02/27/2015 20:00"),
		new quinnie.objects.shows("02/27/2015 22:30"),
		new quinnie.objects.shows("02/29/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 22:30")
	])]));

quinnie.data.movies.push(new quinnie.objects.movie(
	"Dumb and Dumber To",
	"20 years since their first adventure, Lloyd and Harry go on a road trip to find Harry's newly discovered daughter, who was given up for adoption.",
	"11/14/2014",
	"http://ia.media-imdb.com/images/M/MV5BMTYxMzA0MzAyMF5BMl5BanBnXkFtZTgwMjMyNjcwMjE@._V1_SX214_AL_.jpg",
	["Comedy"],
	"Bobby Farrelly",
	["Jim Carrey", "Jeff Daniels", "Rob Riggle"],
	[
	new quinnie.objects.cinemaShows("D", "Movie 1", 15, [
		new quinnie.objects.shows("02/24/2015 17:15"),
		new quinnie.objects.shows("02/25/2015 17:15"),
		new quinnie.objects.shows("02/26/2015 17:15"),
		new quinnie.objects.shows("02/27/2015 17:15")
	]),
	new quinnie.objects.cinemaShows("Edf", "Movie 2", 15, [
		new quinnie.objects.shows("02/24/2015 22:15"),
		new quinnie.objects.shows("02/25/2015 20:15"),
		new quinnie.objects.shows("02/25/2015 22:15"),
		new quinnie.objects.shows("02/27/2015 20:15")
	]),
	new quinnie.objects.cinemaShows("F", "Movie 3", 15, [
		new quinnie.objects.shows("02/27/2015 17:15")
	])
	]));

quinnie.data.movies.push(new quinnie.objects.movie(
	"Big Hero 6",
	"The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.",
	"11/07/2014",
	"http://ia.media-imdb.com/images/M/MV5BMjI4MTIzODU2NV5BMl5BanBnXkFtZTgwMjE0NDAwMjE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Animation","Action","Adventure"],
	"Don Hall",
	["Ryan Potter", "Scott Adsit", "Jamie Chung"],
	[
	new quinnie.objects.cinemaShows("F", "Movie 3", 15, [
		new quinnie.objects.shows("02/23/2015 20:00"),
		new quinnie.objects.shows("02/24/2015 20:00"),
		new quinnie.objects.shows("02/24/2015 13:00"),
		new quinnie.objects.shows("02/25/2015 20:00"),
		new quinnie.objects.shows("02/27/2015 15:30"),
		new quinnie.objects.shows("02/27/2015 20:00"),
		new quinnie.objects.shows("02/27/2015 22:30"),
		new quinnie.objects.shows("02/29/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 22:30")
	])]));

quinnie.data.movies.push(new quinnie.objects.movie(
	"Interstellar",
	"A team of explorers travel through a wormhole in an attempt to find a potentially habitable planet that will sustain humanity.",
	"11/07/2014",
	"http://ia.media-imdb.com/images/M/MV5BMjIxNTU4MzY4MF5BMl5BanBnXkFtZTgwMzM4ODI3MjE@._V1_SX214_AL_.jpg",
	["Adventure", "Sci-Fi"],
	"Christopher Nolan",
	["Matthew McConaughey", "Anne Hathaway", "Jessica Chastain"],
	[
	new quinnie.objects.cinemaShows("D", "Camera", 15, [
		new quinnie.objects.shows("02/23/2015 20:00"),
		new quinnie.objects.shows("02/24/2015 20:00"),
		new quinnie.objects.shows("02/24/2015 13:00"),
		new quinnie.objects.shows("02/25/2015 20:00"),
		new quinnie.objects.shows("02/27/2015 15:30"),
		new quinnie.objects.shows("02/27/2015 20:00"),
		new quinnie.objects.shows("02/27/2015 22:30"),
		new quinnie.objects.shows("02/29/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 20:00"),
		new quinnie.objects.shows("02/30/2015 22:30")
	])]));

quinnie.data.movies.push(new quinnie.objects.movie(
	"Beyond the Lights",
	"The pressures of fame have superstar singer Noni on the edge, until she meets Kaz, a young cop who works to help her find the courage to develop her own voice and break free to become the artist she was meant to be.",
	"11/14/2014",
	"http://ia.media-imdb.com/images/M/MV5BMTkzNDA0NzY1Ml5BMl5BanBnXkFtZTgwMjEwMDkzMjE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Drama"],
	"Gina Prince-Bythewood",
	["Gugu Mbatha-Raw", "Nate Parker", "Minnie Driver"],
	[
	new quinnie.objects.cinemaShows("D", "Camera", 15, [
		new quinnie.objects.shows("02/21/2015 20:15"),
		new quinnie.objects.shows("02/22/2015 20:15"),
		new quinnie.objects.shows("02/23/2015 20:15"),
		new quinnie.objects.shows("02/24/2015 20:15"),
		new quinnie.objects.shows("02/25/2015 20:15"),
		new quinnie.objects.shows("02/26/2015 20:15"),
		new quinnie.objects.shows("02/27/2015 20:15")
	])]));

quinnie.data.movies.push(new quinnie.objects.movie(
	"Gone Girl",
	"With his wife's disappearance having become the focus of an intense media circus, a man sees the spotlight turned on him when it's suspected that he may not be innocent.",
	"10/03/2014",
	"http://ia.media-imdb.com/images/M/MV5BMTk0MDQ3MzAzOV5BMl5BanBnXkFtZTgwNzU1NzE3MjE@._V1_SY317_CR0,0,214,317_AL_.jpg",
	["Drama", "Mystery", "Thriller"],
	"David Fincher",
	["Ben Affleck", "Rosamund Pike", "Neil Patrick Harris"],
	[
	new quinnie.objects.cinemaShows("D", "Camera", 15, [
		new quinnie.objects.shows("02/21/2015 17:15"),
		new quinnie.objects.shows("02/22/2015 17:15"),
		new quinnie.objects.shows("02/23/2015 17:15"),
		new quinnie.objects.shows("02/24/2015 17:15")
	])]));