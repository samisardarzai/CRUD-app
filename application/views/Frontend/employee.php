

<div class="container ">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    
                    <a  href="<?php echo base_url('home/employee/add');?>  " class="btn btn-primary float-xl-right float-right "> Add Employee</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone No</th>
                                <th>Email ID</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employee as $row): ?>
                            <tr>
                            <td><?php echo $row->id; ?> </td>
                            <td><?= $row->first_name ?> </td>
                            <td><?= $row->last_name ?></td>
                            <td><?= $row->email?> </td>
                            <td><?= $row->phone?> </td>
                                <td>
                                    <a href="<?php echo base_url('home/employee/edit/'.$row->id)?>" class="btn btn-success " >Edit</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger " >Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
