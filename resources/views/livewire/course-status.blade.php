<div class="mt-8">
    <div class="container grid grid-cols-3 gap-8">
        <div class="col-span-2">
            {{--mostrar video--}}
            {!!$current->iframe!!}
            {{$current->name}}
            <p>Indice: {{$this->index}}</p>
            <p>Previous: @if ($this->previous)
                {{$this->previous->id}}
            @endif</p>
            <p>Next: @if ($this->next)
                {{$this->next->id}}
            @endif</p>
        </div>
        <div class="card">
            <div class="card-body">
                <h1>{{$course->title}}</h1>
                <div class="flex items-center">
                    <figure>
                        <img src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>
                    <div>
                        <p>{{$course->teacher->name}}</p>
                        <a class="text-blue-500" href="">{{'@'.Str::slug($course->teacher->name,'')}}</a>
                   S </div>

                </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li>
                            <a class="font-bold" href="">{{$section->name}}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                <li>
                                    <a wire:click="changeLesson({{$lesson}})" class="cursor-pointer">{{$lesson->id}}@if($lesson->completed)
                                       completado
                                        @endif
                                    </a>
                                </li>
                                    
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
</div>
