<form id='tip'>
Tip somebody: <input name="tip_email" id="tip_email" type="text" size="30" onfocus="tip_div(1);" onblur="tip_div(2);"/>
 <input type="submit" id="submit" value="Skicka Tips"/>
 <input type="hidden" id="ad_id" name="ad_id" />
 </form>
<script>
$( "#tip" ).submit(function( e ) {
    e.preventDefault();
    $.ajax({
        url: tip.php,
        type:'POST',
        data:
        {
            tip_email: $('#tip_email').val(),
            ad_id: $('#ad_id').val()
        },
        success: function(msg)
        {

            alert('Email Sent');
        }               
    });
});
</script>