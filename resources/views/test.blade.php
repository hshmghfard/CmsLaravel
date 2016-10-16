
<html>
<head>
	<title> آزمایشی </title>
</head>
<body>

	{{ Form::label('role') }}
	{{ Form::checkbox('role','no',false,['class'=>'checkclick','onClick'=>'getcheck()']) }}


	<h1> <?php use App\lib\Jdf;$Jdf=new Jdf();echo $Jdf->jdate('Y/n/j-H:i:s',$olddate);  ?> </h1>
	<h2> <?php echo $Jdf->jdate('Y/n/j-H:i:s',$datef); ?> </h2>


	<div class="box1"> 
		{!! Form::open(['url'=>'test']) !!}

		<div class="form-input">
			{!! Form::label('tag','نام دسته',['style'=>'width:100px;']) !!}
			{!! Form::text('tag',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
		</div>


		<div class="form-input">
			
			{!! Form::submit('ذخیره',['class'=>'btn','style'=>'margin-right:20px;'])!!}
			
		</div>

		{!! Form::close() !!}
	</div>

	{{ Form::label('role2') }}
	{{ Form::checkbox('role2','yes',true) }}
	
	<h1> <?php echo $finish; ?> </h1>
	<h2> <?php echo $dates; ?> </h2>
	<h3> <?php echo $datef; ?> </h3>



	<a href="<?= Url('/zarin'); ?>"> ورود به زرین پال </a>



	<?php
    	$url=Url('/add');
	?>
	<script type="text/javascript">
        add_product = function(id)
        {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
            $.ajax({
                url:'<?= $url ?>',
                type:"POST",
                data:'product_id='+id,
                success:function(data)
                {
                    // alert(data);
                    $("#cart").html(data);
                }
            });
        }
	</script>


	<script type="text/javascript">
		function getcheck()
		{
			$(document).ready(function() {
	    		$('.checkclick:checkbox').bind('change', function(e) {
	      			if ($(this).is(':checked')) {
	        			$(".box1").hide();
	      			}
	      			else {
	        			$(".box1").show();
	      			}
	    		})
  			});
		}
	</script>
	<script src="<?= asset('resources/js/jquery-1.8.3.min.js'); ?>"></script>
</body>
</html>
	
