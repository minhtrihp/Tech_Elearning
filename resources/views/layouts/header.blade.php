<!--Start my code-->
{{-- <div class="text-center w-100 pt-5 mt-5" id="head">
    <div class="row" id="margin-head"></div>
    <h1>Learn Coding With US</h1>
    <div class="input-group col-4 mx-auto row">
        <input type="text" class="form-control" placeholder="Type your course want to find!">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Go</button>
        </div>
    </div>
</div> --}}

<div class="text-center w-100 pt-5 mt-5" id="head">
    <div class="row" id="margin-head"></div>
    <h1>Learn Coding With US</h1>
     <div class="input-group col-4 mx-auto row">
     	<form role ="search" method="get" id="searchform" action="{{route('search')}}">
     		<div class="input-group-append">
		        <input type="text" class="form-control" value="" name="key" id="s" placeholder="Search!" size="90" required="" />
		        <button class="btn btn-primary" type="submit" id="searchsubmit" style="width:100px">Go</button>
	        </div>
	     </form>
    </div>
</div>
<!--End my code-->