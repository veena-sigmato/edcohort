<section class="content">
    <div class="container-fluid">
        <div class="row row-header">
            <div class="col-md-8">
            <h2>Customer <small>Customer View History</small></h2>
            </div>
            
        </div>
        <?php message(); ?>
   

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="header">
                          
                    </div> 
                    <div class="body">
                        <div class="table-responsive1">
                            <table id="example" class="table table-bordered table-responsive table-striped table-hover table-condensed js-basic-example1 dataTable">
                              <thead class="bg-teal">
                              <tr>
                               <th class="" >Name</th>
                                <th class="" >Item Id</th>
                                <th class="" >Type</th>
                                <th class="" >Title</th>                          
                                <th class="" >Date</th>  
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($log_list as $log): ?>
                                  <tr role="row" class="text-bold" >
                                    <td class=""><?php echo $log->firstname; ?></td>
                                    <td class=""><?php echo $log->item_id; ?></td>
                                    <td class=""><?php echo $log->type; ?></td>                          
                                    <td class=""><?php echo $log->title; ?></td>                          
                                    <td class=""><?php echo date('Y-m-d h:i A',strtotime($log->date_added)); ?></td>                          
                                  </tr>
                                <?php endforeach ?> 
                              </tbody>          
                            </table>
                        </div>
                        <div id="pagination-div-id"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
<!-- Custom JS -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    function checkAll(chk)
    {
        if(chk==true)
        {
          $('.multi-chk-complete').each(function() {
              this.checked = true;
          });
        }
        else
        {
          $('.multi-chk-complete').each(function() {
              this.checked = false;
          });
        }
    }
</script>
