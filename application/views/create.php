<?php include_once('header.php');?>
  <div class="container">

      <?php echo form_open('welcome/save', ['class' -> 'form-horizontal']); ?>
        <fieldset>
          <legend>Form Hewan</legend>
          <div class="form-group">
            <label for="inputID">Hewan</label>
            <div class="col-md-10">
            <input type="Hewan" class="form-control" id="inputID" placeholder="Isi Nama Hewan">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNama">Tempat Hidup</label>
            <div class="col-md-10">
            <input type="TempatHidup" class="form-control" id="inputNama" placeholder="Tempat Hidup Hewan">
            </div>
          </div>
          <div class="form-group">
            <label for="inputGol">Jumlah Kaki</label>
            <div class="col-md-10">
            <input type="JumlahKaki" class="form-control" id="inputGol" placeholder="JumlahKakiHewan">
            </div>
          </div>
          </fieldset>
          <button type="reset" class="btn btn-primary">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button><br></br>
        </fieldset>
    <?php echo form_close(); ?>
    </div>
<?php include_once('footer.php');?>
