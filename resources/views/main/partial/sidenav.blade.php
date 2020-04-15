<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item   ">
          <a class="nav-link" href="/dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item  {{ request()->url() == route('country.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('country.index')}}">
            <i class="material-icons">people</i>
            <p>Country</p>
          </a>
        </li>

        <li class="nav-item  {{ request()->url() == route('division.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('division.index')}}">
            <i class="material-icons">content_paste</i>
            <p>Division/State</p>
          </a>
        </li>
        <li class="nav-item  {{ request()->url() == route('city.index') ? 'active' : '' }}">
          <a class="nav-link"  href="{{route('city.index')}}">
            <i class="material-icons">library_books</i>
            <p>City</p>
          </a>
        </li>
        <li class="nav-item  {{ request()->url() == route('area.index') ? 'active' : '' }}">
          <a class="nav-link"  href="{{route('area.index')}}">
            <i class="material-icons">bubble_chart</i>
            <p>Area</p>
          </a>
        </li>
        <li class="nav-item  {{ request()->url() == route('category.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('category.index')}}">
            <i class="material-icons">location_ons</i>
            <p>Category</p>
          </a>
        </li>
        <li class="nav-item  {{ request()->url() == route('subcategory.index') ? 'active' : '' }}">
          <a class="nav-link" href="{{route('subcategory.index')}}">
            <i class="material-icons">notifications</i>
            <p>Subcategory</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./rtl.html">
            <i class="material-icons">language</i>
            <p>RTL Support</p>
          </a>
        </li>
        <li class="nav-item active-pro ">
          <a class="nav-link" href="./upgrade.html">
            <i class="material-icons">unarchive</i>
            <p>Upgrade to PRO</p>
          </a>
        </li>
      </ul>
    </div>
  </div>