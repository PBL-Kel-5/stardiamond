@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-3">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h3>Informasi Pembeli</h3>
                    <div class="row mb-3">
                        <label for="username" class="col-form-label col-sm-3">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Masukkan Username">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tlp" class="col-form-label col-sm-3">No Handphone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tlp" name="tlp"
                                placeholder="Masukkan No Handphone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-form-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="payment" class="col-form-label col-sm-3">Pembayaran</label>
                        <div class="col-sm-9">
                            <select name="payment" class="form-control" id="payment">
                                <option value="">-- Pili Metode Pembayaran --</option>
                                <option value="qris">QRIS</option>
                                <option value="dana">DANA</option>
                                <option value="ovo">OVO</option>
                                <option value="gopay">GOPAY</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header text-center p-4">
                    <h3>Total</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="totalBelanja" class="col-form-label col-sm-4">Total Belanja</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="totalBelanja" name="totalBelanja" value="10000"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="discount" class="col-form-label col-sm-4">Discount</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="discount" name="discount" value="0"
                                disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="PPn" class="col-form-label col-sm-4">PPn</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="PPn" name="PPn" value="2000"
                                disabled>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <label for="totalKeseluruhan" class="col-form-label col-sm-4">Total Keseluruhan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="totalKeseluruhan" name="totalKeseluruhan"
                                value="" disabled>
                        </div>
                    </div>
                    <button class="btn btn-success w-100">
                        <i class="fas fa-print"></i>
                        Print Struk
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var harga = $('#totalBelanja').val();
            var discount = $('#dicount').val();
            var pajak = $('#PPn').val();
            var subtotal = parseInt(harga) + parseInt(pajak);

            $('#totalKeseluruhan').val(subtotal);
        });
    </script>
@endsection
