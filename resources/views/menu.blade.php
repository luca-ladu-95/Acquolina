
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

        <li role="presentation"><a class="sld-btn-bor" href="#pizza" aria-controls="profile" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Pizze</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#bevande" aria-controls="profile" role="tab"
                                   data-toggle="tab"
                                   style="color:#A77489;">Bevande</a></li>

        <li role="presentation"><a class="sld-btn-bor" href="#vini" aria-controls="profile" role="tab" data-toggle="tab"
                                   style="color:#A77489;">Vini</a></li>


    </ul>

</div>



<div role="tabpanel" class="tab-pane fade" id="antipasti-mare">

    <!--menu list-->
    <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
            <h2 class="menu-section-title">Antipasti</h2>
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
    <div class="clearfix"></div>
</div>

