<?php require('header.php'); ?>
<div class="nk-block">
    <div class="card">
        <div class="card-aside-wrap">
            <div class="card-inner card-inner-lg">
                <div class="nk-block-head">
                    <div class="nk-block-between d-flex justify-content-between">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Personal Information</h4>
                            <div class="nk-block-des">
                                <p>Basic info, like your name and address, that you use
                                    on Nio Platform.</p>
                            </div>
                        </div>
                        <div class="d-flex align-center">
                            <div class="nk-tab-actions me-n1">
                                <a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#profile-edit"><em class="icon ni ni-edit"></em></a>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none">
                                <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="nk-data data-list">
                        <div class="data-head">
                            <h6 class="overline-title">Basics</h6>
                        </div>
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Full Name</span>
                                <span class="data-value">Abu Bin Ishtiyak</span>
                            </div>
                        </div><!-- data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Display Name</span>
                                <span class="data-value">Ishtiyak</span>
                            </div>
                        </div><!-- data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Email</span>
                                <span class="data-value">testing@abc.com</span>
                            </div>
                        </div><!-- data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Phone Number</span>
                                <span class="data-value text-soft">Not add yet</span>
                            </div>
                        </div><!-- data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Date of Birth</span>
                                <span class="data-value">29 Feb, 1986</span>
                            </div>
                        </div><!-- data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Nationality</span>
                                <span class="data-value">Canadian</span>
                            </div>
                        </div><!-- data-item -->
                        <div class="data-item" data-tab-target="#address">
                            <div class="data-col">
                                <span class="data-label">Address</span>
                                <span class="data-value">2337 Kildeer
                                    Drive,<br>Kentucky, Canada</span>
                            </div>
                        </div><!-- data-item -->
                    </div><!-- data-list -->
                </div><!-- .nk-block -->
            </div>
            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="card-inner-group" data-simplebar>
                    <div class="card-inner">
                        <div class="user-card">
                            <div class="user-avatar bg-primary">
                                <span>AB</span>
                            </div>
                            <div class="user-info">
                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                <span class="sub-text">testing@abc.com</span>
                            </div>
                            <div class="user-action">
                                <div class="dropdown">
                                    <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change
                                                        Photo</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update
                                                        Profile</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .user-card -->
                    </div><!-- .card-inner -->
                    <div class="card-inner p-0">
                        <ul class="link-list-menu">
                            <li><a class="active" href="./admin-profile.php"><em class="icon ni ni-user-fill-c"></em><span>Personal
                                        Infomation</span></a></li>
                        </ul>
                    </div><!-- .card-inner -->
                    <div class="card-inner">
                        <div class="user-account-info py-0">
                            <h6 class="overline-title-alt">Last Login</h6>
                            <p>06-29-2020 02:39pm</p>
                            <h6 class="overline-title-alt">Login IP</h6>
                            <p>192.129.243.28</p>
                        </div>
                    </div><!-- .card-inner -->
                </div><!-- .card-inner-group -->
            </div><!-- card-aside -->
        </div><!-- .card-aside-wrap -->
    </div><!-- .card -->
</div><!-- .nk-block -->
<div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <input type="text" class="form-control" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="display-name">Display Name</label>
                                    <input type="text" class="form-control" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="personal-email">Email</label>
                                    <input type="email" class="form-control" id="personal-email" value="testing@abc.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control" id="phone-no" value="+880" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Date of Birth</label>
                                    <input type="text" class="form-control date-picker" id="birth-day" placeholder="02/24/2021">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="nationality">Nationality</label>
                                    <input type="text" class="form-control date-picker" id="nationality" value="Canadian">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="latest-sale">
                                    <label class="custom-control-label" for="latest-sale">Use full name to display
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address Line 1</label>
                                    <input type="text" class="form-control" id="address-l1" value="2337 Kildeer Drive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l2">Address Line 2</label>
                                    <input type="text" class="form-control" id="address-l2" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control" id="address-st" value="Kentucky">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-county">Country</label>
                                    <select class="form-select js-select2" id="address-county">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update
                                            Address</a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
<?php require('footer.php'); ?>