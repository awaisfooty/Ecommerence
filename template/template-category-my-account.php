<?php get_header();?>
<?php
/*
 Template Name: My Account
*/
?>

<div class="container">
<div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4">
        <aside>
        <div class="text-center">
            <img src="https://placehold.co/100x100" alt="Profile picture of Sarah Miller" width="100" height="100">
            <h2>Leo Messi</h2>
        </div>
        <nav>
            <a href="#"><i class="fas fa-user"></i> Account <i class="fas fa-chevron-right"></i></a>
            <a href="#"><i class="fas fa-key"></i> Change Password <i class="fas fa-chevron-right"></i></a>
            <a href="#"><i class="fas fa-credit-card"></i> Billing Address <i class="fas fa-chevron-right"></i></a>
            <a href="#"><i class="fas fa-truck"></i> Shipping Address <i class="fas fa-chevron-right"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i> My Orders <i class="fas fa-chevron-right"></i></a>
            <a href="#"><i class="fas fa-lock"></i> Privacy <i class="fas fa-chevron-right"></i></a>
            <a href="#"><i class="fas fa-trash"></i> Delete Account <i class="fas fa-chevron-right"></i></a>
        </nav>
        </aside>
    </div>
    <div class="col-sm-12 col-md-8 col-lg-8">
        <section class="section-box">
            <h2><i class="fas fa-credit-card"></i> Billing Address</h2>
            <form>
                <label for="country">Country <span class="text-red-500">*</span></label>
                <select id="country">
                    <option>United Kingdom (UK)</option>
                </select>
                <div class="flex">
                    <div>
                        <label for="first-name">First Name <span class="text-red-500">*</span></label>
                        <input type="text" id="first-name" value="">
                    </div>
                    <div>
                        <label for="last-name">Last Name <span class="text-red-500">*</span></label>
                        <input type="text" id="last-name" value="">
                    </div>
                </div>
                <label for="company-name">Company Name</label>
                <input type="text" id="company-name">
                <label for="address">Address <span class="text-red-500">*</span></label>
                <input type="text" id="address" value="12 abc street">
                <label for="address-2">Apartment, suite, unit etc. (optional)</label>
                <input type="text" id="address-2">
                <label for="city">Town / City <span class="text-red-500">*</span></label>
                <input type="text" id="city" value="london">
            </form>
        </section>
    </div>
</div>
</div>

<?php get_footer();?>