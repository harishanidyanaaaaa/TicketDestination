<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ url('') }}/template/assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Materio - Bootstrap Material Design Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('') }}/template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/fonts/materialdesignicons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('') }}/template/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ url('') }}/template/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('') }}/template/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('') }}/template/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('Layout.side')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

        @include('Layout.nav')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-1">Congratulations John! 🎉</h4>
                      <p class="pb-0">Best seller of the month</p>
                      <h4 class="text-primary mb-1">$42.8k</h4>
                      <p class="mb-2 pb-1">78% of target 🚀</p>
                      <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                    </div>
                    <img
                      src="{{ url('') }}/template/assets/img/icons/misc/triangle-light.png"
                      class="scaleX-n1-rtl position-absolute bottom-0 end-0"
                      width="166"
                      alt="triangle background"
                      data-app-light-img="icons/misc/triangle-light.png"
                      data-app-dark-img="icons/misc/triangle-dark.png" />
                    <img
                      src="{{ url('') }}/template/assets/img/illustrations/trophy.png"
                      class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2"
                      width="83"
                      alt="view sales" />
                  </div>
                </div>
                <!--/ Congratulations card -->

                <!-- Transactions -->
                <div class="col-lg-8">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Transactions</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this month</p>
                    </div>
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-primary rounded shadow">
                                <i class="mdi mdi-trending-up mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Sales</div>
                              <h5 class="mb-0">245k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-success rounded shadow">
                                <i class="mdi mdi-account-outline mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Customers</div>
                              <h5 class="mb-0">12.5k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-warning rounded shadow">
                                <i class="mdi mdi-cellphone-link mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Product</div>
                              <h5 class="mb-0">1.54k</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-6">
                          <div class="d-flex align-items-center">
                            <div class="avatar">
                              <div class="avatar-initial bg-info rounded shadow">
                                <i class="mdi mdi-currency-usd mdi-24px"></i>
                              </div>
                            </div>
                            <div class="ms-3">
                              <div class="small mb-1">Revenue</div>
                              <h5 class="mb-0">$88k</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->

              

               

                <!-- Four Cards -->
                <div class="col-xl-4 col-md-6">
                  <div class="row gy-4">
                    <!-- Total Profit line chart -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <h4 class="mb-0">$86.4k</h4>
                        </div>
                        <div class="card-body">
                          <div id="totalProfitLineChart" class="mb-3"></div>
                          <h6 class="text-center mb-0">Total Profit</h6>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Profit line chart -->
                    <!-- Total Profit Weekly Project -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial bg-secondary rounded-circle shadow">
                              <i class="mdi mdi-poll mdi-24px"></i>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="totalProfitID"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                              <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2">Total Profit</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2">$25.6k</h4>
                            <small class="text-success mt-1">+42%</small>
                          </div>
                          <small>Weekly Project</small>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Profit Weekly Project -->
                    <!-- New Yearly Project -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="avatar">
                            <div class="avatar-initial bg-primary rounded-circle shadow-sm">
                              <i class="mdi mdi-wallet-travel mdi-24px"></i>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="newProjectID"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="mdi mdi-dots-vertical mdi-24px"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                              <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body mt-mg-1">
                          <h6 class="mb-2">New Project</h6>
                          <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                            <h4 class="mb-0 me-2">862</h4>
                            <small class="text-danger mt-1">-18%</small>
                          </div>
                          <small>Yearly Project</small>
                        </div>
                      </div>
                    </div>
                    <!--/ New Yearly Project -->
                    <!-- Sessions chart -->
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <h4 class="mb-0">2,856</h4>
                        </div>
                        <div class="card-body">
                          <div id="sessionsColumnChart" class="mb-3"></div>
                          <h6 class="text-center mb-0">Sessions</h6>
                        </div>
                      </div>
                    </div>
                    <!--/ Sessions chart -->
                  </div>
                </div>
                <!--/ Total Earning -->

                <!-- Sales by Countries -->
                <div class="col-xl-4 col-md-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Sales by Countries</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="saleStatus"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                          <div class="avatar me-3">
                            <div class="avatar-initial bg-label-success rounded-circle">US</div>
                          </div>
                          <div>
                            <div class="d-flex align-items-center gap-1">
                              <h6 class="mb-0">$8,656k</h6>
                              <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                              <small class="text-success">25.8%</small>
                            </div>
                            <small>United states of america</small>
                          </div>
                        </div>
                        <div class="text-end">
                          <h6 class="mb-0">894k</h6>
                          <small>Sales</small>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                          <div class="avatar me-3">
                            <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
                          </div>
                          <div>
                            <div class="d-flex align-items-center gap-1">
                              <h6 class="mb-0">$2,415k</h6>
                              <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                              <small class="text-danger">6.2%</small>
                            </div>
                            <small>United Kingdom</small>
                          </div>
                        </div>
                        <div class="text-end">
                          <h6 class="mb-0">645k</h6>
                          <small>Sales</small>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                          <div class="avatar me-3">
                            <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
                          </div>
                          <div>
                            <div class="d-flex align-items-center gap-1">
                              <h6 class="mb-0">865k</h6>
                              <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                              <small class="text-success"> 12.4%</small>
                            </div>
                            <small>India</small>
                          </div>
                        </div>
                        <div class="text-end">
                          <h6 class="mb-0">148k</h6>
                          <small>Sales</small>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                          <div class="avatar me-3">
                            <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
                          </div>
                          <div>
                            <div class="d-flex align-items-center gap-1">
                              <h6 class="mb-0">$745k</h6>
                              <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                              <small class="text-danger">11.9%</small>
                            </div>
                            <small>Japan</small>
                          </div>
                        </div>
                        <div class="text-end">
                          <h6 class="mb-0">86k</h6>
                          <small>Sales</small>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="avatar me-3">
                            <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
                          </div>
                          <div>
                            <div class="d-flex align-items-center gap-1">
                              <h6 class="mb-0">$45k</h6>
                              <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                              <small class="text-success">16.2%</small>
                            </div>
                            <small>Korea</small>
                          </div>
                        </div>
                        <div class="text-end">
                          <h6 class="mb-0">42k</h6>
                          <small>Sales</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Sales by Countries -->

                <!-- Deposit / Withdraw -->
                <div class="col-xl-8">
                  <div class="card h-100">
                    <div class="card-body row g-2">
                      <div class="col-12 col-md-6 card-separator pe-0 pe-md-3">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                          <h5 class="m-0 me-2">Deposit</h5>
                          <a class="fw-medium" href="javascript:void(0);">View all</a>
                        </div>
                        <div class="pt-2">
                          <ul class="p-0 m-0">
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/payments/gumroad.png"
                                  class="img-fluid"
                                  alt="gumroad"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Gumroad Account</h6>
                                  <small>Sell UI Kit</small>
                                </div>
                                <h6 class="text-success mb-0">+$4,650</h6>
                              </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/payments/mastercard-2.png"
                                  class="img-fluid"
                                  alt="mastercard"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Mastercard</h6>
                                  <small>Wallet deposit</small>
                                </div>
                                <h6 class="text-success mb-0">+$92,705</h6>
                              </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/payments/stripes.png"
                                  class="img-fluid"
                                  alt="stripes"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Stripe Account</h6>
                                  <small>iOS Application</small>
                                </div>
                                <h6 class="text-success mb-0">+$957</h6>
                              </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/payments/american-bank.png"
                                  class="img-fluid"
                                  alt="american"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">American Bank</h6>
                                  <small>Bank Transfer</small>
                                </div>
                                <h6 class="text-success mb-0">+$6,837</h6>
                              </div>
                            </li>
                            <li class="d-flex align-items-center">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/payments/citi.png"
                                  class="img-fluid"
                                  alt="citi"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Bank Account</h6>
                                  <small>Wallet deposit</small>
                                </div>
                                <h6 class="text-success mb-0">+$446</h6>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 ps-0 ps-md-3 mt-3 mt-md-2">
                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                          <h5 class="m-0 me-2">Withdraw</h5>
                          <a class="fw-medium" href="javascript:void(0);">View all</a>
                        </div>
                        <div class="pt-2">
                          <ul class="p-0 m-0">
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/brands/google.png"
                                  class="img-fluid"
                                  alt="google"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Google Adsense</h6>
                                  <small>Paypal deposit</small>
                                </div>
                                <h6 class="text-danger mb-0">-$145</h6>
                              </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/brands/github.png"
                                  class="img-fluid"
                                  alt="github"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Github Enterprise</h6>
                                  <small>Security &amp; compliance</small>
                                </div>
                                <h6 class="text-danger mb-0">-$1870</h6>
                              </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/brands/slack.png"
                                  class="img-fluid"
                                  alt="slack"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Upgrade Slack Plan</h6>
                                  <small>Debit card deposit</small>
                                </div>
                                <h6 class="text-danger mb-0">$450</h6>
                              </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center pb-2">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/payments/digital-ocean.png"
                                  class="img-fluid"
                                  alt="digital"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Digital Ocean</h6>
                                  <small>Cloud Hosting</small>
                                </div>
                                <h6 class="text-danger mb-0">-$540</h6>
                              </div>
                            </li>
                            <li class="d-flex align-items-center">
                              <div class="flex-shrink-0 me-3">
                                <img
                                  src="{{ url('') }}/template/assets/img/icons/brands/aws.png"
                                  class="img-fluid"
                                  alt="aws"
                                  height="30"
                                  width="30" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">AWS Account</h6>
                                  <small>Choosing a Cloud Platform</small>
                                </div>
                                <h6 class="text-danger mb-0">-$21</h6>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Deposit / Withdraw -->

                <!-- Data Tables -->
                <div class="col-12">
                  <div class="card">
                    <div class="table-responsive">
                    <a href="" type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#modalId">tambah data</a>
                <!-- Modal -->
                <div
                    class="modal fade"
                    id="modalId"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="modalTitleId"
                    aria-hidden="true"
                >
                  <form action="{{ route('User-Store') }}" role="form" method="post">
                        @csrf
                        <div
                        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">
                                   Tambah Data
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                  
                                    <input type="text" class="form-control" id="inputData" placeholder="Nama Anda" name="name">
                                </div>
                                 <div class="form-group mb-3">
                                  
                                    <input type="email" class="form-control" id="inputData" placeholder="Emal Anda" name="email">
                                </div>
                                 <div class="form-group mb-3">
                                  
                                    <input type="password" class="form-control" id="inputData" placeholder="Password Anda" name="password">
                                </div>
                                 
                                 
                                 <div class="form-group mb-3"> 
                                  
                               <select class="form-control selectpicker" name="role" id="inputData" placeholder="role">
                                    <option value="Owner">Owner</option>
                                    <option value="Admin Stok">Admin Stok</option>

                </select>

                                </div>
               
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="submit"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                
                <script>
                    var modalId = document.getElementById('modalId');
                
                    modalId.addEventListener('show.bs.modal', function (event) {
                          // Button that triggered the modal
                          let button = event.relatedTarget;
                          // Extract info from data-bs-* attributes
                          let recipient = button.getAttribute('data-bs-whatever');
                
                        // Use above variables to manipulate the DOM
                    });
                </script>
                        <div class="d-flex ">
                            <i data-feather="download"></i>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                      <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php ($counter = 1) @foreach ($user as $u)
                                
                                <tr>
                                    <td>{{ $counter }}</td> 
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->password }}</td>
                                    <td>{{ $u->role }}</td>
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$u->id}}">Edit</button> <div class="modal fade" id="editModal{{$u->id}}" tabindex="-1" aria-labelledby="editModal{{$u->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal{{$u->id}}Label">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for editing data -->
                    <form action="{{ url('User-Update/'.$u->id) }}" method="POST">
    @csrf
    @method('PUT')
                        <div class="mb-3">
                       
                            <input type="text" class="form-control" id="editUser{{$u->name}}" name="name" value="{{$u->name}}" >
                        </div>
                        <div class="mb-3">
                  
                            <input type="email" class="form-control" id="editEmail{{$u->email}}" name="email" value="{{$u->email}}" >
                        </div>
                      
                        <div class="mb-3">
                           
                            <input type="password" class="form-control" id="editPassword{{$u->password}}" name="password" value="{{$u->password}}" >
                        </div>

                        <div class="mb-3">
                            <select class="form-control selectpicker" name="role" id="inputData" placeholder="role">
                                    <option value="Owner">Owner</option>
                                    <option value="Staff Admin">Staff Admin</option>
                             </select>
                            </div>
                            
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                       <a href="{{ route('User-Delete', $u->id) }}"class="btn btn-danger delete-btn"
       onclick="event.preventDefault();
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    document.getElementById('delete-form-{{$u->id}}').submit();
                }">
        Hapus
    </a>

    <form id="delete-form-{{$u->id}}" action="{{ route('User-Delete', $u->id) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
                                    </td>
                                </tr>
                               
                              @php ($counter++) @endforeach
                                </tbody>
                            </table>
                    </div>
                  </div>
                </div>
                <!--/ Data Tables -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
           @include('Layout.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('') }}/template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ url('') }}/template/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('') }}/template/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ url('') }}/template/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ url('') }}/template/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
