@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img crossorigin="anonymous" src="https://media.licdn.com/dms/image/v2/C4E0BAQGLKj3JHcof0w/company-logo_200_200/company-logo_200_200/0/1630639684997/free_code_camp_logo?e=1741824000&v=beta&t=YSxxwqS6EoTPjSffDqQVWFRjbwIEfGEhPXA_oc5N_SA" class="rounded-circle">
        </div> 
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="ps-5"><strong>153</strong> posts</div>
                <div class="ps-5"><strong>23k</strong> followers</div>
                <div class="ps-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://media.licdn.com/dms/image/v2/D5610AQGhrJPf1XP-eA/image-shrink_800/image-shrink_800/0/1733504598235?e=1734116400&v=beta&t=k1zfy6N-zXiPGSEwEnTnppb-Pqc0CNOnp-FLRJYpt2I" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://media.licdn.com/dms/image/v2/D5610AQF_aKVvohhAGA/image-shrink_800/image-shrink_800/0/1733490142161?e=1734116400&v=beta&t=T1eHX78X_7XwmZMQbVHJI7svlpkP79sLQy6YFEZMR9o" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://media.licdn.com/dms/image/v2/D5610AQE8I1T4XuHVQw/image-shrink_800/image-shrink_800/0/1733475691127?e=1734116400&v=beta&t=zlf7QQCbyhYLGzJjRme2ka9S0RPkJzOC2IrQ5FnfIcU" class="w-100">
        </div>
    </div>
</div>
@endsection
