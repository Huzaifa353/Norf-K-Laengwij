@extends('user/layout')

@section('title', 'Help')

@section('content')
<div class="faq-section">
    <div class="row faq-row">
        <div class="col-md-6 mt-5">
            <span class="faq-heading">Do you want <span class="help">Help?</span></span><br>
            <span class="faq-text">We are here to entertain your query</span>
            <div class="card faq-card">
                <div class="card-header text-center text-header">
                    Write your query here
                </div>
                <div class="card-body faq-card-body">
                    <blockquote class="blockquote mb-0">
                        <span class="faq-text2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                            posuere erat a ante. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                            eligendi et cupiditate autem unde odit sapiente nam libero dolorem tenetur quos
                            voluptates accusamus optio, error itaque maiores debitis nemo ipsa?</span>
                        <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> -->
                    </blockquote>
                </div>
            </div>
            <div class="QNA-section pb-5">

                <span class="FAQ">FAQ's</span><br>
                <span class="QNA">Can't update my biography</span><br>
                <span class="QNA">Question2</span><br>
                <span class="QNA">Question3</span><br>
                <span class="QNA">Question4</span><br>
            </div>
        </div>
        <div class="col-md-6 col-12 ">
            <img src={{ asset('img/ex-mark.png') }} width="75px" height="75px" class="img-fluid ex-markk">

            <img src={{ asset('img/q-mark.png') }} width="215px" height="215px" class="img-fluid q-markk">
        </div>
    </div>
</div>
@endsection