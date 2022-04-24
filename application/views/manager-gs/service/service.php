<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><?= $title ?></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h4>Advanced Table</h4>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>Task Name</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>

                                            <td>Create a mobile app</td>
                                            <td>2018-01-20</td>
                                            <td>
                                                <div class="badge badge-success">Completed</div>
                                            </td>
                                            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>Redesign homepage</td>

                                            <td>2018-04-10</td>
                                            <td>
                                                <div class="badge badge-info">Todo</div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Detail</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Perangkat Saya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form -->
                <form>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nippos/Nama</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kantor</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Bagian</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Perangkat</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=" : Lampiran Serah Terima">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pilih Perangkat</label>
                        <select class="form-control col-sm-6" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pilih Perangkat</label>

                        <select class="form-control select2" id="exampleFormControlSelect2">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>

                    </div>


                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>