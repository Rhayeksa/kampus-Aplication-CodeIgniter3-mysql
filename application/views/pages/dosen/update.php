<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-6">
        <h3>Form Update Dosen</h3>
      </div>
      <div class="col-md-6">
        <div class="float-right">
          <a href="<?= base_url(); ?>Dosen/detail/<?= $dosen['nid']; ?>" class="btn btn-secondary">
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
    <form method="post">
      <input type="text" hidden name="nid" value="<?= $dosen['nid']; ?>" />
      <input type="text" hidden name="updatedAt" value="<?= date("Y-m-d H:i:s"); ?>" />
      <h3>NIM <?= $dosen['nid']; ?></h3>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $dosen['nama']; ?>" />
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control" id="gender">
              <?php foreach ($genders as $gender) : ?>
                <?php if ($gender == $dosen['gender']) : ?>
                  <option value="<?= $gender; ?>" selected><?= $gender; ?></option>
                <?php else : ?>
                  <option value="<?= $gender; ?>"><?= $gender; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
            <small class="form-text text-danger"><?= form_error('gender'); ?></small>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" value="<?= $dosen['phone']; ?>" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?= $dosen['email']; ?>" />
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $dosen['alamat']; ?></textarea>
        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
      </div>
      <button type="submit" name="Update" class="btn btn-primary">Save</button>
    </form>
  </div>
</div>