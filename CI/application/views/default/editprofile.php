<div class="container">
    <h1 style=" text-transform: capitalize;font-size: 30px">
        <span style="font-weight: none;">Profile</span> -
        <?php echo $records->name; ?>
    </h1>
    <hr/>

    <div class="row" style="padding-top: 20px">
        <form class="form-horizontal"  action='updateProfile' method="post" enctype="multipart/form-data">
            <div class="col-xs-9">
                <div class="panel panel-default">
                    <div class="panel-heading text-left">
                        <h4>Demographics<h4>
                    </div>
                    <div class="panel-body">
                        <input type="hidden" name="modify_id" class="form-control required"   value="<?php echo $records->customerid; ?>"/>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" value="<?php echo $records->name; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Birthday:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="dob" id="dob" value="<?php echo $records->dob; ?>" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Education:</label>
                            <div class="col-sm-8">

                                <label class="radio-inline">
                                    <input type="radio" name="education" value="High School"<?php echo ($records->education == 'High School') ? 'checked="checked"' : '' ?> />High School
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="education" value="UnderGraduate"<?php echo ($records->education == 'UnderGraduate') ? 'checked="checked"' : '' ?> />UnderGraduate
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="education" value="Graduate"<?php echo ($records->education == 'Graduate') ? 'checked="checked"' : '' ?> />Graduate
                                </label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="education" value="Post Graduate"<?php echo ($records->education == 'Post Graduate') ? ' checked="checked"' : '' ?> />Post Graduate
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="education" value="Life Experience"<?php echo ($records->education == 'Life Experience') ? 'checked="checked"' : '' ?> />Life Experience
                                </label>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Marital status:</label>
                            <div class="col-sm-8">

                                <label class="radio-inline">
                                    <input type="radio" name="marital_status" value="single"<?php echo ($records->marital_status == 'single') ? 'checked="checked"' : '' ?> />Single
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="marital_status" value="married"<?php echo ($records->marital_status == 'married') ? ' checked="checked"' : '' ?> />Married
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" >Employment:</label>
                            <div class="col-sm-8">

                                <label class="radio-inline">
                                    <input type="radio" name="employment" value="FULL Time Employment"<?php echo ($records->employment == 'FULL Time Employment') ? ' checked="checked"' : '' ?> />FULL Time Employment
                                </label>
                                <br/>

                                <label class="radio-inline">
                                    <input type="radio" name="employment" value="Self Employed"<?php echo ($records->employment == 'Self Employed') ? 'checked="checked"' : '' ?> />Self Employed
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="employment" value="Unemployed"<?php echo ($records->employment == 'Unemployed') ? 'checked="checked"' : '' ?> />Unemployed
                                </label>

                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="employment" value="Retired"<?php echo ($records->employment == 'Retired') ? 'checked="checked"' : '' ?> />Retired
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="employment" value="Home Maker"<?php echo ($records->employment == 'Home Maker') ? 'checked="checked"' : '' ?> />Home Maker
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading text-left"><h4>Contact Information</h4></div>
                    <div class="panel-body "> 
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Mobile:</label>
                            <div class="col-sm-8">
                                <input type="tel"  class="form-control required" name="mobile" value="<?php echo $records->mobile; ?>" maxlength="10" pattern="\d*" title="Mobile number"/>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Address 1:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="address1" value="<?php echo $records->address1; ?>" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Address 2:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="address2" value="<?php echo $records->address2; ?>" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >City:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="city" value="<?php echo $records->city; ?>" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >State:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="state" value="<?php echo $records->state; ?>" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Zip:</label>
                            <div class="col-sm-8">
                                <input type="text" pattern="^\d{1,10}^\[a-z]" class="form-control" name="zip" value="<?php echo $records->zip; ?>" maxlength="10" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading text-left"><h4>Other Information</h4></div>
                    <div class="panel-body "> 
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Household_income:</label>
                            <div class="col-sm-8">

                                <label class="radio-inline">
                                    <input type="radio" name="household_income" value="upto 50000"<?php echo ($records->household_income == 'upto 50000') ? 'checked="checked"' : '' ?> />upto 50000
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="household_income" value="50,000 - 100,000"<?php echo ($records->household_income == '50,000 - 100,000') ? 'checked="checked"' : '' ?> />50,000 - 100,000
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="household_income" value="100,000 - 150,000"<?php echo ($records->household_income == '100,000 - 150,000') ? 'checked="checked"' : '' ?> />100,000 - 150,000
                                </label>
                                <br/>
                                <label class="radio-inline">
                                    <input type="radio" name="household_income" value="150,000 & above"<?php echo ($records->household_income == '150,000 & above') ? ' checked="checked"' : '' ?> />150,000 & above
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Household_members:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="hoousehold_members" value="<?php echo $records->hoousehold_members; ?>" min="0" max="20"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" >Kids:</label>
                            <div class="col-sm-8">

                                <label class="radio-inline">
                                    <input type="radio" name="kids" value="y" <?php echo ($records->kids == 'y') ? 'checked="checked"' : '' ?> />Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="kids" value="n"<?php echo ($records->kids == 'n') ? 'checked="checked"' : '' ?> />No
                                </label>


                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="group">Own rent:</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">

                                    <input type="radio" name="own_rent"  value="own" <?php echo (($records->own_rent == 'own') ? 'checked' : '') ?> />Own
                                </label>
                                <label class="radio-inline">

                                    <input type="radio" name="own_rent" value="rent" <?php echo (($records->own_rent == 'rent') ? 'checked' : '') ?> />Rent
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-5 col-lg-3">
                        <button type="submit" class="btn btn-info">Save</button>
                        <a href="<?php echo base_url("profile"); ?>" class="btn btn-default" name="cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#dob').datetimepicker({
            format: 'Y-MM-DD'
        });
    });
    
</script>