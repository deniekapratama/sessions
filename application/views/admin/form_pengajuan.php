      <!-- Main Content -->
      <div class="main-content">
          <section class="section">
              <div class="section-header">
                  <h1><?php echo $title ?></h1>
                  <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#"><?php echo $title ?></a></div>
                  </div>
              </div>
              <div class="section-body">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4><?php echo $title ?></h4>
                              </div>
                              <div class="card-body">
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nippos Pengguna :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>

                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pegawai :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Cecep Gaul">
                                      </div>
                                  </div>

                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Divisi :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Jasa Keuangan">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label for="staticEmail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bagian :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Remitance">
                                      </div>
                                  </div>

                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Pengajuan :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <select class="form-control selectric">
                                              <option>Pilih..</option>
                                              <option>News</option>
                                              <option>Political</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Surat NDE :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Surat NDE :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="text" class="form-control datepicker">
                                      </div>
                                  </div>

                                  <div class="form-group row mb-4">
                                      <label class="exampleFormControlFile1 text-md-right col-12 col-md-3 col-lg-3">Lampiran File PDF Surat (NDE) :</label>
                                      <div class="col-sm-12 col-md-6">
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                      </div>
                                  </div>
                                  <div class="card-footer text-right col-sm-12 col-md-9">
                                      <button class="btn btn-primary">Submit</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
      </section>
      </div>