<?php
$now = time();
$vage = array(0 => array(
    "img" => "img/image.png",
    "name" => "Sałatka",
    "date" => "2022-03-20",
    "price" => "5$",
    "localisation" => "Burger arena"
    ),
    1 => array(
    "img" => "img/image (1).png",
    "name" => "Sałatka fajna",
    "date" => "2022-03-30",
    "price" => "7.5$",
    "localisation" => "Burger arena"
    ),
    2 => array(
    "img" => "img/image (2).png",
    "name" => "Sałatka niefajna",
    "date" => "2022-03-25",
    "price" => "3$",
    "localisation" => "Burger arena"
    ),
    3 => array(
    "img" => "img/image (3).png",
    "name" => "Zupa",
    "date" => "2022-03-19",
    "price" => "5.2$",
    "localisation" => "Burger arena"
    ),
    4 => array(
    "img" => "img/searchbyfood (1).png",
    "name" => "Burgir",
    "date" => "2022-03-19",
    "price" => "51$",
    "localisation" => "Burger arena"
    ),
    5 => array(
    "img" => "img/searchbyfood (2).png",
    "name" => "rosol",
    "date" => "2022-03-19",
    "price" => "2$",
    "localisation" => "Burger arena"
    )

);



/*
foreach($vage as $n){
    echo $n['name'] . " " . "<br>";
    echo $n['date'] . " " . "<br>";
    echo '<img src="' . $n['img'] . '"/>' . "<br>";
    
};
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  // insert a row
  $firstname = "John";
  $lastname = "Doe";
  $email = "john@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Mary";
  $lastname = "Moe";
  $email = "mary@example.com";
  $stmt->execute();

  // insert another row
  $firstname = "Julie";
  $lastname = "Dooley";
  $email = "julie@example.com";
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;*/
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta charset="utf-8">
        <title> KRZYSZTOF FOOD </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="site-header sticky-top py-1">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-md-inline-block" href="" id="logo">3GIN food</a>
                <a class="py-2 d-md-inline-block" href="" id="deliver">Deliver to: <img src="img/map-marker-alt.png" > Current Location Mińsk Mazowiecki, PL</a>
                <a class="py-2 d-md-inline-block" href=""><img src="img/search.png"> Search food<button id="login"><img src="img/user.png" > Login</button></a>
            </nav>
        </header>
        <main>
            <div id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <h1>Are you starving?</h1>
                        <br>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="col-7">
                        <h2>Within a few clicks, find meals that are accesible near you</h2>
                        <br>
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-7 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1">
                                        <button type="button" class="btn" id="orange">Delivery</button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-outline-secondary" id="white">Pickup</button>
                                    </div>
                                </div>
                                <br>
                                    <input class="input.lg"type="text" placeholder="Enter Your Address">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" id="find">Find Food</button>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <img src="img/rosol.png">
                    </div>
                   
                    
                  </div>
              </div>
            </div>
            
        
            <div id="discount">
              <div class="container-fluid">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <?php
                    foreach(array_slice($vage, 0, 4) as $p){
                echo'<div class="col"> <div class="card">' . '<img src="' . $p['img'] . '"/>' . "<br>" .
                  '<div class="card-body">
                        <p class="card-text vage">' . $p['name'] . '</p>' .
                        '<div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group"> 
                                <button type="button" class="btn">';
                                $your_date = strtotime($p['date']); 
                                $daysleft = $your_date - $now ; 
                                echo round($daysleft / (60 * 60 * 24)) . ' days left </button> 
                            </div> 
                        </div> 
                    </div> 
                    </div> 
                    </div>';
                    };
              ?>
                </div> 
              </div>
            </div>
              <div id="tutorial">
                  <h2>How does it work</h2>
                  <div class="container-fluid">
                  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 justify-content-between">
                    <div class="col-1">
                      <img src="img/Map Marker.png">
                      <p class="upper_text">Select location</p>
                      <p class="bottom_text">Choose the location where your food will be delivered.</p>
                  </div>
                  <div class="col-1">
                      <img src="img/menu 2.png">
                      <p class="upper_text">Choose order</p>
                      <p class="bottom_text">Check over hundreds of menus to pick your favorite food</p>
                  </div>
                  <div class="col-1">
                      <img src="img/Invoice.png">
                      <p class="upper_text">Pay advanced</p>
                      <p class="bottom_text">It's quick, safe, and simple. Select several methods of payment</p>
                  </div>
                  <div class="col-1">
                      <img src="img/Donut.png">
                      <p class="upper_text">Enjoy meals</p>
                      <p class="bottom_text">Food is made and delivered directly to your home.</p>
                  </div>
                </div>
                </div>
              </div>
              <div id="popular_items">
                <h2>Popular items</h2>
                <div class="row">
                  <div class="col">
                    <img src="img/Arrow Left.png" style="margin-top:100px;">
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/Rectangle 336.png">
                      <div class="card-body">
                        <p class="card-text czarne">Cheese Burger</p>
                        <p class="card-text zlote"><img src="img/small marker.png"> Burger Arena</p>
                        <p class="card-text czarne">$3.88</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/Rectangle 336 (1).png">
                      <div class="card-body">
                        <p class="card-text czarne">Toffe's Cake</p>
                        <p class="card-text zlote"><img src="img/small marker.png"> Top Sticks</p>
                        <p class="card-text czarne">$4.00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/Rectangle 336 (2).png">
                      <div class="card-body">
                        <p class="card-text czarne">Dancake</p>
                        <p class="card-text zlote"><img src="img/small marker.png"> Cake World</p>
                        <p class="card-text czarne">$1.99</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/Rectangle 336 (3).png">
                      <div class="card-body">
                        <p class="card-text czarne">Crispy Sandwich</p>
                        <p class="card-text zlote"><img src="img/small marker.png"> Fastfood Dine</p>
                        <p class="card-text czarne">$3.00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/Rectangle 336 (4).png">
                      <div class="card-body">
                        <p class="card-text czarne">Thai Soup</p>
                        <p class="card-text zlote"><img src="img/small marker.png"> Essa</p>
                        <p class="card-text czarne">$2.79</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                      <img src="img/Arrow Right.png" style="margin-top:100px;">
                  </div>
                </div>
              </div>
              <div id="featured">
                <h2>Featured Restaurants</h2>
                <div class="container-fluid">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                  <div class="col">
                    <div class="card">
                      <img src="img/featured (8).png" class="obraz">
                      <div class="card-body">
                        <p class="card-text czarne"><img src="img/Imagefoodworld.png" class="ikonka">  Foodworld</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn tomorrow">Opens tomorrow</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/featured (7).png" class="obraz">
                      <div class="card-body">
                        <p class="card-text czarne"><img src="img/ImagePizzahub.png" class="ikonka">  Pizzahub</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn tomorrow">Opens tomorrow</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/featured (6).png" class="obraz">
                      <div class="card-body">
                        <p class="card-text czarne"><img src="img/ImageDonuts hut.png" class="ikonka">  Donuts hut</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn now">Open Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <img src="img/featured (5).png" class="obraz">
                      <div class="card-body">
                        <p class="card-text czarne"><img src="img/ImageDonuts hut2.png" class="ikonka">  Donuts hut</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn now">Open Now</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </br>
                  </br>
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <div class="col">
                      <div class="card">
                        <img src="img/featured (4).png" class="obraz">
                        <div class="card-body">
                          <p class="card-text czarne"><img src="img/ImageRuby tuesday.png" class="ikonka">  Ruby Tuesday</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <button type="button" class="btn now">Open Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="img/featured (3).png" class="obraz">
                        <div class="card-body">
                          <p class="card-text czarne"><img src="img/ImageKuakata Fried Chicken.png" class="ikonka">  Kuakata Fried Chicken</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <button type="button" class="btn now">Open Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="img/featured (2).png" class="obraz">
                        <div class="card-body">
                          <p class="card-text czarne"><img src="img/Imagered square.png" class="ikonka">  Red Square</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <button type="button" class="btn now">Open Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="img/featured (1).png" class="obraz">
                        <div class="card-body">
                          <p class="card-text czarne"><img src="img/Imagetaco bell.png" class="ikonka">  Taco Bell</p>
                          <div class="d-flex justify-content-between align-items-center">
                              <button type="button" class="btn now">Open Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col col-lg-12">
                    <button id="view">View all</button>
                    
                  </div>
                  </div>
                  
              </div>
              </div>
              <br>
              <br>
              <div id="byfood">
                <div class="container-fluid">
                <div class="row">
                  <div class="col-9">
                    <h2>Search by Food</h2>
                  </div>
                  <div class="col-3">
                    <p id="napis">View all ><img src="img/Arrow Left.png" class="strzalki"> <img src="img/Arrow Right.png" class="strzalki"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                   <img src="img/searchbyfood (1).png" class="obrazek">
                   <p class="opis">Pizza</p>
                  </div>
                  <div class="col">
                    <img src="img/searchbyfood (6).png" class="obrazek">
                    <p class="opis">Burger</p>
                   </div>
                   <div class="col">
                    <img src="img/searchbyfood (5).png" class="obrazek">
                    <p class="opis">Noodles</p>
                   </div>
                   <div class="col">
                    <img src="img/searchbyfood (4).png" class="obrazek">
                    <p class="opis">Sub-sandwich</p>
                   </div>
                   <div class="col">
                    <img src="img/searchbyfood (3).png" class="obrazek">
                    <p class="opis">Chowmein</p>
                   </div>
                   <div class="col">
                    <img src="img/searchbyfood (2).png" class="obrazek">
                    <p class="opis">Steak</p>
                   </div>
                   
                </div>
              </div>
            </div>
            <div id="dodatki">
              <div class="container">
                <div class="col">
                  <div class="card">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-2">
                                  <img src="img/Icon.png">
                              </div>
                              <div class="col-2">
                                  <p class="zawartosc">Daily Discounts</p>
                              </div>
                              <div class="col-2">
                                <img src="img/Icon (1).png">
                            </div>
                            <div class="col-2">
                                <p class="zawartosc">Live Tracing</p>
                            </div>
                            <div class="col-2">
                              <img src="img/Icon (2).png">
                          </div>
                          <div class="col-2">
                              <p class="zawartosc">Quick Delivery</p>
                          </div>
                          </div>
                          
                           
                      </div>
                  </div>
              </div>
            </div>
            </div>
            <div id="nadfooter">
              <h2>Are you ready to order with the best deals?</h2>
              <br>
              <button>PROCEED TO ORDER</button>
            </div>
            </main>
              <div class="footer">
                <div class="container-fluid">
                <div class="row" >
                  <div class="col" style="margin-top: 70px;">
                    <h1 class="whiteh1">Our top cities</h1>
                    <div class="row">
                    <div class="col">
                    <ul>
                      <li>San Francisco</li>
                      <li>Miami</li>
                      <li>San Diego</li>
                      <li>East Bay</li>
                      <li>Long Beach</li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul>
                      <li>Los Angeles</li>
                      <li>Washington DC</li>
                      <li>Seattle</li>
                      <li>Portland</li>
                      <li>Nashville</li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul>
                      <li>New York City</li>
                      <li>Orange County</li>
                      <li>Atlanta</li>
                      <li>Charlotte</li>
                      <li>Denver</li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul>
                      <li>Chicago</li>
                      <li>Phoenix</li>
                      <li>Las Vegas</li>
                      <li>Sacramento</li>
                      <li>Oklahoma City</li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul>
                      <li>Columbus</li>
                      <li>New Mexico</li>
                      <li>Albuquerque</li>
                      <li>Sacramento</li>
                      <li>New Orleans</li>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
              <hr style="width:90%;text-align:left;margin-left:0; color: #424242;">
                <div class="row">
                <div class="col col-1">
                  <h1 class="whiteh1">Company</h1>
                  <ul>
                    <li>About us</li>
                    <li>Team</li>
                    <li>Careers</li>
                    <li>Blog</li>
                  </ul>
                </div>
                <div class="col col-1">
                  <h1 class="whiteh1">Contact</h1>
                  <ul>
                    <li>Help & Support</li>
                    <li>Partner with us</li>
                    <li>Ride with us</li>
                  </ul>
                </div>
                <div class="col col-1">
                  <h1 class="whiteh1">Legal</h1>
                  <ul>
                    <li>Terms & Conditions</li>
                    <li>Refund & Cancellation</li>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                  </ul>
                </div>
                <div class="col social">
                  <h1 class="whiteh1">FOLLOW US</h1>
                  <br>
                  <ul>
                    <li><img src="img/1insta.png" width="24" style="width: 24px;"></li>
                    <li><img src="img/2facebook.png" width="32" style="width: 24px;"></li>
                    <li><img src="img/3twitter.png" width="" style="width: 24x;"></li>
                    <br>
                    <br>
                    <li>Receive exclusive offers in your mailbox</li>
                    <br>
                    <br>
                    <li><input class="text" type="text" placeholder="Enter Your Email"><button>Subscribe</button></li>
                  </ul>
                </div>
                <hr style="width:90%;text-align:left;margin-left:0; color: #424242;">
                <div class="row">
                  <div class="col-3">
                    <p>All rights Reserved Your Company, 2021</p>
                  </div>
                  <div class="col-8" style="text-align:right;">
                    <p>All rights Reserved Your Company, 2021</p>
                  </div>
                </div>
              <div class="clearfix"></div>
              </div>
              </div>
            </div>
              
    </body>
    
</html>