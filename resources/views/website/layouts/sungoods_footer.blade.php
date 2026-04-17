<footer class="footer">
    <div class="container">
        {{--<div class="footer-top">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="{{ route('home') }}" class="logo-footer">
                        // <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $ws->footer_logo()]) }}" alt="logo-footer" width="154" height="43" />
                    </a>
                    <!-- End FooterLogo -->
                </div>
                <div class="col-lg-9">
                    <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                        <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                            <h4 class="widget-title">Subscribe to our Newsletter</h4>
                            <p>Get all the latest information, Sales and Offers.</p>
                        </div>
                        <form action="#" class="input-wrapper input-wrapper-inline">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Email address here..." required />
                            <button class="btn btn-primary btn-rounded btn-md ml-2" type="submit">subscribe<i
                                    class="d-icon-arrow-right"></i></button>
                        </form>
                    </div>
                    <!-- End Newsletter -->
                </div>
            </div>
        </div>--}}
        <!-- End FooterTop -->
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-info">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="widget-body">
                            <li>
                                <label>Phone:</label>
                                <a href="tel:{{ $ws->phone_one }}">{{ $ws->phone_one }}</a>
                            </li>
                            <li>
                                <label>Email:</label>
                                <a href="mailto:{{ $ws->email }}">{{ $ws->email }}</a>
                            </li>
                            <li>
                                <label>Address:</label>
                                <a href="#">{{ $ws->address }}</a>
                            </li>
                            <li>
                                <label>WORKING DAYS / HOURS:</label>
                            </li>
                            <li>
                                <a href="#">{{ $ws->working_day ?? 'Mon - Sun / 9:00 AM - 8:00 PM' }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="{{ route('about-us') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('user.orders', 'all') }}">Order History</a>
                            </li>
                            <li>
                                <a href="{{ route('return-policy') }}">Returns</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Custom Service</a>
                            </li>
                            <li>
                                <a href="{{ route('terms') }}">Terms &amp; Condition</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul class="widget-body">
                            @foreach($footerMenus as $menu)
                            <li>
                                <a href="{{ $menu->link }}">{{ $menu->name_en }}</a>
                            </li>
                            @endforeach
                            <li>
                                <a href="{{ route('cart') }}">View Cart</a>
                            </li>
                            <li>
                                <a href="{{ route('wishlist.index') }}">My Wishlist</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                {{--<div class="col-lg-3 col-md-6">
                    <div class="widget widget-instagram">
                        <h4 class="widget-title">Instagram</h4>
                        <figure class="widget-body row">
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/01.jpg') }}" alt="instagram 1" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/02.jpg') }}" alt="instagram 2" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/03.jpg') }}" alt="instagram 3" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/04.jpg') }}" alt="instagram 4" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/05.jpg') }}" alt="instagram 5" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/06.jpg') }}" alt="instagram 6" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/07.jpg') }}" alt="instagram 7" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('sungoods/images/instagram/08.jpg') }}" alt="instagram 8" width="64" height="64" />
                            </div>
                        </figure>
                    </div>
                    <!-- End Instagram -->
                </div>--}}
            </div>
        </div>
        <!-- End FooterMiddle -->
        <div class="footer-bottom">
            <div class="footer-left">
                <figure class="payment">
                    <img src="{{ asset('sungoods/images/payment.png') }}" alt="payment" width="159" height="29" />
                </figure>
            </div>
            <div class="footer-center">
                <p class="copyright">{{ $ws->copyright_text ?? 'Sungoods eCommerce © 2026. All Rights Reserved' }}</p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                    <a href="{{ $ws->facebook_link ?? '#' }}" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                    <a href="{{ $ws->twitter_link ?? '#' }}" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                    <a href="{{ $ws->linkedin_link ?? '#' }}" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                </div>
            </div>
        </div>
        <!-- End FooterBottom -->
    </div>
</footer>
