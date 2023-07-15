@extends('layout.main')
@section('content')
<div class="kontener">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-5">
                <div class="container-fluid px-5">
                    <div class="formpemesanan">
                        <form>
                            <br>
                            <div class="form-group row">
                                <label class="col-4 col-form-label" for="nama">Nama Lengkap</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="nama" name="nama" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="alamat" class="col-4 col-form-label">Alamat Lengkap</label>
                                <div class="col-8">
                                    <textarea id="alamat" name="alamat" cols="40" rows="4" class="form-control" required="required"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="email" name="email" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="nohp" class="col-4 col-form-label">No Hp</label>
                                <div class="col-8">
                                    <input id="nohp" name="nohp" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="catatan" class="col-4 col-form-label">Catatan</label>
                                <div class="col-8">
                                    <input id="catatan" name="catatan" placeholder="*Optional" type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                <div class="col-8">
                                    <input id="jumlah" name="jumlah" type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="produk" class="col-4 col-form-label">Produk</label>
                                <div class="col-8">
                                    <select id="produk" name="produk" class="custom-select" required="required">
                                        <option value="">-- Pilih Produk --</option>
                                        <option value="fakeflower">Fake Flower 3Pcs</option>
                                        <option value="goldenvas">Golden Vas</option>
                                        <option value="twinvas">Twin Vas Colorfull</option>
                                        <option value="pinkflower">Pink Flower</option>
                                        <option value="gjb">Green Janda Bolong</option>
                                        <option value="whiteflower">White Flower</option>
                                        <option value="spraytanaman">Spray Penyiram Tanaman</option>
                                        <option value="blueflower">Blue and White Flower</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button onclick="location.href='/'" name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection