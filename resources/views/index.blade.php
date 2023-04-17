@extends("./components/layout")

@section("title") Home @endsection

@section("main_content")

    <div class="row">
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                 role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>
                    Placeholder</title>
                <image x="-15" y="-5" height="140" width="210"
                       xlink:href="https://upload.wikimedia.org/wikipedia/commons/b/b6/Gutenberg_Bible%2C_Lenox_Copy%2C_New_York_Public_Library%2C_2009._Pic_01.jpg"></image>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <h2 class="fw-normal">Heading</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="/">View details »</a></p>
        </div>
    </div>

@endsection
