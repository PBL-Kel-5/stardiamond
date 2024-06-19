<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="registerModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Name <span
                            style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" id="nama" value=""
                            placeholder="Masukkan Username Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email <span
                            style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="nama" id="email" value=""
                            placeholder="Masukkan Email Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-3 col-form-label">Password <span
                            style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Massukkan Password Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tlp" class="col-sm-3 col-form-label">No HP <span
                            style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tlp" id="tlp"
                            placeholder="Masukkan No Handphone Anda" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tlp" class="col-sm-3 col-form-label">Tanggal Lahir <span
                            style="color: red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="date" id="date"
                            placeholder="Masukkan Tanggal Lahir Anda" required>
                    </div>
                </div>
                <button type="button" class="btn btn-success col-sm-12">Register</button>
                <p class="m-auto text-center p-2" style="font-size: 12px">Sudah Memiliki Akun?</p>
                <button type="button" class="btn btn-danger col-sm-12" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
