<footer>
    <div class="footer-top">
        <div class="container">

            <div class="links pt-5">

                @foreach($footerLinks as $linksItem)
                <div class="link-list">
                    <h4>{{ $linksItem['title'] }}</h4>
                    <ul>
                        @foreach($linksItem['links'] as $linkItem)
                            <li>{{ $linkItem }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
                
            </div>

            <div class="big-logo">
                <img src="{{ Vite::asset('resources/images/dc-logo-bg.png')}}" alt="dc logo">
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

            <div class="cta">
                <button class="btn">
                    Sign-up now!
                </button>
            </div>

            <div class="social-links">
                <strong>Follow Us</strong>
                <ul>
                    @foreach($socials as $currentSocial)
                    <li>
                        <img src="{{ Vite::asset($currentSocial['icon']) }}" alt="{{ $currentSocial['name'] }}">
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>