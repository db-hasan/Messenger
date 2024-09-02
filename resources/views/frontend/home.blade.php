@extends('frontend/layouts')
@section('content')
    <main id="main" class="main frontent-main">

        <div class="card text-message">
            <div class="card">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="m-2 d-flex align-items-center">
                        <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile"
                        class="rounded-circle">
                        <div class="ms-3">
                            <strong>Ali Hasan</strong><br>
                            <small class="text-secondary">Message & Call ...</small>
                        </div>
                    </div>
                    <div class="contact-messenger-icon">
                        <i class="bi bi-telephone-fill"></i>
                        <i class="bi bi-camera-video-fill"></i>
                        <i class="bi bi-filter"></i>
                    </div>
                </div>
            </div>
            <div class="ms-2 mt-5 mb-4">
                <div class="clearfix d-flex align-items-center">
                    <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile"
                        class="rounded-circle">
                    <div class="bg-body-secondary float-start mx-3 my-2 p-2 rounded message-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nostrum magni inventore laborum cum
                        reprehenderit.
                    </div>
                </div>

                <div class="clearfix">
                    <div class="bg-primary text-white float-end mx-3 my-2 p-2 rounded message-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptates.
                    </div>
                </div>

                <div class="clearfix d-flex align-items-center">
                    <img class="user-pro-image" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile"
                        class="rounded-circle">
                    <div class="bg-body-secondary float-start mx-3 my-2 p-2 rounded message-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nostrum magni inventore laborum cum
                        reprehenderit.
                    </div>
                </div>

                <div class="clearfix">
                    <div class="bg-primary text-white float-end mx-3 my-2 p-2 rounded message-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptates.
                    </div>
                </div>

            </div>

            <div class="ms-2 mb-3 search d-flex align-items-center">
                <textarea class="form-control" id=""></textarea>
                <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>


    </main>
@endsection
