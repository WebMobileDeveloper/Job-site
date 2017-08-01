<!-- FOR THIS PAGE ONLY -->
<link href="<?php echo ASSETS_ROOT;?>css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo ASSETS_ROOT;?>css/jquery.tagsinput.min.css">

<!-- FOR THIS PAGE ONLY -->
<script type="text/javascript" src="<?php echo ASSETS_ROOT;?>js/jquery.tagsinput.min.js"></script>
<script type="text/javascript">
    $(".questions-category").select2({
        placeholder: "Select Post Category",
        allowClear: true,
        maximumSelectionLength: 3,
        /*width: "50%",*/
    });
    $(".questions-location").select2({
        placeholder: "Select Post Location",
    });
    $(".questions-experience").select2({
        placeholder: "Select Job Experience",
    });
    $(".questions-type").select2({
        placeholder: "Select Job type",
    });
    $(".questions-type").select2({
        placeholder: "Select Job type",
    });
    $(".questions-salary").select2({
        placeholder: "Select Job type",
    });
    $('#tags').tagsInput({
        width: 'auto'
    });
    $(function () {
        $("#publish_job").click(function () {
            $("#post_job").validate({
                rules: {
                    title: "required",
                    location: "required",
                    "category[]": "required",
                    job_type: "required",
                    experience: "required",
                    Salary: "required",
                    tags: "required",
                },
                errorPlacement: function (error, element) {
                    console.log(element.attr('name'));
                }

            });

            if ($("#post_job").valid() == false) {
                $("#error-span").fadeIn(1000).fadeOut(2000);
                return false;
            }

        });
        $('#post_job').submit(function(event) {
            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : '<?php echo site_url("job/post/save"); ?>', // the url where we want to POST
                data        : $('#post_job').serialize(), // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode          : true
            }).done(function(data) {
                if(data){
                    alert("Your job has been submitted to server!");
                    location.href='<?php echo site_url("job/post"); ?>';
                }else{
                    alert("Your submition has been failed. \n Please resubmit.");
                }
            });
            event.preventDefault();
        });
    });
</script>

<!-- CK-EDITOR -->
<script src="http://cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor');
</script>
