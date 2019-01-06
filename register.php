<?php
    include "includes/header.php";

?>

    <div class="container">
        <h1>Fill the form below</h1>
        <form action="includes/registration.php" method="POST">
            <div class="form-group">
                <label>Business Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password" name="re-password" class="form-control">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label>Website URL</label>
                <input type="text" name="url" class="form-control">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label>Working Hours</label>
                <input type="text" name="hours" class="form-control"placeholder="Mon-Fri 9am-5pm">
            </div>
            <div class="form-group">
                <label> <h3>Select Your Business Categories</h3></label><br>
                <input type="checkbox" name="category" value="art" class="form-control">Arts / Paintings / Sculptures<br>
                <input type="checkbox" name="category" value="food" class="form-control">Fastfoods / Restaurants<br>
                <input type="checkbox" name="category" value="money" class="form-control">Financial Institutions / Banks<br>
                <input type="checkbox" name="category" value="transport" class="form-control">Water, Air & Road Transportation<br>
                <input type="checkbox" name="category" value="it" class="form-control">IT / Software / Web & App Development<br>
                <input type="checkbox" name="category" value="law" class="form-control">Legal Services<br>
                <input type="checkbox" name="category" value="health" class="form-control">Hospitals / Clinics / Health Specialist Centers<br>
                <input type="checkbox" name="category" value="beauty" class="form-control">Barber's Shops / Beauty Shops / Salons<br>
                <input type="checkbox" name="category" value="fashion" class="form-control">Fashion Designers<br>
                <input type="checkbox" name="category" value="estate" class="form-control">Estate Management / Property Management<br>
                <input type="checkbox" name="category" value="fitness" class="form-control">Fitness Coaching / Gyms / Spas<br>
                <input type="checkbox" name="category" value="education" class="form-control">Elementary / Secondary schools / Higher Institutions<br>
                <input type="checkbox" name="category" value="sport" class="form-control">Sports Clubs<br>
                <input type="checkbox" name="category" value="ngo" class="form-control">NGOs / Human Activists<br>
                <input type="checkbox" name="category" value="social" class="form-control">Social Clubs / Rotary Clubs<br>
                <input type="checkbox" name="category" value="producers" class="form-control">Manufacturing Companies<br>
                <input type="checkbox" name="category" value="technical" class="form-control">Engineerings / Technical Spacialists<br>
                <input type="checkbox" name="category" value="entertainment" class="form-control">Tv & Radio Broadcast / Music Studio<br>
                <input type="checkbox" name="category" value="photography" class="form-control">Photography / Video & Movie Shoot <br>
                <input type="checkbox" name="category" value="services" class="form-control">Maintaenance & Cleaning Services / All Other kinds of Services<br>
            </div>
            <div class="form-group">
                <label><h4>About Your Business</h4></label>
                <textarea name="about" class="form-control" row="4"></textarea>
                </div>
            <input type="submit" name="register-submit" value="submit" class="btn btn-primary">


        </form>
    
    </div>

<?php    include "includes/footer.php";
?>