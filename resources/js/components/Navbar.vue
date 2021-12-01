<template>
    <div>
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="images/kalo-logo.png" height="26" alt="">
                </a>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <ul class="buy-button list-inline mb-0">
                    <li class="list-inline-item search-icon mb-0">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-decoration-none dropdown-toggle mb-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="uil uil-search h5 text-dark mb-0"></i>
                            </button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-4 py-0" style="width: 300px;">
                                <form class="p-4">
                                    <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu nav-right">
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-startup.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/startup.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-briefcase-alt menu-list-icon align-middle me-1"></i> Startups</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-business.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/business.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-presentation-line menu-list-icon align-middle me-1"></i> Business</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-corporate.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/corporate.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-chart-pie menu-list-icon align-middle me-1"></i> Corporate</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-finance.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/finance.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-analytics menu-list-icon align-middle me-1"></i> Finance</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-application.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/application.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-mobile-android menu-list-icon align-middle me-1"></i> Application</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-saas.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/saas.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-airplay menu-list-icon align-middle me-1"></i> Saas</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-seo.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/seo.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-clapper-board menu-list-icon align-middle me-1"></i> SEO Agency</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-marketing.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/marketing.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-process menu-list-icon align-middle me-1"></i> Marketing</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-event.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/event.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-post-stamp menu-list-icon align-middle me-1"></i> Event</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-crypto.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/crypto.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-bitcoin-circle menu-list-icon align-middle me-1"></i> Cryptocurrency</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-restaurant.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/restaurant.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-restaurant menu-list-icon align-middle me-1"></i> Restaurant</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-cafe.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/cafe.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-coffee menu-list-icon align-middle me-1"></i> Cafe</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-personal.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/personal.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-user menu-list-icon align-middle me-1"></i> Personal</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-portfolio.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/portfolio.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-image-v menu-list-icon align-middle me-1"></i> Portfolio</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-freelancer.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/freelancer.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-brackets-curly menu-list-icon align-middle me-1"></i> Freelancer</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-charity.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/charity.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-thumbs-up menu-list-icon align-middle me-1"></i> Charity</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-personal-blog.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/blog.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-document-layout-left menu-list-icon align-middle me-1"></i> Personal Blog</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-fashion.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/fashion.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-shopping-bag menu-list-icon align-middle me-1"></i> fashion</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-onepage.html" class="sub-menu-item">
                                                <div class="text-lg-center">
                                                    <span class="d-none d-lg-block"><img src="images/demos/application.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="mt-lg-2 d-block"><i class="uil uil-book menu-list-icon align-middle me-1"></i> App (Onepage)</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>   
                            </ul>
                        </li>
        
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-aboutus.html" class="sub-menu-item">About Us</a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Services</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                        <li><a href="page-services-two.html" class="sub-menu-item">Services Two</a></li>
                                        <li><a href="page-single-service.html" class="sub-menu-item">Single Service </a></li>
                                    </ul> 
                                </li>
                                <li><a href="page-faqs.html" class="sub-menu-item">FAQs</a></li>
                                <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                <li><a href="page-team.html" class="sub-menu-item">Team</a></li>                                
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Shop</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="shop-grids.html" class="sub-menu-item">Product Grids</a></li>
                                        <li><a href="shop-product-detail.html" class="sub-menu-item">Product Details</a></li>
                                        <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                        <li><a href="shop-checkout.html" class="sub-menu-item">Checkouts</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Special</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-elements.html" class="sub-menu-item">Components</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li class="megamenu-head">Classic Portfolio</li>
                                        <li><a href="portfolio-classic-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-classic-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-classic-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-classic-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-classic-six.html" class="sub-menu-item">Six Column</a></li>
                                        <li><a href="portfolio-classic-sidebar.html" class="sub-menu-item">Portfolio Sidebar</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Creative Portfolio</li>
                                        <li><a href="portfolio-creative-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-creative-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-creative-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-creative-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-creative-six.html" class="sub-menu-item">Six Column</a></li>
                                        <li><a href="portfolio-creative-sidebar.html" class="sub-menu-item">Portfolio Sidebar</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Modern Portfolio</li>
                                        <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                                        <li><a href="portfolio-modern-sidebar.html" class="sub-menu-item">Portfolio Sidebar</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Masonry Portfolio</li>
                                        <li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
                                        <li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a></li>
                                        <li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a></li>
                                        <li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a></li>
                                        <li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
                                        <li><a href="portfolio-masonry-sidebar.html" class="sub-menu-item">Portfolio Sidebar</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li class="megamenu-head">Portfolio Detail</li>
                                        <li><a href="portfolio-detail-one.html" class="sub-menu-item">Portfolio One</a></li>
                                        <li><a href="portfolio-detail-two.html" class="sub-menu-item">Portfolio Two</a></li>
                                        <li><a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a></li>
                                        <li><a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Blogs</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Blog</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-grid.html" class="sub-menu-item">Blog Grids</a></li>
                                        <li><a href="blog-masonry.html" class="sub-menu-item">Blog Masonry</a></li>
                                        <li><a href="blog-list.html" class="sub-menu-item">Blog List</a></li>
                                        <li><a href="blog-grid-sidebar.html" class="sub-menu-item">Blog-Sidebar</a></li>
                                        <li><a href="blog-masonry-sidebar.html" class="sub-menu-item">Blog Masonry-sidebar</a></li>
                                        <li><a href="blog-list-sidebar.html" class="sub-menu-item">Blog List-Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Image Blog</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-image-grid.html" class="sub-menu-item">Blog Grids</a></li>
                                        <li><a href="blog-image-masonry.html" class="sub-menu-item">Blog Masonry</a></li>
                                        <li><a href="blog-image-grid-sidebar.html" class="sub-menu-item">Blog-Sidebar</a></li>
                                        <li><a href="blog-image-masonry-sidebar.html" class="sub-menu-item">Blog Masonry-sidebar</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Blog Detail </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blog-detail-one.html" class="sub-menu-item">Blog Detail One</a></li>
                                        <li><a href="blog-detail-two.html" class="sub-menu-item">Blog Detail Two</a></li>
                                        <li><a href="blog-detail-three.html" class="sub-menu-item">Blog Detail Three</a></li>
                                        <li><a href="blog-detail-four.html" class="sub-menu-item">Blog Detail Four</a></li>
                                        <li><a href="blog-detail-five.html" class="sub-menu-item">Blog Detail Five</a></li>
                                    </ul>  
                                </li>
                                <li><a href="blog-author.html" class="sub-menu-item">Author</a></li>
                            </ul>
                        </li>

                        <li><a href="page-contact.html" class="sub-menu-item">Contact us</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>