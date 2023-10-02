<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header ">
                    <h5>
                        How to insert data into database
                        
                    </h5>
                    <a  href="<?php echo base_url('home/employee');?>  " class="btn btn-danger float-xl-right float-right "> Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url ("home/employee/store") ?>" method="POST">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="frist-name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last-name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text"name="phone" class="form-control">
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
