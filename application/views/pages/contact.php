<div class="container" style=" margin-top: 1%;margin-bottom: 1%;" id="shad" >
                      <div class="card">
                         <div class="card-header" style="text-align: center; background:#FF83C9"><h1> <b>CONTACT US</b></h1></div>
                          </div>

  <div class="container" style=" margin-top: 0%;margin-bottom: 2%;" id="shad">
                      <div class="card">

                              <div class="container col-md-8 col-md-offset-2">
                                      <div class="well well bs-component">

                                          <form class="form-horizontal" method="post">

                                              <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                                              <fieldset>
                                                  <legend>Send Us your Enquiry</legend>
                                                       <div class="form-group">
                                                        <label for="usr" >Name:</label>
                                                        <input type="text" class="form-control" id="name" name="name">
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="text" class="form-control" id="email" name="email">
                                                      </div>
                                                      <div class="form-group">
                                                      <label for="message">Message</label>
                                                      <textarea class="form-control" rows="3" id="enq_message" name="enq_message"></textarea>
                                                      <span class="help-block">Feel free to ask us any question.</span>

                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-10 col-lg-offset-2">
                                                          <button class="btn btn-default">Cancel</button>
                                                          <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                  </div>
                                              </fieldset>
                                          </form>

                                      </div>
                                  </div>
                      </div>
  </div>
