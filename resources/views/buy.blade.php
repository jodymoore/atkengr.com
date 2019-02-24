@extends('layouts.master')

@section('content')

@include('header')

<h2 id="prevOrders">Buy</h2>
    <div id="reOrder-container">
         
                    <div id="reOrder">
                        <form action="/reorder_submit" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}

                        </form>
                    </div>

   </div>
   
@endsection