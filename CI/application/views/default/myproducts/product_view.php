<div class="container">
    <h1 style=" text-transform: capitalize;font-size: 30px"><span style="font-weight: none;">My Product Details</span></h1>
    <hr>
    <a href="<?php echo base_url("myproducts/product_edit/" . $myproduct->myproductid); ?>" class="btn btn-default pull-right"> 
        <span class="glyphicon glyphicon-pencil"></span> 
        Edit product
    </a>
    <br/>
    <br/>
    <br/>
    <div class="row">
        <div class="col-sm-4">
            <h3>Company</h3>
            <hr/>
            <address><?php echo $myproduct->business_name; ?>,<br/>
                <?php echo $myproduct->address1; ?>,<br/>
                <?php echo $myproduct->address2; ?>,<?php echo $myproduct->city; ?>,<br/>
                <?php echo $myproduct->state; ?>,<br/>
                <?php echo $myproduct->zip; ?>,</address>
            <address> Phone: <?php echo $myproduct->phone; ?><br/>
                Customer Service Phone: <?php echo $myproduct->customerservice_phone; ?></address>
        </div>
        <div class="col-sm-8 text-left">
            <img src="<?php echo base_url() . UPLOAD_PRODUCT_PATH . $myproduct->product_image; ?>" alt="Product image here" class="img-responsive img-thumbnail thumb" style=""/>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">


            <h3>Product</h3>
            <table class="table table-striped table-bordered" >
                <tbody>
                    <tr>
                        <th width="250px">Brand</th>
                        <td>
                            <?php echo (!empty($myproduct->brand)) ? $myproduct->brand : ''; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td> <?php if (!empty($myproduct->category)) echo $myproduct->category; ?></td>
                    </tr>
                    <tr>
                        <th>Product type</th>
                        <td><?php if (!empty($myproduct->product_type)) echo $myproduct->product_type; ?></td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td> <?php echo (!empty($myproduct->product_name)) ? $myproduct->product_name : ''; ?></td>
                    </tr>
                    <tr>
                        <th>Model</th>
                        <td> <?php if (!empty($myproduct->model)) echo $myproduct->model; ?></td>
                    </tr>
                    
                    <tr>
                        <th>Type of use</th>
                        <td><?php echo $userTypeSelect = (isset($myproduct->use_type)) ? $myproduct->use_type : ''; ?></td>
                    </tr>
                    <tr>
                        <th>Serial number</th>
                        <td><?php echo (isset($myproduct->serial_no)) ? $myproduct->serial_no : ''; ?></td>
                    </tr>
                    <tr>
                        <th>License key</th>
                        <td><?php echo (isset($myproduct->license_key)) ? $myproduct->license_key : ''; ?></td>
                    </tr>
                    <tr>
                        <th>No of license</th>
                        <td><?php echo (isset($myproduct->license_no)) ? $myproduct->license_no : ''; ?></td>
                    </tr>
                </tbody>
            </table>
            <h3>Purchace Details</h3>
            <table class="table table-striped table-bordered" >
                <tbody>
                    <tr>
                        <th width="250px">Purchage date</th>
                        <td><?php echo (isset($myproduct->purchase_date)) ? $myproduct->purchase_date : ''; ?></td>
                    </tr>
                    <tr>
                        <th>Purchase store</th>
                        <td><?php echo (isset($myproduct->purchase_store)) ? $myproduct->purchase_store : ''; ?></td>
                    </tr>
                    <tr>
                        <th>Purchage state</th>
                        <td><?php echo (isset($myproduct->purchase_state)) ? $myproduct->purchase_state : ''; ?></td>
                    </tr>
                    <tr>
                        <th>Purchase price</th>
                        <td><?php echo (isset($myproduct->purchase_price)) ? $myproduct->purchase_price : ''; ?></td>
                    </tr>
                    <tr>
                        <th>Purchase receipt no</th>
                        <td><?php echo (isset($myproduct->purchase_receiptno)) ? $myproduct->purchase_receiptno : ''; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Warranty / Insurance</h3>
            <table class="table table-striped table-bordered" >
                <tbody>
                    <tr>
                        <th>Warranty Years</th>
                        <td> <?php echo (isset($myproduct->warranty_years))? $myproduct->warranty_years : ''; ?></td>
                    </tr>
                    <tr>
                        <th width="250px">Warranty Expiry</th>
                        <td><?php echo (isset($myproduct->warranty_expiry)) ? $myproduct->warranty_expiry : ''; ?></td>
                    </tr>
                </tbody>
            </table>

            <h3>Docs</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>S/no</th>
                        <th>Doc name</th>
                        <th>document</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row_val = 1;
                    if ($myproduct_docs) {
                        foreach ($myproduct_docs as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row_val++; ?></td>
                                <td><?php echo $row->docname; ?></td>
                                <td><?php echo $row->document; ?></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="3">No Records Found!</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>