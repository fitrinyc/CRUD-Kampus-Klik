<html>
    <header>
        <title></title>
        <title></title>
        <!-- Bootstrap -->
        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </header>
        <body>


            <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Nilai Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form action="proses.php" method="POST">
                                      <fieldset>
                                        <legend>Input Nilai Mahasiswa</legend>
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="NPM">NPM MAHASISWA</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="NPM" name="npm" value="">
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="NPM">NILAI MAHASISWA</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="NPM" name="npm" value="">
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">SUBMIT</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </body>
</html>