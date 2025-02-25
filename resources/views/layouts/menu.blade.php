<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home text-orange"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item has-treeview {{ Request::is('categories*') || Request::is('items*') || Request::is('brands*') || Request::is('sizes*') || Request::is('materials*') || Request::is('conditions*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('categories*') || Request::is('items*') || Request::is('brands*') || Request::is('sizes*') || Request::is('materials*') || Request::is('conditions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tshirt text-orange"></i>
        <p>
            Clothing Management
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-layer-group text-success"></i>
                <p>Categories</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('items.index') }}" class="nav-link {{ Request::is('items*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tshirt text-success"></i>
                <p>Clothing Items</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('brands.index') }}" class="nav-link {{ Request::is('brands*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tags text-success"></i>
                <p>Brands</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('sizes.index') }}" class="nav-link {{ Request::is('sizes*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-ruler text-success"></i>
                <p>Sizes</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('materials.index') }}" class="nav-link {{ Request::is('materials*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-box text-success"></i>
                <p>Materials</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('conditions.index') }}" class="nav-link {{ Request::is('conditions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-heart text-success"></i>
                <p>Conditions</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('occassions*') || Request::is('outfits*') || Request::is('tags*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('occassions*') || Request::is('outfits*') || Request::is('tags*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-archway text-orange"></i>
        <p>
            Wardrobe Management
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('occassions.index') }}" class="nav-link {{ Request::is('occassions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar-alt text-success"></i>
                <p>Occasions</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('outfits.index') }}" class="nav-link {{ Request::is('outfits*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tshirt text-success"></i>
                <p>Outfits</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('tags.index') }}" class="nav-link {{ Request::is('tags*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tags text-success"></i>
                <p>Tags</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('purchases*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('purchases*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-shopping-cart text-orange"></i>
        <p>
            Shopping Management
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('purchases.index') }}" class="nav-link {{ Request::is('purchases*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-receipt text-success"></i>
                <p>Purchases</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('favorites*') || Request::is('histories*') || Request::is('laundries*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('favorites*') || Request::is('histories*') || Request::is('laundries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tasks text-orange"></i>
        <p>
            Wardrobe Usage
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('favorites.index') }}" class="nav-link {{ Request::is('favorites*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-heart text-success"></i>
                <p>Favorites</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('histories.index') }}" class="nav-link {{ Request::is('histories*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-history text-success"></i>
                <p>Histories</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('laundries.index') }}" class="nav-link {{ Request::is('laundries*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-soap text-success"></i>
                <p>Laundries</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('logs*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-clipboard-list text-orange"></i>
        <p>
            System Audit
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('logs.index') }}" class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-alt text-success"></i>
                <p>Logs</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('roles*') || Request::is('permissions*') || Request::is('user*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users-cog text-orange"></i>
        <p>
            Users and Controls
            <i class="fas fa-angle-left right text-orange"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users-cog text-green"></i>
                <p>Roles</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-key text-green"></i>
                <p>Permissions</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users text-green"></i>
                <p>Users</p>
            </a>
        </li>
    </ul>
</li>
