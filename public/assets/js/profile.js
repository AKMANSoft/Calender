
var super_featured = '<?php echo $proj->super_featured; ?>';
$("#superFeaturedBtn").on('change', function() {
    if ($(this).is(':checked')) {
        super_featured = $(this).is(':checked');
        // alert(switchStatus);
        document.getElementById('valChecked').innerHTML = "On";
        //document.getElementById("valChecked").checked;
        
    }
    else {
        super_featured = $(this).is(':checked');
        // alert(switchStatus);
       document.getElementById('valChecked').innerHTML = "Off";
       //document.getElementById("superFeatured").checked;
    }
});

