<!-- FOR THIS PAGE ONLY -->
<link href="<?php echo ASSETS_ROOT;?>css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo ASSETS_ROOT;?>css/jquery.tagsinput.min.css">

<!-- FOR THIS PAGE ONLY -->
<script type="text/javascript" src="<?php echo ASSETS_ROOT;?>js/jquery.tagsinput.min.js"></script>



<script type="text/javascript">


    $(".questions-category").select2({
        placeholder: "Select Post Category",
        allowClear: true,
        maximumSelectionLength: 3
        /*width: "50%",*/
    });
    $(".questions-experience").select2({
        placeholder: "Select Job Experience"
    });
    $(".questions-type").select2({
        placeholder: "Select Job type"
    });
    $('#tags').tagsInput({
        width: 'auto'
    });
    $(function () {

        $('#post_job').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY/MM/DD'
        });

        $("#publish_job").click(function () {
            $("#post_job").validate({
                rules: {
                    title: "required",
                    "category[]": "required",
                    job_type: "required",
                    experience: "required",
                    Salary: "required",
                    tags: "required",
                    price: "required",
                    date: "required"
                },
                errorPlacement: function (error, element) {
                }

            });

            if ($("#post_job").valid() == false) {
                $("#error-span").fadeIn(1000).fadeOut(2000);
                return false;
            }

        });
        $('#post_job').submit(function(event) {
            event.preventDefault();
            if(!confirm("Are you sure post a job?")){
                return false;
            }
            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : '<?php echo site_url("job/post/save"); ?>', // the url where we want to POST
                data        : $('#post_job').serialize(), // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode          : true
            }).done(function(data) {
                if(data){
                    $("#alertTitle").html("Congratulations!!!");
                    $("#alertContent").html("<br><br> Your job has been submitted to server! <br><br>");
                    $("#alertModal").modal();
                    afterHiddenModal='<?php echo site_url("job/post"); ?>';

                }else{
                    alert("Your submition has been failed. \n Please resubmit.");
                }
            });
        });
    });
</script>

<!-- CK-EDITOR -->
<script src="<?php echo ASSETS_ROOT; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">

    CKEDITOR.replace('description');
    CKEDITOR.replace('specification');
    CKEDITOR.replace('technical_guidance');
</script>
