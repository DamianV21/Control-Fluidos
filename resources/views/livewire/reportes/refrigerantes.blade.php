
<div>

    <!-- Formulario-Consulta -->
    <div class="card shadow mb-4">
        <div class="card-body text-sm">

            <div class="row">
                <div class="col-md-3">
                    <h6><strong>Elige una planta</strong></h6>
                    <div class="form-group">
                        <select wire:model="planta" class="form-control">
                            <option value="0">Ninguno</option>
                            @foreach ($plantas as $planta)
                                <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Elige una maquina</strong></h6>
                    <div class="form-group">
                        <select wire:model="maquina" class="form-control">
                            <option selected value="0">Ninguno</option>
                            @foreach ($maquinas as $maquina)
                                <option value="{{ $maquina->id }}">{{ $maquina->ids }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha desde</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateFrom" class="form-control flatpickr"
                            placeholder="Click para elegir">
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha hasta</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateTo" class="form-control flatpickr"
                            placeholder="Click para elegir">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <a class="btn btn-danger text-sm btn-block {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="{{ url('report/pdf' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}" target="_blank">
                        <i class="fa fa-file-pdf"></i> Generar PDF </a>

                    <!-- <a class="btn btn-success btn-block {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="{{ url('report/excel' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}"
                        target="_blank">
                        <i class="fa fa-calculator"></i> Exportar a Excel </a>-->
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3 pt-2">
                    <button wire:click="Consulta()"
                        class="btn  btn-block text-sm text-white {{ count($data) > 1 ? 'disabled' : '' }}"
                        style="background-color: #5e80b7;"> <i class="fa fa-search"></i>
                        Consultar
                    </button>

                    <a class="btn btn-block text-sm text-white {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="/reportes" style="background-color: #383838">
                        <i class="fas fa-paper-plane"></i> Nuevo reporte
                    </a>
                </div>
            </div>
        </div>


    </div>


    <!-- Graficas -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

            </center>
        @else
            <div class="container mt-5">
                <div class="card ">
                    <div style="text-align: center" class="card-body ">

                        <strong> Reporte General por Maquina</strong>
                        <br>
                        <span>Desde: {{ \Carbon\Carbon::parse($dateFrom)->formatLocalized('%d de %B') }} Hasta:
                            {{ \Carbon\Carbon::parse($dateTo)->formatLocalized('%d de %B') }}</span>
                        <br>
                        <span>{{ $nombre_maquina }}</span>
                        <br>
                        <span>{{ $nombre_empresa }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <figure class="highcharts-figure">
                            <div id="grafica"></div>

                        </figure>
                    </div>
                </div>
        @endif
    </div>
    <br>

    <!-- Datos Generales -->
    <div class="col-md-12">

        @if ($data->count() == 0)
        <div class="card shadow mb-4">
            <div class="card-body text-sm">

                <center>

                    <svg class="animated" width="320px" id="freepik_stories-online-report" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-online-report:not(.animated) .animable {opacity: 0;}svg#freepik_stories-online-report.animated #el2wkgcbc2zo6 {animation: 1.6s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight;animation-delay: 0s;}svg#freepik_stories-online-report.animated #elb8rehrnrgkt {animation: 1.6s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight;animation-delay: 0.8s;opacity: 0}svg#freepik_stories-online-report.animated #freepik--background-simple--inject-2 {animation: 1.6s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight;animation-delay: 0s;}svg#freepik_stories-online-report.animated #freepik--Plant--inject-2 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedRight,1.5s Infinite  linear shake;animation-delay: 0s,1s;}svg#freepik_stories-online-report.animated #elt2vqa2j8l1 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.0s;}svg#freepik_stories-online-report.animated #elfiizdodxh4m {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.011965811965811965s;opacity: 0}svg#freepik_stories-online-report.animated #elj1l5z3263po {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.02393162393162393s;opacity: 0}svg#freepik_stories-online-report.animated #elgiwkb7huc5v {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.035897435897435895s;opacity: 0}svg#freepik_stories-online-report.animated #elq79uo02lgj9 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.04786324786324786s;opacity: 0}svg#freepik_stories-online-report.animated #eloz5i0kitddj {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.059829059829059825s;opacity: 0}svg#freepik_stories-online-report.animated #elclpp2jjlnns {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.07179487179487179s;opacity: 0}svg#freepik_stories-online-report.animated #elbchmufs2tyt {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.08376068376068375s;opacity: 0}svg#freepik_stories-online-report.animated #elw3abi0pbk18 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.09572649572649572s;opacity: 0}svg#freepik_stories-online-report.animated #elprs3ysnb00r {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.10769230769230768s;opacity: 0}svg#freepik_stories-online-report.animated #elstfu6hg3h8 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.11965811965811965s;opacity: 0}svg#freepik_stories-online-report.animated #els4uhnb99gu {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.1316239316239316s;opacity: 0}svg#freepik_stories-online-report.animated #eld2ihfjffqi9 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.14358974358974358s;opacity: 0}svg#freepik_stories-online-report.animated #elteiw4p0330g {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.15555555555555556s;opacity: 0}svg#freepik_stories-online-report.animated #elqtfvnhyvya {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.1675213675213675s;opacity: 0}svg#freepik_stories-online-report.animated #el401ugctsfgw {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.17948717948717946s;opacity: 0}svg#freepik_stories-online-report.animated #elt6xj9fe9vh {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.19145299145299144s;opacity: 0}svg#freepik_stories-online-report.animated #elsr7wmuh71c8 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.20341880341880342s;opacity: 0}svg#freepik_stories-online-report.animated #elne5u53qi0b {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.21538461538461537s;opacity: 0}svg#freepik_stories-online-report.animated #elqgsw3t3s5tl {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.22735042735042732s;opacity: 0}svg#freepik_stories-online-report.animated #el9sewt47x60a {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.2393162393162393s;opacity: 0}svg#freepik_stories-online-report.animated #el0pc3mqzqitz {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.2512820512820513s;opacity: 0}svg#freepik_stories-online-report.animated #elb0fivwr1ysp {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.2632478632478632s;opacity: 0}svg#freepik_stories-online-report.animated #else9akdba5hn {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.2752136752136752s;opacity: 0}svg#freepik_stories-online-report.animated #eliggyv6t48bo {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.28717948717948716s;opacity: 0}svg#freepik_stories-online-report.animated #eljiugj01xx5 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.29914529914529914s;opacity: 0}svg#freepik_stories-online-report.animated #elih5cz4dmpql {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.3111111111111111s;opacity: 0}svg#freepik_stories-online-report.animated #eloretjonlzdg {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.32307692307692304s;opacity: 0}svg#freepik_stories-online-report.animated #elpixqqpuzelf {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.335042735042735s;opacity: 0}svg#freepik_stories-online-report.animated #elhxca7jn1y0d {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.347008547008547s;opacity: 0}svg#freepik_stories-online-report.animated #el5ml0p73na8x {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.3589743589743589s;opacity: 0}svg#freepik_stories-online-report.animated #elsxem691ff1t {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.3709401709401709s;opacity: 0}svg#freepik_stories-online-report.animated #elkqxwx2rbfzq {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.3829059829059829s;opacity: 0}svg#freepik_stories-online-report.animated #elfnuj14gxya6 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.39487179487179486s;opacity: 0}svg#freepik_stories-online-report.animated #elevaz6qglo2f {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.40683760683760684s;opacity: 0}svg#freepik_stories-online-report.animated #eluqt610hywi {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.41880341880341876s;opacity: 0}svg#freepik_stories-online-report.animated #el9aoleju12wh {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.43076923076923074s;opacity: 0}svg#freepik_stories-online-report.animated #el77257ikk8x {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.4427350427350427s;opacity: 0}svg#freepik_stories-online-report.animated #el1wjl38xq9hi {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.45470085470085464s;opacity: 0}svg#freepik_stories-online-report.animated #ela1piexttb6l {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.4666666666666666s;opacity: 0}svg#freepik_stories-online-report.animated #elxwabvhvpfn9 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.4786324786324786s;opacity: 0}svg#freepik_stories-online-report.animated #ely0c53rgf21j {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.4905982905982906s;opacity: 0}svg#freepik_stories-online-report.animated #elv9sul8eyofr {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5025641025641026s;opacity: 0}svg#freepik_stories-online-report.animated #elyt9u43qdq6 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5145299145299145s;opacity: 0}svg#freepik_stories-online-report.animated #elbfx4eqsgprw {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5264957264957264s;opacity: 0}svg#freepik_stories-online-report.animated #elhr38cfb9qvl {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5384615384615384s;opacity: 0}svg#freepik_stories-online-report.animated #elozvni3uvw1 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5504273504273504s;opacity: 0}svg#freepik_stories-online-report.animated #eli7mit31w9n {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5623931623931624s;opacity: 0}svg#freepik_stories-online-report.animated #el2j6035r01y9 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5743589743589743s;opacity: 0}svg#freepik_stories-online-report.animated #eleu55yukc24 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5863247863247862s;opacity: 0}svg#freepik_stories-online-report.animated #elmoxii2s95m {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.5982905982905983s;opacity: 0}svg#freepik_stories-online-report.animated #el4foj6g73i22 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.6102564102564102s;opacity: 0}svg#freepik_stories-online-report.animated #elyd40s2avml {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.6222222222222222s;opacity: 0}svg#freepik_stories-online-report.animated #elfdqg44xd4z {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.6341880341880342s;opacity: 0}svg#freepik_stories-online-report.animated #elpu8i6tjtck {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.6461538461538461s;opacity: 0}svg#freepik_stories-online-report.animated #elmo8x11ltx6 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.6581196581196581s;opacity: 0}svg#freepik_stories-online-report.animated #el550q36u0i13 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.67008547008547s;opacity: 0}svg#freepik_stories-online-report.animated #elejl449ktfcf {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.682051282051282s;opacity: 0}svg#freepik_stories-online-report.animated #elsy9vtzwtagl {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.694017094017094s;opacity: 0}svg#freepik_stories-online-report.animated #elnruimb1fp49 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7059829059829059s;opacity: 0}svg#freepik_stories-online-report.animated #elomxtto52qx {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7179487179487178s;opacity: 0}svg#freepik_stories-online-report.animated #elknghum0jc5g {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7299145299145299s;opacity: 0}svg#freepik_stories-online-report.animated #elku4km4imdpj {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7418803418803418s;opacity: 0}svg#freepik_stories-online-report.animated #elrnhphnsq59 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7538461538461538s;opacity: 0}svg#freepik_stories-online-report.animated #el20xrw1e4ujv {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7658119658119658s;opacity: 0}svg#freepik_stories-online-report.animated #el2n1wwsa5lvy {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7777777777777777s;opacity: 0}svg#freepik_stories-online-report.animated #elp22cplb7ge {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.7897435897435897s;opacity: 0}svg#freepik_stories-online-report.animated #elhgrs9kxl30t {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8017094017094016s;opacity: 0}svg#freepik_stories-online-report.animated #elqf51lmikb {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8136752136752137s;opacity: 0}svg#freepik_stories-online-report.animated #elp1pky4nq3f {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8256410256410256s;opacity: 0}svg#freepik_stories-online-report.animated #elabgv8imv90d {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8376068376068375s;opacity: 0}svg#freepik_stories-online-report.animated #elvohjwj0aq3 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8495726495726496s;opacity: 0}svg#freepik_stories-online-report.animated #el30mwqtaaekc {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8615384615384615s;opacity: 0}svg#freepik_stories-online-report.animated #elt3bny691h1t {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8735042735042734s;opacity: 0}svg#freepik_stories-online-report.animated #elmi5cba86irn {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8854700854700854s;opacity: 0}svg#freepik_stories-online-report.animated #el8a4hucu87lh {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.8974358974358974s;opacity: 0}svg#freepik_stories-online-report.animated #el250hw1uei3v {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9094017094017093s;opacity: 0}svg#freepik_stories-online-report.animated #elql43y4fadl {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9213675213675213s;opacity: 0}svg#freepik_stories-online-report.animated #el4yjwb4r5od7 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9333333333333332s;opacity: 0}svg#freepik_stories-online-report.animated #elgzw5lnykk95 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9452991452991453s;opacity: 0}svg#freepik_stories-online-report.animated #elaek8q0moym {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9572649572649572s;opacity: 0}svg#freepik_stories-online-report.animated #elhr11qygp21 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9692307692307691s;opacity: 0}svg#freepik_stories-online-report.animated #elx7ypy3f0qv {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9811965811965812s;opacity: 0}svg#freepik_stories-online-report.animated #elofda8xyyrm {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 0.9931623931623931s;opacity: 0}svg#freepik_stories-online-report.animated #eljrpyi41slhj {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.005128205128205s;opacity: 0}svg#freepik_stories-online-report.animated #elnypk5muxru {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.017094017094017s;opacity: 0}svg#freepik_stories-online-report.animated #elgrzeiuirvao {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.029059829059829s;opacity: 0}svg#freepik_stories-online-report.animated #eldp33aywmic {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.0410256410256409s;opacity: 0}svg#freepik_stories-online-report.animated #el3j7rn4ecnfh {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.0529914529914528s;opacity: 0}svg#freepik_stories-online-report.animated #elv20gqiynuqb {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.064957264957265s;opacity: 0}svg#freepik_stories-online-report.animated #elek1zr4k8wch {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.0769230769230769s;opacity: 0}svg#freepik_stories-online-report.animated #el3785rkccvau {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.0888888888888888s;opacity: 0}svg#freepik_stories-online-report.animated #el4y5vovbztte {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1008547008547007s;opacity: 0}svg#freepik_stories-online-report.animated #elqt98uofdhi {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1128205128205126s;opacity: 0}svg#freepik_stories-online-report.animated #el3l4pno5jb0f {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1247863247863248s;opacity: 0}svg#freepik_stories-online-report.animated #elwgt8c4ugjl {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1367521367521367s;opacity: 0}svg#freepik_stories-online-report.animated #elvsggwq2xrue {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1487179487179486s;opacity: 0}svg#freepik_stories-online-report.animated #elu48ctflw73s {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1606837606837606s;opacity: 0}svg#freepik_stories-online-report.animated #elrtjndkjmc8 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1726495726495725s;opacity: 0}svg#freepik_stories-online-report.animated #elh8wu34yq5qi {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1846153846153846s;opacity: 0}svg#freepik_stories-online-report.animated #el08as2whbtqt5 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.1965811965811965s;opacity: 0}svg#freepik_stories-online-report.animated #elgri6db92kv {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2085470085470085s;opacity: 0}svg#freepik_stories-online-report.animated #el9z057cp6kbu {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2205128205128204s;opacity: 0}svg#freepik_stories-online-report.animated #elv0hf6jgyin {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2324786324786323s;opacity: 0}svg#freepik_stories-online-report.animated #el37xrkv4p78i {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2444444444444445s;opacity: 0}svg#freepik_stories-online-report.animated #elkkx6w8q6lu {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2564102564102564s;opacity: 0}svg#freepik_stories-online-report.animated #elj7mfdh8ukh {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2683760683760683s;opacity: 0}svg#freepik_stories-online-report.animated #elch3s4dg2gu7 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2803418803418802s;opacity: 0}svg#freepik_stories-online-report.animated #elwuznnlstqfg {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.2923076923076922s;opacity: 0}svg#freepik_stories-online-report.animated #eltnneoxu3x5 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.304273504273504s;opacity: 0}svg#freepik_stories-online-report.animated #el94djhrb4igv {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.3162393162393162s;opacity: 0}svg#freepik_stories-online-report.animated #elj5pdzcqlkh8 {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.3282051282051281s;opacity: 0}svg#freepik_stories-online-report.animated #elyp93pt5o67r {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.34017094017094s;opacity: 0}svg#freepik_stories-online-report.animated #elqi8o6y3ccj {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.352136752136752s;opacity: 0}svg#freepik_stories-online-report.animated #el6t13v4a2lti {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.364102564102564s;opacity: 0}svg#freepik_stories-online-report.animated #elek4mbf89yw {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.376068376068376s;opacity: 0}svg#freepik_stories-online-report.animated #els48fq2o8ysg {animation: 1.4s 1 forwards linear zoomIn;animation-delay: 1.388034188034188s;opacity: 0}svg#freepik_stories-online-report.animated #freepik--Screen--inject-2 {animation: 1.4s 1 forwards linear zoomIn,1.5s Infinite  linear floating;animation-delay: 0.0s,1.4s;}svg#freepik_stories-online-report.animated #freepik--Character--inject-2 {animation: 1.3s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut,1.5s Infinite  linear wind;animation-delay: 0s,1.3s;}            @keyframes lightSpeedRight {              from {                transform: translate3d(50%, 0, 0) skewX(-20deg);                opacity: 0;              }              60% {                transform: skewX(10deg);                opacity: 1;              }              80% {                transform: skewX(-2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }                    @keyframes shake {                10%, 90% {                    transform: translate3d(-1px, 0, 0);                  }                  20%, 80% {                    transform: translate3d(2px, 0, 0);                  }                  30%, 50%, 70% {                    transform: translate3d(-4px, 0, 0);                  }                  40%, 60% {                    transform: translate3d(4px, 0, 0);                  }            }                    @keyframes zoomIn {                0% {                    opacity: 0;                    transform: scale(0.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }                    @keyframes floating {                0% {                    opacity: 1;                    transform: translateY(0px);                }                50% {                    transform: translateY(-10px);                }                100% {                    opacity: 1;                    transform: translateY(0px);                }            }                    @keyframes zoomOut {                0% {                    opacity: 0;                    transform: scale(1.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }                    @keyframes wind {                0% {                    transform: rotate( 0deg );                }                25% {                    transform: rotate( 1deg );                }                75% {                    transform: rotate( -1deg );                }            }        </style><g id="freepik--background-simple--inject-2" class="animable" style="transform-origin: 246.144px 229.987px;"><path d="M464.86,277.39c-14.73,39.43-44.81,82.11-87.14,94.75-64,19.1-71.6,70.65-186.16,65.87A230.92,230.92,0,0,1,142,430.75,194.41,194.41,0,0,1,118.73,423C51.8,395.89,16.89,336.23,14,273.81c-3.82-82.11,53.46-121.24,90.69-144.15S186.79,18,299.44,21.77a224.06,224.06,0,0,1,50.92,7.44c37.91,10.26,76.44,32.95,98.84,66.12q2.52,3.75,4.82,7.64C484,153.82,484.93,223.63,464.86,277.39Z" style="fill: rgb(94, 128, 183); transform-origin: 246.144px 229.987px;" id="el2wkgcbc2zo6" class="animable"></path><g id="elb8rehrnrgkt"><path d="M464.86,277.39c-14.73,39.43-44.81,82.11-87.14,94.75-64,19.1-71.6,70.65-186.16,65.87A230.92,230.92,0,0,1,142,430.75,194.41,194.41,0,0,1,118.73,423C51.8,395.89,16.89,336.23,14,273.81c-3.82-82.11,53.46-121.24,90.69-144.15S186.79,18,299.44,21.77a224.06,224.06,0,0,1,50.92,7.44c37.91,10.26,76.44,32.95,98.84,66.12q2.52,3.75,4.82,7.64C484,153.82,484.93,223.63,464.86,277.39Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 246.144px 229.987px;" class="animable"></path></g></g><g id="freepik--Pictures--inject-2" class="animable" style="transform-origin: 408.685px 163.045px;"><g id="eli10h93d45y"><g style="opacity: 0.3; transform-origin: 434.625px 163.045px;" class="animable"><rect x="396.25" y="109.32" width="76.75" height="107.45" style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 434.625px 163.045px;" id="ela9lzditl5d7" class="animable"></rect><rect x="398.86" y="112.97" width="71.53" height="100.14" style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 434.625px 163.04px;" id="elv1dpbnp811h" class="animable"></rect><rect x="417.65" y="139.29" width="33.94" height="47.51" style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 434.62px 163.045px;" id="el3vkpxkol4r6" class="animable"></rect></g></g><g id="el5y0vfiaqbmm"><g style="opacity: 0.3; transform-origin: 365.085px 139px;" class="animable"><rect x="344.37" y="110" width="41.43" height="58" style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 365.085px 139px;" id="el5d2ynhrfdso" class="animable"></rect><rect x="345.78" y="111.97" width="38.61" height="54.05" style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 365.085px 138.995px;" id="elu1jyibkb55i" class="animable"></rect><rect x="355.93" y="126.18" width="18.32" height="25.65" style="fill: none; stroke: rgb(0, 0, 0); stroke-miterlimit: 10; transform-origin: 365.09px 139.005px;" id="el4uhft9hcd9k" class="animable"></rect></g></g></g><g id="freepik--Plant--inject-2" class="animable animator-active" style="transform-origin: 391.825px 376.45px;"><line x1="397.17" y1="434.2" x2="397.17" y2="356.72" style="fill: none; stroke: rgb(94, 94, 94); stroke-miterlimit: 10; stroke-width: 4px; transform-origin: 397.17px 395.46px;" id="elhmx8sl2dbzj" class="animable"></line><line x1="387.53" y1="435.77" x2="387.53" y2="328.76" style="fill: none; stroke: rgb(94, 94, 94); stroke-miterlimit: 10; stroke-width: 4px; transform-origin: 387.53px 382.265px;" id="elb7g9r0afbir" class="animable"></line><line x1="409.39" y1="436.29" x2="409.39" y2="398.71" style="fill: none; stroke: rgb(94, 94, 94); stroke-miterlimit: 10; stroke-width: 4px; transform-origin: 409.39px 417.5px;" id="el6fuzqplc7ny" class="animable"></line><path d="M383.78,339.31s-1.93-3.54-8.38-11.28-33.21-28.7-33.21-28.7,15.16,8.06,20,12.25,11.29,9.35,11.29,9.35-18.06-19.66-20-20.95,18.37,15.47,18.37,15.47-7.73-15.47-11.6-20.63S349,277.41,349,277.41s21,28,21.93,29.66,5.16,8.71,5.16,8.71l-7.42-19.35,9,15.8s-12.9-26.76-13.54-28.05,9,12.57,9,12.57l-8.38-25.14,19.35,39.65-1.29-15.47,3.54,16.12,1-39.66,2.26,39.33s3.54-25.14,4.19-30.3,1-10.64,1-10.64-.65,34.17-.65,35.14-.64,8.71-.64,8.71l6.12-18.38c1.29-3.87,2.58-17.09,3.23-19s-3.23,29.66-3.55,31a36.31,36.31,0,0,1-2.26,6.12c-1,1.94,7.1-11.6,10-17.41L415.38,280s-4.84,16.12-6.13,19-9.67,18.38-9.67,18.38,12.58-14.83,18.06-18.7,15.47-11.29,15.47-11.29S417,304.81,413.77,308s-12.58,14.51-12.58,14.51,16.12-10.32,17.09-11.29,12.58-8.38,12.58-8.38-23.41,18.49-24.51,19.67c-9.35,10-12.57,14.83-14.51,16.76A5.36,5.36,0,0,1,383.78,339.31Z" style="fill: rgb(94, 128, 183); transform-origin: 387.65px 305.878px;" id="elm9q0hwze9uh" class="animable"></path><path d="M394.91,367.58a59.52,59.52,0,0,0-5.93-8c-4.56-5.47-23.49-20.29-23.49-20.29s10.72,5.7,14.14,8.66,8,6.62,8,6.62-12.77-13.91-14.14-14.83,13,10.95,13,10.95-5.47-10.95-8.21-14.6-8-12.31-8-12.31,14.82,19.84,15.51,21l3.65,6.16-5.25-13.69,6.39,11.18s-9.12-18.93-9.58-19.84,6.39,8.89,6.39,8.89l-5.93-17.79,13.68,28.05-.91-10.94,2.51,11.4.68-28.05L399,348s2.5-17.79,3-21.43.68-7.53.68-7.53-.45,24.17-.45,24.86-.46,6.16-.46,6.16l4.34-13c.91-2.74,1.82-12.09,2.28-13.46s-2.28,21-2.51,21.89a25.67,25.67,0,0,1-1.6,4.34c-.68,1.37,5-8.21,7.07-12.32l5.93-11.86s-3.42,11.41-4.33,13.46-6.84,13-6.84,13,8.89-10.49,12.77-13.23,10.94-8,10.94-8-11.4,12.31-13.68,14.59-8.89,10.27-8.89,10.27,11.4-7.3,12.08-8,8.9-5.92,8.9-5.92-16.56,13.07-17.34,13.91c-6.61,7.07-8.89,10.49-10.26,11.86A3.8,3.8,0,0,1,394.91,367.58Z" style="fill: rgb(94, 128, 183); transform-origin: 397.655px 343.961px;" id="el1owkdivkm8aj" class="animable"></path><path d="M406.52,400.14a59.18,59.18,0,0,0-5.93-8c-4.56-5.48-23.49-20.3-23.49-20.3s10.72,5.7,14.14,8.67,8,6.61,8,6.61-12.77-13.91-14.14-14.82,13,10.94,13,10.94-5.47-10.94-8.21-14.59-8-12.32-8-12.32,14.82,19.84,15.51,21,3.64,6.16,3.64,6.16l-5.24-13.68L402.18,381s-9.12-18.93-9.57-19.84S399,370,399,370l-5.93-17.79,13.69,28.05-.92-10.95,2.51,11.4L409,352.7l1.59,27.83s2.51-17.79,3-21.44.68-7.53.68-7.53-.45,24.18-.45,24.86-.46,6.16-.46,6.16l4.33-13c.91-2.74,1.83-12.09,2.28-13.46s-2.28,21-2.51,21.9a25.77,25.77,0,0,1-1.59,4.33c-.69,1.37,5-8.21,7.07-12.31l5.93-11.86s-3.42,11.4-4.34,13.45-6.84,13-6.84,13,8.9-10.49,12.77-13.23,11-8,11-8S430,375.74,427.73,378s-8.9,10.26-8.9,10.26,11.41-7.3,12.09-8,8.89-5.93,8.89-5.93-16.55,13.08-17.33,13.91c-6.61,7.07-8.89,10.49-10.26,11.86A3.79,3.79,0,0,1,406.52,400.14Z" style="fill: rgb(94, 128, 183); transform-origin: 409.28px 376.486px;" id="eloz8m2kv917" class="animable"></path><path d="M418.23,482.26A78.73,78.73,0,0,0,421,461.37c0-1.33,0-2.65-.09-3.95a80.4,80.4,0,0,0-1.05-9.83c-.2-1.19-.43-2.36-.68-3.51-.21-.95-.44-1.89-.68-2.81A54.73,54.73,0,0,0,414,429.58H380.54a55.26,55.26,0,0,0-4.46,11.69c-.25.92-.47,1.86-.68,2.81-.26,1.15-.48,2.32-.69,3.51a80.43,80.43,0,0,0-1,9.83c-.07,1.3-.09,2.62-.09,3.95a78.32,78.32,0,0,0,2.72,20.89Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 397.31px 455.92px;" id="elmutbr7lonxg" class="animable"></path><path d="M418.45,441.27H376.08c-.25.92-.47,1.86-.68,2.81h43.73C418.92,443.13,418.69,442.19,418.45,441.27Zm1.36,6.32h-45.1a80.43,80.43,0,0,0-1,9.83h47.19A80.4,80.4,0,0,0,419.81,447.59Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 397.305px 449.345px;" id="elg2n2hpd0lvs" class="animable"></path></g><g id="freepik--Screen--inject-2" class="animable" style="transform-origin: 183.55px 160.1px;"><path d="M41.58,20H318.81a0,0,0,0,1,0,0v290.2a0,0,0,0,1,0,0H35.88a0,0,0,0,1,0,0V25.69a5.7,5.7,0,0,1,5.7-5.7Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 177.345px 165.095px;" id="elt2vqa2j8l1" class="animable"></path><path d="M50.16,10H325.72a5.5,5.5,0,0,1,5.5,5.5V301.62a0,0,0,0,1,0,0H44.66a0,0,0,0,1,0,0V15.5a5.5,5.5,0,0,1,5.5-5.5Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 187.94px 155.81px;" id="elfiizdodxh4m" class="animable"></path><path d="M50.16,10h63.19a5.5,5.5,0,0,1,5.5,5.5V301.62a0,0,0,0,1,0,0H44.66a0,0,0,0,1,0,0V15.5A5.5,5.5,0,0,1,50.16,10Z" style="fill: rgb(171, 171, 171); transform-origin: 81.755px 155.81px;" id="elj1l5z3263po" class="animable"></path><path d="M50.16,10H325.72a5.5,5.5,0,0,1,5.5,5.5V41.65a0,0,0,0,1,0,0H44.66a0,0,0,0,1,0,0V15.5A5.5,5.5,0,0,1,50.16,10Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 187.94px 25.825px;" id="elgiwkb7huc5v" class="animable"></path><path d="M50.16,10H325.72a5.5,5.5,0,0,1,5.5,5.5V30.42a0,0,0,0,1,0,0H44.66a0,0,0,0,1,0,0V15.5A5.5,5.5,0,0,1,50.16,10Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 187.94px 20.21px;" id="elq79uo02lgj9" class="animable"></path><path d="M292.7,20.83a4.36,4.36,0,1,0-4.36,4.36A4.37,4.37,0,0,0,292.7,20.83Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 288.34px 20.83px;" id="eloz5i0kitddj" class="animable"></path><path d="M309.42,20.83a4.36,4.36,0,1,0-4.36,4.36A4.37,4.37,0,0,0,309.42,20.83Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 305.06px 20.83px;" id="elclpp2jjlnns" class="animable"></path><path d="M326.15,20.83a4.37,4.37,0,1,0-4.37,4.36A4.37,4.37,0,0,0,326.15,20.83Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 321.78px 20.82px;" id="elbchmufs2tyt" class="animable"></path><line x1="140.63" y1="40.97" x2="140.63" y2="34.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 140.63px 37.565px;" id="elw3abi0pbk18" class="animable"></line><line x1="182.83" y1="40.97" x2="182.83" y2="34.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 182.83px 37.565px;" id="elprs3ysnb00r" class="animable"></line><line x1="225.04" y1="40.97" x2="225.04" y2="34.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 225.04px 37.565px;" id="elstfu6hg3h8" class="animable"></line><line x1="267.24" y1="40.97" x2="267.24" y2="34.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 267.24px 37.565px;" id="els4uhnb99gu" class="animable"></line><line x1="309.44" y1="40.97" x2="309.44" y2="34.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 309.44px 37.565px;" id="eld2ihfjffqi9" class="animable"></line><rect x="133.83" y="68" width="181.06" height="179.7" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 224.36px 157.85px;" id="elteiw4p0330g" class="animable"></rect><line x1="235.21" y1="113.24" x2="259.59" y2="113.24" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 247.4px 113.24px;" id="elqtfvnhyvya" class="animable"></line><line x1="235.21" y1="131.16" x2="259.59" y2="131.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 247.4px 131.16px;" id="el401ugctsfgw" class="animable"></line><line x1="235.21" y1="149.07" x2="259.59" y2="149.07" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 247.4px 149.07px;" id="elt6xj9fe9vh" class="animable"></line><line x1="188.43" y1="188.51" x2="200.32" y2="188.51" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 194.375px 188.51px;" id="elsr7wmuh71c8" class="animable"></line><line x1="160.66" y1="188.51" x2="185.72" y2="188.51" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 173.19px 188.51px;" id="elne5u53qi0b" class="animable"></line><line x1="148.8" y1="188.51" x2="157.27" y2="188.51" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 153.035px 188.51px;" id="elqgsw3t3s5tl" class="animable"></line><line x1="169.13" y1="194.02" x2="200.32" y2="194.02" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 184.725px 194.02px;" id="el9sewt47x60a" class="animable"></line><line x1="148.8" y1="194.02" x2="166.42" y2="194.02" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 157.61px 194.02px;" id="el0pc3mqzqitz" class="animable"></line><line x1="187.42" y1="199.52" x2="200.32" y2="199.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 193.87px 199.52px;" id="elb0fivwr1ysp" class="animable"></line><line x1="163.37" y1="199.52" x2="184.03" y2="199.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 173.7px 199.52px;" id="else9akdba5hn" class="animable"></line><line x1="148.8" y1="199.52" x2="160.32" y2="199.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 154.56px 199.52px;" id="eliggyv6t48bo" class="animable"></line><line x1="148.8" y1="205.02" x2="200.32" y2="205.02" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 174.56px 205.02px;" id="eljiugj01xx5" class="animable"></line><line x1="170.14" y1="210.52" x2="200.32" y2="210.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 185.23px 210.52px;" id="elih5cz4dmpql" class="animable"></line><line x1="148.8" y1="210.52" x2="166.42" y2="210.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 157.61px 210.52px;" id="eloretjonlzdg" class="animable"></line><line x1="191.48" y1="216.03" x2="200.32" y2="216.03" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 195.9px 216.03px;" id="elpixqqpuzelf" class="animable"></line><line x1="148.8" y1="216.03" x2="188.77" y2="216.03" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 168.785px 216.03px;" id="elhxca7jn1y0d" class="animable"></line><line x1="192.84" y1="221.53" x2="200.32" y2="221.53" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 196.58px 221.53px;" id="el5ml0p73na8x" class="animable"></line><line x1="162.35" y1="221.53" x2="190.81" y2="221.53" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 176.58px 221.53px;" id="elsxem691ff1t" class="animable"></line><line x1="148.8" y1="221.53" x2="160.32" y2="221.53" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 154.56px 221.53px;" id="elkqxwx2rbfzq" class="animable"></line><line x1="194.19" y1="227.03" x2="200.32" y2="227.03" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 197.255px 227.03px;" id="elfnuj14gxya6" class="animable"></line><line x1="173.87" y1="227.03" x2="190.47" y2="227.03" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 182.17px 227.03px;" id="elevaz6qglo2f" class="animable"></line><line x1="148.8" y1="227.03" x2="171.5" y2="227.03" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 160.15px 227.03px;" id="eluqt610hywi" class="animable"></line><line x1="295.89" y1="108.3" x2="304.84" y2="108.3" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 300.365px 108.3px;" id="el9aoleju12wh" class="animable"></line><line x1="274.97" y1="108.3" x2="293.85" y2="108.3" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 284.41px 108.3px;" id="el77257ikk8x" class="animable"></line><line x1="266.04" y1="108.3" x2="272.42" y2="108.3" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 269.23px 108.3px;" id="el1wjl38xq9hi" class="animable"></line><line x1="281.35" y1="114.78" x2="304.84" y2="114.78" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 293.095px 114.78px;" id="ela1piexttb6l" class="animable"></line><line x1="266.04" y1="114.78" x2="279.31" y2="114.78" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 272.675px 114.78px;" id="elxwabvhvpfn9" class="animable"></line><line x1="295.12" y1="121.26" x2="304.84" y2="121.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 299.98px 121.26px;" id="ely0c53rgf21j" class="animable"></line><line x1="277.01" y1="121.26" x2="292.57" y2="121.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 284.79px 121.26px;" id="elv9sul8eyofr" class="animable"></line><line x1="266.04" y1="121.26" x2="274.71" y2="121.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 270.375px 121.26px;" id="elyt9u43qdq6" class="animable"></line><line x1="266.04" y1="127.74" x2="304.84" y2="127.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 285.44px 127.74px;" id="elbfx4eqsgprw" class="animable"></line><line x1="282.11" y1="134.21" x2="304.84" y2="134.21" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 293.475px 134.21px;" id="elhr38cfb9qvl" class="animable"></line><line x1="266.04" y1="134.21" x2="279.31" y2="134.21" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 272.675px 134.21px;" id="elozvni3uvw1" class="animable"></line><line x1="298.18" y1="140.69" x2="304.84" y2="140.69" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 301.51px 140.69px;" id="eli7mit31w9n" class="animable"></line><line x1="266.04" y1="140.69" x2="296.14" y2="140.69" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 281.09px 140.69px;" id="el2j6035r01y9" class="animable"></line><line x1="299.2" y1="147.17" x2="304.84" y2="147.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 302.02px 147.17px;" id="eleu55yukc24" class="animable"></line><line x1="276.24" y1="147.17" x2="297.67" y2="147.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 286.955px 147.17px;" id="elmoxii2s95m" class="animable"></line><line x1="266.04" y1="147.17" x2="274.71" y2="147.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 270.375px 147.17px;" id="el4foj6g73i22" class="animable"></line><line x1="300.23" y1="153.65" x2="304.84" y2="153.65" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 302.535px 153.65px;" id="elyd40s2avml" class="animable"></line><line x1="284.92" y1="153.65" x2="297.42" y2="153.65" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 291.17px 153.65px;" id="elfdqg44xd4z" class="animable"></line><line x1="266.04" y1="153.65" x2="283.13" y2="153.65" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 274.585px 153.65px;" id="elpu8i6tjtck" class="animable"></line><path d="M175,160.38a28.33,28.33,0,0,1-13.67-3.52l3.72-6.73a20.55,20.55,0,0,0,27.5-28.66l6.56-4A28.23,28.23,0,0,1,175,160.38Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 182.279px 138.925px;" id="elmo8x11ltx6" class="animable"></path><path d="M161.32,156.86a28.24,28.24,0,0,1,8-52.38l1.52,7.54A20.55,20.55,0,0,0,165,150.13Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 158.792px 130.67px;" id="el550q36u0i13" class="animable"></path><path d="M192.54,121.47A20.43,20.43,0,0,0,175,111.61a20.83,20.83,0,0,0-4.11.41l-1.52-7.54a28.59,28.59,0,0,1,5.63-.56,28.05,28.05,0,0,1,24.11,13.55Z" style="fill: rgb(171, 171, 171); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 184.24px 112.695px;" id="elejl449ktfcf" class="animable"></path><rect x="221.77" y="108.76" width="8.46" height="8.46" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 226px 112.99px;" id="elsy9vtzwtagl" class="animable"></rect><rect x="221.77" y="126.93" width="8.46" height="8.46" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 226px 131.16px;" id="elnruimb1fp49" class="animable"></rect><rect x="221.77" y="145.09" width="8.46" height="8.46" style="fill: rgb(171, 171, 171); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 226px 149.32px;" id="elomxtto52qx" class="animable"></rect><rect x="219.33" y="195.02" width="12.51" height="33.51" style="fill: rgb(38, 50, 56); transform-origin: 225.585px 211.775px;" id="elknghum0jc5g" class="animable"></rect><rect x="235.84" y="180.01" width="12.51" height="48.52" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 242.095px 204.27px;" id="elku4km4imdpj" class="animable"></rect><rect x="252.35" y="202.52" width="12.51" height="26.01" style="fill: rgb(38, 50, 56); transform-origin: 258.605px 215.525px;" id="elrnhphnsq59" class="animable"></rect><rect x="268.85" y="187.01" width="12.51" height="41.52" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 275.105px 207.77px;" id="el20xrw1e4ujv" class="animable"></rect><rect x="285.36" y="173.51" width="12.51" height="55.02" style="fill: rgb(38, 50, 56); transform-origin: 291.615px 201.02px;" id="el2n1wwsa5lvy" class="animable"></rect><rect x="198.49" y="80.94" width="63.98" height="6.13" style="fill: rgb(38, 50, 56); transform-origin: 230.48px 84.005px;" id="elp22cplb7ge" class="animable"></rect><rect x="52.83" y="60.35" width="57.86" height="61.94" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 81.76px 91.32px;" id="elhgrs9kxl30t" class="animable"></rect><path d="M81.75,101.84a16.05,16.05,0,0,1-7.76-2L76.11,96A11.67,11.67,0,0,0,91.72,79.74l3.73-2.27a16,16,0,0,1-13.7,24.37Z" style="fill: rgb(94, 128, 183); transform-origin: 85.902px 89.6551px;" id="elqf51lmikb" class="animable"></path><path d="M74,99.83a16,16,0,0,1,4.57-29.74l.86,4.28A11.67,11.67,0,0,0,76.11,96Z" style="fill: rgb(38, 50, 56); transform-origin: 72.549px 84.96px;" id="elp1pky4nq3f" class="animable"></path><path d="M91.72,79.74a11.58,11.58,0,0,0-10-5.6,12.11,12.11,0,0,0-2.33.23l-.86-4.28a16.2,16.2,0,0,1,3.19-.32,15.94,15.94,0,0,1,13.7,7.7Z" style="fill: rgb(171, 171, 171); transform-origin: 86.975px 74.755px;" id="elabgv8imv90d" class="animable"></path><line x1="92.2" y1="107.41" x2="101.15" y2="107.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 96.675px 107.41px;" id="elvohjwj0aq3" class="animable"></line><line x1="71.28" y1="107.41" x2="90.16" y2="107.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 80.72px 107.41px;" id="el30mwqtaaekc" class="animable"></line><line x1="62.35" y1="107.41" x2="68.73" y2="107.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 65.54px 107.41px;" id="elt3bny691h1t" class="animable"></line><line x1="77.66" y1="110.46" x2="101.15" y2="110.46" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 89.405px 110.46px;" id="elmi5cba86irn" class="animable"></line><line x1="62.35" y1="110.46" x2="75.62" y2="110.46" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 68.985px 110.46px;" id="el8a4hucu87lh" class="animable"></line><line x1="91.44" y1="113.52" x2="101.15" y2="113.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 96.295px 113.52px;" id="el250hw1uei3v" class="animable"></line><line x1="73.32" y1="113.52" x2="88.89" y2="113.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 81.105px 113.52px;" id="elql43y4fadl" class="animable"></line><line x1="62.35" y1="113.52" x2="71.03" y2="113.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 66.69px 113.52px;" id="el4yjwb4r5od7" class="animable"></line><rect x="52.83" y="144.24" width="57.86" height="61.94" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 81.76px 175.21px;" id="elgzw5lnykk95" class="animable"></rect><line x1="93.32" y1="151.06" x2="104.13" y2="151.06" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 98.725px 151.06px;" id="elaek8q0moym" class="animable"></line><line x1="68.05" y1="151.06" x2="79.55" y2="151.06" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 73.8px 151.06px;" id="elhr11qygp21" class="animable"></line><line x1="57.27" y1="151.06" x2="64.97" y2="151.06" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 61.12px 151.06px;" id="elx7ypy3f0qv" class="animable"></line><line x1="75.76" y1="157.54" x2="79.37" y2="157.54" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 77.565px 157.54px;" id="elofda8xyyrm" class="animable"></line><line x1="57.27" y1="157.54" x2="73.29" y2="157.54" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 65.28px 157.54px;" id="eljrpyi41slhj" class="animable"></line><line x1="70.52" y1="164.02" x2="79.37" y2="164.02" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 74.945px 164.02px;" id="elnypk5muxru" class="animable"></line><line x1="57.27" y1="164.02" x2="67.74" y2="164.02" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 62.505px 164.02px;" id="elgrzeiuirvao" class="animable"></line><line x1="57.27" y1="170.5" x2="79.37" y2="170.5" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 68.32px 170.5px;" id="eldp33aywmic" class="animable"></line><line x1="76.68" y1="176.98" x2="104.13" y2="176.98" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 90.405px 176.98px;" id="el3j7rn4ecnfh" class="animable"></line><line x1="57.27" y1="176.98" x2="73.29" y2="176.98" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 65.28px 176.98px;" id="elv20gqiynuqb" class="animable"></line><line x1="96.09" y1="183.46" x2="104.13" y2="183.46" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 100.11px 183.46px;" id="elek1zr4k8wch" class="animable"></line><line x1="57.27" y1="183.46" x2="93.63" y2="183.46" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 75.45px 183.46px;" id="el3785rkccvau" class="animable"></line><line x1="97.33" y1="189.93" x2="104.13" y2="189.93" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 100.73px 189.93px;" id="el4y5vovbztte" class="animable"></line><line x1="69.59" y1="189.93" x2="95.48" y2="189.93" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 82.535px 189.93px;" id="elqt98uofdhi" class="animable"></line><line x1="57.27" y1="189.93" x2="67.74" y2="189.93" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 62.505px 189.93px;" id="el3l4pno5jb0f" class="animable"></line><line x1="98.56" y1="196.41" x2="104.13" y2="196.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 101.345px 196.41px;" id="elwgt8c4ugjl" class="animable"></line><line x1="80.07" y1="196.41" x2="95.17" y2="196.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 87.62px 196.41px;" id="elvsggwq2xrue" class="animable"></line><line x1="57.27" y1="196.41" x2="77.91" y2="196.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 67.59px 196.41px;" id="elu48ctflw73s" class="animable"></line><rect x="81.46" y="151.11" width="22.68" height="22.68" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 92.8px 162.45px;" id="elrtjndkjmc8" class="animable"></rect><polyline points="81.46 173.78 90.14 164.13 94.48 167.03 100.76 159.79 103.65 161.24" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 92.555px 166.785px;" id="elh8wu34yq5qi" class="animable"></polyline><circle cx="88.21" cy="157.38" r="3.38" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 88.21px 157.38px;" id="el08as2whbtqt5" class="animable"></circle><rect x="52.83" y="224.05" width="57.86" height="61.94" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 81.76px 255.02px;" id="elgri6db92kv" class="animable"></rect><line x1="78.11" y1="259.51" x2="100.84" y2="259.51" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 89.475px 259.51px;" id="el9z057cp6kbu" class="animable"></line><line x1="62.04" y1="259.51" x2="75.3" y2="259.51" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 68.67px 259.51px;" id="elv0hf6jgyin" class="animable"></line><line x1="94.18" y1="265.99" x2="100.84" y2="265.99" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 97.51px 265.99px;" id="el37xrkv4p78i" class="animable"></line><line x1="62.04" y1="265.99" x2="92.14" y2="265.99" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 77.09px 265.99px;" id="elkkx6w8q6lu" class="animable"></line><line x1="95.2" y1="272.47" x2="100.84" y2="272.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 98.02px 272.47px;" id="elj7mfdh8ukh" class="animable"></line><line x1="72.24" y1="272.47" x2="93.67" y2="272.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 82.955px 272.47px;" id="elch3s4dg2gu7" class="animable"></line><line x1="62.04" y1="272.47" x2="70.71" y2="272.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 66.375px 272.47px;" id="elwuznnlstqfg" class="animable"></line><line x1="96.22" y1="278.95" x2="100.84" y2="278.95" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 98.53px 278.95px;" id="eltnneoxu3x5" class="animable"></line><line x1="80.92" y1="278.95" x2="93.42" y2="278.95" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 87.17px 278.95px;" id="el94djhrb4igv" class="animable"></line><line x1="62.04" y1="278.95" x2="79.13" y2="278.95" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 70.585px 278.95px;" id="elj5pdzcqlkh8" class="animable"></line><rect x="62.33" y="240.66" width="6.13" height="14.84" style="fill: rgb(38, 50, 56); transform-origin: 65.395px 248.08px;" id="elyp93pt5o67r" class="animable"></rect><rect x="70.42" y="234.02" width="6.13" height="21.48" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 73.485px 244.76px;" id="elqi8o6y3ccj" class="animable"></rect><rect x="78.51" y="243.99" width="6.13" height="11.52" style="fill: rgb(38, 50, 56); transform-origin: 81.575px 249.75px;" id="el6t13v4a2lti" class="animable"></rect><rect x="86.59" y="237.12" width="6.13" height="18.38" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 89.655px 246.31px;" id="elek4mbf89yw" class="animable"></rect><rect x="94.68" y="231.14" width="6.13" height="24.36" style="fill: rgb(38, 50, 56); transform-origin: 97.745px 243.32px;" id="els48fq2o8ysg" class="animable"></rect></g><g id="freepik--Character--inject-2" class="animable" style="transform-origin: 235.047px 357.788px;"><path d="M263.92,482.26V366.1a7.62,7.62,0,0,0-7.54-7.71H126.92a7.63,7.63,0,0,0-7.54,7.71V482.26Z" style="fill: rgb(212, 212, 212); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 191.65px 420.325px;" id="el3x71c3g9b36" class="animable"></path><path d="M278.34,482.26V366.1a7.63,7.63,0,0,0-7.54-7.71H141.34a7.62,7.62,0,0,0-7.54,7.71V482.26Z" style="fill: rgb(212, 212, 212); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 206.07px 420.325px;" id="elq2uqff5fwi" class="animable"></path><path d="M350.71,482.26V426a5.87,5.87,0,0,0-5.8-5.93H271.77A5.86,5.86,0,0,0,266,426v56.3Z" style="fill: rgb(212, 212, 212); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 308.355px 451.185px;" id="elzszgtgd3g5" class="animable"></path><path d="M350.71,482.26V426.15a5.89,5.89,0,0,0-5.62-6.12H315.51a5.89,5.89,0,0,0-5.62,6.12v56.11Z" style="fill: rgb(212, 212, 212); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 330.3px 451.145px;" id="elsyf6ufw82tq" class="animable"></path><path d="M336.54,482.26c-13-8.31-43.94-28.44-50.31-35.87-8.11-9.46-9.8-12.5-16.22-12.16s-72,9.46-72,9.46a28.34,28.34,0,0,0-5.41,12.16c-.84,5.63,6,21.3,8.36,26.41Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 264.534px 458.232px;" id="elmdtr1828119" class="animable"></path><path d="M224.06,307.85c1,.06,20.27,2,28,5.41s24.33,7.77,29.74,10.14,8.44,5.06,9.12,12.16,7.1,33.45,8.11,37.84,2.7,23,.68,28.73-26,6.42-26,6.42-.34,9.12,1,14.19,4.73,13.18-6.42,15.2-68.59,14.2-72.65,11.49-2.36-23.65-2.36-28.72-5.07-15.54-5.07-15.54a89,89,0,0,0-14.19,4.73c-5.75,2.7-13.18,1.35-22.64-1.69S141.27,396.38,138.57,391s9.12-13.18,11.48-17.24,18.59-41.22,19.27-45.28,9.79-5.06,22-8.78C191.28,319.68,217.64,307.51,224.06,307.85Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 219.414px 378.832px;" id="el7w36xze9n05" class="animable"></path><path d="M210.57,437.93c8.81-9.66,30.3-32.13,45.87-39.42" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 233.505px 418.22px;" id="elr9hh58nqlsq" class="animable"></path><path d="M206.56,442.42s.86-1,2.4-2.7" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 207.76px 441.07px;" id="elpq6q3fnrg5" class="animable"></path><path d="M225.19,417.11c.9-.68,1.8-1.35,2.69-2" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 226.535px 416.11px;" id="elwcp5l4dgsb" class="animable"></path><path d="M208.27,432.19s5.92-6,12.87-11.84" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 214.705px 426.27px;" id="ellctnrmistbo" class="animable"></path><path d="M175.82,353.51c3,11.29,7.23,26.56,8.87,30.6,2.7,6.62,4.42,17.9,4.42,17.9" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 182.465px 377.76px;" id="el0cizsvvwd7s" class="animable"></path><path d="M172.44,340.72s1,3.75,2.39,9.08" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 173.635px 345.26px;" id="elmr1pv6pqbzs" class="animable"></path><path d="M170.6,366.74a14.47,14.47,0,0,0-4.78-2.24" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 168.21px 365.62px;" id="el5c7e995k1m4" class="animable"></path><path d="M163.07,372.14c3.69.79,8.15,2.39,10.59,5.6a105.08,105.08,0,0,1,6.38,9.07s.49-4.66-2.94-11.77a25.91,25.91,0,0,0-3.61-5.65" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 171.567px 378.1px;" id="elg2qsk51emin" class="animable"></path><path d="M157,371.37s.95,0,2.42.18" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 158.21px 371.46px;" id="elcqu9idqx6m7" class="animable"></path><path d="M151.11,377.49s8.83-4.16,17.41-.73" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 159.815px 376.447px;" id="elsbyivniemek" class="animable"></path><line x1="279.55" y1="350.23" x2="271.96" y2="403.97" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 275.755px 377.1px;" id="el1t8vp3pzph6" class="animable"></line><line x1="281.03" y1="339.74" x2="280.22" y2="345.52" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 280.625px 342.63px;" id="el7tlclnqg12h" class="animable"></line><path d="M292,373.17a20.16,20.16,0,0,1,5-2.05" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 294.5px 372.145px;" id="eluu7nsyy5epk" class="animable"></path><path d="M273.43,397.6s.74-5.64,8.09-15.2a35.44,35.44,0,0,1,8.32-7.91" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 281.635px 386.045px;" id="el1b3tfokqr9g" class="animable"></path><path d="M274.41,398.09s8.09-10.55,17.41-11.53" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 283.115px 392.325px;" id="el2p5acpv19cx" class="animable"></path><path d="M220,305.15s-5.74.34-7.1,3.38-1.35,29.06-1.35,29.06,19.6-7.44,22.3-7.44,23.66,8.11,23.66,8.11-2.71-18.92-7.44-26.35-12.84-7.1-15.54-7.1S220,305.15,220,305.15Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 234.53px 321.534px;" id="elczhas8ku5pm" class="animable"></path><path d="M214.93,302.78l1.35,7.1s17.24,33.11,19.26,30.75,12.17-29.4,12.17-29.4l.67-9.46s-8.11,5.41-12.84,5.41-19.26-7.78-19.26-7.78Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 231.655px 320.075px;" id="elvbk9ayj6rqh" class="animable"></path><path d="M248.38,301.77s-8.11,5.41-12.84,5.41-19.26-7.78-19.26-7.78l-1.35,3.38,1.35,7.1s3.89,7.47,8.19,15.06a15,15,0,0,0,2-.92C245.28,313.47,248.38,301.77,248.38,301.77Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 231.655px 312.17px;" id="elomcqueuoqy" class="animable"></path><path d="M207.38,276.94s-3.89-7.78-6.61-1.17,8.94,15.55,8.94,15.55Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 205.034px 282.214px;" id="elob5v0u9kw8j" class="animable"></path><path d="M253.07,275.2s3.68-7.59,5.63-.59-6,15.93-6,15.93Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 255.854px 281.092px;" id="elxez67mni789" class="animable"></path><path d="M206.6,275s2.73,20.61,4.28,24.11c1.33,3,13.51,13.49,17.07,16.52a3.45,3.45,0,0,0,2.25.82,47.57,47.57,0,0,0,6.79-.33c1.56-.39,12-10,14.32-15.46s1.56-36.93,1.56-36.93-1.17-20.6-3.5-23.32-31.49-2.73-38.88,1.16-7.38,10.5-6.22,14.39S206.6,275,206.6,275Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 228.346px 277.477px;" id="eltd73nd6gczg" class="animable"></path><path d="M239.77,233.82c-12.38-1.95-17.1,1.63-24.22,6.16a20.37,20.37,0,0,0-5.06,1.58c-7.38,3.89-7.38,10.5-6.22,14.39s2.33,19,2.33,19l2.73.39s.38-8.94.77-10.1,5.06-6.61,5.45-9.33-.39-10.5-.39-10.5,4.27,13.61,20.6,18.27a44.16,44.16,0,0,0,12,1.76c.21,2.23.59,4.34,1.27,4.85l1.55,1.17s-.39,5.44.78,6.6a3.13,3.13,0,0,0,1.66.83c.05-5.91,0-11.32-.07-13.79,7.37-1.05,6.27-3.78,6.5-7.08C259.79,252.62,254.54,236.16,239.77,233.82Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 231.585px 256.083px;" id="eluns5lz62tg8" class="animable"></path><path d="M226,291.27a8.3,8.3,0,0,0,4.33,3.43c2.71.72,5.6.9,8.66-3.79" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 232.495px 292.998px;" id="elnzf77pgb35b" class="animable"></path><path d="M221.67,297.94s3.43,4.15,10.83,3.79,10.1-3.42,10.1-3.42" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 232.135px 299.846px;" id="elne4oqejsq8" class="animable"></path><path d="M216.8,281.88a12,12,0,0,0,9.38.72" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 221.49px 282.556px;" id="elbwocoe8quqh" class="animable"></path><path d="M237.91,282.6a14.19,14.19,0,0,0,11-.18" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 243.41px 283.021px;" id="elh54pl3wgqwm" class="animable"></path><path d="M215.53,275.93s2.89-4.33,10.65-1.63" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 220.855px 274.672px;" id="elme7nei11xle" class="animable"></path><path d="M238.09,275.2a8.58,8.58,0,0,1,10.29.73" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 243.235px 274.877px;" id="elp0nzsq8ovho" class="animable"></path><path d="M226,285s-3.43,2.71-5.05,3.25" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 223.475px 286.625px;" id="elr29bhl15up" class="animable"></path><path d="M237.55,284.41s3.79,4,6.32,4.87" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 240.71px 286.845px;" id="elvvfy3c4bv7g" class="animable"></path><path d="M270.49,402.25s4.9-3.67,12.75-8.58,15.44-3.43,19.61,1.23,4.66,17.65-1.72,23.29-14.95,4.16-20.34,2.69-12-7.11-12.51-8.33S270.49,402.25,270.49,402.25Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 287.088px 406.423px;" id="elk4io7q9mtma" class="animable"></path><path d="M273.68,399.56s2.45-2.95,5.88-3.19,9.56,2.94,11,10.79-2,14.21-6.13,16.17-10.78.74-12.25-1.47a36.74,36.74,0,0,1-2.94-6.37Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 280.067px 410.335px;" id="elv3fvnn9e5k" class="animable"></path><path d="M269,391.22s-13.48-11-14.95-11.52-11.77,2.7-11.77,2.7l2.7,10.05s-1.23,1-5.15-2.45-6.37-8.09-7.84-6.62-2.21,4.41,1.22,8.09,8.09,8.58,10.54,12,9.56,5.15,9.56,5.15,1.72,3.18,8.34,6.37,16.91,5.15,16.91,5.15,7.11-7.85,4.41-14.71a8.85,8.85,0,0,0-9.31-5.88l-3.19-.74Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 257.17px 399.892px;" id="elr9l3izyyxe" class="animable"></path><path d="M250.8,377.53s-8-6.51-10.11-6.21-6.7,2.56-8.52,3.83-.19,3.74,2,3.65a29.41,29.41,0,0,0,5.12-.84l1.29-.71,5.83,9.11" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 241.093px 378.835px;" id="elrbryl6eh1a" class="animable"></path><line x1="240.58" y1="377.25" x2="243.71" y2="375.82" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 242.145px 376.535px;" id="eldslak3ciqo" class="animable"></line><path d="M260,377.05s-8-6.5-10.1-6.2-6.71,2.55-8.53,3.83-.19,3.73,2,3.65a29,29,0,0,0,5.12-.85l1.29-.7,5.82,9.1" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 250.293px 378.36px;" id="elz9u9tzxuxtn" class="animable"></path><line x1="249.78" y1="376.78" x2="252.91" y2="375.34" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 251.345px 376.06px;" id="elkm7sxdxt3m" class="animable"></line><path d="M267.3,383.62s-3.92-9.56-5.88-10.29-7.11-1-9.31-.74-2,3.19,0,4.17a29,29,0,0,0,4.9,1.71h1.47l.73,10.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 258.917px 380.877px;" id="elfdhxo1rkt8c" class="animable"></path><line x1="258.48" y1="378.47" x2="261.91" y2="378.72" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 260.195px 378.595px;" id="elk4jvsbqde1" class="animable"></line><path d="M269.51,400.78s2.21-11.76,1.72-13-4.66-6.62-5.89-6.62-3.67,2.45-2.69,4.9a4,4,0,0,0,2.94,2.7v6.86l-2.21,2.95" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 266.862px 390.97px;" id="el03quuph90t9q" class="animable"></path><polygon points="245.02 414.45 201.08 414.45 198.64 361.69 247.46 361.69 245.02 414.45" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 223.05px 388.07px;" id="el2ot288017bz" class="animable"></polygon><path d="M178.44,391.31s-17.23-12.5-18.92-13.17-11.15,3.37-16.56,7.43-5.07,8.11-3,13.18,10.13,11.49,13.18,13.85,17.57,1,17.57,1Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 158.502px 396.028px;" id="el6oj1mv3dk38" class="animable"></path><path d="M181.82,393s-3.72-5.4-5.41-5.74-6.76,3.38-9.46,6.76-5.41,12.5-5.41,17.23,8.11,6.08,9.46,6.08,3.38-4.05,5.75-5.4S181.82,393,181.82,393Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 171.68px 402.284px;" id="elnq5hgd0r7e" class="animable"></path><path d="M232.5,409.85s6.12,0,7.59-1,6.13-7.84,6.87-9.31-2.21-1.47-3.92,1.71-8.34,5.64-10,6.62a25.09,25.09,0,0,1-5.64,1.72Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 237.238px 404.22px;" id="eln1fpfti8t3k" class="animable"></path><path d="M178.44,391.31,203.11,394s4-11.49,5.74-11.83a58.76,58.76,0,0,0,10.47-4.73c1.36-1,3.72-2.37,2.37,1.35s-8.79,7.44-8.79,7.44,6.76,4.39,8.79,4.73,16.22-2.71,16.22-2.71,10.47-4,11.49-3.38-1.69,3.38-1.69,3.38,2-1.35,2.7.34-1.69,5.07-1.69,5.07,1,.67.34,3.38-9.8,10.13-11.83,11.49-12.84,1.69-19.93,1.69a116.27,116.27,0,0,1-15.55-1.36s-28.38,4.74-29.73,4.74S163.91,399.76,178.44,391.31Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 209.906px 394.973px;" id="elcw5rjeqdxc6" class="animable"></path><path d="M247.71,388.27s-13.18,10.14-14.87,10.14-11.83,2.7-11.83,2.7" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 234.36px 394.69px;" id="el1zeodd06dmw" class="animable"></path><path d="M248.72,393.68s-10.47,9.12-11.49,9.8-10.81,2.36-10.81,2.36" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 237.57px 399.76px;" id="elbvk46cbs0tr" class="animable"></path><path d="M342,482.26c-9.08-14.91-36.85-57.82-54.45-56.14-21.29,2-89.21,29.73-89.21,29.73L321.6,482.26Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 270.17px 454.166px;" id="elslm34mqhaf" class="animable"></path><path d="M190.93,482.26V426a5.87,5.87,0,0,0-5.8-5.93H141.68a5.87,5.87,0,0,0-5.8,5.93v56.3Z" style="fill: rgb(212, 212, 212); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 163.405px 451.185px;" id="eljmy3s4fls4a" class="animable"></path><path d="M205.12,482.26V426.15A5.89,5.89,0,0,0,199.5,420H169.92a5.89,5.89,0,0,0-5.62,6.12v56.11Z" style="fill: rgb(212, 212, 212); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 184.711px 451.13px;" id="elmyu0s8nb588" class="animable"></path></g><g id="freepik--Line--inject-2" class="animable" style="transform-origin: 253.76px 482.26px;"><line x1="54.95" y1="482.26" x2="29.1" y2="482.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 42.025px 482.26px;" id="eldgt7k06lymv" class="animable"></line><line x1="478.42" y1="482.26" x2="66.15" y2="482.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 272.285px 482.26px;" id="el8okwuxo6de3" class="animable"></line></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>

                </center>
            </div>
        </div>

        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">

                    <div class="table-responsive">

                        <table class="table table-striped table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-white " style="background: #5b80b7">Datos generales</th>
                                    @foreach ($data as $d)
                                        <th class="text-white text-center" style="background: #5b80b7">
                                            {{ \Carbon\Carbon::parse($d->created_at)->format('d') }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                            <tbody>

                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. Inicial
                                            °Brix</strong>
                                    </td>

                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_inicial }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Volumen Inicial
                                            (lts)</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->volumen_inicial }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Volume de Recargas
                                            (lts)</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->litros_recarga }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. de Recarga
                                            °Brix</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_recarga }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. Final
                                            °Brix</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_final }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Rango pH</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->ph }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Litros de
                                            concentrado(Lts/día)</strong></td>
                                    @foreach ($data as $d)
                                        <td class="text-center">
                                            {{ ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100 }}
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Total de concentrado
                                            acumulado</strong></td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $num1 += ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100 }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>
    <br>
    <!-- Datos Estadisticos -->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-5">

                @if ($data->count() == 0)
                    <center>

                    </center>
                @else
                    <div class="card ">
                        <div style="text-align: center" class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-bordered table-hover">
                                    <thead>

                                    </thead>
                                    <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                                    <tbody>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Días
                                                    totales</strong>
                                            </td>

                                            <td class="text-center">{{ $data->count() }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. Inicial
                                                    °Brix</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_con_ini, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Volumen Inicial
                                                    (lts)</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_vol_ini, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Volumen de
                                                    Recargas
                                                    (lts)</strong>
                                            </td>

                                            <td class="text-center">{{ $suma_vol_rec }}</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif


            </div>


            <div class="col-md-2">
            </div>

            <div class="col-md-5">

                @if ($data->count() == 0)
                    <center>

                    </center>
                @else
                    <div class="card ">
                        <div style="text-align: center" class="card-body ">

                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-bordered table-hover">
                                    <thead>

                                    </thead>
                                    <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                                    <tbody>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. de
                                                    Recarga
                                                    °Brix</strong></td>

                                            <td class="text-center">{{ round($prom_con_rec, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. Final
                                                    °Brix</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_con_fin, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>pH </strong>
                                            </td>

                                            <td class="text-center">{{ round($promedio_ph, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Litros de
                                                    Concentrado
                                                    (Lts/días)</strong>
                                            </td>

                                            <td class="text-center">{{ round($promedio_concentrado, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Total de
                                                    concentrado
                                                    acumulado</strong>
                                            </td>

                                            <td class="text-center">{{ $num1 }}</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>

    <?php
    $arr_espuma_aceite = [
        'Si' => 'red',
        'Sí' => 'red',
        'No' => 'green',
        'si' => 'red',
        'no' => 'green',
    ];

    $arr_aroma = [
        'Regular' => 'yellow',
        'Malo' => 'red',
        'Bueno' => 'green',
        'regular' => 'yellow',
        'malo' => 'red',
        'bueno' => 'green',
    ];
    ?>

    <br>

    <!-- Tabla comentarios -->
    <div class="col-md-12">
        @if ($data->count() == 0)
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">
                    <strong>Observaciones</strong>
                </div>
            </div>
            <div class="card ">
                <div style="text-align: center" class="card-body ">

                    <div id="columnas" class="table-responsive">
                        @foreach ($data as $da)
                            <table class="table table-bordered table-sm"
                                style="border: 2px solid rgb(119, 119, 119);">
                                <tbody>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Dia:</strong>
                                            {{ \Carbon\Carbon::parse($da->created_at)->format('d') }}
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" colspan="6"
                                            rowspan="2">{{ $da->comentarios }}</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);">
                                            <strong>Mes:</strong>{{ \Carbon\Carbon::parse($da->created_at)->format('m') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);" rowspan="2">
                                            <strong>Año:</strong>
                                            {{ \Carbon\Carbon::parse($da->created_at)->format('Y') }}
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Espuma</strong></td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_espuma_aceite[$da->exceso_espuma]; ?>">
                                            {{ $da->exceso_espuma }}</td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Mal olor</strong>
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_aroma[$da->aroma]; ?>">
                                            {{ $da->aroma }}</td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>A.Entramp.</strong>
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_espuma_aceite[$da->aceites_entrampados]; ?>">
                                            {{ $da->aceites_entrampados }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><strong>Técnico:</strong>
                                            {{ $da->usuarios->name ?? 'No existe' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>


        @endif
    </div>

    <br>
    <!-- Graficas 2 -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

            </center>
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">
                    <strong>Estado del soluble</strong>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_espuma"></div>
                        </figure>
                    </div>
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_olor"></div>
                        </figure>
                    </div>
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_entram"></div>
                        </figure>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>

</div>






<link rel="stylesheet" href="{{ asset('css/reportes.css') }}" />


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.addEventListener('data_vacia', function(e) {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: '¡Algo salió mal!',
            footer: '<strong style="color: #5e80b7"> No hay datos para mostrar </strong>',
            confirmButtonColor: '#5e80b7',
            confirmButtonText: 'Aceptar'
        })
    });
</script>

<script>
    Highcharts.chart('grafica', {

        title: {
            text: 'Estado general de la maquina'
        },



        yAxis: {
            title: {
                text: 'Concentración'
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 1 to 30 '
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: true
                },
                pointStart: 1
            }
        },

        series: [{
            name: 'Concentración Inicial',
            data: <?= $resul ?>
        }, {
            name: 'Minimo',
            data: <?= $resul3 ?>
        }, {
            name: 'Maximo',
            data: <?= $resul4 ?>
        }, {
            name: 'Concentración Final',
            data: <?= $resul2 ?>
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    Highcharts.chart('grafica_espuma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Espuma'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Espuma',
            innerSize: '50%',
            data: [
                ['Si', <?= $espuma_si ?>],
                ['', 0],
                ['No', <?= $espuma_no ?>],
            ]
        }]
    });

    Highcharts.chart('grafica_olor', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Mal olor'

        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Mal olor',
            innerSize: '50%',
            data: [
                ['Malo', <?= $olor_malo ?>],
                ['', 0],
                ['Regular', <?= $olor_regular ?>],
                ['Bueno', <?= $olor_bueno ?>],
            ]
        }]
    });

    Highcharts.chart('grafica_entram', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Aceite entrampado'

        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Aceite entrampado',
            innerSize: '50%',
            data: [

                ['Si', <?= $aceite_si ?>],
                ['', 0],
                ['No', <?= $aceite_no ?>],
            ]
        }]
    });
</script>
