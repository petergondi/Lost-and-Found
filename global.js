$('input#id-submit').on('click', function(){
  var name=$('input#search').val();
if($.trim(name) !=''){
  $.post('search.php',{search:name}, function(data){
    $('div#submit-data').text(data);
});
}
});
//<script type="javascript">
   // var a = <?php echo json_encode($array); ?>;
//</script>