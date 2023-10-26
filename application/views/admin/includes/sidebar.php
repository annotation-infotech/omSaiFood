<nav class="sidebar vertical-scroll dark_sidebar  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="<?= base_url()?>assets/main/images/logo.png" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="<?= base_url()?>assets/admin/img/menu-icon/dashboard.svg" alt>
                    </div>
                    <span>Admin's</span>
                </a>
                <ul>
                    <li><a class="active" href="index.html">Create Admin</a></li>
                    <li><a href="index_2.html">Admin List</a></li>
                </ul>
            </li>
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="<?= base_url()?>assets/admin/img/menu-icon/dashboard.svg" alt>
                    </div>
                    <span>Vendors's</span>
                </a>
                <ul>
                    <li><a class="active" href="<?= base_url()?>createVendor">Create Vendor</a></li>
                    <li><a href="<?= base_url()?>vendorList">Vendor's List</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="<?= base_url()?>assets/admin/img/menu-icon/2.svg" alt>
                    </div>
                    <span>Customers</span>
                </a>
                <ul>
                    <li><a href="editor.html">Users</a></li>
                    <li><a href="<?= base_url()?>users">Total Users</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="<?= base_url()?>assets/admin/img/menu-icon/3.svg" alt>
                    </div>
                    <span>Orders</span>
                </a>
                <ul>
                    <li><a href="colors.html">Orders</a></li>
                    <li><a href="Alerts.html">Total Orders</a></li>
               
                    
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="<?= base_url()?>assets/admin/img/menu-icon/4.svg" alt>
                    </div>
                    <span>Products</span>
                </a>
                <ul>
                    <li><a href="<?= base_url()?>createCategory">Create Category</a></li>
                    <li><a href="<?= base_url()?>createProducts">Create Products</a></li>
                    <li><a href="<?= base_url()?>productPrice">Add/Update Products Price</a></li>
                    <li><a href="<?= base_url()?>uploadProductsImages">Upload Products Images</a></li>
                    <li><a href="Layouts.html">Create Combo Products</a></li>
                    <li><a href="Max_Length.html">Category List</a></li>
                    <li><a href="<?php echo base_url()?>productList">Products List</a></li>
                    <li><a href="Layouts.html">Combo Products List</a></li>
                    <li><a href="<?= base_url()?>trendingBestSales">Trending & Best Sales</a></li>

                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="<?= base_url()?>assets/admin/img/menu-icon/3.svg" alt>
                    </div>
                    <span>Promo Code</span>
                </a>
                <ul>
                    <li><a href="<?= base_url()?>createPromoCode">Create Promo Code</a></li>
                    <li><a href="Alerts.html">Total Promo Codes</a></li>
               
                    
                </ul>
            </li>
             
        </ul>
    </nav>