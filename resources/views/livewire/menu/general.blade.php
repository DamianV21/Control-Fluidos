<div class="container-fluid py-4">

    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                @foreach ($listMaquinas as $item)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-header mx-0 p-2 text-center">
                                <div class="progress-days">
                                    <p
                                        class="text-xs font-weight-bolder
                                    <?php if ($days = $item->created_at->diffInDays($dateNow) >= 1) {
                                        echo 'text-danger';
                                    } else {
                                        echo 'text-success';
                                    }
                                    ?>">
                                        + {{ $days = $item->created_at->diffInDays($dateNow) }} <i
                                            class="fas fa-history"></i></p>
                                </div>
                                <img class="progress-img mt-3 mb-1" src="img/machine.png" alt="machine">
                                <div class="progress-outer mt-1">
                                    <div class="progress">
                                        <div class="progress-bar  progress-bar-striped progress-bar-primary"
                                            style="width:{{ (($item->volumen_inicial + $item->litros_recarga) * 100) / $item->maquinas->capacidad_tanque }}%;">
                                        </div>
                                        <div class="progress-value">
                                            <span>{{ (($item->volumen_inicial + $item->litros_recarga) * 100) / $item->maquinas->capacidad_tanque }}</span>%
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body  pt-0 p-3 text-center">
                                <h6 class="text-center mb-0 text-sm">{{ $item->maquinas->ids }}</h6>
                                <span class="text-xs">{{ $item->concentracion_final }} brix</span>
                                <hr class="horizontal dark my-2">
                                <h6 class="mb-0 text-xs"><i class="fas fa-prescription-bottle"></i> {{ ($item->litros_recarga * $item->concentracion_recarga * $item->maquinas->fac_refractor) / 100 }}
                                    <small>ltrs</small>
                                    | <i class="fas fa-swatchbook"></i> {{ $item->ph }} <small>pH</small>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Concentrado</h6>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-outline-primary btn-sm mb-0 disabled">PDF All</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pb-0">
                    <ul class="list-group">
                        @foreach ($listMaquinas as $item)
                            <li
                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">
                                        {{ $date = \Carbon\Carbon::parse($item->created_at)->format('F, m, Y') }}
                                    </h6>
                                    <span class="text-xs">#{{ $item->maquinas->ids }} - {{ $item->id }}</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    {{ $item->concentracion_final }} brix
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4 disabled"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.progress-value > span').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 1500,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
