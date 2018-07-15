<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Tamu</legend>
          <!-- <p>
            <label for="nim">NIM : </label>
            <input type="text" name="nim" id="nim" placeholder="Contoh: 12345678">
          </p> -->
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
          </p>
          
          <p>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
          </p>
          <p >
            <label for="notelepon">No telepon : </label>
            <input type="text" name="notelepon" id="notelepon" placeholder="Contoh: 088123214152">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>