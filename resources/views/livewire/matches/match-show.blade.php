
<div>

    @if(!is_null($data))
        <div class="tab-content">
            <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                <div class="row">
                    <div class="col-lg-12 col-12 mb-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="text-muted text-small mb-2">Наименование турнира:</p>
                                <p class="mb-3">{{$data->tournaments->title}}</p>
                                <p class="text-muted text-small mb-2">Этап турнира:</p>
                                <p class="mb-3">{{$data->steps->title}}</p>
                                <p class="text-muted text-small mb-2">Команда 1:</p>
                                <p class="mb-3">{{$data->teams1->title}}</p>
                                <p class="text-muted text-small mb-2">Команда 2:</p>
                                <p class="mb-3">{{$data->teams2->title}}</p>
                                <p class="text-muted text-small mb-2">Победитель:</p>
                                <p class="mb-3">{{$str = $data->winner == null ? $data->winners->title : "Неизвестно"}}</p>
                                <p class="text-muted text-small mb-2">Начало:</p>
                                <p class="mb-3">{{$data->start}}</p>
                                <p class="text-muted text-small mb-2">Результат:</p>
                                <p class="mb-3">{{$data->result}}</p>
                                <p class="text-muted text-small mb-2">Информация о матче:</p>
                                <p class="mb-3">
                                    {{$data->info}}
                                </p>

                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    @endif
</div>
