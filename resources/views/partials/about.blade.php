<!-- ======= About Section ======= -->
<section id="about" class="about">
            <div class="container">
@foreach($about as $data)
                <div class="section-title">
                    <h2>About</h2>
                    <p>{{$data->description}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>{{$data->qualification}}</h3>
                        <p class="font-italic">
                        {{$data->description2}}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$data->birthday}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$data->siteweb}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$data->phone}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$data->city}}</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$data->age}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$data->degree}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$data->email}}</li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$data->status}}</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                        {{$data->description3}}
                        </p>
                    </div>
                </div>
@endforeach
            </div>
        </section><!-- End About Section -->