<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html lang="en">
<head>
  <title>Laravel Multiple File Upload Example</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style type="text/css">
  body {
  background-color:#1d1d1d !important;
  font-family: "Asap", sans-serif;
  color:#989898;
  margin:10px;
  font-size:16px;
}

#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }
</style>
</head>
<body>
  <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger" style="margin-top: 20px">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success" style="margin-top: 20px">
          {{ session('success') }}
        </div> 
        @endif

    <h3 class="jumbotron">Laravel Multiple File Upload</h3>
<form method="post" action="{{url('form')}}" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="col-md-6">
      <input type="file" class="form-control" id="images" name="filename[]" multiple/>
  </div>

<!--
  ////////////////////////////////////////////////////////////////////////////////////

        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>
-->
        <button type="submit" class="btn btn-primary">Submit</button>

  </form>

<!--
        <div class="row">
          <strong>Original Image:</strong>
          <br/>
          @foreach($image as $img)
         <div class="col-lg-3 col-md-4 col-xs-6 thumb" style="margin-bottom: 10px;">
              <img class="img-thumbnail" src="/images/{{$img->filename}}" />
        </div>
        @endforeach
      </div>
                   
  </div>
-->
<!--  -->
<div class="container page-top">
<div class="row">
  @foreach($image as $img)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="/images/{{$img->filename}}?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                    <img  src="/images/{{$img->filename}}?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid" alt="">
                   
                </a>
            </div>
  @endforeach
</div>
</div>

<!--
<div class="container">
    <div id="main_area">
        <!- Slider ->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!- Bottom switcher of slider ->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="http://placehold.it/150x150&text=zero">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!- Top part of the slider ->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!- Carousel items ->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/470x480&text=zero"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/470x480&text=1"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/470x480&text=2"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/470x480&text=3"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/470x480&text=4"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/470x480&text=5"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="http://placehold.it/470x480&text=6"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="http://placehold.it/470x480&text=7"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="http://placehold.it/470x480&text=8"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="http://placehold.it/470x480&text=9"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="http://placehold.it/470x480&text=10"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="http://placehold.it/470x480&text=11"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="http://placehold.it/470x480&text=12"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="http://placehold.it/470x480&text=13"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="http://placehold.it/470x480&text=14"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="http://placehold.it/470x480&text=15"></div>
                                </div>
                                <!- Carousel nav ->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-/Slider->
        </div>
      -->

<script type="text/javascript">
  $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
    
    $(this).addClass('transition');
  }, function(){
        
    $(this).removeClass('transition');
  });
});
    
</script>
</body>
</html>