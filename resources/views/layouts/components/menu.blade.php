<header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="{{ url(route('home.index')) }}">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url(route('home.index')) }}">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url(route('about.index')) }}">About</a>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CRUD</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="{{ url(route('karyawan.index')) }}">Add Data</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome,
                            <!-- Catch data from the route -->
                            Demo
                            <!-- why username? because in the home.js we pass username variable -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="/login/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
    </header>