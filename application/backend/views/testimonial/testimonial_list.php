<div class="app-content  my-3 my-md-5">
                    <div class="side-app">
                        <div class="page-header">
                            <h4 class="page-title">Testimonial </h4>
                            <ol class="breadcrumb">
                            <section class="content-header">
                            <h1>
                                <a href="<?= site_url('admin_testimonial/add_testimonial') ?>" class="btn btn-info">Add New</a>
                            </h1>
                            </section>
                            </ol>
                        </div>
                        <!--/Page-Header-->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Testimonial List</h3> 

                                        <div class="col-md-6 pull-right">
                                        <?php message(); ?>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive mb-0 ">
                                            <table class="data-table-example table table-striped table-bordered table-hover text-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name</th>                                                        
                                                        <th>Testimonial</th>
                                                        <th>Image</th>
                                                        <th>Rating</th>
                                                        <th>Status</th>
                                                        <th>Date</th>                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  $cnt = 1; //print_pre($records)?>
                                                    <?php foreach ($records as $rec) { ?>
                                                        <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php echo ucfirst($rec->testimonial_by); ?></td>                                                       
                                                        <td><?php echo $rec->testimonial; ?></td>
                                                        <td><img src="<?php echo base_url(); ?>../uploads/testimonial/<?php echo $rec->image; ?>" width="120"></td>
                                                        <td>
                                                            <?php //echo $rec->rating; ?>
                                                           
                                                            <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                <select class="example-fontawesome" name="rating" id="rating" autocomplete="off">
                                                                    <option value="1" <?php if($rec->rating == 1){ echo 'selected';} ?>>1</option>
                                                                    <option value="2" <?php if($rec->rating == 2){ echo 'selected';} ?>>2</option>
                                                                    <option value="3" <?php if($rec->rating == 3){ echo 'selected';} ?>>3</option>
                                                                    <option value="4" <?php if($rec->rating == 4){ echo 'selected';} ?>>4</option>
                                                                    <option value="5" <?php if($rec->rating == 5){ echo 'selected';} ?>>5</option>
                                                                </select>
                                                            </div>
                                                        
                                                        </td>
                                                        <td><?php if($rec->status == 1){ ?>
                                                                <a href="javascript:void(0)" class="btn btn-success btn-sm">Active</a>
                                                            <?php }else{ ?>
                                                                <a href="javascript:void(0)" class="btn btn-warning btn-sm">Inactive</a>
                                                            <?php } ?>
                                                        </td>
                                                        <td><?php echo date('d-m-Y',strtotime($rec->date)); ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url(); ?>admin_testimonial/edit_testimonial/<?php echo $rec->testimonial_id; ?>" class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                                            <a href="<?php echo base_url(); ?>admin_testimonial/delete_testimonial/<?php echo $rec->testimonial_id; ?>" onclick="return confirm('Are you sure?')" class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php $cnt++; } ?>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>