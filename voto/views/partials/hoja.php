<div class="row">
         <div class="col-md-12">
           <form class="form-horizontal">
             <div class="form-group">
             <div class="row">
                <div class="col-xs-3"></div>
             <div class="color">
    <?php foreach ($objHoja as $data):?>
    <div class="col-xs-4">
        <img src="web/img/<?= $data['src_img']; ?>" class='img-circle' style='width:100px; height:100px;'/>
        <div class="radio">
            <label>
                <input type="radio" name="id" id="blankRadio1" value="<?= $data['idcandidato'];?>" aria-label="" >
                <?= $data['nombre'] ?>
            </label>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div>

</div>
<div class="text-center">
    <button type="submit" class="btn btn-info">Enviar Voto</button>
</div>

</form>
</div>

</div>