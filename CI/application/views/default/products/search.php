<div class="container">
    <form class="form-horizontal" method="post" actio="<?php echo base_url('user/register') ?>" name="signup_form" id="signup_form">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Manufacturer </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="manufacturer" id="manufacturer" placeholder="Manufacturer">
                        <!--<select class="form-control" name="manufacturer" id="manufacturer"></select>-->
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Brand </label>
                    <div class="col-sm-8">
                        <!--<input type="text" class="form-control" name="brand" id="brand" placeholder="Brand">-->
                        <select class="form-control" name="brand" id="brand"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Category </label>
                    <div class="col-sm-8">
                        <!--<input type="text" class="form-control" name="category" id="category" placeholder="Category">-->
                        <select class="form-control" name="category" id="category"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Product type </label>
                    <div class="col-sm-8">
                        <!--<input type="text" class="form-control" name="product_type" id="product_type" placeholder="Product type">-->
                        <select class="form-control" name="product_type" id="product_type"></select>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="">Model</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="model" id="model" placeholder="Model">
                        <select class="form-control" name="model_sel" id="model_sel"></select>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center">
            <button type="button" class="btn btn-primary" id="model_search">GO</button>
        </div>
    </form>
    <hr/>
</div>

<div class="container" id='list_products'></div>

<script>

    var products = '';
    var products_fil_manuf = '';
    var products_fil_brand = '';
    var products_fil_category = '';
    var product_folder = '<?php echo base_url() . UPLOAD_PRODUCT_PATH; ?>';
    var avail_manuf = [];
    var avail_models = [];
    var avail_brands = [];
    var avail_category = [];
    var avail_producttype = [];
    
    var filters = {
        'manufacturer': '',
        'brand': '',
        'category': '',
        'model': ''
    };
    $(function () {
        
        $('#model_sel').hide();
        
        function removeList(){
            $('#list_products').html('');
        }
        
        $("#manufacturer").autocomplete({
            source: avail_manuf
        });

        $("#model").autocomplete({
            source: avail_models
        });
//        $("#brand").autocomplete({
//            source: avail_brands
//        });

        function getSearchObj(str, array) {
            return array.filter(function (obj) {
                if (obj.business_name.toLowerCase() == str) {
                    return obj;
                }
                //return obj.business_name.indexOf(obj) >= 0;
            });
        }

        function makeView(container, data) {
            container.html('');
            var row = '';
            var col = '';
            var table = '';
            var tbody = '';
            var col2 = '';
            var table2 = '';
            var tbody2 = '';

            $.each(data, function (rowIndex, r) {
                row = $('<div/>').addClass('row');
                /*
                 * col 1
                 */
                col = $('<div/>').addClass('col-sm-5');
                table = $("<table/>").addClass('table table-condensed table-bordered');
                tbody = $("<tbody/>");

                tr = $("<tr/>");
                tr.append($("<th width='200px'/>").text('Business name'));
                tr.append($("<td/>").text(r.business_name));
                tbody.append(tr);
                tr = $("<tr/>");
                tr.append($("<th/>").text('Address1'));
                tr.append($("<td/>").text(r.address1));
                tbody.append(tr);
                tr = $("<tr/>");
                tr.append($("<th/>").text('Address2'));
                tr.append($("<td/>").text(r.address2));
                tbody.append(tr);
                tr = $("<tr/>");
                tr.append($("<th/>").text('City'));
                tr.append($("<td/>").text(r.city));
                tbody.append(tr);
                tr = $("<tr/>");
                tr.append($("<th/>").text('State'));
                tr.append($("<td/>").text(r.state));
                tbody.append(tr);
                tr = $("<tr/>");
                tr.append($("<th/>").text('Zip'));
                tr.append($("<td/>").text(r.zip));
                tbody.append(tr);
                tr = $("<tr/>");
                tr.append($("<th/>").text('Phone'));
                tr.append($("<td/>").text(r.phone));
                tbody.append(tr);
                tr = $("<tr/>");
                tr.append($("<th/>").text('Customer Service Phone'));
                tr.append($("<td/>").text(r.customerservice_phone));
                tbody.append(tr);

                table.append(tbody);
                col.append(table);
                row.append(col);
                /*
                 * col2
                 */
                col2 = $('<div/>').addClass('col-sm-5');
                table2 = $("<table/>").addClass('table table-condensed table-bordered');
                tbody2 = $("<tbody/>");
                tr2 = $("<tr/>");
                tr2.append($("<th width='200px'/>").text('Manufacturer'));
                tr2.append($("<td/>").text(r.business_name));
                tbody2.append(tr2);
                tr2 = $("<tr/>");
                tr2.append($("<th width='200px'/>").text('Brand'));
                tr2.append($("<td/>").text(r.brand));
                tbody2.append(tr2);
                tr2 = $("<tr/>");
                tr2.append($("<th width='200px'/>").text('Category'));
                tr2.append($("<td/>").text(r.category));
                tbody2.append(tr2);
                tr2 = $("<tr/>");
                tr2.append($("<th width='200px'/>").text('Product Type'));
                tr2.append($("<td/>").text(r.producttype));
                tbody2.append(tr2);
                tr2 = $("<tr/>");
                tr2.append($("<th width='200px'/>").text('Model Number'));
                tr2.append($("<td/>").text(r.model));
                tbody2.append(tr2);
                table2.append(tbody2);
                col2.append(table2);
                row.append(col2);
                /*
                 * col 3
                 */
                var col3 = $('<div/>').addClass('col-sm-2');
                var img = '<img src="' + product_folder + r.product_image + '" alt="image missing" class="thumbnail img-responsive"/>';
                var a = '<br/><button type="button" class="btn btn-warning addToMyProduct" data-proid="' + r.productid + '">Add</button>';

                col3.append(img);
                col3.append(a);
                row.append(col3);
                /*
                 * col 3 ends
                 */
                container.append(row);
            });

            return;
        }

        $(document).on('click', '.addToMyProduct', function (e) {
            var pro_id = $(this).attr('data-proid');
            $.ajax({
                type: 'GET',
                url: BASE_URL + '/products/ajax_addMyProduct/' + pro_id,
                dataType: 'json',
                success: function (response) {
                    var obj = response;
                    if (obj.error === false) {
                        if (obj.error_status == 'dup') {
                            var confirm_msg = 'You are trying to add multiple products, are you sure you are making a new registration ?';
                            if(confirm(confirm_msg)){
                                var url = BASE_URL + '/myproducts/product_add/' + obj.result;
                                window.location.replace(url);
                            }
                        } else {
                            var url = BASE_URL + '/myproducts/product_add/' + obj.result;
                            window.location.replace(url);
                        }
                    }
                },
                error: function (er) {
                    console.log("Brand Add Failed: error code - " + er.status);

                }
            });
        });

        $("#manufacturer").on('change input blur', function () {
            removeList();
            avail_models = [];
            avail_brands = [];
            var sel_str = $("#manufacturer").val();
            
            var sel_manuf_list = alasql("SELECT * FROM ? WHERE business_name like ? ", [products, sel_str]);
            
            var default_sel = '<option selected="selected" value=""> --Select-- </option>';
            var sel_brand = '';
            var sel_model = '';
            $.each(sel_manuf_list, function (key, val) {
                
                if ($.inArray(val.brand, avail_brands) === -1) {
                    avail_brands.push(val.brand);
                    sel_brand += '<option value="'+ val.brand +'" >'+ val.brand +'</option>';
                    
                    
                }
                
                if ($.inArray(val.model, avail_models) === -1) {
                    avail_models.push(val.model);
                    sel_model += '<option value="'+ val.model +'" >'+ val.model +'</option>';
                }
                
            });
            console.log(avail_models);
            products_fil_manuf = sel_manuf_list;
            //filters.business_name = manuf_str;
            $("#brand").html(default_sel + sel_brand);
            //$("#model").html(default_sel + sel_model);

        });

        $('#brand').on('change', function () {
            removeList();
            avail_models = [];
            avail_category = [];
            var sel_str = $("#brand").val();
            var sel_obj = alasql("SELECT * FROM ? WHERE brand = ? ", [products_fil_manuf, sel_str]);
            var default_sel = '<option selected="selected" value=""> --Select-- </option>';
            var sel_category = '';
            var sel_model = '';
            //need another filtered variable here which should be used in category;
            products_fil_brand = sel_obj;
            $.each(sel_obj, function (key, val) {
                
                if ($.inArray(val.category, avail_category) === -1) {
                    avail_brands.push(val.brand);
                    sel_category += '<option value="'+ val.category +'" >'+ val.category +'</option>';
                }
//                if ($.inArray(val.model, avail_models) === -1) {
//                    avail_models.push(val.model);
//                    sel_model += '<option value="'+ val.model +'" >'+ val.model +'</option>';
//                }
                
            });
            
            $("#category").html(default_sel + sel_category);
            $("#model").html(default_sel + sel_model);
            
        });
        
        $('#category').on('change', function () {
            removeList();
            avail_models = [];
            avail_producttype = [];
            var sel_str = $("#category").val();
            var sel_obj = alasql("SELECT * FROM ? WHERE category = ? ", [products_fil_brand, sel_str]);
            var default_sel = '<option selected="selected" value=""> --Select-- </option>';
            var sel_producttype = '';
            var sel_model = '';
            products_fil_category = sel_obj;
            $.each(sel_obj, function (key, val) {
                
                if ($.inArray(val.producttype, avail_producttype) === -1) {
                    avail_producttype.push(val.producttype);
                    sel_producttype += '<option value="'+ val.producttype +'" >'+ val.producttype +'</option>';
                }
//                if ($.inArray(val.model, avail_models) === -1) {
//                    avail_models.push(val.model);
//                    sel_model += '<option value="'+ val.model +'" >'+ val.model +'</option>';
//                }
                
            });
            
            $("#product_type").html(default_sel + sel_producttype);
            //$("#model").html(default_sel + sel_model);
            
        });
        
        $('#product_type').on('change', function () {
            removeList();
            avail_models = [];
            var sel_str = $("#product_type").val();
            var sel_obj = alasql("SELECT * FROM ? WHERE producttype = ? ", [products_fil_category, sel_str]);
            var default_sel = '<option selected="selected" value=""> --Select-- </option>';
            var sel_model = '';
            if(sel_str == ''){
                $('#model_sel').hide();
                $('#model').show();
            } else {
                $('#model_sel').show();
                $('#model').hide();
            }
            $.each(sel_obj, function (key, val) {
                
                if ($.inArray(val.model, avail_models) === -1) {
                    avail_models.push(val.model);
                    sel_model += '<option value="'+ val.model +'" >'+ val.model +'</option>';
                }
                
            });
            $("#model").autocomplete({
                source: avail_models
            });
            
           $("#model_sel").html(default_sel + sel_model);
            
        });

        $('#model_search').on('click', function () {
            
            var productType = $("#product_type").val();
            var sel_obj = '';
            if(productType !== null){
                sel_obj = products_fil_category;
                var model_str = $("#model_sel").val();
            } else {
                sel_obj = products;
                var model_str = $("#model").val();
            }
            var sel_list = alasql("SELECT * FROM ? WHERE model = ? ", [sel_obj, model_str]);
            makeView($('#list_products'), sel_list);
        });

        function getProducts() {
            $.ajax({
                type: 'GET',
                url: BASE_URL + "/products/ajax_getProducts",
                dataType: 'json',
                success: function (response) {
                    products = response.result;
                    var obj = response.result;
                    var default_sel = '<option selected="selected" value=""> --Select-- </option>';
                    var sel_manuf = '';
                    $.each(obj, function (key, val) {
                        if ($.inArray(val.business_name, avail_manuf) === -1) {
                            avail_manuf.push(val.business_name);
                            
                            sel_manuf += '<option value="'+ val.business_name +'" >'+ val.business_name +'</option>';
                        }
                        
                        if ($.inArray(val.model, avail_models) === -1) {
                            avail_models.push(val.model);
                            
                        }
                    });
                    $('#manufacturer').append(default_sel+sel_manuf);
                    console.log(avail_models);
                },
                error: function (er) {
                    console.log("Brand Add Failed: error code - " + er.status);

                }
            });
        }

        getProducts();
        
        

    });

</script>