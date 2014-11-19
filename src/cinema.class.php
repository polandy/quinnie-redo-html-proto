<?php
class Cinema
{




    public $name = 'ein Standardwert';
    public $imgSrc = '';
    public $street = '';
    public $zipCode = '';
    public $tel = '0900 556 789';
    public $seats = '348';
    public $soundSystem = 'THX SOUND SYSTEM, dts, SR-D';
    public $projector = 'Barco DP2K-20C digitaler 2K';
    public $_3d = 'Barco DP2K-20C digitaler 2K';
    public $special = 'Geniessen Sie in der cineBar vor dem Film ein Getränk und essen Sie eine Kleinigkeit.';

    function __construct($imgSrc, $name, $seats, $street, $zipCode)
    {
        $this->imgSrc = $imgSrc;
        $this->name = $name;
        $this->seats = $seats;
        $this->street = $street;
        $this->zipCode = $zipCode;
    }

}


function getAllCinemas() {
    $imgUrls = getImgUrls();
    $cineAbc = new Cinema($imgUrls[0], "ciné abc", 322, 'Moserstrasse 24', 3256);
    $movie1 = new Cinema($imgUrls[1], "Movie 1", 300, 'Laupenstrasse 6', 3001);
    $movie2 = new Cinema($imgUrls[2], "Movie 2", 215, 'AndereStrasse 24', 3256);
    $camera = new Cinema($imgUrls[2], "camera", 405, 'Philosophenstrasse 24', 3068);
    $club = new Cinema($imgUrls[4], "CLUB", 100, 'Zeixstrasse 24', 3007);
    $bubenberg = new Cinema($imgUrls[5], "Bubenberg", 316, 'Hallerstrasse 24', 3008);
    return array($cineAbc, $movie1, $movie2, $camera, $club, $bubenberg);
}

/**
 * @return array
 */
function getImgUrls()
{
    $imgUrls = ["http://www.traumkinobasel.ch/bilder/grossbasel/kinos/2007/fata-morgana/hintereingang-b950.jpg",
        "http://www.traumkinobasel.ch/bilder/grossbasel/bilder_zu_texten/alhambra.jpg",
        "http://www.traumkinobasel.ch/bilder/grossbasel/kinos/plaza-set1-bild1-4.jpg",
        "http://www.traumkinobasel.ch/bilder/grossbasel/kinos/alhambra_h300.jpg",
        "http://www.traumkinobasel.ch/bilder/kinostrasse970x600.jpg",
        "http://www.traumkinobasel.ch/bilder/grossbasel/kinos/2007/fata-morgana/Fata-Morgana-1911-innen-b950.gif"];
    return $imgUrls;
}

?>
