<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-6">
        <h3>Detail Mahasiswa</h3>
      </div>
      <div class="col-md-6">
        <div class="float-right">
          <a href="<?= base_url(); ?>Mahasiswa/update/<?= $mahasiswa['nim']; ?>" class="btn btn-warning">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg>
          </a>
          <button class="btn btn-danger" data-toggle="modal" data-target="#delete">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
            </svg>
          </button>
          <a href="<?= base_url(); ?>Mahasiswa" class="btn btn-secondary">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    <h3>NIM <?= $mahasiswa['nim']; ?></h3>
    <table class="table table-borderless">
      <tbody>
        <tr>
          <th>Nama</th>
          <td>:</td>
          <td><?= $mahasiswa['nama']; ?></td>
        </tr>
        <tr>
          <th>Gender</th>
          <td>:</td>
          <td><?= $mahasiswa['gender']; ?></td>
        </tr>
        <tr>
          <th>Jurusan</th>
          <td>:</td>
          <td><?= $mahasiswa['jurusan']; ?></td>
        </tr>
        <tr>
          <th>Phone</th>
          <td>:</td>
          <td><?= $mahasiswa['phone']; ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td>:</td>
          <td><?= $mahasiswa['email']; ?></td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>:</td>
          <td><?= $mahasiswa['alamat']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="delete" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin menghapus data Mahasiswa...?
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>Mahasiswa/delete/<?= $mahasiswa['nim']; ?>" class="btn btn-outline-danger">Ya</a>
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>