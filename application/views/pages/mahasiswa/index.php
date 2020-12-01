<div class="row">
  <div class="col-md-3">
    <a href="<?= base_url(); ?>Mahasiswa/add" class="btn btn-primary btn-block mb-3">
      Mahasiswa
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
      </svg>
    </a>
    <form method="POST" class="form-inline mb-3">
      <div class="input-group">
        <input type="text" name="keyword" class="form-control" placeholder="Search" />
        <div class="input-group-append">
          <button class="btn btn-outline-primary" type="submit">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
            </svg>
          </button>
        </div>
      </div>
    </form>
    <?php if ($this->session->flashdata('flash_message')) : ?>
      <div class="alert alert-dark alert-dismissible fade show" role="alert">
        Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash_message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <?php if (empty($mahasiswas)) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Tidak ada Mahasiswa
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
  </div>
  <div class="col-md-9">
    <h2>Daftar Mahasiswa</h2>
    <ul class="list-group">
      <?php foreach ($mahasiswas as $mahasiswa) : ?>
        <li class="list-group-item">
          <?= $mahasiswa['nama']; ?>
          <a href="<?= base_url(); ?>Mahasiswa/detail/<?= $mahasiswa['nim'] ?>" class="btn btn-outline-info btn-sm float-right">view</a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>