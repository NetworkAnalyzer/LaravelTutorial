@extends('layouts.layout')

@section('styles')

    <link href="{{ asset('css/plugins/blueimp/css/blueimp-gallery.min.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <h2>Lightbox image gallery</h2>
                        <p>
                            <strong>blueimp Gallery</strong> is a touch-enabled, responsive and customizable image & video gallery, carousel and lightbox, optimized for both mobile and desktop web browsers.
                            It features swipe, mouse and keyboard navigation, transition effects, slideshow functionality, fullscreen support and on-demand content loading and can be extended to display additional content types.
                            Full documentation you can find at:</a>
                        </p>

                        <div class="lightBoxGallery">
                            @foreach($galleries as $gallery)
                                <a href="img/gallery/{{ $gallery->file_name . '.' . $gallery->extension}}"data-gallery="">
                                    <img src="img/gallery/{{ $gallery->file_name . '_small.' . $gallery->extension }}">
                                </a>
                            @endforeach
                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')

    <!-- blueimp gallery -->
    <script src="{{ asset('js/plugins/blueimp/jquery.blueimp-gallery.min.js') }}"></script>

@endsection
