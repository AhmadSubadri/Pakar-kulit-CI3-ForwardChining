<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100" style="background-color: #26C8E7; box-shadow: 2px 2px 5px 5px; color:black;">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert" style="background-color: #D0F8F1; box-shadow: 2px 2px 5px 5px;">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data Pasien</h5>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped" style="color:black;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>No KK</th>
                                <th>Ni. Handphone</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($data)) : ?>
                            <?php else : ?>
                                <?php $i = 1;
                                foreach ($data->result() as $item) : ?>
                                    <tr>
                                        <td style="color:black;"><?= $i++; ?></td>
                                        <td style="color:black;"><?= $item->nama; ?></td>
                                        <td style="color:black;"><?= $item->jenis_kelamin; ?></td>
                                        <td style="color:black;"><?= $item->umur; ?></td>
                                        <td style="color:black;"><?= $item->no_kk; ?></td>
                                        <td style="color:black;"><?= $item->telp; ?></td>
                                        <td style="color:black;">
                                            <a href="" class="btn btn-sm btn-success m-1">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger m-1">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>