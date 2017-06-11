@extends('main')

@section('title', 'Home')


@section('content')

  <div class="row text-center" style="margin-top: 30px">
    <img src="{{ url('img/profile.png') }}" alt="Work 'N' Hire" class="img-circle" width="20%">
  </div>
  <div class="row text-center" style="font-family: Arial Black; font-size: 60px; color: white">
    WORK 'N' HIRE
  </div>
  <div class="row text-center" style="font-family: Arial; font-size: 20px; color: white">
    <div class="col-md-8 col-md-offset-2">
      <hr class="style2" width="60%">
      <p>We Help</p>
      <p>Local Workers Like You </p>
      <p>Plumbers-Carpenters-Builders-Painters </p>
      <p>Actually Anybody That Want Our Help To Find A Job</p>
      <hr class="style2">
      <p>And</p>
      <p>Also We Help Those Who Seek For Any Kind Of Expert To Do Their Works</p>
    </div>
  </div>

  <div class="row" style="margin-top: 35px">
      <div class="col-md-6 text-center">
        <a href="{{ url('/')."/jobs" }}"><img src="{{ url('img/jobs.png') }}" alt="Find a Job" class="img-circle" width="250px"></a>
      </div>
      <div class="col-md-6 text-center">
        <a href="{{ url('/')."/mens" }}"><img src="{{ url('img/worker.png') }}" alt="Find a Worker" class="img-circle" width="250px"></a>
      </div>
  </div>
  <div class="row" style="color: white">
    <div class="col-md-6 text-center">
      <p>By clicking here you can find jobs <br>that are available right now.</p>
    </div>
    <div class="col-md-6 text-center">
          <p>By clicking here you can find workers <br>who are looking for a job.</p>
        </div>
    </div>
  </div>

  <hr id ="about" class="style2" width="60%">
  <div  class="row" style="margin-top: 50px; font-size: 18px">
    <div class="col-md-10 col-md-offset-1" style="color: white">
      <div class="row text-center" style="font-family: Arial Black; font-size: 40px; color: white">
        ABOUT
      </div>
      <p>
        Finding a proper labor/s or contractor for a task at reasonable price and exact time has always been a problem!!.
      </p>
      <p>
        And also those labors are always seeking for jobs because they should find new job after one. They always face the inconvenience of finding a suitable job at good payment. 
      </p>
      <p>
        We are creating this web and mobile based platform to fulfill the needs of both worker and client.
        The worker can maintain a profile which client can see their contact details, charging rates ,nearest city, capable fields of work as plumber, electrician , mason etc... So that customers easily search the nearest worker to them. 
      </p>
      <p>
        If the clients cannot find the proper service provider then they can post an advertisement looking for a worker or contractor. Then the workers can bid for task and client can offer them the job. After finishing a job, clients can rate the worker so that they can find the better performing worker.
      </p>
      <p>
        In Sri Lanka the percentage of  casual and and temporary employees are 4.0 and 8.6 of the total labor-force of the country. overall it is 1,035,023 in number. 
      </p>
      <p>
        So our ambition is to reach  to you and make the connection between clients and workers.
      </p>
    </div>
    
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
@endsection