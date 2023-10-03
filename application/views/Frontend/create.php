<div class="container " style="background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header ">
            
                    <a  href="<?php echo base_url('home/employee');?>  " class="btn btn-danger float-xl-right float-right "> Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url ("home/employee/store") ?>" method="POST">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                            <small><?php echo form_error('first_name')?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control">
                            <small><?php echo form_error('last_name')?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                            <small><?php echo form_error('email')?></small>
                        </div>

                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text"name="phone" class="form-control">
                            <small><?php echo form_error('phone')?></small>
                        </div>

                        <div class="form-group">
                           <button type="submit" class="btn btn-primary mt-4 ">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
