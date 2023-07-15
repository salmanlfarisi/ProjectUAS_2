@extends('layout.main')
@section('content')
          <!-- HERO SECTION-->
          <div class="container">
            <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/bungaboard.jpeg)">
              <div class="container py-5">
                <div class="row px-4 px-lg-5">
                  <div class="col-lg-6">
                    <p class="text-mute small text-uppercase mb-2">Inspirasi Bunga Terbaru 2023</p>
                    <h1 class="h2 text-uppercase mb-3">Diskon Sebesar 20%</h1><a class="btn btn-dark" href="/pemesanan">Pesan Sekarang</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- TRENDING PRODUCTS-->
            <section class="py-5">
              <header>
                <p class="small text-muted small text-uppercase mb-1">Rekomendasi Bunga 2023</p>
                <h2 class="h5 text-uppercase mb-4">Top trending Bunga</h2>
              </header>
              <div class="row">
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/bunga1.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Fake Flower 3Pcs</a></h6>
                    <p class="small text-muted">Rp 150.000</p>
                  </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-primary">Sale</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/vasbunga1.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Golden Vas</a></h6>
                    <p class="small text-muted">Rp 200.000</p>
                  </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/vasbunga2.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Twin Vas Colorfull</a></h6>
                    <p class="small text-muted">Rp 150.000</p>
                  </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-info">New</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/vasbunga3.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Pink Flower</a></h6>
                    <p class="small text-muted">Rp 200.000</p>
                  </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-danger">Sold</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/pohon1.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Green Janda Bolong</a></h6>
                    <p class="small text-muted">Rp 300.000</p>
                  </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/pohon2.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">White Flower</a></h6>
                    <p class="small text-muted">Rp 50.000</p>
                  </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/tools1.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Spray Penyiram Tanaman</a></h6>
                    <p class="small text-muted">Rp 65.000</p>
                  </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                  <div class="product text-center">
                    <div class="position-relative mb-3">
                      <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="img/vasbunga4.jpg" alt="..."></a>
                      <div class="product-overlay">
                        <ul class="mb-0 list-inline">
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                          <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="/pemesanan">Add to cart</a></li>
                          <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Blue and white Flower</a></h6>
                    <p class="small text-muted">Rp 125.000</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
@endsection