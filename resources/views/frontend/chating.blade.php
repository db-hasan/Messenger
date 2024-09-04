@include('frontend.header')

<body>
    <div class="header">
        <div class="main-sidebar-container">
            <div class="main-search-pro disply-block">
                <div class="card border-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="m-2 d-flex align-items-center">
                            <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                alt="Profile" class="rounded-circle">
                            <div class="ms-3">
                                <strong>{{ auth()->user()->name }}</strong><br>
                                <small class="text-secondary">Connect With Us</small>
                            </div>
                        </div>
                        <div class="contact-messenger-icon">
                            <i class="bi bi-filter"></i>
                        </div>
                    </div>
                    <div class="search-bar m-2 mx-3">
                        <form method="POST" action="#">
                            <input type="text" class="form-control" name="query"
                                placeholder="Search here start to chat">
                        </form>
                    </div>
                </div>
            </div>
            <aside id="sidebar" class="sidebar scrollbar">
                <ul class="sidebar-nav" id="sidebar-nav">
                    @foreach ($users as $user)
                        <li class="nav-item">
                            <a class="nav-link collapsed user-pro" href="{{ route('index.message', $user->id) }}">
                                <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                    alt="Profile" class="rounded-circle">
                                <div class="ms-2 w-100">
                                    <div class="d-flex justify-content-between">
                                        <div class=""><strong>{{ $user->name }}</strong></div>
                                        <div class=""><small class="text-secondary">02/09/2024</small></div>
                                    </div>
                                    <small class="text-secondary">Message & Call ...</small>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>

        <div class="main-content">

            <div class="credits">
                Development by <a href="https://softxone.com/">SOFTxOne Limited</a>
            </div>
        </div>
    </div>

    @include('frontend.footer')
</body>

</html>
