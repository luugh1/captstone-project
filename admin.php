<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/css/admin.css" />

  <!-- ChartJs -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <div class="container-fluid d-flex">
    <!-- SideNav Start -->
    <aside class="sidebar sidebar-min d-flex flex-column">
      <h3 class="logo text-center shadow-sm p-3">
        <a class="logo-link" href="./"> BRAND<span>it</span></a>
       </h3>
      <ul class="sidebar-nav d-flex flex-column gap-2">
        <li class="sidebar-nav-item p-2 active">

          <a class="sidebar-nav-link-text" aria-current="page" href="#quick-stats">
            <span><i class="fa-solid fa-gauge"></i></span>
            <span>Quick Stats</span>
          </a>
        </li>
        <li class="sidebar-nav-item p-2">
          <a class="sidebar-nav-link-text" aria-current="page" href="#charts">
            <span><i class="sidebar-nav-item fa-solid fa-dollar-sign"></i></span>
            <span>Charts</span>
          </a>
        </li>
        <li class="sidebar-nav-item p-2">
          <a class="sidebar-nav-link-text" aria-current="page" href="#revenue">
            <span><i class="fa-solid fa-ticket"></i></span>
            <span>Revenue</span>
          </a>
        </li>
        <li class="sidebar-nav-item p-2">
          <a class="sidebar-nav-link-text" aria-current="page" href="#messages">
            <span><i class="fa-solid fa-envelope"></i></span>
            <span>Messages</span>
          </a>
        </li>
        <li class="sidebar-nav-item nav-item p-2">
          <a class="sidebar-nav-link-text nav-link active" aria-current="page" href="#compose-a-message">
            <span><i class="fa-solid fa-comments"></i></span>
            <span>Compose a
              message</span>
          </a>
        </li>
        <li class="sidebar-nav-item p-2">
          <a class="sidebar-nav-link-text" aria-current="page" href="#conversion-rate">
            <span><i class="fa-solid fa-chart-pie"></i></span>
            <span>Conversion rate</span>
          </a>
        </li>
        <li class="sidebar-nav-item p-2">
          <span><i class="fa-solid fa-headset"></i></span>
          <span><a class="sidebar-nav-link-text" aria-current="page" href="#support-tickets">Support Tickets</a>
        </li></span>
      </ul>
    </aside>
    <!-- / SideNav End -->
    <div class="container-fluid p-0">
      <header class="main-header d-flex justify-content-between align-items-center shadow-sm ps-1 mb-3">
        <div class="d-flex align-items-center gap-5">
          <div class="dropdown">
            <button class="notification-btn position-relative" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-envelope"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </div>

          <div class="dropdown">
            <button class="notification-btn position-relative" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-bell fa-shake"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="d-flex">
          <div class="profile-picture" style="
                background-image: url(./assets/images/avater/jake-nackos-IF9TK5Uy-KI-unsplash.jpg);
              "></div>

          <button class="btn dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span>Thomas Castle</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>

          <ul class="dropdown-menu">
            <li class="dropdown-item">
              <button class="btn btn-sm">
                <span class="me-1"><i class="fa-solid fa-cog"></i></span><span>Settings</span>
              </button>
            </li>
            <li class="dropdown-item">
              <button class="btn">
                <span class="me-1"><i class="fa-solid fa-right-from-bracket"></i></span><span>Logout</span>
              </button>
            </li>
          </ul>
        </div>
      </header>

      <main class="main-content container">
        <!-- Label Widgets start -->
        <section class="row" id="quick-stats">
          <div class="col-md-3 col-sm-6">
            <div class="card label-widget label-widget-growth d-flex justify-content-center align-items-center">
              <div class="card-body w-100">
                <p class="d-flex flex-column">
                  <span class="text-center"><i class="fa-solid fa-arrow-up-right-dots fa-3x"></i></span>
                  <span class="label-name">GROWTH</span>
                </p>
                <h3 class="label-value text-center">
                  <span>75%</span><span class="label-value-change-indicator label-value-change-indicator-up"><i
                      class="fa-solid fa-up-long"></i></span>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="card label-widget d-flex justify-content-center align-items-center">
              <div class="card-body w-100">
                <p class="d-flex flex-column">
                  <span class="text-center text-color-secondary"><i
                      class="fa-solid fa-users-between-lines fa-3x"></i></span>
                  <span class="label-name bg-color-secondary">MONTHLY VISITORS</span>
                </p>
                <h3 class="label-value text-center">
                  <span>3500</span><span class="label-value-change-indicator label-value-change-indicator-up"><i
                      class="fa-solid fa-up-long"></i></span>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="card label-widget d-flex justify-content-center align-items-center">
              <div class="card-body w-100">
                <p class="d-flex flex-column">
                  <span class="text-center"><i class="fa-solid fa-dollar-sign fa-3x"></i></span>
                  <span class="label-name">PROFIT</span>
                </p>
                <h3 class="label-value text-center">
                  <span>4%</span><span class="label-value-change-indicator label-value-change-indicator-up"><i
                      class="fa-solid fa-up-long"></i></span>
                </h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="card label-widget d-flex justify-content-center align-items-center">
              <div class="card-body w-100">
                <p class="d-flex flex-column">
                  <span class="text-center text-color-primary"><i class="fa-solid fa-user-plus fa-3x"></i></span>
                  <span class="label-name bg-color-primary">NEW USERS</span>
                </p>
                <h3 class="label-value text-center">
                  <span>1%</span><span class="label-value-change-indicator label-value-change-indicator-down"><i
                      class="fa-solid fa-down-long"></i></span>
                </h3>
              </div>
            </div>
          </div>
        </section>
        <!--/ Label Widgets end -->

        <!-- charts start -->

        <section id="charts" class="row mt-5">
          <div class="col-md-4">
            <div class="line-chart-widget card p-3">
              <div class="card-body">
                <h6 class="card-title">TODAY'S STATS</h6>
                <div class="">
                  <p>Duis aute irure dolor in reprehenderit.</p>
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>List icons can
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>be used to
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>replace bullets
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>in lists
                    </li>
                  </ul>
                </div>

                <div class="canvas-wrapper">
                  <canvas id="line1"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="line-chart-widget card p-3">
              <div class="card-body">
                <h6 class="card-title">TODAY'S STATS</h6>
                <div class="">
                  <p>Duis aute irure dolor in reprehenderit.</p>
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>List icons can
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>be used to
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-spinner fa-pulse"></i></span>In progress
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-heart fa-beat"></i></span>Love our product
                    </li>
                  </ul>
                </div>

                <div class="canvas-wrapper">
                  <canvas id="line2"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="line-chart-widget card p-3">
              <div class="card-body">
                <h6 class="card-title">TODAY'S STATS</h6>
                <div class="">
                  <p>Duis aute irure dolor in reprehenderit.</p>
                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>List icons can
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-check-square"></i></span>be used to
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-spinner fa-pulse"></i></span>replace bullets
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-regular fa-square"></i></span>in lists
                    </li>
                  </ul>
                </div>

                <div class="canvas-wrapper">
                  <canvas id="line3"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /charts end -->

        <!-- Revenue and conversion rate starts here -->

        <section class="row mt-5">
          <div class="col-md-6" id="revenue">
            <div class="line-chart-widget card p-3">
              <div class="card-body">
                <h6 class="card-title">Revenue Report 2024</h6>
                <div class="">
                  <p>Duis aute irure dolor in reprehenderit.</p>

                  <ul class="fa-ul">
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-dollar-sign"></i></span>Earning: $400 USD
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-money-bill"></i></span>Items Sold: 20 Items
                    </li>
                    <li>
                      <span class="fa-li"><i class="fa-solid fa-sack-dollar"></i></span>Last Hour Sales: $34 USD
                    </li>
                  </ul>
                </div>
                <div class="canvas-wrapper">
                  <canvas id="revenue-bar"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6" id="conversion-rate">
            <div class="line-chart-widget card p-3">
              <div class="card-body">
                <h6 class="card-title">Visitor Conversion Rate</h6>
                <div class="">
                  <p>Duis aute irure dolor in reprehenderit.</p>
                  <ul>
                    <li>Earning: $400 USD</li>
                    <li>Items Sold: 20 Items</li>
                    <li>Last Hour Sales: $34 USD</li>
                  </ul>
                </div>
              </div>
              <div class="canvas-wrapper">
                <canvas id="conversion-rate-chart"></canvas>
              </div>
            </div>
          </div>
        </section>

        <!-- Inbox starts here -->

        <section class="row mt-5 mb-5">
          <div class="col-md-8" id="messages">
            <div class="mailbox-content card">
              <div class="card-body">
                <h6 class="card-title">Messages</h6>
                <div class=" d-flex">
                  <div class="sms-dropdown dropdown d-flex">
                    <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-folder"></i>
                      <span>Action</span>
                    </button>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                    </ul>
                  </div>

                  <div class="sms-dropdown dropdown">
                    <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-folder"></i>
                    </button>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li>
                        <a class="dropdown-item" href="#">Another action</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr />
                <table class="table table-fhr">
                  <tbody>
                    <tr class="unread checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa-regular fa-star"></i>
                      </td>
                      <td class="hidden-xs">Google</td>
                      <td>
                        Nullam quis risus eget urna mollis ornare vel eu leo
                      </td>
                      <td></td>
                      <td>12 march</td>
                    </tr>
                    <tr class="unread checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star icon-state-warning"></i>
                      </td>
                      <td class="hidden-xs">Dropbox</td>
                      <td>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit
                      </td>
                      <td></td>
                      <td>02 march</td>
                    </tr>
                    <tr class="unread checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star icon-state-warning"></i>
                      </td>
                      <td class="hidden-xs">Adobe</td>
                      <td>
                        Nullam quis risus eget urna mollis ornare vel eu leo
                      </td>
                      <td>
                        <i class="fa fa-paperclip"></i>
                      </td>
                      <td>8 march</td>
                    </tr>
                    <tr class="unread checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star icon-state-warning"></i>
                      </td>
                      <td class="hidden-xs">Apple</td>
                      <td>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit
                      </td>
                      <td>
                        <i class="fa fa-paperclip"></i>
                      </td>
                      <td>4 march</td>
                    </tr>
                    <tr class="read checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa-regular fa-star"></i>
                      </td>
                      <td class="hidden-xs">Microsoft</td>
                      <td>
                        Nullam quis risus eget urna mollis ornare vel eu leo
                      </td>
                      <td>
                        <i class="fa fa-paperclip"></i>
                      </td>
                      <td>1 march</td>
                    </tr>
                    <tr class="read checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star"></i>
                      </td>
                      <td class="hidden-xs">Microsoft</td>
                      <td>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit
                      </td>
                      <td>
                        <i class="fa fa-paperclip"></i>
                      </td>
                      <td>15 march</td>
                    </tr>
                    <tr class="read checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star"></i>
                      </td>
                      <td class="hidden-xs">Microsoft</td>
                      <td>
                        Nullam quis risus eget urna mollis ornare vel eu leo
                      </td>
                      <td></td>
                      <td>16 march</td>
                    </tr>
                    <tr class="read checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star"></i>
                      </td>
                      <td class="hidden-xs">Microsoft</td>
                      <td>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit
                      </td>
                      <td>
                        <i class="fa fa-paperclip"></i>
                      </td>
                      <td>9 march</td>
                    </tr>
                    <tr class="read checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star icon-state-warning"></i>
                      </td>
                      <td class="hidden-xs">Microsoft</td>
                      <td>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit
                      </td>
                      <td>
                        <i class="fa fa-paperclip"></i>
                      </td>
                      <td>16 march</td>
                    </tr>
                    <tr class="read checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star icon-state-warning"></i>
                      </td>
                      <td class="hidden-xs">Dropbox</td>
                      <td>
                        Nullam quis risus eget urna mollis ornare vel eu leo
                      </td>
                      <td></td>
                      <td>10 march</td>
                    </tr>
                    <tr class="read checked">
                      <td class="hidden-xs">
                        <input type="checkbox" class="checkbox" />
                      </td>
                      <td class="hidden-xs">
                        <i class="fa fa-star"></i>
                      </td>
                      <td class="hidden-xs">Dropbox</td>
                      <td>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit
                      </td>
                      <td>
                        <i class="fa fa-paperclip"></i>
                      </td>
                      <td>14 march</td>
                    </tr>
                  </tbody>
                </table>
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-4" id="compose-a-message">
            <div class="Compose-Message card">
              <div class="card-body">
                <h6 class="card-title">Compose New Message</h6>
                <div class="">
                  <div class="alert alert-info">
                    Please fill details to send a new message
                  </div>
                  <form class="d-flex flex-column">
                    <hr />
                    <label class="form-label">Enter Recipient Name : </label>
                    <input type="text" class="form-control control3" />
                    <label class="form-label">Enter Subject : </label>
                    <input type="text" class="form-control control3" />
                    <label class="form-label">Enter Message : </label>
                    <textarea rows="6" class="form-control control2"></textarea>
                    <hr />
                    <button class="btn btn-primary btn-sm" style="width: 80px" type="button">
                      Send
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="row mb-5" id="support-tickets">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tickets</h5>
                <table class="table table-fhr">
                  <thead>
                    <tr>
                      <th>Customer</th>
                      <th>Status</th>
                      <th>Service</th>
                      <th>Description</th>
                      <th>Criticality</th>
                      <th>Date Logged</th>
                      <th class="text-center">
                        <span><i class="fa-solid fa-ellipsis"></i></span>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class="hidden-xs">John</td>
                      <td class="hidden-xs">Pending</td>
                      <td class="hidden-xs">Branding</td>
                      <td>
                        Nullam quis risus eget urna mollis ornare vel eu leo
                      </td>
                      <td>
                        <span><i class="fa-solid fa-triangle-exclamation"></i></span>High
                      </td>
                      <td>12 march</td>
                      <td class="text-center">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#ticketsModal" data-bs-data="userId">
                          <i class="fa-solid fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>

  <footer class="text-center d-flex align-items-center justify-content-center">
    <p>Copyright © 2015.BranDit All rights reserved.</p>
  </footer>

  <!-- Dialogs Start -->
  <!-- Tickets Dialog -->
  <div class="modal fade" id="ticketsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ticket #45664jy5</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container ">
            <h2 class="mb-4">Support Ticket</h2>
            <table class="table table-striped table-bordered">
              <thead class="table-dark">
                <tr>
                  <th scope="col">Field</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ticket ID</td>
                  <td>#12345</td>
                </tr>
                <tr>
                  <td>Date & Time of Submission</td>
                  <td>2024-10-21 10:45 AM</td>
                </tr>
                <tr>
                  <td>User Name</td>
                  <td>John Doe</td>
                </tr>
                <tr>
                  <td>User Contact Info</td>
                  <td>john.doe@example.com</td>
                </tr>
                <tr>
                  <td>Service Type</td>
                  <td>Website Creation</td>
                </tr>
                <tr>
                  <td>Order ID</td>
                  <td>#7890</td>
                </tr>
                <tr>
                  <td>Priority Level</td>
                  <td>High</td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>Open</td>
                </tr>
                <tr>
                  <td>Issue Title</td>
                  <td>Website Design Delayed</td>
                </tr>
                <tr>
                  <td>Issue Description</td>
                  <td>"I was expecting the website design by the 20th, but haven't received any update."</td>
                </tr>
                <tr>
                  <td>Impact</td>
                  <td>Delay in service</td>
                </tr>
                <tr>
                  <td>Browser/Device</td>
                  <td>Chrome, Desktop</td>
                </tr>
                <tr>
                  <td>Support Agent Assigned</td>
                  <td>Agent #56</td>
                </tr>
                <tr>
                  <td>Support Notes</td>
                  <td>"Followed up with design team for update."</td>
                </tr>
                <tr>
                  <td>Action Taken</td>
                  <td>Contacted team</td>
                </tr>
                <tr>
                  <td>Expected Resolution Time</td>
                  <td>24 hours</td>
                </tr>
                <tr>
                  <td>Attachments</td>
                  <td>N/A</td>
                </tr>
                <tr>
                  <td>Resolution Notes</td>
                  <td>"Website design sent via email."</td>
                </tr>
                <tr>
                  <td>Closure Date</td>
                  <td>2024-10-22 3:00 PM</td>
                </tr>
                <tr>
                  <td>User Satisfaction Feedback</td>
                  <td>5 stars</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    const ctx3 = document.getElementById("line3");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Mon"],
        datasets: [
          {
            label: "Todays Data",
            fillColor: "#fff",
            strokeColor: "#F44336",
            pointColor: "#fbfbfb",
            pointStrokeColor: "#F44336",
            data: [20, 35, 45, 30, 10, 65, 40],
          },
        ],
      },
    });
  </script>

  <script>
    const ctx1 = document.getElementById("line1");

    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Mon"],
        datasets: [
          {
            label: "Todays Data",
            fillColor: "#fff",
            strokeColor: "#F44336",
            pointColor: "#fbfbfb",
            pointStrokeColor: "#F44336",
            data: [20, 35, 45, 30, 10, 65, 40],
          },
        ],
      },
    });
  </script>

  <script>
    const ctx2 = document.getElementById("line2");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Mon"],
        datasets: [
          {
            label: "Todays Data",
            fillColor: "#fff",
            strokeColor: "#F44336",
            pointColor: "#fbfbfb",
            pointStrokeColor: "#F44336",
            data: [20, 35, 45, 30, 10, 65, 40],
          },
        ],
      },
    });
  </script>

  <script>
    const revenueCtx = document.getElementById("revenue-bar");

    new Chart(revenueCtx, {
      type: "bar",
      data: {
        labels: ["Jan", "Feb", "Mar", "April", "May", "Jun", "Jul"],
        datasets: [
          {
            label: "The Years Revenue",
            fillColor: "#fff",
            strokeColor: "#F44336",
            pointColor: "#fbfbfb",
            pointStrokeColor: "#F44336",
            data: [20, 35, 45, 30, 10, 65, 40],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 159, 64, 0.2)",
              "rgba(255, 205, 86, 0.2)",
              "rgba(75, 192, 192, 0.2)",
              "rgba(54, 162, 235, 0.2)",
              "rgba(153, 102, 255, 0.2)",
              "rgba(201, 203, 207, 0.2)",
            ],
            borderColor: [
              "rgb(255, 99, 132)",
              "rgb(255, 159, 64)",
              "rgb(255, 205, 86)",
              "rgb(75, 192, 192)",
              "rgb(54, 162, 235)",
              "rgb(153, 102, 255)",
              "rgb(201, 203, 207)",
            ],
            borderWidth: 1,
          },
        ],
      },

      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  </script>

  <script>
    const conversionRateCtx = document.getElementById("conversion-rate-chart");

    new Chart(conversionRateCtx, {
      type: "doughnut",
      data: {
        labels: ["Converted", "Unconverted"],
        datasets: [
          {
            label: "Conversion Rate",
            fillColor: "#fff",
            strokeColor: "#F44336",
            pointColor: "#fbfbfb",
            pointStrokeColor: "#F44336",
            data: [73, 27],
            backgroundColor: [
              "rgba(255, 99, 132, 0.2)",
              "rgba(255, 159, 64, 0.2)",
            ],
            borderColor: [
              "rgb(255, 99, 132)",
              "rgb(255, 159, 64)",
              "rgb(255, 205, 86)",
              "rgb(75, 192, 192)",
              "rgb(54, 162, 235)",
              "rgb(153, 102, 255)",
              "rgb(201, 203, 207)",
            ],
            borderWidth: 1,
          },
        ],
      },

      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
      },
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script src="./assets/js/admin.js"></script>
</body>

</html>