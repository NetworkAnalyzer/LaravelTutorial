@extends('layouts.layout')

@section('content')

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-5">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>画像投稿</h5>
                    </div>
                    <div class="ibox-content">
                        {{ Form::open(['method' => 'post', 'url' => route('gallery.store'), 'files' => true, 'class' => 'form-horizontal']) }}
                            <div class="form-control">
                                <div class="col-lg-10">
                                    {{ Form::file('image') }}
                                    <div class="preview" />
                                </div>
                            </div>
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-white" type="submit">Submit</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(function(){
            $('form').on('change', 'input[type="file"]', function(e) {
                var file = e.target.files[0],
                    reader = new FileReader(),
                    $preview = $(".preview");
                t = this;

                // exit processing if a file is not image
                if(file.type.indexOf("image") < 0){
                    return false;
                }

                // display the loaded image
                reader.onload = (function(file) {
                    return function(e) {
                        console.log(e);
                        // remove existing preview
                        $preview.empty();
                        // add <image> in the <div> has preview class
                        $preview.append($('<img>').attr({
                            src: e.target.result,
                            width: "150px",
                            class: "preview",
                            title: file.name
                        }));
                    };
                })(file);

                reader.readAsDataURL(file);
            });
        });

    </script>

@endsection
