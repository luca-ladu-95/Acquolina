<div class="container-menu">
    <ul class="nav nav-tabs" role="tablist" style="margin:40px 0;">
        <li role="presentation"><a class="sld-btn-bor" href="#antipasti-mare" aria-controls="messages" role="tab"
                                   data-toggle="tab" style="color:#A77489;">Antipasti mare</a></li>

        <li role="presentation" class="active"><a class="sld-btn-bor" href="#antipasti-terra" aria-controls="home"
                                                  role="tab"
                                                  data-toggle="tab" style="color:#A77489;">Antipasti terra</a></li>


        <li role="presentation"><a class="sld-btn-bor" href="#primi-mare" aria-controls="messages" role="tab"
                                   data-toggle="tab" style="color:#A77489;">Primi di mare</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#primi-terra" aria-controls="messages" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Primi di terra</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#secondi-mare" aria-controls="profile" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Secondi di mare</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#secondi-terra" aria-controls="messages" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Secondi di terra</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#insalate" aria-controls="messages" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Insalate</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#dessert" aria-controls="profile" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Dessert</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#pizze" aria-controls="profile" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Pizze</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#bevande" aria-controls="profile" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Bevande</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#vini" aria-controls="profile" role="tab" data-toggle="tab"
                                   style="color:#A77489;">Vini</a></li>


    </ul>

</div>

<div class="tab-content">


    <div role="tabpanel" class="tab-pane fade" id="antipasti-mare">

        <!--antipasti terra-->
        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Antipasti di mare</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::ANTIPASTI_MARE)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>

    </div>

    <!--antipasti terra-->
    <div role="tabpanel" class="tab-pane fade" id="antipasti-terra">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Antipasti di terra</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::ANTIPASTI_TERRA)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--primi mare-->
    <div role="tabpanel" class="tab-pane fade" id="primi-mare">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Primi di mare</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::PRIMI_MARE)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--primi terra-->

    <div role="tabpanel" class="tab-pane fade" id="primi-terra">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Primi di terra</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::PRIMI_TERRA)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--secondi mare-->

    <div role="tabpanel" class="tab-pane fade" id="secondi-mare">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Secondi di mare</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::SECONDI_MARE)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <!--secondi terra-->

    <div role="tabpanel" class="tab-pane fade" id="secondi-terra">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Secondi di terra</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::SECONDI_TERRA)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--Insalate-->

    <div role="tabpanel" class="tab-pane fade" id="insalate">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Insalate</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::INSALATE)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--Dessert-->

    <div role="tabpanel" class="tab-pane fade" id="dessert">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Dessert</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::DESSERT)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--Pizze-->

    <div role="tabpanel" class="tab-pane fade" id="pizze">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Pizze</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::PIZZE)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                            <div class="menu-item-description"> {{$item->Italian_description}}
                            </div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!--Bevande-->

    <div role="tabpanel" class="tab-pane fade" id="bevande">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Bevande</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::BEVANDE)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Birre</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::BIRRE)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Caffetteria</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::CAFFETTERIA)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Digestivi</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::DIGESTIVI)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>

        <div class="clearfix"></div>
    </div>


    <!--Vino-->

    <div role="tabpanel" class="tab-pane fade" id="vini">


        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Vino sfuso</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::VINO_SFUSO)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Vino bianco</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::VINI_BIANCHI)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>

        <br>
        <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
                <h2 class="menu-section-title">Vino rosso</h2>
                <hr>

                @forelse($menu as $item)

                    @if($item->type === \App\Models\Enum::VINI_ROSSI)
                        <div class="menu-item">
                            <div class="menu-item-name"> {{$item->name}}</div>
                            <div class="menu-item-price"> {{$item->price}}</div>
                        </div>
                    @endif

                @empty
                    <p class="p-5">No dishes yet</p>
                @endforelse

            </div>
        </div>
        <div class="clearfix"></div>
    </div>


</div>

