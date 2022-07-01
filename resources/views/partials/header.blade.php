<header>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''  }}" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : ''  }}"  href="{{route('comics.index')}}">Comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'comics.create' ? 'active' : ''  }}" href="{{route('comics.create')}}" >Create</a>
            </li>
        </ul>
    </div>
</header>
