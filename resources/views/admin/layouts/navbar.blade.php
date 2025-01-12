<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl bg-grey mt-3" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    {{-- <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here..." hidden>
        </div>
      </div> --}}
      <ul class="navbar-nav justify-content-end">
        {{-- SETTING PROFILE --}}
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="" class="nav-link text-body p-0">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
        </li>
        {{-- LOGOUT --}}
        <li class="nav-item d-flex align-items-center">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="nav-link text-body font-weight-bold px-0" style="background: none; border: none; color: rgba(1, 4, 136, 0.9); cursor: pointer;">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Logout </span>
                <i class="bi bi-box-arrow-right me-sm-1"></i>
            </button>
        </form>
          {{-- <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold px-0" style="color: rgba(1, 4, 136, 0.9)">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Logout </span>
            <i class="bi bi-box-arrow-right me-sm-1"></i>
          </a> --}}
        </li>
      </ul>
    </div>
  </div>
</nav>
