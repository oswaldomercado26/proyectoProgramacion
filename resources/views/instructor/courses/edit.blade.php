<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="folt-bold text-lg mb-4">Edicion del curso</h1>

            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="">Informacion del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Leccion del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Metas del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Estudiantes del curso</a>
                </li>
            </ul>
        </aside>
        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold ">INFORMACION DEL CURSO</h1>
                <hr class="mb-6 mt-2">

                {!! Form::model($course, ['route' => ['instructor.courses.update', $course],'method'=>'put','files'=>'true']) !!}

                   @include('instructor.courses.partials.form')
                    <div class="flex justify-end">
                        {!! Form::submit('Actualizar informacion', ['class' =>'btn btn-primary']) !!}

                    </div>

                {!! Form::close() !!}

            </div>

        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
       <script src="{{asset('js/instructor/courses/form.js')}}"> </script>
    </x-slot>
</x-app-layout>