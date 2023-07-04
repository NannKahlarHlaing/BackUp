@extends('layouts.template')

@section('content')

<div class="container report">
	<div class="row">
		<div class="col-3">
			<fieldset style="border: 1px solid #ddd !important;padding: 0 1.4em 1.4em 1.4em!important;margin: 0 0 1.5em 0 !important;">
				<legend>Reports</legend>
				<label>Report 1</label><br>
				<label>Report 2</label><br>
				<label>Report 3</label><br>
			</fieldset>
		</div>
		<div class="col-9">
			<fieldset style="border: 1px solid #ddd !important;padding: 0 1.4em 1.4em 1.4em!important;margin: 0 0 1.5em 0 !important;">
				<legend>Options</legend>
				<form>
				<label>Quick Date</label>&emsp;
				<select>
					<option value="today">Today</option>
					<option value="yesterday">Yesterday</option>
					<option value="lastweek">Last Week</option>
					<option value="lastmonth">Last Month</option>
					<option value="yeartodate">Year To Date</option>
					<option value="custom">Custom</option>
				</select><br>
				<div class="box">
				<label>Date From</label>&emsp;&nbsp;
				<input type="date" data-date-format="dd/mm/yyyy" width="150"><br>
				<label>Time From</label>&emsp;&nbsp;
				<input type="time" id="appt" name="appt" width="150"><br>
				<label>Date To</label>&emsp;&emsp;&ensp;
				<input type="date" data-date-format="dd/mm/yyyy" width="150"><br>
				<label>Time To</label>&emsp;&emsp;&ensp;
				<input type="time" id="appt" name="appt" width="150">
				</div>
				<br><button class="btn btn-primary">View Report</button>
				</form>
			</fieldset>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            var value = 'custom';
            if(optionValue == value){
                $(".box").show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
<style type="text/css">
	.report{
		background-color: white;
		padding : 30px;
		border-radius: 3px;
	}
</style>
@endsection