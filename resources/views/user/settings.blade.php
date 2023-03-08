@extends('user/layout')

@section('title', 'Settings')

@section('content')
<div class="profilee-section">
    <div class="row profile-row">
        <div class="col-md-4 mt-5">
            <div class="d-flex">
                <img src={{ asset('img/bu-pic.jpg') }} width="90" height="90" class="rounded-circle img-fluid profile-img">
            </div>
            <div class="p-form ">

                <div class="mt-4">
                    <span class="profile-form-label">First Name</span>
                    <span class="edit-btn1">Edit</span>
                    <hr width="54%">
                </div>
                <div class="mt-4">
                    <span class="profile-form-label">Last Name</span>
                    <span class="edit-btn1">Edit</span>
                    <hr width="54%">
                </div>
                <div class="mt-4">
                    <span class="profile-form-label">Email</span>
                    <span class="edit-btn2">Edit</span>
                    <hr width="54%">
                </div>
                <div class="mt-4">
                    <span class="profile-form-label">Country</span>
                    <span class="edit-btn3">Edit</span>
                    <hr width="54%">
                </div>
                <div class="mt-4">
                    <span class="profile-form-label">Bio</span>
                    <span class="edit-btn4">Edit</span>
                    <hr width="54%">

                </div>
                <div class="mt-4">
                    <span class="profile-form-label">Language</span>
                    <span class="edit-btn5">Edit</span>
                    <hr width="54%">

                </div>
                <button type="button" class="btn p-btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="col-md-4 pass-section mt-5">
            <span class="pass-setting">Password Setting</span>
            <span class="arrow-down"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg></span>
            <br>
            <div class="mt-4">

                <span class="profile-form-label">Old Password</span>
                <span class="edit-btn5">Edit</span>
                <hr width="67.2%">
            </div>
            <div class="mt-5">

                <span class="profile-form-label">New Password</span>
                <span class="edit-btn5">Edit</span>
                <hr width="68.2%">
            </div>
            <button type="button" class="btn mt-3 save-btn btn-primary">Save</button>
        <br>
            <span class="pass-setting">Delete Account</span>
            <span class="arrow-down"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg></span>
            <br>
            <div class="mt-4">

                <span class="profile-form-label">Enter Password</span>
                <span class="edit-btn5">Edit</span>
                <hr width="70%">
            </div>
            <button type="button" class="btn mt-3 dlt-btn btn-primary">Delete Account</button>


        </div>
        <div class="col-md-4 ">
            <div class="confirm-password">

                <span class="profile-form-label">Confirm Password</span>
                <span class="edit-btn5">Edit</span>
                <hr width="74%">
            </div>
        </div>


    </div>
</div>
@endsection