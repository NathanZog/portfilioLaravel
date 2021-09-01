<!-- ======= Services Section ======= -->
<section id="services" class="services">
            <div class="container">
@foreach($service as $data)
                <div class="section-title">
                    <h2>Services</h2>
                    <p>{{$data->description}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="icofont-computer"></i></div>
                        <h4 class="title"><a href="">{{$data->subtitle1}}</a></h4>
                        <p class="description">{{$data->sub1description}}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                        <h4 class="title"><a href="">{{$data->subtitle2}}</a></h4>
                        <p class="description">{{$data->sub2description}}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="icofont-earth"></i></div>
                        <h4 class="title"><a href="">{{$data->subtitle3}}</a></h4>
                        <p class="description">{{$data->sub3description}}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="icofont-image"></i></div>
                        <h4 class="title"><a href="">{{$data->subtitle4}}</a></h4>
                        <p class="description">{{$data->sub4description}}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="icofont-settings"></i></div>
                        <h4 class="title"><a href="">{{$data->subtitle5}}</a></h4>
                        <p class="description">{{$data->sub5description}}</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class="icofont-tasks-alt"></i></div>
                        <h4 class="title"><a href="">{{$data->subtitle6}}</a></h4>
                        <p class="description">{{$data->sub6description}}</p>
                    </div>
                </div>
@endforeach
            </div>
        </section><!-- End Services Section -->