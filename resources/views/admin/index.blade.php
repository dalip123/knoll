
@extends('template.default')

@section('content')

<ul class="sidebar-menu">

  <!-- Open menu item -->
  <li class="sidebar-menu-item open">
    <a href="#" class="sidebar-menu-button" data-toggle="sidebar-collapse">Dashboard</a>

    <!-- Submenu -->
    <ul class="sidebar-submenu">
      <li class="sidebar-menu-item active">
        <a href="#" class="sidebar-menu-button">Active menu item</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="#" class="sidebar-menu-button">Regular menu item</a>
      </li>
    </ul>
  </li>

  <!-- Menu item -->
  <li class="sidebar-menu-item">
    <a href="#" class="sidebar-menu-button" data-toggle="sidebar-collapse">Reports</a>

    <!-- Submenu -->
    <ul class="sidebar-submenu">
      <li class="sidebar-menu-item">
        <a href="#" class="sidebar-menu-button">Another menu item</a>
      </li>
      <li class="sidebar-menu-item">
        <a href="#" class="sidebar-menu-button">Regular menu item</a>
      </li>
    </ul>
  </li>

</ul>
@stop