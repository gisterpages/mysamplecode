<div class="container">
    <h2 class=""><?php echo $page_title; ?></h2>
    <hr>
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
        <div class="col-sm-6">
            <img src="<?php echo base_url() . UPLOAD_PRODUCT_PATH . $myproduct->product_image; ?>" alt="Product image here" class="img-responsive img-thumbnail"/>
        </div>
    </div>
    <form name="form_productAdd" id="form_productAdd" method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-6">
            <h3>Products</h3>
            <table class="table table-striped table-bordered" >
                <tbody>
                    <tr>
                        <th width="250px">Brand</th>
                        <td><?php echo $myproduct->brand; ?></td>
                    </tr>
                    <tr>
                        <th>Caregory</th>
                        <td><?php echo $myproduct->category; ?></td>
                    </tr>
                    <tr>
                        <th>Product Type</th>
                        <td><?php echo $myproduct->product_type; ?></td>
                    </tr>
                    <tr>
                        <th>Model</th>
                        <td><?php echo $myproduct->model; ?></td>
                    </tr>
                    <tr>
                        <th>Type of use</th>
                        <td>
                            <?php 
                            $userTypeSelect = (isset($myproduct->use_type)) ? $myproduct->use_type :'';
                            $selStr = 'selected="selected"';
                            ?>
                            <select name="typeofuse">
                                <option value="Home Personal" <?php echo ($userTypeSelect == 'Home Personal')? $selStr: ''; ?>>Home Personal</option>
                                <option value="Home Office" <?php echo ($userTypeSelect == 'Home Office')? $selStr: ''; ?>>Home Office</option>
                                <option value="Business" <?php echo ($userTypeSelect == 'Business')? $selStr: ''; ?>>Business</option>
                                <option value="Travel" <?php echo ($userTypeSelect == 'Travel')? $selStr: ''; ?>>Travel</option>
                                <option value="Vacation" <?php echo ($userTypeSelect == 'Vacation')? $selStr: ''; ?>>Vacation</option>
                            </select>
                            </td>
                    </tr>
                    <tr>
                        <th>Serial number</th>
                        <td><input type="text" id="serialno" name="serialno" value="<?php echo (isset($myproduct->serial_no)) ? $myproduct->serial_no :'';?>" required title="Serial no"/>
                        <div id="serialno_error"></div></td>
                    </tr>
                    <tr>
                        <th>License key</th>
                        <td><input type="text" id="licensekey" name="licensekey" value="<?php echo (isset($myproduct->license_key)) ? $myproduct->license_key :'NA';?>" required /></td>
                    </tr>
                    <tr>
                        <th>No of license</th>
                        <td><input type="text" id="noofLicense" name="noofLicense" value="<?php echo (isset($myproduct->license_no)) ? $myproduct->license_no :'NA';?>" required/></td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Purchace Details</h3>
            <table class="table table-striped table-bordered" >
                <tbody>
                    <tr>
                        <th width="250px">Purchage date</th>
                        <td>
                            <div class='input-group date'>
                                <input type="text" id="purchaseDate" class="form-control" name="purchaseDate" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" value="<?php echo (isset($myproduct->purchase_date)) ? $myproduct->purchase_date :'';?>" required/>
                            
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Purchase store</th>
                        <td><input type="text" id="purchaseStore" name="purchaseStore" value="<?php echo (isset($myproduct->purchase_store)) ? $myproduct->purchase_store :'';?>" required/></td>
                    </tr>
                    <tr>
                        <th>Purchase state</th>
                        <td>
                            <?php
                            if($states):
                            ?>
                            <select name="purchaseState" id="purchaseState" required="">
                                <option value=""> -- Select -- </option>
                                <?php 
                                foreach($states as $row):
                                $selected = ($row->state_name == $myproduct->purchase_state) ? 'selected="selected"' :'';
                                ?>
                                <option value="<?php echo $row->state_name; ?>" <?php echo $selected; ?>><?php echo $row->state_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php endif; ?>
                    </tr>
                    <tr>
                        <th>Purchase price</th>
                        <td><input type="text" id="purchasePrice" name="purchasePrice" pattern="\d*.[0-9]{2}" title="123.12" value="<?php echo (isset($myproduct->purchase_price)) ? $myproduct->purchase_price :'';?>" required/></td>
                    </tr>
                    <tr>
                        <th>Purchase receipt no</th>
                        <td><input type="text" id="purchaseReceipt" name="purchaseReceipt" value="<?php echo (isset($myproduct->purchase_receiptno)) ? $myproduct->purchase_receiptno :'';?>" required/></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Warranty / Insurance</h3>
            <table class="table table-striped table-bordered" >
                <tbody>
                    <tr>
                        <th width="250px">Warranty no of years</th>
                        <td id="war_years"><?php echo (isset($myproduct->warranty_years))? $myproduct->warranty_years : ''; ?></td>
                    </tr>
                    <tr>
                        <th>Warranty Expiry
                            <input type="hidden" id="war_expiry" name="war_expiry" value="<?php echo (isset($myproduct->warranty_expiry)) ? $myproduct->warranty_expiry :'';?>"/>
                        </th>
                        <td id="war_expiry_disp">
                            <?php echo (isset($myproduct->warranty_expiry)) ? $myproduct->warranty_expiry :'';?>
                            </td>
                    </tr>
                    </tbody>
            </table>
            <h3>Docs</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>S/no</th>
                        <th>Doc name</th>
                        <th>document</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row_val = 1;
                    if (isset($myproduct_docs)) {
                        foreach ($myproduct_docs as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row_val++; ?></td>
                                <td><?php echo $row->docname; ?></td>
                                <td><a href="<?php echo base_url(). 'uploads/docs/'.$row->docname;?>" target="_blank"><?php echo $row->document; ?></a></td>
                                <td><a href="<?php echo base_url() . 'myproducts/delete_doc/'.$myproduct->myproductid.'/'.$row->mydocid; ?>" class="btn btn-xs btn-danger">Remove</a></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="4">No Records Found!</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p>Select multiple files to upload more than one file at a time</p>
            <input type="file" class="" name="userFiles[]" multiple/>
        </div>
    </div>
    <?php 
    if(isset($manuals)):?>
    <div class="row">
        <div class="col-sm-12">
            <h3>Manuals - By manufacturer</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>doc_id</th>
                        <th>Date</th>
                        <th>Version</th>
                        <th>Doc name</th>
                        <th>type</th>
                        <th>document.pdf</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                        $row_val = 1;
                        if (!empty($manuals)) {
                            foreach ($manuals->result() as $row) {
                                ?>
                    <tr>
                                    <td><?php echo $row->manualid; ?></td>
                                    <td><?php echo $row->manual_date ?></td>
                                    <td><?php echo $row->manual_version ?></td>
                                    <td><?php echo $row->manual_name ?></td>
                                    <td><?php echo $row->manual_type ?></td>
                                    <td><?php echo $row->document ?></td>
                                    </tr>
                                <?php
                                $row_val++;
                            }
                        } else {
                            ?>
                                    <tr>
                            <td colspan="6">No Records Found!</td>
                        </tr>
                    <?php } ?>
                    </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    <input type="submit" class="btn btn-primary col-lg-10" name="submit" value="Save My Product Details"/>
    <a href="<?php echo base_url('myproducts'); ?>" class="btn btn-default col-lg-2">cancel</a>
    </form>
</div>

<script type="text/javascript">
    $(function () {
        $('#purchaseDate').datetimepicker({
            format: 'Y-MM-DD'
        });
        
        $('#purchaseDate').on('blur', function(){
            var this_val = $(this).val();
            var war_year = $('#war_years').html();
            console.log(this_val);
            var split_date_year = this_val.split('-');
            var war_expiry_year = parseInt(split_date_year[0]) + parseInt(war_year);
            var war_expiry = war_expiry_year +'-'+split_date_year[1]+'-'+split_date_year[2];
            console.log(war_expiry);
            $('#war_expiry').val(war_expiry);
            $('#war_expiry_disp').html(war_expiry);
        });
        
        $("#serialno").on('blur', function(){
            var this_val = $(this).val();
            $("input[name=submit]").prop('disabled', false);
            $("#serialno_error").html('');
            $.ajax({
                type: 'GET',
                url: BASE_URL + '/myproducts/ajax_checkMyproductSerial/' + this_val,
                dataType: 'json',
                success: function (response) {
                    var obj = response;
                    if(obj.result > 0){
                        var str = '';
                            str += '<p class="alert-danger">';
                            str += 'Product already added';
                            str += '</p>';
                            $("#serialno_error").html(str);
                            $('input[name=submit]').prop('disabled', true);
                    }
                },
                error: function (er) {
                    console.log("Brand Add Failed: error code - " + er.status);

                }
            });
        });
    });
</script>