
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="images/setting/2021010682449404996.png">
    <meta content="Tarseya" name="author">
    <meta name="_token" content="LW90ehl6ZALdNAhMJgCDtSjjCr6i7rKBE2wQILV3">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/setting/2021010682449404996.png">
    <title>Freebie: 4 Bootstrap Gallery Templates</title>
</head>
<body>

<div class="container gallery-container">


    
    <div class="tz-gallery">

        <div class="row">
          @foreach($images as $image)
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="{{$image->image}}">
                    <img src="{{$image->image}}" alt="Bridge" style="width:350px;height:300px;">
                </a>
            </div>
            @endforeach

        </div>

    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>