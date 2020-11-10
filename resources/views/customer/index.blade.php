@extends('layout')

<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <br>
            <h1>Job Requiter</h1>
        </div>

        <form action="customer" method="post" class="pb-5">
            <div class="row">
                <div class="col-12">
                    <p><a href="customer/create"> Add New Recruiter</a></p>
                    <hr>
                </div>
            </div>



            <div class="row">

                <div class="col-2">
                    <h5>ID</h5> </div>
                <div class="col-2">
                    <h5>Recquiter Name</h5>
                    </div>
                <div class="col-2">
                    <h5>Given Link</h5>
                </div>
    
                <div class="col-2">
                    <h5>Sector Name</h5>
                    </div>
                <div class="col-2">
                    <h5>Active/Inactive</h5>
                </div>
    
            </div>
        <div class="row">
            </div>
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1">
                @foreach($customer as $customer)
                    <div class="row">

                        <div class="col-2">
                            {{ $customer->id }}
                        </div>
                        <div class="col-2">
                           
                            <a href="/customer/{{$customer->id}}">{{$customer->name}}</a></div>
                        <div class="col-2">
                            <a href="{{$customer->link}}">****</a></div>

                        <div class="col-2">
                            {{$customer->catagory->name}}</div>
                        <div class="col-2">
                            {{$customer->active}}</div>

                    </div>
                @endforeach
            </div>
        </div>

    </div>
  
</section>
