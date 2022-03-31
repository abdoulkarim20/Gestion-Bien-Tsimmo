@include('components.design_tasnim.entete')

@include('components.design_tasnim.menu')



<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Ajouter une proprietaire</h3>
                    <form class="requires-validation" novalidate>
                        <div class="col-md-12">
                           <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                        </div>

                       <div class="col-md-12">
                            <select class="form-select mt-3" required>
                                  <option selected disabled value="">Position</option>
                                  <option value="jweb">Junior Web Developer</option>
                                  <option value="sweb">Senior Web Developer</option>
                                  <option value="pmanager">Project Manager</option>
                           </select>
                       </div>


                       <div class="col-md-12">
                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                       </div>


                       <div class="col-md-12 mt-3">
                        <label class="mb-3 mr-1" for="gender">Gender: </label>

                        <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                        <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                        <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                        </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    </div>
              

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







@include('components.design_tasnim.footer')
