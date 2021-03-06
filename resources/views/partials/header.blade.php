<header class="banner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-faded px-0">
            <button class="navbar-toggler navbar-toggler-right" type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav mr-auto']) !!}
                @endif
            </div>
        </nav>
    </div>
</header>