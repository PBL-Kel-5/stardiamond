@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="content-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illo inventore voluptas cum quo facilis eaque,
                at rerum quisquam odio, culpa quod explicabo. Nulla sunt, tempora nesciunt sit autem odit asperiores
                aspernatur, doloribus repudiandae, cupiditate illum eius. Tempora doloremque cum quod earum et, ut modi est
                ducimus, quisquam nulla nisi totam illo excepturi alias facilis similique iure itaque. Adipisci nesciunt
                asperiores magnam maxime ut tenetur vero officiis amet neque? Ab accusamus odit laudantium. Reiciendis quia
                quidem repellat tenetur harum rem ad iste eligendi, adipisci reprehenderit. Labore praesentium magni sequi
                sapiente, eius rem? Quasi quos a fuga incidunt omnis hic neque at perferendis perspiciatis nobis provident
                accusantium debitis eligendi, quisquam sint et amet. Tenetur deleniti aut asperiores et, quos porro. Porro
                vero voluptas sed voluptatem, dolorum dolore modi fuga magni temporibus molestiae ullam amet esse non
                tempore dolores natus voluptatibus. At dignissimos quia ad aperiam dolores fuga, accusamus eius
                exercitationem quae.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/ProfileContact.jpg') }}" style="width: 50%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users"></i>
            <p class="m-0">+ 500 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa-solid fa-code-branch"></i>
            <p class="m-0">+ 500 Cabang</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa-solid fa-gamepad"></i>
            <p class="m-0">+ 500 Produk</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height: 50hv; border-radius: 10px;"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik & Saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Berikan kritik dan saran anda kepada aplikasi kami agar kami dapat
                        memberikan pelayanan terbaik
                        melalui aplikasi ini</p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukkan Email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="textarea" class="form-control" id="pesan" placeholder="Masukkan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim Pesan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
