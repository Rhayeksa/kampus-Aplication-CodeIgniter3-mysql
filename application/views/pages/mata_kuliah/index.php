<div class="row">
  <div class="col-md-3">
    <a href="<?= base_url(); ?>Mata_kuliah/add" class="btn btn-primary btn-block mb-3">
      Mata kuliah
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7.5 1.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V11a.5.5 0 0 0 1 0V9.5H10a.5.5 0 0 0 0-1H8.5V7z" />
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
        Data Mata kuliah <strong>berhasil</strong> <?= $this->session->flashdata('flash_message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <?php if (empty($mata_kuliahs)) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Tidak ada Mata kuliah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
  </div>
  <div class="col-md-9">
    <h2>Daftar Mata kuliah</h2>
    <ul class="list-group">
      <?php foreach ($mata_kuliahs as $mata_kuliah) : ?>
        <li class="list-group-item">
          <?= $mata_kuliah['nama']; ?>
          <a href="<?= base_url(); ?>Mata_kuliah/detail/<?= $mata_kuliah['kode'] ?>" class="btn btn-outline-info btn-sm float-right">view</a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>