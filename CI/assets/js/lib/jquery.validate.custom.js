    /***************
    * Function  to validate date with the format yyyy-mm-dd
    *
    **/
    $.validator.addMethod('gp_date', function(value, element) {     
    return this.optional(element) || /^(\d{4})(-|\/)(([1]{1})([0-2]{1})|([0]{1})([0-9]{1}))(-|\/)(([0-2]{1})([1-9]{1})|([3]{1})([0-1]{1}))/.test(value);
    }, "Please use yyyy-mm-dd format only");

    /**************
    * Function  to validate alpha
    *
    **/
    $.validator.addMethod("alpha", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Please enter alphabets only");

    /**************
    * Function  to validate upto 2 decimal places
    *
    **/

    $.validator.addMethod('decimal', function(value, element) {
    return this.optional(element) || /^\d+(\.\d{0,2})?$/.test(value); 
    }, "Please enter value upto 2 decimal places only");



