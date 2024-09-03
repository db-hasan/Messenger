@include('frontend.header')

<body>
    <div class="main">
        <div class="sidebar-container disply-block">
            <div class="search-pro disply-block">
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
                            <a class="nav-link collapsed user-pro" href="{{ route('message', $user->id) }}">
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

        <div class="main-content disply-none">
            <div class="message-pro disply-none">
                <div class="card border-0">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="m-2 d-flex align-items-center">
                            <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                alt="Profile" class="rounded-circle">
                            <div class="ms-3">
                                <strong>{{ $userId->name }}</strong><br>
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
                    <div class="clearfix d-flex align-items-center">
                        <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            alt="Profile" class="rounded-circle">
                        <div class="bg-body-secondary float-start mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nostrum magni inventore
                            laborum
                            cum
                            reprehenderit.
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="bg-primary text-white float-end mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptates.
                        </div>
                    </div>

                    <div class="clearfix d-flex align-items-center">
                        <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            alt="Profile" class="rounded-circle">
                        <div class="bg-body-secondary float-start mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nostrum magni inventore
                            laborum
                            cum
                            reprehenderit.
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="bg-primary text-white float-end mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptates.
                        </div>
                    </div>
                    <div class="clearfix d-flex align-items-center">
                        <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            alt="Profile" class="rounded-circle">
                        <div class="bg-body-secondary float-start mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nostrum magni inventore
                            laborum
                            cum
                            reprehenderit.
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="bg-primary text-white float-end mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptates.
                        </div>
                    </div>

                    <div class="clearfix d-flex align-items-center">
                        <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png"
                            alt="Profile" class="rounded-circle">
                        <div class="bg-body-secondary float-start mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nostrum magni inventore
                            laborum
                            cum
                            reprehenderit.
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="bg-primary text-white float-end mx-3 my-2 p-2 rounded message-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptates.
                        </div>
                    </div>
                </div>
            </div>
            <div class="ms-2 mb-3 input-message d-flex align-items-center">
                <textarea class="form-control" id=""></textarea>
                <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </div>
            <div class="credits">
                Development by <a href="https://softxone.com/">SOFTxOne Limited</a>
            </div>
        </div>
    </div>

    @include('frontend.footer')
</body>

</html>
