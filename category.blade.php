<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <!-- <base href="https://aerainfra.com/stock/public/user" data-url="https://aerainfra.com/stock/public"> -->
    <meta name="author" content="Vedmarg" />
    <link rel="shortcut icon" href="https://d1mz44slphi9ww.cloudfront.net/images/fav-icon.png" />
    <meta name="robots" content="noindex,nofollow">
    <!-- Tags Input CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <!-- TinyMCE CSS -->
    <script type="text/javascript" src="https://d1mz44slphi9ww.cloudfront.net/assets/js/tinymce.min.js"></script>
    <link rel="stylesheet preload" type="text/css"
        href="https://d1mz44slphi9ww.cloudfront.net/assets/public/css/static.min.css" as="css" />
    <link rel="stylesheet preload" type="text/css" href="https://aerainfra.com/stock/public/css/all.css?v=1727256874" />
    <link rel="stylesheet" href="https://aerainfra.com/stock/public/css/supplier.css">
    <link rel="stylesheet" href="https://aerainfra.com/stock/public/css/addProducts.css">
    <link rel='stylesheet' type='text/css' property='stylesheet'
        href='/stock/public/_debugbar/assets/stylesheets?v=1712920836&theme=auto' data-turbolinks-eval='false'
        data-turbo-eval='false'>
    <script src='/stock/public/_debugbar/assets/javascript?v=1712920836' data-turbolinks-eval='false'
        data-turbo-eval='false'></script>
    <script data-turbo-eval='false'>jQuery.noConflict(true);</script>
    <link rel="stylesheet" href="style.css">

    <!-- <style>
        .sf-js-enabled .phpdebugbar pre.sf-dump .sf-dump-compact,
        .sf-js-enabled .sf-dump-str-collapse .sf-dump-str-collapse,
        .sf-js-enabled .sf-dump-str-expand .sf-dump-str-expand {
            display: none;
        }

        .sf-dump-hover:hover {
            background-color: #B729D9;
            color: #FFF !important;
            border-radius: 2px;
        }

        .phpdebugbar pre.sf-dump {
            display: block;
            white-space: pre;
            padding: 5px;
            overflow: initial !important;
        }

        .phpdebugbar pre.sf-dump:after {
            content: "";
            visibility: hidden;
            display: block;
            height: 0;
            clear: both;
        }

        .phpdebugbar pre.sf-dump span {
            display: inline-flex;
        }

        .phpdebugbar pre.sf-dump a {
            text-decoration: none;
            cursor: pointer;
            border: 0;
            outline: none;
            color: inherit;
        }

        .phpdebugbar pre.sf-dump img {
            max-width: 50em;
            max-height: 50em;
            margin: .5em 0 0 0;
            padding: 0;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3;
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis {
            display: inline-block;
            overflow: visible;
            text-overflow: ellipsis;
            max-width: 5em;
            white-space: nowrap;
            overflow: hidden;
            vertical-align: top;
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis {
            max-width: none;
        }

        .phpdebugbar pre.sf-dump code {
            display: inline;
            padding: 0;
            background: none;
        }

        .sf-dump-public.sf-dump-highlight,
        .sf-dump-protected.sf-dump-highlight,
        .sf-dump-private.sf-dump-highlight,
        .sf-dump-str.sf-dump-highlight,
        .sf-dump-key.sf-dump-highlight {
            background: rgba(111, 172, 204, 0.3);
            border: 1px solid #7DA0B1;
            border-radius: 3px;
        }

        .sf-dump-public.sf-dump-highlight-active,
        .sf-dump-protected.sf-dump-highlight-active,
        .sf-dump-private.sf-dump-highlight-active,
        .sf-dump-str.sf-dump-highlight-active,
        .sf-dump-key.sf-dump-highlight-active {
            background: rgba(253, 175, 0, 0.4);
            border: 1px solid #ffa500;
            border-radius: 3px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-hidden {
            display: none !important;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper {
            font-size: 0;
            white-space: nowrap;
            margin-bottom: 5px;
            display: flex;
            position: -webkit-sticky;
            position: sticky;
            top: 5px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>* {
            vertical-align: top;
            box-sizing: border-box;
            height: 21px;
            font-weight: normal;
            border-radius: 0;
            background: #FFF;
            color: #757575;
            border: 1px solid #BBB;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input {
            padding: 3px;
            height: 21px;
            font-size: 12px;
            border-right: none;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            color: #000;
            min-width: 15px;
            width: 100%;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next,
        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous {
            background: #F2F2F2;
            outline: none;
            border-left: none;
            font-size: 0;
            line-height: 0;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next>svg,
        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous>svg {
            pointer-events: none;
            width: 12px;
            height: 12px;
        }

        .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-count {
            display: inline-block;
            padding: 0 5px;
            margin: 0;
            border-left: none;
            line-height: 21px;
            font-size: 12px;
        }

        .phpdebugbar pre.sf-dump,
        .phpdebugbar pre.sf-dump .sf-dump-default {
            word-wrap: break-word;
            white-space: pre-wrap;
            word-break: normal
        }

        .phpdebugbar pre.sf-dump .sf-dump-num {
            font-weight: bold;
            color: #1299DA
        }

        .phpdebugbar pre.sf-dump .sf-dump-const {
            font-weight: bold
        }

        .phpdebugbar pre.sf-dump .sf-dump-str {
            font-weight: bold;
            color: #3A9B26
        }

        .phpdebugbar pre.sf-dump .sf-dump-note {
            color: #1299DA
        }

        .phpdebugbar pre.sf-dump .sf-dump-ref {
            color: #7B7B7B
        }

        .phpdebugbar pre.sf-dump .sf-dump-public {
            color: #000000
        }

        .phpdebugbar pre.sf-dump .sf-dump-protected {
            color: #000000
        }

        .phpdebugbar pre.sf-dump .sf-dump-private {
            color: #000000
        }

        .phpdebugbar pre.sf-dump .sf-dump-meta {
            color: #B729D9
        }

        .phpdebugbar pre.sf-dump .sf-dump-key {
            color: #3A9B26
        }

        .phpdebugbar pre.sf-dump .sf-dump-index {
            color: #1299DA
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis {
            color: #A0A000
        }

        .phpdebugbar pre.sf-dump .sf-dump-ns {
            user-select: none;
        }

        .phpdebugbar pre.sf-dump .sf-dump-ellipsis-note {
            color: #1299DA
        }
    </style> -->
</head>

<body>
    <div class="theme-layout dashboard user" id="scrollup">
        <header class="stick-top forsticky gradient">
            <div class="main-header">
                <div class="container head-container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="logo">
                                <a class="nav-link mobile-toggle-sidebar" href="javascript:void(0)">
                                    <img
                                        src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/menu-mobile-black.png">
                                </a>
                                <a class="navbar-brand" href="">
                                    <img class="logo-placeholder"
                                        src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/school-logo-placeholder.png"
                                        alt="">
                                    <span class="ss-name"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <nav class="nav">
                                <ul class="navbar-nav navbar-left">
                                    <li>
                                    </li>
                                </ul>
                                <ul class="navbar-nav navbar-right">
                                    <li></li>
                                    <li class="nav-user--profile">
                                        <a class="nav-link nav-user-profile" href="javascript:void(0)">
                                            <img class="user-image"
                                                src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/user-placeholder.png"
                                                alt="">
                                        </a>

                                        <ul class="dropdown-menu-user">
                                            <li class="pb-2 user--name--d">
                                                <div class="text-dark text-center">
                                                    Hi,
                                                </div>
                                            </li>
                                            <li>
                                                <a href="https://aerainfra.com/stock/public/logout">

                                                    <img
                                                        src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/logout.png">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="dashboard user user-section">
            <div class="block pt-0">
                <div class="container">
                    <div class="row gw-profile-sidebar">
                        <aside class="col-lg-2 sidebar border-right left-sidebar">
                            <div class="dashboard-sidebar">
                                <div class="sidebar-user-provile">
                                    <div class="user-profile-picture">
                                        <a href="https://aerainfra.com/stock/public/user">
                                            <div class="user--image">
                                                <img class="user-image"
                                                    src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/school-logo-placeholder.png"
                                                    alt="" />
                                            </div>
                                            <div class="user--info">
                                                <span class="name-fd">Hi, </span>
                                                <span class="user--role">()</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="user-profile-name">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="sidebar-nav">
                                    <ul class="sidebar-menu">

                                        <li class="inner-child">
                                            <input clas="form-control" placeholder="Search menu..."
                                                id="searchSidebarMenuItem" value="" autofocus>
                                        </li>

                                        <li class="inner-child sidebar--item ">
                                            <a href="#">
                                                <img
                                                    src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/dashboard.png">
                                                <span class="item--label">Dashboard</span>
                                            </a>
                                        </li>


                                        <li class="inner-child sidebar--item " id="groups_section">
                                            <a role="button" title="Set-Up">
                                                <img
                                                    src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/inventory.png">
                                                <span class="item--label">Setup new</span>
                                            </a>
                                            <ul class="dropdown" style="display: none;margin-left:10px;">



                                                <li class="inner-child sidebar--item " id="category_section">
                                                    <a href="category.html">
                                                        <img
                                                            src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/inventory.png">
                                                        <span class="item--label">Categories</span>
                                                    </a>
                                                </li>

                                                <li class="inner-child sidebar--item " id="brands_section">
                                                    <a href="returnwindow.html">
                                                        <img
                                                            src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/inventory.png">
                                                        <span class="item--label">Return Window</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>


                                        <li class="inner-child sidebar--item ">
                                            <a href="authors.html">
                                                <img src="">
                                                <span class="item--label">Authors</span>
                                            </a>
                                        </li>

                                        <li class="inner-child sidebar--item ">
                                            <a href="racks.html">
                                                <img src="">
                                                <span class="item--label">Racks</span>
                                            </a>
                                        </li>

                                        <li class="inner-child sidebar--item " id="groups_section">
                                            <a role="button" title="Set-Up">
                                                <img
                                                    src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/inventory.png">
                                                <span class="item--label">Books</span>
                                            </a>
                                            <ul class="dropdown" style="display: none;margin-left:10px;">

                                                <li class="inner-child sidebar--item " id="brands_section"
                                                    style="display: flex; align-items: center;">
                                                    <a href="issuedbooklisting.html" style="width: 200px;">
                                                        <img
                                                            src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/inventory.png">
                                                        <span class="item--label">Issued Book Listing </span>
                                                    </a>

                                                    <a class="btn btn-primary btn-add" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#issuedbookaddModal"
                                                        style="width: 20px; color: #fff;   height: 29px;">
                                                        +
                                                    </a>
                                                </li>

                                                <li class="inner-child sidebar--item" id="brands_section"
                                                    style="display: flex; align-items: center;">
                                                    <a href="booklisting.html" style="width: 200px;">
                                                        <img src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/inventory.png"
                                                            alt="Book Listing">
                                                        <span class="item--label">Book Listing</span>
                                                    </a>
                                                    <!-- Plus Button that opens the modal -->
                                                    <a class="btn btn-primary btn-add" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#addModal"
                                                        style="width: 20px; color: #fff; height: 29px;">
                                                        +
                                                    </a>
                                                </li>
                                                <li class="inner-child sidebar--item " id="brands_section">
                                                    <a href="bookdetailed.html">
                                                        <img
                                                            src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/inventory.png">
                                                        <span class="item--label">Books Detailed Page</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="logout sidebar--item">
                                            <a href="https://aerainfra.com/stock/public/logout">
                                                <img
                                                    src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/logout.png">
                                                <span class="item--label">Log Out</span>
                                            </a>
                                        </li>
                                        <li class="divider sidebar--item"></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>

                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 section--content--container">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="dashboard-content-header">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="dashboard-content-header">
                                                    <h3>Categories</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 dashboard-content">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="bg-shadow">
                                                            <div class="card-header-title">
                                                                <h5 class="mb-0">
                                                                    Add Category
                                                                </h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <!-- <form method="post" id="add_category"
                                                                    action=""
                                                                    accept-charset="UTF-8" autocomplete="off">
                                                                    <input type="hidden" name="_token"
                                                                        value="KIY4ff8v5Dr0C6tgB6J4hIhT7692bh0XiJFXDdIJ"
                                                                        autocomplete="off">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Category Name
                                                                            *</label>
                                                                        <input type="text" name="category_name" value=""
                                                                            placeholder="" class="form-control">
                                                                        <br>
                                                                        <label class="form-label">Book/ISBN
                                                                            Code</label>
                                                                        <input type="text" name="category_code" value=""
                                                                            placeholder="" class="form-control"><br>
                                                                        <label class="form-label">Select Parent
                                                                            Category</label>
                                                                        <select name="parent_category"
                                                                            id="parent_category"
                                                                            class="form-label form-control">
                                                                            <option value="">Select the parent Category
                                                                            </option>

                                                                            <option value="12">
                                                                                Dresses
                                                                            </option>

                                                                            <option value="15">
                                                                                Electronics
                                                                            </option>

                                                                            <option value="33">
                                                                                Stationary
                                                                            </option>

                                                                            <option value="38">
                                                                                pen
                                                                            </option>
                                                                        </select><br>
                                                                        <label class="form-label">Description</label>
                                                                        <input type="text" name="category_description"
                                                                            value="" placeholder=""
                                                                            class="form-control"><br>
                                                                    </div>
                                                                    <button class="btn btn-sm btn-primary"
                                                                        type="submit">Save</button>
                                                                </form> -->

                                                                <form method="post" id="add_category" action="{{url('/')}}/post_category"
                                                                    accept-charset="UTF-8" autocomplete="off" onsubmit="refreshPage()">
                                                                    @csrf
                                                                    <!-- <input type="hidden" name="_token"
                                                                        value="KIY4ff8v5Dr0C6tgB6J4hIhT7692bh0XiJFXDdIJ"
                                                                        autocomplete="off"> -->
                                                                    <div class="form-group">
                                                                        <label class="form-label">Category Name
                                                                            *</label>
                                                                        <input type="text" name="category_name"
                                                                            id="category_name" value="" placeholder=""
                                                                            class="form-control">
                                                                        <span id="category_name_error"
                                                                            class="text-danger"
                                                                            style="font-size: 14px;"></span>
                                                                        <br>

                                                                        <label class="form-label">Book/ISBN Code</label>
                                                                        <input type="text" name="category_code"
                                                                            id="category_code" value="" placeholder=""
                                                                            class="form-control">
                                                                        <span id="category_code_error"
                                                                            class="text-danger"
                                                                            style="font-size: 14px;"></span>
                                                                        <br>

                                                                        <label class="form-label">Select Parent
                                                                            Category</label>
                                                                        <select name="parent_category"
                                                                            id="parent_category"
                                                                            class="form-label form-control">
                                                                            <option value="">Select the parent Category
                                                                            </option>
                                                                            <option value="12">Dresses</option>
                                                                            <option value="15">Electronics</option>
                                                                            <option value="33">Stationary</option>
                                                                            <option value="38">Pen</option>
                                                                        </select>
                                                                        <!-- <span id="parent_category_error" class="text-danger"></span> -->
                                                                        <br>

                                                                        <label class="form-label">Return Window</label>
                                                                        <select name="parent_category"
                                                                            id="parent_category"
                                                                            class="form-label form-control">
                                                                            <option value="">Select Return Window
                                                                            </option>
                                                                            <option value="12">abc</option>
                                                                            <option value="15">bac</option>

                                                                        </select>
                                                                        <br>
                                                                        <!-- <label class="form-label">Description</label>
                                                                        <input type="text" name="category_description"
                                                                            id="category_description" value=""
                                                                            placeholder="" class="form-control">
                                                                        
                                                                        <br> -->

                                                                    </div>
                                                                    <button class="btn btn-sm btn-primary" type="submit"
                                                                    onclick="return validateForm()">Save</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="card bg-shadow">
                                                            <div class="card-header">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <strong>All Categories</strong>
                                                                    </div>
                                                                    <div class="col-md-6" style="text-align:end;">
                                                                        Total: <span>13</span>, <a href="">
                                                                            Deleted: 6
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body ">
                                                                <table class="table table-bordered datatable"
                                                                    id="table_data">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">S.No</th>
                                                                            <th scope="col">Category Name</th>
                                                                            <th scope="col">Book/ISBN Code</th>
                                                                            <th scope="col">Parent Category</th>
                                                                            <th scope="col">Descriptions</th>
                                                                            <th scope="col">No of Books</th>
                                                                            <th scope="col">Operations</th>
                                                                        </tr>
                                                                    </thead>
                                                                    @foreach ($data as $category)
                                                                        @if ($category->isShow)
                                                                            <tr id="row-{{ $loop->iteration }}">
                                                                                <td class="sr_no">{{ $loop->iteration }}</td>
                                                                                <td class="category_name">{{ $category->category_name }}</td>
                                                                                <td class="category_code">{{ $category->category_code }}</td>
                                                                                <td class="parent_category">{{ $category->parent_category }}</td>
                                                                                <td class="description">{{ $category->desc }}</td>
                                                                                <td class="books_counts"><a href="" target="_blank">{{ $category->totlbooks }}</a> </td>
                                                                                <td>
                                                                                    
                                                                                    <form action="/delete_category" method="post" onsubmit="refreshPage()">
                                                                                        @csrf
                                                                                        <input type="hidden" name="id" value="{{ $category->id }}">
                                                                                        <a class="btn btn-add"
                                                                                        href="bookcategoryedit.html"
                                                                                        id="edit_categories_details">
                                                                                        <img
                                                                                            src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/edit-white.png">
                                                                                    </a>
                                                                                        <button type="submit"  class="btn btn-add bg-danger">
                                                                                            <!-- <a href="https://aerainfra.com/stock/public/user/inventory/categories/2777968793a802b8ee052530391a6e0783974d12-190724162136-6bcd019c-24d0-45c1-8a53-46fa1981ade8">
                                                                                                
                                                                                            </a> -->
                                                                                            <img src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/icons/delete-white.png">
                                                                                        </button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        @endif    
                                                                    @endforeach
                                                                </table>
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
                </div>
            </div>
        </section>
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add New Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="add_book" action="" method="POST" enctype="" autocomplete="off">
                            <input type="hidden" name="_token" value="KIY4ff8v5Dr0C6tgB6J4hIhT7692bh0XiJFXDdIJ"
                                autocomplete="off">
                            <div class="">
                                <div class="card-body">
                                    <h6>Books Detailss</h6>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="book_name" class="form-label">Book Name*</label>
                                            <input type="text" id="index_book_name" name="book_name"
                                                class="form-control" placeholder="">
                                            <div id="index_book_name_error" style="color: red; display: none;">
                                                Please enter a valid
                                                book name (at least 5 characters, letters, and spaces
                                                only).</div>
                                            <br>

                                        </div>
                                        <div class="col-md-4">
                                            <label for="book_id" class="form-label">Book
                                                ID</label>
                                            <input type="text" class="" id="index_book_id" name="" maxlength="10">
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="custom-select">
                                                <label for="author_name" class="form-label">Author</label>
                                                <div class="select-box" style="width: 255px;"
                                                    onclick="indextoggleDropdown('index-select-dropdown2')">
                                                    <div id="index-selected-options2" class="selected-items">
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon"
                                                        width="10" height="10" fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div id="index-select-dropdown2" class="dropdown-options"
                                                    style="display: none;">
                                                    <div class="option select_opt">
                                                        Please Select
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'author1', 'index-selected-options2', 'index-select-dropdown2')">
                                                        author1
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'author2', 'index-selected-options2', 'index-select-dropdown2')">
                                                        author2
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'author3', 'index-selected-options2', 'index-select-dropdown2')">
                                                        author3
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'author1', 'index-selected-options2', 'index-select-dropdown2')">
                                                        author3
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-select">
                                                <label for="author_name" class="form-label">Category</label>
                                                <div class="select-box" style="width: 255px;"
                                                    onclick="indextoggleDropdown('index-select-dropdown1')">
                                                    <div id="index-selected-options1" class="selected-items">
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon"
                                                        width="10" height="10" fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div id="index-select-dropdown1" class="dropdown-options"
                                                    style="display: none;">
                                                    <div class="option select_opt">
                                                        Please Select
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category1', 'index-selected-options1', 'index-select-dropdown1')">
                                                        Category1
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category2', 'index-selected-options1', 'index-select-dropdown1')">
                                                        Category2
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category3', 'index-selected-options1', 'index-select-dropdown1')">
                                                        Category3
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category4', 'index-selected-options1', 'index-select-dropdown1')">
                                                        Category4
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="custom-select">
                                                <label for="author_name" class="form-label">Sub-Category</label>
                                                <div class="select-box" style="width: 255px;"
                                                    onclick="indextoggleDropdown('index-select-addSubCategory')">
                                                    <div id="index-selected-addSubCategory" class="selected-items">
                                                    </div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon"
                                                        width="10" height="10" fill="currentColor" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div id="index-select-addSubCategory" class="dropdown-options"
                                                    style="display: none;">
                                                    <div class="option select_opt">
                                                        Please Select
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category11', 'index-selected-addSubCategory', 'index-select-addSubCategory')">
                                                        Category11
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category22', 'index-selected-addSubCategory', 'index-select-addSubCategory')">
                                                        Category22
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category33', 'index-selected-addSubCategory', 'index-select-addSubCategory')">
                                                        Category33
                                                    </div>
                                                    <div class="option"
                                                        onclick="indexselectOption(this, 'Category44', 'index-selected-addSubCategory', 'index-select-addSubCategory')">
                                                        Category44
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Class</label>
                                            <input type="text" name="" id="">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="form-label">No. Of
                                                Copies</label>
                                            <input type="text" name="" id="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Rack Name
                                                &amp; Number</label>
                                            <input type="text" name="" id="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Price</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="indexsaveButton" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- issued book popup -->

        <div class="modal fade" id="issuedbookaddModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Issue Book</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class=" dashboard-content-header m-0">

                                    <form id="add_sales" action="{{url('/')}}/post" method="POST" enctype="" autocomplete="off">
                                        <input type="hidden" name="_token"
                                            value="KIY4ff8v5Dr0C6tgB6J4hIhT7692bh0XiJFXDdIJ" autocomplete="off">
                                        <div class="">
                                            <div class="card-body">
                                                <h6>Book Details</h6>

                                                <div id="bookRows">
                                                    <div class="row bookRow default-row ">
                                                        <!-- Select Book with Tooltip in Input Group -->
                                                        <div class="col-md-3">
                                                            <label for="bookSelect" class="form-label">Select
                                                                Book</label>
                                                            <div class="input-group">
                                                                <select class="form-control bookSelect" id="bookSelect"
                                                                    onchange="fillBookDetails(this)">
                                                                    <option disabled selected>Select a Book</option>
                                                                    <option value="1" data-class="Fiction"
                                                                        data-author="John Doe" data-return="2024-06-03"
                                                                        data-price="200">Book 1</option>
                                                                    <option value="2" data-class="Non-Fiction"
                                                                        data-author="Jane Smith"
                                                                        data-return="2024-06-03" data-price="300">Book 2
                                                                    </option>
                                                                    <option value="3" data-class="Science Fiction"
                                                                        data-author="Mike Johnson"
                                                                        data-return="2024-06-03" data-price="250">Book 3
                                                                    </option>
                                                                    <option value="4" data-class="Fantasy"
                                                                        data-author="Emily Davis"
                                                                        data-return="2024-06-03" data-price="400">Book 4
                                                                    </option>
                                                                </select>
                                                                <button type="button" class="btn  bookInfoBtn"
                                                                    style="background-color: #007bff;"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="">
                                                                    i
                                                                </button>
                                                            </div>


                                                            <div id="book_selection_error"
                                                                style="color: red; display: none;">Please select a book.
                                                            </div>
                                                        </div>

                                                        <!-- Return Date -->
                                                        <div class="col-md-3 ">
                                                            <label for="returnDate" class="form-label">Return
                                                                Date</label>
                                                            <input type="date" class="form-control bookReturnDate"
                                                                id="returnDate">
                                                        </div>

                                                        <!-- Price -->
                                                        <div class="col-md-3 ">
                                                            <label for="price" class="form-label">Price</label>
                                                            <input type="number" class="form-control bookPrice"
                                                                id="price" readonly>
                                                        </div>

                                                        <!-- Plus and Minus Buttons -->
                                                        <div class="col-md-3 plus-minus-buttons mt-4">
                                                            <button class="btn btn-success me-2"
                                                                onclick="addRow()">+</button>
                                                            <button class="btn btn-danger" onclick="removeRow(this)"
                                                                style="display:none;">-</button>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Delete Confirmation Modal -->
                                                <div class="modal fade" id="deleteModal" tabindex="-1"
                                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">
                                                                    Confirm
                                                                    Deletion
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure
                                                                you want to
                                                                delete this
                                                                row?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    id="confirmDeleteBtn">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mt-4">
                                                        <label for="issueDate" class="form-label">Issue Date </label>
                                                        <input type="datetime-local" name="issueDate" id="issueDate">
                                                        <br>
                                                    </div>
                                                    <!-- <div class="col-md-3 mt-4">
                                                    <label for="" class="form-label">Price</label>
                                                    <input type="number" name="" id="">
                                                </div> -->
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <h6>Student Details</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="studentSelect" class="form-label">Select
                                                Student</label>
                                            <select class="form-control" id="studentSelect"
                                                onchange="fillStudentDetails()">
                                                <option disabled selected>
                                                    Select a student
                                                </option>
                                                <option value="1" data-class="10" data-admission="2020" data-roll="23"
                                                    data-mobile="1234567890" having-books="4">
                                                    John Doe
                                                </option>
                                                <option value="2" data-class="12" data-admission="2018" data-roll="19"
                                                    data-mobile="0987654321" having-books="8">
                                                    Jane Smith
                                                </option>
                                                <option value="3" data-class="11" data-admission="2019" data-roll="21"
                                                    data-mobile="1122334455" having-books="2">
                                                    Mike Johnson
                                                </option>
                                                <option value="4" data-class="10" data-admission="2020" data-roll="25"
                                                    data-mobile="2233445566" having-books="1">
                                                    Emily Davis
                                                </option>
                                            </select>

                                        </div>
                                        <div class="col-md-3">
                                            <label for="studentClass" class="form-label">Class</label>
                                            <input type="text" class="form-control" id="studentClass" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="admission" class="form-label">Admission
                                                Number</label>
                                            <input type="text" class="form-control" id="admission" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="roll" class="form-label">Roll
                                                Number</label>
                                            <input type="text" class="form-control" id="roll" readonly>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" id="mobile" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="books" class="form-label">Already
                                                Having
                                                Books</label>
                                            <input type="number" class="form-control" id="books" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="saveBook()">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <input type="hidden" id="cdnUrl" value="https://d1mz44slphi9ww.cloudfront.net/">
    </div>

    <div class="spinner-loader">
        <span class="loader-sm">
            <img src="https://vedmarg.s3.ap-south-1.amazonaws.com/images/loader.gif">
        </span>
    </div>

    <input type="hidden" name="_token" value="KIY4ff8v5Dr0C6tgB6J4hIhT7692bh0XiJFXDdIJ" autocomplete="off">

    <canvas id='myCanvas' style="position: absolute;left: 16%;top: 80px;z-index: -1;"></canvas>

    <script src="script.js"></script>
    <script type="text/javascript"
        src="https://vedmarg.s3.ap-south-1.amazonaws.com/assets/public/js/plugins.min.js"></script>
    <script type="text/javascript" src="https://aerainfra.com/stock/public/js/all.js?v=1727256874"></script>

    <script>

        function refreshPage(){
            setTimeout(() => {
                window.location.reload()
            }, 50);
        }

        function validateForm() {
            let isValid = true;

            // Clear previous error messages
            document.getElementById('category_name_error').textContent = '';
            document.getElementById('category_code_error').textContent = '';

            // Regex to allow only alphabets and spaces
            const alphabeticWithSpacesRegex = /^[A-Za-z\s]+$/;
            // Validate Category Name (required, only alphabets, and must be at least 5 characters)
            const categoryName = document.getElementById('category_name').value.trim();
            if (categoryName === "") {
                document.getElementById('category_name_error').textContent = "Category Name is required.";
                isValid = false;
            }
            //  else if (categoryName.length < 5) {
            //     document.getElementById('category_name_error').textContent = "Category Name must be at least 5 characters long.";
            //     isValid = false;

            // }
            else if (categoryName !== "" && (!alphabeticWithSpacesRegex.test(categoryName) || categoryName.length < 5)) {
                document.getElementById('category_name_error').textContent = "Category Name should contain only alphabets and be at least 5 characters long.";
                isValid = false;
            }

            // Validate Book/ISBN Code (only alphabets and spaces, and at least 5 characters)
            // const categoryCode = document.getElementById('category_code').value.trim();
            // if (categoryCode !== "" && !alphabeticWithSpacesRegex.test(categoryCode)) {
            //     document.getElementById('category_code_error').textContent = "Book/ISBN Code should contain only alphabets and spaces.";
            //     isValid = false;
            // } else if (categoryCode !== "" && categoryCode.length < 5) {
            //     document.getElementById('category_code_error').textContent = "Book/ISBN Code must be at least 5 characters long.";
            //     isValid = false;
            // }

            return isValid;
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function toggleDropdown(event) {
                event.preventDefault();
                document.querySelectorAll('.sidebar--item').forEach(item => {
                    item.classList.remove('active');
                });

                document.querySelectorAll('.dropdown').forEach(dropdown => {
                    dropdown.style.display = 'none';
                });

                const clickedItem = event.currentTarget.parentElement;
                const dropdown = clickedItem.querySelector('.dropdown');

                if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                    clickedItem.classList.add('active');
                    dropdown.style.display = 'block';
                } else {
                    clickedItem.classList.remove('active');
                    dropdown.style.display = 'none';
                }
            }
            const sidebarItems = document.querySelectorAll('.sidebar--item > a[role="button"]');
            sidebarItems.forEach(item => {
                item.addEventListener('click', toggleDropdown);
            });
        });

    </script>

    <!-- jQuery -->

    <!-- Bootstrap JS -->

    <!-- Tags Input JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

</body>

</html>