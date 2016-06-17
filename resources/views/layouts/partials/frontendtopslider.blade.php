<div class="featured container">
    <div id="owl-demo" class="owl-carousel">
        @if(isset($categories))
            @foreach($categories as $c)
                <div class="zoom-container">
                    <div class="zoom-caption">
                        <a href="single.html">
                            <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                        </a>
                        <p>{{ $c->posts  }} - {!! $c->name !!}</p>
                    </div>
                    <img src="{{ asset('newspaper365/images/12.jpg') }}" />
                </div>
            @endforeach
        @endif
    </div>
</div>