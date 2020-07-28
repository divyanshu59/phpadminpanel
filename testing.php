<!DOCTYPE html>
<html>
<head>
<!-- Load jQuery and Sheetrock from CDNJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sheetrock/1.1.4/dist/sheetrock.min.js"></script>
</head>

<style>
table, tr,td,th{
font-size: 20px;
padding: 10px;
}

</style>
<body>

<table id="statistics" class="table table-condensed table-striped"></table>

</body>

<script>

var mySpreadsheet = 'https://docs.google.com/spreadsheets/d/1VbalJcOaDbu3-2HyFfY1VEfxuqAHUHuLg7c0gMlOiAg/edit#gid=0';
// Load an entire worksheet.
$('#statistics').sheetrock({
  url: mySpreadsheet
});

</script>

</html>

