<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_atm.php">
  <div class="form-group row">
    <label for="norek" class="col-4 col-form-label">Nomor Rekening</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="norek" name="norek" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-child"></i>
          </div>
        </div> 
        <input id="customer" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="saldo" class="col-4 col-form-label">Saldo Awal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-angle-double-left"></i>
          </div>
        </div> 
        <input id="saldo" name="saldo" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>