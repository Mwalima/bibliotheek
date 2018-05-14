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
                            @foreach ($boeken as $boek)
                                <li> <img class="img-fluid d-block mx-auto" src="img/{{$boek->Afbeelding}}" alt="Afbeelding"></li>
                            <li> <p class="item-intro text-muted">Auteur: {{$boek->Auteur}}</p></li>
                            <li> <p class="item-intro text-muted">Titel: {{$boek->Titel}}</p></li>
                            <li> <p class="item-intro text-muted">Omschrijving: {{$boek->Omschrijving}}</p></li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div>
    @include('partials.footer')
</div>
</body>
</html>