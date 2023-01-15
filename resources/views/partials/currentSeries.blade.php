<section id="current-series">
    <div class="container">
        <h2 class="section-title">CURRENT SERIES</h2>
        <div class="row gy-3 px-3 pt-3">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="ms-card">
                    <div class="box-square">
                        <img class="img-fluid ms-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <h4 class="img-title">{{ strtoupper($comic['title']) }}</h4>
                </div>
            </div>
            @endforeach
            <div class="btn-box">
                <button class="ms-btn ms-btn-primary">LOAD MORE</button>
            </div>
        </div>
    </div>

</section>