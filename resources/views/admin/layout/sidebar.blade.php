  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{route('admin.index')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="{{asset('front/images/logo-removebg-preview.png')}}" width="70% !importent" style="margin-left: 30px" alt=""> </h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                {{-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> --}}
                {{-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> --}}
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Rana Jamshaid</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('admin.index')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>User</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.show.user')}}" class="dropdown-item">Show User</a>
                    <a href="{{route('admin.add.user')}}" class="dropdown-item">Add User</a>

                </div>
            </div>


            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i> Soap</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.woman')}}" class="dropdown-item"> Soap</a>
                    <a href="{{route('admin.woman.add')}}" class="dropdown-item">add  Soap</a>

                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i> CBD</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.man')}}" class="dropdown-item">Show CBD </a>
                    <a href="{{route('admin.man.add')}}" class="dropdown-item">add CBD</a>

                </div>
            </div>


            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Candle</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('show.handi.craft')}}" class="dropdown-item">Show Candle</a>
                    <a href="{{route('add.handi.craft')}}" class="dropdown-item">Add Candle</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Vape</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('bed.sheets')}}" class="dropdown-item">Show Vape</a>
                    <a href="{{route('add.bed.sheets')}}" class="dropdown-item">Add Vape</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Cigarette</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.cigarette')}}" class="dropdown-item">Show Cigarette</a>
                    <a href="{{route('add.bed.sheets')}}" class="dropdown-item">Add Cigarette</a>

                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Sports wears</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.sports.wears')}}" class="dropdown-item">Show Sports wears</a>
                    <a href="{{route('add.sports.wears')}}" class="dropdown-item">Add Sports wears</a>

                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Order</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('admin.order')}}" class="dropdown-item">Show Order</a>


                </div>
            </div>

            {{-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>
<!-- Sidebar End -->
