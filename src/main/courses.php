<?php require('header.php'); ?>
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Courses</h3>
            <div class="nk-block-des text-soft">
                <p>You have total 20 Courses.</p>
            </div>
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered
                                        By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><span>Active</span></a></li>
                                        <li><a href="#"><span>Pending</span></a></li>
                                        <li><a href="#"><span>Rejected</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nk-block-tools-opt d-none d-sm-block" data-bs-toggle="modal" data-bs-target="#modalCreate">
                            <a href="#modalCreate" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add
                                    Course</span></a>
                        </li>
                        <li class="nk-block-tools-opt d-block d-sm-none" data-bs-toggle="modal" data-bs-target="#modalCreate">
                            <a href="#" class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                        </li>
                    </ul>
                </div>
            </div><!-- .toggle-wrap -->
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div><!-- .nk-block-head -->
<div class="nk-block">
    <div class="card card-stretch">
        <div class="card-inner-group">
            <div class="card-inner p-0">
                <table class="nk-tb-list nk-tb-ulist">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-all">
                                    <label class="custom-control-label" for="pid-all"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col"><span class="sub-text">Course
                                    Name</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Category</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Instractor</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Lesson</span></th>
                            <th class="nk-tb-col tb-col-xxl"><span class="sub-text">Enrole Student</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Price</span></th>
                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Deadline</span></th>
                            <th class="nk-tb-col nk-tb-col-tools text-end">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark
                                                                As Archive</span></a>
                                                    </li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove
                                                                Category</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </th>
                        </tr><!-- .nk-tb-item -->
                    </thead>
                    <tbody>
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-01">
                                    <label class="custom-control-label" for="pid-01"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-purple">
                                        <span>RD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">Responsive Design</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Web Development</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Alex Ashley</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 32</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 25</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">Active</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$30</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>20.4.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-02">
                                    <label class="custom-control-label" for="pid-02"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-info"><span>AD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">Android Development</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Mobile Application</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Michael Wood</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 11</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 7</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-warning">Pending</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$65</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>10.5.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-03">
                                    <label class="custom-control-label" for="pid-03"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-warning">
                                        <span>UD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">UI/UX Design</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Graphics Design</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Abu Bin Istiak</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 12</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 8</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">Active</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$20</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>15.4.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-04">
                                    <label class="custom-control-label" for="pid-04"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-purple">
                                        <span>WT</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">WordPress Theme Development
                                        </h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Web Development</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Emily Smith</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 24</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 3</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">Active</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$50</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>20.4.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-05">
                                    <label class="custom-control-label" for="pid-05"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-info"><span>AD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">Android Development</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Mobile Application</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Jhon Doe</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 11</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 7</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-warning">Pending</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$65</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>10.5.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-06">
                                    <label class="custom-control-label" for="pid-06"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-warning">
                                        <span>UD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">UI/UX Design</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Graphics Design</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span> Abu Bin Istiak</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 12</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 8</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">Active</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$20</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>15.4.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-07">
                                    <label class="custom-control-label" for="pid-07"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-purple">
                                        <span>RD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">Responsive Design</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Web Development</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>lara Ashley</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 22</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 29</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">Active</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$50</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>22.5.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-08">
                                    <label class="custom-control-label" for="pid-08"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-info"><span>AD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">Android Development</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Mobile Application</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Michael Wood</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 11</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 7</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-warning">Pending</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$65</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>10.5.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-09">
                                    <label class="custom-control-label" for="pid-09"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-warning">
                                        <span>UD</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">UI/UX Design</h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Graphics Design</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Lara Watson</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 22</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 17</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">Active</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$20</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>15.4.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="pid-10">
                                    <label class="custom-control-label" for="pid-10"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <a href="#" class="project-title">
                                    <div class="user-avatar sq bg-purple">
                                        <span>WT</span>
                                    </div>
                                    <div class="project-info">
                                        <h6 class="title">WordPress Theme Development
                                        </h6>
                                    </div>
                                </a>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Web Development</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Mark Smith</span>
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>Total lesson: 18</span>
                            </td>
                            <td class="nk-tb-col tb-col-xxl">
                                <span>Total enrolment: 6</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                <span class="badge badge-dim bg-success">Active</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>$50</span>
                            </td>
                            <td class="nk-tb-col tb-col-mb">
                                <span>20.4.2021</span>
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a data-bs-toggle="modal" href="#modalEdit"><em class="icon ni ni-edit"></em><span>Edit
                                                                Course</span></a></li>
                                                    <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-delete"></em><span>Delete
                                                                Course</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item -->
                    </tbody>
                </table><!-- .nk-tb-list -->
            </div>
            <div class="card-inner">
                <div class="nk-block-between-md g-3">
                    <div class="g">
                        <ul class="pagination justify-content-center justify-content-md-start">
                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                            <li class="page-item"><a class="page-link" href="#">6</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">7</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">Next</a>
                            </li>
                        </ul><!-- .pagination -->
                    </div>
                    <div class="g">
                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                            <div>Page</div>
                            <div>
                                <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                    <option value="page-1">1</option>
                                    <option value="page-2">2</option>
                                    <option value="page-4">4</option>
                                    <option value="page-5">5</option>
                                    <option value="page-6">6</option>
                                    <option value="page-7">7</option>
                                    <option value="page-8">8</option>
                                    <option value="page-9">9</option>
                                    <option value="page-10">10</option>
                                    <option value="page-11">11</option>
                                    <option value="page-12">12</option>
                                    <option value="page-13">13</option>
                                    <option value="page-14">14</option>
                                    <option value="page-15">15</option>
                                    <option value="page-16">16</option>
                                    <option value="page-17">17</option>
                                    <option value="page-18">18</option>
                                    <option value="page-19">19</option>
                                    <option value="page-20">20</option>
                                </select>
                            </div>
                            <div>OF 102</div>
                        </div>
                    </div><!-- .pagination-goto -->
                </div><!-- .nk-block-between -->
            </div><!-- .card-inner -->
        </div>
    </div><!-- .card -->
</div><!-- .nk-block -->

<div class="modal fade" id="modalCreate">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Create Course</h5>
                <form action="#" class="pt-2">
                    <div class="row gy-3 gx-gs">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="course-name">Course Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="course-name" placeholder="e.g. Responsive Design">
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="course-category">Course category</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" id="course-category">
                                        <option>Web Development</option>
                                        <option>Mobile Application</option>
                                        <option>Graphics Design</option>
                                    </select>
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="dificulties">Course Dificulties</label>
                                <select class="form-select js-select2" id="dificulties">
                                    <option>Beginners</option>
                                    <option>Intermediate</option>
                                    <option>Advanced</option>
                                </select>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="course-lesson">Total Lesson</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="course-lesson" placeholder="40">
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="thumb">Course thumbnail</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" multiple class="form-file-input" id="customFile-create">
                                        <label class="form-file-label" for="customFile-create">Choose file</label>
                                    </div>
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="thumb">Course Description</label>
                                <div class="form-control-wrap">
                                    <div class="quill-minimal"></div>
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="thumb">Status</label>
                                <div class="form-control-wrap">
                                    <ul class="custom-control-group g-3 align-center flex-wrap">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable">
                                                <label class="custom-control-label" for="reg-enable">Active</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable">
                                                <label class="custom-control-label" for="reg-disable">Pending</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="reg-public" id="reg-request">
                                                <label class="custom-control-label" for="reg-request">Rejected</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="course-price">Course Price</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="course-price" placeholder="30">
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Deadline</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left"> <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy">
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save
                                    Informations</button>
                            </div><!-- .form-group -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- .Create Modal-Content -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="title">Edit Course</h5>
                <form action="#" class="pt-2">
                    <div class="row gy-3 gx-gs">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="edit-course-name">Course Name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="edit-course-name" value="Responsive Design">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-category">Course category</label>
                                <select class="form-select js-select2" id="edit-category">
                                    <option>Web Development</option>
                                    <option>Mobile Application</option>
                                    <option>Graphics Design</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-dificulties">Course Dificulties</label>
                                <select class="form-select js-select2" id="edit-dificulties">
                                    <option>Beginners</option>
                                    <option>Intermediate</option>
                                    <option>Advanced</option>
                                </select>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="edit-lesson">Total Lesson</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="edit-lesson" value="40">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="thumb">Course thumbnail</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" multiple class="form-file-input" id="edit-customFile">
                                        <label class="form-file-label" for="edit-customFile">Choose file</label>
                                    </div>
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="edit-description">Course Description</label>
                                <div class="form-control-wrap">
                                    <div class="quill-minimal"></div>
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="status">Status</label>
                                <div class="form-control-wrap">
                                    <ul class="custom-control-group g-3 align-center flex-wrap">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" checked name="reg-public" id="edit-course-active">
                                                <label class="custom-control-label" for="edit-course-active">Active</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-pending">
                                                <label class="custom-control-label" for="edit-course-pending">Pending</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="reg-public" id="edit-course-reject">
                                                <label class="custom-control-label" for="edit-course-reject">Rejected</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label" for="course-price-edit">Course Price</label>
                                <div class="form-control-wrap">
                                    <input type="number" class="form-control" id="course-price-edit" value="30">
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Deadline</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-left"> <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" placeholder="mm/dd/yyyy">
                                </div>
                            </div><!-- .form-group -->
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save
                                    Informations</button>
                            </div><!-- .form-group -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- .Edit Modal-Content -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content"> <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal py-4"> <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                    <h4 class="nk-modal-title">Are You Sure ?</h4>
                    <div class="nk-modal-text mt-n2">
                        <p class="text-soft">This event data will be removed permanently.</p>
                    </div>
                    <ul class="d-flex justify-content-center gx-4 mt-4">
                        <li>
                            <button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete
                                it</button>
                        </li>
                        <li>
                            <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .Delete Modal-content -->
<?php require('footer.php'); ?>