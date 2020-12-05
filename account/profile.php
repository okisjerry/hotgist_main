<?php
include_once 'account-header.php';
?>

<div class="dashboard-content">
    <div class="dashboard-form">
        <div class="row">

            <!-- Profile -->
            <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                <div class="dashboard-list-box">
                    <h4 class="gray">Profile Details</h4>
                    <div class="dashboard-list-box-static">

                        <!-- Avatar -->
                        <div class="edit-profile-photo">
                            <img src="../images/user-avatar.jpg" alt=""> 
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload" />
                                </div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="my-profile">

                            <label>Your Name *</label>
                            <input value="<?php echo $auth_user['name']?>" type="text">

                            <label>Phone Number *</label>
                            <input value="<?php echo $auth_user['phone']?>" type="text">

                            <label>Email Address *</label>
                            <input value="<?php echo $auth_user['email']?>" type="text">

                            <label>Your Bio *</label>
                            <textarea name="notes" id="notes" cols="30"
                                rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>

                            <label class="twitter-input"><i class="fa fa-twitter"></i> Twitter</label>
                            <input placeholder="https://www.twitter.com/" type="text">

                            <label class="fb-input"><i class="fa fa-facebook-square"></i> Facebook</label>
                            <input placeholder="https://www.facebook.com/" type="text">

                        </div>

                        <button class="button">Save Changes</button>

                    </div>
                </div>
            </div>

            <!-- Change Password -->
            <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                <div class="dashboard-list-box margin-top-0">
                    <h4 class="gray">Your Address</h4>
                    <div class="dashboard-list-box-static">

                        <!-- Change Password -->
                        <div class="my-profile">
                           
                            <label>Address *</label>
                            <input type="text">

                            <label>Country *</label>
                            <input type="text">

                            <label>City *</label>
                            <input type="text">

                            <label>Region/State *</label>
                            <input type="text">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Content / End -->
<?php
    include_once 'account-footer.php';
?>