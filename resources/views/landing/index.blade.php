@extends('layouts/blankLayout')

@section('title', 'Landing - Pages')

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
    {{-- Navbar Header --}}
    <div class="header">
        <nav class="navbar navbar-example navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2" aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-ex-2">
                    <div>
                        <a href="#">
                            <img class="img-fix" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/45x45.png') }}" alt="FORSETI - BETTER FOR LIFE" />
                        </a>
                    </div>
                    <div class="navbar-nav me-auto">
                        <a class="nav-item nav-link active" href="javascript:void(0)">Trang chủ</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">Giới thiệu</a>
                        <a class="nav-item nav-link" href="javascript:void(0)">Liên hệ</a>
                    </div>

                    <span class="navbar-text me-5">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
            info@dvkh-fivestars.com
          </span>
                    <span class="navbar-text">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>
            1900 888 644
          </span>
                </div>
            </div>
        </nav>
    </div>
    {{--slider--}}
    <div>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/2.png')  }}" alt="First slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/3.png') }}" alt="Second slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/4.png') }}" alt="Third slide" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    {{--Content--}}
    <div class="content-wrapper bg-white">
        <div class="introduce py-5 px-5">
            <div class="header-elements d-flex justify-content-center py-5">
                <h4 class="text-uppercase rounded-3 bg-info-subtle py-2 px-3">Giới thiệu</h4>
            </div>
            <div class="clearfix d-flex justify-content-center">
                <div class="w-60 row">
                    <div class="col-md-6 col-sm-12 col-lg-6 text-center">
                        <h6>FORSETI - BETTER FOR LIFE</h6>
                        <p>
                            FORSETI - Chuyên sản xuất và phân phối các sản phẩm máy lọc nước, cây nước nóng lạnh, gia dụng thông minh tại Việt Nam.
                            Forseti cam kết mang đến cho khách hàng các sản phẩm chất lượng với thiết kế tinh tế, dịch vụ chăm sóc khách và bảo hành hoàn hảo nhất.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img class="img-fix" style="width: 30vw;" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/introduce.png') }}" alt="FORSETI - BETTER FOR LIFE" />
                    </div>
                </div>
            </div>
        </div>
        <div class="service px-5 py-5">
            <div class="header-elements d-flex justify-content-center">
                <h4 class="text-uppercase rounded-3 bg-info-subtle py-2 px-3">Dịch vụ Khách hàng</h4>
            </div>
            <div class="clearfix d-flex justify-content-center py-5">
                <div class="row w-60">
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-center">
                            <img class="img-fix" width="80" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/setting.png') }}" alt="FORSETI - BETTER FOR LIFE" />
                        </div>
                        <div class="text-center">
                            <h6 class="text-center">Bảo hành tận nhà</h6>
                            <p>
                                Dịch vụ bảo hành ở tất cả các
                                đại lý trên toàn quốc
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-center">
                            <img class="img-fix" width="80" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/dolar.png') }}" alt="FORSETI - BETTER FOR LIFE" />
                        </div>
                        <div class="text-center">
                            <h6 class="text-center">Tổng đài hỗ trợ 24/7</h6>
                            <p>
                                Hỗ trợ khách hàng 24/7
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-center">
                            <img class="img-fix" width="80" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/warranty.png') }}" alt="FORSETI - BETTER FOR LIFE" />
                        </div>
                        <div class="text-center">
                            <h6 class="text-center">Bảo trì sản phẩm trọn đời</h6>
                            <p>
                                Tất cả các sản phẩm của Forseti đều được bảo trì miễn phí
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-center">
                            <img class="img-fix" width="80" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/refresh.png') }}" alt="FORSETI - BETTER FOR LIFE" />
                        </div>
                        <div class="text-center">
                            <h6 class="text-center">Đổi trả</h6>
                            <p>
                                Đổi trả trong vòng 7 ngày khi phát sinh lỗi kỹ thuật theo quy định
                            </p>
                        </div></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Footer--}}
    <div class="footer d-flex justify-content-center">
        <div class="row px-10 w-75">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="px-10 py-5">
                    <a href="#">
                        <img class="img-fix" src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('landing/45x45.png') }}" alt="FORSETI - BETTER FOR LIFE" />
                    </a>
                </div>
                <div class="text-uppercase">
                    <h6>Trung tâm dịch vụ khách hàng 5 sao FORSETI Việt Nam</h6>
                    <div>
                        <h6>Các nên tảng xã hội</h6>
                        <div class="px-5">
                            <p>
                                <a href="https://x.com/ForsetiVietnam" class="width-social btn btn-outline-light rounded-circle text-info bg-card">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                                <span class="mt-1">Twitter Forseti</span>
                            </p>
                            <p>
                                <a href="https://www.facebook.com/Forseti.vn" class="width-social btn btn-outline-light rounded-circle text-info bg-card"><i class='bx bxl-facebook-circle'></i></a>
                                <span class="mt-1">Facebook Forseti</span>
                            </p>
                            <p>
                                <a href="https://www.instagram.com/forsetivietnam" class="width-social btn btn-outline-light rounded-circle text-info bg-card">
                                    <i class='bx bxl-instagram' ></i>
                                </a>
                                <span class="mt-1">Instagram Forseti</span>
                            </p>
                            <p>
                                <a href="https://www.youtube.com/@forsetivietnam-chuyengialo1854" class="width-social btn btn-outline-light rounded-circle text-info bg-card">
                                    <i class='bx bxl-youtube' ></i>
                                </a>
                                <span class="mt-1">Youtube Forseti</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 py-5 mt-10">
                <div>
                    <h6 class="text-uppercase">Thông tin liên hệ</h6>
                    <div>
                        <div class="px-5">
                            <p>
                                <i class='bx bx-barcode-reader'></i>
                                <span class="mt-1">Mã số thuế: 0108578808</span>
                            </p>
                            <p>
                                <i class='bx bx-map' ></i>
                                <span class="mt-1">Địa chỉ: Số 153 phố Quan Nhân, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội, Việt Nam</span>
                            </p>
                            <p>
                                <i class='bx bxs-phone' ></i>
                                <span class="mt-1">Hotline:  1900 888 644</span>
                            </p>
                            <p>
                                <i class='bx bx-envelope' ></i>
                                <span class="mt-1">info@dvkh-fivestars.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
