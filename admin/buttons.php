<?php
require('header.php');
?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="./assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Buttons</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Components</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-8 card-wrapper ct-example">
          <!-- Styles -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Styles</h3>
            </div>
            <div class="card-body">
              <button class="btn btn-primary" type="button">Button</button>
              <button class="btn btn-icon btn-primary" type="button">
                <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                <span class="btn-inner--text">With icon</span>
              </button>
              <button class="btn btn-icon btn-primary" type="button">
                <span class="btn-inner--icon"><i class="ni ni-atom"></i></span>
              </button>
            </div>
          </div>
          <!-- Colors -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Colors</h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-default">Default</button>
              <button type="button" class="btn btn-primary">Primary</button>
              <button type="button" class="btn btn-secondary">Secondary</button>
              <button type="button" class="btn btn-info">Info</button>
              <button type="button" class="btn btn-success">Success</button>
              <button type="button" class="btn btn-danger">Danger</button>
              <button type="button" class="btn btn-warning">Warning</button>
            </div>
          </div>
          <!-- Outline -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Outline</h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-outline-default">Default</button>
              <button type="button" class="btn btn-outline-primary">Primary</button>
              <button type="button" class="btn btn-outline-secondary">Secondary</button>
              <button type="button" class="btn btn-outline-info">Info</button>
              <button type="button" class="btn btn-outline-success">Success</button>
              <button type="button" class="btn btn-outline-danger">Danger</button>
              <button type="button" class="btn btn-outline-warning">Warning</button>
            </div>
          </div>
          <!-- Sizes -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Sizes</h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-primary btn-lg">Large button</button>
              <button type="button" class="btn btn-secondary btn-lg">Large button</button>
              <hr />
              <button type="button" class="btn btn-primary btn-sm">Small button</button>
              <button type="button" class="btn btn-secondary btn-sm">Small button</button>
              <hr />
              <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
            </div>
          </div>
          <!-- Group -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Group</h3>
            </div>
            <div class="card-body">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary active">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
              <hr />
              <div class="btn-group">
                <button type="button" class="btn btn-info active">1</button>
                <button type="button" class="btn btn-info">2</button>
                <button type="button" class="btn btn-info">3</button>
                <button type="button" class="btn btn-info">4</button>
              </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default">5</button>
                <button type="button" class="btn btn-default">6</button>
                <button type="button" class="btn btn-default">7</button>
              </div>
            </div>
          </div>
          <!-- Social -->
          <div class="card">
            <div class="card-header">
              <h3 class="mb-0">Social</h3>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-facebook btn-icon my-2">
                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                <span class="btn-inner--text">Facebook</span>
              </button>
              <button type="button" class="btn btn-twitter btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                <span class="btn-inner--text">Twitter</span>
              </button>
              <button type="button" class="btn btn-google-plus btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-google-plus-g"></i></span>
                <span class="btn-inner--text">Google +</span>
              </button>
              <button type="button" class="btn btn-instagram btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
                <span class="btn-inner--text">Instagram</span>
              </button>
              <button type="button" class="btn btn-pinterest btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-pinterest"></i></span>
                <span class="btn-inner--text">Pinterest</span>
              </button>
              <button type="button" class="btn btn-youtube btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-youtube"></i></span>
                <span class="btn-inner--text">Youtube</span>
              </button>
              <button type="button" class="btn btn-vimeo btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-vimeo-v"></i></span>
                <span class="btn-inner--text">Vimeo</span>
              </button>
              <button type="button" class="btn btn-slack btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-slack"></i></span>
                <span class="btn-inner--text">Slack</span>
              </button>
              <button type="button" class="btn btn-dribbble btn-icon">
                <span class="btn-inner--icon"><i class="fab fa-dribbble"></i></span>
                <span class="btn-inner--text">Dribbble</span>
              </button>
              <hr />
              <button type="button" class="btn btn-facebook btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
              </button>
              <button type="button" class="btn btn-twitter btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
              </button>
              <button type="button" class="btn btn-google-plus btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-google-plus-g"></i></span>
              </button>
              <button type="button" class="btn btn-instagram btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
              </button>
              <button type="button" class="btn btn-pinterest btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-pinterest"></i></span>
              </button>
              <button type="button" class="btn btn-youtube btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-youtube"></i></span>
              </button>
              <button type="button" class="btn btn-vimeo btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-vimeo-v"></i></span>
              </button>
              <button type="button" class="btn btn-slack btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-slack"></i></span>
              </button>
              <button type="button" class="btn btn-dribbble btn-icon-only">
                <span class="btn-inner--icon"><i class="fab fa-dribbble"></i></span>
              </button>
              <hr />
              <button type="button" class="btn btn-facebook btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
              </button>
              <button type="button" class="btn btn-twitter btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
              </button>
              <button type="button" class="btn btn-google-plus btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-google-plus-g"></i></span>
              </button>
              <button type="button" class="btn btn-instagram btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
              </button>
              <button type="button" class="btn btn-pinterest btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-pinterest"></i></span>
              </button>
              <button type="button" class="btn btn-youtube btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-youtube"></i></span>
              </button>
              <button type="button" class="btn btn-vimeo btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-vimeo-v"></i></span>
              </button>
              <button type="button" class="btn btn-slack btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-slack"></i></span>
              </button>
              <button type="button" class="btn btn-dribbble btn-icon-only rounded-circle">
                <span class="btn-inner--icon"><i class="fab fa-dribbble"></i></span>
              </button>
            </div>
          </div>
        </div>
      </div>
<?php 
$pscript=[
  './assets/vendor/chart.js/dist/Chart.min.js',
  './assets/vendor/chart.js/dist/Chart.extension.js',
  './assets/vendor/jvectormap-next/jquery-jvectormap.min.js',
  './assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js'
];
require('footer.php');