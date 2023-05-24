<div class="container">
    <div class="navbar-brand">
        <a class="navbar-item has-text-weight-bold" href="/">
            LaravelCDN
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                Accueil
            </a>

            @foreach($categories as $category)
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{$category->name}}
                    </a>

                    <div class="navbar-dropdown">
                        @foreach($category->childrenCategories as $childrenCategory)
                            <a class="navbar-item">
                                {{$childrenCategory->name}}
                            </a>
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
