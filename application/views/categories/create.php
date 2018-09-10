<div class="container" style="margin-top:90px;">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">

                  <div class="card-header" style="color:black"><h1><?= $title ;?></h1></div>

                  <div class="card-body">

                      <div class="container">
												<?php echo validation_errors(); ?>

												<!-- multipart is for image -->
													<?php echo form_open_multipart('categories/create'); ?>
                            <div class= "form=group">
															<label style="color:black">Name</label>
															<input type="text" class="form-control" name="name" placeholder="Enter name">
														</div>
														<br><br>
														<button type="submit" class="btn btn-default">Submit</button>
										 			</form>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
