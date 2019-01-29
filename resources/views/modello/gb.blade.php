<h2> Seleziona La capacità: </h2>
<div class="row push">
    <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
        <div class="form-group row items-push justify-content-center">
            @foreach($marcas as $marca)
                <div class="col-auto">
                    <div class="custom-control custom-block custom-control-primary mb-1">
                        <input type="radio" class="custom-control-input" id="gb_{{$marca['id']}}"
                               name="gbRadio" data-gb="{{$marca['gb']}}" data-price="{{$marca['price']}}"
                               onclick="handleClickgb(this)" value="{{$marca['id']}}">
                        <label class="custom-control-label" for="gb_{{$marca['id']}}" style="">
                                                    <span class="d-block font-w400 text-center my-3">
                                                        <span class="font-size-h4 font-w600"><i class="fa fa-mobile-alt"
                                                                                                style="color: #F9C932;"> </i> {{  (int) $marca['gb']}} GB</span>
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

<div id="q1" style="display: none">
    <h2> In che stato ? </h2>
    <div class="row push">
        <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
            <div class="form-group row items-push justify-content-center">
                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block  custom-control-primary mb-1">
                        <input onclick="handleClickQ1(this)" type="radio" class="custom-control-input"
                               id="example-rd-custom-inline1"
                               name="example-rd-custom-inline" value="q1">
                        <label class="custom-control-label" for="example-rd-custom-inline1">
                    <span class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            Ottimo</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block custom-control-primary mb-1">
                        <input onclick="handleClickQ1(this)" type="radio" class="custom-control-input" value="q1_1"
                               id="example-rd-custom-inline2"
                               name="example-rd-custom-inline">
                        <label class="custom-control-label" for="example-rd-custom-inline2"><span
                                class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            Buono</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block custom-control-primary mb-1">
                        <input onclick="handleClickQ1(this)" type="radio" class="custom-control-input" value="q1_2"
                               id="example-rd-custom-inline3"
                               name="example-rd-custom-inline">
                        <label class="custom-control-label" for="example-rd-custom-inline3"><span
                                class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            Scarso</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="q2" style="display: none">
    <h2> Scatola originale ? </h2>
    <div class="row push">
        <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
            <div class="form-group row items-push justify-content-center">
                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block  custom-control-primary mb-1">
                        <input onclick="handleClickQ2(this)" type="radio" class="custom-control-input" id="scatola1"
                               name="scatola" value="0">
                        <label class="custom-control-label" for="scatola1">
                    <span class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            Si</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block custom-control-primary mb-1">
                        <input onclick="handleClickQ2(this)" type="radio" class="custom-control-input" value="q2"
                               id="scatola2"
                               name="scatola">
                        <label class="custom-control-label" for="scatola2"><span
                                class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            No</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div id="q3" style="display: none">
    <h2> Accessori originali ? </h2>
    <div class="row push">
        <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
            <div class="form-group row items-push justify-content-center">
                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block  custom-control-primary mb-1">
                        <input onclick="handleClickQ3(this)" type="radio" class="custom-control-input" id="accessori1"
                               name="accessori" value="0">
                        <label class="custom-control-label" for="accessori1">
                    <span class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            Si</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block custom-control-primary mb-1">
                        <input onclick="handleClickQ3(this)" type="radio" class="custom-control-input" value="q3"
                               id="accessori2"
                               name="accessori">
                        <label class="custom-control-label" for="accessori2"><span
                                class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            No</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<div id="q4" style="display: none">
    <h2> Documenti di acquisto ? </h2>
    <div class="row push">
        <div class="col-md-12" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
            <div class="form-group row items-push justify-content-center">
                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block  custom-control-primary mb-1">
                        <input onclick="handleClickQ4(this)" type="radio" class="custom-control-input" id="documenti1"
                               name="documenti" value="0">
                        <label class="custom-control-label" for="documenti1">
                    <span class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            Si</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="custom-control custom-block custom-control-primary mb-1">
                        <input onclick="handleClickQ4(this)" type="radio" class="custom-control-input" value="q4"
                               id="documenti2"
                               name="documenti">
                        <label class="custom-control-label" for="documenti2"><span
                                class="d-block font-w400 text-center my-3">
                        <span class="font-size-h4 font-w600">

                            No</span>
                           </span></label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="block-content" id="domande" style="display: none">
    <div class="block-content block-content-full bg-body-light align-content-center">
                    <span class="btn btn-hero-primary px-4 text-center align-items-center" onclick="valutaSubito1()">
                        <i class="fa fa-dollar-sign mr-1"></i> Valuta subito
                    </span>
    </div>
</div>
