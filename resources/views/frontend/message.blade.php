@include('frontend.header')

<body>
    <div class="header">
        <div class="pages-sidebar-container">
            <div class="pages-search-pro">
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
                        <div class="contact-messenger-icon dropdown">
                            <button class="border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-gear"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i>Profile
                                        Setting</a></li>
                                <li style="border: 1px dashed #0000001f;"><a class="dropdown-item"
                                        href="{{ route('profle.update') }}"><i class="bi bi-door-open"></i>Profile
                                        Update</a></a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                            class="bi bi-box-arrow-right"></i>Logout</a></li>
                            </ul>
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

        <div class="pages-content">
            <div class="pages-message-pro">
                <div class="card border-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="m-2 d-flex align-items-center">
                            <div class="back-button">
                                <a href="{{ route('index.chat') }}"><i class="fa-solid fa-arrow-left"></i></a>
                            </div>
                            <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                alt="Profile" class="rounded-circle">
                            <div class="ms-3">
                                <strong>{{ $userid->name }}</strong><br>
                                <small class="text-secondary">Connect With Us</small>
                            </div>
                        </div>
                        <div class="contact-messenger-icon">
                            <i class="bi bi-telephone-fill"></i>
                            <i class="bi bi-camera-video-fill"></i>
                            <i class="bi bi-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="messages scrollbar">
                <div class="ms-2 mt-5 mb-4">
                    @foreach ($messages as $message)
                        @if ($message->sender_id == auth()->user()->id)
                            <!-- Message from the authenticated user (sent message) -->
                            <div class="clearfix">
                                <div class="bg-primary text-white float-end mx-3 my-2 p-2 rounded message-content">
                                    {{ $message->message }}
                                </div>
                            </div>
                        @else
                            <!-- Message from the other user (received message) -->
                            <div class="clearfix d-flex align-items-center">
                                <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                    alt="Profile" class="rounded-circle">
                                <div class="bg-body-secondary float-start mx-3 my-2 p-2 rounded message-content">
                                    {{ $message->message }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <form action="{{ route('store.message') }}" method="post">
                @csrf
                <input type="hidden" name="receiver_id" value="{{ $userid->id }}">
                <div class="ms-2 mb-3 input-message d-flex align-items-center">
                    <textarea class="form-control" name='message' required></textarea>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>

    @include('frontend.footer')
</body>

</html>
