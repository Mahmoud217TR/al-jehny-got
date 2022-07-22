@extends('layouts.app')

@section('title','About')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold mb-3">About {{ config('app.name') }}</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dicta dolor laborum neque tempore explicabo omnis fuga eligendi exercitationem dolores nemo libero ex, molestias excepturi commodi! Inventore vel laboriosam aperiam excepturi deleniti quisquam labore asperiores voluptatem rem, enim quos laudantium optio dolore maiores. Officiis itaque expedita reprehenderit asperiores mollitia soluta nesciunt porro facilis maiores commodi ducimus, placeat qui, autem blanditiis! Quaerat inventore in vitae praesentium aut quisquam debitis fuga, aperiam rem facilis animi iste sequi labore laboriosam dignissimos? Tempore, unde? Quisquam, sequi repellendus! Ratione autem error a perferendis voluptatum distinctio pariatur quos cumque. Minima optio quidem nihil voluptates facere ipsa?
                </p>
            </div>
            <div class="col-md-4 offset-md-2">
                <img src="{{ asset('images/about.svg') }}" style="width:100%" alt="about">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4144.214204904986!2d35.91615439562092!3d35.43976228845533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x18e0863cc98dbdf6!2z2YXYsdmD2LIg2KfZhNis2YfZhtmKIEdPVA!5e1!3m2!1sen!2sbe!4v1658375961084!5m2!1sen!2sbe" style="width: 100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection