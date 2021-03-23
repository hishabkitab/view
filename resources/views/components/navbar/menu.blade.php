<ul class="nav navbar-menu">
    <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link">
            <i data-feather="home"></i>
            Home</a>
    </li>
    <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="layers"></i> Apps</a>
        <div class="navbar-menu-sub">
            <div class="d-lg-flex">
                <ul>
                    <li class="nav-label">Finance</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.finance.accounting') }}">Accounting</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.finance.invoicing') }}">Invoicing</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.finance.expenses') }}">Expenses</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.finance.spreadsheet') }}">Spreadsheet (BI)</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.finance.documents') }}">Documents</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.finance.sign') }}">Sign</a></li>
                    <li class="nav-label mg-t-20">Sales</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.sales.crm') }}">CRM</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.sales.sales') }}">Sales</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.sales.point-of-sale-shop') }}">Point of Sale</a>
                    </li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.sales.subscriptions') }}">Subscriptions</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.sales.rental') }}">Rental</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.sales.amazon-connector') }}">Amazon Connector</a>
                    </li>
                </ul>
                <ul>
                    <li class="nav-label">Websites</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.websites.website') }}">Website</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.websites.ecommerce') }}">eCommerce</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.websites.blog') }}">Blogs</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.websites.forums') }}">Forums</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.websites.live-chat') }}">Live Chat</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.websites.elearning') }}">eLearning</a></li>
                    <li class="nav-label mg-t-20">Inventory &amp; MRP</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.inventory&mrp.inventory') }}">Inventory</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.inventory&mrp.manufacturing') }}">Manufacturing</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.inventory&mrp.plm') }}">PLM</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.inventory&mrp.purchase') }}">Purchase</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.inventory&mrp.maintenance') }}">Maintenance</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.inventory&mrp.quality') }}">Quality</a></li>
                </ul>
                <ul>
                    <li class="nav-label">Human Resources</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.human-resources.employees') }}">Employees</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.human-resources.recruitment') }}">Recruitment</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.human-resources.time-off') }}">Time Off</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.human-resources.appraisals') }}">Appraisals</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.human-resources.referrals') }}">Referrals</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.human-resources.fleet') }}">Fleet</a></li>
                    <li class="nav-label mg-t-20">Marketing</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.marketing.social-marketing') }}">Social Marketing</a>
                    </li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.marketing.email-marketing') }}">Email Marketing</a>
                    </li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.marketing.sms-marketing') }}">SMS Marketing</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.marketing.events') }}">Events</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.marketing.marketing-automation') }}">Marketing
                            Automation</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.marketing.surveys') }}">Surveys</a></li>
                </ul>
                <ul>
                    <li class="nav-label">Services</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.services.project') }}">Project</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.services.timesheet') }}">Timesheet</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.services.field-service') }}">Field Service</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.services.helpdesk') }}">Helpdesk</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.services.planning') }}">Planning</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.services.appointments') }}">Appointments</a></li>
                    <li class="nav-label mg-t-20">Productivity</li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.productivity.discuss') }}">Discuss</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.productivity.approvals') }}">Approvals</a></li>
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{ route('site.product.apps.productivity.iot') }}">IoT</a></li>
                </ul>
            </div>
        </div><!-- nav-sub -->
    </li>
    <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="package"></i>Resources</a>
        <ul class="navbar-menu-sub">
            <li class="nav-sub-item"><a href="{{ route('site.resources.user-guide') }}" class="nav-sub-link">
                    <i data-feather="calendar"></i>User Guides</a>
            </li>
            <li class="nav-sub-item"><a href="{{ route('site.resources.documentation') }}" class="nav-sub-link"><i
                        data-feather="message-square"></i>Documentation</a></li>
            <li class="nav-sub-item"><a href="{{ route('site.resources.api') }}" class="nav-sub-link"><i
                        data-feather="users"></i>APIs</a></li>
            <li class="nav-sub-item"><a href="{{ route('site.resources.developer-support') }}" class="nav-sub-link"><i
                        data-feather="file-text"></i>Developers Support</a></li>
            {{--            <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i></a>--}}
            </li>
        </ul>
    </li>
    <li class="nav-item"><a href="{{ route('site.forum.index') }}" class="nav-link"><i data-feather="box"></i> Forum</a>
    </li>
    <li class="nav-item"><a href="{{ route('site.price.index') }}" class="nav-link"><i data-feather="archive"></i>
            Price</a></li>
    <li class="nav-item"><a href="../../collections/" class="nav-link"><i data-feather="archive"></i>
            Store</a></li>
    <li class="nav-item"><a href="../../collections/" class="nav-link"><i data-feather="archive"></i>
            Contact</a></li>

</ul>
