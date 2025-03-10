<header>
    <div class="container py-2">
        <div class="row py-1 pb-0 pb-sm-4 align-items-center">
            <div class="col-sm-4 col-lg-1 text-center text-sm-start">
                <div class="main-logo">
                    <a href="./index.php">
                        <img src="#" alt="logo" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-6 d-none d-lg-block">
                <div class="search-bar border rounded-2 px-3 border-dark-subtle">
                    <form action="" method="" id="search-form" class="text-center d-flex align-items-center">
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 10,000 products">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"></path>
                        </svg>
                    </form>
                </div>
            </div>

            <div class="col-sm-8 col-lg-5 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 justify-content-center justify-content-sm-end">
                <div class="support-box text-end d-none d-xl-block">
                    <span class="fs-6 secondary-font text-muted">Phone</span>
                    <h5 class="mb-0">+123-45678900</h5>
                </div>
                <div class="support-box text-end d-none d-xl-block">
                    <span class="fs-6 secondary-font text-muted">Email</span>
                    <h5 class="mb-0">your@gmail.com</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <hr class="m-0">
    </div>

    <div class="container">
        <nav class="main-menu d-flex navbar navbar-expand-lg">
            <div class="d-flex d-lg-none align-items-end mt-3">
                <ul class="d-flex justify-content-end list-unstyled m-0">
                    <li>
                        <a href="javascript:void(0)" class="mx-3">
                            <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="mx-3">
                            <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                            <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                            <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                03
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                            <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                        </a>
                    </li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarlabel">
                <div class="offcanvas-header justify-content-center">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body justify-content-between">
                    <select class="filter-categories border-0 mb-0 me-5">
                        <option>Shop by Items</option>
                        <option>Clothes</option>
                        <option>Food</option>
                        <option>Toy</option>
                    </select>

                    <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active">Contact</a>
                        </li>
                    </ul>
                    <div class="d-none d-lg-flex align-items-end">
                        <ul class="d-flex justify-content-end list-unstyled m-0">
                            <li>
                                <a href="sign-up.php" class="mx-3">
                                    <i class="fa-solid fa-users"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="mx-3">
                                    <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                    <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                                    <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                                        03
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <hr class="m-0">
    </div>
</header>