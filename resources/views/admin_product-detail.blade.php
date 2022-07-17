<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">

    <!-- Slick -->
    <link rel="stylesheet" href="../../libs/slick/slick.css">
    <link rel="stylesheet" href="../../libs/slick/slick-theme.css">

    <!-- Rating -->
    <link rel="stylesheet" href="../../libs/rating/rating.min.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="index.html" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="../../assets/images/user/man_avatar3.jpg"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Timotheus Bendan</div>
                    <small class="text-muted">Sales Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="../authen/login.html" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        <ul>
            <li>
                <a  href="../index.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../orders/orders.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="../products/product-list.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="../categories/categories.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Categories</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
        <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
            <a href="#">
                <i class="bi bi-list"></i>
            </a>
        </div>

        <div class="page-title">Product Detail</div>
        <form class="search-form">
            <div class="input-group">
                <button class="btn btn-outline-light" type="button" id="button-addon1">
                    <i class="bi bi-search"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search..."
                       aria-label="Example text with button addon" aria-describedby="button-addon1">
                <a href="#" class="btn btn-outline-light close-header-search-bar">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </form>

        <!-- Header mobile buttons -->
        <div class="header-mobile-buttons">
            <a href="#" class="search-bar-btn">
                <i class="bi bi-search"></i>
            </a>
        </div>
        <!-- ./ Header mobile buttons -->
    </div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">

        <div class="mb-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html">
                            <i class="bi bi-globe2 small me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="product-list.html">
                            <i class=" small me-2"></i> Products
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="slick-wrapper">
                                    <div class="slider-for mb-3">
                                        <div class="slick-slide-item">
                                            <img src="../../assets/images/products/2.jpg" class="w-100 rounded"
                                                 alt="image">
                                        </div>
                                        <div class="slick-slide-item">
                                            <img src="../../assets/images/products/1.jpg" class="w-100 rounded"
                                                 alt="image">
                                        </div>
                                        <div class="slick-slide-item">
                                            <img src="../../assets/images/products/3.jpg" class="w-100 rounded"
                                                 alt="image">
                                        </div>
                                        <div class="slick-slide-item">
                                            <img src="../../assets/images/products/4.jpg" class="w-100 rounded"
                                                 alt="image">
                                        </div>
                                        <div class="slick-slide-item">
                                            <img src="../../assets/images/products/5.jpg" class="w-100 rounded"
                                                 alt="image">
                                        </div>
                                    </div>
                                    <div class="slick-nav-wrapper">
                                        <div class="slider-nav">
                                            <div class="slick-slide-item m-2">
                                                <img src="../../assets/images/products/2.jpg" class="w-100 rounded"
                                                     alt="image">
                                            </div>
                                            <div class="slick-slide-item m-2">
                                                <img src="../../assets/images/products/1.jpg" class="w-100 rounded"
                                                     alt="image">
                                            </div>
                                            <div class="slick-slide-item m-2">
                                                <img src="../../assets/images/products/3.jpg" class="w-100 rounded"
                                                     alt="image">
                                            </div>
                                            <div class="slick-slide-item m-2">
                                                <img src="../../assets/images/products/4.jpg" class="w-100 rounded"
                                                     alt="image">
                                            </div>
                                            <div class="slick-slide-item m-2">
                                                <img src="../../assets/images/products/5.jpg" class="w-100 rounded"
                                                     alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="d-flex justify-content-between align-items-start mt-4 mt-md-0">
                                    <div>
                                        <div class="small text-muted mb-2">Technology Products</div>
                                        <h2>Ultimate Ears Wonderboom</h2>
                                        <p>
                                            <span class="badge bg-success">In stock</span>
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda
                                            autem eaque error explicabo fugiat iusto necessitatibus, temporibus. Laudantium,
                                            voluptate?</p>
                                        <div class="d-flex gap-3 mb-3 align-items-center">
                                            <h4 class="text-muted mb-0">
                                                <del>$699,99</del>
                                            </h4>
                                            <h4 class="mb-0">$499,90</h4>
                                        </div>
                                        <div class="d-flex gap-2 mb-3">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-muted"></i>
                                            <span>(3)</span>
                                        </div>
                                        <p>Features:</p>
                                        <p>It is a long established fact that a reader will be distracted.
                                            Contrary to popular belief, Lorem Ipsum is not text.
                                            There are many variations of passages of Lorem.</p>
                                        <form class="mt-4">
                                            <div class="row row-cols-lg-auto">
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" value="1">
                                                        <button class="btn btn-primary" type="button">Add To Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <a href="#" class="btn btn-icon flex-shrink-0">
                                        <i class="bi bi-heart-fill text-danger"></i> 50
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab"
                                   aria-controls="description" aria-selected="true">Descriptions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                                   aria-controls="reviews" aria-selected="false">Reviews (3)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sss-tab" data-bs-toggle="tab" href="#sss" role="tab"
                                   aria-controls="sss" aria-selected="false">SSS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                 aria-labelledby="description-tab">
                                <p class="font-weight-bold">Where was he raised?</p>
                                <p>Vivamus ultricies augue vitae commodo condimentum. Nullamfaucibus eros eu mauris
                                    feugiat, eget consectetur tortor tempus. Sed volutpatmollis dui eget fringilla.
                                    Vestibulum blandit urna ut tellus lobortis tristique.Vestibulum ante ipsum
                                    primis in
                                    faucibus orci luctus et ultrices posuere cubiliaCurae; Pellentesque quis cursus
                                    mauris. Nam in ornare erat. Vestibulum convallisenim ac massa dapibus
                                    consectetur.
                                    Maecenas facilisis eros ac felis mattis, egetauctor sapien varius.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores
                                    dolorum
                                    earum fugiat nostrum obcaecati, quis ratione rerum sapiente soluta!</p>
                                <p class="font-weight-bold">Chemicals in</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur,
                                    reiciendis!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi, aperiam
                                    corporis, dolorum fugiat fugit maxime nisi optio quo similique sit sunt tempora.
                                    Commodi culpa debitis deleniti dolore maiores, maxime praesentium. Autem dicta
                                    dolore ipsum molestiae quae, quasi soluta tempora.</p>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-5">
                                            <div class="display-6">4.0</div>
                                            <div class="d-flex gap-2 my-3">
                                                <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                <i class="bi bi-star-fill icon-lg text-warning"></i>
                                                <i class="bi bi-star-fill icon-lg text-muted"></i>
                                                <span>(3)</span>
                                            </div>
                                        </div>
                                        <div class="list-group list-group-flush mb-4">
                                            <div class="list-group-item d-flex px-0">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-text bg-purple rounded-circle">R</span>
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">Rodger Stutely</h5>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-muted"></i>
                                                    </div>
                                                    <div>I love your products. It is very easy and fun to use this panel. I would
                                                        recommend it
                                                        to
                                                        everyone.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex px-0">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-text bg-orange rounded-circle">C</span>
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">Corly Hailston</h5>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                    </div>
                                                    <div>I love your products. It is very easy and fun to use this panel. I would
                                                        recommend it
                                                        to
                                                        everyone.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item d-flex px-0">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../../assets/images/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">Hurleigh Smallcomb</h5>
                                                    <div class="d-flex gap-2 mb-3">
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                        <i class="bi bi-star-fill text-warning"></i>
                                                    </div>
                                                    <div>I love your products. It is very easy and fun to use this panel. I would
                                                        recommend it
                                                        to
                                                        everyone.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Comment:</label>
                                                <textarea rows="3" class="form-control" placeholder="Your opinion on the product"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Rate:</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="rating-example"></div>
                                                    <div class="live-rating ms-3"></div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-3" type="button" id="button-addon2">Send Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sss" role="tabpanel" aria-labelledby="sss-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                How are the delivery processes carried out?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">It has survived not only five centuries, but
                                                also the leap into electronic typesetting, remaining essentially
                                                unchanged. It was popularised in the 1960s with the release of
                                                Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                Is there a payment option at the door?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">It has survived not only five centuries, but
                                                also the leap into electronic typesetting, remaining essentially
                                                unchanged. It was popularised in the 1960s with the release of
                                                Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                How many can I order at the same time?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">It has survived not only five centuries, but
                                                also the leap into electronic typesetting, remaining essentially
                                                unchanged. It was popularised in the 1960s with the release of
                                                Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including
                                                versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">
        <!-- <div>© 2022 - <a href="">OOP</a></div> -->
    </footer>
    <!-- ./ content-footer -->
</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>

<!-- Slick -->
<script src="../../libs/slick/slick.min.js"></script>

<!-- Examples -->
<script src="../../dist/js/examples/product-detail.js"></script>

<!-- Rating -->
<script src="../../libs/rating/jquery.rating.min.js"></script>

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>
</html>
