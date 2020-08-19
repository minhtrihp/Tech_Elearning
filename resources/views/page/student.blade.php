<nav class="navbar navbar-expand-sm justify-content-center">
      <ul class="navbar-nav">
            <li class="nav-item px-2">
            <a class="nav-link" href="../public/news">News</a>
            </li>
            <li class="nav-item px-2">
            <a class="nav-link" href="../public/courses">Coures</a>
            </li>
            <li class="nav-item px-2">
            <a class="nav-link" href="#">Contact</a>
            </li>
      </ul>
</nav>
<br/>

<div id="hotnews">
      <div>
            <h3 class="pb-2 text-danger" style="display: inline-block;">Hot news</h3>
            <span class="float-right" style="margin-right: 200px"><a href="admin/news/them">Add news</a></span>
      </div>
      @foreach($news as $ns)
      <ul class="list-group">
       
           <a href="#" style="text-decoration: none;" class="mt-3">
                  <li class="list-group-item justify-content-between align-items-center" style="height:220px;width:80% ; overflow:hidden;">
                        <span class="badge badge-danger badge-pill float-right p-1">Hot news</span>
                      <div class="col-md-5" style="float: left;">
                              <a href="detail.html">
                                  <img width="305px" height="190px" class="img-responsive" src="upload/khoahoc/{{$ns->picture}}" alt="">
                              </a>
                          </div>

                          <div class="col-md-7" style="float: left;">
                              <h3>{{$ns->name}}</h3>
                              <p>{{$ns->describe}}</p>
                              <a class="btn btn-primary" href="news/{{$ns->news_id}}/{{$ns->name}}.html" style="margin-top: 10px">Đọc thêm<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                  </li>
            </a>
            
     
      </ul>
      @endforeach
</div> 

<div class="row" style="height: 100px;"></div>

<div id="newcourses">
      <div>
            <h3 class="pb-2 text-danger" style="display: inline-block;">Hot Course</h3>
            
      </div>
      <ul class="list-group">
      <div class="row justify-content-between">
           @foreach($topic as $tp)
                      <div class="col-4">
                        <?php
                      $data = $tp->course->take(1);
                      $khoahoc1 = $data->shift();
                      ?>
                      
                        <a href="" style="text-decoration: none;" class="text-primary">
                          <div class="list-group-item justify-content-between align-items-center m-1" style="height: 370px;  background-color: lightgrey;border-radius: 7px;">
                            <p style="border:1px solid #80808060"><img width="298px" height="220px" src="upload/khoahoc/{{$khoahoc1['picture']}}"></p>
                            <h3 style="color: black;margin-bottom: 4px;font-weight: bold; ">{{$khoahoc1['name']}}</h3>
                            <div class="ml-3" style="font-size: 12.5px; color: black; padding: 0px 5px; margin-bottom: 4px;">{{$khoahoc1['describe']}}</div>
                            
                            <a class="btn btn-primary" style="margin-left: 98px; font-size: 15px;font-weight: 600" href="courses/{{$khoahoc1['course_id']}}/{{$khoahoc1['name']}}.html">THAM GIA</a>
                           
                          </div>
                        </a>
                      </div>
                    @endforeach
      </div>
</div>

