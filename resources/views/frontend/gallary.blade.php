@extends('frontend.site.app')

@section('content')

<div class="container gallery-container">


    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/gallery/101.jpg">
                    <img src="images/gallery/101.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/102.jpg">
                    <img src="images/gallery/102.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/103.jpg">
                    <img src="images/gallery/103.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="images/gallery/104.jpg">
                    <img src="images/gallery/104.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/105.jpg">
                    <img src="images/gallery/105.jpg" alt="Bridge">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/gallery/106.jpg">
                    <img src="images/gallery/106.jpg" alt="Bridge">
                </a>
            </div>

        </div>

    </div>

</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
