@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-full text-center fade-in">
            <h1>Benvenuto in <span class="dc-text">DC-UNIVERSE</span></h1>
        </div>
        <div class="col-6 fade-in-left">
            <h2 class="dc-text">Lorem DC</h2>
            <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus ex ipsam placeat unde dignissimos asperiores obcaecati officia expedita molestias eligendi fuga quisquam, totam quas iure velit tenetur quod ducimus vel!
                Reprehenderit error ab maiores explicabo nobis expedita mollitia illo tenetur veniam! Dolore asperiores excepturi sint illum nesciunt dicta accusamus magni. Iusto aliquam quod, perferendis earum sed neque fuga repellendus id?
            </p>
            <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nesciunt, quas error quaerat dolores officiis ea cumque labore nulla praesentium, quisquam laudantium eaque fugiat omnis vitae dolore quia vero expedita?
                Eius nostrum ducimus amet corporis? Praesentium molestiae, quod velit ipsam doloribus illo provident repudiandae dolores, labore suscipit culpa ad laboriosam sit magnam incidunt necessitatibus neque beatae exercitationem consequatur rerum eos!
            </p>
            <p class="mt-2">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi quo est dignissimos neque fugiat quia temporibus, provident rerum accusantium amet maxime corrupti impedit molestias. Culpa at nam sed cupiditate reiciendis.
                Nulla reprehenderit maiores nemo dicta iure magni voluptatum debitis explicabo, placeat architecto aliquam, quae ad voluptate asperiores ducimus! Molestias fugiat quos fugit consequatur laboriosam laudantium cum deserunt officia esse cumque.
                Incidunt nam iste a pariatur debitis sit accusantium eius, ipsa veritatis, consequuntur molestiae, iusto fuga dolores error quisquam numquam nesciunt at tempora laborum fugiat alias! Tempore fuga dolores veritatis sint?
            </p>
        </div>
        <div class="col-6">
            <img src="{{ asset('images/dc-heroes.png')}}" alt="dc-heroes" class="img-fluid fade-in-right">
        </div>
    </div>
</div>
@endsection