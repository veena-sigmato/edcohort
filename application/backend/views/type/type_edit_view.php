<div class="app-content  my-3 my-md-5">
                    <div class="side-app">
                        <div class="page-header">
                            <h4 class="page-title">Type</h4>
                            <ol class="breadcrumb">
                            <section class="content-header">
                            <h1>
                                <a href="<?= site_url('admin_type') ?>" class="btn btn-info">Manage</a>
                            </h1>
                            </section>
                            </ol>
                        </div>
                        <!--/Page-Header-->

                        <div class="row">                           
                            <!-- end col -->
                            <div class="col-xl-12">
                                 <?php message(); ?>
                                <div class="card m-b-20">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Type</h3>
                                    </div>
                                    <div class="card-body mb-0">
                                        <?php //print_ex($type_detail);
                                        foreach ($type_detail as $type){  ?>
                                        <form class="form-horizontal" action="<?php echo base_url(); ?>admin_type/edit_type_submit" method="post" enctype="multipart/form-data">
                                            <div class="form-group ">
                                                 <input type="hidden" name="type_id" value="<?php echo @$type->type_id ?>">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label" id="examplenameInputname2">Type Name <span style="color:red">*</span></label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" id="type_name" name="type_name" value="<?php echo $type->title; ?>" placeholder="Enter Name" required onkeyup="category_slug_name(this.value)" required>
                                                    </div>
                                                </div>
                                            </div>

                                                                                
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Status</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="status" id="status" required>
                                                          <option value="1" <?php if($type->status=="1"){ echo "selected"; } ?>>Active</option>
                                                          <option value="0" <?php if($type->status=="0"){ echo "selected"; } ?>>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group mb-0 row justify-content-end">
                                                <div class="col-md-9 float-end">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                     <button type="button" class="btn btn-danger waves-effect waves-light" onclick="window.history.back()">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<script>
    function category_slug_name(value)
    {
        $.ajax(
            {
                type: "POST",
                dataType:'json',
                url:"<?php echo base_url();?>admin_type/get_type_slug_name",
                data: {type_name: value},
                async: false,
                success: function(data)
                {
                    //alert(data);
                    var slug=data.slug_name;
                    $("#type_slug").val(slug);
                }
            });
    }

    function readURL(input)
    {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#upload_pic')
                    .attr('src', e.target.result)
                    .width(160)
                    .height(140);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>