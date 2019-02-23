@extends('layouts.master')
@section('content')
@include('header')  
    <div id="table">
        <div class= "popPizzas-table" id="left-col">
        <form action="/popOrder" method="post" accept-charset="utf-8">
         {{ csrf_field() }}
    	    

            <br> 
            <br> 
            <br> 

            </form>
        </div>

        <div class= "popPizzas-table" id="right-col">
        <form action="/popOrder" method="post" accept-charset="utf-8">
         {{ csrf_field() }}
    	  

             <br> 


             </form>
        </div>

        <div class= "popPizzas-table" id="left-col">
        <form action="/popOrder" method="post" accept-charset="utf-8">
         {{ csrf_field() }}
    	   
    
             <br> 


            </form>
        </div>

        <div class= "popPizzas-table" id="right-col">
        <form action="/popOrder" method="post" accept-charset="utf-8">
         {{ csrf_field() }}

             <br> 


             </form>


        </div>
    </div>
@endsection