<div class="col-2 sidebar bg-dark flex-grow-0">
    <div class="d-flex align-items-center justify-content-center mt-3 mb-4">
        <img src="assets/img/nogo.jpeg" alt="Logo" width="40" height="40" class="mr-2"
            style="margin-right: 10px;">
        <h4 class="text-white" style="font-size: 24px;">Internet Cafe</h4>
    </div>
    <hr class="sidebar-divider">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link btn-success border text-white rounded {{ 'profile' ? 'active' : '' }}"
                href="#">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-primary border text-white rounded {{ 'Home' ? 'active' : '' }}"
                href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-success border text-white rounded {{ 'notifikasi' ? 'active' : '' }}"
                href="#">Notifikasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-success border text-white rounded {{ 'about' ? 'active' : '' }}"
                href="{{ route('about') }}">About</a>
        </li>
    </ul>
    <div style="margin-top: auto; margin-bottom: 400px;"></div>
    <ul class="nav flex-column">
        <li class="nav-item text-center">
            <a class="nav-link btn btn-success text-white rounded ml-2" href="{{ route('logout') }}">Logout</a>
        </li>
    </ul>
</div>
