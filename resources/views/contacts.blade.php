@extends('layouts.app')

@section('title','Contacts')

@section('content')
    <div class="container-fluid contacts-container">
        <div class="row slide-bottom">
            <div class="col-md-6 d-flex justify-content-center">
                <contact-component name='Ahmad Aljehny' 
                    contact1='0994988772' contact2='@facebook'
                    contact3='مركز الجهني للتبغ GOT' >
                </contact-component>
            </div>
        </div>
    </div>
@endsection