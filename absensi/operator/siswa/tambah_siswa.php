<?php
include '../../db/koneksi.php';
include '../akses.php';
include '../../layout/header.php';
?>

<div id="content" style="margin-top:60px;">
  <div class="regular-page-area section-padding-20">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="details-content">

            <h2><i class="icon-calendar"></i> SISWA </h2>

            <div id="myDiv" class="container-fluid">
              <hr>
              <form action="proses.php?kategori=siswa" method="post" class="form-container" style="margin:10px" autocomplete="false">
                <h1>Tambahkan Siswa</h1>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nis</label>
                  :
                  <div class="col-sm-8">
                    <input type="number" class="form-control"  placeholder="Nis" name="nis">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  :
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  placeholder="Nama" name="nama">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Tgl Lahir</label>
                  :
                  <div class="col-sm-8">
                    <input type="date" id="birthday" name="tgl_lahir" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  :
                  <div class="col-sm-8" style="margin-left:30px;">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-check form-check-inline" sty>
                          <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="radioLaki" checked>
                          <label class="form-check-label" for="radioMale">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline ms-3">
                          <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="radioPerempuan">
                          <label class="form-check-label" for="radioFemale">Perempuan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                  :
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  placeholder="Alamat" name="alamat">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Telepon</label>
                  :
                  <div class="col-sm-8">
                    <input type="number" class="form-control"  placeholder="Telepon" name="telepon">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kelas</label>
                  :
                  <div class="col-sm-8">
                    <select name="kelas" class="form-control" id="pilih_kelas">
                      <option value="">Pilih Kelas</option>


                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Jurusan</label>
                    :
                    <div class="col-sm-8">
                      <select name="jurusan" class="form-control" id="pilih_jurusan">
                        <option value="">Pilih Jurusan</option>
                        

                        </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Lokal</label>
                      :
                      <div class="col-sm-8">
                        <select name="lokal" class="form-control" id="pilih_lokal">
                          <option value="">Pilih Lokal</option>
                          

                          </select>
                        </div>
                      </div>


                      <div class="row mb-3">

                        <div class="col-sm-10 offset-sm-2">
                          <input type="batal" value="Batal" name="batal" onclick="closeForm()" style="width:25%; background: #ff3333;" />
                          <input type="submit" value="Simpan" name="simpan"style="width:25%;" />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="form-popup" id="myForm">
                <div class="m-4">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../../js/custom/custom.js"></script>
<!--end-main-container-part-->
<?php include '../../layout/footer.php'; ?>
