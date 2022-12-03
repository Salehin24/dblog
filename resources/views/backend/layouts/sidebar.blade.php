@php

$prefix = Request::route()->getPrefix();

$route = Route::current()->getName();

@endphp

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Manage User
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('user.list') }}" class="nav-link {{ ($route == 'user.list') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>List</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Category
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('category.add') }}" class="nav-link {{ ($route == 'category.add') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Add</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('category.list') }}" class="nav-link {{ ($route == 'category.list') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>List</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Subcategory
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('subcategory.add') }}" class="nav-link {{ ($route == 'subcategory.add') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Add</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('subcategory.list') }}" class="nav-link {{ ($route == 'subcategory.list') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>List</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Brand
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('brand.add') }}" class="nav-link {{ ($route == 'brand.add') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Add</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('brand.list') }}" class="nav-link {{ ($route == 'brand.list') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>List</p>
          </a>
        </li>
      </ul>
    </li>



    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Product
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('product.add') }}" class="nav-link {{ ($route == 'product.add') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Add</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('product.list') }}" class="nav-link {{ ($route == 'product.list') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>List</p>
          </a>
        </li>
      </ul>
    </li>




{{--     <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Post
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('post.add') }}" class="nav-link {{ ($route == 'post.add') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Add</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('post.list') }}" class="nav-link {{ ($route == 'post.list') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>List</p>
          </a>
        </li>
      </ul>
    </li> --}}

  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->