<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('LinkView');?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br><br><br>
  <?php echo form_open('LoginCont/cekLogin'); ?>
        <?php echo validation_errors(); ?>
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" id="username" class="form-control" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" onclick="" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit"class="btn btn-success">Login</button>
          </div>
        </div>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function cobaAlert(){
      alert('Berhasil')
    }
    </script>
  </body>
</html>
