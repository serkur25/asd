<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Film Ekle</h1>
      <form method="POST" action="">
        <div class="form-group">
          <label for="film_adi">Film Adı:</label>
          <input type="text" class="form-control" name="film_adi" id="film_adi" required>
        </div>
        <div class="form-group">
          <label for="tur">Tür:</label>
          <select class="form-control" name="tur" id="tur" required>
            <option value="Aksiyon">Aksiyon</option>
            <option value="Drama">Drama</option>
            <option value="Komedi">Komedi</option>
            <option value="Romantik">Romantik</option>
          </select>
        </div>
        <div class="form-group">
          <label for="yil">Yıl:</label>
          <input type="number" class="form-control" name="yil" id="yil" required>
        </div>
        <button type="submit" class="btn btn-primary" name="film_ekle">Film Ekle</button>
      </form>
    </div>
  </div>
</div>
