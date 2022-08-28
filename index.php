<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM books";
$result = $conn->query($sql);


//$sql2 = "SELECT * FROM categories";
//$result2 = $conn->query($sql2);


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bookadise</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top" style="color: #7EB5A6;">Bookadise</a>
            <div class="input-group" style="margin-left: 7%">
                <div class="form-outline">
                    <input class="form-control" type="search" placeholder="Search" />
                </div>
                <button id="search-button" type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
            <a class="btn btn-primary" data-bs-toggle="modal" href="#cartModal" style="margin:0 2%"><i class="fas fa-cart-shopping"></i></a>
            <div class="cart-hover">
                <div class="cart-hover-content"></div>
            </div>
        </div>
    </nav>

    <!-- CartModal-->
    <div class="portfolio-modal modal fade" id="cartModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="max-width: 70%;margin: auto">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Book-Name</h2>
                                <p class="item-intro text-muted">category</p>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-cart-shopping" style="margin: 0 6px"></i>
                                    Place order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Bookadise!</div>
            <div class="masthead-heading text-uppercase" style="font-size: 3rem;">“I have always imagined that Paradise will be a kind of library.”<br><span style="font-size: 1.5rem; color: #7EB5A6">― Jorge Luis Borges ―</span></div>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-truck-fast fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Fast delivery time</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-headset fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Customer support</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Books</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $title = $row["title"];
                        $author = $row["author"];
                        $img = $row["img"];
                        $cat_id = $row["cat_id"];
                        // if ($result2->num_rows > 0) {
                        //     while($row2 = $result2->fetch_assoc()) {
                        //         if($row2["id"] == $cat_id){
                        //             $category = $row2["name"]; 
                        //             break;
                        //         }
                        //     }
                        // }
                        echo "<div class=\"col-lg-2 col-sm-4 mb-4\">";
                        echo "<div class=\"portfolio-item\">";
                        echo "<a class=\"portfolio-link\" data-bs-toggle=\"modal\"href=\"#portfolioModal\">";
                        echo "<div class=\"portfolio-hover\">";
                        echo "<div class=\"portfolio-hover-content\"><i class=\"fas fa-ellipsis fa-3x\"></i></div>";
                        echo "</div>";
                        echo "<img class=\"img-fluid\" src=\"$img\" alt=\"...\" />";
                        echo "</a>";
                        echo "<div class=\"portfolio-caption\">";
                        echo "<div class=\"portfolio-caption-heading\" style = \"font-family:'Quicksand', sans-serif;\">$title</div>";
                        echo "<div class=\"portfolio-caption-subheading text-muted\">category</div>";
                        echo "<div class=\"portfolio-caption-subheading text-muted\">$author</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">We work to connect readers with independent booksellers all over the world. We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them survive and thrive.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Our platform gives independent bookstores tools to compete online and financial support to help them maintain their presence in local communities.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
        <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            \</div>
            <form id="contactForm" action="contacts.php" method="POST">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" name="name" class="form-control" placeholder="Your Name *" value=""  required/>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="text" name="email" class="form-control" placeholder="Your Email *" value=""  required/>
                        </div>
                        <div class="form-group">
                             <!-- Phone number input-->
                            <input class="form-control" id="phone" type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value=""  required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" name="message" class="form-control" placeholder="Your Message *" style="height: 250px;"  required></textarea>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_SESSION["success"])){
                    echo"<div class=\"text-center text-white mb-3\">";
                    echo"<div class=\"fw-bolder\">";
                        echo "<h3>". $_SESSION["success"] ."</h3>";
                        echo"</div>";
                    session_destroy();
                }
                ?>
                <div class="text-center"><input class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" value="Send Message"></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->

                                <h2 class="text-uppercase">Book-Name</h2>
                                <p class="item-intro text-muted">category</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>description: Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>author:</strong>
                                        Name
                                    </li>
                                    <li>
                                        <strong>price:</strong>
                                        number$
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-cart-shopping" style="margin: 0 6px"></i>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>