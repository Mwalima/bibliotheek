<!doctype html>
<html>
<head>
    @include('partials.head')
    @include('partials.nav')
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2 class="text-uppercase">Boeken overzicht</h2>

                                <div class="row">
                                    <div class="col-sm-6">
                                        @foreach ($boeken as $boek)
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="card-img-top" src="img/{{$boek->afbeelding}}" alt="Card image cap">
                                                <h5 class="card-title">Titel: {{$boek->auteur}}</p></li>
                                                    <li> <p class="item-intro text-muted">Omschrijving: {{$boek->titel}}</p></li>
                                                </h5>
                                                <p class="card-text">
                                                    <li>
                                                <p class="item-intro text-muted">Omschrijving: {{$boek->omschrijving}}</p>
                                                </li>
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <div>
    @include('partials.footer')
</div>
</body>
</html>