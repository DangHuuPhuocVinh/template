$(document).ready(function() {
    $('.science').on("click", function load_ajax() {
        type: 'post'
        url: 'all-post2.php'
        datatype: "html"
        data: {
            $thumnail: $('.sci_img').val
            $cont: $('sci_post').val
        }
        success: function(result) {
            $('#result').html(thumnail + ";" + cont);
        }
    })




});