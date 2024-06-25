<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">My Website</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">My Website</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manage Website</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Sections</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('hero-section.index')}}">Hero-Section</a></li>
                    <li><a class="nav-link" href="{{route('our-story.index')}}">Our Story</a></li>
                    <li><a class="nav-link" href="{{route('service.index')}}">Services</a></li>
                    <li><a class="nav-link" href="{{route('pricing.index')}}">Pricing</a></li>
                    <li><a class="nav-link" href="{{route('price-feature.index')}}">Pricing Features</a></li>

                </ul>
            </li>
            <li><a class="nav-link" href="{{route('bottom-section.index')}}"><i class="far fa-square"></i> <span>Bottom Section</span></a></li>
           
    </aside>
</div>
