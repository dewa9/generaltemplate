<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
		<!-- Bootstrap -->
    <link href="{{ URL::asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
	
	
	</head>
	<body>
	<br/>
		 <form action="{{url('/save')}}" method="post" class="form-horizontal form-label-left" id="form-addsiswa">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NIS 
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input class="form-control" name="nis" type="text" maxlength="5">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" maxlength="50">Nama 
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="nama"  required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea required="required" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
	<script src="{{ URL::asset('vendor/jquery/dist/jquery.min.js')}}"></script>
		<!-- Bootstrap -->
     <script src="{{ URL::asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	 <script src="{{ URL::asset('vendor/jsvalidation/js/jsvalidation.min.js')}}" type='text/javascript'></script>
	 {!! JsValidator::formRequest('App\Http\Requests\RequestStore', '#form-addsiswa') !!}
	</body>
</html>
