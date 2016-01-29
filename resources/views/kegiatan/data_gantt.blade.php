<?php header('Content-Type: application/javascript'); ?>

var demo_tasks = {
    "data" : [
        @foreach($kegiatan as $k)
        {
            "id": "{{ $k->parent==NULL?('1000'.$k->id):$k->id }}",
            "text": "<a href='{{ URL::to(($k->parent!=NULL?'pekerjaan':'kegiatan').'/detail/'.$k->id) }}' class='link'>{{ $k->text }}</a>",
            "start_date": "{{ $k->start_date }}",
            "duration": "{{ $k->duration }}",
            "progress": {{ $k->progress }},
            "target": 100,
            {!! ($k->parent==NULL)?'type:gantt.config.types.project,':'' !!}
            {!! ($k->parent!==NULL)?('"parent":1000'.$k->parent.','):'' !!}
            {!! ($k->open!==NULL)?('"open":true'):'' !!}
        },
        @endforeach
    ]
}