<div class="form-group">
  <label for="tipo" class=" col-sm-2 control-label">Tipo de candidato: </label>
  <div class="col-sm-10">
  <select class="form-control" name="tipoelec_id">
  <?php foreach ($tipo as $data): ?>
  <option value="<?= $data['id']; ?>"><?= $data['tipo'] ?></option>
   <?php endforeach ?>

  </select>
  </div>
  </div>