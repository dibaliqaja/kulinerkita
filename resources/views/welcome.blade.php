<x-templates.default>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Sales</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h1 mb-3">75%</div>
                            <div class="d-flex mb-2">
                                <div>Conversion rate</div>
                                <div class="ms-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        7%
                                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="3 17 9 11 13 15 21 7" />
                                            <polyline points="14 7 21 7 21 14" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-blue" style="width: 75%" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <span class="visually-hidden">75% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Revenue</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2">$4,300</div>
                                <div class="me-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        8%
                                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="3 17 9 11 13 15 21 7" />
                                            <polyline points="14 7 21 7 21 14" /></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="chart-revenue-bg" class="chart-sm"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">New clients</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">6,782</div>
                                <div class="me-auto">
                                    <span class="text-yellow d-inline-flex align-items-center lh-1">
                                        0%
                                        <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="5" y1="12" x2="19" y2="12" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div id="chart-new-clients" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader">Active users</div>
                                <div class="ms-auto lh-1">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">2,986</div>
                                <div class="me-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        4%
                                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="3 17 9 11 13 15 21 7" />
                                            <polyline points="14 7 21 7 21 14" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div id="chart-active-users" class="chart-sm"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Traffic summary</h3>
                                    <div id="chart-mentions" class="chart-lg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                                    <div class="progress progress-separated mb-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 44%">
                                        </div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 19%"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 9%"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto d-flex align-items-center pe-2">
                                            <span class="legend me-2 bg-primary"></span>
                                            <span>Regular</span>
                                            <span
                                                class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center px-2">
                                            <span class="legend me-2 bg-info"></span>
                                            <span>System</span>
                                            <span
                                                class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">415MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center px-2">
                                            <span class="legend me-2 bg-success"></span>
                                            <span>Shared</span>
                                            <span
                                                class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">201MB</span>
                                        </div>
                                        <div class="col-auto d-flex align-items-center ps-2">
                                            <span class="legend me-2"></span>
                                            <span>Free</span>
                                            <span
                                                class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body p-2 text-center">
                                    <div class="text-end text-green">
                                        <span class="text-green d-inline-flex align-items-center lh-1">
                                            6%
                                            <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="3 17 9 11 13 15 21 7" />
                                                <polyline points="14 7 21 7 21 14" /></svg>
                                        </span>
                                    </div>
                                    <div class="h1 m-0">43</div>
                                    <div class="text-muted mb-3">New Tickets</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body p-2 text-center">
                                    <div class="text-end text-red">
                                        <span class="text-red d-inline-flex align-items-center lh-1">
                                            -2%
                                            <!-- Download SVG icon from http://tabler-icons.io/i/trending-down -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="3 7 9 13 13 9 21 17" />
                                                <polyline points="21 10 21 17 14 17" /></svg>
                                        </span>
                                    </div>
                                    <div class="h1 m-0">95</div>
                                    <div class="text-muted mb-3">Daily Earnings</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body p-2 text-center">
                                    <div class="text-end text-green">
                                        <span class="text-green d-inline-flex align-items-center lh-1">
                                            9%
                                            <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="3 17 9 11 13 15 21 7" />
                                                <polyline points="14 7 21 7 21 14" /></svg>
                                        </span>
                                    </div>
                                    <div class="h1 m-0">7</div>
                                    <div class="text-muted mb-3">New Replies</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="card-title">Development activity</div>
                        </div>
                        <div class="position-relative">
                            <div class="position-absolute top-0 left-0 px-3 mt-1 w-75">
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <div class="chart-sparkline chart-sparkline-square" id="sparkline-activity">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>Today's Earning: $4,262.40</div>
                                        <div class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline text-green"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="3 17 9 11 13 15 21 7" />
                                                <polyline points="14 7 21 7 21 14" /></svg>
                                            +5% more than yesterday</div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-development-activity"></div>
                        </div>
                        <div class="card-table table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Commit</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="w-1">
                                            <span class="avatar avatar-sm"
                                                style="background-image: url(./static/avatars/000m.jpg)"></span>
                                        </td>
                                        <td class="td-truncate">
                                            <div class="text-truncate">
                                                Fix dart Sass compatibility (#29755)
                                            </div>
                                        </td>
                                        <td class="text-nowrap text-muted">28 Nov 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="w-1">
                                            <span class="avatar avatar-sm">JL</span>
                                        </td>
                                        <td class="td-truncate">
                                            <div class="text-truncate">
                                                Change deprecated html tags to text decoration classes (#29604)
                                            </div>
                                        </td>
                                        <td class="text-nowrap text-muted">27 Nov 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="w-1">
                                            <span class="avatar avatar-sm"
                                                style="background-image: url(./static/avatars/002m.jpg)"></span>
                                        </td>
                                        <td class="td-truncate">
                                            <div class="text-truncate">
                                                justify-content:between ⇒ justify-content:space-between (#29734)
                                            </div>
                                        </td>
                                        <td class="text-nowrap text-muted">26 Nov 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="w-1">
                                            <span class="avatar avatar-sm"
                                                style="background-image: url(./static/avatars/003m.jpg)"></span>
                                        </td>
                                        <td class="td-truncate">
                                            <div class="text-truncate">
                                                Update change-version.js (#29736)
                                            </div>
                                        </td>
                                        <td class="text-nowrap text-muted">26 Nov 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="w-1">
                                            <span class="avatar avatar-sm"
                                                style="background-image: url(./static/avatars/000f.jpg)"></span>
                                        </td>
                                        <td class="td-truncate">
                                            <div class="text-truncate">
                                                Regenerate package-lock.json (#29730)
                                            </div>
                                        </td>
                                        <td class="text-nowrap text-muted">25 Nov 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="w-1">
                                            <span class="avatar avatar-sm"
                                                style="background-image: url(./static/avatars/001f.jpg)"></span>
                                        </td>
                                        <td class="td-truncate">
                                            <div class="text-truncate">
                                                Some minor text tweaks
                                            </div>
                                        </td>
                                        <td class="text-nowrap text-muted">24 Nov 2019</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Invoices</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="8" size="3"
                                            aria-label="Invoices count">
                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-muted">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select all invoices"></th>
                                        <th class="w-1">No.
                                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-sm text-dark icon-thick" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="6 15 12 9 18 15" /></svg>
                                        </th>
                                        <th>Invoice Subject</th>
                                        <th>Client</th>
                                        <th>VAT No.</th>
                                        <th>Created</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001401</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a>
                                        </td>
                                        <td>
                                            <span class="flag flag-country-us"></span>
                                            Carlson Limited
                                        </td>
                                        <td>
                                            87956621
                                        </td>
                                        <td>
                                            15 Dec 2017
                                        </td>
                                        <td>
                                            <span class="badge bg-success me-1"></span> Paid
                                        </td>
                                        <td>$887</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001402</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a>
                                        </td>
                                        <td>
                                            <span class="flag flag-country-gb"></span>
                                            Adobe
                                        </td>
                                        <td>
                                            87956421
                                        </td>
                                        <td>
                                            12 Apr 2017
                                        </td>
                                        <td>
                                            <span class="badge bg-warning me-1"></span> Pending
                                        </td>
                                        <td>$1200</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001403</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a>
                                        </td>
                                        <td>
                                            <span class="flag flag-country-de"></span>
                                            Bluewolf
                                        </td>
                                        <td>
                                            87952621
                                        </td>
                                        <td>
                                            23 Oct 2017
                                        </td>
                                        <td>
                                            <span class="badge bg-warning me-1"></span> Pending
                                        </td>
                                        <td>$534</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001404</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a>
                                        </td>
                                        <td>
                                            <span class="flag flag-country-br"></span>
                                            Salesforce
                                        </td>
                                        <td>
                                            87953421
                                        </td>
                                        <td>
                                            2 Sep 2017
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                                        </td>
                                        <td>$1500</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001405</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing
                                                Templates</a></td>
                                        <td>
                                            <span class="flag flag-country-pl"></span>
                                            Printic
                                        </td>
                                        <td>
                                            87956621
                                        </td>
                                        <td>
                                            29 Jan 2018
                                        </td>
                                        <td>
                                            <span class="badge bg-danger me-1"></span> Paid Today
                                        </td>
                                        <td>$648</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001406</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales
                                                Presentation</a></td>
                                        <td>
                                            <span class="flag flag-country-br"></span>
                                            Tabdaq
                                        </td>
                                        <td>
                                            87956621
                                        </td>
                                        <td>
                                            4 Feb 2018
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                                        </td>
                                        <td>$300</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001407</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo & Print</a>
                                        </td>
                                        <td>
                                            <span class="flag flag-country-us"></span>
                                            Apple
                                        </td>
                                        <td>
                                            87956621
                                        </td>
                                        <td>
                                            22 Mar 2018
                                        </td>
                                        <td>
                                            <span class="badge bg-success me-1"></span> Paid Today
                                        </td>
                                        <td>$2500</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">001408</span></td>
                                        <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                                        <td>
                                            <span class="flag flag-country-pl"></span>
                                            Tookapic
                                        </td>
                                        <td>
                                            87956621
                                        </td>
                                        <td>
                                            13 May 2018
                                        </td>
                                        <td>
                                            <span class="badge bg-success me-1"></span> Paid Today
                                        </td>
                                        <td>$940</td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span>
                                entries</p>
                            <ul class="pagination m-0 ms-auto">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="15 6 9 12 15 18" /></svg>
                                        prev
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        next
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 6 15 12 9 18" /></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
                    chart: {
                        type: "area",
                        fontFamily: 'inherit',
                        height: 40.0,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: .16,
                        type: 'solid'
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                        name: "Profits",
                        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27,
                            93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                        ]
                    }],
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            padding: 4
                        },
                    },
                    labels: [
                        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                        '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                        '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                        '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                        '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                        '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                    ],
                    colors: ["#206bc4"],
                    legend: {
                        show: false,
                    },
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
                    chart: {
                        type: "line",
                        fontFamily: 'inherit',
                        height: 40.0,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    fill: {
                        opacity: 1,
                    },
                    stroke: {
                        width: [2, 1],
                        dashArray: [0, 3],
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                        name: "May",
                        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27,
                            93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67
                        ]
                    }, {
                        name: "April",
                        data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39,
                            35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37
                        ]
                    }],
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            padding: 4
                        },
                    },
                    labels: [
                        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                        '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                        '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                        '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                        '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                        '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                    ],
                    colors: ["#206bc4", "#a8aeb7"],
                    legend: {
                        show: false,
                    },
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
                    chart: {
                        type: "bar",
                        fontFamily: 'inherit',
                        height: 40.0,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '50%',
                        }
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: 1,
                    },
                    series: [{
                        name: "Profits",
                        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27,
                            93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67
                        ]
                    }],
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            padding: 4
                        },
                    },
                    labels: [
                        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                        '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                        '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                        '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                        '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                        '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                    ],
                    colors: ["#206bc4"],
                    legend: {
                        show: false,
                    },
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
                    chart: {
                        type: "bar",
                        fontFamily: 'inherit',
                        height: 240,
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false,
                        },
                        animations: {
                            enabled: false
                        },
                        stacked: true,
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '50%',
                        }
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: 1,
                    },
                    series: [{
                        name: "Web",
                        data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8,
                            24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6
                        ]
                    }, {
                        name: "Social",
                        data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2,
                            12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0
                        ]
                    }, {
                        name: "Other",
                        data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9,
                            1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6
                        ]
                    }],
                    grid: {
                        padding: {
                            top: -20,
                            right: 0,
                            left: -4,
                            bottom: -4
                        },
                        strokeDashArray: 4,
                        xaxis: {
                            lines: {
                                show: true
                            }
                        },
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            padding: 4
                        },
                    },
                    labels: [
                        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                        '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                        '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                        '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                        '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                        '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19',
                        '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24',
                        '2020-07-25', '2020-07-26'
                    ],
                    colors: ["#206bc4", "#79a6dc", "#bfe399"],
                    legend: {
                        show: false,
                    },
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
                    chart: {
                        type: "radialBar",
                        fontFamily: 'inherit',
                        height: 40,
                        width: 40,
                        animations: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                margin: 0,
                                size: '75%'
                            },
                            track: {
                                margin: 0
                            },
                            dataLabels: {
                                show: false
                            }
                        }
                    },
                    colors: ["#206bc4"],
                    series: [35],
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
                    chart: {
                        type: "area",
                        fontFamily: 'inherit',
                        height: 192,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: .16,
                        type: 'solid'
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                        name: "Purchases",
                        data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19,
                            15, 14, 25, 32, 40, 55, 60, 48, 52, 70
                        ]
                    }],
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            padding: 4
                        },
                    },
                    labels: [
                        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24',
                        '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29',
                        '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04',
                        '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09',
                        '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14',
                        '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
                    ],
                    colors: ["#206bc4"],
                    legend: {
                        show: false,
                    },
                    point: {
                        show: false
                    },
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
                    chart: {
                        type: "line",
                        fontFamily: 'inherit',
                        height: 24,
                        animations: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "#206bc4",
                        data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
                    }],
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
                    chart: {
                        type: "line",
                        fontFamily: 'inherit',
                        height: 24,
                        animations: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "#206bc4",
                        data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
                    }],
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
                    chart: {
                        type: "line",
                        fontFamily: 'inherit',
                        height: 24,
                        animations: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "#206bc4",
                        data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
                    }],
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
                    chart: {
                        type: "line",
                        fontFamily: 'inherit',
                        height: 24,
                        animations: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "#206bc4",
                        data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
                    }],
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
                    chart: {
                        type: "line",
                        fontFamily: 'inherit',
                        height: 24,
                        animations: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "#206bc4",
                        data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
                    }],
                })).render();
            });
            // @formatter:on
        </script>
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
                    chart: {
                        type: "line",
                        fontFamily: 'inherit',
                        height: 24,
                        animations: {
                            enabled: false
                        },
                        sparkline: {
                            enabled: true
                        },
                    },
                    tooltip: {
                        enabled: false,
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                    },
                    series: [{
                        color: "#206bc4",
                        data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
                    }],
                })).render();
            });
            // @formatter:on
        </script>
    @endpush
    
</x-templates>
