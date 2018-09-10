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
                          <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Add Title">
                          </div>
                          <div class="form-group">
                            <label>Body</label>
                            <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                              <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Upload Image</label>
                            <input type="file" name="userfile" size="20">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
