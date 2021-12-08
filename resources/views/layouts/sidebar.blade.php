<div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="index.html" class="mb-0 brand-icon">
            <span class="logo-icon">
                <img src="{{ asset('assets/images/favicon.png') }}" alt="" width="40">
            </span>
            <span class="logo-text">pake kodingan</span>
        </a>
        <!-- Menu: main ul -->

        <ul class="menu-list flex-grow-1 mt-3">
            <li><a class="m-link" href="{{ url('dashboard') }}"><i class="icofont-paint"></i> <span>Dashboard</span></a></li>
            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                    <i class="icofont-briefcase"></i><span>Projects</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="project-Components">
                        <li><a class="ms-link" href="{{ url('projects') }}"><span>Projects</span></a></li>
                    </ul>
            </li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#">
                    <i class="icofont-users-alt-5"></i> <span>Our Clients</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse " id="client-Components">
                    <li><a class="ms-link" href="{{ url('clients') }}"> <span>Clients</span></a></li>
                </ul>
            </li>
            <li><a class="m-link" href="{{ url('profile') }}"><i class="icofont-user-male"></i> <span>Profile</span></a></li>
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#website-Components" href="#"><i class="icofont-paint"></i> <span>Website</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse " id="website-Components">
                    <li><a class="ms-link" href="{{ url('banner') }}"> <span>Banner</span></a></li>
                </ul>
            </li>
        </ul>
        
        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>