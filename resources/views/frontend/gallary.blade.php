@extends('frontend.site.app')

@section('content')

<div class="container gallery-container">


    
    <div class="tz-gallery">

        <div class="row">
          @foreach($images as $image)
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/gallery/101.jpg">
                    <img src="{{$image->image}}" alt="Bridge">
                </a>
            </div>
            @endforeach

        </div>

    </div>

</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
