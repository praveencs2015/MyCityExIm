
@extends('layout.layout') 
@section('title', 'Home') 
@section('content')
<?php

// following files need to be included


?>

	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
      
	
		<table border="1">
			<tbody>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum;?>">
			</tbody>
		</table>
<script type="text/javascript">
			document.f1.submit();
		</script>
</form>
@endsection