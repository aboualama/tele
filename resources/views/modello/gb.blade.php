<div class="block-content">
    <div class="row push">
        <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
            <div class="form-group row items-push mb-0">
                @foreach($marcas as $marca)
                    <div class="col-md-4">
                        <div class="custom-control custom-block custom-control-primary mb-1">
                            <input type="radio" class="custom-control-input" id="gb_{{$marca['id']}}"
                                   name="gbRadio" data-gb="{{$marca['gb']}}" data-price="{{$marca['price']}}"
                                   onclick="handleClickgb(this)" value="{{$marca['id']}}">
                            <label class="custom-control-label" for="gb_{{$marca['id']}}">
                                                    <span class="d-block font-w400 text-center my-3">
                                                        <span class="font-size-h4 font-w600">{{$marca['gb']}}</span>
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

<div class="block-content" id="domande" style="display: none">
    <div class="row push">
        <div class="col-md 6">
            <div class="form-group">
                <label class="d-block">Stato telefono</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="example-rd-custom-inline1"
                           name="example-rd-custom-inline" value="q1" checked>
                    <label class="custom-control-label" for="example-rd-custom-inline1">Ottimo</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" value="q1_1" id="example-rd-custom-inline2"
                           name="example-rd-custom-inline">
                    <label class="custom-control-label" for="example-rd-custom-inline2">Buono</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" value="q1_2" id="example-rd-custom-inline3"
                           name="example-rd-custom-inline">
                    <label class="custom-control-label" for="example-rd-custom-inline3">Discreto</label>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="d-block">Scatola</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="scatola1" value="0" name="scatola" checked>
                    <label class="custom-control-label" for="scatola1">Si</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="scatola2" value="q2" name="scatola">
                    <label class="custom-control-label" for="scatola2">No</label>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="d-block">Accessori</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="accessori1" name="accessori" checked>
                    <label class="custom-control-label" for="accessori1" value="0">Si</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="accessori2" value="q3" name="accessori">
                    <label class="custom-control-label" for="accessori2">No</label>
                </div>
            </div>
        </div>
    </div>
    <div class="block-content block-content-full bg-body-light align-content-center">
                    <span class="btn btn-hero-primary px-4 text-center align-items-center" onclick="valutaSubito()">
                        <i class="fa fa-dollar-sign mr-1"></i> Valuta subito
                    </span>
    </div>
</div>
