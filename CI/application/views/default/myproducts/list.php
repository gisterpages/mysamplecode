<div class="container">
    <div class="">

        <h1 style=" text-transform: capitalize;font-size: 30px"><span style="font-weight: none;">My Products</span></h1>

        <hr>
        <div class="" style="background-color: white;padding: 10px;">
            <form class="form-horizontal"  action='updateProfile' method="post" enctype="multipart/form-data">
                <div class="row" style="padding-top: 20px">

                    <div class="col-xs-12">
                        <a href="<?php echo base_url('products');?>" class="btn btn-info pull-right">Add products</a>
                       
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>S/no</th>
                                    <th>Category</th>
                                    <th>Product type</th>
                                    <th>Brand</th>
                                    <th>Product</th>
                                    <th>Model</th>
                                    <th>Serial</th>
                                    <th>Date Purchased</th>
                                    <th>Warranty-Exp</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                        $row_val = 1;
                        if ($myproducts) {
                            foreach ($myproducts->result() as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row_val; ?></td>
                                    <td><?php echo $row->category ?></td>
                                    <td><?php echo $row->product_type ?></td>
                                    <td><?php echo $row->brand ?></td>
                                    <td>
                                        <a href="<?php echo base_url("myproducts/viewproduct"); ?>/<?php echo $row->myproductid; ?>">
                                            <?php echo $row->product_name; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $row->model ?></td>
                                    <td><?php echo $row->serial_no ?></td>
                                    <td><?php echo $row->purchase_date ?></td>
                                    <td><?php echo $row->warranty_expiry ?></td>
                                </tr>
                                <?php
                                $row_val++;
                            }
                        } else {
                            ?><tr>
                                <td colspan="10">No Records Found!</td>
                            </tr><?php } ?>
                    </tbody>
                        </table>
                    </div>

                    <div class="col-xs-3">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

