
<!-- table -->
<div class="container-fluid my-5">

<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
        Tambah Data Mahasiswa
    </button>

    <table class="table table-white table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Nilai</th>
                <th scope="col">Preview</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i < 5; $i++) : ?> 
            <tr>
                <th scope="row"><?= $i ?></th>
                <td>Kimetsu No Yaiba</td>
                <td>4.<?= $i ?></td>
                <td><img width="70px" src="../app/views/1.jpg" alt=""></td>
                <td>
                <span class="badge text-bg-primary"><a href="" style="text-decoration: none; color: white;" >Update</a></span>
                <span class="badge text-bg-success"><a href="" style="text-decoration: none; color: white;">Delete</a></span>
                </td>
            </tr>
            <?php endfor; ?>
        </tbody>
        
    </table>
</div>
<!-- end table -->
<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahData" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahData">Tambah Data Manga</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
                <!-- nama -->
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="nama" name="nama">
                <!-- alamat -->
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" placeholder="Jln ****" name="alamat">
                <br>
                <!-- select semester -->
                <select class="form-select" aria-label="Default select example" name="semester">
                    <option selected>Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
      </div>
    </div>
  </div>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function() {
    this.querySelector('button[type="submit"]').disabled = true;
});

</script>

