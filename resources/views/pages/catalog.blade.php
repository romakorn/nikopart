@extends('layouts.app')

@section('content')
    <section class="container-fluid content">
        <div class="row">
            <div class="col-lg-2">
                <div class="catalog-panel">
                    Фильтровать по:
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src=".../100px180/" alt="Фото">
                            <div class="card-body">
                                <h5 class="card-title">Товар 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src=".../100px180/" alt="Фото">
                            <div class="card-body">
                                <h5 class="card-title">Товар 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src=".../100px180/" alt="Фото">
                            <div class="card-body">
                                <h5 class="card-title">Товар 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src=".../100px180/" alt="Фото">
                            <div class="card-body">
                                <h5 class="card-title">Товар 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="p-t-15" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection