<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style type="text/css">
    	table {text-align: center; }
    	table th {width: 150px; }
    </style>
</head>
<body>

<form> 
Select a User:
<select name="users">
<option value="0" selected>Please Select</option>
<option value="1">Peter Griffin</option>
<option value="2">Lois Griffin</option>
<option value="3">Joseph Swanson</option>
<option value="4">Glenn Quagmire</option>
</select>
</form>
<div id="txtHint"><b>User info will be listed here.</b></div>

</body>
<script type="text/javascript">
	$ = jQuery.noConflict();
	$(function(){
		$('select').change(function(){
			var url = './bb_response.php';
			var data = $('select').val();
			$.ajax({
				url: url,
				method: 'POST',
				data: { 'q':data, 's':'no'},
				beforeSend: function(){}
			}).done(function(result){
				// alert(result);
				if(result == 'no'){
					$('#txtHint').text('No result!');
					return;
				}
				var result = JSON.parse(result);
				$('#txtHint').text('firstName: ' + result.first_name);
			});
		})
	})
</script>
</html>