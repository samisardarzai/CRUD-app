

<div class="container ">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);">
                    
                    <a  href="<?php echo base_url('home/employee/add');?>  " class="btn btn-dark float-xl-right float-right "> Add Employee</a>
                </div>
                <div class="card-body "style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);">
                    <table style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);" id="datatable1" class="table table-bordered" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);" >
                        <thead style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);">
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
                        <tbody style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);">
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
                                    <a href="<?php echo base_url('home/employee/delete/'.$row->id)?>" class="btn btn-danger " >Delete</a>
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
