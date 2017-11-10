<div class="container">
    <div class="" style="">
            <h1 style=" text-transform: capitalize;font-size: 30px"><span style="font-weight: none;">Profile</span> - <?php echo $records->name; ?> </h1>
            <hr>
        <div class="" style="background-color: white;padding: 10px;">
            <div class="row" style="padding-top: 20px">
                 <div class="col-xs-9">
                     <a href="<?php echo base_url("profile/editProfile"); ?>" class="pull-right"> <span class="glyphicon glyphicon-pencil"></span>  Edit profile</a>
                        <h3>Contact Information</h3>
                        <table class="table table-striped table-bordered" >
                            <tbody>
                                <tr>
                                    <th width="400px">Mobile</th>
                                    <td><?php echo $records->mobile; ?></td>
                                </tr>
                                <tr>
                                    <th>Address 1</th>
                                    <td><?php echo $records->address1; ?></td>
                                </tr>
                                <tr>
                                    <th>Address 2</th>
                                    <td><?php echo $records->address2; ?></td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td><?php echo $records->city; ?></td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td><?php echo $records->state; ?></td>
                                </tr>
                                <tr>
                                    <th>Zip</th>
                                    <td><?php echo $records->zip; ?></td>
                                </tr>

                            </tbody>
                        </table>

                        <h3>Demographics</h3>
                        <table class="table table-striped table-bordered" >
                            <tbody>
                                <tr>
                                    <th width="400px">Birthday</th>
                                    <td><?php echo ($records->dob) ? date("m-d-Y", strtotime($records->dob)) :''; ?></td>
                                </tr>
                                <tr>
                                    <th>Education</th>
                                    <td><?php echo $records->education; ?></td>
                                </tr>
                                <tr>
                                    <th>Marital status</th>
                                    <td><?php echo $records->marital_status; ?></td>
                                </tr>
                                <tr>
                                    <th>Employment</th>
                                    <td><?php echo $records->employment; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h3>Additional Information</h3>
                        <table class="table table-striped table-bordered" >
                            <tbody>
                                <tr>
                                    <th width="400px">Household income</th>
                                    <td><?php echo $records->household_income; ?></td>
                                </tr>
                                <tr>
                                    <th>Household members</th>
                                    <td><?php echo $records->hoousehold_members; ?></td>
                                </tr>
                                <tr>
                                    <th>Kids</th>
                                    <td><?php if($records->kids == 'y'){echo "Yes";}elseif($records->kids == 'n'){echo "No"; } else {    echo '';}?></td>
                                </tr>
                                <tr>
                                    <th>Own rent</th>
                                    <td><?php echo $records->own_rent; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
               
                <div class="col-xs-5">
                    
                </div>
            </div>
        </div>
    </div> 
</div>
