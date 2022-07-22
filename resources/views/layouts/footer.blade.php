<footer class="container-fluid bg-dark">
    <div class="row">
        <div class="col text-white p-5">
            <p class="display-5 text-center pt-5">
                {{ config('app.name', 'Laravel') }}
            </p>
            <ul class="nav justify-content-center flex-column flex-sm-row text-center">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="{{ route('welcome') }}">Home</a target="_blank">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="{{ route('contacts') }}">Contacts</a>
                </li>
            </ul>
            <ul class="nav justify-content-center  fs-1 flex-column flex-sm-row text-center">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#" target="_blank">
                        <i class="bi bi-github"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#" target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="https://www.facebook.com/profile.php?id=100083308833930" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#" target="_blank">
                        <i class="bi bi-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>
                </li>
            </ul>
            <p class="text-center text-secondary">Copyrights ©2022 All rights reserved | Developed by <a href="https://www.facebook.com/mahmoud.mahmoud.927758/" class="text-white text-decoration-none" target="_blank">MahmoudTR</a></p>
        </div>
    </div>
</footer>