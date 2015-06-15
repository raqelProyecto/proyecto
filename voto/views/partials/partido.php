<div class="form-group">
  <label for="DUI" class=" col-sm-2 control-label">Partido: </label>
  <div class="col-sm-10">
  <select class="form-control" name="partido_id">
  <?php foreach ($partido as $dat): ?>
  <option value="<?= $dat['id']; ?>"><?= $dat['nombre'] ?></option>
   <?php endforeach ?>
  </select>
  </div>
  </div>