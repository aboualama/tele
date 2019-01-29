<div class="block block-rounded  text-center">
    <h2> Seleziona il modello?</h2>
    <div class="row push">
        <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
            <div class="form-group row items-push justify-content-center">
                @foreach($marcas as $marca)
                    <div class="col-6 col-sm-2 no-gutters">
                        <div class="custom-control custom-block custom-control-primary mb-1">
                            <input type="radio" class="custom-control-input" id="modello_{{$marca->id}}"
                                   name="modelloRadio" onclick="handleClickModello(this)" value="{{$marca->id}}">
                            <label class="custom-control-label" for="modello_{{$marca->id}}"
                                   style="border: 2px solid #fff;">
                                <img src="{{asset('/uploads/modello')}}/{{$marca->img}}" class="img-fluid">
                                                    <span class="d-block font-w400 text-center my-3">
                                                        <span class="font-size-h4 font-w600">{{$marca->title}}</span>
                                                    </span>
                            </label>
                            <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
