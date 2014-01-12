@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('users._sidebar')
@stop

@section('content')
<section class="user-content">

    <div class="header">
        <h1>Notifications</h1>
    </div>
    <div class="threads">
    </div>
    @each('dashboard._message', $notifications, 'notification')
</section>
@stop